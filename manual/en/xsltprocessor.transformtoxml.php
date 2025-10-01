<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: XSLTProcessor::transformToXml - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/xsltprocessor.transformtoxml.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/xsltprocessor.transformtoxml.php">
 <link rel="alternate" href="https://www.php.net/manual/en/xsltprocessor.transformtoxml.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.xsltprocessor.php">
 <link rel="prev" href="https://www.php.net/manual/en/xsltprocessor.transformtouri.php">
 <link rel="next" href="https://www.php.net/manual/en/refs.ui.php">

 <link rel="alternate" href="https://www.php.net/manual/en/xsltprocessor.transformtoxml.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/xsltprocessor.transformtoxml.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/xsltprocessor.transformtoxml.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/xsltprocessor.transformtoxml.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/xsltprocessor.transformtoxml.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/xsltprocessor.transformtoxml.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/xsltprocessor.transformtoxml.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/xsltprocessor.transformtoxml.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/xsltprocessor.transformtoxml.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/xsltprocessor.transformtoxml.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/xsltprocessor.transformtoxml.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Transform to XML" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: XSLTProcessor::transformToXml - Manual" />
<meta name="twitter:description" content="Transform to XML" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: XSLTProcessor::transformToXml - Manual" />
<meta itemprop="description" content="Transform to XML" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Transform to XML" />

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
        <a href="refs.ui.php">
          GUI Extensions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="xsltprocessor.transformtouri.php">
          &laquo; XSLTProcessor::transformToUri        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.xsl.php'>XSL</a></li>      <li><a href='class.xsltprocessor.php'>XSLTProcessor</a></li>      </ul>
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
            <option value='en/xsltprocessor.transformtoxml.php' selected="selected">English</option>
            <option value='de/xsltprocessor.transformtoxml.php'>German</option>
            <option value='es/xsltprocessor.transformtoxml.php'>Spanish</option>
            <option value='fr/xsltprocessor.transformtoxml.php'>French</option>
            <option value='it/xsltprocessor.transformtoxml.php'>Italian</option>
            <option value='ja/xsltprocessor.transformtoxml.php'>Japanese</option>
            <option value='pt_BR/xsltprocessor.transformtoxml.php'>Brazilian Portuguese</option>
            <option value='ru/xsltprocessor.transformtoxml.php'>Russian</option>
            <option value='tr/xsltprocessor.transformtoxml.php'>Turkish</option>
            <option value='uk/xsltprocessor.transformtoxml.php'>Ukrainian</option>
            <option value='zh/xsltprocessor.transformtoxml.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="xsltprocessor.transformtoxml" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">XSLTProcessor::transformToXml</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">XSLTProcessor::transformToXml</span> &mdash; <span class="dc-title">Transform to XML</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-xsltprocessor.transformtoxml-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>XSLTProcessor::transformToXml</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$document</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Transforms the source node to a string applying the stylesheet given by
   the <span class="function"><a href="xsltprocessor.importstylesheet.php" class="function">xsltprocessor::importStylesheet()</a></span> method.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-xsltprocessor.transformtoxml-parameters">
  <h3 class="title">Parameters</h3><p class="para">
   <dl>
    
     <dt><code class="parameter">document</code></dt>
     <dd>
      <p class="para">
       The <span class="classname"><a href="class.dom-document.php" class="classname">Dom\Document</a></span>, <span class="classname"><a href="class.domdocument.php" class="classname">DOMDocument</a></span>, <span class="classname"><a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a></span> or libxml-compatible
       object to be transformed.
      </p>
     </dd>
    
    
     <dt><code class="parameter">returnClass</code></dt>
     <dd>
      <p class="para">
       This optional parameter may be used so that
       <span class="methodname"><a href="xsltprocessor.transformtodoc.php" class="methodname">XSLTProcessor::transformToDoc()</a></span>
       will return an object of the specified class.
       That class should either extend or be the same class as <code class="parameter">document</code>&#039;s class.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-xsltprocessor.transformtoxml-errors">
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


 <div class="refsect1 returnvalues" id="refsect1-xsltprocessor.transformtoxml-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The result of the transformation as a string or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-xsltprocessor.transformtoxml-changelog">
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
      <td>8.4.0</td>
      <td>
       Now throws an <span class="exceptionname"><a href="class.error.php" class="exceptionname">Error</a></span> if the callback
       cannot be invoked, instead of emitting a warning.
      </td>
     </tr>

     <tr>
      <td>8.4.0</td>
      <td>
       Added support for <span class="classname"><a href="class.dom-document.php" class="classname">Dom\Document</a></span>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-xsltprocessor.transformtoxml-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5939">
    <p><strong>Example #1 Transforming to a string</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Load the XML source<br /></span><span style="color: #0000BB">$xml </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$xml</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #DD0000">'collection.xml'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$xsl </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$xsl</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #DD0000">'collection.xsl'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Configure the transformer<br /></span><span style="color: #0000BB">$proc </span><span style="color: #007700">= new </span><span style="color: #0000BB">XSLTProcessor</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$proc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">importStyleSheet</span><span style="color: #007700">(</span><span style="color: #0000BB">$xsl</span><span style="color: #007700">); </span><span style="color: #FF8000">// attach the xsl rules<br /><br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$proc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">transformToXML</span><span style="color: #007700">(</span><span style="color: #0000BB">$xml</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Hey! Welcome to Nicolas Eliaszewicz&#039;s sweet CD collection!

&lt;h1&gt;Fight for your mind&lt;/h1&gt;&lt;h2&gt;by Ben Harper - 1995&lt;/h2&gt;&lt;hr&gt;
&lt;h1&gt;Electric Ladyland&lt;/h1&gt;&lt;h2&gt;by Jimi Hendrix - 1997&lt;/h2&gt;&lt;hr&gt;</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-5940">
    <p><strong>Example #2 Transforming to a string using <span class="classname"><a href="class.dom-document.php" class="classname">Dom\Document</a></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$xml </span><span style="color: #007700">= </span><span style="color: #0000BB">Dom\XMLDocument</span><span style="color: #007700">::</span><span style="color: #0000BB">createFromFile</span><span style="color: #007700">(</span><span style="color: #DD0000">'collection.xml'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$xsl </span><span style="color: #007700">= </span><span style="color: #0000BB">Dom\XMLDocument</span><span style="color: #007700">::</span><span style="color: #0000BB">createFromFile</span><span style="color: #007700">(</span><span style="color: #DD0000">'collection.xsl'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Configure the transformer<br /></span><span style="color: #0000BB">$proc </span><span style="color: #007700">= new </span><span style="color: #0000BB">XSLTProcessor</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$proc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">importStyleSheet</span><span style="color: #007700">(</span><span style="color: #0000BB">$xsl</span><span style="color: #007700">); </span><span style="color: #FF8000">// attach the xsl rules<br /><br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$proc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">transformToXML</span><span style="color: #007700">(</span><span style="color: #0000BB">$xml</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Hey! Welcome to Nicolas Eliaszewicz&#039;s sweet CD collection!

&lt;h1&gt;Fight for your mind&lt;/h1&gt;&lt;h2&gt;by Ben Harper - 1995&lt;/h2&gt;&lt;hr&gt;
&lt;h1&gt;Electric Ladyland&lt;/h1&gt;&lt;h2&gt;by Jimi Hendrix - 1997&lt;/h2&gt;&lt;hr&gt;</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-xsltprocessor.transformtoxml-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="xsltprocessor.transformtodoc.php" class="function" rel="rdfs-seeAlso">XSLTProcessor::transformToDoc()</a> - Transform to a document</span></li>
    <li><span class="function"><a href="xsltprocessor.transformtouri.php" class="function" rel="rdfs-seeAlso">XSLTProcessor::transformToUri()</a> - Transform to URI</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/xsl/xsltprocessor/transformtoxml.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fxsltprocessor.transformtoxml%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=xsltprocessor.transformtoxml&amp;repo=en&amp;redirect=https://www.php.net/manual/en/xsltprocessor.transformtoxml.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="68894">  <div class="votes">
    <div id="Vu68894">
    <a href="/manual/vote-note.php?id=68894&amp;page=xsltprocessor.transformtoxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68894">
    <a href="/manual/vote-note.php?id=68894&amp;page=xsltprocessor.transformtoxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68894" title="100% like this...">
    6
    </div>
  </div>
  <a href="#68894" class="name">
  <strong class="user"><em>werner@mollentze</em></strong></a><a class="genanchor" href="#68894"> &para;</a><div class="date" title="2006-08-15 01:53"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68894">
<div class="phpcode"><code><span class="html">The transformToXML function can produce valid XHTML output - it honours the &lt;xsl:output&gt; element's attributes, which defines the format of the output document.<br /><br />For instance, if you want valid XHTML 1.0 Strict output, you can provide the following attribute values for the &lt;xsl:output&gt; element in your XSL stylesheet:<br /><br />&lt;xsl:output <br />method="xml" <br />doctype-system="<a href="http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" rel="nofollow" target="_blank">http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd</a>"  <br />doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN" /&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="62081">  <div class="votes">
    <div id="Vu62081">
    <a href="/manual/vote-note.php?id=62081&amp;page=xsltprocessor.transformtoxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62081">
    <a href="/manual/vote-note.php?id=62081&amp;page=xsltprocessor.transformtoxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62081" title="100% like this...">
    5
    </div>
  </div>
  <a href="#62081" class="name">
  <strong class="user"><em>lsoethout at hotmail dot com</em></strong></a><a class="genanchor" href="#62081"> &para;</a><div class="date" title="2006-02-19 02:35"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62081">
<div class="phpcode"><code><span class="html">The function transformToXML has a problem with the meta content type tag. It outputs it like this:<br /><br />    &lt;meta http-equiv="Content-Type" content="text/html; charset=UTF-8"&gt;<br /><br />which is not correct X(HT)ML, because it closes with '&gt;' instead of with '/&gt;'.<br /><br />A way to get the output correct is to use instead of transformToXML first transformToDoc anf then saveHTML:<br /><br />    $domTranObj = $xslProcessor-&gt;transformToDoc($domXmlObj);<br />    $domHtmlText = $domTranObj-&gt;saveHTML();</span></code></div>
  </div>
 </div>
  <div class="note" id="94861">  <div class="votes">
    <div id="Vu94861">
    <a href="/manual/vote-note.php?id=94861&amp;page=xsltprocessor.transformtoxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94861">
    <a href="/manual/vote-note.php?id=94861&amp;page=xsltprocessor.transformtoxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94861" title="88% like this...">
    7
    </div>
  </div>
  <a href="#94861" class="name">
  <strong class="user"><em>Charlie Murder</em></strong></a><a class="genanchor" href="#94861"> &para;</a><div class="date" title="2009-11-29 07:43"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94861">
<div class="phpcode"><code><span class="html">To prevent your xsl file from automatically prepending <br /><br />&lt;?xml version="1.0"?&gt; <br /><br />whilst keeping the output as xml, which is preferable for a validated strict xhtml file, rather specify output as <br /><br />&lt;xsl:output method="xml" omit-xml-declaration="yes" /&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="94931">  <div class="votes">
    <div id="Vu94931">
    <a href="/manual/vote-note.php?id=94931&amp;page=xsltprocessor.transformtoxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94931">
    <a href="/manual/vote-note.php?id=94931&amp;page=xsltprocessor.transformtoxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94931" title="100% like this...">
    3
    </div>
  </div>
  <a href="#94931" class="name">
  <strong class="user"><em>michael dot weibel at tilllate dot com</em></strong></a><a class="genanchor" href="#94931"> &para;</a><div class="date" title="2009-12-03 01:33"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94931">
<div class="phpcode"><code><span class="html">If you retrieve "false" from the transformToXML method, use libxml_get_last_error() or libxml_get_errors() to retrieve the errors.</span></code></div>
  </div>
 </div>
  <div class="note" id="80887">  <div class="votes">
    <div id="Vu80887">
    <a href="/manual/vote-note.php?id=80887&amp;page=xsltprocessor.transformtoxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80887">
    <a href="/manual/vote-note.php?id=80887&amp;page=xsltprocessor.transformtoxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80887" title="100% like this...">
    3
    </div>
  </div>
  <a href="#80887" class="name">
  <strong class="user"><em>john</em></strong></a><a class="genanchor" href="#80887"> &para;</a><div class="date" title="2008-02-05 11:09"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80887">
<div class="phpcode"><code><span class="html">If your xsl doesn't have &lt;html&gt; tags. The output will contain &lt;?xml version="1.0"?&gt;. To fix this you can add the following to your xsl stylesheet:<br /><br />&lt;xsl:output<br />method="html" /&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="99932">  <div class="votes">
    <div id="Vu99932">
    <a href="/manual/vote-note.php?id=99932&amp;page=xsltprocessor.transformtoxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99932">
    <a href="/manual/vote-note.php?id=99932&amp;page=xsltprocessor.transformtoxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99932" title="80% like this...">
    6
    </div>
  </div>
  <a href="#99932" class="name">
  <strong class="user"><em>zweibieren at yahoo dot com</em></strong></a><a class="genanchor" href="#99932"> &para;</a><div class="date" title="2010-09-15 11:15"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99932">
<div class="phpcode"><code><span class="html">Entities are omitted from the output with the code above.  
<br />The symptom was that &amp;nbsp; 
<br />-- which should work with UTF-8 encoding -- 
<br />did not even get to XSLTProcessor, let alone through it.
<br />After too much hacking I discovered the simple fix:
<br />set substituteEntities to true in the DOMDocument for the XSL file.
<br />That is, replace the loading of the xsl document with
<br />
<br /><span class="default">&lt;?php
<br />   $xsl </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">;
<br />   </span><span class="default">$xsl</span><span class="keyword">-&gt;</span><span class="default">substituteEntities </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;    </span><span class="comment">// &lt;===added line
<br />   </span><span class="default">$xsl</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="string">'collection.xsl'</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />However, this fails when data entries have HTML entity references. (Some database entries may even contain user generated text.) libxml has the pedantic habit of throwing a FATAL error for any undefined entitiy. Solution: hide the entities so libxml doesn't see them.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">hideEntities</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) { 
<br />        return </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"&amp;"</span><span class="keyword">, </span><span class="string">"&amp;amp;"</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">); 
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />You could just add this to the example, but it is tidier to define a function to load data into a DOMDocument. This way you don't need entity declarations in catalog.xsl, either.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// Added function for  Example #1  
<br />
<br />/** Load an XML file and create a DOMDocument.
<br />Handles arbitrary entities, even undefined ones.
<br />*/
<br /></span><span class="keyword">function </span><span class="default">fileToDOMDoc</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">) {
<br />    </span><span class="default">$dom</span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">;
<br />    </span><span class="default">$xmldata </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);
<br />    </span><span class="default">$xmldata </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"&amp;"</span><span class="keyword">, </span><span class="string">"&amp;amp;"</span><span class="keyword">, </span><span class="default">$xmldata</span><span class="keyword">);  </span><span class="comment">// disguise &amp;s going IN to loadXML()
<br />    </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">substituteEntities </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;  </span><span class="comment">// collapse &amp;s going OUT to transformToXML()
<br />    </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$xmldata</span><span class="keyword">);
<br />    return </span><span class="default">$dom</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="comment">// Compare with  Example #1 Transforming to a string
<br />
<br />// Load the XML sources
<br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="default">fileToDOMDoc</span><span class="keyword">(</span><span class="string">'collection.xml'</span><span class="keyword">);
<br /></span><span class="default">$xsl </span><span class="keyword">= </span><span class="default">fileToDOMDoc</span><span class="keyword">(</span><span class="string">'collection.xsl'</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Configure the transformer
<br /></span><span class="default">$proc </span><span class="keyword">= new </span><span class="default">XSLTProcessor</span><span class="keyword">;
<br /></span><span class="default">$proc</span><span class="keyword">-&gt;</span><span class="default">importStyleSheet</span><span class="keyword">(</span><span class="default">$xsl</span><span class="keyword">); 
<br />
<br /></span><span class="comment">// transform $xml according to the stylesheet $xsl
<br /></span><span class="keyword">echo </span><span class="default">$proc</span><span class="keyword">-&gt;</span><span class="default">transformToXML</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">); </span><span class="comment">// transform the data
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116820">  <div class="votes">
    <div id="Vu116820">
    <a href="/manual/vote-note.php?id=116820&amp;page=xsltprocessor.transformtoxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116820">
    <a href="/manual/vote-note.php?id=116820&amp;page=xsltprocessor.transformtoxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116820" title="80% like this...">
    3
    </div>
  </div>
  <a href="#116820" class="name">
  <strong class="user"><em>Josef Hornych</em></strong></a><a class="genanchor" href="#116820"> &para;</a><div class="date" title="2015-03-04 07:42"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116820">
<div class="phpcode"><code><span class="html">Note that the method's name is sort of deceiving, because it does not only output XML, but any string that is generated by the processor. It should rather be called transformToString. So if your output method is  "text/plain", for example, this is the way to receive the resulting string.</span></code></div>
  </div>
 </div>
  <div class="note" id="73872">  <div class="votes">
    <div id="Vu73872">
    <a href="/manual/vote-note.php?id=73872&amp;page=xsltprocessor.transformtoxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73872">
    <a href="/manual/vote-note.php?id=73872&amp;page=xsltprocessor.transformtoxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73872" title="50% like this...">
    0
    </div>
  </div>
  <a href="#73872" class="name">
  <strong class="user"><em>jeandenis dot boivin at gmail dot com</em></strong></a><a class="genanchor" href="#73872"> &para;</a><div class="date" title="2007-03-13 04:59"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73872">
<div class="phpcode"><code><span class="html">$domTranObj = $xslProcessor-&gt;transformToDoc($domXmlObj);<br />$domHtmlText = $domTranObj-&gt;saveHTML();<br /><br />Do fix the &lt;meta&gt; for valid XHTML but do not correctly end empty node like &lt;br /&gt; which ouput like this : &lt;br&gt;&lt;/br&gt;<br /><br />Some browser note this as 2 different &lt;br /&gt; ...<br /><br />To fix this use <br /><br />$domTranObj = $xslProcessor-&gt;transformToDoc($domXmlObj);<br />$domHtmlText = $domTranObj-&gt;saveXML();</span></code></div>
  </div>
 </div>
  <div class="note" id="78206">  <div class="votes">
    <div id="Vu78206">
    <a href="/manual/vote-note.php?id=78206&amp;page=xsltprocessor.transformtoxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78206">
    <a href="/manual/vote-note.php?id=78206&amp;page=xsltprocessor.transformtoxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78206" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#78206" class="name">
  <strong class="user"><em>smubldg4 at hotmail dot com</em></strong></a><a class="genanchor" href="#78206"> &para;</a><div class="date" title="2007-10-02 08:58"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78206">
<div class="phpcode"><code><span class="html">How to fix:: *Fatal error: Call to undefined method domdocument::load()*<br /><br />If you get this error, visit the php.ini file and try commenting out the following, like this:<br /><br />;[PHP_DOMXML]<br />;extension=php_domxml.dll<br /><br />Suddenly, the wonderfully simple example above works as advertised.</span></code></div>
  </div>
 </div>
  <div class="note" id="72519">  <div class="votes">
    <div id="Vu72519">
    <a href="/manual/vote-note.php?id=72519&amp;page=xsltprocessor.transformtoxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72519">
    <a href="/manual/vote-note.php?id=72519&amp;page=xsltprocessor.transformtoxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72519" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#72519" class="name">
  <strong class="user"><em>Thomas Praxl</em></strong></a><a class="genanchor" href="#72519"> &para;</a><div class="date" title="2007-01-22 01:36"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72519">
<div class="phpcode"><code><span class="html">I noticed an incompatibility between libxslt (php4) and the transformation through XSLTProcessor.<br />Php5 and the XSLTProcessor seem to add implicit CDATA-Section-Elements.<br />If you have an xslt like <br /><br />&lt;script type="text/javascript"&gt;<br />foo('&lt;xsl:value-of select="bar" /&gt;');<br />&lt;/script&gt;<br /><br />It will result in<br /><br />&lt;script type="text/javascript"&gt;&lt;![CDATA[<br />foo('xpath-result-of-bar');<br />]]&gt;&lt;/script&gt;<br /><br />(at least for output method="xml" in order to produce strict xhtml with xslt1)<br /><br />That brings up an error (at least) in Firefox 1.5 as it is no valid javascript.<br />It should look like that:<br /><br />&lt;script type="text/javascript"&gt;//&lt;![CDATA[<br />foo('xpath-result-of-bar');<br />]]&gt;&lt;/script&gt;<br /><br />As the CDATA-Section is implicit, I was not able to disable the output or to put a '//' before it.<br /><br />I tried everything about xsl:text disable-output-escaping="yes" <br /><br />I also tried to disable implicit adding of CDATA with &lt;output cdata-section-elements="" /&gt;<br />(I thought that would exclude script-tags. It didn't).<br /><br />The solution:<br /><br />&lt;xsl:text disable-output-escaping="yes"&gt;&amp;lt;script type="text/javascript"&amp;gt;<br />  foo('&lt;/xsl:text&gt;&lt;xsl:value-of select="bar" /&gt;&lt;xsl:text disable-output-escaping="yes"&gt;');<br />            &amp;lt;/script&amp;gt;&lt;/xsl:text&gt;<br /><br />Simple, but it took me a while.</span></code></div>
  </div>
 </div>
  <div class="note" id="48765">  <div class="votes">
    <div id="Vu48765">
    <a href="/manual/vote-note.php?id=48765&amp;page=xsltprocessor.transformtoxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48765">
    <a href="/manual/vote-note.php?id=48765&amp;page=xsltprocessor.transformtoxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48765" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#48765" class="name">
  <strong class="user"><em>jlipps at mac</em></strong></a><a class="genanchor" href="#48765"> &para;</a><div class="date" title="2005-01-06 08:05"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48765">
<div class="phpcode"><code><span class="html">transformToXML, if you have registered PHP functions previously, does indeed attempt to execute these functions when it finds them in a php:function() pseudo-XSL function. It even finds static functions within classes, for instance:<br /><br />&lt;xsl:value-of select="php:function('MyClass::MyFunction', string(@attr), string(.))" disable-output-escaping="yes"/&gt;<br /><br />However, in this situation transformToXML does not try to execute "MyClass::MyFunction()". Instead, it executes "myclass:myfunction()". In PHP, since classes and functions are (I think) case-insensitive, this causes no problems.<br /><br />A problem arises when you are combining these features with the __autoload() feature. So, say I have MyClass.php which contains the MyFunction definition. Generally, if I call MyClass::MyFunction, PHP will pass "MyClass" to __autoload(), and __autoload() will open up "MyClass.php".<br /><br />What we have just seen, however, means that transformToXML will pass "myclass" to __autoload(), not "MyClass", with the consequence that PHP will try to open "myclass.php", which doesn't exist, instead of "MyClass.php", which does. On case-insensitive operating systems, this is not significant, but on my RedHat server, it is--PHP will give a file not found error.<br /><br />The only solution I have found is to edit the __autoload() function to look for class names which are used in my XSL files, and manually change them to the correct casing.<br /><br />Another solution, obviously, is to use all-lowercase class and file names.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=xsltprocessor.transformtoxml&amp;repo=en&amp;redirect=https://www.php.net/manual/en/xsltprocessor.transformtoxml.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.xsltprocessor.php">XSLTProcessor</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="xsltprocessor.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.getparameter.php" title="getParameter">getParameter</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.getsecurityprefs.php" title="getSecurityPrefs">getSecurityPrefs</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.hasexsltsupport.php" title="hasExsltSupport">hasExsltSupport</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.importstylesheet.php" title="importStylesheet">importStylesheet</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.registerphpfunctionns.php" title="registerPHPFunctionNS">registerPHPFunctionNS</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.registerphpfunctions.php" title="registerPHPFunctions">registerPHPFunctions</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.removeparameter.php" title="removeParameter">removeParameter</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.setparameter.php" title="setParameter">setParameter</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.setprofiling.php" title="setProfiling">setProfiling</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.setsecurityprefs.php" title="setSecurityPrefs">setSecurityPrefs</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.transformtodoc.php" title="transformToDoc">transformToDoc</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.transformtouri.php" title="transformToUri">transformToUri</a>
                        </li>
                                                <li class="current">
                            <a href="xsltprocessor.transformtoxml.php" title="transformToXml">transformToXml</a>
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
