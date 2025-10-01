<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SoapClient::__soapCall - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/soapclient.soapcall.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/soapclient.soapcall.php">
 <link rel="alternate" href="https://www.php.net/manual/en/soapclient.soapcall.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.soapclient.php">
 <link rel="prev" href="https://www.php.net/manual/en/soapclient.setsoapheaders.php">
 <link rel="next" href="https://www.php.net/manual/en/class.soapserver.php">

 <link rel="alternate" href="https://www.php.net/manual/en/soapclient.soapcall.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/soapclient.soapcall.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/soapclient.soapcall.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/soapclient.soapcall.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/soapclient.soapcall.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/soapclient.soapcall.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/soapclient.soapcall.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/soapclient.soapcall.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/soapclient.soapcall.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/soapclient.soapcall.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/soapclient.soapcall.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Calls a SOAP function" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SoapClient::__soapCall - Manual" />
<meta name="twitter:description" content="Calls a SOAP function" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SoapClient::__soapCall - Manual" />
<meta itemprop="description" content="Calls a SOAP function" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Calls a SOAP function" />

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
        <a href="class.soapserver.php">
          SoapServer &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="soapclient.setsoapheaders.php">
          &laquo; SoapClient::__setSoapHeaders        </a>
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
            <option value='en/soapclient.soapcall.php' selected="selected">English</option>
            <option value='de/soapclient.soapcall.php'>German</option>
            <option value='es/soapclient.soapcall.php'>Spanish</option>
            <option value='fr/soapclient.soapcall.php'>French</option>
            <option value='it/soapclient.soapcall.php'>Italian</option>
            <option value='ja/soapclient.soapcall.php'>Japanese</option>
            <option value='pt_BR/soapclient.soapcall.php'>Brazilian Portuguese</option>
            <option value='ru/soapclient.soapcall.php'>Russian</option>
            <option value='tr/soapclient.soapcall.php'>Turkish</option>
            <option value='uk/soapclient.soapcall.php'>Ukrainian</option>
            <option value='zh/soapclient.soapcall.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="soapclient.soapcall" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SoapClient::__soapCall</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SoapClient::__soapCall</span> &mdash; <span class="dc-title">Calls a SOAP function</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-soapclient.soapcall-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SoapClient::__soapCall</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$args</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="class.soapheader.php" class="type SoapHeader">SoapHeader</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$inputHeaders</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$outputHeaders</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="para rdfs-comment">
   This is a low level API function that is used to make a SOAP call. Usually,
   in WSDL mode, SOAP functions can be called as methods of the
   <span class="classname"><a href="class.soapclient.php" class="classname">SoapClient</a></span> object. This method is useful in non-WSDL
   mode when <code class="literal">soapaction</code> is unknown, <code class="literal">uri</code>
   differs from the default or when sending and/or receiving SOAP Headers.
  </p>
  <p class="para">
   On error, a call to a SOAP function can cause PHP to throw exceptions or return a
   <span class="classname"><a href="class.soapfault.php" class="classname">SoapFault</a></span> object if exceptions are disabled.
   To check if the function call failed to catch the SoapFault exceptions,
   check the result with <span class="function"><a href="function.is-soap-fault.php" class="function">is_soap_fault()</a></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-soapclient.soapcall-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">name</code></dt>
     <dd>
      <p class="para">
       The name of the SOAP function to call.
      </p>
     </dd>
    
    
     <dt><code class="parameter">args</code></dt>
     <dd>
      <p class="para">
       An array of the arguments to pass to the function. This can be either
       an ordered or an associative array. Note that most SOAP servers require
       parameter names to be provided, in which case this must be an
       associative array.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       An associative array of options to pass to the client.
      </p>
      <p class="para">
       The <code class="literal">location</code> option is the URL of the remote Web service.
      </p>
      <p class="para">
       The <code class="literal">uri</code> option is the target namespace of the SOAP service.
      </p>
      <p class="para">
        The <code class="literal">soapaction</code> option is the action to call.
      </p>
    </dd>
    
    
     <dt><code class="parameter">inputHeaders</code></dt>
     <dd>
      <p class="para">
       An array of headers to be sent along with the SOAP request.
      </p>
     </dd>
    
    
     <dt><code class="parameter">outputHeaders</code></dt>
     <dd>
      <p class="para">
       If supplied, this array will be filled with the headers from the SOAP response.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-soapclient.soapcall-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   SOAP functions may return one, or multiple values. If only one value is
   returned by the SOAP function, the return value will be a scalar.
   If multiple values are returned, an associative array of named output
   parameters is returned instead.
  </p>
  <p class="para">
   On error, if the <span class="classname"><a href="class.soapclient.php" class="classname">SoapClient</a></span> object was constructed
   with the <code class="literal">exceptions</code> option set to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>,
   a <span class="classname"><a href="class.soapfault.php" class="classname">SoapFault</a></span> object will be returned.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-soapclient.soapcall-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5710">
    <p><strong>Example #1 <span class="methodname"><strong>SoapClient::__soapCall()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #DD0000">"some.wsdl"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">SomeFunction</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">$c</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__soapCall</span><span style="color: #007700">(</span><span style="color: #DD0000">"SomeFunction"</span><span style="color: #007700">, array(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">$c</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__soapCall</span><span style="color: #007700">(</span><span style="color: #DD0000">"SomeFunction"</span><span style="color: #007700">, array(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">$c</span><span style="color: #007700">), </span><span style="color: #0000BB">NULL</span><span style="color: #007700">,<br />                    new </span><span style="color: #0000BB">SoapHeader</span><span style="color: #007700">(), </span><span style="color: #0000BB">$output_headers</span><span style="color: #007700">);<br /><br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'location' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"http://localhost/soap.php"</span><span style="color: #007700">,<br />                                     </span><span style="color: #DD0000">'uri'      </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"http://test-uri/"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">SomeFunction</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">$c</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__soapCall</span><span style="color: #007700">(</span><span style="color: #DD0000">"SomeFunction"</span><span style="color: #007700">, array(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">$c</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__soapCall</span><span style="color: #007700">(</span><span style="color: #DD0000">"SomeFunction"</span><span style="color: #007700">, array(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">$c</span><span style="color: #007700">),<br />                    array(</span><span style="color: #DD0000">'soapaction' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'some_action'</span><span style="color: #007700">,<br />                          </span><span style="color: #DD0000">'uri'        </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'some_uri'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-soapclient.soapcall-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="soapclient.construct.php" class="methodname" rel="rdfs-seeAlso">SoapClient::__construct()</a> - SoapClient constructor</span></li>
    <li><span class="methodname"><a href="soapparam.construct.php" class="methodname" rel="rdfs-seeAlso">SoapParam::__construct()</a> - SoapParam constructor</span></li>
    <li><span class="methodname"><a href="soapvar.construct.php" class="methodname" rel="rdfs-seeAlso">SoapVar::__construct()</a> - SoapVar constructor</span></li>
    <li><span class="methodname"><a href="soapheader.construct.php" class="methodname" rel="rdfs-seeAlso">SoapHeader::__construct()</a> - SoapHeader constructor</span></li>
    <li><span class="methodname"><a href="soapfault.construct.php" class="methodname" rel="rdfs-seeAlso">SoapFault::__construct()</a> - SoapFault constructor</span></li>
    <li><span class="function"><a href="function.is-soap-fault.php" class="function" rel="rdfs-seeAlso">is_soap_fault()</a> - Checks if a SOAP call has failed</span></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/soap/soapclient/soapcall.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsoapclient.soapcall%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=soapclient.soapcall&amp;repo=en&amp;redirect=https://www.php.net/manual/en/soapclient.soapcall.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110390">  <div class="votes">
    <div id="Vu110390">
    <a href="/manual/vote-note.php?id=110390&amp;page=soapclient.soapcall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110390">
    <a href="/manual/vote-note.php?id=110390&amp;page=soapclient.soapcall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110390" title="73% like this...">
    97
    </div>
  </div>
  <a href="#110390" class="name">
  <strong class="user"><em>vb</em></strong></a><a class="genanchor" href="#110390"> &para;</a><div class="date" title="2012-10-17 04:23"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110390">
<div class="phpcode"><code><span class="html">Note that calling __soapCall and calling the generated method from WSDL requires specifying parameters in two different ways.<br /><br />For example, if you have a web service with method login that takes username and password, you can call it the following way:<br /><span class="default">&lt;?php<br />$params </span><span class="keyword">= array(</span><span class="string">'username'</span><span class="keyword">=&gt;</span><span class="string">'name'</span><span class="keyword">, </span><span class="string">'password'</span><span class="keyword">=&gt;</span><span class="string">'secret'</span><span class="keyword">);<br /></span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">login</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />If you want to call __soapCall, you must wrap the arguments in another array as follows:<br /><span class="default">&lt;?php<br />$client</span><span class="keyword">-&gt;</span><span class="default">__soapCall</span><span class="keyword">(</span><span class="string">'login'</span><span class="keyword">, array(</span><span class="default">$params</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119719">  <div class="votes">
    <div id="Vu119719">
    <a href="/manual/vote-note.php?id=119719&amp;page=soapclient.soapcall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119719">
    <a href="/manual/vote-note.php?id=119719&amp;page=soapclient.soapcall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119719" title="76% like this...">
    9
    </div>
  </div>
  <a href="#119719" class="name">
  <strong class="user"><em>arturklesun at gmail dot com</em></strong></a><a class="genanchor" href="#119719"> &para;</a><div class="date" title="2016-08-10 06:16"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119719">
<div class="phpcode"><code><span class="html">Sharing my experience cuz i believe it is most important for you if you decide to use this Soap Client implementation.<br /><br />At php 7.0.8 the stdClass generated by SoapClient from the response does not use "minOccurs" and "maxOccurs" WSDL modifiers to distinct properties in stdClass-es (aka keys in "associative arrays") and elements in arrays ("aka indexed arrays"). <br /><br />Instead, the implementation decides whether tag is _a key in associative array_ or _one of elements with same tag in indexed array_ by simply the fact whether there is just one element with such tag in the sequence or many.<br /><br />Consider alive example from my case:<br /><span class="default">&lt;?php<br />response xml</span><span class="keyword">:<br />...<br />&lt;</span><span class="default">ValidatingCarrier</span><span class="keyword">&gt;<br />    &lt;</span><span class="default">Alternate</span><span class="keyword">&gt;</span><span class="default">AA</span><span class="keyword">&lt;/</span><span class="default">Alternate</span><span class="keyword">&gt;<br />&lt;/</span><span class="default">ValidatingCarrier</span><span class="keyword">&gt;<br />...<br />&lt;</span><span class="default">ValidatingCarrier</span><span class="keyword">&gt;<br />    &lt;</span><span class="default">Alternate</span><span class="keyword">&gt;</span><span class="default">AA</span><span class="keyword">&lt;/</span><span class="default">Alternate</span><span class="keyword">&gt;<br />    &lt;</span><span class="default">Alternate</span><span class="keyword">&gt;</span><span class="default">AY</span><span class="keyword">&lt;/</span><span class="default">Alternate</span><span class="keyword">&gt;<br />&lt;/</span><span class="default">ValidatingCarrier</span><span class="keyword">&gt;<br />...<br /><br /></span><span class="default">response structure generated by SoapClient</span><span class="keyword">:<br />...<br />[</span><span class="default">ValidatingCarrier</span><span class="keyword">] =&gt; </span><span class="default">stdClass Object</span><span class="keyword">(<br />    [</span><span class="default">Alternate</span><span class="keyword">] =&gt; </span><span class="default">AA </span><span class="comment">// here it is a string<br /></span><span class="keyword">)<br />...<br />[</span><span class="default">ValidatingCarrier</span><span class="keyword">] =&gt; </span><span class="default">stdClass Object </span><span class="keyword">(<br />    [</span><span class="default">Alternate</span><span class="keyword">] =&gt; Array ( </span><span class="comment">// and here this is an array<br />        </span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] =&gt; </span><span class="default">AA<br />        </span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] =&gt; </span><span class="default">AY<br />    </span><span class="keyword">)<br />)<br />...<br /><br /></span><span class="default">field XSD definition</span><span class="keyword">:<br />&lt;</span><span class="default">xs</span><span class="keyword">:</span><span class="default">element name</span><span class="keyword">=</span><span class="string">"Alternate" </span><span class="default">type</span><span class="keyword">=</span><span class="string">"CarrierCode" </span><span class="default">minOccurs</span><span class="keyword">=</span><span class="string">"0" </span><span class="default">maxOccurs</span><span class="keyword">=</span><span class="string">"24"</span><span class="keyword">&gt;<br /></span><span class="default">?&gt;<br /></span><br />You see, the definition in XSD tells us this tag can be repeated up to 24 times, what means it would be an indexed array, but SoapClient does not take that into account and treats the first &lt;Alternate&gt; in example as a value instead of array containing this value. <br /><br />Undoubtedly, a value should be a property in the stdClass (a key in associative array) _only_ when maxOccurs is 1 or less or not specified (default is 1, see <a href="https://www.w3.org/TR/xmlschema-0/#OccurrenceConstraints" rel="nofollow" target="_blank">https://www.w3.org/TR/xmlschema-0/#OccurrenceConstraints</a>). Hope this info will be useful for you when you will be implementing your own, correctly working, SoapClient.</span></code></div>
  </div>
 </div>
  <div class="note" id="89308">  <div class="votes">
    <div id="Vu89308">
    <a href="/manual/vote-note.php?id=89308&amp;page=soapclient.soapcall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89308">
    <a href="/manual/vote-note.php?id=89308&amp;page=soapclient.soapcall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89308" title="71% like this...">
    25
    </div>
  </div>
  <a href="#89308" class="name">
  <strong class="user"><em>Shto</em></strong></a><a class="genanchor" href="#89308"> &para;</a><div class="date" title="2009-03-03 03:17"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89308">
<div class="phpcode"><code><span class="html">One thing to note.<br /><br />This happened to me and it took a while until I discovered what the problem was.<br /><br />I was trying to get .NET objects from a provided web service, however it always seemed to return empty objects. It did return the backbone, but nothing within the objects that made up the structure.<br /><br />Anyhow, it seems that you have to be very precise with the arrays when calling these functions. Par example, do this:<br /><br /><span class="default">&lt;?php<br />$obj </span><span class="keyword">= </span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">__soapCall</span><span class="keyword">(</span><span class="default">$SOAPCall</span><span class="keyword">, array(</span><span class="string">'parameters'</span><span class="keyword">=&gt;</span><span class="default">$SoapCallParameters</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />meaning that you must put an array as the second argument with 'parameters' as the key and the soap call parameters as the value.<br /><br />Also make sure that the parameter variable, in my case $SoapCallParameters is in the form of what is requested by the webservice.<br /><br />So, don't just make an array of the form:<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">(<br />   [</span><span class="default">0</span><span class="keyword">] =&gt; </span><span class="string">'Mary'</span><span class="keyword">,<br />   [</span><span class="default">1</span><span class="keyword">] =&gt; </span><span class="default">1983<br /></span><span class="keyword">)<br /><br /></span><span class="default">?&gt;<br /></span><br />but if the webservice requests a 'muid' variable as 'Mary' and a 'birthyear' as 1983, then make your array like this:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">(<br />   [</span><span class="default">muid</span><span class="keyword">] =&gt; </span><span class="string">'Mary'</span><span class="keyword">,<br />   [</span><span class="default">birthyear</span><span class="keyword">] =&gt; </span><span class="default">1983<br /></span><span class="keyword">)<br /><br /></span><span class="default">?&gt;<br /></span><br />The above arrays refer to the $SoapCallParameters variable.<br /><br />Hope this helps somebody, not having to spend too much time figuring out the problems.</span></code></div>
  </div>
 </div>
  <div class="note" id="52533">  <div class="votes">
    <div id="Vu52533">
    <a href="/manual/vote-note.php?id=52533&amp;page=soapclient.soapcall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52533">
    <a href="/manual/vote-note.php?id=52533&amp;page=soapclient.soapcall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52533" title="78% like this...">
    8
    </div>
  </div>
  <a href="#52533" class="name">
  <strong class="user"><em>DesmondJ</em></strong></a><a class="genanchor" href="#52533"> &para;</a><div class="date" title="2005-05-04 03:36"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52533">
<div class="phpcode"><code><span class="html">Following OrionI's example:<br /><br /><span class="default">&lt;?php<br /> $client </span><span class="keyword">= new </span><span class="default">SoapClient</span><span class="keyword">(</span><span class="string">"<a href="http://server/sumservice.asmx?WSDL" rel="nofollow" target="_blank">http://server/sumservice.asmx?WSDL</a>"</span><span class="keyword">);<br /> </span><span class="default">$params</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br /> </span><span class="default">$params</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br /> </span><span class="default">$objectresult </span><span class="keyword">= </span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">Sum</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">);<br /> </span><span class="default">$simpleresult </span><span class="keyword">= </span><span class="default">$objectresult</span><span class="keyword">-&gt;</span><span class="default">SumResult</span><span class="keyword">;<br /> print(</span><span class="default">$simpleresult</span><span class="keyword">); </span><span class="comment">//produces "-1"<br /></span><span class="default">?&gt;</span> <br /><br />Please note that the lines: <br /><br />"$client-&gt;Sum($params);" <br /><br />and<br /><br />"$simpleresult = $objectresult-&gt;SumResult;"<br /><br />are based off of each other. If your web service function is called "Sum", then add "Result" to the end of it to get the results of the call.<br /><br />EG:<br /><br /><span class="default">&lt;?php<br /> $client </span><span class="keyword">= new </span><span class="default">SoapClient</span><span class="keyword">(</span><span class="string">"<a href="http://server/mathservice.asmx?WSDL" rel="nofollow" target="_blank">http://server/mathservice.asmx?WSDL</a>"</span><span class="keyword">);<br /> </span><span class="default">$params</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br /> </span><span class="default">$params</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br /> </span><span class="default">$objectresult </span><span class="keyword">= </span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">Minus</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">); </span><span class="comment">// note the name of the function is "Minus"<br /> </span><span class="default">$simpleresult </span><span class="keyword">= </span><span class="default">$objectresult</span><span class="keyword">-&gt;</span><span class="default">MinusResult</span><span class="keyword">; </span><span class="comment">// note the name of the result is referenced as "MinusResult"<br /> </span><span class="keyword">print(</span><span class="default">$simpleresult</span><span class="keyword">); </span><span class="comment">//produces "5"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119461">  <div class="votes">
    <div id="Vu119461">
    <a href="/manual/vote-note.php?id=119461&amp;page=soapclient.soapcall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119461">
    <a href="/manual/vote-note.php?id=119461&amp;page=soapclient.soapcall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119461" title="75% like this...">
    8
    </div>
  </div>
  <a href="#119461" class="name">
  <strong class="user"><em>ub at sturmundbraem dot ch</em></strong></a><a class="genanchor" href="#119461"> &para;</a><div class="date" title="2016-06-11 12:51"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119461">
<div class="phpcode"><code><span class="html">To avoid the SOAP client returning sometimes objects and sometimes arrays of objects, there's a setting:<br /><br />   $this-&gt;soapClient = new \SoapClient($wsdlUrl, array(<br />    'features' =&gt; SOAP_SINGLE_ELEMENT_ARRAYS,<br />    'trace' =&gt; DEBUG_SOAP<br />   ));</span></code></div>
  </div>
 </div>
  <div class="note" id="60576">  <div class="votes">
    <div id="Vu60576">
    <a href="/manual/vote-note.php?id=60576&amp;page=soapclient.soapcall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60576">
    <a href="/manual/vote-note.php?id=60576&amp;page=soapclient.soapcall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60576" title="71% like this...">
    3
    </div>
  </div>
  <a href="#60576" class="name">
  <strong class="user"><em>paulsjv at gmail dot com</em></strong></a><a class="genanchor" href="#60576"> &para;</a><div class="date" title="2006-01-11 07:44"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60576">
<div class="phpcode"><code><span class="html">I was working with SOAP for the first time and I had to create a client that sent a date range to a WSDL (Web Services Description Language) to return some information I needed.  I didn't know how to pass the params and there really was no documentation about it.  The main thing you have to make sure to do is when you pass params to a method that is definied by the WSDL that you are calling is that you use the same param name for the key of the array or the object variable as shown below.  Also, if you don't know what the methods/functions that a WSDL has or the params that you need to pass it you can use the __getFunctions() and __getTypes() methods after you declare your new SoapClient.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// From and to are the two params that the execute function needs<br />// when called from the WSDL so make you to have them as the<br />// key to an array like below<br /></span><span class="default">$params</span><span class="keyword">[</span><span class="string">"From"</span><span class="keyword">] = </span><span class="string">"06/01/2005"</span><span class="keyword">; </span><span class="comment">// also can use $params-&gt;From = "date";<br /></span><span class="default">$params</span><span class="keyword">[</span><span class="string">"to"</span><span class="keyword">] = </span><span class="string">"12/31/2005"</span><span class="keyword">; </span><span class="comment">// also can use $params-&gt;to = "date";<br /><br /></span><span class="default">$client </span><span class="keyword">= new </span><span class="default">SoapClient</span><span class="keyword">(</span><span class="string">"some.wsdl"</span><span class="keyword">);<br /><br />try {<br />        print(</span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">));<br />} catch (</span><span class="default">SoapFault $exception</span><span class="keyword">) {<br />        echo </span><span class="default">$exception</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="51938">  <div class="votes">
    <div id="Vu51938">
    <a href="/manual/vote-note.php?id=51938&amp;page=soapclient.soapcall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51938">
    <a href="/manual/vote-note.php?id=51938&amp;page=soapclient.soapcall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51938" title="70% like this...">
    4
    </div>
  </div>
  <a href="#51938" class="name">
  <strong class="user"><em>OrionI</em></strong></a><a class="genanchor" href="#51938"> &para;</a><div class="date" title="2005-04-15 11:46"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51938">
<div class="phpcode"><code><span class="html">When calling over SOAP to a .NET application, you may end up with an object as a result instead of a simple type, even if you're just grabbing a simple type (like a boolean result). Use a property accessor to get the actual result, like this:<br /><span class="default">&lt;?php<br /> $client </span><span class="keyword">= new </span><span class="default">SoapClient</span><span class="keyword">(</span><span class="string">"<a href="http://server/myservice.asmx?WSDL" rel="nofollow" target="_blank">http://server/myservice.asmx?WSDL</a>"</span><span class="keyword">);<br /> </span><span class="default">$objectresult </span><span class="keyword">= </span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">MyMethod</span><span class="keyword">(</span><span class="default">$param1</span><span class="keyword">, </span><span class="default">$param2</span><span class="keyword">);<br /> </span><span class="default">$simpleresult </span><span class="keyword">= </span><span class="default">$objectresult</span><span class="keyword">-&gt;</span><span class="default">MyMethodResult</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>Note that .NET seems to name the result MethodNameResult for method MethodName.</span></code></div>
  </div>
 </div>
  <div class="note" id="102387">  <div class="votes">
    <div id="Vu102387">
    <a href="/manual/vote-note.php?id=102387&amp;page=soapclient.soapcall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102387">
    <a href="/manual/vote-note.php?id=102387&amp;page=soapclient.soapcall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102387" title="66% like this...">
    4
    </div>
  </div>
  <a href="#102387" class="name">
  <strong class="user"><em>snuufix+nospam at gmail dot com</em></strong></a><a class="genanchor" href="#102387"> &para;</a><div class="date" title="2011-02-11 03:23"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102387">
<div class="phpcode"><code><span class="html">I am using SOAP call response headers to sign request results.<br /><br />After alot of hours, I finally got the best way to get SOAP response headers (other than parsing __getLastResponse() witch requires trace option enabled) is using __soapCall() wrapper.<br /><br />You can extend SoapClient class and wrap some functions to make sure you get the headers.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">API </span><span class="keyword">extends </span><span class="default">SoapClient<br /></span><span class="keyword">{<br /><br />    </span><span class="comment">// ... Constructor, etc.<br /><br />    // Get SOAP Server response headers<br />    </span><span class="keyword">public function </span><span class="default">__soapCall</span><span class="keyword">(</span><span class="default">$function</span><span class="keyword">, </span><span class="default">$arguments</span><span class="keyword">, </span><span class="default">$options </span><span class="keyword">= array(), </span><span class="default">$input_headers </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, &amp;</span><span class="default">$output_headers </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />    {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__soapCall</span><span class="keyword">(</span><span class="default">$function</span><span class="keyword">, </span><span class="default">$arguments</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">, </span><span class="default">$input_headers</span><span class="keyword">, </span><span class="default">$output_headers</span><span class="keyword">);<br /><br />        </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$output_headers</span><span class="keyword">); </span><span class="comment">// Array of response headers<br />    </span><span class="keyword">}<br /><br />    </span><span class="comment">// If you are using WSDL you need this, so you still can call functions directly without calling __soapCall manualy<br />    </span><span class="keyword">public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">)<br />    {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__soapCall</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">);<br />    }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52000">  <div class="votes">
    <div id="Vu52000">
    <a href="/manual/vote-note.php?id=52000&amp;page=soapclient.soapcall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52000">
    <a href="/manual/vote-note.php?id=52000&amp;page=soapclient.soapcall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52000" title="66% like this...">
    1
    </div>
  </div>
  <a href="#52000" class="name">
  <strong class="user"><em>OrionI</em></strong></a><a class="genanchor" href="#52000"> &para;</a><div class="date" title="2005-04-18 07:27"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52000">
<div class="phpcode"><code><span class="html">Correction on the previously submitted code snippet...the incoming parameter for .NET also has to be in object or array form for it to be correctly converted to the XML form that .NET expects (as already mentioned by Llu?s P?mies). The full example (when using WSDL) should be like this:<br /><span class="default">&lt;?php<br /> $client </span><span class="keyword">= new </span><span class="default">SoapClient</span><span class="keyword">(</span><span class="string">"<a href="http://server/myservice.asmx?WSDL" rel="nofollow" target="_blank">http://server/myservice.asmx?WSDL</a>"</span><span class="keyword">);<br /> </span><span class="default">$params</span><span class="keyword">-&gt;</span><span class="default">param1 </span><span class="keyword">= </span><span class="default">$value1</span><span class="keyword">;<br /> </span><span class="default">$params</span><span class="keyword">-&gt;</span><span class="default">param2 </span><span class="keyword">= </span><span class="default">$value2</span><span class="keyword">;<br /> </span><span class="default">$objectresult </span><span class="keyword">= </span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">MyMethod</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">);<br /> </span><span class="default">$simpleresult </span><span class="keyword">= </span><span class="default">$objectresult</span><span class="keyword">-&gt;</span><span class="default">MyMethodResult</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>So if you have a C# function like this:<br />//sumservice.asmx<br />...<br />[WebMethod]<br />public int Sum(int a, int b)<br />{<br />  return a + b;<br />}<br />...<br />The PHP client would be this:<br /><span class="default">&lt;?php<br /> $client </span><span class="keyword">= new </span><span class="default">SoapClient</span><span class="keyword">(</span><span class="string">"<a href="http://server/sumservice.asmx?WSDL" rel="nofollow" target="_blank">http://server/sumservice.asmx?WSDL</a>"</span><span class="keyword">);<br /> </span><span class="default">$params</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br /> </span><span class="default">$params</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br /> </span><span class="default">$objectresult </span><span class="keyword">= </span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">Sum</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">);<br /> </span><span class="default">$simpleresult </span><span class="keyword">= </span><span class="default">$objectresult</span><span class="keyword">-&gt;</span><span class="default">SumResult</span><span class="keyword">;<br /> print(</span><span class="default">$simpleresult</span><span class="keyword">); </span><span class="comment">//produces "5"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90161">  <div class="votes">
    <div id="Vu90161">
    <a href="/manual/vote-note.php?id=90161&amp;page=soapclient.soapcall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90161">
    <a href="/manual/vote-note.php?id=90161&amp;page=soapclient.soapcall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90161" title="62% like this...">
    7
    </div>
  </div>
  <a href="#90161" class="name">
  <strong class="user"><em>Tim Williams</em></strong></a><a class="genanchor" href="#90161"> &para;</a><div class="date" title="2009-04-08 06:55"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90161">
<div class="phpcode"><code><span class="html">One little gotcha when passing the parameters where you need to have attributes and a simpletype value: <br /><br />To get the xml<br /><br />&lt;foo bar="moo"&gt;cheese&lt;/foo&gt;<br /><br />You'd pass in:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">array(</span><span class="string">"foo" </span><span class="keyword">=&gt; array(</span><span class="string">"_" </span><span class="keyword">=&gt; </span><span class="string">"cheese"</span><span class="keyword">, </span><span class="string">"bar"</span><span class="keyword">=&gt;</span><span class="string">"moo"</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />See that "_" bit? It really wasn't obvious from the documentation.</span></code></div>
  </div>
 </div>
  <div class="note" id="98348">  <div class="votes">
    <div id="Vu98348">
    <a href="/manual/vote-note.php?id=98348&amp;page=soapclient.soapcall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98348">
    <a href="/manual/vote-note.php?id=98348&amp;page=soapclient.soapcall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98348" title="60% like this...">
    2
    </div>
  </div>
  <a href="#98348" class="name">
  <strong class="user"><em>james dot ellis at gmail dot com</em></strong></a><a class="genanchor" href="#98348"> &para;</a><div class="date" title="2010-06-09 07:12"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98348">
<div class="phpcode"><code><span class="html">If you are using this method, remember that the array of arguments need to be passed in with the ordering being the same order that the SOAP endpoint expects.<br /><br />e.g<br /><span class="default">&lt;?php<br /></span><span class="comment">//server expects: Foo(string name, int age)<br /><br />//won't work<br /></span><span class="default">$args </span><span class="keyword">= array(</span><span class="default">32</span><span class="keyword">, </span><span class="string">'john'</span><span class="keyword">);<br /></span><span class="default">$out </span><span class="keyword">= </span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">__soapCall</span><span class="keyword">(</span><span class="string">'Foo'</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">);<br /><br /></span><span class="comment">//will work<br /></span><span class="default">$args </span><span class="keyword">= array(</span><span class="string">'john'</span><span class="keyword">, </span><span class="default">32</span><span class="keyword">);<br /></span><span class="default">$out </span><span class="keyword">= </span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">__soapCall</span><span class="keyword">(</span><span class="string">'Foo'</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78707">  <div class="votes">
    <div id="Vu78707">
    <a href="/manual/vote-note.php?id=78707&amp;page=soapclient.soapcall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78707">
    <a href="/manual/vote-note.php?id=78707&amp;page=soapclient.soapcall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78707" title="59% like this...">
    4
    </div>
  </div>
  <a href="#78707" class="name">
  <strong class="user"><em>stefan at datax dot biz</em></strong></a><a class="genanchor" href="#78707"> &para;</a><div class="date" title="2007-10-24 07:28"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78707">
<div class="phpcode"><code><span class="html">The call to __soapCall returned an object to me either. This is the function which makes my life easier:<br /><br />function obj2array($obj) {<br />  $out = array();<br />  foreach ($obj as $key =&gt; $val) {<br />    switch(true) {<br />        case is_object($val):<br />         $out[$key] = obj2array($val);<br />         break;<br />      case is_array($val):<br />         $out[$key] = obj2array($val);<br />         break;<br />      default:<br />        $out[$key] = $val;<br />    }<br />  }<br />  return $out;<br />}<br /><br />Usage:<br />...<br />$response = $client -&gt;__soapCall("track", array('parameters' =&gt; $request));<br />$response = obj2array($response);<br /><br />Hope it helps.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=soapclient.soapcall&amp;repo=en&amp;redirect=https://www.php.net/manual/en/soapclient.soapcall.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
