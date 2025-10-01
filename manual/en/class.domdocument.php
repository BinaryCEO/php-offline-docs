<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMDocument - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.domdocument.php">
 <link rel="shorturl" href="https://www.php.net/domdocument">
 <link rel="alternate" href="https://www.php.net/domdocument" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.dom.php">
 <link rel="prev" href="https://www.php.net/manual/en/domcomment.construct.php">
 <link rel="next" href="https://www.php.net/manual/en/domdocument.adoptnode.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.domdocument.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.domdocument.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.domdocument.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.domdocument.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.domdocument.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.domdocument.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.domdocument.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.domdocument.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.domdocument.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.domdocument.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.domdocument.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The DOMDocument class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMDocument - Manual" />
<meta name="twitter:description" content="The DOMDocument class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMDocument - Manual" />
<meta itemprop="description" content="The DOMDocument class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The DOMDocument class" />

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
        <a href="domdocument.adoptnode.php">
          DOMDocument::adoptNode &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domcomment.construct.php">
          &laquo; DOMComment::__construct        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.dom.php'>DOM</a></li>      </ul>
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
            <option value='en/class.domdocument.php' selected="selected">English</option>
            <option value='de/class.domdocument.php'>German</option>
            <option value='es/class.domdocument.php'>Spanish</option>
            <option value='fr/class.domdocument.php'>French</option>
            <option value='it/class.domdocument.php'>Italian</option>
            <option value='ja/class.domdocument.php'>Japanese</option>
            <option value='pt_BR/class.domdocument.php'>Brazilian Portuguese</option>
            <option value='ru/class.domdocument.php'>Russian</option>
            <option value='tr/class.domdocument.php'>Turkish</option>
            <option value='uk/class.domdocument.php'>Ukrainian</option>
            <option value='zh/class.domdocument.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.domdocument" class="reference">
 <h1 class="title">The DOMDocument class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>
 

  <div class="section" id="domdocument.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Represents an entire HTML or XML document; serves as the root of the
    document tree.
   </p>
  </div>

 
  <div class="section" id="domdocument.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">DOMDocument</strong></strong>
    

    
     <span class="modifier">extends</span>
      <a href="class.domnode.php" class="classname">DOMNode</a>
    

    
     <span class="modifier">implements</span>
      <a href="class.domparentnode.php" class="interfacename">DOMParentNode</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.domnode.php#domnode.constants.document-position-disconnected"><var class="varname">DOMNode::DOCUMENT_POSITION_DISCONNECTED</var></a></var><span class="initializer"> = 0x1</span>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.domnode.php#domnode.constants.document-position-preceding"><var class="varname">DOMNode::DOCUMENT_POSITION_PRECEDING</var></a></var><span class="initializer"> = 0x2</span>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.domnode.php#domnode.constants.document-position-following"><var class="varname">DOMNode::DOCUMENT_POSITION_FOLLOWING</var></a></var><span class="initializer"> = 0x4</span>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.domnode.php#domnode.constants.document-position-contains"><var class="varname">DOMNode::DOCUMENT_POSITION_CONTAINS</var></a></var><span class="initializer"> = 0x8</span>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.domnode.php#domnode.constants.document-position-contained-by"><var class="varname">DOMNode::DOCUMENT_POSITION_CONTAINED_BY</var></a></var><span class="initializer"> = 0x10</span>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.domnode.php#domnode.constants.document-position-implementation-specific"><var class="varname">DOMNode::DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC</var></a></var><span class="initializer"> = 0x20</span>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.domdocumenttype.php" class="type DOMDocumentType">DOMDocumentType</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.doctype">$<var class="varname">doctype</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="class.domimplementation.php" class="type DOMImplementation">DOMImplementation</a></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.implementation">$<var class="varname">implementation</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.documentelement">$<var class="varname">documentElement</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.actualencoding">$<var class="varname">actualEncoding</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.encoding">$<var class="varname">encoding</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.xmlencoding">$<var class="varname">xmlEncoding</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.standalone">$<var class="varname">standalone</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.xmlstandalone">$<var class="varname">xmlStandalone</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.version">$<var class="varname">version</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.xmlversion">$<var class="varname">xmlVersion</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.stricterrorchecking">$<var class="varname">strictErrorChecking</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.documenturi">$<var class="varname">documentURI</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.config">$<var class="varname">config</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.formatoutput">$<var class="varname">formatOutput</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.validateonparse">$<var class="varname">validateOnParse</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.resolveexternals">$<var class="varname">resolveExternals</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.preservewhitespace">$<var class="varname">preserveWhiteSpace</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.recover">$<var class="varname">recover</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.substituteentities">$<var class="varname">substituteEntities</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.firstelementchild">$<var class="varname">firstElementChild</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.lastelementchild">$<var class="varname">lastElementChild</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.domdocument.php#domdocument.props.childelementcount">$<var class="varname">childElementCount</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited properties */</div>
    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.nodename">$<var class="varname">nodeName</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.nodevalue">$<var class="varname">nodeValue</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.nodetype">$<var class="varname">nodeType</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.parentnode">$<var class="varname">parentNode</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.parentelement">$<var class="varname">parentElement</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="class.domnodelist.php" class="type DOMNodeList">DOMNodeList</a></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.childnodes">$<var class="varname">childNodes</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.firstchild">$<var class="varname">firstChild</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.lastchild">$<var class="varname">lastChild</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.previoussibling">$<var class="varname">previousSibling</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.nextsibling">$<var class="varname">nextSibling</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.domnamednodemap.php" class="type DOMNamedNodeMap">DOMNamedNodeMap</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.attributes">$<var class="varname">attributes</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.isconnected">$<var class="varname">isConnected</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.domdocument.php" class="type DOMDocument">DOMDocument</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.ownerdocument">$<var class="varname">ownerDocument</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.namespaceuri">$<var class="varname">namespaceURI</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.prefix">$<var class="varname">prefix</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.localname">$<var class="varname">localName</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.baseuri">$<var class="varname">baseURI</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.domnode.php#domnode.props.textcontent">$<var class="varname">textContent</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="domdocument.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$version</code><span class="initializer"> = &quot;1.0&quot;</span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$encoding</code><span class="initializer"> = &quot;&quot;</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.adoptnode.php" class="methodname">adoptNode</a></span>(<span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$node</code></span>): <span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.append.php" class="methodname">append</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">...$nodes</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.createattribute.php" class="methodname">createAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$localName</code></span>): <span class="type"><span class="type"><a href="class.domattr.php" class="type DOMAttr">DOMAttr</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.createattributens.php" class="methodname">createAttributeNS</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespace</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>): <span class="type"><span class="type"><a href="class.domattr.php" class="type DOMAttr">DOMAttr</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.createcdatasection.php" class="methodname">createCDATASection</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>): <span class="type"><span class="type"><a href="class.domcdatasection.php" class="type DOMCdataSection">DOMCdataSection</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.createcomment.php" class="methodname">createComment</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>): <span class="type"><a href="class.domcomment.php" class="type DOMComment">DOMComment</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.createdocumentfragment.php" class="methodname">createDocumentFragment</a></span>(): <span class="type"><a href="class.domdocumentfragment.php" class="type DOMDocumentFragment">DOMDocumentFragment</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.createelement.php" class="methodname">createElement</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$localName</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code><span class="initializer"> = &quot;&quot;</span></span>): <span class="type"><span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.createelementns.php" class="methodname">createElementNS</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespace</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code><span class="initializer"> = &quot;&quot;</span></span>): <span class="type"><span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.createentityreference.php" class="methodname">createEntityReference</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><span class="type"><a href="class.domentityreference.php" class="type DOMEntityReference">DOMEntityReference</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.createprocessinginstruction.php" class="methodname">createProcessingInstruction</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$target</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code><span class="initializer"> = &quot;&quot;</span></span>): <span class="type"><span class="type"><a href="class.domprocessinginstruction.php" class="type DOMProcessingInstruction">DOMProcessingInstruction</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.createtextnode.php" class="methodname">createTextNode</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>): <span class="type"><a href="class.domtext.php" class="type DOMText">DOMText</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.getelementbyid.php" class="methodname">getElementById</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$elementId</code></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.getelementsbytagname.php" class="methodname">getElementsByTagName</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>): <span class="type"><a href="class.domnodelist.php" class="type DOMNodeList">DOMNodeList</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.getelementsbytagnamens.php" class="methodname">getElementsByTagNameNS</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespace</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$localName</code></span>): <span class="type"><a href="class.domnodelist.php" class="type DOMNodeList">DOMNodeList</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.importnode.php" class="methodname">importNode</a></span>(<span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$node</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$deep</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.load.php" class="methodname">load</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.loadhtml.php" class="methodname">loadHTML</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$source</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.loadhtmlfile.php" class="methodname">loadHTMLFile</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.loadxml.php" class="methodname">loadXML</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$source</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.normalizedocument.php" class="methodname">normalizeDocument</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.prepend.php" class="methodname">prepend</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">...$nodes</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.registernodeclass.php" class="methodname">registerNodeClass</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$baseClass</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$extendedClass</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.relaxngvalidate.php" class="methodname">relaxNGValidate</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.relaxngvalidatesource.php" class="methodname">relaxNGValidateSource</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$source</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.replacechildren.php" class="methodname">replaceChildren</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">...$nodes</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.save.php" class="methodname">save</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.savehtml.php" class="methodname">saveHTML</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span></span> <code class="parameter">$node</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.savehtmlfile.php" class="methodname">saveHTMLFile</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.savexml.php" class="methodname">saveXML</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span></span> <code class="parameter">$node</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.schemavalidate.php" class="methodname">schemaValidate</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.schemavalidatesource.php" class="methodname">schemaValidateSource</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$source</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.validate.php" class="methodname">validate</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domdocument.xinclude.php" class="methodname">xinclude</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.appendchild.php" class="methodname">DOMNode::appendChild</a></span>(<span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$node</code></span>): <span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.c14n.php" class="methodname">DOMNode::C14N</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$exclusive</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$withComments</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$xpath</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$nsPrefixes</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.c14nfile.php" class="methodname">DOMNode::C14NFile</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$uri</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$exclusive</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$withComments</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$xpath</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$nsPrefixes</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.clonenode.php" class="methodname">DOMNode::cloneNode</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$deep</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.comparedocumentposition.php" class="methodname">DOMNode::compareDocumentPosition</a></span>(<span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$other</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.contains.php" class="methodname">DOMNode::contains</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="class.domnamespacenode.php" class="type DOMNameSpaceNode">DOMNameSpaceNode</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$other</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.getlineno.php" class="methodname">DOMNode::getLineNo</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.getnodepath.php" class="methodname">DOMNode::getNodePath</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.getrootnode.php" class="methodname">DOMNode::getRootNode</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.hasattributes.php" class="methodname">DOMNode::hasAttributes</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.haschildnodes.php" class="methodname">DOMNode::hasChildNodes</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.insertbefore.php" class="methodname">DOMNode::insertBefore</a></span>(<span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$node</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span></span> <code class="parameter">$child</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.isdefaultnamespace.php" class="methodname">DOMNode::isDefaultNamespace</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.isequalnode.php" class="methodname">DOMNode::isEqualNode</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span></span> <code class="parameter">$otherNode</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.issamenode.php" class="methodname">DOMNode::isSameNode</a></span>(<span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$otherNode</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.issupported.php" class="methodname">DOMNode::isSupported</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$feature</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$version</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.lookupnamespaceuri.php" class="methodname">DOMNode::lookupNamespaceURI</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$prefix</code></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.lookupprefix.php" class="methodname">DOMNode::lookupPrefix</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace</code></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.normalize.php" class="methodname">DOMNode::normalize</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.removechild.php" class="methodname">DOMNode::removeChild</a></span>(<span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$child</code></span>): <span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.replacechild.php" class="methodname">DOMNode::replaceChild</a></span>(<span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$node</code></span>, <span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$child</code></span>): <span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.sleep.php" class="methodname">DOMNode::__sleep</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.wakeup.php" class="methodname">DOMNode::__wakeup</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   }</div>

 
  </div>
 

  <div class="section" id="domdocument.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="domdocument.props.actualencoding"><var class="varname">actualEncoding</var></dt>
     <dd>
      <p class="para">
       <em>Deprecated as of PHP 8.4.0</em>.
       Actual encoding of the document, is a readonly equivalent to
       <var class="varname">encoding</var>.
      </p>
     </dd>
    
    
     <dt id="domdocument.props.childelementcount"><var class="varname">childElementCount</var></dt>
     <dd>
      <p class="para">The number of child elements.</p>
     </dd>
    
    
     <dt id="domdocument.props.config"><var class="varname">config</var></dt>
     <dd>
      <p class="para">
       <em>Deprecated as of PHP 8.4.0</em>.
       Configuration used when
       <span class="function"><a href="domdocument.normalizedocument.php" class="function">DOMDocument::normalizeDocument()</a></span> is
       invoked.
      </p>
     </dd>
    
    
     <dt id="domdocument.props.doctype"><var class="varname">doctype</var></dt>
     <dd>
      <p class="para">The Document Type Declaration associated with this document.</p>
     </dd>
    
    
     <dt id="domdocument.props.documentelement"><var class="varname">documentElement</var></dt>
     <dd>
      <p class="para">
       The <span class="classname"><a href="class.domelement.php" class="classname">DOMElement</a></span> object that is the first
       document element. If not found, this evaluates to <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
      </p>
     </dd>
    
    
     <dt id="domdocument.props.documenturi"><var class="varname">documentURI</var></dt>
     <dd>
      <p class="para">The location of the document or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> if undefined.</p>
     </dd>
    
    
     <dt id="domdocument.props.encoding"><var class="varname">encoding</var></dt>
     <dd>
      <p class="para">
       Encoding of the document, as specified by the XML declaration. This
       attribute is not present in the final DOM Level 3 specification, but
       is the only way of manipulating XML document encoding in this
       implementation.
      </p>
     </dd>
    
    
     <dt id="domdocument.props.firstelementchild"><var class="varname">firstElementChild</var></dt>
     <dd>
      <p class="para">First child element or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.</p>
     </dd>
    
    
     <dt id="domdocument.props.formatoutput"><var class="varname">formatOutput</var></dt>
     <dd>
      <p class="para">
       Nicely formats output with indentation and extra space.
       This has no effect if the document was loaded with
       <var class="varname">preserveWhitespace</var> enabled.
      </p>
     </dd>
    
    
     <dt id="domdocument.props.implementation"><var class="varname">implementation</var></dt>
     <dd>
      <p class="para">
       The <span class="classname"><a href="class.domimplementation.php" class="classname">DOMImplementation</a></span> object that handles 
       this document.
      </p>
     </dd>
    
    
     <dt id="domdocument.props.lastelementchild"><var class="varname">lastElementChild</var></dt>
     <dd>
      <p class="para">Last child element or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.</p>
     </dd>
    
    
     <dt id="domdocument.props.preservewhitespace"><var class="varname">preserveWhiteSpace</var></dt>
     <dd>
      <p class="para">
       Do not remove redundant white space. Default to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
       Setting this to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> has the same effect as passing <strong><code><a href="libxml.constants.php#constant.libxml-noblanks">LIBXML_NOBLANKS</a></code></strong>
       as <code class="parameter">option</code> to <span class="methodname"><a href="domdocument.load.php" class="methodname">DOMDocument::load()</a></span> etc.
      </p>
     </dd>
    
    
     <dt id="domdocument.props.recover"><var class="varname">recover</var></dt>
     <dd>
      <p class="para">
       <em>Proprietary</em>. Enables recovery mode, i.e. trying
       to parse non-well formed documents. This attribute is not part of
       the DOM specification and is specific to libxml.
      </p>
     </dd>
    
    
     <dt id="domdocument.props.resolveexternals"><var class="varname">resolveExternals</var></dt>
     <dd>
      <p class="para">
       Set it to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> to load external entities from a doctype 
       declaration. This is useful for including character entities in
       your XML document.
      </p>
     </dd>
    
    
     <dt id="domdocument.props.standalone"><var class="varname">standalone</var></dt>
     <dd>
      <p class="para">
       <em>Deprecated</em>. Whether or not the document is
       standalone, as specified by the XML declaration, corresponds to
       <var class="varname">xmlStandalone</var>.
      </p>
     </dd>
    
    
     <dt id="domdocument.props.stricterrorchecking"><var class="varname">strictErrorChecking</var></dt>
     <dd>
      <p class="para">Throws <span class="classname"><a href="class.domexception.php" class="classname">DOMException</a></span> on errors. Default to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.</p>
     </dd>
    
    
     <dt id="domdocument.props.substituteentities"><var class="varname">substituteEntities</var></dt>
     <dd>
      <p class="para">
       <em>Proprietary</em>. Whether or not to substitute
       entities. This attribute is not part of
       the DOM specification and is specific to libxml. Default to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </p>
      <div class="caution"><strong class="caution">Caution</strong>
       <p class="simpara">
        Enabling entity substitution may facilitate XML External Entity (XXE) attacks.
       </p>
      </div>
     </dd>
    
    
     <dt id="domdocument.props.validateonparse"><var class="varname">validateOnParse</var></dt>
     <dd>
      <p class="para">Loads and validates against the DTD. Default to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.</p>
      <div class="caution"><strong class="caution">Caution</strong>
       <p class="simpara">
        Enabling validating the DTD may facilitate XML External Entity (XXE) attacks.
       </p>
      </div>
     </dd>
    
    
     <dt id="domdocument.props.version"><var class="varname">version</var></dt>
     <dd>
      <p class="para">
       <em>Deprecated</em>. Version of XML, corresponds to
       <var class="varname">xmlVersion</var>.
      </p>
     </dd>
    
    
     <dt id="domdocument.props.xmlencoding"><var class="varname">xmlEncoding</var></dt>
     <dd>
      <p class="para">
       An attribute specifying, as part of the XML declaration, the
       encoding of this document. This is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> when unspecified or when it
       is not known, such as when the Document was created in memory.
      </p>
     </dd>
    
    
     <dt id="domdocument.props.xmlstandalone"><var class="varname">xmlStandalone</var></dt>
     <dd>
      <p class="para">
       An attribute specifying, as part of the XML declaration, whether
       this document is standalone.
       This is <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> when unspecified.
       A standalone document is one where there are no external markup declarations.
       An example of such a markup declaration is when the DTD declares an attribute with a default value.
      </p>
     </dd>
    
    
     <dt id="domdocument.props.xmlversion"><var class="varname">xmlVersion</var></dt>
     <dd>
      <p class="para">
       An attribute specifying, as part of the XML declaration, the
       version number of this document. If there is no declaration and if
       this document supports the &quot;XML&quot; feature, the value is &quot;1.0&quot;.
      </p>
     </dd>
    
   </dl>
  </div>


  <div class="section">
   <h2 class="title">Changelog</h2>
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
        <var class="varname">actualEncoding</var> and
        <var class="varname">config</var> are formally deprecated now.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        <span class="classname"><strong class="classname">DOMDocument</strong></span> implements
        <span class="interfacename"><a href="class.domparentnode.php" class="interfacename">DOMParentNode</a></span> now.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        The unimplemented method <span class="methodname"><strong>DOMDocument::renameNode()</strong></span>
        has been removed.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>


  <div class="section">
   <h2 class="title">Notes</h2>
   <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">The DOM extension uses UTF-8 encoding. Use <span class="function"><a href="function.mb-convert-encoding.php" class="function">mb_convert_encoding()</a></span>, <span class="methodname"><a href="uconverter.transcode.php" class="methodname">UConverter::transcode()</a></span>, or <span class="function"><a href="function.iconv.php" class="function">iconv()</a></span> to handle other encodings.</p></p></blockquote>
   <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">When using <span class="function"><a href="function.json-encode.php" class="function">json_encode()</a></span> on a <span class="classname"><strong class="classname">DOMDocument</strong></span> object the result will be that of encoding an empty object.</p></p></blockquote>
  </div>

  

  <div class="section">
   <h2 class="title">See Also</h2>
   <p class="para">
    <ul class="simplelist">
     <li><a href="http://www.w3.org/TR/2003/WD-DOM-Level-3-Core-20030226/DOM3-Core.html#core-i-Document" class="link external">&raquo;&nbsp;W3C specification for Document</a></li>
    </ul>
   </p>
  </div>

 
 </div>
 
 










































































































































































 
<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="domdocument.adoptnode.php">DOMDocument::adoptNode</a> — Transfer a node from another document</li><li><a href="domdocument.append.php">DOMDocument::append</a> — Appends nodes after the last child node</li><li><a href="domdocument.construct.php">DOMDocument::__construct</a> — Creates a new DOMDocument object</li><li><a href="domdocument.createattribute.php">DOMDocument::createAttribute</a> — Create new attribute</li><li><a href="domdocument.createattributens.php">DOMDocument::createAttributeNS</a> — Create new attribute node with an associated namespace</li><li><a href="domdocument.createcdatasection.php">DOMDocument::createCDATASection</a> — Create new cdata node</li><li><a href="domdocument.createcomment.php">DOMDocument::createComment</a> — Create new comment node</li><li><a href="domdocument.createdocumentfragment.php">DOMDocument::createDocumentFragment</a> — Create new document fragment</li><li><a href="domdocument.createelement.php">DOMDocument::createElement</a> — Create new element node</li><li><a href="domdocument.createelementns.php">DOMDocument::createElementNS</a> — Create new element node with an associated namespace</li><li><a href="domdocument.createentityreference.php">DOMDocument::createEntityReference</a> — Create new entity reference node</li><li><a href="domdocument.createprocessinginstruction.php">DOMDocument::createProcessingInstruction</a> — Creates new PI node</li><li><a href="domdocument.createtextnode.php">DOMDocument::createTextNode</a> — Create new text node</li><li><a href="domdocument.getelementbyid.php">DOMDocument::getElementById</a> — Searches for an element with a certain id</li><li><a href="domdocument.getelementsbytagname.php">DOMDocument::getElementsByTagName</a> — Searches for all elements with given local tag name</li><li><a href="domdocument.getelementsbytagnamens.php">DOMDocument::getElementsByTagNameNS</a> — Searches for all elements with given tag name in specified namespace</li><li><a href="domdocument.importnode.php">DOMDocument::importNode</a> — Import node into current document</li><li><a href="domdocument.load.php">DOMDocument::load</a> — Load XML from a file</li><li><a href="domdocument.loadhtml.php">DOMDocument::loadHTML</a> — Load HTML from a string</li><li><a href="domdocument.loadhtmlfile.php">DOMDocument::loadHTMLFile</a> — Load HTML from a file</li><li><a href="domdocument.loadxml.php">DOMDocument::loadXML</a> — Load XML from a string</li><li><a href="domdocument.normalizedocument.php">DOMDocument::normalizeDocument</a> — Normalizes the document</li><li><a href="domdocument.prepend.php">DOMDocument::prepend</a> — Prepends nodes before the first child node</li><li><a href="domdocument.registernodeclass.php">DOMDocument::registerNodeClass</a> — Register extended class used to create base node type</li><li><a href="domdocument.relaxngvalidate.php">DOMDocument::relaxNGValidate</a> — Performs relaxNG validation on the document</li><li><a href="domdocument.relaxngvalidatesource.php">DOMDocument::relaxNGValidateSource</a> — Performs relaxNG validation on the document</li><li><a href="domdocument.replacechildren.php">DOMDocument::replaceChildren</a> — Replace children in document</li><li><a href="domdocument.save.php">DOMDocument::save</a> — Dumps the internal XML tree back into a file</li><li><a href="domdocument.savehtml.php">DOMDocument::saveHTML</a> — Dumps the internal document into a string using HTML formatting</li><li><a href="domdocument.savehtmlfile.php">DOMDocument::saveHTMLFile</a> — Dumps the internal document into a file using HTML formatting</li><li><a href="domdocument.savexml.php">DOMDocument::saveXML</a> — Dumps the internal XML tree back into a string</li><li><a href="domdocument.schemavalidate.php">DOMDocument::schemaValidate</a> — Validates a document based on a schema. Only XML Schema 1.0 is supported.</li><li><a href="domdocument.schemavalidatesource.php">DOMDocument::schemaValidateSource</a> — Validates a document based on a schema</li><li><a href="domdocument.validate.php">DOMDocument::validate</a> — Validates the document based on its DTD</li><li><a href="domdocument.xinclude.php">DOMDocument::xinclude</a> — Substitutes XIncludes in a DOMDocument Object</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domdocument.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.domdocument%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.domdocument&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.domdocument.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="82447">  <div class="votes">
    <div id="Vu82447">
    <a href="/manual/vote-note.php?id=82447&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82447">
    <a href="/manual/vote-note.php?id=82447&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82447" title="77% like this...">
    115
    </div>
  </div>
  <a href="#82447" class="name">
  <strong class="user"><em>Fernando H</em></strong></a><a class="genanchor" href="#82447"> &para;</a><div class="date" title="2008-04-11 12:48"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82447">
<div class="phpcode"><code><span class="html">Showing a quick example of how to use this class, just so that new users can get a quick start without having to figure it all out by themself. ( At the day of posting, this documentation just got added and is lacking examples. )<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Set the content type to be XML, so that the browser will   recognise it as XML.<br /></span><span class="default">header</span><span class="keyword">( </span><span class="string">"content-type: application/xml; charset=ISO-8859-15" </span><span class="keyword">);<br /><br /></span><span class="comment">// "Create" the document.<br /></span><span class="default">$xml </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">( </span><span class="string">"1.0"</span><span class="keyword">, </span><span class="string">"ISO-8859-15" </span><span class="keyword">);<br /><br /></span><span class="comment">// Create some elements.<br /></span><span class="default">$xml_album </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">( </span><span class="string">"Album" </span><span class="keyword">);<br /></span><span class="default">$xml_track </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">( </span><span class="string">"Track"</span><span class="keyword">, </span><span class="string">"The ninth symphony" </span><span class="keyword">);<br /><br /></span><span class="comment">// Set the attributes.<br /></span><span class="default">$xml_track</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">( </span><span class="string">"length"</span><span class="keyword">, </span><span class="string">"0:01:15" </span><span class="keyword">);<br /></span><span class="default">$xml_track</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">( </span><span class="string">"bitrate"</span><span class="keyword">, </span><span class="string">"64kb/s" </span><span class="keyword">);<br /></span><span class="default">$xml_track</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">( </span><span class="string">"channels"</span><span class="keyword">, </span><span class="string">"2" </span><span class="keyword">);<br /><br /></span><span class="comment">// Create another element, just to show you can add any (realistic to computer) number of sublevels.<br /></span><span class="default">$xml_note </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">( </span><span class="string">"Note"</span><span class="keyword">, </span><span class="string">"The last symphony composed by Ludwig van Beethoven." </span><span class="keyword">);<br /><br /></span><span class="comment">// Append the whole bunch.<br /></span><span class="default">$xml_track</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">( </span><span class="default">$xml_note </span><span class="keyword">);<br /></span><span class="default">$xml_album</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">( </span><span class="default">$xml_track </span><span class="keyword">);<br /><br /></span><span class="comment">// Repeat the above with some different values..<br /></span><span class="default">$xml_track </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">( </span><span class="string">"Track"</span><span class="keyword">, </span><span class="string">"Highway Blues" </span><span class="keyword">);<br /><br /></span><span class="default">$xml_track</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">( </span><span class="string">"length"</span><span class="keyword">, </span><span class="string">"0:01:33" </span><span class="keyword">);<br /></span><span class="default">$xml_track</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">( </span><span class="string">"bitrate"</span><span class="keyword">, </span><span class="string">"64kb/s" </span><span class="keyword">);<br /></span><span class="default">$xml_track</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">( </span><span class="string">"channels"</span><span class="keyword">, </span><span class="string">"2" </span><span class="keyword">);<br /></span><span class="default">$xml_album</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">( </span><span class="default">$xml_track </span><span class="keyword">);<br /><br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">( </span><span class="default">$xml_album </span><span class="keyword">);<br /><br /></span><span class="comment">// Parse the XML.<br /></span><span class="keyword">print </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />Output:<br />&lt;Album&gt;<br />  &lt;Track length="0:01:15" bitrate="64kb/s" channels="2"&gt;<br />    The ninth symphony<br />    &lt;Note&gt;<br />      The last symphony composed by Ludwig van Beethoven.<br />    &lt;/Note&gt;<br />  &lt;/Track&gt;<br />  &lt;Track length="0:01:33" bitrate="64kb/s" channels="2"&gt;Highway Blues&lt;/Track&gt;<br />&lt;/Album&gt;<br /><br />If you want your PHP-&gt;DOM code to run under the .xml extension, you should set your webserver up to run the .xml extension with PHP ( Refer to the installation/configuration configuration for PHP on how to do this ).<br /><br />Note that this:<br /><span class="default">&lt;?php<br />$xml </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">( </span><span class="string">"1.0"</span><span class="keyword">, </span><span class="string">"ISO-8859-15" </span><span class="keyword">);<br /></span><span class="default">$xml_album </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">( </span><span class="string">"Album" </span><span class="keyword">);<br /></span><span class="default">$xml_track </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">( </span><span class="string">"Track" </span><span class="keyword">);<br /></span><span class="default">$xml_album</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">( </span><span class="default">$xml_track </span><span class="keyword">);<br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">( </span><span class="default">$xml_album </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />is NOT the same as this:<br /><span class="default">&lt;?php<br /></span><span class="comment">// Will NOT work.<br /></span><span class="default">$xml </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">( </span><span class="string">"1.0"</span><span class="keyword">, </span><span class="string">"ISO-8859-15" </span><span class="keyword">);<br /></span><span class="default">$xml_album </span><span class="keyword">= new </span><span class="default">DOMElement</span><span class="keyword">( </span><span class="string">"Album" </span><span class="keyword">);<br /></span><span class="default">$xml_track </span><span class="keyword">= new </span><span class="default">DOMElement</span><span class="keyword">( </span><span class="string">"Track" </span><span class="keyword">);<br /></span><span class="default">$xml_album</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">( </span><span class="default">$xml_track </span><span class="keyword">);<br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">( </span><span class="default">$xml_album </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />although this will work:<br /><span class="default">&lt;?php<br />$xml </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">( </span><span class="string">"1.0"</span><span class="keyword">, </span><span class="string">"ISO-8859-15" </span><span class="keyword">);<br /></span><span class="default">$xml_album </span><span class="keyword">= new </span><span class="default">DOMElement</span><span class="keyword">( </span><span class="string">"Album" </span><span class="keyword">);<br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">( </span><span class="default">$xml_album </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118509">  <div class="votes">
    <div id="Vu118509">
    <a href="/manual/vote-note.php?id=118509&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118509">
    <a href="/manual/vote-note.php?id=118509&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118509" title="72% like this...">
    22
    </div>
  </div>
  <a href="#118509" class="name">
  <strong class="user"><em>developer at nabtron dot com</em></strong></a><a class="genanchor" href="#118509"> &para;</a><div class="date" title="2015-12-17 07:34"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118509">
<div class="phpcode"><code><span class="html">For those landing here and checking for encoding issue with utf-8 characteres, it's pretty easy to correct it, without adding any additional output tag to your html.<br /><br />We'll be utilizing: mb_convert_encoding<br /><br />Thanks to the user who shared: SmartDOMDocument in previous comments, I got the idea of solving it. However I truly wish that he shared the method instead of giving a link.<br /><br />Anyway coming back to the solution, you can simply use:<br /><br /><span class="default">&lt;?php<br /><br />            </span><span class="comment">// checks if the content we're receiving isn't empty, to avoid the warning<br />            </span><span class="keyword">if ( empty( </span><span class="default">$content </span><span class="keyword">) ) {<br />                return </span><span class="default">false</span><span class="keyword">;<br />            }<br /><br />            </span><span class="comment">// converts all special characters to utf-8<br />            </span><span class="default">$content </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">, </span><span class="string">'HTML-ENTITIES'</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">);<br /><br />            </span><span class="comment">// creating new document<br />            </span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">, </span><span class="string">'utf-8'</span><span class="keyword">);<br /><br />            </span><span class="comment">//turning off some errors<br />            </span><span class="default">libxml_use_internal_errors</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br />            </span><span class="comment">// it loads the content without adding enclosing html/body tags and also the doctype declaration<br />            </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">LoadHTML</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">, </span><span class="default">LIBXML_HTML_NOIMPLIED </span><span class="keyword">| </span><span class="default">LIBXML_HTML_NODEFDTD</span><span class="keyword">);<br /><br />            </span><span class="comment">// do whatever you want to do with this code now<br /><br /></span><span class="default">?&gt;<br /></span><br />I hope it solves the issue for someone! If you need my help or service to fix your code, you can reach me on nabtron.com or contact me at the email mentioned with this comment.</span></code></div>
  </div>
 </div>
  <div class="note" id="95894">  <div class="votes">
    <div id="Vu95894">
    <a href="/manual/vote-note.php?id=95894&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95894">
    <a href="/manual/vote-note.php?id=95894&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95894" title="71% like this...">
    23
    </div>
  </div>
  <a href="#95894" class="name">
  <strong class="user"><em>jay at jaygilford dot com</em></strong></a><a class="genanchor" href="#95894"> &para;</a><div class="date" title="2010-01-27 08:46"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95894">
<div class="phpcode"><code><span class="html">Here's a small function I wrote to get all page links using the DOMDocument which will hopefully be of use to others
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * @author Jay Gilford
<br /> */
<br /> 
<br />/**
<br /> * get_links()
<br /> * 
<br /> * @param string $url
<br /> * @return array
<br /> */
<br /></span><span class="keyword">function </span><span class="default">get_links</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">) {
<br /> 
<br />    </span><span class="comment">// Create a new DOM Document to hold our webpage structure
<br />    </span><span class="default">$xml </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();
<br /> 
<br />    </span><span class="comment">// Load the url's contents into the DOM
<br />    </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">loadHTMLFile</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);
<br /> 
<br />    </span><span class="comment">// Empty array to hold all links to return
<br />    </span><span class="default">$links </span><span class="keyword">= array();
<br /> 
<br />    </span><span class="comment">//Loop through each &lt;a&gt; tag in the dom and add it to the link array
<br />    </span><span class="keyword">foreach(</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'a'</span><span class="keyword">) as </span><span class="default">$link</span><span class="keyword">) {
<br />        </span><span class="default">$links</span><span class="keyword">[] = array(</span><span class="string">'url' </span><span class="keyword">=&gt; </span><span class="default">$link</span><span class="keyword">-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">'href'</span><span class="keyword">), </span><span class="string">'text' </span><span class="keyword">=&gt; </span><span class="default">$link</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">);
<br />    }
<br /> 
<br />    </span><span class="comment">//Return the links
<br />    </span><span class="keyword">return </span><span class="default">$links</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126620">  <div class="votes">
    <div id="Vu126620">
    <a href="/manual/vote-note.php?id=126620&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126620">
    <a href="/manual/vote-note.php?id=126620&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126620" title="75% like this...">
    4
    </div>
  </div>
  <a href="#126620" class="name">
  <strong class="user"><em>andreas at userbrain dot com</em></strong></a><a class="genanchor" href="#126620"> &para;</a><div class="date" title="2021-11-17 01:16"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126620">
<div class="phpcode"><code><span class="html">After struggling with parsing and modifying partial HTML content for several hours, I came to this solution which does work for me and is relatively simple compared to what else I found online.<br /><br />This solution fixes unwanted DOCTYPE and html, body tags as well as encoding issues.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Assumption: content is utf-8 encoded<br /></span><span class="default">$content </span><span class="keyword">= </span><span class="string">"&lt;h1&gt;This is a heading&lt;/h1&gt;&lt;p&gt;This is a paragraph&lt;/p&gt;"</span><span class="keyword">;<br /><br /></span><span class="comment">// Load content to a div and specify encoding with a meta tag<br /></span><span class="default">$temp_dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$temp_dom</span><span class="keyword">-&gt;</span><span class="default">loadHTML</span><span class="keyword">(</span><span class="string">"&lt;meta http-equiv='Content-Type' content='charset=utf-8' /&gt;&lt;div&gt;</span><span class="default">$content</span><span class="string">&lt;/div&gt;"</span><span class="keyword">);<br /><br /></span><span class="comment">// As loadHTML() adds a DOCTYPE as well as &lt;html&gt; and &lt;body&gt; tag, let’s create another DOMDocument and import just the nodes we want<br /></span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$first_div </span><span class="keyword">= </span><span class="default">$temp_dom</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'div'</span><span class="keyword">)[</span><span class="default">0</span><span class="keyword">];<br /></span><span class="default">$first_div_node </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">importNode</span><span class="keyword">(</span><span class="default">$first_div</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$first_div_node</span><span class="keyword">);<br /><br /></span><span class="comment">// Do whatever you want to do<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'h1'</span><span class="keyword">)[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">'class'</span><span class="keyword">, </span><span class="string">'happy'</span><span class="keyword">);<br /><br /></span><span class="comment">// You could also just echo $dom-&gt;saveHtml() if you don’t mind the div and whitespace <br /></span><span class="keyword">echo </span><span class="default">substr</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveHtml</span><span class="keyword">()), </span><span class="default">5</span><span class="keyword">, -</span><span class="default">6</span><span class="keyword">);<br /><br /></span><span class="comment">// Outputs: &lt;h1 class="happy"&gt;This is a heading&lt;/h1&gt;&lt;p&gt;This is a paragraph&lt;/p&gt;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="96055">  <div class="votes">
    <div id="Vu96055">
    <a href="/manual/vote-note.php?id=96055&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96055">
    <a href="/manual/vote-note.php?id=96055&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96055" title="69% like this...">
    13
    </div>
  </div>
  <a href="#96055" class="name">
  <strong class="user"><em>tloach at gmail dot com</em></strong></a><a class="genanchor" href="#96055"> &para;</a><div class="date" title="2010-02-05 10:01"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96055">
<div class="phpcode"><code><span class="html">For anyone else who has been having issues with formatOuput not working, here is a work-around:
<br />
<br />rather than just doing something like:
<br />
<br /><span class="default">&lt;?php
<br />$outXML </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />force it to reload the XML from scratch, then it will format correctly:
<br />
<br /><span class="default">&lt;?php
<br />$outXML </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();
<br /></span><span class="default">$xml </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();
<br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">preserveWhiteSpace </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">formatOutput </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;
<br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$outXML</span><span class="keyword">);
<br /></span><span class="default">$outXML </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119775">  <div class="votes">
    <div id="Vu119775">
    <a href="/manual/vote-note.php?id=119775&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119775">
    <a href="/manual/vote-note.php?id=119775&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119775" title="71% like this...">
    3
    </div>
  </div>
  <a href="#119775" class="name">
  <strong class="user"><em>biker dot mike at gmx dot com</em></strong></a><a class="genanchor" href="#119775"> &para;</a><div class="date" title="2016-08-22 01:36"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119775">
<div class="phpcode"><code><span class="html">Look out for the following gotcha when loading XML from a string:<br /><br /><span class="default">&lt;?php<br />$doc </span><span class="keyword">= new </span><span class="default">\DOMDocument</span><span class="keyword">;<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">documentURI </span><span class="keyword">= </span><span class="default">$myXmlFilename</span><span class="keyword">;<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$myXmlString</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />documentURI is now set to the value of $myXmlFilename, right?<br /><br />Wrong!<br /><br />It's set to the current working directory.  If you want to manually set documentURI to something other than the CWD, do so AFTER the call to loadXML().<br /><br />E.g.:<br /><span class="default">&lt;?php<br />$doc </span><span class="keyword">= new </span><span class="default">\DOMDocument</span><span class="keyword">;<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$myXmlString</span><span class="keyword">);<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">documentURI </span><span class="keyword">= </span><span class="default">$myXmlFilename</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />documentURI really is now set to the value of $myXmlFilename.</span></code></div>
  </div>
 </div>
  <div class="note" id="104218">  <div class="votes">
    <div id="Vu104218">
    <a href="/manual/vote-note.php?id=104218&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104218">
    <a href="/manual/vote-note.php?id=104218&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104218" title="63% like this...">
    6
    </div>
  </div>
  <a href="#104218" class="name">
  <strong class="user"><em>Nick M</em></strong></a><a class="genanchor" href="#104218"> &para;</a><div class="date" title="2011-06-01 10:16"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104218">
<div class="phpcode"><code><span class="html">You may need to save all or part of a DOMDocument as an XHTML-friendly string, something compliant with both XML and HTML 4. Here's the DOMDocument class extended with a saveXHTML method:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * XHTML Document<br /> *<br /> * Represents an entire XHTML DOM document; serves as the root of the document tree.<br /> */<br /></span><span class="keyword">class </span><span class="default">XHTMLDocument </span><span class="keyword">extends </span><span class="default">DOMDocument </span><span class="keyword">{<br /><br />  </span><span class="comment">/**<br />   * These tags must always self-terminate. Anything else must never self-terminate.<br />   * <br />   * @var array<br />   */<br />  </span><span class="keyword">public </span><span class="default">$selfTerminate </span><span class="keyword">= array(<br />      </span><span class="string">'area'</span><span class="keyword">,</span><span class="string">'base'</span><span class="keyword">,</span><span class="string">'basefont'</span><span class="keyword">,</span><span class="string">'br'</span><span class="keyword">,</span><span class="string">'col'</span><span class="keyword">,</span><span class="string">'frame'</span><span class="keyword">,</span><span class="string">'hr'</span><span class="keyword">,</span><span class="string">'img'</span><span class="keyword">,</span><span class="string">'input'</span><span class="keyword">,</span><span class="string">'link'</span><span class="keyword">,</span><span class="string">'meta'</span><span class="keyword">,</span><span class="string">'param'<br />  </span><span class="keyword">);<br />  <br />  </span><span class="comment">/**<br />   * saveXHTML<br />   *<br />   * Dumps the internal XML tree back into an XHTML-friendly string.<br />   *<br />   * @param DOMNode $node<br />   *         Use this parameter to output only a specific node rather than the entire document.<br />   */<br />  </span><span class="keyword">public function </span><span class="default">saveXHTML</span><span class="keyword">(</span><span class="default">DOMNode $node</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">) {<br />    <br />    if (!</span><span class="default">$node</span><span class="keyword">) </span><span class="default">$node </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">;<br />    <br />    </span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">);<br />    </span><span class="default">$clone </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">importNode</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">cloneNode</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">), </span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">$term </span><span class="keyword">= </span><span class="default">in_array</span><span class="keyword">(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$clone</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">), </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">selfTerminate</span><span class="keyword">);<br />    </span><span class="default">$inner</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br />    <br />    if (!</span><span class="default">$term</span><span class="keyword">) {<br />      </span><span class="default">$clone</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(new </span><span class="default">DOMText</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">));<br />      if (</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">) foreach (</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$child</span><span class="keyword">) {<br />        </span><span class="default">$inner </span><span class="keyword">.= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">saveXHTML</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">);<br />      }<br />    }<br />    <br />    </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$clone</span><span class="keyword">);<br />    </span><span class="default">$out </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">$clone</span><span class="keyword">);<br />    <br />    return </span><span class="default">$term </span><span class="keyword">? </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">2</span><span class="keyword">) . </span><span class="string">' /&gt;' </span><span class="keyword">: </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'&gt;&lt;'</span><span class="keyword">, </span><span class="string">"&gt;</span><span class="default">$inner</span><span class="string">&lt;"</span><span class="keyword">, </span><span class="default">$out</span><span class="keyword">);<br /><br />  }<br /><br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />This hasn't been benchmarked, but is probably significantly slower than saveXML or saveHTML and should be used sparingly.</span></code></div>
  </div>
 </div>
  <div class="note" id="125879">  <div class="votes">
    <div id="Vu125879">
    <a href="/manual/vote-note.php?id=125879&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125879">
    <a href="/manual/vote-note.php?id=125879&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125879" title="60% like this...">
    1
    </div>
  </div>
  <a href="#125879" class="name">
  <strong class="user"><em>pastormontesinos at gmail dot com</em></strong></a><a class="genanchor" href="#125879"> &para;</a><div class="date" title="2021-03-04 10:34"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125879">
<div class="phpcode"><code><span class="html">For using safely with script nodes when parsing, best option is extending DOMDocument, keeping script tags while DOMDocument process and rearrange them just after saveHTML function is called. Here is my custom class.<br /><br /><span class="default">&lt;?php <br /><br /></span><span class="keyword">class </span><span class="default">SafeDOMDocument </span><span class="keyword">extends </span><span class="default">\DOMDocument<br /></span><span class="keyword">{<br />    const </span><span class="default">REGEX_JS            </span><span class="keyword">= </span><span class="string">'#(\s*&lt;!--(\[if[^\n]*&gt;)?\s*(&lt;script.*&lt;/script&gt;)+\s*(&lt;!\[endif\])?--&gt;)|(\s*&lt;script.*&lt;/script&gt;)#isU'</span><span class="keyword">;<br />    const </span><span class="default">SUBSTITUTION_FORMAT </span><span class="keyword">= </span><span class="string">'&lt;!--&lt;script class="script_%s"&gt;&lt;/script&gt;--&gt;'</span><span class="keyword">;<br />    private </span><span class="default">$matchedScripts </span><span class="keyword">= [];<br /><br />    public function </span><span class="default">loadHTML</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">, </span><span class="default">$options </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">formatOutput        </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">preserveWhiteSpace  </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">validateOnParse     </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">strictErrorChecking </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">recover             </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resolveExternals    </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">substituteEntities  </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">$matches </span><span class="keyword">= [];<br />        </span><span class="default">$success </span><span class="keyword">= </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">REGEX_JS</span><span class="keyword">, </span><span class="default">$source</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br /><br />        if (</span><span class="default">$success </span><span class="keyword">&amp;&amp; !empty(</span><span class="default">$matches</span><span class="keyword">)) {<br />            foreach (</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] as </span><span class="default">$match</span><span class="keyword">) {<br />                </span><span class="default">$storedScript </span><span class="keyword">= </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">ltrim</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">, </span><span class="string">"\n\r\t "</span><span class="keyword">), </span><span class="string">"\n\r\t "</span><span class="keyword">);<br />                </span><span class="default">$scriptId </span><span class="keyword">= </span><span class="default">md5</span><span class="keyword">(</span><span class="default">$storedScript</span><span class="keyword">);<br />                </span><span class="default">$key </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">SUBSTITUTION_FORMAT</span><span class="keyword">, </span><span class="default">$scriptId</span><span class="keyword">);<br />                </span><span class="default">$source </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$source</span><span class="keyword">);<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">matchedScripts</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$storedScript</span><span class="keyword">;<br />            }<br />        }<br /><br />        return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">loadHTML</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);<br />    }<br /><br />    public function </span><span class="default">saveHTML</span><span class="keyword">(</span><span class="default">DOMNode $node </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />    {<br />        </span><span class="default">$output </span><span class="keyword">= </span><span class="default">parent</span><span class="keyword">::</span><span class="default">saveHTML</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">);<br /><br />        if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">matchedScripts</span><span class="keyword">)) {<br />            foreach (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">matchedScripts </span><span class="keyword">as </span><span class="default">$substitution </span><span class="keyword">=&gt; </span><span class="default">$originalSnippet</span><span class="keyword">) {<br />                </span><span class="default">$output </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$substitution</span><span class="keyword">, </span><span class="default">$originalSnippet</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">);<br />            }<br />        }<br /><br />        return </span><span class="default">$output</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="94380">  <div class="votes">
    <div id="Vu94380">
    <a href="/manual/vote-note.php?id=94380&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94380">
    <a href="/manual/vote-note.php?id=94380&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94380" title="58% like this...">
    4
    </div>
  </div>
  <a href="#94380" class="name">
  <strong class="user"><em>fcartegnie</em></strong></a><a class="genanchor" href="#94380"> &para;</a><div class="date" title="2009-10-31 01:30"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94380">
<div class="phpcode"><code><span class="html">Be careful with formatOutput().<br /><br />Creating an empty node like this:<br />createElement('foo','')<br />instead of<br />createElement('foo')<br />will break formatOutput.</span></code></div>
  </div>
 </div>
  <div class="note" id="101014">  <div class="votes">
    <div id="Vu101014">
    <a href="/manual/vote-note.php?id=101014&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101014">
    <a href="/manual/vote-note.php?id=101014&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101014" title="57% like this...">
    6
    </div>
  </div>
  <a href="#101014" class="name">
  <strong class="user"><em>evert at er dot nl</em></strong></a><a class="genanchor" href="#101014"> &para;</a><div class="date" title="2010-11-20 02:17"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101014">
<div class="phpcode"><code><span class="html">A nice and simple node 2 array I wrote, worth a try ;) 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">getArray</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$array </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />
<br />    if (</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">hasAttributes</span><span class="keyword">())
<br />    {
<br />        foreach (</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">attributes </span><span class="keyword">as </span><span class="default">$attr</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">] = </span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">;
<br />        }
<br />    }
<br />
<br />    if (</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">hasChildNodes</span><span class="keyword">())
<br />    {
<br />        if (</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">-&gt;</span><span class="default">length </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">] = </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">;
<br />        }
<br />        else
<br />        {
<br />            foreach (</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$childNode</span><span class="keyword">)
<br />            {
<br />                if (</span><span class="default">$childNode</span><span class="keyword">-&gt;</span><span class="default">nodeType </span><span class="keyword">!= </span><span class="default">XML_TEXT_NODE</span><span class="keyword">)
<br />                {
<br />                    </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$childNode</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">][] = </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getArray</span><span class="keyword">(</span><span class="default">$childNode</span><span class="keyword">);
<br />                }
<br />            }
<br />        }
<br />    }
<br />
<br />    return </span><span class="default">$array</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129768">  <div class="votes">
    <div id="Vu129768">
    <a href="/manual/vote-note.php?id=129768&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129768">
    <a href="/manual/vote-note.php?id=129768&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129768" title="100% like this...">
    2
    </div>
  </div>
  <a href="#129768" class="name">
  <strong class="user"><em>devour at php dot net</em></strong></a><a class="genanchor" href="#129768"> &para;</a><div class="date" title="2024-09-25 04:46"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129768">
<div class="phpcode"><code><span class="html">While DOMDocument can technically be used to parse HTML, it is not ideal for HTML documents and is better suited for processing well-formed XML. One of the primary issues with using DOMDocument for HTML is its strict handling of special characters, such as the ampersand (&amp;).<br /><br />DOMDocument requires that ampersands be escaped as &amp;amp;, which is in line with XML standards but can be counterintuitive for handling real-world HTML, where raw &amp; characters are commonly found, especially in URLs and text. This behavior stems from the underlying XML-based parser (libxml), which treats HTML with the same strictness as XML.<br /><br />This problem has been reported as far back as 2001, yet the same parsing errors continue to occur when using DOMDocument on HTML documents today.<br /><br />A common workaround developers use is to suppress the error reporting from DOMDocument, particularly when parsing errors like unescaped ampersands occur. However, suppressing these errors is not recommended, especially in production environments, as it can hide important issues and pose potential security risks. Ignoring or suppressing errors can leave warnings unnoticed, which may result in vulnerabilities if not properly addressed.<br /><br />For these reasons, it's advisable to use DOMDocument primarily for XML documents, or to consider more appropriate libraries  when working with HTML to avoid these issues.<br /><br />theCoder / MV</span></code></div>
  </div>
 </div>
  <div class="note" id="91072">  <div class="votes">
    <div id="Vu91072">
    <a href="/manual/vote-note.php?id=91072&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91072">
    <a href="/manual/vote-note.php?id=91072&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91072" title="52% like this...">
    1
    </div>
  </div>
  <a href="#91072" class="name">
  <strong class="user"><em>cmyk777 at gmail dot com</em></strong></a><a class="genanchor" href="#91072"> &para;</a><div class="date" title="2009-05-23 12:31"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91072">
<div class="phpcode"><code><span class="html">This function may help to debug current dom element:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">dom_dump</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">) {<br />    if (</span><span class="default">$classname </span><span class="keyword">= </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">)) {<br />        </span><span class="default">$retval </span><span class="keyword">= </span><span class="string">"Instance of </span><span class="default">$classname</span><span class="string">, node list: \n"</span><span class="keyword">;<br />        switch (</span><span class="default">true</span><span class="keyword">) {<br />            case (</span><span class="default">$obj </span><span class="keyword">instanceof </span><span class="default">DOMDocument</span><span class="keyword">):<br />                </span><span class="default">$retval </span><span class="keyword">.= </span><span class="string">"XPath: </span><span class="keyword">{</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">getNodePath</span><span class="keyword">()}</span><span class="string">\n"</span><span class="keyword">.</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">);<br />                break;<br />            case (</span><span class="default">$obj </span><span class="keyword">instanceof </span><span class="default">DOMElement</span><span class="keyword">):<br />                </span><span class="default">$retval </span><span class="keyword">.= </span><span class="string">"XPath: </span><span class="keyword">{</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">getNodePath</span><span class="keyword">()}</span><span class="string">\n"</span><span class="keyword">.</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">ownerDocument</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">);<br />                break;<br />            case (</span><span class="default">$obj </span><span class="keyword">instanceof </span><span class="default">DOMAttr</span><span class="keyword">):<br />                </span><span class="default">$retval </span><span class="keyword">.= </span><span class="string">"XPath: </span><span class="keyword">{</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">getNodePath</span><span class="keyword">()}</span><span class="string">\n"</span><span class="keyword">.</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">ownerDocument</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">);<br />                </span><span class="comment">//$retval .= $obj-&gt;ownerDocument-&gt;saveXML($obj);<br />                </span><span class="keyword">break;<br />            case (</span><span class="default">$obj </span><span class="keyword">instanceof </span><span class="default">DOMNodeList</span><span class="keyword">):<br />                for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />                    </span><span class="default">$retval </span><span class="keyword">.= </span><span class="string">"Item #</span><span class="default">$i</span><span class="string">, XPath: </span><span class="keyword">{</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)-&gt;</span><span class="default">getNodePath</span><span class="keyword">()}</span><span class="string">\n"</span><span class="keyword">.<br /></span><span class="string">"</span><span class="keyword">{</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)-&gt;</span><span class="default">ownerDocument</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">))}</span><span class="string">\n"</span><span class="keyword">;<br />                }<br />                break;<br />            default:<br />                return </span><span class="string">"Instance of unknown class"</span><span class="keyword">;<br />        }<br />    } else {<br />        return </span><span class="string">'no elements...'</span><span class="keyword">;<br />    }<br />    return </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$retval</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example usage:<br /><br /><span class="default">&lt;?php<br />$dom </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">();<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="string">'test.xml'</span><span class="keyword">);<br /></span><span class="default">$body </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'book'</span><span class="keyword">);<br />echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">.</span><span class="default">dom_dump</span><span class="keyword">(</span><span class="default">$body</span><span class="keyword">).</span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Output:<br /><br />Instance of DOMNodeList, node list: <br />Item #0, XPath: /library/book[1]<br />&lt;book isbn="0345342968"&gt;<br />&lt;title&gt;Fahrenheit 451&lt;/title&gt;<br />&lt;author&gt;R. Bradbury&lt;/author&gt;<br />&lt;publisher&gt;Del Rey&lt;/publisher&gt;<br />&lt;/book&gt;<br />Item #1, XPath: /library/book[2]<br />&lt;book isbn="0048231398"&gt;<br />&lt;title&gt;The Silmarillion&lt;/title&gt;<br />&lt;author&gt;J.R.R. Tolkien&lt;/author&gt;<br />&lt;publisher&gt;G. Allen &amp;amp; Unwin&lt;/publisher&gt;<br />&lt;/book&gt;<br />Item #2, XPath: /library/book[3]<br />&lt;book isbn="0451524934"&gt;<br />&lt;title&gt;1984&lt;/title&gt;<br />&lt;author&gt;G. Orwell&lt;/author&gt;<br />&lt;publisher&gt;Signet&lt;/publisher&gt;<br />&lt;/book&gt;<br />Item #3, XPath: /library/book[4]<br />&lt;book isbn="031219126X"&gt;<br />&lt;title&gt;Frankenstein&lt;/title&gt;<br />&lt;author&gt;M. Shelley&lt;/author&gt;<br />&lt;publisher&gt;Bedford&lt;/publisher&gt;<br />&lt;/book&gt;<br />Item #4, XPath: /library/book[5]<br />&lt;book isbn="0312863551"&gt;<br />&lt;title&gt;The Moon Is a Harsh Mistress&lt;/title&gt;<br />&lt;author&gt;R. A. Heinlein&lt;/author&gt;<br />&lt;publisher&gt;Orb&lt;/publisher&gt;<br />&lt;/book&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="111169">  <div class="votes">
    <div id="Vu111169">
    <a href="/manual/vote-note.php?id=111169&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111169">
    <a href="/manual/vote-note.php?id=111169&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111169" title="51% like this...">
    1
    </div>
  </div>
  <a href="#111169" class="name">
  <strong class="user"><em>sites.sitesbr.net</em></strong></a><a class="genanchor" href="#111169"> &para;</a><div class="date" title="2013-01-22 12:37"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111169">
<div class="phpcode"><code><span class="html">How to objetify a DomDocument with hierarchy like:<br />&lt;root&gt;<br />    &lt;item&gt;<br />          &lt;prop1&gt;info1&lt;/prop1&gt;<br />          &lt;prop2&gt;info2&lt;/prop2&gt;<br />          &lt;prop3&gt;info3&lt;/prop3&gt;<br />     &lt;/item&gt;<br />    &lt;item&gt;<br />          &lt;prop1&gt;info1&lt;/prop1&gt;<br />          &lt;prop2&gt;info2&lt;/prop2&gt;<br />          &lt;prop3&gt;info3&lt;/prop3&gt;<br />     &lt;/item&gt;<br />&lt;/root&gt;<br /><br />It's possible to use in object style to retrieve information, as:<br /><br /><span class="default">&lt;?php<br />     $theNodeValue </span><span class="keyword">= </span><span class="default">$aitem</span><span class="keyword">-&gt;</span><span class="default">prop1</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Here is the code: one Class and 2 functions.<br /><br /><span class="default">&lt;?php<br /> </span><span class="keyword">class </span><span class="default">ArrayNode</span><span class="keyword">{<br />       public </span><span class="default">$nodeName</span><span class="keyword">, </span><span class="default">$nodeValue</span><span class="keyword">;<br /> }<br /><br /> function </span><span class="default">getChildNodeElements</span><span class="keyword">( </span><span class="default">$domNode </span><span class="keyword">){<br />     </span><span class="default">$nodes </span><span class="keyword">= array();<br />     for( </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$domNode</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />       </span><span class="default">$cn </span><span class="keyword">= </span><span class="default">$domNode</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);<br />       if( </span><span class="default">$cn</span><span class="keyword">-&gt;</span><span class="default">nodeType </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">){<br />           </span><span class="default">$nodes</span><span class="keyword">[] = </span><span class="default">$cn</span><span class="keyword">;<br />           }<br />     }<br />    return </span><span class="default">$nodes</span><span class="keyword">;<br /> }<br /><br /> function </span><span class="default">getArrayNodes</span><span class="keyword">( </span><span class="default">$domDoc </span><span class="keyword">){<br />     </span><span class="default">$res </span><span class="keyword">= array();<br /><br />       for( </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$domDoc</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />       </span><span class="default">$cn </span><span class="keyword">= </span><span class="default">$domDoc</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);<br />       </span><span class="comment"># The first is the root tag...<br />          </span><span class="keyword">if( </span><span class="default">$cn</span><span class="keyword">-&gt;</span><span class="default">nodeType </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">){<br />               </span><span class="comment"># But we want it's childNodes.<br />                </span><span class="default">$sub_cn </span><span class="keyword">= </span><span class="default">getChildNodeElements</span><span class="keyword">( </span><span class="default">$cn</span><span class="keyword">);<br />                </span><span class="comment"># Found the tagName:<br />                </span><span class="default">$baseItemTagName </span><span class="keyword">= </span><span class="default">$sub_cn</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">nodeName</span><span class="keyword">;<br />                break;<br />            }<br />        }<br /><br />       </span><span class="default">$dnl </span><span class="keyword">= </span><span class="default">$domDoc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">( </span><span class="default">$baseItemTagName</span><span class="keyword">);<br /><br />       for( </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt; </span><span class="default">$dnl</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />          </span><span class="default">$arrayNode </span><span class="keyword">= new </span><span class="default">ArrayNode</span><span class="keyword">();<br /><br />      </span><span class="comment"># Summary<br />      </span><span class="default">$arrayNode</span><span class="keyword">-&gt;</span><span class="default">nodeName </span><span class="keyword">= </span><span class="default">$dnl</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)-&gt;</span><span class="default">nodeName</span><span class="keyword">;<br />      </span><span class="default">$arrayNode</span><span class="keyword">-&gt;</span><span class="default">nodeValue </span><span class="keyword">= </span><span class="default">$dnl</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)-&gt;</span><span class="default">nodeValue</span><span class="keyword">;<br /><br />      </span><span class="comment"># Child Nodes<br />      </span><span class="default">$cn </span><span class="keyword">= </span><span class="default">$dnl</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)-&gt;</span><span class="default">childNodes</span><span class="keyword">;<br />      for( </span><span class="default">$k</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$k</span><span class="keyword">&lt;</span><span class="default">$cn</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">; </span><span class="default">$k</span><span class="keyword">++){<br />           if( </span><span class="default">$cn</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">)-&gt;</span><span class="default">nodeName </span><span class="keyword">== </span><span class="string">"#text" </span><span class="keyword">&amp;&amp; </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$cn</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">)-&gt;</span><span class="default">nodeValue</span><span class="keyword">) == </span><span class="string">""</span><span class="keyword">) continue;<br />           </span><span class="default">$arrayNode</span><span class="keyword">-&gt;{</span><span class="default">$cn</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">)-&gt;</span><span class="default">nodeName</span><span class="keyword">} = </span><span class="default">$cn</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">)-&gt;</span><span class="default">nodeValue</span><span class="keyword">;<br />      }<br /><br />      </span><span class="comment"># Attributes<br />      </span><span class="default">$attr </span><span class="keyword">= </span><span class="default">$dnl</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)-&gt;</span><span class="default">attributes</span><span class="keyword">;<br />      for( </span><span class="default">$k</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$k </span><span class="keyword">&lt; </span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">; </span><span class="default">$k</span><span class="keyword">++){<br />           if(! </span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$attr</span><span class="keyword">)){<br />            if( </span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">)-&gt;</span><span class="default">nodeName </span><span class="keyword">== </span><span class="string">"#text" </span><span class="keyword">&amp;&amp; </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">)-&gt;</span><span class="default">nodeValue</span><span class="keyword">) == </span><span class="string">""</span><span class="keyword">) continue;<br />            </span><span class="default">$arrayNode</span><span class="keyword">-&gt;{</span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">)-&gt;</span><span class="default">nodeName</span><span class="keyword">} = </span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">)-&gt;</span><span class="default">nodeValue</span><span class="keyword">;<br />           }<br />      }<br /><br />      </span><span class="default">$res</span><span class="keyword">[] = </span><span class="default">$arrayNode</span><span class="keyword">;<br /><br />       }<br /><br />     return </span><span class="default">$res</span><span class="keyword">;<br /> }<br /></span><span class="default">?&gt;<br /></span><br />To use it:<br /><br /><span class="default">&lt;?php<br /><br />  </span><span class="comment"># First you load a XML in a DomDocument variable.<br /><br />   </span><span class="default">$url </span><span class="keyword">= </span><span class="string">"/path/to/yourxmlfile.xml"</span><span class="keyword">;<br />   </span><span class="default">$domSrc </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);<br />   </span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">();<br />   </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">( </span><span class="default">$domSrc </span><span class="keyword">);<br /><br />  </span><span class="comment"># Then, you get the ArrayNodes from the DomDocument.<br /><br />    </span><span class="default">$ans </span><span class="keyword">= </span><span class="default">getArrayNodes</span><span class="keyword">( </span><span class="default">$dom </span><span class="keyword">);<br /><br /> <br />    for( </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">( </span><span class="default">$ans </span><span class="keyword">) ; </span><span class="default">$i</span><span class="keyword">++){<br /><br />    </span><span class="default">$cn </span><span class="keyword">=  </span><span class="default">$ans</span><span class="keyword">[ </span><span class="default">$i</span><span class="keyword">];<br /><br />    </span><span class="default">$info1 </span><span class="keyword">=  </span><span class="default">$cn</span><span class="keyword">-&gt;</span><span class="default">prop1</span><span class="keyword">;<br />    </span><span class="default">$info2 </span><span class="keyword">=  </span><span class="default">$cn</span><span class="keyword">-&gt;</span><span class="default">prop2</span><span class="keyword">;<br />    </span><span class="default">$info3 </span><span class="keyword">=  </span><span class="default">$cn</span><span class="keyword">-&gt;</span><span class="default">prop3</span><span class="keyword">;<br />      <br />         </span><span class="comment">// ...<br /> <br />   </span><span class="keyword">}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126934">  <div class="votes">
    <div id="Vu126934">
    <a href="/manual/vote-note.php?id=126934&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126934">
    <a href="/manual/vote-note.php?id=126934&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126934" title="50% like this...">
    0
    </div>
  </div>
  <a href="#126934" class="name">
  <strong class="user"><em>610010559 at qq dot com</em></strong></a><a class="genanchor" href="#126934"> &para;</a><div class="date" title="2022-03-17 02:39"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126934">
<div class="phpcode"><code><span class="html">when you add the new element to formatted XML data through appendChild() method, you would the new element you add is not be formatted(that is not indexed, not line break).  here is my solution (in short load the xml without preserve white space, ), example show as below:<br /><span class="default">&lt;?php<br />$doc </span><span class="keyword">= new </span><span class="default">\DOMDocument</span><span class="keyword">();<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">formatOutput </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">preserveWhiteSpace </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;</span><span class="comment">//that is key, default value is true. <br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$xmlStr</span><span class="keyword">);<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'php'</span><span class="keyword">, </span><span class="string">'666'</span><span class="keyword">))<br /></span><span class="default">$formattedXMLStr </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();</span><span class="comment">//DOMDocument wold format the xml str for you<br /></span><span class="keyword">echo </span><span class="default">$formattedXMlStr</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>it take me some time to try it out. hope it save your time.</span></code></div>
  </div>
 </div>
  <div class="note" id="122917">  <div class="votes">
    <div id="Vu122917">
    <a href="/manual/vote-note.php?id=122917&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122917">
    <a href="/manual/vote-note.php?id=122917&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122917" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122917" class="name">
  <strong class="user"><em>ashjkshdu283 at gmail dot com</em></strong></a><a class="genanchor" href="#122917"> &para;</a><div class="date" title="2018-07-07 11:39"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122917">
<div class="phpcode"><code><span class="html">/* Function evolved from jay at jaygilford dot com post<br />  * This function will return an array of the values of the specified<br />  * attribute ($attr) for all the Dom Document object's elements <br />  */<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">getAttrData</span><span class="keyword">(</span><span class="default">string $attr</span><span class="keyword">, </span><span class="default">DomDocument $dom</span><span class="keyword">) { <br />    </span><span class="comment">// Empty array to hold all classes to return <br />    </span><span class="default">$attrData </span><span class="keyword">= array(); <br /><br />    </span><span class="comment">//Loop through each tag in the dom and add it's attribute data to the array <br />    </span><span class="keyword">foreach(</span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'*'</span><span class="keyword">) as </span><span class="default">$tag</span><span class="keyword">) {<br />        if(empty(</span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="default">$attr</span><span class="keyword">)) === </span><span class="default">false</span><span class="keyword">) {<br />            </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$attrData</span><span class="keyword">, </span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="default">$attr</span><span class="keyword">));<br />        }<br />    } <br /><br />    </span><span class="comment">//Return the array of attribute data<br />    </span><span class="keyword">return </span><span class="default">array_unique</span><span class="keyword">(</span><span class="default">$attrData</span><span class="keyword">); <br />}<br /><br /></span><span class="default">$html </span><span class="keyword">= </span><span class="string">'<br />&lt;!DOCTYPE html&gt;<br />&lt;html&gt;<br />&lt;head&gt;<br />&lt;title&gt;Page Title&lt;/title&gt;<br />&lt;/head&gt;<br />&lt;body&gt;<br />&lt;a href="#someLink" id="someLink" class="link-class"&gt;Some Link&lt;/a&gt;<br />&lt;a href="#someOtherLink" id="someOtherLink" class="link-class"&gt;Some Other Link&lt;/a&gt;<br />&lt;h1 id="header1" class="header-class"&gt;My First Heading&lt;/h1&gt;<br />&lt;p id="para1" class="para-class"&gt;My first paragraph.&lt;/p&gt;<br />&lt;/body&gt;<br />&lt;/html&gt;'</span><span class="keyword">;<br /></span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadHtml</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">);<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">getAttrData</span><span class="keyword">(</span><span class="string">'class'</span><span class="keyword">, </span><span class="default">$dom</span><span class="keyword">));</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117274">  <div class="votes">
    <div id="Vu117274">
    <a href="/manual/vote-note.php?id=117274&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117274">
    <a href="/manual/vote-note.php?id=117274&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117274" title="50% like this...">
    0
    </div>
  </div>
  <a href="#117274" class="name">
  <strong class="user"><em>ingjetel at gmail dot com</em></strong></a><a class="genanchor" href="#117274"> &para;</a><div class="date" title="2015-05-13 11:54"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117274">
<div class="phpcode"><code><span class="html">Easy function for basic output of XML file via DOM parsing<br /><br /><span class="default">&lt;?php<br />$dom </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">();<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="string">"./file.xml"</span><span class="keyword">) or die(</span><span class="string">"error"</span><span class="keyword">);<br /></span><span class="default">$start </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">;<br /></span><span class="default">fc</span><span class="keyword">(</span><span class="default">$start</span><span class="keyword">);<br /><br />function </span><span class="default">fc</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">) {<br />  </span><span class="default">$child </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">;<br />  foreach(</span><span class="default">$child </span><span class="keyword">as </span><span class="default">$item</span><span class="keyword">) {<br />    if (</span><span class="default">$item</span><span class="keyword">-&gt;</span><span class="default">nodeType </span><span class="keyword">== </span><span class="default">XML_TEXT_NODE</span><span class="keyword">) {<br />      if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">))) echo </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">).</span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br />    }<br />    else if (</span><span class="default">$item</span><span class="keyword">-&gt;</span><span class="default">nodeType </span><span class="keyword">== </span><span class="default">XML_ELEMENT_NODE</span><span class="keyword">) </span><span class="default">fc</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">);<br />  }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="96709">  <div class="votes">
    <div id="Vu96709">
    <a href="/manual/vote-note.php?id=96709&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96709">
    <a href="/manual/vote-note.php?id=96709&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96709" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#96709" class="name">
  <strong class="user"><em>admin at beerpla dot net</em></strong></a><a class="genanchor" href="#96709"> &para;</a><div class="date" title="2010-03-12 02:12"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96709">
<div class="phpcode"><code><span class="html">After seeing many complaints about certain DOMDocument shortcomings, such as bad handling of encodings and always saving HTML fragments with &lt;html&gt;, &lt;head&gt;, and DOCTYPE, I decided that a better solution is needed.<br /><br />So here it is: SmartDOMDocument. You can find it at <a href="http://beerpla.net/projects/smartdomdocument/" rel="nofollow" target="_blank">http://beerpla.net/projects/smartdomdocument/</a><br /><br />Currently, the main highlights are:<br /><br />- SmartDOMDocument inherits from DOMDocument, so it's very easy to use - just declare an object of type SmartDOMDocument instead of DOMDocument and enjoy the new behavior on top of all existing functionality (see example below).<br /><br />- saveHTMLExact() - DOMDocument has an extremely badly designed "feature" where if the HTML code you are loading does not contain &lt;html&gt; and &lt;body&gt; tags, it adds them automatically (yup, there are no flags to turn this behavior off).<br />Thus, when you call $doc-&gt;saveHTML(), your newly saved content now has &lt;html&gt;&lt;body&gt; and DOCTYPE in it. Not very handy when trying to work with code fragments (XML has a similar problem).<br />SmartDOMDocument contains a new function called saveHTMLExact() which does exactly what you would want - it saves HTML without adding that extra garbage that DOMDocument does.<br /><br />- encoding fix - DOMDocument notoriously doesn't handle encoding (at least UTF-8) correctly and garbles the output.<br />SmartDOMDocument tries to work around this problem by enhancing loadHTML() to deal with encoding correctly. This behavior is transparent to you - just use loadHTML() as you would normally.<br /><br />- SmartDOMDocument Object As String - you can use a SmartDOMDocument object as a string which will print out its contents.<br />For example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">"Here is the HTML: </span><span class="default">$smart_dom_doc</span><span class="string">"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />I'm going to maintain this code and try to fix bugs as they come in.<br /><br />Enjoy.</span></code></div>
  </div>
 </div>
  <div class="note" id="113545">  <div class="votes">
    <div id="Vu113545">
    <a href="/manual/vote-note.php?id=113545&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113545">
    <a href="/manual/vote-note.php?id=113545&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113545" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#113545" class="name">
  <strong class="user"><em>danny dot nunez15 at gmail dot com</em></strong></a><a class="genanchor" href="#113545"> &para;</a><div class="date" title="2013-10-28 02:54"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113545">
<div class="phpcode"><code><span class="html">A simple function to grab all links in a page. <br /><br />    function get_links($url) {<br /><br />        // Create a new DOM Document to hold our webpage structure <br />        $xml = new DOMDocument();<br /><br />        // Load the url's contents into the DOM <br /><br />        $xml-&gt;loadHTMLFile($url);<br /><br />        // Empty array to hold all links to return <br />        $links = array();<br /><br />        //Loop through each &lt;a&gt; tag in the dom and add it to the link array <br />        foreach ($xml-&gt;getElementsByTagName('a') as $link) {<br />            $url = $link-&gt;getAttribute('href');<br />            if (!empty($url)) {<br />                $links[] = $link-&gt;getAttribute('href');<br />            }<br />        }<br /><br />        //Return the links <br />        return $links;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="116118">  <div class="votes">
    <div id="Vu116118">
    <a href="/manual/vote-note.php?id=116118&amp;page=class.domdocument&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116118">
    <a href="/manual/vote-note.php?id=116118&amp;page=class.domdocument&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116118" title="33% like this...">
    -5
    </div>
  </div>
  <a href="#116118" class="name">
  <strong class="user"><em>qrworld.net</em></strong></a><a class="genanchor" href="#116118"> &para;</a><div class="date" title="2014-11-11 04:35"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116118">
<div class="phpcode"><code><span class="html">In this post <a href="http://softontherocks.blogspot.com/2014/11/descargar-el-contenido-de-una-url_11.html" rel="nofollow" target="_blank">http://softontherocks.blogspot.com/2014/11/descargar-el-contenido-de-una-url_11.html</a> I found a simple way to get the content of a URL with DOMDocument, loadHTMLFile and saveHTML().<br /><br />function getURLContent($url){<br />    $doc = new DOMDocument;<br />    $doc-&gt;preserveWhiteSpace = FALSE;<br />    @$doc-&gt;loadHTMLFile($url);<br />    return $doc-&gt;saveHTML();<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.domdocument&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.domdocument.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.dom.php">DOM</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.dom.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="dom.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="dom.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="dom.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.domattr.php" title="DOMAttr">DOMAttr</a>
                        </li>
                                                <li class="">
                            <a href="class.domcdatasection.php" title="DOMCdataSection">DOMCdataSection</a>
                        </li>
                                                <li class="">
                            <a href="class.domcharacterdata.php" title="DOMCharacterData">DOMCharacterData</a>
                        </li>
                                                <li class="">
                            <a href="class.domchildnode.php" title="DOMChildNode">DOMChildNode</a>
                        </li>
                                                <li class="">
                            <a href="class.domcomment.php" title="DOMComment">DOMComment</a>
                        </li>
                                                <li class="current">
                            <a href="class.domdocument.php" title="DOMDocument">DOMDocument</a>
                        </li>
                                                <li class="">
                            <a href="class.domdocumentfragment.php" title="DOMDocumentFragment">DOMDocumentFragment</a>
                        </li>
                                                <li class="">
                            <a href="class.domdocumenttype.php" title="DOMDocumentType">DOMDocumentType</a>
                        </li>
                                                <li class="">
                            <a href="class.domelement.php" title="DOMElement">DOMElement</a>
                        </li>
                                                <li class="">
                            <a href="class.domentity.php" title="DOMEntity">DOMEntity</a>
                        </li>
                                                <li class="">
                            <a href="class.domentityreference.php" title="DOMEntityReference">DOMEntityReference</a>
                        </li>
                                                <li class="">
                            <a href="class.domexception.php" title="DOMException">DOMException</a>
                        </li>
                                                <li class="">
                            <a href="class.domimplementation.php" title="DOMImplementation">DOMImplementation</a>
                        </li>
                                                <li class="">
                            <a href="class.domnamednodemap.php" title="DOMNamedNodeMap">DOMNamedNodeMap</a>
                        </li>
                                                <li class="">
                            <a href="class.domnamespacenode.php" title="DOMNameSpaceNode">DOMNameSpaceNode</a>
                        </li>
                                                <li class="">
                            <a href="class.domnode.php" title="DOMNode">DOMNode</a>
                        </li>
                                                <li class="">
                            <a href="class.domnodelist.php" title="DOMNodeList">DOMNodeList</a>
                        </li>
                                                <li class="">
                            <a href="class.domnotation.php" title="DOMNotation">DOMNotation</a>
                        </li>
                                                <li class="">
                            <a href="class.domparentnode.php" title="DOMParentNode">DOMParentNode</a>
                        </li>
                                                <li class="">
                            <a href="class.domprocessinginstruction.php" title="DOMProcessingInstruction">DOMProcessingInstruction</a>
                        </li>
                                                <li class="">
                            <a href="class.domtext.php" title="DOMText">DOMText</a>
                        </li>
                                                <li class="">
                            <a href="class.domxpath.php" title="DOMXPath">DOMXPath</a>
                        </li>
                                                <li class="">
                            <a href="enum.dom-adjacentposition.php" title="Dom\AdjacentPosition">Dom\AdjacentPosition</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-attr.php" title="Dom\Attr">Dom\Attr</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-cdatasection.php" title="Dom\CDATASection">Dom\CDATASection</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-characterdata.php" title="Dom\CharacterData">Dom\CharacterData</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-childnode.php" title="Dom\ChildNode">Dom\ChildNode</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-comment.php" title="Dom\Comment">Dom\Comment</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-document.php" title="Dom\Document">Dom\Document</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-documentfragment.php" title="Dom\DocumentFragment">Dom\DocumentFragment</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-documenttype.php" title="Dom\DocumentType">Dom\DocumentType</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-dtdnamednodemap.php" title="Dom\DtdNamedNodeMap">Dom\DtdNamedNodeMap</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-element.php" title="Dom\Element">Dom\Element</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-entity.php" title="Dom\Entity">Dom\Entity</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-entityreference.php" title="Dom\EntityReference">Dom\EntityReference</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-htmlcollection.php" title="Dom\HTMLCollection">Dom\HTMLCollection</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-htmldocument.php" title="Dom\HTMLDocument">Dom\HTMLDocument</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-htmlelement.php" title="Dom\HTMLElement">Dom\HTMLElement</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-implementation.php" title="Dom\Implementation">Dom\Implementation</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-namednodemap.php" title="Dom\NamedNodeMap">Dom\NamedNodeMap</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-namespaceinfo.php" title="Dom\NamespaceInfo">Dom\NamespaceInfo</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-node.php" title="Dom\Node">Dom\Node</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-nodelist.php" title="Dom\NodeList">Dom\NodeList</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-notation.php" title="Dom\Notation">Dom\Notation</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-parentnode.php" title="Dom\ParentNode">Dom\ParentNode</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-processinginstruction.php" title="Dom\ProcessingInstruction">Dom\ProcessingInstruction</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-text.php" title="Dom\Text">Dom\Text</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-tokenlist.php" title="Dom\TokenList">Dom\TokenList</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-xmldocument.php" title="Dom\XMLDocument">Dom\XMLDocument</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-xpath.php" title="Dom\XPath">Dom\XPath</a>
                        </li>
                                                <li class="">
                            <a href="ref.dom.php" title="DOM Functions">DOM Functions</a>
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
