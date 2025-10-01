<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SOAP - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.soap.php">
 <link rel="shorturl" href="https://www.php.net/soap">
 <link rel="alternate" href="https://www.php.net/soap" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.webservice.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.oauthexception.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.soap.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.soap.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.soap.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.soap.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.soap.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.soap.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.soap.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.soap.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.soap.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.soap.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.soap.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.soap.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="SOAP" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SOAP - Manual" />
<meta name="twitter:description" content="SOAP" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SOAP - Manual" />
<meta itemprop="description" content="SOAP" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="SOAP" />

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
        <a href="intro.soap.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.oauthexception.php">
          &laquo; OAuthException        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.webservice.php'>Web Services</a></li>      </ul>
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
            <option value='en/book.soap.php' selected="selected">English</option>
            <option value='de/book.soap.php'>German</option>
            <option value='es/book.soap.php'>Spanish</option>
            <option value='fr/book.soap.php'>French</option>
            <option value='it/book.soap.php'>Italian</option>
            <option value='ja/book.soap.php'>Japanese</option>
            <option value='pt_BR/book.soap.php'>Brazilian Portuguese</option>
            <option value='ru/book.soap.php'>Russian</option>
            <option value='tr/book.soap.php'>Turkish</option>
            <option value='uk/book.soap.php'>Ukrainian</option>
            <option value='zh/book.soap.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.soap" class="book">
 
 <h1 class="title">SOAP</h1>
 

 

 







 




 
 








 




 




 




 




 




 






<ul class="chunklist chunklist_book"><li><a href="intro.soap.php">Introduction</a></li><li><a href="soap.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="soap.requirements.php">Requirements</a></li><li><a href="soap.installation.php">Installation</a></li><li><a href="soap.configuration.php">Runtime Configuration</a></li></ul></li><li><a href="soap.constants.php">Predefined Constants</a></li><li><a href="ref.soap.php">SOAP Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.is-soap-fault.php">is_soap_fault</a> — Checks if a SOAP call has failed</li><li><a href="function.use-soap-error-handler.php">use_soap_error_handler</a> — Set whether to use the SOAP error handler</li></ul></li><li><a href="class.soapclient.php">SoapClient</a> — The SoapClient class<ul class="chunklist chunklist_book chunklist_children"><li><a href="soapclient.call.php">SoapClient::__call</a> — Calls a SOAP function (deprecated)</li><li><a href="soapclient.construct.php">SoapClient::__construct</a> — SoapClient constructor</li><li><a href="soapclient.dorequest.php">SoapClient::__doRequest</a> — Performs a SOAP request</li><li><a href="soapclient.getcookies.php">SoapClient::__getCookies</a> — Get list of cookies</li><li><a href="soapclient.getfunctions.php">SoapClient::__getFunctions</a> — Returns list of available SOAP functions</li><li><a href="soapclient.getlastrequest.php">SoapClient::__getLastRequest</a> — Returns last SOAP request</li><li><a href="soapclient.getlastrequestheaders.php">SoapClient::__getLastRequestHeaders</a> — Returns the SOAP headers from the last request</li><li><a href="soapclient.getlastresponse.php">SoapClient::__getLastResponse</a> — Returns last SOAP response</li><li><a href="soapclient.getlastresponseheaders.php">SoapClient::__getLastResponseHeaders</a> — Returns the SOAP headers from the last response</li><li><a href="soapclient.gettypes.php">SoapClient::__getTypes</a> — Returns a list of SOAP types</li><li><a href="soapclient.setcookie.php">SoapClient::__setCookie</a> — Defines a cookie for SOAP requests</li><li><a href="soapclient.setlocation.php">SoapClient::__setLocation</a> — Sets the location of the Web service to use</li><li><a href="soapclient.setsoapheaders.php">SoapClient::__setSoapHeaders</a> — Sets SOAP headers for subsequent calls</li><li><a href="soapclient.soapcall.php">SoapClient::__soapCall</a> — Calls a SOAP function</li></ul></li><li><a href="class.soapserver.php">SoapServer</a> — The SoapServer class<ul class="chunklist chunklist_book chunklist_children"><li><a href="soapserver.addfunction.php">SoapServer::addFunction</a> — Adds one or more functions to handle SOAP requests</li><li><a href="soapserver.addsoapheader.php">SoapServer::addSoapHeader</a> — Add a SOAP header to the response</li><li><a href="soapserver.construct.php">SoapServer::__construct</a> — SoapServer constructor</li><li><a href="soapserver.fault.php">SoapServer::fault</a> — Issue SoapServer fault indicating an error</li><li><a href="soapserver.getfunctions.php">SoapServer::getFunctions</a> — Returns list of defined functions</li><li><a href="soapserver.getlastresponse.php">SoapServer::__getLastResponse</a> — Returns last SOAP response</li><li><a href="soapserver.handle.php">SoapServer::handle</a> — Handles a SOAP request</li><li><a href="soapserver.setclass.php">SoapServer::setClass</a> — Sets the class which handles SOAP requests</li><li><a href="soapserver.setobject.php">SoapServer::setObject</a> — Sets the object which will be used to handle SOAP requests</li><li><a href="soapserver.setpersistence.php">SoapServer::setPersistence</a> — Sets SoapServer persistence mode</li></ul></li><li><a href="class.soapfault.php">SoapFault</a> — The SoapFault class<ul class="chunklist chunklist_book chunklist_children"><li><a href="soapfault.construct.php">SoapFault::__construct</a> — SoapFault constructor</li><li><a href="soapfault.tostring.php">SoapFault::__toString</a> — Obtain a string representation of a SoapFault</li></ul></li><li><a href="class.soapheader.php">SoapHeader</a> — The SoapHeader class<ul class="chunklist chunklist_book chunklist_children"><li><a href="soapheader.construct.php">SoapHeader::__construct</a> — SoapHeader constructor</li></ul></li><li><a href="class.soapparam.php">SoapParam</a> — The SoapParam class<ul class="chunklist chunklist_book chunklist_children"><li><a href="soapparam.construct.php">SoapParam::__construct</a> — SoapParam constructor</li></ul></li><li><a href="class.soapvar.php">SoapVar</a> — The SoapVar class<ul class="chunklist chunklist_book chunklist_children"><li><a href="soapvar.construct.php">SoapVar::__construct</a> — SoapVar constructor</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/soap/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.soap%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.soap&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.soap.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="83409">  <div class="votes">
    <div id="Vu83409">
    <a href="/manual/vote-note.php?id=83409&amp;page=book.soap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83409">
    <a href="/manual/vote-note.php?id=83409&amp;page=book.soap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83409" title="55% like this...">
    17
    </div>
  </div>
  <a href="#83409" class="name">
  <strong class="user"><em>nodkz at mail dot ru</em></strong></a><a class="genanchor" href="#83409"> &para;</a><div class="date" title="2008-05-24 02:25"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83409">
<div class="phpcode"><code><span class="html">PROBLEM (with SOAP extension under PHP5) of transferring object, that contains objects or array of objects. Nested object would not transfer.<br /><br />SOLUTION:<br />This class was developed by trial and error by me. So this 23 lines of code for most developers writing under PHP5 solves fate of using SOAP extension.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />According to specific of organization process of SOAP class in PHP5, we must wrap up complex objects in SoapVar class. Otherwise objects would not be encoded properly and could not be loaded on remote SOAP handler.<br /><br />Function "getAsSoap" call for encoding object for transmission. After encoding it can be properly transmitted.<br />*/<br /></span><span class="keyword">abstract class </span><span class="default">SOAPable </span><span class="keyword">{<br />    public function </span><span class="default">getAsSOAP</span><span class="keyword">() {<br />        foreach(</span><span class="default">$this </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;&amp;</span><span class="default">$value</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">prepareSOAPrecursive</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">);<br />        }<br />        return </span><span class="default">$this</span><span class="keyword">;<br />    }<br /><br />    private function </span><span class="default">prepareSOAPrecursive</span><span class="keyword">(&amp;</span><span class="default">$element</span><span class="keyword">) {<br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">)) {<br />            foreach(</span><span class="default">$element </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;&amp;</span><span class="default">$val</span><span class="keyword">) {<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">prepareSOAPrecursive</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">);<br />            }<br />            </span><span class="default">$element</span><span class="keyword">=new </span><span class="default">SoapVar</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">,</span><span class="default">SOAP_ENC_ARRAY</span><span class="keyword">);<br />        }elseif(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">)) {<br />            if(</span><span class="default">$element </span><span class="keyword">instanceof </span><span class="default">SOAPable</span><span class="keyword">) {<br />                </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">getAsSOAP</span><span class="keyword">();<br />            }<br />            </span><span class="default">$element</span><span class="keyword">=new </span><span class="default">SoapVar</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">,</span><span class="default">SOAP_ENC_OBJECT</span><span class="keyword">);<br />        }<br />    }<br />}<br /><br /></span><span class="comment">// ------------------------------------------<br />//  ABSTRACT EXAMPLE<br />// ------------------------------------------<br /><br /></span><span class="keyword">class </span><span class="default">PersonList </span><span class="keyword">extends </span><span class="default">SOAPable </span><span class="keyword">{<br />  protected </span><span class="default">$ArrayOfPerson</span><span class="keyword">; </span><span class="comment">// variable MUST be protected or public!<br /></span><span class="keyword">}<br /><br />class </span><span class="default">Person </span><span class="keyword">extends </span><span class="default">SOAPable </span><span class="keyword">{<br />   </span><span class="comment">//any data<br /></span><span class="keyword">} <br /><br /></span><span class="default">$client</span><span class="keyword">=new </span><span class="default">SoapClient</span><span class="keyword">(</span><span class="string">"test.wsdl"</span><span class="keyword">, array( </span><span class="string">'soap_version'</span><span class="keyword">=&gt;</span><span class="default">SOAP_1_2</span><span class="keyword">, </span><span class="string">'trace'</span><span class="keyword">=&gt;</span><span class="default">1</span><span class="keyword">, </span><span class="string">'classmap' </span><span class="keyword">=&gt; array(</span><span class="string">'Person' </span><span class="keyword">=&gt; </span><span class="string">"Person"</span><span class="keyword">, </span><span class="string">'PersonList' </span><span class="keyword">=&gt; </span><span class="string">"PersonList"</span><span class="keyword">)  ));<br /><br /></span><span class="default">$PersonList</span><span class="keyword">=new </span><span class="default">PersonList</span><span class="keyword">;<br /><br /></span><span class="comment">// some actions<br /><br /></span><span class="default">$PersonList</span><span class="keyword">-&gt;</span><span class="default">getAsSOAP</span><span class="keyword">();<br /><br /></span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">someMethod</span><span class="keyword">(</span><span class="default">$PersonList</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />So every class, which will transfer via SOAP, must be extends from class SOAPable.  <br />As you can see, in code above, function prepareSOAPrecursive search another nested objects in parent object or in arrays, and if does it, tries call function getAsSOAP() for preparation of nested objects, after that simply wrap up via SoapVar class.<br /><br />So in code before transmitting simply call $obj-&gt;getAsSOAP()</span></code></div>
  </div>
 </div>
  <div class="note" id="90379">  <div class="votes">
    <div id="Vu90379">
    <a href="/manual/vote-note.php?id=90379&amp;page=book.soap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90379">
    <a href="/manual/vote-note.php?id=90379&amp;page=book.soap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90379" title="51% like this...">
    1
    </div>
  </div>
  <a href="#90379" class="name">
  <strong class="user"><em>Raphal Gertz</em></strong></a><a class="genanchor" href="#90379"> &para;</a><div class="date" title="2009-04-18 09:50"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90379">
<div class="phpcode"><code><span class="html">Juste a note to avoid wasting time on php-soap protocol and format support.<br /><br />Until php 5.2.9 (at least) the soap extension is only capable of understanding wsdl 1.0 and 1.1 format.<br /><br />The wsdl 2.0, a W3C recommendation since june 2007, ISN'T supported in php soap extension.<br />(the soap/php_sdl.c source code don't handle wsdl2.0 format)<br /><br />The wsdl 2.0 is juste the 1.2 version renamed because it has substantial differences from WSDL 1.1.<br /><br />The differences between the two format may not be invisible if you don't care a lot.<br /><br />The wsdl 1.0 format structure (see <a href="http://www.w3.org/TR/wsdl" rel="nofollow" target="_blank">http://www.w3.org/TR/wsdl</a>) :<br />&lt;definitions ...&gt;<br />    &lt;types ...&gt;<br />    &lt;/types&gt;<br />    &lt;message ...&gt;<br />        &lt;part ...&gt;<br />    &lt;/message&gt;<br />    &lt;portType ...&gt;<br />        &lt;operation ...&gt;<br />            &lt;input ... /&gt;<br />            &lt;output ... /&gt;<br />            &lt;fault ... /&gt;<br />        &lt;/operation&gt;<br />    &lt;/portType&gt;<br />    &lt;binding ...&gt;<br />        &lt;operation ...&gt;<br />            &lt;input ... /&gt;<br />            &lt;output ... /&gt;<br />            &lt;fault ... /&gt;<br />        &lt;/operation&gt;<br />    &lt;/binding&gt;<br />    &lt;service ...&gt;<br />        &lt;port ...&gt;<br />    &lt;/service&gt;<br />&lt;/definitions&gt;<br /><br />And the wsdl 2.0 format structure (see <a href="http://www.w3.org/TR/wsdl20/" rel="nofollow" target="_blank">http://www.w3.org/TR/wsdl20/</a>) :<br />&lt;description ...&gt;<br />    &lt;types ...&gt;<br />    &lt;/types&gt;<br />    &lt;interface ...&gt;<br />        &lt;fault ... /&gt;<br />        &lt;operation ...&gt;<br />            &lt;input ... /&gt;<br />            &lt;output ... /&gt;<br />            &lt;fault ... /&gt;<br />        &lt;/operation&gt;<br />    &lt;/interface&gt;<br />    &lt;binding ...&gt;<br />        &lt;fault ... /&gt;<br />        &lt;operation ...&gt;<br />            &lt;input ... /&gt;<br />            &lt;output ... /&gt;<br />            &lt;fault ... /&gt;<br />        &lt;/operation&gt;<br />    &lt;/binding&gt;<br />    &lt;service ...&gt;<br />        &lt;endpoint ...&gt;<br />    &lt;/service&gt;<br />&lt;/description&gt;<br /><br />The typical error message if you provide a wsdl 2.0 format file :<br />PHP Fatal error:  SOAP-ERROR: Parsing WSDL: Couldn't find &lt;definitions&gt; in 'wsdl/example.wsdl' in /path/client.php on line 9</span></code></div>
  </div>
 </div>
  <div class="note" id="93888">  <div class="votes">
    <div id="Vu93888">
    <a href="/manual/vote-note.php?id=93888&amp;page=book.soap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93888">
    <a href="/manual/vote-note.php?id=93888&amp;page=book.soap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93888" title="50% like this...">
    0
    </div>
  </div>
  <a href="#93888" class="name">
  <strong class="user"><em>moazzam at moazzam-khan dot com</em></strong></a><a class="genanchor" href="#93888"> &para;</a><div class="date" title="2009-10-05 09:37"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom93888">
<div class="phpcode"><code><span class="html">If anyone is trying to use this for accessing Sabre's web services, it won't work. Sabre checks the request header "Content-Type" to see if it is "text/xml" . If it is not text/xml then it sends an error back. <br /><br />You will need to create a socket connection and use that to send the request over.</span></code></div>
  </div>
 </div>
  <div class="note" id="86503">  <div class="votes">
    <div id="Vu86503">
    <a href="/manual/vote-note.php?id=86503&amp;page=book.soap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86503">
    <a href="/manual/vote-note.php?id=86503&amp;page=book.soap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86503" title="50% like this...">
    0
    </div>
  </div>
  <a href="#86503" class="name">
  <strong class="user"><em>Ryan</em></strong></a><a class="genanchor" href="#86503"> &para;</a><div class="date" title="2008-10-22 06:21"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86503">
<div class="phpcode"><code><span class="html">If you are having an issue where SOAP cannot find the functions that are actually there if you view the wsdl file, it's because PHP is caching the wsdl file (for a day at a time). To turn this off, have this line on every script that uses SOAP: ini_set("soap.wsdl_cache_enabled", "0"); to disable the caching feature.</span></code></div>
  </div>
 </div>
  <div class="note" id="96033">  <div class="votes">
    <div id="Vu96033">
    <a href="/manual/vote-note.php?id=96033&amp;page=book.soap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96033">
    <a href="/manual/vote-note.php?id=96033&amp;page=book.soap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96033" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#96033" class="name">
  <strong class="user"><em>stephenlansell at gmail dot com</em></strong></a><a class="genanchor" href="#96033"> &para;</a><div class="date" title="2010-02-03 07:19"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96033">
<div class="phpcode"><code><span class="html">Here is an example of a php client talking to a asmx server:
<br />
<br /><span class="default">&lt;?php
<br />
<br />        $soapClient </span><span class="keyword">= new </span><span class="default">SoapClient</span><span class="keyword">(</span><span class="string">"<a href="https://soapserver.example.com/blahblah.asmx?wsdl" rel="nofollow" target="_blank">https://soapserver.example.com/blahblah.asmx?wsdl</a>"</span><span class="keyword">); 
<br />    
<br />        </span><span class="comment">// Prepare SoapHeader parameters
<br />        </span><span class="default">$sh_param </span><span class="keyword">= array(
<br />                    </span><span class="string">'Username'    </span><span class="keyword">=&gt;    </span><span class="string">'username'</span><span class="keyword">,
<br />                    </span><span class="string">'Password'    </span><span class="keyword">=&gt;    </span><span class="string">'password'</span><span class="keyword">);
<br />        </span><span class="default">$headers </span><span class="keyword">= new </span><span class="default">SoapHeader</span><span class="keyword">(</span><span class="string">'<a href="http://soapserver.example.com/webservices" rel="nofollow" target="_blank">http://soapserver.example.com/webservices</a>'</span><span class="keyword">, </span><span class="string">'UserCredentials'</span><span class="keyword">, </span><span class="default">$sh_param</span><span class="keyword">);
<br />    
<br />        </span><span class="comment">// Prepare Soap Client
<br />        </span><span class="default">$soapClient</span><span class="keyword">-&gt;</span><span class="default">__setSoapHeaders</span><span class="keyword">(array(</span><span class="default">$headers</span><span class="keyword">));
<br />    
<br />        </span><span class="comment">// Setup the RemoteFunction parameters
<br />        </span><span class="default">$ap_param </span><span class="keyword">= array(
<br />                    </span><span class="string">'amount'     </span><span class="keyword">=&gt;    </span><span class="default">$irow</span><span class="keyword">[</span><span class="string">'total_price'</span><span class="keyword">]);
<br />                    
<br />        </span><span class="comment">// Call RemoteFunction ()
<br />        </span><span class="default">$error </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        try {
<br />            </span><span class="default">$info </span><span class="keyword">= </span><span class="default">$soapClient</span><span class="keyword">-&gt;</span><span class="default">__call</span><span class="keyword">(</span><span class="string">"RemoteFunction"</span><span class="keyword">, array(</span><span class="default">$ap_param</span><span class="keyword">));
<br />        } catch (</span><span class="default">SoapFault $fault</span><span class="keyword">) {
<br />            </span><span class="default">$error </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;
<br />            print(</span><span class="string">"
<br />            alert('Sorry, blah returned the following ERROR: "</span><span class="keyword">.</span><span class="default">$fault</span><span class="keyword">-&gt;</span><span class="default">faultcode</span><span class="keyword">.</span><span class="string">"-"</span><span class="keyword">.</span><span class="default">$fault</span><span class="keyword">-&gt;</span><span class="default">faultstring</span><span class="keyword">.</span><span class="string">". We will now take you back to our home page.');
<br />            window.location = 'main.php';
<br />            "</span><span class="keyword">);
<br />        }
<br />        
<br />        if (</span><span class="default">$error </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {        
<br />            </span><span class="default">$auth_num </span><span class="keyword">= </span><span class="default">$info</span><span class="keyword">-&gt;</span><span class="default">RemoteFunctionResult</span><span class="keyword">;
<br />            
<br />            if (</span><span class="default">$auth_num </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) {
<br />                ....
<br />
<br />                </span><span class="comment">// Setup the OtherRemoteFunction() parameters
<br />                </span><span class="default">$at_param </span><span class="keyword">= array(
<br />                            </span><span class="string">'amount'        </span><span class="keyword">=&gt; </span><span class="default">$irow</span><span class="keyword">[</span><span class="string">'total_price'</span><span class="keyword">],
<br />                            </span><span class="string">'description'    </span><span class="keyword">=&gt; </span><span class="default">$description</span><span class="keyword">);
<br />            
<br />                </span><span class="comment">// Call OtherRemoteFunction()
<br />                </span><span class="default">$trans </span><span class="keyword">= </span><span class="default">$soapClient</span><span class="keyword">-&gt;</span><span class="default">__call</span><span class="keyword">(</span><span class="string">"OtherRemoteFunction"</span><span class="keyword">, array(</span><span class="default">$at_param</span><span class="keyword">));
<br />                </span><span class="default">$trans_result </span><span class="keyword">= </span><span class="default">$trans</span><span class="keyword">-&gt;</span><span class="default">OtherRemoteFunctionResult</span><span class="keyword">;
<br />            ....
<br />                } else {
<br />                    </span><span class="comment">// Record the transaction error in the database
<br />                
<br />                // Kill the link to Soap
<br />                </span><span class="keyword">unset(</span><span class="default">$soapClient</span><span class="keyword">);
<br />            }
<br />        }
<br />    }    
<br />}
<br />    
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117956">  <div class="votes">
    <div id="Vu117956">
    <a href="/manual/vote-note.php?id=117956&amp;page=book.soap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117956">
    <a href="/manual/vote-note.php?id=117956&amp;page=book.soap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117956" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#117956" class="name">
  <strong class="user"><em>Luke</em></strong></a><a class="genanchor" href="#117956"> &para;</a><div class="date" title="2015-09-08 07:21"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117956">
<div class="phpcode"><code><span class="html">Was calling an asmx method like $success=$x-&gt;AuthenticateUser($userName,$password) and this was returning me an error.<br /><br />However i changed it and added the userName and password in an array and its now KAWA...</span></code></div>
  </div>
 </div>
  <div class="note" id="108646">  <div class="votes">
    <div id="Vu108646">
    <a href="/manual/vote-note.php?id=108646&amp;page=book.soap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108646">
    <a href="/manual/vote-note.php?id=108646&amp;page=book.soap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108646" title="47% like this...">
    -4
    </div>
  </div>
  <a href="#108646" class="name">
  <strong class="user"><em>rafinskipg at gmail dot com</em></strong></a><a class="genanchor" href="#108646"> &para;</a><div class="date" title="2012-05-14 02:54"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108646">
<div class="phpcode"><code><span class="html">Support for MTOM addign this code to your project:<br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">class </span><span class="default">MySoapClient </span><span class="keyword">extends </span><span class="default">SoapClient<br /></span><span class="keyword">{<br />    public function </span><span class="default">__doRequest</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">, </span><span class="default">$action</span><span class="keyword">, </span><span class="default">$version</span><span class="keyword">, </span><span class="default">$one_way </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />    {<br />        </span><span class="default">$response </span><span class="keyword">= </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__doRequest</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">, </span><span class="default">$action</span><span class="keyword">, </span><span class="default">$version</span><span class="keyword">, </span><span class="default">$one_way</span><span class="keyword">);<br />        </span><span class="comment">// parse $response, extract the multipart messages and so on<br />        <br />        //this part removes stuff<br />        </span><span class="default">$start</span><span class="keyword">=</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$response</span><span class="keyword">,</span><span class="string">'&lt;?xml'</span><span class="keyword">);<br />        </span><span class="default">$end</span><span class="keyword">=</span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">$response</span><span class="keyword">,</span><span class="string">'&gt;'</span><span class="keyword">);    <br />        </span><span class="default">$response_string</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$response</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$end</span><span class="keyword">-</span><span class="default">$start</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);<br />        return(</span><span class="default">$response_string</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Then you can do this <br /><span class="default">&lt;?php<br />  </span><span class="keyword">new </span><span class="default">MySoapClient</span><span class="keyword">(</span><span class="default">$wsdl_url</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.soap&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.soap.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.webservice.php">Web Services</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.oauth.php" title="OAuth">OAuth</a>
                        </li>
                                                <li class="current">
                            <a href="book.soap.php" title="SOAP">SOAP</a>
                        </li>
                                                <li class="">
                            <a href="book.yar.php" title="Yar">Yar</a>
                        </li>
                                                <li class="">
                            <a href="book.xmlrpc.php" title="XML-&#8203;RPC">XML-&#8203;RPC</a>
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
