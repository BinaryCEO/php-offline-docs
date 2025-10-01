<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imap_headerinfo - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imap-headerinfo.php">
 <link rel="shorturl" href="https://www.php.net/imap-headerinfo">
 <link rel="alternate" href="https://www.php.net/imap-headerinfo" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.imap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imap-header.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imap-headers.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imap-headerinfo.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imap-headerinfo.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imap-headerinfo.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imap-headerinfo.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imap-headerinfo.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imap-headerinfo.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imap-headerinfo.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imap-headerinfo.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imap-headerinfo.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imap-headerinfo.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imap-headerinfo.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Read the header of the message" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imap_headerinfo - Manual" />
<meta name="twitter:description" content="Read the header of the message" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imap_headerinfo - Manual" />
<meta itemprop="description" content="Read the header of the message" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Read the header of the message" />

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
        <a href="function.imap-headers.php">
          imap_headers &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imap-header.php">
          &laquo; imap_header        </a>
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
            <option value='en/function.imap-headerinfo.php' selected="selected">English</option>
            <option value='de/function.imap-headerinfo.php'>German</option>
            <option value='es/function.imap-headerinfo.php'>Spanish</option>
            <option value='fr/function.imap-headerinfo.php'>French</option>
            <option value='it/function.imap-headerinfo.php'>Italian</option>
            <option value='ja/function.imap-headerinfo.php'>Japanese</option>
            <option value='pt_BR/function.imap-headerinfo.php'>Brazilian Portuguese</option>
            <option value='ru/function.imap-headerinfo.php'>Russian</option>
            <option value='tr/function.imap-headerinfo.php'>Turkish</option>
            <option value='uk/function.imap-headerinfo.php'>Ukrainian</option>
            <option value='zh/function.imap-headerinfo.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imap-headerinfo" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imap_headerinfo</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imap_headerinfo</span> &mdash; <span class="dc-title">Read the header of the message</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imap-headerinfo-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imap_headerinfo</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.imap-connection.php" class="type IMAP\Connection">IMAP\Connection</a></span> <code class="parameter">$imap</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$message_num</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$from_length</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$subject_length</code><span class="initializer"> = 0</span></span><br>): <span class="type"><span class="type"><a href="class.stdclass.php" class="type stdClass">stdClass</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Gets information about the given message number by reading its headers.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imap-headerinfo-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">imap</code></dt><dd><p class="para">An <span class="classname"><a href="class.imap-connection.php" class="classname">IMAP\Connection</a></span> instance.</p></dd>
    
     <dt><code class="parameter">message_num</code></dt>
     <dd>
      <p class="para">
       The message number
      </p>
     </dd>
    
    
     <dt><code class="parameter">from_length</code></dt>
     <dd>
      <p class="para">
       Number of characters for the <code class="literal">fetchfrom</code> property.
       Must be greater than or equal to zero.
      </p>
     </dd>
    
    
     <dt><code class="parameter">subject_length</code></dt>
     <dd>
      <p class="para">
       Number of characters for the <code class="literal">fetchsubject</code> property
       Must be greater than or equal to zero.
      </p>
     </dd>
    
    
     <dt><code class="parameter">defaulthost</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imap-headerinfo-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error or, if successful, the information in an object with following properties:
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      toaddress - full to: line, up to 1024 characters
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      to - an array of objects from the To: line, with the following 
      properties: <code class="literal">personal</code>, <code class="literal">adl</code>,
      <code class="literal">mailbox</code>, and <code class="literal">host</code>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      fromaddress - full from: line, up to 1024 characters
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      from - an array of objects from the From: line, with the following 
      properties: <code class="literal">personal</code>, <code class="literal">adl</code>,
      <code class="literal">mailbox</code>, and <code class="literal">host</code>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      ccaddress - full cc: line, up to 1024 characters
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      cc - an array of objects from the Cc: line, with the following 
      properties: <code class="literal">personal</code>, <code class="literal">adl</code>,
      <code class="literal">mailbox</code>, and <code class="literal">host</code>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      bccaddress - full bcc: line, up to 1024 characters
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      bcc - an array of objects from the Bcc: line, with the following 
      properties: <code class="literal">personal</code>, <code class="literal">adl</code>,
      <code class="literal">mailbox</code>, and <code class="literal">host</code>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      reply_toaddress - full Reply-To: line, up to 1024 characters
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      reply_to - an array of objects from the Reply-To: line, with the following
      properties: <code class="literal">personal</code>, <code class="literal">adl</code>,
      <code class="literal">mailbox</code>, and <code class="literal">host</code>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      senderaddress - full sender: line, up to 1024 characters
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      sender - an array of objects from the Sender: line, with the following 
      properties: <code class="literal">personal</code>, <code class="literal">adl</code>,
      <code class="literal">mailbox</code>, and <code class="literal">host</code>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      return_pathaddress - full Return-Path: line, up to 1024 characters
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      return_path - an array of objects from the Return-Path: line, with the
      following properties: <code class="literal">personal</code>, 
      <code class="literal">adl</code>, <code class="literal">mailbox</code>, and 
      <code class="literal">host</code>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      remail - 
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      date - The message date as found in its headers
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Date - Same as date
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      subject - The message subject
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Subject - Same as subject 
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      in_reply_to - 
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      message_id - 
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      newsgroups - 
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      followup_to - 
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      references - 
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Recent - <code class="literal">R</code> if recent and seen, <code class="literal">N</code>
      if recent and not seen, &#039; &#039; if not recent.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Unseen - <code class="literal">U</code> if not seen AND not recent, &#039; &#039; if seen
      OR not seen and recent
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Flagged - <code class="literal">F</code> if flagged, &#039; &#039; if not flagged
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Answered - <code class="literal">A</code> if answered, &#039; &#039; if unanswered
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Deleted - <code class="literal">D</code> if deleted, &#039; &#039; if not deleted
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Draft - <code class="literal">X</code> if draft, &#039; &#039; if not draft
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Msgno - The message number
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      MailDate - 
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Size - The message size
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      udate - mail message date in Unix time
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      fetchfrom - from line formatted to fit <code class="parameter">from_length</code>
      characters
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      fetchsubject - subject line formatted to fit 
      <code class="parameter">subject_length</code> characters
     </span>
    </li>
   </ul>
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imap-headerinfo-changelog">
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
  The <code class="parameter">imap</code> parameter expects an <span class="classname"><a href="class.imap-connection.php" class="classname">IMAP\Connection</a></span>
  instance now; previously, a valid <code class="literal">imap</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

     <tr>
      <td>8.0.0</td>
      <td>
       The unused <code class="parameter">defaulthost</code> parameter has been removed.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.imap-headerinfo-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.imap-fetch-overview.php" class="function" rel="rdfs-seeAlso">imap_fetch_overview()</a> - Read an overview of the information in the headers of the given message</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/imap/functions/imap-headerinfo.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imap-headerinfo%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imap-headerinfo&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imap-headerinfo.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="98809">  <div class="votes">
    <div id="Vu98809">
    <a href="/manual/vote-note.php?id=98809&amp;page=function.imap-headerinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98809">
    <a href="/manual/vote-note.php?id=98809&amp;page=function.imap-headerinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98809" title="83% like this...">
    25
    </div>
  </div>
  <a href="#98809" class="name">
  <strong class="user"><em>andyltm</em></strong></a><a class="genanchor" href="#98809"> &para;</a><div class="date" title="2010-07-08 03:17"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98809">
<div class="phpcode"><code><span class="html">When I was testing imap_headerinfo() with an e-mail that had multiple recipients (multiple e-mails in to to: and/or cc: field), I noticed that imap_headerinfo() was failing hard for me on PHP 5.2.10-2ubuntu6.4 with Suhosin-Patch 0.9.7 (cli).<br /><br />Rather than providing me an array with each and every e-mail address listed in the to and/or cc fields, it was only providing me the first listed.  This was disappointing.<br /><br />   [to] =&gt; Array<br />        (   <br />            [0] =&gt; stdClass Object<br />                (   <br />                    [mailbox] =&gt; game<br />                    [host] =&gt; blunts.com<br />                )<br />        )<br /><br />Luckily, there was a cool workaround to this problem:<br /><br />imap_rfc822_parse_headers(imap_fetchheader( string ); which subsequentally worked like a nice little pet would:<br /><br />   [to] =&gt; Array<br />        (   <br />            [0] =&gt; stdClass Object<br />                (   <br />                    [mailbox] =&gt; game<br />                    [host] =&gt; blunts.com<br />                )<br />            [1] =&gt; stdClass Object<br />                (   <br />                    [mailbox] =&gt; dutch<br />                    [host] =&gt; masters.com<br />                )<br />        )<br /><br />TL;DR: <br />So in other words, instead of imap_headerinfo() use imap_rfc822_parse_headers(imap_fetchheader()).<br /><br />Hope this helps anyone else that runs into this issue from now into the future.  This post was suggested by people in #PHP on FreeNode IRC.</span></code></div>
  </div>
 </div>
  <div class="note" id="95012">  <div class="votes">
    <div id="Vu95012">
    <a href="/manual/vote-note.php?id=95012&amp;page=function.imap-headerinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95012">
    <a href="/manual/vote-note.php?id=95012&amp;page=function.imap-headerinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95012" title="90% like this...">
    9
    </div>
  </div>
  <a href="#95012" class="name">
  <strong class="user"><em>jahservant 13 at gmail dot com</em></strong></a><a class="genanchor" href="#95012"> &para;</a><div class="date" title="2009-12-08 03:56"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95012">
<div class="phpcode"><code><span class="html">I'm not entirely sure why this is, but if you loop through all of the messages in a mailbox, calling imap_header() each time, you can significantly increase performance by calling imap_headers() first.<br /><br />Compare this:<br /><span class="default">&lt;?php<br />     $imap </span><span class="keyword">= </span><span class="default">imap_open</span><span class="keyword">(</span><span class="string">"{my.server.com:143}INBOX"</span><span class="keyword">, </span><span class="string">"user"</span><span class="keyword">, </span><span class="string">"pass"</span><span class="keyword">);<br />     </span><span class="default">$n_msgs </span><span class="keyword">= </span><span class="default">imap_num_msg</span><span class="keyword">(</span><span class="default">$imap</span><span class="keyword">);<br />     </span><span class="default">$s </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />     for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$n_msgs</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />          </span><span class="default">$header </span><span class="keyword">= </span><span class="default">imap_header</span><span class="keyword">(</span><span class="default">$imap</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />     }<br />     </span><span class="default">$e </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />     echo (</span><span class="default">$e </span><span class="keyword">- </span><span class="default">$s</span><span class="keyword">);<br />     </span><span class="default">imap_close</span><span class="keyword">(</span><span class="default">$imap</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />With this:<br /><span class="default">&lt;?php<br />     $imap </span><span class="keyword">= </span><span class="default">imap_open</span><span class="keyword">(</span><span class="string">"{my.server.com:143}INBOX"</span><span class="keyword">, </span><span class="string">"user"</span><span class="keyword">, </span><span class="string">"pass"</span><span class="keyword">);<br />     </span><span class="default">$n_msgs </span><span class="keyword">= </span><span class="default">imap_num_msg</span><span class="keyword">(</span><span class="default">$imap</span><span class="keyword">);<br />  </span><span class="comment">/****** adding this line: ******/<br />     </span><span class="default">imap_headers</span><span class="keyword">(</span><span class="default">$imap</span><span class="keyword">)<br />  </span><span class="comment">/***************************/<br />     </span><span class="default">$s </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />     for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$n_msgs</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />          </span><span class="default">$header </span><span class="keyword">= </span><span class="default">imap_header</span><span class="keyword">(</span><span class="default">$imap</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />     }<br />     </span><span class="default">$e </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />     echo (</span><span class="default">$e </span><span class="keyword">- </span><span class="default">$s</span><span class="keyword">);<br />     </span><span class="default">imap_close</span><span class="keyword">(</span><span class="default">$imap</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The performance difference, as I have tested on several boxes, connecting to several different servers, is that the second code snippet ALWAYS takes 1/2 the time, if not less.<br /><br />Perhaps it is because imap_headers() retrieves all of the messages on one connection, whereas imap_header() has to make a new fetch request for each message??  I'm not sure WHY it is faster if imap_headers() is called first, but I do know that it is, so I thought I'd pass on the knowledge.  If anyone knows why this is, please let me know....</span></code></div>
  </div>
 </div>
  <div class="note" id="120797">  <div class="votes">
    <div id="Vu120797">
    <a href="/manual/vote-note.php?id=120797&amp;page=function.imap-headerinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120797">
    <a href="/manual/vote-note.php?id=120797&amp;page=function.imap-headerinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120797" title="80% like this...">
    3
    </div>
  </div>
  <a href="#120797" class="name">
  <strong class="user"><em>php at our-software dot com</em></strong></a><a class="genanchor" href="#120797"> &para;</a><div class="date" title="2017-03-13 02:57"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120797">
<div class="phpcode"><code><span class="html">Please Note : imap_headerinfo only returns a subset of the headers, rather than the entire thing.<br /><br />Among other things, this means it only shows the first recipient from the "to" section of the email, rather than all recipients.<br /><br />If you're not seeing something you expected to, you'll be better off using<br /><br />$hdr_raw = imap_fetchheader($mbox, $mailid);<br />$hdr = imap_rfc822_parse_headers($hdr_raw);<br /><br />then you'll see the full set of headers, and be able to do more with it.</span></code></div>
  </div>
 </div>
  <div class="note" id="26741">  <div class="votes">
    <div id="Vu26741">
    <a href="/manual/vote-note.php?id=26741&amp;page=function.imap-headerinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26741">
    <a href="/manual/vote-note.php?id=26741&amp;page=function.imap-headerinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26741" title="69% like this...">
    5
    </div>
  </div>
  <a href="#26741" class="name">
  <strong class="user"><em>scott at fuzzygroup dot com</em></strong></a><a class="genanchor" href="#26741"> &para;</a><div class="date" title="2002-11-11 09:13"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26741">
<div class="phpcode"><code><span class="html">If you want to extract values from to, from, or other header elements, they are an object and you need to loop over them i.e.<br /><br />$header = imap_header($mbox, $message_id);<br />$from = $header-&gt;from;<br />foreach ($from as $id =&gt; $object) {<br />    $fromname = $object-&gt;personal;<br />    $fromaddress = $object-&gt;mailbox . "@" . $object-&gt;host;<br />}<br /><br />Would give you two variables for the friendly from and the smtp from address<br /><br />Thanks to www.natrak.net for help with this</span></code></div>
  </div>
 </div>
  <div class="note" id="117985">  <div class="votes">
    <div id="Vu117985">
    <a href="/manual/vote-note.php?id=117985&amp;page=function.imap-headerinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117985">
    <a href="/manual/vote-note.php?id=117985&amp;page=function.imap-headerinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117985" title="100% like this...">
    1
    </div>
  </div>
  <a href="#117985" class="name">
  <strong class="user"><em>Murray</em></strong></a><a class="genanchor" href="#117985"> &para;</a><div class="date" title="2015-09-14 11:54"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117985">
<div class="phpcode"><code><span class="html">An email without a subject line will not generate the 'subject' property.<br /><br />Before using the 'subject' property you should test for it.<br />if (property_exists($header, 'subject')) echo $header-&gt;subject;</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imap-headerinfo&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imap-headerinfo.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
