<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: cURL Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.curl.php">
 <link rel="shorturl" href="https://www.php.net/curl">
 <link rel="alternate" href="https://www.php.net/curl" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.curl.php">
 <link rel="prev" href="https://www.php.net/manual/en/curl.examples-basic.php">
 <link rel="next" href="https://www.php.net/manual/en/function.curl-close.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.curl.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.curl.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.curl.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.curl.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.curl.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.curl.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.curl.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.curl.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.curl.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.curl.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.curl.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="cURL Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: cURL Functions - Manual" />
<meta name="twitter:description" content="cURL Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: cURL Functions - Manual" />
<meta itemprop="description" content="cURL Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="cURL Functions" />

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
        <a href="function.curl-close.php">
          curl_close &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="curl.examples-basic.php">
          &laquo; Basic curl example        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.curl.php'>cURL</a></li>      </ul>
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
            <option value='en/ref.curl.php' selected="selected">English</option>
            <option value='de/ref.curl.php'>German</option>
            <option value='es/ref.curl.php'>Spanish</option>
            <option value='fr/ref.curl.php'>French</option>
            <option value='it/ref.curl.php'>Italian</option>
            <option value='ja/ref.curl.php'>Japanese</option>
            <option value='pt_BR/ref.curl.php'>Brazilian Portuguese</option>
            <option value='ru/ref.curl.php'>Russian</option>
            <option value='tr/ref.curl.php'>Turkish</option>
            <option value='uk/ref.curl.php'>Ukrainian</option>
            <option value='zh/ref.curl.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.curl" class="reference">
  <h1 class="title">cURL Functions</h1>

  



































































































































































 <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.curl-close.php">curl_close</a> — Close a cURL session</li><li><a href="function.curl-copy-handle.php">curl_copy_handle</a> — Copy a cURL handle along with all of its preferences</li><li><a href="function.curl-errno.php">curl_errno</a> — Return the last error number</li><li><a href="function.curl-error.php">curl_error</a> — Return a string containing the last error for the current session</li><li><a href="function.curl-escape.php">curl_escape</a> — URL encodes the given string</li><li><a href="function.curl-exec.php">curl_exec</a> — Perform a cURL session</li><li><a href="function.curl-getinfo.php">curl_getinfo</a> — Get information regarding a specific transfer</li><li><a href="function.curl-init.php">curl_init</a> — Initialize a cURL session</li><li><a href="function.curl-multi-add-handle.php">curl_multi_add_handle</a> — Add a normal cURL handle to a cURL multi handle</li><li><a href="function.curl-multi-close.php">curl_multi_close</a> — Remove all cURL handles from a multi handle</li><li><a href="function.curl-multi-errno.php">curl_multi_errno</a> — Return the last multi curl error number</li><li><a href="function.curl-multi-exec.php">curl_multi_exec</a> — Run the sub-connections of the current cURL handle</li><li><a href="function.curl-multi-getcontent.php">curl_multi_getcontent</a> — Return the content of a cURL handle if CURLOPT_RETURNTRANSFER is set</li><li><a href="function.curl-multi-info-read.php">curl_multi_info_read</a> — Get information about the current transfers</li><li><a href="function.curl-multi-init.php">curl_multi_init</a> — Returns a new cURL multi handle</li><li><a href="function.curl-multi-remove-handle.php">curl_multi_remove_handle</a> — Remove a handle from a set of cURL handles</li><li><a href="function.curl-multi-select.php">curl_multi_select</a> — Wait until reading or writing is possible for any cURL multi handle connection</li><li><a href="function.curl-multi-setopt.php">curl_multi_setopt</a> — Set a cURL multi option</li><li><a href="function.curl-multi-strerror.php">curl_multi_strerror</a> — Return string describing error code</li><li><a href="function.curl-pause.php">curl_pause</a> — Pause and unpause a connection</li><li><a href="function.curl-reset.php">curl_reset</a> — Reset all options of a libcurl session handle</li><li><a href="function.curl-setopt.php">curl_setopt</a> — Set an option for a cURL transfer</li><li><a href="function.curl-setopt-array.php">curl_setopt_array</a> — Set multiple options for a cURL transfer</li><li><a href="function.curl-share-close.php">curl_share_close</a> — Close a cURL share handle</li><li><a href="function.curl-share-errno.php">curl_share_errno</a> — Return the last share curl error number</li><li><a href="function.curl-share-init.php">curl_share_init</a> — Initialize a cURL share handle</li><li><a href="function.curl-share-init-persistent.php">curl_share_init_persistent</a> — Initialize a persistent cURL share handle</li><li><a href="function.curl-share-setopt.php">curl_share_setopt</a> — Set an option for a cURL share handle</li><li><a href="function.curl-share-strerror.php">curl_share_strerror</a> — Return string describing the given error code</li><li><a href="function.curl-strerror.php">curl_strerror</a> — Return string describing the given error code</li><li><a href="function.curl-unescape.php">curl_unescape</a> — Decodes the given URL encoded string</li><li><a href="function.curl_upkeep.php">curl_upkeep</a> — Performs any connection upkeep checks</li><li><a href="function.curl-version.php">curl_version</a> — Gets cURL version information</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/curl/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.curl%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.curl&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.curl.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="76249">  <div class="votes">
    <div id="Vu76249">
    <a href="/manual/vote-note.php?id=76249&amp;page=ref.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76249">
    <a href="/manual/vote-note.php?id=76249&amp;page=ref.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76249" title="58% like this...">
    28
    </div>
  </div>
  <a href="#76249" class="name">
  <strong class="user"><em>Mr.KTO</em></strong></a><a class="genanchor" href="#76249"> &para;</a><div class="date" title="2007-07-07 06:59"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76249">
<div class="phpcode"><code><span class="html">Don't foget to curl_close($ch); Even if curl_errno($ch) != 0<br /><br />Because if you don't - on Windows this will produce windows-error-report (Program terminated unexpectedly)</span></code></div>
  </div>
 </div>
  <div class="note" id="115002">  <div class="votes">
    <div id="Vu115002">
    <a href="/manual/vote-note.php?id=115002&amp;page=ref.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115002">
    <a href="/manual/vote-note.php?id=115002&amp;page=ref.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115002" title="55% like this...">
    7
    </div>
  </div>
  <a href="#115002" class="name">
  <strong class="user"><em>helmizz at yahoo dot com</em></strong></a><a class="genanchor" href="#115002"> &para;</a><div class="date" title="2014-05-11 10:03"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115002">
<div class="phpcode"><code><span class="html">This is sample script to use curl, Just input curl_setopt,<br />exp : <br />curlsetop[0] ==&gt; name : CURLOPT_URL ; value : <a href="http://amazon.com" rel="nofollow" target="_blank">http://amazon.com</a><br />curlsetop[1] ==&gt; name : CURLOPT_RETURNTRANSFER ; value : true<br />curlsetop[2] ==&gt; name : CURLOPT_FOLLOWLOCATION ; value : true<br /><br />You can add form input.<br /><br />&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "<a href="http://www.w3.org/TR/html4/loose.dtd" rel="nofollow" target="_blank">http://www.w3.org/TR/html4/loose.dtd</a>"&gt;<br />&lt;html&gt;<br /> &lt;head&gt;<br />  &lt;title&gt; New Document &lt;/title&gt;<br />  &lt;meta name="Generator" content=""&gt;<br />  &lt;meta name="Author" content="Helmi Anwar"&gt;<br />  &lt;meta name="Keywords" content=""&gt;<br />  &lt;meta name="Description" content=""&gt;<br /> &lt;/head&gt;<br /><br /> &lt;body&gt;<br /><br /> &lt;form method="post" action=""&gt;<br />    &lt;table&gt;<br />    &lt;tr class="rowid_add"&gt;<br />        &lt;td&gt;curl_setopt [0]&lt;/td&gt;<br />        &lt;td&gt;Name : &lt;input type="text" size="50" name="setopt_name[]"&gt;&lt;/td&gt;<br />        &lt;td&gt;Value :&lt;input type="text" size="50" name="setopt_value[]"&gt;&lt;/td&gt;<br />    &lt;/tr&gt;<br />    &lt;tr class="rowid_add"&gt;<br />        &lt;td&gt;curl_setopt [0]&lt;/td&gt;<br />        &lt;td&gt;Name : &lt;input type="text" size="50" name="setopt_name[]"&gt;&lt;/td&gt;<br />        &lt;td&gt;Value :&lt;input type="text" size="50" name="setopt_value[]"&gt;&lt;/td&gt;<br />    &lt;/tr&gt;<br />        &lt;tr class="rowid_add"&gt;<br />        &lt;td&gt;curl_setopt [0]&lt;/td&gt;<br />        &lt;td&gt;Name : &lt;input type="text" size="50" name="setopt_name[]"&gt;&lt;/td&gt;<br />        &lt;td&gt;Value :&lt;input type="text" size="50" name="setopt_value[]"&gt;&lt;/td&gt;<br />    &lt;/tr&gt;<br />    &lt;tr&gt;<br />        &lt;td&gt;&lt;input type="submit" name="submit_yes" value="EXECUTE"&gt;&lt;/td&gt;<br />    &lt;/tr&gt;<br />    &lt;/table&gt;<br /> &lt;/form&gt;<br /><br /> <br /> <span class="default">&lt;?php<br /><br />    </span><span class="keyword">function </span><span class="default">curl_test</span><span class="keyword">(</span><span class="default">$setopt_content</span><span class="keyword">)<br />    {<br />        </span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();<br />        </span><span class="default">curl_setopt_array</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">$setopt_content</span><span class="keyword">);<br />        </span><span class="default">$result_data </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br />        </span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br />        return </span><span class="default">$result_data</span><span class="keyword">;<br />    }<br /><br />if(</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'submit_yes'</span><span class="keyword">]==</span><span class="string">"EXECUTE"</span><span class="keyword">)<br />{<br />    <br />    foreach (</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'setopt_name'</span><span class="keyword">] as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$index_content</span><span class="keyword">) <br />    {    <br />        </span><span class="default">$value_content</span><span class="keyword">=</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'setopt_value'</span><span class="keyword">][</span><span class="default">$k</span><span class="keyword">];<br />        </span><span class="default">$index_content </span><span class="keyword">=</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$index_content</span><span class="keyword">);<br />        eval(</span><span class="string">'$index_content = '</span><span class="keyword">.</span><span class="default">$index_content</span><span class="keyword">.</span><span class="string">';'</span><span class="keyword">);<br />        </span><span class="comment">//echo ($index_content);<br />        </span><span class="keyword">if(</span><span class="default">$index_content</span><span class="keyword">!=</span><span class="string">''</span><span class="keyword">)<br />        {<br />            if(</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$value_content</span><span class="keyword">)==</span><span class="string">'TRUE'</span><span class="keyword">)<br />            {</span><span class="default">$setopt_content</span><span class="keyword">[</span><span class="default">$index_content</span><span class="keyword">]=</span><span class="default">TRUE</span><span class="keyword">;}<br />            elseif(</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$value_content</span><span class="keyword">)==</span><span class="string">'FALSE'</span><span class="keyword">)<br />            {</span><span class="default">$setopt_content</span><span class="keyword">[</span><span class="default">$index_content</span><span class="keyword">]=</span><span class="default">FALSE</span><span class="keyword">;}<br />            else<br />            {</span><span class="default">$setopt_content</span><span class="keyword">[</span><span class="default">$index_content</span><span class="keyword">]=</span><span class="default">$value_content</span><span class="keyword">;}<br />        }<br />    }<br /><br />    </span><span class="default">$info</span><span class="keyword">=</span><span class="default">curl_test</span><span class="keyword">(</span><span class="default">$setopt_content</span><span class="keyword">);<br /><br />}<br /><br /> </span><span class="default">?&gt;<br /></span> &lt;textarea name="result" rows="25" cols="100"&gt;<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">);</span><span class="default">?&gt;</span>&lt;/textarea&gt;<br /> &lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="126141">  <div class="votes">
    <div id="Vu126141">
    <a href="/manual/vote-note.php?id=126141&amp;page=ref.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126141">
    <a href="/manual/vote-note.php?id=126141&amp;page=ref.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126141" title="57% like this...">
    2
    </div>
  </div>
  <a href="#126141" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#126141"> &para;</a><div class="date" title="2021-06-06 08:06"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126141">
<div class="phpcode"><code><span class="html">Note, if you will ever need to get/set unique handle for Curl-object, you might need to use CURL_PRIVATE property for each instace<br /><a href="https://www.php.net/manual/en/function.curl-setopt.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/function.curl-setopt.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="40437">  <div class="votes">
    <div id="Vu40437">
    <a href="/manual/vote-note.php?id=40437&amp;page=ref.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40437">
    <a href="/manual/vote-note.php?id=40437&amp;page=ref.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40437" title="55% like this...">
    5
    </div>
  </div>
  <a href="#40437" class="name">
  <strong class="user"><em>simon [at] vhostdirect [dot] co [dot] uk</em></strong></a><a class="genanchor" href="#40437"> &para;</a><div class="date" title="2004-03-03 04:53"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40437">
<div class="phpcode"><code><span class="html">It took me quite some to to figure out how to get Curl (with SSL), OpenSSL and PHP to play nicely together.<br /><br />After reinstalling MS-VC7 and compiling OpenSSL to finally realise this was'nt nesscary.<br /><br />If your like me and like *Nix systems more than Windows then you'll most probly have similar problems.<br /><br />I came across this, on a simple google with the right keywords.<br /><br /><a href="http://www.tonyspencer.com/journal/00000037.htm" rel="nofollow" target="_blank">http://www.tonyspencer.com/journal/00000037.htm</a><br /><br />I read thru that and found my mistake.<br /><br />Its just a small list of notes, I found them to be the best I've found on the subject and the most simplist.<br /><br />Dont forget to add a simple line like this into your scripts to get them working on Win32.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if(</span><span class="default">$WINDIR</span><span class="keyword">) </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_CAINFO</span><span class="keyword">, </span><span class="string">"c:\\windows\\ca-bundle.crt"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Last note: ca-bundle.crt file is located in the Curl download. I stored mine in the windows directory and apache/php can access it fine.<br /><br />All the best and I hope this helps.<br /><br />Simon Lightfoot<br />vHost Direct Limited</span></code></div>
  </div>
 </div>
  <div class="note" id="46539">  <div class="votes">
    <div id="Vu46539">
    <a href="/manual/vote-note.php?id=46539&amp;page=ref.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46539">
    <a href="/manual/vote-note.php?id=46539&amp;page=ref.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46539" title="51% like this...">
    2
    </div>
  </div>
  <a href="#46539" class="name">
  <strong class="user"><em>mikeb[at]xamo[dot]com</em></strong></a><a class="genanchor" href="#46539"> &para;</a><div class="date" title="2004-10-14 01:11"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46539">
<div class="phpcode"><code><span class="html">A note of warning for PHP 5 users: if you try to fetch the CURLINFO_CONTENT_TYPE using curl_getinfo when there is a connect error, you will core dump PHP. I have informed the Curl team about this, so it will hopefully be fixed soon. Just make sure you check for an error before you look for this data.</span></code></div>
  </div>
 </div>
  <div class="note" id="73687">  <div class="votes">
    <div id="Vu73687">
    <a href="/manual/vote-note.php?id=73687&amp;page=ref.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73687">
    <a href="/manual/vote-note.php?id=73687&amp;page=ref.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73687" title="51% like this...">
    1
    </div>
  </div>
  <a href="#73687" class="name">
  <strong class="user"><em>killermonk at REMOVE dot killermonk dot com</em></strong></a><a class="genanchor" href="#73687"> &para;</a><div class="date" title="2007-03-06 11:23"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73687">
<div class="phpcode"><code><span class="html">For anyone trying to use cURL to submit to an ASP/ASPX page that uses an image as the submit button.<br /><br />Make sure that you have 'button_name.x' and 'button_name.y' in the post fields. PHP names these fields 'button_name_x' and 'button_name_y', while ASP uses a dot.<br /><br />Also, as noted above, be sure to include the '__VIEWSTATE' input field in your post request.</span></code></div>
  </div>
 </div>
  <div class="note" id="82946">  <div class="votes">
    <div id="Vu82946">
    <a href="/manual/vote-note.php?id=82946&amp;page=ref.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82946">
    <a href="/manual/vote-note.php?id=82946&amp;page=ref.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82946" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82946" class="name">
  <strong class="user"><em>Peter X.</em></strong></a><a class="genanchor" href="#82946"> &para;</a><div class="date" title="2008-05-02 07:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82946">
<div class="phpcode"><code><span class="html">Although it has been noted that cURL outperforms both file_get_contents and fopen when it comes to getting a file over a HTTP link, the disadvantage of cURL is that it has no way of only reading a part of a page at a time.<br /><br />For example, the following code is likely to generate a memory limit error:<br /><br /><span class="default">&lt;?php<br />$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(</span><span class="string">"<a href="http://www.example.com/reallybigfile.tar.gz" rel="nofollow" target="_blank">http://www.example.com/reallybigfile.tar.gz</a>"</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_BINARYTRANSFER</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$output </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /><br /></span><span class="default">$fh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"out.tar.gz"</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);<br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">);<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />While this, on the other hand, wouldn't<br /><br /><span class="default">&lt;?php<br />$hostfile </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"<a href="http://www.example.com/reallybigfile.tar.gz" rel="nofollow" target="_blank">http://www.example.com/reallybigfile.tar.gz</a>"</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br /></span><span class="default">$fh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"out.tar.gz"</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);<br /><br />while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$hostfile</span><span class="keyword">)) {<br />    </span><span class="default">$output </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$hostfile</span><span class="keyword">, </span><span class="default">8192</span><span class="keyword">);<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">);<br />}<br />    <br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$hostfile</span><span class="keyword">);<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="45653">  <div class="votes">
    <div id="Vu45653">
    <a href="/manual/vote-note.php?id=45653&amp;page=ref.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45653">
    <a href="/manual/vote-note.php?id=45653&amp;page=ref.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45653" title="46% like this...">
    -3
    </div>
  </div>
  <a href="#45653" class="name">
  <strong class="user"><em>alidrus at langkah dot com</em></strong></a><a class="genanchor" href="#45653"> &para;</a><div class="date" title="2004-09-14 02:31"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45653">
<div class="phpcode"><code><span class="html">In recent versions of php, CURLOPT_MUTE has (probably) been deprecated. Any attempt of using curl_setopt() to set CURLOPT_MUTE will give you a warning like this:
<br />
<br />PHP Notice:  Use of undefined constant CURLOPT_MUTE - assumed 'CURLOPT_MUTE' in ....
<br />
<br />If you wish tu silence the curl output, use the following instead:
<br />
<br /><span class="default">&lt;?php
<br />    curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />And then,
<br />
<br /><span class="default">&lt;?php
<br />    $curl_output</span><span class="keyword">=</span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />The output of the curl operation will be stored as a string in $curl_output while the operation remains totally silent.</span></code></div>
  </div>
 </div>
  <div class="note" id="62547">  <div class="votes">
    <div id="Vu62547">
    <a href="/manual/vote-note.php?id=62547&amp;page=ref.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62547">
    <a href="/manual/vote-note.php?id=62547&amp;page=ref.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62547" title="42% like this...">
    -4
    </div>
  </div>
  <a href="#62547" class="name">
  <strong class="user"><em>richardkmiller AT gmail</em></strong></a><a class="genanchor" href="#62547"> &para;</a><div class="date" title="2006-03-02 04:21"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62547">
<div class="phpcode"><code><span class="html">Beware of any extra spaces in the URL.  A trailing space in the URL caused my script to fail with the message "empty reply from server".</span></code></div>
  </div>
 </div>
  <div class="note" id="125821">  <div class="votes">
    <div id="Vu125821">
    <a href="/manual/vote-note.php?id=125821&amp;page=ref.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125821">
    <a href="/manual/vote-note.php?id=125821&amp;page=ref.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125821" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#125821" class="name">
  <strong class="user"><em>ciaoandriana8 at gmail dot com</em></strong></a><a class="genanchor" href="#125821"> &para;</a><div class="date" title="2021-02-14 06:13"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125821">
<div class="phpcode"><code><span class="html">This is sample script to use curl, Just input curl_setopt,<br />exp :<br />curlsetop[0] ==&gt; name : CURLOPT_URL ; value : <a href="https://amzn.to/3njlWW6" rel="nofollow" target="_blank">https://amzn.to/3njlWW6</a>      <br />curlsetop[1] ==&gt; name : CURLOPT_RETURNTRANSFER ; value : true<br />curlsetop[2] ==&gt; name : CURLOPT_FOLLOWLOCATION ; value : true<br /><br />You can add form input.<br /><br />&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "<a href="http://www.w3.org/TR/html4/loose.dtd" rel="nofollow" target="_blank">http://www.w3.org/TR/html4/loose.dtd</a>"&gt;<br />&lt;html&gt;<br />&lt;head&gt;<br />  &lt;title&gt; New Document &lt;/title&gt;<br />  &lt;meta name="Generator" content=""&gt;<br />  &lt;meta name="Author" content="Helmi Anwar"&gt;<br />  &lt;meta name="Keywords" content=""&gt;<br />  &lt;meta name="Description" content=""&gt;<br />&lt;/head&gt;<br /><br />&lt;body&gt;<br /><br />&lt;form method="post" action=""&gt;<br />    &lt;table&gt;<br />    &lt;tr class="rowid_add"&gt;<br />        &lt;td&gt;curl_setopt [0]&lt;/td&gt;<br />        &lt;td&gt;Name : &lt;input type="text" size="50" name="setopt_name[]"&gt;&lt;/td&gt;<br />        &lt;td&gt;Value :&lt;input type="text" size="50" name="setopt_value[]"&gt;&lt;/td&gt;<br />    &lt;/tr&gt;<br />    &lt;tr class="rowid_add"&gt;<br />        &lt;td&gt;curl_setopt [0]&lt;/td&gt;<br />        &lt;td&gt;Name : &lt;input type="text" size="50" name="setopt_name[]"&gt;&lt;/td&gt;<br />        &lt;td&gt;Value :&lt;input type="text" size="50" name="setopt_value[]"&gt;&lt;/td&gt;<br />    &lt;/tr&gt;<br />        &lt;tr class="rowid_add"&gt;<br />        &lt;td&gt;curl_setopt [0]&lt;/td&gt;<br />        &lt;td&gt;Name : &lt;input type="text" size="50" name="setopt_name[]"&gt;&lt;/td&gt;<br />        &lt;td&gt;Value :&lt;input type="text" size="50" name="setopt_value[]"&gt;&lt;/td&gt;<br />    &lt;/tr&gt;<br />    &lt;tr&gt;<br />        &lt;td&gt;&lt;input type="submit" name="submit_yes" value="EXECUTE"&gt;&lt;/td&gt;<br />    &lt;/tr&gt;<br />    &lt;/table&gt;<br />&lt;/form&gt;<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">function </span><span class="default">curl_test</span><span class="keyword">(</span><span class="default">$setopt_content</span><span class="keyword">)<br />    {<br />        </span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();<br />        </span><span class="default">curl_setopt_array</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">$setopt_content</span><span class="keyword">);<br />        </span><span class="default">$result_data </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br />        </span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br />        return </span><span class="default">$result_data</span><span class="keyword">;<br />    }<br /><br />if(</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'submit_yes'</span><span class="keyword">]==</span><span class="string">"EXECUTE"</span><span class="keyword">)<br />{<br />   <br />    foreach (</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'setopt_name'</span><span class="keyword">] as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$index_content</span><span class="keyword">)<br />    {   <br />        </span><span class="default">$value_content</span><span class="keyword">=</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'setopt_value'</span><span class="keyword">][</span><span class="default">$k</span><span class="keyword">];<br />        </span><span class="default">$index_content </span><span class="keyword">=</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$index_content</span><span class="keyword">);<br />        eval(</span><span class="string">'$index_content = '</span><span class="keyword">.</span><span class="default">$index_content</span><span class="keyword">.</span><span class="string">';'</span><span class="keyword">);<br />        </span><span class="comment">//echo ($index_content);<br />        </span><span class="keyword">if(</span><span class="default">$index_content</span><span class="keyword">!=</span><span class="string">''</span><span class="keyword">)<br />        {<br />            if(</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$value_content</span><span class="keyword">)==</span><span class="string">'TRUE'</span><span class="keyword">)<br />            {</span><span class="default">$setopt_content</span><span class="keyword">[</span><span class="default">$index_content</span><span class="keyword">]=</span><span class="default">TRUE</span><span class="keyword">;}<br />            elseif(</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$value_content</span><span class="keyword">)==</span><span class="string">'FALSE'</span><span class="keyword">)<br />            {</span><span class="default">$setopt_content</span><span class="keyword">[</span><span class="default">$index_content</span><span class="keyword">]=</span><span class="default">FALSE</span><span class="keyword">;}<br />            else<br />            {</span><span class="default">$setopt_content</span><span class="keyword">[</span><span class="default">$index_content</span><span class="keyword">]=</span><span class="default">$value_content</span><span class="keyword">;}<br />        }<br />    }<br /><br />    </span><span class="default">$info</span><span class="keyword">=</span><span class="default">curl_test</span><span class="keyword">(</span><span class="default">$setopt_content</span><span class="keyword">);<br /><br />}<br /><br /></span><span class="default">?&gt;<br /></span>&lt;textarea name="result" rows="25" cols="100"&gt;<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">);</span><span class="default">?&gt;</span>&lt;/textarea&gt;<br />&lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.curl&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.curl.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.curl.php">cURL</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.curl.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="curl.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="curl.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="curl.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="ref.curl.php" title="cURL Functions">cURL Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.curlhandle.php" title="CurlHandle">CurlHandle</a>
                        </li>
                                                <li class="">
                            <a href="class.curlmultihandle.php" title="CurlMultiHandle">CurlMultiHandle</a>
                        </li>
                                                <li class="">
                            <a href="class.curlsharehandle.php" title="CurlShareHandle">CurlShareHandle</a>
                        </li>
                                                <li class="">
                            <a href="class.curlsharepersistenthandle.php" title="CurlSharePersistentHandle">CurlSharePersistentHandle</a>
                        </li>
                                                <li class="">
                            <a href="class.curlfile.php" title="CURLFile">CURLFile</a>
                        </li>
                                                <li class="">
                            <a href="class.curlstringfile.php" title="CURLStringFile">CURLStringFile</a>
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
