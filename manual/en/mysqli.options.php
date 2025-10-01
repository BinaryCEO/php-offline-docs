<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli::options - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli.options.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli.options.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.options.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli.next-result.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli.ping.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.options.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli.options.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli.options.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli.options.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli.options.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli.options.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli.options.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli.options.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli.options.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli.options.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli.options.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set options" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli::options - Manual" />
<meta name="twitter:description" content="Set options" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli::options - Manual" />
<meta itemprop="description" content="Set options" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set options" />

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
        <a href="mysqli.ping.php">
          mysqli::ping &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli.next-result.php">
          &laquo; mysqli::next_result        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqli.php'>MySQLi</a></li>      <li><a href='class.mysqli.php'>mysqli</a></li>      </ul>
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
            <option value='en/mysqli.options.php' selected="selected">English</option>
            <option value='de/mysqli.options.php'>German</option>
            <option value='es/mysqli.options.php'>Spanish</option>
            <option value='fr/mysqli.options.php'>French</option>
            <option value='it/mysqli.options.php'>Italian</option>
            <option value='ja/mysqli.options.php'>Japanese</option>
            <option value='pt_BR/mysqli.options.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli.options.php'>Russian</option>
            <option value='tr/mysqli.options.php'>Turkish</option>
            <option value='uk/mysqli.options.php'>Ukrainian</option>
            <option value='zh/mysqli.options.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli.options" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli::options</h1>
  <h1 class="refname">mysqli_options</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli::options</span> -- <span class="refname">mysqli_options</span> &mdash; <span class="dc-title">Set options</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli.options-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>mysqli::options</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$option</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>mysqli_options</strong></span>(<span class="methodparam"><span class="type"><a href="class.mysqli.php" class="type mysqli">mysqli</a></span> <code class="parameter">$mysql</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$option</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Used to set extra connect options and affect behavior for a connection.
  </p>
  <p class="para">
   This function may be called multiple times to set several options.
  </p>
  <p class="para">
   <span class="function"><strong>mysqli_options()</strong></span> should be called after
   <span class="function"><a href="mysqli.init.php" class="function">mysqli_init()</a></span> and before
   <span class="function"><a href="mysqli.real-connect.php" class="function">mysqli_real_connect()</a></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-mysqli.options-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">mysql</code></dt><dd><p class="para">Procedural style only: A <span class="classname"><a href="class.mysqli.php" class="classname">mysqli</a></span> object
returned by <span class="function"><a href="function.mysqli-connect.php" class="function">mysqli_connect()</a></span> or <span class="function"><a href="mysqli.init.php" class="function">mysqli_init()</a></span>
</p></dd>
    
     <dt><code class="parameter">option</code></dt>
     <dd>
      <p class="para">
       The option that you want to set. It can be one of the following values:
       <table id="mysqli.options.parameters" class="doctable table">
        <caption><strong>Valid options</strong></caption>
        
         <thead>
          <tr>
           <th>Name</th>
           <th>Description</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-opt-connect-timeout">MYSQLI_OPT_CONNECT_TIMEOUT</a></code></strong></td>
           <td>Connection timeout in seconds</td>
          </tr>

          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-opt-read-timeout">MYSQLI_OPT_READ_TIMEOUT</a></code></strong></td>
           <td>Command execution result timeout in seconds. Available as of PHP 7.2.0.</td>
          </tr>

          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-opt-local-infile">MYSQLI_OPT_LOCAL_INFILE</a></code></strong></td>
           <td>Enable/disable use of <code class="literal">LOAD LOCAL INFILE</code></td>
          </tr>

          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-init-command">MYSQLI_INIT_COMMAND</a></code></strong></td>
           <td>Command to execute after when connecting to MySQL server</td>
          </tr>

          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-set-charset-name">MYSQLI_SET_CHARSET_NAME</a></code></strong></td>
           <td>The charset to be set as default.</td>
          </tr>

          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-read-default-file">MYSQLI_READ_DEFAULT_FILE</a></code></strong></td>
           <td>
            Read options from named option file instead of <var class="filename">my.cnf</var>
            Not supported by mysqlnd.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-read-default-group">MYSQLI_READ_DEFAULT_GROUP</a></code></strong></td>
           <td>
            Read options from the named group from <var class="filename">my.cnf</var>
            or the file specified with <strong><code>MYSQL_READ_DEFAULT_FILE</code></strong>.
            Not supported by mysqlnd.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-server-public-key">MYSQLI_SERVER_PUBLIC_KEY</a></code></strong></td>
           <td>
             RSA public key file used with the SHA-256 based authentication.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-opt-net-cmd-buffer-size">MYSQLI_OPT_NET_CMD_BUFFER_SIZE</a></code></strong></td>
           <td>
             The size of the internal command/network buffer. Only valid for
             mysqlnd.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-opt-net-read-buffer-size">MYSQLI_OPT_NET_READ_BUFFER_SIZE</a></code></strong></td>
           <td>
             Maximum read chunk size in bytes when reading the body of a MySQL
             command packet. Only valid for mysqlnd.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-opt-int-and-float-native">MYSQLI_OPT_INT_AND_FLOAT_NATIVE</a></code></strong></td>
           <td>
             Convert integer and float columns back to PHP numbers when using non-prepared statements.
             Only valid for mysqlnd.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-opt-ssl-verify-server-cert">MYSQLI_OPT_SSL_VERIFY_SERVER_CERT</a></code></strong></td>
           <td>
            Whether to verify server certificate or not.
           </td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The value for the option.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-mysqli.options-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-mysqli.options-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
If mysqli error reporting is enabled (<strong><code><a href="mysqli.constants.php#constant.mysqli-report-error">MYSQLI_REPORT_ERROR</a></code></strong>) and the requested operation fails,
a warning is generated. If, in addition, the mode is set to <strong><code><a href="mysqli.constants.php#constant.mysqli-report-strict">MYSQLI_REPORT_STRICT</a></code></strong>,
a <span class="classname"><a href="class.mysqli-sql-exception.php" class="classname">mysqli_sql_exception</a></span> is thrown instead.</p>
 </div>


 <div class="refsect1 examples" id="refsect1-mysqli.options-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   See <span class="function"><a href="mysqli.real-connect.php" class="function">mysqli_real_connect()</a></span>.
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-mysqli.options-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
<p class="para">MySQLnd always assumes the server default charset. This charset is sent during connection
hand-shake/authentication, which mysqlnd will use.</p><p class="para">Libmysqlclient uses the default charset set in the
<var class="filename">my.cnf</var> or by an explicit call to <span class="function"><strong>mysqli_options()</strong></span> prior to
calling <span class="function"><a href="mysqli.real-connect.php" class="function">mysqli_real_connect()</a></span>, but after <span class="function"><a href="mysqli.init.php" class="function">mysqli_init()</a></span>.</p></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-mysqli.options-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli.init.php" class="function" rel="rdfs-seeAlso">mysqli_init()</a> - Initializes MySQLi and returns an object for use with mysqli_real_connect()</span></li>
    <li><span class="function"><a href="mysqli.real-connect.php" class="function" rel="rdfs-seeAlso">mysqli_real_connect()</a> - Opens a connection to a mysql server</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli/options.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli.options%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli.options&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.options.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="128547">  <div class="votes">
    <div id="Vu128547">
    <a href="/manual/vote-note.php?id=128547&amp;page=mysqli.options&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128547">
    <a href="/manual/vote-note.php?id=128547&amp;page=mysqli.options&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128547" title="100% like this...">
    3
    </div>
  </div>
  <a href="#128547" class="name">
  <strong class="user"><em>Guy Sartorelli</em></strong></a><a class="genanchor" href="#128547"> &para;</a><div class="date" title="2023-05-18 02:17"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128547">
<div class="phpcode"><code><span class="html">The `MYSQLI_OPT_SSL_VERIFY_SERVER_CERT` seems to always fail, with `options()` always returning false.<br />Use the `MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT` flag with `real_connect()` instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="122965">  <div class="votes">
    <div id="Vu122965">
    <a href="/manual/vote-note.php?id=122965&amp;page=mysqli.options&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122965">
    <a href="/manual/vote-note.php?id=122965&amp;page=mysqli.options&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122965" title="76% like this...">
    9
    </div>
  </div>
  <a href="#122965" class="name">
  <strong class="user"><em>php at darkain dot com</em></strong></a><a class="genanchor" href="#122965"> &para;</a><div class="date" title="2018-07-20 10:14"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122965">
<div class="phpcode"><code><span class="html">There is an undocumented option: MYSQLI_OPT_READ_TIMEOUT. This is similar to MYSQLI_OPT_CONNECT_TIMEOUT in theory, but has a slightly different application. Connection timeout only specifies the wait time for the initial TCP connection. Once that is created, the timeout no longer applies. Read timeout, however, is from the time the TCP connection is created until the first packet of actual data is received. There are instances where a TCP connection can be established, but the MySQL server stalls indefinitely, preventing execution from ever returning to PHP. Specifying a read timeout alleviates this condition, whereas connect timeout wouldn't. <br /><br />If the MYSQLI_OPT_READ_TIMEOUT constant isn't defined, it is still supported on versions where that isn't the case. You can define it yourself in older PHP versions with the following code.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (!</span><span class="default">defined</span><span class="keyword">(</span><span class="string">'MYSQLI_OPT_READ_TIMEOUT'</span><span class="keyword">)) {<br />    </span><span class="default">define </span><span class="keyword">(</span><span class="string">'MYSQLI_OPT_READ_TIMEOUT'</span><span class="keyword">, </span><span class="default">11</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />You can then use read timeout the same way you could a connect timeout as follows. Please note that since these are two different timeout values for two different parts of the entire connection process, the timeouts do stack (eg: 10 seconds connect timeout + 10 seconds read timeout = maximum possible timeout of 20 seconds)<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//create the object<br /></span><span class="default">$connection </span><span class="keyword">= </span><span class="default">mysqli_init</span><span class="keyword">();<br /><br /></span><span class="comment">//specify the connection timeout<br /></span><span class="default">$connection</span><span class="keyword">-&gt;</span><span class="default">options</span><span class="keyword">(</span><span class="default">MYSQLI_OPT_CONNECT_TIMEOUT</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br /><br /></span><span class="comment">//specify the read timeout<br /></span><span class="default">$connection</span><span class="keyword">-&gt;</span><span class="default">options</span><span class="keyword">(</span><span class="default">MYSQLI_OPT_READ_TIMEOUT</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br /><br /></span><span class="comment">//initiate the connection to the server, using both previously specified timeouts<br /></span><span class="default">$connection</span><span class="keyword">-&gt;</span><span class="default">real_connect</span><span class="keyword">(</span><span class="string">'server'</span><span class="keyword">, </span><span class="string">'user'</span><span class="keyword">, </span><span class="string">'pass'</span><span class="keyword">, </span><span class="string">'database'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73723">  <div class="votes">
    <div id="Vu73723">
    <a href="/manual/vote-note.php?id=73723&amp;page=mysqli.options&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73723">
    <a href="/manual/vote-note.php?id=73723&amp;page=mysqli.options&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73723" title="64% like this...">
    8
    </div>
  </div>
  <a href="#73723" class="name">
  <strong class="user"><em>fluppy</em></strong></a><a class="genanchor" href="#73723"> &para;</a><div class="date" title="2007-03-07 02:46"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73723">
<div class="phpcode"><code><span class="html">Here es little example to create a SSL Connection
<br />
<br /><span class="default">&lt;?php
<br />
<br />$db </span><span class="keyword">= </span><span class="default">mysqli_init</span><span class="keyword">();
<br />
<br /></span><span class="comment">/*
<br />When you want so use a separate cnf
<br />$test = $db-&gt;options(MYSQLI_EAD_DEFAULT_FILE,'myother.cnf');
<br />*/
<br />
<br /></span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">ssl_set</span><span class="keyword">(</span><span class="string">'server-key.pem'</span><span class="keyword">,</span><span class="string">'server-cert.pem'</span><span class="keyword">,
<br /></span><span class="string">'cacert.pem'</span><span class="keyword">,</span><span class="default">NULL</span><span class="keyword">,</span><span class="default">NULL</span><span class="keyword">);
<br />
<br /></span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">real_connect</span><span class="keyword">(</span><span class="string">'localhost'</span><span class="keyword">,</span><span class="string">'root'</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="string">'mydb'</span><span class="keyword">);
<br />
<br /></span><span class="comment">//Here some query
<br />
<br /></span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127600">  <div class="votes">
    <div id="Vu127600">
    <a href="/manual/vote-note.php?id=127600&amp;page=mysqli.options&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127600">
    <a href="/manual/vote-note.php?id=127600&amp;page=mysqli.options&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127600" title="75% like this...">
    2
    </div>
  </div>
  <a href="#127600" class="name">
  <strong class="user"><em>puneetsharam9 at hotmail dot com</em></strong></a><a class="genanchor" href="#127600"> &para;</a><div class="date" title="2022-09-08 05:35"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127600">
<div class="phpcode"><code><span class="html">With Objective Approach  <br />init of mysqli is depreciated from 8.1 it seem so<br />You could have to use an empty __construct()<br />So You have proper int and float <br /><br />class DB extends \mysqli {<br />   private function __construct(<br />           private $_user = DBUSER,<br />           private $_pass = DBPWD,<br />           private $_dbName = DBNAME,<br />           private $_dbHost = DBHOST,<br />   ) {<br />      parent::__construct();<br />      parent::options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);<br />      parent::real_connect($this-&gt;_dbHost, $this-&gt;_user, $this-&gt;_pass, $this-&gt;_dbName);<br />      }<br />   }</span></code></div>
  </div>
 </div>
  <div class="note" id="126807">  <div class="votes">
    <div id="Vu126807">
    <a href="/manual/vote-note.php?id=126807&amp;page=mysqli.options&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126807">
    <a href="/manual/vote-note.php?id=126807&amp;page=mysqli.options&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126807" title="75% like this...">
    2
    </div>
  </div>
  <a href="#126807" class="name">
  <strong class="user"><em>Procedural Man</em></strong></a><a class="genanchor" href="#126807"> &para;</a><div class="date" title="2022-01-27 02:59"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126807">
<div class="phpcode"><code><span class="html">Although it is not explained on the manual, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT is an option only valid for mysqlnd and will raise an error if used with mysqli.</span></code></div>
  </div>
 </div>
  <div class="note" id="81126">  <div class="votes">
    <div id="Vu81126">
    <a href="/manual/vote-note.php?id=81126&amp;page=mysqli.options&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81126">
    <a href="/manual/vote-note.php?id=81126&amp;page=mysqli.options&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81126" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#81126" class="name">
  <strong class="user"><em>king at bobfish dot org</em></strong></a><a class="genanchor" href="#81126"> &para;</a><div class="date" title="2008-02-14 12:05"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81126">
<div class="phpcode"><code><span class="html">Example on using mysqli_options to increase size of max_allowed_packet for working with big blobs.<br /><br />function dbConnect()<br />{<br />   $user = 'jomama';<br />   $pass = 'cartoon';<br />   $dbName = 'LifeCycle';<br />   $host = 'localhost';<br /><br />   $mysqli = mysqli_init();<br />   mysqli_options($mysqli,MYSQLI_READ_DEFAULT_GROUP,<br />                                    "max_allowed_packet=50M");<br />   mysqli_real_connect($mysqli,$host, $user, $pass,$dbName) <br />                  or die ('&lt;P&gt;Unable to connect&lt;/P&gt;');<br /><br />   return $mysqli;<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli.options&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.options.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.mysqli.php">mysqli</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mysqli.affected-rows.php" title="$affected_&#8203;rows">$affected_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.autocommit.php" title="autocommit">autocommit</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.begin-transaction.php" title="begin_&#8203;transaction">begin_&#8203;transaction</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.change-user.php" title="change_&#8203;user">change_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.character-set-name.php" title="character_&#8203;set_&#8203;name">character_&#8203;set_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.commit.php" title="commit">commit</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.connect-errno.php" title="$connect_&#8203;errno">$connect_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.connect-error.php" title="$connect_&#8203;error">$connect_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.debug.php" title="debug">debug</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.dump-debug-info.php" title="dump_&#8203;debug_&#8203;info">dump_&#8203;debug_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.errno.php" title="$errno">$errno</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.error.php" title="$error">$error</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.error-list.php" title="$error_&#8203;list">$error_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.execute-query.php" title="execute_&#8203;query">execute_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.field-count.php" title="$field_&#8203;count">$field_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-charset.php" title="get_&#8203;charset">get_&#8203;charset</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-client-info.php" title="$client_&#8203;info">$client_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-client-version.php" title="$client_&#8203;version">$client_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-connection-stats.php" title="get_&#8203;connection_&#8203;stats">get_&#8203;connection_&#8203;stats</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-host-info.php" title="$host_&#8203;info">$host_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-proto-info.php" title="$protocol_&#8203;version">$protocol_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-server-info.php" title="$server_&#8203;info">$server_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-server-version.php" title="$server_&#8203;version">$server_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-warnings.php" title="get_&#8203;warnings">get_&#8203;warnings</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.info.php" title="$info">$info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.insert-id.php" title="$insert_&#8203;id">$insert_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.more-results.php" title="more_&#8203;results">more_&#8203;results</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.multi-query.php" title="multi_&#8203;query">multi_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.next-result.php" title="next_&#8203;result">next_&#8203;result</a>
                        </li>
                                                <li class="current">
                            <a href="mysqli.options.php" title="options">options</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.poll.php" title="poll">poll</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.prepare.php" title="prepare">prepare</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.query.php" title="query">query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.real-connect.php" title="real_&#8203;connect">real_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.real-escape-string.php" title="real_&#8203;escape_&#8203;string">real_&#8203;escape_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.real-query.php" title="real_&#8203;query">real_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.reap-async-query.php" title="reap_&#8203;async_&#8203;query">reap_&#8203;async_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.release-savepoint.php" title="release_&#8203;savepoint">release_&#8203;savepoint</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.rollback.php" title="rollback">rollback</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.savepoint.php" title="savepoint">savepoint</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.select-db.php" title="select_&#8203;db">select_&#8203;db</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.set-charset.php" title="set_&#8203;charset">set_&#8203;charset</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.sqlstate.php" title="$sqlstate">$sqlstate</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.ssl-set.php" title="ssl_&#8203;set">ssl_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.stat.php" title="stat">stat</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.stmt-init.php" title="stmt_&#8203;init">stmt_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.store-result.php" title="store_&#8203;result">store_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.thread-id.php" title="$thread_&#8203;id">$thread_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.thread-safe.php" title="thread_&#8203;safe">thread_&#8203;safe</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.use-result.php" title="use_&#8203;result">use_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.warning-count.php" title="$warning_&#8203;count">$warning_&#8203;count</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="mysqli.init.php" title="init">init</a>
                    </li>
                                    <li class="">
                        <a href="mysqli.kill.php" title="kill">kill</a>
                    </li>
                                    <li class="">
                        <a href="mysqli.ping.php" title="ping">ping</a>
                    </li>
                                    <li class="">
                        <a href="mysqli.refresh.php" title="refresh">refresh</a>
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
