<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Changelog - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/doc.changelog.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/doc.changelog.php">
 <link rel="alternate" href="https://www.php.net/manual/en/doc.changelog.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/appendices.php">
 <link rel="prev" href="https://www.php.net/manual/en/indexes.examples.php">
 <link rel="next" href="https://www.php.net/manual/en/">

 <link rel="alternate" href="https://www.php.net/manual/en/doc.changelog.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/doc.changelog.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/doc.changelog.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/doc.changelog.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/doc.changelog.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/doc.changelog.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/doc.changelog.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/doc.changelog.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/doc.changelog.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/doc.changelog.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/doc.changelog.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Changelog" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Changelog - Manual" />
<meta name="twitter:description" content="Changelog" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Changelog - Manual" />
<meta itemprop="description" content="Changelog" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Changelog" />

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
        <a href="">
           &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="indexes.examples.php">
          &laquo; Example listing        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      </ul>
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
            <option value='en/doc.changelog.php' selected="selected">English</option>
            <option value='de/doc.changelog.php'>German</option>
            <option value='es/doc.changelog.php'>Spanish</option>
            <option value='fr/doc.changelog.php'>French</option>
            <option value='it/doc.changelog.php'>Italian</option>
            <option value='ja/doc.changelog.php'>Japanese</option>
            <option value='pt_BR/doc.changelog.php'>Brazilian Portuguese</option>
            <option value='ru/doc.changelog.php'>Russian</option>
            <option value='tr/doc.changelog.php'>Turkish</option>
            <option value='uk/doc.changelog.php'>Ukrainian</option>
            <option value='zh/doc.changelog.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="doc.changelog" class="appendix">
   <h1 class="title">Changelog</h1>

    <p class="para">The following changes have been made to functions of bundled extensions.</p>
    
    <table class='doctable table' rules='groups'><thead><tr><th>Version</th><th>Function</th><th>Description</th></tr></thead><tbody class="gen-changelog v"><tr><td>8.4.0</td><td><a href='domdocument.registernodeclass.php'>DOMDocument::registerNodeClass</a></td><td>DOMDocument::registerNodeClass
       now has a tentative return of true.</td></tr><tr><td>&nbsp;</td><td><a href='domimplementation.createdocument.php'>DOMImplementation::createDocument</a></td><td>The function now has the tentative return type DOMDocument.</td></tr><tr><td>&nbsp;</td><td><a href='domxpath.registerphpfunctions.php'>DOMXPath::registerPhpFunctions</a></td><td>It is now possible to use callables for callbacks
       when using restrict with array
       entries.</td></tr><tr><td>&nbsp;</td><td><a href='domxpath.registerphpfunctions.php#domxpath.registerphpfunctions..changelog.errors'></a></td><td>Invalid callback names now throws a
       ValueError.
       Passing a non-callable entry now throws a
       TypeError.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcpow.php'>bcpow</a></td><td>Negative powers of 0 previously returned 0, but now throw a DivisionByZeroError
       exception.</td></tr><tr><td>&nbsp;</td><td><a href='function.bind-textdomain-codeset.php'>bind_textdomain_codeset</a></td><td>Now throws a ValueError if domain
       is the empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.bind-textdomain-codeset.php'>bind_textdomain_codeset</a></td><td>codeset is optional now.
       Previously, the parameter always had to be specified.</td></tr><tr><td>&nbsp;</td><td><a href='function.bindtextdomain.php'>bindtextdomain</a></td><td>directory is optional now.
       Previously, the parameter always had to be specified.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-getinfo.php'>curl_getinfo</a></td><td>Introduced CURLINFO_POSTTRANSFER_TIME_T constant and posttransfer_time_us (Curl 8.10.0 or later).</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-multi-select.php'>curl_multi_select</a></td><td>Now throws a ValueError if timeout
       is less than 0 or greater than PHP_INT_MAX.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-setopt.php'>curl_setopt</a></td><td>CURLOPT_DNS_USE_GLOBAL_CACHE no longer has any effect,
        and enabling it on thread-safe PHP builds no longer triggers a warning.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-version.php'>curl_version</a></td><td>features_list added.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-close.php'>dba_close</a></td><td>The dba parameter expects a Dba\Connection
  instance now; previously, a valid dba resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-delete.php'>dba_delete</a></td><td>The dba parameter expects a Dba\Connection
  instance now; previously, a valid dba resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-exists.php'>dba_exists</a></td><td>The dba parameter expects a Dba\Connection
  instance now; previously, a valid dba resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-fetch.php'>dba_fetch</a></td><td>The dba parameter expects a Dba\Connection
  instance now; previously, a valid dba resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-firstkey.php'>dba_firstkey</a></td><td>The dba parameter expects a Dba\Connection
  instance now; previously, a valid dba resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-insert.php'>dba_insert</a></td><td>The dba parameter expects a Dba\Connection
  instance now; previously, a valid dba resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-key-split.php'>dba_key_split</a></td><td>Passing null or false to key
       is now deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-nextkey.php'>dba_nextkey</a></td><td>The dba parameter expects a Dba\Connection
  instance now; previously, a valid dba resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-open.php'>dba_open</a></td><td>Returns a Dba\Connection instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-optimize.php'>dba_optimize</a></td><td>The dba parameter expects a Dba\Connection
  instance now; previously, a valid dba resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-popen.php'>dba_popen</a></td><td>Returns a Dba\Connection instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-replace.php'>dba_replace</a></td><td>The dba parameter expects a Dba\Connection
  instance now; previously, a valid dba resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-sync.php'>dba_sync</a></td><td>The dba parameter expects a Dba\Connection
  instance now; previously, a valid dba resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.dgettext.php'>dgettext</a></td><td>Now throws a ValueError if domain
       is the empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.dngettext.php'>dngettext</a></td><td>Now throws a ValueError if domain
       is the empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.exit.php'>exit</a></td><td>exit is now a proper function,
       therefore it follows the usual
       type juggling semantics
       is affected by the
       strict_types
       declare, can be called with named arguments, and be a
       variable functions.</td></tr><tr><td>&nbsp;</td><td><a href='function.fgetcsv.php'>fgetcsv</a></td><td>Relying on the default value of escape is now
        deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.flush.php'>flush</a></td><td>Flushing headers without a body will now succeed in FastCGI.</td></tr><tr><td>&nbsp;</td><td><a href='function.fputcsv.php'>fputcsv</a></td><td>Relying on the default value of escape is now
        deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-init.php'>hash_init</a></td><td>Passing options of a wrong type is now deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-update.php'>hash_update</a></td><td>Now has a return type of true instead of
        bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.highlight-string.php'>highlight_string</a></td><td>Return type changed from stringbool to stringtrue.</td></tr><tr><td>&nbsp;</td><td><a href='function.imageavif.php'>imageavif</a></td><td>Now throws a ValueError if quality
       or speed is invalid.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagefilter.php'>imagefilter</a></td><td>Now throws a ValueError
        if sub or plus would cause over-/underflow
        with the IMG_FILTER_SCATTER filter.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagejpeg.php'>imagejpeg</a></td><td>Now throws a ValueError if quality is invalid.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagepng.php'>imagepng</a></td><td>Now throws a ValueError if quality is invalid.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagescale.php'>imagescale</a></td><td>Now throws a ValueError if width
       or height would cause over-/underflow.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagescale.php'>imagescale</a></td><td>Now throws a ValueError if mode is invalid.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagewebp.php'>imagewebp</a></td><td>Now throws a ValueError if quality is invalid.</td></tr><tr><td>&nbsp;</td><td><a href='function.lcg-value.php'>lcg_value</a></td><td>This function has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.libxml-set-streams-context.php'>libxml_set_streams_context</a></td><td>libxml_set_streams_context now throws a
       TypeError when a non-stream resource is passed
       to context, instead of throwing later when the
       context is used.</td></tr><tr><td>&nbsp;</td><td><a href='function.long2ip.php'>long2ip</a></td><td>Return type changed from stringfalse to string.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-decode-numericentity.php'>mb_decode_numericentity</a></td><td>mb_decode_numericentity now throws a
       ValueError if map
       is not a list of ints.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-encode-numericentity.php'>mb_encode_numericentity</a></td><td>mb_encode_numericentity now throws a
       ValueError if map
       is not a list of ints.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-http-input.php'>mb_http_input</a></td><td>mb_http_input now throws a
       ValueError if type
       is invalid.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-http-output.php'>mb_http_output</a></td><td>mb_http_output now throws a
       ValueError if encoding
       contains null bytes.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-autocommit.php'>odbc_autocommit</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-binmode.php'>odbc_binmode</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-close.php'>odbc_close</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-columnprivileges.php'>odbc_columnprivileges</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-columns.php'>odbc_columns</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-commit.php'>odbc_commit</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-connect.php'>odbc_connect</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-connect.php'>odbc_connect</a></td><td>This function returns a Odbc\Connection instance now;
   previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-connect.php'>odbc_connect</a></td><td>user and password are now nullable,
   they are now also optional and default to null.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-connect.php'>odbc_connect</a></td><td>Previously, using an empty string for password would not include
   pwd in the generated connection string for dsn.
   It is now generated to include a pwd which has an empty string as its value.
   To restore the previous behaviour password can now be set to null.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-connect.php'>odbc_connect</a></td><td>Previously, if dsn contained uid or pwd
   both user and password parameters were ignored.
   Now user is only ignored if dsn contains
   uid, and password  is only ignored if
   dsn contains pwd.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-cursor.php'>odbc_cursor</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-data-source.php'>odbc_data_source</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-error.php'>odbc_error</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-errormsg.php'>odbc_errormsg</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-exec.php'>odbc_exec</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-exec.php'>odbc_exec</a></td><td>This function returns an Odbc\Result
  instance now; previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-execute.php'>odbc_execute</a></td><td>This function returns an Odbc\Result
  instance now; previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-fetch-array.php'>odbc_fetch_array</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-fetch-array.php'>odbc_fetch_array</a></td><td>row is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-fetch-into.php'>odbc_fetch_into</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-fetch-into.php'>odbc_fetch_into</a></td><td>row is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-fetch-object.php'>odbc_fetch_object</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-fetch-object.php'>odbc_fetch_object</a></td><td>row is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-fetch-row.php'>odbc_fetch_row</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-fetch-row.php'>odbc_fetch_row</a></td><td>An E_WARNING is now emitted when row
       is equal or less than zero.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-field-len.php'>odbc_field_len</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-field-name.php'>odbc_field_name</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-field-num.php'>odbc_field_num</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-field-scale.php'>odbc_field_scale</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-field-type.php'>odbc_field_type</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-foreignkeys.php'>odbc_foreignkeys</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-foreignkeys.php'>odbc_foreignkeys</a></td><td>This function returns an Odbc\Result
  instance now; previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-free-result.php'>odbc_free_result</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-gettypeinfo.php'>odbc_gettypeinfo</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-gettypeinfo.php'>odbc_gettypeinfo</a></td><td>This function returns an Odbc\Result
  instance now; previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-longreadlen.php'>odbc_longreadlen</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-next-result.php'>odbc_next_result</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-num-fields.php'>odbc_num_fields</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-num-rows.php'>odbc_num_rows</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-pconnect.php'>odbc_pconnect</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-pconnect.php'>odbc_pconnect</a></td><td>This function returns a Odbc\Connection instance now;
   previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-pconnect.php'>odbc_pconnect</a></td><td>user and password are now nullable,
   they are now also optional and default to null.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-pconnect.php'>odbc_pconnect</a></td><td>Previously, using an empty string for password would not include
   pwd in the generated connection string for dsn.
   It is now generated to include a pwd which has an empty string as its value.
   To restore the previous behaviour password can now be set to null.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-pconnect.php'>odbc_pconnect</a></td><td>Previously, if dsn contained uid or pwd
   both user and password parameters were ignored.
   Now user is only ignored if dsn contains
   uid, and password  is only ignored if
   dsn contains pwd.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-prepare.php'>odbc_prepare</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-prepare.php'>odbc_prepare</a></td><td>This function returns an Odbc\Result
  instance now; previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-primarykeys.php'>odbc_primarykeys</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-primarykeys.php'>odbc_primarykeys</a></td><td>This function returns an Odbc\Result
  instance now; previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-procedurecolumns.php'>odbc_procedurecolumns</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-procedurecolumns.php'>odbc_procedurecolumns</a></td><td>This function returns an Odbc\Result
  instance now; previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-procedures.php'>odbc_procedures</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-procedures.php'>odbc_procedures</a></td><td>This function returns an Odbc\Result
  instance now; previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-result.php'>odbc_result</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-result-all.php'>odbc_result_all</a></td><td>statement expects an Odbc\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-rollback.php'>odbc_rollback</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-setoption.php'>odbc_setoption</a></td><td>odbc expects an Odbc\Connection
       or an Odbc\Result instance now; previously, a
       resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-specialcolumns.php'>odbc_specialcolumns</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-specialcolumns.php'>odbc_specialcolumns</a></td><td>This function returns an Odbc\Result
  instance now; previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-statistics.php'>odbc_statistics</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-statistics.php'>odbc_statistics</a></td><td>This function returns an Odbc\Result
  instance now; previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-tableprivileges.php'>odbc_tableprivileges</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-tableprivileges.php'>odbc_tableprivileges</a></td><td>This function returns an Odbc\Result
  instance now; previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-tables.php'>odbc_tables</a></td><td>odbc expects an Odbc\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-tables.php'>odbc_tables</a></td><td>This function returns an Odbc\Result
  instance now; previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-csr-new.php'>openssl_csr_new</a></td><td>The distinguished_names associative array now supports arrays as values,
       allowing multiple values to be specified for a single attribute.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-csr-new.php'>openssl_csr_new</a></td><td>The extra_attributes parameter now correctly sets the CSR attributes,
       rather than modifying the subject's Distinguished Name as it previously did incorrectly.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-csr-sign.php'>openssl_csr_sign</a></td><td>The serial_hex parameter is added.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkey-get-details.php'>openssl_pkey_get_details</a></td><td>Added support for Curve25519 and Curve448 based keys.
       Specifically the x25519, ed25519,
       x448 and ed448 fields have been introduced.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkey-new.php'>openssl_pkey_new</a></td><td>Added support for Curve25519 and Curve448 based keys with the introduction of the
       x25519, ed25519, x448,
       and ed448 fields.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-x509-parse.php'>openssl_x509_parse</a></td><td>Parsing certificate with no seconds in UTCTime is no longer allowed for any OpenSSL version.
       It was already disallowed for OpenSSL version 3.3+.</td></tr><tr><td>&nbsp;</td><td><a href='function.password-hash.php'>password_hash</a></td><td>The default value of the cost option of the
        PASSWORD_BCRYPT algorithm was increased from
        10 to 12.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-sigprocmask.php'>pcntl_sigprocmask</a></td><td>A ValueError is thrown if signal
       is empty.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-sigprocmask.php'>pcntl_sigprocmask</a></td><td>A TypeError is thrown if signal
       value is not an int.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-sigprocmask.php'>pcntl_sigprocmask</a></td><td>A ValueError is thrown if signal
       value is invalid.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-sigprocmask.php'>pcntl_sigprocmask</a></td><td>A ValueError is thrown if mode
       value is not SIG_BLOCK, SIG_UNBLOCK or
       SIG_SETMASK.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-sigtimedwait.php'>pcntl_sigtimedwait</a></td><td>A ValueError is thrown if signal
       is empty.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-sigtimedwait.php'>pcntl_sigtimedwait</a></td><td>A TypeError is thrown if signal
       value is not an int.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-sigtimedwait.php'>pcntl_sigtimedwait</a></td><td>A ValueError is thrown if signal
       value is invalid.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-sigtimedwait.php'>pcntl_sigtimedwait</a></td><td>A ValueError is thrown if seconds
       value is less than 0.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-sigtimedwait.php'>pcntl_sigtimedwait</a></td><td>A ValueError is thrown if nanoseconds
       value is less than 0.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-sigtimedwait.php'>pcntl_sigtimedwait</a></td><td>A ValueError is thrown if both seconds and
       nanoseconds values are 0.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-sigwaitinfo.php'>pcntl_sigwaitinfo</a></td><td>A ValueError is thrown if signal
       is empty.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-sigwaitinfo.php'>pcntl_sigwaitinfo</a></td><td>A TypeError is thrown if signal
       value is not an int.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-sigwaitinfo.php'>pcntl_sigwaitinfo</a></td><td>A ValueError is thrown if signal
       value is invalid.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-select.php'>pg_select</a></td><td>conditions is now optional.</td></tr><tr><td>&nbsp;</td><td><a href='function.php-uname.php'>php_uname</a></td><td>Throws a ValueError when an invalid
       mode is specified.</td></tr><tr><td>&nbsp;</td><td><a href='function.posix-isatty.php'>posix_isatty</a></td><td>Set errno (error number) to EBADF when the
       file descriptor/stream passed is invalid.</td></tr><tr><td>&nbsp;</td><td><a href='function.pow.php'>pow</a></td><td>Raising 0 to a negative
       exponent is now deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.print-r.php'>print_r</a></td><td>Return type changed from stringbool to stringtrue.</td></tr><tr><td>&nbsp;</td><td><a href='function.round.php'>round</a></td><td>Four new rounding modes have been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.round.php'>round</a></td><td>Now throws a ValueError if
       mode is invalid.</td></tr><tr><td>&nbsp;</td><td><a href='function.simplexml-import-dom.php'>simplexml_import_dom</a></td><td>Added support for Dom\Document.</td></tr><tr><td>&nbsp;</td><td><a href='function.simplexml-import-dom.php'>simplexml_import_dom</a></td><td>This function now throws a TypeError instead of
       a ValueError when passed a
       non-XML or non-HTML node.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-create-listen.php'>socket_create_listen</a></td><td>The default value of is now SOMAXCONN.
       Previously it was 128.</td></tr><tr><td>&nbsp;</td><td><a href='function.str-getcsv.php'>str_getcsv</a></td><td>Relying on the default value of escape is now
        deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.str-getcsv.php'>str_getcsv</a></td><td>Now throws a ValueError if
        separator, enclosure,
        or escape is invalid.
        This mimics the behavior of fgetcsv and
        fputcsv.</td></tr><tr><td>&nbsp;</td><td><a href='function.strcspn.php'>strcspn</a></td><td>Prior to PHP 8.4.0, when characters was the empty string,
        the search would incorrectly stop at the first null byte in string.</td></tr><tr><td>&nbsp;</td><td><a href='function.stream-bucket-append.php'>stream_bucket_append</a></td><td>bucket expects a StreamBucket instance now; previously, an stdClass was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.stream-bucket-make-writeable.php'>stream_bucket_make_writeable</a></td><td>This function returns a StreamBucket instance now; previously, an stdClass was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.stream-bucket-new.php'>stream_bucket_new</a></td><td>This function returns a StreamBucket instance now; previously, an stdClass was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.stream-bucket-prepend.php'>stream_bucket_prepend</a></td><td>bucket expects a StreamBucket instance now; previously, an stdClass was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.stream-context-set-option.php'>stream_context_set_option</a></td><td>The alternative 2-parameter signature is now deprecated.
       Use stream_context_set_options instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.textdomain.php'>textdomain</a></td><td>Now throws a ValueError if domain
       is the empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.textdomain.php'>textdomain</a></td><td>domain is optional now.
       Previously, the parameter always had to be specified.</td></tr><tr><td>&nbsp;</td><td><a href='function.trigger-error.php'>trigger_error</a></td><td>Passing E_USER_ERROR as the
       error_level is now deprecated.
       Throw an Exception or
       call exit instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.trigger-error.php'>trigger_error</a></td><td>The function now has a return type of true
       instead of bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.unserialize.php'>unserialize</a></td><td>Now throws TypeErrors and
        ValueErrors if the allowed_classes
        element of options is not an array of class names.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-parser-set-option.php'>xml_parser_set_option</a></td><td>Added the option XML_OPTION_PARSE_HUGE.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-character-data-handler.php'>xml_set_character_data_handler</a></td><td>Passing a non-callable string to
  handler is now deprecated,
  use a proper callable for methods, or null to reset the handler.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-character-data-handler.php'>xml_set_character_data_handler</a></td><td>The validity of handler as a callable
  is now checked when setting the handler instead of checking when calling it.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-default-handler.php'>xml_set_default_handler</a></td><td>Passing a non-callable string to
  handler is now deprecated,
  use a proper callable for methods, or null to reset the handler.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-default-handler.php'>xml_set_default_handler</a></td><td>The validity of handler as a callable
  is now checked when setting the handler instead of checking when calling it.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-element-handler.php'>xml_set_element_handler</a></td><td>Passing a non-callable string to
  handler is now deprecated,
  use a proper callable for methods, or null to reset the handler.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-element-handler.php'>xml_set_element_handler</a></td><td>The validity of handler as a callable
  is now checked when setting the handler instead of checking when calling it.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-end-namespace-decl-handler.php'>xml_set_end_namespace_decl_handler</a></td><td>Passing a non-callable string to
  handler is now deprecated,
  use a proper callable for methods, or null to reset the handler.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-end-namespace-decl-handler.php'>xml_set_end_namespace_decl_handler</a></td><td>The validity of handler as a callable
  is now checked when setting the handler instead of checking when calling it.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-external-entity-ref-handler.php'>xml_set_external_entity_ref_handler</a></td><td>Passing a non-callable string to
  handler is now deprecated,
  use a proper callable for methods, or null to reset the handler.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-external-entity-ref-handler.php'>xml_set_external_entity_ref_handler</a></td><td>The validity of handler as a callable
  is now checked when setting the handler instead of checking when calling it.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-notation-decl-handler.php'>xml_set_notation_decl_handler</a></td><td>Passing a non-callable string to
  handler is now deprecated,
  use a proper callable for methods, or null to reset the handler.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-notation-decl-handler.php'>xml_set_notation_decl_handler</a></td><td>The validity of handler as a callable
  is now checked when setting the handler instead of checking when calling it.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-object.php'>xml_set_object</a></td><td>This function is now deprecated,
       instead pass proper callable values to
       xml_set_</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-processing-instruction-handler.php'>xml_set_processing_instruction_handler</a></td><td>Passing a non-callable string to
  handler is now deprecated,
  use a proper callable for methods, or null to reset the handler.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-processing-instruction-handler.php'>xml_set_processing_instruction_handler</a></td><td>The validity of handler as a callable
  is now checked when setting the handler instead of checking when calling it.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-start-namespace-decl-handler.php'>xml_set_start_namespace_decl_handler</a></td><td>Passing a non-callable string to
  handler is now deprecated,
  use a proper callable for methods, or null to reset the handler.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-start-namespace-decl-handler.php'>xml_set_start_namespace_decl_handler</a></td><td>The validity of handler as a callable
  is now checked when setting the handler instead of checking when calling it.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-unparsed-entity-decl-handler.php'>xml_set_unparsed_entity_decl_handler</a></td><td>Passing a non-callable string to
  handler is now deprecated,
  use a proper callable for methods, or null to reset the handler.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-unparsed-entity-decl-handler.php'>xml_set_unparsed_entity_decl_handler</a></td><td>The validity of handler as a callable
  is now checked when setting the handler instead of checking when calling it.</td></tr><tr><td>&nbsp;</td><td><a href='intlcalendar.set.php'>IntlCalendar::set</a></td><td>This had been deprecated in favor of the methods
       IntlCalendar::setDate and
       IntlCalendar::setDateTime.</td></tr><tr><td>&nbsp;</td><td><a href='intldateformatter.create.php'>IntlDateFormatter::create</a></td><td>A ValueError is thrown if
         locale is invalid.</td></tr><tr><td>&nbsp;</td><td><a href='intlgregoriancalendar.construct.php'>IntlGregorianCalendar::__construct</a></td><td>This had been deprecated in favor of the methods
       IntlGregorianCalendar::createFromDate and
       IntlGregorianCalendar::createFromDateTime.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli.kill.php'>mysqli::kill</a></td><td>Both mysqli::kill and
       mysqli_kill are now deprecated. Use the
       KILL SQL command instead.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli.ping.php'>mysqli::ping</a></td><td>Both mysqli::ping and
       mysqli_ping are now deprecated.
       The reconnect feature has not been available
       as of PHP 8.2.0, making this function obsolete.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli.refresh.php'>mysqli::refresh</a></td><td>Both mysqli::refresh and
       mysqli_refresh are now deprecated.
       Use FLUSH SQL commands instead.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli.store-result.php'>mysqli::store_result</a></td><td>Passing the mode parameter is now deprecated.
       The parameter has had no effect as of PHP 8.1.0.</td></tr><tr><td>&nbsp;</td><td><a href='numberformatter.create.php'>NumberFormatter::create</a></td><td>A ValueError is thrown if
        locale is invalid.</td></tr><tr><td>&nbsp;</td><td><a href='phar.setalias.php'>Phar::setAlias</a></td><td>Phar::setAlias
       now has a tentative return of true.</td></tr><tr><td>&nbsp;</td><td><a href='phar.setdefaultstub.php'>Phar::setDefaultStub</a></td><td>Phar::setDefaultStub
       now has a tentative return of true.</td></tr><tr><td>&nbsp;</td><td><a href='ref.pdo-odbc.connection.php'>PDO_ODBC DSN</a></td><td>When passing an empty string to the password argument in the PDO constructor, pwd
         was not included in the connection string created until now, but the behavior has been changed to include
         it as an empty string. Passing null for the password argument in the PDO constructor results in the same
         behavior as before.</td></tr><tr><td>&nbsp;</td><td><a href='ref.pdo-odbc.connection.php'>PDO_ODBC DSN</a></td><td>Changed the behavior to ignore the user name argument and the password argument in the PDO constructor
         separately when the DSN contains uid or pwd.
         Previously, if included only either uid or pwd in the DSN,
         both the user name argument and the password argument in the PDO constructor were ignored.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionclassconstant.tostring.php'>ReflectionClassConstant::__toString</a></td><td>The attached doc comment is now included.</td></tr><tr><td>&nbsp;</td><td><a href='reflectiongenerator.getfunction.php'>ReflectionGenerator::getFunction</a></td><td>ReflectionGenerator::getFunction
       may now be called after the generator finished executing.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionproperty.tostring.php'>ReflectionProperty::__toString</a></td><td>The attached doc comment is now included.</td></tr><tr><td>&nbsp;</td><td><a href='resourcebundle.get.php'>ResourceBundle::get</a></td><td>A TypeError is thrown if
        the offset type is invalid.
        A ValueError is thrown if
        if index is a string
        and is empty or is a int and does not
        fit into a 32 bit integer type.</td></tr><tr><td>&nbsp;</td><td><a href='splfileobject.fgetcsv.php'>SplFileObject::fgetcsv</a></td><td>Relying on the default value of escape is now
        deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='splfileobject.fputcsv.php'>SplFileObject::fputcsv</a></td><td>Relying on the default value of escape is now
        deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='splfileobject.setcsvcontrol.php'>SplFileObject::setCsvControl</a></td><td>Relying on the default value of escape is now
        deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='splfixedarray.setsize.php'>SplFixedArray::setSize</a></td><td>SplFixedArray::setSize
       now has a tentative return of true.</td></tr><tr><td>&nbsp;</td><td><a href='splfixedarray.wakeup.php'>SplFixedArray::__wakeup</a></td><td>This method is now deprecated, use
       SplFixedArray::__unserialize
       instead.</td></tr><tr><td>&nbsp;</td><td><a href='splheap.insert.php'>SplHeap::insert</a></td><td>SplHeap::insert
       now has a tentative return of true.</td></tr><tr><td>&nbsp;</td><td><a href='splheap.recoverfromcorruption.php'>SplHeap::recoverFromCorruption</a></td><td>SplHeap::recoverFromCorruption
       now has a tentative return of true.</td></tr><tr><td>&nbsp;</td><td><a href='splpriorityqueue.insert.php'>SplPriorityQueue::insert</a></td><td>SplPriorityQueue::insert
       now has a tentative return of true.</td></tr><tr><td>&nbsp;</td><td><a href='splpriorityqueue.recoverfromcorruption.php'>SplPriorityQueue::recoverFromCorruption</a></td><td>SplPriorityQueue::recoverFromCorruption
       now has a tentative return of true.</td></tr><tr><td>&nbsp;</td><td><a href='tidy.construct.php'>tidy::__construct</a></td><td>Failures when executing the constructor now throw instead of silently
       creating an unusable object.</td></tr><tr><td>&nbsp;</td><td><a href='xmlreader.open.php'>XMLReader::open</a></td><td>Passing an invalid encoding will now throw a
       ValueError.</td></tr><tr><td>&nbsp;</td><td><a href='xmlreader.xml.php'>XMLReader::XML</a></td><td>Passing an invalid encoding will now throw a
       ValueError.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.startdocument.php'>XMLWriter::startDocument</a></td><td>Passing an encoding containing null bytes will
       now throw a ValueError.</td></tr><tr><td>&nbsp;</td><td><a href='xsltprocessor.importstylesheet.php'>XSLTProcessor::importStylesheet</a></td><td>Added support for Dom\Document.</td></tr><tr><td>&nbsp;</td><td><a href='xsltprocessor.importstylesheet.php'>XSLTProcessor::importStylesheet</a></td><td>Now throws a TypeError instead of a
       ValueError if
       stylesheet is not an XML object.</td></tr><tr><td>&nbsp;</td><td><a href='xsltprocessor.registerphpfunctions.php'>XSLTProcessor::registerPHPFunctions</a></td><td>Invalid callback names now throws a
       ValueError.
       Passing a non-callable entry now throws a
       TypeError.</td></tr><tr><td>&nbsp;</td><td><a href='xsltprocessor.registerphpfunctions.php'>XSLTProcessor::registerPHPFunctions</a></td><td>It is now possible to use callables for callbacks
       when using functions with array
       entries.</td></tr><tr><td>&nbsp;</td><td><a href='xsltprocessor.setparameter.php'>XSLTProcessor::setParameter</a></td><td>Now throws a ValueError if any of the
       arguments contain null bytes instead of silently truncating.</td></tr><tr><td>&nbsp;</td><td><a href='xsltprocessor.setparameter.php'>XSLTProcessor::setParameter</a></td><td>It is now possible to set a parameter value containing both single and
       double quotes. Prior to PHP 8.4.0, this resulted in a warning.</td></tr><tr><td>&nbsp;</td><td><a href='xsltprocessor.transformtodoc.php'>XSLTProcessor::transformToDoc</a></td><td>Now throws an Error if the callback
       cannot be invoked, instead of emitting a warning.</td></tr><tr><td>&nbsp;</td><td><a href='xsltprocessor.transformtodoc.php'>XSLTProcessor::transformToDoc</a></td><td>Added support for Dom\Document.</td></tr><tr><td>&nbsp;</td><td><a href='xsltprocessor.transformtouri.php'>XSLTProcessor::transformToUri</a></td><td>Now throws an Error if the callback
       cannot be invoked, instead of emitting a warning.</td></tr><tr><td>&nbsp;</td><td><a href='xsltprocessor.transformtouri.php'>XSLTProcessor::transformToUri</a></td><td>Added support for Dom\Document.</td></tr><tr><td>&nbsp;</td><td><a href='xsltprocessor.transformtoxml.php'>XSLTProcessor::transformToXml</a></td><td>Now throws an Error if the callback
       cannot be invoked, instead of emitting a warning.</td></tr><tr><td>&nbsp;</td><td><a href='xsltprocessor.transformtoxml.php'>XSLTProcessor::transformToXml</a></td><td>Added support for Dom\Document.</td></tr></tbody><tbody class="gen-changelog v8-4-0"><tr><td>8.3.0</td><td><a href='dateinterval.construct.php'>DateInterval::__construct</a></td><td>Now throws
       DateMalformedIntervalStringException
       instead of Exception.</td></tr><tr><td>&nbsp;</td><td><a href='dateinterval.createfromdatestring.php'>DateInterval::createFromDateString</a></td><td>DateInterval::createFromDateString now throws
       DateMalformedStringException if an
       invalid string is passed.  Previously, it returned false,
       and a warning was emitted.
       date_interval_create_from_date_string has not been
       changed.</td></tr><tr><td>&nbsp;</td><td><a href='dateperiod.construct.php'>DatePeriod::__construct</a></td><td>Now throws
        DateMalformedPeriodStringException
        instead of Exception.</td></tr><tr><td>&nbsp;</td><td><a href='datetime.construct.php'>DateTime::__construct</a></td><td>Now throws
        DateMalformedStringException if an
        invalid string is passed, instead of
        Exception.</td></tr><tr><td>&nbsp;</td><td><a href='datetime.gettimestamp.php'>DateTimeInterface::getTimestamp</a></td><td>The out-of-range exception is now
       DateRangeError.</td></tr><tr><td>&nbsp;</td><td><a href='datetime.modify.php'>DateTime::modify</a></td><td>DateTime::modify now throws
       DateMalformedStringException if an
       invalid string is passed.  Previously, it returned false,
       and a warning was emitted.
       date_modify has not been changed.</td></tr><tr><td>&nbsp;</td><td><a href='datetime.sub.php'>DateTime::sub</a></td><td>Now throws a
       DateInvalidOperationException with
       DateTime::sub, instead of
       a warning when an unsupported operation is attempted.
       date_sub has not been changed.</td></tr><tr><td>&nbsp;</td><td><a href='datetimeimmutable.construct.php'>DateTimeImmutable::__construct</a></td><td>Now throws
        DateMalformedStringException if an
        invalid string is passed, instead of
        Exception.</td></tr><tr><td>&nbsp;</td><td><a href='datetimeimmutable.modify.php'>DateTimeImmutable::modify</a></td><td>DateTimeImmutable::modify now throws
       DateMalformedStringException if an
       invalid string is passed.  Previously, it returned false,
       and a warning was emitted.</td></tr><tr><td>&nbsp;</td><td><a href='datetimeimmutable.sub.php'>DateTimeImmutable::sub</a></td><td>Now throws a
       DateInvalidOperationException instead of
       a warning when an unsupported operation is attempted.</td></tr><tr><td>&nbsp;</td><td><a href='datetimezone.construct.php'>DateTimeZone::__construct</a></td><td>Invalid values now return a
        DateInvalidTimeZoneException instead of
        a generic Exception.</td></tr><tr><td>&nbsp;</td><td><a href='domcharacterdata.after.php'>DOMCharacterData::after</a></td><td>Calling this method on a node without a parent is now a no-op to align the behaviour with the DOM specification.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domcharacterdata.after.php'>DOMCharacterData::after</a></td><td>Calling this method on a node without an owner document now works.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domcharacterdata.appenddata.php'>DOMCharacterData::appendData</a></td><td>This function now has a tentative true return type.</td></tr><tr><td>&nbsp;</td><td><a href='domcharacterdata.before.php'>DOMCharacterData::before</a></td><td>Calling this method on a node without a parent is now a no-op to align the behaviour with the DOM specification.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domcharacterdata.replacewith.php'>DOMCharacterData::replaceWith</a></td><td>Calling this method on a node without a parent is now a no-op to align the behaviour with the DOM specification.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domchildnode.after.php'>DOMChildNode::after</a></td><td>Calling this method on a node without a parent is now a no-op to align the behaviour with the DOM specification.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domchildnode.after.php'>DOMChildNode::after</a></td><td>Calling this method on a node without an owner document now works.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domchildnode.before.php'>DOMChildNode::before</a></td><td>Calling this method on a node without a parent is now a no-op to align the behaviour with the DOM specification.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domchildnode.replacewith.php'>DOMChildNode::replaceWith</a></td><td>Calling this method on a node without a parent is now a no-op to align the behaviour with the DOM specification.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domdocument.append.php'>DOMDocument::append</a></td><td>Calling this method on a node without an owner document now works.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domdocument.createattributens.php'>DOMDocument::createAttributeNS</a></td><td>Calling this method without specifying a prefix will now choose a prefix instead of assuming the default namespace.
       Previously this would create an attribute without a prefix and incorrectly apply the namespace
       to the owner element because default namespaces don't apply on attributes.</td></tr><tr><td>&nbsp;</td><td><a href='domdocument.createattributens.php'>DOMDocument::createAttributeNS</a></td><td>Calling this method using a prefix that was already declared on the owner element with a different namespace URI
       will now change the new prefix to avoid creating namespace conflicts. This aligns the behaviour with the DOM specification.
       Previously this threw a DOMException with code DOM_NAMESPACE_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domdocument.load.php'>DOMDocument::load</a></td><td>This function now has a tentative bool return type.</td></tr><tr><td>&nbsp;</td><td><a href='domdocument.loadhtml.php'>DOMDocument::loadHTML</a></td><td>This function now has a tentative bool return type.</td></tr><tr><td>&nbsp;</td><td><a href='domdocument.loadhtmlfile.php'>DOMDocument::loadHTMLFile</a></td><td>This function now has a tentative bool return type.</td></tr><tr><td>&nbsp;</td><td><a href='domdocument.loadxml.php'>DOMDocument::loadXML</a></td><td>This function now has a tentative bool return type.</td></tr><tr><td>&nbsp;</td><td><a href='domdocument.prepend.php'>DOMDocument::prepend</a></td><td>Calling this method on a node without an owner document now works.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domdocument.replacechildren.php'>DOMDocument::replaceChildren</a></td><td>Calling this method on a node without an owner document now works.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domdocument.savexml.php'>DOMDocument::saveXML</a></td><td>LIBXML_NOXMLDECL is now supported.</td></tr><tr><td>&nbsp;</td><td><a href='domdocumentfragment.append.php'>DOMDocumentFragment::append</a></td><td>Calling this method on a node without an owner document now works.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domdocumentfragment.prepend.php'>DOMDocumentFragment::prepend</a></td><td>Calling this method on a node without an owner document now works.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domdocumentfragment.replacechildren.php'>DOMDocumentFragment::replaceChildren</a></td><td>Calling this method on a node without an owner document now works.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domelement.after.php'>DOMElement::after</a></td><td>Calling this method on a node without a parent is now a no-op to align the behaviour with the DOM specification.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domelement.after.php'>DOMElement::after</a></td><td>Calling this method on a node without an owner document now works.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domelement.append.php'>DOMElement::append</a></td><td>Calling this method on a node without an owner document now works.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domelement.before.php'>DOMElement::before</a></td><td>Calling this method on a node without a parent is now a no-op to align the behaviour with the DOM specification.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domelement.prepend.php'>DOMElement::prepend</a></td><td>Calling this method on a node without an owner document now works.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domelement.replacechildren.php'>DOMElement::replaceChildren</a></td><td>Calling this method on a node without an owner document now works.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domelement.replacewith.php'>DOMElement::replaceWith</a></td><td>Calling this method on a node without a parent is now a no-op to align the behaviour with the DOM specification.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domparentnode.append.php'>DOMParentNode::append</a></td><td>Calling this method on a node without an owner document now works.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domparentnode.prepend.php'>DOMParentNode::prepend</a></td><td>Calling this method on a node without an owner document now works.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='domparentnode.replacechildren.php'>DOMParentNode::replaceChildren</a></td><td>Calling this method on a node without an owner document now works.
       Previously this threw a
 DOMException with code
 DOM_HIERARCHY_REQUEST_ERR.</td></tr><tr><td>&nbsp;</td><td><a href='ffi.cast.php'>FFI::cast</a></td><td>Calling FFI::cast statically is now deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='ffi.cdef.php'>FFI::cdef</a></td><td>C functions returning void return a PHP null
       instead of FFI\CType::TYPE_VOID.</td></tr><tr><td>&nbsp;</td><td><a href='ffi.load.php'>FFI::load</a></td><td>FFI::load is now allowed in
       preload scripts when the
       current system user is the same as the one defined in the
       opcache.preload_user configuration directive.</td></tr><tr><td>&nbsp;</td><td><a href='ffi.new.php'>FFI::new</a></td><td>Calling FFI::new statically is now deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='ffi.type.php'>FFI::type</a></td><td>Calling FFI::type statically is now deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-pad.php'>array_pad</a></td><td>Prior to 8.3, only 1048576 elements could be added at once.
        Now it is limited only by the maximum size of an array instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-product.php'>array_product</a></td><td>Now emits E_WARNING when array values
        cannot be converted to int or float.
        Previously arrays and objects where ignored whilst every other value was cast to int.
        Moreover, objects that define a numeric cast (e.g. GMP) are now cast instead of ignored.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-sum.php'>array_sum</a></td><td>Now emits E_WARNING when array values
        cannot be converted to int or float.
        Previously arrays and objects where ignored whilst every other value was cast to int.
        Moreover, objects that define a numeric cast (e.g. GMP) are now cast instead of ignored.</td></tr><tr><td>&nbsp;</td><td><a href='function.assert.php'>assert</a></td><td>All assert. INI settings have been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.assert-options.php'>assert_options</a></td><td>assert_option is now deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.class-alias.php'>class_alias</a></td><td>class_alias now supports creating an alias of an internal class.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-getinfo.php'>curl_getinfo</a></td><td>Introduced CURLINFO_CAINFO
        and CURLINFO_CAPATH.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-fetch.php'>dba_fetch</a></td><td>Calling dba_fetch with dba as
       the 3rd argument is now deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.easter-date.php'>easter_date</a></td><td>On 64-bit systems, the year parameter now accepts values within the range of 1970 to 2,000,000,000.</td></tr><tr><td>&nbsp;</td><td><a href='function.fgetcsv.php'>fgetcsv</a></td><td>An empty string is returned instead of a string with a single
        null byte for the last field if it contains only an unterminated
        enclosure.</td></tr><tr><td>&nbsp;</td><td><a href='function.file.php'>file</a></td><td>ValueError is thrown for any
       invalid values of flags.</td></tr><tr><td>&nbsp;</td><td><a href='function.gc-status.php'>gc_status</a></td><td>gc_status now returns the following additional fields:
        &quot;running&quot;, &quot;protected&quot;,
        &quot;full&quot;, &quot;buffer_size&quot;,
        &quot;application_time&quot;, &quot;collector_time&quot;,
        &quot;destructor_time&quot;, and &quot;free_time&quot;.</td></tr><tr><td>&nbsp;</td><td><a href='function.get-class.php'>get_class</a></td><td>Calling get_class without an argument now emits an
        E_DEPRECATED warning;
        previously, calling this function inside a class returned the name of that class.</td></tr><tr><td>&nbsp;</td><td><a href='function.get-parent-class.php'>get_parent_class</a></td><td>Calling get_parent_class without an argument now emits an
       E_DEPRECATED warning;
       previously, calling this function inside a class returned the name of that class.</td></tr><tr><td>&nbsp;</td><td><a href='function.highlight-file.php'>highlight_file</a></td><td>The resulting HTML has changed.</td></tr><tr><td>&nbsp;</td><td><a href='function.highlight-string.php'>highlight_string</a></td><td>The resulting HTML has changed.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagerotate.php'>imagerotate</a></td><td>The unused ignore_transparent has been completely removed.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-connect.php'>ldap_connect</a></td><td>Calling ldap_connect with separate
       hostname and port
       is now deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-convert-case.php'>mb_convert_case</a></td><td>Implemented conditional casing rules for the Greek letter sigma
        which only apply to MB_CASE_LOWER
        and MB_CASE_TITLE modes, not
        to MB_CASE_LOWER_SIMPLE and
        MB_CASE_TITLE_SIMPLE.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-decode-mimeheader.php'>mb_decode_mimeheader</a></td><td>Underscores are converted to spaces as specified by
        RFC 2047.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-encode-mimeheader.php'>mb_encode_mimeheader</a></td><td>NUL (0) bytes are no longer dropped when encoded
       using Quoted-Printable encoding, but encoded as =00.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strimwidth.php'>mb_strimwidth</a></td><td>Passing a negative width to
       mb_strimwidth is now deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strtolower.php'>mb_strtolower</a></td><td>Implemented conditional casing rules for the Greek letter sigma.</td></tr><tr><td>&nbsp;</td><td><a href='function.mt-srand.php'>mt_srand</a></td><td>seed is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.number-format.php'>number_format</a></td><td>Added handling of negative values for decimals.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-autocommit.php'>odbc_autocommit</a></td><td>enable is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkey-new.php'>openssl_pkey_new</a></td><td>Added support for generation EC keys with custom EC parameters.
       Specifically with the introduction of the EC options:
       p, a, b, seed,
       generator, g_x, g_y,
       cofactor, and order.</td></tr><tr><td>&nbsp;</td><td><a href='function.password-hash.php'>password_hash</a></td><td>password_hash now sets the underlying
        Random\RandomException as the
        Exception::$previous exception when a
        ValueError is thrown due to a failure
        in the salt generation.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-convert.php'>pg_convert</a></td><td>Now throws a ValueError or TypeError error
       when the value or type of field does not match properly with a PostgreSQL's type;
       previously an E_WARNING was emitted.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-fetch-object.php'>pg_fetch_object</a></td><td>Now throws a ValueError exception when
       the constructor_args is non-empty with the class not having constructor;
       previously an Exception was thrown.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-fetch-result.php'>pg_fetch_result</a></td><td>row is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-field-is-null.php'>pg_field_is_null</a></td><td>row is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-field-prtlen.php'>pg_field_prtlen</a></td><td>row is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-insert.php'>pg_insert</a></td><td>Now throws a ValueError error when the specified table is invalid;
       previously an E_WARNING was emitted.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-insert.php'>pg_insert</a></td><td>Now throws a ValueError or TypeError error
       when the value or type of field does not match properly with a PostgreSQL's type;
       previously an E_WARNING was emitted.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-trace.php'>pg_trace</a></td><td>trace_mode has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.posix-eaccess.php'>posix_eaccess</a></td><td>Checks the effective user/group for a file, differing
       from posix_access which checks
       from the real user/group.</td></tr><tr><td>&nbsp;</td><td><a href='function.posix-getrlimit.php'>posix_getrlimit</a></td><td>The optional resource parameter has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.posix-isatty.php'>posix_isatty</a></td><td>Type error E_WARNINGs are now raised for integer
       coercions following the usual PHP type coercion semantics.</td></tr><tr><td>&nbsp;</td><td><a href='function.posix-ttyname.php'>posix_ttyname</a></td><td>Type error E_WARNINGs are now raised for integer
       coercions following the usual PHP type coercion semantics.</td></tr><tr><td>&nbsp;</td><td><a href='function.posix-ttyname.php'>posix_ttyname</a></td><td>On invalid file_descriptor integer values
       an E_WARNING is now raised.</td></tr><tr><td>&nbsp;</td><td><a href='function.proc-get-status.php'>proc_get_status</a></td><td>The &quot;cached&quot; entry has been added to the returned
       array. Prior to PHP 8.3.0, only the first call returned the real exit
       code. The &quot;cached&quot; entry indicates that the exit code
       was cached.</td></tr><tr><td>&nbsp;</td><td><a href='function.proc-open.php'>proc_open</a></td><td>A ValueError will be thrown if
        command is an array without at least one
        non-empty element.</td></tr><tr><td>&nbsp;</td><td><a href='function.range.php'>range</a></td><td>If both start and end
       are strings then range will now always produce
       an array of bytes.
       Previously if one of the boundary values was a numeric string,
       then the other boundary value was implicitly cast to int.</td></tr><tr><td>&nbsp;</td><td><a href='function.range.php'>range</a></td><td>An E_WARNING is now emitted if
       start or end
       is a string that is implicitly cast to int
       because the other boundary value is a number.</td></tr><tr><td>&nbsp;</td><td><a href='function.range.php'>range</a></td><td>An E_WARNING is now emitted if
       start or end
       is a non-numeric string with more than one byte.</td></tr><tr><td>&nbsp;</td><td><a href='function.range.php'>range</a></td><td>An E_WARNING is now emitted if
       start or end
       is the empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.range.php'>range</a></td><td>If step is a float with no
       fractional part, it will be interpreted as an int.</td></tr><tr><td>&nbsp;</td><td><a href='function.range.php'>range</a></td><td>A ValueError is now thrown if
       step is negative when producing an increasing
       range.</td></tr><tr><td>&nbsp;</td><td><a href='function.range.php'>range</a></td><td>A ValueError is now thrown if
       step is not finite.</td></tr><tr><td>&nbsp;</td><td><a href='function.range.php'>range</a></td><td>A TypeError is now thrown if
       start or end
       is an array, object, or resource.
       Previously they were implicitly cast to int.</td></tr><tr><td>&nbsp;</td><td><a href='function.srand.php'>srand</a></td><td>seed is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.str-getcsv.php'>str_getcsv</a></td><td>An empty string is returned instead of a string with a single
        null byte for the last field if it contains only an unterminated
        enclosure.</td></tr><tr><td>&nbsp;</td><td><a href='function.stream-notification-callback.php'>stream_notification_callback</a></td><td>Support for STREAM_NOTIFY_COMPLETED implemented,
       earlier PHP versions would never trigger this notification.</td></tr><tr><td>&nbsp;</td><td><a href='function.strrchr.php'>strrchr</a></td><td>The before_needle parameter was added.</td></tr><tr><td>&nbsp;</td><td><a href='function.strtok.php'>strtok</a></td><td>Now emits E_WARNING when token is not provided.</td></tr><tr><td>&nbsp;</td><td><a href='function.unserialize.php'>unserialize</a></td><td>Now emits E_WARNING when the input string has unconsumed data.</td></tr><tr><td>&nbsp;</td><td><a href='function.unserialize.php'>unserialize</a></td><td>Now emits E_WARNING when the passed string is not unserializeable;
        previously E_NOTICE was emitted.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-parser-get-option.php'>xml_parser_get_option</a></td><td>The function now returns a boolean for boolean options.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-parser-set-option.php'>xml_parser_set_option</a></td><td>The value parameter now also accepts booleans.
       The options XML_OPTION_CASE_FOLDING and XML_OPTION_SKIP_WHITE
       are now boolean options.</td></tr><tr><td>&nbsp;</td><td><a href='intlbreakiterator.settext.php'>IntlBreakIterator::setText</a></td><td>This method now returns false on failure; previously it returns null.</td></tr><tr><td>&nbsp;</td><td><a href='intlchar.enumcharnames.php'>IntlChar::enumCharNames</a></td><td>This method now returns false on failure; previously it returns null.</td></tr><tr><td>&nbsp;</td><td><a href='intldateformatter.settimezone.php'>IntlDateFormatter::setTimeZone</a></td><td>This function now returns true on success; previously it returns null.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli-result.fetch-object.php'>mysqli_result::fetch_object</a></td><td>Now throws a ValueError exception when
       the constructor_args is non-empty with the class not having constructor;
       previously an Exception was thrown.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli.poll.php'>mysqli::poll</a></td><td>Now throws a ValueError exception when neither
        the read nor error arguments are passed.</td></tr><tr><td>&nbsp;</td><td><a href='phar.setstub.php'>Phar::setStub</a></td><td>Calling Phar::setStub with a
       resource and a length
       is now deprecated. Such calls should be replaced by:
       $phar-&gt;setStub(stream_get_contents($resource));</td></tr><tr><td>&nbsp;</td><td><a href='reflectionclass.getstaticproperties.php'>ReflectionClass::getStaticProperties</a></td><td>The return type of ReflectionClass::getStaticProperties
       has been changed to array from ?array.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionproperty.setvalue.php'>ReflectionProperty::setValue</a></td><td>Calling this method with a single argument is deprecated,
       instead use ReflectionProperty::setValue(null, $value)
       for static properties.</td></tr><tr><td>&nbsp;</td><td><a href='sqlite3.enableexceptions.php'>SQLite3::enableExceptions</a></td><td>Calling SQLite3::enableExceptions with enable
       as false will trigger a E_DEPRECATED warning.</td></tr><tr><td>&nbsp;</td><td><a href='ziparchive.addfile.php'>ZipArchive::addFile</a></td><td>ZipArchive::FL_OPEN_FILE_NOW was added.</td></tr><tr><td>&nbsp;</td><td><a href='ziparchive.addfile.php'>ZipArchive::addFile</a></td><td>ZipArchive::LENGTH_TO_END and ZipArchive::LENGTH_UNCHECKED were added.</td></tr><tr><td>&nbsp;</td><td><a href='ziparchive.addglob.php'>ZipArchive::addGlob</a></td><td>ZipArchive::FL_OPEN_FILE_NOW was added.</td></tr><tr><td>&nbsp;</td><td><a href='ziparchive.replacefile.php'>ZipArchive::replaceFile</a></td><td>ZipArchive::FL_OPEN_FILE_NOW was added.</td></tr><tr><td>&nbsp;</td><td><a href='ziparchive.replacefile.php'>ZipArchive::replaceFile</a></td><td>ZipArchive::LENGTH_TO_END and ZipArchive::LENGTH_UNCHECKED were added.</td></tr></tbody><tbody class="gen-changelog v8-3-0"><tr><td>8.2.9</td><td><a href='datetimeimmutable.createfromformat.php'>DateTimeImmutable::createFromFormat</a></td><td>The   (space) specifier now also supports NBSP
        (U+A0) and NNBSP (U+202F) characters.</td></tr></tbody><tbody class="gen-changelog v8-2-9"><tr><td>8.2.1</td><td><a href='splfileobject.tostring.php'>SplFileObject::__toString</a></td><td>Changed from an alias of SplFileObject::fgets
        to an implementation of SplFileObject::current
        which returns a CSV string when the
        SplFileObject::READ_CSV flag is set.</td></tr></tbody><tbody class="gen-changelog v8-2-1"><tr><td>8.2.0</td><td><a href='arrayiterator.asort.php'>ArrayIterator::asort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='arrayiterator.ksort.php'>ArrayIterator::ksort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='arrayiterator.natcasesort.php'>ArrayIterator::natcasesort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='arrayiterator.natsort.php'>ArrayIterator::natsort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='arrayiterator.uasort.php'>ArrayIterator::uasort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='arrayiterator.uksort.php'>ArrayIterator::uksort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='arrayobject.asort.php'>ArrayObject::asort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='arrayobject.ksort.php'>ArrayObject::ksort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='arrayobject.natcasesort.php'>ArrayObject::natcasesort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='arrayobject.natsort.php'>ArrayObject::natsort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='arrayobject.uasort.php'>ArrayObject::uasort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='arrayobject.uksort.php'>ArrayObject::uksort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='dateinterval.construct.php'>DateInterval::__construct</a></td><td>Only the y to f,
       invert, and days will be visible,
       including a new from_string boolean property.</td></tr><tr><td>&nbsp;</td><td><a href='dateinterval.createfromdatestring.php'>DateInterval::createFromDateString</a></td><td>Only the from_string and
       date_string properties will be visible when a
       DateInterval is created with this method.</td></tr><tr><td>&nbsp;</td><td><a href='dateperiod.construct.php'>DatePeriod::__construct</a></td><td>The DatePeriod::INCLUDE_END_DATE constant has been added.</td></tr><tr><td>&nbsp;</td><td><a href='datetime.createfromformat.php'>DateTime::createFromFormat</a></td><td>Now throws ValueError when NULL-bytes
       are passed into datetime, which previously was silently
       ignored.</td></tr><tr><td>&nbsp;</td><td><a href='datetime.format.php'>DateTimeInterface::format</a></td><td>The format characters X and x
       have been added.</td></tr><tr><td>&nbsp;</td><td><a href='datetimeimmutable.createfromformat.php'>DateTimeImmutable::createFromFormat</a></td><td>The X and x
        format specifiers have been added.</td></tr><tr><td>&nbsp;</td><td><a href='datetimeimmutable.createfromformat.php'>DateTimeImmutable::createFromFormat</a></td><td>Now throws ValueError when NULL-bytes
        are passed into datetime, which previously was silently
        ignored.</td></tr><tr><td>&nbsp;</td><td><a href='datetimeimmutable.getlasterrors.php'>DateTimeImmutable::getLastErrors</a></td><td>Before PHP 8.2.0, this function did not return false
        when there were no warnings or errors. Instead, it would always
        return the documented array structure.</td></tr><tr><td>&nbsp;</td><td><a href='filesystemiterator.construct.php'>FilesystemIterator::__construct</a></td><td>Prior to PHP 8.2.0, FilesystemIterator::SKIP_DOTS was
        always set and could not be removed.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-walk.php'>array_walk</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-walk-recursive.php'>array_walk_recursive</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.arsort.php'>arsort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.asort.php'>asort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-getinfo.php'>curl_getinfo</a></td><td>Introduced CURLINFO_PROXY_ERROR,
        CURLINFO_REFERER,
        CURLINFO_RETRY_AFTER.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-multi-setopt.php'>curl_multi_setopt</a></td><td>Introduced CURLMOPT_MAX_CONCURRENT_STREAMS.</td></tr><tr><td>&nbsp;</td><td><a href='function.date-parse-from-format.php'>date_parse_from_format</a></td><td>Now throws ValueError when NULL-bytes
       are passed into datetime, which previously was silently
       ignored.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-fetch.php'>dba_fetch</a></td><td>dba_fetch's optional skip argument is now at the end
       in line with PHP userland semantics. The previously overloaded signature
       is still accepted but discouraged.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-open.php'>dba_open</a></td><td>flags is added.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-open.php'>dba_open</a></td><td>handler is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-popen.php'>dba_popen</a></td><td>flags is added.</td></tr><tr><td>&nbsp;</td><td><a href='function.getimagesize.php'>getimagesize</a></td><td>Now returns the actual image dimensions, bits and channels of AVIF images;
        previously, the dimensions were reported as 0x0,
        and bits and channels were not reported at all.</td></tr><tr><td>&nbsp;</td><td><a href='function.idate.php'>idate</a></td><td>Adds the N (ISO-8601 day of the week) and
        o (ISO-8601 year) format characters.</td></tr><tr><td>&nbsp;</td><td><a href='function.iterator-count.php'>iterator_count</a></td><td>The type of iterator has been widened from
       Traversable to
       Traversablearray.</td></tr><tr><td>&nbsp;</td><td><a href='function.iterator-to-array.php'>iterator_to_array</a></td><td>The type of iterator has been widened from
       Traversable to
       Traversablearray.</td></tr><tr><td>&nbsp;</td><td><a href='function.krsort.php'>krsort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.krsort.php'>krsort</a></td><td>This function now does numeric string comparison under
        SORT_REGULAR using the standard PHP 8 rules.</td></tr><tr><td>&nbsp;</td><td><a href='function.ksort.php'>ksort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.ksort.php'>ksort</a></td><td>This function now does numeric string comparison under
        SORT_REGULAR using the standard PHP 8 rules.</td></tr><tr><td>&nbsp;</td><td><a href='function.lcfirst.php'>lcfirst</a></td><td>Case conversion no longer depends on the locale set with
   setlocale. Only ASCII characters will be converted.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-convert-encoding.php'>mb_convert_encoding</a></td><td>mb_convert_encoding will no longer return
       the following non text encodings:
       &quot;Base64&quot;, &quot;QPrint&quot;,
       &quot;UUencode&quot;, &quot;HTML entities&quot;,
       &quot;7 bit&quot; and &quot;8 bit&quot;.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-convert-kana.php'>mb_convert_kana</a></td><td>A ValueError is now thrown if the
        combination of different modes is invalid.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-detect-encoding.php'>mb_detect_encoding</a></td><td>mb_detect_encoding will no longer return
       the following non text encodings:
       &quot;Base64&quot;, &quot;QPrint&quot;,
       &quot;UUencode&quot;, &quot;HTML entities&quot;,
       &quot;7 bit&quot; and &quot;8 bit&quot;.</td></tr><tr><td>&nbsp;</td><td><a href='function.natcasesort.php'>natcasesort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.natsort.php'>natsort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.openlog.php'>openlog</a></td><td>The function now always returns true. Previously it returned false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-close.php'>pg_close</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-untrace.php'>pg_untrace</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.random-bytes.php'>random_bytes</a></td><td>In case of a CSPRNG failure, this function will now throw a
       Random\RandomException. Previously a plain
       Exception was thrown.</td></tr><tr><td>&nbsp;</td><td><a href='function.random-int.php'>random_int</a></td><td>In case of a CSPRNG failure, this function will now throw a
       Random\RandomException. Previously a plain
       Exception was thrown.</td></tr><tr><td>&nbsp;</td><td><a href='function.rsort.php'>rsort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.setcookie.php'>setcookie</a></td><td>The date format of the cookie is now 'D, d M Y H:i:s \G\M\T';
        previously it was 'D, d-M-Y H:i:s T'.</td></tr><tr><td>&nbsp;</td><td><a href='function.snmp-set-enum-print.php'>snmp_set_enum_print</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.snmp-set-oid-output-format.php'>snmp_set_oid_output_format</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.snmp-set-quick-print.php'>snmp_set_quick_print</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.snmp-set-valueretrieval.php'>snmp_set_valueretrieval</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.sort.php'>sort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.str-ireplace.php'>str_ireplace</a></td><td>Case folding no longer depends on the locale set with
   setlocale. Only ASCII case folding will be done.
   Non-ASCII bytes will be compared by their byte value.</td></tr><tr><td>&nbsp;</td><td><a href='function.str-split.php'>str_split</a></td><td>If string is empty an empty array is now returned.
       Previously an array containing a single empty string was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.strcasecmp.php'>strcasecmp</a></td><td>This function is no longer guaranteed to return
  strlen($string1) - strlen($string2) when string lengths
  are not equal, but may now return -1 or
  1 instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.strcmp.php'>strcmp</a></td><td>This function is no longer guaranteed to return
  strlen($string1) - strlen($string2) when string lengths
  are not equal, but may now return -1 or
  1 instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.stripos.php'>stripos</a></td><td>Case folding no longer depends on the locale set with
   setlocale. Only ASCII case folding will be done.
   Non-ASCII bytes will be compared by their byte value.</td></tr><tr><td>&nbsp;</td><td><a href='function.stristr.php'>stristr</a></td><td>Case folding no longer depends on the locale set with
   setlocale. Only ASCII case folding will be done.
   Non-ASCII bytes will be compared by their byte value.</td></tr><tr><td>&nbsp;</td><td><a href='function.strnatcasecmp.php'>strnatcasecmp</a></td><td>This function is no longer guaranteed to return
  strlen($string1) - strlen($string2) when string lengths
  are not equal, but may now return -1 or
  1 instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.strnatcmp.php'>strnatcmp</a></td><td>This function is no longer guaranteed to return
  strlen($string1) - strlen($string2) when string lengths
  are not equal, but may now return -1 or
  1 instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.strncasecmp.php'>strncasecmp</a></td><td>This function is no longer guaranteed to return
  strlen($string1) - strlen($string2) when string lengths
  are not equal, but may now return -1 or
  1 instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.strncmp.php'>strncmp</a></td><td>This function is no longer guaranteed to return
  strlen($string1) - strlen($string2) when string lengths
  are not equal, but may now return -1 or
  1 instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.strripos.php'>strripos</a></td><td>Case folding no longer depends on the locale set with
   setlocale. Only ASCII case folding will be done.
   Non-ASCII bytes will be compared by their byte value.</td></tr><tr><td>&nbsp;</td><td><a href='function.strtolower.php'>strtolower</a></td><td>Case conversion no longer depends on the locale set with
   setlocale. Only ASCII characters will be converted.</td></tr><tr><td>&nbsp;</td><td><a href='function.strtoupper.php'>strtoupper</a></td><td>Case conversion no longer depends on the locale set with
   setlocale. Only ASCII characters will be converted.</td></tr><tr><td>&nbsp;</td><td><a href='function.substr-compare.php'>substr_compare</a></td><td>This function is no longer guaranteed to return
  strlen($string1) - strlen($string2) when string lengths
  are not equal, but may now return -1 or
  1 instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.uasort.php'>uasort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.ucfirst.php'>ucfirst</a></td><td>Case conversion no longer depends on the locale set with
   setlocale. Only ASCII characters will be converted.</td></tr><tr><td>&nbsp;</td><td><a href='function.ucwords.php'>ucwords</a></td><td>Case conversion no longer depends on the locale set with
   setlocale. Only ASCII characters will be converted.</td></tr><tr><td>&nbsp;</td><td><a href='function.uksort.php'>uksort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.usort.php'>usort</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.utf8-decode.php'>utf8_decode</a></td><td>This function has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.utf8-encode.php'>utf8_encode</a></td><td>This function has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.var-export.php'>var_export</a></td><td>Exported class names are now fully qualified; previously, the leading
        backslash was ommitted.</td></tr><tr><td>&nbsp;</td><td><a href='intlcalendar.clear.php'>IntlCalendar::clear</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='intlcalendar.set.php'>IntlCalendar::set</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='intlcalendar.setfirstdayofweek.php'>IntlCalendar::setFirstDayOfWeek</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='intlcalendar.setlenient.php'>IntlCalendar::setLenient</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='intlcalendar.setrepeatedwalltimeoption.php'>IntlCalendar::setRepeatedWallTimeOption</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='intlcalendar.setskippedwalltimeoption.php'>IntlCalendar::setSkippedWallTimeOption</a></td><td>The return type is true now; previously, it was bool.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionenum.getbackingtype.php'>ReflectionEnum::getBackingType</a></td><td>The return type is now declared as ?ReflectionNamedType. Previously,
       ?ReflectionType was declared.</td></tr></tbody><tbody class="gen-changelog v8-2-0"><tr><td>8.1.14</td><td><a href='splfileobject.tostring.php'>SplFileObject::__toString</a></td><td>Changed from an alias of SplFileObject::fgets
        to an implementation of SplFileObject::current
        which returns a CSV string when the
        SplFileObject::READ_CSV flag is set.</td></tr></tbody><tbody class="gen-changelog v8-1-14"><tr><td>8.1.8</td><td><a href='datetime.createfromformat.php'>DateTime::createFromFormat</a></td><td>Now throws ValueError when NULL-bytes
       are passed into datetime, which previously was silently
       ignored.</td></tr><tr><td>&nbsp;</td><td><a href='datetimeimmutable.createfromformat.php'>DateTimeImmutable::createFromFormat</a></td><td>Now throws ValueError when NULL-bytes
        are passed into datetime, which previously was silently
        ignored.</td></tr><tr><td>&nbsp;</td><td><a href='function.date-parse-from-format.php'>date_parse_from_format</a></td><td>Now throws ValueError when NULL-bytes
       are passed into datetime, which previously was silently
       ignored.</td></tr></tbody><tbody class="gen-changelog v8-1-8"><tr><td>8.1.0</td><td><a href='datetime.settime.php'>DateTime::setTime</a></td><td>The behaviour with double existing hours (during the fall-back
      DST transition) changed. Previously PHP would pick the second occurrence
      (after the DST transition), instead of the first occurrence (before DST
       transition).</td></tr><tr><td>&nbsp;</td><td><a href='datetimeimmutable.settime.php'>DateTimeImmutable::setTime</a></td><td>The behaviour with double existing hours (during the fall-back
      DST transition) changed. Previously PHP would pick the second occurrence
      (after the DST transition), instead of the first occurrence (before DST
       transition).</td></tr><tr><td>&nbsp;</td><td><a href='directoryiterator.key.php'>DirectoryIterator::key</a></td><td>When the iterator is uninitialized, an Error is
        thrown now. Previously, the method returned false.</td></tr><tr><td>&nbsp;</td><td><a href='domdocument.createcomment.php'>DOMDocument::createComment</a></td><td>In case of an error, a DomException is thrown now.
       Previously, false was returned.</td></tr><tr><td>&nbsp;</td><td><a href='domdocument.createdocumentfragment.php'>DOMDocument::createDocumentFragment</a></td><td>In case of an error, a DomException is thrown now.
       Previously, false was returned.</td></tr><tr><td>&nbsp;</td><td><a href='domdocument.createtextnode.php'>DOMDocument::createTextNode</a></td><td>In case of an error, a DomException is thrown now.
       Previously, false was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.current.php'>current</a></td><td>Calling this function on objects is deprecated.
  Either convert the object to an array using get_mangled_object_vars first, or use the methods
  provided by a class that implements Iterator, such as ArrayIterator, instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.date-sunrise.php'>date_sunrise</a></td><td>This function has been deprecated in favor of date_sun_info.</td></tr><tr><td>&nbsp;</td><td><a href='function.date-sunset.php'>date_sunset</a></td><td>This function has been deprecated in favor of date_sun_info.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-popen.php'>dba_popen</a></td><td>handler is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.define.php'>define</a></td><td>value can now be an object.</td></tr><tr><td>&nbsp;</td><td><a href='function.end.php'>end</a></td><td>Calling this function on objects is deprecated.
  Either convert the object to an array using get_mangled_object_vars first, or use the methods
  provided by a class that implements Iterator, such as ArrayIterator, instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.exif-imagetype.php'>exif_imagetype</a></td><td>Added AVIF support.</td></tr><tr><td>&nbsp;</td><td><a href='function.finfo-buffer.php'>finfo_buffer</a></td><td>The finfo parameter expects an finfo
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.finfo-close.php'>finfo_close</a></td><td>The finfo parameter expects an finfo
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.finfo-file.php'>finfo_file</a></td><td>The finfo parameter expects an finfo
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.finfo-open.php'>finfo_open</a></td><td>Returns an finfo instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.finfo-set-flags.php'>finfo_set_flags</a></td><td>The finfo parameter expects an finfo
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.fputcsv.php'>fputcsv</a></td><td>The optional eol parameter has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-alloc.php'>ftp_alloc</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-append.php'>ftp_append</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-cdup.php'>ftp_cdup</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-chdir.php'>ftp_chdir</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-chmod.php'>ftp_chmod</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-close.php'>ftp_close</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-connect.php'>ftp_connect</a></td><td>Returns an FTP\Connection instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-delete.php'>ftp_delete</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-exec.php'>ftp_exec</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-fget.php'>ftp_fget</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-fput.php'>ftp_fput</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-get.php'>ftp_get</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-get-option.php'>ftp_get_option</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-login.php'>ftp_login</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-mdtm.php'>ftp_mdtm</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-mkdir.php'>ftp_mkdir</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-mlsd.php'>ftp_mlsd</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-nb-continue.php'>ftp_nb_continue</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-nb-fget.php'>ftp_nb_fget</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-nb-fput.php'>ftp_nb_fput</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-nb-get.php'>ftp_nb_get</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-nb-put.php'>ftp_nb_put</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-nlist.php'>ftp_nlist</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-pasv.php'>ftp_pasv</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-put.php'>ftp_put</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-pwd.php'>ftp_pwd</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-raw.php'>ftp_raw</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-rawlist.php'>ftp_rawlist</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-rename.php'>ftp_rename</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-rmdir.php'>ftp_rmdir</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-set-option.php'>ftp_set_option</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-site.php'>ftp_site</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-size.php'>ftp_size</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-ssl-connect.php'>ftp_ssl_connect</a></td><td>Returns an FTP\Connection instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-systype.php'>ftp_systype</a></td><td>The ftp parameter expects an FTP\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.get-html-translation-table.php'>get_html_translation_table</a></td><td>flags changed from ENT_COMPAT to ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401.</td></tr><tr><td>&nbsp;</td><td><a href='function.gmp-init.php'>gmp_init</a></td><td>Support for explicit octal prefixes 0o and
       0o has been added for num strings.
       Interpretation of such prefixes when base is
       0 has also been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash.php'>hash</a></td><td>The options parameter has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-algos.php'>hash_algos</a></td><td>Support for MurmurHash3 and xxHash algorithms has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-file.php'>hash_file</a></td><td>The options parameter has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-init.php'>hash_init</a></td><td>The options parameter has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.html-entity-decode.php'>html_entity_decode</a></td><td>flags changed from ENT_COMPAT to ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401.</td></tr><tr><td>&nbsp;</td><td><a href='function.htmlentities.php'>htmlentities</a></td><td>flags changed from ENT_COMPAT to ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401.</td></tr><tr><td>&nbsp;</td><td><a href='function.htmlspecialchars.php'>htmlspecialchars</a></td><td>flags changed from ENT_COMPAT to ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401.</td></tr><tr><td>&nbsp;</td><td><a href='function.htmlspecialchars-decode.php'>htmlspecialchars_decode</a></td><td>flags changed from ENT_COMPAT to ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagechar.php'>imagechar</a></td><td>The font parameter now accepts both an GdFont instance
  and an int; previously only int was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecharup.php'>imagecharup</a></td><td>The font parameter now accepts both an GdFont instance
  and an int; previously only int was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagefilledpolygon.php'>imagefilledpolygon</a></td><td>The parameter num_points has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagefontheight.php'>imagefontheight</a></td><td>The font parameter now accepts both an GdFont instance
  and an int; previously only int was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagefontwidth.php'>imagefontwidth</a></td><td>The font parameter now accepts both an GdFont instance
  and an int; previously only int was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.imageloadfont.php'>imageloadfont</a></td><td>Returns an GdFont instance now;
        previously, an int was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imageopenpolygon.php'>imageopenpolygon</a></td><td>The parameter num_points has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagepolygon.php'>imagepolygon</a></td><td>The parameter num_points has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagestring.php'>imagestring</a></td><td>The font parameter now accepts both an GdFont instance
  and an int; previously only int was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagestringup.php'>imagestringup</a></td><td>The font parameter now accepts both an GdFont instance
  and an int; previously only int was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagetypes.php'>imagetypes</a></td><td>IMG_AVIF added.</td></tr><tr><td>&nbsp;</td><td><a href='function.ini-set.php'>ini_set</a></td><td>value now accepts any scalar type (including null).
       Previously, only string values were accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.key.php'>key</a></td><td>Calling this function on objects is deprecated.
  Either convert the object to an array using get_mangled_object_vars first, or use the methods
  provided by a class that implements Iterator, such as ArrayIterator, instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-add.php'>ldap_add</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-add-ext.php'>ldap_add_ext</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-add-ext.php'>ldap_add_ext</a></td><td>Returns an LDAP\Result instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-bind.php'>ldap_bind</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-bind-ext.php'>ldap_bind_ext</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-bind-ext.php'>ldap_bind_ext</a></td><td>Returns an LDAP\Result instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-compare.php'>ldap_compare</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-connect.php'>ldap_connect</a></td><td>Returns an LDAP\Connection instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-count-entries.php'>ldap_count_entries</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-count-entries.php'>ldap_count_entries</a></td><td>The result parameter expects an LDAP\Result
  instance now; previously, a valid ldap result resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-count-references.php'>ldap_count_references</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-count-references.php'>ldap_count_references</a></td><td>The result parameter expects an LDAP\Result
  instance now; previously, a valid ldap result resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-delete.php'>ldap_delete</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-delete-ext.php'>ldap_delete_ext</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-delete-ext.php'>ldap_delete_ext</a></td><td>Returns an LDAP\Result instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-errno.php'>ldap_errno</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-error.php'>ldap_error</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-exop.php'>ldap_exop</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-exop-passwd.php'>ldap_exop_passwd</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-exop-refresh.php'>ldap_exop_refresh</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-exop-whoami.php'>ldap_exop_whoami</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-first-attribute.php'>ldap_first_attribute</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-first-attribute.php'>ldap_first_attribute</a></td><td>The entry parameter expects an LDAP\ResultEntry
  instance now; previously, a valid ldap result entry resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-first-entry.php'>ldap_first_entry</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-first-entry.php'>ldap_first_entry</a></td><td>The result parameter expects an LDAP\Result
  instance now; previously, a valid ldap result resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-first-entry.php'>ldap_first_entry</a></td><td>Returns an LDAP\ResultEntry instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-free-result.php'>ldap_free_result</a></td><td>The result parameter expects an LDAP\Result
  instance now; previously, a valid ldap result resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-get-attributes.php'>ldap_get_attributes</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-get-attributes.php'>ldap_get_attributes</a></td><td>The entry parameter expects an LDAP\ResultEntry
  instance now; previously, a valid ldap result entry resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-get-dn.php'>ldap_get_dn</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-get-dn.php'>ldap_get_dn</a></td><td>The entry parameter expects an LDAP\ResultEntry
  instance now; previously, a valid ldap result entry resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-get-entries.php'>ldap_get_entries</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-get-entries.php'>ldap_get_entries</a></td><td>The result parameter expects an LDAP\Result
  instance now; previously, a valid ldap result resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-get-option.php'>ldap_get_option</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-get-values.php'>ldap_get_values</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-get-values.php'>ldap_get_values</a></td><td>The entry parameter expects an LDAP\ResultEntry
  instance now; previously, a valid ldap result entry resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-get-values-len.php'>ldap_get_values_len</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-get-values-len.php'>ldap_get_values_len</a></td><td>The entry parameter expects an LDAP\ResultEntry
  instance now; previously, a valid ldap result entry resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-list.php'>ldap_list</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-list.php'>ldap_list</a></td><td>Returns an LDAP\Result instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod-add.php'>ldap_mod_add</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod-del.php'>ldap_mod_del</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod-replace.php'>ldap_mod_replace</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-modify-batch.php'>ldap_modify_batch</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod_add-ext.php'>ldap_mod_add_ext</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod_add-ext.php'>ldap_mod_add_ext</a></td><td>Returns an LDAP\Result instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod_del-ext.php'>ldap_mod_del_ext</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod_del-ext.php'>ldap_mod_del_ext</a></td><td>Returns an LDAP\Result instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod_replace-ext.php'>ldap_mod_replace_ext</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod_replace-ext.php'>ldap_mod_replace_ext</a></td><td>Returns an LDAP\Result instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-next-attribute.php'>ldap_next_attribute</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-next-attribute.php'>ldap_next_attribute</a></td><td>The entry parameter expects an LDAP\ResultEntry
  instance now; previously, a valid ldap result entry resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-next-entry.php'>ldap_next_entry</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-next-entry.php'>ldap_next_entry</a></td><td>The entry parameter expects an LDAP\ResultEntry
  instance now; previously, a valid ldap result entry resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-next-entry.php'>ldap_next_entry</a></td><td>Returns an LDAP\Result instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-parse-exop.php'>ldap_parse_exop</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-parse-exop.php'>ldap_parse_exop</a></td><td>The result parameter expects an LDAP\Result
  instance now; previously, a valid ldap result resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-parse-result.php'>ldap_parse_result</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-parse-result.php'>ldap_parse_result</a></td><td>The result parameter expects an LDAP\Result
  instance now; previously, a valid ldap result resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-read.php'>ldap_read</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-read.php'>ldap_read</a></td><td>Returns an LDAP\Result instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-rename.php'>ldap_rename</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-rename-ext.php'>ldap_rename_ext</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-rename-ext.php'>ldap_rename_ext</a></td><td>Returns an LDAP\Result instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-sasl-bind.php'>ldap_sasl_bind</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-search.php'>ldap_search</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-search.php'>ldap_search</a></td><td>Returns an LDAP\Result instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-set-option.php'>ldap_set_option</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-set-rebind-proc.php'>ldap_set_rebind_proc</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-unbind.php'>ldap_unbind</a></td><td>The ldap parameter expects an LDAP\Connection
  instance now; previously, a valid ldap link resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-check-encoding.php'>mb_check_encoding</a></td><td>Calling this function with null as value or without argument is deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.mhash.php'>mhash</a></td><td>This function has been deprecated.
        Use the hash_*() functions instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.mhash-count.php'>mhash_count</a></td><td>This function has been deprecated.
        Use the hash_*() functions instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.mhash-get-block-size.php'>mhash_get_block_size</a></td><td>This function has been deprecated.
        Use the hash_*() functions instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.mhash-get-hash-name.php'>mhash_get_hash_name</a></td><td>This function has been deprecated.
        Use the hash_*() functions instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.mhash-keygen-s2k.php'>mhash_keygen_s2k</a></td><td>This function has been deprecated.
        Use the hash_*() functions instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.next.php'>next</a></td><td>Calling this function on objects is deprecated.
  Either convert the object to an array using get_mangled_object_vars first, or use the methods
  provided by a class that implements Iterator, such as ArrayIterator, instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-result-all.php'>odbc_result_all</a></td><td>This function has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-cms-encrypt.php'>openssl_cms_encrypt</a></td><td>The default cipher algorithm (cipher_algo) is now
       AES-128-CBC (OPENSSL_CIPHER_AES_128_CBC). Previously,
       PKCS7/CMS was used (OPENSSL_CIPHER_RC2_40).</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-decrypt.php'>openssl_decrypt</a></td><td>tag is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkcs7-encrypt.php'>openssl_pkcs7_encrypt</a></td><td>The default cipher algorithm (cipher_algo) is now
       AES-128-CBC (OPENSSL_CIPHER_AES_128_CBC). Previously,
       PKCS7/CMS was used (OPENSSL_CIPHER_RC2_40).</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-affected-rows.php'>pg_affected_rows</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-cancel-query.php'>pg_cancel_query</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-client-encoding.php'>pg_client_encoding</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-close.php'>pg_close</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-connect.php'>pg_connect</a></td><td>Returns an PgSql\Connection instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-connect-poll.php'>pg_connect_poll</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-connection-busy.php'>pg_connection_busy</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-connection-reset.php'>pg_connection_reset</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-connection-status.php'>pg_connection_status</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-consume-input.php'>pg_consume_input</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-convert.php'>pg_convert</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-copy-from.php'>pg_copy_from</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-copy-to.php'>pg_copy_to</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-dbname.php'>pg_dbname</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-delete.php'>pg_delete</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-end-copy.php'>pg_end_copy</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-escape-bytea.php'>pg_escape_bytea</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-escape-identifier.php'>pg_escape_identifier</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-escape-literal.php'>pg_escape_literal</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-escape-string.php'>pg_escape_string</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-execute.php'>pg_execute</a></td><td>Returns an PgSql\Result instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-execute.php'>pg_execute</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-fetch-all.php'>pg_fetch_all</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-fetch-all-columns.php'>pg_fetch_all_columns</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-fetch-array.php'>pg_fetch_array</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-fetch-assoc.php'>pg_fetch_assoc</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-fetch-object.php'>pg_fetch_object</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-fetch-result.php'>pg_fetch_result</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-fetch-row.php'>pg_fetch_row</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-field-is-null.php'>pg_field_is_null</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-field-name.php'>pg_field_name</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-field-num.php'>pg_field_num</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-field-prtlen.php'>pg_field_prtlen</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-field-size.php'>pg_field_size</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-field-table.php'>pg_field_table</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-field-type.php'>pg_field_type</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-field-type-oid.php'>pg_field_type_oid</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-flush.php'>pg_flush</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-free-result.php'>pg_free_result</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-get-notify.php'>pg_get_notify</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-get-pid.php'>pg_get_pid</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-get-result.php'>pg_get_result</a></td><td>Returns an PgSql\Result instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-get-result.php'>pg_get_result</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-host.php'>pg_host</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-insert.php'>pg_insert</a></td><td>Returns an PgSql\Result instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-insert.php'>pg_insert</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-last-error.php'>pg_last_error</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-last-notice.php'>pg_last_notice</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-last-oid.php'>pg_last_oid</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-lo-close.php'>pg_lo_close</a></td><td>The lob parameter expects an PgSql\Lob
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-lo-create.php'>pg_lo_create</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-lo-export.php'>pg_lo_export</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-lo-import.php'>pg_lo_import</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-lo-open.php'>pg_lo_open</a></td><td>Returns an PgSql\Lob instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-lo-open.php'>pg_lo_open</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-lo-read.php'>pg_lo_read</a></td><td>The lob parameter expects an PgSql\Lob
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-lo-read-all.php'>pg_lo_read_all</a></td><td>The lob parameter expects an PgSql\Lob
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-lo-seek.php'>pg_lo_seek</a></td><td>The lob parameter expects an PgSql\Lob
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-lo-tell.php'>pg_lo_tell</a></td><td>The lob parameter expects an PgSql\Lob
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-lo-truncate.php'>pg_lo_truncate</a></td><td>The lob parameter expects an PgSql\Lob
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-lo-unlink.php'>pg_lo_unlink</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-lo-write.php'>pg_lo_write</a></td><td>The lob parameter expects an PgSql\Lob
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-meta-data.php'>pg_meta_data</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-num-fields.php'>pg_num_fields</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-num-rows.php'>pg_num_rows</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-options.php'>pg_options</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-parameter-status.php'>pg_parameter_status</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-pconnect.php'>pg_pconnect</a></td><td>Returns a PgSql\Connection instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-ping.php'>pg_ping</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-port.php'>pg_port</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-prepare.php'>pg_prepare</a></td><td>Returns an PgSql\Result instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-prepare.php'>pg_prepare</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-put-line.php'>pg_put_line</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-query.php'>pg_query</a></td><td>Returns an PgSql\Result instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-query.php'>pg_query</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-query-params.php'>pg_query_params</a></td><td>Returns an PgSql\Result instance now;
  previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-query-params.php'>pg_query_params</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-result-error.php'>pg_result_error</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-result-error-field.php'>pg_result_error_field</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-result-seek.php'>pg_result_seek</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-result-status.php'>pg_result_status</a></td><td>The result parameter expects an PgSql\Result
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-select.php'>pg_select</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-send-execute.php'>pg_send_execute</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-send-prepare.php'>pg_send_prepare</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-send-query.php'>pg_send_query</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-send-query-params.php'>pg_send_query_params</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-set-client-encoding.php'>pg_set_client_encoding</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-set-error-verbosity.php'>pg_set_error_verbosity</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-socket.php'>pg_socket</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-trace.php'>pg_trace</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-transaction-status.php'>pg_transaction_status</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-tty.php'>pg_tty</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-untrace.php'>pg_untrace</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-update.php'>pg_update</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-version.php'>pg_version</a></td><td>The connection parameter expects an PgSql\Connection
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.prev.php'>prev</a></td><td>Calling this function on objects is deprecated.
  Either convert the object to an array using get_mangled_object_vars first, or use the methods
  provided by a class that implements Iterator, such as ArrayIterator, instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.reset.php'>reset</a></td><td>Calling this function on objects is deprecated.
  Either convert the object to an array using get_mangled_object_vars first, or use the methods
  provided by a class that implements Iterator, such as ArrayIterator, instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.snmp3-get.php'>snmp3_get</a></td><td>The auth_protocol now accepts &quot;SHA256&quot;
        and &quot;SHA512&quot; when supported by libnetsnmp.</td></tr><tr><td>&nbsp;</td><td><a href='function.snmp3-getnext.php'>snmp3_getnext</a></td><td>The auth_protocol now accepts &quot;SHA256&quot;
        and &quot;SHA512&quot; when supported by libnetsnmp.</td></tr><tr><td>&nbsp;</td><td><a href='function.snmp3-real-walk.php'>snmp3_real_walk</a></td><td>The auth_protocol now accepts &quot;SHA256&quot;
        and &quot;SHA512&quot; when supported by libnetsnmp.</td></tr><tr><td>&nbsp;</td><td><a href='function.snmp3-walk.php'>snmp3_walk</a></td><td>The auth_protocol now accepts &quot;SHA256&quot;
        and &quot;SHA512&quot; when supported by libnetsnmp.</td></tr><tr><td>&nbsp;</td><td><a href='function.stream-select.php'>stream_select</a></td><td>microseconds is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.strptime.php'>strptime</a></td><td>This function has been deprecated.
        Use date_parse_from_format instead (for locale-independent parsing),
        or IntlDateFormatter::parse (for locale-dependent parsing)</td></tr><tr><td>&nbsp;</td><td><a href='intldateformatter.create.php'>IntlDateFormatter::create</a></td><td>Parameters dateType and
         timeType are now optional.</td></tr><tr><td>&nbsp;</td><td><a href='multipleiterator.current.php'>MultipleIterator::current</a></td><td>A RuntimeException is now thrown if
       MultipleIterator::current is called on an
       invalid iterator.  Previously, false was returned.</td></tr><tr><td>&nbsp;</td><td><a href='multipleiterator.key.php'>MultipleIterator::key</a></td><td>A RuntimeException is now thrown if
       MultipleIterator::key is called on an
       invalid iterator.  Previously, false was returned.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli-driver.report-mode.php'>mysqli_driver::$report_mode</a></td><td>The default value is now MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT.
       Previously, it was MYSQLI_REPORT_OFF.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli-result.fetch-all.php'>mysqli_result::fetch_all</a></td><td>Now also available when linking against libmysqlclient.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli-stmt.execute.php'>mysqli_stmt::execute</a></td><td>The optional params parameter has been added.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli-stmt.next-result.php'>mysqli_stmt::next_result</a></td><td>Now also available when linking against libmysqlclient.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli.construct.php'>mysqli::__construct</a></td><td>mysqli::connect now returns true instead of null on success.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli.get-client-info.php'>mysqli::$client_info</a></td><td>Calling mysqli_get_client_info with the
       mysql argument has been deprecated.
       This function never required a parameter, but incorrectly allowed it as
       an optional parameter.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli.get-client-info.php'>mysqli::$client_info</a></td><td>The object-oriented style mysqli::get_client_info
       has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli.init.php'>mysqli::init</a></td><td>The object-oriented style mysqli::init method
       has been deprecated.
       Replace calls to parent::init with
       parent::__construct.</td></tr><tr><td>&nbsp;</td><td><a href='phar.buildfromdirectory.php'>Phar::buildFromDirectory</a></td><td>Phar::buildFromDirectory no longer returns false.</td></tr><tr><td>&nbsp;</td><td><a href='phar.buildfromiterator.php'>Phar::buildFromIterator</a></td><td>Phar::buildFromIterator no longer returns false.</td></tr><tr><td>&nbsp;</td><td><a href='phardata.buildfromdirectory.php'>PharData::buildFromDirectory</a></td><td>PharData::buildFromDirectory no longer returns false.</td></tr><tr><td>&nbsp;</td><td><a href='phardata.buildfromiterator.php'>PharData::buildFromIterator</a></td><td>PharData::buildFromIterator no longer returns false.</td></tr><tr><td>&nbsp;</td><td><a href='reflectiofunctionabstract.isstatic.php'>ReflectionFunctionAbstract::isStatic</a></td><td>This method has been pulled up. Previously, it was only defined in
       ReflectionMethod.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionclassconstant.getname.php'>ReflectionClassConstant::getName</a></td><td>Throws an Error in case the name property has not been initialized.
       Previously, the method returned false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionextension.clone.php'>ReflectionExtension::__clone</a></td><td>This method is no longer final.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionfunctionabstract.clone.php'>ReflectionFunctionAbstract::__clone</a></td><td>This method is no longer final.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionparameter.clone.php'>ReflectionParameter::__clone</a></td><td>This method is no longer final.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionproperty.clone.php'>ReflectionProperty::__clone</a></td><td>This method is no longer final.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionproperty.getvalue.php'>ReflectionProperty::getValue</a></td><td>Private and protected properties can be accessed by
       ReflectionProperty::getValue right away.
       Previously, they needed to be made accessible by calling
       ReflectionProperty::setAccessible; otherwise
       a ReflectionException was thrown.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionproperty.setvalue.php'>ReflectionProperty::setValue</a></td><td>Private and protected properties can be accessed by
       ReflectionProperty::setValue right away.
       Previously, they needed to be made accessible by calling
       ReflectionProperty::setAccessible; otherwise
       a ReflectionException was thrown.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionzendextension.clone.php'>ReflectionZendExtension::__clone</a></td><td>This method is no longer final.</td></tr><tr><td>&nbsp;</td><td><a href='simplexmlelement.current.php'>SimpleXMLElement::current</a></td><td>An Error is now thrown if
       SimpleXMLElement::current is called on an
       invalid iterator.  Previously, null was returned.</td></tr><tr><td>&nbsp;</td><td><a href='simplexmlelement.key.php'>SimpleXMLElement::key</a></td><td>An Error is now thrown if
       SimpleXMLElement::key is called on an
       invalid iterator.  Previously, false was returned.</td></tr><tr><td>&nbsp;</td><td><a href='splfileobject.fputcsv.php'>SplFileObject::fputcsv</a></td><td>The optional eol parameter has been added.</td></tr><tr><td>&nbsp;</td><td><a href='splobjectstorage.current.php'>SplObjectStorage::current</a></td><td>SplObjectStorage::current now throws an Error exception
       if the current position is invalid.  Previously, false was returned instead.</td></tr><tr><td>&nbsp;</td><td><a href='sqlite3result.finalize.php'>SQLite3Result::finalize</a></td><td>This method now throws an Error exception if the
       object is not correct initialized. Previously, it returned false.</td></tr><tr><td>&nbsp;</td><td><a href='sqlite3stmt.close.php'>SQLite3Stmt::close</a></td><td>This method now throws an Error exception if the
       object is not correct initialized. Previously, it returned
       false.</td></tr></tbody><tbody class="gen-changelog v8-1-0"><tr><td>8.0.21</td><td><a href='datetime.createfromformat.php'>DateTime::createFromFormat</a></td><td>Now throws ValueError when NULL-bytes
       are passed into datetime, which previously was silently
       ignored.</td></tr><tr><td>&nbsp;</td><td><a href='datetimeimmutable.createfromformat.php'>DateTimeImmutable::createFromFormat</a></td><td>Now throws ValueError when NULL-bytes
        are passed into datetime, which previously was silently
        ignored.</td></tr><tr><td>&nbsp;</td><td><a href='function.date-parse-from-format.php'>date_parse_from_format</a></td><td>Now throws ValueError when NULL-bytes
       are passed into datetime, which previously was silently
       ignored.</td></tr></tbody><tbody class="gen-changelog v8-0-21"><tr><td>8.0.5</td><td><a href='function.imageinterlace.php'>imageinterlace</a></td><td>imageinterlace returns a bool now;
       previously it returned an int
       (non-zero for interlaced images, zero otherwise).</td></tr></tbody><tbody class="gen-changelog v8-0-5"><tr><td>8.0.3</td><td><a href='domdocument.getelementsbytagnamens.php'>DOMDocument::getElementsByTagNameNS</a></td><td>namespace is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='domelement.getelementsbytagnamens.php'>DOMElement::getElementsByTagNameNS</a></td><td>namespace is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='domimplementation.createdocument.php'>DOMImplementation::createDocument</a></td><td>namespace is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='finfo.construct.php'>finfo::__construct</a></td><td>magic_database is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.bind-textdomain-codeset.php'>bind_textdomain_codeset</a></td><td>codeset is nullable now.
       Previously, it was not possible to retrieve the currently set encoding.</td></tr><tr><td>&nbsp;</td><td><a href='function.bindtextdomain.php'>bindtextdomain</a></td><td>directory is nullable now.
       Previously, it was not possible to retrieve the currently set directory.</td></tr><tr><td>&nbsp;</td><td><a href='function.finfo-open.php'>finfo_open</a></td><td>magic_database is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagegd.php'>imagegd</a></td><td>file is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagegd2.php'>imagegd2</a></td><td>file is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='soapclient.setlocation.php'>SoapClient::__setLocation</a></td><td>location is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='soapvar.construct.php'>SoapVar::__construct</a></td><td>typeName, typeNamespace, nodeName,and
       nodeNamespace are nullable now.</td></tr></tbody><tbody class="gen-changelog v8-0-3"><tr><td>8.0.0</td><td><a href='curlfile.construct.php'>CURLFile::__construct</a></td><td>mime_type and posted_filename
       are nullable now; previously their default was 0.</td></tr><tr><td>&nbsp;</td><td><a href='dateinterval.construct.php'>DateInterval::__construct</a></td><td>W can be combined with D.</td></tr><tr><td>&nbsp;</td><td><a href='datetime.createfromimmutable.php'>DateTime::createFromImmutable</a></td><td>The method returns an instance of the currently invoked class now. Previously, it created a new instance
        of DateTime.</td></tr><tr><td>&nbsp;</td><td><a href='datetime.format.php'>DateTimeInterface::format</a></td><td>The format character p has been added.</td></tr><tr><td>&nbsp;</td><td><a href='datetime.gettimestamp.php'>DateTimeInterface::getTimestamp</a></td><td>These functions no longer return false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='datetimeimmutable.createfrommutable.php'>DateTimeImmutable::createFromMutable</a></td><td>The method returns an instance of the currently invoked class now. Previously, it created a new instance
        of DateTimeImmutable.</td></tr><tr><td>&nbsp;</td><td><a href='datetimezone.listidentifiers.php'>DateTimeZone::listIdentifiers</a></td><td>Prior to this version, false was returned on failure.</td></tr><tr><td>&nbsp;</td><td><a href='directory.close.php'>Directory::close</a></td><td>No parameter is accepted. Previously, a directory handle could be passed as argument.</td></tr><tr><td>&nbsp;</td><td><a href='directory.read.php'>Directory::read</a></td><td>No parameter is accepted. Previously, a directory handle could be passed as argument.</td></tr><tr><td>&nbsp;</td><td><a href='directory.rewind.php'>Directory::rewind</a></td><td>No parameter is accepted. Previously, a directory handle could be passed as argument.</td></tr><tr><td>&nbsp;</td><td><a href='directoryiterator.construct.php'>DirectoryIterator::__construct</a></td><td>Now throws a ValueError if
        directory is an empty string;
        previously it threw a RuntimeException.</td></tr><tr><td>&nbsp;</td><td><a href='domdocument.load.php'>DOMDocument::load</a></td><td>Calling this function statically will
       now throw an Error.
       Previously, an E_DEPRECATED was raised.</td></tr><tr><td>&nbsp;</td><td><a href='domdocument.loadhtml.php'>DOMDocument::loadHTML</a></td><td>Calling this function statically will
       now throw an Error.
       Previously, an E_DEPRECATED was raised.</td></tr><tr><td>&nbsp;</td><td><a href='domdocument.loadhtmlfile.php'>DOMDocument::loadHTMLFile</a></td><td>Calling this function statically will
       now throw an Error.
       Previously, an E_DEPRECATED was raised.</td></tr><tr><td>&nbsp;</td><td><a href='domdocument.loadxml.php'>DOMDocument::loadXML</a></td><td>Calling this function statically will
       now throw an Error.
       Previously, an E_DEPRECATED was raised.</td></tr><tr><td>&nbsp;</td><td><a href='domimplementation.createdocument.php'>DOMImplementation::createDocument</a></td><td>doctype is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='domimplementation.createdocument.php'>DOMImplementation::createDocument</a></td><td>Calling this function statically will
        now throw an Error.
        Previously, an E_DEPRECATED was raised.</td></tr><tr><td>&nbsp;</td><td><a href='domimplementation.createdocumenttype.php'>DOMImplementation::createDocumentType</a></td><td>Calling this function statically will
        now throw an Error.
        Previously, an E_DEPRECATED was raised.</td></tr><tr><td>&nbsp;</td><td><a href='domimplementation.hasfeature.php'>DOMImplementation::hasFeature</a></td><td>Calling this function statically will
        now throw an Error.
        Previously, an E_DEPRECATED was raised.</td></tr><tr><td>&nbsp;</td><td><a href='ffi.cdef.php'>FFI::cdef</a></td><td>lib is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='ffi.string.php'>FFI::string</a></td><td>size is nullable now; previously, its default was
       0.</td></tr><tr><td>&nbsp;</td><td><a href='filesystemiterator.construct.php'>FilesystemIterator::__construct</a></td><td>Now throws a ValueError if
        directory is an empty string;
        previously it threw a RuntimeException.</td></tr><tr><td>&nbsp;</td><td><a href='function.abs.php'>abs</a></td><td>num no longer accepts internal objects which support
       numeric conversion.</td></tr><tr><td>&nbsp;</td><td><a href='function.apache-note.php'>apache_note</a></td><td>note_value is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-chunk.php'>array_chunk</a></td><td>If length is less than 1,
       a ValueError will be thrown now;
       previously, an error of level E_WARNING
       has been raised instead, and the function returned null.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-column.php'>array_column</a></td><td>Objects in columns indicated by index_key parameter
        will no longer be cast to string and will now throw a TypeError instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-combine.php'>array_combine</a></td><td>array_combine will now throw a
       ValueError if the number of elements
       for each array is not equal;
       previously this function returned false instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-diff.php'>array_diff</a></td><td>This function can now be called with only one parameter.
  Formerly, at least two parameters have been required.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-diff-assoc.php'>array_diff_assoc</a></td><td>This function can now be called with only one parameter.
  Formerly, at least two parameters have been required.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-diff-key.php'>array_diff_key</a></td><td>This function can now be called with only one parameter.
  Formerly, at least two parameters have been required.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-fill.php'>array_fill</a></td><td>array_fill now throws a ValueError
       if count is out of range; previously E_WARNING
       was raised, and the function returned false.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-filter.php'>array_filter</a></td><td>callback is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-filter.php'>array_filter</a></td><td>If callback expects a parameter to be passed
  by reference, this function will now emit an E_WARNING.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-intersect.php'>array_intersect</a></td><td>This function can now be called with only one parameter.
  Formerly, at least two parameters have been required.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-intersect-assoc.php'>array_intersect_assoc</a></td><td>This function can now be called with only one parameter.
  Formerly, at least two parameters have been required.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-intersect-key.php'>array_intersect_key</a></td><td>This function can now be called with only one parameter.
  Formerly, at least two parameters have been required.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-key-exists.php'>array_key_exists</a></td><td>The key parameter now accepts
       bool, float, int,
       null, resource, and
       string as arguments.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-key-exists.php'>array_key_exists</a></td><td>Passing an object to the array parameter is no longer supported.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-map.php'>array_map</a></td><td>If callback expects a parameter to be passed
  by reference, this function will now emit an E_WARNING.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-rand.php'>array_rand</a></td><td>array_rand now throws a ValueError
        if num is out of range; previously an
        E_WARNING was raised, and the function returned null.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-rand.php'>array_rand</a></td><td>array_rand now throws a ValueError
        if array is empty; previously an
        E_WARNING was raised, and the function returned null.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-reduce.php'>array_reduce</a></td><td>If callback expects a parameter to be passed
  by reference, this function will now emit an E_WARNING.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-splice.php'>array_splice</a></td><td>length is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-walk.php'>array_walk</a></td><td>If callback expects the second or third parameter to be passed
       by reference, this function will now emit an E_WARNING.</td></tr><tr><td>&nbsp;</td><td><a href='function.assert.php'>assert</a></td><td>assert will no longer evaluate string arguments, instead they will be
         treated like any other argument. assert($a == $b) should be used instead of
         assert('$a == $b'). The assert.quiet_eval php.ini directive and
         the ASSERT_QUIET_EVAL constant have also been removed, as they would no longer
         have any effect.</td></tr><tr><td>&nbsp;</td><td><a href='function.assert.php'>assert</a></td><td>If description is an instance of
        Throwable, the object is thrown if the assertion
        fails, regardless of the value of
        assert.exception.</td></tr><tr><td>&nbsp;</td><td><a href='function.assert.php'>assert</a></td><td>If description is an instance of
        Throwable, no user callback is called even
        if it set.</td></tr><tr><td>&nbsp;</td><td><a href='function.assert.php'>assert</a></td><td>Declaring a function called assert() inside a namespace is
        no longer allowed, and issues E_COMPILE_ERROR.</td></tr><tr><td>&nbsp;</td><td><a href='function.assert-options.php'>assert_options</a></td><td>If option is not a valid option,
        a ValueError is now thrown.
        Previously false was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcadd.php'>bcadd</a></td><td>scale is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.bccomp.php'>bccomp</a></td><td>scale is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcdiv.php'>bcdiv</a></td><td>scale is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcdiv.php'>bcdiv</a></td><td>Dividing by 0 now throws a
       DivisionByZeroError exception
       instead of returning null.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcmod.php'>bcmod</a></td><td>scale is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcmod.php'>bcmod</a></td><td>Dividing by 0 now throws a DivisionByZeroError exception instead of returning null.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcmul.php'>bcmul</a></td><td>scale is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcpow.php'>bcpow</a></td><td>When exponent has a fractional part, it now throws a ValueError
       instead of truncating.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcpowmod.php'>bcpowmod</a></td><td>scale is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcpowmod.php'>bcpowmod</a></td><td>Now throws a ValueError instead of returning false if exponent is a negative value.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcpowmod.php'>bcpowmod</a></td><td>Dividing by 0 now throws a DivisionByZeroError exception instead of returning false.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcscale.php'>bcscale</a></td><td>scale is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcsqrt.php'>bcsqrt</a></td><td>If num is not a well-formed BCMath numeric string,
       or less than 0, a ValueError is thrown.
       Previously, E_WARNING was raised instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcsqrt.php'>bcsqrt</a></td><td>scale now needs to be between 0
       and 2147483647; previously, negative scales have been
       silently treated as 0.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcsqrt.php'>bcsqrt</a></td><td>scale is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcsub.php'>bcsub</a></td><td>scale is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.bzdecompress.php'>bzdecompress</a></td><td>The type of use_less_memory has been changed from
       int to bool. Previously, the default value was
       0.</td></tr><tr><td>&nbsp;</td><td><a href='function.bzwrite.php'>bzwrite</a></td><td>length is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.call-user-func-array.php'>call_user_func_array</a></td><td>args keys will now be interpreted as parameter names, instead of being silently ignored.</td></tr><tr><td>&nbsp;</td><td><a href='function.ceil.php'>ceil</a></td><td>num no longer accepts internal objects which support
       numeric conversion.</td></tr><tr><td>&nbsp;</td><td><a href='function.com-event-sink.php'>com_event_sink</a></td><td>sink_interface is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.com-get-active-object.php'>com_get_active_object</a></td><td>codepage is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.compact.php'>compact</a></td><td>If a given string references an unset variable, an E_WARNING level error is now issued.</td></tr><tr><td>&nbsp;</td><td><a href='function.constant.php'>constant</a></td><td>If the constant is not defined, constant now throws an
       Error exception; previously an E_WARNING
       was generated, and null was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.convert-cyr-string.php'>convert_cyr_string</a></td><td>Removed this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.convert-uuencode.php'>convert_uuencode</a></td><td>Prior to this version, trying to convert an empty string returned false
       for no particular reason.</td></tr><tr><td>&nbsp;</td><td><a href='function.count.php'>count</a></td><td>count will now throw TypeError on 
       invalid countable types passed to the value parameter.</td></tr><tr><td>&nbsp;</td><td><a href='function.count-chars.php'>count_chars</a></td><td>Prior to this version, the function returned false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.crypt.php'>crypt</a></td><td>The salt is no longer optional.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-close.php'>curl_close</a></td><td>handle expects a CurlHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-copy-handle.php'>curl_copy_handle</a></td><td>handle expects a CurlHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-copy-handle.php'>curl_copy_handle</a></td><td>On success, this function returns a CurlHandle instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-errno.php'>curl_errno</a></td><td>handle expects a CurlHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-error.php'>curl_error</a></td><td>handle expects a CurlHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-escape.php'>curl_escape</a></td><td>handle expects a CurlHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-exec.php'>curl_exec</a></td><td>handle expects a CurlHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-getinfo.php'>curl_getinfo</a></td><td>handle expects a CurlHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-getinfo.php'>curl_getinfo</a></td><td>option is nullable now;
        previously, the default was 0.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-init.php'>curl_init</a></td><td>On success, this function returns a CurlHandle instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-init.php'>curl_init</a></td><td>url is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-multi-add-handle.php'>curl_multi_add_handle</a></td><td>multi_handle expects a CurlMultiHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-multi-add-handle.php'>curl_multi_add_handle</a></td><td>handle expects a CurlHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-multi-close.php'>curl_multi_close</a></td><td>multi_handle expects a CurlMultiHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-multi-errno.php'>curl_multi_errno</a></td><td>The function no longer returns false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-multi-errno.php'>curl_multi_errno</a></td><td>multi_handle expects a CurlMultiHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-multi-exec.php'>curl_multi_exec</a></td><td>multi_handle expects a CurlMultiHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-multi-getcontent.php'>curl_multi_getcontent</a></td><td>handle expects a CurlHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-multi-info-read.php'>curl_multi_info_read</a></td><td>multi_handle expects a CurlMultiHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-multi-init.php'>curl_multi_init</a></td><td>On success, this function returns a CurlMultiHandle instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-multi-remove-handle.php'>curl_multi_remove_handle</a></td><td>multi_handle expects a CurlMultiHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-multi-remove-handle.php'>curl_multi_remove_handle</a></td><td>handle expects a CurlHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-multi-select.php'>curl_multi_select</a></td><td>multi_handle expects a CurlMultiHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-multi-setopt.php'>curl_multi_setopt</a></td><td>multi_handle expects a CurlMultiHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-pause.php'>curl_pause</a></td><td>handle expects a CurlHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-reset.php'>curl_reset</a></td><td>handle expects a CurlHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-setopt.php'>curl_setopt</a></td><td>handle expects a CurlHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-setopt-array.php'>curl_setopt_array</a></td><td>handle expects a CurlHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-share-close.php'>curl_share_close</a></td><td>share_handle expects a CurlShareHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-share-errno.php'>curl_share_errno</a></td><td>The function no longer returns false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-share-errno.php'>curl_share_errno</a></td><td>share_handle expects a CurlShareHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-share-init.php'>curl_share_init</a></td><td>This function returns a CurlShareHandle instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-share-setopt.php'>curl_share_setopt</a></td><td>share_handle expects a CurlShareHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-unescape.php'>curl_unescape</a></td><td>handle expects a CurlHandle
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-version.php'>curl_version</a></td><td>The optional age parameter has been removed.</td></tr><tr><td>&nbsp;</td><td><a href='function.date.php'>date</a></td><td>timestamp is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.date-sunrise.php'>date_sunrise</a></td><td>latitude, longitude,
        zenith and utcOffset are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.date-sunset.php'>date_sunset</a></td><td>latitude, longitude,
        zenith and utcOffset are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.define.php'>define</a></td><td>Passing true to case_insensitive now emits an E_WARNING. Passing false is still allowed.</td></tr><tr><td>&nbsp;</td><td><a href='function.deflate-add.php'>deflate_add</a></td><td>context expects a DeflateContext
       instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.deflate-init.php'>deflate_init</a></td><td>On success, this function returns a DeflateContext instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.dir.php'>dir</a></td><td>context is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.dom-import-simplexml.php'>dom_import_simplexml</a></td><td>This function no longer returns null on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.easter-date.php'>easter_date</a></td><td>year is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.easter-date.php'>easter_date</a></td><td>A ValueError is now thrown when
       year is outside the allowed range.
       Previously, an E_WARNING was raised
       and the function returned false.</td></tr><tr><td>&nbsp;</td><td><a href='function.easter-days.php'>easter_days</a></td><td>year is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-describe.php'>enchant_broker_describe</a></td><td>broker expects an EnchantBroker instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-describe.php'>enchant_broker_describe</a></td><td>Prior to this version, the function returned false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-dict-exists.php'>enchant_broker_dict_exists</a></td><td>broker expects an EnchantBroker instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-free.php'>enchant_broker_free</a></td><td>This function has been deprecated in favor of unsetting the object.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-free.php'>enchant_broker_free</a></td><td>broker expects an EnchantBroker instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-free-dict.php'>enchant_broker_free_dict</a></td><td>This function has been deprecated in favor of unsetting the object.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-free-dict.php'>enchant_broker_free_dict</a></td><td>dictionary expects a EnchantDictionary now;
       previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-get-dict-path.php'>enchant_broker_get_dict_path</a></td><td>This function has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-get-dict-path.php'>enchant_broker_get_dict_path</a></td><td>broker expects an EnchantBroker instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-get-error.php'>enchant_broker_get_error</a></td><td>broker expects an EnchantBroker instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-init.php'>enchant_broker_init</a></td><td>On success, this function returns an EnchantBroker instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-list-dicts.php'>enchant_broker_list_dicts</a></td><td>broker expects an EnchantBroker instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-list-dicts.php'>enchant_broker_list_dicts</a></td><td>Prior to this version, the function returned false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-request-dict.php'>enchant_broker_request_dict</a></td><td>broker expects an EnchantBroker instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-request-dict.php'>enchant_broker_request_dict</a></td><td>On success, this function returns an EnchantDictionary instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-request-pwl-dict.php'>enchant_broker_request_pwl_dict</a></td><td>broker expects an EnchantBroker instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-request-pwl-dict.php'>enchant_broker_request_pwl_dict</a></td><td>On success, this function returns an EnchantDictionary instance now;
       previoulsy, a resource was retured.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-set-dict-path.php'>enchant_broker_set_dict_path</a></td><td>This function has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-set-dict-path.php'>enchant_broker_set_dict_path</a></td><td>broker expects an EnchantBroker instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-broker-set-ordering.php'>enchant_broker_set_ordering</a></td><td>broker expects an EnchantBroker instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-dict-add.php'>enchant_dict_add</a></td><td>dictionary expects an EnchantDictionary instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-dict-add-to-session.php'>enchant_dict_add_to_session</a></td><td>dictionary expects an EnchantDictionary instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-dict-check.php'>enchant_dict_check</a></td><td>dictionary expects an EnchantDictionary instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-dict-describe.php'>enchant_dict_describe</a></td><td>dictionary expects an EnchantDictionary instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-dict-describe.php'>enchant_dict_describe</a></td><td>Prior to this version, the function returned false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-dict-get-error.php'>enchant_dict_get_error</a></td><td>dictionary expects an EnchantDictionary instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-dict-is-added.php'>enchant_dict_is_added</a></td><td>dictionary expects an EnchantDictionary instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-dict-quick-check.php'>enchant_dict_quick_check</a></td><td>dictionary expects an EnchantDictionary instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-dict-store-replacement.php'>enchant_dict_store_replacement</a></td><td>dictionary expects an EnchantDictionary instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.enchant-dict-suggest.php'>enchant_dict_suggest</a></td><td>dictionary expects an EnchantDictionary instance now;
  previoulsy, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.error-log.php'>error_log</a></td><td>destination and
       additional_headers are now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.error-reporting.php'>error_reporting</a></td><td>error_level is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.exec.php'>exec</a></td><td>If command is empty or contains null bytes,
       exec now throws a ValueError.
       Previously it emitted an E_WARNING and returned false.</td></tr><tr><td>&nbsp;</td><td><a href='function.exif-read-data.php'>exif_read_data</a></td><td>required_sections is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.explode.php'>explode</a></td><td>explode will now throw ValueError
       when separator parameter is given an empty string
       (&quot;&quot;).
       Previously, explode returned false instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.ezmlm-hash.php'>ezmlm_hash</a></td><td>Removed this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.fgetcsv.php'>fgetcsv</a></td><td>length is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.file-get-contents.php'>file_get_contents</a></td><td>length is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.finfo-buffer.php'>finfo_buffer</a></td><td>context is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.finfo-file.php'>finfo_file</a></td><td>context is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.floatval.php'>floatval</a></td><td>The error level when converting from object was changed from E_NOTICE to E_WARNING.</td></tr><tr><td>&nbsp;</td><td><a href='function.floor.php'>floor</a></td><td>num no longer accepts internal objects which support
       numeric conversion.</td></tr><tr><td>&nbsp;</td><td><a href='function.fprintf.php'>fprintf</a></td><td>This function no longer returns false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.fprintf.php'>fprintf</a></td><td>Throw a ValueError if the number of arguments is zero;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.fprintf.php'>fprintf</a></td><td>Throw a ValueError if [width] is less than zero or bigger than PHP_INT_MAX;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.fprintf.php'>fprintf</a></td><td>Throw a ValueError if [precision] is less than zero or bigger than PHP_INT_MAX;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.fprintf.php'>fprintf</a></td><td>Throw a ArgumentCountError when less arguments are given than required;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.fsockopen.php'>fsockopen</a></td><td>timeout is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.fwrite.php'>fwrite</a></td><td>length is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.get-called-class.php'>get_called_class</a></td><td>Calling this function from outside a class,
        will now throw an Error.
        Previously, an E_WARNING was raised
        and the function returned false.</td></tr><tr><td>&nbsp;</td><td><a href='function.get-class.php'>get_class</a></td><td>Calling this function from outside a class, without any arguments,
        will now throw an Error.
        Previously, an E_WARNING was raised
        and the function returned false.</td></tr><tr><td>&nbsp;</td><td><a href='function.get-class-methods.php'>get_class_methods</a></td><td>The object_or_class parameter now only accepts objects or valid class names.</td></tr><tr><td>&nbsp;</td><td><a href='function.get-defined-functions.php'>get_defined_functions</a></td><td>The default value of the exclude_disabled parameter
       has been changed from false to true.</td></tr><tr><td>&nbsp;</td><td><a href='function.get-headers.php'>get_headers</a></td><td>The associative has been changed from int to bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.get-magic-quotes-gpc.php'>get_magic_quotes_gpc</a></td><td>Removed this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.get-magic-quotes-runtime.php'>get_magic_quotes_runtime</a></td><td>Removed this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.get-parent-class.php'>get_parent_class</a></td><td>The object_or_class parameter now only accepts objects or valid class names.</td></tr><tr><td>&nbsp;</td><td><a href='function.get-resources.php'>get_resources</a></td><td>type is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.getdate.php'>getdate</a></td><td>timestamp is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.getenv.php'>getenv</a></td><td>The name is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.gmdate.php'>gmdate</a></td><td>timestamp is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.gmmktime.php'>gmmktime</a></td><td>hour is no longer optional. If you need a Unix
        timestamp, use time.</td></tr><tr><td>&nbsp;</td><td><a href='function.gmmktime.php'>gmmktime</a></td><td>minute, second, month,
        day and year are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.gmp-binomial.php'>gmp_binomial</a></td><td>This function no longer returns false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.gmp-export.php'>gmp_export</a></td><td>This function no longer returns false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.gmp-import.php'>gmp_import</a></td><td>This function no longer returns false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.gmp-random-seed.php'>gmp_random_seed</a></td><td>If seed is invalid, gmp_random_seed
       now throws a ValueError.
       Previously it emitted an E_WARNING and returned false.</td></tr><tr><td>&nbsp;</td><td><a href='function.gmstrftime.php'>gmstrftime</a></td><td>timestamp is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.grapheme-substr.php'>grapheme_substr</a></td><td>The function now consistently clamps out-of-bounds offsets to the string boundary.
       Previously, false was returned instead of the empty string in some cases.</td></tr><tr><td>&nbsp;</td><td><a href='function.gzgets.php'>gzgets</a></td><td>length is nullable now;
       previously, the default was 1024.</td></tr><tr><td>&nbsp;</td><td><a href='function.gzwrite.php'>gzwrite</a></td><td>length is nullable now; previously, the default was
       0.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash.php'>hash</a></td><td>hash now throws a ValueError exception
        if algo is unknown; previously, false was returned instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-hkdf.php'>hash_hkdf</a></td><td>Now throws a ValueError exception on error.
        Previously, false was returned and an E_WARNING
        message was emitted.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-hmac.php'>hash_hmac</a></td><td>Now throws a ValueError exception if
        algo is unknown or is a
        non-cryptographic hash function; previously, false was returned instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-hmac-file.php'>hash_hmac_file</a></td><td>Now throws a ValueError exception if
        algo is unknown or is a non-cryptographic hash
        function; previously, false was returned instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-init.php'>hash_init</a></td><td>Now throws an ValueError exception if the
        algo is unknown or is a non-cryptographic hash
        function, or if key is empty. Previously,
        false was returned and an E_WARNING message was
        emitted.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-pbkdf2.php'>hash_pbkdf2</a></td><td>Now throws a ValueError exception on error.
        Previously, false was returned and an E_WARNING
        message was emitted.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-update-file.php'>hash_update_file</a></td><td>stream_context is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.header-remove.php'>header_remove</a></td><td>name is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.hebrevc.php'>hebrevc</a></td><td>Removed this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.html-entity-decode.php'>html_entity_decode</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.htmlentities.php'>htmlentities</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.http-build-query.php'>http_build_query</a></td><td>arg_separator is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.iconv-mime-decode.php'>iconv_mime_decode</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.iconv-mime-decode-headers.php'>iconv_mime_decode_headers</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.iconv-strlen.php'>iconv_strlen</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.iconv-strpos.php'>iconv_strpos</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.iconv-strrpos.php'>iconv_strrpos</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.iconv-substr.php'>iconv_substr</a></td><td>length and encoding are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.idate.php'>idate</a></td><td>timestamp is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.ignore-user-abort.php'>ignore_user_abort</a></td><td>enable is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.imageaffine.php'>imageaffine</a></td><td>clip is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.imageaffine.php'>imageaffine</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagealphablending.php'>imagealphablending</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imageantialias.php'>imageantialias</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagearc.php'>imagearc</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagebmp.php'>imagebmp</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagebmp.php'>imagebmp</a></td><td>The type of compressed is bool now; formerly it was int.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagechar.php'>imagechar</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecharup.php'>imagecharup</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecolorallocate.php'>imagecolorallocate</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecolorallocatealpha.php'>imagecolorallocatealpha</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecolorat.php'>imagecolorat</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecolorclosest.php'>imagecolorclosest</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecolorclosesthwb.php'>imagecolorclosesthwb</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecolordeallocate.php'>imagecolordeallocate</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecolorexact.php'>imagecolorexact</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecolorexactalpha.php'>imagecolorexactalpha</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecolormatch.php'>imagecolormatch</a></td><td>image1 and image2 expect
       GdImage instances now; previously, resources
       were expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecolorresolve.php'>imagecolorresolve</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecolorresolvealpha.php'>imagecolorresolvealpha</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecolorset.php'>imagecolorset</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecolorsforindex.php'>imagecolorsforindex</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecolorsforindex.php'>imagecolorsforindex</a></td><td>imagecolorsforindex now throws a ValueError exception
       if color is out of range; previously, false was returned instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecolorstotal.php'>imagecolorstotal</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecolortransparent.php'>imagecolortransparent</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecolortransparent.php'>imagecolortransparent</a></td><td>color is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.imageconvolution.php'>imageconvolution</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecopy.php'>imagecopy</a></td><td>dst_image and src_image expect
       GdImage instances now; previously, resources
       were expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecopymerge.php'>imagecopymerge</a></td><td>dst_image and src_image expect
       GdImage instances now; previously, resources
       were expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecopymergegray.php'>imagecopymergegray</a></td><td>dst_image and src_image expect
       GdImage instances now; previously, resources
       were expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecopyresampled.php'>imagecopyresampled</a></td><td>dst_image and src_image expect
       GdImage instances now; previously, resources
       were expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecopyresized.php'>imagecopyresized</a></td><td>dst_image and src_image expect
       GdImage instances now; previously, resources
       were expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecreate.php'>imagecreate</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecreatefrombmp.php'>imagecreatefrombmp</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecreatefromgd.php'>imagecreatefromgd</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecreatefromgd2.php'>imagecreatefromgd2</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecreatefromgd2part.php'>imagecreatefromgd2part</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecreatefromgif.php'>imagecreatefromgif</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecreatefromjpeg.php'>imagecreatefromjpeg</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecreatefrompng.php'>imagecreatefrompng</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecreatefromstring.php'>imagecreatefromstring</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecreatefromtga.php'>imagecreatefromtga</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecreatefromwbmp.php'>imagecreatefromwbmp</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecreatefromwebp.php'>imagecreatefromwebp</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecreatefromxbm.php'>imagecreatefromxbm</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecreatefromxpm.php'>imagecreatefromxpm</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecreatetruecolor.php'>imagecreatetruecolor</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecrop.php'>imagecrop</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecrop.php'>imagecrop</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecropauto.php'>imagecropauto</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecropauto.php'>imagecropauto</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagedashedline.php'>imagedashedline</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagedestroy.php'>imagedestroy</a></td><td>This function is a NOP now.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagedestroy.php'>imagedestroy</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imageellipse.php'>imageellipse</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagefill.php'>imagefill</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagefilledarc.php'>imagefilledarc</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagefilledellipse.php'>imagefilledellipse</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagefilledpolygon.php'>imagefilledpolygon</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagefilledrectangle.php'>imagefilledrectangle</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagefilltoborder.php'>imagefilltoborder</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagefilter.php'>imagefilter</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imageflip.php'>imageflip</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagefttext.php'>imagefttext</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagegammacorrect.php'>imagegammacorrect</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagegd.php'>imagegd</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagegd2.php'>imagegd2</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagegetclip.php'>imagegetclip</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagegetinterpolation.php'>imagegetinterpolation</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagegif.php'>imagegif</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagegrabscreen.php'>imagegrabscreen</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagegrabwindow.php'>imagegrabwindow</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagegrabwindow.php'>imagegrabwindow</a></td><td>client_area expects a bool now;
       previously it expected an int.</td></tr><tr><td>&nbsp;</td><td><a href='function.imageinterlace.php'>imageinterlace</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imageinterlace.php'>imageinterlace</a></td><td>enable expects a bool now;
       previously it expected an int.</td></tr><tr><td>&nbsp;</td><td><a href='function.imageistruecolor.php'>imageistruecolor</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagejpeg.php'>imagejpeg</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagelayereffect.php'>imagelayereffect</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imageline.php'>imageline</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imageopenpolygon.php'>imageopenpolygon</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagepalettecopy.php'>imagepalettecopy</a></td><td>dst and src expect
       GdImage instances now; previously, resources
       were expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagepalettetotruecolor.php'>imagepalettetotruecolor</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagepng.php'>imagepng</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagepolygon.php'>imagepolygon</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagerectangle.php'>imagerectangle</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imageresolution.php'>imageresolution</a></td><td>resolution_x and resolution_y are now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagerotate.php'>imagerotate</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagerotate.php'>imagerotate</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagerotate.php'>imagerotate</a></td><td>The unused ignore_transparent expects a bool now;
       previously it expected an int.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagesavealpha.php'>imagesavealpha</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagescale.php'>imagescale</a></td><td>On success, this function returns a GDImage instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagescale.php'>imagescale</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagesetbrush.php'>imagesetbrush</a></td><td>image and brush expect
       GdImage instances now; previously, resources
       were expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagesetclip.php'>imagesetclip</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagesetinterpolation.php'>imagesetinterpolation</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagesetpixel.php'>imagesetpixel</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagesetthickness.php'>imagesetthickness</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagesettile.php'>imagesettile</a></td><td>image and tile expect
       GdImage instances now; previously, resources
       were expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagestring.php'>imagestring</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagestringup.php'>imagestringup</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagesx.php'>imagesx</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagesy.php'>imagesy</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagetruecolortopalette.php'>imagetruecolortopalette</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagettfbbox.php'>imagettfbbox</a></td><td>The options has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagettftext.php'>imagettftext</a></td><td>The options has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagewbmp.php'>imagewbmp</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagewbmp.php'>imagewbmp</a></td><td>foreground_color is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagewebp.php'>imagewebp</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagexbm.php'>imagexbm</a></td><td>image expects a GdImage
  instance now; previously, a valid gd resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagexbm.php'>imagexbm</a></td><td>foreground_color is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagexbm.php'>imagexbm</a></td><td>The fourth parameter, which was unused, has been removed.</td></tr><tr><td>&nbsp;</td><td><a href='function.implode.php'>implode</a></td><td>Passing the separator after the array
       is no longer supported.</td></tr><tr><td>&nbsp;</td><td><a href='function.inflate-add.php'>inflate_add</a></td><td>context expects an InflateContext
       instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.inflate-get-read-len.php'>inflate_get_read_len</a></td><td>context expects an InflateContext
       instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.inflate-get-status.php'>inflate_get_status</a></td><td>context expects an InflateContext
       instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.inflate-init.php'>inflate_init</a></td><td>On success, this function returns an InflateContext instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.intval.php'>intval</a></td><td>The error level when converting from object was changed from E_NOTICE to E_WARNING.</td></tr><tr><td>&nbsp;</td><td><a href='function.is-numeric.php'>is_numeric</a></td><td>Numeric strings ending with whitespace (&quot;42 &quot;) will now
       return true. Previously, false was returned instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.jdtounix.php'>jdtounix</a></td><td>This function no longer returns false on failure, but raises a
       ValueError instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-add.php'>ldap_add</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-add-ext.php'>ldap_add_ext</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-bind-ext.php'>ldap_bind_ext</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-compare.php'>ldap_compare</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-control-paged-result.php'>ldap_control_paged_result</a></td><td>This function has been removed.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-control-paged-result-response.php'>ldap_control_paged_result_response</a></td><td>This function has been removed.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-delete.php'>ldap_delete</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-delete-ext.php'>ldap_delete_ext</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-exop-passwd.php'>ldap_exop_passwd</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-first-attribute.php'>ldap_first_attribute</a></td><td>The unused third parameter ber_identifier is no longer accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-list.php'>ldap_list</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod-add.php'>ldap_mod_add</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod-del.php'>ldap_mod_del</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod-replace.php'>ldap_mod_replace</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-modify-batch.php'>ldap_modify_batch</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod_add-ext.php'>ldap_mod_add_ext</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod_del-ext.php'>ldap_mod_del_ext</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod_replace-ext.php'>ldap_mod_replace_ext</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-next-attribute.php'>ldap_next_attribute</a></td><td>The unused third parameter ber_identifier is no longer accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-read.php'>ldap_read</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-rename.php'>ldap_rename</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-rename-ext.php'>ldap_rename_ext</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-sasl-bind.php'>ldap_sasl_bind</a></td><td>dn, password, mech,
       realm, authc_id, authz_id
       and props are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-search.php'>ldap_search</a></td><td>controls is nullable now; previously, it defaulted to [].</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-set-rebind-proc.php'>ldap_set_rebind_proc</a></td><td>callback is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-sort.php'>ldap_sort</a></td><td>This function has been removed.</td></tr><tr><td>&nbsp;</td><td><a href='function.levenshtein.php'>levenshtein</a></td><td>Prior to this version, levenshtein had to be called
       with either two or five arguments.</td></tr><tr><td>&nbsp;</td><td><a href='function.levenshtein.php'>levenshtein</a></td><td>Prior to this version, levenshtein would return -1
       if one of the argument strings is longer than 255 characters.</td></tr><tr><td>&nbsp;</td><td><a href='function.libxml-disable-entity-loader.php'>libxml_disable_entity_loader</a></td><td>This function has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.libxml-use-internal-errors.php'>libxml_use_internal_errors</a></td><td>use_errors is nullable now. Previously, its default
       was false.</td></tr><tr><td>&nbsp;</td><td><a href='function.localtime.php'>localtime</a></td><td>timestamp is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.max.php'>max</a></td><td>max throws a ValueError on failure now;
       previously, false was returned and an E_WARNING error was emitted.</td></tr><tr><td>&nbsp;</td><td><a href='function.max.php'>max</a></td><td>As 
       string to number comparisons were changed,
       max no longer returns a
       different value based on the argument order in those cases.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-check-encoding.php'>mb_check_encoding</a></td><td>value and encoding are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-chr.php'>mb_chr</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-convert-encoding.php'>mb_convert_encoding</a></td><td>mb_convert_encoding will now throw a
       ValueError when
       to_encoding is passed an invalid encoding.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-convert-encoding.php'>mb_convert_encoding</a></td><td>mb_convert_encoding will now throw a
       ValueError when
       from_encoding is passed an invalid encoding.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-convert-encoding.php'>mb_convert_encoding</a></td><td>from_encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-convert-kana.php'>mb_convert_kana</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-decode-numericentity.php'>mb_decode_numericentity</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-detect-order.php'>mb_detect_order</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-encode-mimeheader.php'>mb_encode_mimeheader</a></td><td>charset and transfer_encoding
       are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-encode-numericentity.php'>mb_encode_numericentity</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-encoding-aliases.php'>mb_encoding_aliases</a></td><td>If the encoding is unknown, a ValueError
       is now thrown; previously an E_WARNING was emitted,
       and the function returned false.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-ereg.php'>mb_ereg</a></td><td>This function returns true on success now. Previously, it returned the byte length
       of the matched string if a match for pattern was found in
       string and matches was passed.
       If the optional parameter matches was not passed or
       the length of the matched string was 0, this function returned 1.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-ereg-match.php'>mb_ereg_match</a></td><td>options is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-ereg-replace.php'>mb_ereg_replace</a></td><td>options is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-ereg-replace-callback.php'>mb_ereg_replace_callback</a></td><td>options is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-ereg-search.php'>mb_ereg_search</a></td><td>pattern and options are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-ereg-search-init.php'>mb_ereg_search_init</a></td><td>pattern and options are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-ereg-search-pos.php'>mb_ereg_search_pos</a></td><td>pattern and options are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-ereg-search-regs.php'>mb_ereg_search_regs</a></td><td>pattern and options are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-eregi.php'>mb_eregi</a></td><td>This function returns true on success now. Previously, it returned the byte length
       of the matched string if a match for pattern was found in
       string and matches was passed.
       If the optional parameter matches was not passed or
       the length of the matched string was 0, this function returned 1.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-eregi-replace.php'>mb_eregi_replace</a></td><td>options is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-get-info.php'>mb_get_info</a></td><td>The types &quot;func_overload&quot;
       and &quot;func_overload_list&quot; are no longer supported.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-http-input.php'>mb_http_input</a></td><td>type is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-http-output.php'>mb_http_output</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-internal-encoding.php'>mb_internal_encoding</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-internal-encoding.php'>mb_internal_encoding</a></td><td>Now throws a ValueError if
       encoding is an invalid encoding.
       Previously a E_WARNING was emitted instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-language.php'>mb_language</a></td><td>language is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-ord.php'>mb_ord</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-parse-str.php'>mb_parse_str</a></td><td>The second parameter was no longer optional.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-regex-encoding.php'>mb_regex_encoding</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-regex-set-options.php'>mb_regex_set_options</a></td><td>If the parameter options is given and not null, the previous
       options are returned. Formerly, the current options have been returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-regex-set-options.php'>mb_regex_set_options</a></td><td>options is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-regex-set-options.php'>mb_regex_set_options</a></td><td>The &quot;e&quot; option now throws a ValueError.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-scrub.php'>mb_scrub</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-send-mail.php'>mb_send_mail</a></td><td>additional_params is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-str-split.php'>mb_str_split</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-str-split.php'>mb_str_split</a></td><td>This function no longer returns false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strcut.php'>mb_strcut</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strimwidth.php'>mb_strimwidth</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-stripos.php'>mb_stripos</a></td><td>needle now accepts an empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-stripos.php'>mb_stripos</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-stristr.php'>mb_stristr</a></td><td>needle now accepts an empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-stristr.php'>mb_stristr</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strlen.php'>mb_strlen</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strpos.php'>mb_strpos</a></td><td>needle now accepts an empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strpos.php'>mb_strpos</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strrchr.php'>mb_strrchr</a></td><td>needle now accepts an empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strrchr.php'>mb_strrchr</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strrichr.php'>mb_strrichr</a></td><td>needle now accepts an empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strrichr.php'>mb_strrichr</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strripos.php'>mb_strripos</a></td><td>needle now accepts an empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strripos.php'>mb_strripos</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strrpos.php'>mb_strrpos</a></td><td>needle now accepts an empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strrpos.php'>mb_strrpos</a></td><td>Passing the encoding as the third argument 
       instead of an offset has been removed.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strrpos.php'>mb_strrpos</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strstr.php'>mb_strstr</a></td><td>needle now accepts an empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strstr.php'>mb_strstr</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strwidth.php'>mb_strwidth</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-substitute-character.php'>mb_substitute_character</a></td><td>Passing an empty string to substitute_character
       is no longer supported; &quot;none&quot; should be passed instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-substitute-character.php'>mb_substitute_character</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-substr.php'>mb_substr</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-substr-count.php'>mb_substr_count</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.metaphone.php'>metaphone</a></td><td>The function returned false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.mhash.php'>mhash</a></td><td>key is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.min.php'>min</a></td><td>min throws a ValueError on failure now;
       previously, false was returned and an E_WARNING error was emitted.</td></tr><tr><td>&nbsp;</td><td><a href='function.min.php'>min</a></td><td>As 
       string to number comparisons were changed,
       min no longer returns a
       different value based on the argument order in those cases.</td></tr><tr><td>&nbsp;</td><td><a href='function.mktime.php'>mktime</a></td><td>hour is no longer optional. If you need a Unix
        timestamp, use time.</td></tr><tr><td>&nbsp;</td><td><a href='function.mktime.php'>mktime</a></td><td>minute, second, month,
        day and year are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.money-format.php'>money_format</a></td><td>Removed this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.msg-get-queue.php'>msg_get_queue</a></td><td>On success, this function returns a SysvMessageQueue instance now;
        previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.msg-receive.php'>msg_receive</a></td><td>queue expects a SysvMessageQueue
        instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.msg-remove-queue.php'>msg_remove_queue</a></td><td>queue expects a SysvMessageQueue
        instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.msg-send.php'>msg_send</a></td><td>queue expects a SysvMessageQueue
        instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.msg-set-queue.php'>msg_set_queue</a></td><td>queue expects a SysvMessageQueue
        instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.msg-stat-queue.php'>msg_stat_queue</a></td><td>queue expects a SysvMessageQueue
        instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.mt-rand.php'>mt_rand</a></td><td>A ValueError will be thrown if max is less than min;
       previously an E_WARNING was raised, and the function returned false.</td></tr><tr><td>&nbsp;</td><td><a href='function.number-format.php'>number_format</a></td><td>Prior to this version, number_format accepted
        one, two, or four parameters (but not three).</td></tr><tr><td>&nbsp;</td><td><a href='function.ob-implicit-flush.php'>ob_implicit_flush</a></td><td>The enable expects a bool value now;
       previously, an int was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-columns.php'>odbc_columns</a></td><td>schema, table and column
       are now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-error.php'>odbc_error</a></td><td>odbc is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-errormsg.php'>odbc_errormsg</a></td><td>odbc is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-exec.php'>odbc_exec</a></td><td>flags was removed.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-execute.php'>odbc_execute</a></td><td>The unused flags parameter was removed.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-fetch-row.php'>odbc_fetch_row</a></td><td>row is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-procedurecolumns.php'>odbc_procedurecolumns</a></td><td>Prior to this version, the function could only be called with either one
       or five arguments.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-procedures.php'>odbc_procedures</a></td><td>Prior to this version, the function could only be called with either one
       or four arguments.</td></tr><tr><td>&nbsp;</td><td><a href='function.odbc-tables.php'>odbc_tables</a></td><td>schema, table and types
       are now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.opendir.php'>opendir</a></td><td>context is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-csr-export.php'>openssl_csr_export</a></td><td>csr accepts an OpenSSLCertificateSigningRequest instance now;
       previously, a resource of type OpenSSL X.509 CSR was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-csr-export-to-file.php'>openssl_csr_export_to_file</a></td><td>csr accepts an OpenSSLCertificateSigningRequest instance now;
       previously, a resource of type OpenSSL X.509 CSR was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-csr-get-public-key.php'>openssl_csr_get_public_key</a></td><td>On success, this function returns an OpenSSLAsymmetricKey instance now;
       previously, a resource of type OpenSSL key was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-csr-get-public-key.php'>openssl_csr_get_public_key</a></td><td>csr accepts an OpenSSLCertificateSigningRequest instance now;
       previously, a resource of type OpenSSL X.509 CSR was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-csr-get-subject.php'>openssl_csr_get_subject</a></td><td>csr accepts an OpenSSLCertificateSigningRequest instance now;
       previously, a resource of type OpenSSL X.509 CSR was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-csr-new.php'>openssl_csr_new</a></td><td>On success, this function returns an OpenSSLCertificateSigningRequest instance now;
       previously, a resource of type OpenSSL X.509 CSR was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-csr-new.php'>openssl_csr_new</a></td><td>private_key accepts an OpenSSLAsymmetricKey instance now;
       previously, a resource of type OpenSSL key was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-csr-sign.php'>openssl_csr_sign</a></td><td>On success, this function returns an OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL X.509 was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-csr-sign.php'>openssl_csr_sign</a></td><td>csr accepts an OpenSSLCertificateSigningRequest instance now;
       previously, a resource of type OpenSSL X.509 CSR was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-csr-sign.php'>openssl_csr_sign</a></td><td>ca_certificate accepts an OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL X.509 was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-csr-sign.php'>openssl_csr_sign</a></td><td>private_key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-dh-compute-key.php'>openssl_dh_compute_key</a></td><td>private_key accepts an OpenSSLAsymmetricKey now;
       previously, a resource of type OpenSSL key was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-free-key.php'>openssl_free_key</a></td><td>This function is now deprecated as it doesn't have an effect anymore.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-free-key.php'>openssl_free_key</a></td><td>key accepts an OpenSSLAsymmetricKey now;
       previously, a resource of type OpenSSL key was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-open.php'>openssl_open</a></td><td>private_key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509 CSR
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-open.php'>openssl_open</a></td><td>cipher_algo is no longer an optional parameter.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkcs7-decrypt.php'>openssl_pkcs7_decrypt</a></td><td>private_key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509 CSR
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkcs7-encrypt.php'>openssl_pkcs7_encrypt</a></td><td>certificate accepts an OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL X.509 CSR was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkcs7-sign.php'>openssl_pkcs7_sign</a></td><td>certificate accepts an OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL X.509 CSR was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkcs7-sign.php'>openssl_pkcs7_sign</a></td><td>private_key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509 CSR
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkcs7-verify.php'>openssl_pkcs7_verify</a></td><td>signers_certificates_filename, untrusted_certificates_filename,
       content and output_filename are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkcs12-export.php'>openssl_pkcs12_export</a></td><td>certificate accepts an OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL X.509 CSR was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkcs12-export.php'>openssl_pkcs12_export</a></td><td>private_key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkcs12-export-to-file.php'>openssl_pkcs12_export_to_file</a></td><td>certificate accepts an OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL X.509 CSR was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkcs12-export-to-file.php'>openssl_pkcs12_export_to_file</a></td><td>private_key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkey-export.php'>openssl_pkey_export</a></td><td>key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkey-export-to-file.php'>openssl_pkey_export_to_file</a></td><td>key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkey-free.php'>openssl_pkey_free</a></td><td>This function is now deprecated as it doesn't have an effect anymore.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkey-free.php'>openssl_pkey_free</a></td><td>key accepts an OpenSSLAsymmetricKey now;
       previously, a resource of type OpenSSL key was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkey-get-details.php'>openssl_pkey_get_details</a></td><td>key accepts an OpenSSLAsymmetricKey now;
       previously, a resource of type OpenSSL key was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkey-get-private.php'>openssl_pkey_get_private</a></td><td>On success, this function returns an OpenSSLAsymmetricKey instance now;
       previously, a resource of type OpenSSL key was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkey-get-private.php'>openssl_pkey_get_private</a></td><td>private_key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkey-get-private.php'>openssl_pkey_get_private</a></td><td>passphrase is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkey-get-public.php'>openssl_pkey_get_public</a></td><td>On success, this function returns an OpenSSLAsymmetricKey instance now;
       previously, a resource of type OpenSSL key was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkey-get-public.php'>openssl_pkey_get_public</a></td><td>public_key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkey-new.php'>openssl_pkey_new</a></td><td>On success, this function returns an OpenSSLAsymmetricKey instance now;
       previously, a resource of type OpenSSL key was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-private-decrypt.php'>openssl_private_decrypt</a></td><td>private_key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-private-encrypt.php'>openssl_private_encrypt</a></td><td>private_key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-public-decrypt.php'>openssl_public_decrypt</a></td><td>public_key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-public-encrypt.php'>openssl_public_encrypt</a></td><td>public_key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-random-pseudo-bytes.php'>openssl_random_pseudo_bytes</a></td><td>strong_result is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-seal.php'>openssl_seal</a></td><td>public_key accepts an array of
       OpenSSLAsymmetricKey instances now;
       previously, an array of resources of type OpenSSL key
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-seal.php'>openssl_seal</a></td><td>cipher_algo is no longer an optional parameter.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-seal.php'>openssl_seal</a></td><td>iv is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-sign.php'>openssl_sign</a></td><td>private_key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-spki-new.php'>openssl_spki_new</a></td><td>private_key accepts an OpenSSLAsymmetricKey instance now;
       previously, a resource of type OpenSSL key was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-verify.php'>openssl_verify</a></td><td>public_key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-x509-check-private-key.php'>openssl_x509_check_private_key</a></td><td>certificate accepts an OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL X.509 was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-x509-check-private-key.php'>openssl_x509_check_private_key</a></td><td>private_key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-x509-checkpurpose.php'>openssl_x509_checkpurpose</a></td><td>certificate accepts an OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL X.509 was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-x509-checkpurpose.php'>openssl_x509_checkpurpose</a></td><td>untrusted_certificates_file is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-x509-export.php'>openssl_x509_export</a></td><td>certificate accepts an OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL X.509 was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-x509-export-to-file.php'>openssl_x509_export_to_file</a></td><td>certificate accepts an OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL X.509 was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-x509-fingerprint.php'>openssl_x509_fingerprint</a></td><td>certificate accepts an OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL X.509 was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-x509-free.php'>openssl_x509_free</a></td><td>This function is now deprecated as it doesn't have an effect anymore.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-x509-free.php'>openssl_x509_free</a></td><td>certificate accepts an OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL X.509 was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-x509-parse.php'>openssl_x509_parse</a></td><td>certificate accepts an OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL X.509 was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-x509-read.php'>openssl_x509_read</a></td><td>On success, this function returns an OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL X.509 was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-x509-read.php'>openssl_x509_read</a></td><td>certificate accepts an OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL X.509 was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-x509-verify.php'>openssl_x509_verify</a></td><td>certificate accepts an OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL X.509 was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-x509-verify.php'>openssl_x509_verify</a></td><td>public_key accepts an OpenSSLAsymmetricKey
       or OpenSSLCertificate instance now;
       previously, a resource of type OpenSSL key or OpenSSL X.509
       was accepted.</td></tr><tr><td>&nbsp;</td><td><a href='function.pack.php'>pack</a></td><td>This function no longer returns false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.parse-str.php'>parse_str</a></td><td>result is no longer optional.</td></tr><tr><td>&nbsp;</td><td><a href='function.parse-url.php'>parse_url</a></td><td>parse_url will now distinguish absent and empty queries
       and fragments.</td></tr><tr><td>&nbsp;</td><td><a href='function.passthru.php'>passthru</a></td><td>If command is empty or contains null bytes,
       passthru now throws a ValueError.
       Previously it emitted an E_WARNING and returned false.</td></tr><tr><td>&nbsp;</td><td><a href='function.password-hash.php'>password_hash</a></td><td>password_hash no longer returns false on failure, instead a
        ValueError will be thrown if the password hashing algorithm
        is not valid, or an Error if the password hashing failed
        for an unknown error.</td></tr><tr><td>&nbsp;</td><td><a href='function.password-hash.php'>password_hash</a></td><td>The algo parameter is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-async-signals.php'>pcntl_async_signals</a></td><td>enable is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-getpriority.php'>pcntl_getpriority</a></td><td>process_id is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-setpriority.php'>pcntl_setpriority</a></td><td>process_id is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.pfsockopen.php'>pfsockopen</a></td><td>timeout is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-client-encoding.php'>pg_client_encoding</a></td><td>connection is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-close.php'>pg_close</a></td><td>connection is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-dbname.php'>pg_dbname</a></td><td>connection is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-end-copy.php'>pg_end_copy</a></td><td>connection is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-fetch-all.php'>pg_fetch_all</a></td><td>pg_fetch_all will now return an empty array
        instead of false for result sets with zero rows.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-host.php'>pg_host</a></td><td>connection is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-last-error.php'>pg_last_error</a></td><td>connection is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-lo-write.php'>pg_lo_write</a></td><td>length is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-options.php'>pg_options</a></td><td>connection is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-ping.php'>pg_ping</a></td><td>connection is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-port.php'>pg_port</a></td><td>connection is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-trace.php'>pg_trace</a></td><td>connection is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-tty.php'>pg_tty</a></td><td>connection is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-untrace.php'>pg_untrace</a></td><td>connection is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-version.php'>pg_version</a></td><td>connection is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.phpversion.php'>phpversion</a></td><td>extension is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.printf.php'>printf</a></td><td>This function no longer returns false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.printf.php'>printf</a></td><td>Throw a ValueError if the number of arguments is zero;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.printf.php'>printf</a></td><td>Throw a ValueError if [width] is less than zero or bigger than PHP_INT_MAX;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.printf.php'>printf</a></td><td>Throw a ValueError if [precision] is less than zero or bigger than PHP_INT_MAX;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.printf.php'>printf</a></td><td>Throw a ArgumentCountError when less arguments are given than required;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.readdir.php'>readdir</a></td><td>dir_handle is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.readline-info.php'>readline_info</a></td><td>var_name and value are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.readline-read-history.php'>readline_read_history</a></td><td>filename is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.readline-write-history.php'>readline_write_history</a></td><td>filename is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.restore-include-path.php'>restore_include_path</a></td><td>Removed this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.rewinddir.php'>rewinddir</a></td><td>dir_handle is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.round.php'>round</a></td><td>num no longer accepts internal objects which support
       numeric conversion.</td></tr><tr><td>&nbsp;</td><td><a href='function.sapi-windows-vt100-support.php'>sapi_windows_vt100_support</a></td><td>enable is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.scandir.php'>scandir</a></td><td>context is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.sem-acquire.php'>sem_acquire</a></td><td>semaphore expects a SysvSemaphore
        instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.sem-get.php'>sem_get</a></td><td>On success, this function returns a SysvSemaphore instance now;
        previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.sem-get.php'>sem_get</a></td><td>The type of auto_release has been changed from
        int to bool.</td></tr><tr><td>&nbsp;</td><td><a href='function.sem-release.php'>sem_release</a></td><td>semaphore expects a SysvSemaphore
        instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.sem-remove.php'>sem_remove</a></td><td>semaphore expects a SysvSemaphore
        instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.session-cache-expire.php'>session_cache_expire</a></td><td>value is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.session-cache-limiter.php'>session_cache_limiter</a></td><td>value is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.session-id.php'>session_id</a></td><td>id is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.session-module-name.php'>session_module_name</a></td><td>module is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.session-name.php'>session_name</a></td><td>name is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.session-save-path.php'>session_save_path</a></td><td>path is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.session-set-cookie-params.php'>session_set_cookie_params</a></td><td>path, domain,
        secure and httponly are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.set-error-handler.php'>set_error_handler</a></td><td>errcontext was removed, and will no longer be passed to user callbacks.</td></tr><tr><td>&nbsp;</td><td><a href='function.shm-attach.php'>shm_attach</a></td><td>On success, this function returns an SysvSharedMemory instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.shm-attach.php'>shm_attach</a></td><td>size is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.shm-detach.php'>shm_detach</a></td><td>shm expects a SysvSharedMemory
        instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.shm-get-var.php'>shm_get_var</a></td><td>shm expects a SysvSharedMemory
        instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.shm-has-var.php'>shm_has_var</a></td><td>shm expects a SysvSharedMemory
        instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.shm-put-var.php'>shm_put_var</a></td><td>shm expects a SysvSharedMemory
        instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.shm-remove.php'>shm_remove</a></td><td>shm expects a SysvSharedMemory
        instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.shm-remove-var.php'>shm_remove_var</a></td><td>shm expects a SysvSharedMemory
        instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.shmop-close.php'>shmop_close</a></td><td>This function has been deprecated, as this function has no effect anymore.</td></tr><tr><td>&nbsp;</td><td><a href='function.shmop-close.php'>shmop_close</a></td><td>shmop expects a Shmop
       instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.shmop-delete.php'>shmop_delete</a></td><td>shmop expects a Shmop
       instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.shmop-open.php'>shmop_open</a></td><td>On success, this function returns an Shmop instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.shmop-open.php'>shmop_open</a></td><td>If mode is invalid, or size is less than or equal to zero,
       a ValueError is thrown; previously E_WARNING was emitted instead,
       and the function returned false.</td></tr><tr><td>&nbsp;</td><td><a href='function.shmop-read.php'>shmop_read</a></td><td>shmop expects a Shmop
       instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.shmop-read.php'>shmop_read</a></td><td>If offset or size are out of range,
       a ValueError is thrown; previously E_WARNING
       was emitted, and false was returned,</td></tr><tr><td>&nbsp;</td><td><a href='function.shmop-size.php'>shmop_size</a></td><td>shmop expects a Shmop
       instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.shmop-write.php'>shmop_write</a></td><td>Prior to PHP 8.0.0, false was returned on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.shmop-write.php'>shmop_write</a></td><td>shmop expects a Shmop
       instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.sleep.php'>sleep</a></td><td>The function throws a ValueError on negative seconds;
       previously, an E_WARNING was raised instead, and the function returned false.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-accept.php'>socket_accept</a></td><td>On success, this function returns a Socket instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-addrinfo-bind.php'>socket_addrinfo_bind</a></td><td>On success, this function returns a Socket instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-addrinfo-bind.php'>socket_addrinfo_bind</a></td><td>address is an AddressInfo instance now;
  previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-addrinfo-connect.php'>socket_addrinfo_connect</a></td><td>On success, this function returns a Socket instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-addrinfo-connect.php'>socket_addrinfo_connect</a></td><td>address is an AddressInfo instance now;
  previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-addrinfo-explain.php'>socket_addrinfo_explain</a></td><td>address is an AddressInfo instance now;
  previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-addrinfo-lookup.php'>socket_addrinfo_lookup</a></td><td>On success, this function returns a array of AddressInfo instances now;
       previously, an array of resources was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-addrinfo-lookup.php'>socket_addrinfo_lookup</a></td><td>service is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-bind.php'>socket_bind</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-clear-error.php'>socket_clear_error</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-clear-error.php'>socket_clear_error</a></td><td>socket is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-close.php'>socket_close</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-connect.php'>socket_connect</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-connect.php'>socket_connect</a></td><td>port is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-create.php'>socket_create</a></td><td>On success, this function returns a Socket instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-create-listen.php'>socket_create_listen</a></td><td>On success, this function returns a Socket instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-create-pair.php'>socket_create_pair</a></td><td>pair is a reference to an array of Socket instances now;
       previously, it was a reference to an array of resources.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-export-stream.php'>socket_export_stream</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-get-option.php'>socket_get_option</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-getpeername.php'>socket_getpeername</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-getsockname.php'>socket_getsockname</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-import-stream.php'>socket_import_stream</a></td><td>On success, this function returns a Socket instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-last-error.php'>socket_last_error</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-last-error.php'>socket_last_error</a></td><td>socket is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-listen.php'>socket_listen</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-read.php'>socket_read</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-recv.php'>socket_recv</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-recvfrom.php'>socket_recvfrom</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-recvmsg.php'>socket_recvmsg</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-send.php'>socket_send</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-sendmsg.php'>socket_sendmsg</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-sendto.php'>socket_sendto</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-sendto.php'>socket_sendto</a></td><td>port is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-set-block.php'>socket_set_block</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-set-nonblock.php'>socket_set_nonblock</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-set-option.php'>socket_set_option</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-shutdown.php'>socket_shutdown</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-write.php'>socket_write</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-write.php'>socket_write</a></td><td>length is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-wsaprotocol-info-export.php'>socket_wsaprotocol_info_export</a></td><td>socket is a Socket instance now;
   previously, it was a resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.socket-wsaprotocol-info-import.php'>socket_wsaprotocol_info_import</a></td><td>On success, this function returns a Socket instance now;
       previously, a resource was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.soundex.php'>soundex</a></td><td>Prior to this version, calling the function with an empty string returned false
       for no particular reason.</td></tr><tr><td>&nbsp;</td><td><a href='function.spl-autoload.php'>spl_autoload</a></td><td>file_extensions is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.spl-autoload-extensions.php'>spl_autoload_extensions</a></td><td>file_extensions is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.spl-autoload-functions.php'>spl_autoload_functions</a></td><td>Return value was updated to always be an array; previously this function returned
       false if the autoload queue wasn't activated.</td></tr><tr><td>&nbsp;</td><td><a href='function.spl-autoload-register.php'>spl_autoload_register</a></td><td>callback is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.sprintf.php'>sprintf</a></td><td>This function no longer returns false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.sprintf.php'>sprintf</a></td><td>Throw a ValueError if the number of arguments is zero;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.sprintf.php'>sprintf</a></td><td>Throw a ValueError if [width] is less than zero or bigger than PHP_INT_MAX;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.sprintf.php'>sprintf</a></td><td>Throw a ValueError if [precision] is less than zero or bigger than PHP_INT_MAX;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.sprintf.php'>sprintf</a></td><td>Throw a ArgumentCountError when less arguments are given than required;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.str-split.php'>str_split</a></td><td>If length is less than 1,
       a ValueError will be thrown now;
       previously, an error of level E_WARNING
       has been raised instead, and the function returned false.</td></tr><tr><td>&nbsp;</td><td><a href='function.str-word-count.php'>str_word_count</a></td><td>characters is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.strcspn.php'>strcspn</a></td><td>length is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.stream-context-create.php'>stream_context_create</a></td><td>options and params are now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.stream-context-get-default.php'>stream_context_get_default</a></td><td>options is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.stream-copy-to-stream.php'>stream_copy_to_stream</a></td><td>length is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.stream-get-contents.php'>stream_get_contents</a></td><td>length is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.stream-set-chunk-size.php'>stream_set_chunk_size</a></td><td>A ValueError is now thrown if
        size is less than 1 or greater than
        PHP_INT_MAX. Previously, an
        E_WARNING level error was emitted and false was
        returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.stream-socket-accept.php'>stream_socket_accept</a></td><td>timeout is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.stream-socket-client.php'>stream_socket_client</a></td><td>timeout and context are now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.stream-socket-enable-crypto.php'>stream_socket_enable_crypto</a></td><td>session_stream is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.stream-socket-server.php'>stream_socket_server</a></td><td>context is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.strftime.php'>strftime</a></td><td>timestamp is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.strip-tags.php'>strip_tags</a></td><td>allowed_tags is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.stripos.php'>stripos</a></td><td>needle now accepts an empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.stripos.php'>stripos</a></td><td>Passing an int as needle is no longer supported.</td></tr><tr><td>&nbsp;</td><td><a href='function.stristr.php'>stristr</a></td><td>needle now accepts an empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.stristr.php'>stristr</a></td><td>Passing an int as needle is no longer supported.</td></tr><tr><td>&nbsp;</td><td><a href='function.strpos.php'>strpos</a></td><td>needle now accepts an empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.strpos.php'>strpos</a></td><td>Passing an int as needle is no longer supported.</td></tr><tr><td>&nbsp;</td><td><a href='function.strrchr.php'>strrchr</a></td><td>needle now accepts an empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.strrchr.php'>strrchr</a></td><td>Passing an int as needle is no longer supported.</td></tr><tr><td>&nbsp;</td><td><a href='function.strripos.php'>strripos</a></td><td>needle now accepts an empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.strripos.php'>strripos</a></td><td>Passing an int as needle is no longer supported.</td></tr><tr><td>&nbsp;</td><td><a href='function.strrpos.php'>strrpos</a></td><td>needle now accepts an empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.strrpos.php'>strrpos</a></td><td>Passing an int as needle is no longer supported.</td></tr><tr><td>&nbsp;</td><td><a href='function.strspn.php'>strspn</a></td><td>length is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.strstr.php'>strstr</a></td><td>needle now accepts an empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.strstr.php'>strstr</a></td><td>Passing an int as needle is no longer supported.</td></tr><tr><td>&nbsp;</td><td><a href='function.strtotime.php'>strtotime</a></td><td>baseTimestamp is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.substr.php'>substr</a></td><td>length is nullable now.
       When length is explicitly set to null,
       the function returns a substring finishing at the end of the string, when it previously returned an empty string.</td></tr><tr><td>&nbsp;</td><td><a href='function.substr.php'>substr</a></td><td>The function returns an empty string where it previously returned false.</td></tr><tr><td>&nbsp;</td><td><a href='function.substr-compare.php'>substr_compare</a></td><td>length is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.substr-count.php'>substr_count</a></td><td>length is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.substr-replace.php'>substr_replace</a></td><td>length is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.touch.php'>touch</a></td><td>mtime and atime
       are now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='function.trigger-error.php'>trigger_error</a></td><td>The function now throws a ValueError if an invalid
       error_level is specified. Previously, it returned false.</td></tr><tr><td>&nbsp;</td><td><a href='function.uasort.php'>uasort</a></td><td>If callback expects a parameter to be passed
  by reference, this function will now emit an E_WARNING.</td></tr><tr><td>&nbsp;</td><td><a href='function.uksort.php'>uksort</a></td><td>If callback expects a parameter to be passed
  by reference, this function will now emit an E_WARNING.</td></tr><tr><td>&nbsp;</td><td><a href='function.umask.php'>umask</a></td><td>mask is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.unixtojd.php'>unixtojd</a></td><td>timestamp is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.usort.php'>usort</a></td><td>If callback expects a parameter to be passed
  by reference, this function will now emit an E_WARNING.</td></tr><tr><td>&nbsp;</td><td><a href='function.vfprintf.php'>vfprintf</a></td><td>This function no longer returns false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.vfprintf.php'>vfprintf</a></td><td>Throw a ValueError if the number of arguments is zero;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.vfprintf.php'>vfprintf</a></td><td>Throw a ValueError if [width] is less than zero or bigger than PHP_INT_MAX;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.vfprintf.php'>vfprintf</a></td><td>Throw a ValueError if [precision] is less than zero or bigger than PHP_INT_MAX;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.vfprintf.php'>vfprintf</a></td><td>Throw a ValueError when less arguments are given than required;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.vprintf.php'>vprintf</a></td><td>This function no longer returns false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.vprintf.php'>vprintf</a></td><td>Throw a ValueError if the number of arguments is zero;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.vprintf.php'>vprintf</a></td><td>Throw a ValueError if [width] is less than zero or bigger than PHP_INT_MAX;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.vprintf.php'>vprintf</a></td><td>Throw a ValueError if [precision] is less than zero or bigger than PHP_INT_MAX;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.vprintf.php'>vprintf</a></td><td>Throw a ValueError when less arguments are given than required;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.vsprintf.php'>vsprintf</a></td><td>This function no longer returns false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.vsprintf.php'>vsprintf</a></td><td>Throw a ValueError if the number of arguments is zero;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.vsprintf.php'>vsprintf</a></td><td>Throw a ValueError if [width] is less than zero or bigger than PHP_INT_MAX;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.vsprintf.php'>vsprintf</a></td><td>Throw a ValueError if [precision] is less than zero or bigger than PHP_INT_MAX;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.vsprintf.php'>vsprintf</a></td><td>Throw a ValueError when less arguments are given than required;
       previously this function emitted a E_WARNING instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.wordwrap.php'>wordwrap</a></td><td>If break is empty string,
       a ValueError is thrown;
       previously in this case it emitted an E_WARNING and returned false.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-get-current-byte-index.php'>xml_get_current_byte_index</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-get-current-column-number.php'>xml_get_current_column_number</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-get-current-line-number.php'>xml_get_current_line_number</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-get-error-code.php'>xml_get_error_code</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-parse.php'>xml_parse</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-parse-into-struct.php'>xml_parse_into_struct</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-parser-create.php'>xml_parser_create</a></td><td>This function returns an XMLParser instance now;
      previously, a resource was returned,  or false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-parser-create.php'>xml_parser_create</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-parser-create-ns.php'>xml_parser_create_ns</a></td><td>This function returns an XMLParser instance now;
      previously, a resource was returned,  or false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-parser-create-ns.php'>xml_parser_create_ns</a></td><td>encoding is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-parser-free.php'>xml_parser_free</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-parser-get-option.php'>xml_parser_get_option</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-parser-get-option.php'>xml_parser_get_option</a></td><td>A ValueError is now thrown if
       option is invalid.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-parser-set-option.php'>xml_parser_set_option</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-parser-set-option.php'>xml_parser_set_option</a></td><td>A ValueError is now thrown if
       option is invalid.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-character-data-handler.php'>xml_set_character_data_handler</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-default-handler.php'>xml_set_default_handler</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-element-handler.php'>xml_set_element_handler</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-end-namespace-decl-handler.php'>xml_set_end_namespace_decl_handler</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-external-entity-ref-handler.php'>xml_set_external_entity_ref_handler</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-notation-decl-handler.php'>xml_set_notation_decl_handler</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-object.php'>xml_set_object</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-processing-instruction-handler.php'>xml_set_processing_instruction_handler</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-start-namespace-decl-handler.php'>xml_set_start_namespace_decl_handler</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-unparsed-entity-decl-handler.php'>xml_set_unparsed_entity_decl_handler</a></td><td>parser expects an XMLParser
  instance now; previously, a valid xml resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='function.zip-close.php'>zip_close</a></td><td>This function is deprecated in favor of the Object API,
        see ZipArchive::close.</td></tr><tr><td>&nbsp;</td><td><a href='function.zip-entry-close.php'>zip_entry_close</a></td><td>This function is deprecated in favor of the Object API.</td></tr><tr><td>&nbsp;</td><td><a href='function.zip-entry-compressedsize.php'>zip_entry_compressedsize</a></td><td>This function is deprecated in favor of the Object API,
        see ZipArchive::statIndex.</td></tr><tr><td>&nbsp;</td><td><a href='function.zip-entry-compressionmethod.php'>zip_entry_compressionmethod</a></td><td>This function is deprecated in favor of the Object API,
        see ZipArchive::statIndex.</td></tr><tr><td>&nbsp;</td><td><a href='function.zip-entry-filesize.php'>zip_entry_filesize</a></td><td>This function is deprecated in favor of the Object API,
        see ZipArchive::statIndex.</td></tr><tr><td>&nbsp;</td><td><a href='function.zip-entry-name.php'>zip_entry_name</a></td><td>This function is deprecated in favor of the Object API,
        see ZipArchive::statIndex.</td></tr><tr><td>&nbsp;</td><td><a href='function.zip-entry-open.php'>zip_entry_open</a></td><td>This function is deprecated in favor of the Object API.</td></tr><tr><td>&nbsp;</td><td><a href='function.zip-entry-read.php'>zip_entry_read</a></td><td>This function is deprecated in favor of the Object API,
        see ZipArchive::getFromIndex.</td></tr><tr><td>&nbsp;</td><td><a href='function.zip-open.php'>zip_open</a></td><td>This function is deprecated in favor of the Object API,
        see ZipArchive::open.</td></tr><tr><td>&nbsp;</td><td><a href='function.zip-read.php'>zip_read</a></td><td>This function is deprecated in favor of the Object API,
        see ZipArchive::statIndex.</td></tr><tr><td>&nbsp;</td><td><a href='globiterator.construct.php'>GlobIterator::__construct</a></td><td>Now throws a ValueError if
        directory is an empty string;
        previously it threw a RuntimeException.</td></tr><tr><td>&nbsp;</td><td><a href='intlcalendar.setminimaldaysinfirstweek.php'>IntlCalendar::setMinimalDaysInFirstWeek</a></td><td>A ValueError is now thrown on invalid input.  Previously, false was returned.</td></tr><tr><td>&nbsp;</td><td><a href='intltimezone.getidforwindowsid.php'>IntlTimeZone::getIDForWindowsID</a></td><td>region is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='limititerator.construct.php'>LimitIterator::__construct</a></td><td>Now throws a ValueError if
        offset is less than 0;
        previously it threw a RuntimeException.</td></tr><tr><td>&nbsp;</td><td><a href='limititerator.construct.php'>LimitIterator::__construct</a></td><td>Now throws a ValueError if
        limit is less than -1;
        previously it threw a RuntimeException.</td></tr><tr><td>&nbsp;</td><td><a href='locale.getdisplaylanguage.php'>Locale::getDisplayLanguage</a></td><td>displayLocale is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='locale.getdisplayname.php'>Locale::getDisplayName</a></td><td>displayLocale is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='locale.getdisplayregion.php'>Locale::getDisplayRegion</a></td><td>displayLocale is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='locale.getdisplayscript.php'>Locale::getDisplayScript</a></td><td>displayLocale is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='locale.getdisplayvariant.php'>Locale::getDisplayVariant</a></td><td>displayLocale is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli-result.fetch-object.php'>mysqli_result::fetch_object</a></td><td>constructor_args now accepts [] for constructors with 0 parameters;
       previously an exception was thrown.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli-result.field-seek.php'>mysqli_result::field_seek</a></td><td>This function now always returns true. Previously it returned false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli-stmt.close.php'>mysqli_stmt::close</a></td><td>This function now always returns true. Previously it returned false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli-stmt.construct.php'>mysqli_stmt::__construct</a></td><td>query is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli.begin-transaction.php'>mysqli::begin_transaction</a></td><td>name is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli.close.php'>mysqli::close</a></td><td>This function now always returns true. Previously it returned false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli.commit.php'>mysqli::commit</a></td><td>name is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli.debug.php'>mysqli::debug</a></td><td>This function now always returns true. Previously it returned false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli.rollback.php'>mysqli::rollback</a></td><td>name is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='numberformatter.create.php'>NumberFormatter::create</a></td><td>pattern is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='pdostatement.fetchall.php'>PDOStatement::fetchAll</a></td><td>This method always returns an array now, while previously false may have
       been returned on failure.</td></tr><tr><td>&nbsp;</td><td><a href='phar.addfile.php'>Phar::addFile</a></td><td>localName is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='phar.buildfromiterator.php'>Phar::buildFromIterator</a></td><td>baseDirectory is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='phar.compress.php'>Phar::compress</a></td><td>extension is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='phar.converttodata.php'>Phar::convertToData</a></td><td>format, compression, and extension are now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='phar.converttoexecutable.php'>Phar::convertToExecutable</a></td><td>format, compression, and extension are now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='phar.createdefaultstub.php'>Phar::createDefaultStub</a></td><td>index and webIndex are now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='phar.decompress.php'>Phar::decompress</a></td><td>extension is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='phar.getmetadata.php'>Phar::getMetadata</a></td><td>The parameter unserializeOptions has been added.</td></tr><tr><td>&nbsp;</td><td><a href='phar.setdefaultstub.php'>Phar::setDefaultStub</a></td><td>webIndex is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='phar.setsignaturealgorithm.php'>Phar::setSignatureAlgorithm</a></td><td>privateKey is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='phar.webphar.php'>Phar::webPhar</a></td><td>fileNotFoundScript and rewrite are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='phardata.addfile.php'>PharData::addFile</a></td><td>localName is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='phardata.buildfromiterator.php'>PharData::buildFromIterator</a></td><td>baseDirectory is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='phardata.compress.php'>PharData::compress</a></td><td>extension is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='phardata.converttodata.php'>PharData::convertToData</a></td><td>format, compression, and extension are now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='phardata.converttoexecutable.php'>PharData::convertToExecutable</a></td><td>format, compression, and localName are now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='phardata.decompress.php'>PharData::decompress</a></td><td>extension is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='phardata.setdefaultstub.php'>PharData::setDefaultStub</a></td><td>webIndex is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='phardata.setsignaturealgorithm.php'>PharData::setSignatureAlgorithm</a></td><td>privateKey is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='pharfileinfo.getmetadata.php'>PharFileInfo::getMetadata</a></td><td>The parameter unserializeOptions has been added.</td></tr><tr><td>&nbsp;</td><td><a href='pharfileinfo.iscompressed.php'>PharFileInfo::isCompressed</a></td><td>compression is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='recursivedirectoryiterator.construct.php'>RecursiveDirectoryIterator::__construct</a></td><td>Now throws a ValueError if
        directory is an empty string;
        previously it threw a RuntimeException.</td></tr><tr><td>&nbsp;</td><td><a href='recursiveiteratoriterator.getsubiterator.php'>RecursiveIteratorIterator::getSubIterator</a></td><td>level is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionclass.getconstants.php'>ReflectionClass::getConstants</a></td><td>filter has been added.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionclass.getreflectionconstants.php'>ReflectionClass::getReflectionConstants</a></td><td>filter has been added.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionfunction.invokeargs.php'>ReflectionFunction::invokeArgs</a></td><td>args keys will now be interpreted as parameter names, instead of being silently ignored.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionfunction.isdisabled.php'>ReflectionFunction::isDisabled</a></td><td>This function has been deprecated, as ReflectionFunction
       can no longer be constructed for disabled functions.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionmethod.export.php'>ReflectionMethod::export</a></td><td>Removed this function.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionmethod.getclosure.php'>ReflectionMethod::getClosure</a></td><td>object is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionmethod.invokeargs.php'>ReflectionMethod::invokeArgs</a></td><td>args keys will now be interpreted as parameter names, instead of being silently ignored.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionparameter.getclass.php'>ReflectionParameter::getClass</a></td><td>This function has been deprecated in favor of
       ReflectionParameter::getType instead.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionparameter.getdefaultvalue.php'>ReflectionParameter::getDefaultValue</a></td><td>This method now allows getting the default value of parameters of built-in functions and
        built-in class methods. Previously, a ReflectionException was thrown.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionparameter.getdefaultvalueconstantname.php'>ReflectionParameter::getDefaultValueConstantName</a></td><td>This method now allows getting the default values' constant names of built-in functions and
        built-in class methods. Previously, a ReflectionException was thrown.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionparameter.isarray.php'>ReflectionParameter::isArray</a></td><td>This function has been deprecated in favor of
       ReflectionParameter::getType instead.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionparameter.iscallable.php'>ReflectionParameter::isCallable</a></td><td>This function has been deprecated in favor of
       ReflectionParameter::getType instead.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionproperty.getvalue.php'>ReflectionProperty::getValue</a></td><td>object is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionproperty.isinitialized.php'>ReflectionProperty::isInitialized</a></td><td>object is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='reflectiontype.tostring.php'>ReflectionType::__toString</a></td><td>ReflectionType::__toString has been undeprecated.</td></tr><tr><td>&nbsp;</td><td><a href='reflector.export.php'>Reflector::export</a></td><td>Removed this function.</td></tr><tr><td>&nbsp;</td><td><a href='simplexmlelement.asxml.php'>SimpleXMLElement::asXML</a></td><td>filename is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='soapclient.dorequest.php'>SoapClient::__doRequest</a></td><td>The type of oneWay is bool now; formerly it was int.</td></tr><tr><td>&nbsp;</td><td><a href='soapclient.setcookie.php'>SoapClient::__setCookie</a></td><td>value is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='soapserver.handle.php'>SoapServer::handle</a></td><td>request is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='splfileinfo.getfileinfo.php'>SplFileInfo::getFileInfo</a></td><td>class is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='splfileinfo.getpathinfo.php'>SplFileInfo::getPathInfo</a></td><td>class is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='splfileinfo.openfile.php'>SplFileInfo::openFile</a></td><td>context is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='splfixedarray.construct.php'>SplFixedArray::__construct</a></td><td>Now throws a ValueError if
        size is a negative;
        previously it threw a InvalidArgumentException.</td></tr><tr><td>&nbsp;</td><td><a href='tidy.construct.php'>tidy::__construct</a></td><td>filename, config,
       encoding and useIncludePath are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='tidy.parsefile.php'>tidy::parseFile</a></td><td>config and encoding are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='tidy.parsestring.php'>tidy::parseString</a></td><td>config and encoding are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='tidy.repairfile.php'>tidy::repairFile</a></td><td>tidy::repairFile is a static method now.</td></tr><tr><td>&nbsp;</td><td><a href='tidy.repairfile.php'>tidy::repairFile</a></td><td>config and encoding are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='tidy.repairstring.php'>tidy::repairString</a></td><td>tidy::repairString is a static method now.</td></tr><tr><td>&nbsp;</td><td><a href='tidy.repairstring.php'>tidy::repairString</a></td><td>config and encoding are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='tidy.repairstring.php'>tidy::repairString</a></td><td>This function no longer accepts the useIncludePath parameter.</td></tr><tr><td>&nbsp;</td><td><a href='xmlreader.getattribute.php'>XMLReader::getAttribute</a></td><td>This function can no longer return false.</td></tr><tr><td>&nbsp;</td><td><a href='xmlreader.getattributens.php'>XMLReader::getAttributeNs</a></td><td>This function can no longer return false.</td></tr><tr><td>&nbsp;</td><td><a href='xmlreader.lookupnamespace.php'>XMLReader::lookupNamespace</a></td><td>This function can no longer return false.</td></tr><tr><td>&nbsp;</td><td><a href='xmlreader.next.php'>XMLReader::next</a></td><td>name is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='xmlreader.open.php'>XMLReader::open</a></td><td>XMLReader::open is now declared as static method,
       but can still be called on an XMLReader instance.</td></tr><tr><td>&nbsp;</td><td><a href='xmlreader.xml.php'>XMLReader::XML</a></td><td>XMLReader::XML is now declared as static method,
       but can still be called on an XMLReader instance.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.endattribute.php'>XMLWriter::endAttribute</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.endcdata.php'>XMLWriter::endCdata</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.endcomment.php'>XMLWriter::endComment</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.enddocument.php'>XMLWriter::endDocument</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.enddtd.php'>XMLWriter::endDtd</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.enddtdattlist.php'>XMLWriter::endDtdAttlist</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.enddtdelement.php'>XMLWriter::endDtdElement</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.enddtdentity.php'>XMLWriter::endDtdEntity</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.endelement.php'>XMLWriter::endElement</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.endpi.php'>XMLWriter::endPi</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.flush.php'>XMLWriter::flush</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.flush.php'>XMLWriter::flush</a></td><td>This function can no longer return false.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.fullendelement.php'>XMLWriter::fullEndElement</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.openmemory.php'>XMLWriter::openMemory</a></td><td>This function returns now an XMLWriter instance on success.
       Previouly, a resource has been returned in this case.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.openuri.php'>XMLWriter::openUri</a></td><td>This function returns now an XMLWriter instance on success.
       Previouly, a resource has been returned in this case.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.outputmemory.php'>XMLWriter::outputMemory</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.setindent.php'>XMLWriter::setIndent</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.setindentstring.php'>XMLWriter::setIndentString</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.startattribute.php'>XMLWriter::startAttribute</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.startattributens.php'>XMLWriter::startAttributeNs</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.startattributens.php'>XMLWriter::startAttributeNs</a></td><td>prefix is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.startcdata.php'>XMLWriter::startCdata</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.startcomment.php'>XMLWriter::startComment</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.startdocument.php'>XMLWriter::startDocument</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.startdtd.php'>XMLWriter::startDtd</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.startdtdattlist.php'>XMLWriter::startDtdAttlist</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.startdtdelement.php'>XMLWriter::startDtdElement</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.startdtdentity.php'>XMLWriter::startDtdEntity</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.startelement.php'>XMLWriter::startElement</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.startelementns.php'>XMLWriter::startElementNs</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.startpi.php'>XMLWriter::startPi</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.text.php'>XMLWriter::text</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.writeattribute.php'>XMLWriter::writeAttribute</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.writeattributens.php'>XMLWriter::writeAttributeNs</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.writecdata.php'>XMLWriter::writeCdata</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.writecomment.php'>XMLWriter::writeComment</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.writedtd.php'>XMLWriter::writeDtd</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.writedtdattlist.php'>XMLWriter::writeDtdAttlist</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.writedtdelement.php'>XMLWriter::writeDtdElement</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.writedtdentity.php'>XMLWriter::writeDtdEntity</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.writedtdentity.php'>XMLWriter::writeDtdEntity</a></td><td>publicId, systemId and
       notationData are nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.writeelement.php'>XMLWriter::writeElement</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.writeelementns.php'>XMLWriter::writeElementNs</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.writepi.php'>XMLWriter::writePi</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='xmlwriter.writeraw.php'>XMLWriter::writeRaw</a></td><td>writer expects an XMLWriter
  instance now; previously, a resource was expected.</td></tr><tr><td>&nbsp;</td><td><a href='ziparchive.addemptydir.php'>ZipArchive::addEmptyDir</a></td><td>flags was added.</td></tr><tr><td>&nbsp;</td><td><a href='ziparchive.addfile.php'>ZipArchive::addFile</a></td><td>flags was added.</td></tr><tr><td>&nbsp;</td><td><a href='ziparchive.addfromstring.php'>ZipArchive::addFromString</a></td><td>flags was added.</td></tr><tr><td>&nbsp;</td><td><a href='ziparchive.addglob.php'>ZipArchive::addGlob</a></td><td>&quot;flags&quot; in options was added.</td></tr><tr><td>&nbsp;</td><td><a href='ziparchive.addglob.php'>ZipArchive::addGlob</a></td><td>&quot;comp_method&quot;, &quot;comp_flags&quot;,
        &quot;enc_method&quot; and &quot;enc_password&quot; in
        options were added.</td></tr><tr><td>&nbsp;</td><td><a href='ziparchive.getstatusstring.php'>ZipArchive::getStatusString</a></td><td>This method can be called on closed archive.</td></tr><tr><td>&nbsp;</td><td><a href='ziparchive.getstatusstring.php'>ZipArchive::getStatusString</a></td><td>This method no longer returns false on failure.</td></tr><tr><td>&nbsp;</td><td><a href='ziparchive.setencryptionindex.php'>ZipArchive::setEncryptionIndex</a></td><td>password is now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='ziparchive.setencryptionname.php'>ZipArchive::setEncryptionName</a></td><td>password is now nullable.</td></tr></tbody><tbody class="gen-changelog v8-0-0"><tr><td>7.4.12</td><td><a href='function.jdtounix.php'>jdtounix</a></td><td>The upper limit of julian_day has been extended. Previously,
       it was 2465342 regardless of the architecture.</td></tr><tr><td>&nbsp;</td><td><a href='tidynode.ishtml.php'>tidyNode::isHtml</a></td><td>This function has been fixed to have reasonable behavior. Previously,
       almost any node was reported as being an HTML node.</td></tr></tbody><tbody class="gen-changelog v7-4-12"><tr><td>7.4.4</td><td><a href='function.proc-open.php'>proc_open</a></td><td>Added the create_new_console option to the
        options parameter.</td></tr></tbody><tbody class="gen-changelog v7-4-4"><tr><td>7.4.3</td><td><a href='function.curl-setopt.php'>curl_setopt</a></td><td>Introduced CURLOPT_HTTP09_ALLOWED.</td></tr></tbody><tbody class="gen-changelog v7-4-3"><tr><td>7.4.2</td><td><a href='function.dba-open.php'>dba_open</a></td><td>The lmdb driver now supports an additional map_size
       parameter.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-popen.php'>dba_popen</a></td><td>The lmdb driver now supports an additional map_size
       parameter.</td></tr></tbody><tbody class="gen-changelog v7-4-2"><tr><td>7.4.0</td><td><a href='dateperiod.construct.php'>DatePeriod::__construct</a></td><td>recurrences must be greater than 0 now.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-key-exists.php'>array_key_exists</a></td><td>Passing an object to the array parameter has been deprecated. Use property_exists instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-merge.php'>array_merge</a></td><td>This function can now be called without any parameter.
        Formerly, at least one parameter has been required.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-merge-recursive.php'>array_merge_recursive</a></td><td>This function can now be called without any parameter.
        Formerly, at least one parameter has been required.</td></tr><tr><td>&nbsp;</td><td><a href='function.base-convert.php'>base_convert</a></td><td>Passing invalid characters will now generate a deprecation notice.
       The result will still be computed as if the invalid characters did not exist.</td></tr><tr><td>&nbsp;</td><td><a href='function.bindec.php'>bindec</a></td><td>Passing invalid characters will now generate a deprecation notice.
       The result will still be computed as if the invalid characters did not exist.</td></tr><tr><td>&nbsp;</td><td><a href='function.chr.php'>chr</a></td><td>The function no longer silently accepts unsupported codepoints,
       and casts these to 0.</td></tr><tr><td>&nbsp;</td><td><a href='function.convert-cyr-string.php'>convert_cyr_string</a></td><td>Deprecated this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-version.php'>curl_version</a></td><td>The optional age parameter has been deprecated;
       if a value is passed, it is ignored.</td></tr><tr><td>&nbsp;</td><td><a href='function.current.php'>current</a></td><td>Instances of SPL classes are now treated like empty objects that have no properties instead of calling the Iterator method with the same name as this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.end.php'>end</a></td><td>Instances of SPL classes are now treated like empty objects that have no properties instead of calling the Iterator method with the same name as this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.fgetcsv.php'>fgetcsv</a></td><td>The escape parameter now also accepts an empty
        string to disable the proprietary escape mechanism.</td></tr><tr><td>&nbsp;</td><td><a href='function.fputcsv.php'>fputcsv</a></td><td>The escape parameter now also accepts an empty
        string to disable the proprietary escape mechanism.</td></tr><tr><td>&nbsp;</td><td><a href='function.get-declared-classes.php'>get_declared_classes</a></td><td>Previously get_declared_classes always returned parent classes before
       child classes. This is no longer the case. No particular order is guaranteed
       for the get_declared_classes return value.</td></tr><tr><td>&nbsp;</td><td><a href='function.get-magic-quotes-gpc.php'>get_magic_quotes_gpc</a></td><td>Deprecated this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.get-magic-quotes-runtime.php'>get_magic_quotes_runtime</a></td><td>Deprecated this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.gzread.php'>gzread</a></td><td>This functions returns false on failure now; previously 0 was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.gzwrite.php'>gzwrite</a></td><td>This functions returns false on failure now; previously 0 was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-algos.php'>hash_algos</a></td><td>Support for crc32c has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.hebrevc.php'>hebrevc</a></td><td>Deprecated this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.hexdec.php'>hexdec</a></td><td>Passing invalid characters will now generate a deprecation notice.
       The result will still be computed as if the invalid characters did not exist.</td></tr><tr><td>&nbsp;</td><td><a href='function.idn-to-ascii.php'>idn_to_ascii</a></td><td>The default value of variant is now
        INTL_IDNA_VARIANT_UTS46 instead of the deprecated
        INTL_IDNA_VARIANT_2003.</td></tr><tr><td>&nbsp;</td><td><a href='function.idn-to-utf8.php'>idn_to_utf8</a></td><td>The default value of variant is now
        INTL_IDNA_VARIANT_UTS46 instead of the deprecated
        INTL_IDNA_VARIANT_2003.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecropauto.php'>imagecropauto</a></td><td>The behavior of imagecropauto() in the bundled libgd has been synced with
       that of system libgd: IMG_CROP_DEFAULT no longer falls
       back to IMG_CROP_SIDES and threshold-cropping now uses
       the same algorithm as system libgd.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecropauto.php'>imagecropauto</a></td><td>The default value of mode has been changed to
       IMG_CROP_AUTO. Formerly, the default value has been
       -1 which corresponds to IMG_CROP_DEFAULT,
       but passing -1 is now deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagefilter.php'>imagefilter</a></td><td>Scatter support (IMG_FILTER_SCATTER) was added.</td></tr><tr><td>&nbsp;</td><td><a href='function.implode.php'>implode</a></td><td>Passing the separator after the array
       (i.e. using the legacy signature) has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.key.php'>key</a></td><td>Instances of SPL classes are now treated like empty objects that have no properties instead of calling the Iterator method with the same name as this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-control-paged-result.php'>ldap_control_paged_result</a></td><td>This function has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-control-paged-result-response.php'>ldap_control_paged_result_response</a></td><td>This function has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.method-exists.php'>method_exists</a></td><td>Class checks against inherited private methods now return false.</td></tr><tr><td>&nbsp;</td><td><a href='function.money-format.php'>money_format</a></td><td>Deprecated this function. Instead, 
        use NumberFormatter::formatCurrency.</td></tr><tr><td>&nbsp;</td><td><a href='function.next.php'>next</a></td><td>Instances of SPL classes are now treated like empty objects that have no properties instead of calling the Iterator method with the same name as this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.octdec.php'>octdec</a></td><td>Passing invalid characters will now generate a deprecation notice.
       The result will still be computed as if the invalid characters did not exist.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-random-pseudo-bytes.php'>openssl_random_pseudo_bytes</a></td><td>The function no longer returns false on failure, but throws an Exception instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.password-hash.php'>password_hash</a></td><td>The algo parameter expects a string now, but still accepts
        ints for backward compatibility.</td></tr><tr><td>&nbsp;</td><td><a href='function.password-hash.php'>password_hash</a></td><td>The sodium extension provides an alternative implementation for Argon2 passwords.</td></tr><tr><td>&nbsp;</td><td><a href='function.password-needs-rehash.php'>password_needs_rehash</a></td><td>The algo parameter expects a string now, but still accepts
        ints for backward compatibility.</td></tr><tr><td>&nbsp;</td><td><a href='function.preg-replace-callback.php'>preg_replace_callback</a></td><td>The flags parameter was added.</td></tr><tr><td>&nbsp;</td><td><a href='function.preg-replace-callback-array.php'>preg_replace_callback_array</a></td><td>The flags parameter was added.</td></tr><tr><td>&nbsp;</td><td><a href='function.prev.php'>prev</a></td><td>Instances of SPL classes are now treated like empty objects that have no properties instead of calling the Iterator method with the same name as this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.proc-open.php'>proc_open</a></td><td>proc_open now also accepts an array
        for the command.</td></tr><tr><td>&nbsp;</td><td><a href='function.proc-open.php'>proc_open</a></td><td>Added the create_process_group option to the
        options parameter.</td></tr><tr><td>&nbsp;</td><td><a href='function.reset.php'>reset</a></td><td>Instances of SPL classes are now treated like empty objects that have no properties instead of calling the Iterator method with the same name as this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.restore-include-path.php'>restore_include_path</a></td><td>Deprecated this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.stat.php'>stat</a></td><td>On Windows, the device number is now the serial number of the volume that
       contains the file, and the inode number is the identifier associated with the file.</td></tr><tr><td>&nbsp;</td><td><a href='function.stat.php'>stat</a></td><td>The size, atime, mtime and
       ctime statistics of symlinks are always those of the target.
       This was previously not the case for NTS builds on Windows.</td></tr><tr><td>&nbsp;</td><td><a href='function.str-getcsv.php'>str_getcsv</a></td><td>The escape parameter now interprets an empty
        string as signal to disable the proprietary escape mechanism. Formerly,
        an empty string was treated like the default parameter value.</td></tr><tr><td>&nbsp;</td><td><a href='function.strip-tags.php'>strip_tags</a></td><td>The allowed_tags now alternatively accepts an array.</td></tr><tr><td>&nbsp;</td><td><a href='function.unserialize.php'>unserialize</a></td><td>Added the max_depth element of
        options to set the maximum depth of structures permitted during unserialization.</td></tr><tr><td>&nbsp;</td><td><a href='locale.lookup.php'>Locale::lookup</a></td><td>defaultLocale is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli.construct.php'>mysqli::__construct</a></td><td>All parameters are now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='mysqli.real-connect.php'>mysqli::real_connect</a></td><td>All parameters are now nullable.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionclass.setstaticpropertyvalue.php'>ReflectionClass::setStaticPropertyValue</a></td><td>Using ReflectionClass::setStaticPropertyValue to set
       a private or protected property now results in a fatal error. Previously, it
       threw a ReflectionException.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionmethod.export.php'>ReflectionMethod::export</a></td><td>Deprecated this function.</td></tr><tr><td>&nbsp;</td><td><a href='reflector.export.php'>Reflector::export</a></td><td>Deprecated this function.</td></tr><tr><td>&nbsp;</td><td><a href='splfileobject.fgetcsv.php'>SplFileObject::fgetcsv</a></td><td>The escape parameter now also accepts an empty
        string to disable the proprietary escape mechanism.</td></tr><tr><td>&nbsp;</td><td><a href='splfileobject.fputcsv.php'>SplFileObject::fputcsv</a></td><td>The escape parameter now also accepts an empty
        string to disable the proprietary escape mechanism.</td></tr><tr><td>&nbsp;</td><td><a href='splfileobject.fwrite.php'>SplFileObject::fwrite</a></td><td>The function now returns false instead of zero on failure.</td></tr><tr><td>&nbsp;</td><td><a href='splfileobject.getcsvcontrol.php'>SplFileObject::getCsvControl</a></td><td>The escape character can now be an empty string.</td></tr><tr><td>&nbsp;</td><td><a href='splfileobject.setcsvcontrol.php'>SplFileObject::setCsvControl</a></td><td>The escape parameter now also accepts an empty
        string to disable the proprietary escape mechanism.</td></tr><tr><td>&nbsp;</td><td><a href='sqlite3stmt.bindparam.php'>SQLite3Stmt::bindParam</a></td><td>param now also supports the @param
       notation.</td></tr><tr><td>&nbsp;</td><td><a href='sqlite3stmt.bindvalue.php'>SQLite3Stmt::bindValue</a></td><td>param now also supports the @param
       notation.</td></tr></tbody><tbody class="gen-changelog v7-4-0"><tr><td>7.3.24</td><td><a href='function.jdtounix.php'>jdtounix</a></td><td>The upper limit of julian_day has been extended. Previously,
       it was 2465342 regardless of the architecture.</td></tr><tr><td>&nbsp;</td><td><a href='tidynode.ishtml.php'>tidyNode::isHtml</a></td><td>This function has been fixed to have reasonable behavior. Previously,
       almost any node was reported as being an HTML node.</td></tr></tbody><tbody class="gen-changelog v7-3-24"><tr><td>7.3.15</td><td><a href='function.curl-setopt.php'>curl_setopt</a></td><td>Introduced CURLOPT_HTTP09_ALLOWED.</td></tr></tbody><tbody class="gen-changelog v7-3-15"><tr><td>7.3.14</td><td><a href='function.dba-open.php'>dba_open</a></td><td>The lmdb driver now supports an additional map_size
       parameter.</td></tr><tr><td>&nbsp;</td><td><a href='function.dba-popen.php'>dba_popen</a></td><td>The lmdb driver now supports an additional map_size
       parameter.</td></tr></tbody><tbody class="gen-changelog v7-3-14"><tr><td>7.3.6</td><td><a href='dateperiod.construct.php'>DatePeriod::__construct</a></td><td>recurrences must be greater than 0 now.</td></tr><tr><td>&nbsp;</td><td><a href='splfileobject.tostring.php'>SplFileObject::__toString</a></td><td>Changed from an alias of SplFileObject::current to an alias of SplFileObject::fgets.</td></tr></tbody><tbody class="gen-changelog v7-3-6"><tr><td>7.3.5</td><td><a href='function.substr-compare.php'>substr_compare</a></td><td>offset may now be equal to the length of haystack.</td></tr></tbody><tbody class="gen-changelog v7-3-5"><tr><td>7.3.0</td><td><a href='datetimeimmutable.createfromformat.php'>DateTimeImmutable::createFromFormat</a></td><td>The v format specifier has
        been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.apache-request-headers.php'>apache_request_headers</a></td><td>This function became available in the FPM SAPI.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-push.php'>array_push</a></td><td>This function can now be called with only one parameter. Formerly, at
        least two parameters have been required.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-unshift.php'>array_unshift</a></td><td>This function can now be called with only one parameter. Formerly, at
        least two parameters have been required.</td></tr><tr><td>&nbsp;</td><td><a href='function.assert.php'>assert</a></td><td>Declaring a function called assert() inside a namespace
        became deprecated. Such declaration now emits an E_DEPRECATED.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcmul.php'>bcmul</a></td><td>bcmul now returns numbers with the requested scale.
       Formerly, the returned numbers may have omitted trailing decimal zeroes.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcpow.php'>bcpow</a></td><td>bcpow now returns numbers with the requested scale.
       Formerly, the returned numbers may have omitted trailing decimal zeroes.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcscale.php'>bcscale</a></td><td>bcscale can now be used to get the current scale
       factor; when used as setter, it now returns the old scale value.
       Formerly, scale was mandatory, and
       bcscale always returned true.</td></tr><tr><td>&nbsp;</td><td><a href='function.compact.php'>compact</a></td><td>compact now issues an E_NOTICE level error if a given string
       refers to an unset variable. Formerly, such strings have been silently skipped.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-getinfo.php'>curl_getinfo</a></td><td>Introduced CURLINFO_CONTENT_LENGTH_DOWNLOAD_T,
        CURLINFO_CONTENT_LENGTH_UPLOAD_T,
        CURLINFO_HTTP_VERSION,
        CURLINFO_PROTOCOL,
        CURLINFO_PROXY_SSL_VERIFYRESULT,
        CURLINFO_SCHEME,
        CURLINFO_SIZE_DOWNLOAD_T,
        CURLINFO_SIZE_UPLOAD_T,
        CURLINFO_SPEED_DOWNLOAD_T,
        CURLINFO_SPEED_UPLOAD_T,
        CURLINFO_APPCONNECT_TIME_T,
        CURLINFO_CONNECT_TIME_T,
        CURLINFO_FILETIME_T,
        CURLINFO_NAMELOOKUP_TIME_T,
        CURLINFO_PRETRANSFER_TIME_T,
        CURLINFO_REDIRECT_TIME_T,
        CURLINFO_STARTTRANSFER_TIME_T,
        CURLINFO_TOTAL_TIME_T.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-setopt.php'>curl_setopt</a></td><td>Introduced CURLOPT_ABSTRACT_UNIX_SOCKET, CURLOPT_KEEP_SENDING_ON_ERROR,
        CURLOPT_PRE_PROXY, CURLOPT_PROXY_CAINFO,
        CURLOPT_PROXY_CAPATH, CURLOPT_PROXY_CRLFILE,
        CURLOPT_PROXY_KEYPASSWD, CURLOPT_PROXY_PINNEDPUBLICKEY,
        CURLOPT_PROXY_SSLCERT, CURLOPT_PROXY_SSLCERTTYPE,
        CURLOPT_PROXY_SSL_CIPHER_LIST, CURLOPT_PROXY_SSLKEY,
        CURLOPT_PROXY_SSLKEYTYPE, CURLOPT_PROXY_SSL_OPTIONS,
        CURLOPT_PROXY_SSL_VERIFYHOST, CURLOPT_PROXY_SSL_VERIFYPEER,
        CURLOPT_PROXY_SSLVERSION, CURLOPT_PROXY_TLSAUTH_PASSWORD,
        CURLOPT_PROXY_TLSAUTH_TYPE, CURLOPT_PROXY_TLSAUTH_USERNAME,
        CURLOPT_SOCKS5_AUTH, CURLOPT_SUPPRESS_CONNECT_HEADERS,
        CURLOPT_DISALLOW_USERNAME_IN_URL, CURLOPT_DNS_SHUFFLE_ADDRESSES,
        CURLOPT_HAPPY_EYEBALLS_TIMEOUT_MS, CURLOPT_HAPROXYPROTOCOL,
        CURLOPT_PROXY_TLS13_CIPHERS, CURLOPT_SSH_COMPRESSION,
        CURLOPT_TIMEVALUE_LARGE and CURLOPT_TLS13_CIPHERS.</td></tr><tr><td>&nbsp;</td><td><a href='function.define.php'>define</a></td><td>case_insensitive has been deprecated and will be removed in version 8.0.0.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-fget.php'>ftp_fget</a></td><td>The mode parameter is now optional. Formerly it
       has been mandatory.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-fput.php'>ftp_fput</a></td><td>The mode parameter is now optional. Formerly it
       has been mandatory.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-get.php'>ftp_get</a></td><td>The mode parameter is now optional. Formerly it
       has been mandatory.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-nb-fget.php'>ftp_nb_fget</a></td><td>The mode parameter is now optional. Formerly it
       has been mandatory.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-nb-fput.php'>ftp_nb_fput</a></td><td>The mode parameter is now optional. Formerly it
       has been mandatory.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-nb-get.php'>ftp_nb_get</a></td><td>The mode parameter is now optional. Formerly it
       has been mandatory.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-nb-put.php'>ftp_nb_put</a></td><td>The mode parameter is now optional. Formerly it
       has been mandatory.</td></tr><tr><td>&nbsp;</td><td><a href='function.ftp-put.php'>ftp_put</a></td><td>The mode parameter is now optional. Formerly it
       has been mandatory.</td></tr><tr><td>&nbsp;</td><td><a href='function.getallheaders.php'>getallheaders</a></td><td>This function became available in the FPM SAPI.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagecreatefromstring.php'>imagecreatefromstring</a></td><td>WEBP is supported now (if supported by the libgd in use).</td></tr><tr><td>&nbsp;</td><td><a href='function.is-countable.php'>is_countable</a></td><td>is_countable has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.json-decode.php'>json_decode</a></td><td>JSON_THROW_ON_ERROR
        flags was added.</td></tr><tr><td>&nbsp;</td><td><a href='function.json-encode.php'>json_encode</a></td><td>JSON_THROW_ON_ERROR
        flags was added.</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-add.php'>ldap_add</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-compare.php'>ldap_compare</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-delete.php'>ldap_delete</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-exop.php'>ldap_exop</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-exop-passwd.php'>ldap_exop_passwd</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-list.php'>ldap_list</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod-add.php'>ldap_mod_add</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod-del.php'>ldap_mod_del</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod-replace.php'>ldap_mod_replace</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-modify-batch.php'>ldap_modify_batch</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod_add-ext.php'>ldap_mod_add_ext</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod_del-ext.php'>ldap_mod_del_ext</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-mod_replace-ext.php'>ldap_mod_replace_ext</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-parse-result.php'>ldap_parse_result</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-read.php'>ldap_read</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-rename.php'>ldap_rename</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-rename-ext.php'>ldap_rename_ext</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.ldap-search.php'>ldap_search</a></td><td>Support for controls added</td></tr><tr><td>&nbsp;</td><td><a href='function.list.php'>list</a></td><td>Support for reference assignments in array destructuring was added.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-convert-case.php'>mb_convert_case</a></td><td>Added support for
        MB_CASE_FOLD,
        MB_CASE_UPPER_SIMPLE,
        MB_CASE_LOWER_SIMPLE,
        MB_CASE_TITLE_SIMPLE, and
        MB_CASE_FOLD_SIMPLE
        as mode.</td></tr><tr><td>&nbsp;</td><td><a href='function.password-hash.php'>password_hash</a></td><td>Support for Argon2id passwords using PASSWORD_ARGON2ID was added.</td></tr><tr><td>&nbsp;</td><td><a href='function.preg-quote.php'>preg_quote</a></td><td>The # character is now quoted</td></tr><tr><td>&nbsp;</td><td><a href='function.session-get-cookie-params.php'>session_get_cookie_params</a></td><td>The &quot;samesite&quot; entry was added in the returned array.</td></tr><tr><td>&nbsp;</td><td><a href='function.session-set-cookie-params.php'>session_set_cookie_params</a></td><td>An alternative signature supporting an lifetime_or_options
        array has been added. This signature supports also setting of the
        SameSite cookie attribute.</td></tr><tr><td>&nbsp;</td><td><a href='function.setcookie.php'>setcookie</a></td><td>An alternative signature supporting an options
        array has been added. This signature supports also setting of the
        SameSite cookie attribute.</td></tr><tr><td>&nbsp;</td><td><a href='function.setrawcookie.php'>setrawcookie</a></td><td>An alternative signature supporting an options
        array has been added. This signature supports also setting of the
        SameSite cookie attribute.</td></tr><tr><td>&nbsp;</td><td><a href='function.stripos.php'>stripos</a></td><td>Passing an int as needle has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.stristr.php'>stristr</a></td><td>Passing an int as needle has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.strpos.php'>strpos</a></td><td>Passing an int as needle has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.strrchr.php'>strrchr</a></td><td>Passing an int as needle has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.strripos.php'>strripos</a></td><td>Passing an int as needle has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.strrpos.php'>strrpos</a></td><td>Passing an int as needle has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.strstr.php'>strstr</a></td><td>Passing an int as needle has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.unlink.php'>unlink</a></td><td>On Windows, it is now possible to unlink files with
       handles in use, while formerly that would fail. However, it is still not
       possible to re-create the unlinked file, until all handles to it have been
       closed.</td></tr><tr><td>&nbsp;</td><td><a href='function.var-export.php'>var_export</a></td><td>Now exports stdClass objects as an array cast to
        an object ((object) array( ... )), rather than using the
        nonexistent method stdClass::__setState.
        The practical effect is that now stdClass is
        exportable, and the resulting code will even work on earlier versions of
        PHP.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-parser-get-option.php'>xml_parser_get_option</a></td><td>options now supports XML_OPTION_SKIP_TAGSTART
       and XML_OPTION_SKIP_WHITE.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-set-external-entity-ref-handler.php'>xml_set_external_entity_ref_handler</a></td><td>The return value of the handler is no longer
       ignored if the extension has been built against libxml. Formerly, the return
       value has been ignored, and parsing did never stop.</td></tr></tbody><tbody class="gen-changelog v7-3-0"><tr><td>7.2.19</td><td><a href='dateperiod.construct.php'>DatePeriod::__construct</a></td><td>recurrences must be greater than 0 now.</td></tr><tr><td>&nbsp;</td><td><a href='splfileobject.tostring.php'>SplFileObject::__toString</a></td><td>Changed from an alias of SplFileObject::current to an alias of SplFileObject::fgets.</td></tr></tbody><tbody class="gen-changelog v7-2-19"><tr><td>7.2.18</td><td><a href='function.substr-compare.php'>substr_compare</a></td><td>offset may now be equal to the length of haystack.</td></tr></tbody><tbody class="gen-changelog v7-2-18"><tr><td>7.2.12</td><td><a href='dateinterval.format.php'>DateInterval::format</a></td><td>The F and f format
        will now always be positive.</td></tr><tr><td>&nbsp;</td><td><a href='function.xml-parser-get-option.php'>xml_parser_get_option</a></td><td>options now supports XML_OPTION_SKIP_TAGSTART
       and XML_OPTION_SKIP_WHITE.</td></tr></tbody><tbody class="gen-changelog v7-2-12"><tr><td>7.2.0</td><td><a href='function.array-unique.php'>array_unique</a></td><td>If flags is SORT_STRING,
        formerly array has been copied and non-unique
        elements have been removed (without packing the array afterwards), but
        now a new array is built by adding the unique elements. This can result
        in different numeric indexes.</td></tr><tr><td>&nbsp;</td><td><a href='function.assert.php'>assert</a></td><td>Usage of a string as the assertion
        became deprecated. It now emits an E_DEPRECATED
        notice when both assert.active
        and zend.assertions are set
        to 1.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcmod.php'>bcmod</a></td><td>num1 and num2 are no
       longer truncated to integer, so now the behavior of
       bcmod follows fmod rather than
       the % operator.</td></tr><tr><td>&nbsp;</td><td><a href='function.bcmod.php'>bcmod</a></td><td>The scale parameter was added.</td></tr><tr><td>&nbsp;</td><td><a href='function.count.php'>count</a></td><td>count will now yield a warning on invalid countable types 
       passed to the value parameter.</td></tr><tr><td>&nbsp;</td><td><a href='function.date-parse.php'>date_parse</a></td><td>The zone element of the returned array represents
       seconds instead of minutes now, and its sign is inverted. For instance
       -120 is now 7200.</td></tr><tr><td>&nbsp;</td><td><a href='function.date-parse-from-format.php'>date_parse_from_format</a></td><td>The zone element of the returned array represents
       seconds instead of minutes now, and its sign is inverted. For instance
       -120 is now 7200.</td></tr><tr><td>&nbsp;</td><td><a href='function.date-sun-info.php'>date_sun_info</a></td><td>The calculation was fixed with regards to local midnight instead of
        local noon, which changes the results slightly.</td></tr><tr><td>&nbsp;</td><td><a href='function.exif-read-data.php'>exif_read_data</a></td><td>The file parameter now supports both local files 
        and stream resources.</td></tr><tr><td>&nbsp;</td><td><a href='function.exif-read-data.php'>exif_read_data</a></td><td>Support for the following EXIF formats were added:
         
          Samsung
          DJI
          Panasonic
          Sony
          Pentax
          Minolta
          Sigma/Foveon
          AGFA
          Kyocera
          Ricoh
          Epson</td></tr><tr><td>&nbsp;</td><td><a href='function.exif-thumbnail.php'>exif_thumbnail</a></td><td>The file parameter now supports both local files
        and stream resources.</td></tr><tr><td>&nbsp;</td><td><a href='function.ezmlm-hash.php'>ezmlm_hash</a></td><td>Deprecated this function.</td></tr><tr><td>&nbsp;</td><td><a href='function.get-class.php'>get_class</a></td><td>Prior to this version the default value for object
        was null and it had the same effect as not passing any value. Now
        null has been removed as the default value for object,
        and is no longer a valid input.</td></tr><tr><td>&nbsp;</td><td><a href='function.gettype.php'>gettype</a></td><td>Closed resources are now reported as 'resource (closed)'.
        Previously the returned value for closed resources were 'unknown type'.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-copy.php'>hash_copy</a></td><td>Accept and return HashContext instead of resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-final.php'>hash_final</a></td><td>Accept HashContext instead of resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-hmac.php'>hash_hmac</a></td><td>Usage of non-cryptographic hash functions (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) was disabled.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-hmac-file.php'>hash_hmac_file</a></td><td>Usage of non-cryptographic hash functions (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) was disabled.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-init.php'>hash_init</a></td><td>Usage of non-cryptographic hash functions (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) with HASH_HMAC was disabled.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-init.php'>hash_init</a></td><td>Return HashContext instead of resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-pbkdf2.php'>hash_pbkdf2</a></td><td>Usage of non-cryptographic hash functions (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) was disabled.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-update.php'>hash_update</a></td><td>Accept HashContext instead of resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-update-file.php'>hash_update_file</a></td><td>Accept HashContext instead of resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-update-stream.php'>hash_update_stream</a></td><td>Accept HashContext instead of resource.</td></tr><tr><td>&nbsp;</td><td><a href='function.idn-to-ascii.php'>idn_to_ascii</a></td><td>INTL_IDNA_VARIANT_2003 has been deprecated; use
        INTL_IDNA_VARIANT_UTS46 instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.idn-to-utf8.php'>idn_to_utf8</a></td><td>INTL_IDNA_VARIANT_2003 has been deprecated; use
        INTL_IDNA_VARIANT_UTS46 instead.</td></tr><tr><td>&nbsp;</td><td><a href='function.imageantialias.php'>imageantialias</a></td><td>imageantialias is now generally available. Formerly
       it was only available if PHP was compiled with the bundled version of the
       GD library.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagegd.php'>imagegd</a></td><td>imagegd now allows to output truecolor images.
        Formerly, these have been implicitly converted to palette.</td></tr><tr><td>&nbsp;</td><td><a href='function.imagelayereffect.php'>imagelayereffect</a></td><td>Added IMG_EFFECT_MULTIPLY (requires system libgd &gt;=
       2.1.1 or the bundled libgd).</td></tr><tr><td>&nbsp;</td><td><a href='function.imagetypes.php'>imagetypes</a></td><td>IMG_BMP added.</td></tr><tr><td>&nbsp;</td><td><a href='function.is-object.php'>is_object</a></td><td>is_object now returns true for unserialized objects without 
        a class definition (class of __PHP_Incomplete_Class). Previously 
        false was returned.</td></tr><tr><td>&nbsp;</td><td><a href='function.json-decode.php'>json_decode</a></td><td>associative is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.json-decode.php'>json_decode</a></td><td>JSON_INVALID_UTF8_IGNORE, and
        JSON_INVALID_UTF8_SUBSTITUTE
        flags were added.</td></tr><tr><td>&nbsp;</td><td><a href='function.json-encode.php'>json_encode</a></td><td>JSON_INVALID_UTF8_IGNORE, and
        JSON_INVALID_UTF8_SUBSTITUTE
        flags were added.</td></tr><tr><td>&nbsp;</td><td><a href='function.mail.php'>mail</a></td><td>The additional_headers parameter now also accepts
        an array.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-check-encoding.php'>mb_check_encoding</a></td><td>This function now also accepts an array as value.
       Formerly, only strings have been supported.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-convert-encoding.php'>mb_convert_encoding</a></td><td>This function now also accepts an array as string.
       Formerly, only strings have been supported.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-parse-str.php'>mb_parse_str</a></td><td>Calling mb_parse_str without the second parameter was deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-send-mail.php'>mb_send_mail</a></td><td>The additional_headers parameter now also accepts
        an array.</td></tr><tr><td>&nbsp;</td><td><a href='function.mt-rand.php'>mt_rand</a></td><td>mt_rand has received a bug fix for a modulo bias bug. This means that sequences generated with a specific seed may differ from PHP 7.1 on 64-bit machines.</td></tr><tr><td>&nbsp;</td><td><a href='function.number-format.php'>number_format</a></td><td>number_format was changed to not being able to return 
        -0, previously -0 could be returned 
        for cases like where num would be -0.01.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkcs7-verify.php'>openssl_pkcs7_verify</a></td><td>The output_filename parameter was added.</td></tr><tr><td>&nbsp;</td><td><a href='function.pack.php'>pack</a></td><td>float and double types supports both Big Endian and Little Endian.</td></tr><tr><td>&nbsp;</td><td><a href='function.parse-str.php'>parse_str</a></td><td>Usage of parse_str without a second parameter
        now emits an E_DEPRECATED notice.</td></tr><tr><td>&nbsp;</td><td><a href='function.password-hash.php'>password_hash</a></td><td>Support for Argon2i passwords using PASSWORD_ARGON2I was added.</td></tr><tr><td>&nbsp;</td><td><a href='function.preg-match.php'>preg_match</a></td><td>The PREG_UNMATCHED_AS_NULL is now supported for the
        $flags parameter.</td></tr><tr><td>&nbsp;</td><td><a href='function.preg-match-all.php'>preg_match_all</a></td><td>The PREG_UNMATCHED_AS_NULL is now supported for the
        $flags parameter.</td></tr><tr><td>&nbsp;</td><td><a href='function.preg-quote.php'>preg_quote</a></td><td>delimiter is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.proc-nice.php'>proc_nice</a></td><td>This function is now available on Windows.</td></tr><tr><td>&nbsp;</td><td><a href='function.rand.php'>rand</a></td><td>rand has received a bug fix for a modulo bias bug. This means that sequences generated with a specific seed may differ from PHP 7.1 on 64-bit machines.</td></tr><tr><td>&nbsp;</td><td><a href='function.read-exif-data.php'>read_exif_data</a></td><td>This function alias was deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.session-abort.php'>session_abort</a></td><td>The return type of this function is bool now.
       Formerly, it has been void.</td></tr><tr><td>&nbsp;</td><td><a href='function.session-module-name.php'>session_module_name</a></td><td>It is now explicitly forbidden to set the module name to
       &quot;user&quot;. Formerly, this has been silently ignored.</td></tr><tr><td>&nbsp;</td><td><a href='function.session-name.php'>session_name</a></td><td>session_name checks session status,
        previously it only checked cookie status. Therefore,
        older session_name allows to
        call session_name
        after session_start which may crash PHP
        and may result in misbehaviors.</td></tr><tr><td>&nbsp;</td><td><a href='function.session-reset.php'>session_reset</a></td><td>The return type of this function is bool now.
       Formerly, it has been void.</td></tr><tr><td>&nbsp;</td><td><a href='function.session-set-cookie-params.php'>session_set_cookie_params</a></td><td>Returns true on success or false on failure. Formerly the function returned void.</td></tr><tr><td>&nbsp;</td><td><a href='function.session-unset.php'>session_unset</a></td><td>The return type of this function is bool now.
       Formerly, it has been void.</td></tr><tr><td>&nbsp;</td><td><a href='function.session-write-close.php'>session_write_close</a></td><td>The return type of this function is bool now.
       Formerly, it has been void.</td></tr><tr><td>&nbsp;</td><td><a href='function.set-error-handler.php'>set_error_handler</a></td><td>errcontext became deprecated. Usage of this parameter now emits an E_DEPRECATED notice.</td></tr><tr><td>&nbsp;</td><td><a href='function.unpack.php'>unpack</a></td><td>float and double types supports both Big Endian and Little Endian.</td></tr><tr><td>&nbsp;</td><td><a href='function.utf8-decode.php'>utf8_decode</a></td><td>This function has been moved from the XML extension to the core of PHP.
        In previous versions, it was only available if the XML extension was installed.</td></tr><tr><td>&nbsp;</td><td><a href='function.utf8-encode.php'>utf8_encode</a></td><td>This function has been moved from the XML extension to the core of PHP.
        In previous versions, it was only available if the XML extension was installed.</td></tr><tr><td>&nbsp;</td><td><a href='pdostatement.debugdumpparams.php'>PDOStatement::debugDumpParams</a></td><td>PDOStatement::debugDumpParams now returns the SQL sent to
        the database, including the full, raw query (including the replaced placeholders with
        their bounded values). Note, that this will only be available if emulated prepared
        statements are turned on.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionclass.getmethods.php'>ReflectionClass::getMethods</a></td><td>filter is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='reflectionclass.getproperties.php'>ReflectionClass::getProperties</a></td><td>filter is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='sqlite3.openblob.php'>SQLite3::openBlob</a></td><td>The flags parameter has been added, allowing to
       write BLOBs; formerly only reading was supported.</td></tr></tbody><tbody class="gen-changelog v7-2-0"><tr><td>7.1.24</td><td><a href='function.xml-parser-get-option.php'>xml_parser_get_option</a></td><td>options now supports XML_OPTION_SKIP_TAGSTART
       and XML_OPTION_SKIP_WHITE.</td></tr></tbody><tbody class="gen-changelog v7-1-24"><tr><td>7.1.5</td><td><a href='intldateformatter.format.php'>IntlDateFormatter::format</a></td><td>Support for providing general DateTimeInterface objects to the
        datetime parameter was added. Formerly, only proper
        DateTime objects were supported.</td></tr></tbody><tbody class="gen-changelog v7-1-5"><tr><td>7.1.4</td><td><a href='pdo.sqlitecreatefunction.php'>PDO::sqliteCreateFunction</a></td><td>The flags parameter has been added.</td></tr><tr><td>&nbsp;</td><td><a href='sqlite3.createfunction.php'>SQLite3::createFunction</a></td><td>The flags parameter has been added.</td></tr></tbody><tbody class="gen-changelog v7-1-4"><tr><td>7.1.2</td><td><a href='function.dns-get-record.php'>dns_get_record</a></td><td>Added support for CAA record type.</td></tr><tr><td>&nbsp;</td><td><a href='function.fopen.php'>fopen</a></td><td>The 'e' option was added.</td></tr></tbody><tbody class="gen-changelog v7-1-2"><tr><td>7.1.1</td><td><a href='function.get-defined-functions.php'>get_defined_functions</a></td><td>The exclude_disabled parameter has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.pack.php'>pack</a></td><td>The &quot;e&quot;, &quot;E&quot;, &quot;g&quot; and &quot;G&quot; codes were added to enable byte order support for float and double.</td></tr></tbody><tbody class="gen-changelog v7-1-1"><tr><td>7.1.0</td><td><a href='dateinterval.format.php'>DateInterval::format</a></td><td>The F and f format
        characters were added.</td></tr><tr><td>&nbsp;</td><td><a href='datetime.settime.php'>DateTime::setTime</a></td><td>The microsecond parameter was added.</td></tr><tr><td>&nbsp;</td><td><a href='datetimeimmutable.construct.php'>DateTimeImmutable::__construct</a></td><td>From now on microseconds are filled with actual value. Not with '00000'.</td></tr><tr><td>&nbsp;</td><td><a href='datetimeimmutable.settime.php'>DateTimeImmutable::setTime</a></td><td>The microsecond parameter was added.</td></tr><tr><td>&nbsp;</td><td><a href='datetimezone.listidentifiers.php'>DateTimeZone::listIdentifiers</a></td><td>countryCode is nullable now.</td></tr><tr><td>&nbsp;</td><td><a href='function.array-rand.php'>array_rand</a></td><td>The internal randomization algorithm has been changed to use the Mersenne Twister Random Number Generator instead of the libc rand function.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-multi-setopt.php'>curl_multi_setopt</a></td><td>Introduced CURLMOPT_PUSHFUNCTION.</td></tr><tr><td>&nbsp;</td><td><a href='function.exif-imagetype.php'>exif_imagetype</a></td><td>Added WebP support.</td></tr><tr><td>&nbsp;</td><td><a href='function.file-get-contents.php'>file_get_contents</a></td><td>Support for negative offsets has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.get-headers.php'>get_headers</a></td><td>The context parameter was added.</td></tr><tr><td>&nbsp;</td><td><a href='function.getenv.php'>getenv</a></td><td>The name can now be omitted to retrieve an
       associative array of all environment variables.</td></tr><tr><td>&nbsp;</td><td><a href='function.getimagesize.php'>getimagesize</a></td><td>Added WebP support.</td></tr><tr><td>&nbsp;</td><td><a href='function.getopt.php'>getopt</a></td><td>Added the rest_index parameter.</td></tr><tr><td>&nbsp;</td><td><a href='function.grapheme-extract.php'>grapheme_extract</a></td><td>Support for negative offsets has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.grapheme-stripos.php'>grapheme_stripos</a></td><td>Support for negative offsets has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.grapheme-strpos.php'>grapheme_strpos</a></td><td>Support for negative offsets has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.hash-algos.php'>hash_algos</a></td><td>Support for sha512/224, sha512/256, sha3-224, sha3-256, sha3-384 and
        sha3-512 has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.iconv-strpos.php'>iconv_strpos</a></td><td>Support for negative offsets has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.json-decode.php'>json_decode</a></td><td>An empty JSON key (&quot;&quot;) can be encoded to the empty object property
        instead of using a key with value _empty_.</td></tr><tr><td>&nbsp;</td><td><a href='function.json-encode.php'>json_encode</a></td><td>JSON_UNESCAPED_LINE_TERMINATORS
        flags was added.</td></tr><tr><td>&nbsp;</td><td><a href='function.json-encode.php'>json_encode</a></td><td>serialize_precision is
        used instead of precision when
        encoding float values.</td></tr><tr><td>&nbsp;</td><td><a href='function.list.php'>list</a></td><td>It is now possible to specify keys in list. This
        enables destructuring of arrays with non-integer or non-sequential keys.</td></tr><tr><td>&nbsp;</td><td><a href='function.long2ip.php'>long2ip</a></td><td>The parameter type of ip has been
       changed from string to int.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-ereg.php'>mb_ereg</a></td><td>mb_ereg will now set matches to
       an empty array, if nothing matched. Formerly,
       matches was not modified in that case.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-ereg-replace.php'>mb_ereg_replace</a></td><td>The function checks whether string is valid for the
        current encoding.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-ereg-replace.php'>mb_ereg_replace</a></td><td>The e modifier has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-ereg-replace-callback.php'>mb_ereg_replace_callback</a></td><td>The function checks whether string is valid for the
        current encoding.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-ereg-search-setpos.php'>mb_ereg_search_setpos</a></td><td>Support for negative offsets has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-eregi.php'>mb_eregi</a></td><td>mb_eregi will now set matches to
       an empty array, if nothing matched. Formerly,
       matches was not modified in that case.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-eregi-replace.php'>mb_eregi_replace</a></td><td>The function checks whether string is valid for the
        current encoding.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-eregi-replace.php'>mb_eregi_replace</a></td><td>The e modifier has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-regex-set-options.php'>mb_regex_set_options</a></td><td>The &quot;e&quot; option now emits an E_DEPRECATED.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strimwidth.php'>mb_strimwidth</a></td><td>Support for negative starts and widths has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-stripos.php'>mb_stripos</a></td><td>Support for negative offsets has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.mb-strpos.php'>mb_strpos</a></td><td>Support for negative offsets has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.mt-rand.php'>mt_rand</a></td><td>rand has been made an alias of mt_rand.</td></tr><tr><td>&nbsp;</td><td><a href='function.mt-rand.php'>mt_rand</a></td><td>mt_rand has been updated to use the fixed, correct, version of
         the Mersenne Twister algorithm. To fall back to the old behaviour, use mt_srand with MT_RAND_PHP as the second parameter.</td></tr><tr><td>&nbsp;</td><td><a href='function.mt-srand.php'>mt_srand</a></td><td>srand has been made an alias of mt_srand.</td></tr><tr><td>&nbsp;</td><td><a href='function.mt-srand.php'>mt_srand</a></td><td>mt_rand has been updated to use the fixed, correct, version of
         the Mersenne Twister algorithm. To fall back to the old behaviour, use mt_srand with MT_RAND_PHP as the second parameter.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-csr-new.php'>openssl_csr_new</a></td><td>options now also supports curve_name.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-decrypt.php'>openssl_decrypt</a></td><td>The tag and aad parameters were added.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-encrypt.php'>openssl_encrypt</a></td><td>The tag, aad and tag_length parameters were added.</td></tr><tr><td>&nbsp;</td><td><a href='function.openssl-pkey-new.php'>openssl_pkey_new</a></td><td>The curve_name key of the options parameter was
       added to make it possible to create EC keys based on Elliptic Curve algorithms.</td></tr><tr><td>&nbsp;</td><td><a href='function.output-add-rewrite-var.php'>output_add_rewrite_var</a></td><td>As of PHP 7.1.0, a dedicated output buffer is used,
        url_rewriter.tags
        is used solely for output functions and
        url_rewriter.hosts is available.
        Prior to PHP 7.1.0, rewrite variables set by output_add_rewrite_var
        shared an output buffer with transparent session id support
        (see session.trans_sid_tags).</td></tr><tr><td>&nbsp;</td><td><a href='function.output-reset-rewrite-vars.php'>output_reset_rewrite_vars</a></td><td>Before PHP 7.1.0, rewrite vars set by output_add_rewrite_var
        use the same Session module trans sid output buffer. Since PHP 7.1.0,
        dedicated output buffer is used and output_reset_rewrite_vars
        only removes rewrite vars defined by output_add_rewrite_var.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-signal.php'>pcntl_signal</a></td><td>As of PHP 7.1.0 the handler callback is given a second argument
        containing the siginfo of the specific signal.  This data is only
        supplied if the operating system has the siginfo_t structure.
        If the OS does not implement siginfo_t NULL is supplied.</td></tr><tr><td>&nbsp;</td><td><a href='function.pcntl-signal-get-handler.php'>pcntl_signal_get_handler</a></td><td>pcntl_signal_get_handler has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-fetch-all.php'>pg_fetch_all</a></td><td>The mode parameter was added.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-last-notice.php'>pg_last_notice</a></td><td>The mode parameter was added.</td></tr><tr><td>&nbsp;</td><td><a href='function.pg-select.php'>pg_select</a></td><td>The mode parameter was added.</td></tr><tr><td>&nbsp;</td><td><a href='function.rand.php'>rand</a></td><td>rand has been made an alias of mt_rand.</td></tr><tr><td>&nbsp;</td><td><a href='function.session-start.php'>session_start</a></td><td>session_start now returns false and no longer
        initializes $_SESSION when it failed to start the
        session.</td></tr><tr><td>&nbsp;</td><td><a href='function.shuffle.php'>shuffle</a></td><td>The internal randomization algorithm has been changed to use the Mersenne Twister Random Number Generator instead of the libc rand function.</td></tr><tr><td>&nbsp;</td><td><a href='function.srand.php'>srand</a></td><td>srand has been made an alias of mt_srand.</td></tr><tr><td>&nbsp;</td><td><a href='function.str-shuffle.php'>str_shuffle</a></td><td>The internal randomization algorithm has been changed to use the Mersenne Twister Random Number Generator instead of the libc rand function.</td></tr><tr><td>&nbsp;</td><td><a href='function.stripos.php'>stripos</a></td><td>Support for negative offsets has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.strpos.php'>strpos</a></td><td>Support for negative offsets has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.substr-count.php'>substr_count</a></td><td>Support for negative offsets and lengths has been added.
        length may also be 0 now.</td></tr><tr><td>&nbsp;</td><td><a href='function.tempnam.php'>tempnam</a></td><td>tempnam now emits a notice when falling back to the
       temp directory of the system.</td></tr><tr><td>&nbsp;</td><td><a href='function.unpack.php'>unpack</a></td><td>The optional offset has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.unserialize.php'>unserialize</a></td><td>The allowed_classes element of
        options is now strictly typed, i.e. if anything
        other than an array or a bool is given,
        unserialize returns false and issues an
        E_WARNING.</td></tr><tr><td>&nbsp;</td><td><a href='reflectiontype.tostring.php'>ReflectionType::__toString</a></td><td>ReflectionType::__toString has been deprecated.</td></tr><tr><td>&nbsp;</td><td><a href='sessionhandler.gc.php'>SessionHandler::gc</a></td><td>Prior to this version, the function returned true on success.</td></tr><tr><td>&nbsp;</td><td><a href='sessionhandlerinterface.gc.php'>SessionHandlerInterface::gc</a></td><td>Prior to this version, the function returned true on success.</td></tr></tbody><tbody class="gen-changelog v7-1-0"><tr><td>7.0.16</td><td><a href='function.dns-get-record.php'>dns_get_record</a></td><td>Added support for CAA record type.</td></tr><tr><td>&nbsp;</td><td><a href='function.fopen.php'>fopen</a></td><td>The 'e' option was added.</td></tr></tbody><tbody class="gen-changelog v7-0-16"><tr><td>7.0.15</td><td><a href='function.get-defined-functions.php'>get_defined_functions</a></td><td>The exclude_disabled parameter has been added.</td></tr><tr><td>&nbsp;</td><td><a href='function.pack.php'>pack</a></td><td>The &quot;e&quot;, &quot;E&quot;, &quot;g&quot; and &quot;G&quot; codes were added to enable byte order support for float and double.</td></tr></tbody><tbody class="gen-changelog v7-0-15"><tr><td>7.0.11</td><td><a href='function.iconv-substr.php'>iconv_substr</a></td><td>If string is equal to
        offset characters long, an empty string will be
        returned. Prior to this version, false was returned in this case.</td></tr></tbody><tbody class="gen-changelog v7-0-11"><tr><td>7.0.10</td><td><a href='function.imagetypes.php'>imagetypes</a></td><td>IMG_WEBP added.</td></tr><tr><td>&nbsp;</td><td><a href='splfileobject.getcsvcontrol.php'>SplFileObject::getCsvControl</a></td><td>Added the escape character to the returned array.</td></tr><tr><td>&nbsp;</td><td><a href='sqlite3.construct.php'>SQLite3::__construct</a></td><td>The filename can now be empty to use a private,
       temporary on-disk database.</td></tr></tbody><tbody class="gen-changelog v7-0-10"><tr><td>7.0.9</td><td><a href='function.getenv.php'>getenv</a></td><td>The local_only parameter has been added.</td></tr></tbody><tbody class="gen-changelog v7-0-9"><tr><td>7.0.7</td><td><a href='function.curl-multi-setopt.php'>curl_multi_setopt</a></td><td>Introduced CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE,
        CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE,
        CURLMOPT_MAX_HOST_CONNECTIONS,
        CURLMOPT_MAX_PIPELINE_LENGTH and
        CURLMOPT_MAX_TOTAL_CONNECTIONS.</td></tr><tr><td>&nbsp;</td><td><a href='function.curl-setopt.php'>curl_setopt</a></td><td>Introduced CURL_HTTP_VERSION_2, CURL_HTTP_VERSION_2_PRIOR_KNOWLEDGE,
        CURL_HTTP_VERSION_2TLS, CURL_REDIR_POST_301,
        CURL_REDIR_POST_302, CURL_REDIR_POST_303,
        CURL_REDIR_POST_ALL, CURL_VERSION_KERBEROS5,
        CURL_VERSION_PSL, CURL_VERSION_UNIX_SOCKETS,
        CURLAUTH_NEGOTIATE, CURLAUTH_NTLM_WB,
        CURLFTP_CREATE_DIR, CURLFTP_CREATE_DIR_NONE,
        CURLFTP_CREATE_DIR_RETRY, CURLHEADER_SEPARATE,
        CURLHEADER_UNIFIED, CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE,
        CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE, CURLMOPT_MAX_HOST_CONNECTIONS,
        CURLMOPT_MAX_PIPELINE_LENGTH, CURLMOPT_MAX_TOTAL_CONNECTIONS,
        CURLOPT_CONNECT_TO, CURLOPT_DEFAULT_PROTOCOL,
        CURLOPT_DNS_INTERFACE, CURLOPT_DNS_LOCAL_IP4,
        CURLOPT_DNS_LOCAL_IP6, CURLOPT_EXPECT_100_TIMEOUT_MS,
        CURLOPT_HEADEROPT, CURLOPT_LOGIN_OPTIONS,
        CURLOPT_PATH_AS_IS, CURLOPT_PINNEDPUBLICKEY,
        CURLOPT_PIPEWAIT, CURLOPT_PROXY_SERVICE_NAME,
        CURLOPT_PROXYHEADER, CURLOPT_SASL_IR,
        CURLOPT_SERVICE_NAME, CURLOPT_SSL_ENABLE_ALPN,
        CURLOPT_SSL_ENABLE_NPN, CURLOPT_SSL_FALSESTART,
        CURLOPT_SSL_VERIFYSTATUS, CURLOPT_STREAM_WEIGHT,
        CURLOPT_TCP_FASTOPEN, CURLOPT_TFTP_NO_OPTIONS,
        CURLOPT_UNIX_SOCKET_PATH, CURLOPT_XOAUTH2_BEARER,
        CURLPROTO_SMB, CURLPROTO_SMBS,
        CURLPROXY_HTTP_1_0, CURLSSH_AUTH_AGENT and
        CURLSSLOPT_NO_REVOKE.</td></tr></tbody></table>
   </div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-base/blob/master/manual.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdoc.changelog%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=doc.changelog&amp;repo=en&amp;redirect=https://www.php.net/manual/en/doc.changelog.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="appendices.php">Appendices</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="history.php" title="History of PHP and Related Projects">History of PHP and Related Projects</a>
                        </li>
                                                <li class="">
                            <a href="examples.php" title="About manual examples">About manual examples</a>
                        </li>
                                                <li class="">
                            <a href="migration84.php" title="Migrating from PHP 8.3.x to PHP 8.4.x">Migrating from PHP 8.3.x to PHP 8.4.x</a>
                        </li>
                                                <li class="">
                            <a href="migration83.php" title="Migrating from PHP 8.2.x to PHP 8.3.x">Migrating from PHP 8.2.x to PHP 8.3.x</a>
                        </li>
                                                <li class="">
                            <a href="migration82.php" title="Migrating from PHP 8.1.x to PHP 8.2.x">Migrating from PHP 8.1.x to PHP 8.2.x</a>
                        </li>
                                                <li class="">
                            <a href="migration81.php" title="Migrating from PHP 8.0.x to PHP 8.1.x">Migrating from PHP 8.0.x to PHP 8.1.x</a>
                        </li>
                                                <li class="">
                            <a href="migration80.php" title="Migrating from PHP 7.4.x to PHP 8.0.x">Migrating from PHP 7.4.x to PHP 8.0.x</a>
                        </li>
                                                <li class="">
                            <a href="migration74.php" title="Migrating from PHP 7.3.x to PHP 7.4.x">Migrating from PHP 7.3.x to PHP 7.4.x</a>
                        </li>
                                                <li class="">
                            <a href="migration73.php" title="Migrating from PHP 7.2.x to PHP 7.3.x">Migrating from PHP 7.2.x to PHP 7.3.x</a>
                        </li>
                                                <li class="">
                            <a href="migration72.php" title="Migrating from PHP 7.1.x to PHP 7.2.x">Migrating from PHP 7.1.x to PHP 7.2.x</a>
                        </li>
                                                <li class="">
                            <a href="migration71.php" title="Migrating from PHP 7.0.x to PHP 7.1.x">Migrating from PHP 7.0.x to PHP 7.1.x</a>
                        </li>
                                                <li class="">
                            <a href="migration70.php" title="Migrating from PHP 5.6.x to PHP 7.0.x">Migrating from PHP 5.6.x to PHP 7.0.x</a>
                        </li>
                                                <li class="">
                            <a href="migration56.php" title="Migrating from PHP 5.5.x to PHP 5.6.x">Migrating from PHP 5.5.x to PHP 5.6.x</a>
                        </li>
                                                <li class="">
                            <a href="debugger.php" title="Debugging in PHP">Debugging in PHP</a>
                        </li>
                                                <li class="">
                            <a href="configure.php" title="Configure options">Configure options</a>
                        </li>
                                                <li class="">
                            <a href="ini.php" title="php.ini directives">php.ini directives</a>
                        </li>
                                                <li class="">
                            <a href="extensions.php" title="Extension List/Categorization">Extension List/Categorization</a>
                        </li>
                                                <li class="">
                            <a href="aliases.php" title="List of Function Aliases">List of Function Aliases</a>
                        </li>
                                                <li class="">
                            <a href="reserved.php" title="List of Reserved Words">List of Reserved Words</a>
                        </li>
                                                <li class="">
                            <a href="resource.php" title="List of Resource Types">List of Resource Types</a>
                        </li>
                                                <li class="">
                            <a href="filters.php" title="List of Available Filters">List of Available Filters</a>
                        </li>
                                                <li class="">
                            <a href="transports.php" title="List of Supported Socket Transports">List of Supported Socket Transports</a>
                        </li>
                                                <li class="">
                            <a href="types.comparisons.php" title="PHP type comparison tables">PHP type comparison tables</a>
                        </li>
                                                <li class="">
                            <a href="tokens.php" title="List of Parser Tokens">List of Parser Tokens</a>
                        </li>
                                                <li class="">
                            <a href="userlandnaming.php" title="Userland Naming Guide">Userland Naming Guide</a>
                        </li>
                                                <li class="">
                            <a href="about.php" title="About the manual">About the manual</a>
                        </li>
                                                <li class="">
                            <a href="cc.license.php" title="Creative Commons Attribution 3.0">Creative Commons Attribution 3.0</a>
                        </li>
                                                <li class="">
                            <a href="indexes.php" title="Index listing">Index listing</a>
                        </li>
                                                <li class="current">
                            <a href="doc.changelog.php" title="Changelog">Changelog</a>
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
