<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: The configuration file - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/configuration.file.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/configuration.file.php">
 <link rel="alternate" href="https://www.php.net/manual/en/configuration.file.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/configuration.php">
 <link rel="prev" href="https://www.php.net/manual/en/configuration.php">
 <link rel="next" href="https://www.php.net/manual/en/configuration.file.per-user.php">

 <link rel="alternate" href="https://www.php.net/manual/en/configuration.file.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/configuration.file.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/configuration.file.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/configuration.file.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/configuration.file.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/configuration.file.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/configuration.file.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/configuration.file.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/configuration.file.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/configuration.file.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/configuration.file.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The configuration file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: The configuration file - Manual" />
<meta name="twitter:description" content="The configuration file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: The configuration file - Manual" />
<meta itemprop="description" content="The configuration file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The configuration file" />

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
        <a href="configuration.file.per-user.php">
          .user.ini files &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="configuration.php">
          &laquo; Runtime Configuration        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='install.php'>Installation and Configuration</a></li>      <li><a href='configuration.php'>Runtime Configuration</a></li>      </ul>
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
            <option value='en/configuration.file.php' selected="selected">English</option>
            <option value='de/configuration.file.php'>German</option>
            <option value='es/configuration.file.php'>Spanish</option>
            <option value='fr/configuration.file.php'>French</option>
            <option value='it/configuration.file.php'>Italian</option>
            <option value='ja/configuration.file.php'>Japanese</option>
            <option value='pt_BR/configuration.file.php'>Brazilian Portuguese</option>
            <option value='ru/configuration.file.php'>Russian</option>
            <option value='tr/configuration.file.php'>Turkish</option>
            <option value='uk/configuration.file.php'>Ukrainian</option>
            <option value='zh/configuration.file.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="configuration.file" class="sect1">
  <h2 class="title">The configuration file</h2>

  <p class="simpara">
   The configuration file (<var class="filename">php.ini</var>)
   is read when PHP starts up. For the server module versions of PHP,
   this happens only once when the web server is started. For the
   <abbr title="Common Gateway Interface">CGI</abbr> and <abbr title="Command Line Interpreter/Interface">CLI</abbr> versions, it happens on
   every invocation.
  </p>
  <p class="para">
   <var class="filename">php.ini</var> is searched for in these locations (in order):
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      SAPI module specific location (<code class="literal">PHPIniDir</code> directive
      in Apache 2, <code class="literal">-c</code> command line option in CGI and CLI)
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      The <var class="varname">PHPRC</var> environment variable.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      The location of the <code class="literal">php.ini</code> file
      can be set for different versions of PHP. The root of the registry keys depends on 32- or 64-bitness of the installed OS and PHP.
      For 32-bit PHP on a 32-bit OS or a 64-bit PHP on a 64-bit OS use <code class="literal">[(HKEY_LOCAL_MACHINE\SOFTWARE\PHP]</code> for 32-bit version of PHP on a 64-bit OS use <code class="literal">[HKEY_LOCAL_MACHINE\SOFTWARE\WOW6432Node\PHP]</code>] instead.
      For same bitness installation the following registry keys
      are examined in order:
      <code class="literal">[HKEY_LOCAL_MACHINE\SOFTWARE\PHP\x.y.z]</code>,
      <code class="literal">[HKEY_LOCAL_MACHINE\SOFTWARE\PHP\x.y]</code> and
      <code class="literal">[HKEY_LOCAL_MACHINE\SOFTWARE\PHP\x]</code>, where
      x, y and z mean the PHP major, minor and release versions.
      For 32 bit versions of PHP on a 64 bit OS the following registry keys are examined in order:
      <code class="literal">[HKEY_LOCAL_MACHINE\SOFTWARE\WOW6421Node\PHP\x.y.z]</code>,
      <code class="literal">[HKEY_LOCAL_MACHINE\SOFTWARE\WOW6421Node\PHP\x.y]</code> and
      <code class="literal">[HKEY_LOCAL_MACHINE\SOFTWARE\WOW6421Node\PHP\x]</code>, where
      x, y and z mean the PHP major, minor and release versions.
      If there is a
      value for <code class="literal">IniFilePath</code> in any of these keys, the first
      one found will be used as the location of the <code class="literal">php.ini</code>
      (Windows only).
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <code class="literal">[HKEY_LOCAL_MACHINE\SOFTWARE\PHP]</code> or
      <code class="literal">[HKEY_LOCAL_MACHINE\SOFTWARE\WOW6432Node\PHP]</code>, value of
      <code class="literal">IniFilePath</code> (Windows only).
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Current working directory (except CLI).
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      The web server&#039;s directory (for SAPI modules), or directory of PHP
      (otherwise in Windows).
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Windows directory (<var class="filename">C:\windows</var>
      or <var class="filename">C:\winnt</var>) (for Windows), or
      <code class="literal">--with-config-file-path</code> compile time option.
     </span>
    </li>
   </ul>
  </p>
  <p class="para">
   If <var class="filename">php-SAPI.ini</var> exists (where SAPI is the SAPI in use,
   so, for example, <var class="filename">php-cli.ini</var> or
   <var class="filename">php-apache.ini</var>), it is used instead of <var class="filename">php.ini</var>.
   The SAPI name can be determined with <span class="function"><a href="function.php-sapi-name.php" class="function">php_sapi_name()</a></span>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The Apache web server changes the directory to root at startup, causing
    PHP to attempt to read <var class="filename">php.ini</var> from the root filesystem if it exists.
   </p>
  </p></blockquote>
  <p class="simpara">
   Environment variables can be referenced within configuration values
   in <var class="filename">php.ini</var> as shown below. As of PHP 8.3.0, a fallback value can
   be specified that will be used when the referenced variable is not
   defined.
  </p>
  <div class="example" id="example-33">
   <p><strong>Example #1 <var class="filename">php.ini</var> Environment Variables</strong></p>
    <div class="example-contents">
<div class="inicode"><pre class="inicode">; PHP_MEMORY_LIMIT is taken from environment
memory_limit = ${PHP_MEMORY_LIMIT}
; If PHP_MAX_EXECUTION_TIME is not defined, it will fall back to 30
max_execution_time = ${PHP_MAX_EXECUTION_TIME:-30}</pre>
</div>
   </div>

  </div>
  <p class="para">
   The <var class="filename">php.ini</var> directives handled by extensions are documented
   on the respective pages of the extensions themselves. A <a href="ini.php" class="link">list of
   the core directives</a> is available in the appendix. Not all
   PHP directives are necessarily documented in this manual: for a complete list
   of directives available in your PHP version, please read your well commented
   <var class="filename">php.ini</var> file. Alternatively, you may find
   <a href="https://github.com/php/php-src/blob/master/php.ini-production" class="link external">&raquo;&nbsp;the latest <var class="filename">php.ini</var></a> from Git
   helpful too.
  </p>
  <p class="para">
   <div class="example" id="example-34">
    <p><strong>Example #2 <var class="filename">php.ini</var> example</strong></p>
    <div class="example-contents">
<div class="inicode"><pre class="inicode">; any text on a line after an unquoted semicolon (;) is ignored
[php] ; section markers (text within square brackets) are also ignored
; Boolean values can be set to either:
;    true, on, yes
; or false, off, no, none
register_globals = off
track_errors = yes

; you can enclose strings in double-quotes
include_path = &quot;.:/usr/local/lib/php&quot;

; backslashes are treated the same as any other character
include_path = &quot;.;c:\php\lib&quot;</pre>
</div>
    </div>

    
   </div>
  </p>
  <p class="para">
   It is possible to refer to existing .ini variables from
   within .ini files. Example: <code class="literal">open_basedir = ${open_basedir}
   &quot;:/new/dir&quot;</code>.
  </p>
  <div class="sect2" id="configuration.file.scan">
   <h3 class="title">Scan directories</h3>

   <p class="para">
    It is possible to configure PHP to scan for .ini files in a directory
    after reading <var class="filename">php.ini</var>. This can be done at compile time by setting the
    <strong class="option configure">--with-config-file-scan-dir</strong> option.
    The scan directory can then be overridden at run time
    by setting the <var class="varname">PHP_INI_SCAN_DIR</var> environment variable.
   </p>

   <p class="para">
    It is possible to scan multiple directories by separating them with the
    platform-specific path separator (<code class="literal">;</code> on Windows, NetWare
    and RISC OS; <code class="literal">:</code> on all other platforms; the value PHP is
    using is available as the <strong><code><a href="dir.constants.php#constant.path-separator">PATH_SEPARATOR</a></code></strong> constant).
    If a blank directory is given in <var class="varname">PHP_INI_SCAN_DIR</var>, PHP
    will also scan the directory given at compile time via
    <strong class="option configure">--with-config-file-scan-dir</strong>.
   </p>

   <p class="para">
    Within each directory, PHP will scan all files ending in
    <code class="literal">.ini</code> in alphabetical order. A list of the files that
    were loaded, and in what order, is available by calling
    <span class="function"><a href="function.php-ini-scanned-files.php" class="function">php_ini_scanned_files()</a></span>, or by running PHP with the
    <strong class="option unknown">--ini</strong> option.
   </p>

   <div class="informalexample">
    <div class="example-contents screen">
<div class="cdata"><pre>
Assuming PHP is configured with --with-config-file-scan-dir=/etc/php.d,
and that the path separator is :...

$ php
  PHP will load all files in /etc/php.d/*.ini as configuration files.

$ PHP_INI_SCAN_DIR=/usr/local/etc/php.d php
  PHP will load all files in /usr/local/etc/php.d/*.ini as
  configuration files.

$ PHP_INI_SCAN_DIR=:/usr/local/etc/php.d php
  PHP will load all files in /etc/php.d/*.ini, then
  /usr/local/etc/php.d/*.ini as configuration files.

$ PHP_INI_SCAN_DIR=/usr/local/etc/php.d: php
  PHP will load all files in /usr/local/etc/php.d/*.ini, then
  /etc/php.d/*.ini as configuration files.
</pre></div>
    </div>
   </div>
  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/install/ini.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fconfiguration.file%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=configuration.file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/configuration.file.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126333">  <div class="votes">
    <div id="Vu126333">
    <a href="/manual/vote-note.php?id=126333&amp;page=configuration.file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126333">
    <a href="/manual/vote-note.php?id=126333&amp;page=configuration.file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126333" title="57% like this...">
    21
    </div>
  </div>
  <a href="#126333" class="name">
  <strong class="user"><em>weili</em></strong></a><a class="genanchor" href="#126333"> &para;</a><div class="date" title="2021-08-12 04:00"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126333">
<div class="phpcode"><code><span class="html">For someone who's also wondering.<br /><br />PHP can work even if there is no configuration file(php.ini) loaded,<br />it will simply applies the default values to directives.</span></code></div>
  </div>
 </div>
  <div class="note" id="130405">  <div class="votes">
    <div id="Vu130405">
    <a href="/manual/vote-note.php?id=130405&amp;page=configuration.file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130405">
    <a href="/manual/vote-note.php?id=130405&amp;page=configuration.file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130405" title="66% like this...">
    2
    </div>
  </div>
  <a href="#130405" class="name">
  <strong class="user"><em>grzegorz129 at gmail dot com</em></strong></a><a class="genanchor" href="#130405"> &para;</a><div class="date" title="2025-07-03 10:39"><strong>2 months ago</strong></div>
  <div class="text" id="Hcom130405">
<div class="phpcode"><code><span class="html">It is worth noting that  $PHP_INI_SCAN_DIR is **not** recursive, which offers flexibility in organizing configuration in base-environment fashion:<br /><br />$ mkdir -p /tmp/php_conf/prod /tmp/php_conf/dev <br />$ touch /tmp/php_conf/php.base.ini /tmp/php_conf/prod/php.ini /tmp/php_conf/dev/php.ini<br />$ export PHP_INI_SCAN_DIR="/tmp/php_conf:/tmp/php_conf/dev"<br />$ php --ini<br />//...<br />Scan for additional .ini files in: /tmp/php_conf:/tmp/php_conf/dev<br />Additional .ini files parsed:      /tmp/php_conf/php.base.ini,<br />/tmp/php_conf/dev/php.ini<br /><br />Such behavior can be used with docker where whole a subtree of configs is mounted into a dev-container, with ability to control which set of files is loaded using an environment variable.</span></code></div>
  </div>
 </div>
  <div class="note" id="129073">  <div class="votes">
    <div id="Vu129073">
    <a href="/manual/vote-note.php?id=129073&amp;page=configuration.file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129073">
    <a href="/manual/vote-note.php?id=129073&amp;page=configuration.file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129073" title="58% like this...">
    6
    </div>
  </div>
  <a href="#129073" class="name">
  <strong class="user"><em>Pictor13</em></strong></a><a class="genanchor" href="#129073"> &para;</a><div class="date" title="2023-11-27 09:12"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129073">
<div class="phpcode"><code><span class="html">Notice that `error_reporting` CANNOT be interpolated with an environment variable (e.g. `error_reporting = ${PHP_ERROR_REPORTING}`).<br /><br />`error_reporting` is treated differently than other directives:<br />if assigned an environment variable, this will be silently ignored and replaced with value `0` (aka no-reporting).<br /><br />I couldn't find documentation about it.<br />Is maybe an info that should be added in <a href="https://github.com/php/php-src/blob/8f5156fcba9906664ecd97e4c279ee980e522121/php.ini-production#L451-L500" rel="nofollow" target="_blank">https://github.com/php/php-src/blob/8f5156fcba9906664ecd97e4c279ee980e522121/php.ini-production#L451-L500</a> ?<br /><br />I am not aware if this specific behavior affects only `error_reporting` or also other directive.</span></code></div>
  </div>
 </div>
  <div class="note" id="130483">  <div class="votes">
    <div id="Vu130483">
    <a href="/manual/vote-note.php?id=130483&amp;page=configuration.file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130483">
    <a href="/manual/vote-note.php?id=130483&amp;page=configuration.file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130483" title="no votes...">
    0
    </div>
  </div>
  <a href="#130483" class="name">
  <strong class="user"><em>yannick_duchene at yahoo dot fr</em></strong></a><a class="genanchor" href="#130483"> &para;</a><div class="date" title="2025-09-15 09:58"><strong>14 days ago</strong></div>
  <div class="text" id="Hcom130483">
<div class="phpcode"><code><span class="html">It seems, despite its name, the PHPIniDir directive is often used to designate a file, not always a directory. It still work with PHP8 and this is used for 10 years at least.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=configuration.file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/configuration.file.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="configuration.php">Runtime Configuration</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="configuration.file.php" title="The configuration file">The configuration file</a>
                        </li>
                                                <li class="">
                            <a href="configuration.file.per-user.php" title=".user.ini files">.user.ini files</a>
                        </li>
                                                <li class="">
                            <a href="configuration.changes.modes.php" title="Where a configuration setting may be set">Where a configuration setting may be set</a>
                        </li>
                                                <li class="">
                            <a href="configuration.changes.php" title="How to change configuration settings">How to change configuration settings</a>
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
