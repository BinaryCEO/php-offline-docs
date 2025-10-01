<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMImplementation::createDocument - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domimplementation.createdocument.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domimplementation.createdocument.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domimplementation.createdocument.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domimplementation.php">
 <link rel="prev" href="https://www.php.net/manual/en/domimplementation.construct.php">
 <link rel="next" href="https://www.php.net/manual/en/domimplementation.createdocumenttype.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domimplementation.createdocument.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domimplementation.createdocument.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domimplementation.createdocument.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domimplementation.createdocument.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domimplementation.createdocument.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domimplementation.createdocument.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domimplementation.createdocument.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domimplementation.createdocument.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domimplementation.createdocument.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domimplementation.createdocument.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domimplementation.createdocument.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creates a DOMDocument object of the specified type with its document element" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMImplementation::createDocument - Manual" />
<meta name="twitter:description" content="Creates a DOMDocument object of the specified type with its document element" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMImplementation::createDocument - Manual" />
<meta itemprop="description" content="Creates a DOMDocument object of the specified type with its document element" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creates a DOMDocument object of the specified type with its document element" />

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
        <a href="domimplementation.createdocumenttype.php">
          DOMImplementation::createDocumentType &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domimplementation.construct.php">
          &laquo; DOMImplementation::__construct        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.dom.php'>DOM</a></li>      <li><a href='class.domimplementation.php'>DOMImplementation</a></li>      </ul>
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
            <option value='en/domimplementation.createdocument.php' selected="selected">English</option>
            <option value='de/domimplementation.createdocument.php'>German</option>
            <option value='es/domimplementation.createdocument.php'>Spanish</option>
            <option value='fr/domimplementation.createdocument.php'>French</option>
            <option value='it/domimplementation.createdocument.php'>Italian</option>
            <option value='ja/domimplementation.createdocument.php'>Japanese</option>
            <option value='pt_BR/domimplementation.createdocument.php'>Brazilian Portuguese</option>
            <option value='ru/domimplementation.createdocument.php'>Russian</option>
            <option value='tr/domimplementation.createdocument.php'>Turkish</option>
            <option value='uk/domimplementation.createdocument.php'>Ukrainian</option>
            <option value='zh/domimplementation.createdocument.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domimplementation.createdocument" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMImplementation::createDocument</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMImplementation::createDocument</span> &mdash; <span class="dc-title">
   Creates a DOMDocument object of the specified type with its document element
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domimplementation.createdocument-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMImplementation::createDocument</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespace</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code><span class="initializer"> = &quot;&quot;</span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.domdocumenttype.php" class="type DOMDocumentType">DOMDocumentType</a></span></span> <code class="parameter">$doctype</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="class.domdocument.php" class="type DOMDocument">DOMDocument</a></span></div>

  <p class="para rdfs-comment">
   Creates a <span class="classname"><a href="class.domdocument.php" class="classname">DOMDocument</a></span> object of the specified type
   with its document element.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-domimplementation.createdocument-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">namespace</code></dt>
     <dd>
      <p class="para">
       The namespace URI of the document element to create.
      </p>
     </dd>
    
    
     <dt><code class="parameter">qualifiedName</code></dt>
     <dd>
      <p class="para">
       The qualified name of the document element to create.
      </p>
     </dd>
    
    
     <dt><code class="parameter">doctype</code></dt>
     <dd>
      <p class="para">
       The type of document to create or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-domimplementation.createdocument-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A new <span class="classname"><a href="class.domdocument.php" class="classname">DOMDocument</a></span> object. If
   <code class="parameter">namespace</code>, <code class="parameter">qualifiedName</code>,
   and <code class="parameter">doctype</code> are null, the returned
   <span class="classname"><a href="class.domdocument.php" class="classname">DOMDocument</a></span> is empty with no document element.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-domimplementation.createdocument-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   <dl>
    
     <dt><strong><code><a href="dom.constants.php#constant.dom-wrong-document-err">DOM_WRONG_DOCUMENT_ERR</a></code></strong></dt>
     <dd>
      <p class="para">
       Raised if <code class="parameter">doctype</code> has already been used with a
       different document or was created from a different implementation.
      </p>
     </dd>
    
    
     <dt><strong><code><a href="dom.constants.php#constant.dom-namespace-err">DOM_NAMESPACE_ERR</a></code></strong></dt>
     <dd>
      <p class="para">
       Raised if there is an error with the namespace, as determined by
       <code class="parameter">namespace</code> and <code class="parameter">qualifiedName</code>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 changelog" id="refsect1-domimplementation.createdocument-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
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
        The function now has the tentative return type <span class="type"><a href="class.domdocument.php" class="type DOMDocument">DOMDocument</a></span>.
       </td>
      </tr>

      <tr>
       <td>8.0.3</td>
       <td>
        <code class="parameter">namespace</code> is now nullable.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        <code class="parameter">doctype</code> is now nullable.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        Calling this function statically will
        now throw an <span class="classname"><a href="class.error.php" class="classname">Error</a></span>.
        Previously, an <strong><code><a href="errorfunc.constants.php#constant.e-deprecated">E_DEPRECATED</a></code></strong> was raised.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-domimplementation.createdocument-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domdocument.construct.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::__construct()</a> - Creates a new DOMDocument object</span></li>
    <li><span class="methodname"><a href="domimplementation.createdocumenttype.php" class="methodname" rel="rdfs-seeAlso">DOMImplementation::createDocumentType()</a> - Creates an empty DOMDocumentType object</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domimplementation/createdocument.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomimplementation.createdocument%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domimplementation.createdocument&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domimplementation.createdocument.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="99012">  <div class="votes">
    <div id="Vu99012">
    <a href="/manual/vote-note.php?id=99012&amp;page=domimplementation.createdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99012">
    <a href="/manual/vote-note.php?id=99012&amp;page=domimplementation.createdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99012" title="76% like this...">
    9
    </div>
  </div>
  <a href="#99012" class="name">
  <strong class="user"><em>eboyjr</em></strong></a><a class="genanchor" href="#99012"> &para;</a><div class="date" title="2010-07-22 12:48"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99012">
<div class="phpcode"><code><span class="html">To add on to the other example, here's how to create an XHTML 1.0 transitional document with head, title, and body elements.<br /><br /><span class="default">&lt;?php<br /><br />$document </span><span class="keyword">= </span><span class="default">DOMImplementation</span><span class="keyword">::</span><span class="default">createDocument</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">, </span><span class="string">'html'</span><span class="keyword">,<br />    </span><span class="default">DOMImplementation</span><span class="keyword">::</span><span class="default">createDocumentType</span><span class="keyword">(</span><span class="string">"html"</span><span class="keyword">, <br />        </span><span class="string">"-//W3C//DTD XHTML 1.0 Transitional//EN"</span><span class="keyword">, <br />        </span><span class="string">"<a href="http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" rel="nofollow" target="_blank">http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd</a>"</span><span class="keyword">));<br /></span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">formatOutput </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /><br /></span><span class="default">$html </span><span class="keyword">= </span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">;<br /></span><span class="default">$head </span><span class="keyword">= </span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'head'</span><span class="keyword">);<br /></span><span class="default">$title </span><span class="keyword">= </span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'title'</span><span class="keyword">);<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">createTextNode</span><span class="keyword">(</span><span class="string">'Title of Page'</span><span class="keyword">);<br /></span><span class="default">$body </span><span class="keyword">= </span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'body'</span><span class="keyword">);<br /><br /></span><span class="default">$title</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br /></span><span class="default">$head</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$title</span><span class="keyword">);<br /></span><span class="default">$html</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$head</span><span class="keyword">);<br /></span><span class="default">$html</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$body</span><span class="keyword">);<br /><br />echo </span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />This outputs: (http links removed due to spam)<br /><br />&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "doctype.dtd"&gt; <br />&lt;html xmlns="w3org1999xhtml"&gt; <br />  &lt;head&gt; <br />    &lt;meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /&gt; <br />    &lt;title&gt;Title of Page&lt;/title&gt; <br />  &lt;/head&gt; <br />  &lt;body&gt;&lt;/body&gt; <br />&lt;/html&gt; <br /><br />Note the saveXML function. If saveHTML was used instead, you get the output:<br /><br />&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "doctype.dtd"&gt; <br />&lt;html&gt; <br />&lt;head&gt;&lt;title&gt;Title of Page&lt;/title&gt;&lt;/head&gt; <br />&lt;body&gt;&lt;/body&gt; <br />&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="65730">  <div class="votes">
    <div id="Vu65730">
    <a href="/manual/vote-note.php?id=65730&amp;page=domimplementation.createdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65730">
    <a href="/manual/vote-note.php?id=65730&amp;page=domimplementation.createdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65730" title="75% like this...">
    2
    </div>
  </div>
  <a href="#65730" class="name">
  <strong class="user"><em>arturm at union dot com dot pl</em></strong></a><a class="genanchor" href="#65730"> &para;</a><div class="date" title="2006-05-06 10:23"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65730">
<div class="phpcode"><code><span class="html">To create HTML document with doctype:
<br />
<br /><span class="default">&lt;?php
<br />$doctype </span><span class="keyword">= </span><span class="default">DOMImplementation</span><span class="keyword">::</span><span class="default">createDocumentType</span><span class="keyword">(</span><span class="string">"html"</span><span class="keyword">,
<br />                </span><span class="string">"-//W3C//DTD HTML 4.01//EN"</span><span class="keyword">,
<br />                </span><span class="string">"<a href="http://www.w3.org/TR/html4/strict.dtd" rel="nofollow" target="_blank">http://www.w3.org/TR/html4/strict.dtd</a>"</span><span class="keyword">);
<br /></span><span class="default">$doc </span><span class="keyword">= </span><span class="default">DOMImplementation</span><span class="keyword">::</span><span class="default">createDocument</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">, </span><span class="string">'html'</span><span class="keyword">, </span><span class="default">$doctype</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122900">  <div class="votes">
    <div id="Vu122900">
    <a href="/manual/vote-note.php?id=122900&amp;page=domimplementation.createdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122900">
    <a href="/manual/vote-note.php?id=122900&amp;page=domimplementation.createdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122900" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122900" class="name">
  <strong class="user"><em>sleistico at gmail dot com</em></strong></a><a class="genanchor" href="#122900"> &para;</a><div class="date" title="2018-07-02 03:48"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122900">
<div class="phpcode"><code><span class="html">I just recently got an error, having to do with deprecation, by using the type of calls in the other example listed here.  What I had to do instead looks like this...<br /><br />$htmldoc = (new DOMImplementation)-&gt;createDocument(null, 'html', (new DOMImplementation)-&gt;createDocumentType("html"));<br /><br />This creates a document with &lt;!DOCTYPE html&gt; at the top of it.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domimplementation.createdocument&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domimplementation.createdocument.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.domimplementation.php">DOMImplementation</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="domimplementation.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="current">
                            <a href="domimplementation.createdocument.php" title="createDocument">createDocument</a>
                        </li>
                                                <li class="">
                            <a href="domimplementation.createdocumenttype.php" title="createDocumentType">createDocumentType</a>
                        </li>
                                                <li class="">
                            <a href="domimplementation.hasfeature.php" title="hasFeature">hasFeature</a>
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
