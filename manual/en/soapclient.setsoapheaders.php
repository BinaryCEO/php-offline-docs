<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SoapClient::__setSoapHeaders - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/soapclient.setsoapheaders.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/soapclient.setsoapheaders.php">
 <link rel="alternate" href="https://www.php.net/manual/en/soapclient.setsoapheaders.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.soapclient.php">
 <link rel="prev" href="https://www.php.net/manual/en/soapclient.setlocation.php">
 <link rel="next" href="https://www.php.net/manual/en/soapclient.soapcall.php">

 <link rel="alternate" href="https://www.php.net/manual/en/soapclient.setsoapheaders.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/soapclient.setsoapheaders.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/soapclient.setsoapheaders.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/soapclient.setsoapheaders.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/soapclient.setsoapheaders.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/soapclient.setsoapheaders.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/soapclient.setsoapheaders.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/soapclient.setsoapheaders.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/soapclient.setsoapheaders.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/soapclient.setsoapheaders.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/soapclient.setsoapheaders.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sets SOAP headers for subsequent calls" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SoapClient::__setSoapHeaders - Manual" />
<meta name="twitter:description" content="Sets SOAP headers for subsequent calls" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SoapClient::__setSoapHeaders - Manual" />
<meta itemprop="description" content="Sets SOAP headers for subsequent calls" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sets SOAP headers for subsequent calls" />

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
        <a href="soapclient.soapcall.php">
          SoapClient::__soapCall &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="soapclient.setlocation.php">
          &laquo; SoapClient::__setLocation        </a>
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
            <option value='en/soapclient.setsoapheaders.php' selected="selected">English</option>
            <option value='de/soapclient.setsoapheaders.php'>German</option>
            <option value='es/soapclient.setsoapheaders.php'>Spanish</option>
            <option value='fr/soapclient.setsoapheaders.php'>French</option>
            <option value='it/soapclient.setsoapheaders.php'>Italian</option>
            <option value='ja/soapclient.setsoapheaders.php'>Japanese</option>
            <option value='pt_BR/soapclient.setsoapheaders.php'>Brazilian Portuguese</option>
            <option value='ru/soapclient.setsoapheaders.php'>Russian</option>
            <option value='tr/soapclient.setsoapheaders.php'>Turkish</option>
            <option value='uk/soapclient.setsoapheaders.php'>Ukrainian</option>
            <option value='zh/soapclient.setsoapheaders.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="soapclient.setsoapheaders" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SoapClient::__setSoapHeaders</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.0.5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SoapClient::__setSoapHeaders</span> &mdash; <span class="dc-title">Sets SOAP headers for subsequent calls</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-soapclient.setsoapheaders-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SoapClient::__setSoapHeaders</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.soapheader.php" class="type SoapHeader">SoapHeader</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$headers</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Defines headers to be sent along with the SOAP requests.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Calling this method will replace any previous values.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-soapclient.setsoapheaders-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">headers</code></dt>
     <dd>
      <p class="para">
       The headers to be set. It could be <span class="classname"><a href="class.soapheader.php" class="classname">SoapHeader</a></span>
       object or array of <span class="classname"><a href="class.soapheader.php" class="classname">SoapHeader</a></span> objects.
       If not specified or set to <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, the headers will be deleted.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-soapclient.setsoapheaders-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-soapclient.setsoapheaders-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5708">
    <p><strong>Example #1 <span class="function"><strong>SoapClient::__setSoapHeaders()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'location' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"http://localhost/soap.php"</span><span style="color: #007700">,<br />                                     </span><span style="color: #DD0000">'uri'      </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"http://test-uri/"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">$header </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapHeader</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://soapinterop.org/echoheader/'</span><span style="color: #007700">, <br />                            </span><span style="color: #DD0000">'echoMeStringRequest'</span><span style="color: #007700">,<br />                            </span><span style="color: #DD0000">'hello world'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__setSoapHeaders</span><span style="color: #007700">(</span><span style="color: #0000BB">$header</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__soapCall</span><span style="color: #007700">(</span><span style="color: #DD0000">"echoVoid"</span><span style="color: #007700">, </span><span style="color: #0000BB">null</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
    <p class="para">
     <div class="example" id="example-5709">
      <p><strong>Example #2 Set Multiple Headers</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'location' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"http://localhost/soap.php"</span><span style="color: #007700">,<br />                                     </span><span style="color: #DD0000">'uri'      </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"http://test-uri/"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">$headers </span><span style="color: #007700">= array();<br /><br /></span><span style="color: #0000BB">$headers</span><span style="color: #007700">[] = new </span><span style="color: #0000BB">SoapHeader</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://soapinterop.org/echoheader/'</span><span style="color: #007700">, <br />                            </span><span style="color: #DD0000">'echoMeStringRequest'</span><span style="color: #007700">,<br />                            </span><span style="color: #DD0000">'hello world'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$headers</span><span style="color: #007700">[] = new </span><span style="color: #0000BB">SoapHeader</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://soapinterop.org/echoheader/'</span><span style="color: #007700">, <br />                            </span><span style="color: #DD0000">'echoMeStringRequest'</span><span style="color: #007700">,<br />                            </span><span style="color: #DD0000">'hello world again'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__setSoapHeaders</span><span style="color: #007700">(</span><span style="color: #0000BB">$headers</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__soapCall</span><span style="color: #007700">(</span><span style="color: #DD0000">"echoVoid"</span><span style="color: #007700">, </span><span style="color: #0000BB">null</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/soap/soapclient/setsoapheaders.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsoapclient.setsoapheaders%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=soapclient.setsoapheaders&amp;repo=en&amp;redirect=https://www.php.net/manual/en/soapclient.setsoapheaders.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="93460">  <div class="votes">
    <div id="Vu93460">
    <a href="/manual/vote-note.php?id=93460&amp;page=soapclient.setsoapheaders&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93460">
    <a href="/manual/vote-note.php?id=93460&amp;page=soapclient.setsoapheaders&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93460" title="73% like this...">
    35
    </div>
  </div>
  <a href="#93460" class="name">
  <strong class="user"><em>kedar dot purohit @ mavs dot uta dot edu</em></strong></a><a class="genanchor" href="#93460"> &para;</a><div class="date" title="2009-09-10 12:58"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93460">
<div class="phpcode"><code><span class="html">To create complex SOAP Headers, you can do something like this:
<br />
<br />Required SOAP Header:
<br />
<br />&lt;soap:Header&gt;
<br />    &lt;RequestorCredentials xmlns="<a href="http://namespace.example.com/" rel="nofollow" target="_blank">http://namespace.example.com/</a>"&gt;
<br />      &lt;Token&gt;string&lt;/Token&gt;
<br />      &lt;Version&gt;string&lt;/Version&gt;
<br />      &lt;MerchantID&gt;string&lt;/MerchantID&gt;
<br />      &lt;UserCredentials&gt;
<br />        &lt;UserID&gt;string&lt;/UserID&gt;
<br />        &lt;Password&gt;string&lt;/Password&gt;
<br />      &lt;/UserCredentials&gt;
<br />    &lt;/RequestorCredentials&gt;
<br />&lt;/soap:Header&gt;
<br />
<br />Corresponding PHP code:
<br />
<br /><span class="default">&lt;?php
<br />
<br />$ns </span><span class="keyword">= </span><span class="string">'<a href="http://namespace.example.com/" rel="nofollow" target="_blank">http://namespace.example.com/</a>'</span><span class="keyword">; </span><span class="comment">//Namespace of the WS.
<br />
<br />//Body of the Soap Header.
<br /></span><span class="default">$headerbody </span><span class="keyword">= array(</span><span class="string">'Token' </span><span class="keyword">=&gt; </span><span class="default">$someToken</span><span class="keyword">,
<br />                    </span><span class="string">'Version' </span><span class="keyword">=&gt; </span><span class="default">$someVersion</span><span class="keyword">,
<br />                    </span><span class="string">'MerchantID'</span><span class="keyword">=&gt;</span><span class="default">$someMerchantId</span><span class="keyword">,
<br />                      </span><span class="string">'UserCredentials'</span><span class="keyword">=&gt;array(</span><span class="string">'UserID'</span><span class="keyword">=&gt;</span><span class="default">$UserID</span><span class="keyword">,
<br />                                             </span><span class="string">'Password'</span><span class="keyword">=&gt;</span><span class="default">$Pwd</span><span class="keyword">));
<br />
<br /></span><span class="comment">//Create Soap Header.        
<br /></span><span class="default">$header </span><span class="keyword">= new </span><span class="default">SOAPHeader</span><span class="keyword">(</span><span class="default">$ns</span><span class="keyword">, </span><span class="string">'RequestorCredentials'</span><span class="keyword">, </span><span class="default">$headerbody</span><span class="keyword">);        
<br />        
<br /></span><span class="comment">//set the Headers of Soap Client.
<br /></span><span class="default">$soap_client</span><span class="keyword">-&gt;</span><span class="default">__setSoapHeaders</span><span class="keyword">(</span><span class="default">$header</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98862">  <div class="votes">
    <div id="Vu98862">
    <a href="/manual/vote-note.php?id=98862&amp;page=soapclient.setsoapheaders&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98862">
    <a href="/manual/vote-note.php?id=98862&amp;page=soapclient.setsoapheaders&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98862" title="63% like this...">
    5
    </div>
  </div>
  <a href="#98862" class="name">
  <strong class="user"><em>peamik1953 at NOSPAM dot btinternet dot com</em></strong></a><a class="genanchor" href="#98862"> &para;</a><div class="date" title="2010-07-12 11:06"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98862">
<div class="phpcode"><code><span class="html">You cannot add an additional header. If you want two headers, and one already exists, first delete it with $client-&gt;__setSoapHeaders(NULL). Then issue $client-&gt;__setSoapHeaders($headers) where $headers is an array of soapHeader() objects.</span></code></div>
  </div>
 </div>
  <div class="note" id="89956">  <div class="votes">
    <div id="Vu89956">
    <a href="/manual/vote-note.php?id=89956&amp;page=soapclient.setsoapheaders&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89956">
    <a href="/manual/vote-note.php?id=89956&amp;page=soapclient.setsoapheaders&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89956" title="55% like this...">
    1
    </div>
  </div>
  <a href="#89956" class="name">
  <strong class="user"><em>jayrajput at gmail dot com</em></strong></a><a class="genanchor" href="#89956"> &para;</a><div class="date" title="2009-03-30 01:07"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89956">
<div class="phpcode"><code><span class="html">With multiple SOAP headers, when using SoapVar for creation of SoapHeader the PHP code just terminates (command terminated). I am not sure if that is a bug. 
<br />
<br />Without the SOAPVar the code worked fine for me
<br />
<br />There are different way to creart SoapHeader I was using SoapVar and the code was not working. I am still a novice with this SOAP stuff.
<br />
<br />Tried using normal strings and it worked fine. SoapHeader can take SoapVar or string as the third argument.
<br />
<br />my code:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// first soap header.
<br /></span><span class="default">$var </span><span class="keyword">= new </span><span class="default">SoapVar</span><span class="keyword">(</span><span class="default">$header</span><span class="keyword">, </span><span class="default">XSD_ANYXML</span><span class="keyword">);
<br /></span><span class="default">$soapHeader </span><span class="keyword">= new </span><span class="default">SoapHeader</span><span class="keyword">(</span><span class="default">NAME_SPACE</span><span class="keyword">, </span><span class="string">"Security"</span><span class="keyword">, </span><span class="default">$var</span><span class="keyword">);
<br /></span><span class="comment">// second soap header.
<br /></span><span class="default">$var2 </span><span class="keyword">= new </span><span class="default">SoapVar</span><span class="keyword">(</span><span class="default">$header2</span><span class="keyword">, </span><span class="default">XSD_ANYXML</span><span class="keyword">);
<br /></span><span class="default">$soapHeader2 </span><span class="keyword">= new </span><span class="default">SoapHeader</span><span class="keyword">(</span><span class="default">DIFF_NAME_SPACE</span><span class="keyword">, </span><span class="string">"ID"</span><span class="keyword">, </span><span class="default">$var2</span><span class="keyword">);
<br />
<br /></span><span class="default">$client </span><span class="keyword">= new </span><span class="default">SoapClient</span><span class="keyword">(</span><span class="default">$wsdl</span><span class="keyword">, array(</span><span class="string">"location" </span><span class="keyword">=&gt; </span><span class="default">$location</span><span class="keyword">));
<br />
<br /></span><span class="default">$headers </span><span class="keyword">= array();
<br /></span><span class="default">$headers</span><span class="keyword">[] = </span><span class="default">$soapHeader</span><span class="keyword">;
<br /></span><span class="default">$headers</span><span class="keyword">[] = </span><span class="default">$soapHeader2</span><span class="keyword">;
<br />
<br /></span><span class="comment">// Here my code was just terminating.
<br /></span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">__setSoapHeaders</span><span class="keyword">(</span><span class="default">$headers</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=soapclient.setsoapheaders&amp;repo=en&amp;redirect=https://www.php.net/manual/en/soapclient.setsoapheaders.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
