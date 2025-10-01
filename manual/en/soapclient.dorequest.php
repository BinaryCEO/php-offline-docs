<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SoapClient::__doRequest - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/soapclient.dorequest.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/soapclient.dorequest.php">
 <link rel="alternate" href="https://www.php.net/manual/en/soapclient.dorequest.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.soapclient.php">
 <link rel="prev" href="https://www.php.net/manual/en/soapclient.construct.php">
 <link rel="next" href="https://www.php.net/manual/en/soapclient.getcookies.php">

 <link rel="alternate" href="https://www.php.net/manual/en/soapclient.dorequest.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/soapclient.dorequest.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/soapclient.dorequest.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/soapclient.dorequest.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/soapclient.dorequest.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/soapclient.dorequest.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/soapclient.dorequest.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/soapclient.dorequest.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/soapclient.dorequest.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/soapclient.dorequest.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/soapclient.dorequest.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Performs a SOAP request" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SoapClient::__doRequest - Manual" />
<meta name="twitter:description" content="Performs a SOAP request" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SoapClient::__doRequest - Manual" />
<meta itemprop="description" content="Performs a SOAP request" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Performs a SOAP request" />

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
        <a href="soapclient.getcookies.php">
          SoapClient::__getCookies &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="soapclient.construct.php">
          &laquo; SoapClient::__construct        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.webservice.php'>Web Services</a></li>      <li><a href='book.soap.php'>SOAP</a></li>      <li><a href='class.soapclient.php'>SoapClient</a></li>      </ul>
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
            <option value='en/soapclient.dorequest.php' selected="selected">English</option>
            <option value='de/soapclient.dorequest.php'>German</option>
            <option value='es/soapclient.dorequest.php'>Spanish</option>
            <option value='fr/soapclient.dorequest.php'>French</option>
            <option value='it/soapclient.dorequest.php'>Italian</option>
            <option value='ja/soapclient.dorequest.php'>Japanese</option>
            <option value='pt_BR/soapclient.dorequest.php'>Brazilian Portuguese</option>
            <option value='ru/soapclient.dorequest.php'>Russian</option>
            <option value='tr/soapclient.dorequest.php'>Turkish</option>
            <option value='uk/soapclient.dorequest.php'>Ukrainian</option>
            <option value='zh/soapclient.dorequest.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="soapclient.dorequest" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SoapClient::__doRequest</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SoapClient::__doRequest</span> &mdash; <span class="dc-title">Performs a SOAP request</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-soapclient.dorequest-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SoapClient::__doRequest</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$request</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$location</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$action</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$version</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$oneWay</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>

  <p class="para rdfs-comment">
   Performs SOAP request over HTTP.
  </p>
  <p class="para">
   This method can be overridden in subclasses to implement different transport
   layers, perform additional XML processing or other purpose.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-soapclient.dorequest-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">request</code></dt>
     <dd>
      <p class="para">
       The XML SOAP request.
      </p>
     </dd>
    
    
     <dt><code class="parameter">location</code></dt>
     <dd>
      <p class="para">
       The URL to request.
      </p>
     </dd>
    
    
     <dt><code class="parameter">action</code></dt>
     <dd>
      <p class="para">
       The SOAP action.
      </p>
     </dd>
    
    
     <dt><code class="parameter">version</code></dt>
     <dd>
      <p class="para">
       The SOAP version.
      </p>
     </dd>
    
    
     <dt><code class="parameter">oneWay</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">oneWay</code> is set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, this method returns nothing.
       Use this where a response is not expected.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-soapclient.dorequest-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The XML SOAP response.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-soapclient.dorequest-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.0.0</td>
      <td>
       The type of <code class="parameter">oneWay</code> is <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> now; formerly it was <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-soapclient.dorequest-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5700">
    <p><strong>Example #1 <span class="function"><strong>SoapClient::__doRequest()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">Add</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">, </span><span style="color: #0000BB">$y</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #0000BB">$x </span><span style="color: #007700">+ </span><span style="color: #0000BB">$y</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">LocalSoapClient </span><span style="color: #007700">extends </span><span style="color: #0000BB">SoapClient<br /></span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$server</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$wsdl</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$wsdl</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">server </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapServer</span><span style="color: #007700">(</span><span style="color: #0000BB">$wsdl</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFunction</span><span style="color: #007700">(</span><span style="color: #DD0000">'Add'</span><span style="color: #007700">);<br />    }<br /><br />    public function </span><span style="color: #0000BB">__doRequest</span><span style="color: #007700">(<br />        </span><span style="color: #0000BB">$request</span><span style="color: #007700">,<br />        </span><span style="color: #0000BB">$location</span><span style="color: #007700">,<br />        </span><span style="color: #0000BB">$action</span><span style="color: #007700">,<br />        </span><span style="color: #0000BB">$version</span><span style="color: #007700">,<br />        </span><span style="color: #0000BB">$one_way </span><span style="color: #007700">= </span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />    ): ?</span><span style="color: #0000BB">string </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handle</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$response </span><span style="color: #007700">= </span><span style="color: #0000BB">ob_get_contents</span><span style="color: #007700">();<br />        </span><span style="color: #0000BB">ob_end_clean</span><span style="color: #007700">();<br /><br />        return </span><span style="color: #0000BB">$response</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$x </span><span style="color: #007700">= new </span><span style="color: #0000BB">LocalSoapClient</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">null</span><span style="color: #007700">,<br />    [<br />        </span><span style="color: #DD0000">'location' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'test://'</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'uri' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'http://testuri.org'</span><span style="color: #007700">,<br />    ]<br />);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Add</span><span style="color: #007700">(</span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/soap/soapclient/dorequest.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsoapclient.dorequest%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=soapclient.dorequest&amp;repo=en&amp;redirect=https://www.php.net/manual/en/soapclient.dorequest.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111664">  <div class="votes">
    <div id="Vu111664">
    <a href="/manual/vote-note.php?id=111664&amp;page=soapclient.dorequest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111664">
    <a href="/manual/vote-note.php?id=111664&amp;page=soapclient.dorequest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111664" title="77% like this...">
    33
    </div>
  </div>
  <a href="#111664" class="name">
  <strong class="user"><em>darren dot yee at emc dot com</em></strong></a><a class="genanchor" href="#111664"> &para;</a><div class="date" title="2013-03-13 10:45"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111664">
<div class="phpcode"><code><span class="html">Note when extending __doRequest, calling __getLastRequest will probably report incorrect information unless you make sure to update the internal __last_request variable. Save yourself some headaches.<br /><br />function __doRequest($request, $location, $action, $version) {<br />      $request = preg_replace('/abc/', 'def', $request);<br />      $ret = parent::__doRequest($request, $location, $action, $version);<br />      $this-&gt;__last_request = $request;<br />      return $ret;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="119041">  <div class="votes">
    <div id="Vu119041">
    <a href="/manual/vote-note.php?id=119041&amp;page=soapclient.dorequest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119041">
    <a href="/manual/vote-note.php?id=119041&amp;page=soapclient.dorequest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119041" title="90% like this...">
    18
    </div>
  </div>
  <a href="#119041" class="name">
  <strong class="user"><em>tschallacka</em></strong></a><a class="genanchor" href="#119041"> &para;</a><div class="date" title="2016-03-22 02:01"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119041">
<div class="phpcode"><code><span class="html">I just wanted to note in plain english how to build up this request, because I made some assumptions by just misterpreting the parameters.<br /><br />This is for future reference(for myself) and others that might end up a bit mistified by just not understanding the finesses of soap and are trying to learn.<br /><br />    $this-&gt;__doRequest(string $request , string $location , string $action , int $version [, int $one_way = 0 ] );<br /><br />$request = The XML Soap enveloppe<br />$location = The url to the WSDL file. No matter that you defined this before when setting up the object, you need to reuse it here.<br />$action = the soap action to be performed. This is defined in the wsdl file and can be in the form of a single form or an url. it's just a parameter and might not be an actual valid url<br />$version = SOAP_1_1 =  content headers (Content-Type: text/xml; charset=utf-8␍)<br />                  SOAP_1_2 = content headers (Content-Type: application/soap+xml; charset=utf-8; action="somesoapaction defined in $action")<br /><br />If you send a SOAP_1_2 request to a SOAP_1_1 server you might get a reply in the following form <br /><br />    HTTP/1.1 415 Cannot process the message because the content type 'application/soap+xml; charset=utf-8; action="somesoapaction defined in $action"' was not the expected type 'text/xml; charset=utf-8'.<br /><br />You need to switch down to SOAP_1_1 in that case to get the proper formatting the server can understand</span></code></div>
  </div>
 </div>
  <div class="note" id="105380">  <div class="votes">
    <div id="Vu105380">
    <a href="/manual/vote-note.php?id=105380&amp;page=soapclient.dorequest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105380">
    <a href="/manual/vote-note.php?id=105380&amp;page=soapclient.dorequest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105380" title="78% like this...">
    13
    </div>
  </div>
  <a href="#105380" class="name">
  <strong class="user"><em>bwhitehead at tableausoftware dot no dot com dot spam</em></strong></a><a class="genanchor" href="#105380"> &para;</a><div class="date" title="2011-08-12 02:49"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105380">
<div class="phpcode"><code><span class="html">Note that the SoapClient.__doRequest() method circumvents the throwing of SoapFault exceptions.
<br />
<br />Specifically, if you call the __doRequest() method and it fails, it would normally throw a SoapFault exception.  However, the __doRequest() method doesn't actually throw the exception. Instead, the exception is saved in a class attribute called SoapFault.__soap_fault, and is actually thrown AFTER the __doRequest method completes (but the call stack will show that the exception was created inside the __doRequest method.
<br />
<br />I successfully used the following code to query the locally cached exception object that was not thrown:
<br />
<br /><span class="default">&lt;?php
<br />$exception </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;
<br />try {
<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__doRequest</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">, </span><span class="default">$action</span><span class="keyword">, </span><span class="default">$version</span><span class="keyword">, </span><span class="default">$one_way</span><span class="keyword">);
<br />}
<br />catch (</span><span class="default">SoapFault $sf</span><span class="keyword">) {
<br />    </span><span class="comment">//this code was not reached    
<br />    </span><span class="default">$exception </span><span class="keyword">= </span><span class="default">$sf</span><span class="keyword">;
<br />}
<br />catch (</span><span class="default">Exception $e</span><span class="keyword">) {
<br />    </span><span class="comment">//nor was this code reached either
<br />    </span><span class="default">$exception </span><span class="keyword">= </span><span class="default">$e</span><span class="keyword">;
<br />}
<br />if((isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__soap_fault</span><span class="keyword">)) &amp;&amp; (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__soap_fault </span><span class="keyword">!= </span><span class="default">null</span><span class="keyword">)) {
<br />    </span><span class="comment">//this is where the exception from __doRequest is stored
<br />    </span><span class="default">$exception </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__soap_fault</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="comment">//decide what to do about the exception here
<br />// [enter code here]
<br />//or throw the exception
<br /></span><span class="keyword">if(</span><span class="default">$exception </span><span class="keyword">!= </span><span class="default">null</span><span class="keyword">) {
<br />    throw </span><span class="default">$exception</span><span class="keyword">;
<br />}
<br /></span><span class="comment">//note: you may want to unset the __soap_fault value if you don't want it thrown again up the call stack
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="74123">  <div class="votes">
    <div id="Vu74123">
    <a href="/manual/vote-note.php?id=74123&amp;page=soapclient.dorequest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74123">
    <a href="/manual/vote-note.php?id=74123&amp;page=soapclient.dorequest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74123" title="71% like this...">
    14
    </div>
  </div>
  <a href="#74123" class="name">
  <strong class="user"><em>albert at jool dot nl</em></strong></a><a class="genanchor" href="#74123"> &para;</a><div class="date" title="2007-03-26 06:28"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74123">
<div class="phpcode"><code><span class="html">If you want to communicate with a default configured ASP.NET server with SOAP 1.1 support, override your __doRequest with the following code. Adjust the namespace parameter, and all is good to go.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MSSoapClient </span><span class="keyword">extends </span><span class="default">SoapClient </span><span class="keyword">{<br /><br />    function </span><span class="default">__doRequest</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">, </span><span class="default">$action</span><span class="keyword">, </span><span class="default">$version</span><span class="keyword">) {<br />        </span><span class="default">$namespace </span><span class="keyword">= </span><span class="string">"<a href="http://tempuri.com" rel="nofollow" target="_blank">http://tempuri.com</a>"</span><span class="keyword">;<br /><br />        </span><span class="default">$request </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/&lt;ns1:(\w+)/'</span><span class="keyword">, </span><span class="string">'&lt;$1 xmlns="'</span><span class="keyword">.</span><span class="default">$namespace</span><span class="keyword">.</span><span class="string">'"'</span><span class="keyword">, </span><span class="default">$request</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">$request </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/&lt;ns1:(\w+)/'</span><span class="keyword">, </span><span class="string">'&lt;$1'</span><span class="keyword">, </span><span class="default">$request</span><span class="keyword">);<br />        </span><span class="default">$request </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">'/ns1:'</span><span class="keyword">, </span><span class="string">'xmlns:ns1="'</span><span class="keyword">.</span><span class="default">$namespace</span><span class="keyword">.</span><span class="string">'"'</span><span class="keyword">), array(</span><span class="string">'/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">), </span><span class="default">$request</span><span class="keyword">);<br /><br />        </span><span class="comment">// parent call<br />        </span><span class="keyword">return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__doRequest</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">, </span><span class="default">$action</span><span class="keyword">, </span><span class="default">$version</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">$client </span><span class="keyword">= new </span><span class="default">MSSoapClient</span><span class="keyword">(...);<br /></span><span class="default">?&gt;<br /></span><br />Hope this will save people endless hours of fiddling...</span></code></div>
  </div>
 </div>
  <div class="note" id="71552">  <div class="votes">
    <div id="Vu71552">
    <a href="/manual/vote-note.php?id=71552&amp;page=soapclient.dorequest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71552">
    <a href="/manual/vote-note.php?id=71552&amp;page=soapclient.dorequest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71552" title="78% like this...">
    8
    </div>
  </div>
  <a href="#71552" class="name">
  <strong class="user"><em>jfitz at spacelink dot com</em></strong></a><a class="genanchor" href="#71552"> &para;</a><div class="date" title="2006-12-05 09:56"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71552">
<div class="phpcode"><code><span class="html">Note that __getLastRequest() data are buffered _before_ the call to __doRequest().  Thus any modifications you make to the XML while in __doRequest() will not be visible in the output of __getLastRequest().   This is so in at least v5.2.0</span></code></div>
  </div>
 </div>
  <div class="note" id="94700">  <div class="votes">
    <div id="Vu94700">
    <a href="/manual/vote-note.php?id=94700&amp;page=soapclient.dorequest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94700">
    <a href="/manual/vote-note.php?id=94700&amp;page=soapclient.dorequest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94700" title="71% like this...">
    3
    </div>
  </div>
  <a href="#94700" class="name">
  <strong class="user"><em>lepidosteus</em></strong></a><a class="genanchor" href="#94700"> &para;</a><div class="date" title="2009-11-19 02:59"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94700">
<div class="phpcode"><code><span class="html">If you happen to get an error during your request which says "SOAP-ERROR: Encoding: Can't decode apache map, only Strings or Longs are allowd as keys", the reason seems to be the response xml using integer for keys and php failling to understand them
<br />
<br />Here is something that worked for me (converts integer keys to strings):
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">mySoap </span><span class="keyword">extends </span><span class="default">SoapClient
<br /></span><span class="keyword">{
<br />    public function </span><span class="default">__doRequest</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">, </span><span class="default">$action</span><span class="keyword">, </span><span class="default">$version</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__doRequest</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">, </span><span class="default">$action</span><span class="keyword">, </span><span class="default">$version</span><span class="keyword">);
<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'&lt;key xsi:type="xsd:int"&gt;'</span><span class="keyword">, </span><span class="string">'&lt;key xsi:type="xsd:string"&gt;'</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">);
<br />        return </span><span class="default">$result</span><span class="keyword">;
<br />    }
<br />}
<br />
<br /></span><span class="comment">// $soap = new mySoap(...
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116639">  <div class="votes">
    <div id="Vu116639">
    <a href="/manual/vote-note.php?id=116639&amp;page=soapclient.dorequest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116639">
    <a href="/manual/vote-note.php?id=116639&amp;page=soapclient.dorequest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116639" title="66% like this...">
    2
    </div>
  </div>
  <a href="#116639" class="name">
  <strong class="user"><em>tbernard at qcsupply dot com</em></strong></a><a class="genanchor" href="#116639"> &para;</a><div class="date" title="2015-02-02 05:08"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116639">
<div class="phpcode"><code><span class="html">If you're having trouble connecting to an authenticated SOAP service there's something important to note here.<br /><br />__doRequest() is only used when a SOAPClient function is called, NOT when the WSDL if fetched and parsed.  That means if your WSDL file is not publicly accessible but also resides behind your authentication it won't be accessible by default.  Instead you'll have to create an overloaded stream wrapper and register it for whatever protocol (probably HTTP) you'll be using.</span></code></div>
  </div>
 </div>
  <div class="note" id="94490">  <div class="votes">
    <div id="Vu94490">
    <a href="/manual/vote-note.php?id=94490&amp;page=soapclient.dorequest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94490">
    <a href="/manual/vote-note.php?id=94490&amp;page=soapclient.dorequest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94490" title="53% like this...">
    1
    </div>
  </div>
  <a href="#94490" class="name">
  <strong class="user"><em>Artur Graniszewski</em></strong></a><a class="genanchor" href="#94490"> &para;</a><div class="date" title="2009-11-08 04:35"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94490">
<div class="phpcode"><code><span class="html">Beware of PHP incosistent behaviour in __doRequest() method. It seems that some arguments passed to this method are passed by reference! 
<br />
<br />If you try to create your own __doRequest() method and store it's arguments as SoapClient properties you will find that after __soapCall all of them will be null or unknown.
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">protected </span><span class="default">$__soapAction </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />
<br />    public function </span><span class="default">__doRequest</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">, </span><span class="default">$action</span><span class="keyword">, </span><span class="default">$version</span><span class="keyword">, </span><span class="default">$oneWay </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {
<br />        </span><span class="default">ob_start</span><span class="keyword">();
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">server</span><span class="keyword">-&gt;</span><span class="default">handle</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">);
<br />        </span><span class="default">$response </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();
<br />        </span><span class="default">ob_end_clean</span><span class="keyword">();
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__soapAction </span><span class="keyword">= </span><span class="default">$action</span><span class="keyword">;
<br />        return </span><span class="default">$response</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;
<br /></span>
<br />In above example $this-&gt;__soapAction will be null after $obj-&gt;__soapCall()..
<br />
<br />To store $action value, you must cast it to a string (so PHP will be forced to create a new variable with different memory pointer):
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">public function </span><span class="default">__doRequest</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">, </span><span class="default">$action</span><span class="keyword">, </span><span class="default">$version</span><span class="keyword">, </span><span class="default">$oneWay </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {
<br />        </span><span class="default">ob_start</span><span class="keyword">();
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">server</span><span class="keyword">-&gt;</span><span class="default">handle</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">);
<br />        </span><span class="default">$response </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();
<br />        </span><span class="default">ob_end_clean</span><span class="keyword">();
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__soapAction </span><span class="keyword">= (string)</span><span class="default">$action</span><span class="keyword">;
<br />        return </span><span class="default">$response</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100042">  <div class="votes">
    <div id="Vu100042">
    <a href="/manual/vote-note.php?id=100042&amp;page=soapclient.dorequest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100042">
    <a href="/manual/vote-note.php?id=100042&amp;page=soapclient.dorequest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100042" title="52% like this...">
    1
    </div>
  </div>
  <a href="#100042" class="name">
  <strong class="user"><em>psfere at hotmail dot com</em></strong></a><a class="genanchor" href="#100042"> &para;</a><div class="date" title="2010-09-21 09:52"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100042">
<div class="phpcode"><code><span class="html">I was needing to add a blank soap header (&lt;SOAP-ENV:Header /&gt; and found no other place that has done this.  The only way I was able to support this was to extend SoapClient and re-define __doRequest.  Hope this helps someone or if there is support for this in the library, please point me in the right direction:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">MySoapCli </span><span class="keyword">extends </span><span class="default">SoapClient </span><span class="keyword">{
<br />  function </span><span class="default">__doRequest</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">, </span><span class="default">$action</span><span class="keyword">, </span><span class="default">$version</span><span class="keyword">) {
<br />    </span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">);
<br />    </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">preserveWhiteSpace </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />    </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">);
<br />    </span><span class="default">$hdr </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">createElementNS</span><span class="keyword">(</span><span class="string">'<a href="http://schemas.xmlsoap.org/soap/envelope/" rel="nofollow" target="_blank">http://schemas.xmlsoap.org/soap/envelope/</a>'</span><span class="keyword">, </span><span class="string">'SOAP-ENV:Header'</span><span class="keyword">);
<br />    </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">-&gt;</span><span class="default">insertBefore</span><span class="keyword">(</span><span class="default">$hdr</span><span class="keyword">, </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">);
<br />    </span><span class="default">$request </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();
<br />    return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__doRequest</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">, </span><span class="default">$action</span><span class="keyword">, </span><span class="default">$version</span><span class="keyword">);
<br />  }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108148">  <div class="votes">
    <div id="Vu108148">
    <a href="/manual/vote-note.php?id=108148&amp;page=soapclient.dorequest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108148">
    <a href="/manual/vote-note.php?id=108148&amp;page=soapclient.dorequest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108148" title="50% like this...">
    0
    </div>
  </div>
  <a href="#108148" class="name">
  <strong class="user"><em>alireza dot meskin at gmail</em></strong></a><a class="genanchor" href="#108148"> &para;</a><div class="date" title="2012-04-02 12:29"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108148">
<div class="phpcode"><code><span class="html">Change Blocking mode for Socket stream and set Timeout for Soap requests<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">TimeoutSoapClient </span><span class="keyword">extends </span><span class="default">SoapClient<br /></span><span class="keyword">{<br />    const </span><span class="default">TIMEOUT </span><span class="keyword">= </span><span class="default">20</span><span class="keyword">;<br />    public function </span><span class="default">__doRequest</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">, </span><span class="default">$action</span><span class="keyword">, </span><span class="default">$version</span><span class="keyword">, </span><span class="default">$one_way </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />    {<br />        </span><span class="default">$url_parts </span><span class="keyword">= </span><span class="default">parse_url</span><span class="keyword">(</span><span class="default">$location</span><span class="keyword">);<br />        </span><span class="default">$host </span><span class="keyword">= </span><span class="default">$url_parts</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">];<br />        </span><span class="default">$http_req </span><span class="keyword">= </span><span class="string">'POST '</span><span class="keyword">.</span><span class="default">$location</span><span class="keyword">.</span><span class="string">' HTTP/1.0'</span><span class="keyword">.</span><span class="string">"\r\n"</span><span class="keyword">;<br />        </span><span class="default">$http_req </span><span class="keyword">.= </span><span class="string">'Host: '</span><span class="keyword">.</span><span class="default">$host</span><span class="keyword">.</span><span class="string">"\r\n"</span><span class="keyword">;<br />        </span><span class="default">$http_req </span><span class="keyword">.= </span><span class="string">'SoapAction: '</span><span class="keyword">.</span><span class="default">$action</span><span class="keyword">.</span><span class="string">"\r\n"</span><span class="keyword">;<br />        </span><span class="default">$http_req </span><span class="keyword">.= </span><span class="string">"\r\n"</span><span class="keyword">;<br />        </span><span class="default">$http_req </span><span class="keyword">.= </span><span class="default">$request</span><span class="keyword">;<br />        </span><span class="default">$port </span><span class="keyword">= </span><span class="default">80</span><span class="keyword">;<br />        if (</span><span class="default">$url_parts</span><span class="keyword">[</span><span class="string">'scheme'</span><span class="keyword">] == </span><span class="string">'https'</span><span class="keyword">)<br />        {<br />            </span><span class="default">$port </span><span class="keyword">= </span><span class="default">443</span><span class="keyword">;<br />            </span><span class="default">$host </span><span class="keyword">= </span><span class="string">'ssl://'</span><span class="keyword">.</span><span class="default">$host</span><span class="keyword">;<br />        }<br />        </span><span class="default">$socket </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">);<br />        </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$request</span><span class="keyword">);<br />        </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />        </span><span class="default">$response </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        </span><span class="default">$stop </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) + </span><span class="default">self</span><span class="keyword">::</span><span class="default">TIMEOUT</span><span class="keyword">;<br />        while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">))<br />        {<br />            </span><span class="default">$response </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">2000</span><span class="keyword">);<br />            if (</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) &gt; </span><span class="default">$stop</span><span class="keyword">)<br />            {<br />                throw new </span><span class="default">SoapFault</span><span class="keyword">(</span><span class="string">'Client'</span><span class="keyword">, </span><span class="string">'HTTP timeout'</span><span class="keyword">);<br />            }<br />        }<br />        return </span><span class="default">$response</span><span class="keyword">;<br />    }<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57995">  <div class="votes">
    <div id="Vu57995">
    <a href="/manual/vote-note.php?id=57995&amp;page=soapclient.dorequest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57995">
    <a href="/manual/vote-note.php?id=57995&amp;page=soapclient.dorequest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57995" title="50% like this...">
    0
    </div>
  </div>
  <a href="#57995" class="name">
  <strong class="user"><em>metator at netcabo dot pt</em></strong></a><a class="genanchor" href="#57995"> &para;</a><div class="date" title="2005-10-20 04:32"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57995">
<div class="phpcode"><code><span class="html">You can use this method to correct the SOAP request before sending it, if necessary. You can use the DOM API to accomplish that. <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">public </span><span class="default">ExtendedClient </span><span class="keyword">extends </span><span class="default">SoapClient </span><span class="keyword">{<br /><br />   function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$wsdl</span><span class="keyword">, </span><span class="default">$options </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />      </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$wsdl</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);<br />   }<br /><br />   function </span><span class="default">__doRequest</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">, </span><span class="default">$action</span><span class="keyword">, </span><span class="default">$version</span><span class="keyword">) {<br />      </span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">);<br /><br />      try {<br /><br />         </span><span class="comment">//loads the SOAP request to the Document<br />         </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">);<br /><br />      } catch (</span><span class="default">DOMException $e</span><span class="keyword">) {<br />         die(</span><span class="string">'Parse error with code ' </span><span class="keyword">. </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">code</span><span class="keyword">);<br />      }<br /><br />      </span><span class="comment">//create a XPath object to query the request<br />      </span><span class="default">$path </span><span class="keyword">= new </span><span class="default">DOMXPath</span><span class="keyword">(</span><span class="default">$dom</span><span class="keyword">);<br /><br />      </span><span class="comment">//search for a node<br />      </span><span class="default">$nodesToFix </span><span class="keyword">= </span><span class="default">$path</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">'//SOAP-ENV:Envelope/SOAP-ENV:Body/path/to/node'</span><span class="keyword">);<br /><br />      </span><span class="comment">//check if nodes are ok<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">checkNodes</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">$nodesToFix</span><span class="keyword">);<br /><br />      </span><span class="comment">//save the modified SOAP request<br />      </span><span class="default">$request </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br />      <br />      </span><span class="comment">//doRequest<br />      </span><span class="keyword">return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__doRequest</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">, </span><span class="default">$action</span><span class="keyword">, </span><span class="default">$version</span><span class="keyword">);<br />   }<br /><br />   function </span><span class="default">checkNodes</span><span class="keyword">(</span><span class="default">DOMXPath $path</span><span class="keyword">, </span><span class="default">DOMNodeList $nodes</span><span class="keyword">) {<br />      </span><span class="comment">//iterate through the node list<br />      </span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; $ &lt; </span><span class="default">$nodes</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />         </span><span class="default">$aNode </span><span class="keyword">= </span><span class="default">$nodes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);<br /><br />         </span><span class="comment">//just an example<br />         </span><span class="keyword">if (</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">nodeValue </span><span class="keyword">== </span><span class="default">null</span><span class="keyword">) { <br />            </span><span class="comment">//do something. For instance, let's remove it.<br />            </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">);<br />         }<br />      }<br />   }<br />}<br /></span><span class="default">?&gt;<br /></span><br />This gives the developer the chance to solve interoperability problems with a web service.</span></code></div>
  </div>
 </div>
  <div class="note" id="67904">  <div class="votes">
    <div id="Vu67904">
    <a href="/manual/vote-note.php?id=67904&amp;page=soapclient.dorequest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67904">
    <a href="/manual/vote-note.php?id=67904&amp;page=soapclient.dorequest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67904" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#67904" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#67904"> &para;</a><div class="date" title="2006-07-06 01:17"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67904">
<div class="phpcode"><code><span class="html">Do you have problems with the PHP5 SoapClient when you need to send a request to a service with a ComplexType parameter?<br /> <br />Maybe because my service is build in Delphi with REMObjects SDK 3.0 I had the problems, maybe not. Anyway, this was my remedy:<br /><span class="default">&lt;?php<br />$versie </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">();</span><span class="comment">//define a basic class object<br /></span><span class="default">$versie</span><span class="keyword">-&gt;</span><span class="default">versieID </span><span class="keyword">= </span><span class="default">$aVersie</span><span class="keyword">-&gt;</span><span class="default">versieID</span><span class="keyword">();</span><span class="comment">//fill it with the exact attributes as your complextype Object in the wsdl is<br /></span><span class="default">$versie</span><span class="keyword">-&gt;</span><span class="default">versieNummer </span><span class="keyword">= </span><span class="default">$aVersie</span><span class="keyword">-&gt;</span><span class="default">versieNummer</span><span class="keyword">();<br /></span><span class="default">$versie</span><span class="keyword">-&gt;</span><span class="default">isActief </span><span class="keyword">= </span><span class="default">$aVersie</span><span class="keyword">-&gt;</span><span class="default">isActief</span><span class="keyword">();      <br />     <br /></span><span class="default">$soapVersieType </span><span class="keyword">= new </span><span class="default">SoapVar</span><span class="keyword">(</span><span class="default">$versie </span><span class="keyword">, </span><span class="default">SOAP_ENC_OBJECT</span><span class="keyword">, </span><span class="string">"Versie"</span><span class="keyword">, </span><span class="string">"<a href="http://127.0.0.1:8999/SOAP?wsdl" rel="nofollow" target="_blank">http://127.0.0.1:8999/SOAP?wsdl</a>"</span><span class="keyword">); </span><span class="comment">//create the complex soap type, Versie is the name of my complex type in the wsdl, the latter url beeing the location of my wsdl.<br /> <br /></span><span class="keyword">try{<br />  </span><span class="default">$result </span><span class="keyword">=  </span><span class="default">$soapClient</span><span class="keyword">-&gt;</span><span class="default">BewaarVersie</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sessieId</span><span class="keyword">,</span><span class="default">$soapVersieType</span><span class="keyword">); </span><span class="comment">//BewaarVersie is a function derived from my WSDL with two params.<br /></span><span class="keyword">}<br />catch(</span><span class="default">SoapFault $e</span><span class="keyword">){<br />  </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Something soapy went wrong: '</span><span class="keyword">.</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">faultstring</span><span class="keyword">,</span><span class="default">E_USER_WARNING</span><span class="keyword">);            }<br /></span><span class="default">?&gt;<br /></span> <br />After some more testing i found out that the conversion to the StdClass() object was not required. My 'Versie' local object has the attributes for the 'Versie' wsdl complex type defined as private vars and give no pain when i create the SoapVar with an instance of the local 'Versie' Object.</span></code></div>
  </div>
 </div>
  <div class="note" id="80852">  <div class="votes">
    <div id="Vu80852">
    <a href="/manual/vote-note.php?id=80852&amp;page=soapclient.dorequest&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80852">
    <a href="/manual/vote-note.php?id=80852&amp;page=soapclient.dorequest&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80852" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#80852" class="name">
  <strong class="user"><em>james dot ellis at gmail dot com</em></strong></a><a class="genanchor" href="#80852"> &para;</a><div class="date" title="2008-02-04 04:12"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80852">
<div class="phpcode"><code><span class="html">If your application interacts with SOAP services and you wish to cache the responses for consumption later, then overriding SoapClient::__doRequest is the way to go.<br /><br />For instance, if you know that the information presented doesn't change that often and you don't want to do a superfluous HTTP request, you can grab a response from a local cache and let SoapClient do the transformation to PHP data types.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">YourNamespace_SoapClient_Local </span><span class="keyword">extends </span><span class="default">SoapClient </span><span class="keyword">{<br />    protected </span><span class="default">$cacheDocument </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$wsdl</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">) {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$wsdl</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/**<br />     * SetCacheDocument() sets the previously cached document contents<br />     */<br />    </span><span class="keyword">public function </span><span class="default">SetCacheDocument</span><span class="keyword">(</span><span class="default">$document</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cacheDocument </span><span class="keyword">= </span><span class="default">$document</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/**<br />     * __doRequest() overrides the standard SoapClient to handle a local request<br />     */<br />    </span><span class="keyword">public function </span><span class="default">__doRequest</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cacheDocument</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment">//---- code snippet showing usage within a class<br />//$document is a cached SOAP response document from a previous request, saved with SoapClient::__getLastResponse() to some cache somewhere<br />//for the purpose of this example, it is assumed that $this-&gt;wsdl, $this-&gt;options, $this-&gt;method and $this-&gt;params are set.<br /><br /></span><span class="keyword">public function </span><span class="default">SoapRequest</span><span class="keyword">(</span><span class="default">$document</span><span class="keyword">) {<br />    </span><span class="default">$method </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">method</span><span class="keyword">;<br />    if(</span><span class="default">$document </span><span class="keyword">== </span><span class="string">""</span><span class="keyword">) {<br />        </span><span class="comment">//uncached<br />        </span><span class="keyword">try {<br />            </span><span class="comment">//default options<br />            </span><span class="default">$client </span><span class="keyword">= new </span><span class="default">SoapClient</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">wsdl</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">options</span><span class="keyword">);<br />            </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">$method</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">params</span><span class="keyword">);<br />            </span><span class="comment">//send the response to the cache<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">CacheResponse</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">__getLastResponse</span><span class="keyword">());<br />        } catch(</span><span class="default">SoapFault $fault</span><span class="keyword">) {<br />            </span><span class="comment">//log something<br />            </span><span class="keyword">return </span><span class="default">FALSE</span><span class="keyword">;<br />        }<br />    } else {<br />        </span><span class="comment">//cached document<br />        </span><span class="keyword">try {<br />            </span><span class="comment">/**<br />             * the WSDL needs to be set to allow the method to be called on the client object<br />             * and to trigger SoapClient to decode the response to native data types<br />             */<br />            </span><span class="default">$client </span><span class="keyword">= new </span><span class="default">YourNamespace_SoapClient_Local</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">wsdl</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">options</span><span class="keyword">);<br />            </span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">SetCacheDocument</span><span class="keyword">(</span><span class="default">$document</span><span class="keyword">);<br />            </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">$method</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">params</span><span class="keyword">);<br />        } catch (</span><span class="default">SoapFault $fault</span><span class="keyword">) {<br />            </span><span class="comment">//log something<br />            </span><span class="keyword">return </span><span class="default">FALSE</span><span class="keyword">;<br />        }<br />    }<br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />I'll leave you to work out the caching, plenty of options there.. ;)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=soapclient.dorequest&amp;repo=en&amp;redirect=https://www.php.net/manual/en/soapclient.dorequest.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.soapclient.php">SoapClient</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="soapclient.call.php" title="_&#8203;_&#8203;call">_&#8203;_&#8203;call</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="current">
                            <a href="soapclient.dorequest.php" title="_&#8203;_&#8203;doRequest">_&#8203;_&#8203;doRequest</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.getcookies.php" title="_&#8203;_&#8203;getCookies">_&#8203;_&#8203;getCookies</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.getfunctions.php" title="_&#8203;_&#8203;getFunctions">_&#8203;_&#8203;getFunctions</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.getlastrequest.php" title="_&#8203;_&#8203;getLastRequest">_&#8203;_&#8203;getLastRequest</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.getlastrequestheaders.php" title="_&#8203;_&#8203;getLastRequestHeaders">_&#8203;_&#8203;getLastRequestHeaders</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.getlastresponse.php" title="_&#8203;_&#8203;getLastResponse">_&#8203;_&#8203;getLastResponse</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.getlastresponseheaders.php" title="_&#8203;_&#8203;getLastResponseHeaders">_&#8203;_&#8203;getLastResponseHeaders</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.gettypes.php" title="_&#8203;_&#8203;getTypes">_&#8203;_&#8203;getTypes</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.setcookie.php" title="_&#8203;_&#8203;setCookie">_&#8203;_&#8203;setCookie</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.setlocation.php" title="_&#8203;_&#8203;setLocation">_&#8203;_&#8203;setLocation</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.setsoapheaders.php" title="_&#8203;_&#8203;setSoapHeaders">_&#8203;_&#8203;setSoapHeaders</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.soapcall.php" title="_&#8203;_&#8203;soapCall">_&#8203;_&#8203;soapCall</a>
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
