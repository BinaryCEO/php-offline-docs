<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Predefined Constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/soap.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/soap.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/soap.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.soap.php">
 <link rel="prev" href="https://www.php.net/manual/en/soap.configuration.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.soap.php">

 <link rel="alternate" href="https://www.php.net/manual/en/soap.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/soap.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/soap.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/soap.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/soap.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/soap.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/soap.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/soap.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/soap.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/soap.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/soap.constants.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Predefined Constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Predefined Constants - Manual" />
<meta name="twitter:description" content="Predefined Constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Predefined Constants - Manual" />
<meta itemprop="description" content="Predefined Constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Predefined Constants" />

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
        <a href="ref.soap.php">
          SOAP Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="soap.configuration.php">
          &laquo; Runtime Configuration        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.webservice.php'>Web Services</a></li>      <li><a href='book.soap.php'>SOAP</a></li>      </ul>
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
            <option value='en/soap.constants.php' selected="selected">English</option>
            <option value='de/soap.constants.php'>German</option>
            <option value='es/soap.constants.php'>Spanish</option>
            <option value='fr/soap.constants.php'>French</option>
            <option value='it/soap.constants.php'>Italian</option>
            <option value='ja/soap.constants.php'>Japanese</option>
            <option value='pt_BR/soap.constants.php'>Brazilian Portuguese</option>
            <option value='ru/soap.constants.php'>Russian</option>
            <option value='tr/soap.constants.php'>Turkish</option>
            <option value='uk/soap.constants.php'>Ukrainian</option>
            <option value='zh/soap.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="soap.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <table class="doctable table">
  <caption><strong>SOAP constants</strong></caption>
  
   <thead>
    <tr>
     <th>Constant</th>
     <th>Value</th>
     <th>Description</th>
    </tr>

   </thead>

   <tbody class="tbody">
    <tr id="constant.soap-1-1">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-1-1">SOAP_1_1</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>1</td>
     <td>
      Specifies use of SOAP 1.1 when passed as <code class="literal">soap_version</code>
      option to <span class="methodname"><a href="soapserver.construct.php" class="methodname">SoapServer::__construct()</a></span> or
      <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.soap-1-2">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-1-2">SOAP_1_2</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>2</td>
     <td>
      Specifies use of SOAP 1.2 when passed as <code class="literal">soap_version</code>
      option to <span class="methodname"><a href="soapserver.construct.php" class="methodname">SoapServer::__construct()</a></span> or
      <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.soap-persistence-session">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-persistence-session">SOAP_PERSISTENCE_SESSION</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>1</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.soap-persistence-request">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-persistence-request">SOAP_PERSISTENCE_REQUEST</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>2</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.soap-functions-all">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-functions-all">SOAP_FUNCTIONS_ALL</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>999</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.soap-encoded">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-encoded">SOAP_ENCODED</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>1</td>
     <td>
      Specifies use of SOAP Encoding when passed as <code class="literal">use</code>
      option to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.soap-literal">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-literal">SOAP_LITERAL</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>2</td>
     <td>
      Specifies use of service-specific encoding when passed as <code class="literal">use</code>
      option to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.soap-rpc">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-rpc">SOAP_RPC</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>1</td>
     <td>
      Specifies use of RPC-style binding when passed as <code class="literal">style</code>
      option to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.soap-document">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-document">SOAP_DOCUMENT</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>2</td>
     <td>
      Specifies use of document binding when passed as <code class="literal">style</code>
      option to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.soap-actor-next">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-actor-next">SOAP_ACTOR_NEXT</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>1</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.soap-actor-none">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-actor-none">SOAP_ACTOR_NONE</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>2</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.soap-actor-unlimatereceiver">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-actor-unlimatereceiver">SOAP_ACTOR_UNLIMATERECEIVER</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>3</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.soap-compression-accept">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-compression-accept">SOAP_COMPRESSION_ACCEPT</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>32</td>
     <td>
      Specifies use of an &quot;Accept-Encoding&quot; header
      when passed as part of
      <a href="soapclient.construct.php#soapclient.construct.options.compression" class="link">
      the <code class="parameter">compression</code> option</a>
      to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.soap-compression-gzip">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-compression-gzip">SOAP_COMPRESSION_GZIP</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>0</td>
     <td>
      Specifies use of gzip compression
      when passed as part of
      <a href="soapclient.construct.php#soapclient.construct.options.compression" class="link">
       the <code class="parameter">compression</code> option</a>
      to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.soap-compression-deflate">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-compression-deflate">SOAP_COMPRESSION_DEFLATE</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>16</td>
     <td>
      Specifies use of deflate compression
      when passed as part of
      <a href="soapclient.construct.php#soapclient.construct.options.compression" class="link">
       the <code class="parameter">compression</code> option</a>
      to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.soap-authentication-basic">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-authentication-basic">SOAP_AUTHENTICATION_BASIC</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>0</td>
     <td>
      Specifies use of HTTP Basic Authentication when passed as
      <code class="literal">authentication</code> option to
      <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.soap-authentication-digest">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-authentication-digest">SOAP_AUTHENTICATION_DIGEST</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>1</td>
     <td>
      Specifies use of HTTP Digest Authentication when passed as
      <code class="literal">authentication</code> option to
      <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.soap-ssl-method-tls">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-ssl-method-tls">SOAP_SSL_METHOD_TLS</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>0</td>
     <td>
      Used with the deprecated
      <a href="soapclient.construct.php#soapclient.construct.options.ssl-method" class="link">
      <code class="parameter">ssl_method</code> option</a>
      to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.soap-ssl-method-sslv2">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-ssl-method-sslv2">SOAP_SSL_METHOD_SSLv2</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>1</td>
     <td>
      Used with the deprecated
      <a href="soapclient.construct.php#soapclient.construct.options.ssl-method" class="link">
       <code class="parameter">ssl_method</code> option</a>
      to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.soap-ssl-method-sslv3">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-ssl-method-sslv3">SOAP_SSL_METHOD_SSLv3</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>2</td>
     <td>
      Used with the deprecated
      <a href="soapclient.construct.php#soapclient.construct.options.ssl-method" class="link">
       <code class="parameter">ssl_method</code> option</a>
      to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.soap-ssl-method-sslv23">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-ssl-method-sslv23">SOAP_SSL_METHOD_SSLv23</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>3</td>
     <td>
      Used with the deprecated
      <a href="soapclient.construct.php#soapclient.construct.options.ssl-method" class="link">
       <code class="parameter">ssl_method</code> option</a>
      to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.unknown-type">
     <td>
      <strong><code><a href="soap.constants.php#constant.unknown-type">UNKNOWN_TYPE</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>999998</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-string">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-string">XSD_STRING</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>101</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-boolean">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-boolean">XSD_BOOLEAN</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>102</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-decimal">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-decimal">XSD_DECIMAL</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>103</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-float">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-float">XSD_FLOAT</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>104</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-double">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-double">XSD_DOUBLE</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>105</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-duration">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-duration">XSD_DURATION</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>106</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-datetime">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-datetime">XSD_DATETIME</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>107</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-time">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-time">XSD_TIME</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>108</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-date">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-date">XSD_DATE</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>109</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-gyearmonth">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-gyearmonth">XSD_GYEARMONTH</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>110</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-gyear">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-gyear">XSD_GYEAR</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>111</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-gmonthday">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-gmonthday">XSD_GMONTHDAY</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>112</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-gday">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-gday">XSD_GDAY</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>113</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-gmonth">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-gmonth">XSD_GMONTH</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>114</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-hexbinary">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-hexbinary">XSD_HEXBINARY</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>115</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-base64binary">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-base64binary">XSD_BASE64BINARY</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>116</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-anyuri">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-anyuri">XSD_ANYURI</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>117</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-qname">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-qname">XSD_QNAME</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>118</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-notation">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-notation">XSD_NOTATION</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>119</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-normalizedstring">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-normalizedstring">XSD_NORMALIZEDSTRING</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>120</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-token">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-token">XSD_TOKEN</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>121</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-language">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-language">XSD_LANGUAGE</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>122</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-nmtoken">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-nmtoken">XSD_NMTOKEN</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>123</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-name">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-name">XSD_NAME</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>124</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-ncname">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-ncname">XSD_NCNAME</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>125</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-id">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-id">XSD_ID</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>126</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-idref">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-idref">XSD_IDREF</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>127</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-idrefs">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-idrefs">XSD_IDREFS</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>128</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-entity">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-entity">XSD_ENTITY</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>129</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-entities">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-entities">XSD_ENTITIES</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>130</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-integer">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-integer">XSD_INTEGER</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>131</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-nonpositiveinteger">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-nonpositiveinteger">XSD_NONPOSITIVEINTEGER</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>132</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-negativeinteger">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-negativeinteger">XSD_NEGATIVEINTEGER</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>133</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-long">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-long">XSD_LONG</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>134</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-int">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-int">XSD_INT</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>135</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-short">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-short">XSD_SHORT</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>136</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-byte">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-byte">XSD_BYTE</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>137</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-nonnegativeinteger">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-nonnegativeinteger">XSD_NONNEGATIVEINTEGER</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>138</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-unsignedlong">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-unsignedlong">XSD_UNSIGNEDLONG</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>139</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-unsignedint">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-unsignedint">XSD_UNSIGNEDINT</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>140</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-unsignedshort">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-unsignedshort">XSD_UNSIGNEDSHORT</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>141</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-unsignedbyte">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-unsignedbyte">XSD_UNSIGNEDBYTE</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>142</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-positiveinteger">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-positiveinteger">XSD_POSITIVEINTEGER</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>143</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-nmtokens">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-nmtokens">XSD_NMTOKENS</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>144</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-anytype">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-anytype">XSD_ANYTYPE</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>145</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-anyxml">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-anyxml">XSD_ANYXML</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>147</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.apache-map">
     <td>
      <strong><code><a href="soap.constants.php#constant.apache-map">APACHE_MAP</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>200</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.soap-enc-object">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-enc-object">SOAP_ENC_OBJECT</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>301</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.soap-enc-array">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-enc-array">SOAP_ENC_ARRAY</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>300</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-1999-timeinstant">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-1999-timeinstant">XSD_1999_TIMEINSTANT</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>401</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-namespace">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-namespace">XSD_NAMESPACE</a></code></strong>
      (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
     </td>
     <td>http://www.w3.org/2001/XMLSchema</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.xsd-1999-namespace">
     <td>
      <strong><code><a href="soap.constants.php#constant.xsd-1999-namespace">XSD_1999_NAMESPACE</a></code></strong>
      (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
     </td>
     <td>http://www.w3.org/1999/XMLSchema</td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr id="constant.soap-single-element-arrays">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-single-element-arrays">SOAP_SINGLE_ELEMENT_ARRAYS</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>1</td>
     <td>
      Used with the
      <a href="soapclient.construct.php#soapclient.construct.options.features" class="link">
       <code class="parameter">features</code> option</a>
      to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.soap-wait-one-way-calls">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-wait-one-way-calls">SOAP_WAIT_ONE_WAY_CALLS</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>2</td>
     <td>
      Used with the
      <a href="soapclient.construct.php#soapclient.construct.options.features" class="link">
       <code class="parameter">features</code> option</a>
      to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.soap-use-xsi-array-type">
     <td>
      <strong><code><a href="soap.constants.php#constant.soap-use-xsi-array-type">SOAP_USE_XSI_ARRAY_TYPE</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>4</td>
     <td>
      Used with the
      <a href="soapclient.construct.php#soapclient.construct.options.features" class="link">
       <code class="parameter">features</code> option</a>
      to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.wsdl-cache-none">
     <td>
      <strong><code><a href="soap.constants.php#constant.wsdl-cache-none">WSDL_CACHE_NONE</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>0</td>
     <td>
      Disables the WSDL cache when used in the
      <a href="soap.configuration.php#ini.soap.wsdl-cache" class="link">soap.wsdl_cache</a>
      configuration option or the
      <code class="literal">wsdl_cache</code> option
      to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>
      and <span class="methodname"><a href="soapserver.construct.php" class="methodname">SoapServer::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.wsdl-cache-disk">
     <td>
      <strong><code><a href="soap.constants.php#constant.wsdl-cache-disk">WSDL_CACHE_DISK</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>1</td>
     <td>
      Specifies use of the on-disk WSDL cache only when used in the
      <a href="soap.configuration.php#ini.soap.wsdl-cache" class="link">soap.wsdl_cache</a>
      configuration option or the
      <code class="literal">wsdl_cache</code> option
      to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>
      and <span class="methodname"><a href="soapserver.construct.php" class="methodname">SoapServer::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.wsdl-cache-memory">
     <td>
      <strong><code><a href="soap.constants.php#constant.wsdl-cache-memory">WSDL_CACHE_MEMORY</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>2</td>
     <td>
      Specifies use of the in-memory WSDL cache only when used in the
      <a href="soap.configuration.php#ini.soap.wsdl-cache" class="link">soap.wsdl_cache</a>
      configuration option or the
      <code class="literal">wsdl_cache</code> option
      to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>
      and <span class="methodname"><a href="soapserver.construct.php" class="methodname">SoapServer::__construct()</a></span>.
     </td>
    </tr>

    <tr id="constant.wsdl-cache-both">
     <td>
      <strong><code><a href="soap.constants.php#constant.wsdl-cache-both">WSDL_CACHE_BOTH</a></code></strong>
      (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
     </td>
     <td>3</td>
     <td>
      Specifies use of both on-disk and in-memory WSDL caches when used in the
      <a href="soap.configuration.php#ini.soap.wsdl-cache" class="link">soap.wsdl_cache</a>
      configuration option or the
      <code class="literal">wsdl_cache</code> option
      to <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span>
      and <span class="methodname"><a href="soapserver.construct.php" class="methodname">SoapServer::__construct()</a></span>.
     </td>
    </tr>

   </tbody>
  
 </table>

</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/soap/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsoap.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=soap.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/soap.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.soap.php">SOAP</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.soap.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="soap.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="soap.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ref.soap.php" title="SOAP Functions">SOAP Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.soapclient.php" title="SoapClient">SoapClient</a>
                        </li>
                                                <li class="">
                            <a href="class.soapserver.php" title="SoapServer">SoapServer</a>
                        </li>
                                                <li class="">
                            <a href="class.soapfault.php" title="SoapFault">SoapFault</a>
                        </li>
                                                <li class="">
                            <a href="class.soapheader.php" title="SoapHeader">SoapHeader</a>
                        </li>
                                                <li class="">
                            <a href="class.soapparam.php" title="SoapParam">SoapParam</a>
                        </li>
                                                <li class="">
                            <a href="class.soapvar.php" title="SoapVar">SoapVar</a>
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
