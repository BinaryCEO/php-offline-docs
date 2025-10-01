<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imap_open - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imap-open.php">
 <link rel="shorturl" href="https://www.php.net/imap-open">
 <link rel="alternate" href="https://www.php.net/imap-open" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.imap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imap-num-recent.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imap-ping.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imap-open.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imap-open.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imap-open.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imap-open.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imap-open.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imap-open.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imap-open.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imap-open.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imap-open.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imap-open.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imap-open.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Open an IMAP stream to a mailbox" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imap_open - Manual" />
<meta name="twitter:description" content="Open an IMAP stream to a mailbox" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imap_open - Manual" />
<meta itemprop="description" content="Open an IMAP stream to a mailbox" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Open an IMAP stream to a mailbox" />

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
        <a href="function.imap-ping.php">
          imap_ping &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imap-num-recent.php">
          &laquo; imap_num_recent        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.mail.php'>Mail Related Extensions</a></li>      <li><a href='book.imap.php'>IMAP</a></li>      <li><a href='ref.imap.php'>IMAP Functions</a></li>      </ul>
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
            <option value='en/function.imap-open.php' selected="selected">English</option>
            <option value='de/function.imap-open.php'>German</option>
            <option value='es/function.imap-open.php'>Spanish</option>
            <option value='fr/function.imap-open.php'>French</option>
            <option value='it/function.imap-open.php'>Italian</option>
            <option value='ja/function.imap-open.php'>Japanese</option>
            <option value='pt_BR/function.imap-open.php'>Brazilian Portuguese</option>
            <option value='ru/function.imap-open.php'>Russian</option>
            <option value='tr/function.imap-open.php'>Turkish</option>
            <option value='uk/function.imap-open.php'>Ukrainian</option>
            <option value='zh/function.imap-open.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imap-open" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imap_open</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imap_open</span> &mdash; <span class="dc-title">Open an <abbr title="Internet Message Access Protocol">IMAP</abbr> stream to a mailbox</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imap-open-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imap_open</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$mailbox</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$user</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$password</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$retries</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span><br>): <span class="type"><span class="type"><a href="class.imap-connection.php" class="type IMAP\Connection">IMAP\Connection</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Opens an <abbr title="Internet Message Access Protocol">IMAP</abbr> stream to a <code class="parameter">mailbox</code>.
  </p>
  <p class="para">
   This function can also be used to open streams to <abbr title="Post Office Protocol version 3">POP3</abbr> and
   <abbr title="Network News Transfer Protocol">NNTP</abbr> servers, but some functions and features are only
   available on <abbr title="Internet Message Access Protocol">IMAP</abbr> servers.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imap-open-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">mailbox</code></dt>
     <dd>
      <p class="para">
       A mailbox name consists of a server and a mailbox path on this server.
       The special name <code class="literal">INBOX</code> stands for the current users
       personal mailbox. Mailbox names that contain international characters
       besides those in the printable ASCII space have to be encoded with
       <span class="function"><a href="function.imap-utf7-encode.php" class="function">imap_utf7_encode()</a></span>.
      </p>
      <div class="warning"><strong class="warning">Warning</strong><p class="simpara">
Passing untrusted data to this parameter is <em>insecure</em>, unless
<a href="imap.configuration.php#ini.imap.enable-insecure-rsh" class="link">imap.enable_insecure_rsh</a> is disabled.
</p></div>
      <p class="para">
       The server part, which is enclosed in &#039;{&#039; and &#039;}&#039;, consists of the servers
       name or ip address, an optional port (prefixed by &#039;:&#039;), and an optional
       protocol specification (prefixed by &#039;/&#039;). 
      </p>
      <p class="para">
       The server part is mandatory in all mailbox
       parameters. 
      </p>
      <p class="para">
       All names which start with <code class="literal">{</code> are remote names, and are
       in the form <code class="literal">&quot;{&quot; remote_system_name [&quot;:&quot; port] [flags] &quot;}&quot;
       [mailbox_name]</code> where:
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          <code class="literal">remote_system_name</code> - Internet domain name or
          bracketed IP address of server.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <code class="literal">port</code> - optional TCP port number, default is the
          default port for that service
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <code class="literal">flags</code> - optional flags, see following table.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <code class="literal">mailbox_name</code> - remote mailbox name, default is INBOX
         </span>
        </li>
       </ul>
      </p>
      <p class="para">
       <table class="doctable table">
        <caption><strong>Optional flags for names</strong></caption>
        
         <thead>
          <tr>
           <th>Flag</th>
           <th>Description</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td><code class="literal">/service=</code><em>service</em></td>
           <td>mailbox access service, default is &quot;imap&quot;</td>
          </tr>

          <tr>
           <td><code class="literal">/user=</code><em>user</em></td>
           <td>remote user name for login on the server</td>
          </tr>

          <tr>
           <td><code class="literal">/authuser=</code><em>user</em></td>
           <td>remote authentication user; if specified this is the user name
            whose password is used (e.g. administrator)</td>
          </tr>

          <tr>
           <td><code class="literal">/anonymous</code></td>
           <td>remote access as anonymous user</td>
          </tr>

          <tr>
           <td><code class="literal">/debug</code></td>
           <td>record protocol telemetry in application&#039;s debug log</td>
          </tr>

          <tr>
           <td><code class="literal">/secure</code></td>
           <td>do not transmit a plaintext password over the network</td>
          </tr>

          <tr>
           <td><code class="literal">/imap</code>, <code class="literal">/imap2</code>,
            <code class="literal">/imap2bis</code>, <code class="literal">/imap4</code>,
            <code class="literal">/imap4rev1</code></td>
           <td>equivalent to <code class="literal">/service=imap</code></td>
          </tr>

          <tr>
           <td><code class="literal">/pop3</code></td>
           <td>equivalent to <code class="literal">/service=pop3</code></td>
          </tr>

          <tr>
           <td><code class="literal">/nntp</code></td>
           <td>equivalent to <code class="literal">/service=nntp</code></td>
          </tr>

          <tr>
           <td><code class="literal">/norsh</code></td>
           <td>do not use rsh or ssh to establish a preauthenticated IMAP
            session</td>
          </tr>

          <tr>
           <td><code class="literal">/ssl</code></td>
           <td>use the <code class="literal">Secure Socket Layer</code> to encrypt the session</td>
          </tr>

          <tr>
           <td><code class="literal">/validate-cert</code></td>
           <td>validate certificates from TLS/SSL server (this is the default
            behavior)</td>
          </tr>

          <tr>
           <td><code class="literal">/novalidate-cert</code></td>
           <td>do not validate certificates from TLS/SSL server, needed if
            server uses self-signed certificates</td>
          </tr>

          <tr>
           <td><code class="literal">/tls</code></td>
           <td>force use of <code class="literal">start-TLS</code> to encrypt the session, and reject
            connection to servers that do not support it</td>
          </tr>

          <tr>
           <td><code class="literal">/notls</code></td>
           <td>do not do <code class="literal">start-TLS</code> to encrypt the session, even with servers
            that support it</td>
          </tr>

          <tr>
           <td><code class="literal">/readonly</code></td>
           <td>request read-only mailbox open (IMAP only; ignored on NNTP, and
            an error with SMTP and POP3)</td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
    
     <dt><code class="parameter">user</code></dt>
     <dd>
      <p class="para">
       The user name
      </p>
     </dd>
    
    
     <dt><code class="parameter">password</code></dt>
     <dd>
      <p class="para">
       The password associated with the <code class="parameter">user</code>
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">flags</code> are a bit mask with one or more of
       the following:
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="imap.constants.php#constant.op-readonly">OP_READONLY</a></code></strong> - Open mailbox read-only
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="imap.constants.php#constant.op-anonymous">OP_ANONYMOUS</a></code></strong> - Don&#039;t use or update a
          <var class="filename">.newsrc</var> for news (NNTP only)
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="imap.constants.php#constant.op-halfopen">OP_HALFOPEN</a></code></strong> - For <abbr title="Internet Message Access Protocol">IMAP</abbr>
          and <abbr title="Network News Transfer Protocol">NNTP</abbr> names, open a connection but
          don&#039;t open a mailbox.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="imap.constants.php#constant.cl-expunge">CL_EXPUNGE</a></code></strong> - Expunge mailbox automatically upon mailbox close
          (see also <span class="function"><a href="function.imap-delete.php" class="function">imap_delete()</a></span> and
          <span class="function"><a href="function.imap-expunge.php" class="function">imap_expunge()</a></span>)
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="imap.constants.php#constant.op-debug">OP_DEBUG</a></code></strong> - Debug protocol negotiations
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="imap.constants.php#constant.op-shortcache">OP_SHORTCACHE</a></code></strong> - Short (<code class="literal">elt</code>-only) caching
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="imap.constants.php#constant.op-silent">OP_SILENT</a></code></strong> - Don&#039;t pass up events (internal use)
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="imap.constants.php#constant.op-prototype">OP_PROTOTYPE</a></code></strong> - Return driver prototype
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="imap.constants.php#constant.op-secure">OP_SECURE</a></code></strong> - Don&#039;t do non-secure authentication
         </span>
        </li>
       </ul>
      </p>
     </dd>
    
    
     <dt><code class="parameter">retries</code></dt>
     <dd>
      <p class="para">
       Number of maximum connect attempts
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       Connection parameters, the following (string) keys maybe used 
       to set one or more connection parameters:
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          <code class="literal">DISABLE_AUTHENTICATOR</code> - Disable authentication properties
         </span>
        </li>
       </ul>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imap-open-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an <span class="classname"><a href="class.imap-connection.php" class="classname">IMAP\Connection</a></span> instance on success, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imap-open-changelog">
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
       Returns an <span class="classname"><a href="class.imap-connection.php" class="classname">IMAP\Connection</a></span> instance now;
       previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.imap-open-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3241">
    <p><strong>Example #1 Different use of <span class="function"><strong>imap_open()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// To connect to an IMAP server running on port 143 on the local machine,<br />// do the following:<br /></span><span style="color: #0000BB">$mbox </span><span style="color: #007700">= </span><span style="color: #0000BB">imap_open</span><span style="color: #007700">(</span><span style="color: #DD0000">"{localhost:143}INBOX"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user_id"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// To connect to a POP3 server on port 110 on the local server, use:<br /></span><span style="color: #0000BB">$mbox </span><span style="color: #007700">= </span><span style="color: #0000BB">imap_open </span><span style="color: #007700">(</span><span style="color: #DD0000">"{localhost:110/pop3}INBOX"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user_id"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// To connect to an SSL IMAP or POP3 server, add /ssl after the protocol<br />// specification:<br /></span><span style="color: #0000BB">$mbox </span><span style="color: #007700">= </span><span style="color: #0000BB">imap_open </span><span style="color: #007700">(</span><span style="color: #DD0000">"{localhost:993/imap/ssl}INBOX"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user_id"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// To connect to an SSL IMAP or POP3 server with a self-signed certificate,<br />// add /ssl/novalidate-cert after the protocol specification:<br /></span><span style="color: #0000BB">$mbox </span><span style="color: #007700">= </span><span style="color: #0000BB">imap_open </span><span style="color: #007700">(</span><span style="color: #DD0000">"{localhost:995/pop3/ssl/novalidate-cert}"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user_id"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// To connect to an NNTP server on port 119 on the local server, use:<br /></span><span style="color: #0000BB">$nntp </span><span style="color: #007700">= </span><span style="color: #0000BB">imap_open </span><span style="color: #007700">(</span><span style="color: #DD0000">"{localhost:119/nntp}comp.test"</span><span style="color: #007700">, </span><span style="color: #DD0000">""</span><span style="color: #007700">, </span><span style="color: #DD0000">""</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// To connect to a remote server replace "localhost" with the name or the<br />// IP address of the server you want to connect to.<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-3242">
    <p><strong>Example #2 <span class="function"><strong>imap_open()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$mbox </span><span style="color: #007700">= </span><span style="color: #0000BB">imap_open</span><span style="color: #007700">(</span><span style="color: #DD0000">"{imap.example.org:143}"</span><span style="color: #007700">, </span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"&lt;h1&gt;Mailboxes&lt;/h1&gt;\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$folders </span><span style="color: #007700">= </span><span style="color: #0000BB">imap_listmailbox</span><span style="color: #007700">(</span><span style="color: #0000BB">$mbox</span><span style="color: #007700">, </span><span style="color: #DD0000">"{imap.example.org:143}"</span><span style="color: #007700">, </span><span style="color: #DD0000">"*"</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">$folders </span><span style="color: #007700">== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Call failed&lt;br /&gt;\n"</span><span style="color: #007700">;<br />} else {<br />    foreach (</span><span style="color: #0000BB">$folders </span><span style="color: #007700">as </span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />        echo </span><span style="color: #0000BB">$val </span><span style="color: #007700">. </span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br />echo </span><span style="color: #DD0000">"&lt;h1&gt;Headers in INBOX&lt;/h1&gt;\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$headers </span><span style="color: #007700">= </span><span style="color: #0000BB">imap_headers</span><span style="color: #007700">(</span><span style="color: #0000BB">$mbox</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">$headers </span><span style="color: #007700">== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Call failed&lt;br /&gt;\n"</span><span style="color: #007700">;<br />} else {<br />    foreach (</span><span style="color: #0000BB">$headers </span><span style="color: #007700">as </span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />        echo </span><span style="color: #0000BB">$val </span><span style="color: #007700">. </span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">imap_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$mbox</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imap-open-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.imap-close.php" class="function" rel="rdfs-seeAlso">imap_close()</a> - Close an IMAP stream</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/imap/functions/imap-open.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imap-open%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imap-open&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imap-open.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="127159">  <div class="votes">
    <div id="Vu127159">
    <a href="/manual/vote-note.php?id=127159&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127159">
    <a href="/manual/vote-note.php?id=127159&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127159" title="75% like this...">
    28
    </div>
  </div>
  <a href="#127159" class="name">
  <strong class="user"><em>php at dsgvoseidank dot de</em></strong></a><a class="genanchor" href="#127159"> &para;</a><div class="date" title="2022-06-08 12:15"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127159">
<div class="phpcode"><code><span class="html">Google dropped the support of user/password authentication as of 30 may 2022.<br />imap_open can not be used anymore, without the support of xoauth2.<br /><a href="https://support.google.com/accounts/answer/6010255" rel="nofollow" target="_blank">https://support.google.com/accounts/answer/6010255</a><br /><br />There is a ToDo from 2020 that didn't make it.<br /><a href="https://wiki.php.net/todo/ext/imap/xoauth2" rel="nofollow" target="_blank">https://wiki.php.net/todo/ext/imap/xoauth2</a><br /><br />The only way is to switch to a third party lib. "php-imap"<br />This is so sad.</span></code></div>
  </div>
 </div>
  <div class="note" id="127545">  <div class="votes">
    <div id="Vu127545">
    <a href="/manual/vote-note.php?id=127545&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127545">
    <a href="/manual/vote-note.php?id=127545&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127545" title="90% like this...">
    9
    </div>
  </div>
  <a href="#127545" class="name">
  <strong class="user"><em>neekToO</em></strong></a><a class="genanchor" href="#127545"> &para;</a><div class="date" title="2022-08-27 11:55"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127545">
<div class="phpcode"><code><span class="html">To reply to "dsgvoseidank" saying it doesnt work anymore with Gmail :<br /><br />As today 26 august 2022 it is still working but you need to use google parameters to generate a password for your app on a 2FA account</span></code></div>
  </div>
 </div>
  <div class="note" id="95959">  <div class="votes">
    <div id="Vu95959">
    <a href="/manual/vote-note.php?id=95959&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95959">
    <a href="/manual/vote-note.php?id=95959&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95959" title="69% like this...">
    13
    </div>
  </div>
  <a href="#95959" class="name">
  <strong class="user"><em>kay at rrr dot de</em></strong></a><a class="genanchor" href="#95959"> &para;</a><div class="date" title="2010-01-31 08:16"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95959">
<div class="phpcode"><code><span class="html">imap_open is very simple to use, but struggles a litte bit on setups with ssl and tls.<br /><br />this are tested examples for different hosts and protocols.<br /><br />uncomment the host/protocol line and fill in correct username and password.<br /><br />Kay<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">#######<br /># localhost pop3 with and without ssl<br /># $authhost="{localhost:995/pop3/ssl/novalidate-cert}";<br /># $authhost="{localhost:110/pop3/notls}";<br /><br /># localhost imap with and without ssl<br /># $authhost="{localhost:993/imap/ssl/novalidate-cert}";<br /># $authhost="{localhost:143/imap/notls}";<br /># $user="localuser";<br /><br /># localhost nntp with and without ssl<br /># you have to specify an existing group, control.cancel should exist<br /># $authhost="{localhost:563/nntp/ssl/novalidate-cert}control.cancel";<br /># $authhost="{localhost:119/nntp/notls}control.cancel";<br /><br />######<br /># web.de pop3 without ssl<br /># $authhost="{pop3.web.de:110/pop3/notls}";<br /># $user="kay.marquardt@web.de";<br /><br />#########<br /># goggle with pop3 or imap<br /># $authhost="{pop.gmail.com:995/pop3/ssl/novalidate-cert}";<br /># $authhost="{imap.gmail.com:993/imap/ssl/novalidate-cert}";<br /># $user="username@gmail.com";<br /><br /></span><span class="default">$user</span><span class="keyword">=</span><span class="string">"username like above"</span><span class="keyword">;<br /></span><span class="default">$pass</span><span class="keyword">=</span><span class="string">"yourpass"</span><span class="keyword">;<br /><br />if (</span><span class="default">$mbox</span><span class="keyword">=</span><span class="default">imap_open</span><span class="keyword">( </span><span class="default">$authhost</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">, </span><span class="default">$pass </span><span class="keyword">))<br />        {<br />         echo </span><span class="string">"&lt;h1&gt;Connected&lt;/h1&gt;\n"</span><span class="keyword">;<br />         </span><span class="default">imap_close</span><span class="keyword">(</span><span class="default">$mbox</span><span class="keyword">);<br />        } else<br />        {<br />         echo </span><span class="string">"&lt;h1&gt;FAIL!&lt;/h1&gt;\n"</span><span class="keyword">;<br />        }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114099">  <div class="votes">
    <div id="Vu114099">
    <a href="/manual/vote-note.php?id=114099&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114099">
    <a href="/manual/vote-note.php?id=114099&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114099" title="65% like this...">
    12
    </div>
  </div>
  <a href="#114099" class="name">
  <strong class="user"><em>jeff at newscloud dot com</em></strong></a><a class="genanchor" href="#114099"> &para;</a><div class="date" title="2014-01-10 06:35"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114099">
<div class="phpcode"><code><span class="html">One of the issues with gmail IMAP SSL authentication is related to Google's account security.<br /><br />Once you get the login error once, sign out of all your google accounts. Then, visit this link:<br /><a href="http://www.google.com/accounts/DisplayUnlockCaptcha" rel="nofollow" target="_blank">http://www.google.com/accounts/DisplayUnlockCaptcha</a><br /><br />Log in with the account you're attempting to access via imap.<br /><br />Follow the steps and you'll then be able to login in to gmail with php imap.<br /><br />It's visually shown here:<br /><a href="http://jeffreifman.com/filtered-open-source-imap-mail-filtering-software-for-php/configuring-gmail/" rel="nofollow" target="_blank">http://jeffreifman.com/filtered-open-source-imap-mail-filtering-software-for-php/configuring-gmail/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="100827">  <div class="votes">
    <div id="Vu100827">
    <a href="/manual/vote-note.php?id=100827&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100827">
    <a href="/manual/vote-note.php?id=100827&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100827" title="56% like this...">
    13
    </div>
  </div>
  <a href="#100827" class="name">
  <strong class="user"><em>guilherme dot geronimo at gmail dot com</em></strong></a><a class="genanchor" href="#100827"> &para;</a><div class="date" title="2010-11-09 05:23"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100827">
<div class="phpcode"><code><span class="html">Using: 
<br /><span class="default">&lt;?php
<br />imap_open</span><span class="keyword">( </span><span class="string">"{server.example.com:143}INBOX" </span><span class="keyword">, </span><span class="string">'login' </span><span class="keyword">, </span><span class="string">'password' </span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Got this error:
<br />"Couldn't open stream {server.example.com:143}INBOX" 
<br />
<br />Solved by adding the flag "novalidate-cert":
<br /><span class="default">&lt;?php
<br />imap_open</span><span class="keyword">( </span><span class="string">"{server.example.com:143/novalidate-cert}INBOX" </span><span class="keyword">, </span><span class="string">'login' </span><span class="keyword">, </span><span class="string">'password' </span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />=D</span></code></div>
  </div>
 </div>
  <div class="note" id="115637">  <div class="votes">
    <div id="Vu115637">
    <a href="/manual/vote-note.php?id=115637&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115637">
    <a href="/manual/vote-note.php?id=115637&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115637" title="65% like this...">
    6
    </div>
  </div>
  <a href="#115637" class="name">
  <strong class="user"><em>hashampel at yahoo dot de</em></strong></a><a class="genanchor" href="#115637"> &para;</a><div class="date" title="2014-08-29 08:15"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115637">
<div class="phpcode"><code><span class="html">Subfolders of INBOX have to be seperate by dot like this: 'INBOX.test'<br />$mailbox = '{example.example.com:143/imap/novalidate-cert}INBOX.test'</span></code></div>
  </div>
 </div>
  <div class="note" id="120790">  <div class="votes">
    <div id="Vu120790">
    <a href="/manual/vote-note.php?id=120790&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120790">
    <a href="/manual/vote-note.php?id=120790&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120790" title="66% like this...">
    4
    </div>
  </div>
  <a href="#120790" class="name">
  <strong class="user"><em>dominic_mayers at yahoo dot com</em></strong></a><a class="genanchor" href="#120790"> &para;</a><div class="date" title="2017-03-11 07:02"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120790">
<div class="phpcode"><code><span class="html">This code demonstrates features that are not well documented at this time. The main feature is that the selected mailbox in imap_open (or reopen)  and the specified mailbox in other imap functions are unrelated.  It has been tested with Gmail and with a Dovecot IMAP server.  The mailbox separator depends on the server. Gmail: "/"  Dovecot: "."  If you want to test with Gmail, you need to turn on "Access for less secure apps" in your account.<br /> <br /><span class="default">&lt;?php<br />  </span><span class="comment">// Change these.<br />  </span><span class="default">$server    </span><span class="keyword">= </span><span class="string">"{imap.gmail.com:993/imap/ssl/novalidate-cert}"</span><span class="keyword">; <br />  </span><span class="default">$email     </span><span class="keyword">= </span><span class="string">"example@gmail.com"</span><span class="keyword">; <br />  </span><span class="default">$password  </span><span class="keyword">= </span><span class="string">"password"</span><span class="keyword">;<br /> <br />  </span><span class="comment">// The code assumes that the folders Test/Sub1/Sub11, etc. exist. <br />  </span><span class="default">$selected  </span><span class="keyword">= </span><span class="string">"</span><span class="keyword">{</span><span class="default">$server</span><span class="keyword">}</span><span class="string">Test/Sub1/Sub12"</span><span class="keyword">;<br />  </span><span class="default">$conn      </span><span class="keyword">= </span><span class="default">imap_open</span><span class="keyword">(</span><span class="default">$selected</span><span class="keyword">, </span><span class="default">$email </span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">);<br /><br />  </span><span class="comment">// This returns the $specified mailbox and its sub mailboxes, <br />  // even if the $specified mailbox is outside the $selected mailbox. <br />  </span><span class="default">$specified </span><span class="keyword">=  </span><span class="string">"</span><span class="keyword">{</span><span class="default">$server</span><span class="keyword">}</span><span class="string">Test/Sub1"</span><span class="keyword">; <br />  </span><span class="default">$boxes     </span><span class="keyword">= </span><span class="default">imap_list</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$specified </span><span class="keyword">, </span><span class="string">'*'</span><span class="keyword">);<br />  </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$boxes</span><span class="keyword">);<br />  <br />  </span><span class="comment">// This appends the message in the $specified mailbox. <br />  // It ignores the $selected mailbox. <br />  </span><span class="default">imap_append</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$specified<br />                     </span><span class="keyword">, </span><span class="string">"From: me@example.com\r\n"<br />                     </span><span class="keyword">. </span><span class="string">"To: you@example.com\r\n"<br />                     </span><span class="keyword">. </span><span class="string">"Subject: test\r\n"<br />                     </span><span class="keyword">. </span><span class="string">"\r\n"<br />                     </span><span class="keyword">. </span><span class="string">"this is a test message, please ignore\r\n"</span><span class="keyword">);<br /><br />  </span><span class="comment">// This changes the $selected mailbox<br />  </span><span class="default">$selected </span><span class="keyword">= </span><span class="string">"</span><span class="keyword">{</span><span class="default">$server</span><span class="keyword">}</span><span class="string">Test/Sub1"</span><span class="keyword">; <br />  </span><span class="default">imap_reopen</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$selected</span><span class="keyword">); <br /><br />  </span><span class="comment">// This moves a message from the $selected to the $specified mailbox<br />  // In this case, the specified mailbox does not include the server. <br />  </span><span class="default">imap_mail_move </span><span class="keyword">(</span><span class="default">$conn </span><span class="keyword">, </span><span class="string">"1" </span><span class="keyword">,  </span><span class="string">"Test"</span><span class="keyword">); <br />  </span><span class="default">imap_expunge</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">); <br />  </span><span class="default">imap_close</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);<br />  </span><span class="comment">// If you executed this code with a real IMAP server, <br />  // the message is now in the Test mailbox !<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115130">  <div class="votes">
    <div id="Vu115130">
    <a href="/manual/vote-note.php?id=115130&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115130">
    <a href="/manual/vote-note.php?id=115130&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115130" title="64% like this...">
    4
    </div>
  </div>
  <a href="#115130" class="name">
  <strong class="user"><em>me at achronos dot ca</em></strong></a><a class="genanchor" href="#115130"> &para;</a><div class="date" title="2014-06-01 02:09"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115130">
<div class="phpcode"><code><span class="html">Do not bother using "/debug" flag in $mailbox or OP_DEBUG in $options. They do not do anything.<br /><br />When you set either one, the underlying IMAP c-client library will gather protocol debugging data and pass it back to PHP.<br />However, the debug handler defined by PHP is an empty function, it doesn't do anything.<br /><br />So unless you're using a customized version of the IMAP extension that does something with that handler (mm_dlog), there is no point using "/debug" or OP_DEBUG.</span></code></div>
  </div>
 </div>
  <div class="note" id="123354">  <div class="votes">
    <div id="Vu123354">
    <a href="/manual/vote-note.php?id=123354&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123354">
    <a href="/manual/vote-note.php?id=123354&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123354" title="66% like this...">
    1
    </div>
  </div>
  <a href="#123354" class="name">
  <strong class="user"><em>LANGE.LUDO</em></strong></a><a class="genanchor" href="#123354"> &para;</a><div class="date" title="2018-11-18 07:35"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123354">
<div class="phpcode"><code><span class="html">If you get Kerberos errors like:<br />« Notice: Unknown: Kerberos error: Credentials cache file '/tmp/krb5cc_0123' not found (try running kinit) ».<br /><br />Try to add as a $param:<br /><span class="default">&lt;?php </span><span class="keyword">array(</span><span class="string">'DISABLE_AUTHENTICATOR' </span><span class="keyword">=&gt; </span><span class="string">'GSSAPI'</span><span class="keyword">) </span><span class="default">?&gt;<br /></span><br />eg.<br /><span class="default">&lt;?php<br />$imap_stream </span><span class="keyword">= </span><span class="default">imap_open</span><span class="keyword">(</span><span class="string">'{mail.domain.tld:993/imap/ssl}' </span><span class="keyword">, </span><span class="string">'username' </span><span class="keyword">, </span><span class="string">'password'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, array(</span><span class="string">'DISABLE_AUTHENTICATOR' </span><span class="keyword">=&gt; </span><span class="string">'GSSAPI'</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116466">  <div class="votes">
    <div id="Vu116466">
    <a href="/manual/vote-note.php?id=116466&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116466">
    <a href="/manual/vote-note.php?id=116466&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116466" title="66% like this...">
    1
    </div>
  </div>
  <a href="#116466" class="name">
  <strong class="user"><em>Lisboa</em></strong></a><a class="genanchor" href="#116466"> &para;</a><div class="date" title="2015-01-07 01:57"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116466">
<div class="phpcode"><code><span class="html">The error: Unknown: Mailbox is empty (errflg=1) in Unknown on line 0<br />appears when:<br /><br />1)  use imap_open to connect <br />2) then use imap_search ALL to retrieve emails<br /><br />but there are no messages available. To avoid this error, check first the number of messages in a mailbox using imap_status. Only if there are messages available then you can use the imap_search.</span></code></div>
  </div>
 </div>
  <div class="note" id="122255">  <div class="votes">
    <div id="Vu122255">
    <a href="/manual/vote-note.php?id=122255&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122255">
    <a href="/manual/vote-note.php?id=122255&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122255" title="62% like this...">
    2
    </div>
  </div>
  <a href="#122255" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#122255"> &para;</a><div class="date" title="2018-01-11 06:28"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122255">
<div class="phpcode"><code><span class="html">Function to test most of the possible options of a connection:<br /><br />function imapConfig($options, $i=0, $till = array()) {<br />        if(sizeof($options)==$i)<br />            return $till;<br />        <br />        if(sizeof($till)==0)<br />            $till[] = '';<br />        <br />        $opt = $options[$i];<br />        $new = array();<br />        foreach($till as $t) {<br />            foreach($opt as $o) {<br />                if(strlen($o)==0)<br />                    $new[] = $t;<br />                else<br />                    $new[] = $t.'/'.$o;<br />            }<br />        }<br />        return imapConfig($options, $i+1, $new);<br />    }<br /><br />function imap_test($server, $port, $dir, $username, $passw) {<br />        $options = array();<br />        //$options[] = array('debug');<br />        $options[] = array('imap', 'imap2', 'imap2bis', 'imap4', 'imap4rev1', 'pop3'); //nntp<br />        $options[] = array('', 'norsh');<br />        $options[] = array('', 'ssl');<br />        $options[] = array('', 'validate-cert', 'novalidate-cert');<br />        $options[] = array('', 'tls', 'notls');<br />        <br />        $configOptions = imapConfig($options);<br />        foreach($configOptions as $c) {<br />            $mbox = @imap_open("{".$server.":".$port.$c."}".$dir, $username, $passw);<br />            echo "&lt;b&gt;{".$server.":".$port.$c."}".$dir."&lt;/b&gt; ... ";<br />            if (false !== $mbox) {<br />                echo '&lt;span style="color: green"&gt; success&lt;/span&gt;';<br />            }<br />            else {<br />                echo '&lt;span style="color: red"&gt; failed&lt;/span&gt;';<br />            }<br />            echo '&lt;br&gt;';<br />        }<br />    }<br /><br />imap_test('mail.server.de', 143, 'INBOX', 'username', 'pwd');</span></code></div>
  </div>
 </div>
  <div class="note" id="43667">  <div class="votes">
    <div id="Vu43667">
    <a href="/manual/vote-note.php?id=43667&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43667">
    <a href="/manual/vote-note.php?id=43667&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43667" title="62% like this...">
    2
    </div>
  </div>
  <a href="#43667" class="name">
  <strong class="user"><em>liamr at umich dot edu</em></strong></a><a class="genanchor" href="#43667"> &para;</a><div class="date" title="2004-06-29 04:40"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43667">
<div class="phpcode"><code><span class="html">To authenticate using kerberos V / GSSAPI, you might need to add "user=" to the connection string.. eg:<br /><br />$mbox = imap_open( "\{imap.example.com:143/imap/notls/user=" . $user . "}INBOX", $user, $passwd );<br /><br />Our IMAP servers won't allow a user other than the user specified in the kerberos credentials connect using those credentials unless you specify that extra "user=" in the connection string.  Passing it as an argument to imap_open() doesn't seem to be enough.</span></code></div>
  </div>
 </div>
  <div class="note" id="63966">  <div class="votes">
    <div id="Vu63966">
    <a href="/manual/vote-note.php?id=63966&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63966">
    <a href="/manual/vote-note.php?id=63966&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63966" title="60% like this...">
    2
    </div>
  </div>
  <a href="#63966" class="name">
  <strong class="user"><em>shaikh_zaid at yahoo dot com</em></strong></a><a class="genanchor" href="#63966"> &para;</a><div class="date" title="2006-04-04 11:55"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63966">
<div class="phpcode"><code><span class="html">imap_open will not open a stream if your server operates with Transport Layer Security (i.e. TLS) imap_open connects with SSL if its there. So try opening mailbox as <br /><br />$mailbox="{mail.domain.com:143/imap/notls}"; <br />or<br />$mailbox="{mail.domain.com:110/pop3/notls}"; This works...<br /><br />Some mail server requires you to provide username@domain.com so you can always use. user@doamin.com<br /><br />$conn=imap_open($mailbox, $username, $password);<br /><br />Some server may ask for username as "user=user@domain.com"<br /><br />:)</span></code></div>
  </div>
 </div>
  <div class="note" id="20824">  <div class="votes">
    <div id="Vu20824">
    <a href="/manual/vote-note.php?id=20824&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20824">
    <a href="/manual/vote-note.php?id=20824&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20824" title="58% like this...">
    3
    </div>
  </div>
  <a href="#20824" class="name">
  <strong class="user"><em>frederik at roal dot no</em></strong></a><a class="genanchor" href="#20824"> &para;</a><div class="date" title="2002-04-17 09:02"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20824">
<div class="phpcode"><code><span class="html">For all imap functions where you specify the mailbox string it is important that you ALWAYS use IP (not hostname) and the portnumber. If you do not do this imap functions will be painfully slow.<br />Using hostname instead of IP adds 3 seconds to each IMAP call, not using portnumber adds 10 seconds to each imap call. (hint: use gethostbyname() )</span></code></div>
  </div>
 </div>
  <div class="note" id="38985">  <div class="votes">
    <div id="Vu38985">
    <a href="/manual/vote-note.php?id=38985&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38985">
    <a href="/manual/vote-note.php?id=38985&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38985" title="60% like this...">
    2
    </div>
  </div>
  <a href="#38985" class="name">
  <strong class="user"><em>rvarkelen AT hortimax.nl</em></strong></a><a class="genanchor" href="#38985"> &para;</a><div class="date" title="2004-01-14 03:03"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38985">
<div class="phpcode"><code><span class="html">In order to make a IMAP connection to a Microsoft Exchange Server 5.5, I used this connection-string :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if(</span><span class="default">imap_open </span><span class="keyword">(</span><span class="string">"{192.168.1.6:143/imap}Inbox"</span><span class="keyword">, </span><span class="string">"DOMAIN/USERNAME/ALIAS"</span><span class="keyword">, </span><span class="string">"PASSWORD"</span><span class="keyword">))<br />{<br />    echo </span><span class="string">'Connection success!'</span><span class="keyword">;<br />}<br />else<br />{<br />    echo </span><span class="string">'Connection failed'</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />By replacing "Inbox" with, e.g. "Tasks", its possible to see all your tasks. I Hope this helps anybody!<br /><br />Regards</span></code></div>
  </div>
 </div>
  <div class="note" id="16441">  <div class="votes">
    <div id="Vu16441">
    <a href="/manual/vote-note.php?id=16441&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd16441">
    <a href="/manual/vote-note.php?id=16441&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V16441" title="58% like this...">
    2
    </div>
  </div>
  <a href="#16441" class="name">
  <strong class="user"><em>brojann at netscape dot com</em></strong></a><a class="genanchor" href="#16441"> &para;</a><div class="date" title="2001-10-30 02:01"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom16441">
<div class="phpcode"><code><span class="html">You can do
<br />
<br />&lt;? $foo = imap_errors(); ?&gt;
<br />
<br />to clear unwanted warning messages like 'Mailbox is empty'</span></code></div>
  </div>
 </div>
  <div class="note" id="52315">  <div class="votes">
    <div id="Vu52315">
    <a href="/manual/vote-note.php?id=52315&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52315">
    <a href="/manual/vote-note.php?id=52315&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52315" title="57% like this...">
    1
    </div>
  </div>
  <a href="#52315" class="name">
  <strong class="user"><em>m dot stoel at cyberkinetic dot nl</em></strong></a><a class="genanchor" href="#52315"> &para;</a><div class="date" title="2005-04-27 10:50"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52315">
<div class="phpcode"><code><span class="html">a little tip for those who get really frustrated even after reading all the right solutions and implementing them but still get the same errors or none at all..:<br />after having changed the code.. restart the httpd deamon..<br /><br />for Fedora or any other Red Hat Linux OS (/etc/init.d/httpd restart).<br /><br />After this you will be able to make a imap/pop3 stream from apache..</span></code></div>
  </div>
 </div>
  <div class="note" id="130019">  <div class="votes">
    <div id="Vu130019">
    <a href="/manual/vote-note.php?id=130019&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130019">
    <a href="/manual/vote-note.php?id=130019&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130019" title="100% like this...">
    1
    </div>
  </div>
  <a href="#130019" class="name">
  <strong class="user"><em>jab_creations at yahoo dot com</em></strong></a><a class="genanchor" href="#130019"> &para;</a><div class="date" title="2025-02-11 03:55"><strong>7 months ago</strong></div>
  <div class="text" id="Hcom130019">
<div class="phpcode"><code><span class="html">I was receiving the following error while trying to add the /secure flag and verify that the /ssl flag was using TLS 1.2 instead of the very outdated SSL protocol:<br /><br />PHP Request Shutdown: Can't do secure authentication with this server (errflg=2)<br /><br />I ended up having to call my host to get help as there were literally only five pages in the search engines with the error. The mailbox configuration:<br /><br />Before / incorrect / error:<br /><span class="default">&lt;?php<br />$server_folder </span><span class="keyword">= </span><span class="string">'{mail.example.com:993/imap/ssl/secure}'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />After / correct / connected:<br /><span class="default">&lt;?php<br />$server_folder </span><span class="keyword">= </span><span class="string">'{mail.example.com:993/ssl/imap/secure}'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />The /ssl and /imap flags were not in the correct order. Here is the thing, the flags listed above do NOT mention a strict chronological order of flags and are themselves no listed in the chronological order. So that right there is a bug report needed for the documentation though hopefully this comment will spare someone the aggravation for seemingly random errors. Good luck!</span></code></div>
  </div>
 </div>
  <div class="note" id="127949">  <div class="votes">
    <div id="Vu127949">
    <a href="/manual/vote-note.php?id=127949&amp;page=function.imap-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127949">
    <a href="/manual/vote-note.php?id=127949&amp;page=function.imap-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127949" title="50% like this...">
    0
    </div>
  </div>
  <a href="#127949" class="name">
  <strong class="user"><em>Stefano</em></strong></a><a class="genanchor" href="#127949"> &para;</a><div class="date" title="2022-11-20 10:08"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127949">
<div class="phpcode"><code><span class="html">``There is one thing I learned over the years,<br />if someone says: "it's not possible", prove them wrong.`` ~ Stefano Kocka '99<br /><br />test date: 2022-11-20<br />php version: PHP 8.0.10 (cli)<br />extension=imap<br />extension=openssl<br /><br />imap: IMAP c-Client Version =&gt; 2007f<br />SSL Support =&gt; enabled<br /><br /><a href="https://support.google.com/accounts/answer/185833?hl=en" rel="nofollow" target="_blank">https://support.google.com/accounts/answer/185833?hl=en</a><br /><br /><span class="default">&lt;?php<br />$cnx </span><span class="keyword">= </span><span class="string">'{imap.gmail.com:993/imap/ssl/readonly}'</span><span class="keyword">;<br /></span><span class="default">$mbox </span><span class="keyword">= </span><span class="default">imap_open</span><span class="keyword">(</span><span class="default">$cnx</span><span class="keyword">, </span><span class="string">'user@gmail.com'</span><span class="keyword">, </span><span class="string">'MyAppPassword'</span><span class="keyword">);<br /></span><span class="default">$folders </span><span class="keyword">= </span><span class="default">imap_listmailbox</span><span class="keyword">(</span><span class="default">$mbox</span><span class="keyword">, </span><span class="default">$cnx</span><span class="keyword">, </span><span class="string">'*'</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$folders</span><span class="keyword">);<br /></span><span class="comment">/*<br />Array<br />(<br />    [0] =&gt; {imap.gmail.com:993/imap/ssl/readonly}INBOX<br />    [1] =&gt; {imap.gmail.com:993/imap/ssl/readonly}LABEL1<br />    [2] =&gt; {imap.gmail.com:993/imap/ssl/readonly}LABEL2<br />    [3] =&gt; {imap.gmail.com:993/imap/ssl/readonly}Queue<br />    [4] =&gt; {imap.gmail.com:993/imap/ssl/readonly}[Gmail]/All<br />    [5] =&gt; {imap.gmail.com:993/imap/ssl/readonly}[Gmail]/Drafts<br />    [6] =&gt; {imap.gmail.com:993/imap/ssl/readonly}[Gmail]/Sent<br />    [7] =&gt; {imap.gmail.com:993/imap/ssl/readonly}[Gmail]/Spam<br />    [8] =&gt; {imap.gmail.com:993/imap/ssl/readonly}[Gmail]/Starred<br />    [9] =&gt; {imap.gmail.com:993/imap/ssl/readonly}[Gmail]/Trash<br />)<br />*/<br /></span><span class="default">?&gt;<br /></span>Kind regards</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imap-open&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imap-open.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.imap.php">IMAP Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.imap-8bit.php" title="imap_&#8203;8bit">imap_&#8203;8bit</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-alerts.php" title="imap_&#8203;alerts">imap_&#8203;alerts</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-append.php" title="imap_&#8203;append">imap_&#8203;append</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-base64.php" title="imap_&#8203;base64">imap_&#8203;base64</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-binary.php" title="imap_&#8203;binary">imap_&#8203;binary</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-body.php" title="imap_&#8203;body">imap_&#8203;body</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-bodystruct.php" title="imap_&#8203;bodystruct">imap_&#8203;bodystruct</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-check.php" title="imap_&#8203;check">imap_&#8203;check</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-clearflag-full.php" title="imap_&#8203;clearflag_&#8203;full">imap_&#8203;clearflag_&#8203;full</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-close.php" title="imap_&#8203;close">imap_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-create.php" title="imap_&#8203;create">imap_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-createmailbox.php" title="imap_&#8203;createmailbox">imap_&#8203;createmailbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-delete.php" title="imap_&#8203;delete">imap_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-deletemailbox.php" title="imap_&#8203;deletemailbox">imap_&#8203;deletemailbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-errors.php" title="imap_&#8203;errors">imap_&#8203;errors</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-expunge.php" title="imap_&#8203;expunge">imap_&#8203;expunge</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-fetch-overview.php" title="imap_&#8203;fetch_&#8203;overview">imap_&#8203;fetch_&#8203;overview</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-fetchbody.php" title="imap_&#8203;fetchbody">imap_&#8203;fetchbody</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-fetchheader.php" title="imap_&#8203;fetchheader">imap_&#8203;fetchheader</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-fetchmime.php" title="imap_&#8203;fetchmime">imap_&#8203;fetchmime</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-fetchstructure.php" title="imap_&#8203;fetchstructure">imap_&#8203;fetchstructure</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-fetchtext.php" title="imap_&#8203;fetchtext">imap_&#8203;fetchtext</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-gc.php" title="imap_&#8203;gc">imap_&#8203;gc</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-get-quota.php" title="imap_&#8203;get_&#8203;quota">imap_&#8203;get_&#8203;quota</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-get-quotaroot.php" title="imap_&#8203;get_&#8203;quotaroot">imap_&#8203;get_&#8203;quotaroot</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-getacl.php" title="imap_&#8203;getacl">imap_&#8203;getacl</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-getmailboxes.php" title="imap_&#8203;getmailboxes">imap_&#8203;getmailboxes</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-getsubscribed.php" title="imap_&#8203;getsubscribed">imap_&#8203;getsubscribed</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-header.php" title="imap_&#8203;header">imap_&#8203;header</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-headerinfo.php" title="imap_&#8203;headerinfo">imap_&#8203;headerinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-headers.php" title="imap_&#8203;headers">imap_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-is-open.php" title="imap_&#8203;is_&#8203;open">imap_&#8203;is_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-last-error.php" title="imap_&#8203;last_&#8203;error">imap_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-list.php" title="imap_&#8203;list">imap_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-listmailbox.php" title="imap_&#8203;listmailbox">imap_&#8203;listmailbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-listscan.php" title="imap_&#8203;listscan">imap_&#8203;listscan</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-listsubscribed.php" title="imap_&#8203;listsubscribed">imap_&#8203;listsubscribed</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-lsub.php" title="imap_&#8203;lsub">imap_&#8203;lsub</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mail.php" title="imap_&#8203;mail">imap_&#8203;mail</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mail-compose.php" title="imap_&#8203;mail_&#8203;compose">imap_&#8203;mail_&#8203;compose</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mail-copy.php" title="imap_&#8203;mail_&#8203;copy">imap_&#8203;mail_&#8203;copy</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mail-move.php" title="imap_&#8203;mail_&#8203;move">imap_&#8203;mail_&#8203;move</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mailboxmsginfo.php" title="imap_&#8203;mailboxmsginfo">imap_&#8203;mailboxmsginfo</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mime-header-decode.php" title="imap_&#8203;mime_&#8203;header_&#8203;decode">imap_&#8203;mime_&#8203;header_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-msgno.php" title="imap_&#8203;msgno">imap_&#8203;msgno</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mutf7-to-utf8.php" title="imap_&#8203;mutf7_&#8203;to_&#8203;utf8">imap_&#8203;mutf7_&#8203;to_&#8203;utf8</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-num-msg.php" title="imap_&#8203;num_&#8203;msg">imap_&#8203;num_&#8203;msg</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-num-recent.php" title="imap_&#8203;num_&#8203;recent">imap_&#8203;num_&#8203;recent</a>
                        </li>
                                                <li class="current">
                            <a href="function.imap-open.php" title="imap_&#8203;open">imap_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-ping.php" title="imap_&#8203;ping">imap_&#8203;ping</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-qprint.php" title="imap_&#8203;qprint">imap_&#8203;qprint</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-rename.php" title="imap_&#8203;rename">imap_&#8203;rename</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-renamemailbox.php" title="imap_&#8203;renamemailbox">imap_&#8203;renamemailbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-reopen.php" title="imap_&#8203;reopen">imap_&#8203;reopen</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-rfc822-parse-adrlist.php" title="imap_&#8203;rfc822_&#8203;parse_&#8203;adrlist">imap_&#8203;rfc822_&#8203;parse_&#8203;adrlist</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-rfc822-parse-headers.php" title="imap_&#8203;rfc822_&#8203;parse_&#8203;headers">imap_&#8203;rfc822_&#8203;parse_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-rfc822-write-address.php" title="imap_&#8203;rfc822_&#8203;write_&#8203;address">imap_&#8203;rfc822_&#8203;write_&#8203;address</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-savebody.php" title="imap_&#8203;savebody">imap_&#8203;savebody</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-scan.php" title="imap_&#8203;scan">imap_&#8203;scan</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-scanmailbox.php" title="imap_&#8203;scanmailbox">imap_&#8203;scanmailbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-search.php" title="imap_&#8203;search">imap_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-set-quota.php" title="imap_&#8203;set_&#8203;quota">imap_&#8203;set_&#8203;quota</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-setacl.php" title="imap_&#8203;setacl">imap_&#8203;setacl</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-setflag-full.php" title="imap_&#8203;setflag_&#8203;full">imap_&#8203;setflag_&#8203;full</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-sort.php" title="imap_&#8203;sort">imap_&#8203;sort</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-status.php" title="imap_&#8203;status">imap_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-subscribe.php" title="imap_&#8203;subscribe">imap_&#8203;subscribe</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-thread.php" title="imap_&#8203;thread">imap_&#8203;thread</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-timeout.php" title="imap_&#8203;timeout">imap_&#8203;timeout</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-uid.php" title="imap_&#8203;uid">imap_&#8203;uid</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-undelete.php" title="imap_&#8203;undelete">imap_&#8203;undelete</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-unsubscribe.php" title="imap_&#8203;unsubscribe">imap_&#8203;unsubscribe</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-utf7-decode.php" title="imap_&#8203;utf7_&#8203;decode">imap_&#8203;utf7_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-utf7-encode.php" title="imap_&#8203;utf7_&#8203;encode">imap_&#8203;utf7_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-utf8.php" title="imap_&#8203;utf8">imap_&#8203;utf8</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-utf8-to-mutf7.php" title="imap_&#8203;utf8_&#8203;to_&#8203;mutf7">imap_&#8203;utf8_&#8203;to_&#8203;mutf7</a>
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
