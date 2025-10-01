<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SoapClient::__construct - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/soapclient.construct.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/soapclient.construct.php">
 <link rel="alternate" href="https://www.php.net/manual/en/soapclient.construct.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.soapclient.php">
 <link rel="prev" href="https://www.php.net/manual/en/soapclient.call.php">
 <link rel="next" href="https://www.php.net/manual/en/soapclient.dorequest.php">

 <link rel="alternate" href="https://www.php.net/manual/en/soapclient.construct.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/soapclient.construct.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/soapclient.construct.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/soapclient.construct.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/soapclient.construct.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/soapclient.construct.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/soapclient.construct.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/soapclient.construct.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/soapclient.construct.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/soapclient.construct.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/soapclient.construct.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="SoapClient constructor" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SoapClient::__construct - Manual" />
<meta name="twitter:description" content="SoapClient constructor" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SoapClient::__construct - Manual" />
<meta itemprop="description" content="SoapClient constructor" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="SoapClient constructor" />

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
        <a href="soapclient.dorequest.php">
          SoapClient::__doRequest &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="soapclient.call.php">
          &laquo; SoapClient::__call        </a>
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
            <option value='en/soapclient.construct.php' selected="selected">English</option>
            <option value='de/soapclient.construct.php'>German</option>
            <option value='es/soapclient.construct.php'>Spanish</option>
            <option value='fr/soapclient.construct.php'>French</option>
            <option value='it/soapclient.construct.php'>Italian</option>
            <option value='ja/soapclient.construct.php'>Japanese</option>
            <option value='pt_BR/soapclient.construct.php'>Brazilian Portuguese</option>
            <option value='ru/soapclient.construct.php'>Russian</option>
            <option value='tr/soapclient.construct.php'>Turkish</option>
            <option value='uk/soapclient.construct.php'>Ukrainian</option>
            <option value='zh/soapclient.construct.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="soapclient.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SoapClient::__construct</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SoapClient::__construct</span> &mdash; <span class="dc-title">SoapClient constructor</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-soapclient.construct-description">
  <h3 class="title">Description</h3>
  <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SoapClient::__construct</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$wsdl</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span>)</div>

  <p class="para rdfs-comment">
   Creates a <span class="classname"><a href="class.soapclient.php" class="classname">SoapClient</a></span> object to connect to a SOAP service.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-soapclient.construct-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">wsdl</code></dt>
     <dd>
      <p class="para">
       URI of a WSDL file describing the service, which is used to automatically
       configure the client. If not provided, the client will operate in non-WSDL
       mode.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        By default, the WSDL file will be cached for performance. To disable
        or configure this caching, see
        <a href="soap.configuration.php#soap.configuration.list" class="link">SOAP Configure Options</a>
        and the <a href="soapclient.construct.php#soapclient.construct.options.cache-wsdl" class="link">
        <code class="literal">cache_wsdl</code> option</a>.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       An associative array specifying additional options for the SOAP client.
       If <code class="parameter">wsdl</code> is provided, this is optional; otherwise,
       at least <code class="literal">location</code> and <code class="literal">url</code> must be
       provided.
       <dl>
        
         <dt id="soapclient.construct.options.location">
          <code class="parameter">location</code>
          <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
         </dt>
         <dd>
          <p class="para">
           The URL of the SOAP server to send the request to.
          </p>
          <p class="para">
           Required if the <code class="parameter">wsdl</code> parameter is not provided.
           If both a <code class="parameter">wsdl</code> parameter and
           <code class="literal">location</code> option are provided, the
           <code class="literal">location</code> option will over-ride any location
           specified in the WSDL file.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.uri">
          <code class="parameter">uri</code>
          <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
         </dt>
         <dd>
          <p class="para">
           The target namespace of the SOAP service.
          </p>
          <p class="para">
           Required if the <code class="parameter">wsdl</code> parameter is not provided;
           ignored otherwise.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.style">
          <code class="parameter">style</code>
          <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
         </dt>
         <dd>
          <p class="para">
           Specifies the binding style to use for this client, using the constants
           <strong><code><a href="soap.constants.php#constant.soap-rpc">SOAP_RPC</a></code></strong> and <strong><code><a href="soap.constants.php#constant.soap-document">SOAP_DOCUMENT</a></code></strong>.
           <strong><code><a href="soap.constants.php#constant.soap-rpc">SOAP_RPC</a></code></strong> indicates RPC-style binding, where the
           SOAP request body contains a standard encoding of a function call.
           <strong><code><a href="soap.constants.php#constant.soap-document">SOAP_DOCUMENT</a></code></strong> indicates document-style binding,
           where the SOAP request body contains an XML document with
           service-defined meaning.
          </p>
          <p class="para">
           If the <code class="parameter">wsdl</code> parameter is provided, this
           option is ignored, and the style is read from the WSDL file.
          </p>
          <p class="para">
           If neither this option nor the <code class="parameter">wsdl</code> parameter
           is provided, RPC-style is used.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.use">
          <code class="parameter">use</code>
          <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
         </dt>
         <dd>
          <p class="para">
           Specifies the encoding style to use for this client, using the
           constants <strong><code><a href="soap.constants.php#constant.soap-encoded">SOAP_ENCODED</a></code></strong> or <strong><code><a href="soap.constants.php#constant.soap-literal">SOAP_LITERAL</a></code></strong>.
           <strong><code><a href="soap.constants.php#constant.soap-encoded">SOAP_ENCODED</a></code></strong> indicates encoding using the types
           defined in the SOAP specification.
           <strong><code><a href="soap.constants.php#constant.soap-literal">SOAP_LITERAL</a></code></strong> indicates encoding using a schema
           defined by the service.
          </p>
          <p class="para">
           If the <code class="parameter">wsdl</code> parameter is provided, this
           option is ignored, and the encoding is read from the WSDL file.
          </p>
          <p class="para">
           If neither this option nor the <code class="parameter">wsdl</code> parameter
           is provided, the &quot;encoded&quot; style is used.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.soap-version">
          <code class="parameter">soap_version</code>
          <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
         </dt>
         <dd>
          <p class="para">
           Specifies the version of the SOAP protocol to use:
           <strong><code><a href="soap.constants.php#constant.soap-1-1">SOAP_1_1</a></code></strong> for SOAP 1.1,
           or <strong><code><a href="soap.constants.php#constant.soap-1-2">SOAP_1_2</a></code></strong> for SOAP 1.2.
          </p>
          <p class="para">
           If omitted, SOAP 1.1 is used.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.authentication">
          <code class="parameter">authentication</code>
          <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
         </dt>
         <dd>
          <p class="para">
           Specifies the authentication method when using HTTP authentication
           in requests. The value may be either
           <strong><code><a href="soap.constants.php#constant.soap-authentication-basic">SOAP_AUTHENTICATION_BASIC</a></code></strong>
           or <strong><code><a href="soap.constants.php#constant.soap-authentication-digest">SOAP_AUTHENTICATION_DIGEST</a></code></strong>.
          </p>
          <p class="para">
           If omitted, and the <code class="literal">login</code> option is provided,
           Basic Authentication is used.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.login">
          <code class="parameter">login</code>
          <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
         </dt>
         <dd>
          <p class="para">
           Username to use with HTTP Basic or Digest Authentication.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.password">
          <code class="parameter">password</code>
          <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
         </dt>
         <dd>
          <p class="para">
           Password to use with HTTP Basic or Digest Authentication.
          </p>
          <p class="para">
           Not to be confused with <code class="literal">passphrase</code>,
           which is used with HTTPS Client Certificate authentication.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.local-cert">
          <code class="parameter">local_cert</code>
          <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
         </dt>
         <dd>
          <p class="para">
           Path to a client certificate for use with HTTPS authentication.
           It must be a <abbr title="Privacy-Enhanced Mail">PEM</abbr> encoded file which contains your certificate
           and private key.
          </p>
          <p class="para">
           The file can also include a chain of issuers, which must come
           after the client certificate.
          </p>
          <p class="para">
           Can also be set via
           <a href="soapclient.construct.php#soapclient.construct.options.stream-context" class="link">
           <code class="parameter">stream_context</code></a>,
           which also supports specifying a separate private key file.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.passphrase">
          <code class="parameter">passphrase</code>
          <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
         </dt>
         <dd>
          <p class="para">
           Passphrase for the client certificate specified in the
           <code class="literal">local_cert</code> option.
          </p>
          <p class="para">
           Not to be confused with <code class="literal">password</code>,
           which is used for Basic or Digest Authentication.
          </p>
          <p class="para">
           Can also be set via
           <a href="soapclient.construct.php#soapclient.construct.options.stream-context" class="link">
           <code class="parameter">stream_context</code></a>.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.proxy-host">
          <code class="parameter">proxy_host</code>
          <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
         </dt>
         <dd>
          <p class="para">
           Hostname to use as a proxy server for HTTP requests.
          </p>
          <p class="para">
           The <code class="literal">proxy_port</code> option must also be specified.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.proxy-port">
          <code class="parameter">proxy_port</code>
          <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
         </dt>
         <dd>
          <p class="para">
           TCP port to use when connecting to the proxy server
           specified in <code class="literal">proxy_host</code>.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.proxy-login">
          <code class="parameter">proxy_login</code>
          <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
         </dt>
         <dd>
          <p class="para">
           Optional username to authenticate with the proxy server
           specified in <code class="literal">proxy_host</code>, using HTTP
           Basic Authentication.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.proxy-password">
          <code class="parameter">proxy_password</code>
          <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
         </dt>
         <dd>
          <p class="para">
           Optional password to authenticate with the proxy server
           specified in <code class="literal">proxy_host</code>, using HTTP
           Basic Authentication.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.compression">
          <code class="parameter">compression</code>
          <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
         </dt>
         <dd>
          <p class="para">
           Enables compression of HTTP SOAP requests and responses.
          </p>
          <p class="para">
           The value should be the bitwise OR of three parts:
           an optional <strong><code><a href="soap.constants.php#constant.soap-compression-accept">SOAP_COMPRESSION_ACCEPT</a></code></strong>,
           to send an &quot;Accept-Encoding&quot; header; either
           <strong><code><a href="soap.constants.php#constant.soap-compression-gzip">SOAP_COMPRESSION_GZIP</a></code></strong>
           or <strong><code><a href="soap.constants.php#constant.soap-compression-deflate">SOAP_COMPRESSION_DEFLATE</a></code></strong> to indicate
           the compression algorithm to use; and a number between 1 and 9
           to indicate the level of compression to use in the request.
           For example, to enable two-way gzip compression with the maximum
           compression level, use
           <code class="literal">SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | 9</code>.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.encoding">
          <code class="parameter">encoding</code>
          <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
         </dt>
         <dd>
          <p class="para">
           Defines the internal character encoding. Requests are always sent
           in UTF-8, and converted to and from this encoding.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.trace">
          <code class="parameter">trace</code>
          <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
         </dt>
         <dd>
          <p class="para">
           Captures request and response information, which can then be
           accessed with the methods
           <span class="methodname"><a href="soapclient.getlastrequest.php" class="methodname">SoapClient::__getLastRequest()</a></span>,
           <span class="methodname"><a href="soapclient.getlastrequestheaders.php" class="methodname">SoapClient::__getLastRequestHeaders()</a></span>,
           <span class="methodname"><a href="soapclient.getlastresponse.php" class="methodname">SoapClient::__getLastResponse()</a></span>,
           and <span class="methodname"><a href="soapclient.getlastresponseheaders.php" class="methodname">SoapClient::__getLastResponseHeaders()</a></span>.
          </p>
          <p class="para">
           If omitted, defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.classmap">
          <code class="parameter">classmap</code>
          <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
         </dt>
         <dd>
          <p class="para">
           Used to map types defined in the WSDL to PHP classes.
           It should be specified as an associative <span class="type"><a href="language.types.array.php" class="type array">array</a></span> with
           type names from the WSDL as keys and names of PHP classes as values.
           Note that the type names of an element is not necessarily the same as
           the element (tag) name.
          </p>
          <p class="para">
           The provided class names should always be fully qualified with any
           <a href="language.namespaces.php" class="link">namespaces</a>, and never
           start with a leading <code class="literal">\</code>. The correct form can be
           generated by using
           <a href="language.oop5.basic.php#language.oop5.basic.class.class" class="link">::class</a>.
          </p>
          <p class="para">
           Note that when creating a class, the constructor will not be called,
           but magic <a href="language.oop5.overloading.php#object.set" class="link">__set()</a> and
           <a href="language.oop5.overloading.php#object.get" class="link">__get()</a> methods for individual
           properties will be.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.typemap">
          <code class="parameter">typemap</code>
          <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
         </dt>
         <dd>
          <p class="para">
           Used to define type mappings using user-defined callback functions.
           Each type mapping should be an array with keys
           <code class="literal">type_name</code> (<span class="type"><a href="language.types.string.php" class="type string">string</a></span> specifying the
           XML element type);
           <code class="literal">type_ns</code> (<span class="type"><a href="language.types.string.php" class="type string">string</a></span> containing namespace
           URI);
           <code class="literal">from_xml</code> (<span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> accepting one
           string parameter and returning an object) and
           <code class="literal">to_xml</code> (<span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> accepting one
           object parameter and returning a string).
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.exceptions">
          <code class="parameter">exceptions</code>
          <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
         </dt>
         <dd>
          <p class="para">
           Defines whether errors throw exceptions of type
           <span class="classname"><a href="class.soapfault.php" class="classname">SoapFault</a></span>.
          </p>
          <p class="para">
           Defaults to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.connection-timeout">
          <code class="parameter">connection_timeout</code>
          <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
         </dt>
         <dd>
          <p class="para">
           Defines a timeout in seconds for the connection to the SOAP service.
           This option does not define a timeout for services with slow responses.
           To limit the time to wait for calls to finish the
           <a href="filesystem.configuration.php#ini.default-socket-timeout" class="link">default_socket_timeout</a>
           configuration option is available.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.cache-wsdl">
          <code class="parameter">cache_wsdl</code>
          <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
         </dt>
         <dd>
          <p class="para">
           If the <code class="parameter">wsdl</code> parameter is provided, and the
           <a href="soap.configuration.php#ini.soap.wsdl-cache-enabled" class="link">soap.wsdl_cache_enabled</a>
           configuration option is on, this option determines the type of caching.
           One of <strong><code><a href="soap.constants.php#constant.wsdl-cache-none">WSDL_CACHE_NONE</a></code></strong>,
           <strong><code><a href="soap.constants.php#constant.wsdl-cache-disk">WSDL_CACHE_DISK</a></code></strong>,
           <strong><code><a href="soap.constants.php#constant.wsdl-cache-memory">WSDL_CACHE_MEMORY</a></code></strong> or
           <strong><code><a href="soap.constants.php#constant.wsdl-cache-both">WSDL_CACHE_BOTH</a></code></strong>.
          </p>
          <p class="para">
           Two types of cache are available: in-memory caching, which caches the WSDL
           in the memory of the current process; and disk caching, which caches the
           WSDL in a file on disk, shared between all processes.
           The directory to use for the disk cache is determined by the
           <a href="soap.configuration.php#ini.soap.wsdl-cache-dir" class="link">soap.wsdl_cache_dir</a>
           configuration option.
           Both caches use the same lifetime, determined by the
           <a href="soap.configuration.php#ini.soap.wsdl-cache-ttl" class="link">soap.wsdl_cache_ttl</a>
           configuration option. The in-memory cache also has a maximum number of entries
           determined by the
           <a href="soap.configuration.php#ini.soap.wsdl-cache-limit" class="link">soap.wsdl_cache_limit</a>
           configuration option.
          </p>
          <p class="para">
           If not specified, the <a href="soap.configuration.php#ini.soap.wsdl-cache" class="link">
           soap.wsdl_cache</a> configuration option will be used.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.user-agent">
          <code class="parameter">user_agent</code>
          <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
         </dt>
         <dd>
          <p class="para">
           The value to use in the <code class="literal">User-Agent</code> HTTP header
           when making requests.
          </p>
          <p class="para">
           Can also be set via <a href="soapclient.construct.php#soapclient.construct.options.stream-context" class="link">
           <code class="parameter">stream_context</code></a>.
          </p>
          <p class="para">
           If not specified, the user agent will be <code class="literal">&quot;PHP-SOAP/&quot;</code>
           followed by the value of <strong><code><a href="reserved.constants.php#constant.php-version">PHP_VERSION</a></code></strong>.
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.stream-context">
          <code class="parameter">stream_context</code>
          <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>
         </dt>
         <dd>
          <p class="para">
           A <a href="context.php" class="link">stream context</a> created by
           <span class="function"><a href="function.stream-context-create.php" class="function">stream_context_create()</a></span>, which allows additional
           options to be set.
          </p>
          <p class="para">
           The context may include <a href="context.socket.php" class="link">socket context options</a>,
           <a href="context.ssl.php" class="link">SSL context options</a>,
           plus selected <a href="context.http.php" class="link">HTTP context options</a>:
           <code class="literal">content_type</code>, <code class="literal">header</code>,
           <code class="literal">max_redirects</code>, <code class="literal">protocol_version</code>,
           and <code class="literal">user_agent</code>.
          </p>
          <p class="para">
           Note that the following HTTP headers are generated automatically or from other
           options, and will be ignored if specified in the <code class="literal">&#039;header&#039;</code>
           context option: <code class="literal">host</code>, <code class="literal">connection</code>,
           <code class="literal">user-agent</code>, <code class="literal">content-length</code>,
           <code class="literal">content-type</code>, <code class="literal">cookie</code>,
           <code class="literal">authorization</code>, and <code class="literal">proxy-authorization</code>
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.features">
          <code class="parameter">features</code>
          <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
         </dt>
         <dd>
          <p class="para">
           A bitmask to enable one or more of the following features:
           <dl>
            
             <dt>
              <strong><code><a href="soap.constants.php#constant.soap-single-element-arrays">SOAP_SINGLE_ELEMENT_ARRAYS</a></code></strong>
             </dt>
             <dd>
              <p class="para">
               When decoding a response to an array, the default behaviour is to detect whether
               an element name appears once or multiple times in a particular parent element.
               For elements which appear only once, an object property allows direct access to
               the content; for elements which appear more than once, the property contains an
               array with the content of each matching element.
              </p>
              <p class="para">
               If the <strong><code><a href="soap.constants.php#constant.soap-single-element-arrays">SOAP_SINGLE_ELEMENT_ARRAYS</a></code></strong> feature is enabled,
               elements which appear only once are placed in a single-element array, so that
               access is consistent for all elements. This only has an effect when using a WSDL
               containing a schema for the response. See Examples section for an illustration.
              </p>
             </dd>
            
            
             <dt>
              <strong><code><a href="soap.constants.php#constant.soap-use-xsi-array-type">SOAP_USE_XSI_ARRAY_TYPE</a></code></strong>
             </dt>
             <dd>
              <p class="para">
               When the <a href="soapclient.construct.php#soapclient.construct.options.use" class="link"><code class="literal">use</code>
               option</a> or WSDL property is set to <code class="literal">encoded</code>,
               force arrays to use a type of <code class="literal">SOAP-ENC:Array</code>, rather than a
               schema-specific type.
              </p>
             </dd>
            
            
             <dt>
              <strong><code><a href="soap.constants.php#constant.soap-wait-one-way-calls">SOAP_WAIT_ONE_WAY_CALLS</a></code></strong>
             </dt>
             <dd>
              <p class="para">
               Wait for a response even if the WSDL indicates a one-way request.
              </p>
             </dd>
            
           </dl>
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.keep-alive">
          <code class="parameter">keep_alive</code>
          <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
         </dt>
         <dd>
          <p class="para">
           a boolean value defining whether
           to send the <code class="literal">Connection: Keep-Alive</code> header or
           <code class="literal">Connection: close</code>.
          </p>
          <p class="para">
           Defaults to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>
          </p>
         </dd>
        
        
         <dt id="soapclient.construct.options.ssl-method">
          <code class="parameter">ssl_method</code>
          <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
         </dt>
         <dd>
          <p class="para">
           Specifies the SSL or TLS protocol version to use with secure HTTP
           connections, instead of the default negotiation.
           Specifying <strong><code><a href="soap.constants.php#constant.soap-ssl-method-sslv2">SOAP_SSL_METHOD_SSLv2</a></code></strong>
           or <strong><code><a href="soap.constants.php#constant.soap-ssl-method-sslv3">SOAP_SSL_METHOD_SSLv3</a></code></strong> will force use of SSL 2
           or SSL 3, respectively.
           Specifying <strong><code><a href="soap.constants.php#constant.soap-ssl-method-sslv23">SOAP_SSL_METHOD_SSLv23</a></code></strong> has no effect;
           the constant exists only for backwards compatibility.
           As of PHP 7.2, specifying <strong><code><a href="soap.constants.php#constant.soap-ssl-method-tls">SOAP_SSL_METHOD_TLS</a></code></strong>
           also has no effect; in earlier versions, it forced use of TLS 1.0.
          </p>
          <p class="para">
           Note that SSL versions 2 and 3 are considered insecure, and may not
           be supported by the installed OpenSSL library.
          </p>
          <p class="para">
           This option is <em>DEPRECATED</em> as of PHP 8.1.0.
           A more flexible alternative, which allows specifying
           individual versions of TLS, is to use the
           <a href="soapclient.construct.php#soapclient.construct.options.stream-context" class="link">
           <code class="parameter">stream_context</code></a> option with
           the &#039;crypto_method&#039; context parameter.
           <div class="example" id="example-5697">
            <p><strong>Example #1 Specifying use of TLS 1.3 only</strong></p>
            <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$context </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_context_create</span><span style="color: #007700">([<br />    </span><span style="color: #DD0000">'ssl' </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'crypto_method' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT<br />     </span><span style="color: #007700">]<br />]);<br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #DD0000">"some.wsdl"</span><span style="color: #007700">, [</span><span style="color: #DD0000">'context' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$context</span><span style="color: #007700">]);</span></span></code></div>
            </div>

           </div>
          </p>
         </dd>
        
       </dl>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-soapclient.construct-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   <span class="methodname"><strong>SoapClient::__construct()</strong></span> will generate an
   <strong><code><a href="errorfunc.constants.php#constant.e-error">E_ERROR</a></code></strong> error if the <code class="literal">location</code> and
   <code class="literal">uri</code> options aren&#039;t provided in non-WSDL mode.
  </p>
  <p class="para">
   A <span class="classname"><a href="class.soapfault.php" class="classname">SoapFault</a></span> exception will be thrown if the
   <code class="parameter">wsdl</code> URI cannot be loaded.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-soapclient.construct-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5698">
    <p><strong>Example #2 
     <span class="methodname"><strong>SoapClient::__construct()</strong></span> example
    </strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #DD0000">"some.wsdl"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #DD0000">"some.wsdl"</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'soap_version'   </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOAP_1_2</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #DD0000">"some.wsdl"</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'login'          </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"some_name"</span><span style="color: #007700">,<br />                                            </span><span style="color: #DD0000">'password'       </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"some_password"</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #DD0000">"some.wsdl"</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'proxy_host'     </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">,<br />                                            </span><span style="color: #DD0000">'proxy_port'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">8080</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #DD0000">"some.wsdl"</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'proxy_host'     </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">,<br />                                            </span><span style="color: #DD0000">'proxy_port'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">8080</span><span style="color: #007700">,<br />                                            </span><span style="color: #DD0000">'proxy_login'    </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"some_name"</span><span style="color: #007700">,<br />                                            </span><span style="color: #DD0000">'proxy_password' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"some_password"</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #DD0000">"some.wsdl"</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'local_cert'     </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"cert_key.pem"</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'location' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"http://localhost/soap.php"</span><span style="color: #007700">,<br />                                     </span><span style="color: #DD0000">'uri'      </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"http://test-uri/"</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'location' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"http://localhost/soap.php"</span><span style="color: #007700">,<br />                                     </span><span style="color: #DD0000">'uri'      </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"http://test-uri/"</span><span style="color: #007700">,<br />                                     </span><span style="color: #DD0000">'style'    </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOAP_DOCUMENT</span><span style="color: #007700">,<br />                                     </span><span style="color: #DD0000">'use'      </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOAP_LITERAL</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #DD0000">"some.wsdl"</span><span style="color: #007700">,<br />  array(</span><span style="color: #DD0000">'compression' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOAP_COMPRESSION_ACCEPT </span><span style="color: #007700">| </span><span style="color: #0000BB">SOAP_COMPRESSION_GZIP </span><span style="color: #007700">| </span><span style="color: #0000BB">9</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #DD0000">"some.wsdl"</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'encoding'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">));<br /><br />class </span><span style="color: #0000BB">MyBook </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$title</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$author</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #DD0000">"books.wsdl"</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'classmap' </span><span style="color: #007700">=&gt; array(</span><span style="color: #DD0000">'book' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"MyBook"</span><span style="color: #007700">)));<br /><br /></span><span style="color: #0000BB">$typemap </span><span style="color: #007700">= array(<br />    array(</span><span style="color: #DD0000">"type_ns"  </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"http://schemas.example.com"</span><span style="color: #007700">,<br />         </span><span style="color: #DD0000">"type_name" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"book"</span><span style="color: #007700">,<br />         </span><span style="color: #DD0000">"from_xml"  </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"unserialize_book"</span><span style="color: #007700">,<br />         </span><span style="color: #DD0000">"to_xml"    </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"serialize_book"</span><span style="color: #007700">)<br />);<br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #DD0000">"books.wsdl"</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'typemap' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$typemap</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <p class="para">
   <div class="example" id="example-5699">
    <p><strong>Example #3 Using the <strong><code><a href="soap.constants.php#constant.soap-single-element-arrays">SOAP_SINGLE_ELEMENT_ARRAYS</a></code></strong> feature</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Assuming a response like this, and an appropriate WSDL:<br />&lt;?xml version="1.0" encoding="UTF-8"?&gt;<br />&lt;SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns="urn:example"&gt;<br />    &lt;SOAP-ENV:Body&gt;<br />        &lt;response&gt;<br />            &lt;collection&gt;<br />                &lt;item&gt;Single&lt;/item&gt;<br />            &lt;/collection&gt;<br />            &lt;collection&gt;<br />                &lt;item&gt;First&lt;/item&gt;<br />                &lt;item&gt;Second&lt;/item&gt;<br />            &lt;/collection&gt;<br />        &lt;/response&gt;<br />    &lt;/SOAP-ENV:Body&gt;<br />&lt;/SOAP-ENV:Envelope&gt;<br />*/<br /><br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"Default:\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">TestSoapClient</span><span style="color: #007700">(</span><span style="color: #0000BB">__DIR__ </span><span style="color: #007700">. </span><span style="color: #DD0000">'/temp.wsdl'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$response </span><span style="color: #007700">= </span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exampleRequest</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">( </span><span style="color: #0000BB">$response</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">collection</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">item </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">( </span><span style="color: #0000BB">$response</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">collection</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">item </span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"\nWith SOAP_SINGLE_ELEMENT_ARRAYS:\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">TestSoapClient</span><span style="color: #007700">(</span><span style="color: #0000BB">__DIR__ </span><span style="color: #007700">. </span><span style="color: #DD0000">'/temp.wsdl'</span><span style="color: #007700">, [</span><span style="color: #DD0000">'features' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOAP_SINGLE_ELEMENT_ARRAYS</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$response </span><span style="color: #007700">= </span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exampleRequest</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">( </span><span style="color: #0000BB">$response</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">collection</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">item </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">( </span><span style="color: #0000BB">$response</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">collection</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">item </span><span style="color: #007700">);</span></span></code></div>
    </div>


    <div class="example-contents"><p>The above example will output:</p></div>

    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Default:
string(6) &quot;Single&quot;
array(2) {
  [0] =&gt;
  string(5) &quot;First&quot;
  [1] =&gt;
  string(6) &quot;Second&quot;
}

With SOAP_SINGLE_ELEMENT_ARRAYS:
array(1) {
  [0] =&gt;
  string(6) &quot;Single&quot;
}
array(2) {
  [0] =&gt;
  string(5) &quot;First&quot;
  [1] =&gt;
  string(6) &quot;Second&quot;
}</pre>
</div>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/soap/soapclient/construct.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsoapclient.construct%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=soapclient.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/soapclient.construct.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="129542">  <div class="votes">
    <div id="Vu129542">
    <a href="/manual/vote-note.php?id=129542&amp;page=soapclient.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129542">
    <a href="/manual/vote-note.php?id=129542&amp;page=soapclient.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129542" title="100% like this...">
    2
    </div>
  </div>
  <a href="#129542" class="name">
  <strong class="user"><em>turabgarip at gmail dot com</em></strong></a><a class="genanchor" href="#129542"> &para;</a><div class="date" title="2024-06-06 09:21"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129542">
<div class="phpcode"><code><span class="html">Two notes about the steam_context option:<br /><br />1- In the example of the documentation, it says:<br /><br /><span class="default">&lt;?php<br />$client </span><span class="keyword">= new </span><span class="default">SoapClient</span><span class="keyword">(</span><span class="string">"some.wsdl"</span><span class="keyword">, [</span><span class="string">'context' </span><span class="keyword">=&gt; </span><span class="default">$context</span><span class="keyword">]);<br /></span><span class="default">?&gt;<br /></span><br />This is wrong. As it is stated in the parameters list, it must be "stream_context" and NOT "context".<br /><br />2- The HTTP Context manual here: <a href="https://www.php.net/manual/en/context.http.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/context.http.php</a><br /><br />It says header can either be of type array or string. This is also wrong. It may not necessarily be optional because it might depend on your PHP compile time configuration.<br /><br />If your instance is compiled --with-curlwrappers option, you should use array type for header in the HTTP context and if not; you should use a string separated by new line (\n) for the header. I am not sure if SoapClient respects curl_wrappers option because although it is enabled in my instance and although I am using arrays for the headers to create HTTP context for non-Soap operations; SoapClient required me to use a string. It otherwise just dropped the stream_context altogether.<br /><br />So with SoapClient, you better use a string for the HTTP header like:<br /><br /><span class="default">&lt;?php<br /><br />$context </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">(array(<br />    </span><span class="string">'http' </span><span class="keyword">=&gt; array(<br />        </span><span class="string">'user_agent' </span><span class="keyword">=&gt; </span><span class="string">'My App'</span><span class="keyword">,<br />        </span><span class="string">'header' </span><span class="keyword">=&gt;<br />            </span><span class="string">"Custom-Header: Value\n" </span><span class="keyword">.<br />            </span><span class="string">"Another Header: Surprise"<br />    </span><span class="keyword">)<br />));<br /><br /></span><span class="default">$client </span><span class="keyword">= new </span><span class="default">SoapClient</span><span class="keyword">(</span><span class="string">'some.wsdl'</span><span class="keyword">, [</span><span class="string">'stream_context' </span><span class="keyword">=&gt; </span><span class="default">$context</span><span class="keyword">]);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=soapclient.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/soapclient.construct.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.soapclient.php">SoapClient</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="soapclient.call.php" title="_&#8203;_&#8203;call">_&#8203;_&#8203;call</a>
                        </li>
                                                <li class="current">
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
