<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: xmlrpc_set_type - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.xmlrpc-set-type.php">
 <link rel="shorturl" href="https://www.php.net/xmlrpc-set-type">
 <link rel="alternate" href="https://www.php.net/xmlrpc-set-type" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.xmlrpc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.xmlrpc-server-register-method.php">
 <link rel="next" href="https://www.php.net/manual/en/refs.utilspec.windows.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.xmlrpc-set-type.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.xmlrpc-set-type.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.xmlrpc-set-type.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.xmlrpc-set-type.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.xmlrpc-set-type.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.xmlrpc-set-type.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.xmlrpc-set-type.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.xmlrpc-set-type.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.xmlrpc-set-type.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.xmlrpc-set-type.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.xmlrpc-set-type.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sets xmlrpc type, base64 or datetime, for a PHP string value" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: xmlrpc_set_type - Manual" />
<meta name="twitter:description" content="Sets xmlrpc type, base64 or datetime, for a PHP string value" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: xmlrpc_set_type - Manual" />
<meta itemprop="description" content="Sets xmlrpc type, base64 or datetime, for a PHP string value" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sets xmlrpc type, base64 or datetime, for a PHP string value" />

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
        <a href="refs.utilspec.windows.php">
          Windows Only Extensions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.xmlrpc-server-register-method.php">
          &laquo; xmlrpc_server_register_method        </a>
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
            <option value='en/function.xmlrpc-set-type.php' selected="selected">English</option>
            <option value='de/function.xmlrpc-set-type.php'>German</option>
            <option value='es/function.xmlrpc-set-type.php'>Spanish</option>
            <option value='fr/function.xmlrpc-set-type.php'>French</option>
            <option value='it/function.xmlrpc-set-type.php'>Italian</option>
            <option value='ja/function.xmlrpc-set-type.php'>Japanese</option>
            <option value='pt_BR/function.xmlrpc-set-type.php'>Brazilian Portuguese</option>
            <option value='ru/function.xmlrpc-set-type.php'>Russian</option>
            <option value='tr/function.xmlrpc-set-type.php'>Turkish</option>
            <option value='uk/function.xmlrpc-set-type.php'>Ukrainian</option>
            <option value='zh/function.xmlrpc-set-type.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.xmlrpc-set-type" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">xmlrpc_set_type</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">xmlrpc_set_type</span> &mdash; <span class="dc-title">Sets xmlrpc type, base64 or datetime, for a PHP string value</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.xmlrpc-set-type-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>xmlrpc_set_type</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter reference">&$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$type</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Sets xmlrpc type, base64 or datetime, for a PHP string value.
  </p>
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
<em>EXPERIMENTAL</em>. The behaviour of this function, its name, and
surrounding documentation may change without notice in a future release of PHP.
This function should be used at your own risk.
</p></div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.xmlrpc-set-type-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       Value to set the type
      </p>
     </dd>
    
    
     <dt><code class="parameter">type</code></dt>
     <dd>
      <p class="para">
       &#039;base64&#039; or &#039;datetime&#039;
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.xmlrpc-set-type-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
   If successful, <code class="parameter">value</code> is converted to an object.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.xmlrpc-set-type-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Issues E_WARNING with type unsupported by XMLRPC.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.xmlrpc-set-type-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5738">
    <p><strong>Example #1 A <span class="function"><strong>xmlrpc_set_type()</strong></span> example</strong></p>
    <div class="example-contents"><p>
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$params </span><span style="color: #007700">= </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Ymd\TH:i:s"</span><span style="color: #007700">, </span><span style="color: #0000BB">time</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">xmlrpc_set_type</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">, </span><span style="color: #DD0000">'datetime'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">xmlrpc_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;params&gt;
&lt;param&gt;
 &lt;value&gt;
  &lt;dateTime.iso8601&gt;20090322T23:43:03&lt;/dateTime.iso8601&gt;
 &lt;/value&gt;
&lt;/param&gt;
&lt;/params&gt;</pre>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/xmlrpc/functions/xmlrpc-set-type.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.xmlrpc-set-type%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.xmlrpc-set-type&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xmlrpc-set-type.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="47017">  <div class="votes">
    <div id="Vu47017">
    <a href="/manual/vote-note.php?id=47017&amp;page=function.xmlrpc-set-type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47017">
    <a href="/manual/vote-note.php?id=47017&amp;page=function.xmlrpc-set-type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47017" title="100% like this...">
    4
    </div>
  </div>
  <a href="#47017" class="name">
  <strong class="user"><em>shem((at))etkDOTca [aka.Przemyslaw Szot]</em></strong></a><a class="genanchor" href="#47017"> &para;</a><div class="date" title="2004-10-30 02:23"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47017">
<div class="phpcode"><code><span class="html">Once you use the xmlrpc_set_type function, the data is encoded into a PHP object.  In your XMLRPC server, in order to access the data you must be able to access the necessary part of the object.<br /><br />So.. to expend on the example above:<br /><br />&lt;---------- CLIENT ----------&gt;<br />$string = "My logging event."; <br />$date = "20030115T12:22:37"; // Must be this format <br />$binary = fread($fp, 128); <br />xmlrpc_set_type(&amp;$date, "datetime"); <br />xmlrpc_set_type(&amp;$binary, "base64"); <br />$xmlrpcReq = xmlrpc_encode_request("log.data", array($string, $date, $binary)); <br /><br />In order to retrieve the binary file data you would need to get the scalar portion of the object:<br /><br />&lt;---------- SERVER ------------&gt;<br />$string=$params[0];<br />$date_obj=$params[1];<br />$binary_obj=$params[2];<br /><br />$date=$date_obj-&gt;scalar;<br />$binary_data=$binary_obj-&gt;scalar;<br /><br />// Then you can proceed to write the binary<br />fwrite($handle,$binary_data);</span></code></div>
  </div>
 </div>
  <div class="note" id="27981">  <div class="votes">
    <div id="Vu27981">
    <a href="/manual/vote-note.php?id=27981&amp;page=function.xmlrpc-set-type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27981">
    <a href="/manual/vote-note.php?id=27981&amp;page=function.xmlrpc-set-type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27981" title="66% like this...">
    1
    </div>
  </div>
  <a href="#27981" class="name">
  <strong class="user"><em>kelly at seankelly dot biz</em></strong></a><a class="genanchor" href="#27981"> &para;</a><div class="date" title="2002-12-28 07:53"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27981">
<div class="phpcode"><code><span class="html">The problem is that PHP has a string type which is also used to hold binary data and dates.  But XML-RPC defines three separate types for strings, binary data, and dates.  How do you tell how you want strings encoded?  That's where this function comes in.
<br />
<br />Suppose the XML-RPC method "log.data" took a string, a date, and a binary object.  To tell XML-RPC that the date (which is a PHP string) is a really a date and that the binary data (which is also a PHP string) is really binary data, try:
<br />
<br />$string = "My logging event.";
<br />$date = "20030115T12:22:37"; // Must be this format
<br />$binary = fread($fp, 128);
<br />xmlrpc_set_type(&amp;$date, "datetime");
<br />xmlrpc_set_type(&amp;$binary, "base64");
<br />$xmlrpcReq = xmlrpc_encode_request("log.data", array($string, $date, $binary));
<br />
<br />Note the reference passing in the calls to xmlrpc_set_type; that enables the function to change the values from strings into what xmlrpc_encode/_request expects (which are objects that include a bonus field that tells the desired XML-RPC type).</span></code></div>
  </div>
 </div>
  <div class="note" id="63582">  <div class="votes">
    <div id="Vu63582">
    <a href="/manual/vote-note.php?id=63582&amp;page=function.xmlrpc-set-type&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63582">
    <a href="/manual/vote-note.php?id=63582&amp;page=function.xmlrpc-set-type&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63582" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#63582" class="name">
  <strong class="user"><em>bmatheny at mobocracy dot net</em></strong></a><a class="genanchor" href="#63582"> &para;</a><div class="date" title="2006-03-24 03:08"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63582">
<div class="phpcode"><code><span class="html">The following code segfaults some older (pre 5.1.2) versions of PHP:<br /><br />$foo = date('c', time());<br />xmlrpc_set_type($foo, 'datetime');<br /><br />Please upgrade before reporting as a bug.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.xmlrpc-set-type&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xmlrpc-set-type.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
