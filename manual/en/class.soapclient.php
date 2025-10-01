<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SoapClient - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.soapclient.php">
 <link rel="shorturl" href="https://www.php.net/soapclient">
 <link rel="alternate" href="https://www.php.net/soapclient" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.soap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.use-soap-error-handler.php">
 <link rel="next" href="https://www.php.net/manual/en/soapclient.call.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.soapclient.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.soapclient.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.soapclient.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.soapclient.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.soapclient.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.soapclient.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.soapclient.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.soapclient.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.soapclient.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.soapclient.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.soapclient.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SoapClient class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SoapClient - Manual" />
<meta name="twitter:description" content="The SoapClient class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SoapClient - Manual" />
<meta itemprop="description" content="The SoapClient class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SoapClient class" />

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
        <a href="soapclient.call.php">
          SoapClient::__call &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.use-soap-error-handler.php">
          &laquo; use_soap_error_handler        </a>
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
            <option value='en/class.soapclient.php' selected="selected">English</option>
            <option value='de/class.soapclient.php'>German</option>
            <option value='es/class.soapclient.php'>Spanish</option>
            <option value='fr/class.soapclient.php'>French</option>
            <option value='it/class.soapclient.php'>Italian</option>
            <option value='ja/class.soapclient.php'>Japanese</option>
            <option value='pt_BR/class.soapclient.php'>Brazilian Portuguese</option>
            <option value='ru/class.soapclient.php'>Russian</option>
            <option value='tr/class.soapclient.php'>Turkish</option>
            <option value='uk/class.soapclient.php'>Ukrainian</option>
            <option value='zh/class.soapclient.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.soapclient" class="reference">

 <h1 class="title">The <span class="classname"><a href="class.soapclient.php" class="classname">SoapClient</a></span> class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>


  <div class="section" id="soapclient.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The SoapClient class provides a client for <a href="http://www.w3.org/TR/soap11/" class="link external">&raquo;&nbsp;SOAP 1.1</a>,
    <a href="http://www.w3.org/TR/soap12/" class="link external">&raquo;&nbsp;SOAP 1.2</a> servers.
    It can be used in WSDL or non-WSDL mode.
   </p>
  </div>


  <div class="section" id="soapclient.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">SoapClient</strong></strong>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.uri">$<var class="varname">uri</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.style">$<var class="varname">style</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.use">$<var class="varname">use</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.location">$<var class="varname">location</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.trace">$<var class="varname">trace</var></a></var><span class="initializer"> = false</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.compression">$<var class="varname">compression</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.sdl">$<var class="varname">sdl</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.typemap">$<var class="varname">typemap</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.httpsocket">$<var class="varname">httpsocket</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.httpurl">$<var class="varname">httpurl</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.login">$<var class="varname">_login</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.password">$<var class="varname">_password</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.use-digest">$<var class="varname">_use_digest</var></a></var><span class="initializer"> = false</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.digest">$<var class="varname">_digest</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.proxy-host">$<var class="varname">_proxy_host</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.proxy-port">$<var class="varname">_proxy_port</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.proxy-login">$<var class="varname">_proxy_login</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.proxy-password">$<var class="varname">_proxy_password</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.exceptions">$<var class="varname">_exceptions</var></a></var><span class="initializer"> = true</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.encoding">$<var class="varname">_encoding</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.classmap">$<var class="varname">_classmap</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.features">$<var class="varname">_features</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.connection-timeout">$<var class="varname">_connection_timeout</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.stream-context">$<var class="varname">_stream_context</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.user-agent">$<var class="varname">_user_agent</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.keep-alive">$<var class="varname">_keep_alive</var></a></var><span class="initializer"> = true</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.ssl-method">$<var class="varname">_ssl_method</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.soap-version">$<var class="varname">_soap_version</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.use-proxy">$<var class="varname">_use_proxy</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.cookies">$<var class="varname">_cookies</var></a></var><span class="initializer"> = []</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.default-headers">$<var class="varname">__default_headers</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.soapfault.php" class="type SoapFault">SoapFault</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.soap-fault">$<var class="varname">__soap_fault</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.last-request">$<var class="varname">__last_request</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.last-response">$<var class="varname">__last_response</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.last-request-headers">$<var class="varname">__last_request_headers</var></a></var><span class="initializer"> = null</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">private</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.soapclient.php#soapclient.props.last-response-headers">$<var class="varname">__last_response_headers</var></a></var><span class="initializer"> = null</span>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="soapclient.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$wsdl</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapclient.call.php" class="methodname">__call</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$args</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapclient.dorequest.php" class="methodname">__doRequest</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$request</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$location</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$action</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$version</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$oneWay</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapclient.getcookies.php" class="methodname">__getCookies</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapclient.getfunctions.php" class="methodname">__getFunctions</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapclient.getlastrequest.php" class="methodname">__getLastRequest</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapclient.getlastrequestheaders.php" class="methodname">__getLastRequestHeaders</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapclient.getlastresponse.php" class="methodname">__getLastResponse</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapclient.getlastresponseheaders.php" class="methodname">__getLastResponseHeaders</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapclient.gettypes.php" class="methodname">__getTypes</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapclient.setcookie.php" class="methodname">__setCookie</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$value</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapclient.setlocation.php" class="methodname">__setLocation</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$location</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapclient.setsoapheaders.php" class="methodname">__setSoapHeaders</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.soapheader.php" class="type SoapHeader">SoapHeader</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$headers</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="soapclient.soapcall.php" class="methodname">__soapCall</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$args</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="class.soapheader.php" class="type SoapHeader">SoapHeader</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$inputHeaders</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$outputHeaders</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

   }</div>

  </div>

  <div class="section" id="soapclient.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="soapclient.props.default-headers"><var class="varname">__default_headers</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.last-request"><var class="varname">__last_request</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.last-request-headers"><var class="varname">__last_request_headers</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.last-response"><var class="varname">__last_response</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.last-response-headers"><var class="varname">__last_response_headers</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.soap-fault"><var class="varname">__soap_fault</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.classmap"><var class="varname">_classmap</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.connection-timeout"><var class="varname">_connection_timeout</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.cookies"><var class="varname">_cookies</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.digest"><var class="varname">_digest</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.encoding"><var class="varname">_encoding</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.exceptions"><var class="varname">_exceptions</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.features"><var class="varname">_features</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.keep-alive"><var class="varname">_keep_alive</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.login"><var class="varname">_login</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.password"><var class="varname">_password</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.proxy-host"><var class="varname">_proxy_host</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.proxy-login"><var class="varname">_proxy_login</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.proxy-password"><var class="varname">_proxy_password</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.proxy-port"><var class="varname">_proxy_port</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.soap-version"><var class="varname">_soap_version</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.ssl-method"><var class="varname">_ssl_method</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.stream-context"><var class="varname">_stream_context</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.use-digest"><var class="varname">_use_digest</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.use-proxy"><var class="varname">_use_proxy</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.user-agent"><var class="varname">_user_agent</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.compression"><var class="varname">compression</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.httpsocket"><var class="varname">httpsocket</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.httpurl"><var class="varname">httpurl</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.location"><var class="varname">location</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.sdl"><var class="varname">sdl</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.style"><var class="varname">style</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.trace"><var class="varname">trace</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.typemap"><var class="varname">typemap</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.uri"><var class="varname">uri</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt id="soapclient.props.use"><var class="varname">use</var></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
   </dl>
  </div>
 </div>

 






































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="soapclient.call.php">SoapClient::__call</a> — Calls a SOAP function (deprecated)</li><li><a href="soapclient.construct.php">SoapClient::__construct</a> — SoapClient constructor</li><li><a href="soapclient.dorequest.php">SoapClient::__doRequest</a> — Performs a SOAP request</li><li><a href="soapclient.getcookies.php">SoapClient::__getCookies</a> — Get list of cookies</li><li><a href="soapclient.getfunctions.php">SoapClient::__getFunctions</a> — Returns list of available SOAP functions</li><li><a href="soapclient.getlastrequest.php">SoapClient::__getLastRequest</a> — Returns last SOAP request</li><li><a href="soapclient.getlastrequestheaders.php">SoapClient::__getLastRequestHeaders</a> — Returns the SOAP headers from the last request</li><li><a href="soapclient.getlastresponse.php">SoapClient::__getLastResponse</a> — Returns last SOAP response</li><li><a href="soapclient.getlastresponseheaders.php">SoapClient::__getLastResponseHeaders</a> — Returns the SOAP headers from the last response</li><li><a href="soapclient.gettypes.php">SoapClient::__getTypes</a> — Returns a list of SOAP types</li><li><a href="soapclient.setcookie.php">SoapClient::__setCookie</a> — Defines a cookie for SOAP requests</li><li><a href="soapclient.setlocation.php">SoapClient::__setLocation</a> — Sets the location of the Web service to use</li><li><a href="soapclient.setsoapheaders.php">SoapClient::__setSoapHeaders</a> — Sets SOAP headers for subsequent calls</li><li><a href="soapclient.soapcall.php">SoapClient::__soapCall</a> — Calls a SOAP function</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/soap/soapclient.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.soapclient%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.soapclient&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.soapclient.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="102503">  <div class="votes">
    <div id="Vu102503">
    <a href="/manual/vote-note.php?id=102503&amp;page=class.soapclient&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102503">
    <a href="/manual/vote-note.php?id=102503&amp;page=class.soapclient&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102503" title="52% like this...">
    22
    </div>
  </div>
  <a href="#102503" class="name">
  <strong class="user"><em>hugues at zonereseau dot com</em></strong></a><a class="genanchor" href="#102503"> &para;</a><div class="date" title="2011-02-17 09:17"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102503">
<div class="phpcode"><code><span class="html">When you need to connect to services requiring to send extra header use this method.
<br />
<br />Here how we can to it with PHP and SoapClient
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">exampleChannelAdvisorAuth
<br /></span><span class="keyword">{
<br />    public </span><span class="default">$DeveloperKey</span><span class="keyword">;
<br />    public </span><span class="default">$Password</span><span class="keyword">;
<br />
<br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$pass</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">DeveloperKey </span><span class="keyword">= </span><span class="default">$key</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">Password </span><span class="keyword">= </span><span class="default">$pass</span><span class="keyword">;
<br />    }
<br />}
<br />
<br /></span><span class="default">$devKey        </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br /></span><span class="default">$password    </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br /></span><span class="default">$accountId    </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />
<br /></span><span class="comment">// Create the SoapClient instance
<br /></span><span class="default">$url         </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br /></span><span class="default">$client     </span><span class="keyword">= new </span><span class="default">SoapClient</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, array(</span><span class="string">"trace" </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">"exception" </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">));
<br />
<br /></span><span class="comment">// Create the header
<br /></span><span class="default">$auth         </span><span class="keyword">= new </span><span class="default">ChannelAdvisorAuth</span><span class="keyword">(</span><span class="default">$devKey</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">);
<br /></span><span class="default">$header     </span><span class="keyword">= new </span><span class="default">SoapHeader</span><span class="keyword">(</span><span class="string">"<a href="http://www.example.com/webservices/" rel="nofollow" target="_blank">http://www.example.com/webservices/</a>"</span><span class="keyword">, </span><span class="string">"APICredentials"</span><span class="keyword">, </span><span class="default">$auth</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Call wsdl function
<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">__soapCall</span><span class="keyword">(</span><span class="string">"DeleteMarketplaceAd"</span><span class="keyword">, array(
<br />    </span><span class="string">"DeleteMarketplaceAd" </span><span class="keyword">=&gt; array(
<br />        </span><span class="string">"accountID"        </span><span class="keyword">=&gt; </span><span class="default">$accountId</span><span class="keyword">,
<br />        </span><span class="string">"marketplaceAdID"    </span><span class="keyword">=&gt; </span><span class="string">"9938745"        </span><span class="comment">// The ads ID
<br />    </span><span class="keyword">)
<br />), </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$header</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Echo the result
<br /></span><span class="keyword">echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">).</span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;
<br />if(</span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">DeleteMarketplaceAdResult</span><span class="keyword">-&gt;</span><span class="default">Status </span><span class="keyword">== </span><span class="string">"Success"</span><span class="keyword">)
<br />{
<br />    echo </span><span class="string">"Item deleted!"</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127604">  <div class="votes">
    <div id="Vu127604">
    <a href="/manual/vote-note.php?id=127604&amp;page=class.soapclient&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127604">
    <a href="/manual/vote-note.php?id=127604&amp;page=class.soapclient&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127604" title="61% like this...">
    3
    </div>
  </div>
  <a href="#127604" class="name">
  <strong class="user"><em>spam at kacke dot de</em></strong></a><a class="genanchor" href="#127604"> &para;</a><div class="date" title="2022-09-09 08:46"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127604">
<div class="phpcode"><code><span class="html">In case a soap response returns nodes with the attribute xsi:nil="false", they are currently not processed by php-soapclient.<br /><br />This seems to be a bug (not correct).<br /><br />Workaround:<br /><br />class mySoapClient extends SoapClient {<br />        public function __doRequest($request, $location, $action, $version, $one_way = 0) {<br />        $response = parent::__doRequest($request, $location, $action, $version, $one_way);<br />        $response = str_replace('xsi:nil="false"',"",$response);<br />        return $response;<br />    }    <br />}<br /><br />Took me a day. Hope it can help<br />Toppi</span></code></div>
  </div>
 </div>
  <div class="note" id="115144">  <div class="votes">
    <div id="Vu115144">
    <a href="/manual/vote-note.php?id=115144&amp;page=class.soapclient&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115144">
    <a href="/manual/vote-note.php?id=115144&amp;page=class.soapclient&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115144" title="50% like this...">
    1
    </div>
  </div>
  <a href="#115144" class="name">
  <strong class="user"><em>Stefan</em></strong></a><a class="genanchor" href="#115144"> &para;</a><div class="date" title="2014-06-03 11:04"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115144">
<div class="phpcode"><code><span class="html">There is a known bug with some versions of Xdebug which can cause SoapClient to not throw an exception but instead cause a fatal error. <br /><br />Surround the SoapClient call with xdebug_disable(); and xdebug_enable();  to work around this problem.<br /><br />For reference:<br /><br /><a href="http://bugs.xdebug.org/view.php?id=249" rel="nofollow" target="_blank">http://bugs.xdebug.org/view.php?id=249</a><br /><a href="https://bugs.php.net/bug.php?id=47584" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=47584</a></span></code></div>
  </div>
 </div>
  <div class="note" id="117083">  <div class="votes">
    <div id="Vu117083">
    <a href="/manual/vote-note.php?id=117083&amp;page=class.soapclient&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117083">
    <a href="/manual/vote-note.php?id=117083&amp;page=class.soapclient&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117083" title="50% like this...">
    0
    </div>
  </div>
  <a href="#117083" class="name">
  <strong class="user"><em>info at nospam x valiton x com</em></strong></a><a class="genanchor" href="#117083"> &para;</a><div class="date" title="2015-04-13 08:06"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117083">
<div class="phpcode"><code><span class="html">CAUTION:<br />I had quite a bit of trouble trying to make a request with fopen through a proxy to a secure url.  I kept getting a 400 Bad Request back from the remote host.  It was receiving the proxy url as the SNI host.  In order to get around this I had to explicity set the SNI host to the domain I was trying to reach.  It's apparently the issue outlined in this bug:<br /><br /><a href="https://bugs.php.net/bug.php?id=63519" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=63519</a><br /><br /><span class="default">&lt;?php<br />$domain </span><span class="keyword">= </span><span class="default">parse_url</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">PHP_URL_HOST</span><span class="keyword">);<br /></span><span class="default">$proxy_string </span><span class="keyword">= </span><span class="string">"tcp://" </span><span class="keyword">. </span><span class="default">WP_PROXY_HOST  </span><span class="keyword">. </span><span class="string">":" </span><span class="keyword">. </span><span class="default">WP_PROXY_PORT</span><span class="keyword">;<br /></span><span class="default">$opts </span><span class="keyword">= array( <br />    </span><span class="string">'http' </span><span class="keyword">=&gt; array( </span><span class="string">'proxy' </span><span class="keyword">=&gt; </span><span class="default">$proxy_string </span><span class="keyword">),<br />    </span><span class="string">'ssl' </span><span class="keyword">=&gt; array( </span><span class="string">'SNI_enabled' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">, </span><span class="string">'SNI_server_name' </span><span class="keyword">=&gt; </span><span class="default">$domain</span><span class="keyword">));<br /></span><span class="default">$context </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">(</span><span class="default">$opts</span><span class="keyword">);<br /></span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">( </span><span class="default">$file</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">$context </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />src:<br /><a href="http://php.net/manual/en/context.http.php#114314" rel="nofollow" target="_blank">http://php.net/manual/en/context.http.php#114314</a></span></code></div>
  </div>
 </div>
  <div class="note" id="119424">  <div class="votes">
    <div id="Vu119424">
    <a href="/manual/vote-note.php?id=119424&amp;page=class.soapclient&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119424">
    <a href="/manual/vote-note.php?id=119424&amp;page=class.soapclient&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119424" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#119424" class="name">
  <strong class="user"><em>Ricardo Pedrassani</em></strong></a><a class="genanchor" href="#119424"> &para;</a><div class="date" title="2016-06-03 01:53"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119424">
<div class="phpcode"><code><span class="html">If the XML have identities with same name in different levels there is a solution. You don´t have to ever submit a raw XML (this PHP SOAP object don´t allows send a RAW XML), so you have to always translate your XML to a array, like the example below:<br /><br />$originalXML = "<br />&lt;xml&gt;<br />  &lt;firstClient&gt;<br />      &lt;name&gt;someone&lt;/name&gt;<br />      &lt;adress&gt;R. 1001&lt;/adress&gt;<br />  &lt;/firstClient&gt;<br />  &lt;secondClient&gt;<br />      &lt;name&gt;another one&lt;/name&gt;<br />      &lt;adress&gt;&lt;/adress&gt;<br />  &lt;/secondClient&gt;<br />&lt;/xml&gt;"<br /><br />//Translate the XML above in a array, like PHP SOAP function requires<br />$myParams = array('firstClient' =&gt; array('name' =&gt; 'someone',<br />                                  'adress' =&gt; 'R. 1001'),<br />            'secondClient' =&gt; array('name' =&gt; 'another one',<br />                                  'adress' =&gt; ''));<br /><br />$webService = new SoapClient($someURL);<br />$result = $webService-&gt;someWebServiceFunction($myParams);</span></code></div>
  </div>
 </div>
  <div class="note" id="90631">  <div class="votes">
    <div id="Vu90631">
    <a href="/manual/vote-note.php?id=90631&amp;page=class.soapclient&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90631">
    <a href="/manual/vote-note.php?id=90631&amp;page=class.soapclient&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90631" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#90631" class="name">
  <strong class="user"><em>peter dot hansen at fastit dot net</em></strong></a><a class="genanchor" href="#90631"> &para;</a><div class="date" title="2009-05-01 06:57"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90631">
<div class="phpcode"><code><span class="html">When you get errors like:<br />"Fatal error: Uncaught SoapFault exception: [HTTP] Error Fetching http headers in" <br />after a few (time intensive) SOAP-Calls, check your webserver-config. <br /><br />Sometimes the webservers "KeepAlive"-Setting tends to result in this error. For SOAP-Environments I recommend you to disable KeepAlive. <br /><br />Hint: It might be tricky to create a dedicated vhost for your SOAP-Gateways and disable keepalive just for this vhost because for normal webpages Keepalive is a nice speed-boost.</span></code></div>
  </div>
 </div>
  <div class="note" id="117073">  <div class="votes">
    <div id="Vu117073">
    <a href="/manual/vote-note.php?id=117073&amp;page=class.soapclient&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117073">
    <a href="/manual/vote-note.php?id=117073&amp;page=class.soapclient&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117073" title="48% like this...">
    -2
    </div>
  </div>
  <a href="#117073" class="name">
  <strong class="user"><em>acopantepuy at gmail dot com</em></strong></a><a class="genanchor" href="#117073"> &para;</a><div class="date" title="2015-04-11 02:45"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117073">
<div class="phpcode"><code><span class="html">when they want to pass variables into the http header that is how it is done:<br /><br /><span class="default">&lt;?php<br /><br />$aHTTP</span><span class="keyword">[</span><span class="string">'http'</span><span class="keyword">][</span><span class="string">'header'</span><span class="keyword">] =  </span><span class="string">"User-Agent: PHP-SOAP/5.5.11\r\n"</span><span class="keyword">;<br /><br /></span><span class="default">$aHTTP</span><span class="keyword">[</span><span class="string">'http'</span><span class="keyword">][</span><span class="string">'header'</span><span class="keyword">].= </span><span class="string">"username: XXXXXXXXXXX\r\n"</span><span class="keyword">.</span><span class="string">"password: XXXXX\r\n"</span><span class="keyword">;<br /><br /></span><span class="default">$context </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">(</span><span class="default">$aHTTP</span><span class="keyword">);<br /><br /></span><span class="default">$client</span><span class="keyword">=new </span><span class="default">SoapClient</span><span class="keyword">(</span><span class="string">"<a href="https://ocppws-cert.extra.bcv.org.ve:443/AltoValor/BancoUniversal?WSDL" rel="nofollow" target="_blank">https://ocppws-cert.extra.bcv.org.ve:443/AltoValor/BancoUniversal?WSDL</a>"</span><span class="keyword">,array(</span><span class="string">'trace' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,</span><span class="string">"stream_context" </span><span class="keyword">=&gt; </span><span class="default">$context</span><span class="keyword">));<br /><br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">jornadaActiva</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102839">  <div class="votes">
    <div id="Vu102839">
    <a href="/manual/vote-note.php?id=102839&amp;page=class.soapclient&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102839">
    <a href="/manual/vote-note.php?id=102839&amp;page=class.soapclient&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102839" title="48% like this...">
    -3
    </div>
  </div>
  <a href="#102839" class="name">
  <strong class="user"><em>jjlopez</em></strong></a><a class="genanchor" href="#102839"> &para;</a><div class="date" title="2011-03-09 11:36"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102839">
<div class="phpcode"><code><span class="html">If you are making soap calls in WSDL mode , and the address of your web service includes a port different from 80 (like <a href="http://my_ip_address:8080//service.asmx?wsdl" rel="nofollow" target="_blank">http://my_ip_address:8080//service.asmx?wsdl</a>), the WSDL file is fetched correctly, but all subsequent requests are made without any port in the host field. This causes a SoapFault exception when trying to call any of the service’s methods.<br /><br />You need to redefine the soapClient class and force the port in each call.<br /><br />See this example:<br /><br /><a href="http://www.victorstanciu.ro/php-soapclient-port-bug-workaround/" rel="nofollow" target="_blank">http://www.victorstanciu.ro/php-soapclient-port-bug-workaround/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="119326">  <div class="votes">
    <div id="Vu119326">
    <a href="/manual/vote-note.php?id=119326&amp;page=class.soapclient&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119326">
    <a href="/manual/vote-note.php?id=119326&amp;page=class.soapclient&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119326" title="42% like this...">
    -4
    </div>
  </div>
  <a href="#119326" class="name">
  <strong class="user"><em>mcinantyspam at fejm dot pl</em></strong></a><a class="genanchor" href="#119326"> &para;</a><div class="date" title="2016-05-13 11:32"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119326">
<div class="phpcode"><code><span class="html">Please note, that if you provide values that contain illegal xml characters (ASCII codes 0-8,  11-12, 14-15 - or x0-x8, xB-xC, xE-xF in hex), php's SoapClient will do send them in request, although such request is improper because it does not meet XML 1.0 requirements.<br />You always have to replace or remove these characters in your data before supplying them to SoapClient</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.soapclient&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.soapclient.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
