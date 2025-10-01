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

 <link rel="canonical" href="https://www.php.net/manual/en/memcached.configuration.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/memcached.configuration.php">
 <link rel="alternate" href="https://www.php.net/manual/en/memcached.configuration.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/memcached.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/memcached.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/memcached.constants.php">

 <link rel="alternate" href="https://www.php.net/manual/en/memcached.configuration.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/memcached.configuration.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/memcached.configuration.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/memcached.configuration.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/memcached.configuration.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/memcached.configuration.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/memcached.configuration.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/memcached.configuration.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/memcached.configuration.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/memcached.configuration.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/memcached.configuration.php" hreflang="zh">

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
        <a href="memcached.constants.php">
          Predefined Constants &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="memcached.installation.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.memcached.php'>Memcached</a></li>      <li><a href='memcached.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/memcached.configuration.php' selected="selected">English</option>
            <option value='de/memcached.configuration.php'>German</option>
            <option value='es/memcached.configuration.php'>Spanish</option>
            <option value='fr/memcached.configuration.php'>French</option>
            <option value='it/memcached.configuration.php'>Italian</option>
            <option value='ja/memcached.configuration.php'>Japanese</option>
            <option value='pt_BR/memcached.configuration.php'>Brazilian Portuguese</option>
            <option value='ru/memcached.configuration.php'>Russian</option>
            <option value='tr/memcached.configuration.php'>Turkish</option>
            <option value='uk/memcached.configuration.php'>Ukrainian</option>
            <option value='zh/memcached.configuration.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="memcached.configuration" class="section">
 <h2 class="title">Runtime Configuration</h2>
 <p class="simpara">
The behaviour of these functions is affected by settings in <var class="filename">php.ini</var>.
</p>
 <p class="para">
  <table class="doctable table">
   <caption><strong>Memcached Configure Options</strong></caption>
   
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
      <td><a href="memcached.configuration.php#ini.memcached.sess-locking" class="link">memcached.sess_locking</a></td>
      <td>On</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 0.1.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-consistent-hash" class="link">memcached.sess_consistent_hash</a></td>
      <td>On</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 2.1.0. Default value is <code class="literal">On</code> as of memcached 3.0.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-binary" class="link">memcached.sess_binary</a></td>
      <td>Off</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 2.0.0. Replaced by <code class="literal">memcached.sess_binary_protocol</code> as of memcached 3.0.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-lock-wait" class="link">memcached.sess_lock_wait</a></td>
      <td>150000</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 0.1.0. Removed as of memcached 3.0.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-prefix" class="link">memcached.sess_prefix</a></td>
      <td>memc.sess.key.</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 0.1.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-number-of-replicas" class="link">memcached.sess_number_of_replicas</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 2.1.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-randomize-replica-read" class="link">memcached.sess_randomize_replica_read</a></td>
      <td>Off</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 2.1.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-remove-failed" class="link">memcached.sess_remove_failed</a></td>
      <td>On</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 2.1.0. Replaced by <code class="literal">memcached.sess_remove_failed_servers</code> as of memcached 3.0.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.compression-type" class="link">memcached.compression_type</a></td>
      <td>fastlz</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 0.1.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.compression-factor" class="link">memcached.compression_factor</a></td>
      <td>1.3</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 0.1.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.compression-threshold" class="link">memcached.compression_threshold</a></td>
      <td>2000</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 0.1.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.serializer" class="link">memcached.serializer</a></td>
      <td>igbinary</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 0.1.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.use-sasl" class="link">memcached.use_sasl</a></td>
      <td>Off</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 2.2.0. Removed as of memcached 3.0.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.default-binary-protocol" class="link">memcached.default_binary_protocol</a></td>
      <td>Off</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 3.0.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.default-connect-timeout" class="link">memcached.default_connect_timeout</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 3.0.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.default-consistent-hash" class="link">memcached.default_consistent_hash</a></td>
      <td>Off</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 3.0.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-binary-protocol" class="link">memcached.sess_binary_protocol</a></td>
      <td>On</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 3.0.0. Replace <code class="literal">memcached.sess_binary</code>.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-connect-timeout" class="link">memcached.sess_connect_timeout</a></td>
       <td>1000</td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td>Available as of memcached 2.2.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-consistent-hash-type" class="link">memcached.sess_consistent_hash_type</a></td>
      <td>ketama</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 3.1.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-lock-expire" class="link">memcached.sess_lock_expire</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 2.2.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-lock-retries" class="link">memcached.sess_lock_retries</a></td>
      <td>5</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 3.0.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-lock-wait-max" class="link">memcached.sess_lock_wait_max</a></td>
      <td>150</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 3.0.0. Default value <code class="literal">150</code> as of memcached 3.1.0 (previously <code class="literal">2000</code>).</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-lock-wait-min" class="link">memcached.sess_lock_wait_min</a></td>
      <td>150</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 3.0.0. Default value <code class="literal">150</code> as of memcached 3.1.0 (previously <code class="literal">1000</code>).</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-persistent" class="link">memcached.sess_persistent</a></td>
      <td>Off</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 3.0.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-remove-failed-servers" class="link">memcached.sess_remove_failed_servers</a></td>
      <td>Off</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 3.0.0. Replace <code class="literal">memcached.sess_remove_failed</code>.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-server-failure-limit" class="link">memcached.sess_server_failure_limit</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 3.0.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-sasl-password" class="link">memcached.sess_sasl_password</a></td>
      <td>null</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 2.2.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.sess-sasl-username" class="link">memcached.sess_sasl_username</a></td>
      <td>null</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of memcached 2.2.0.</td>
     </tr>

     <tr>
      <td><a href="memcached.configuration.php#ini.memcached.store-retry-count" class="link">memcached.store_retry_count</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>
       Available as of memcached 2.2.0.
       Default value <code class="literal">0</code> as of memcached 3.2.0
       (previously <code class="literal">2</code>).
      </td>
     </tr>

    </tbody>
   
  </table>

 </p>

 <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>

 <p class="para">
  <dl>
   
     <dt id="ini.memcached.sess-locking">
      <code class="parameter">memcached.sess_locking</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       Use session locking. Valid values: <code class="literal">On</code>, <code class="literal">Off</code>, the default is <code class="literal">On</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.sess-consistent-hash">
      <code class="parameter">memcached.sess_consistent_hash</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       If set to <code class="literal">On</code>, consistent hashing (libketama) is used for session handling.
       When consistent hashing is used,
       one can add or remove cache node(s) without messing up too much with existing keys.
       Default is <code class="literal">On</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.sess-binary">
      <code class="parameter">memcached.sess_binary</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       Use memcached session binary mode. Libmemcached replicas only work if
       binary mode is enabled. The default is <code class="literal">Off</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.sess-lock-wait">
      <code class="parameter">memcached.sess_lock_wait</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Session spin lock retry wait time in microseconds. Be careful when
       setting this value. Valid values are integers, where <code class="literal">0</code> is interpreted
       as the default value. Negative values result in a reduces locking to a
       try lock. The default is <code class="literal">150000</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.sess-prefix">
      <code class="parameter">memcached.sess_prefix</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Memcached session key prefix. Valid values are strings less than 219
       bytes long. The default value is <code class="literal">memc.sess.key</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.sess-number-of-replicas">
      <code class="parameter">memcached.sess_number_of_replicas</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Write data to a number of additional memcached servers. This is &quot;poor man&#039;s HA&quot; as libmemcached calls it.
       If this value is positive and <code class="literal">sess_remove_failed_servers</code> is enabled
       when a memcached server fails the session will continue to be available from a replica.
       However, if the failed memcache server becomes available again it will read the session
       from there which could have old data or no data at all.
       Default is <code class="literal">0</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.sess-randomize-replica-read">
      <code class="parameter">memcached.sess_randomize_replica_read</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       Memcached session replica read randomize.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.sess-remove-failed">
      <code class="parameter">memcached.sess_remove_failed</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Allow failed memcached server to automatically be removed.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.compression-type">
      <code class="parameter">memcached.compression_type</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Set the compression type, valid values are: <code class="literal">fastlz</code>, <code class="literal">zlib</code>.
       The default is <code class="literal">fastlz</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.compression-factor">
      <code class="parameter">memcached.compression_factor</code>
      <span class="type"><a href="language.types.float.php" class="type float">float</a></span>
     </dt>
     <dd>
      <p class="para">
       Compression factor. Store compressed value only if the compression
       factor (saving) exceeds the set limit. Store compressed if:
       <code class="literal">plain_len &gt; comp_len * factor</code>. The default value
       is <code class="literal">1.3</code> (23% space saving).
      </p>
     </dd>
    
    
     <dt id="ini.memcached.compression-threshold">
      <code class="parameter">memcached.compression_threshold</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       The compression threshold. Do not compress serialized values below this
       threshold. The default is <code class="literal">2000</code> bytes.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.serializer">
      <code class="parameter">memcached.serializer</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Set the default serializer for new memcached objects. Valid values
       are: <code class="literal">php</code>, <code class="literal">igbinary</code>, <code class="literal">json</code>,
       <code class="literal">json_array</code>, <code class="literal">msgpack</code>.
      </p>
      <dl>
       
        <dt>json</dt>
        <dd>
         <p class="para">
          Standard PHP JSON encoding. This serializer is fast and compact but
          only works on UTF-8 encoded data and does not fully implement
          serializing. See the JSON extension. Available as of memcached 0.2.0.
         </p>
        </dd>
       
       
        <dt>json_array</dt>
        <dd>
         <p class="para">
          As <code class="literal">json</code>, but decodes into arrays. Available as of memcached 2.0.0.
         </p>
        </dd>
       
       
        <dt>php</dt>
        <dd>
         <p class="para">
          The standard PHP serializer.
         </p>
        </dd>
       
       
        <dt>igbinary</dt>
        <dd>
         <p class="para">
          A binary serializer. Available as of memcached 0.1.4.
         </p>
        </dd>
       
       
        <dt>msgpack</dt>
        <dd>
         <p class="para">
          A cross-language binary serializer. Available as of memcached 2.2.0.
         </p>
        </dd>
       
      </dl>
      <p class="para">
       The default is <code class="literal">igbinary</code> if available, then <code class="literal">msgpack</code> if
       available, then <code class="literal">php</code> otherwise.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.use-sasl">
      <code class="parameter">memcached.use_sasl</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       Use SASL authentication for connections. Valid values: <code class="literal">On</code>, <code class="literal">Off</code>. The
       default is <code class="literal">Off</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.default-binary-protocol">
      <code class="parameter">memcached.default_binary_protocol</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       Sets the default memcached protocol for new connections. (To configure the memcached protocol for
       connections used by sessions, use <code class="literal">memcached.sess_binary_protocol</code> instead.)

       If set to <code class="literal">On</code>, the memcached binary protocol is used by default.
       If set to <code class="literal">Off</code>, the memcached text protocol is used.
       Default is <code class="literal">Off</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.default-connect-timeout">
      <code class="parameter">memcached.default_connect_timeout</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Sets the default memcached connection timeout for new connections.
       (To configure the memcached connection timeout for sessions, use <code class="literal">memcached.sess_connect_timeout</code> instead.)

       In non-blocking mode this changes the value of the timeout.
       During socket connection in milliseconds.
       Specifying <code class="literal">-1</code> means an infinite timeout.
       Specifying <code class="literal">0</code> means using the memcached library&#039;s default connection timeout.
       Default is <code class="literal">0</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.default-consistent-hash">
      <code class="parameter">memcached.default_consistent_hash</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       Sets the default for consistent hashing for new connections.
       (To configure consistent hashing for session connections,
       use <code class="literal">memcached.sess_consistent_hash</code> instead.)

       If set to <code class="literal">On</code>, consistent hashing (libketama) is used for
       session handling. When consistent hashing is used, one can add or remove cache node(s)
       without messing up too much with existing keys default is <code class="literal">Off</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.sess-binary-protocol">
      <code class="parameter">memcached.sess_binary_protocol</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       Use the memcached binary protocol for memcached sessions instead of the text protocol.
       libmemcached replicas only work if the binary mode is enabled.
       However, certain proxies (such as twemproxy) will only work if the binary protocol is disabled.
       Default is <code class="literal">On</code> as of libmemcached 1.0.18.
       Prior to libmemcached 1.0.18, the default was <code class="literal">Off</code>.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        In previous versions of php-memcached, this setting was called
        <code class="literal">memcached.sess_binary</code>.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt id="ini.memcached.sess-connect-timeout">
      <code class="parameter">memcached.sess_connect_timeout</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       memcached connect timeout value
       In non-blocking mode this changes the value of the timeout
       during socket connection in milliseconds.
       Specifying <code class="literal">-1</code> means an infinite timeout.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.sess-consistent-hash-type">
      <code class="parameter">memcached.sess_consistent_hash_type</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Memcached session consistent hash type.
       If set to <code class="literal">ketama</code>, consistent hashing (libketama)
       is used for session handling.
       If set to <code class="literal">ketama_weighted</code>, weighted consistent hashing (libketama)
       is used for session handling.
       Default is <code class="literal">ketama</code>.
       Prior to php-memcached 3.0, the default was <code class="literal">ketama_weighted</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.sess-lock-expire">
      <code class="parameter">memcached.sess_lock_expire</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       The time, in seconds, before a lock should release itself.
       Setting to <code class="literal">0</code> results in the default behaviour,
       which is to use PHP&#039;s <code class="literal">max_execution_time</code>.
       Default is <code class="literal">0</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.sess-lock-retries">
      <code class="parameter">memcached.sess_lock_retries</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       The number of times to retry locking the session lock, not including the first attempt.
       Default is <code class="literal">5</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.sess-lock-wait-max">
      <code class="parameter">memcached.sess_lock_wait_max</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       The maximum time, in milliseconds, to wait between session lock attempts.
       The default is <code class="literal">150</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.sess-lock-wait-min">
      <code class="parameter">memcached.sess_lock_wait_min</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       The minimum time, in milliseconds, to wait between session lock attempts.
       This value is double on each lock retry until <code class="literal">memcached.sess_lock_wait_max</code> is
       reached, after which any further retries will take
       <code class="literal">memcached.sess_lock_wait_max</code> seconds.
       The default is <code class="literal">150</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.sess-persistent">
      <code class="parameter">memcached.sess_persistent</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       Whether or not to re-use the memcached connections corresponding to the value(s) of
       <code class="literal">session.save_path</code> after the execution of the script ends. Don&#039;t use this if
       certain settings (e.g. SASL settings, sess_binary_protocol) would be overridden between requests.
       Default is <code class="literal">Off</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.sess-remove-failed-servers">
      <code class="parameter">memcached.sess_remove_failed_servers</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       Allow failed memcached server to automatically be removed.
       Default is <code class="literal">Off</code>.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        In previous versions of php-memcached, this setting was called
        <code class="literal">memcached.sess_remove_failed</code>.
       </span>
      </p></blockquote>
     </dd>
    
    
     <dt id="ini.memcached.sess-server-failure-limit">
      <code class="parameter">memcached.sess_server_failure_limit</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Set this value to enable the server be removed after
       configured number of continuous times connection failure.
       Default is <code class="literal">0</code>.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.sess-sasl-password">
      <code class="parameter">memcached.sess_sasl_password</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Session SASL password.
       Both username and password need to be set for SASL to be enabled.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.sess-sasl-username">
      <code class="parameter">memcached.sess_sasl_username</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Session SASL username.
       Both username and password need to be set for SASL to be enabled.
      </p>
     </dd>
    
    
     <dt id="ini.memcached.store-retry-count">
      <code class="parameter">memcached.store_retry_count</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       The amount of retries for failed store commands.
       This mechanism allows transparent fail-over to secondary servers when
       set/increment/decrement/setMulti operations fail on
       the desired server in a multi-server environment.
       The default is <code class="literal">2</code>.
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
        <a href="https://github.com/php/doc-en/blob/master/reference/memcached/ini.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmemcached.configuration%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=memcached.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcached.configuration.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114565">  <div class="votes">
    <div id="Vu114565">
    <a href="/manual/vote-note.php?id=114565&amp;page=memcached.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114565">
    <a href="/manual/vote-note.php?id=114565&amp;page=memcached.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114565" title="60% like this...">
    5
    </div>
  </div>
  <a href="#114565" class="name">
  <strong class="user"><em>senz</em></strong></a><a class="genanchor" href="#114565"> &para;</a><div class="date" title="2014-03-06 01:28"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114565">
<div class="phpcode"><code><span class="html">In case, you are wondering why your sessions are "killed" after 1440 seconds, take a look at session.gc_maxlifetime. It's value is used in memcached expiration field according to memcache protocol rules. Also, do not forget about cookie expiration time</span></code></div>
  </div>
 </div>
  <div class="note" id="121628">  <div class="votes">
    <div id="Vu121628">
    <a href="/manual/vote-note.php?id=121628&amp;page=memcached.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121628">
    <a href="/manual/vote-note.php?id=121628&amp;page=memcached.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121628" title="56% like this...">
    2
    </div>
  </div>
  <a href="#121628" class="name">
  <strong class="user"><em>Piotr Gabryjeluk</em></strong></a><a class="genanchor" href="#121628"> &para;</a><div class="date" title="2017-09-11 11:12"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121628">
<div class="phpcode"><code><span class="html">Apparently in version 3.0.3 the default for memcached.sess_binary_protocol in TRUE. Also note the key is memcached.sess_binary_protocol, not memcached.sess.<br /><br />Setting memcached.sess_binary_protocol to FALSE is required if you want to save the session to memcached through twemproxy.</span></code></div>
  </div>
 </div>
  <div class="note" id="106887">  <div class="votes">
    <div id="Vu106887">
    <a href="/manual/vote-note.php?id=106887&amp;page=memcached.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106887">
    <a href="/manual/vote-note.php?id=106887&amp;page=memcached.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106887" title="50% like this...">
    1
    </div>
  </div>
  <a href="#106887" class="name">
  <strong class="user"><em>adolfoabegg at gmail dot com</em></strong></a><a class="genanchor" href="#106887"> &para;</a><div class="date" title="2011-12-15 09:01"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106887">
<div class="phpcode"><code><span class="html">you can get the list of the possible options for the memcached.ini configuration file here:<br /><a href="https://github.com/php-memcached-dev/php-memcached/blob/master/memcached.ini" rel="nofollow" target="_blank">https://github.com/php-memcached-dev/php-memcached/blob/master/memcached.ini</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=memcached.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcached.configuration.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="memcached.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="memcached.requirements.php" title="Requirements">Requirements</a>
                        </li>
                                                <li class="">
                            <a href="memcached.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="current">
                            <a href="memcached.configuration.php" title="Runtime Configuration">Runtime Configuration</a>
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
