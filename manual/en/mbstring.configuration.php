<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Runtime Configuration - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mbstring.configuration.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mbstring.configuration.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mbstring.configuration.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/mbstring.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/mbstring.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/mbstring.constants.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mbstring.configuration.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mbstring.configuration.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mbstring.configuration.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mbstring.configuration.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mbstring.configuration.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mbstring.configuration.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mbstring.configuration.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mbstring.configuration.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mbstring.configuration.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mbstring.configuration.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mbstring.configuration.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Runtime Configuration" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Runtime Configuration - Manual" />
<meta name="twitter:description" content="Runtime Configuration" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Runtime Configuration - Manual" />
<meta itemprop="description" content="Runtime Configuration" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Runtime Configuration" />

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
        <a href="mbstring.constants.php">
          Predefined Constants &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mbstring.installation.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.mbstring.php'>Multibyte String</a></li>      <li><a href='mbstring.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/mbstring.configuration.php' selected="selected">English</option>
            <option value='de/mbstring.configuration.php'>German</option>
            <option value='es/mbstring.configuration.php'>Spanish</option>
            <option value='fr/mbstring.configuration.php'>French</option>
            <option value='it/mbstring.configuration.php'>Italian</option>
            <option value='ja/mbstring.configuration.php'>Japanese</option>
            <option value='pt_BR/mbstring.configuration.php'>Brazilian Portuguese</option>
            <option value='ru/mbstring.configuration.php'>Russian</option>
            <option value='tr/mbstring.configuration.php'>Turkish</option>
            <option value='uk/mbstring.configuration.php'>Ukrainian</option>
            <option value='zh/mbstring.configuration.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mbstring.configuration" class="section">
 <h2 class="title">Runtime Configuration</h2>
 <p class="simpara">
The behaviour of these functions is affected by settings in <var class="filename">php.ini</var>.
</p>
 <p class="para">
  <table class="doctable table">
   <caption><strong>mbstring configuration options</strong></caption>
   
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
      <td><a href="mbstring.configuration.php#ini.mbstring.language" class="link">mbstring.language</a></td>
      <td>&quot;neutral&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.detect-order" class="link">mbstring.detect_order</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.http-input" class="link">mbstring.http_input</a></td>
      <td>&quot;pass&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Deprecated</td>
     </tr>

     <tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.http-output" class="link">mbstring.http_output</a></td>
      <td>&quot;pass&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Deprecated</td>
     </tr>

     <tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.internal-encoding" class="link">mbstring.internal_encoding</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Deprecated</td>
     </tr>

     <tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.substitute-character" class="link">mbstring.substitute_character</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.func-overload" class="link">mbstring.func_overload</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>
       Deprecated as of PHP 7.2.0; removed as of PHP 8.0.0.
      </td>
     </tr>

     <tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.encoding-translation" class="link">mbstring.encoding_translation</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.http-output-conv-mimetypes" class="link">mbstring.http_output_conv_mimetypes</a></td>
      <td>&quot;^(text/|application/xhtml\+xml)&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.strict-detection" class="link">mbstring.strict_detection</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.regex-retry-limit" class="link">mbstring.regex_retry_limit</a></td>
      <td>&quot;1000000&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 7.4.0.</td>
     </tr>

     <tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.regex-stack-limit" class="link">mbstring.regex_stack_limit</a></td>
      <td>&quot;100000&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 7.3.5.</td>
     </tr>

    </tbody>
   
  </table>

  For further details and definitions of the
INI_* modes, see the <a href="configuration.changes.modes.php" class="xref">Where a configuration setting may be set</a>.
 </p>
 
 <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>
 
 <p class="para">
  <dl>
   
    <dt id="ini.mbstring.language">
     <code class="parameter">mbstring.language</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      The default national language setting (NLS) used in mbstring. Note that this option
      automagically defines <code class="literal">mbstring.internal_encoding</code> and
      <code class="literal">mbstring.internal_encoding</code> should be placed
      after <code class="literal">mbstring.language</code> in <var class="filename">php.ini</var>
     </p>
    </dd>
   
   
    <dt id="ini.mbstring.encoding-translation">
     <code class="parameter">mbstring.encoding_translation</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Enables the transparent character encoding filter for the incoming HTTP queries,
      which performs detection and conversion of the input encoding to the
      internal character encoding. 
     </p>
    </dd>
   
   
    <dt id="ini.mbstring.internal-encoding">
     <code class="parameter">mbstring.internal_encoding</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <div class="warning"><strong class="warning">Warning</strong>
      <p class="para">This deprecated feature <em>will</em>
certainly be <em>removed</em> in the future.</p>
     </div>
     <p class="para">
      Defines the default internal character encoding.
     </p>
     <p class="para">
      Users should leave this empty and set
      <a href="ini.core.php#ini.default-charset" class="link"><code class="parameter">default_charset</code></a>
      instead.
     </p>
    </dd>
   
   
    <dt id="ini.mbstring.http-input">
     <code class="parameter">mbstring.http_input</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <div class="warning"><strong class="warning">Warning</strong>
      <p class="para">This deprecated feature <em>will</em>
certainly be <em>removed</em> in the future.</p>
     </div>
     <p class="para">
      Defines the default HTTP input character encoding.
     </p>
     <p class="para">
      Users should leave this empty and set
      <a href="ini.core.php#ini.default-charset" class="link"><code class="parameter">default_charset</code></a>
      instead.
     </p>
    </dd>
   
   
    <dt id="ini.mbstring.http-output">
     <code class="parameter">mbstring.http_output</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <div class="warning"><strong class="warning">Warning</strong>
      <p class="para">This deprecated feature <em>will</em>
certainly be <em>removed</em> in the future.</p>
     </div>
     <p class="para">
      Defines the default HTTP output character encoding (output will be converted from the internal encoding to the HTTP output encoding upon output).
     </p>
     <p class="para">
      Users should leave this empty and set
      <a href="ini.core.php#ini.default-charset" class="link"><code class="parameter">default_charset</code></a>
      instead.
     </p>
    </dd>
   
   
    <dt id="ini.mbstring.detect-order">
     <code class="parameter">mbstring.detect_order</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Defines default character code detection order. See also
      <span class="function"><a href="function.mb-detect-order.php" class="function">mb_detect_order()</a></span>. 
     </p>
    </dd>
   
   
    <dt id="ini.mbstring.substitute-character">
     <code class="parameter">mbstring.substitute_character</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Defines character to substitute for invalid character encoding.
      See <span class="function"><a href="function.mb-substitute-character.php" class="function">mb_substitute_character()</a></span> for supported values.
     </p>
    </dd>
   
   
    <dt id="ini.mbstring.func-overload">
     <code class="parameter">mbstring.func_overload</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This feature has been
<em>DEPRECATED</em> as of PHP 7.2.0, and <em>REMOVED</em> as of PHP 8.0.0. Relying on this feature
is highly discouraged.</p></div>
     <p class="para">
      Overloads a set of single byte functions by the mbstring counterparts. See
      <a href="mbstring.overload.php" class="link">Function overloading</a> for more
      information.
     </p>
     <p class="para">
      This setting can only be changed from the <var class="filename">php.ini</var> file.
     </p>
    </dd>
   
   
    <dt id="ini.mbstring.http-output-conv-mimetypes">
     <code class="parameter">mbstring.http_output_conv_mimetypes</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
     </p>
    </dd>
   
   
    <dt id="ini.mbstring.strict-detection">
     <code class="parameter">mbstring.strict_detection</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Enables strict encoding detection. See <span class="function"><a href="function.mb-detect-encoding.php" class="function">mb_detect_encoding()</a></span>
      for a description and examples.
     </p>
    </dd>
   
   
    <dt id="ini.mbstring.regex-retry-limit">
     <code class="parameter">mbstring.regex_retry_limit</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Limits the amount of backtracking that may be performed during one mbregex
      match.
     </p>
     <p class="para">
      This setting only takes effect when linking against oniguruma &gt;= 6.8.0.
     </p>
    </dd>
   
   
    <dt id="ini.mbstring.regex-stack-limit">
     <code class="parameter">mbstring.regex_stack_limit</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Limits the stack depth of mbstring regular expressions.
     </p>
    </dd>
   
  </dl>
 </p>

 <p class="para">
  According to the <a href="http://www.w3.org/TR/REC-html40/interact/forms.html#adef-accept-charset" class="link external">&raquo;&nbsp;HTML 4.01 specification</a>,
  Web browsers are allowed to encode a form being submitted with a character
  encoding different from the one used for the page.
  See <span class="function"><a href="function.mb-http-input.php" class="function">mb_http_input()</a></span> to detect character encoding
  used by browsers.
 </p>
 <p class="para">
  Although popular browsers are capable of giving a reasonably accurate guess
  to the character encoding of a given HTML document, it would be better to
  set the <code class="literal">charset</code> parameter in the
  <code class="literal">Content-Type</code> HTTP header to the appropriate value by
  <span class="function"><a href="function.header.php" class="function">header()</a></span> or
  <a href="ini.core.php#ini.sect.data-handling" class="link">default_charset</a> ini setting.
 </p>
 <p class="para">
  <div class="example" id="example-2756">
  <p><strong>Example #1 <var class="filename">php.ini</var> setting examples</strong></p>
   <div class="example-contents">
<div class="annotation-interactive cdata"><pre>
; Set default language
mbstring.language        = Neutral; Set default language to Neutral(UTF-8) (default)
mbstring.language        = English; Set default language to English 
mbstring.language        = Japanese; Set default language to Japanese

;; Set default internal encoding
;; Note: Make sure to use character encoding works with PHP
mbstring.internal_encoding    = UTF-8  ; Set internal encoding to UTF-8

;; HTTP input encoding translation is enabled.
mbstring.encoding_translation = On

;; Set default HTTP input character encoding
;; Note: Script cannot change http_input setting.
mbstring.http_input           = pass    ; No conversion. 
mbstring.http_input           = auto    ; Set HTTP input to auto
                                ; &quot;auto&quot; is expanded according to mbstring.language
mbstring.http_input           = SJIS    ; Set HTTP input to SJIS
mbstring.http_input           = UTF-8,SJIS,EUC-JP ; Specify order

;; Set default HTTP output character encoding 
mbstring.http_output          = pass    ; No conversion
mbstring.http_output          = UTF-8   ; Set HTTP output encoding to UTF-8

;; Set default character encoding detection order
mbstring.detect_order         = auto    ; Set detect order to auto
mbstring.detect_order         = ASCII,JIS,UTF-8,SJIS,EUC-JP ; Specify order

;; Set default substitute character
mbstring.substitute_character = 12307   ; Specify Unicode value
mbstring.substitute_character = none    ; Do not print character
mbstring.substitute_character = long    ; Long Example: U+3000,JIS+7E7E
</pre></div>
   </div>

  </div>
 </p>
 <p class="para">
  <div class="example" id="example-2757">
   <p><strong>Example #2 <var class="filename">php.ini</var> setting for <code class="literal">EUC-JP</code> users</strong></p>
   <div class="example-contents">
<div class="annotation-interactive cdata"><pre>
;; Disable Output Buffering
output_buffering      = Off

;; Set HTTP header charset
default_charset       = EUC-JP    

;; Set default language to Japanese
mbstring.language = Japanese

;; HTTP input encoding translation is enabled.
mbstring.encoding_translation = On

;; Set HTTP input encoding conversion to auto
mbstring.http_input   = auto 

;; Convert HTTP output to EUC-JP
mbstring.http_output  = EUC-JP    

;; Set internal encoding to EUC-JP
mbstring.internal_encoding = EUC-JP    

;; Do not print invalid characters
mbstring.substitute_character = none   
</pre></div>
   </div>

  </div>
 </p>
 <p class="para">
  <div class="example" id="example-2758">
   <p><strong>Example #3 <var class="filename">php.ini</var> setting for <code class="literal">SJIS</code> users</strong></p>
   <div class="example-contents">
<div class="annotation-interactive cdata"><pre>
;; Enable Output Buffering
output_buffering     = On

;; Set mb_output_handler to enable output conversion
output_handler       = mb_output_handler

;; Set HTTP header charset
default_charset      = Shift_JIS

;; Set default language to Japanese
mbstring.language = Japanese

;; Set http input encoding conversion to auto
mbstring.http_input  = auto 

;; Convert to SJIS
mbstring.http_output = SJIS    

;; Set internal encoding to EUC-JP
mbstring.internal_encoding = EUC-JP    

;; Do not print invalid characters
mbstring.substitute_character = none   
</pre></div>
   </div>

  </div>
 </p>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mbstring/ini.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmbstring.configuration%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mbstring.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mbstring.configuration.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122873">  <div class="votes">
    <div id="Vu122873">
    <a href="/manual/vote-note.php?id=122873&amp;page=mbstring.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122873">
    <a href="/manual/vote-note.php?id=122873&amp;page=mbstring.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122873" title="57% like this...">
    1
    </div>
  </div>
  <a href="#122873" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#122873"> &para;</a><div class="date" title="2018-06-24 02:28"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122873">
<div class="phpcode"><code><span class="html">String literals in the PHP script are encoded with the same encoding that the PHP file was saved with. This is not affected by default_charset or other .ini settings.<br /><br />Scenario: The default_charset is KOI8-R, and there is a text file "input.txt" containing the string "Это текст для поиска." in KOI8-R encoding.<br /><br />A PHP script is written:<br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// mb_internal_encoding('KOI8-R');<br /><br /></span><span class="default">$string  </span><span class="keyword">= </span><span class="string">'текст.'</span><span class="keyword">;<br /><br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'input.txt'</span><span class="keyword">);<br /><br />echo </span><span class="default">mb_strpos</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span>But unfortunately it was saved as UTF-8.<br /><br />It doesn't work; mb_strpos() returns false because it can't find the UTF-8-encoded "текст" inside the KOI8-R-encoded "Это текст для поиска.".<br /><br />Adjusting the default_charset had no effect. Not even fiddling with mb_internal_encoding could fix it, simply because the strings involved had *different* encodings and without actually changing one of them they just weren't going to match.<br /><br />Either re-save the source file as KOI8-R to match the data file, or re-save the data file as UTF-8 to match the source code. Only then will the script properly echo '4'.</span></code></div>
  </div>
 </div>
  <div class="note" id="122985">  <div class="votes">
    <div id="Vu122985">
    <a href="/manual/vote-note.php?id=122985&amp;page=mbstring.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122985">
    <a href="/manual/vote-note.php?id=122985&amp;page=mbstring.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122985" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122985" class="name">
  <strong class="user"><em>ASchmidt at Anamera dot net</em></strong></a><a class="genanchor" href="#122985"> &para;</a><div class="date" title="2018-07-30 12:17"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122985">
<div class="phpcode"><code><span class="html">The documentation is vague, on WHAT precisely the valid "NLS" language strings are that are valid for "mbstring.language".<br /><br />According to <a href="http://php.net/manual/en/function.mb-language.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.mb-language.php</a> the values are "Japanese", "ja", "English", "en", or "uni" for UTF-8. <br />On the other hand, the sample on this current page omits "uni" but introduces "Neutral" as an undocumented option - which is also the default value:<br /><br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">( </span><span class="default">mb_language</span><span class="keyword">() );   </span><span class="comment">// "neutral" (default if not set)<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">mb_language</span><span class="keyword">( </span><span class="string">'uni' </span><span class="keyword">) );    </span><span class="comment">// TRUE, valid language string<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">mb_language</span><span class="keyword">() );    </span><span class="comment">// "uni"<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">mb_language</span><span class="keyword">( </span><span class="string">'neutral' </span><span class="keyword">) );    </span><span class="comment">// TRUE, valid language string<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">mb_language</span><span class="keyword">() );    </span><span class="comment">// "neutral"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mbstring.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mbstring.configuration.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="mbstring.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mbstring.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="current">
                            <a href="mbstring.configuration.php" title="Runtime Configuration">Runtime Configuration</a>
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
