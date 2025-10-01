<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Description of core php.ini directives - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ini.core.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/ini.core.php">
 <link rel="alternate" href="https://www.php.net/manual/en/ini.core.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ini.php">
 <link rel="prev" href="https://www.php.net/manual/en/ini.sections.php">
 <link rel="next" href="https://www.php.net/manual/en/extensions.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ini.core.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ini.core.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ini.core.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ini.core.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ini.core.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ini.core.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ini.core.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ini.core.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ini.core.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ini.core.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ini.core.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Description of core php.ini directives" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Description of core php.ini directives - Manual" />
<meta name="twitter:description" content="Description of core php.ini directives" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Description of core php.ini directives - Manual" />
<meta itemprop="description" content="Description of core php.ini directives" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Description of core php.ini directives" />

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
        <a href="extensions.php">
          Extension List/Categorization &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ini.sections.php">
          &laquo; List of php.ini sections        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='ini.php'>php.ini directives</a></li>      </ul>
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
            <option value='en/ini.core.php' selected="selected">English</option>
            <option value='de/ini.core.php'>German</option>
            <option value='es/ini.core.php'>Spanish</option>
            <option value='fr/ini.core.php'>French</option>
            <option value='it/ini.core.php'>Italian</option>
            <option value='ja/ini.core.php'>Japanese</option>
            <option value='pt_BR/ini.core.php'>Brazilian Portuguese</option>
            <option value='ru/ini.core.php'>Russian</option>
            <option value='tr/ini.core.php'>Turkish</option>
            <option value='uk/ini.core.php'>Ukrainian</option>
            <option value='zh/ini.core.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ini.core" class="section">
  <h2 class="title">Description of core <var class="filename">php.ini</var> directives</h2>
  <p class="para">
   This list includes the core <var class="filename">php.ini</var> directives you can set to
   configure your PHP setup. Directives handled by extensions are listed
   and detailed at the extension documentation pages respectively;
   Information on the session directives for example can be found at the
   <a href="session.configuration.php" class="link">sessions page</a>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The defaults listed here are used when <var class="filename">php.ini</var> is not loaded; the values for the production and development <var class="filename">php.ini</var> may vary.
   </p>
  </p></blockquote>
  <div class="section" id="ini.sect.language-options">
   <h2 class="title">Language Options</h2>
   <p class="para">
    <table class="doctable table">
     <caption><strong>Language and Misc Configuration Options</strong></caption>
     
      <thead>
       <tr>
        <th>Name</th>
        <th>Default</th>
        <th>Changeable</th>
        <th>Changelog</th>
       </tr>

      </thead>

      <tbody class="tbody">
       <tr>
        <td><a href="ini.core.php#ini.short-open-tag" class="link">short_open_tag</a></td>
        <td>&quot;1&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.precision" class="link">precision</a></td>
        <td>&quot;14&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.serialize-precision" class="link">serialize_precision</a></td>
        <td>&quot;-1&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td>
         Prior to PHP 7.1.0, the default value was 17.
        </td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.disable-functions" class="link">disable_functions</a></td>
        <td>&quot;&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong> only</td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.disable-classes" class="link">disable_classes</a></td>
        <td>&quot;&quot;</td>
        <td><var class="filename">php.ini</var> only</td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.exit-on-timeout" class="link">exit_on_timeout</a></td>
        <td>&quot;&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.expose-php" class="link">expose_php</a></td>
        <td>&quot;1&quot;</td>
        <td><var class="filename">php.ini</var> only</td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.hard-timeout" class="link">hard_timeout</a></td>
        <td>&quot;2&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td>Available as of PHP 7.1.0.</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.zend.exception-ignore-args" class="link">zend.exception_ignore_args</a></td>
        <td>&quot;0&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td>Available as of PHP 7.4.0</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.zend.multibyte" class="link">zend.multibyte</a></td>
        <td>&quot;0&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.zend.script-encoding" class="link">zend.script_encoding</a></td>
        <td>NULL</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.zend.detect-unicode" class="link">zend.detect_unicode</a></td>
        <td>NULL</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.zend.signal-check" class="link">zend.signal_check</a></td>
        <td>&quot;0&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.zend.assertions" class="link">zend.assertions</a></td>
        <td>&quot;1&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong> with restrictions</td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.zend.exception-string-param-max-len" class="link">zend.exception_string_param_max_len</a></td>
        <td>&quot;15&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td>Available as of PHP 8.0.0.</td>
       </tr>

      </tbody>
     
    </table>

   </p>
   
   <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>
   
   <p class="para">
    <dl>
     
      <dt id="ini.short-open-tag">
       <code class="parameter">short_open_tag</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        Tells PHP whether the short form (<strong class="userinput"><code>&lt;? ?&gt;</code></strong>)
        of PHP&#039;s open tag should be allowed.  If you want to use PHP in
        combination with XML, you can disable this option in order to
        use <strong class="userinput"><code>&lt;?xml ?&gt;</code></strong> inline.  Otherwise, you
        can print it with PHP, for example: <strong class="userinput"><code>&lt;?php echo &#039;&lt;?xml
        version=&quot;1.0&quot;?&gt;&#039;; ?&gt;</code></strong>.  Also, if disabled, you must use the
        long form of the PHP open tag (<strong class="userinput"><code>&lt;?php ?&gt;</code></strong>).
       </p>
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
         This directive does not affect the shorthand 
         <strong class="userinput"><code>&lt;?=</code></strong>, which is always available.
        </p>
       </p></blockquote>
      </dd>
     
     
     
      <dt id="ini.precision">
       <code class="parameter">precision</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <span class="simpara">
        The number of significant digits displayed in floating point numbers.
        <code class="literal">-1</code> means that an enhanced algorithm for rounding 
        such numbers will be used.
       </span>
      </dd>
     

     
      <dt id="ini.serialize-precision">
       <code class="parameter">serialize_precision</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <span class="simpara">
        The number of significant digits stored while serializing floating point numbers.
        <code class="literal">-1</code> means that an enhanced algorithm for rounding 
        such numbers will be used.
      </span>
      </dd>
     
     
     
      <dt id="ini.expose-php">
       <code class="parameter">expose_php</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        Exposes to the world that PHP is installed on the server, which includes the
        PHP version within the HTTP header (e.g., X-Powered-By: PHP/5.3.7).
       </p>
      </dd>
     

     
      <dt id="ini.disable-functions">
       <code class="parameter">disable_functions</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <span class="simpara">
        This directive allows certain functions to be disabled.
        It takes a comma-delimited list of function names.
        As of PHP 8.0.0, disabling a function removes its definition,
        allowing userland to redefine it.
        Prior to PHP 8.0.0, disabling a function just prevented the function
        from being invoked.
       </span>
       <span class="simpara">
        Only <a href="functions.internal.php" class="link">internal functions</a> can
        be disabled using this directive.
        <a href="functions.user-defined.php" class="link">User-defined functions</a>
        are unaffected.
       </span>
       <span class="simpara">
        This directive must be set in <var class="filename">php.ini</var>.
        It cannot be set in <var class="filename">httpd.conf</var>.
       </span>
      </dd>
     

     
      <dt id="ini.disable-classes">
       <code class="parameter">disable_classes</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        This directive allows certain classes to be disabled.
        It takes a comma-delimited list of class names.
        Disabling a class just prevents the class&#039;s instantiation.
       </p>
       <p class="para">
        Only internal classes can be disabled using this directive.
        User-defined classes are unaffected.
       </p>
       <span class="simpara">
        This directive must be set in <var class="filename">php.ini</var>.
        It cannot be set in <var class="filename">httpd.conf</var>.
       </span>
      </dd>
     

     
      <dt id="ini.zend.assertions">
       <code class="parameter">zend.assertions</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <span class="simpara">
        When set to <code class="literal">1</code>, assertion code will be generated and
        executed (development mode). When set to <code class="literal">0</code>,
        assertion code will be generated but it will be skipped (not executed)
        at runtime. When set to <code class="literal">-1</code>, assertion code will not
        be generated, making the assertions zero-cost (production mode). 
       </span>
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
         If a process is started in production mode, <a href="ini.core.php#ini.zend.assertions" class="link">zend.assertions</a>
         cannot be changed at runtime, since the code for assertions was not generated.
        </p>
        <p class="para">
         If a process is started in development mode, <a href="ini.core.php#ini.zend.assertions" class="link">zend.assertions</a>
         cannot be set to <code class="literal">-1</code> at runtime.
        </p>
       </p></blockquote>
      </dd>
     

     
      <dt id="ini.zend.exception-string-param-max-len">
       <code class="parameter">zend.exception_string_param_max_len</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <span class="simpara">
        The maximum length of string function arguments in stringified stack traces.
        Must range between <code class="literal">&quot;0&quot;</code> and <code class="literal">&quot;1000000&quot;</code>.
       </span>
      </dd>
     

     
      <dt id="ini.hard-timeout">
       <code class="parameter">hard_timeout</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        When the timeout set in <a href="info.configuration.php#ini.max-execution-time" class="link">max_execution_time</a>
        has been hit, the PHP runtime will tear down resources gracefully. If
        something gets stuck while this happens, the hard timeout will tick
        for the set amount of seconds. When the hard timeout is hit, PHP will
        exit ungracefully. When set to 0, the hard timeout will never activate.
       </p>
       <p class="para">
        When PHP stops from a hard timeout, it will look something like this:
        <div class="example-contents screen">
<div class="cdata"><pre>
Fatal error: Maximum execution time of 30+2 seconds exceeded (terminated) in Unknown on line 0
</pre></div>
        </div>
       </p>
      </dd>
     
     
     
      <dt id="ini.zend.exception-ignore-args">
       <code class="parameter">zend.exception_ignore_args</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        Excludes arguments from stack traces generated from exceptions.
       </p>
      </dd>
     

     
      <dt id="ini.zend.multibyte">
       <code class="parameter">zend.multibyte</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        Enables parsing of source files in multibyte encodings. Enabling zend.multibyte 
        is required to use character encodings like SJIS, BIG5, etc that contain special
        characters in multibyte string data. ISO-8859-1 compatible encodings like UTF-8, 
        EUC, etc do not require this option.
       </p>
       <p class="para">
        Enabling zend.multibyte requires the mbstring extension to be available.
       </p>
      </dd>
     
     
     
      <dt id="ini.zend.script-encoding">
       <code class="parameter">zend.script_encoding</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        This value will be used unless a
        <a href="control-structures.declare.php#control-structures.declare.encoding" class="link">declare(encoding=...)</a>
        directive appears at the top of the script. When ISO-8859-1 incompatible encoding
        is used, both zend.multibyte and zend.script_encoding must be used.
       </p>
       <p class="para">
        Literal strings will be transliterated from zend.script_encoding to
        mbstring.internal_encoding, as if
        <span class="function"><a href="function.mb-convert-encoding.php" class="function">mb_convert_encoding()</a></span> would have been called.
       </p>
      </dd>
     

     
      <dt id="ini.zend.detect-unicode">
       <code class="parameter">zend.detect_unicode</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        Check for BOM (Byte Order Mark) and see if the file contains valid
        multibyte characters.
        This detection is performed before processing of
        <span class="function"><a href="function.halt-compiler.php" class="function">__halt_compiler()</a></span>.
        Available only in Zend Multibyte mode.
       </p>
      </dd>
     
     
     
      <dt id="ini.zend.signal-check">
       <code class="parameter">zend.signal_check</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        To check for replaced signal handlers on shutdown.
       </p>
      </dd>
     
     
     
      <dt id="ini.exit-on-timeout">
       <code class="parameter">exit_on_timeout</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        This is an Apache1 mod_php-only directive that forces an Apache child to exit if a PHP execution timeout occurred.
        Such a timeout causes an internal longjmp() call in Apache1 which can leave some extensions in an inconsistent
        state. By terminating the process any outstanding locks or memory will be cleaned up.
       </p>
      </dd>
     
     
    </dl>
   </p>
  </div>
  
  <div class="section" id="ini.sect.resource-limits">
   <h2 class="title">Resource Limits</h2>
   <p class="para">
    <table class="doctable table">
     <caption><strong>Resource Limits</strong></caption>
     
      <thead>
       <tr>
        <th>Name</th>
        <th>Default</th>
        <th>Changeable</th>
        <th>Changelog</th>
       </tr>

      </thead>

      <tbody class="tbody">
       <tr>
        <td><a href="ini.core.php#ini.memory-limit" class="link">memory_limit</a></td>
        <td>&quot;128M&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

      </tbody>
     
    </table>

   </p>
   
   <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>
   
   <p class="para">
    <dl>
     
      <dt id="ini.memory-limit">
       <code class="parameter">memory_limit</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        This sets the maximum amount of memory in bytes that a script
        is allowed to allocate.  This helps prevent poorly written
        scripts for eating up all available memory on a server. Note that
        to have no memory limit, set this directive to <code class="literal">-1</code>.
       </p>
       
       <span class="simpara">When an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> is used, the
value is measured in bytes. Shorthand notation, as described
in <a href="faq.using.php#faq.using.shorthandbytes" class="link">this FAQ</a>, may also be used.
</span>
       
      </dd>
     
    </dl>
   </p>
   <p class="para">
    See also: <a href="info.configuration.php#ini.max-execution-time" class="link">max_execution_time</a>.
   </p>
  </div>
  
  <div class="section" id="ini.sect.performance">
   <h2 class="title">Performance Tuning</h2>
   <p class="para">
    <table class="doctable table">
     <caption><strong>Performance Tuning</strong></caption>
     
      <thead>
       <tr>
        <th>Name</th>
        <th>Default</th>
        <th>Changeable</th>
        <th>Changelog</th>
       </tr>

      </thead>

      <tbody class="tbody">
       <tr>
        <td><a href="ini.core.php#ini.realpath-cache-size" class="link">realpath_cache_size</a></td>
        <td>&quot;4M&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td>Prior to PHP 7.0.16 and 7.1.2, the default was <code class="literal">&quot;16K&quot;</code></td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.realpath-cache-ttl" class="link">realpath_cache_ttl</a></td>
        <td>&quot;120&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

      </tbody>
     
    </table>

    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Using <a href="ini.core.php#ini.open-basedir" class="link">open_basedir</a> will
      <em>disable</em> the realpath cache.
     </p>
    </p></blockquote>
   </p>
   <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>
   <p class="para">
    <dl>
     
      <dt id="ini.realpath-cache-size">
       <code class="parameter">realpath_cache_size</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Determines the size of the realpath cache to be used by PHP. This
        value should be increased on systems where PHP opens many files, to
        reflect the quantity of the file operations performed.
       </p>
       <p class="para">
        The size represents the total number of bytes in the path strings
        stored, plus the size of the data associated with the cache entry. This
        means that in order to store longer paths in the cache, the cache size
        must be larger. This value does not directly control the number of
        distinct paths that can be cached.
       </p>
       <p class="para">
        The size required for the cache entry data is system dependent.
       </p>
      </dd>
     
     
      <dt id="ini.realpath-cache-ttl">
       <code class="parameter">realpath_cache_ttl</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        Duration of time (in seconds) for which to cache realpath information
        for a given file or directory. For systems with rarely changing files,
        consider increasing the value.
       </p>
      </dd>
     
    </dl>
   </p>
  </div>
  
  <div class="section" id="ini.sect.data-handling">
   <h2 class="title">Data Handling</h2>
   <p class="para">
    <table class="doctable table">
     <caption><strong>Data Handling Configuration Options</strong></caption>
     
      <thead>
       <tr>
        <th>Name</th>
        <th>Default</th>
        <th>Changeable</th>
        <th>Changelog</th>
       </tr>

      </thead>

      <tbody class="tbody">
       <tr>
        <td><a href="ini.core.php#ini.arg-separator.output" class="link">arg_separator.output</a></td>
        <td>&quot;&amp;&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.arg-separator.input" class="link">arg_separator.input</a></td>
        <td>&quot;&amp;&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.variables-order" class="link">variables_order</a></td>
        <td>&quot;EGPCS&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.request-order" class="link">request_order</a></td>
        <td>&quot;&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.auto-globals-jit" class="link">auto_globals_jit</a></td>
        <td>&quot;1&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.register-argc-argv" class="link">register_argc_argv</a></td>
        <td>&quot;1&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.enable-post-data-reading" class="link">enable_post_data_reading</a></td>
        <td>&quot;1&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.post-max-size" class="link">post_max_size</a></td>
        <td>&quot;8M&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.auto-prepend-file" class="link">auto_prepend_file</a></td>
        <td>NULL</td>
        <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.auto-append-file" class="link">auto_append_file</a></td>
        <td>NULL</td>
        <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.default-mimetype" class="link">default_mimetype</a></td>
        <td>&quot;text/html&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.default-charset" class="link">default_charset</a></td>
        <td>&quot;UTF-8&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.input-encoding" class="link">input_encoding</a></td>
        <td>&quot;&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.output-encoding" class="link">output_encoding</a></td>
        <td>&quot;&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.internal-encoding" class="link">internal_encoding</a></td>
        <td>&quot;&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

      </tbody>
     
    </table>

   </p>
   
   <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>
   
   <p class="para">
    <dl>
     
      <dt id="ini.arg-separator.output">
       <code class="parameter">arg_separator.output</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        The separator used in PHP generated URLs to separate arguments.
       </p>
      </dd>
     
     
     
      <dt id="ini.arg-separator.input">
       <code class="parameter">arg_separator.input</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        List of separator(s) used by PHP to parse input URLs into variables.
       </p>
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
         Every character in this directive is considered as separator!
        </p>
       </p></blockquote>
      </dd>
     
     
     
      <dt id="ini.variables-order">
       <code class="parameter">variables_order</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Sets the order of the EGPCS (<code class="literal">E</code>nvironment,
        <code class="literal">G</code>et, <code class="literal">P</code>ost,
        <code class="literal">C</code>ookie, and <code class="literal">S</code>erver) variable
        parsing. For example, if variables_order
        is set to <code class="literal">&quot;SP&quot;</code> then PHP will create the
        <a href="language.variables.predefined.php" class="link">superglobals</a> <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER</a></var> and
        <var class="varname"><a href="reserved.variables.post.php" class="classname">$_POST</a></var>, but not create
        <var class="varname"><a href="reserved.variables.environment.php" class="classname">$_ENV</a></var>, <var class="varname"><a href="reserved.variables.get.php" class="classname">$_GET</a></var>, and
        <var class="varname"><a href="reserved.variables.cookies.php" class="classname">$_COOKIE</a></var>.  Setting to &quot;&quot; means no
        <a href="language.variables.predefined.php" class="link">superglobals</a> will be set.
       </p>
       <div class="warning"><strong class="warning">Warning</strong>
        <p class="para">
         In both the CGI and FastCGI SAPIs,
         <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER</a></var> is
         also populated by values from the environment; <code class="literal">S</code>
         is always equivalent to <code class="literal">ES</code> regardless of the
         placement of <code class="literal">E</code> elsewhere in this directive.
        </p>
       </div>
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
         The content and order of
         <var class="varname"><a href="reserved.variables.request.php" class="classname">$_REQUEST</a></var> is also
         affected by this directive.
        </p>
       </p></blockquote>
      </dd>
     
     
     
      <dt id="ini.request-order">
       <code class="parameter">request_order</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        This directive describes the order in which PHP registers GET, POST
        and Cookie variables into the _REQUEST array. Registration is done
        from left to right, newer values override older values.
       </p>
       <p class="para">
        If this directive is not set, <a href="ini.core.php#ini.variables-order" class="link">variables_order</a> is used for
        <var class="varname"><a href="reserved.variables.request.php" class="classname">$_REQUEST</a></var> contents.
       </p>
       <p class="para">
        Note that the default distribution <var class="filename">php.ini</var> files does not contain 
        the <code class="literal">&#039;C&#039;</code> for cookies, due to security concerns.
       </p>
      </dd>
     
     
     
      <dt id="ini.auto-globals-jit">
       <code class="parameter">auto_globals_jit</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        When enabled, the SERVER, REQUEST, and ENV variables are created when they&#039;re
        first used (Just In Time) instead of when the script starts. If these
        variables are not used within a script, having this directive on will
        result in a performance gain.
       </p>
       <div class="warning"><strong class="warning">Warning</strong>
        <p class="para">
         Usage of SERVER, REQUEST, and ENV variables is checked during the compile time
         so using them through e.g. <a href="language.variables.variable.php" class="link">variable variables</a> will
         not cause their initialization.
        </p>
       </div>
      </dd>
     
     
     
      <dt id="ini.register-argc-argv">
       <code class="parameter">register_argc_argv</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <span class="simpara">
        Tells PHP whether to declare the argv &amp; argc variables
        (that would contain the GET information).
       </span>
       <span class="simpara">
        See also <a href="features.commandline.php" class="link">command line</a>.
       </span>
      </dd>
     
     
     
      <dt id="ini.enable-post-data-reading">
       <code class="parameter">enable_post_data_reading</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <span class="simpara">
        Disabling this option causes <var class="varname"><a href="reserved.variables.post.php" class="classname">$_POST</a></var> and
        <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES</a></var> <em>not</em> to be populated.
        The only way to read postdata will then be through the
        <a href="wrappers.php.php" class="link">php://input</a> stream wrapper.
        This can be useful to proxy requests or to process
        the POST data in a memory efficient fashion.
       </span>
      </dd>
     

     
      <dt id="ini.post-max-size">
       <code class="parameter">post_max_size</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <span class="simpara">
        Sets max size of post data allowed. This setting also affects
        file upload. To upload large files, this value must be larger
        than <a href="ini.core.php#ini.upload-max-filesize" class="link">upload_max_filesize</a>.
       </span>
       <span class="simpara">
        Generally speaking,
        <a href="ini.core.php#ini.memory-limit" class="link">memory_limit</a> should be
        larger than <code class="parameter">post_max_size</code>.
       </span>
       
       <span class="simpara">When an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> is used, the
value is measured in bytes. Shorthand notation, as described
in <a href="faq.using.php#faq.using.shorthandbytes" class="link">this FAQ</a>, may also be used.
</span>
       
       <span class="simpara">
        If the size of post data is greater than post_max_size, the
        <var class="varname"><a href="reserved.variables.post.php" class="classname">$_POST</a></var> and <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES</a></var>
        <a href="language.variables.superglobals.php" class="link">superglobals</a>
        are empty. This can be tracked in various ways, e.g. by passing the
        <var class="varname"><a href="reserved.variables.get.php" class="classname">$_GET</a></var> variable to the script processing the data,
        i.e. <code class="literal">&lt;form action=&quot;edit.php?processed=1&quot;&gt;</code>,
        and then checking if <var class="varname"><a href="reserved.variables.get.php" class="classname">$_GET['processed']</a></var> is set.
       </span>
       <p class="para">
        <blockquote class="note"><p><strong class="note">Note</strong>: 
         <p class="para">
          PHP allows shortcuts for byte values, including K (kilo), M (mega) 
          and G (giga). PHP will do the conversions automatically if you 
          use any of these. Be careful not to exceed the 32 bit signed integer 
          limit (if you&#039;re using 32bit versions) as it will cause your script 
          to fail.
         </p>
        </p></blockquote>
       </p>
       <p class="para">
        <table class="doctable table">
         <caption><strong>Changelog for <code class="literal">post_max_size</code></strong></caption>
         
          <thead>
           <tr>
            <th>Version</th>
            <th>Description</th>
           </tr>

          </thead>

          <tbody class="tbody">
           <tr>
            <td>5.3.4</td>
            <td>
             <code class="parameter">post_max_size</code> = 0 will not disable the limit when the content
             type is application/x-www-form-urlencoded or is not registered with PHP.
            </td>
           </tr>

           <tr>
            <td>5.3.2 , 5.2.12</td>
            <td>
             Allow unlimited post size by setting <code class="parameter">post_max_size</code> to 0.
            </td>
           </tr>

          </tbody>
         
        </table>

       </p>
      </dd>
     

     
      <dt id="ini.auto-prepend-file">
       <code class="parameter">auto_prepend_file</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Specifies the name of a file that is automatically parsed
        before the main file.  The file is included as if it was
        called with the <span class="function"><a href="function.require.php" class="function">require</a></span> function, so
        <a href="ini.core.php#ini.include-path" class="link">include_path</a> is used.</p>
       <p class="para">
        The special value <code class="literal">none</code>
        disables auto-prepending.
       </p>
      </dd>
     
     
     
      <dt id="ini.auto-append-file">
       <code class="parameter">auto_append_file</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Specifies the name of a file that is automatically parsed
        after the main file.  The file is included as if it was
        called with the <span class="function"><a href="function.require.php" class="function">require</a></span> function, so
        <a href="ini.core.php#ini.include-path" class="link">include_path</a> is used.</p>
       <p class="para">
        The special value <code class="literal">none</code>
        disables auto-appending.
        <blockquote class="note"><p><strong class="note">Note</strong>: 
         <span class="simpara">
          If the script is terminated with <span class="function"><a href="function.exit.php" class="function">exit()</a></span>,
          auto-append will <em>not</em> occur.</span>
        </p></blockquote>
       </p>
      </dd>
     
     
     
      <dt id="ini.default-mimetype">
       <code class="parameter">default_mimetype</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        By default, PHP will output a media type using the Content-Type header.
        To disable this, simply set it to be empty.
       </p>
       <p class="para">
        PHP&#039;s built-in default media type is set to text/html.
       </p>
      </dd>
     
     
     
      <dt id="ini.default-charset">
       <code class="parameter">default_charset</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        &quot;UTF-8&quot; is the default value and its value is used
        as the default character encoding for
        <span class="function"><a href="function.htmlentities.php" class="function">htmlentities()</a></span>,
        <span class="function"><a href="function.html-entity-decode.php" class="function">html_entity_decode()</a></span> and
        <span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span> if the
        <code class="parameter">encoding</code> parameter is omitted. The value of
        <code class="parameter">default_charset</code> will also be used to set the
        default character set for <a href="book.iconv.php" class="link">iconv</a>
        functions if the
        <a href="iconv.configuration.php#ini.iconv.input-encoding" class="link"><code class="parameter">iconv.input_encoding</code></a>,
        <a href="iconv.configuration.php#ini.iconv.output-encoding" class="link"><code class="parameter">iconv.output_encoding</code></a> and
        <a href="iconv.configuration.php#ini.iconv.internal-encoding" class="link"><code class="parameter">iconv.internal_encoding</code></a>
        configuration options are unset, and for
        <a href="book.mbstring.php" class="link">mbstring</a> functions if the
        <a href="mbstring.configuration.php#ini.mbstring.http-input" class="link"><code class="parameter">mbstring.http_input</code></a>
        <a href="mbstring.configuration.php#ini.mbstring.http-output" class="link"><code class="parameter">mbstring.http_output</code></a>
        <a href="mbstring.configuration.php#ini.mbstring.internal-encoding" class="link"><code class="parameter">mbstring.internal_encoding</code></a>
        configuration option is unset.
       </p>
       <p class="para">
        All versions of PHP will use this value as the charset within the
        default Content-Type header sent by PHP if the header isn&#039;t overridden
        by a call to <span class="function"><a href="function.header.php" class="function">header()</a></span>.
       </p>
       <p class="para">
        Setting <code class="parameter">default_charset</code> to an empty value is
        not recommended.
       </p>
      </dd>
     
     
     
      <dt id="ini.input-encoding">
       <code class="parameter">input_encoding</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        This setting is used for multibyte modules
        such as mbstring and iconv. Default is empty.
       </p>
      </dd>
     
     
     
      <dt id="ini.output-encoding">
       <code class="parameter">output_encoding</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        This setting is used for multibyte modules
        such as mbstring and iconv. Default is empty.
       </p>
      </dd>
     
      
     
      <dt id="ini.internal-encoding">
       <code class="parameter">internal_encoding</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        This setting is used for multibyte modules
        such as mbstring and iconv. Default is empty. If empty,
        <a href="ini.core.php#ini.default-charset" class="link">default_charset</a> is used.
       </p>
      </dd>
     
      
    </dl>
   </p>
  </div>
  
  <div class="section" id="ini.sect.path-directory">
   <h2 class="title">Paths and Directories</h2>
   <p class="para">
    <table class="doctable table">
     <caption><strong>Paths and Directories Configuration Options</strong></caption>
     
      <thead>
       <tr>
        <th>Name</th>
        <th>Default</th>
        <th>Changeable</th>
        <th>Changelog</th>
       </tr>

      </thead>

      <tbody class="tbody">
       <tr>
        <td><a href="ini.core.php#ini.include-path" class="link">include_path</a></td>
        <td>&quot;.;/path/to/php/pear&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.open-basedir" class="link">open_basedir</a></td>
        <td>NULL</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.doc-root" class="link">doc_root</a></td>
        <td>NULL</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.user-dir" class="link">user_dir</a></td>
        <td>NULL</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.user-ini.cache-ttl" class="link">user_ini.cache_ttl</a></td>
        <td>&quot;300&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.user-ini.filename" class="link">user_ini.filename</a></td>
        <td>&quot;.user.ini&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.extension-dir" class="link">extension_dir</a></td>
        <td>&quot;/path/to/php&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.extension" class="link">extension</a></td>
        <td>NULL</td>
        <td><var class="filename">php.ini</var> only</td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.zend-extension" class="link">zend_extension</a></td>
        <td>NULL</td>
        <td><var class="filename">php.ini</var> only</td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.cgi.check-shebang-line" class="link">cgi.check_shebang_line</a></td>
        <td>&quot;1&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.cgi.discard-path" class="link">cgi.discard_path</a></td>
        <td>&quot;0&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.cgi.fix-pathinfo" class="link">cgi.fix_pathinfo</a></td>
        <td>&quot;1&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.cgi.force-redirect" class="link">cgi.force_redirect</a></td>
        <td>&quot;1&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.cgi.nph" class="link">cgi.nph</a></td>
        <td>&quot;0&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.cgi.redirect-status-env" class="link">cgi.redirect_status_env</a></td>
        <td>NULL</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.cgi.rfc2616-headers" class="link">cgi.rfc2616_headers</a></td>
        <td>&quot;0&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.fastcgi.impersonate" class="link">fastcgi.impersonate</a></td>
        <td>&quot;0&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.fastcgi.logging" class="link">fastcgi.logging</a></td>
        <td>&quot;1&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

      </tbody>
     
    </table>

   </p>
   
   <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>
   
   <p class="para">
    <dl>
     
      <dt id="ini.include-path">
       <code class="parameter">include_path</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Specifies a list of directories where the
        <span class="function"><a href="function.require.php" class="function">require</a></span>, <span class="function"><a href="function.include.php" class="function">include</a></span>,
        <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span>, <span class="function"><a href="function.file.php" class="function">file()</a></span>,
        <span class="function"><a href="function.readfile.php" class="function">readfile()</a></span> and <span class="function"><a href="function.file-get-contents.php" class="function">file_get_contents()</a></span>
        functions look for files.  The format is like the system&#039;s
        <var class="envar">PATH</var> environment variable: a list of directories
        separated with a colon in Unix or semicolon in Windows.
       </p>
       <p class="para">
        PHP considers each entry in the include path separately when looking for
        files to include. It will check the first path, and if it doesn&#039;t find
        it, check the next path, until it either locates the included file or
        returns with an
        <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>
        or an <strong><code><a href="errorfunc.constants.php#constant.e-error">E_ERROR</a></code></strong>. 
        You may modify or set your include path at runtime using
        <span class="function"><a href="function.set-include-path.php" class="function">set_include_path()</a></span>.
       </p>
       <p class="para">
        <div class="example" id="example-5948">
         <p><strong>Example #1 Unix include_path</strong></p>
         <div class="example-contents">
<div class="php.inicode"><pre class="php.inicode">include_path=&quot;.:/php/includes&quot;</pre>
</div>
         </div>

        </div>
       </p>
       <p class="para">
        <div class="example" id="example-5949">
         <p><strong>Example #2 Windows include_path</strong></p>
         <div class="example-contents">
<div class="php.inicode"><pre class="php.inicode">include_path=&quot;.;c:\php\includes&quot;</pre>
</div>
         </div>

        </div>
       </p>
       <p class="para">
        Using a <code class="literal">.</code> in the include path allows for
        relative includes as it means the current directory.  However,
        it is more efficient to explicitly use <code class="literal">include
        &#039;./file&#039;</code> than having PHP always check the current
        directory for every include.
       </p>
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
         <code class="literal">ENV</code> variables are also accessible in .ini files.
         As such it is possible to reference the home directory using
         <code class="literal">${LOGIN}</code> and <code class="literal">${USER}</code>.
        </p>
        <p class="para">
         Environment variables may vary between Server APIs as those environments
         may be different.
        </p>       
       </p></blockquote>
       <p class="para">
        <div class="example" id="example-5950">
         <p><strong>Example #3 Unix include_path using ${USER} env variable</strong></p>
         <div class="example-contents">
<div class="php.inicode"><pre class="php.inicode">include_path = &quot;.:${USER}/pear/php&quot;</pre>
</div>
         </div>

        </div>
       </p>
      </dd>
     
     
     
      <dt id="ini.open-basedir">
       <code class="parameter">open_basedir</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Limit the files that can be accessed by PHP to the specified
        directory-tree, including the file itself.
       </p>
       <p class="para">
        When a script tries to access the filesystem, for example using 
        <span class="function"><a href="function.include.php" class="function">include</a></span>, or <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span>, the location of the file 
        is checked.
        When the file is outside the specified directory-tree, PHP will refuse to access it. 
        All symbolic links are resolved, so it&#039;s not possible to avoid this restriction
        with a symlink. If the file doesn&#039;t exist then the symlink couldn&#039;t be
        resolved and the filename is compared to (a resolved) <strong class="option unknown">open_basedir</strong>.
       </p>
       <p class="para">
        <strong class="option unknown">open_basedir</strong> can affect more than just filesystem functions; for example 
        if <code class="literal">MySQL</code> is configured to use <code class="literal">mysqlnd</code> drivers,
        <code class="literal">LOAD DATA INFILE</code> will be affected by <strong class="option unknown">open_basedir</strong>.
        Much of the extended functionality of PHP uses <code class="literal">open_basedir</code> in this way.
       </p>
       <p class="para">
        The special value <code class="systemitem systemitem">.</code>
        indicates that the working directory of the script will be used as the
        base-directory. This is, however, a little dangerous as the working directory
        of the script can easily be changed with <span class="function"><a href="function.chdir.php" class="function">chdir()</a></span>.
       </p>
       <p class="para">
        In <var class="filename">httpd.conf</var>, <strong class="option unknown">open_basedir</strong> can be turned off
        (e.g. for some virtual hosts)
        <a href="configuration.changes.php#configuration.changes.apache" class="link">the same way</a> as
        any other configuration directive with &quot;<code class="literal">php_admin_value open_basedir
        none</code>&quot;.
       </p>
       <p class="para">
        Under Windows, separate the directories with a semicolon. On all
        other systems, separate the directories with a colon. As an Apache
        module, <strong class="option unknown">open_basedir</strong> paths from parent directories are now
        automatically inherited.
       </p>
       <p class="para">
        The restriction specified with <strong class="option unknown">open_basedir</strong> is a
        directory name, not a prefix.
       </p>
       <p class="para">
        The default is to allow all files to be opened.
       </p>
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <span class="simpara">
         open_basedir can be tightened at run-time. This means
         that if open_basedir is set to <code class="literal">/www/</code> in <var class="filename">php.ini</var>
         a script can tighten the configuration to
         <code class="literal">/www/tmp/</code> at run-time with
         <span class="function"><a href="function.ini-set.php" class="function">ini_set()</a></span>. When listing several directories, you
         can use the <strong><code><a href="dir.constants.php#constant.path-separator">PATH_SEPARATOR</a></code></strong> constant as a separator
         regardless of the operating system.
        </span>
        <span class="simpara">
         As of PHP 8.3.0, <strong class="option unknown">open_basedir</strong> no longer accepts a
         paths containing the parent directory (<code class="literal">..</code>) when
         set at runtime using <span class="function"><a href="function.ini-set.php" class="function">ini_set()</a></span>.
        </span>
       </p></blockquote>
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
         Using open_basedir will set <a href="ini.core.php#ini.realpath-cache-size" class="link">realpath_cache_size</a>
         to <code class="literal">0</code> and thus <em>disable</em> the realpath cache.
        </p>
       </p></blockquote>
       <div class="caution"><strong class="caution">Caution</strong>
        <p class="para">
         <code class="literal">open_basedir</code> is just an extra safety net, that is in no way
         comprehensive, and can therefore not be relied upon when security is needed.
        </p>
       </div>
      </dd>
     
     
     
      <dt id="ini.doc-root">
       <code class="parameter">doc_root</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        PHP&#039;s &quot;root directory&quot; on the server. Only used if
        non-empty.
        If PHP was not compiled with FORCE_REDIRECT, you <em>should
        </em> set doc_root if you are running PHP as a CGI under any web
        server (other than IIS). The alternative is to use the
        <a href="ini.core.php#ini.cgi.force-redirect" class="link">
         cgi.force_redirect</a> configuration below.
       </p>
      </dd>
     
     
     
      <dt id="ini.user-ini.cache-ttl">
       <code class="parameter">user_ini.cache_ttl</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
       </p>
      </dd>
     
     
     
      <dt id="ini.user-ini.filename">
       <code class="parameter">user_ini.filename</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
       </p>
      </dd>
     
     
     
      <dt id="ini.user-dir">
       <code class="parameter">user_dir</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        The base name of the directory used on a user&#039;s home directory for PHP
        files, for example <var class="filename">public_html
        </var>.
       </p>
      </dd>
     
     
     
      <dt id="ini.extension-dir">
       <code class="parameter">extension_dir</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        In what directory PHP should look for dynamically loadable
        extensions. It is recommended to specify an absolute path. See also: <a href="info.configuration.php#ini.enable-dl" class="link">enable_dl</a>,
        and <span class="function"><a href="function.dl.php" class="function">dl()</a></span>.
       </p>
      </dd>
     
     
     
      <dt id="ini.extension">
       <code class="parameter">extension</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Which dynamically loadable extensions to load when PHP starts up.
       </p>
      </dd>
     
     
     
      <dt id="ini.zend-extension">
       <code class="parameter">zend_extension</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        Name of dynamically loadable Zend extension (for example
        XDebug) to load when PHP starts up.
       </p>
      </dd>
     
     
     
      <dt id="ini.cgi.check-shebang-line">
       <code class="parameter">cgi.check_shebang_line</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        Controls whether <abbr title="Common Gateway Interface">CGI</abbr> PHP checks for line starting
        with <code class="literal">#!</code> (shebang) at the top of the running script.
        This line might be needed if the script support running both as
        stand-alone script and via PHP <abbr title="Common Gateway Interface">CGI</abbr>. PHP in
        <abbr title="Common Gateway Interface">CGI</abbr> mode skips this line and ignores its content if
        this directive is turned on.
       </p>
      </dd>
     
     
     
      <dt id="ini.cgi.discard-path">
       <code class="parameter">cgi.discard_path</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        If this is enabled, the PHP CGI binary can safely be placed outside of
        the web tree and people will not be able to circumvent .htaccess security.
       </p>
      </dd>
     
     
     
      <dt id="ini.cgi.fix-pathinfo">
       <code class="parameter">cgi.fix_pathinfo</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        Provides <em>real</em> <code class="literal">PATH_INFO</code>/
        <code class="literal">PATH_TRANSLATED</code> support for <abbr title="Common Gateway Interface">CGI</abbr>.
        PHP&#039;s previous behaviour was to set <code class="literal">PATH_TRANSLATED</code>
        to <code class="literal">SCRIPT_FILENAME</code>, and to not grok what <code class="literal">
        PATH_INFO</code> is. For more information on
        <code class="literal">PATH_INFO</code>, see the <abbr title="Common Gateway Interface">CGI</abbr> specs.
        Setting this to <code class="literal">1</code> will cause PHP
        <abbr title="Common Gateway Interface">CGI</abbr> to fix its paths to conform to the spec. A
        setting of zero causes PHP to behave as before. It is turned on by
        default. You should fix your scripts to use
        <code class="literal">SCRIPT_FILENAME</code> rather than
        <code class="literal">PATH_TRANSLATED</code>.
       </p>
      </dd>
     
     
     
      <dt id="ini.cgi.force-redirect">
       <code class="parameter">cgi.force_redirect</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        cgi.force_redirect is necessary to provide security running PHP as a
        <abbr title="Common Gateway Interface">CGI</abbr> under most web servers. Left undefined, PHP
        turns this on by default. You can turn it off <em>at your own
        risk</em>.
       </p>
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
         Windows Users: When using IIS this option <em>must</em>
         be turned off. For OmniHTTPD or Xitami the same applies.
        </p>
       </p></blockquote>
      </dd>
     
     
     
      <dt id="ini.cgi.nph">
       <code class="parameter">cgi.nph</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        If cgi.nph is enabled it will force cgi to always sent Status: 200 with
        every request.
        </p>
      </dd>
     
     
     
      <dt id="ini.cgi.redirect-status-env">
       <code class="parameter">cgi.redirect_status_env</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        If cgi.force_redirect is turned on, and you are not running under
        Apache or Netscape (iPlanet) web servers, you <em>may</em>
        need to set an environment variable name that PHP will look for to
        know it is OK to continue execution.
       </p>
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
         Setting this variable <em>may</em> cause security issues,
         <em>know what you are doing first</em>.
        </p>
       </p></blockquote>
      </dd>
     

     
      <dt id="ini.cgi.rfc2616-headers">
       <code class="parameter">cgi.rfc2616_headers</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
      <p class="para">
        Tells PHP what type of headers to use when sending HTTP response
        code. If it is disabled, PHP sends a <a href="https://datatracker.ietf.org/doc/html/rfc3875" class="link external">&raquo;&nbsp;RFC 3875</a>
        &quot;Status:&quot; header that is supported by Apache and other web servers. When this option
        is enabled, PHP will send <a href="https://datatracker.ietf.org/doc/html/rfc2616" class="link external">&raquo;&nbsp;RFC 2616</a> compliant
        headers.
       </p>
       <p class="para">
        If this option is enabled, and you are running PHP in a CGI environment (e.g. PHP-FPM)
        you should not use standard RFC 2616 style HTTP status response headers, you should
        instead use their RFC 3875 equivalent e.g. instead of header(&quot;HTTP/1.0 404 Not found&quot;);
        you should use header(&quot;Status: 404 Not Found&quot;);
       </p>
       <p class="para">
        Leave it disabled unless you know what you&#039;re doing.
       </p>
      </dd>
     

     
      <dt id="ini.fastcgi.impersonate">
       <code class="parameter">fastcgi.impersonate</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        FastCGI under IIS (on WINNT based OS) supports the ability to impersonate
        security tokens of the calling client. This allows IIS to define the
        security context that the request runs under. mod_fastcgi under Apache
        does not currently support this feature (03/17/2002)
        Enable if running under IIS. Default is disabled.
       </p>
      </dd>
     
     
     
      <dt id="ini.fastcgi.logging">
       <code class="parameter">fastcgi.logging</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        Turns on SAPI logging when using FastCGI. Default is 
        to enable logging.
       </p>
      </dd>
     
     
    </dl>
   </p>
  </div>
  
  <div class="section" id="ini.sect.file-uploads">
   <h2 class="title">File Uploads</h2>
   <p class="para">
    <table class="doctable table">
     <caption><strong>File Uploads Configuration Options</strong></caption>
     
      <thead>
       <tr>
        <th>Name</th>
        <th>Default</th>
        <th>Changeable</th>
        <th>Changelog</th>
       </tr>

      </thead>

      <tbody class="tbody">
       <tr>
        <td><a href="ini.core.php#ini.file-uploads" class="link">file_uploads</a></td>
        <td>&quot;1&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.upload-tmp-dir" class="link">upload_tmp_dir</a></td>
        <td>NULL</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="info.configuration.php#ini.max-input-nesting-level" class="link">max_input_nesting_level</a></td>
        <td>64</td>
        <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="info.configuration.php#ini.max-input-vars" class="link">max_input_vars</a></td>
        <td>1000</td>
        <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.upload-max-filesize" class="link">upload_max_filesize</a></td>
        <td>&quot;2M&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

       <tr>
        <td><a href="ini.core.php#ini.max-file-uploads" class="link">max_file_uploads</a></td>
        <td>20</td>
        <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

      </tbody>
     
    </table>

   </p>
   
   <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>
   
   <p class="para">
    <dl>
     
      <dt id="ini.file-uploads">
       <code class="parameter">file_uploads</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        Whether or not to allow HTTP
        <a href="features.file-upload.php" class="link">file uploads</a>. See also the
        <a href="ini.core.php#ini.upload-max-filesize" class="link">upload_max_filesize</a>,
        <a href="ini.core.php#ini.upload-tmp-dir" class="link">upload_tmp_dir</a>, and
        <a href="ini.core.php#ini.post-max-size" class="link">post_max_size</a> directives.
       </p>
      </dd>
     
     
     
      <dt id="ini.upload-tmp-dir">
       <code class="parameter">upload_tmp_dir</code>
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      </dt>
      <dd>
       <p class="para">
        The temporary directory used for storing files when doing
        file upload. Must be writable by whatever user PHP
        is running as. If not specified PHP will use the system&#039;s default.
       </p>
       <p class="para">
        If the directory specified here is not writable, PHP falls back to 
        the system default temporary directory. If 
        <a href="ini.core.php#ini.open-basedir" class="link">open_basedir</a> is on, then 
        the system default directory must be allowed for an upload to 
        succeed.
       </p>
      </dd>
     
     
     
      <dt id="ini.upload-max-filesize">
       <code class="parameter">upload_max_filesize</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        The maximum size of an uploaded file.
       </p>
       <p class="para">
        <a href="ini.core.php#ini.post-max-size" class="link">post_max_size</a> must be larger than this value.
       </p>
       
       <span class="simpara">When an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> is used, the
value is measured in bytes. Shorthand notation, as described
in <a href="faq.using.php#faq.using.shorthandbytes" class="link">this FAQ</a>, may also be used.
</span>
       
      </dd>
     
     
     
      <dt id="ini.max-file-uploads">
       <code class="parameter">max_file_uploads</code>
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      </dt>
      <dd>
       <p class="para">
        The maximum number of files allowed to be uploaded simultaneously.
        Upload fields left blank on submission do not
        count towards this limit.
       </p>
      </dd>
     
    </dl>
   </p>
  </div>
  
  <div class="section" id="ini.sect.sql-general">
   <h2 class="title">General SQL</h2>
   <p class="para">
    <table class="doctable table">
     <caption><strong>General SQL Configuration Options</strong></caption>
     
      <thead>
       <tr>
        <th>Name</th>
        <th>Default</th>
        <th>Changeable</th>
        <th>Changelog</th>
       </tr>

      </thead>

      <tbody class="tbody">
       <tr>
        <td><a href="ini.core.php#ini.sql.safe-mode" class="link">sql.safe_mode</a></td>
        <td>&quot;0&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
        <td>Removed as of PHP 7.2.0</td>
       </tr>

      </tbody>
     
    </table>

   </p>
   
   <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>
   
   <p class="para">
    <dl>
     
      <dt id="ini.sql.safe-mode">
       <code class="parameter">sql.safe_mode</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        If turned on, database connection functions that specify default values
        will use those values in place of any user-supplied arguments. For details
        on the default values, see the documentation for the relevant connection
        functions.
       </p>
       <div class="warning"><strong class="warning">Warning</strong>
        <p class="simpara">
         This feature has been <em>REMOVED</em> as of PHP 7.2.0.
        </p>
       </div>
      </dd>
     
    </dl>
   </p>
  </div>
  
  <div class="section" id="ini.sect.windows">
   <h2 class="title">Windows Specific</h2>
   <p class="para">
    <table class="doctable table">
     <caption><strong>Windows Specific Configuration Options</strong></caption>
     
      <thead>
       <tr>
        <th>Name</th>
        <th>Default</th>
        <th>Changeable</th>
        <th>Changelog</th>
       </tr>

      </thead>

      <tbody class="tbody">
       <tr>
        <td><a href="ini.core.php#ini.windows-show-crt-warning" class="link">windows.show_crt_warning</a></td>
        <td>&quot;0&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

      </tbody>
     
    </table>

   </p>
   
   <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>
   
   <p class="para">
    <dl>
     
      <dt id="ini.windows-show-crt-warning">
       <code class="parameter">windows.show_crt_warning</code>
       <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      </dt>
      <dd>
       <p class="para">
        This directive shows the Windows CRT warnings when enabled.
       </p>
      </dd>
     
    </dl>
   </p>
  </div>
  
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/ini.core.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fini.core%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ini.core&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ini.core.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124786">  <div class="votes">
    <div id="Vu124786">
    <a href="/manual/vote-note.php?id=124786&amp;page=ini.core&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124786">
    <a href="/manual/vote-note.php?id=124786&amp;page=ini.core&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124786" title="61% like this...">
    17
    </div>
  </div>
  <a href="#124786" class="name">
  <strong class="user"><em>luisdev</em></strong></a><a class="genanchor" href="#124786"> &para;</a><div class="date" title="2020-03-03 02:59"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124786">
<div class="phpcode"><code><span class="html"><a href="https://haydenjames.io/understanding-php-memory_limit/" rel="nofollow" target="_blank">https://haydenjames.io/understanding-php-memory_limit/</a> explains the memory_limit setting nicely.</span></code></div>
  </div>
 </div>
  <div class="note" id="125695">  <div class="votes">
    <div id="Vu125695">
    <a href="/manual/vote-note.php?id=125695&amp;page=ini.core&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125695">
    <a href="/manual/vote-note.php?id=125695&amp;page=ini.core&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125695" title="60% like this...">
    10
    </div>
  </div>
  <a href="#125695" class="name">
  <strong class="user"><em>Simone Pellegatta</em></strong></a><a class="genanchor" href="#125695"> &para;</a><div class="date" title="2021-01-19 12:08"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125695">
<div class="phpcode"><code><span class="html">Be careful while using auto_prepend_file.<br /><br />When the custom exception handler, set by set_exception_handler(), handles an uncaught exception, it interrupts the execution of every script.<br /><br />If the script with the unhandled exception has been automatically prepended or included by an automatically prepended script, however, the main script will continue running anyway.<br /><br />This could cause several issues: when we think that throwing an exception would automatically interrupt the current application, a whole chunk of code is going to run anyway.</span></code></div>
  </div>
 </div>
  <div class="note" id="120054">  <div class="votes">
    <div id="Vu120054">
    <a href="/manual/vote-note.php?id=120054&amp;page=ini.core&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120054">
    <a href="/manual/vote-note.php?id=120054&amp;page=ini.core&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120054" title="51% like this...">
    3
    </div>
  </div>
  <a href="#120054" class="name">
  <strong class="user"><em>fernandobasso dot br at gmail dot com</em></strong></a><a class="genanchor" href="#120054"> &para;</a><div class="date" title="2016-10-17 08:06"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120054">
<div class="phpcode"><code><span class="html">This might help in case someone happens to maintain old applications with a charset other than utf-8.<br /><br />According to the docs, you can override the default charset if you use `header()`.<br /><br />Suppose php.ini sets the default_charset to "UTF-8", but you need a legacy charset, like ISO-8859-1.<br /><br />Still,<br /><br /><span class="default">&lt;?php header</span><span class="keyword">(</span><span class="string">'Content-Type: text/html; Charset=ISO-8859-1'</span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />would not override the charset, just add it as well and the result<br />was a response header like (note the two charsets):<br /><br />    Content-Type:"text/html; Charset=ISO-8859-1;charset=UTF-8"<br /><br />I found it strange the default one as `charset` with a lowercase `c`<br />as opposed to my custom charset with an uppercase `C`.<br /><br />What solved was to _override_ the charset using all lowercase letters<br />as well for the word “charset”:<br /><br /><span class="default">&lt;?php header</span><span class="keyword">(</span><span class="string">'content-type: text/html; charset=ISO-8859-1'</span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />Then, the double charset from the response headers disappeared, and only the single, custom charset remained.</span></code></div>
  </div>
 </div>
  <div class="note" id="124115">  <div class="votes">
    <div id="Vu124115">
    <a href="/manual/vote-note.php?id=124115&amp;page=ini.core&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124115">
    <a href="/manual/vote-note.php?id=124115&amp;page=ini.core&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124115" title="51% like this...">
    2
    </div>
  </div>
  <a href="#124115" class="name">
  <strong class="user"><em>diamondeagle at webmail dot co dot za</em></strong></a><a class="genanchor" href="#124115"> &para;</a><div class="date" title="2019-08-15 11:14"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124115">
<div class="phpcode"><code><span class="html">Note regarding the upload_tmp_dir setting and UNC Paths:<br /><br />When using PHP on Windows OS and IIS FastCGI, if you need to use a UNC path to a folder on a network drive for the upload_tmp_dir setting then you must use three \ characters at the front of the UNC path. <br /><br />Windows and PHP use the first slash as an escape character, so if you only use two slashes then it passes a UNC path with just one backslash. That is not valid for UNC paths and you many experience problems when uploading files, such as errors saying that "PHP is missing a temporary folder".<br /><br />Correct:<br />upload_tmp_dir = "\\\path\to\your\folder"<br /><br />Incorrect:<br />upload_tmp_dir = "\\path\to\your\folder"</span></code></div>
  </div>
 </div>
  <div class="note" id="66801">  <div class="votes">
    <div id="Vu66801">
    <a href="/manual/vote-note.php?id=66801&amp;page=ini.core&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66801">
    <a href="/manual/vote-note.php?id=66801&amp;page=ini.core&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66801" title="51% like this...">
    3
    </div>
  </div>
  <a href="#66801" class="name">
  <strong class="user"><em>leo at korfu dot cz</em></strong></a><a class="genanchor" href="#66801"> &para;</a><div class="date" title="2006-05-29 03:45"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66801">
<div class="phpcode"><code><span class="html">"If the size of post data is greater than post_max_size..."<br /><br />It seems that a more elegant way is comparison between post_max_size and $_SERVER['CONTENT_LENGTH']. Please note that the latter includes not only size of uploaded file plus post data but also multipart sequences. Leo</span></code></div>
  </div>
 </div>
  <div class="note" id="129570">  <div class="votes">
    <div id="Vu129570">
    <a href="/manual/vote-note.php?id=129570&amp;page=ini.core&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129570">
    <a href="/manual/vote-note.php?id=129570&amp;page=ini.core&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129570" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#129570" class="name">
  <strong class="user"><em>gcb@</em></strong></a><a class="genanchor" href="#129570"> &para;</a><div class="date" title="2024-06-09 06:19"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129570">
<div class="phpcode"><code><span class="html">you get a misleading error if a directory doesn't exist or the user lacks permission to access it.<br /><br />open_basedir restriction in effect. File(/tmp/php_session) is not within the allowed path(s): /tmp/php_session</span></code></div>
  </div>
 </div>
  <div class="note" id="125951">  <div class="votes">
    <div id="Vu125951">
    <a href="/manual/vote-note.php?id=125951&amp;page=ini.core&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125951">
    <a href="/manual/vote-note.php?id=125951&amp;page=ini.core&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125951" title="46% like this...">
    -3
    </div>
  </div>
  <a href="#125951" class="name">
  <strong class="user"><em>andre dot wetter at myelco dot ch</em></strong></a><a class="genanchor" href="#125951"> &para;</a><div class="date" title="2021-03-23 09:55"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125951">
<div class="phpcode"><code><span class="html">If you use Microsoft IIS Windows and want to use open_basedir restrictions with multiple dirs you have to set them into single quotes in the main config xml file of IIS (C:\Windows\System32\inetsrv\config\applicationHost.config). Works fine in IIS 10.<br /><br />Multiple files with single quotes and ; for windows:<br />"C:\php\php-cgi.exe|-d open_basedir='C:\Windows\Temp\;D:\mywebsite1\'"<br /><br />Only one dir works fine without single quotes:<br />"C:\php\php-cgi.exe|-d open_basedir=D:\mywebsite1\"<br /><br />In my main config xml file of IIS there are 2 nodes to set per website and the definitions have to be equal:<br />configuration\Location\system.webServer\handlers\add<br />configuration\system.webServer\fastCgi</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ini.core&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ini.core.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ini.php">php.ini directives</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="ini.list.php" title="List of php.ini directives">List of php.ini directives</a>
                        </li>
                                                <li class="">
                            <a href="ini.sections.php" title="List of php.ini sections">List of php.ini sections</a>
                        </li>
                                                <li class="current">
                            <a href="ini.core.php" title="Description of core php.ini directives">Description of core php.ini directives</a>
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
