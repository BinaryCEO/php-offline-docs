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

 <link rel="canonical" href="https://www.php.net/manual/en/oci8.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/oci8.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/oci8.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.oci8.php">
 <link rel="prev" href="https://www.php.net/manual/en/oci8.configuration.php">
 <link rel="next" href="https://www.php.net/manual/en/oci8.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/oci8.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/oci8.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/oci8.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/oci8.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/oci8.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/oci8.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/oci8.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/oci8.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/oci8.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/oci8.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/oci8.constants.php" hreflang="zh">

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
        <a href="oci8.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="oci8.configuration.php">
          &laquo; Runtime Configuration        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.oci8.php'>OCI8</a></li>      </ul>
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
            <option value='en/oci8.constants.php' selected="selected">English</option>
            <option value='de/oci8.constants.php'>German</option>
            <option value='es/oci8.constants.php'>Spanish</option>
            <option value='fr/oci8.constants.php'>French</option>
            <option value='it/oci8.constants.php'>Italian</option>
            <option value='ja/oci8.constants.php'>Japanese</option>
            <option value='pt_BR/oci8.constants.php'>Brazilian Portuguese</option>
            <option value='ru/oci8.constants.php'>Russian</option>
            <option value='tr/oci8.constants.php'>Turkish</option>
            <option value='uk/oci8.constants.php'>Ukrainian</option>
            <option value='zh/oci8.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="oci8.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <table class="doctable table">
   <caption><strong>OCI8 Function and Method Modes</strong></caption>
   
     <thead>
       <tr>
         <th>Constant</th>
         <th>Description</th>
       </tr>

     </thead>

     <tbody class="tbody">
       <tr id="constant.oci-assoc">
         <td><strong><code><a href="oci8.constants.php#constant.oci-assoc">OCI_ASSOC</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-fetch-all.php" class="function">oci_fetch_all()</a></span> and
           <span class="function"><a href="function.oci-fetch-array.php" class="function">oci_fetch_array()</a></span> to get results as an associative
           array.
         </td>
       </tr>

       <tr id="constant.oci-both">
         <td><strong><code><a href="oci8.constants.php#constant.oci-both">OCI_BOTH</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-fetch-all.php" class="function">oci_fetch_all()</a></span> and
           <span class="function"><a href="function.oci-fetch-array.php" class="function">oci_fetch_array()</a></span> to get results as an
           array with both associative and number indices.
         </td>
       </tr>

       <tr id="constant.oci-commit-on-success">
         <td><strong><code><a href="oci8.constants.php#constant.oci-commit-on-success">OCI_COMMIT_ON_SUCCESS</a></code></strong></td>
         <td>
           Statement execution mode for <span class="function"><a href="function.oci-execute.php" class="function">oci_execute()</a></span>
           call. Automatically commit changes when the statement has
           succeeded.
         </td>
       </tr>

       <tr id="constant.oci-cred-ext">
         <td><strong><code><a href="oci8.constants.php#constant.oci-cred-ext">OCI_CRED_EXT</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-connect.php" class="function">oci_connect()</a></span> for using
           Oracles&#039; External or OS authentication.
         </td>
       </tr>

       <tr id="constant.oci-default">
         <td><strong><code><a href="oci8.constants.php#constant.oci-default">OCI_DEFAULT</a></code></strong></td>
         <td>
           See <strong><code><a href="oci8.constants.php#constant.oci-no-auto-commit">OCI_NO_AUTO_COMMIT</a></code></strong>.
         </td>
       </tr>

       <tr id="constant.oci-describe-only">
         <td><strong><code><a href="oci8.constants.php#constant.oci-describe-only">OCI_DESCRIBE_ONLY</a></code></strong></td>
         <td>
           Statement execution mode
           for <span class="function"><a href="function.oci-execute.php" class="function">oci_execute()</a></span>.  Use this mode if you
           want meta data such as the column names but don&#039;t want to
           fetch rows from the query.
         </td>
       </tr>

       <tr id="constant.oci-exact-fetch">
         <td><strong><code><a href="oci8.constants.php#constant.oci-exact-fetch">OCI_EXACT_FETCH</a></code></strong></td>
         <td>
           Obsolete. Statement fetch mode. Used when the application
           knows in advance exactly how many rows it will be fetching.
           This mode turns prefetching off for Oracle release 8 or
           later mode. The cursor is canceled after the desired rows
           are fetched which may result in reduced server-side
           resource usage.
         </td>
       </tr>

       <tr id="constant.oci-fetchstatement-by-column">
         <td><strong><code><a href="oci8.constants.php#constant.oci-fetchstatement-by-column">OCI_FETCHSTATEMENT_BY_COLUMN</a></code></strong></td>
         <td>
           Default mode of <span class="function"><a href="function.oci-fetch-all.php" class="function">oci_fetch_all()</a></span>.
         </td>
       </tr>

       <tr id="constant.oci-fetchstatement-by-row">
         <td><strong><code><a href="oci8.constants.php#constant.oci-fetchstatement-by-row">OCI_FETCHSTATEMENT_BY_ROW</a></code></strong></td>
         <td>
           Alternative mode of <span class="function"><a href="function.oci-fetch-all.php" class="function">oci_fetch_all()</a></span>.
         </td>
       </tr>

       <tr id="constant.ocilob-buffer-free">
         <td><strong><code>OCI_LOB_BUFFER_FREE</code></strong></td>
         <td>
           Used with <a href="ocilob.flush.php" class="xref">OCILob::flush</a> to free
           buffers used.
         </td>
       </tr>

       <tr id="constant.oci-no-auto-commit">
         <td><strong><code><a href="oci8.constants.php#constant.oci-no-auto-commit">OCI_NO_AUTO_COMMIT</a></code></strong></td>
         <td>
           Statement execution mode
           for <span class="function"><a href="function.oci-execute.php" class="function">oci_execute()</a></span>. The transaction is not
           automatically committed when using this mode.  For
           readability in new code, use this value instead of the
           older, equivalent <strong><code><a href="oci8.constants.php#constant.oci-default">OCI_DEFAULT</a></code></strong> constant.
         </td>
       </tr>

       <tr id="constant.oci-num">
         <td><strong><code><a href="oci8.constants.php#constant.oci-num">OCI_NUM</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-fetch-all.php" class="function">oci_fetch_all()</a></span> and
           <span class="function"><a href="function.oci-fetch-array.php" class="function">oci_fetch_array()</a></span> to get results as an
           enumerated array.
         </td>
       </tr>

       <tr id="constant.oci-return-lobs">
         <td><strong><code><a href="oci8.constants.php#constant.oci-return-lobs">OCI_RETURN_LOBS</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-fetch-array.php" class="function">oci_fetch_array()</a></span> to get the
           data value of the LOB instead of the descriptor.
         </td>
       </tr>

       <tr id="constant.oci-return-nulls">
         <td><strong><code><a href="oci8.constants.php#constant.oci-return-nulls">OCI_RETURN_NULLS</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-fetch-array.php" class="function">oci_fetch_array()</a></span> to get empty
           array elements if the row items value is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
         </td>
       </tr>

       <tr id="constant.oci-seek-cur">
         <td><strong><code><a href="oci8.constants.php#constant.oci-seek-cur">OCI_SEEK_CUR</a></code></strong></td>
         <td>
           Used with <a href="ocilob.seek.php" class="xref">OCILob::seek</a> to set the seek position.
         </td>
       </tr>

       <tr id="constant.oci-seek-end">
         <td><strong><code><a href="oci8.constants.php#constant.oci-seek-end">OCI_SEEK_END</a></code></strong></td>
         <td>
           Used with <a href="ocilob.seek.php" class="xref">OCILob::seek</a> to set the seek position.
         </td>
       </tr>

       <tr id="constant.oci-seek-set">
         <td><strong><code><a href="oci8.constants.php#constant.oci-seek-set">OCI_SEEK_SET</a></code></strong></td>
         <td>
           Used with <a href="ocilob.seek.php" class="xref">OCILob::seek</a> to set the seek position.
         </td>
       </tr>

       <tr id="constant.oci-sysdate">
         <td><strong><code><a href="oci8.constants.php#constant.oci-sysdate">OCI_SYSDATE</a></code></strong></td>
         <td>
           Obsolete.
         </td>
       </tr>

       <tr id="constant.oci-sysdba">
         <td><strong><code><a href="oci8.constants.php#constant.oci-sysdba">OCI_SYSDBA</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-connect.php" class="function">oci_connect()</a></span> to connect with
           the SYSDBA privilege. The <var class="filename">php.ini</var> setting
           <a href="oci8.configuration.php#ini.oci8.privileged-connect" class="link">oci8.privileged_connect</a>
           should be enabled to use this.
         </td>
       </tr>

       <tr id="constant.oci-sysoper">
         <td><strong><code><a href="oci8.constants.php#constant.oci-sysoper">OCI_SYSOPER</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-connect.php" class="function">oci_connect()</a></span> to connect with
           the SYSOPER privilege. The <var class="filename">php.ini</var> setting
           <a href="oci8.configuration.php#ini.oci8.privileged-connect" class="link">oci8.privileged_connect</a>
           should be enabled to use this.
         </td>
       </tr>

       <tr id="constant.oci-temp-blob">
         <td><strong><code><a href="oci8.constants.php#constant.oci-temp-blob">OCI_TEMP_BLOB</a></code></strong></td>
         <td>
           Used with <a href="ocilob.writetemporary.php" class="xref">OCILob::writeTemporary</a>
           to indicate that a temporary BLOB should be created.
         </td>
       </tr>

       <tr id="constant.oci-temp-clob">
         <td><strong><code><a href="oci8.constants.php#constant.oci-temp-clob">OCI_TEMP_CLOB</a></code></strong></td>
         <td>
           Used with <a href="ocilob.writetemporary.php" class="xref">OCILob::writeTemporary</a>
           to indicate that a temporary CLOB should be created.
         </td>
       </tr>

     </tbody>
   
 </table>

 <table class="doctable table">
   <caption><strong>OCI8 Bind and Define Types</strong></caption>
   
     <thead>
       <tr>
         <th>Constant</th>
         <th>Description</th>
       </tr>

     </thead>

     <tbody class="tbody">
       <tr id="constant.oci-b-bfile">
         <td><strong><code><a href="oci8.constants.php#constant.oci-b-bfile">OCI_B_BFILE</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-by-name.php" class="function">oci_bind_by_name()</a></span> when binding
           BFILEs.
         </td>
       </tr>

       <tr id="constant.oci-b-bin">
         <td><strong><code><a href="oci8.constants.php#constant.oci-b-bin">OCI_B_BIN</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-by-name.php" class="function">oci_bind_by_name()</a></span> to bind RAW values.
         </td>
       </tr>

       <tr id="constant.oci-b-blob">
         <td><strong><code><a href="oci8.constants.php#constant.oci-b-blob">OCI_B_BLOB</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-by-name.php" class="function">oci_bind_by_name()</a></span> when
           binding BLOBs.
         </td>
       </tr>

       <tr id="constant.oci-b-bol">
         <td><strong><code><a href="oci8.constants.php#constant.oci-b-bol">OCI_B_BOL</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-by-name.php" class="function">oci_bind_by_name()</a></span> to bind a PL/SQL BOOLEAN
           variable.
         </td>
       </tr>

       <tr id="constant.oci-b-cfilee">
         <td><strong><code><a href="oci8.constants.php#constant.oci-b-cfilee">OCI_B_CFILEE</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-by-name.php" class="function">oci_bind_by_name()</a></span> when binding
           CFILEs.
         </td>
       </tr>

       <tr id="constant.oci-b-clob">
         <td><strong><code><a href="oci8.constants.php#constant.oci-b-clob">OCI_B_CLOB</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-by-name.php" class="function">oci_bind_by_name()</a></span> when binding
           CLOBs.
         </td>
       </tr>

       <tr id="constant.oci-b-cursor">
         <td><strong><code><a href="oci8.constants.php#constant.oci-b-cursor">OCI_B_CURSOR</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-by-name.php" class="function">oci_bind_by_name()</a></span> when binding
           cursors, previously allocated
           with <span class="function"><a href="function.oci-new-descriptor.php" class="function">oci_new_descriptor()</a></span>.
         </td>
       </tr>

       <tr id="constant.oci-b-int">
         <td><strong><code><a href="oci8.constants.php#constant.oci-b-int">OCI_B_INT</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-array-by-name.php" class="function">oci_bind_array_by_name()</a></span> to bind arrays of
           INTEGER.
         </td>
       </tr>

       <tr id="constant.oci-b-nty">
         <td><strong><code><a href="oci8.constants.php#constant.oci-b-nty">OCI_B_NTY</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-by-name.php" class="function">oci_bind_by_name()</a></span> when binding
           named data types.
         </td>
       </tr>

       <tr id="constant.oci-b-num">
         <td><strong><code><a href="oci8.constants.php#constant.oci-b-num">OCI_B_NUM</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-array-by-name.php" class="function">oci_bind_array_by_name()</a></span> to bind arrays of
           NUMBER.
         </td>
       </tr>

       <tr id="constant.oci-b-rowid">
         <td><strong><code><a href="oci8.constants.php#constant.oci-b-rowid">OCI_B_ROWID</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-by-name.php" class="function">oci_bind_by_name()</a></span> when binding
           ROWIDs.
         </td>
       </tr>

       <tr id="constant.sqlt-afc">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-afc">SQLT_AFC</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-array-by-name.php" class="function">oci_bind_array_by_name()</a></span> to bind arrays of
           CHAR.
         </td>
       </tr>

       <tr id="constant.sqlt-avc">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-avc">SQLT_AVC</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-array-by-name.php" class="function">oci_bind_array_by_name()</a></span> to bind arrays of
           VARCHAR2.
         </td>
       </tr>

       <tr id="constant.sqlt-bdouble">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-bdouble">SQLT_BDOUBLE</a></code></strong></td>
         <td>
           Not supported.
         </td>
       </tr>

       <tr id="constant.sqlt-bfilee">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-bfilee">SQLT_BFILEE</a></code></strong></td>
         <td>
           The same as <strong><code><a href="oci8.constants.php#constant.oci-b-bfile">OCI_B_BFILE</a></code></strong>.
         </td>
       </tr>

       <tr id="constant.sqlt-bfloat">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-bfloat">SQLT_BFLOAT</a></code></strong></td>
         <td>
           Not supported.
         </td>
       </tr>

       <tr id="constant.sqlt-bin">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-bin">SQLT_BIN</a></code></strong></td>
         <td>
           The same as <strong><code><a href="oci8.constants.php#constant.oci-b-bin">OCI_B_BIN</a></code></strong>.
         </td>
       </tr>

       <tr id="constant.sqlt-blob">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-blob">SQLT_BLOB</a></code></strong></td>
         <td>
           The same as <strong><code><a href="oci8.constants.php#constant.oci-b-blob">OCI_B_BLOB</a></code></strong>.
         </td>
       </tr>

       <tr id="constant.sqlt-bol">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-bol">SQLT_BOL</a></code></strong></td>
         <td>
           The same as <strong><code><a href="oci8.constants.php#constant.oci-b-bol">OCI_B_BOL</a></code></strong>.
         </td>
       </tr>

       <tr id="constant.sqlt-cfilee">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-cfilee">SQLT_CFILEE</a></code></strong></td>
         <td>
           The same as <strong><code><a href="oci8.constants.php#constant.oci-b-cfilee">OCI_B_CFILEE</a></code></strong>.
         </td>
       </tr>

       <tr id="constant.sqlt-chr">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-chr">SQLT_CHR</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-array-by-name.php" class="function">oci_bind_array_by_name()</a></span> to bind arrays of
           VARCHAR2.
           Also used with <span class="function"><a href="function.oci-bind-by-name.php" class="function">oci_bind_by_name()</a></span>.
         </td>
       </tr>

       <tr id="constant.sqlt-clob">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-clob">SQLT_CLOB</a></code></strong></td>
         <td>
           The same as <strong><code><a href="oci8.constants.php#constant.oci-b-clob">OCI_B_CLOB</a></code></strong>.
         </td>
       </tr>

       <tr id="constant.sqlt-flt">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-flt">SQLT_FLT</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-array-by-name.php" class="function">oci_bind_array_by_name()</a></span> to bind arrays of
           FLOAT.
         </td>
       </tr>

       <tr id="constant.sqlt-int">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-int">SQLT_INT</a></code></strong></td>
         <td>
           The same as <strong><code><a href="oci8.constants.php#constant.oci-b-int">OCI_B_INT</a></code></strong>.
         </td>
       </tr>

       <tr id="constant.sqlt-lbi">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-lbi">SQLT_LBI</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-by-name.php" class="function">oci_bind_by_name()</a></span> to bind LONG RAW values.
         </td>
       </tr>

       <tr id="constant.sqlt-lng">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-lng">SQLT_LNG</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-by-name.php" class="function">oci_bind_by_name()</a></span> to bind LONG values.
         </td>
       </tr>

       <tr id="constant.sqlt-lvc">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-lvc">SQLT_LVC</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-array-by-name.php" class="function">oci_bind_array_by_name()</a></span> to bind arrays of
           LONG VARCHAR.
         </td>
       </tr>

       <tr id="constant.sqlt-nty">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-nty">SQLT_NTY</a></code></strong></td>
         <td>
           The same as <strong><code><a href="oci8.constants.php#constant.oci-b-nty">OCI_B_NTY</a></code></strong>.
         </td>
       </tr>

       <tr id="constant.sqlt-num">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-num">SQLT_NUM</a></code></strong></td>
         <td>
           The same as <strong><code><a href="oci8.constants.php#constant.oci-b-num">OCI_B_NUM</a></code></strong>.
         </td>
       </tr>

       <tr id="constant.sqlt-odt">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-odt">SQLT_ODT</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-array-by-name.php" class="function">oci_bind_array_by_name()</a></span> to bind arrays of
           LONG.
         </td>
       </tr>

       <tr id="constant.sqlt-rdd">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-rdd">SQLT_RDD</a></code></strong></td>
         <td>
           The same as <strong><code><a href="oci8.constants.php#constant.oci-b-rowid">OCI_B_ROWID</a></code></strong>.
         </td>
       </tr>

       <tr id="constant.sqlt-rset">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-rset">SQLT_RSET</a></code></strong></td>
         <td>
           The same as <strong><code><a href="oci8.constants.php#constant.oci-b-cursor">OCI_B_CURSOR</a></code></strong>.
         </td>
       </tr>

       <tr id="constant.sqlt-str">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-str">SQLT_STR</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-array-by-name.php" class="function">oci_bind_array_by_name()</a></span> to bind arrays of
           STRING.
         </td>
       </tr>

       <tr id="constant.sqlt-uin">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-uin">SQLT_UIN</a></code></strong></td>
         <td>
           Not supported.
         </td>
       </tr>

       <tr id="constant.sqlt-vcs">
         <td><strong><code><a href="oci8.constants.php#constant.sqlt-vcs">SQLT_VCS</a></code></strong></td>
         <td>
           Used with <span class="function"><a href="function.oci-bind-array-by-name.php" class="function">oci_bind_array_by_name()</a></span> to bind arrays of
           VARCHAR.
         </td>
       </tr>

     </tbody>
   
 </table>

 <table class="doctable table">
   <caption><strong>OCI8 Descriptor Types</strong></caption>
   
     <thead>
       <tr>
         <th>Constant</th>
         <th>Description</th>
       </tr>

     </thead>

     <tbody class="tbody">
       <tr id="constant.oci-dtype-file">
         <td><strong><code><a href="oci8.constants.php#constant.oci-dtype-file">OCI_DTYPE_FILE</a></code></strong></td>
         <td>
           This flag tells <span class="function"><a href="function.oci-new-descriptor.php" class="function">oci_new_descriptor()</a></span> to
           initialize a new FILE descriptor.
         </td>
       </tr>

       <tr id="constant.oci-dtype-lob">
         <td><strong><code><a href="oci8.constants.php#constant.oci-dtype-lob">OCI_DTYPE_LOB</a></code></strong></td>
         <td>
           This flag tells <span class="function"><a href="function.oci-new-descriptor.php" class="function">oci_new_descriptor()</a></span> to
           initialize a new LOB descriptor.
         </td>
       </tr>

       <tr id="constant.oci-dtype-rowid">
         <td><strong><code><a href="oci8.constants.php#constant.oci-dtype-rowid">OCI_DTYPE_ROWID</a></code></strong></td>
         <td>
           This flag tells <span class="function"><a href="function.oci-new-descriptor.php" class="function">oci_new_descriptor()</a></span> to
           initialize a new ROWID descriptor.
         </td>
       </tr>

       <tr id="constant.oci-d-file">
         <td><strong><code><a href="oci8.constants.php#constant.oci-d-file">OCI_D_FILE</a></code></strong></td>
         <td>
           The same as <strong><code><a href="oci8.constants.php#constant.oci-dtype-file">OCI_DTYPE_FILE</a></code></strong>.
         </td>
       </tr>

       <tr id="constant.oci-d-lob">
         <td><strong><code><a href="oci8.constants.php#constant.oci-d-lob">OCI_D_LOB</a></code></strong></td>
         <td>
           The same as <strong><code><a href="oci8.constants.php#constant.oci-dtype-lob">OCI_DTYPE_LOB</a></code></strong>.
         </td>
       </tr>

       <tr id="constant.oci-d-rowid">
         <td><strong><code><a href="oci8.constants.php#constant.oci-d-rowid">OCI_D_ROWID</a></code></strong></td>
         <td>
           The same as <strong><code><a href="oci8.constants.php#constant.oci-dtype-rowid">OCI_DTYPE_ROWID</a></code></strong>.
         </td>
       </tr>

     </tbody>
   
 </table>

 <table class="doctable table">
       <tr>
        <th>Constants</th>
        <th>Description</th>
       </tr>
  <strong class="title">OCI8 Transparent Application Failover (TAF) Constants</strong>
  <tr>
   <td id="constant.oci-fo-abort">
    <strong><code><a href="oci8.constants.php#constant.oci-fo-abort">OCI_FO_ABORT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Failover was unsuccessful and there is no option of retrying.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.oci-fo-begin">
    <strong><code><a href="oci8.constants.php#constant.oci-fo-begin">OCI_FO_BEGIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Failover has detected a lost connection and failover is starting.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.oci-fo-end">
    <strong><code><a href="oci8.constants.php#constant.oci-fo-end">OCI_FO_END</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Failover completed successfully.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.oci-fo-error">
    <strong><code><a href="oci8.constants.php#constant.oci-fo-error">OCI_FO_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Failover was unsuccessful but it gives the application the opportunity
     to handle the error and return <strong><code><a href="oci8.constants.php#constant.oci-fo-retry">OCI_FO_RETRY</a></code></strong> to retry failover.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.oci-fo-none">
    <strong><code><a href="oci8.constants.php#constant.oci-fo-none">OCI_FO_NONE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     The user has not requested a failover type.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.oci-fo-reauth">
    <strong><code><a href="oci8.constants.php#constant.oci-fo-reauth">OCI_FO_REAUTH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     An Oracle user has been re-authenticated.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.oci-fo-retry">
    <strong><code><a href="oci8.constants.php#constant.oci-fo-retry">OCI_FO_RETRY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     The failover should be attempted again by Oracle.
     In case of an error while failing over to a new
     connection, TAF is able to retry the failover.
     Typically, the application code should sleep for
     a while before returning <strong><code><a href="oci8.constants.php#constant.oci-fo-retry">OCI_FO_RETRY</a></code></strong>.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.oci-fo-select">
    <strong><code><a href="oci8.constants.php#constant.oci-fo-select">OCI_FO_SELECT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     The user has requested SELECT failover as well.
     It allows users with open cursors to continue fetching from them after failure.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.oci-fo-session">
    <strong><code><a href="oci8.constants.php#constant.oci-fo-session">OCI_FO_SESSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     The user has requested only session failover.
     For example, if a user&#039;s connection is lost,
     then a new session is automatically created for the user on the backup.
     This type of failover does not attempt to recover SELECTs.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.oci-fo-txnal">
    <strong><code><a href="oci8.constants.php#constant.oci-fo-txnal">OCI_FO_TXNAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     The user has requested a transaction failover.
    </span>
   </td>
  </tr>
 </table>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/oci8/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Foci8.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=oci8.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/oci8.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.oci8.php">OCI8</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.oci8.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="oci8.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="oci8.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="oci8.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="oci8.connection.php" title="OCI8 Connection Handling and Connection Pooling">OCI8 Connection Handling and Connection Pooling</a>
                        </li>
                                                <li class="">
                            <a href="oci8.fan.php" title="OCI8 Fast Application Notification (FAN) Support">OCI8 Fast Application Notification (FAN) Support</a>
                        </li>
                                                <li class="">
                            <a href="oci8.taf.php" title="OCI8 Transparent Application Failover (TAF) Support">OCI8 Transparent Application Failover (TAF) Support</a>
                        </li>
                                                <li class="">
                            <a href="oci8.dtrace.php" title="OCI8 and DTrace Dynamic Tracing">OCI8 and DTrace Dynamic Tracing</a>
                        </li>
                                                <li class="">
                            <a href="oci8.datatypes.php" title="Supported Datatypes">Supported Datatypes</a>
                        </li>
                                                <li class="">
                            <a href="ref.oci8.php" title="OCI8 Functions">OCI8 Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.ocicollection.php" title="OCICollection">OCICollection</a>
                        </li>
                                                <li class="">
                            <a href="class.ocilob.php" title="OCILob">OCILob</a>
                        </li>
                                                <li class="">
                            <a href="oldaliases.oci8.php" title="OCI8 Obsolete Aliases and Functions">OCI8 Obsolete Aliases and Functions</a>
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
