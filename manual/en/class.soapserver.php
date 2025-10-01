<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SoapServer - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.soapserver.php">
 <link rel="shorturl" href="https://www.php.net/soapserver">
 <link rel="alternate" href="https://www.php.net/soapserver" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.soap.php">
 <link rel="prev" href="https://www.php.net/manual/en/soapclient.soapcall.php">
 <link rel="next" href="https://www.php.net/manual/en/soapserver.addfunction.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.soapserver.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.soapserver.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.soapserver.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.soapserver.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.soapserver.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.soapserver.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.soapserver.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.soapserver.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.soapserver.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.soapserver.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.soapserver.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SoapServer class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SoapServer - Manual" />
<meta name="twitter:description" content="The SoapServer class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SoapServer - Manual" />
<meta itemprop="description" content="The SoapServer class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SoapServer class" />

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
        <a href="soapserver.addfunction.php">
          SoapServer::addFunction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="soapclient.soapcall.php">
          &laquo; SoapClient::__soapCall        </a>
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
            <option value='en/class.soapserver.php' selected="selected">English</option>
            <option value='de/class.soapserver.php'>German</option>
            <option value='es/class.soapserver.php'>Spanish</option>
            <option value='fr/class.soapserver.php'>French</option>
            <option value='it/class.soapserver.php'>Italian</option>
            <option value='ja/class.soapserver.php'>Japanese</option>
            <option value='pt_BR/class.soapserver.php'>Brazilian Portuguese</option>
            <option value='ru/class.soapserver.php'>Russian</option>
            <option value='tr/class.soapserver.php'>Turkish</option>
            <option value='uk/class.soapserver.php'>Ukrainian</option>
            <option value='zh/class.soapserver.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.soapserver" class="reference">

 <h1 class="title">The SoapServer class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>


  <div class="section" id="soapserver.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The SoapServer class provides a server for the <a href="http://www.w3.org/TR/soap11/" class="link external">&raquo;&nbsp;SOAP 1.1</a>
    and <a href="http://www.w3.org/TR/soap12/" class="link external">&raquo;&nbsp;SOAP 1.2</a> protocols. It can be
    used with or without a WSDL service description.
   </p>
  </div>


  <div class="section" id="soapserver.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">SoapServer</strong></strong>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.soapfault.php" class="type SoapFault">SoapFault</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapserver.php#soapserver.props.soap-fault">$<var class="varname">__soap_fault</var></a></var><span class="initializer"> = null</span>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="soapserver.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$wsdl</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapserver.addfunction.php" class="methodname">addFunction</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$functions</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapserver.addsoapheader.php" class="methodname">addSoapHeader</a></span>(<span class="methodparam"><span class="type"><a href="class.soapheader.php" class="type SoapHeader">SoapHeader</a></span> <code class="parameter">$header</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapserver.fault.php" class="methodname">fault</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$code</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$actor</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$details</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code><span class="initializer"> = &quot;&quot;</span></span><br>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapserver.getfunctions.php" class="methodname">getFunctions</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapserver.getlastresponse.php" class="methodname">__getLastResponse</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapserver.handle.php" class="methodname">handle</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$request</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapserver.setclass.php" class="methodname">setClass</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$class</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$args</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapserver.setobject.php" class="methodname">setObject</a></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$object</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapserver.setpersistence.php" class="methodname">setPersistence</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   }</div>

  </div>

  <div class="section" id="soapserver.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="soapserver.props.service"><var class="varname">service</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapserver.props.soap-fault"><var class="varname">__soap_fault</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
   </dl>
  </div>
 </div>

 


















































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="soapserver.addfunction.php">SoapServer::addFunction</a> — Adds one or more functions to handle SOAP requests</li><li><a href="soapserver.addsoapheader.php">SoapServer::addSoapHeader</a> — Add a SOAP header to the response</li><li><a href="soapserver.construct.php">SoapServer::__construct</a> — SoapServer constructor</li><li><a href="soapserver.fault.php">SoapServer::fault</a> — Issue SoapServer fault indicating an error</li><li><a href="soapserver.getfunctions.php">SoapServer::getFunctions</a> — Returns list of defined functions</li><li><a href="soapserver.getlastresponse.php">SoapServer::__getLastResponse</a> — Returns last SOAP response</li><li><a href="soapserver.handle.php">SoapServer::handle</a> — Handles a SOAP request</li><li><a href="soapserver.setclass.php">SoapServer::setClass</a> — Sets the class which handles SOAP requests</li><li><a href="soapserver.setobject.php">SoapServer::setObject</a> — Sets the object which will be used to handle SOAP requests</li><li><a href="soapserver.setpersistence.php">SoapServer::setPersistence</a> — Sets SoapServer persistence mode</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/soap/soapserver.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.soapserver%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.soapserver&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.soapserver.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="105448">  <div class="votes">
    <div id="Vu105448">
    <a href="/manual/vote-note.php?id=105448&amp;page=class.soapserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105448">
    <a href="/manual/vote-note.php?id=105448&amp;page=class.soapserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105448" title="59% like this...">
    28
    </div>
  </div>
  <a href="#105448" class="name">
  <strong class="user"><em>php1221 at klox dot net</em></strong></a><a class="genanchor" href="#105448"> &para;</a><div class="date" title="2011-08-18 01:39"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105448">
<div class="phpcode"><code><span class="html">While there are plenty of mentions online that SoapServer doesn't support SOAP Headers, this isn't true.
<br />
<br />In your class, if you declare a function with the name of the header, the function will be called when that header is received.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">MySoapService </span><span class="keyword">{
<br />  private </span><span class="default">$user_is_valid</span><span class="keyword">;
<br />
<br />  function </span><span class="default">MyHeader</span><span class="keyword">(</span><span class="default">$header</span><span class="keyword">) {
<br />    if ((isset(</span><span class="default">$header</span><span class="keyword">-&gt;</span><span class="default">Username</span><span class="keyword">)) &amp;&amp; (isset(</span><span class="default">$header</span><span class="keyword">-&gt;</span><span class="default">Password</span><span class="keyword">))) {
<br />      if (</span><span class="default">ValidateUser</span><span class="keyword">(</span><span class="default">$header</span><span class="keyword">-&gt;</span><span class="default">Username</span><span class="keyword">, </span><span class="default">$header</span><span class="keyword">-&gt;</span><span class="default">Password</span><span class="keyword">)) {
<br />        </span><span class="default">$user_is_valid </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;
<br />      }
<br />    }
<br />  }
<br />
<br />  function </span><span class="default">MySoapRequest</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">) {
<br />    if (</span><span class="default">$user_is_valid</span><span class="keyword">) {
<br />      </span><span class="comment">// process request
<br />    </span><span class="keyword">}
<br />    else {
<br />      throw new </span><span class="default">MyFault</span><span class="keyword">(</span><span class="string">"MySoapRequest"</span><span class="keyword">, </span><span class="string">"User not valid."</span><span class="keyword">);
<br />    }
<br />  }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123592">  <div class="votes">
    <div id="Vu123592">
    <a href="/manual/vote-note.php?id=123592&amp;page=class.soapserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123592">
    <a href="/manual/vote-note.php?id=123592&amp;page=class.soapserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123592" title="66% like this...">
    10
    </div>
  </div>
  <a href="#123592" class="name">
  <strong class="user"><em>mail at borisd dot ru</em></strong></a><a class="genanchor" href="#123592"> &para;</a><div class="date" title="2019-02-08 12:43"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123592">
<div class="phpcode"><code><span class="html">If you want to run dummy SoapServer as a daemon for tests on linux, you need to:<br /><br />1. Set up location "localhost:12312/soapServer.php" in your wsdl like:<br /><br />&lt;wsdl:service name="ServiceName"&gt;<br />        &lt;wsdl:port name="ServiceNamePort" binding="tns:ServiceNameBinding"&gt;<br />            &lt;soap:address location="<a href="http://localhost:12312/soapServer.php" rel="nofollow" target="_blank">http://localhost:12312/soapServer.php</a>" /&gt;<br />        &lt;/wsdl:port&gt;<br />&lt;/wsdl:service&gt;<br /><br />2. Write your test server like:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />  * Server<br />  */<br /></span><span class="keyword">class </span><span class="default">TestSoapServer<br /></span><span class="keyword">{<br />    public function </span><span class="default">getMessage</span><span class="keyword">()<br />    {<br />        return </span><span class="string">'Hello, World!'</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$options </span><span class="keyword">= [</span><span class="string">'uri' </span><span class="keyword">=&gt; </span><span class="string">'<a href="http://localhost:12312/" rel="nofollow" target="_blank">http://localhost:12312/</a>'</span><span class="keyword">];<br /></span><span class="default">$server </span><span class="keyword">= new </span><span class="default">SoapServer</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);<br /></span><span class="default">$server</span><span class="keyword">-&gt;</span><span class="default">setClass</span><span class="keyword">(</span><span class="string">'TestSoapServer'</span><span class="keyword">);<br /></span><span class="default">$server</span><span class="keyword">-&gt;</span><span class="default">handle</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />3. Run it with `php -S localhost:12312` (in the same folder)<br /><br />Whenever you make a request according to your wsdl, it will end up at your "server".</span></code></div>
  </div>
 </div>
  <div class="note" id="98021">  <div class="votes">
    <div id="Vu98021">
    <a href="/manual/vote-note.php?id=98021&amp;page=class.soapserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98021">
    <a href="/manual/vote-note.php?id=98021&amp;page=class.soapserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98021" title="60% like this...">
    10
    </div>
  </div>
  <a href="#98021" class="name">
  <strong class="user"><em>carlos dot vini at gmail dot com</em></strong></a><a class="genanchor" href="#98021"> &para;</a><div class="date" title="2010-05-20 01:55"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98021">
<div class="phpcode"><code><span class="html">SoapServer does not support WSDL with literal/document. I have a class:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">My_Soap </span><span class="keyword">{
<br />    </span><span class="comment">/**
<br />     * Returns Hello World.
<br />     * 
<br />     * @param string $world
<br />     * @return string
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">getInterAdmins</span><span class="keyword">(</span><span class="default">$world</span><span class="keyword">) {
<br />        return </span><span class="string">'hello' </span><span class="keyword">. </span><span class="default">$world</span><span class="keyword">;
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />To fix this I had to create proxy class:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">My_Soap_LiteralDocumentProxy </span><span class="keyword">{
<br />   public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$methodName</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">) {
<br />       </span><span class="default">$soapClass </span><span class="keyword">= new </span><span class="default">My_Soap</span><span class="keyword">();
<br />       </span><span class="default">$result </span><span class="keyword">= </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">$soapClass</span><span class="keyword">, </span><span class="default">$methodName</span><span class="keyword">),  </span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);
<br />       return array(</span><span class="default">$methodName </span><span class="keyword">. </span><span class="string">'Result' </span><span class="keyword">=&gt; </span><span class="default">$result</span><span class="keyword">);
<br />   }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Now make sure that the WSDL is created using My_Soap. And that the Server is created using My_Soap_LiteralDocumentProxy:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">if (isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'wsdl'</span><span class="keyword">])) {
<br />    </span><span class="default">$wsdl </span><span class="keyword">= new </span><span class="default">Zend_Soap_AutoDiscover</span><span class="keyword">(); </span><span class="comment">// It generates the WSDL
<br />    </span><span class="default">$wsdl</span><span class="keyword">-&gt;</span><span class="default">setOperationBodyStyle</span><span class="keyword">(array(
<br />        </span><span class="string">'use' </span><span class="keyword">=&gt; </span><span class="string">'literal'
<br />    </span><span class="keyword">));
<br />    </span><span class="default">$wsdl</span><span class="keyword">-&gt;</span><span class="default">setBindingStyle</span><span class="keyword">(array(
<br />        </span><span class="string">'style' </span><span class="keyword">=&gt; </span><span class="string">'document'
<br />    </span><span class="keyword">));
<br />    </span><span class="default">$wsdl</span><span class="keyword">-&gt;</span><span class="default">setClass</span><span class="keyword">(</span><span class="string">'My_Soap'</span><span class="keyword">);
<br />    </span><span class="default">$wsdl</span><span class="keyword">-&gt;</span><span class="default">handle</span><span class="keyword">();
<br />} else {
<br />    </span><span class="default">$server </span><span class="keyword">= new </span><span class="default">Zend_Soap_Server</span><span class="keyword">(</span><span class="string">'<a href="http://localhost/something/webservice.php?wsdl" rel="nofollow" target="_blank">http://localhost/something/webservice.php?wsdl</a>'</span><span class="keyword">);
<br />    </span><span class="default">$server</span><span class="keyword">-&gt;</span><span class="default">setClass</span><span class="keyword">(</span><span class="string">'My_Soap_LiteralDocumentProxy'</span><span class="keyword">);
<br />    </span><span class="default">$server</span><span class="keyword">-&gt;</span><span class="default">handle</span><span class="keyword">();
<br />}
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116014">  <div class="votes">
    <div id="Vu116014">
    <a href="/manual/vote-note.php?id=116014&amp;page=class.soapserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116014">
    <a href="/manual/vote-note.php?id=116014&amp;page=class.soapserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116014" title="58% like this...">
    8
    </div>
  </div>
  <a href="#116014" class="name">
  <strong class="user"><em>softontherocks at gmail dot com</em></strong></a><a class="genanchor" href="#116014"> &para;</a><div class="date" title="2014-10-29 06:20"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116014">
<div class="phpcode"><code><span class="html">I posted in this URL <a href="http://softontherocks.blogspot.com/2014/02/web-service-soap-con-php.html" rel="nofollow" target="_blank">http://softontherocks.blogspot.com/2014/02/web-service-soap-con-php.html</a> a full example of a nusoap web service.<br /><br />There is defined the server and the cliente who calls the web service.<br /><br />I hope it would be useful for you.</span></code></div>
  </div>
 </div>
  <div class="note" id="95309">  <div class="votes">
    <div id="Vu95309">
    <a href="/manual/vote-note.php?id=95309&amp;page=class.soapserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95309">
    <a href="/manual/vote-note.php?id=95309&amp;page=class.soapserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95309" title="53% like this...">
    2
    </div>
  </div>
  <a href="#95309" class="name">
  <strong class="user"><em>dsubar at interna dot com</em></strong></a><a class="genanchor" href="#95309"> &para;</a><div class="date" title="2009-12-25 09:49"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95309">
<div class="phpcode"><code><span class="html">Do not put a SoapServer and a SoapClient in the same PHP file. This seems to cause arbitrary behavior. On the PHP interpreter in Eclipse, everything worked fine. Under MAMP, I got an undocumented error. In moving the client from the same file as the server, everything worked fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="113210">  <div class="votes">
    <div id="Vu113210">
    <a href="/manual/vote-note.php?id=113210&amp;page=class.soapserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113210">
    <a href="/manual/vote-note.php?id=113210&amp;page=class.soapserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113210" title="50% like this...">
    0
    </div>
  </div>
  <a href="#113210" class="name">
  <strong class="user"><em>s at dumdeedum dot com</em></strong></a><a class="genanchor" href="#113210"> &para;</a><div class="date" title="2013-09-12 05:32"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113210">
<div class="phpcode"><code><span class="html">I was running PHP 5.3.2 and couldn't for the life of me get SOAP headers to work, no matter how carefully I built my class/wsdl/client.  What finally fixed it was updating to the latest PHP.  No idea if there was a bug somewhere or what, but it's never a bad idea to stay current and it might save you weeks of frustration!</span></code></div>
  </div>
 </div>
  <div class="note" id="101979">  <div class="votes">
    <div id="Vu101979">
    <a href="/manual/vote-note.php?id=101979&amp;page=class.soapserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101979">
    <a href="/manual/vote-note.php?id=101979&amp;page=class.soapserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101979" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#101979" class="name">
  <strong class="user"><em>hawky83 at googlemail dot com</em></strong></a><a class="genanchor" href="#101979"> &para;</a><div class="date" title="2011-01-21 02:46"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101979">
<div class="phpcode"><code><span class="html">Another simple example for SOAP_SERVER with errorhandling an params and wsdl:
<br />
<br />SERVER (soap_all_srv.php):
<br />
<br /><span class="default">&lt;?php 
<br /></span><span class="comment">// PEAR::SOAP einbinden
<br /></span><span class="keyword">require_once </span><span class="string">"SOAP/Server.php"</span><span class="keyword">;
<br /></span><span class="default">$skiptrace </span><span class="keyword">=&amp; </span><span class="default">PEAR</span><span class="keyword">::</span><span class="default">getStaticProperty</span><span class="keyword">(</span><span class="string">'PEAR_Error'</span><span class="keyword">, </span><span class="string">'skiptrace'</span><span class="keyword">);
<br /></span><span class="default">$skiptrace </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;
<br />
<br /></span><span class="comment">// Service-Class
<br /></span><span class="keyword">class </span><span class="default">mytimeserv </span><span class="keyword">{
<br />
<br />  </span><span class="comment">// __dispatch_map
<br />  </span><span class="keyword">public </span><span class="default">$__dispatch_map </span><span class="keyword">= array ();
<br />  
<br />  </span><span class="comment">// In/Out param -&gt; __dispatch_map
<br />  </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">() {
<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__dispatch_map</span><span class="keyword">[</span><span class="string">"now"</span><span class="keyword">] =
<br />      array (</span><span class="string">"in" </span><span class="keyword">=&gt; array(</span><span class="string">"format" </span><span class="keyword">=&gt; </span><span class="string">"string"</span><span class="keyword">),
<br />             </span><span class="string">"out" </span><span class="keyword">=&gt; array(</span><span class="string">"time" </span><span class="keyword">=&gt; </span><span class="string">"string"</span><span class="keyword">));
<br />  }
<br />  
<br />  </span><span class="comment">// get back __dispatch_map in __dispatch
<br />  </span><span class="keyword">public function </span><span class="default">__dispatch</span><span class="keyword">(</span><span class="default">$methodname</span><span class="keyword">) {
<br />  
<br />    if (isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__dispatch_map</span><span class="keyword">[</span><span class="default">$methodname</span><span class="keyword">])) {
<br />      return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__dispatch_map</span><span class="keyword">[</span><span class="default">$methodname</span><span class="keyword">];
<br />    }
<br />    
<br />    return </span><span class="default">NULL</span><span class="keyword">;
<br />  }
<br />  
<br />  </span><span class="comment">// servicemthod with parameters
<br />  </span><span class="keyword">function </span><span class="default">now </span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">) {
<br />  
<br />    </span><span class="comment">// formaterror?
<br />    </span><span class="keyword">if ((</span><span class="default">$format </span><span class="keyword">== </span><span class="default">null</span><span class="keyword">) || (</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">) == </span><span class="string">""</span><span class="keyword">)) {
<br />    
<br />      </span><span class="comment">// send errormessage
<br />      </span><span class="keyword">return new </span><span class="default">SOAP_Fault</span><span class="keyword">(</span><span class="string">"Kein Parameter angegeben"</span><span class="keyword">,</span><span class="string">"0815"</span><span class="keyword">, </span><span class="string">"Client"</span><span class="keyword">);
<br />    }
<br />    
<br />    </span><span class="default">date_default_timezone_set</span><span class="keyword">(</span><span class="string">'Europe/Berlin'</span><span class="keyword">);
<br />    
<br />    </span><span class="default">$time </span><span class="keyword">= </span><span class="default">date </span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">);
<br />    
<br />    </span><span class="comment">// return SOAP-Obj.
<br />    </span><span class="keyword">return (new </span><span class="default">SOAP_Value</span><span class="keyword">(</span><span class="string">'time'</span><span class="keyword">,</span><span class="string">'string'</span><span class="keyword">, </span><span class="default">$time</span><span class="keyword">));
<br />  }       
<br />}
<br />
<br /></span><span class="comment">// service-class
<br /></span><span class="default">$service </span><span class="keyword">= new </span><span class="default">mytimeserv</span><span class="keyword">();
<br />
<br /></span><span class="comment">// server
<br /></span><span class="default">$ss </span><span class="keyword">= new </span><span class="default">SOAP_Server</span><span class="keyword">();
<br />
<br /></span><span class="comment">// add service with name
<br /></span><span class="default">$ss</span><span class="keyword">-&gt;</span><span class="default">addObjectMap </span><span class="keyword">(&amp;</span><span class="default">$service</span><span class="keyword">,</span><span class="string">"urn:mytimeserv"</span><span class="keyword">);
<br />
<br /></span><span class="comment">// service or wsdl
<br /></span><span class="keyword">if (isset(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">"REQUEST_METHOD"</span><span class="keyword">])&amp;&amp; </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">"REQUEST_METHOD"</span><span class="keyword">] == </span><span class="string">"POST"</span><span class="keyword">) {
<br />
<br />    </span><span class="comment">// postdata -&gt; service
<br />    </span><span class="default">$ss</span><span class="keyword">-&gt;</span><span class="default">service </span><span class="keyword">(</span><span class="default">$HTTP_RAW_POST_DATA</span><span class="keyword">);
<br />    
<br />} else {
<br />
<br />  </span><span class="comment">// wsdl-param in url
<br />  </span><span class="keyword">if (isset(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'QUERY_STRING'</span><span class="keyword">]) &amp;&amp; </span><span class="default">strcasecmp</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'QUERY_STRING'</span><span class="keyword">],</span><span class="string">'wsdl'</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">) {
<br />    
<br />    </span><span class="comment">// DISCO_Server for WSDL 
<br />    </span><span class="keyword">require_once </span><span class="string">"SOAP/Disco.php"</span><span class="keyword">;
<br />    </span><span class="default">$disco </span><span class="keyword">= new </span><span class="default">SOAP_DISCO_Server </span><span class="keyword">(</span><span class="default">$ss</span><span class="keyword">,</span><span class="string">"mytimeserv"</span><span class="keyword">,</span><span class="string">"My Time Service"</span><span class="keyword">);
<br />    
<br />    </span><span class="comment">// set HTML-Header 
<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: text/xml"</span><span class="keyword">);
<br />    
<br />    </span><span class="comment">// return wsdl
<br />    </span><span class="keyword">print </span><span class="default">$disco</span><span class="keyword">-&gt;</span><span class="default">getWSDL </span><span class="keyword">();
<br />  }
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />CLIENT (soap_all_client.php) (for wsdl: <a href="http://example.com/soap_all_srv.php?wsdl" rel="nofollow" target="_blank">http://example.com/soap_all_srv.php?wsdl</a>):
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">require_once </span><span class="string">"SOAP/Client.php"</span><span class="keyword">;
<br />
<br /></span><span class="comment">// SOAP/WSDL
<br /></span><span class="default">$sw </span><span class="keyword">= new </span><span class="default">SOAP_WSDL </span><span class="keyword">(</span><span class="string">"<a href="http://example.com/soap_all_srv.php?wsdl" rel="nofollow" target="_blank">http://example.com/soap_all_srv.php?wsdl</a>"</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Proxy-Obj.
<br /></span><span class="default">$proxy </span><span class="keyword">= </span><span class="default">$sw</span><span class="keyword">-&gt;</span><span class="default">getProxy </span><span class="keyword">();
<br />
<br /></span><span class="comment">// servicemthod
<br /></span><span class="default">$erg </span><span class="keyword">= </span><span class="default">$proxy</span><span class="keyword">-&gt;</span><span class="default">now </span><span class="keyword">(</span><span class="string">"H:i:s"</span><span class="keyword">);
<br />
<br /></span><span class="comment">// return
<br /></span><span class="keyword">print </span><span class="default">$erg</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.soapserver&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.soapserver.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
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
                                                <li class="">
                            <a href="soap.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ref.soap.php" title="SOAP Functions">SOAP Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.soapclient.php" title="SoapClient">SoapClient</a>
                        </li>
                                                <li class="current">
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
