<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SoapServer::handle - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/soapserver.handle.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/soapserver.handle.php">
 <link rel="alternate" href="https://www.php.net/manual/en/soapserver.handle.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.soapserver.php">
 <link rel="prev" href="https://www.php.net/manual/en/soapserver.getlastresponse.php">
 <link rel="next" href="https://www.php.net/manual/en/soapserver.setclass.php">

 <link rel="alternate" href="https://www.php.net/manual/en/soapserver.handle.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/soapserver.handle.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/soapserver.handle.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/soapserver.handle.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/soapserver.handle.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/soapserver.handle.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/soapserver.handle.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/soapserver.handle.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/soapserver.handle.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/soapserver.handle.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/soapserver.handle.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Handles a SOAP request" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SoapServer::handle - Manual" />
<meta name="twitter:description" content="Handles a SOAP request" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SoapServer::handle - Manual" />
<meta itemprop="description" content="Handles a SOAP request" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Handles a SOAP request" />

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
        <a href="soapserver.setclass.php">
          SoapServer::setClass &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="soapserver.getlastresponse.php">
          &laquo; SoapServer::__getLastResponse        </a>
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
            <option value='en/soapserver.handle.php' selected="selected">English</option>
            <option value='de/soapserver.handle.php'>German</option>
            <option value='es/soapserver.handle.php'>Spanish</option>
            <option value='fr/soapserver.handle.php'>French</option>
            <option value='it/soapserver.handle.php'>Italian</option>
            <option value='ja/soapserver.handle.php'>Japanese</option>
            <option value='pt_BR/soapserver.handle.php'>Brazilian Portuguese</option>
            <option value='ru/soapserver.handle.php'>Russian</option>
            <option value='tr/soapserver.handle.php'>Turkish</option>
            <option value='uk/soapserver.handle.php'>Ukrainian</option>
            <option value='zh/soapserver.handle.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="soapserver.handle" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SoapServer::handle</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SoapServer::handle</span> &mdash; <span class="dc-title">Handles a SOAP request</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-soapserver.handle-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SoapServer::handle</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$request</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   Processes a SOAP request, calls necessary functions, and sends a response
   back.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-soapserver.handle-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">request</code></dt>
     <dd>
      <p class="para">
       The SOAP request. If this argument is omitted, the request is assumed to be
       in the raw POST data of the HTTP request.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-soapserver.handle-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-soapserver.handle-changelog">
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
       <code class="parameter">request</code> is now nullable.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-soapserver.handle-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5715">
    <p><strong>Example #1 <span class="function"><strong>SoapServer::handle()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">test</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #0000BB">$x</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$server </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapServer</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'uri' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"http://test-uri/"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFunction</span><span style="color: #007700">(</span><span style="color: #DD0000">"test"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handle</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-soapserver.handle-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="soapserver.construct.php" class="methodname" rel="rdfs-seeAlso">SoapServer::__construct()</a> - SoapServer constructor</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/soap/soapserver/handle.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsoapserver.handle%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=soapserver.handle&amp;repo=en&amp;redirect=https://www.php.net/manual/en/soapserver.handle.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107433">  <div class="votes">
    <div id="Vu107433">
    <a href="/manual/vote-note.php?id=107433&amp;page=soapserver.handle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107433">
    <a href="/manual/vote-note.php?id=107433&amp;page=soapserver.handle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107433" title="76% like this...">
    11
    </div>
  </div>
  <a href="#107433" class="name">
  <strong class="user"><em>dub357 at gmail dot com</em></strong></a><a class="genanchor" href="#107433"> &para;</a><div class="date" title="2012-02-08 10:54"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107433">
<div class="phpcode"><code><span class="html">After much headache and looking through PHP source code, I finally found out why the handle() function would immediately send back a fault with the string "Bad Request".
<br />Turns out that my client was sending valid XML, but the first line of the XML was the actual XML declaration:
<br />
<br />&lt;?xml version="1.0" encoding="UTF-8"?&gt;
<br />
<br />When the "handle" function in the SoapServer class is called, it first tries to parse the XML.  When the XML document can't be parsed, a "Bad Request" fault is returned and execution of the script immediately stops.  I assume that the XML parser built into PHP (libxml2) already assumes the document to be XML and when it finds the declaration, it thinks it isn't valid.
<br />
<br />I added some XML parsing calls to my service before the handle() function is called to check for valid XML and avoid the "Bad Request" fault.  This also allows me to send back a more suitable error message:
<br />
<br /><span class="default">&lt;?php
<br />$parser </span><span class="keyword">= </span><span class="default">xml_parser_create</span><span class="keyword">(</span><span class="string">"UTF-8"</span><span class="keyword">);
<br />if (!</span><span class="default">xml_parse</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">,</span><span class="default">$HTTP_RAW_POST_DATA</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">)){
<br />   </span><span class="default">$webService</span><span class="keyword">-&gt;</span><span class="default">fault</span><span class="keyword">(</span><span class="string">"500"</span><span class="keyword">, </span><span class="string">"Cannot parse XML: "</span><span class="keyword">.
<br />      </span><span class="default">xml_error_string</span><span class="keyword">(</span><span class="default">xml_get_error_code</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">)).
<br />       </span><span class="string">" at line: "</span><span class="keyword">.</span><span class="default">xml_get_current_line_number</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">).
<br />       </span><span class="string">", column: "</span><span class="keyword">.</span><span class="default">xml_get_current_column_number</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">));
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114424">  <div class="votes">
    <div id="Vu114424">
    <a href="/manual/vote-note.php?id=114424&amp;page=soapserver.handle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114424">
    <a href="/manual/vote-note.php?id=114424&amp;page=soapserver.handle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114424" title="80% like this...">
    9
    </div>
  </div>
  <a href="#114424" class="name">
  <strong class="user"><em>Bas van Dorst</em></strong></a><a class="genanchor" href="#114424"> &para;</a><div class="date" title="2014-02-19 02:58"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114424">
<div class="phpcode"><code><span class="html">Additional information to the comment of "Joeri Thissen" (<a href="http://www.php.net/manual/en/soapserver.handle.php#113866" rel="nofollow" target="_blank">http://www.php.net/manual/en/soapserver.handle.php#113866</a>)<br /><br />In some cases the replacements generates a timeout (looks like it is in combination with Nginx). The problem is that PHP has already sent a content-length, and the webserver is still waiting for new content. <br /> <br />To fix this you have to reset the HTTP Content-Length with the right value: <br /><br /><span class="default">&lt;?php<br />ob_start</span><span class="keyword">();<br /></span><span class="default">$soapServer</span><span class="keyword">-&gt;</span><span class="default">handle</span><span class="keyword">();<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();<br /></span><span class="default">ob_end_clean</span><span class="keyword">();<br /><br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"abcdef"</span><span class="keyword">, </span><span class="string">"abc"</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">);<br /></span><span class="default">$length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br />        <br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Length: "</span><span class="keyword">.</span><span class="default">$length</span><span class="keyword">);<br />echo </span><span class="default">$result</span><span class="keyword">;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113866">  <div class="votes">
    <div id="Vu113866">
    <a href="/manual/vote-note.php?id=113866&amp;page=soapserver.handle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113866">
    <a href="/manual/vote-note.php?id=113866&amp;page=soapserver.handle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113866" title="78% like this...">
    8
    </div>
  </div>
  <a href="#113866" class="name">
  <strong class="user"><em>Joeri Thissen</em></strong></a><a class="genanchor" href="#113866"> &para;</a><div class="date" title="2013-12-11 10:59"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113866">
<div class="phpcode"><code><span class="html">Sometimes returned data can contain characters which are not valid in xml 1.0. This causes the xml being output by SoapServer::handle to be invalid. Although it's probably better to sanitize the data ealier, a combination of output buffering and a simple regular expression can be used as a quick fix to make sure the output is indeed valid xml.<br /><br />For example:<br /><br /><span class="default">&lt;?php<br />    ob_start</span><span class="keyword">();<br />    </span><span class="default">$soapServer</span><span class="keyword">-&gt;</span><span class="default">handle</span><span class="keyword">();<br />    </span><span class="default">$soapXml </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();<br />    </span><span class="default">ob_end_clean</span><span class="keyword">();<br />    </span><span class="default">$soapXml </span><span class="keyword">= </span><span class="default">preg_replace </span><span class="keyword">(</span><span class="string">'/[^\x{0009}\x{000a}\x{000d}\x{0020}-\x{D7FF}\x{E000}-\x{FFFD}]+/u'</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">, </span><span class="default">$soapXml</span><span class="keyword">);<br />    echo </span><span class="default">$soapXml</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="94630">  <div class="votes">
    <div id="Vu94630">
    <a href="/manual/vote-note.php?id=94630&amp;page=soapserver.handle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94630">
    <a href="/manual/vote-note.php?id=94630&amp;page=soapserver.handle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94630" title="83% like this...">
    4
    </div>
  </div>
  <a href="#94630" class="name">
  <strong class="user"><em>Artur Graniszewski</em></strong></a><a class="genanchor" href="#94630"> &para;</a><div class="date" title="2009-11-15 10:19"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94630">
<div class="phpcode"><code><span class="html">Be aware that SoapServer::handle(); method sends additional HTTP headers to the browser. One of them is "Content-Type: application/soap+xml". If you want to execute SOAP methods locally as a part of SoapClient::__doRequest() (see example at <a href="http://pl2.php.net/manual/en/soapclient.dorequest.php" rel="nofollow" target="_blank">http://pl2.php.net/manual/en/soapclient.dorequest.php</a> ) you may need to reset (override) this header back to "Content-Type: text/html" like so:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">Add</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">) {<br />  return </span><span class="default">$x</span><span class="keyword">+</span><span class="default">$y</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">LocalSoapClient </span><span class="keyword">extends </span><span class="default">SoapClient </span><span class="keyword">{<br /><br />  function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$wsdl</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">) {<br />    </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$wsdl</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">server </span><span class="keyword">= new </span><span class="default">SoapServer</span><span class="keyword">(</span><span class="default">$wsdl</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">server</span><span class="keyword">-&gt;</span><span class="default">addFunction</span><span class="keyword">(</span><span class="string">'Add'</span><span class="keyword">);<br />  }<br /><br />  function </span><span class="default">__doRequest</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">, </span><span class="default">$action</span><span class="keyword">, </span><span class="default">$version</span><span class="keyword">) {<br />    </span><span class="default">ob_start</span><span class="keyword">();<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">server</span><span class="keyword">-&gt;</span><span class="default">handle</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">);<br />    </span><span class="default">$response </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();<br />    </span><span class="default">ob_end_clean</span><span class="keyword">();<br />    return </span><span class="default">$response</span><span class="keyword">;<br />  }<br /><br />}<br /><br /></span><span class="default">$x </span><span class="keyword">= new </span><span class="default">LocalSoapClient</span><span class="keyword">(</span><span class="default">NULL</span><span class="keyword">,array(</span><span class="string">'location'</span><span class="keyword">=&gt;</span><span class="string">'test://'</span><span class="keyword">, <br />                                   </span><span class="string">'uri'</span><span class="keyword">=&gt;</span><span class="string">'<a href="http://testuri.org" rel="nofollow" target="_blank">http://testuri.org</a>'</span><span class="keyword">)); <br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: text/html"</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">Add</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81750">  <div class="votes">
    <div id="Vu81750">
    <a href="/manual/vote-note.php?id=81750&amp;page=soapserver.handle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81750">
    <a href="/manual/vote-note.php?id=81750&amp;page=soapserver.handle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81750" title="80% like this...">
    3
    </div>
  </div>
  <a href="#81750" class="name">
  <strong class="user"><em>Blizzke at gmail dot com</em></strong></a><a class="genanchor" href="#81750"> &para;</a><div class="date" title="2008-03-12 04:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81750">
<div class="phpcode"><code><span class="html">Seems pretty logical once you find the solution, but it took me quite a while to figure this one out:<br />If you are using WSDL based SOAP requests and you have more than one operation in your binding (with the same parameters), make sure the &lt;soap:operation&gt; style is set to rpc, NOT body!<br /><br />When you specify 'body' here, all that will be transmitted in the request is the parameters for the function call, and SoapServer-&gt;handle() will use the first function it finds with the same parameter-makeup to handle the call.<br /><br />ie If you have 2 functions:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">One </span><span class="keyword">( </span><span class="default">string $blah </span><span class="keyword">);<br />function </span><span class="default">Two </span><span class="keyword">( </span><span class="default">string $blah </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Making a client call with SoapClient -&gt; Two ( 'test' ); will result in One ( ) being called when your 'type' is set to 'body'<br /><br />The actual method to call will only be included in the request when your type is set to 'rpc', resulting in the expected behavior</span></code></div>
  </div>
 </div>
  <div class="note" id="107123">  <div class="votes">
    <div id="Vu107123">
    <a href="/manual/vote-note.php?id=107123&amp;page=soapserver.handle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107123">
    <a href="/manual/vote-note.php?id=107123&amp;page=soapserver.handle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107123" title="62% like this...">
    2
    </div>
  </div>
  <a href="#107123" class="name">
  <strong class="user"><em>prenaud at profideo dot com</em></strong></a><a class="genanchor" href="#107123"> &para;</a><div class="date" title="2012-01-09 02:23"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107123">
<div class="phpcode"><code><span class="html">Please note that when defining several services in one wsdl file, and calling one of those services, you may always get the response for your first service.<br /><br />This is a known bug. You will find its description and some workarounds here  : <a href="https://bugs.php.net/bug.php?id=49169" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=49169</a></span></code></div>
  </div>
 </div>
  <div class="note" id="129757">  <div class="votes">
    <div id="Vu129757">
    <a href="/manual/vote-note.php?id=129757&amp;page=soapserver.handle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129757">
    <a href="/manual/vote-note.php?id=129757&amp;page=soapserver.handle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129757" title="no votes...">
    0
    </div>
  </div>
  <a href="#129757" class="name">
  <strong class="user"><em>none at none dot none</em></strong></a><a class="genanchor" href="#129757"> &para;</a><div class="date" title="2024-09-18 02:45"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129757">
<div class="phpcode"><code><span class="html">The handle method catch Fatal errors (for example calling an undefined function), so they will never go to log file of function registered by register_shutdown_function, set_error_handler or set_exception_handler.<br /><br />This example log nothing :<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">testFatal</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) {<br />    </span><span class="default">fhdkshfkhhf</span><span class="keyword">();<br />}<br /><br /></span><span class="default">$server </span><span class="keyword">= new </span><span class="default">SoapServer</span><span class="keyword">(</span><span class="string">'<a href="https://example.com/soap.wsld" rel="nofollow" target="_blank">https://example.com/soap.wsld</a>'</span><span class="keyword">);<br /></span><span class="default">$server</span><span class="keyword">-&gt;</span><span class="default">addFunction</span><span class="keyword">(</span><span class="string">'testFatal'</span><span class="keyword">);<br /></span><span class="default">$server</span><span class="keyword">-&gt;</span><span class="default">handle</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />To log error you need to catch Throwable :<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">testFatal</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) {<br />    try {<br />        </span><span class="default">fhdkshfkhhf</span><span class="keyword">();<br />    } catch (</span><span class="default">Throwable $e</span><span class="keyword">) {<br />        </span><span class="default">error_log</span><span class="keyword">(</span><span class="string">"SOAP Error: " </span><span class="keyword">. </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() . </span><span class="string">"\nStack trace:\n" </span><span class="keyword">. </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getTraceAsString</span><span class="keyword">());<br />        throw </span><span class="default">$e</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$server </span><span class="keyword">= new </span><span class="default">SoapServer</span><span class="keyword">(</span><span class="string">'<a href="https://example.com/soap.wsld" rel="nofollow" target="_blank">https://example.com/soap.wsld</a>'</span><span class="keyword">);<br /></span><span class="default">$server</span><span class="keyword">-&gt;</span><span class="default">addFunction</span><span class="keyword">(</span><span class="string">'testFatal'</span><span class="keyword">);<br /></span><span class="default">$server</span><span class="keyword">-&gt;</span><span class="default">handle</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86114">  <div class="votes">
    <div id="Vu86114">
    <a href="/manual/vote-note.php?id=86114&amp;page=soapserver.handle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86114">
    <a href="/manual/vote-note.php?id=86114&amp;page=soapserver.handle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86114" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#86114" class="name">
  <strong class="user"><em>tom at backslashinteractive dot com</em></strong></a><a class="genanchor" href="#86114"> &para;</a><div class="date" title="2008-10-03 10:54"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86114">
<div class="phpcode"><code><span class="html">In response to Blizzke:<br /><br />Sometimes this problem can be hidden by an Apache segmentation fault along with an HTTP headers error SoapFault thrown to the client.<br /><br />If you get either of those 2, try checking to make sure that style="rpc" in your WSDL file's soap:operation's.<br /><br />-T</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=soapserver.handle&amp;repo=en&amp;redirect=https://www.php.net/manual/en/soapserver.handle.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="soapserver.handle.php" title="handle">handle</a>
                        </li>
                                                <li class="">
                            <a href="soapserver.setclass.php" title="setClass">setClass</a>
                        </li>
                                                <li class="">
                            <a href="soapserver.setobject.php" title="setObject">setObject</a>
                        </li>
                                                <li class="">
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
