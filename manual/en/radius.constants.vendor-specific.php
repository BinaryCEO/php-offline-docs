<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: RADIUS Vendor Specific Attribute Types - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/radius.constants.vendor-specific.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/radius.constants.vendor-specific.php">
 <link rel="alternate" href="https://www.php.net/manual/en/radius.constants.vendor-specific.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/radius.constants.php">
 <link rel="prev" href="https://www.php.net/manual/en/radius.constants.attributes.php">
 <link rel="next" href="https://www.php.net/manual/en/radius.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/radius.constants.vendor-specific.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/radius.constants.vendor-specific.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/radius.constants.vendor-specific.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/radius.constants.vendor-specific.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/radius.constants.vendor-specific.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/radius.constants.vendor-specific.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/radius.constants.vendor-specific.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/radius.constants.vendor-specific.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/radius.constants.vendor-specific.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/radius.constants.vendor-specific.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/radius.constants.vendor-specific.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="RADIUS Vendor Specific Attribute Types" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: RADIUS Vendor Specific Attribute Types - Manual" />
<meta name="twitter:description" content="RADIUS Vendor Specific Attribute Types" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: RADIUS Vendor Specific Attribute Types - Manual" />
<meta itemprop="description" content="RADIUS Vendor Specific Attribute Types" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="RADIUS Vendor Specific Attribute Types" />

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
        <a href="radius.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="radius.constants.attributes.php">
          &laquo; RADIUS Attribute Types        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.auth.php'>Authentication Services</a></li>      <li><a href='book.radius.php'>Radius</a></li>      <li><a href='radius.constants.php'>Predefined Constants</a></li>      </ul>
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
            <option value='en/radius.constants.vendor-specific.php' selected="selected">English</option>
            <option value='de/radius.constants.vendor-specific.php'>German</option>
            <option value='es/radius.constants.vendor-specific.php'>Spanish</option>
            <option value='fr/radius.constants.vendor-specific.php'>French</option>
            <option value='it/radius.constants.vendor-specific.php'>Italian</option>
            <option value='ja/radius.constants.vendor-specific.php'>Japanese</option>
            <option value='pt_BR/radius.constants.vendor-specific.php'>Brazilian Portuguese</option>
            <option value='ru/radius.constants.vendor-specific.php'>Russian</option>
            <option value='tr/radius.constants.vendor-specific.php'>Turkish</option>
            <option value='uk/radius.constants.vendor-specific.php'>Ukrainian</option>
            <option value='zh/radius.constants.vendor-specific.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="radius.constants.vendor-specific" class="section">
  <h2 class="title">RADIUS Vendor Specific Attribute Types</h2>

  <p class="para">
   <dl>
    
     <dt id="constant.radius-vendor-microsoft">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-vendor-microsoft">RADIUS_VENDOR_MICROSOFT</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </dt>
     <dd>
      <p class="para">
       Microsoft specific vendor attributes (<a href="https://datatracker.ietf.org/doc/html/rfc2548" class="link external">&raquo;&nbsp;RFC 2548</a>), one of:
        <ul class="simplelist">
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-response">RADIUS_MICROSOFT_MS_CHAP_RESPONSE</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-error">RADIUS_MICROSOFT_MS_CHAP_ERROR</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-pw-1">RADIUS_MICROSOFT_MS_CHAP_PW_1</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-pw-2">RADIUS_MICROSOFT_MS_CHAP_PW_2</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-lm-enc-pw">RADIUS_MICROSOFT_MS_CHAP_LM_ENC_PW</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-nt-enc-pw">RADIUS_MICROSOFT_MS_CHAP_NT_ENC_PW</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-mppe-encryption-policy">RADIUS_MICROSOFT_MS_MPPE_ENCRYPTION_POLICY</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-mppe-encryption-types">RADIUS_MICROSOFT_MS_MPPE_ENCRYPTION_TYPES</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-ras-vendor">RADIUS_MICROSOFT_MS_RAS_VENDOR</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-domain">RADIUS_MICROSOFT_MS_CHAP_DOMAIN</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-challenge">RADIUS_MICROSOFT_MS_CHAP_CHALLENGE</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-mppe-keys">RADIUS_MICROSOFT_MS_CHAP_MPPE_KEYS</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-bap-usage">RADIUS_MICROSOFT_MS_BAP_USAGE</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-link-utilization-threshold">RADIUS_MICROSOFT_MS_LINK_UTILIZATION_THRESHOLD</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-link-drop-time-limit">RADIUS_MICROSOFT_MS_LINK_DROP_TIME_LIMIT</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-mppe-send-key">RADIUS_MICROSOFT_MS_MPPE_SEND_KEY</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-mppe-recv-key">RADIUS_MICROSOFT_MS_MPPE_RECV_KEY</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-ras-version">RADIUS_MICROSOFT_MS_RAS_VERSION</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-old-arap-password">RADIUS_MICROSOFT_MS_OLD_ARAP_PASSWORD</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-new-arap-password">RADIUS_MICROSOFT_MS_NEW_ARAP_PASSWORD</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-arap-password-change-reason">RADIUS_MICROSOFT_MS_ARAP_PASSWORD_CHANGE_REASON</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-filter">RADIUS_MICROSOFT_MS_FILTER</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-acct-auth-type">RADIUS_MICROSOFT_MS_ACCT_AUTH_TYPE</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-acct-eap-type">RADIUS_MICROSOFT_MS_ACCT_EAP_TYPE</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap2-response">RADIUS_MICROSOFT_MS_CHAP2_RESPONSE</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap2-success">RADIUS_MICROSOFT_MS_CHAP2_SUCCESS</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap2-pw">RADIUS_MICROSOFT_MS_CHAP2_PW</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-primary-dns-server">RADIUS_MICROSOFT_MS_PRIMARY_DNS_SERVER</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-secondary-dns-server">RADIUS_MICROSOFT_MS_SECONDARY_DNS_SERVER</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-primary-nbns-server">RADIUS_MICROSOFT_MS_PRIMARY_NBNS_SERVER</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-secondary-nbns-server">RADIUS_MICROSOFT_MS_SECONDARY_NBNS_SERVER</a></code></strong></li>
        <li><strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-arap-challenge">RADIUS_MICROSOFT_MS_ARAP_CHALLENGE</a></code></strong></li>
       </ul>
      </p>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-chap-response">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-response">RADIUS_MICROSOFT_MS_CHAP_RESPONSE</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-chap-error">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-error">RADIUS_MICROSOFT_MS_CHAP_ERROR</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-chap-pw-1">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-pw-1">RADIUS_MICROSOFT_MS_CHAP_PW_1</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-chap-pw-2">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-pw-2">RADIUS_MICROSOFT_MS_CHAP_PW_2</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-chap-lm-enc-pw">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-lm-enc-pw">RADIUS_MICROSOFT_MS_CHAP_LM_ENC_PW</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-chap-nt-enc-pw">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-nt-enc-pw">RADIUS_MICROSOFT_MS_CHAP_NT_ENC_PW</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-mppe-encryption-policy">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-mppe-encryption-policy">RADIUS_MICROSOFT_MS_MPPE_ENCRYPTION_POLICY</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-mppe-encryption-types">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-mppe-encryption-types">RADIUS_MICROSOFT_MS_MPPE_ENCRYPTION_TYPES</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-ras-vendor">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-ras-vendor">RADIUS_MICROSOFT_MS_RAS_VENDOR</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-chap-domain">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-domain">RADIUS_MICROSOFT_MS_CHAP_DOMAIN</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-chap-challenge">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-challenge">RADIUS_MICROSOFT_MS_CHAP_CHALLENGE</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-chap-mppe-keys">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap-mppe-keys">RADIUS_MICROSOFT_MS_CHAP_MPPE_KEYS</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-bap-usage">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-bap-usage">RADIUS_MICROSOFT_MS_BAP_USAGE</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-link-utilization-threshold">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-link-utilization-threshold">RADIUS_MICROSOFT_MS_LINK_UTILIZATION_THRESHOLD</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-link-drop-time-limit">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-link-drop-time-limit">RADIUS_MICROSOFT_MS_LINK_DROP_TIME_LIMIT</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-mppe-send-key">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-mppe-send-key">RADIUS_MICROSOFT_MS_MPPE_SEND_KEY</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-mppe-recv-key">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-mppe-recv-key">RADIUS_MICROSOFT_MS_MPPE_RECV_KEY</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-ras-version">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-ras-version">RADIUS_MICROSOFT_MS_RAS_VERSION</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-old-arap-password">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-old-arap-password">RADIUS_MICROSOFT_MS_OLD_ARAP_PASSWORD</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-new-arap-password">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-new-arap-password">RADIUS_MICROSOFT_MS_NEW_ARAP_PASSWORD</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-arap-password-change-reason">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-arap-password-change-reason">RADIUS_MICROSOFT_MS_ARAP_PASSWORD_CHANGE_REASON</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-filter">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-filter">RADIUS_MICROSOFT_MS_FILTER</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-acct-auth-type">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-acct-auth-type">RADIUS_MICROSOFT_MS_ACCT_AUTH_TYPE</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-acct-eap-type">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-acct-eap-type">RADIUS_MICROSOFT_MS_ACCT_EAP_TYPE</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-chap2-response">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap2-response">RADIUS_MICROSOFT_MS_CHAP2_RESPONSE</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-chap2-success">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap2-success">RADIUS_MICROSOFT_MS_CHAP2_SUCCESS</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-chap2-pw">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-chap2-pw">RADIUS_MICROSOFT_MS_CHAP2_PW</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-primary-dns-server">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-primary-dns-server">RADIUS_MICROSOFT_MS_PRIMARY_DNS_SERVER</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-secondary-dns-server">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-secondary-dns-server">RADIUS_MICROSOFT_MS_SECONDARY_DNS_SERVER</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-primary-nbns-server">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-primary-nbns-server">RADIUS_MICROSOFT_MS_PRIMARY_NBNS_SERVER</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-secondary-nbns-server">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-secondary-nbns-server">RADIUS_MICROSOFT_MS_SECONDARY_NBNS_SERVER</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
     </dd>
    
    
     <dt id="constant.radius-microsoft-ms-arap-challenge">
      <strong><code><a href="radius.constants.vendor-specific.php#constant.radius-microsoft-ms-arap-challenge">RADIUS_MICROSOFT_MS_ARAP_CHALLENGE</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
      </span>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/radius/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fradius.constants.vendor-specific%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=radius.constants.vendor-specific&amp;repo=en&amp;redirect=https://www.php.net/manual/en/radius.constants.vendor-specific.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="radius.constants.php">Predefined Constants</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="radius.constants.options.php" title="RADIUS Options">RADIUS Options</a>
                        </li>
                                                <li class="">
                            <a href="radius.constants.packets.php" title="RADIUS Packet Types">RADIUS Packet Types</a>
                        </li>
                                                <li class="">
                            <a href="radius.constants.attributes.php" title="RADIUS Attribute Types">RADIUS Attribute Types</a>
                        </li>
                                                <li class="current">
                            <a href="radius.constants.vendor-specific.php" title="RADIUS Vendor Specific Attribute Types">RADIUS Vendor Specific Attribute Types</a>
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
