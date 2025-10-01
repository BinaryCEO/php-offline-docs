<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: dl - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.dl.php">
 <link rel="shorturl" href="https://www.php.net/dl">
 <link rel="alternate" href="https://www.php.net/dl" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.info.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.cli-set-process-title.php">
 <link rel="next" href="https://www.php.net/manual/en/function.extension-loaded.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.dl.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.dl.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.dl.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.dl.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.dl.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.dl.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.dl.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.dl.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.dl.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.dl.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.dl.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Loads a PHP extension at runtime" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: dl - Manual" />
<meta name="twitter:description" content="Loads a PHP extension at runtime" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: dl - Manual" />
<meta itemprop="description" content="Loads a PHP extension at runtime" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Loads a PHP extension at runtime" />

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
        <a href="function.extension-loaded.php">
          extension_loaded &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.cli-set-process-title.php">
          &laquo; cli_set_process_title        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.info.php'>PHP Options/Info</a></li>      <li><a href='ref.info.php'>PHP Options/Info Functions</a></li>      </ul>
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
            <option value='en/function.dl.php' selected="selected">English</option>
            <option value='de/function.dl.php'>German</option>
            <option value='es/function.dl.php'>Spanish</option>
            <option value='fr/function.dl.php'>French</option>
            <option value='it/function.dl.php'>Italian</option>
            <option value='ja/function.dl.php'>Japanese</option>
            <option value='pt_BR/function.dl.php'>Brazilian Portuguese</option>
            <option value='ru/function.dl.php'>Russian</option>
            <option value='tr/function.dl.php'>Turkish</option>
            <option value='uk/function.dl.php'>Ukrainian</option>
            <option value='zh/function.dl.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.dl" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">dl</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">dl</span> &mdash; <span class="dc-title">Loads a PHP extension at runtime</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.dl-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>dl</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$extension_filename</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Loads the PHP extension given by the parameter
   <code class="parameter">extension_filename</code>.
  </p>
  <p class="para">
   Use <span class="function"><a href="function.extension-loaded.php" class="function">extension_loaded()</a></span> to test whether a given
   extension is already available or not. This works on both built-in
   extensions and dynamically loaded ones (either through <var class="filename">php.ini</var> or
   <span class="function"><strong>dl()</strong></span>).
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">
    This function is only available for the <abbr title="Command Line Interpreter/Interface">CLI</abbr> and embed <abbr title="Server Application Programming Interface">SAPI</abbr>s,
    and the <abbr title="Common Gateway Interface">CGI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> when run from the command line.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.dl-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">extension_filename</code></dt>
     <dd>
      <p class="para">
       This parameter is <em>only</em> the filename of the
       extension to load which also depends on your platform. For example,
       the <a href="ref.sockets.php" class="link">sockets</a> extension (if compiled
       as a shared module, not the default!) would be called 
       <var class="filename">sockets.so</var> on Unix platforms whereas it is called
       <var class="filename">php_sockets.dll</var> on the Windows platform.
      </p>
      <p class="para">
       The directory where the extension is loaded from depends on your
       platform:
      </p>
      <p class="para">
       Windows - If not explicitly set in the <var class="filename">php.ini</var>, the extension is
       loaded from <var class="filename">C:\php5\</var> by default.
      </p>
      <p class="para">
       Unix - If not explicitly set in the <var class="filename">php.ini</var>, the default extension
       directory depends on
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          whether PHP has been built with <code class="literal">--enable-debug</code>
          or not
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          whether PHP has been built with ZTS (Zend Thread Safety)
          support or not
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          the current internal <code class="literal">ZEND_MODULE_API_NO</code> (Zend
          internal module API number, which is basically the date on which a
          major module API change happened, e.g. <code class="literal">20010901</code>)
         </span>
        </li>
       </ul>
       Taking into account the above, the directory then defaults to
       <code class="literal">&lt;install-dir&gt;/lib/php/extensions/ &lt;debug-or-not&gt;-&lt;zts-or-not&gt;-ZEND_MODULE_API_NO</code>,
       e.g.
       <var class="filename">/usr/local/php/lib/php/extensions/debug-non-zts-20010901</var>
       or
       <var class="filename">/usr/local/php/lib/php/extensions/no-debug-zts-20010901</var>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.dl-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure. If the functionality of loading modules is not available
   or has been disabled (by setting
   <a href="info.configuration.php#ini.enable-dl" class="link">enable_dl</a> off
   in <var class="filename">php.ini</var>) an <strong><code><a href="errorfunc.constants.php#constant.e-error">E_ERROR</a></code></strong> is emitted
   and execution is stopped. If <span class="function"><strong>dl()</strong></span> fails because the
   specified library couldn&#039;t be loaded, in addition to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> an
   <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> message is emitted.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.dl-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-637">
    <p><strong>Example #1 <span class="function"><strong>dl()</strong></span> examples</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Example loading an extension based on OS<br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">extension_loaded</span><span style="color: #007700">(</span><span style="color: #DD0000">'sqlite'</span><span style="color: #007700">)) {<br />    if (</span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">PHP_OS</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">)) === </span><span style="color: #DD0000">'WIN'</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">dl</span><span style="color: #007700">(</span><span style="color: #DD0000">'php_sqlite.dll'</span><span style="color: #007700">);<br />    } else {<br />        </span><span style="color: #0000BB">dl</span><span style="color: #007700">(</span><span style="color: #DD0000">'sqlite.so'</span><span style="color: #007700">);<br />    }<br />}<br /><br /></span><span style="color: #FF8000">// Or using PHP_SHLIB_SUFFIX constant<br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">extension_loaded</span><span style="color: #007700">(</span><span style="color: #DD0000">'sqlite'</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">$prefix </span><span style="color: #007700">= (</span><span style="color: #0000BB">PHP_SHLIB_SUFFIX </span><span style="color: #007700">=== </span><span style="color: #DD0000">'dll'</span><span style="color: #007700">) ? </span><span style="color: #DD0000">'php_' </span><span style="color: #007700">: </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">dl</span><span style="color: #007700">(</span><span style="color: #0000BB">$prefix </span><span style="color: #007700">. </span><span style="color: #DD0000">'sqlite.' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_SHLIB_SUFFIX</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.dl-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    <span class="function"><strong>dl()</strong></span> is case sensitive on Unix platforms.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.dl-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="ini.core.php#ini.extension" class="link">Extension Loading Directives</a></li>
    <li><span class="function"><a href="function.extension-loaded.php" class="function" rel="rdfs-seeAlso">extension_loaded()</a> - Find out whether an extension is loaded</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/info/functions/dl.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.dl%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.dl&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dl.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="88566">  <div class="votes">
    <div id="Vu88566">
    <a href="/manual/vote-note.php?id=88566&amp;page=function.dl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88566">
    <a href="/manual/vote-note.php?id=88566&amp;page=function.dl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88566" title="68% like this...">
    15
    </div>
  </div>
  <a href="#88566" class="name">
  <strong class="user"><em>shaunspiller at spammenot-gmail dot com</em></strong></a><a class="genanchor" href="#88566"> &para;</a><div class="date" title="2009-01-29 12:34"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88566">
<div class="phpcode"><code><span class="html">dl is awkward because the filename format is OS-dependent and because it can complain if the extension is already loaded. This wrapper function fixes that:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">load_lib</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">, </span><span class="default">$f </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />    return </span><span class="default">extension_loaded</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">) or </span><span class="default">dl</span><span class="keyword">(((</span><span class="default">PHP_SHLIB_SUFFIX </span><span class="keyword">=== </span><span class="string">'dll'</span><span class="keyword">) ? </span><span class="string">'php_' </span><span class="keyword">: </span><span class="string">''</span><span class="keyword">) . (</span><span class="default">$f </span><span class="keyword">? </span><span class="default">$f </span><span class="keyword">: </span><span class="default">$n</span><span class="keyword">) . </span><span class="string">'.' </span><span class="keyword">. </span><span class="default">PHP_SHLIB_SUFFIX</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Examples:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// ensure we have SSL and MySQL support<br /></span><span class="default">load_lib</span><span class="keyword">(</span><span class="string">'openssl'</span><span class="keyword">);<br /></span><span class="default">load_lib</span><span class="keyword">(</span><span class="string">'mysql'</span><span class="keyword">);<br /><br /></span><span class="comment">// a rare few extensions have a different filename to their extension name, such as the image (gd) library, so we specify them like this:<br /></span><span class="default">load_lib</span><span class="keyword">(</span><span class="string">'gd'</span><span class="keyword">, </span><span class="string">'gd2'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59424">  <div class="votes">
    <div id="Vu59424">
    <a href="/manual/vote-note.php?id=59424&amp;page=function.dl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59424">
    <a href="/manual/vote-note.php?id=59424&amp;page=function.dl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59424" title="46% like this...">
    -2
    </div>
  </div>
  <a href="#59424" class="name">
  <strong class="user"><em>mag_2000 at front dot ru</em></strong></a><a class="genanchor" href="#59424"> &para;</a><div class="date" title="2005-12-06 11:13"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59424">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">dl_local</span><span class="keyword">( </span><span class="default">$extensionFile </span><span class="keyword">) {<br />   </span><span class="comment">//make sure that we are ABLE to load libraries<br />   </span><span class="keyword">if( !(bool)</span><span class="default">ini_get</span><span class="keyword">( </span><span class="string">"enable_dl" </span><span class="keyword">) || (bool)</span><span class="default">ini_get</span><span class="keyword">( </span><span class="string">"safe_mode" </span><span class="keyword">) ) {<br />     die( </span><span class="string">"dh_local(): Loading extensions is not permitted.\n" </span><span class="keyword">);<br />   }<br /><br />     </span><span class="comment">//check to make sure the file exists<br />   </span><span class="keyword">if( !</span><span class="default">file_exists</span><span class="keyword">( </span><span class="default">$extensionFile </span><span class="keyword">) ) {<br />     die( </span><span class="string">"dl_local(): File '</span><span class="default">$extensionFile</span><span class="string">' does not exist.\n" </span><span class="keyword">);<br />   }<br />   <br />   </span><span class="comment">//check the file permissions<br />   </span><span class="keyword">if( !</span><span class="default">is_executable</span><span class="keyword">( </span><span class="default">$extensionFile </span><span class="keyword">) ) {<br />     die( </span><span class="string">"dl_local(): File '</span><span class="default">$extensionFile</span><span class="string">' is not executable.\n" </span><span class="keyword">);<br />   }<br /><br /> </span><span class="comment">//we figure out the path<br /> </span><span class="default">$currentDir </span><span class="keyword">= </span><span class="default">getcwd</span><span class="keyword">() . </span><span class="string">"/"</span><span class="keyword">;<br /> </span><span class="default">$currentExtPath </span><span class="keyword">= </span><span class="default">ini_get</span><span class="keyword">( </span><span class="string">"extension_dir" </span><span class="keyword">);<br /> </span><span class="default">$subDirs </span><span class="keyword">= </span><span class="default">preg_match_all</span><span class="keyword">( </span><span class="string">"/\//" </span><span class="keyword">, </span><span class="default">$currentExtPath </span><span class="keyword">, </span><span class="default">$matches </span><span class="keyword">);<br /> unset( </span><span class="default">$matches </span><span class="keyword">);<br /> <br />     </span><span class="comment">//lets make sure we extracted a valid extension path<br />   </span><span class="keyword">if( !(bool)</span><span class="default">$subDirs </span><span class="keyword">) {<br />     die( </span><span class="string">"dl_local(): Could not determine a valid extension path [extension_dir].\n" </span><span class="keyword">);<br />   }<br /> <br /> </span><span class="default">$extPathLastChar </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$currentExtPath </span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">;<br /> <br />   if( </span><span class="default">$extPathLastChar </span><span class="keyword">== </span><span class="default">strrpos</span><span class="keyword">( </span><span class="default">$currentExtPath </span><span class="keyword">, </span><span class="string">"/" </span><span class="keyword">) ) {<br />     </span><span class="default">$subDirs</span><span class="keyword">--;<br />   }<br /><br /> </span><span class="default">$backDirStr </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">; <br />     for( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$subDirs</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++ ) {<br />     </span><span class="default">$backDirStr </span><span class="keyword">.= </span><span class="string">".."</span><span class="keyword">;<br />       if( </span><span class="default">$i </span><span class="keyword">!= </span><span class="default">$subDirs </span><span class="keyword">) {<br />         </span><span class="default">$backDirStr </span><span class="keyword">.= </span><span class="string">"/"</span><span class="keyword">;<br />       }<br />   }<br /><br /> </span><span class="comment">//construct the final path to load<br /> </span><span class="default">$finalExtPath </span><span class="keyword">= </span><span class="default">$backDirStr </span><span class="keyword">. </span><span class="default">$currentDir </span><span class="keyword">. </span><span class="default">$extensionFile</span><span class="keyword">;<br /> <br />   </span><span class="comment">//now we execute dl() to actually load the module<br />     </span><span class="keyword">if( !</span><span class="default">dl</span><span class="keyword">( </span><span class="default">$finalExtPath </span><span class="keyword">) ) {<br />     die();<br />   }<br /><br /> </span><span class="comment">//if the module was loaded correctly, we must bow grab the module name<br /> </span><span class="default">$loadedExtensions </span><span class="keyword">= </span><span class="default">get_loaded_extensions</span><span class="keyword">();<br /> </span><span class="default">$thisExtName </span><span class="keyword">= </span><span class="default">$loadedExtensions</span><span class="keyword">[ </span><span class="default">sizeof</span><span class="keyword">( </span><span class="default">$loadedExtensions </span><span class="keyword">) - </span><span class="default">1 </span><span class="keyword">];<br />  <br /> </span><span class="comment">//lastly, we return the extension name<br />  </span><span class="keyword">return </span><span class="default">$thisExtName</span><span class="keyword">;<br /><br />}</span><span class="comment">//end dl_local()<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.dl&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dl.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.info.php">PHP Options/Info Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.assert.php" title="assert">assert</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-get-process-title.php" title="cli_&#8203;get_&#8203;process_&#8203;title">cli_&#8203;get_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-set-process-title.php" title="cli_&#8203;set_&#8203;process_&#8203;title">cli_&#8203;set_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="current">
                            <a href="function.dl.php" title="dl">dl</a>
                        </li>
                                                <li class="">
                            <a href="function.extension-loaded.php" title="extension_&#8203;loaded">extension_&#8203;loaded</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-collect-cycles.php" title="gc_&#8203;collect_&#8203;cycles">gc_&#8203;collect_&#8203;cycles</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-disable.php" title="gc_&#8203;disable">gc_&#8203;disable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enable.php" title="gc_&#8203;enable">gc_&#8203;enable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enabled.php" title="gc_&#8203;enabled">gc_&#8203;enabled</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-mem-caches.php" title="gc_&#8203;mem_&#8203;caches">gc_&#8203;mem_&#8203;caches</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-status.php" title="gc_&#8203;status">gc_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.get-cfg-var.php" title="get_&#8203;cfg_&#8203;var">get_&#8203;cfg_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.get-current-user.php" title="get_&#8203;current_&#8203;user">get_&#8203;current_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-constants.php" title="get_&#8203;defined_&#8203;constants">get_&#8203;defined_&#8203;constants</a>
                        </li>
                                                <li class="">
                            <a href="function.get-extension-funcs.php" title="get_&#8203;extension_&#8203;funcs">get_&#8203;extension_&#8203;funcs</a>
                        </li>
                                                <li class="">
                            <a href="function.get-include-path.php" title="get_&#8203;include_&#8203;path">get_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.get-included-files.php" title="get_&#8203;included_&#8203;files">get_&#8203;included_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-loaded-extensions.php" title="get_&#8203;loaded_&#8203;extensions">get_&#8203;loaded_&#8203;extensions</a>
                        </li>
                                                <li class="">
                            <a href="function.get-required-files.php" title="get_&#8203;required_&#8203;files">get_&#8203;required_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resources.php" title="get_&#8203;resources">get_&#8203;resources</a>
                        </li>
                                                <li class="">
                            <a href="function.getenv.php" title="getenv">getenv</a>
                        </li>
                                                <li class="">
                            <a href="function.getlastmod.php" title="getlastmod">getlastmod</a>
                        </li>
                                                <li class="">
                            <a href="function.getmygid.php" title="getmygid">getmygid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyinode.php" title="getmyinode">getmyinode</a>
                        </li>
                                                <li class="">
                            <a href="function.getmypid.php" title="getmypid">getmypid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyuid.php" title="getmyuid">getmyuid</a>
                        </li>
                                                <li class="">
                            <a href="function.getopt.php" title="getopt">getopt</a>
                        </li>
                                                <li class="">
                            <a href="function.getrusage.php" title="getrusage">getrusage</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-alter.php" title="ini_&#8203;alter">ini_&#8203;alter</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-get.php" title="ini_&#8203;get">ini_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-get-all.php" title="ini_&#8203;get_&#8203;all">ini_&#8203;get_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-parse-quantity.php" title="ini_&#8203;parse_&#8203;quantity">ini_&#8203;parse_&#8203;quantity</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-restore.php" title="ini_&#8203;restore">ini_&#8203;restore</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-set.php" title="ini_&#8203;set">ini_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-get-peak-usage.php" title="memory_&#8203;get_&#8203;peak_&#8203;usage">memory_&#8203;get_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-get-usage.php" title="memory_&#8203;get_&#8203;usage">memory_&#8203;get_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-reset-peak-usage.php" title="memory_&#8203;reset_&#8203;peak_&#8203;usage">memory_&#8203;reset_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-loaded-file.php" title="php_&#8203;ini_&#8203;loaded_&#8203;file">php_&#8203;ini_&#8203;loaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-scanned-files.php" title="php_&#8203;ini_&#8203;scanned_&#8203;files">php_&#8203;ini_&#8203;scanned_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.php-sapi-name.php" title="php_&#8203;sapi_&#8203;name">php_&#8203;sapi_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.php-uname.php" title="php_&#8203;uname">php_&#8203;uname</a>
                        </li>
                                                <li class="">
                            <a href="function.phpcredits.php" title="phpcredits">phpcredits</a>
                        </li>
                                                <li class="">
                            <a href="function.phpinfo.php" title="phpinfo">phpinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.phpversion.php" title="phpversion">phpversion</a>
                        </li>
                                                <li class="">
                            <a href="function.putenv.php" title="putenv">putenv</a>
                        </li>
                                                <li class="">
                            <a href="function.set-include-path.php" title="set_&#8203;include_&#8203;path">set_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.set-time-limit.php" title="set_&#8203;time_&#8203;limit">set_&#8203;time_&#8203;limit</a>
                        </li>
                                                <li class="">
                            <a href="function.sys-get-temp-dir.php" title="sys_&#8203;get_&#8203;temp_&#8203;dir">sys_&#8203;get_&#8203;temp_&#8203;dir</a>
                        </li>
                                                <li class="">
                            <a href="function.version-compare.php" title="version_&#8203;compare">version_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-thread-id.php" title="zend_&#8203;thread_&#8203;id">zend_&#8203;thread_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-version.php" title="zend_&#8203;version">zend_&#8203;version</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.assert-options.php" title="assert_&#8203;options">assert_&#8203;options</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-gpc.php" title="get_&#8203;magic_&#8203;quotes_&#8203;gpc">get_&#8203;magic_&#8203;quotes_&#8203;gpc</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-runtime.php" title="get_&#8203;magic_&#8203;quotes_&#8203;runtime">get_&#8203;magic_&#8203;quotes_&#8203;runtime</a>
                    </li>
                                    <li class="">
                        <a href="function.restore-include-path.php" title="restore_&#8203;include_&#8203;path">restore_&#8203;include_&#8203;path</a>
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
