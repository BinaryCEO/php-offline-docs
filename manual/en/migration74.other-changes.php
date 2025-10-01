<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Other Changes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration74.other-changes.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration74.other-changes.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration74.other-changes.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration74.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration74.removed-extensions.php">
 <link rel="next" href="https://www.php.net/manual/en/migration74.windows-support.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration74.other-changes.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration74.other-changes.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration74.other-changes.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration74.other-changes.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration74.other-changes.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration74.other-changes.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration74.other-changes.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration74.other-changes.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration74.other-changes.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration74.other-changes.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration74.other-changes.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Other Changes" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Other Changes - Manual" />
<meta name="twitter:description" content="Other Changes" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Other Changes - Manual" />
<meta itemprop="description" content="Other Changes" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Other Changes" />

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
        <a href="migration74.windows-support.php">
          Windows Support &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration74.removed-extensions.php">
          &laquo; Removed Extensions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration74.php'>Migrating from PHP 7.3.x to PHP 7.4.x</a></li>      </ul>
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
            <option value='en/migration74.other-changes.php' selected="selected">English</option>
            <option value='de/migration74.other-changes.php'>German</option>
            <option value='es/migration74.other-changes.php'>Spanish</option>
            <option value='fr/migration74.other-changes.php'>French</option>
            <option value='it/migration74.other-changes.php'>Italian</option>
            <option value='ja/migration74.other-changes.php'>Japanese</option>
            <option value='pt_BR/migration74.other-changes.php'>Brazilian Portuguese</option>
            <option value='ru/migration74.other-changes.php'>Russian</option>
            <option value='tr/migration74.other-changes.php'>Turkish</option>
            <option value='uk/migration74.other-changes.php'>Ukrainian</option>
            <option value='zh/migration74.other-changes.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration74.other-changes" class="sect1">
 <h2 class="title">Other Changes</h2>

 <div class="sect2" id="migration74.other-changes.performance">
  <h3 class="title">Performance Improvements</h3>

  <div class="sect3" id="migration74.other-changes.performance.core">
   <h4 class="title">PHP Core</h4>
   <p class="para">
    A specialized VM opcode for the <span class="function"><a href="function.array-key-exists.php" class="function">array_key_exists()</a></span>
    function has been added, which improves performance of this function
    if it can be statically resolved. In namespaced code, this may require
    writing <code class="literal">\array_key_exists()</code> or explicitly importing
    the function.
   </p>
  </div>

  <div class="sect3" id="migration74.other-changes.performance.pcre">
   <h4 class="title">Regular Expressions (Perl-Compatible)</h4>
   <p class="para">
    When <span class="function"><a href="function.preg-match.php" class="function">preg_match()</a></span> in UTF-8 mode (<code class="literal">&quot;u&quot;</code> modifier)
    is repeatedly called on the same string (but possibly different offsets),
    it will only be checked for UTF-8 validity once.
   </p>
  </div>
 </div>

 <div class="sect2" id="migration74.other-changes.ini">
  <h3 class="title">Changes to INI File Handling</h3>
  <p class="para">
   <a href="ini.core.php#ini.zend.exception-ignore-args" class="link">zend.exception_ignore_args</a> is a new INI directive
   for including or excluding arguments from stack traces generated
   from exceptions.
  </p>
  <p class="para">
   <a href="opcache.configuration.php#ini.opcache.preload-user" class="link">opcache.preload_user</a> is a new INI directive
   for specifying the user account under which preloading
   code is execute if it would otherwise be run as root (which is not
   allowed for security reasons).
  </p>
 </div>

 <div class="sect2" id="migration74.other-changes.pkg-config">
  <h3 class="title">Migration to pkg-config</h3>
  <p class="para">
   A number of extensions have been migrated to exclusively use pkg-config for the
   detection of library dependencies. Generally, this means that instead of using
   <strong class="option configure">--with-foo-dir=DIR</strong> or similar only
   <strong class="option configure">--with-foo</strong> is used. Custom library paths can be
   specified either by adding additional directories to <code class="literal">PKG_CONFIG_PATH</code>
   or by explicitly specifying compilation options through <code class="literal">FOO_CFLAGS</code>
   and <code class="literal">FOO_LIBS</code>.
  </p>
  <p class="para">
   The following extensions and SAPIs are affected:
  </p>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">CURL:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-curl</strong> no longer accepts a directory.
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">Enchant:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-enchant</strong> no longer accepts a directory.
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">FPM:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-fpm-systemd</strong> now uses only pkg-config
       for libsystem checks. The libsystemd minimum required version is 209.
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">GD:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-gd</strong> becomes
       <strong class="option configure">--enable-gd</strong>
       (whether to enable the extension at all) and
       <strong class="option configure">--with-external-gd</strong>
       (to opt into using an external libgd, rather than the bundled one).
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-png-dir</strong> has been removed. libpng is required.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-zlib-dir</strong> has been removed. zlib is required.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-freetype-dir</strong>
       becomes <strong class="option configure">--with-freetype</strong>
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-jpeg-dir</strong> becomes
       <strong class="option configure">--with-jpeg</strong>
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-webp-dir</strong> becomes
       <strong class="option configure">--with-webp</strong>
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-xpm-dir</strong> becomes
       <strong class="option configure">--with-xpm</strong>
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">IMAP:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-kerberos-systemd</strong> no longer accepts a directory.
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">Intl:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-icu-dir</strong> has been removed.
       If <strong class="option configure">--enable-intl</strong> is passed,
       then libicu is always required.
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">LDAP:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-ldap-sasl</strong> no longer accepts a directory.
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">Libxml:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-libxml-dir</strong> has been removed.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--enable-libxml</strong> becomes
       <strong class="option configure">--with-libxml</strong>.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-libexpat-dir</strong> has been renamed to
       <strong class="option configure">--with-expat</strong> and no longer accepts a directory.
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">Litespeed:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-litespeed</strong> becomes
       <strong class="option configure">--enable-litespeed</strong>.
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">Mbstring:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-onig</strong> has been removed.
       Unless <strong class="option configure">--disable-mbregex</strong>
       has been passed, libonig is required.
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">ODBC:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-iodbc</strong> no longer accepts a directory.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-unixODBC</strong> without a directory now uses
       pkg-config (preferred). Directory is still accepted for old versions without libodbc.pc.
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">OpenSSL:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-openssl</strong> no longer accepts a directory.
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">PCRE:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-pcre-regex</strong> has been removed.
       Instead <strong class="option configure">--with-external-pcre</strong>
       is provided to opt into using an external PCRE library, rather
       than the bundled one.
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">PDO_SQLite:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-pdo-sqlite</strong> no longer accepts a directory.
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">Readline:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-libedit</strong> no longer accepts a directory.
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">Sodium:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-sodium</strong> no longer accepts a directory.
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">SQLite3:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-sqlite3</strong> no longer accepts a directory.
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">XSL:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-xsl</strong> no longer accepts a directory.
      </span>
     </li>
    </ul>
   </li>

   <li class="listitem">
    <span class="simpara">Zip:</span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--with-libzip</strong> has been removed.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       <strong class="option configure">--enable-zip</strong> becomes
       <strong class="option configure">--with-zip</strong>.
      </span>
     </li>
    </ul>
   </li>

  </ul>
 </div>

 <div class="sect2" id="migration74.other-changes.csv">
  <h3 class="title">CSV escaping</h3>
  <p class="para">
   <span class="function"><a href="function.fputcsv.php" class="function">fputcsv()</a></span>,
   <span class="function"><a href="function.fgetcsv.php" class="function">fgetcsv()</a></span>,
   <span class="methodname"><a href="splfileobject.fputcsv.php" class="methodname">SplFileObject::fputcsv()</a></span>, 
   <span class="methodname"><a href="splfileobject.fgetcsv.php" class="methodname">SplFileObject::fgetcsv()</a></span>, and
   <span class="methodname"><a href="splfileobject.setcsvcontrol.php" class="methodname">SplFileObject::setCsvControl()</a></span>
   now accept an empty string as <code class="literal">$escape</code> argument,
   which disables the proprietary PHP escaping mechanism.
  </p>
  <p class="para">
   The behavior of <span class="function"><a href="function.str-getcsv.php" class="function">str_getcsv()</a></span> has been
   adjusted accordingly (formerly, an empty string was identical
   to using the default).
  </p>
  <p class="para">
   <span class="methodname"><a href="splfileobject.getcsvcontrol.php" class="methodname">SplFileObject::getCsvControl()</a></span> now may also
   return an empty string for the third array element, accordingly.
  </p>
 </div>

 <div class="sect2" id="migration74.other-changes.filter">
  <h3 class="title">Data Filtering</h3>
  <p class="para">
   The <a href="book.filter.php" class="link">filter</a> extension no longer exposes
   <strong class="option configure">--with-pcre-dir</strong> for Unix builds and can now reliably
   be built as shared when using <strong class="command">./configure</strong>
  </p>
 </div>

 <div class="sect2" id="migration74.other-changes.gd">
  <h3 class="title">GD</h3>
  <p class="para">
   The behavior of <span class="function"><a href="function.imagecropauto.php" class="function">imagecropauto()</a></span> in the bundled
   libgd has been synced with that of system libgd:
  </p>
  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="image.constants.php#constant.img-crop-default">IMG_CROP_DEFAULT</a></code></strong> is no longer falling
     back to <strong><code><a href="image.constants.php#constant.img-crop-sides">IMG_CROP_SIDES</a></code></strong>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Threshold-cropping now uses the algorithm of system libgd
    </span>
   </li>
  </ul>
  <p class="para">
   The default <code class="literal">$mode</code> parameter of
   <span class="function"><a href="function.imagecropauto.php" class="function">imagecropauto()</a></span> has been changed to
   <strong><code><a href="image.constants.php#constant.img-crop-default">IMG_CROP_DEFAULT</a></code></strong>; passing <code class="literal">-1</code>
   is now deprecated.
  </p>
  <p class="para">
   <span class="function"><a href="function.imagescale.php" class="function">imagescale()</a></span> now supports aspect ratio preserving
   scaling to a fixed height by passing <code class="literal">-1</code>
   as <code class="literal">$new_width</code>.
  </p>
 </div>

 <div class="sect2" id="migration74.other-changes.hash">
  <h3 class="title">HASH Message Digest Framework</h3>
  <p class="para">
   The <a href="book.hash.php" class="link">hash</a> extension cannot be disabled
   anymore and is always an integral part of any PHP build, similar to
   the <a href="book.datetime.php" class="link">date</a> extension.
  </p>
 </div>

 <div class="sect2" id="migration74.other-changes.intl">
  <h3 class="title">Intl</h3>
  <p class="para">
   The <a href="book.intl.php" class="link">intl</a> extension
   now requires at least ICU 50.1.
  </p>
  <p class="para">
   <span class="classname"><a href="class.resourcebundle.php" class="classname">ResourceBundle</a></span> now implements
   <span class="interfacename"><a href="class.countable.php" class="interfacename">Countable</a></span>.
  </p>
 </div>

 <div class="sect2" id="migration74.other-changes.ldap">
  <h3 class="title">Lightweight Directory Access Protocol</h3>
  <p class="para">
   Support for nsldap and umich_ldap has been removed.
  </p>
 </div>

 <div class="sect2" id="migration74.other-changes.libxml">
  <h3 class="title">Libxml</h3>
  <p class="para">
   All libxml-based extensions now require libxml 2.7.6 or newer.
  </p>
 </div>

 <div class="sect2" id="migration74.other-changes.mbstring">
  <h3 class="title">Multibyte String</h3>
  <p class="para">
   The oniguruma library is no longer bundled with PHP, instead libonig needs
   to be available on the system. Alternatively
   <strong class="option configure">--disable-mbregex</strong> can be used to disable
   the mbregex component.
  </p>
 </div>

 <div class="sect2" id="migration74.other-changes.opcache">
  <h3 class="title">OPcache</h3>
  <p class="para">
   The <strong class="option configure">--disable-opcache-file</strong> and
   <strong class="option configure">--enable-opcache-file</strong> configure options
   have been removed in favor of the
   <a href="opcache.configuration.php#ini.opcache.file-cache" class="link">opcache.file_cache</a> INI directive.
  </p>
 </div>

 <div class="sect2" id="migration74.other-changes.password">
  <h3 class="title">Password Hashing</h3>
  <p class="para">
   The <span class="function"><a href="function.password-hash.php" class="function">password_hash()</a></span> and
   <span class="function"><a href="function.password-needs-rehash.php" class="function">password_needs_rehash()</a></span> functions
   now accept nullable <span class="type"><a href="language.types.string.php" class="type string">string</a></span> and <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> for <code class="literal">$algo</code> argument.
  </p>
 </div>

 <div class="sect2" id="migration74.other-changes.pear">
  <h3 class="title">PEAR</h3>
  <p class="para">
   Installation of PEAR (including PECL) is no longer enabled by default. It
   can be explicitly enabled using <strong class="option configure">--with-pear</strong>.
   This option is deprecated and may be removed in the future.
  </p>
 </div>

 <div class="sect2" id="migration74.other-changes.reflection">
  <h3 class="title">Reflection</h3>
  <p class="para">
   The numeric values of the modifier constants
   (<code class="literal">IS_ABSTRACT</code>,
   <code class="literal">IS_DEPRECATED</code>,
   <code class="literal">IS_EXPLICIT_ABSTRACT</code>,
   <code class="literal">IS_FINAL</code>,
   <code class="literal">IS_IMPLICIT_ABSTRACT</code>,
   <code class="literal">IS_PRIVATE</code>,
   <code class="literal">IS_PROTECTED</code>,
   <code class="literal">IS_PUBLIC</code>, and
   <code class="literal">IS_STATIC</code>) on the
   <span class="classname"><a href="class.reflectionclass.php" class="classname">ReflectionClass</a></span>,
   <span class="classname"><a href="class.reflectionfunction.php" class="classname">ReflectionFunction</a></span>,
   <span class="classname"><a href="class.reflectionmethod.php" class="classname">ReflectionMethod</a></span>,
   <span class="classname"><a href="class.reflectionobject.php" class="classname">ReflectionObject</a></span>, and
   <span class="classname"><a href="class.reflectionproperty.php" class="classname">ReflectionProperty</a></span>
   classes have changed.
  </p>
 </div>

 <div class="sect2" id="migration74.other-changes.simplexml">
  <h3 class="title">SimpleXML</h3>
  <p class="para">
   <span class="classname"><a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a></span> now implements
   <span class="interfacename"><a href="class.countable.php" class="interfacename">Countable</a></span>.
  </p>
 </div>

 <div class="sect2" id="migration74.other-changes.sqlite3">
  <h3 class="title">SQLite3</h3>
  <p class="para">
   The bundled libsqlite has been removed. To build the
   <a href="book.sqlite3.php" class="link">SQLite3</a> extension a
   system libsqlite3 ≥ 3.7.4 is now required. To build the
   <a href="ref.pdo-sqlite.php" class="link">PDO_SQLite</a> extension
   a system libsqlite3 ≥ 3.5.0 is now required.
  </p>
  <p class="para">
   Serialization and unserialization of <span class="classname"><a href="class.sqlite3.php" class="classname">SQLite3</a></span>,
   <span class="classname"><a href="class.sqlite3stmt.php" class="classname">SQLite3Stmt</a></span> and <span class="classname"><a href="class.sqlite3result.php" class="classname">SQLite3Result</a></span>
   is now explicitly forbidden. Formerly, serialization of instances of
   these classes was possible, but unserialization yielded unusable objects.
  </p>
  <p class="para">
   The <code class="literal">@param</code> notation can now also be used to
   denote SQL query parameters.
  </p>
 </div>

 <div class="sect2" id="migration74.other-changes.zip">
  <h3 class="title">Zip</h3>
  <p class="para">
   The bundled libzip library has been removed.
   A system libzip &gt;= 0.11 is now necessary to build the
   <a href="book.zip.php" class="link">zip</a> extension.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration74/other-changes.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration74.other-changes%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration74.other-changes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration74.other-changes.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124724">  <div class="votes">
    <div id="Vu124724">
    <a href="/manual/vote-note.php?id=124724&amp;page=migration74.other-changes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124724">
    <a href="/manual/vote-note.php?id=124724&amp;page=migration74.other-changes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124724" title="62% like this...">
    2
    </div>
  </div>
  <a href="#124724" class="name">
  <strong class="user"><em>Florent H (Sowapps)</em></strong></a><a class="genanchor" href="#124724"> &para;</a><div class="date" title="2020-02-16 07:37"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124724">
<div class="phpcode"><code><span class="html">This version brings an important changes with the directive zend.exception_ignore_args set to On by default.<br />In all stack traces, the args key is now missing.<br />All php frameworks have to handle this to report errors &amp; exceptions.</span></code></div>
  </div>
 </div>
  <div class="note" id="125104">  <div class="votes">
    <div id="Vu125104">
    <a href="/manual/vote-note.php?id=125104&amp;page=migration74.other-changes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125104">
    <a href="/manual/vote-note.php?id=125104&amp;page=migration74.other-changes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125104" title="66% like this...">
    1
    </div>
  </div>
  <a href="#125104" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#125104"> &para;</a><div class="date" title="2020-06-09 04:56"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125104">
<div class="phpcode"><code><span class="html">As of PHP 7.4, an exception thrown within the user-defined shutdown function can be caught by the user-defined exception handler.<br /><br /><span class="default">&lt;?php<br />    set_error_handler</span><span class="keyword">(<br />        function(</span><span class="default">$level</span><span class="keyword">, </span><span class="default">$error</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">){<br />            if(</span><span class="default">0 </span><span class="keyword">=== </span><span class="default">error_reporting</span><span class="keyword">()){<br />                return </span><span class="default">false</span><span class="keyword">;<br />            }<br />            throw new </span><span class="default">ErrorException</span><span class="keyword">(</span><span class="default">$error</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">$level</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">);<br />        },<br />        </span><span class="default">E_ALL<br />    </span><span class="keyword">);<br /><br />    </span><span class="default">register_shutdown_function</span><span class="keyword">(function(){<br />        </span><span class="default">$error </span><span class="keyword">= </span><span class="default">error_get_last</span><span class="keyword">();<br />        if(</span><span class="default">$error</span><span class="keyword">){<br />            throw new </span><span class="default">ErrorException</span><span class="keyword">(</span><span class="default">$error</span><span class="keyword">[</span><span class="string">'message'</span><span class="keyword">], -</span><span class="default">1</span><span class="keyword">, </span><span class="default">$error</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">], </span><span class="default">$error</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">], </span><span class="default">$error</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">]);<br />        }<br />    });<br /><br />    </span><span class="default">set_exception_handler</span><span class="keyword">(function(</span><span class="default">$exception</span><span class="keyword">){<br />        </span><span class="comment">// ... more code ...<br />    </span><span class="keyword">});   <br />   <br />    require </span><span class="string">'NotExists.php'</span><span class="keyword">;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125234">  <div class="votes">
    <div id="Vu125234">
    <a href="/manual/vote-note.php?id=125234&amp;page=migration74.other-changes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125234">
    <a href="/manual/vote-note.php?id=125234&amp;page=migration74.other-changes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125234" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#125234" class="name">
  <strong class="user"><em>santi at mola dot io</em></strong></a><a class="genanchor" href="#125234"> &para;</a><div class="date" title="2020-07-31 07:54"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125234">
<div class="phpcode"><code><span class="html">Note for internals/extensions:<br /><br />Many opcode values changed between PHP 7.3 and 7.4, so most documentation resources are outdated in that regard. You can look the definitions at Zend/zend_vm_opcodes.h in php-src. For example, ZEND_ECHO changes from 40 to 136.<br /><br />While opcode changes happen in a lot of PHP versions, the change in 7.4 is quite significant.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=migration74.other-changes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration74.other-changes.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration74.php">Migrating from PHP 7.3.x to PHP 7.4.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration74.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration74.new-classes.php" title="New Classes and Interfaces">New Classes and Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="migration74.new-functions.php" title="New Functions">New Functions</a>
                        </li>
                                                <li class="">
                            <a href="migration74.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="">
                            <a href="migration74.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration74.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="">
                            <a href="migration74.removed-extensions.php" title="Removed Extensions">Removed Extensions</a>
                        </li>
                                                <li class="current">
                            <a href="migration74.other-changes.php" title="Other Changes">Other Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration74.windows-support.php" title="Windows Support">Windows Support</a>
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
