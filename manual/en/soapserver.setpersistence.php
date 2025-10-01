<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SoapServer::setPersistence - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/soapserver.setpersistence.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/soapserver.setpersistence.php">
 <link rel="alternate" href="https://www.php.net/manual/en/soapserver.setpersistence.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.soapserver.php">
 <link rel="prev" href="https://www.php.net/manual/en/soapserver.setobject.php">
 <link rel="next" href="https://www.php.net/manual/en/class.soapfault.php">

 <link rel="alternate" href="https://www.php.net/manual/en/soapserver.setpersistence.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/soapserver.setpersistence.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/soapserver.setpersistence.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/soapserver.setpersistence.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/soapserver.setpersistence.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/soapserver.setpersistence.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/soapserver.setpersistence.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/soapserver.setpersistence.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/soapserver.setpersistence.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/soapserver.setpersistence.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/soapserver.setpersistence.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sets SoapServer persistence mode" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SoapServer::setPersistence - Manual" />
<meta name="twitter:description" content="Sets SoapServer persistence mode" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SoapServer::setPersistence - Manual" />
<meta itemprop="description" content="Sets SoapServer persistence mode" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sets SoapServer persistence mode" />

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
        <a href="class.soapfault.php">
          SoapFault &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="soapserver.setobject.php">
          &laquo; SoapServer::setObject        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.webservice.php'>Web Services</a></li>      <li><a href='book.soap.php'>SOAP</a></li>      <li><a href='class.soapserver.php'>SoapServer</a></li>      </ul>
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
            <option value='en/soapserver.setpersistence.php' selected="selected">English</option>
            <option value='de/soapserver.setpersistence.php'>German</option>
            <option value='es/soapserver.setpersistence.php'>Spanish</option>
            <option value='fr/soapserver.setpersistence.php'>French</option>
            <option value='it/soapserver.setpersistence.php'>Italian</option>
            <option value='ja/soapserver.setpersistence.php'>Japanese</option>
            <option value='pt_BR/soapserver.setpersistence.php'>Brazilian Portuguese</option>
            <option value='ru/soapserver.setpersistence.php'>Russian</option>
            <option value='tr/soapserver.setpersistence.php'>Turkish</option>
            <option value='uk/soapserver.setpersistence.php'>Ukrainian</option>
            <option value='zh/soapserver.setpersistence.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="soapserver.setpersistence" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SoapServer::setPersistence</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SoapServer::setPersistence</span> &mdash; <span class="dc-title">Sets SoapServer persistence mode</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-soapserver.setpersistence-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SoapServer::setPersistence</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment"> 
   This function allows changing the persistence state of a SoapServer object between
   requests. This function allows saving data between requests utilizing PHP sessions.  This method
   only has an affect on a SoapServer after it has exported functions utilizing <span class="methodname"><a href="soapserver.setclass.php" class="methodname">SoapServer::setClass()</a></span>. 
  </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para"> 
     The persistence of <strong><code><a href="soap.constants.php#constant.soap-persistence-session">SOAP_PERSISTENCE_SESSION</a></code></strong> makes only
     objects of the given class persistent, but not the class static data. In this 
     case, use <var class="varname">$this->bar</var> instead of self::$bar. 
    </p>
   </p></blockquote>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     <strong><code><a href="soap.constants.php#constant.soap-persistence-session">SOAP_PERSISTENCE_SESSION</a></code></strong> serializes data on the class object between requests. In order to properly utilize resources (e.g. <span class="classname"><a href="class.pdo.php" class="classname">PDO</a></span>), <a href="language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a> and <a href="language.oop5.magic.php#object.sleep" class="link">__sleep()</a> magic methods should be utilized. 
    </p>  
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-soapserver.setpersistence-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       One of the <strong><code><a href="soap.constants.php#constant.soap-persistence-session">SOAP_PERSISTENCE_<span class="replaceable">*</span></a></code></strong> constants.
      </p>
      <p class="para">
       <strong><code><a href="soap.constants.php#constant.soap-persistence-request">SOAP_PERSISTENCE_REQUEST</a></code></strong> - SoapServer data does not persist between
       requests. This is the <strong>default</strong> behavior of any SoapServer
       object after setClass is called. 
      </p>
      <p class="para">
       <strong><code><a href="soap.constants.php#constant.soap-persistence-session">SOAP_PERSISTENCE_SESSION</a></code></strong> - SoapServer data persists between requests.
       This is accomplished by serializing the SoapServer class data into
       <var class="varname"><a href="reserved.variables.session.php" class="classname">$_SESSION['_bogus_session_name']</a></var>, because of this 
       <span class="function"><a href="function.session-start.php" class="function">session_start()</a></span> must be called before this persistence mode is set. 
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-soapserver.setpersistence-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>

 
 <div class="refsect1 examples" id="refsect1-soapserver.setpersistence-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5716">
    <p><strong>Example #1 <span class="function"><strong>SoapServer::setPersistence()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /> </span><span style="color: #007700">class </span><span style="color: #0000BB">MyFirstPersistentSoapServer </span><span style="color: #007700">{<br />     private </span><span style="color: #0000BB">$resource</span><span style="color: #007700">; </span><span style="color: #FF8000">// (Such as PDO, mysqli, etc..)<br />     </span><span style="color: #007700">public </span><span style="color: #0000BB">$myvar1</span><span style="color: #007700">;<br />     public </span><span style="color: #0000BB">$myvar2</span><span style="color: #007700">;<br /><br />     public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">() {<br />         </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__wakeup</span><span style="color: #007700">(); </span><span style="color: #FF8000">// We're calling our wakeup to handle starting our resource<br />     </span><span style="color: #007700">}<br /><br />     public function </span><span style="color: #0000BB">__wakeup</span><span style="color: #007700">() {<br />         </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resource </span><span style="color: #007700">= </span><span style="color: #0000BB">CodeToStartOurResourceUp</span><span style="color: #007700">();<br />     }<br /><br />     public function </span><span style="color: #0000BB">__sleep</span><span style="color: #007700">() {<br />         </span><span style="color: #FF8000">// We make sure to leave out $resource here, so our session data remains persistent<br />         // Failure to do so will result in the failure during the unserialization of data<br />         // on the next request; thus, our SoapObject would not be persistent across requests.<br />         </span><span style="color: #007700">return array(</span><span style="color: #DD0000">'myvar1'</span><span style="color: #007700">,</span><span style="color: #DD0000">'myvar2'</span><span style="color: #007700">);<br />     }<br /> }<br /><br /> try {<br />     </span><span style="color: #0000BB">session_start</span><span style="color: #007700">();<br />     </span><span style="color: #0000BB">$server </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapServer</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'uri' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_URI'</span><span style="color: #007700">]));<br />     </span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setClass</span><span style="color: #007700">(</span><span style="color: #DD0000">'MyFirstPersistentSoapServer'</span><span style="color: #007700">);<br />     </span><span style="color: #FF8000">// setPersistence MUST be called after setClass, because setClass's<br />     // behavior sets SESSION_PERSISTENCE_REQUEST upon enacting the method.<br />     </span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setPersistence</span><span style="color: #007700">(</span><span style="color: #0000BB">SOAP_PERSISTENCE_SESSION</span><span style="color: #007700">);<br />     </span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handle</span><span style="color: #007700">();<br /> } catch(</span><span style="color: #0000BB">SoapFault $e</span><span style="color: #007700">) {<br />     </span><span style="color: #0000BB">error_log</span><span style="color: #007700">(</span><span style="color: #DD0000">"SOAP ERROR: "</span><span style="color: #007700">. </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">());<br /> }<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-soapserver.setpersistence-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="soapserver.setclass.php" class="methodname" rel="rdfs-seeAlso">SoapServer::setClass()</a> - Sets the class which handles SOAP requests</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/soap/soapserver/setpersistence.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsoapserver.setpersistence%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=soapserver.setpersistence&amp;repo=en&amp;redirect=https://www.php.net/manual/en/soapserver.setpersistence.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="97104">  <div class="votes">
    <div id="Vu97104">
    <a href="/manual/vote-note.php?id=97104&amp;page=soapserver.setpersistence&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97104">
    <a href="/manual/vote-note.php?id=97104&amp;page=soapserver.setpersistence&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97104" title="100% like this...">
    3
    </div>
  </div>
  <a href="#97104" class="name">
  <strong class="user"><em>csnaitsirch at web dot de</em></strong></a><a class="genanchor" href="#97104"> &para;</a><div class="date" title="2010-04-01 05:25"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97104">
<div class="phpcode"><code><span class="html">I want to give one example for the order of commands if you want to use a class in persistence mode.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// 1. class definition or include<br /></span><span class="keyword">class </span><span class="default">UserService<br /></span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">() { }<br />}<br /><br /></span><span class="comment">// 2. start the session after defining or including the class!!<br /></span><span class="default">session_start</span><span class="keyword">();<br /><br /></span><span class="comment">// 3. instanciate the server<br /></span><span class="default">$server </span><span class="keyword">= new </span><span class="default">SoapServer</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">, array(</span><span class="string">"something"</span><span class="keyword">));<br /><br /></span><span class="comment">// 4. set the class to use<br /></span><span class="default">$server</span><span class="keyword">-&gt;</span><span class="default">setClass</span><span class="keyword">(</span><span class="string">'UserService'</span><span class="keyword">);<br /><br /></span><span class="comment">// 5. set persistance mode<br /></span><span class="default">$server</span><span class="keyword">-&gt;</span><span class="default">setPersistence</span><span class="keyword">(</span><span class="default">SOAP_PERSISTENCE_SESSION</span><span class="keyword">);<br /><br /></span><span class="comment">// 6. handle the request<br /></span><span class="default">$server</span><span class="keyword">-&gt;</span><span class="default">handle</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82053">  <div class="votes">
    <div id="Vu82053">
    <a href="/manual/vote-note.php?id=82053&amp;page=soapserver.setpersistence&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82053">
    <a href="/manual/vote-note.php?id=82053&amp;page=soapserver.setpersistence&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82053" title="100% like this...">
    2
    </div>
  </div>
  <a href="#82053" class="name">
  <strong class="user"><em>boogiebug at gmail dot com</em></strong></a><a class="genanchor" href="#82053"> &para;</a><div class="date" title="2008-03-25 07:40"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82053">
<div class="phpcode"><code><span class="html">setPersistence works only for a single instance of service class.<br /><br />To use multiple instance of services objects, you need to instantiate the classes into objects and use an undocumented SoapServer's method - setObject() to add the service object into the SoapServer object, and handle the service object persistence with $_SESSION instead.<br /><br />For example:<br /><br />$ServiceObjects = array()<br />$ServiceObjects[0] = new ServiceClass1();<br />$ServiceObjects[1] = new ServiceClass2();<br />$ServiceObjects[2] = new ServiceClass3();<br /><br />$_SESSION['ServiceClass1'] = $ServiceObjects[0];<br />$_SESSION['ServiceClass2'] = $ServiceObjects[1];<br />$_SESSION['ServiceClass3'] = $ServiceObjects[2];<br /><br />...<br /><br />$Servers = array()<br />for ( $i = 0; $i &lt; count($ServiceObjects); i++)<br />{<br />  $s = new SoapServer($wsdl);<br />  $s-&gt;setObject($ServiceObject[$i]);<br />  $Servers[] = $s;<br />}<br /><br />...<br /><br />$Server[$i]-&gt;handle()<br /><br />...</span></code></div>
  </div>
 </div>
  <div class="note" id="80638">  <div class="votes">
    <div id="Vu80638">
    <a href="/manual/vote-note.php?id=80638&amp;page=soapserver.setpersistence&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80638">
    <a href="/manual/vote-note.php?id=80638&amp;page=soapserver.setpersistence&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80638" title="100% like this...">
    2
    </div>
  </div>
  <a href="#80638" class="name">
  <strong class="user"><em>jan at pinna dot nl</em></strong></a><a class="genanchor" href="#80638"> &para;</a><div class="date" title="2008-01-26 03:28"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80638">
<div class="phpcode"><code><span class="html">I found that using both modes (SOAP_PERSISTENCE_SESSION and SOAP_PERSISTENCE_REQUEST) cannot be used simultaniously. Because it didn't work at once, I started experimenting by using different settings and as stated below in the comments, "...also use SOAP_PERSISTENCE_REQUEST to save objects between requests" led me to think it was nessecary to use both modes. Well, it might for others, be but for me it turned out a day of freaking out ;) (trying all kinds of session stuff, etc etc).<br />Also, if persistence doesn't work, please check if session_start() is called somewhere in the script and try not to call it twice or whatsoever: it won't work...</span></code></div>
  </div>
 </div>
  <div class="note" id="56250">  <div class="votes">
    <div id="Vu56250">
    <a href="/manual/vote-note.php?id=56250&amp;page=soapserver.setpersistence&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56250">
    <a href="/manual/vote-note.php?id=56250&amp;page=soapserver.setpersistence&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56250" title="100% like this...">
    2
    </div>
  </div>
  <a href="#56250" class="name">
  <strong class="user"><em>jared at ws-db dot com</em></strong></a><a class="genanchor" href="#56250"> &para;</a><div class="date" title="2005-08-28 12:07"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56250">
<div class="phpcode"><code><span class="html">I had some issues getting session persistence (SOAP_PERSISTENCE_SESSION) to work. I finally got it working after setting session.auto_start=0, and then only calling session_start() in the script containing the SoapServer. Maybe this is obvious, but took me a bit to figure it out.<br /><br />I only tried it with session.use_cookies=1, so if the settings above don't work for you, make sure cookies are enabled, though it may work without the need for cookies.</span></code></div>
  </div>
 </div>
  <div class="note" id="53326">  <div class="votes">
    <div id="Vu53326">
    <a href="/manual/vote-note.php?id=53326&amp;page=soapserver.setpersistence&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53326">
    <a href="/manual/vote-note.php?id=53326&amp;page=soapserver.setpersistence&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53326" title="100% like this...">
    2
    </div>
  </div>
  <a href="#53326" class="name">
  <strong class="user"><em>cperez1000 at hotmail dot com</em></strong></a><a class="genanchor" href="#53326"> &para;</a><div class="date" title="2005-05-28 08:54"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53326">
<div class="phpcode"><code><span class="html">Always remember to place the "setPersistence" method before the handle method, otherwise it won't work.  It sounds obvious, but it's still a very common mistake, since no errors are shown.</span></code></div>
  </div>
 </div>
  <div class="note" id="83539">  <div class="votes">
    <div id="Vu83539">
    <a href="/manual/vote-note.php?id=83539&amp;page=soapserver.setpersistence&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83539">
    <a href="/manual/vote-note.php?id=83539&amp;page=soapserver.setpersistence&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83539" title="66% like this...">
    1
    </div>
  </div>
  <a href="#83539" class="name">
  <strong class="user"><em>doug dot manley at gmail dot com</em></strong></a><a class="genanchor" href="#83539"> &para;</a><div class="date" title="2008-05-30 12:54"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83539">
<div class="phpcode"><code><span class="html">When using "SoapServer::setPersistence( SOAP_PERSISTENCE_SESSION )", you apparently MUST include the class that was used in "SoapServer::setClass()" BEFORE any "session_*" commands.<br /><br />I found this out using "__autoload()" and a whole lot of "syslog()"; it kept failing to include the class that I was using for my soap server, but that class is ONLY ever referenced by the page itself, and even then only for the purposes of setting the class for the soap server; none of my code would ever cause it to autoload.  The problem was that I was including my session-handling code first.<br /><br />If the session gets started BEFORE the page defines the class definition, then persistence CANNOT happen.<br /><br />The order should be:<br />1. Include the class for use with the soap server.<br />2. Start up your session.<br />3. Set up your soap server.<br />4. Handle your soap request.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=soapserver.setpersistence&amp;repo=en&amp;redirect=https://www.php.net/manual/en/soapserver.setpersistence.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.soapserver.php">SoapServer</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="soapserver.addfunction.php" title="addFunction">addFunction</a>
                        </li>
                                                <li class="">
                            <a href="soapserver.addsoapheader.php" title="addSoapHeader">addSoapHeader</a>
                        </li>
                                                <li class="">
                            <a href="soapserver.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="soapserver.fault.php" title="fault">fault</a>
                        </li>
                                                <li class="">
                            <a href="soapserver.getfunctions.php" title="getFunctions">getFunctions</a>
                        </li>
                                                <li class="">
                            <a href="soapserver.getlastresponse.php" title="_&#8203;_&#8203;getLastResponse">_&#8203;_&#8203;getLastResponse</a>
                        </li>
                                                <li class="">
                            <a href="soapserver.handle.php" title="handle">handle</a>
                        </li>
                                                <li class="">
                            <a href="soapserver.setclass.php" title="setClass">setClass</a>
                        </li>
                                                <li class="">
                            <a href="soapserver.setobject.php" title="setObject">setObject</a>
                        </li>
                                                <li class="current">
                            <a href="soapserver.setpersistence.php" title="setPersistence">setPersistence</a>
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
