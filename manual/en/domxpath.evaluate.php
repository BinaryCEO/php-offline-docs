<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMXPath::evaluate - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domxpath.evaluate.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domxpath.evaluate.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domxpath.evaluate.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domxpath.php">
 <link rel="prev" href="https://www.php.net/manual/en/domxpath.construct.php">
 <link rel="next" href="https://www.php.net/manual/en/domxpath.query.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domxpath.evaluate.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domxpath.evaluate.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domxpath.evaluate.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domxpath.evaluate.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domxpath.evaluate.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domxpath.evaluate.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domxpath.evaluate.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domxpath.evaluate.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domxpath.evaluate.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domxpath.evaluate.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domxpath.evaluate.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Evaluates the given XPath expression and returns a typed result if possible" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMXPath::evaluate - Manual" />
<meta name="twitter:description" content="Evaluates the given XPath expression and returns a typed result if possible" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMXPath::evaluate - Manual" />
<meta itemprop="description" content="Evaluates the given XPath expression and returns a typed result if possible" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Evaluates the given XPath expression and returns a typed result if possible" />

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
        <a href="domxpath.query.php">
          DOMXPath::query &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domxpath.construct.php">
          &laquo; DOMXPath::__construct        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.dom.php'>DOM</a></li>      <li><a href='class.domxpath.php'>DOMXPath</a></li>      </ul>
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
            <option value='en/domxpath.evaluate.php' selected="selected">English</option>
            <option value='de/domxpath.evaluate.php'>German</option>
            <option value='es/domxpath.evaluate.php'>Spanish</option>
            <option value='fr/domxpath.evaluate.php'>French</option>
            <option value='it/domxpath.evaluate.php'>Italian</option>
            <option value='ja/domxpath.evaluate.php'>Japanese</option>
            <option value='pt_BR/domxpath.evaluate.php'>Brazilian Portuguese</option>
            <option value='ru/domxpath.evaluate.php'>Russian</option>
            <option value='tr/domxpath.evaluate.php'>Turkish</option>
            <option value='uk/domxpath.evaluate.php'>Ukrainian</option>
            <option value='zh/domxpath.evaluate.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domxpath.evaluate" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMXPath::evaluate</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMXPath::evaluate</span> &mdash; <span class="dc-title">
   Evaluates the given XPath expression and returns a typed result if possible
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domxpath.evaluate-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMXPath::evaluate</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$expression</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span></span> <code class="parameter">$contextNode</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$registerNodeNS</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="para rdfs-comment">
   Executes the given XPath <code class="parameter">expression</code> and returns
   a typed result if possible.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-domxpath.evaluate-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">expression</code></dt>
     <dd>
      <p class="para">
       The XPath expression to execute.
      </p>
     </dd>
    
    
     <dt><code class="parameter">contextNode</code></dt>
     <dd>
      <p class="para">
       The optional <code class="parameter">contextNode</code> can be specified for
       doing relative XPath queries. By default, the queries are relative to 
       the root element.
      </p>
     </dd>
    
    
 <dt><code class="parameter">registerNodeNS</code></dt>
 <dd>
  <p class="para">
   Whether to automatically register the in-scope namespace prefixes of the context node to the <span class="classname"><a href="class.domxpath.php" class="classname">DOMXPath</a></span> object.
   This can be used to avoid needing to call <span class="methodname"><a href="domxpath.registernamespace.php" class="methodname">DOMXPath::registerNamespace()</a></span> manually for each in-scope namespaces.
   When a namespace prefix conflict exists, only the nearest descendant namespace prefix is registered.
  </p>
 </dd>

   </dl>
  </p>
 </div>

 <div class="refsect1 errors" id="domxpath.query..errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="simpara">
   The following errors are possible when using an expression that invokes
   PHP callbacks.
  </p>
  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     Throws an <span class="exceptionname"><a href="class.error.php" class="exceptionname">Error</a></span> if
     a PHP callback is invoked but there were no callbacks registered,
     or if the named callback was not registered.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Throws a <span class="exceptionname"><a href="class.typeerror.php" class="exceptionname">TypeError</a></span> if
     the <code class="literal">php:function</code> syntax is used and the handler
     name is not a string.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Throws an <span class="exceptionname"><a href="class.error.php" class="exceptionname">Error</a></span> if
     a non-DOM object was returned from a callback.
    </span>
   </li>
  </ul>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-domxpath.evaluate-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a typed result if possible or a <span class="classname"><a href="class.domnodelist.php" class="classname">DOMNodeList</a></span> 
   containing all nodes matching the given XPath <code class="parameter">expression</code>. 
  </p>
  <p class="para">
   If the <code class="parameter">expression</code> is malformed or the
   <code class="parameter">contextNode</code> is invalid,
   <span class="methodname"><strong>DOMXPath::evaluate()</strong></span> returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-domxpath.evaluate-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5829">
    <p><strong>Example #1 Getting the count of all the english books</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #DD0000">'examples/book-dcobook.xml'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$xpath </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMXPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$doc</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$tbody </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElementsByTagName</span><span style="color: #007700">(</span><span style="color: #DD0000">'tbody'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">item</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// our query is relative to the tbody node<br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">'count(row/entry[. = "en"])'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$entries </span><span style="color: #007700">= </span><span style="color: #0000BB">$xpath</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">evaluate</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">, </span><span style="color: #0000BB">$tbody</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"There are </span><span style="color: #0000BB">$entries</span><span style="color: #DD0000"> english books\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">There are 2 english books</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-domxpath.evaluate-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domxpath.query.php" class="methodname" rel="rdfs-seeAlso">DOMXPath::query()</a> - Evaluates the given XPath expression</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domxpath/evaluate.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomxpath.evaluate%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domxpath.evaluate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domxpath.evaluate.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="104612">  <div class="votes">
    <div id="Vu104612">
    <a href="/manual/vote-note.php?id=104612&amp;page=domxpath.evaluate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104612">
    <a href="/manual/vote-note.php?id=104612&amp;page=domxpath.evaluate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104612" title="83% like this...">
    4
    </div>
  </div>
  <a href="#104612" class="name">
  <strong class="user"><em>daniel at danielnorton dot com</em></strong></a><a class="genanchor" href="#104612"> &para;</a><div class="date" title="2011-06-25 09:56"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104612">
<div class="phpcode"><code><span class="html">Note that this method does not provide any means to distinguish between a successful result that returns FALSE and an error.<br /><br />For example, this will succeed and return FALSE:<br /><br /><span class="default">&lt;?php $xpath</span><span class="keyword">-&gt;</span><span class="default">evaluate</span><span class="keyword">(</span><span class="string">"1 = 0"</span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />One workaround when you know you are expecting a Boolean is to wrap the result with string(). e.g.<br /><br /><span class="default">&lt;?php $xpath</span><span class="keyword">-&gt;</span><span class="default">evaluate</span><span class="keyword">(</span><span class="string">"string(1 = 0)"</span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />This will return a string "false" on success, or the Boolean FALSE on error.</span></code></div>
  </div>
 </div>
  <div class="note" id="103147">  <div class="votes">
    <div id="Vu103147">
    <a href="/manual/vote-note.php?id=103147&amp;page=domxpath.evaluate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103147">
    <a href="/manual/vote-note.php?id=103147&amp;page=domxpath.evaluate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103147" title="83% like this...">
    4
    </div>
  </div>
  <a href="#103147" class="name">
  <strong class="user"><em>Damien Bezborodov</em></strong></a><a class="genanchor" href="#103147"> &para;</a><div class="date" title="2011-03-28 06:13"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103147">
<div class="phpcode"><code><span class="html">If your expression returns a node set, you will get a DOMNodeList instead of a typed result. Instead, try modifying your expression from "//node[1]" to "string(//node[1])".</span></code></div>
  </div>
 </div>
  <div class="note" id="50674">  <div class="votes">
    <div id="Vu50674">
    <a href="/manual/vote-note.php?id=50674&amp;page=domxpath.evaluate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50674">
    <a href="/manual/vote-note.php?id=50674&amp;page=domxpath.evaluate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50674" title="83% like this...">
    4
    </div>
  </div>
  <a href="#50674" class="name">
  <strong class="user"><em>yuriucsal at NOSPAM dot yahoo dot com dot br</em></strong></a><a class="genanchor" href="#50674"> &para;</a><div class="date" title="2005-03-06 12:55"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50674">
<div class="phpcode"><code><span class="html">this class can substitute the method evaluate while it is not validated. Made for Yuri Bastos and Jo�o Gilberto Magalh�es. 
<br />
<br /><span class="default">&lt;?php
<br />
<br />    </span><span class="keyword">class </span><span class="default">XPtahQuery
<br />    </span><span class="keyword">{
<br />        </span><span class="comment">// function returns a DOMNodeList from a relative xPath
<br />        </span><span class="keyword">public static function </span><span class="default">selectNodes</span><span class="keyword">(</span><span class="default">$pNode</span><span class="keyword">, </span><span class="default">$xPath</span><span class="keyword">) 
<br />        {
<br />
<br />            </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">getFullXpath</span><span class="keyword">(</span><span class="default">$pNode</span><span class="keyword">),</span><span class="string">"/"</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);
<br />            </span><span class="default">$xPathQuery </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">getFullXpath</span><span class="keyword">(</span><span class="default">$pNode</span><span class="keyword">),</span><span class="default">$pos</span><span class="keyword">);</span><span class="comment">//to paste  /#document[1]/
<br />            </span><span class="default">$xPathQueryFull </span><span class="keyword">= </span><span class="default">$xPathQuery</span><span class="keyword">. </span><span class="default">$xPath</span><span class="keyword">;
<br />            </span><span class="default">$domXPath </span><span class="keyword">= new </span><span class="default">DOMXPath</span><span class="keyword">(</span><span class="default">$pNode</span><span class="keyword">-&gt;</span><span class="default">ownerDocument</span><span class="keyword">);
<br />            </span><span class="default">$rNodeList </span><span class="keyword">= </span><span class="default">$domXPath</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$xPathQueryFull</span><span class="keyword">);
<br />
<br />                return </span><span class="default">$rNodeList</span><span class="keyword">;
<br />        }
<br />        </span><span class="comment">// function returns a DOMNode from a xPath from other DOMNode
<br />        </span><span class="keyword">public static function </span><span class="default">selectSingleNode</span><span class="keyword">(</span><span class="default">$pNode</span><span class="keyword">, </span><span class="default">$xPath</span><span class="keyword">) 
<br />        {
<br />
<br />            </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">getFullXpath</span><span class="keyword">(</span><span class="default">$pNode</span><span class="keyword">),</span><span class="string">"/"</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);
<br />            </span><span class="default">$xPathQuery </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">getFullXpath</span><span class="keyword">(</span><span class="default">$pNode</span><span class="keyword">),</span><span class="default">$pos</span><span class="keyword">);</span><span class="comment">//to paste  /#document[1]/
<br />            </span><span class="default">$xPathQueryFull </span><span class="keyword">= </span><span class="default">$xPathQuery</span><span class="keyword">. </span><span class="default">$xPath</span><span class="keyword">;
<br />            </span><span class="default">$domXPath </span><span class="keyword">= new </span><span class="default">DOMXPath</span><span class="keyword">(</span><span class="default">$pNode</span><span class="keyword">-&gt;</span><span class="default">ownerDocument</span><span class="keyword">);
<br />            </span><span class="default">$rNode </span><span class="keyword">= </span><span class="default">$domXPath</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$xPathQueryFull</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);
<br />
<br />                return </span><span class="default">$rNode</span><span class="keyword">;
<br />        }
<br />        </span><span class="comment">//utilitaries functions off selectSingleNode
<br />        </span><span class="keyword">private function </span><span class="default">getNodePos</span><span class="keyword">(</span><span class="default">$pNode</span><span class="keyword">, </span><span class="default">$nodeName</span><span class="keyword">)
<br />        {
<br />            if(</span><span class="default">$pNode </span><span class="keyword">== </span><span class="default">null</span><span class="keyword">)
<br />                {
<br />                        return </span><span class="default">0</span><span class="keyword">;
<br />            }
<br />            else
<br />            {
<br />                </span><span class="default">$var </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />                    if (</span><span class="default">$pNode</span><span class="keyword">-&gt;</span><span class="default">previousSibling </span><span class="keyword">!= </span><span class="default">null</span><span class="keyword">)
<br />                    {
<br />                    if (</span><span class="default">$pNode</span><span class="keyword">-&gt;</span><span class="default">previousSibling</span><span class="keyword">-&gt;</span><span class="default">nodeName </span><span class="keyword">== </span><span class="default">$nodeName</span><span class="keyword">)
<br />                    {
<br />                        </span><span class="default">$var </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;
<br />                    }
<br />                    }
<br />                    return </span><span class="default">self</span><span class="keyword">::</span><span class="default">getNodePos</span><span class="keyword">(</span><span class="default">$pNode</span><span class="keyword">-&gt;</span><span class="default">previousSibling</span><span class="keyword">, </span><span class="default">$nodeName</span><span class="keyword">) + </span><span class="default">$var</span><span class="keyword">;
<br />            }
<br />        }
<br />        </span><span class="comment">//utilitaries functions off selectSingleNode
<br />        </span><span class="keyword">private function </span><span class="default">getFullXpath</span><span class="keyword">(</span><span class="default">$pNode</span><span class="keyword">)
<br />        {
<br />            if(</span><span class="default">$pNode </span><span class="keyword">== </span><span class="default">null</span><span class="keyword">)
<br />                {
<br />                        return </span><span class="string">""</span><span class="keyword">;
<br />            }
<br />            else
<br />            {
<br />
<br />                return </span><span class="default">self</span><span class="keyword">::</span><span class="default">getFullXpath</span><span class="keyword">(</span><span class="default">$pNode</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">) . </span><span class="string">"/" </span><span class="keyword">. </span><span class="default">$pNode</span><span class="keyword">-&gt;</span><span class="default">nodeName </span><span class="keyword">. </span><span class="string">"[" </span><span class="keyword">.</span><span class="default">strval</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">getNodePos</span><span class="keyword">(</span><span class="default">$pNode</span><span class="keyword">, </span><span class="default">$pNode</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">) . </span><span class="string">"]"</span><span class="keyword">;</span><span class="comment">//+1 to get the real xPath index
<br />
<br />            </span><span class="keyword">}
<br />        }
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116505">  <div class="votes">
    <div id="Vu116505">
    <a href="/manual/vote-note.php?id=116505&amp;page=domxpath.evaluate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116505">
    <a href="/manual/vote-note.php?id=116505&amp;page=domxpath.evaluate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116505" title="57% like this...">
    1
    </div>
  </div>
  <a href="#116505" class="name">
  <strong class="user"><em>aazaharov81 at gmail dot com</em></strong></a><a class="genanchor" href="#116505"> &para;</a><div class="date" title="2015-01-14 12:48"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116505">
<div class="phpcode"><code><span class="html">To query DOMNodes by their HTML classes, use such snippet<br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// CssClassXPathSelector<br /></span><span class="keyword">function </span><span class="default">ccxs</span><span class="keyword">(</span><span class="default">$class</span><span class="keyword">) {<br />    return </span><span class="string">'[contains(concat(" ", normalize-space(@class), " "), " ' </span><span class="keyword">. </span><span class="default">$class </span><span class="keyword">. </span><span class="string">' ")]'</span><span class="keyword">;<br />}<br /><br /> </span><span class="comment">// then just<br /> </span><span class="default">$domitems </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="string">"//*[@id='searchResultsRows']//a" </span><span class="keyword">. </span><span class="default">ccxs</span><span class="keyword">(</span><span class="string">'listing_row'</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124656">  <div class="votes">
    <div id="Vu124656">
    <a href="/manual/vote-note.php?id=124656&amp;page=domxpath.evaluate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124656">
    <a href="/manual/vote-note.php?id=124656&amp;page=domxpath.evaluate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124656" title="100% like this...">
    1
    </div>
  </div>
  <a href="#124656" class="name">
  <strong class="user"><em>danny at webdevelopers dot eu</em></strong></a><a class="genanchor" href="#124656"> &para;</a><div class="date" title="2020-01-28 11:36"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124656">
<div class="phpcode"><code><span class="html">The only way how to distinguish FALSE returned value from syntax error FALSE is to re-run the XPath expression wrapped in string() function. If must return empty string. If it returns FALSE again then it is an error.<br /><br /><span class="default">&lt;?php<br /><br />        $ret</span><span class="keyword">=</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">xp</span><span class="keyword">-&gt;</span><span class="default">evaluate</span><span class="keyword">(</span><span class="default">$eval</span><span class="keyword">, </span><span class="default">$context</span><span class="keyword">);<br /><br />        </span><span class="comment">// Error detection: DOMXPath::evaluate() returns FALSE on error <br />        // so does DOMXPath::evaluate("boolean(/nothing)") <br />        // @workaround webdevelopers.eu<br />        </span><span class="keyword">if (</span><span class="default">$ret </span><span class="keyword">=== </span><span class="default">false </span><span class="keyword">&amp;&amp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">xp</span><span class="keyword">-&gt;</span><span class="default">evaluate</span><span class="keyword">(</span><span class="string">"string(</span><span class="default">$eval</span><span class="string">)"</span><span class="keyword">, </span><span class="default">$context</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) { <br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Invalid XPath expression "</span><span class="keyword">.</span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$eval</span><span class="keyword">), </span><span class="default">3491</span><span class="keyword">);<br />        }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domxpath.evaluate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domxpath.evaluate.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.domxpath.php">DOMXPath</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="domxpath.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="current">
                            <a href="domxpath.evaluate.php" title="evaluate">evaluate</a>
                        </li>
                                                <li class="">
                            <a href="domxpath.query.php" title="query">query</a>
                        </li>
                                                <li class="">
                            <a href="domxpath.quote.php" title="quote">quote</a>
                        </li>
                                                <li class="">
                            <a href="domxpath.registernamespace.php" title="registerNamespace">registerNamespace</a>
                        </li>
                                                <li class="">
                            <a href="domxpath.registerphpfunctionns.php" title="registerPhpFunctionNS">registerPhpFunctionNS</a>
                        </li>
                                                <li class="">
                            <a href="domxpath.registerphpfunctions.php" title="registerPhpFunctions">registerPhpFunctions</a>
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
