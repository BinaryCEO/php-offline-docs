<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: cURL - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.curl.php">
 <link rel="shorturl" href="https://www.php.net/curl">
 <link rel="alternate" href="https://www.php.net/curl" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.remote.other.php">
 <link rel="prev" href="https://www.php.net/manual/en/refs.remote.other.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.curl.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.curl.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.curl.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.curl.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.curl.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.curl.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.curl.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.curl.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.curl.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.curl.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.curl.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.curl.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Client URL Library" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: cURL - Manual" />
<meta name="twitter:description" content="Client URL Library" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: cURL - Manual" />
<meta itemprop="description" content="Client URL Library" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Client URL Library" />

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
        <a href="intro.curl.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="refs.remote.other.php">
          &laquo; Other Services        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      </ul>
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
            <option value='en/book.curl.php' selected="selected">English</option>
            <option value='de/book.curl.php'>German</option>
            <option value='es/book.curl.php'>Spanish</option>
            <option value='fr/book.curl.php'>French</option>
            <option value='it/book.curl.php'>Italian</option>
            <option value='ja/book.curl.php'>Japanese</option>
            <option value='pt_BR/book.curl.php'>Brazilian Portuguese</option>
            <option value='ru/book.curl.php'>Russian</option>
            <option value='tr/book.curl.php'>Turkish</option>
            <option value='uk/book.curl.php'>Ukrainian</option>
            <option value='zh/book.curl.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.curl" class="book">
 
 <h1 class="title">Client URL Library</h1>
 

 
 
 
 
 







 




 







 


 



 




 




 




 




 




 




<ul class="chunklist chunklist_book"><li><a href="intro.curl.php">Introduction</a></li><li><a href="curl.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="curl.requirements.php">Requirements</a></li><li><a href="curl.installation.php">Installation</a></li><li><a href="curl.configuration.php">Runtime Configuration</a></li><li><a href="curl.resources.php">Resource Types</a></li></ul></li><li><a href="curl.constants.php">Predefined Constants</a></li><li><a href="curl.examples.php">Examples</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="curl.examples-basic.php">Basic curl example</a></li></ul></li><li><a href="ref.curl.php">cURL Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.curl-close.php">curl_close</a> — Close a cURL session</li><li><a href="function.curl-copy-handle.php">curl_copy_handle</a> — Copy a cURL handle along with all of its preferences</li><li><a href="function.curl-errno.php">curl_errno</a> — Return the last error number</li><li><a href="function.curl-error.php">curl_error</a> — Return a string containing the last error for the current session</li><li><a href="function.curl-escape.php">curl_escape</a> — URL encodes the given string</li><li><a href="function.curl-exec.php">curl_exec</a> — Perform a cURL session</li><li><a href="function.curl-getinfo.php">curl_getinfo</a> — Get information regarding a specific transfer</li><li><a href="function.curl-init.php">curl_init</a> — Initialize a cURL session</li><li><a href="function.curl-multi-add-handle.php">curl_multi_add_handle</a> — Add a normal cURL handle to a cURL multi handle</li><li><a href="function.curl-multi-close.php">curl_multi_close</a> — Remove all cURL handles from a multi handle</li><li><a href="function.curl-multi-errno.php">curl_multi_errno</a> — Return the last multi curl error number</li><li><a href="function.curl-multi-exec.php">curl_multi_exec</a> — Run the sub-connections of the current cURL handle</li><li><a href="function.curl-multi-getcontent.php">curl_multi_getcontent</a> — Return the content of a cURL handle if CURLOPT_RETURNTRANSFER is set</li><li><a href="function.curl-multi-info-read.php">curl_multi_info_read</a> — Get information about the current transfers</li><li><a href="function.curl-multi-init.php">curl_multi_init</a> — Returns a new cURL multi handle</li><li><a href="function.curl-multi-remove-handle.php">curl_multi_remove_handle</a> — Remove a handle from a set of cURL handles</li><li><a href="function.curl-multi-select.php">curl_multi_select</a> — Wait until reading or writing is possible for any cURL multi handle connection</li><li><a href="function.curl-multi-setopt.php">curl_multi_setopt</a> — Set a cURL multi option</li><li><a href="function.curl-multi-strerror.php">curl_multi_strerror</a> — Return string describing error code</li><li><a href="function.curl-pause.php">curl_pause</a> — Pause and unpause a connection</li><li><a href="function.curl-reset.php">curl_reset</a> — Reset all options of a libcurl session handle</li><li><a href="function.curl-setopt.php">curl_setopt</a> — Set an option for a cURL transfer</li><li><a href="function.curl-setopt-array.php">curl_setopt_array</a> — Set multiple options for a cURL transfer</li><li><a href="function.curl-share-close.php">curl_share_close</a> — Close a cURL share handle</li><li><a href="function.curl-share-errno.php">curl_share_errno</a> — Return the last share curl error number</li><li><a href="function.curl-share-init.php">curl_share_init</a> — Initialize a cURL share handle</li><li><a href="function.curl-share-init-persistent.php">curl_share_init_persistent</a> — Initialize a persistent cURL share handle</li><li><a href="function.curl-share-setopt.php">curl_share_setopt</a> — Set an option for a cURL share handle</li><li><a href="function.curl-share-strerror.php">curl_share_strerror</a> — Return string describing the given error code</li><li><a href="function.curl-strerror.php">curl_strerror</a> — Return string describing the given error code</li><li><a href="function.curl-unescape.php">curl_unescape</a> — Decodes the given URL encoded string</li><li><a href="function.curl_upkeep.php">curl_upkeep</a> — Performs any connection upkeep checks</li><li><a href="function.curl-version.php">curl_version</a> — Gets cURL version information</li></ul></li><li><a href="class.curlhandle.php">CurlHandle</a> — The CurlHandle class</li><li><a href="class.curlmultihandle.php">CurlMultiHandle</a> — The CurlMultiHandle class</li><li><a href="class.curlsharehandle.php">CurlShareHandle</a> — The CurlShareHandle class</li><li><a href="class.curlsharepersistenthandle.php">CurlSharePersistentHandle</a> — The CurlSharePersistentHandle class</li><li><a href="class.curlfile.php">CURLFile</a> — The CURLFile class<ul class="chunklist chunklist_book chunklist_children"><li><a href="curlfile.construct.php">CURLFile::__construct</a> — Create a CURLFile object</li><li><a href="curlfile.getfilename.php">CURLFile::getFilename</a> — Get file name</li><li><a href="curlfile.getmimetype.php">CURLFile::getMimeType</a> — Get MIME type</li><li><a href="curlfile.getpostfilename.php">CURLFile::getPostFilename</a> — Get file name for POST</li><li><a href="curlfile.setmimetype.php">CURLFile::setMimeType</a> — Set MIME type</li><li><a href="curlfile.setpostfilename.php">CURLFile::setPostFilename</a> — Set file name for POST</li></ul></li><li><a href="class.curlstringfile.php">CURLStringFile</a> — The CURLStringFile class<ul class="chunklist chunklist_book chunklist_children"><li><a href="curlstringfile.construct.php">CURLStringFile::__construct</a> — Create a CURLStringFile object</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/curl/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.curl%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.curl&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.curl.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="102885">  <div class="votes">
    <div id="Vu102885">
    <a href="/manual/vote-note.php?id=102885&amp;page=book.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102885">
    <a href="/manual/vote-note.php?id=102885&amp;page=book.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102885" title="52% like this...">
    32
    </div>
  </div>
  <a href="#102885" class="name">
  <strong class="user"><em>frank at interactinet dot com</em></strong></a><a class="genanchor" href="#102885"> &para;</a><div class="date" title="2011-03-11 09:29"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102885">
<div class="phpcode"><code><span class="html">I wrote the following to see if a submitted URL has a valid http response code and also if it responds quickly. 
<br />
<br />Use the code like this:
<br />
<br /><span class="default">&lt;?php
<br />$is_ok </span><span class="keyword">= </span><span class="default">http_response</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">); </span><span class="comment">// returns true only if http response code &lt; 400
<br /></span><span class="default">?&gt;
<br /></span>
<br />The second argument is optional, and it allows you to check for  a specific response code
<br />
<br /><span class="default">&lt;?php
<br />http_response</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">,</span><span class="string">'400'</span><span class="keyword">); </span><span class="comment">// returns true if http status is 400
<br /></span><span class="default">?&gt;
<br /></span>
<br />The third allows you to specify how long you are willing to wait for a response.
<br />
<br /><span class="default">&lt;?php
<br />http_response</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">,</span><span class="string">'200'</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">); </span><span class="comment">// returns true if the response takes less than 3 seconds and the response code is 200
<br /></span><span class="default">?&gt;
<br /></span>
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">http_response</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="default">$status </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$wait </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">)
<br />{
<br />        </span><span class="default">$time </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);
<br />        </span><span class="default">$expire </span><span class="keyword">= </span><span class="default">$time </span><span class="keyword">+ </span><span class="default">$wait</span><span class="keyword">;
<br />
<br />        </span><span class="comment">// we fork the process so we don't have to wait for a timeout
<br />        </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();
<br />        if (</span><span class="default">$pid </span><span class="keyword">== -</span><span class="default">1</span><span class="keyword">) {
<br />            die(</span><span class="string">'could not fork'</span><span class="keyword">);
<br />        } else if (</span><span class="default">$pid</span><span class="keyword">) {
<br />            </span><span class="comment">// we are the parent
<br />            </span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();
<br />            </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">, </span><span class="default">$url</span><span class="keyword">);
<br />            </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_HEADER</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);
<br />            </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_NOBODY</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">); </span><span class="comment">// remove body
<br />            </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);
<br />            </span><span class="default">$head </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br />            </span><span class="default">$httpCode </span><span class="keyword">= </span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLINFO_HTTP_CODE</span><span class="keyword">);
<br />            </span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br />            
<br />            if(!</span><span class="default">$head</span><span class="keyword">)
<br />            {
<br />                return </span><span class="default">FALSE</span><span class="keyword">;
<br />            }
<br />            
<br />            if(</span><span class="default">$status </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">)
<br />            {
<br />                if(</span><span class="default">$httpCode </span><span class="keyword">&lt; </span><span class="default">400</span><span class="keyword">)
<br />                {
<br />                    return </span><span class="default">TRUE</span><span class="keyword">;
<br />                }
<br />                else
<br />                {
<br />                    return </span><span class="default">FALSE</span><span class="keyword">;
<br />                }
<br />            }
<br />            elseif(</span><span class="default">$status </span><span class="keyword">== </span><span class="default">$httpCode</span><span class="keyword">)
<br />            {
<br />                return </span><span class="default">TRUE</span><span class="keyword">;
<br />            }
<br />            
<br />            return </span><span class="default">FALSE</span><span class="keyword">;
<br />            </span><span class="default">pcntl_wait</span><span class="keyword">(</span><span class="default">$status</span><span class="keyword">); </span><span class="comment">//Protect against Zombie children
<br />        </span><span class="keyword">} else {
<br />            </span><span class="comment">// we are the child
<br />            </span><span class="keyword">while(</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) &lt; </span><span class="default">$expire</span><span class="keyword">)
<br />            {
<br />            </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">0.5</span><span class="keyword">);
<br />            }
<br />            return </span><span class="default">FALSE</span><span class="keyword">;
<br />        }
<br />    }
<br /></span><span class="default">?&gt;
<br /></span>
<br />Hope this example helps.  It is not 100% tested, so any feedback [sent directly to me by email] is appreciated.</span></code></div>
  </div>
 </div>
  <div class="note" id="99979">  <div class="votes">
    <div id="Vu99979">
    <a href="/manual/vote-note.php?id=99979&amp;page=book.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99979">
    <a href="/manual/vote-note.php?id=99979&amp;page=book.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99979" title="55% like this...">
    14
    </div>
  </div>
  <a href="#99979" class="name">
  <strong class="user"><em>artax_N_O_S_P_A_M_erxes2 at iname dot com</em></strong></a><a class="genanchor" href="#99979"> &para;</a><div class="date" title="2010-09-17 08:59"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99979">
<div class="phpcode"><code><span class="html">I needed to use cURL in a php script to download data using not only SSL for the server authentication but also for client authentication.
<br />On a default install of Fedora, setting up the proper cURL parameters, I would get an error: 
<br />
<br />$ php curl.php
<br /> Peer certificate cannot be authenticated with known CA certificates
<br />
<br />The data on <a href="http://curl.haxx.se/docs/sslcerts.html" rel="nofollow" target="_blank">http://curl.haxx.se/docs/sslcerts.html</a> was most useful. Indeed, toward to bottom it tells you to add a missing link inside /etc/pki/nssdb to use the ca-bundle.crt file. You do it so:
<br />
<br /># cd /etc/pki/nssdb
<br /># ln -s /usr/lib64/libnssckbi.so libnssckbi.so
<br />
<br />Now you can do client authentication, provided you have your certificate handy with:
<br />
<br /><span class="default">&lt;?php
<br />$data </span><span class="keyword">= </span><span class="string">"&lt;soap:Envelope&gt;[...]&lt;/soap:Envelope&gt;"</span><span class="keyword">;
<br /></span><span class="default">$tuCurl </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">, </span><span class="string">"<a href="https://example.com/path/for/soap/url/" rel="nofollow" target="_blank">https://example.com/path/for/soap/url/</a>"</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">, </span><span class="default">CURLOPT_PORT </span><span class="keyword">, </span><span class="default">443</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">, </span><span class="default">CURLOPT_VERBOSE</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">, </span><span class="default">CURLOPT_HEADER</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">, </span><span class="default">CURLOPT_SSLVERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">, </span><span class="default">CURLOPT_SSLCERT</span><span class="keyword">, </span><span class="default">getcwd</span><span class="keyword">() . </span><span class="string">"/client.pem"</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">, </span><span class="default">CURLOPT_SSLKEY</span><span class="keyword">, </span><span class="default">getcwd</span><span class="keyword">() . </span><span class="string">"/keyout.pem"</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">, </span><span class="default">CURLOPT_CAINFO</span><span class="keyword">, </span><span class="default">getcwd</span><span class="keyword">() . </span><span class="string">"/ca.pem"</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">, </span><span class="default">CURLOPT_POST</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">, </span><span class="default">CURLOPT_SSL_VERIFYPEER</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">, </span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">, </span><span class="default">CURLOPT_HTTPHEADER</span><span class="keyword">, array(</span><span class="string">"Content-Type: text/xml"</span><span class="keyword">,</span><span class="string">"SOAPAction: \"/soap/action/query\""</span><span class="keyword">, </span><span class="string">"Content-length: "</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)));
<br />
<br /></span><span class="default">$tuData </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">);
<br />if(!</span><span class="default">curl_errno</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">)){
<br />  </span><span class="default">$info </span><span class="keyword">= </span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">);
<br />  echo </span><span class="string">'Took ' </span><span class="keyword">. </span><span class="default">$info</span><span class="keyword">[</span><span class="string">'total_time'</span><span class="keyword">] . </span><span class="string">' seconds to send a request to ' </span><span class="keyword">. </span><span class="default">$info</span><span class="keyword">[</span><span class="string">'url'</span><span class="keyword">];
<br />} else {
<br />  echo </span><span class="string">'Curl error: ' </span><span class="keyword">. </span><span class="default">curl_error</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$tuCurl</span><span class="keyword">);
<br />echo </span><span class="default">$tuData</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119078">  <div class="votes">
    <div id="Vu119078">
    <a href="/manual/vote-note.php?id=119078&amp;page=book.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119078">
    <a href="/manual/vote-note.php?id=119078&amp;page=book.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119078" title="55% like this...">
    12
    </div>
  </div>
  <a href="#119078" class="name">
  <strong class="user"><em>gmail@asmqb7</em></strong></a><a class="genanchor" href="#119078"> &para;</a><div class="date" title="2016-03-29 10:48"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119078">
<div class="phpcode"><code><span class="html">WARNING WARNING<br /><br />In this example: <a href="http://php.net/manual/en/book.curl.php#102885" rel="nofollow" target="_blank">http://php.net/manual/en/book.curl.php#102885</a> by "frank at interactinet dot com"<br /><br />There's a small bug in<br /><br /><span class="default">&lt;?php<br /><br />         </span><span class="keyword">...<br /><br />         elseif(</span><span class="default">$status </span><span class="keyword">== </span><span class="default">$httpCode</span><span class="keyword">) <br />            { <br />                return </span><span class="default">TRUE</span><span class="keyword">; <br />            } <br /><br />            return </span><span class="default">FALSE</span><span class="keyword">; <br />            </span><span class="default">pcntl_wait</span><span class="keyword">(</span><span class="default">$status</span><span class="keyword">); </span><span class="comment">//Protect against Zombie children <br />        </span><span class="keyword">} else { <br />            </span><span class="comment">// we are the child <br />            </span><span class="keyword">while(</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) &lt; </span><span class="default">$expire</span><span class="keyword">) <br /><br />         ...<br /><br /></span><span class="default">?&gt;<br /></span><br />The code will immediately leave the function at the `return`, and pcntl_wait() will NEVER be executed, under any circumstances.<br /><br />I can't see any other issues with this function however.</span></code></div>
  </div>
 </div>
  <div class="note" id="90821">  <div class="votes">
    <div id="Vu90821">
    <a href="/manual/vote-note.php?id=90821&amp;page=book.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90821">
    <a href="/manual/vote-note.php?id=90821&amp;page=book.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90821" title="50% like this...">
    11
    </div>
  </div>
  <a href="#90821" class="name">
  <strong class="user"><em>artem at zabsoft dot co dot in</em></strong></a><a class="genanchor" href="#90821"> &para;</a><div class="date" title="2009-05-11 11:43"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90821">
<div class="phpcode"><code><span class="html">Hey I modified script for php 5. Also I add support server auth. and fixed some little bugs on the script.
<br />
<br />[EDIT BY danbrown AT php DOT net: Original was written by (unlcuky13 AT gmail DOT com) on 19-APR-09.  The following note was included:
<br />Below is the my way of using through PHP 5 objecte oriented encapsulation to make thing easier.]
<br />
<br /><span class="default">&lt;?php
<br /> </span><span class="keyword">class </span><span class="default">mycurl </span><span class="keyword">{
<br />     protected </span><span class="default">$_useragent </span><span class="keyword">= </span><span class="string">'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1'</span><span class="keyword">;
<br />     protected </span><span class="default">$_url</span><span class="keyword">;
<br />     protected </span><span class="default">$_followlocation</span><span class="keyword">;
<br />     protected </span><span class="default">$_timeout</span><span class="keyword">;
<br />     protected </span><span class="default">$_maxRedirects</span><span class="keyword">;
<br />     protected </span><span class="default">$_cookieFileLocation </span><span class="keyword">= </span><span class="string">'./cookie.txt'</span><span class="keyword">;
<br />     protected </span><span class="default">$_post</span><span class="keyword">;
<br />     protected </span><span class="default">$_postFields</span><span class="keyword">;
<br />     protected </span><span class="default">$_referer </span><span class="keyword">=</span><span class="string">"<a href="http://www.google.com" rel="nofollow" target="_blank">http://www.google.com</a>"</span><span class="keyword">;
<br />
<br />     protected </span><span class="default">$_session</span><span class="keyword">;
<br />     protected </span><span class="default">$_webpage</span><span class="keyword">;
<br />     protected </span><span class="default">$_includeHeader</span><span class="keyword">;
<br />     protected </span><span class="default">$_noBody</span><span class="keyword">;
<br />     protected </span><span class="default">$_status</span><span class="keyword">;
<br />     protected </span><span class="default">$_binaryTransfer</span><span class="keyword">;
<br />     public    </span><span class="default">$authentication </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />     public    </span><span class="default">$auth_name      </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />     public    </span><span class="default">$auth_pass      </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />
<br />     public function </span><span class="default">useAuth</span><span class="keyword">(</span><span class="default">$use</span><span class="keyword">){
<br />       </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">authentication </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />       if(</span><span class="default">$use </span><span class="keyword">== </span><span class="default">true</span><span class="keyword">) </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">authentication </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;
<br />     }
<br />
<br />     public function </span><span class="default">setName</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">){
<br />       </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">auth_name </span><span class="keyword">= </span><span class="default">$name</span><span class="keyword">;
<br />     }
<br />     public function </span><span class="default">setPass</span><span class="keyword">(</span><span class="default">$pass</span><span class="keyword">){
<br />       </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">auth_pass </span><span class="keyword">= </span><span class="default">$pass</span><span class="keyword">;
<br />     }
<br />
<br />     public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">,</span><span class="default">$followlocation </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">,</span><span class="default">$timeOut </span><span class="keyword">= </span><span class="default">30</span><span class="keyword">,</span><span class="default">$maxRedirecs </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">,</span><span class="default">$binaryTransfer </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">,</span><span class="default">$includeHeader </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">,</span><span class="default">$noBody </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)
<br />     {
<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_url </span><span class="keyword">= </span><span class="default">$url</span><span class="keyword">;
<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_followlocation </span><span class="keyword">= </span><span class="default">$followlocation</span><span class="keyword">;
<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_timeout </span><span class="keyword">= </span><span class="default">$timeOut</span><span class="keyword">;
<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_maxRedirects </span><span class="keyword">= </span><span class="default">$maxRedirecs</span><span class="keyword">;
<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_noBody </span><span class="keyword">= </span><span class="default">$noBody</span><span class="keyword">;
<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_includeHeader </span><span class="keyword">= </span><span class="default">$includeHeader</span><span class="keyword">;
<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_binaryTransfer </span><span class="keyword">= </span><span class="default">$binaryTransfer</span><span class="keyword">;
<br />
<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_cookieFileLocation </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">).</span><span class="string">'/cookie.txt'</span><span class="keyword">;
<br />
<br />     }
<br />
<br />     public function </span><span class="default">setReferer</span><span class="keyword">(</span><span class="default">$referer</span><span class="keyword">){
<br />       </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_referer </span><span class="keyword">= </span><span class="default">$referer</span><span class="keyword">;
<br />     }
<br />
<br />     public function </span><span class="default">setCookiFileLocation</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)
<br />     {
<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_cookieFileLocation </span><span class="keyword">= </span><span class="default">$path</span><span class="keyword">;
<br />     }
<br />
<br />     public function </span><span class="default">setPost </span><span class="keyword">(</span><span class="default">$postFields</span><span class="keyword">)
<br />     {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_post </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_postFields </span><span class="keyword">= </span><span class="default">$postFields</span><span class="keyword">;
<br />     }
<br />
<br />     public function </span><span class="default">setUserAgent</span><span class="keyword">(</span><span class="default">$userAgent</span><span class="keyword">)
<br />     {
<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_useragent </span><span class="keyword">= </span><span class="default">$userAgent</span><span class="keyword">;
<br />     }
<br />
<br />     public function </span><span class="default">createCurl</span><span class="keyword">(</span><span class="default">$url </span><span class="keyword">= </span><span class="string">'nul'</span><span class="keyword">)
<br />     {
<br />        if(</span><span class="default">$url </span><span class="keyword">!= </span><span class="string">'nul'</span><span class="keyword">){
<br />          </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_url </span><span class="keyword">= </span><span class="default">$url</span><span class="keyword">;
<br />        }
<br />
<br />         </span><span class="default">$s </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();
<br />
<br />         </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">CURLOPT_URL</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_url</span><span class="keyword">);
<br />         </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">CURLOPT_HTTPHEADER</span><span class="keyword">,array(</span><span class="string">'Expect:'</span><span class="keyword">));
<br />         </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">CURLOPT_TIMEOUT</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_timeout</span><span class="keyword">);
<br />         </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">CURLOPT_MAXREDIRS</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_maxRedirects</span><span class="keyword">);
<br />         </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);
<br />         </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">CURLOPT_FOLLOWLOCATION</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_followlocation</span><span class="keyword">);
<br />         </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">CURLOPT_COOKIEJAR</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_cookieFileLocation</span><span class="keyword">);
<br />         </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">CURLOPT_COOKIEFILE</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_cookieFileLocation</span><span class="keyword">);
<br />
<br />         if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">authentication </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">){
<br />           </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">, </span><span class="default">CURLOPT_USERPWD</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">auth_name</span><span class="keyword">.</span><span class="string">':'</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">auth_pass</span><span class="keyword">);
<br />         }
<br />         if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_post</span><span class="keyword">)
<br />         {
<br />             </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">CURLOPT_POST</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);
<br />             </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_postFields</span><span class="keyword">);
<br />
<br />         }
<br />
<br />         if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_includeHeader</span><span class="keyword">)
<br />         {
<br />               </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">CURLOPT_HEADER</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);
<br />         }
<br />
<br />         if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_noBody</span><span class="keyword">)
<br />         {
<br />             </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">CURLOPT_NOBODY</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);
<br />         }
<br />         </span><span class="comment">/*
<br />         if($this-&gt;_binary)
<br />         {
<br />             curl_setopt($s,CURLOPT_BINARYTRANSFER,true);
<br />         }
<br />         */
<br />         </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">CURLOPT_USERAGENT</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_useragent</span><span class="keyword">);
<br />         </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">CURLOPT_REFERER</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_referer</span><span class="keyword">);
<br />
<br />         </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_webpage </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">);
<br />                   </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_status </span><span class="keyword">= </span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">CURLINFO_HTTP_CODE</span><span class="keyword">);
<br />         </span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">);
<br />
<br />     }
<br />
<br />   public function </span><span class="default">getHttpStatus</span><span class="keyword">()
<br />   {
<br />       return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_status</span><span class="keyword">;
<br />   }
<br />
<br />   public function </span><span class="default">__tostring</span><span class="keyword">(){
<br />      return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_webpage</span><span class="keyword">;
<br />   }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />[EDIT BY danbrown AT php DOT net: Contains a bugfix supplied by "roetsch.beni at googlemail (dot) com" on 02-AUG-09, with the following note: "Fixes the bugfix: 417 bug at lighthttp server."]</span></code></div>
  </div>
 </div>
  <div class="note" id="126003">  <div class="votes">
    <div id="Vu126003">
    <a href="/manual/vote-note.php?id=126003&amp;page=book.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126003">
    <a href="/manual/vote-note.php?id=126003&amp;page=book.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126003" title="56% like this...">
    4
    </div>
  </div>
  <a href="#126003" class="name">
  <strong class="user"><em>zle.lc</em></strong></a><a class="genanchor" href="#126003"> &para;</a><div class="date" title="2021-04-13 02:15"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126003">
<div class="phpcode"><code><span class="html">Sharing is caring, handles included.<br /><br /><span class="default">&lt;?php<br /><br />$url_one </span><span class="keyword">= </span><span class="string">"php.net"</span><span class="keyword">;<br /></span><span class="default">$url_two </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br /><br /></span><span class="default">$user_agent </span><span class="keyword">= </span><span class="string">'Mozilla HotFox 1.0'</span><span class="keyword">;<br /><br /></span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">, </span><span class="default">$url_one</span><span class="keyword">.</span><span class="default">$url_two</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_USERAGENT</span><span class="keyword">, </span><span class="default">$user_agent</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_FOLLOWLOCATION</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_HEADER</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_NOBODY</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_TIMEOUT</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">);<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /></span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /><br /></span><span class="default">$url_two </span><span class="keyword">= </span><span class="string">"lazyphp.net"</span><span class="keyword">;<br /></span><span class="default">$url_one </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br /></span><span class="default">$res_two </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /></span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124278">  <div class="votes">
    <div id="Vu124278">
    <a href="/manual/vote-note.php?id=124278&amp;page=book.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124278">
    <a href="/manual/vote-note.php?id=124278&amp;page=book.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124278" title="54% like this...">
    5
    </div>
  </div>
  <a href="#124278" class="name">
  <strong class="user"><em>jcmargentina at gmail dot com</em></strong></a><a class="genanchor" href="#124278"> &para;</a><div class="date" title="2019-10-09 01:40"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124278">
<div class="phpcode"><code><span class="html">Please note that new versions of curl is using http2 as default, so if you are having some strange errors, 0 http status codes, etc, please explicitly specify the http version in your code.</span></code></div>
  </div>
 </div>
  <div class="note" id="100646">  <div class="votes">
    <div id="Vu100646">
    <a href="/manual/vote-note.php?id=100646&amp;page=book.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100646">
    <a href="/manual/vote-note.php?id=100646&amp;page=book.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100646" title="54% like this...">
    6
    </div>
  </div>
  <a href="#100646" class="name">
  <strong class="user"><em>ramez at  dot dontspan dot zegenie dot com</em></strong></a><a class="genanchor" href="#100646"> &para;</a><div class="date" title="2010-10-27 09:19"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100646">
<div class="phpcode"><code><span class="html">CURL failed with PHP5.3 and Apache2.2.X on my Windows 7 machine. <br /><br />It turns out that it's not enough to copy the two dll's mentioned (libeay32 and sslea32) from the php folder into your system32 folder. You HAVE TO UNBLOCK THESE TWO FILES.<br /><br />Right click the file, select unblock, for each one. Then restart Apache.<br /><br />Another very handy security feature added into Windows.</span></code></div>
  </div>
 </div>
  <div class="note" id="113910">  <div class="votes">
    <div id="Vu113910">
    <a href="/manual/vote-note.php?id=113910&amp;page=book.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113910">
    <a href="/manual/vote-note.php?id=113910&amp;page=book.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113910" title="52% like this...">
    3
    </div>
  </div>
  <a href="#113910" class="name">
  <strong class="user"><em>fred dot knieper at gmail dot com</em></strong></a><a class="genanchor" href="#113910"> &para;</a><div class="date" title="2013-12-16 04:07"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113910">
<div class="phpcode"><code><span class="html">After a lot of frustration with the fact that nobody has documented which curl commandline options go with which library functions, I discovered that the curl commandline will tell you (in the form of a C program) if you add `--libcurl foo.c`<br /><br />If you've been struggling with trying to figure out how to get your fancy curl commandline to work in PHP, this makes it a breeze!</span></code></div>
  </div>
 </div>
  <div class="note" id="116122">  <div class="votes">
    <div id="Vu116122">
    <a href="/manual/vote-note.php?id=116122&amp;page=book.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116122">
    <a href="/manual/vote-note.php?id=116122&amp;page=book.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116122" title="51% like this...">
    3
    </div>
  </div>
  <a href="#116122" class="name">
  <strong class="user"><em>qrworld.net</em></strong></a><a class="genanchor" href="#116122"> &para;</a><div class="date" title="2014-11-11 04:41"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116122">
<div class="phpcode"><code><span class="html">Here you have a function that I use to get the content of a URL using cURL:<br /><br />function getUrlContent($url){<br /> $ch = curl_init();<br /> curl_setopt($ch, CURLOPT_URL, $url);<br /> curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)');<br /> curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);<br /> curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);<br /> curl_setopt($ch, CURLOPT_TIMEOUT, 5);<br /> $data = curl_exec($ch);<br /> $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);<br /> curl_close($ch);<br /> return ($httpcode&gt;=200 &amp;&amp; $httpcode&lt;300) ? $data : false;<br />}<br /><br />The source comes from this website:<br /><br /><a href="http://softontherocks.blogspot.com/2014/11/descargar-el-contenido-de-una-url.html" rel="nofollow" target="_blank">http://softontherocks.blogspot.com/2014/11/descargar-el-contenido-de-una-url.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="86143">  <div class="votes">
    <div id="Vu86143">
    <a href="/manual/vote-note.php?id=86143&amp;page=book.curl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86143">
    <a href="/manual/vote-note.php?id=86143&amp;page=book.curl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86143" title="47% like this...">
    -3
    </div>
  </div>
  <a href="#86143" class="name">
  <strong class="user"><em>eflash at gmx dot net</em></strong></a><a class="genanchor" href="#86143"> &para;</a><div class="date" title="2008-10-05 09:45"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86143">
<div class="phpcode"><code><span class="html">In order to use curl with secure sites you will need a ca-bundle.crt file; here's a PHP script I've written which creates a fresh ca-bundle:<br /><a href="http://www.gknw.net/php/phpscripts/mk-ca-bundle.php" rel="nofollow" target="_blank">http://www.gknw.net/php/phpscripts/mk-ca-bundle.php</a><br />I've also written scripts in other languages, f.e. the Perl one which ships now with curl distributions:<br /><a href="http://curl.haxx.se/lxr/source/lib/mk-ca-bundle.pl" rel="nofollow" target="_blank">http://curl.haxx.se/lxr/source/lib/mk-ca-bundle.pl</a><br />and also a Win32 WSH script if you prefer that:<br /><a href="http://www.gknw.net/vb/scripts/mk-ca-bundle.vbs" rel="nofollow" target="_blank">http://www.gknw.net/vb/scripts/mk-ca-bundle.vbs</a><br /><br />HTH, Guenter.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.curl&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.curl.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.remote.other.php">Other Services</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="book.curl.php" title="cURL">cURL</a>
                        </li>
                                                <li class="">
                            <a href="book.event.php" title="Event">Event</a>
                        </li>
                                                <li class="">
                            <a href="book.ftp.php" title="FTP">FTP</a>
                        </li>
                                                <li class="">
                            <a href="book.gearman.php" title="Gearman">Gearman</a>
                        </li>
                                                <li class="">
                            <a href="book.ldap.php" title="LDAP">LDAP</a>
                        </li>
                                                <li class="">
                            <a href="book.memcache.php" title="Memcache">Memcache</a>
                        </li>
                                                <li class="">
                            <a href="book.memcached.php" title="Memcached">Memcached</a>
                        </li>
                                                <li class="">
                            <a href="book.mqseries.php" title="mqseries">mqseries</a>
                        </li>
                                                <li class="">
                            <a href="book.network.php" title="Network">Network</a>
                        </li>
                                                <li class="">
                            <a href="book.rrd.php" title="RRD">RRD</a>
                        </li>
                                                <li class="">
                            <a href="book.scoutapm.php" title="ScoutAPM">ScoutAPM</a>
                        </li>
                                                <li class="">
                            <a href="book.snmp.php" title="SNMP">SNMP</a>
                        </li>
                                                <li class="">
                            <a href="book.sockets.php" title="Sockets">Sockets</a>
                        </li>
                                                <li class="">
                            <a href="book.ssh2.php" title="SSH2">SSH2</a>
                        </li>
                                                <li class="">
                            <a href="book.stomp.php" title="Stomp">Stomp</a>
                        </li>
                                                <li class="">
                            <a href="book.svm.php" title="SVM">SVM</a>
                        </li>
                                                <li class="">
                            <a href="book.svn.php" title="SVN">SVN</a>
                        </li>
                                                <li class="">
                            <a href="book.tcpwrap.php" title="TCP">TCP</a>
                        </li>
                                                <li class="">
                            <a href="book.varnish.php" title="Varnish">Varnish</a>
                        </li>
                                                <li class="">
                            <a href="book.yaz.php" title="YAZ">YAZ</a>
                        </li>
                                                <li class="">
                            <a href="book.zmq.php" title="0MQ messaging">0MQ messaging</a>
                        </li>
                                                <li class="">
                            <a href="book.zookeeper.php" title="ZooKeeper">ZooKeeper</a>
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
