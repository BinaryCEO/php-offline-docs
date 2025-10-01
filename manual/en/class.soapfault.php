<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SoapFault - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.soapfault.php">
 <link rel="shorturl" href="https://www.php.net/soapfault">
 <link rel="alternate" href="https://www.php.net/soapfault" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.soap.php">
 <link rel="prev" href="https://www.php.net/manual/en/soapserver.setpersistence.php">
 <link rel="next" href="https://www.php.net/manual/en/soapfault.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.soapfault.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.soapfault.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.soapfault.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.soapfault.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.soapfault.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.soapfault.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.soapfault.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.soapfault.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.soapfault.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.soapfault.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.soapfault.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SoapFault class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SoapFault - Manual" />
<meta name="twitter:description" content="The SoapFault class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SoapFault - Manual" />
<meta itemprop="description" content="The SoapFault class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SoapFault class" />

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
        <a href="soapfault.construct.php">
          SoapFault::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="soapserver.setpersistence.php">
          &laquo; SoapServer::setPersistence        </a>
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
            <option value='en/class.soapfault.php' selected="selected">English</option>
            <option value='de/class.soapfault.php'>German</option>
            <option value='es/class.soapfault.php'>Spanish</option>
            <option value='fr/class.soapfault.php'>French</option>
            <option value='it/class.soapfault.php'>Italian</option>
            <option value='ja/class.soapfault.php'>Japanese</option>
            <option value='pt_BR/class.soapfault.php'>Brazilian Portuguese</option>
            <option value='ru/class.soapfault.php'>Russian</option>
            <option value='tr/class.soapfault.php'>Turkish</option>
            <option value='uk/class.soapfault.php'>Ukrainian</option>
            <option value='zh/class.soapfault.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.soapfault" class="reference">

 <h1 class="title">The SoapFault class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>


  <div class="section" id="soapfault.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Represents a SOAP fault.
   </p>
  </div>


  <div class="section" id="soapfault.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="exceptionname">SoapFault</strong></strong>
    

    
     <span class="modifier">extends</span>
      <a href="class.exception.php" class="classname">Exception</a>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.soapfault.php#soapfault.props.faultstring">$<var class="varname">faultstring</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapfault.php#soapfault.props.faultcode">$<var class="varname">faultcode</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapfault.php#soapfault.props.faultcodens">$<var class="varname">faultcodens</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapfault.php#soapfault.props.faultactor">$<var class="varname">faultactor</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span>
      <var class="varname"><a href="class.soapfault.php#soapfault.props.detail">$<var class="varname">detail</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapfault.php#soapfault.props.name">$<var class="varname">_name</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span>
      <var class="varname"><a href="class.soapfault.php#soapfault.props.headerfault">$<var class="varname">headerfault</var></a></var><span class="initializer"> = null</span>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited properties */</div>
    <div class="fieldsynopsis"><span class="modifier">protected</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.exception.php#exception.props.message">$<var class="varname">message</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div>
<div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.exception.php#exception.props.string">$<var class="varname">string</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div>
<div class="fieldsynopsis"><span class="modifier">protected</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.exception.php#exception.props.code">$<var class="varname">code</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">protected</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.exception.php#exception.props.file">$<var class="varname">file</var></a></var><span class="initializer"> = &quot;&quot;</span>;</div>
<div class="fieldsynopsis"><span class="modifier">protected</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.exception.php#exception.props.line">$<var class="varname">line</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
      <var class="varname"><a href="class.exception.php#exception.props.trace">$<var class="varname">trace</var></a></var><span class="initializer"> = []</span>;</div>
<div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.throwable.php" class="type Throwable">Throwable</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.exception.php#exception.props.previous">$<var class="varname">previous</var></a></var><span class="initializer"> = null</span>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="soapfault.construct.php" class="methodname">__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$code</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$actor</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$details</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$name</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$headerFault</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapfault.tostring.php" class="methodname">__toString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="exception.getmessage.php" class="methodname">Exception::getMessage</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="exception.getprevious.php" class="methodname">Exception::getPrevious</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.throwable.php" class="type Throwable">Throwable</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="exception.getcode.php" class="methodname">Exception::getCode</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="exception.getfile.php" class="methodname">Exception::getFile</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="exception.getline.php" class="methodname">Exception::getLine</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="exception.gettrace.php" class="methodname">Exception::getTrace</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="exception.gettraceasstring.php" class="methodname">Exception::getTraceAsString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="exception.tostring.php" class="methodname">Exception::__toString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">private</span> <span class="methodname"><a href="exception.clone.php" class="methodname">Exception::__clone</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   }</div>

  </div>

  <div class="section" id="soapfault.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="soapfault.props.name"><var class="varname">_name</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapfault.props.detail"><var class="varname">detail</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapfault.props.faultactor"><var class="varname">faultactor</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapfault.props.faultcode"><var class="varname">faultcode</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapfault.props.faultcodens"><var class="varname">faultcodens</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapfault.props.faultstring"><var class="varname">faultstring</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapfault.props.headerfault"><var class="varname">headerfault</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
   </dl>
  </div>
 </div>

 










<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="soapfault.construct.php">SoapFault::__construct</a> — SoapFault constructor</li><li><a href="soapfault.tostring.php">SoapFault::__toString</a> — Obtain a string representation of a SoapFault</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/soap/soapfault.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.soapfault%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.soapfault&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.soapfault.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="94353">  <div class="votes">
    <div id="Vu94353">
    <a href="/manual/vote-note.php?id=94353&amp;page=class.soapfault&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94353">
    <a href="/manual/vote-note.php?id=94353&amp;page=class.soapfault&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94353" title="92% like this...">
    44
    </div>
  </div>
  <a href="#94353" class="name">
  <strong class="user"><em>dmitry dot koterov at gmail dot com</em></strong></a><a class="genanchor" href="#94353"> &para;</a><div class="date" title="2009-10-29 02:21"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94353">
<div class="phpcode"><code><span class="html">You may use undocumented and invisible property $e-&gt;faultcode to access string version of $code. Because standard $e-&gt;getCode() does not work:
<br />
<br /><span class="default">&lt;?php
<br />$e </span><span class="keyword">= new </span><span class="default">SoapFault</span><span class="keyword">(</span><span class="string">"test"</span><span class="keyword">, </span><span class="string">"msg"</span><span class="keyword">);
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getCode</span><span class="keyword">()); </span><span class="comment">// prints "0"
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">faultcode</span><span class="keyword">); </span><span class="comment">// prints "test"
<br /></span><span class="default">?&gt;
<br /></span>
<br />Also you may use namespaced fault codes:
<br />
<br /><span class="default">&lt;?php
<br />$e </span><span class="keyword">= new </span><span class="default">SoapFault</span><span class="keyword">(array(</span><span class="string">"namespace"</span><span class="keyword">, </span><span class="string">"test"</span><span class="keyword">), </span><span class="string">"msg"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />- see ext/soap/soap.php, PHP_METHOD(SoapFault, SoapFault). To access the namespace, use $e-&gt;faultcodens</span></code></div>
  </div>
 </div>
  <div class="note" id="97875">  <div class="votes">
    <div id="Vu97875">
    <a href="/manual/vote-note.php?id=97875&amp;page=class.soapfault&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97875">
    <a href="/manual/vote-note.php?id=97875&amp;page=class.soapfault&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97875" title="68% like this...">
    9
    </div>
  </div>
  <a href="#97875" class="name">
  <strong class="user"><em>chris AT cmbuckley DOT co DOT uk</em></strong></a><a class="genanchor" href="#97875"> &para;</a><div class="date" title="2010-05-13 03:53"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97875">
<div class="phpcode"><code><span class="html">A bit more digging in ext/soap/soap.c and the set_soap_fault function reveals the other undocumented properties from the constructor:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">try {<br />    throw new </span><span class="default">SoapFault</span><span class="keyword">(</span><span class="string">'code'</span><span class="keyword">, </span><span class="string">'string'</span><span class="keyword">, </span><span class="string">'actor'</span><span class="keyword">, </span><span class="string">'detail'</span><span class="keyword">, </span><span class="string">'name'</span><span class="keyword">, </span><span class="string">'header'</span><span class="keyword">);<br />} catch (</span><span class="default">Exception $ex</span><span class="keyword">) {<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$ex</span><span class="keyword">-&gt;</span><span class="default">faultcode</span><span class="keyword">, </span><span class="default">$ex</span><span class="keyword">-&gt;</span><span class="default">faultstring</span><span class="keyword">, </span><span class="default">$ex</span><span class="keyword">-&gt;</span><span class="default">faultactor</span><span class="keyword">, </span><span class="default">$ex</span><span class="keyword">-&gt;</span><span class="default">detail</span><span class="keyword">, </span><span class="default">$ex</span><span class="keyword">-&gt;</span><span class="default">_name</span><span class="keyword">, </span><span class="default">$ex</span><span class="keyword">-&gt;</span><span class="default">headerfault</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110233">  <div class="votes">
    <div id="Vu110233">
    <a href="/manual/vote-note.php?id=110233&amp;page=class.soapfault&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110233">
    <a href="/manual/vote-note.php?id=110233&amp;page=class.soapfault&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110233" title="57% like this...">
    4
    </div>
  </div>
  <a href="#110233" class="name">
  <strong class="user"><em>fbernoldi at gmail dot com</em></strong></a><a class="genanchor" href="#110233"> &para;</a><div class="date" title="2012-10-03 05:46"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110233">
<div class="phpcode"><code><span class="html">Hi all, <br /><br />I've decided to post this since it may be helpful, I've spend a couple of days trying to do this.<br /><br />In order to use wsdl's specified faults with complex types, i.e:<br /><br />WSDL definitions:<br /><br />(xsd:schema namespace, ns1 = target namespace)<br /><br />&lt;xsd:element name="doubleFault"&gt;<br />  &lt;xsd:complexType&gt;<br />    &lt;xsd:sequence&gt;<br />      &lt;xsd:element name="detail1" type="xsd:string"/&gt;<br />      &lt;xsd:element name="detail2" type="xsd:string"/&gt;<br />    &lt;/xsd:sequence&gt;<br />  &lt;/xsd:complexType&gt;<br />&lt;/xsd:element&gt;<br /><br />WSDL messages:<br /><br />&lt;message name="fault_specified"&gt;<br />    &lt;part name="relevant_name" element="ns1:doubleFault"/&gt;<br />&lt;/message&gt;<br /><br />WSDL port type:<br /><br />&lt;portType name="test"&gt;<br />  &lt;operation name="operationTest"&gt;<br />  &lt;input message="ns1:not_relevant_request"/&gt;<br />  &lt;output message="ns1:not_relevant_response"/&gt;<br />  &lt;fault name="FaultSpecified" message="ns1:fault_specified"/&gt;<br />  ....<br />&lt;/portType&gt;<br /><br />You have to specify the response in the detail parameter as an array corresponding the tag names.<br /><br />PHP Code:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">operationTest</span><span class="keyword">(</span><span class="default">$request_param </span><span class="keyword">...) {<br /><br />    </span><span class="comment">// ...<br />    </span><span class="default">$array_details </span><span class="keyword">= array(</span><span class="string">"detail1" </span><span class="keyword">=&gt; </span><span class="string">"Explanation 1"</span><span class="keyword">, </span><span class="string">"detail2" </span><span class="keyword">=&gt; </span><span class="string">"Explanation 2"</span><span class="keyword">);<br />    <br />    return new </span><span class="default">SoapFault</span><span class="keyword">(</span><span class="string">"Server"</span><span class="keyword">, </span><span class="string">"example fault string"</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">$array_details</span><span class="keyword">, </span><span class="string">"FaultSpecified"</span><span class="keyword">);<br /><br />}<br /><br /></span><span class="default">$server </span><span class="keyword">= new </span><span class="default">SOAPServer</span><span class="keyword">(</span><span class="string">"handmade.wsdl"</span><span class="keyword">);<br /></span><span class="default">$server</span><span class="keyword">-&gt;</span><span class="default">addFunction</span><span class="keyword">(</span><span class="string">"operationTest"</span><span class="keyword">);<br /></span><span class="default">$server</span><span class="keyword">-&gt;</span><span class="default">handle</span><span class="keyword">(); <br /><br /></span><span class="default">?&gt;<br /></span><br />that should respond something like this:<br /><br />&lt;SOAP-ENV:Envelope xmlns:SOAP-ENV="<a href="http://schemas.xmlsoap.org/soap/envelope/" rel="nofollow" target="_blank">http://schemas.xmlsoap.org/soap/envelope/</a>" xmlns:ns1="<a href="http://mynamespace" rel="nofollow" target="_blank">http://mynamespace</a>"&gt;<br />   &lt;SOAP-ENV:Body&gt;<br />      &lt;SOAP-ENV:Fault&gt;<br />         &lt;faultcode&gt;SOAP-ENV:Server&lt;/faultcode&gt;<br />         &lt;faultstring&gt;example fault string&lt;/faultstring&gt;<br />         &lt;detail&gt;<br />            &lt;ns1:doubleFault&gt;<br />               &lt;detail1&gt;Explanation 1&lt;/detail1&gt;<br />               &lt;detail2&gt;Explanation 2&lt;/detail2&gt;<br />            &lt;/ns1:doubleFault&gt;<br />         &lt;/detail&gt;<br />      &lt;/SOAP-ENV:Fault&gt;<br />   &lt;/SOAP-ENV:Body&gt;<br />&lt;/SOAP-ENV:Envelope&gt;<br /><br />I Hope it helps,<br />Federico.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.soapfault&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.soapfault.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="class.soapserver.php" title="SoapServer">SoapServer</a>
                        </li>
                                                <li class="current">
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
