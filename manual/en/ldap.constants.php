<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Predefined Constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ldap.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/ldap.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/ldap.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.ldap.php">
 <link rel="prev" href="https://www.php.net/manual/en/ldap.resources.php">
 <link rel="next" href="https://www.php.net/manual/en/ldap.using.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ldap.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ldap.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ldap.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ldap.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ldap.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ldap.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ldap.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ldap.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ldap.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ldap.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ldap.constants.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Predefined Constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Predefined Constants - Manual" />
<meta name="twitter:description" content="Predefined Constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Predefined Constants - Manual" />
<meta itemprop="description" content="Predefined Constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Predefined Constants" />

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
        <a href="ldap.using.php">
          Using the PHP LDAP calls &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ldap.resources.php">
          &laquo; Resource Types        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.ldap.php'>LDAP</a></li>      </ul>
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
            <option value='en/ldap.constants.php' selected="selected">English</option>
            <option value='de/ldap.constants.php'>German</option>
            <option value='es/ldap.constants.php'>Spanish</option>
            <option value='fr/ldap.constants.php'>French</option>
            <option value='it/ldap.constants.php'>Italian</option>
            <option value='ja/ldap.constants.php'>Japanese</option>
            <option value='pt_BR/ldap.constants.php'>Brazilian Portuguese</option>
            <option value='ru/ldap.constants.php'>Russian</option>
            <option value='tr/ldap.constants.php'>Turkish</option>
            <option value='uk/ldap.constants.php'>Ukrainian</option>
            <option value='zh/ldap.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ldap.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <dl>
  
   <dt id="constant.ldap-deref-never">
    <strong><code><a href="ldap.constants.php#constant.ldap-deref-never">LDAP_DEREF_NEVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias dereferencing rule - Never.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-deref-searching">
    <strong><code><a href="ldap.constants.php#constant.ldap-deref-searching">LDAP_DEREF_SEARCHING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias dereferencing rule - Searching.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-deref-finding">
    <strong><code><a href="ldap.constants.php#constant.ldap-deref-finding">LDAP_DEREF_FINDING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias dereferencing rule - Finding.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-deref-always">
    <strong><code><a href="ldap.constants.php#constant.ldap-deref-always">LDAP_DEREF_ALWAYS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias dereferencing rule - Always.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-deref">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-deref">LDAP_OPT_DEREF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies alternative rules for following aliases at the server.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-sizelimit">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-sizelimit">LDAP_OPT_SIZELIMIT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <p class="para">
     Specifies the maximum number of entries that can be
     returned on a search operation.
    </p>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      The actual size limit for operations is also bounded
      by the server&#039;s configured maximum number of return entries.
      The lesser of these two settings is the actual size limit.
     </span>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.ldap-opt-timelimit">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-timelimit">LDAP_OPT_TIMELIMIT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies the number of seconds to wait for search results.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      The actual time limit for operations is also bounded
      by the server&#039;s configured maximum time.
      The lesser of these two settings is the actual time limit.
     </span>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.ldap-opt-network-timeout">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-network-timeout">LDAP_OPT_NETWORK_TIMEOUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Option for <span class="function"><a href="function.ldap-set-option.php" class="function">ldap_set_option()</a></span> to allow setting network timeout.
     (Available as of PHP 5.3.0)
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-protocol-version">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-protocol-version">LDAP_OPT_PROTOCOL_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies the LDAP protocol to be used (V2 or V3).
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-error-number">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-error-number">LDAP_OPT_ERROR_NUMBER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Latest session error number.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-referrals">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-referrals">LDAP_OPT_REFERRALS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies whether to automatically follow referrals returned
     by the LDAP server.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-restart">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-restart">LDAP_OPT_RESTART</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Determines whether or not the connection should be implicitly restarted.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-host-name">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-host-name">LDAP_OPT_HOST_NAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sets/gets a space-separated of hosts when trying to connect.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-error-string">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-error-string">LDAP_OPT_ERROR_STRING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="ldap.constants.php#constant.ldap-opt-diagnostic-message">LDAP_OPT_DIAGNOSTIC_MESSAGE</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-diagnostic-message">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-diagnostic-message">LDAP_OPT_DIAGNOSTIC_MESSAGE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Gets the latest session error message.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-matched-dn">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-matched-dn">LDAP_OPT_MATCHED_DN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sets/gets the matched DN associated with the connection.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-server-controls">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-server-controls">LDAP_OPT_SERVER_CONTROLS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies a default list of server controls to be sent with each request.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-client-controls">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-client-controls">LDAP_OPT_CLIENT_CONTROLS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies a default list of client controls to be processed with each request.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-debug-level">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-debug-level">LDAP_OPT_DEBUG_LEVEL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies a bitwise level for debug traces.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-keepalive-idle">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-keepalive-idle">LDAP_OPT_X_KEEPALIVE_IDLE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies the number of seconds a connection needs to remain idle before TCP starts sending keepalive probes.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-keepalive-probes">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-keepalive-probes">LDAP_OPT_X_KEEPALIVE_PROBES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies the maximum number of keepalive probes TCP should send before dropping the connection.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-keepalive-interval">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-keepalive-interval">LDAP_OPT_X_KEEPALIVE_INTERVAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies the interval in seconds between individual keepalive probes.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-cacertdir">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-cacertdir">LDAP_OPT_X_TLS_CACERTDIR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies the path of the directory containing CA certificates.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-cacertfile">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-cacertfile">LDAP_OPT_X_TLS_CACERTFILE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies the full-path of the CA certificate file.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-certfile">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-certfile">LDAP_OPT_X_TLS_CERTFILE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies the full-path of the certificate file.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-cipher-suite">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-cipher-suite">LDAP_OPT_X_TLS_CIPHER_SUITE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies the allowed cipher suite.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-crlcheck">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-crlcheck">LDAP_OPT_X_TLS_CRLCHECK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies the CRL evaluation strategy. This must be one of: <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-crl-none">LDAP_OPT_X_TLS_CRL_NONE</a></code></strong>,<strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-crl-peer">LDAP_OPT_X_TLS_CRL_PEER</a></code></strong>, <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-crl-all">LDAP_OPT_X_TLS_CRL_ALL</a></code></strong>.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      This option is only valid for OpenSSL.
     </span>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-crlfile">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-crlfile">LDAP_OPT_X_TLS_CRLFILE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies the full-path of the CRL file.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      This option is only valid for GnuTLS.
     </span>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-dhfile">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-dhfile">LDAP_OPT_X_TLS_DHFILE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies the full-path  of the file containing the parameters for Diffie-Hellman ephemeral key exchange.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      This option is ignored by GnuTLS and Mozilla NSS.
     </span>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-keyfile">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-keyfile">LDAP_OPT_X_TLS_KEYFILE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies the full-path of the certificate key file.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-protocol-min">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-protocol-min">LDAP_OPT_X_TLS_PROTOCOL_MIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies the minimum protocol version. This can be one of: <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-protocol-ssl2">LDAP_OPT_X_TLS_PROTOCOL_SSL2</a></code></strong>,<strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-protocol-ssl3">LDAP_OPT_X_TLS_PROTOCOL_SSL3</a></code></strong>, <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-protocol-tls1-0">LDAP_OPT_X_TLS_PROTOCOL_TLS1_0</a></code></strong>, <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-protocol-tls1-1">LDAP_OPT_X_TLS_PROTOCOL_TLS1_1</a></code></strong>, <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-protocol-tls1-2">LDAP_OPT_X_TLS_PROTOCOL_TLS1_2</a></code></strong>
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-random-file">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-random-file">LDAP_OPT_X_TLS_RANDOM_FILE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sets/gets the random file when one of the system default ones are not available.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-require-cert">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-require-cert">LDAP_OPT_X_TLS_REQUIRE_CERT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies the certificate checking strategy. This must be one of: <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-never">LDAP_OPT_X_TLS_NEVER</a></code></strong>,<strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-hard">LDAP_OPT_X_TLS_HARD</a></code></strong>, <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-demand">LDAP_OPT_X_TLS_DEMAND</a></code></strong>,
<strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-allow">LDAP_OPT_X_TLS_ALLOW</a></code></strong>, <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-try">LDAP_OPT_X_TLS_TRY</a></code></strong>.
     (Available as of PHP 7.0.0)
    </span>
   </dd>
  
  
   <dt id="constant.gslc-ssl-no-auth">
    <strong><code><a href="ldap.constants.php#constant.gslc-ssl-no-auth">GSLC_SSL_NO_AUTH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     SSL Authentication Mode - No authentication required. (Only for Oracle LDAP)
    </span>
   </dd>
  
  
   <dt id="constant.gslc-ssl-oneway-auth">
    <strong><code><a href="ldap.constants.php#constant.gslc-ssl-oneway-auth">GSLC_SSL_ONEWAY_AUTH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     SSL Authentication Mode - Only server authentication required. (Only for Oracle LDAP)
    </span>
   </dd>
  
  
   <dt id="constant.gslc-ssl-twoway-auth">
    <strong><code><a href="ldap.constants.php#constant.gslc-ssl-twoway-auth">GSLC_SSL_TWOWAY_AUTH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     SSL Authentication Mode - Both server and client authentication required. (Only for Oracle LDAP)
    </span>
   </dd>
  

  
   <dt id="constant.ldap-exop-start-tls">
    <strong><code><a href="ldap.constants.php#constant.ldap-exop-start-tls">LDAP_EXOP_START_TLS</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Extended Operation constant - Start TLS (<a href="https://datatracker.ietf.org/doc/html/rfc4511" class="link external">&raquo;&nbsp;RFC 4511</a>).
    </span>
   </dd>
  
  
   <dt id="constant.ldap-exop-modify-passwd">
    <strong><code><a href="ldap.constants.php#constant.ldap-exop-modify-passwd">LDAP_EXOP_MODIFY_PASSWD</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Extended Operation constant - Modify password (<a href="https://datatracker.ietf.org/doc/html/rfc3062" class="link external">&raquo;&nbsp;RFC 3062</a>).
    </span>
   </dd>
  
  
   <dt id="constant.ldap-exop-refresh">
    <strong><code><a href="ldap.constants.php#constant.ldap-exop-refresh">LDAP_EXOP_REFRESH</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Extended Operation Constant - Refresh (<a href="https://datatracker.ietf.org/doc/html/rfc2589" class="link external">&raquo;&nbsp;RFC 2589</a>).
    </span>
   </dd>
  
  
   <dt id="constant.ldap-exop-who-am-i">
    <strong><code><a href="ldap.constants.php#constant.ldap-exop-who-am-i">LDAP_EXOP_WHO_AM_I</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Extended Operation Constant - WHOAMI (<a href="https://datatracker.ietf.org/doc/html/rfc4532" class="link external">&raquo;&nbsp;RFC 4532</a>).
    </span>
   </dd>
  
  
   <dt id="constant.ldap-exop-turn">
    <strong><code><a href="ldap.constants.php#constant.ldap-exop-turn">LDAP_EXOP_TURN</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Extended Operation Constant - Turn (<a href="https://datatracker.ietf.org/doc/html/rfc4531" class="link external">&raquo;&nbsp;RFC 4531</a>).
    </span>
   </dd>
  

  
   <dt id="constant.ldap-control-managedsait">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-managedsait">LDAP_CONTROL_MANAGEDSAIT</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Manage DSA IT (<a href="https://datatracker.ietf.org/doc/html/rfc3296" class="link external">&raquo;&nbsp;RFC 3296</a>).
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-proxy-authz">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-proxy-authz">LDAP_CONTROL_PROXY_AUTHZ</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Proxied Authorization (<a href="https://datatracker.ietf.org/doc/html/rfc4730" class="link external">&raquo;&nbsp;RFC 4370</a>).
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-subentries">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-subentries">LDAP_CONTROL_SUBENTRIES</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Subentries (<a href="https://datatracker.ietf.org/doc/html/rfc3672" class="link external">&raquo;&nbsp;RFC 3672</a>).
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-valuesreturnfilter">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-valuesreturnfilter">LDAP_CONTROL_VALUESRETURNFILTER</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Filter returned values (<a href="https://datatracker.ietf.org/doc/html/rfc3876" class="link external">&raquo;&nbsp;RFC 3876</a>).
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-assert">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-assert">LDAP_CONTROL_ASSERT</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Assertion (<a href="https://datatracker.ietf.org/doc/html/rfc45282" class="link external">&raquo;&nbsp;RFC 4528</a>).
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-pre-read">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-pre-read">LDAP_CONTROL_PRE_READ</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Pre read (<a href="https://datatracker.ietf.org/doc/html/rfc4527" class="link external">&raquo;&nbsp;RFC 4527</a>).
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-post-read">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-post-read">LDAP_CONTROL_POST_READ</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Post read (<a href="https://datatracker.ietf.org/doc/html/rfc4527" class="link external">&raquo;&nbsp;RFC 4527</a>).
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-sortrequest">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-sortrequest">LDAP_CONTROL_SORTREQUEST</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Sort request (<a href="https://datatracker.ietf.org/doc/html/rfc2891" class="link external">&raquo;&nbsp;RFC 2891</a>).
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-sortresponse">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-sortresponse">LDAP_CONTROL_SORTRESPONSE</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Sort response (<a href="https://datatracker.ietf.org/doc/html/rfc2891" class="link external">&raquo;&nbsp;RFC 2891</a>).
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-pagedresults">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-pagedresults">LDAP_CONTROL_PAGEDRESULTS</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Paged results (<a href="https://datatracker.ietf.org/doc/html/rfc2696" class="link external">&raquo;&nbsp;RFC 2696</a>).
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-authzid-request">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-authzid-request">LDAP_CONTROL_AUTHZID_REQUEST</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Authorization Identity Request (<a href="https://datatracker.ietf.org/doc/html/rfc3829" class="link external">&raquo;&nbsp;RFC 3829</a>).
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-authzid-response">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-authzid-response">LDAP_CONTROL_AUTHZID_RESPONSE</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Authorization Identity Response (<a href="https://datatracker.ietf.org/doc/html/rfc3829" class="link external">&raquo;&nbsp;RFC 3829</a>).
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-sync">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-sync">LDAP_CONTROL_SYNC</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Content Synchronization Operation (<a href="https://datatracker.ietf.org/doc/html/rfc4533" class="link external">&raquo;&nbsp;RFC 4533</a>).
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-sync-state">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-sync-state">LDAP_CONTROL_SYNC_STATE</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Content Synchronization Operation State (<a href="https://datatracker.ietf.org/doc/html/rfc4533" class="link external">&raquo;&nbsp;RFC 4533</a>).
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-sync-done">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-sync-done">LDAP_CONTROL_SYNC_DONE</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Content Synchronization Operation Done (<a href="https://datatracker.ietf.org/doc/html/rfc4533" class="link external">&raquo;&nbsp;RFC 4533</a>).
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-dontusecopy">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-dontusecopy">LDAP_CONTROL_DONTUSECOPY</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Don&#039;t Use Copy (<a href="https://datatracker.ietf.org/doc/html/rfc6171" class="link external">&raquo;&nbsp;RFC 6171</a>).
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-passwordpolicyrequest">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-passwordpolicyrequest">LDAP_CONTROL_PASSWORDPOLICYREQUEST</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Password Policy Request.
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-passwordpolicyresponse">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-passwordpolicyresponse">LDAP_CONTROL_PASSWORDPOLICYRESPONSE</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Password Policy Response.
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-x-incremental-values">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-x-incremental-values">LDAP_CONTROL_X_INCREMENTAL_VALUES</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Active Directory Incremental Values.
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-x-domain-scope">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-x-domain-scope">LDAP_CONTROL_X_DOMAIN_SCOPE</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Active Directory Domain Scope.
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-x-permissive-modify">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-x-permissive-modify">LDAP_CONTROL_X_PERMISSIVE_MODIFY</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Active Directory Permissive Modify.
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-x-search-options">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-x-search-options">LDAP_CONTROL_X_SEARCH_OPTIONS</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Active Directory Search Options.
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-x-tree-delete">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-x-tree-delete">LDAP_CONTROL_X_TREE_DELETE</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Active Directory Tree Delete.
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-x-extended-dn">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-x-extended-dn">LDAP_CONTROL_X_EXTENDED_DN</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Active Directory Extended DN.
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-vlvrequest">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-vlvrequest">LDAP_CONTROL_VLVREQUEST</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Virtual List View Request.
     Available as of PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-control-vlvresponse">
    <strong><code><a href="ldap.constants.php#constant.ldap-control-vlvresponse">LDAP_CONTROL_VLVRESPONSE</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Control Constant - Virtual List View Response.
     Available as of PHP 7.3.0.
    </span>
   </dd>
  

  
   <dt id="constant.ldap-escape-dn">
    <strong><code><a href="ldap.constants.php#constant.ldap-escape-dn">LDAP_ESCAPE_DN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Escape a string for use in an LDAP DN.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-escape-filter">
    <strong><code><a href="ldap.constants.php#constant.ldap-escape-filter">LDAP_ESCAPE_FILTER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Escape a string for use in an LDAP filter.
    </span>
   </dd>
  

  
   <dt id="constant.ldap-modify-batch-attrib">
    <strong><code><a href="ldap.constants.php#constant.ldap-modify-batch-attrib">LDAP_MODIFY_BATCH_ATTRIB</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The key of the modifications array containing the attributes:
     <code class="literal">attrib</code>.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-modify-batch-modtype">
    <strong><code><a href="ldap.constants.php#constant.ldap-modify-batch-modtype">LDAP_MODIFY_BATCH_MODTYPE</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The key of the modifications array containing the type of modification:
     <code class="literal">modtype</code>.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-modify-batch-values">
    <strong><code><a href="ldap.constants.php#constant.ldap-modify-batch-values">LDAP_MODIFY_BATCH_VALUES</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The key of the modifications array containing the values:
     <code class="literal">values</code>.
    </span>
   </dd>
  

   
   <dt id="constant.ldap-modify-batch-add">
    <strong><code><a href="ldap.constants.php#constant.ldap-modify-batch-add">LDAP_MODIFY_BATCH_ADD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Add values to an attribute of an LDAP entry.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-modify-batch-remove">
    <strong><code><a href="ldap.constants.php#constant.ldap-modify-batch-remove">LDAP_MODIFY_BATCH_REMOVE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Remove values from an attribute of an LDAP entry.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-modify-batch-remove-all">
    <strong><code><a href="ldap.constants.php#constant.ldap-modify-batch-remove-all">LDAP_MODIFY_BATCH_REMOVE_ALL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Remove all values from an attribute of an LDAP entry.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-modify-batch-replace">
    <strong><code><a href="ldap.constants.php#constant.ldap-modify-batch-replace">LDAP_MODIFY_BATCH_REPLACE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Replace all current values of an LDAP entry attribute with the specified values.
    </span>
   </dd>
  

  
   <dt id="constant.ldap-opt-timeout">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-timeout">LDAP_OPT_TIMEOUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies a timeout (in seconds) after which calls to synchronous LDAP APIs
     will abort if no response is received.
     Also controls the timeout when communicating with the KDC in case of SASL bind.
    </span>
   </dd>
  

  
   <dt id="constant.ldap-opt-x-sasl-authcid">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-sasl-authcid">LDAP_OPT_X_SASL_AUTHCID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Return the SASL authentication identity.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-sasl-authzid">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-sasl-authzid">LDAP_OPT_X_SASL_AUTHZID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Return the SASL authorization identity.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-sasl-mech">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-sasl-mech">LDAP_OPT_X_SASL_MECH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Return the SASL mechanism.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-sasl-nocanon">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-sasl-nocanon">LDAP_OPT_X_SASL_NOCANON</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Set/get the <code class="literal">NOCANON</code> flag.
     When unset, the hostname is canonicalized.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-sasl-realm">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-sasl-realm">LDAP_OPT_X_SASL_REALM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Return the SASL realm.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-sasl-username">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-sasl-username">LDAP_OPT_X_SASL_USERNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Return the SASL username.
    </span>
   </dd>
  

  
   <dt id="constant.ldap-opt-x-tls-allow">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-allow">LDAP_OPT_X_TLS_ALLOW</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The peer certificate is requested.
     If no certificate is provided, the session proceeds normally.
     If a bad certificate is provided,
     it will be ignored and the session proceeds normally.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-demand">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-demand">LDAP_OPT_X_TLS_DEMAND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The peer certificate is requested.
     If no certificate is provided, or a bad certificate is provided,
     the session is immediately terminated.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-hard">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-hard">LDAP_OPT_X_TLS_HARD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-demand">LDAP_OPT_X_TLS_DEMAND</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-never">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-never">LDAP_OPT_X_TLS_NEVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The peer certificate is not requested or checked.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-try">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-try">LDAP_OPT_X_TLS_TRY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The peer certificate is requested.
     If no certificate is provided, the session proceeds normally.
     If a bad certificate is provided, the session is immediately terminated.
    </span>
   </dd>
  

  
   <dt id="constant.ldap-opt-x-tls-crl-all">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-crl-all">LDAP_OPT_X_TLS_CRL_ALL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Check the CRL for a whole certificate chain.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-crl-none">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-crl-none">LDAP_OPT_X_TLS_CRL_NONE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No CRL checks are performed.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-crl-peer">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-crl-peer">LDAP_OPT_X_TLS_CRL_PEER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Check the CRL of the peer certificate.
    </span>
   </dd>
  

  
   <dt id="constant.ldap-opt-x-tls-package">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-package">LDAP_OPT_X_TLS_PACKAGE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Return the name of the underlying TLS implementation.
    </span>
   </dd>
  

  
   <dt id="constant.ldap-opt-x-tls-protocol-ssl2">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-protocol-ssl2">LDAP_OPT_X_TLS_PROTOCOL_SSL2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The SSL 2.0 protocol.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-protocol-ssl3">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-protocol-ssl3">LDAP_OPT_X_TLS_PROTOCOL_SSL3</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The SSL 3 protocol.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-protocol-tls1-0">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-protocol-tls1-0">LDAP_OPT_X_TLS_PROTOCOL_TLS1_0</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The TLS 1.0 protocol.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-protocol-tls1-1">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-protocol-tls1-1">LDAP_OPT_X_TLS_PROTOCOL_TLS1_1</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The TLS 1.1 protocol.
    </span>
   </dd>
  
  
   <dt id="constant.ldap-opt-x-tls-protocol-tls1-2">
    <strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-protocol-tls1-2">LDAP_OPT_X_TLS_PROTOCOL_TLS1_2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The TLS 1.2 protocol.
    </span>
   </dd>
  

 </dl>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ldap/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fldap.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ldap.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ldap.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.ldap.php">LDAP</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.ldap.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="ldap.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="ldap.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ldap.using.php" title="Using the PHP LDAP calls">Using the PHP LDAP calls</a>
                        </li>
                                                <li class="">
                            <a href="ldap.controls.php" title="LDAP controls">LDAP controls</a>
                        </li>
                                                <li class="">
                            <a href="ldap.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="ref.ldap.php" title="LDAP Functions">LDAP Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.ldap-connection.php" title="LDAP\Connection">LDAP\Connection</a>
                        </li>
                                                <li class="">
                            <a href="class.ldap-result.php" title="LDAP\Result">LDAP\Result</a>
                        </li>
                                                <li class="">
                            <a href="class.ldap-result-entry.php" title="LDAP\ResultEntry">LDAP\ResultEntry</a>
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
