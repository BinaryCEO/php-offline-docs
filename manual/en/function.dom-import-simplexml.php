<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: dom_import_simplexml - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.dom-import-simplexml.php">
 <link rel="shorturl" href="https://www.php.net/dom-import-simplexml">
 <link rel="alternate" href="https://www.php.net/dom-import-simplexml" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.dom.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.dom.php">
 <link rel="next" href="https://www.php.net/manual/en/function.dom-ns-import-simplexml.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.dom-import-simplexml.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.dom-import-simplexml.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.dom-import-simplexml.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.dom-import-simplexml.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.dom-import-simplexml.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.dom-import-simplexml.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.dom-import-simplexml.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.dom-import-simplexml.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.dom-import-simplexml.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.dom-import-simplexml.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.dom-import-simplexml.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets a DOMAttr or DOMElement object from a
   SimpleXMLElement object" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: dom_import_simplexml - Manual" />
<meta name="twitter:description" content="Gets a DOMAttr or DOMElement object from a
   SimpleXMLElement object" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: dom_import_simplexml - Manual" />
<meta itemprop="description" content="Gets a DOMAttr or DOMElement object from a
   SimpleXMLElement object" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets a DOMAttr or DOMElement object from a
   SimpleXMLElement object" />

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
        <a href="function.dom-ns-import-simplexml.php">
          Dom\import_simplexml &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.dom.php">
          &laquo; DOM Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.dom.php'>DOM</a></li>      <li><a href='ref.dom.php'>DOM Functions</a></li>      </ul>
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
            <option value='en/function.dom-import-simplexml.php' selected="selected">English</option>
            <option value='de/function.dom-import-simplexml.php'>German</option>
            <option value='es/function.dom-import-simplexml.php'>Spanish</option>
            <option value='fr/function.dom-import-simplexml.php'>French</option>
            <option value='it/function.dom-import-simplexml.php'>Italian</option>
            <option value='ja/function.dom-import-simplexml.php'>Japanese</option>
            <option value='pt_BR/function.dom-import-simplexml.php'>Brazilian Portuguese</option>
            <option value='ru/function.dom-import-simplexml.php'>Russian</option>
            <option value='tr/function.dom-import-simplexml.php'>Turkish</option>
            <option value='uk/function.dom-import-simplexml.php'>Ukrainian</option>
            <option value='zh/function.dom-import-simplexml.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.dom-import-simplexml" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">dom_import_simplexml</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">dom_import_simplexml</span> &mdash; <span class="dc-title">
   Gets a <span class="classname"><a href="class.domattr.php" class="classname">DOMAttr</a></span> or <span class="classname"><a href="class.domelement.php" class="classname">DOMElement</a></span> object from a
   <span class="classname"><a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a></span> object
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.dom-import-simplexml-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>dom_import_simplexml</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$node</code></span>): <span class="type"><span class="type"><a href="class.domattr.php" class="type DOMAttr">DOMAttr</a></span>|<span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span></span></div>

  <p class="para rdfs-comment">
   This function takes the given attribute or element <code class="parameter">node</code> (a
   <span class="classname"><a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a></span> instance) and creates a
   <span class="classname"><a href="class.domattr.php" class="classname">DOMAttr</a></span> or <span class="classname"><a href="class.domelement.php" class="classname">DOMElement</a></span> node, repectively.
   The new <span class="classname"><a href="class.domnode.php" class="classname">DOMNode</a></span> refers to the same underlying XML node
   as the <span class="classname"><a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a></span>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.dom-import-simplexml-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">node</code></dt>
     <dd>
      <p class="para">
       The attribute or element node to import (a <span class="classname"><a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a></span> instance).
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.dom-import-simplexml-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The <span class="classname"><a href="class.domattr.php" class="classname">DOMAttr</a></span> or <span class="classname"><a href="class.domelement.php" class="classname">DOMElement</a></span>.
  </p>
 </div>

 
 <div class="refsect1 changelog" id="refsect1-function.dom-import-simplexml-changelog">
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
       This function no longer returns <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> on failure.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>

 
 <div class="refsect1 examples" id="refsect1-function.dom-import-simplexml-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-5853">
   <p><strong>Example #1 Import SimpleXML into DOM with <span class="function"><strong>dom_import_simplexml()</strong></span></strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$sxe </span><span style="color: #007700">= </span><span style="color: #0000BB">simplexml_load_string</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;books&gt;&lt;book&gt;&lt;title&gt;blah&lt;/title&gt;&lt;/book&gt;&lt;/books&gt;'</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">$sxe </span><span style="color: #007700">=== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'Error while parsing the document'</span><span style="color: #007700">;<br />    exit;<br />}<br /><br /></span><span style="color: #0000BB">$dom_sxe </span><span style="color: #007700">= </span><span style="color: #0000BB">dom_import_simplexml</span><span style="color: #007700">(</span><span style="color: #0000BB">$sxe</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$dom_sxe</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'Error while converting XML'</span><span style="color: #007700">;<br />    exit;<br />}<br /><br /></span><span style="color: #0000BB">$dom </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">(</span><span style="color: #DD0000">'1.0'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$dom_sxe </span><span style="color: #007700">= </span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">importNode</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom_sxe</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$dom_sxe </span><span style="color: #007700">= </span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom_sxe</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveXML</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">&lt;?xml version=&quot;1.0&quot;?&gt;
&lt;books&gt;&lt;book&gt;&lt;title&gt;blah&lt;/title&gt;&lt;/book&gt;&lt;/books&gt;</pre>
</div>
   </div>
  </div>
  <div class="example" id="example-5854">
   <p><strong>Example #2 Import SimpleXML into DOM and modify SimpleXML through DOM</strong></p>
   <div class="example-contents"><p>
    Error handling omitted for brevity.
   </p></div>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$sxe </span><span style="color: #007700">= </span><span style="color: #0000BB">simplexml_load_string</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;books&gt;&lt;book&gt;&lt;title&gt;blah&lt;/title&gt;&lt;/book&gt;&lt;/books&gt;'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$elt </span><span style="color: #007700">= </span><span style="color: #0000BB">dom_import_simplexml</span><span style="color: #007700">(</span><span style="color: #0000BB">$sxe</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$elt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">"foo"</span><span style="color: #007700">, </span><span style="color: #DD0000">"bar"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$sxe</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">asXML</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">&lt;?xml version=&quot;1.0&quot;?&gt;
&lt;books foo=&quot;bar&quot;&gt;&lt;book&gt;&lt;title&gt;blah&lt;/title&gt;&lt;/book&gt;&lt;/books&gt;</pre>
</div>
   </div>
  </div>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.dom-import-simplexml-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.simplexml-import-dom.php" class="function" rel="rdfs-seeAlso">simplexml_import_dom()</a> - Get a SimpleXMLElement object from an XML or HTML node</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/functions/dom-import-simplexml.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.dom-import-simplexml%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.dom-import-simplexml&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dom-import-simplexml.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="79786">  <div class="votes">
    <div id="Vu79786">
    <a href="/manual/vote-note.php?id=79786&amp;page=function.dom-import-simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79786">
    <a href="/manual/vote-note.php?id=79786&amp;page=function.dom-import-simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79786" title="80% like this...">
    13
    </div>
  </div>
  <a href="#79786" class="name">
  <strong class="user"><em>crescentfreshpot at yahoo dot com</em></strong></a><a class="genanchor" href="#79786"> &para;</a><div class="date" title="2007-12-12 12:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79786">
<div class="phpcode"><code><span class="html">justinpatrin at php dot net:<br />&gt; To get a proper DOM document (which you need to do most things) you need...<br /><br />No you don't. Just do: <br /><span class="default">&lt;?php<br />$dom </span><span class="keyword">= </span><span class="default">dom_import_simplexml</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">)-&gt;</span><span class="default">ownerDocument</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125339">  <div class="votes">
    <div id="Vu125339">
    <a href="/manual/vote-note.php?id=125339&amp;page=function.dom-import-simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125339">
    <a href="/manual/vote-note.php?id=125339&amp;page=function.dom-import-simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125339" title="100% like this...">
    3
    </div>
  </div>
  <a href="#125339" class="name">
  <strong class="user"><em>h4ss4n3 at hyj4z1 dot me</em></strong></a><a class="genanchor" href="#125339"> &para;</a><div class="date" title="2020-09-08 08:08"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125339">
<div class="phpcode"><code><span class="html">//No need to initiate, import and append on example#1<br /><br />(...)<br />$dom_sxe = dom_import_simplexml($sxe);<br />if (!$dom_sxe) {<br />    echo 'Erreur lors de la conversion du XML';<br />    exit;<br />}<br /><br />//$dom = new DOMDocument('1.0');<br />//$dom_sxe = $dom-&gt;importNode($dom_sxe, true);<br />//$dom_sxe = $dom-&gt;appendChild($dom_sxe);<br /><br />//use ownerDocument propertie <br />echo $dom-&gt;ownerDocument-&gt;saveXML();<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="89402">  <div class="votes">
    <div id="Vu89402">
    <a href="/manual/vote-note.php?id=89402&amp;page=function.dom-import-simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89402">
    <a href="/manual/vote-note.php?id=89402&amp;page=function.dom-import-simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89402" title="76% like this...">
    9
    </div>
  </div>
  <a href="#89402" class="name">
  <strong class="user"><em>Jeff M</em></strong></a><a class="genanchor" href="#89402"> &para;</a><div class="date" title="2009-03-06 01:09"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89402">
<div class="phpcode"><code><span class="html">SimpleXML is an 'Object Mapping XML API'. It is not DOM, per se. SimpleXML converts the XML elements into PHP's native data types.<br /><br />The dom_import_simplexml and simplexml_import_dom functions do *not* create separate copies of the original object. You are free to use the methods of either or both interchangeably, since the underlying instance is the same.<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">// initialize a simplexml object<br />    </span><span class="default">$sxe </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="string">'&lt;root/&gt;'</span><span class="keyword">);<br />    <br />    </span><span class="comment">// get a dom interface on the simplexml object<br />    </span><span class="default">$dom </span><span class="keyword">= </span><span class="default">dom_import_simplexml</span><span class="keyword">(</span><span class="default">$sxe</span><span class="keyword">);<br /><br />    </span><span class="comment">// dom adds a new element under the root<br />    </span><span class="default">$element </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(new </span><span class="default">DOMElement</span><span class="keyword">(</span><span class="string">'dom_element'</span><span class="keyword">));<br />    <br />    </span><span class="comment">// dom adds an attribute on the new element<br />    </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">'creator'</span><span class="keyword">, </span><span class="string">'dom'</span><span class="keyword">);<br /><br />    </span><span class="comment">// simplexml adds an attribute on the dom element<br />    </span><span class="default">$sxe</span><span class="keyword">-&gt;</span><span class="default">dom_element</span><span class="keyword">[</span><span class="string">'sxe_attribute'</span><span class="keyword">] = </span><span class="string">'added by simplexml'</span><span class="keyword">;<br /><br />    </span><span class="comment">// simplexml adds a new element under the root<br />    </span><span class="default">$element </span><span class="keyword">= </span><span class="default">$sxe</span><span class="keyword">-&gt;</span><span class="default">addChild</span><span class="keyword">(</span><span class="string">'sxe_element'</span><span class="keyword">);<br />    <br />    </span><span class="comment">// simplexml adds an attribute on the new element<br />    </span><span class="default">$element</span><span class="keyword">[</span><span class="string">'creator'</span><span class="keyword">] = </span><span class="string">'simplexml'</span><span class="keyword">;<br /><br />    </span><span class="comment">// dom finds the simplexml element (via DOMNodeList-&gt;index)<br />    </span><span class="default">$element </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'sxe_element'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /><br />    </span><span class="comment">// dom adds an attribute on the simplexml element<br />    </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">'dom_attribute'</span><span class="keyword">, </span><span class="string">'added by dom'</span><span class="keyword">);<br />    <br />    echo (</span><span class="string">'&lt;pre&gt;'</span><span class="keyword">);            <br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$sxe</span><span class="keyword">);<br />    echo (</span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Outputs:<br /><br />SimpleXMLElement Object<br />(<br />    [dom_element] =&gt; SimpleXMLElement Object<br />        (<br />            [@attributes] =&gt; Array<br />                (<br />                    [creator] =&gt; dom<br />                    [sxe_attribute] =&gt; added by simplexml<br />                )<br /><br />        )<br /><br />    [sxe_element] =&gt; SimpleXMLElement Object<br />        (<br />            [@attributes] =&gt; Array<br />                (<br />                    [creator] =&gt; simplexml<br />                    [dom_attribute] =&gt; added by dom<br />                )<br /><br />        )<br /><br />)<br /><br />What this illustrates is that both interfaces are operating on the same underlying object instance. Also, when you dom_import_simplexml, you can create and add new elements without reference to an ownerDocument (or documentElement).<br /><br />So passing a SimpleXMLElement to another method does not mean the recipient is limited to using SimpleXML methods.<br /> <br />Hey Presto! Your telescope has become a pair of binoculars!</span></code></div>
  </div>
 </div>
  <div class="note" id="66996">  <div class="votes">
    <div id="Vu66996">
    <a href="/manual/vote-note.php?id=66996&amp;page=function.dom-import-simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66996">
    <a href="/manual/vote-note.php?id=66996&amp;page=function.dom-import-simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66996" title="50% like this...">
    0
    </div>
  </div>
  <a href="#66996" class="name">
  <strong class="user"><em>justinpatrin at php dot net</em></strong></a><a class="genanchor" href="#66996"> &para;</a><div class="date" title="2006-06-01 09:44"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66996">
<div class="phpcode"><code><span class="html">I've found that newer versions of PHP5 require some special syntax in order to properly convert between SimpleXML and DOM. It's not as easy as calling dom_import_simplexml() with a SimpleXML node. To get a proper DOM document (which you need to do most things) you need:<br /><span class="default">&lt;?php<br /></span><span class="comment">//$xml is a SimpleXML instance<br /></span><span class="default">$domnode </span><span class="keyword">= </span><span class="default">dom_import_simplexml</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br /></span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$domnode </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">importNode</span><span class="keyword">(</span><span class="default">$domnode</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$domnode</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Switching back, though, is, well...simple.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//$dom is a DOMDocument instance<br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="default">simplexml_import_dom</span><span class="keyword">(</span><span class="default">$dom</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119357">  <div class="votes">
    <div id="Vu119357">
    <a href="/manual/vote-note.php?id=119357&amp;page=function.dom-import-simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119357">
    <a href="/manual/vote-note.php?id=119357&amp;page=function.dom-import-simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119357" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#119357" class="name">
  <strong class="user"><em>biniou at yopmail dot com</em></strong></a><a class="genanchor" href="#119357"> &para;</a><div class="date" title="2016-05-20 09:58"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119357">
<div class="phpcode"><code><span class="html">Very useful to add a CDATA node with SimpleXMLElement (use it like addChild) :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">My_SimpleXMLElement </span><span class="keyword">extends </span><span class="default">SimpleXMLElement </span><span class="keyword">{<br />    <br />    public function </span><span class="default">addChildWithCData</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">) {<br />        </span><span class="default">$new_child </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">addChild</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);<br />        <br />        </span><span class="default">$node </span><span class="keyword">= </span><span class="default">dom_import_simplexml</span><span class="keyword">(</span><span class="default">$new_child</span><span class="keyword">); <br />        </span><span class="default">$no </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">ownerDocument</span><span class="keyword">; <br />        </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$no</span><span class="keyword">-&gt;</span><span class="default">createCDATASection</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)); <br />    <br />        return </span><span class="default">$new_child</span><span class="keyword">;<br />    }<br />}</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.dom-import-simplexml&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dom-import-simplexml.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.dom.php">DOM Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.dom-import-simplexml.php" title="dom_&#8203;import_&#8203;simplexml">dom_&#8203;import_&#8203;simplexml</a>
                        </li>
                                                <li class="">
                            <a href="function.dom-ns-import-simplexml.php" title="Dom\import_&#8203;simplexml">Dom\import_&#8203;simplexml</a>
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
