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

 <link rel="canonical" href="https://www.php.net/manual/en/opcache.configuration.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/opcache.configuration.php">
 <link rel="alternate" href="https://www.php.net/manual/en/opcache.configuration.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/opcache.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/opcache.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/opcache.preloading.php">

 <link rel="alternate" href="https://www.php.net/manual/en/opcache.configuration.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/opcache.configuration.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/opcache.configuration.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/opcache.configuration.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/opcache.configuration.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/opcache.configuration.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/opcache.configuration.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/opcache.configuration.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/opcache.configuration.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/opcache.configuration.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/opcache.configuration.php" hreflang="zh">

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
        <a href="opcache.preloading.php">
          Preloading &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="opcache.installation.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.opcache.php'>OPcache</a></li>      <li><a href='opcache.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/opcache.configuration.php' selected="selected">English</option>
            <option value='de/opcache.configuration.php'>German</option>
            <option value='es/opcache.configuration.php'>Spanish</option>
            <option value='fr/opcache.configuration.php'>French</option>
            <option value='it/opcache.configuration.php'>Italian</option>
            <option value='ja/opcache.configuration.php'>Japanese</option>
            <option value='pt_BR/opcache.configuration.php'>Brazilian Portuguese</option>
            <option value='ru/opcache.configuration.php'>Russian</option>
            <option value='tr/opcache.configuration.php'>Turkish</option>
            <option value='uk/opcache.configuration.php'>Ukrainian</option>
            <option value='zh/opcache.configuration.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="opcache.configuration" class="sect1">
 <h2 class="title">Runtime Configuration</h2>
 <p class="simpara">
The behaviour of these functions is affected by settings in <var class="filename">php.ini</var>.
</p>
 <p class="para">
  <table class="doctable table">
   <caption><strong>OPcache configuration options</strong></caption>
   
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
      <td><a href="opcache.configuration.php#ini.opcache.enable" class="link">opcache.enable</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.enable-cli" class="link">opcache.enable_cli</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Between PHP 7.1.2 and 7.1.6 inclusive, the default was <code class="literal">1</code></td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.memory-consumption" class="link">opcache.memory_consumption</a></td>
      <td>128</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.interned-strings-buffer" class="link">opcache.interned_strings_buffer</a></td>
      <td>8</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.max-accelerated-files" class="link">opcache.max_accelerated_files</a></td>
      <td>10000</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.max-wasted-percentage" class="link">opcache.max_wasted_percentage</a></td>
      <td>5</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.use-cwd" class="link">opcache.use_cwd</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.validate-timestamps" class="link">opcache.validate_timestamps</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.revalidate-freq" class="link">opcache.revalidate_freq</a></td>
      <td>2</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.revalidate-path" class="link">opcache.revalidate_path</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.save-comments" class="link">opcache.save_comments</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.fast-shutdown" class="link">opcache.fast_shutdown</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Removed in PHP 7.2.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.enable-file-override" class="link">opcache.enable_file_override</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.optimization-level" class="link">opcache.optimization_level</a></td>
      <td>0x7FFEBFFF</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Changed from <code class="literal">0x7FFFBFFF</code> in PHP 7.3.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.inherited-hack" class="link">opcache.inherited_hack</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Removed in PHP 7.3.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.dups-fix" class="link">opcache.dups_fix</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.blacklist-filename" class="link">opcache.blacklist_filename</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.max-file-size" class="link">opcache.max_file_size</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.consistency-checks" class="link">opcache.consistency_checks</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Disabled as of 8.1.18 and 8.2.5. Removed as of PHP 8.3.0.</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.force-restart-timeout" class="link">opcache.force_restart_timeout</a></td>
      <td>180</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.error-log" class="link">opcache.error_log</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.log-verbosity-level" class="link">opcache.log_verbosity_level</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.record-warnings" class="link">opcache.record_warnings</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.preferred-memory-model" class="link">opcache.preferred_memory_model</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.protect-memory" class="link">opcache.protect_memory</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.mmap-base" class="link">opcache.mmap_base</a></td>
      <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Windows only.</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.restrict-api" class="link">opcache.restrict_api</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.file_update_protection" class="link">opcache.file_update_protection</a></td>
      <td>2</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.huge_code_pages" class="link">opcache.huge_code_pages</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.lockfile_path" class="link">opcache.lockfile_path</a></td>
      <td>&quot;/tmp&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.opt_debug_level" class="link">opcache.opt_debug_level</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 7.1.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.file-cache" class="link">opcache.file_cache</a></td>
      <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.file-cache-only" class="link">opcache.file_cache_only</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.file-cache-consistency-checks" class="link">opcache.file_cache_consistency_checks</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.file-cache-fallback" class="link">opcache.file_cache_fallback</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Windows only.</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.validate-permission" class="link">opcache.validate_permission</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 7.0.14</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.validate-root" class="link">opcache.validate_root</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 7.0.14</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.preload" class="link">opcache.preload</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 7.4.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.preload-user" class="link">opcache.preload_user</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 7.4.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.cache-id" class="link">opcache.cache_id</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Windows only. Available as of PHP 7.4.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit" class="link">opcache.jit</a></td>
      <td>&quot;tracing&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-buffer-size" class="link">opcache.jit_buffer_size</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-debug" class="link">opcache.jit_debug</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-bisect-limit" class="link">opcache.jit_bisect_limit</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-prof-threshold" class="link">opcache.jit_prof_threshold</a></td>
      <td>0.005</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-max-root-traces" class="link">opcache.jit_max_root_traces</a></td>
      <td>1024</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-max-side-traces" class="link">opcache.jit_max_side_traces</a></td>
      <td>128</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-max-exit-counters" class="link">opcache.jit_max_exit_counters</a></td>
      <td>8192</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-hot-loop" class="link">opcache.jit_hot_loop</a></td>
      <td>64</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-hot-func" class="link">opcache.jit_hot_func</a></td>
      <td>127</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-hot-return" class="link">opcache.jit_hot_return</a></td>
      <td>8</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-hot-side-exit" class="link">opcache.jit_hot_side_exit</a></td>
      <td>8</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-blacklist-root-trace" class="link">opcache.jit_blacklist_root_trace</a></td>
      <td>16</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-blacklist-side-trace" class="link">opcache.jit_blacklist_side_trace</a></td>
      <td>8</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-max-loop-unrolls" class="link">opcache.jit_max_loop_unrolls</a></td>
      <td>8</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-max-recursive-calls" class="link">opcache.jit_max_recursive_calls</a></td>
      <td>2</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-max-recursive-return" class="link">opcache.jit_max_recursive_returns</a></td>
      <td>2</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

     <tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-max-polymorphic-calls" class="link">opcache.jit_max_polymorphic_calls</a></td>
      <td>2</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
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
   
    <dt id="ini.opcache.enable">
     <code class="parameter">opcache.enable</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Enables the opcode cache. When disabled, code is not optimised or 
      cached. The setting <code class="literal">opcache.enable</code> can not be
      enabled at runtime through <span class="function"><a href="function.ini-set.php" class="function">ini_set()</a></span>, it can only
      be disabled. Trying to enable it in a script will generate a warning.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.enable-cli">
     <code class="parameter">opcache.enable_cli</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Enables the opcode cache for the CLI version of PHP.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.memory-consumption">
     <code class="parameter">opcache.memory_consumption</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      The size of the shared memory storage used by OPcache, in megabytes.
      The minimum permissible value is <code class="literal">&quot;8&quot;</code>,
      which is enforced if a smaller value is set.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.interned-strings-buffer">
     <code class="parameter">opcache.interned_strings_buffer</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      The amount of memory used to store interned strings, in megabytes.
      The maximum value is 32767 on 64bit architectures,
      and 4095 on 32bit architectures.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       Prior to PHP 8.4.0, the maximum value was 4095 megabytes on all
       architectures.
      </span>
     </p></blockquote>
    </dd>
   
   
    <dt id="ini.opcache.max-accelerated-files">
     <code class="parameter">opcache.max_accelerated_files</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      The maximum number of keys (and therefore scripts) in the OPcache hash
      table. The actual value used will be the first number in the set of
      prime numbers
      <code class="literal">{ 223, 463, 983, 1979, 3907, 7963, 16229, 32531, 65407, 130987, 262237, 524521, 1048793 }</code>
      that is greater than or equal to the configured value. The minimum value is 200. The maximum
      value is 1000000.
      Values outside of this range are clamped to the permissible range.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.max-wasted-percentage">
     <code class="parameter">opcache.max_wasted_percentage</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      The maximum percentage of wasted memory that is allowed before a restart
      is scheduled, if there is insufficient free memory.
      The maximum permissible value is <code class="literal">&quot;50&quot;</code>,
      which is enforced if a larger value is set.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.use-cwd">
     <code class="parameter">opcache.use_cwd</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      If enabled, OPcache appends the current working directory to the script
      key, thereby eliminating possible collisions between files with the same
      base name. Disabling this directive improves performance, but may break
      existing applications.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.validate-timestamps">
     <code class="parameter">opcache.validate_timestamps</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      If enabled, OPcache will check for updated scripts every
      <a href="opcache.configuration.php#ini.opcache.revalidate-freq" class="link">opcache.revalidate_freq</a>
      seconds. When this directive is disabled, you must reset OPcache
      manually via <span class="function"><a href="function.opcache-reset.php" class="function">opcache_reset()</a></span>,
      <span class="function"><a href="function.opcache-invalidate.php" class="function">opcache_invalidate()</a></span> or by restarting the Web server
      for changes to the filesystem to take effect.
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        OPcache may still validate the timestamp of a file at compile-time if
        <a href="opcache.configuration.php#ini.opcache.file_update_protection" class="link">opcache.file_update_protection</a>
        or <a href="opcache.configuration.php#ini.opcache.max-file-size" class="link">opcache.max_file_size</a>
        options are set to non-zero values.
       </span>
      </p></blockquote>
     </p>
    </dd>
   
   
    <dt id="ini.opcache.revalidate-freq">
     <code class="parameter">opcache.revalidate_freq</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      How often to check script timestamps for updates, in seconds.
      <code class="literal">0</code> will result in OPcache checking for updates on
      every request.
     </p>
     <p class="para">
      This configuration directive is ignored if
      <a href="opcache.configuration.php#ini.opcache.validate-timestamps" class="link">opcache.validate_timestamps</a>
      is disabled.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.revalidate-path">
     <code class="parameter">opcache.revalidate_path</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      If disabled, existing cached files using the same
      <a href="ini.core.php#ini.include-path" class="link">include_path</a> will be reused.
      Thus, if a file with the same name is elsewhere in the include_path, it
      won&#039;t be found.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.save-comments">
     <code class="parameter">opcache.save_comments</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      If disabled, all documentation comments will be discarded from the
      opcode cache to reduce the size of the optimised code. Disabling this
      configuration directive may break applications and frameworks that rely
      on comment parsing for annotations, including Doctrine, Zend Framework 2
      and PHPUnit.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.fast-shutdown">
     <code class="parameter">opcache.fast_shutdown</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      If enabled, a fast shutdown sequence is used that doesn&#039;t free each
      allocated block, but relies on the Zend Engine memory manager to
      deallocate the entire set of request variables en masse.
     </p>
     <p class="para">
      This directive has been removed in PHP 7.2.0. A variant of the fast
      shutdown sequence has been integrated into PHP and will be automatically
      used if possible.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.enable-file-override">
     <code class="parameter">opcache.enable_file_override</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      When enabled, the opcode cache will be checked for whether a file has
      already been cached when <span class="function"><a href="function.file-exists.php" class="function">file_exists()</a></span>,
      <span class="function"><a href="function.is-file.php" class="function">is_file()</a></span> and <span class="function"><a href="function.is-readable.php" class="function">is_readable()</a></span> are
      called. This may increase performance in applications that check the
      existence and readability of PHP scripts, but risks returning stale data
      if 
      <a href="opcache.configuration.php#ini.opcache.validate-timestamps" class="link">opcache.validate_timestamps</a>
      is disabled.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.optimization-level">
     <code class="parameter">opcache.optimization_level</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      A bitmask that controls which optimisation passes are executed.
      The default is to apply all safe optimizations.
      Changing the default is mostly useful for debugging/developing the optimizer
      (see also <a href="opcache.configuration.php#ini.opcache.opt_debug_level" class="link">opcache.opt_debug_level</a>).
     </p>
    </dd>
   
   
    <dt id="ini.opcache.inherited-hack">
     <code class="parameter">opcache.inherited_hack</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      This configuration directive is ignored.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.dups-fix">
     <code class="parameter">opcache.dups_fix</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      This hack should only be enabled to work around &quot;Cannot redeclare class&quot;
      errors.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.blacklist-filename">
     <code class="parameter">opcache.blacklist_filename</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      The location of the OPcache blacklist file. A blacklist file is a text
      file containing the names of files that should not be accelerated, one
      per line. Wildcards are allowed, and prefixes can also be provided.
      Lines starting with a semi-colon are ignored as comments.
     </p>
     <p class="para">
      A simple blacklist file might look as follows:
     </p>
     <div class="informalexample">
      <div class="example-contents">
<div class="cdata"><pre>
; Matches a specific file.
/var/www/broken.php
; A prefix that matches all files starting with x.
/var/www/x
; A wildcard match.
/var/www/*-broken.php
</pre></div>
      </div>

     </div>
    </dd>
   
   
    <dt id="ini.opcache.max-file-size">
     <code class="parameter">opcache.max_file_size</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      The maximum file size that will be cached, in bytes. If this is
      <code class="literal">0</code>, all files will be cached.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.consistency-checks">
     <code class="parameter">opcache.consistency_checks</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      If non-zero, OPcache will verify the cache checksum every N requests,
      where N is the value of this configuration directive. This should only
      be enabled when debugging, as it will impair performance.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       Disabled as of 8.1.18 and 8.2.5. Removed as of PHP 8.3.0.
      </p>
     </p></blockquote>
    </dd>
   
   
    <dt id="ini.opcache.force-restart-timeout">
     <code class="parameter">opcache.force_restart_timeout</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      The length of time to wait for a scheduled restart to begin if the cache
      isn&#039;t active, in seconds. If the timeout is hit, then OPcache assumes
      that something is wrong and will kill the processes holding locks on the
      cache to permit a restart.
     </p>
     <p class="para">
      If
      <a href="opcache.configuration.php#ini.opcache.log-verbosity-level" class="link">opcache.log_verbosity_level</a>
      is set to 2 or above, a warning will be recorded in the error log when
      this occurs.
     </p>
     <p class="para">
      This directive is not supported on Windows.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.error-log">
     <code class="parameter">opcache.error_log</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      The error log for OPcache errors. An empty string is treated the same as
      <code class="literal">stderr</code>, and will result in logs being sent to
      standard error (which will be the Web server error log in most cases).
     </p>
    </dd>
   
   
    <dt id="ini.opcache.log-verbosity-level">
     <code class="parameter">opcache.log_verbosity_level</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      The log verbosity level. By default, only fatal errors (level 0) and
      errors (level 1) are logged. Other levels available are warnings (level
      2), information messages (level 3) and debug messages (level 4).
     </p>
    </dd>
   
   
    <dt id="ini.opcache.record-warnings">
     <code class="parameter">opcache.record_warnings</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      If enabled, OPcache will record compile-time warnings and replay them on
      the next include, even if it is served from cache.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.preferred-memory-model">
     <code class="parameter">opcache.preferred_memory_model</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      The preferred memory model for OPcache to use. If left empty, OPcache
      will choose the most appropriate model, which is the correct behaviour
      in virtually all cases.
     </p>
     <p class="para">
      Possible values include <code class="literal">mmap</code>, <code class="literal">shm</code>,
      <code class="literal">posix</code> and <code class="literal">win32</code>.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.protect-memory">
     <code class="parameter">opcache.protect_memory</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Protects shared memory from unexpected writes while executing scripts.
      This is useful for internal debugging only.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.mmap-base">
     <code class="parameter">opcache.mmap_base</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      The base used for shared memory segments on Windows. All PHP processes
      have to map shared memory into the same address space. Using this
      directive allows &quot;Unable to reattach to base address&quot; errors to be
      fixed.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.restrict-api">
     <code class="parameter">opcache.restrict_api</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Allows calling OPcache API functions only from PHP scripts which path
      is started from specified string. The default <code class="literal">&quot;&quot;</code>
      means no restriction.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.file_update_protection">
     <code class="parameter">opcache.file_update_protection</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Prevents caching files that are less than this number of seconds old.
      It protects from caching of incompletely updated files. In case all file
      updates are atomic, performance can be increased by setting this to <code class="literal">0</code>.
      This will allow files to be cached immediately.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.huge_code_pages">
     <code class="parameter">opcache.huge_code_pages</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Enables or disables copying of PHP code (text segment) into HUGE PAGES.
      This should improve performance, but requires appropriate OS configuration.
      Available on Linux as of PHP 7.0.0, and on FreeBSD as of PHP 7.4.0.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.lockfile_path">
     <code class="parameter">opcache.lockfile_path</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Absolute path used to store shared lockfiles (for *nix only)
     </p>
    </dd>
   
   
    <dt id="ini.opcache.opt_debug_level">
     <code class="parameter">opcache.opt_debug_level</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Produces opcode dumps for debugging different stages of optimizations.
      0x10000 will output opcodes as the compiler produced them before any optimization occurs 
      while 0x20000 will output optimized codes.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.file-cache">
     <code class="parameter">opcache.file_cache</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Enables and sets the second level cache directory. It should improve
      performance when SHM memory is full, at server restart or SHM reset. The
      default <code class="literal">&quot;&quot;</code> disables file based caching.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.file-cache-only">
     <code class="parameter">opcache.file_cache_only</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Enables or disables opcode caching in shared memory.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       Prior to PHP 8.1.0, disabling this directive with an already populated
       file cache required to manually clear the file cache.
      </p>
     </p></blockquote>
    </dd>
   
   
    <dt id="ini.opcache.file-cache-consistency-checks">
     <code class="parameter">opcache.file_cache_consistency_checks</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Enables or disables checksum validation when script loaded from file cache.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.file-cache-fallback">
     <code class="parameter">opcache.file_cache_fallback</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Implies <code class="code">opcache.file_cache_only=1</code> for a certain process that
      failed to reattach to shared memory (Windows only). Explicitly enabling
      the file cache is required.
     </p>
     <div class="caution"><strong class="caution">Caution</strong>
      <p class="simpara">
       Disabling this configuration option may prevent processes to start,
       and is therefore discouraged.
      </p>
     </div>
    </dd>
   
   
    <dt id="ini.opcache.validate-permission">
     <code class="parameter">opcache.validate_permission</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Validates the cached file permissions against the current user.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.validate-root">
     <code class="parameter">opcache.validate_root</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Prevents name collisions in chroot&#039;ed environments. This should be enabled in
      all chroot&#039;ed environments to prevent access to files outside the chroot.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.preload">
     <code class="parameter">opcache.preload</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Specifies a PHP script that is going to be compiled and executed at server start-up,
      and which may preload other files, either by <span class="function"><a href="function.include.php" class="function">include</a></span>ing them or by
      using the <span class="function"><a href="function.opcache-compile-file.php" class="function">opcache_compile_file()</a></span> function. All the entities (e.g.
      functions and classes) defined in these files will be available to requests out of 
      the box, until the server is shut down.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       Preloading is not supported on Windows.
      </p>
     </p></blockquote>
    </dd>
   
   
    <dt id="ini.opcache.preload-user">
     <code class="parameter">opcache.preload_user</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Lets the preloading to be run as the specified system user. This is useful for servers that
      startup as root before switching to an unprivileged system user. Preloading as root is not
      allowed by default for security reasons, unless this directive is explicitly set to
      <code class="literal">root</code>.
      As of PHP 8.3.0, this directive does not need to be set in order to allow preloading while
      running as root when using the <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> or <a href="book.phpdbg.php" class="link">phpdbg SAPI</a>.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.cache-id">
     <code class="parameter">opcache.cache_id</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      On Windows, all processes running the same <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr>
      under the same user account having the same cache ID share a single OPcache instance.
      The value of the cache ID can be freely chosen.
     </p>
     <div class="tip"><strong class="tip">Tip</strong>
      <p class="simpara">
       For IIS, different application pools can have their own OPcache instance
       by using the environment variable <var class="envar">APP_POOL_ID</var> as
       <code class="parameter">opcache.cache_id</code>.
      </p>
     </div>
    </dd>
   
   
    <dt id="ini.opcache.jit">
     <code class="parameter">opcache.jit</code>
     <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span>
    </dt>
    <dd>
     <p class="para">
      For typical usage, this option accepts one of four string values:
     </p>
     <ul class="simplelist">
      <li><code class="literal">disable</code>: Completely disabled, cannot be enabled at runtime.</li>
      <li><code class="literal">off</code>:  Disabled, but can be enabled at runtime.</li>
      <li>
       <code class="literal">tracing</code>/<code class="literal">on</code>: Use tracing JIT.
       Enabled by default and recommended for most users.
      </li>
      <li><code class="literal">function</code>: Use function JIT.</li>
     </ul>
     <p class="para">
      For advanced usage, this option accepts a 4-digit integer <code class="literal">CRTO</code>, where the digits mean:
      <dl>
       
        <dt><code class="literal">C</code> (CPU-specific optimization flags)</dt>
        <dd>
         <ul class="simplelist">
          <li><code class="literal">0</code>: Disable CPU-specific optimization.</li>
          <li><code class="literal">1</code>: Enable use of AVX, if the CPU supports it.</li>
         </ul>
        </dd>
       
       
        <dt><code class="literal">R</code> (register allocation)</dt>
        <dd>
         <ul class="simplelist">
          <li><code class="literal">0</code>: Don't perform register allocation.</li>
          <li><code class="literal">1</code>: Perform block-local register allocation.</li>
          <li><code class="literal">2</code>: Perform global register allocation.</li>
         </ul>
        </dd>
       
       
        <dt><code class="literal">T</code> (trigger)</dt>
        <dd>
         <ul class="simplelist">
          <li><code class="literal">0</code>: Compile all functions on script load.</li>
          <li><code class="literal">1</code>: Compile functions on first execution.</li>
          <li>
           <code class="literal">2</code>: Profile functions on first request and compile
           the hottest functions afterwards.
          </li>
          <li><code class="literal">3</code>: Profile on the fly and compile hot functions.</li>
          <li><code class="literal">4</code>: Currently unused.</li>
          <li>
           <code class="literal">5</code>: Use tracing JIT. Profile on the fly and
           compile traces for hot code segments.
          </li>
         </ul>
        </dd>
       
       
        <dt><code class="literal">O</code> (optimization level)</dt>
        <dd>
         <ul class="simplelist">
          <li><code class="literal">0</code>: No JIT.</li>
          <li><code class="literal">1</code>: Minimal JIT (call standard VM handlers).</li>
          <li><code class="literal">2</code>: Inline VM handlers.</li>
          <li><code class="literal">3</code>: Use type inference.</li>
          <li><code class="literal">4</code>: Use call graph.</li>
          <li><code class="literal">5</code>: Optimize whole script.</li>
         </ul>
        </dd>
       
      </dl>
      The <code class="literal">&quot;tracing&quot;</code> mode corresponds to <code class="code">CRTO = 1254</code>,
      the <code class="literal">&quot;function&quot;</code> mode corresponds to <code class="code">CRTO = 1205</code>.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.jit-buffer-size">
     <code class="parameter">opcache.jit_buffer_size</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      The amount of shared memory to reserve for compiled JIT code. A zero value disables the JIT.
     </p>
     <span class="simpara">When an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> is used, the
value is measured in bytes. Shorthand notation, as described
in <a href="faq.using.php#faq.using.shorthandbytes" class="link">this FAQ</a>, may also be used.
</span>
    </dd>
   
   
    <dt id="ini.opcache.jit-debug">
     <code class="parameter">opcache.jit_debug</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      A bit mask specifying which JIT debug output to enable.
      For possible values, please consult
      <a href="https://github.com/php/php-src/blob/master/ext/opcache/jit/zend_jit.h" class="link external">&raquo;&nbsp;zend_jit.h</a>
      (search for macro definitions beginning with <code class="code">ZEND_JIT_DEBUG</code>).
     </p>
    </dd>
   
   
    <dt id="ini.opcache.jit-bisect-limit">
     <code class="parameter">opcache.jit_bisect_limit</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Debugging option that disables JIT compilation after compiling a certain number of functions.
      This may be helpful to bisect the source of a JIT miscompilation. Note: this option only works
      when JIT trigger is set to 0 (compile on script load) or 1 (compile on first execution),
      e.g. <code class="code">opcache.jit=1215</code>. See more in <a href="opcache.configuration.php#ini.opcache.jit" class="link">opcache.jit</a> option.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.jit-prof-threshold">
     <code class="parameter">opcache.jit_prof_threshold</code>
     <span class="type"><a href="language.types.float.php" class="type float">float</a></span>
    </dt>
    <dd>
     <p class="para">
      When using the &quot;profile on first request&quot; trigger mode, this threshold determines whether a
      function is considered hot. The number of calls to the function divided by the number of calls
      to all functions must be above the threshold. For example, a threshold of 0.005 means that
      functions that made up more than 0.5% of all calls will be JIT compiled.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.jit-max-root-traces">
     <code class="parameter">opcache.jit_max_root_traces</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Maximum number of root traces. The root trace is an execution flow taking one path through the code firstly,
      which is a unit of JIT compilation. JIT will not compile new code if it reaches this limit.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.jit-max-side-traces">
     <code class="parameter">opcache.jit_max_side_traces</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Maximum number of side traces a root trace may have. The side trace is another execution flow that does not
      follow the path of compiled root trace. Side traces belonging to the same root trace will not be compiled
      if it reaches this limit.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.jit-max-exit-counters">
     <code class="parameter">opcache.jit_max_exit_counters</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Maximum number of side trace exit counters. This limits the total number of side traces
      there may be, across all root traces.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.jit-hot-loop">
     <code class="parameter">opcache.jit_hot_loop</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      After how many iterations a loop is considered hot.
      Valid value range is <code class="code">[0,255]</code>; for any setting out of this range,
      e.g. <code class="literal">-1</code> or <code class="literal">256</code>, default value will be
      used instead. <code class="literal">0</code> will disable JIT to trace and compile any loops.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.jit-hot-func">
     <code class="parameter">opcache.jit_hot_func</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      After how many calls a function is considered hot.
      Valid value range is <code class="code">[0,255]</code>; for any setting out of this range,
      e.g. <code class="literal">-1</code> or <code class="literal">256</code>, default value will be
      used instead. <code class="literal">0</code> will disable JIT to trace and compile any functions.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.jit-hot-return">
     <code class="parameter">opcache.jit_hot_return</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      After how many returns a return is considered hot.
      Valid value range is <code class="code">[0,255]</code>; for any setting out of this range,
      e.g. <code class="literal">-1</code> or <code class="literal">256</code>, default value will be
      used instead. <code class="literal">0</code> will disable JIT to trace and compile any returns.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.jit-hot-side-exit">
     <code class="parameter">opcache.jit_hot_side_exit</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      After how many exits a side exit is considered hot.
      Valid value range is <code class="code">[0,255]</code>; for any setting out of this range,
      e.g. <code class="literal">-1</code> or <code class="literal">256</code>, default value will be
      used instead. <code class="literal">0</code> will disable JIT to trace and compile any side exits.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.jit-blacklist-root-trace">
     <code class="parameter">opcache.jit_blacklist_root_trace</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Maximum number of times the compilation of a root trace is attempted before it is blacklisted.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.jit-blacklist-side-trace">
     <code class="parameter">opcache.jit_blacklist_side_trace</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Maximum number of times the compilation of a side trace is attempted before it is blacklisted.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.jit-max-loop-unrolls">
     <code class="parameter">opcache.jit_max_loop_unrolls</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Maximum number of attempts to unroll a loop in a side trace,
      trying to reach the root trace and close the outer loop.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.jit-max-recursive-calls">
     <code class="parameter">opcache.jit_max_recursive_calls</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Maximum number of unrolled recursive call loops.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.jit-max-recursive-return">
     <code class="parameter">opcache.jit_max_recursive_returns</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Maximum number of unrolled recursive return loops.
     </p>
    </dd>
   
   
    <dt id="ini.opcache.jit-max-polymorphic-calls">
     <code class="parameter">opcache.jit_max_polymorphic_calls</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Maximum number of attempts to inline polymorphic (dynamic or method) calls.
      Calls above this limit are treated as megamorphic and are not inlined.
     </p>
    </dd>
   
  </dl>
 </p>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/opcache/ini.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fopcache.configuration%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=opcache.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/opcache.configuration.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="120544">  <div class="votes">
    <div id="Vu120544">
    <a href="/manual/vote-note.php?id=120544&amp;page=opcache.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120544">
    <a href="/manual/vote-note.php?id=120544&amp;page=opcache.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120544" title="65% like this...">
    18
    </div>
  </div>
  <a href="#120544" class="name">
  <strong class="user"><em>damien at overeem dot org</em></strong></a><a class="genanchor" href="#120544"> &para;</a><div class="date" title="2017-01-27 04:35"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120544">
<div class="phpcode"><code><span class="html">When using PHP on a windows platform and enabling opcache, you might run into occasional 500 errors. These will appear to show up entirely random.<br /><br />When this happens, your windows Event log (Windows Logs/Application) will show (probably multiple)  entries from Zend OPcache with Event ID 487. Further information will state the following error message: "Base address marks unusable memory region".<br /><br />This issue can be resolved by adding the following to your php.ini:<br /><br />    opcache.mmap_base = 0x20000000<br /><br />Unfortunately I do not know the significance of the value "0x20000000". I can only tell you that this value works to solve the problem (Tried and tested)</span></code></div>
  </div>
 </div>
  <div class="note" id="124574">  <div class="votes">
    <div id="Vu124574">
    <a href="/manual/vote-note.php?id=124574&amp;page=opcache.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124574">
    <a href="/manual/vote-note.php?id=124574&amp;page=opcache.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124574" title="68% like this...">
    7
    </div>
  </div>
  <a href="#124574" class="name">
  <strong class="user"><em>carneiro at isharelife dot com dot br</em></strong></a><a class="genanchor" href="#124574"> &para;</a><div class="date" title="2020-01-08 03:39"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124574">
<div class="phpcode"><code><span class="html">If you try to allocate more memory that is available using opcache.memory_consumption PHP stops working without any logs to help on debugging. This issue took me 4 hours to solve when creating a staging server with same configrations and less memory that was available on production server.</span></code></div>
  </div>
 </div>
  <div class="note" id="123425">  <div class="votes">
    <div id="Vu123425">
    <a href="/manual/vote-note.php?id=123425&amp;page=opcache.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123425">
    <a href="/manual/vote-note.php?id=123425&amp;page=opcache.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123425" title="65% like this...">
    8
    </div>
  </div>
  <a href="#123425" class="name">
  <strong class="user"><em>wessos at example dot org</em></strong></a><a class="genanchor" href="#123425"> &para;</a><div class="date" title="2018-12-12 10:53"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123425">
<div class="phpcode"><code><span class="html">The optimization levels as of php 7.3 are the following:<br /><br />#define ZEND_OPTIMIZER_PASS_1        (1&lt;&lt;0)   /* CSE, STRING construction     */<br />#define ZEND_OPTIMIZER_PASS_2        (1&lt;&lt;1)   /* Constant conversion and jumps */<br />#define ZEND_OPTIMIZER_PASS_3        (1&lt;&lt;2)   /* ++, +=, series of jumps      */<br />#define ZEND_OPTIMIZER_PASS_4        (1&lt;&lt;3)   /* INIT_FCALL_BY_NAME -&gt; DO_FCALL */<br />#define ZEND_OPTIMIZER_PASS_5        (1&lt;&lt;4)   /* CFG based optimization       */<br />#define ZEND_OPTIMIZER_PASS_6        (1&lt;&lt;5)   /* DFA based optimization       */<br />#define ZEND_OPTIMIZER_PASS_7        (1&lt;&lt;6)   /* CALL GRAPH optimization      */<br />#define ZEND_OPTIMIZER_PASS_8        (1&lt;&lt;7)   /* SCCP (constant propagation)  */<br />#define ZEND_OPTIMIZER_PASS_9        (1&lt;&lt;8)   /* TMP VAR usage                */<br />#define ZEND_OPTIMIZER_PASS_10        (1&lt;&lt;9)   /* NOP removal                 */<br />#define ZEND_OPTIMIZER_PASS_11        (1&lt;&lt;10)  /* Merge equal constants       */<br />#define ZEND_OPTIMIZER_PASS_12        (1&lt;&lt;11)  /* Adjust used stack           */<br />#define ZEND_OPTIMIZER_PASS_13        (1&lt;&lt;12)  /* Remove unused variables     */<br />#define ZEND_OPTIMIZER_PASS_14        (1&lt;&lt;13)  /* DCE (dead code elimination) */<br />#define ZEND_OPTIMIZER_PASS_15        (1&lt;&lt;14)  /* (unsafe) Collect constants */<br />#define ZEND_OPTIMIZER_PASS_16        (1&lt;&lt;15)  /* Inline functions */<br /><br />Source: <a href="https://lxr.room11.org/xref/php-src%40master/ext/opcache/Optimizer/zend_optimizer.h" rel="nofollow" target="_blank">https://lxr.room11.org/xref/php-src%40master/ext/opcache/Optimizer/zend_optimizer.h</a></span></code></div>
  </div>
 </div>
  <div class="note" id="123780">  <div class="votes">
    <div id="Vu123780">
    <a href="/manual/vote-note.php?id=123780&amp;page=opcache.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123780">
    <a href="/manual/vote-note.php?id=123780&amp;page=opcache.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123780" title="66% like this...">
    6
    </div>
  </div>
  <a href="#123780" class="name">
  <strong class="user"><em>tizian dot schmidlin at gmail dot com</em></strong></a><a class="genanchor" href="#123780"> &para;</a><div class="date" title="2019-04-15 09:41"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123780">
<div class="phpcode"><code><span class="html">It should be noted that according to the original RFC (<a href="https://wiki.php.net/rfc/preload" rel="nofollow" target="_blank">https://wiki.php.net/rfc/preload</a>) `opcache.preload` caches preloaded files *forever* for all instances of the underlying PHP process.<br /><br />That means, that hosting multiple websites on the same server might result in some unexpected behaviour.<br /><br />Concrete example: <br />- you have a Symfony 3.2 App (which might be an endpoint of some type) and a Symfony 3.4 App (which might be your main application)<br />- both apps have a main Class called App that is in the same namespace (as it is usual, since the class name is unique to each project)<br />- depending on which app is loaded first, one or the other will work, since `opcache.preload` has no file based distinction of what class is used where and simply provides them to the user space<br /><br />This is avoidable by simply not preloading user space classes or, if you work with FPM, by defining a pool for each app.<br /><br />In order to optimize memory consumption, you might also use a common FPM Pool for all Symfony 3.4 Apps and preload the entire framework in there and simply not preload user space classes (which might be cached by opcache anyway but is slower, since it will be checked if the file has changed on every request).</span></code></div>
  </div>
 </div>
  <div class="note" id="120464">  <div class="votes">
    <div id="Vu120464">
    <a href="/manual/vote-note.php?id=120464&amp;page=opcache.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120464">
    <a href="/manual/vote-note.php?id=120464&amp;page=opcache.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120464" title="62% like this...">
    6
    </div>
  </div>
  <a href="#120464" class="name">
  <strong class="user"><em>bdurand at ensemblegroup dot net</em></strong></a><a class="genanchor" href="#120464"> &para;</a><div class="date" title="2017-01-12 11:19"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120464">
<div class="phpcode"><code><span class="html">It would appear as though the [opcache.enable] setting is indeed NOT PHP_INI_ALL.<br />For changing it within user.ini yields no effect when disabled at global level. user.ini is ignored for that setting.</span></code></div>
  </div>
 </div>
  <div class="note" id="129434">  <div class="votes">
    <div id="Vu129434">
    <a href="/manual/vote-note.php?id=129434&amp;page=opcache.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129434">
    <a href="/manual/vote-note.php?id=129434&amp;page=opcache.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129434" title="100% like this...">
    2
    </div>
  </div>
  <a href="#129434" class="name">
  <strong class="user"><em>JReezy</em></strong></a><a class="genanchor" href="#129434"> &para;</a><div class="date" title="2024-04-25 09:49"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129434">
<div class="phpcode"><code><span class="html">Despite the set of values for opcache.max_accelerated_files including the value 1048793, the maximum as stated is 1000000. If you select a number above 1000000 the value is set its default which is 10000.</span></code></div>
  </div>
 </div>
  <div class="note" id="129518">  <div class="votes">
    <div id="Vu129518">
    <a href="/manual/vote-note.php?id=129518&amp;page=opcache.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129518">
    <a href="/manual/vote-note.php?id=129518&amp;page=opcache.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129518" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#129518" class="name">
  <strong class="user"><em>daniel at elementor dot com</em></strong></a><a class="genanchor" href="#129518"> &para;</a><div class="date" title="2024-05-21 02:58"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129518">
<div class="phpcode"><code><span class="html">When opcache.use_cwd=0 include/require of relative paths from different directories will both resolve to the same (first) file.<br /><br />Example dir structure:<br />app1<br />  index.php<br />  lib.php<br />app2<br />  index.php<br />  lib.php<br /><br />both index.php(s):<br />include "lib.php"; <br /><br />app1/lib.php:<br />echo "app1";<br /><br />app2/lib.php:<br />echo "app2";<br /><br />both will echo "app1".</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=opcache.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/opcache.configuration.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="opcache.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="opcache.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="current">
                            <a href="opcache.configuration.php" title="Runtime Configuration">Runtime Configuration</a>
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
