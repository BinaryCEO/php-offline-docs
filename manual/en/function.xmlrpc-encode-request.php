<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: xmlrpc_encode_request - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.xmlrpc-encode-request.php">
 <link rel="shorturl" href="https://www.php.net/xmlrpc-encode-request">
 <link rel="alternate" href="https://www.php.net/xmlrpc-encode-request" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.xmlrpc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.xmlrpc-encode.php">
 <link rel="next" href="https://www.php.net/manual/en/function.xmlrpc-get-type.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.xmlrpc-encode-request.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.xmlrpc-encode-request.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.xmlrpc-encode-request.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.xmlrpc-encode-request.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.xmlrpc-encode-request.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.xmlrpc-encode-request.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.xmlrpc-encode-request.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.xmlrpc-encode-request.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.xmlrpc-encode-request.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.xmlrpc-encode-request.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.xmlrpc-encode-request.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Generates XML for a method request" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: xmlrpc_encode_request - Manual" />
<meta name="twitter:description" content="Generates XML for a method request" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: xmlrpc_encode_request - Manual" />
<meta itemprop="description" content="Generates XML for a method request" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Generates XML for a method request" />

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
        <a href="function.xmlrpc-get-type.php">
          xmlrpc_get_type &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.xmlrpc-encode.php">
          &laquo; xmlrpc_encode        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.webservice.php'>Web Services</a></li>      <li><a href='book.xmlrpc.php'>XML-RPC</a></li>      <li><a href='ref.xmlrpc.php'>XML-RPC Functions</a></li>      </ul>
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
            <option value='en/function.xmlrpc-encode-request.php' selected="selected">English</option>
            <option value='de/function.xmlrpc-encode-request.php'>German</option>
            <option value='es/function.xmlrpc-encode-request.php'>Spanish</option>
            <option value='fr/function.xmlrpc-encode-request.php'>French</option>
            <option value='it/function.xmlrpc-encode-request.php'>Italian</option>
            <option value='ja/function.xmlrpc-encode-request.php'>Japanese</option>
            <option value='pt_BR/function.xmlrpc-encode-request.php'>Brazilian Portuguese</option>
            <option value='ru/function.xmlrpc-encode-request.php'>Russian</option>
            <option value='tr/function.xmlrpc-encode-request.php'>Turkish</option>
            <option value='uk/function.xmlrpc-encode-request.php'>Ukrainian</option>
            <option value='zh/function.xmlrpc-encode-request.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.xmlrpc-encode-request" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">xmlrpc_encode_request</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">xmlrpc_encode_request</span> &mdash; <span class="dc-title">Generates XML for a method request</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.xmlrpc-encode-request-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>xmlrpc_encode_request</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$method</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$params</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$output_options</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
<em>EXPERIMENTAL</em>. The behaviour of this function, its name, and
surrounding documentation may change without notice in a future release of PHP.
This function should be used at your own risk.
</p></div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.xmlrpc-encode-request-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">method</code></dt>
     <dd>
      <p class="para">
       Name of the method to call.
      </p>
     </dd>
    
    
     <dt><code class="parameter">params</code></dt>
     <dd>
      <p class="para">
       Method parameters compatible with method signature.
      </p>
     </dd>
    
    
     <dt><code class="parameter">output_options</code></dt>
     <dd>
      <p class="para">
       Array specifying output options may contain (default values are
       emphasised):
       <ul class="itemizedlist">
        <li class="listitem"><p class="para">output_type: php, <em>xml</em></p></li>
        <li class="listitem"><p class="para">verbosity: no_white_space, newlines_only, <em>pretty</em></p></li>
        <li class="listitem"><p class="para">escaping: cdata, <em>non-ascii, non-print, markup</em>
          (may be a string with one value or an array with multiple values)</p></li>
        <li class="listitem"><p class="para">version: simple, <em>xmlrpc</em>, soap 1.1, auto</p></li>
        <li class="listitem"><p class="para">encoding: <em>iso-8859-1</em>, other character set supported by iconv</p></li>
       </ul>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.xmlrpc-encode-request-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a string containing the XML representation of the request.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.xmlrpc-encode-request-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5736">
    <p><strong>Example #1 XMLRPC client functions example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$request </span><span style="color: #007700">= </span><span style="color: #0000BB">xmlrpc_encode_request</span><span style="color: #007700">(</span><span style="color: #DD0000">"method"</span><span style="color: #007700">, [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$context </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_context_create</span><span style="color: #007700">([<br />    </span><span style="color: #DD0000">'http' </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'method'  </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"POST"</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'header'  </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"Content-Type: text/xml"</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'content' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$request</span><span style="color: #007700">,<br />    ]<br />]);<br /></span><span style="color: #0000BB">$file </span><span style="color: #007700">= </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://www.example.com/xmlrpc"</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #0000BB">$context</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$response </span><span style="color: #007700">= </span><span style="color: #0000BB">xmlrpc_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">$response </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">xmlrpc_is_fault</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #DD0000">"xmlrpc: </span><span style="color: #0000BB">$response</span><span style="color: #007700">[</span><span style="color: #0000BB">faultString</span><span style="color: #007700">]</span><span style="color: #DD0000"> (</span><span style="color: #0000BB">$response</span><span style="color: #007700">[</span><span style="color: #0000BB">faultCode</span><span style="color: #007700">]</span><span style="color: #DD0000">)"</span><span style="color: #007700">);<br />} else {<br />    </span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.xmlrpc-encode-request-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.stream-context-create.php" class="function" rel="rdfs-seeAlso">stream_context_create()</a> - Creates a stream context</span></li>
    <li><span class="function"><a href="function.file-get-contents.php" class="function" rel="rdfs-seeAlso">file_get_contents()</a> - Reads entire file into a string</span></li>
    <li><span class="function"><a href="function.xmlrpc-decode.php" class="function" rel="rdfs-seeAlso">xmlrpc_decode()</a> - Decodes XML into native PHP types</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/xmlrpc/functions/xmlrpc-encode-request.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.xmlrpc-encode-request%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.xmlrpc-encode-request&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xmlrpc-encode-request.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="27992">  <div class="votes">
    <div id="Vu27992">
    <a href="/manual/vote-note.php?id=27992&amp;page=function.xmlrpc-encode-request&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27992">
    <a href="/manual/vote-note.php?id=27992&amp;page=function.xmlrpc-encode-request&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27992" title="88% like this...">
    7
    </div>
  </div>
  <a href="#27992" class="name">
  <strong class="user"><em>kelly at seankelly dot biz</em></strong></a><a class="genanchor" href="#27992"> &para;</a><div class="date" title="2002-12-28 04:02"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27992">
<div class="phpcode"><code><span class="html">Binary strings (set with xmlrpc_set_type) go into a &lt;base64&gt;...&lt;/base64&gt; block like you'd expect. But after every 80th character, this function inserts the XML entity "&amp;#10;", which is a Unicode newline, as if to cause a line-wrap, which is admittedly silly.<br /><br />Silly though it may be, it causes real problems for some XML-RPC servers, such as <a href="http://jakarta.apache.org/xmlrpc/" rel="nofollow" target="_blank">http://jakarta.apache.org/xmlrpc/</a> (nee Helma). Stripping out those entities with something like<br /><br />$req = preg_replace('/&amp;#10;/', '', xmlrpc_encode_request("my.method", $args));<br /><br />works around the problem.</span></code></div>
  </div>
 </div>
  <div class="note" id="80907">  <div class="votes">
    <div id="Vu80907">
    <a href="/manual/vote-note.php?id=80907&amp;page=function.xmlrpc-encode-request&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80907">
    <a href="/manual/vote-note.php?id=80907&amp;page=function.xmlrpc-encode-request&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80907" title="66% like this...">
    3
    </div>
  </div>
  <a href="#80907" class="name">
  <strong class="user"><em>fredrik at it dot cdon dot com</em></strong></a><a class="genanchor" href="#80907"> &para;</a><div class="date" title="2008-02-06 05:05"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80907">
<div class="phpcode"><code><span class="html">It should be noted that encoding does not seem to encode anything, just specify what goes into the XML header.<br /><br />We had problems with double-encoded UTF strings being saved to database when using this function, sending it of to a apache xml-rpc servlet and storing it in mysql database. It was solved by setting 'escaping' to just 'markup' and 'encoding' to 'UTF-8' (don't forget to set 'utf-8' in xmlrpc_decode too).<br /><br />It seems that UTF-8 encoded strings gets escaped with their bytes as entities instead of their characters as entites.</span></code></div>
  </div>
 </div>
  <div class="note" id="85462">  <div class="votes">
    <div id="Vu85462">
    <a href="/manual/vote-note.php?id=85462&amp;page=function.xmlrpc-encode-request&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85462">
    <a href="/manual/vote-note.php?id=85462&amp;page=function.xmlrpc-encode-request&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85462" title="58% like this...">
    2
    </div>
  </div>
  <a href="#85462" class="name">
  <strong class="user"><em>cometfish at hotmail dot com</em></strong></a><a class="genanchor" href="#85462"> &para;</a><div class="date" title="2008-09-01 12:47"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85462">
<div class="phpcode"><code><span class="html">The example above is incorrect - the header needs to be an array, see post by "chris dot vigelius at gmx dot net": <a href="http://au.php.net/manual/en/function.stream-context-create.php#74431" rel="nofollow" target="_blank">http://au.php.net/manual/en/function.stream-context-create.php#74431</a>
<br />His post also shows how to do browser authentication, as below:
<br /><span class="default">&lt;?php
<br />   $request </span><span class="keyword">= </span><span class="default">xmlrpc_encode_request</span><span class="keyword">(</span><span class="string">"methodName"</span><span class="keyword">, array(</span><span class="string">"methodParam"</span><span class="keyword">));
<br />   </span><span class="default">$auth </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">.</span><span class="string">":"</span><span class="keyword">.</span><span class="default">$password</span><span class="keyword">);
<br />   </span><span class="default">$header </span><span class="keyword">= (</span><span class="default">version_compare</span><span class="keyword">(</span><span class="default">phpversion</span><span class="keyword">(), </span><span class="string">'5.2.8'</span><span class="keyword">))
<br />     ? array(</span><span class="string">"Content-Type: text/xml"</span><span class="keyword">,</span><span class="string">"Authorization: Basic </span><span class="default">$auth</span><span class="string">"</span><span class="keyword">)
<br />     : </span><span class="string">"Content-Type: text/xml\r\nAuthorization: Basic </span><span class="default">$auth</span><span class="string">" </span><span class="keyword">; </span><span class="comment">//[1]
<br />   </span><span class="default">$context </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">(array(</span><span class="string">'http' </span><span class="keyword">=&gt; array(
<br />      </span><span class="string">'method' </span><span class="keyword">=&gt; </span><span class="string">"POST"</span><span class="keyword">,
<br />      </span><span class="string">'header' </span><span class="keyword">=&gt; </span><span class="default">$header</span><span class="keyword">,
<br />      </span><span class="string">'content' </span><span class="keyword">=&gt; </span><span class="default">$request
<br />   </span><span class="keyword">)));
<br />   </span><span class="default">$webservice</span><span class="keyword">=</span><span class="string">"<a href="http://www.example.com/rpc" rel="nofollow" target="_blank">http://www.example.com/rpc</a>"</span><span class="keyword">;
<br />   </span><span class="default">$file </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$webservice</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">$context</span><span class="keyword">);
<br />   </span><span class="default">$response </span><span class="keyword">= </span><span class="default">xmlrpc_decode</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />   if (</span><span class="default">xmlrpc_is_fault</span><span class="keyword">(</span><span class="default">$response</span><span class="keyword">)) {
<br />      return </span><span class="string">"xmlrpc: </span><span class="default">$response</span><span class="keyword">[</span><span class="default">faultString</span><span class="keyword">]</span><span class="string"> (</span><span class="default">$response</span><span class="keyword">[</span><span class="default">faultCode</span><span class="keyword">]</span><span class="string">)"</span><span class="keyword">;
<br />   } else {
<br />      return </span><span class="default">$response</span><span class="keyword">;
<br />   }
<br /></span><span class="default">?&gt;
<br /></span>
<br />1 - EDITOR NOTE: THIS IS A FIX FROM "SandersWang dt php at gmail dot com"</span></code></div>
  </div>
 </div>
  <div class="note" id="24408">  <div class="votes">
    <div id="Vu24408">
    <a href="/manual/vote-note.php?id=24408&amp;page=function.xmlrpc-encode-request&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24408">
    <a href="/manual/vote-note.php?id=24408&amp;page=function.xmlrpc-encode-request&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24408" title="66% like this...">
    1
    </div>
  </div>
  <a href="#24408" class="name">
  <strong class="user"><em>hfuecks at pinkgoblin dot com</em></strong></a><a class="genanchor" href="#24408"> &para;</a><div class="date" title="2002-08-15 09:06"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24408">
<div class="phpcode"><code><span class="html">This function should be used by an XML-RPC client to create an XML payload for an XML-RPC request;<br /><br /><span class="default">&lt;?php<br />$params </span><span class="keyword">= </span><span class="string">"system.methodSignature"</span><span class="keyword">;<br /></span><span class="default">$method </span><span class="keyword">= </span><span class="string">"system.methodHelp"</span><span class="keyword">;<br /></span><span class="default">$request </span><span class="keyword">= </span><span class="default">xmlrpc_encode_request</span><span class="keyword">(</span><span class="default">$method</span><span class="keyword">,</span><span class="default">$params</span><span class="keyword">);<br />echo ( </span><span class="default">$request </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Produces;<br /><br />&lt;?xml version='1.0' encoding="iso-8859-1" ?&gt;<br />&lt;methodCall&gt;<br />&lt;methodName&gt;system.methodHelp&lt;/methodName&gt;<br />&lt;params&gt;<br /> &lt;param&gt;<br />  &lt;value&gt;<br />   &lt;string&gt;system.methodSignature&lt;/string&gt;<br />  &lt;/value&gt;<br /> &lt;/param&gt;<br />&lt;/params&gt;<br />&lt;/methodCall&gt;<br /><br />The second argument recognises the type of variable and generates the correct XML-RPC structure. See xmlrpc_encode() for more details.</span></code></div>
  </div>
 </div>
  <div class="note" id="93189">  <div class="votes">
    <div id="Vu93189">
    <a href="/manual/vote-note.php?id=93189&amp;page=function.xmlrpc-encode-request&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93189">
    <a href="/manual/vote-note.php?id=93189&amp;page=function.xmlrpc-encode-request&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93189" title="60% like this...">
    1
    </div>
  </div>
  <a href="#93189" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#93189"> &para;</a><div class="date" title="2009-08-27 12:33"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93189">
<div class="phpcode"><code><span class="html">ever tried transmitting an array like the following with xmlrpc?<br />$var1=array(7=&gt;14,9=&gt;18);<br /><br />The output array looks quite different! It will look like that:<br />$var2=array(14,18);<br /><br />The only solution i found is to prepend a space to the index:<br />$var3=array(' 7'=&gt;14,' 9'=&gt;18);<br /><br />Using that method you'll get the right result. ($var1)</span></code></div>
  </div>
 </div>
  <div class="note" id="73835">  <div class="votes">
    <div id="Vu73835">
    <a href="/manual/vote-note.php?id=73835&amp;page=function.xmlrpc-encode-request&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73835">
    <a href="/manual/vote-note.php?id=73835&amp;page=function.xmlrpc-encode-request&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73835" title="60% like this...">
    1
    </div>
  </div>
  <a href="#73835" class="name">
  <strong class="user"><em>handco at gmail dot com</em></strong></a><a class="genanchor" href="#73835"> &para;</a><div class="date" title="2007-03-12 08:39"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73835">
<div class="phpcode"><code><span class="html">Simple OO client with function Overload : <br /><br />the php metho test_helloworld is translated to xmlrpc method test.helloworld.<br /><br />class RpcClient {<br />    <br />    private $_methods;<br />    private $_context;<br />    private $_url;<br />    <br />    function __construct ($url, $user, $passwd) {<br />        $auth = base64_encode(sprintf('%s:%s', $user,$passwd));<br />        $this-&gt;_context = stream_context_create(array(<br />            'http' =&gt; array(<br />                'method' =&gt; 'POST',<br />                'header' =&gt; "Content-Type: text/xml\r\n".<br />                            "Authorization: Basic $auth" ,<br />                <br />            )<br />        ));<br />        $this-&gt;_url = $url;<br />        <br />        $this-&gt;registerMethod ("Test_HelloWorld");<br />        <br />    }<br />    <br />    <br />    function __call($methodName, $params) {<br />        if (array_key_exists($methodName,$this-&gt;_methods)) {<br />            // on appelle la fonction RPC<br />            $m = str_replace('_', '.', $methodName);<br />            $r = xmlrpc_encode_request($m, $params,array('verbosity'=&gt;'newlines_only'));<br />            $c = $this-&gt;_context;<br />            stream_context_set_option($c,'http','content',$r);<br />            $f = file_get_contents($this-&gt;_url,false,$c);<br />            $resp = xmlrpc_decode($f);<br />            return $resp;<br />        } else {<br />            // on appelle la fonction de l'objet<br />            call_user_method_array($methodName, $this,$params);<br />        }<br />    }<br />    <br />    private function registerMethod ($method) {<br />        $this-&gt;_methods[$method] = true;<br />    }<br />    <br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="42119">  <div class="votes">
    <div id="Vu42119">
    <a href="/manual/vote-note.php?id=42119&amp;page=function.xmlrpc-encode-request&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42119">
    <a href="/manual/vote-note.php?id=42119&amp;page=function.xmlrpc-encode-request&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42119" title="100% like this...">
    2
    </div>
  </div>
  <a href="#42119" class="name">
  <strong class="user"><em>&lt;URL:http://www.dlitz.net/go/contact/&gt;</em></strong></a><a class="genanchor" href="#42119"> &para;</a><div class="date" title="2004-05-03 11:28"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42119">
<div class="phpcode"><code><span class="html">Note that as far as I can tell, the &amp;#10; characters generated by PHP in the base64 fields don't appear to violate the XML-RPC standard at all.  XML-RPC messages *are* in XML format, and as such, the XML entities should be getting decoded before being passed to a base64 decoder.  So, the previously-mentioned Jakarta-based XML-RPC server appears to violate the XML spec.  i.e. There's nothing here that needs to be "fixed" in PHP.</span></code></div>
  </div>
 </div>
  <div class="note" id="53305">  <div class="votes">
    <div id="Vu53305">
    <a href="/manual/vote-note.php?id=53305&amp;page=function.xmlrpc-encode-request&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53305">
    <a href="/manual/vote-note.php?id=53305&amp;page=function.xmlrpc-encode-request&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53305" title="100% like this...">
    1
    </div>
  </div>
  <a href="#53305" class="name">
  <strong class="user"><em>php at hendrik dash krauss dot de</em></strong></a><a class="genanchor" href="#53305"> &para;</a><div class="date" title="2005-05-28 02:29"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53305">
<div class="phpcode"><code><span class="html">For examples / documentation of the array output_options, see <a href="http://xmlrpc-epi.sourceforge.net/main.php?t=php_api#output_options" rel="nofollow" target="_blank">http://xmlrpc-epi.sourceforge.net/main.php?t=php_api#output_options</a><br /><br />In short, output_options lets you send compact xmlrpc (without all the "pretty whitespace" xmlrpc_encode adds normally), apply an own escaping table prior to sending, set the encoding, and a couple of other things (the page even says something about soap 1.1 ... I don't know details).</span></code></div>
  </div>
 </div>
  <div class="note" id="69041">  <div class="votes">
    <div id="Vu69041">
    <a href="/manual/vote-note.php?id=69041&amp;page=function.xmlrpc-encode-request&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69041">
    <a href="/manual/vote-note.php?id=69041&amp;page=function.xmlrpc-encode-request&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69041" title="50% like this...">
    0
    </div>
  </div>
  <a href="#69041" class="name">
  <strong class="user"><em>giunta dot gaetano at sea-aeroportimilano dot it</em></strong></a><a class="genanchor" href="#69041"> &para;</a><div class="date" title="2006-08-21 03:54"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69041">
<div class="phpcode"><code><span class="html">Take care that this function will generate invalid xmlrpc content when invoked with certain parameters (said content will be happily parsed by the lib itself, but not by other implementations).<br /><br />xmlrpc_encode_request(null, null)<br />will generate a response without a value<br /><br />xmlrpc_encode_request('myfunc', array('faultCode' =&gt; 666, 'faultString' =&gt; 'hello world')<br />will generated a request containing a &lt;fault&gt; member instead of &lt;params&gt;</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.xmlrpc-encode-request&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xmlrpc-encode-request.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.xmlrpc.php">XML-RPC Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.xmlrpc-decode.php" title="xmlrpc_&#8203;decode">xmlrpc_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-decode-request.php" title="xmlrpc_&#8203;decode_&#8203;request">xmlrpc_&#8203;decode_&#8203;request</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-encode.php" title="xmlrpc_&#8203;encode">xmlrpc_&#8203;encode</a>
                        </li>
                                                <li class="current">
                            <a href="function.xmlrpc-encode-request.php" title="xmlrpc_&#8203;encode_&#8203;request">xmlrpc_&#8203;encode_&#8203;request</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-get-type.php" title="xmlrpc_&#8203;get_&#8203;type">xmlrpc_&#8203;get_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-is-fault.php" title="xmlrpc_&#8203;is_&#8203;fault">xmlrpc_&#8203;is_&#8203;fault</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-parse-method-descriptions.php" title="xmlrpc_&#8203;parse_&#8203;method_&#8203;descriptions">xmlrpc_&#8203;parse_&#8203;method_&#8203;descriptions</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-server-add-introspection-data.php" title="xmlrpc_&#8203;server_&#8203;add_&#8203;introspection_&#8203;data">xmlrpc_&#8203;server_&#8203;add_&#8203;introspection_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-server-call-method.php" title="xmlrpc_&#8203;server_&#8203;call_&#8203;method">xmlrpc_&#8203;server_&#8203;call_&#8203;method</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-server-create.php" title="xmlrpc_&#8203;server_&#8203;create">xmlrpc_&#8203;server_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-server-destroy.php" title="xmlrpc_&#8203;server_&#8203;destroy">xmlrpc_&#8203;server_&#8203;destroy</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-server-register-introspection-callback.php" title="xmlrpc_&#8203;server_&#8203;register_&#8203;introspection_&#8203;callback">xmlrpc_&#8203;server_&#8203;register_&#8203;introspection_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-server-register-method.php" title="xmlrpc_&#8203;server_&#8203;register_&#8203;method">xmlrpc_&#8203;server_&#8203;register_&#8203;method</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-set-type.php" title="xmlrpc_&#8203;set_&#8203;type">xmlrpc_&#8203;set_&#8203;type</a>
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
