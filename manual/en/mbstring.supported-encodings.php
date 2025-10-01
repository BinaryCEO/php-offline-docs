<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Supported Character Encodings - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mbstring.supported-encodings.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mbstring.supported-encodings.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mbstring.supported-encodings.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.mbstring.php">
 <link rel="prev" href="https://www.php.net/manual/en/mbstring.http.php">
 <link rel="next" href="https://www.php.net/manual/en/mbstring.overload.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mbstring.supported-encodings.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mbstring.supported-encodings.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mbstring.supported-encodings.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mbstring.supported-encodings.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mbstring.supported-encodings.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mbstring.supported-encodings.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mbstring.supported-encodings.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mbstring.supported-encodings.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mbstring.supported-encodings.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mbstring.supported-encodings.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mbstring.supported-encodings.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Supported Character Encodings" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Supported Character Encodings - Manual" />
<meta name="twitter:description" content="Supported Character Encodings" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Supported Character Encodings - Manual" />
<meta itemprop="description" content="Supported Character Encodings" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Supported Character Encodings" />

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
        <a href="mbstring.overload.php">
          Function Overloading Feature &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mbstring.http.php">
          &laquo; HTTP Input and Output        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.mbstring.php'>Multibyte String</a></li>      </ul>
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
            <option value='en/mbstring.supported-encodings.php' selected="selected">English</option>
            <option value='de/mbstring.supported-encodings.php'>German</option>
            <option value='es/mbstring.supported-encodings.php'>Spanish</option>
            <option value='fr/mbstring.supported-encodings.php'>French</option>
            <option value='it/mbstring.supported-encodings.php'>Italian</option>
            <option value='ja/mbstring.supported-encodings.php'>Japanese</option>
            <option value='pt_BR/mbstring.supported-encodings.php'>Brazilian Portuguese</option>
            <option value='ru/mbstring.supported-encodings.php'>Russian</option>
            <option value='tr/mbstring.supported-encodings.php'>Turkish</option>
            <option value='uk/mbstring.supported-encodings.php'>Ukrainian</option>
            <option value='zh/mbstring.supported-encodings.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mbstring.supported-encodings" class="chapter">
 <h1 class="title">Supported Character Encodings</h1>

 <p class="simpara">
  Currently the following character encodings are supported by the
  <code class="literal">mbstring</code> module. Any of those Character encodings
  can be specified in the <code class="literal">encoding</code> parameter of
  <code class="literal">mbstring</code> functions.
 </p>
 <p class="para">
  The following character encodings are supported in this PHP
  extension: 
 </p>
 <ul class="itemizedlist">
  <li class="listitem"><span class="simpara">UCS-4*</span></li>
  <li class="listitem"><span class="simpara">UCS-4BE</span></li>
  <li class="listitem"><span class="simpara">UCS-4LE*</span></li>
  <li class="listitem"><span class="simpara">UCS-2</span></li>
  <li class="listitem"><span class="simpara">UCS-2BE</span></li>
  <li class="listitem"><span class="simpara">UCS-2LE</span></li>
  <li class="listitem"><span class="simpara">UTF-32*</span></li>
  <li class="listitem"><span class="simpara">UTF-32BE*</span></li>
  <li class="listitem"><span class="simpara">UTF-32LE*</span></li>
  <li class="listitem"><span class="simpara">UTF-16*</span></li>
  <li class="listitem"><span class="simpara">UTF-16BE*</span></li>
  <li class="listitem"><span class="simpara">UTF-16LE*</span></li>
  <li class="listitem"><span class="simpara">UTF-7</span></li>
  <li class="listitem"><span class="simpara">UTF7-IMAP</span></li>
  <li class="listitem"><span class="simpara">UTF-8*</span></li>
  <li class="listitem"><span class="simpara">ASCII*</span></li>
  <li class="listitem"><span class="simpara">EUC-JP*</span></li>
  <li class="listitem"><span class="simpara">SJIS*</span></li>
  <li class="listitem"><span class="simpara">eucJP-win*</span></li>
  <li class="listitem"><span class="simpara">SJIS-win*</span></li>
  <li class="listitem"><span class="simpara">ISO-2022-JP</span></li>
  <li class="listitem"><span class="simpara">ISO-2022-JP-MS</span></li>
  <li class="listitem"><span class="simpara">CP932</span></li>
  <li class="listitem"><span class="simpara">CP51932</span></li>
  <li class="listitem"><span class="simpara">SJIS-mac (alias: MacJapanese)</span></li>
  <li class="listitem"><span class="simpara">SJIS-Mobile#DOCOMO (alias: SJIS-DOCOMO)</span></li>
  <li class="listitem"><span class="simpara">SJIS-Mobile#KDDI (alias: SJIS-KDDI)</span></li>
  <li class="listitem"><span class="simpara">SJIS-Mobile#SOFTBANK (alias: SJIS-SOFTBANK)</span></li>
  <li class="listitem"><span class="simpara">UTF-8-Mobile#DOCOMO (alias: UTF-8-DOCOMO)</span></li>
  <li class="listitem"><span class="simpara">UTF-8-Mobile#KDDI-A</span></li>
  <li class="listitem"><span class="simpara">UTF-8-Mobile#KDDI-B (alias: UTF-8-KDDI)</span></li>
  <li class="listitem"><span class="simpara">UTF-8-Mobile#SOFTBANK (alias: UTF-8-SOFTBANK)</span></li>
  <li class="listitem"><span class="simpara">ISO-2022-JP-MOBILE#KDDI (alias: ISO-2022-JP-KDDI)</span></li>
  <li class="listitem"><span class="simpara">JIS</span></li>
  <li class="listitem"><span class="simpara">JIS-ms</span></li>
  <li class="listitem"><span class="simpara">CP50220</span></li>
  <li class="listitem"><span class="simpara">CP50220raw</span></li>
  <li class="listitem"><span class="simpara">CP50221</span></li>
  <li class="listitem"><span class="simpara">CP50222</span></li>
  <li class="listitem"><span class="simpara">ISO-8859-1*</span></li>
  <li class="listitem"><span class="simpara">ISO-8859-2*</span></li>
  <li class="listitem"><span class="simpara">ISO-8859-3*</span></li>
  <li class="listitem"><span class="simpara">ISO-8859-4*</span></li>
  <li class="listitem"><span class="simpara">ISO-8859-5*</span></li>
  <li class="listitem"><span class="simpara">ISO-8859-6*</span></li>
  <li class="listitem"><span class="simpara">ISO-8859-7*</span></li>
  <li class="listitem"><span class="simpara">ISO-8859-8*</span></li>
  <li class="listitem"><span class="simpara">ISO-8859-9*</span></li>
  <li class="listitem"><span class="simpara">ISO-8859-10*</span></li>
  <li class="listitem"><span class="simpara">ISO-8859-13*</span></li>
  <li class="listitem"><span class="simpara">ISO-8859-14*</span></li>
  <li class="listitem"><span class="simpara">ISO-8859-15*</span></li>
  <li class="listitem"><span class="simpara">ISO-8859-16*</span></li>
  <li class="listitem"><span class="simpara">byte2be</span></li>
  <li class="listitem"><span class="simpara">byte2le</span></li>
  <li class="listitem"><span class="simpara">byte4be</span></li>
  <li class="listitem"><span class="simpara">byte4le</span></li>
  <li class="listitem"><span class="simpara">BASE64</span></li>
  <li class="listitem"><span class="simpara">HTML-ENTITIES (alias: HTML)</span></li>
  <li class="listitem"><span class="simpara">7bit</span></li>
  <li class="listitem"><span class="simpara">8bit</span></li>
  <li class="listitem"><span class="simpara">EUC-CN*</span></li>
  <li class="listitem"><span class="simpara">CP936</span></li>
  <li class="listitem"><span class="simpara">GB18030</span></li>
  <li class="listitem"><span class="simpara">HZ</span></li>
  <li class="listitem"><span class="simpara">EUC-TW*</span></li>
  <li class="listitem"><span class="simpara">CP950</span></li>
  <li class="listitem"><span class="simpara">BIG-5*</span></li>
  <li class="listitem"><span class="simpara">EUC-KR*</span></li>
  <li class="listitem"><span class="simpara">UHC (alias: CP949)</span></li>
  <li class="listitem"><span class="simpara">ISO-2022-KR</span></li>
  <li class="listitem"><span class="simpara">Windows-1251 (alias: CP1251)</span></li>
  <li class="listitem"><span class="simpara">Windows-1252 (alias: CP1252)</span></li>
  <li class="listitem"><span class="simpara">CP866 (alias: IBM866)</span></li>
  <li class="listitem"><span class="simpara">KOI8-R*</span></li>
  <li class="listitem"><span class="simpara">KOI8-U*</span></li>
  <li class="listitem"><span class="simpara">ArmSCII-8 (alias: ArmSCII8)</span></li>  
 </ul>
 <p class="para">
  * denotes encodings usable also in regular expressions.
 </p>
 <p class="para">
  Any <var class="filename">php.ini</var> entry which accepts an encoding name
  can also use the values &quot;<code class="literal">auto</code>&quot; and
  &quot;<code class="literal">pass</code>&quot;.
  <code class="literal">mbstring</code> functions which accept an encoding
  name can also use the value &quot;<code class="literal">auto</code>&quot;.
 </p>
 <p class="para">
  If &quot;<code class="literal">pass</code>&quot; is set, no character
  encoding conversion is performed.
 </p>
 <p class="para">
  If &quot;<code class="literal">auto</code>&quot; is set, it is expanded to
  the list of encodings defined per the <a href="mbstring.configuration.php" class="link">NLS</a>.
  For instance, if the NLS is set to <code class="literal">Japanese</code>,
  the value is assumed to be
  &quot;<code class="literal">ASCII,JIS,UTF-8,EUC-JP,SJIS</code>&quot;.
 </p>
 <p class="para">
  See also <span class="function"><a href="function.mb-detect-order.php" class="function">mb_detect_order()</a></span>
 </p>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mbstring/supported-encodings.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmbstring.supported-encodings%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mbstring.supported-encodings&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mbstring.supported-encodings.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113217">  <div class="votes">
    <div id="Vu113217">
    <a href="/manual/vote-note.php?id=113217&amp;page=mbstring.supported-encodings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113217">
    <a href="/manual/vote-note.php?id=113217&amp;page=mbstring.supported-encodings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113217" title="53% like this...">
    5
    </div>
  </div>
  <a href="#113217" class="name">
  <strong class="user"><em>Tomolimo (olivier dot moron at raynet-it dot com)</em></strong></a><a class="genanchor" href="#113217"> &para;</a><div class="date" title="2013-09-13 02:12"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113217">
<div class="phpcode"><code><span class="html">Apart of this list, GB2312 encoding is also supported.<br />It is Chinese Simplified encoding which is now superseded by GB18030, but GB2312 is not in the list.<br />If you try to us it, the result will allright even if it is not in the list.<br />Regards,<br />Tomolimo</span></code></div>
  </div>
 </div>
  <div class="note" id="110802">  <div class="votes">
    <div id="Vu110802">
    <a href="/manual/vote-note.php?id=110802&amp;page=mbstring.supported-encodings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110802">
    <a href="/manual/vote-note.php?id=110802&amp;page=mbstring.supported-encodings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110802" title="52% like this...">
    4
    </div>
  </div>
  <a href="#110802" class="name">
  <strong class="user"><em>akniep at rayo dot info</em></strong></a><a class="genanchor" href="#110802"> &para;</a><div class="date" title="2012-12-10 03:42"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110802">
<div class="phpcode"><code><span class="html">Use mb_list_encodings() to check if an encoding is supported by mbstring before using its functions for it.</span></code></div>
  </div>
 </div>
  <div class="note" id="115682">  <div class="votes">
    <div id="Vu115682">
    <a href="/manual/vote-note.php?id=115682&amp;page=mbstring.supported-encodings&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115682">
    <a href="/manual/vote-note.php?id=115682&amp;page=mbstring.supported-encodings&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115682" title="50% like this...">
    0
    </div>
  </div>
  <a href="#115682" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#115682"> &para;</a><div class="date" title="2014-09-07 06:32"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115682">
<div class="phpcode"><code><span class="html">CP850 (DOS-Latin-1) is also supported.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mbstring.supported-encodings&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mbstring.supported-encodings.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.mbstring.php">Multibyte String</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.mbstring.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="mbstring.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="mbstring.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="mbstring.encodings.php" title="Summaries of supported encodings">Summaries of supported encodings</a>
                        </li>
                                                <li class="">
                            <a href="mbstring.ja-basic.php" title="Basics of Japanese multi-&#8203;byte encodings">Basics of Japanese multi-&#8203;byte encodings</a>
                        </li>
                                                <li class="">
                            <a href="mbstring.http.php" title="HTTP Input and Output">HTTP Input and Output</a>
                        </li>
                                                <li class="current">
                            <a href="mbstring.supported-encodings.php" title="Supported Character Encodings">Supported Character Encodings</a>
                        </li>
                                                <li class="">
                            <a href="mbstring.overload.php" title="Function Overloading Feature">Function Overloading Feature</a>
                        </li>
                                                <li class="">
                            <a href="mbstring.php4.req.php" title="PHP Character Encoding Requirements">PHP Character Encoding Requirements</a>
                        </li>
                                                <li class="">
                            <a href="ref.mbstring.php" title="Multibyte String Functions">Multibyte String Functions</a>
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
