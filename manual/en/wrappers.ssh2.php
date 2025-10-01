<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ssh2:// - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/wrappers.ssh2.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/wrappers.ssh2.php">
 <link rel="alternate" href="https://www.php.net/manual/en/wrappers.ssh2.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/wrappers.php">
 <link rel="prev" href="https://www.php.net/manual/en/wrappers.phar.php">
 <link rel="next" href="https://www.php.net/manual/en/wrappers.rar.php">

 <link rel="alternate" href="https://www.php.net/manual/en/wrappers.ssh2.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/wrappers.ssh2.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/wrappers.ssh2.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/wrappers.ssh2.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/wrappers.ssh2.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/wrappers.ssh2.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/wrappers.ssh2.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/wrappers.ssh2.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/wrappers.ssh2.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/wrappers.ssh2.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/wrappers.ssh2.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Secure Shell 2" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ssh2:// - Manual" />
<meta name="twitter:description" content="Secure Shell 2" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ssh2:// - Manual" />
<meta itemprop="description" content="Secure Shell 2" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Secure Shell 2" />

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
        <a href="wrappers.rar.php">
          rar:// &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="wrappers.phar.php">
          &laquo; phar://        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='wrappers.php'>Supported Protocols and Wrappers</a></li>      </ul>
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
            <option value='en/wrappers.ssh2.php' selected="selected">English</option>
            <option value='de/wrappers.ssh2.php'>German</option>
            <option value='es/wrappers.ssh2.php'>Spanish</option>
            <option value='fr/wrappers.ssh2.php'>French</option>
            <option value='it/wrappers.ssh2.php'>Italian</option>
            <option value='ja/wrappers.ssh2.php'>Japanese</option>
            <option value='pt_BR/wrappers.ssh2.php'>Brazilian Portuguese</option>
            <option value='ru/wrappers.ssh2.php'>Russian</option>
            <option value='tr/wrappers.ssh2.php'>Turkish</option>
            <option value='uk/wrappers.ssh2.php'>Ukrainian</option>
            <option value='zh/wrappers.ssh2.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="wrappers.ssh2" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ssh2://</h1>
  <p class="refpurpose"><span class="refname">ssh2://</span> &mdash; <span class="dc-title">Secure Shell 2</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-wrappers.ssh2-description">
  <h3 class="title">Description</h3>
  <p class="para">
   <var class="filename">ssh2.shell://</var>
   <var class="filename">ssh2.exec://</var>
   <var class="filename">ssh2.tunnel://</var>
   <var class="filename">ssh2.sftp://</var>
   <var class="filename">ssh2.scp://</var>
   (PECL)
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <strong>This wrapper is not enabled by default</strong><br />
   <span class="simpara">
    In order to use the <var class="filename">ssh2.*://</var> wrappers,
    the
    <a href="https://pecl.php.net/package/ssh2" class="link external">&raquo;&nbsp;SSH2</a>
    extension available from <a href="https://pecl.php.net/" class="link external">&raquo;&nbsp;PECL</a> must be installed.
   </span>
  </p></blockquote>

  <p class="simpara">
   In addition to accepting traditional URI login details, the ssh2 wrappers
   will also reuse open connections by passing the connection resource in the
   host portion of the URL.
  </p>
 </div>


 <div class="refsect1 usage" id="refsect1-wrappers.ssh2-usage"> 
  <h3 class="title">Usage</h3>
  <ul class="itemizedlist">
   <li class="listitem"><span class="simpara"><var class="filename">ssh2.shell://user:pass@example.com:22/xterm</var></span></li>
   <li class="listitem"><span class="simpara"><var class="filename">ssh2.exec://user:pass@example.com:22/usr/local/bin/somecmd</var></span></li>
   <li class="listitem"><span class="simpara"><var class="filename">ssh2.tunnel://user:pass@example.com:22/192.168.0.1:14</var></span></li>
   <li class="listitem"><span class="simpara"><var class="filename">ssh2.sftp://user:pass@example.com:22/path/to/filename</var></span></li>
  </ul>
 </div>
 

 <div class="refsect1 options" id="refsect1-wrappers.ssh2-options">
  <h3 class="title">Options</h3>
  <p class="para">
   <table class="doctable table">
    <caption><strong>Wrapper Summary</strong></caption>
    
     <thead>
      <tr>
       <th>Attribute</th>
       <th>ssh2.shell</th>
       <th>ssh2.exec</th>
       <th>ssh2.tunnel</th>
       <th>ssh2.sftp</th>
       <th>ssh2.scp</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>Restricted by <a href="filesystem.configuration.php#ini.allow-url-fopen" class="link">allow_url_fopen</a></td>
       <td>Yes</td>
       <td>Yes</td>
       <td>Yes</td>
       <td>Yes</td>
       <td>Yes</td>
      </tr>

      <tr>
       <td>Allows Reading</td>
       <td>Yes</td>
       <td>Yes</td>
       <td>Yes</td>
       <td>Yes</td>
       <td>Yes</td>
      </tr>

      <tr>
       <td>Allows Writing</td>
       <td>Yes</td>
       <td>Yes</td>
       <td>Yes</td>
       <td>Yes</td>
       <td>No</td>
      </tr>

      <tr>
       <td>Allows Appending</td>
       <td>No</td>
       <td>No</td>
       <td>No</td>
       <td>Yes (When supported by server)</td>
       <td>No</td>
      </tr>

      <tr>
       <td>Allows Simultaneous Reading and Writing</td>
       <td>Yes</td>
       <td>Yes</td>
       <td>Yes</td>
       <td>Yes</td>
       <td>No</td>
      </tr>

      <tr>
       <td>Supports <span class="function"><a href="function.stat.php" class="function">stat()</a></span></td>
       <td>No</td>
       <td>No</td>
       <td>No</td>
       <td>Yes</td>
       <td>No</td>
      </tr>

      <tr>
       <td>Supports <span class="function"><a href="function.unlink.php" class="function">unlink()</a></span></td>
       <td>No</td>
       <td>No</td>
       <td>No</td>
       <td>Yes</td>
       <td>No</td>
      </tr>

      <tr>
       <td>Supports <span class="function"><a href="function.rename.php" class="function">rename()</a></span></td>
       <td>No</td>
       <td>No</td>
       <td>No</td>
       <td>Yes</td>
       <td>No</td>
      </tr>

      <tr>
       <td>Supports <span class="function"><a href="function.mkdir.php" class="function">mkdir()</a></span></td>
       <td>No</td>
       <td>No</td>
       <td>No</td>
       <td>Yes</td>
       <td>No</td>
      </tr>

      <tr>
       <td>Supports <span class="function"><a href="function.rmdir.php" class="function">rmdir()</a></span></td>
       <td>No</td>
       <td>No</td>
       <td>No</td>
       <td>Yes</td>
       <td>No</td>
      </tr>

     </tbody>
    
   </table>

  </p>


  
  <p class="para">
   <table class="doctable table">
    <caption><strong>Context options</strong></caption>
    
     <thead>
      <tr>
       <th>Name</th>
       <th>Usage</th>
       <th>Default</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td><code class="literal">session</code></td>
       <td>Preconnected ssh2 resource to be reused</td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><code class="literal">sftp</code></td>
       <td>Preallocated sftp resource to be reused</td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><code class="literal">methods</code></td>
       <td>Key exchange, hostkey, cipher, compression, and MAC methods to use</td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><code class="literal">callbacks</code></td>
       <td class="empty">&nbsp;</td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><code class="literal">username</code></td>
       <td>Username to connect as</td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><code class="literal">password</code></td>
       <td>Password to use with password authentication</td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><code class="literal">pubkey_file</code></td>
       <td>Name of public key file to use for authentication</td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><code class="literal">privkey_file</code></td>
       <td>Name of private key file to use for authentication</td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><code class="literal">env</code></td>
       <td>Associate array of environment variables to set</td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><code class="literal">term</code></td>
       <td>Terminal emulation type to request when allocating a pty</td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><code class="literal">term_width</code></td>
       <td>Width of terminal requested when allocating a pty</td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><code class="literal">term_height</code></td>
       <td>Height of terminal requested when allocating a pty</td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><code class="literal">term_units</code></td>
       <td>Units to use with term_width and term_height</td>
       <td><strong><code><a href="ssh2.constants.php#constant.ssh2-term-unit-chars">SSH2_TERM_UNIT_CHARS</a></code></strong></td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>
 

 <div class="refsect1 examples" id="refsect1-wrappers.ssh2-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-508">
   <p><strong>Example #1 Opening a stream from an active connection</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$session </span><span style="color: #007700">= </span><span style="color: #0000BB">ssh2_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'example.com'</span><span style="color: #007700">, </span><span style="color: #0000BB">22</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ssh2_auth_pubkey_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$session</span><span style="color: #007700">, </span><span style="color: #DD0000">'username'</span><span style="color: #007700">, </span><span style="color: #DD0000">'/home/username/.ssh/id_rsa.pub'</span><span style="color: #007700">,<br />                                            </span><span style="color: #DD0000">'/home/username/.ssh/id_rsa'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stream </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"ssh2.tunnel://</span><span style="color: #0000BB">$session</span><span style="color: #DD0000">/remote.example.com:1234"</span><span style="color: #007700">, </span><span style="color: #DD0000">'r'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-509">
   <p><strong>Example #2 This <var class="varname">$session</var> variable must be kept available!</strong></p>
   <div class="example-contents"><p>
    In order to use the <var class="filename">ssh2.*://$session</var> wrappers,
    the <var class="varname">$session</var> resource variable must be kept.
    The code below will not have the desired effect:
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$session </span><span style="color: #007700">= </span><span style="color: #0000BB">ssh2_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'example.com'</span><span style="color: #007700">, </span><span style="color: #0000BB">22</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ssh2_auth_pubkey_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$session</span><span style="color: #007700">, </span><span style="color: #DD0000">'username'</span><span style="color: #007700">, </span><span style="color: #DD0000">'/home/username/.ssh/id_rsa.pub'</span><span style="color: #007700">,<br />                                            </span><span style="color: #DD0000">'/home/username/.ssh/id_rsa'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$connection_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"ssh2.sftp://</span><span style="color: #0000BB">$session</span><span style="color: #DD0000">/"</span><span style="color: #007700">;<br />unset(</span><span style="color: #0000BB">$session</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stream </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$connection_string </span><span style="color: #007700">. </span><span style="color: #DD0000">"path/to/file"</span><span style="color: #007700">, </span><span style="color: #DD0000">'r'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>
    unset() closes the session, because <var class="varname">$connection_string</var> does not
    hold a reference to the <var class="varname">$session</var> variable, just a string cast
    derived from it. This also happens when the <span class="function"><a href="function.unset.php" class="function">unset()</a></span> is implicit
    because of leaving scope (like in a function).
   </p></div>
  </div>

 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/wrappers/ssh2.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fwrappers.ssh2%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=wrappers.ssh2&amp;repo=en&amp;redirect=https://www.php.net/manual/en/wrappers.ssh2.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112564">  <div class="votes">
    <div id="Vu112564">
    <a href="/manual/vote-note.php?id=112564&amp;page=wrappers.ssh2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112564">
    <a href="/manual/vote-note.php?id=112564&amp;page=wrappers.ssh2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112564" title="90% like this...">
    8
    </div>
  </div>
  <a href="#112564" class="name">
  <strong class="user"><em>exptom</em></strong></a><a class="genanchor" href="#112564"> &para;</a><div class="date" title="2013-06-30 09:37"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112564">
<div class="phpcode"><code><span class="html">The "password" context option can also be used to provide the passphrase for the keyfile supplied by "privkey_file" and "pubkey_file".<br /><br />Note this bug: <a href="https://bugs.php.net/bug.php?id=58573" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=58573</a><br />Encrypted keys may not work unless you build libssh2 against openssl. (It only worked for me on Debian Wheezy once I recompiled the library).</span></code></div>
  </div>
 </div>
  <div class="note" id="112128">  <div class="votes">
    <div id="Vu112128">
    <a href="/manual/vote-note.php?id=112128&amp;page=wrappers.ssh2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112128">
    <a href="/manual/vote-note.php?id=112128&amp;page=wrappers.ssh2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112128" title="78% like this...">
    8
    </div>
  </div>
  <a href="#112128" class="name">
  <strong class="user"><em>bluej100 at gmail dot com</em></strong></a><a class="genanchor" href="#112128"> &para;</a><div class="date" title="2013-05-07 10:42"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112128">
<div class="phpcode"><code><span class="html">Be aware that opendir is currently broken on sftp root directories, but you can work around it by appending a dot. See <a href="https://bugs.php.net/bug.php?id=64169" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=64169</a> and <a href="http://stackoverflow.com/a/16238476/69173." rel="nofollow" target="_blank">http://stackoverflow.com/a/16238476/69173.</a></span></code></div>
  </div>
 </div>
  <div class="note" id="121849">  <div class="votes">
    <div id="Vu121849">
    <a href="/manual/vote-note.php?id=121849&amp;page=wrappers.ssh2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121849">
    <a href="/manual/vote-note.php?id=121849&amp;page=wrappers.ssh2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121849" title="64% like this...">
    4
    </div>
  </div>
  <a href="#121849" class="name">
  <strong class="user"><em>guilhem at no dot spam dot answeb dot net</em></strong></a><a class="genanchor" href="#121849"> &para;</a><div class="date" title="2017-11-09 03:39"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121849">
<div class="phpcode"><code><span class="html">Please beware of a PHP bug, noted by thomas at gielfeldt dot dk, that you must intval() the connection variable before putting it in the connection string :<br /><br /><span class="default">&lt;?php<br />$connection </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="string">'shell.example.com'</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">);<br /></span><span class="default">ssh2_auth_password</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'username'</span><span class="keyword">, </span><span class="string">'password'</span><span class="keyword">);<br /></span><span class="default">$sftp </span><span class="keyword">= </span><span class="default">ssh2_sftp</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">);<br /></span><span class="comment">// See: <a href="https://bugs.php.net/bug.php?id=73597" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=73597</a><br /></span><span class="default">$stream </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"ssh2.s<a href="ftp://" rel="nofollow" target="_blank">ftp://</a>" </span><span class="keyword">. </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$sftp</span><span class="keyword">) . </span><span class="string">"/path/to/file"</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120870">  <div class="votes">
    <div id="Vu120870">
    <a href="/manual/vote-note.php?id=120870&amp;page=wrappers.ssh2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120870">
    <a href="/manual/vote-note.php?id=120870&amp;page=wrappers.ssh2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120870" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120870" class="name">
  <strong class="user"><em>thomas at gielfeldt dot dk</em></strong></a><a class="genanchor" href="#120870"> &para;</a><div class="date" title="2017-03-25 11:32"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120870">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// Connect with public key.<br /></span><span class="default">$session </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="string">'example.com'</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">);<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">ssh2_auth_pubkey_file</span><span class="keyword">(</span><span class="default">$session</span><span class="keyword">, </span><span class="string">'remote-username'</span><span class="keyword">, </span><span class="string">'/home/local-username/.ssh/id_rsa.pub'</span><span class="keyword">,<br />                                                             </span><span class="string">'/home/local-username/.ssh/id_rsa'</span><span class="keyword">, <br />                                                             </span><span class="string">'secret'</span><span class="keyword">);<br /></span><span class="comment">// Setup sftp stream wrapper<br /></span><span class="default">$sftp </span><span class="keyword">= </span><span class="default">ssh2_sftp</span><span class="keyword">(</span><span class="default">$session</span><span class="keyword">);<br /></span><span class="comment">// See: <a href="https://bugs.php.net/bug.php?id=73597" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=73597</a><br /></span><span class="default">$connection_string </span><span class="keyword">= </span><span class="string">'ssh2.s<a href="ftp://" rel="nofollow" target="_blank">ftp://</a>' </span><span class="keyword">. </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$sftp</span><span class="keyword">);<br /><br /></span><span class="comment">// List files in remote homedir.<br /></span><span class="default">$i </span><span class="keyword">= new </span><span class="default">\RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="string">"</span><span class="default">$connection_string</span><span class="string">/home/remote-username"</span><span class="keyword">);<br /></span><span class="default">$r </span><span class="keyword">= new </span><span class="default">\RecursiveIteratorIterator</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);<br />foreach (</span><span class="default">$r </span><span class="keyword">as </span><span class="default">$f</span><span class="keyword">) {<br />    print </span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">getPathname</span><span class="keyword">() . </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=wrappers.ssh2&amp;repo=en&amp;redirect=https://www.php.net/manual/en/wrappers.ssh2.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="wrappers.php">Supported Protocols and Wrappers</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="wrappers.file.php" title="file://">file://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.http.php" title="http://">http://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.ftp.php" title="ftp://">ftp://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.php.php" title="php://">php://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.compression.php" title="zlib://">zlib://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.data.php" title="data://">data://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.glob.php" title="glob://">glob://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.phar.php" title="phar://">phar://</a>
                        </li>
                                                <li class="current">
                            <a href="wrappers.ssh2.php" title="ssh2://">ssh2://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.rar.php" title="rar://">rar://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.audio.php" title="ogg://">ogg://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.expect.php" title="expect://">expect://</a>
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
