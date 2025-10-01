<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMElement - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.domelement.php">
 <link rel="shorturl" href="https://www.php.net/domelement">
 <link rel="alternate" href="https://www.php.net/domelement" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.dom.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.domdocumenttype.php">
 <link rel="next" href="https://www.php.net/manual/en/domelement.after.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.domelement.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.domelement.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.domelement.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.domelement.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.domelement.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.domelement.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.domelement.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.domelement.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.domelement.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.domelement.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.domelement.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The DOMElement class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMElement - Manual" />
<meta name="twitter:description" content="The DOMElement class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMElement - Manual" />
<meta itemprop="description" content="The DOMElement class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The DOMElement class" />

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
        <a href="domelement.after.php">
          DOMElement::after &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.domdocumenttype.php">
          &laquo; DOMDocumentType        </a>
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
            <option value='en/class.domelement.php' selected="selected">English</option>
            <option value='de/class.domelement.php'>German</option>
            <option value='es/class.domelement.php'>Spanish</option>
            <option value='fr/class.domelement.php'>French</option>
            <option value='it/class.domelement.php'>Italian</option>
            <option value='ja/class.domelement.php'>Japanese</option>
            <option value='pt_BR/class.domelement.php'>Brazilian Portuguese</option>
            <option value='ru/class.domelement.php'>Russian</option>
            <option value='tr/class.domelement.php'>Turkish</option>
            <option value='uk/class.domelement.php'>Ukrainian</option>
            <option value='zh/class.domelement.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.domelement" class="reference">
 <h1 class="title">The DOMElement class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>
 



 
  <div class="section" id="domelement.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">DOMElement</strong></strong>
    

    
     <span class="modifier">extends</span>
      <a href="class.domnode.php" class="classname">DOMNode</a>
    

    
     <span class="modifier">implements</span>
      <a href="class.domparentnode.php" class="interfacename">DOMParentNode</a>,

     <a href="class.domchildnode.php" class="interfacename">DOMChildNode</a> {</div>

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
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.domelement.php#domelement.props.tagname">$<var class="varname">tagName</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.domelement.php#domelement.props.classname">$<var class="varname">className</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.domelement.php#domelement.props.id">$<var class="varname">id</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span>
      <var class="varname"><a href="class.domelement.php#domelement.props.schematypeinfo">$<var class="varname">schemaTypeInfo</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domelement.php#domelement.props.firstelementchild">$<var class="varname">firstElementChild</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domelement.php#domelement.props.lastelementchild">$<var class="varname">lastElementChild</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.domelement.php#domelement.props.childelementcount">$<var class="varname">childElementCount</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domelement.php#domelement.props.previouselementsibling">$<var class="varname">previousElementSibling</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.domelement.php#domelement.props.nextelementsibling">$<var class="varname">nextElementSibling</var></a></var>;</div>


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
   <span class="modifier">public</span> <span class="methodname"><a href="domelement.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$value</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace</code><span class="initializer"> = &quot;&quot;</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.after.php" class="methodname">after</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">...$nodes</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.append.php" class="methodname">append</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">...$nodes</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.before.php" class="methodname">before</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">...$nodes</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.getattribute.php" class="methodname">getAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.getattributenames.php" class="methodname">getAttributeNames</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.getattributenode.php" class="methodname">getAttributeNode</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>): <span class="type"><span class="type"><a href="class.domattr.php" class="type DOMAttr">DOMAttr</a></span>|<span class="type"><a href="class.domnamespacenode.php" class="type DOMNameSpaceNode">DOMNameSpaceNode</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.getattributenodens.php" class="methodname">getAttributeNodeNS</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespace</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$localName</code></span>): <span class="type"><span class="type"><a href="class.domattr.php" class="type DOMAttr">DOMAttr</a></span>|<span class="type"><a href="class.domnamespacenode.php" class="type DOMNameSpaceNode">DOMNameSpaceNode</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.getattributens.php" class="methodname">getAttributeNS</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespace</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$localName</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.getelementsbytagname.php" class="methodname">getElementsByTagName</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>): <span class="type"><a href="class.domnodelist.php" class="type DOMNodeList">DOMNodeList</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.getelementsbytagnamens.php" class="methodname">getElementsByTagNameNS</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespace</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$localName</code></span>): <span class="type"><a href="class.domnodelist.php" class="type DOMNodeList">DOMNodeList</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.hasattribute.php" class="methodname">hasAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.hasattributens.php" class="methodname">hasAttributeNS</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespace</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$localName</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.insertadjacentelement.php" class="methodname">insertAdjacentElement</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$where</code></span>, <span class="methodparam"><span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span> <code class="parameter">$element</code></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.domelement.php" class="type DOMElement">DOMElement</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.insertadjacenttext.php" class="methodname">insertAdjacentText</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$where</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.prepend.php" class="methodname">prepend</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">...$nodes</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.remove.php" class="methodname">remove</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.removeattribute.php" class="methodname">removeAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.removeattributenode.php" class="methodname">removeAttributeNode</a></span>(<span class="methodparam"><span class="type"><a href="class.domattr.php" class="type DOMAttr">DOMAttr</a></span> <code class="parameter">$attr</code></span>): <span class="type"><span class="type"><a href="class.domattr.php" class="type DOMAttr">DOMAttr</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.removeattributens.php" class="methodname">removeAttributeNS</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespace</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$localName</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.replacechildren.php" class="methodname">replaceChildren</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">...$nodes</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.replacewith.php" class="methodname">replaceWith</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">...$nodes</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.setattribute.php" class="methodname">setAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><span class="type"><a href="class.domattr.php" class="type DOMAttr">DOMAttr</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.setattributenode.php" class="methodname">setAttributeNode</a></span>(<span class="methodparam"><span class="type"><a href="class.domattr.php" class="type DOMAttr">DOMAttr</a></span> <code class="parameter">$attr</code></span>): <span class="type"><span class="type"><a href="class.domattr.php" class="type DOMAttr">DOMAttr</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.setattributenodens.php" class="methodname">setAttributeNodeNS</a></span>(<span class="methodparam"><span class="type"><a href="class.domattr.php" class="type DOMAttr">DOMAttr</a></span> <code class="parameter">$attr</code></span>): <span class="type"><span class="type"><a href="class.domattr.php" class="type DOMAttr">DOMAttr</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.setattributens.php" class="methodname">setAttributeNS</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespace</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.setidattribute.php" class="methodname">setIdAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$isId</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.setidattributenode.php" class="methodname">setIdAttributeNode</a></span>(<span class="methodparam"><span class="type"><a href="class.domattr.php" class="type DOMAttr">DOMAttr</a></span> <code class="parameter">$attr</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$isId</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.setidattributens.php" class="methodname">setIdAttributeNS</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$isId</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domelement.toggleattribute.php" class="methodname">toggleAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span> <code class="parameter">$force</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>


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
 

  <div class="section" id="domelement.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="domelement.props.childelementcount"><var class="varname">childElementCount</var></dt>
     <dd>
      <p class="para">The number of child elements.</p>
     </dd>
    
    
     <dt id="domelement.props.firstelementchild"><var class="varname">firstElementChild</var></dt>
     <dd>
      <p class="para">First child element or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.</p>
     </dd>
    
    
     <dt id="domelement.props.lastelementchild"><var class="varname">lastElementChild</var></dt>
     <dd>
      <p class="para">Last child element or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.</p>
     </dd>
    
    
     <dt id="domelement.props.nextelementsibling"><var class="varname">nextElementSibling</var></dt>
     <dd>
      <p class="para">The next sibling element or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.</p>
     </dd>
    
    
     <dt id="domelement.props.previouselementsibling"><var class="varname">previousElementSibling</var></dt>
     <dd>
      <p class="para">The previous sibling element or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.</p>
     </dd>
    
    
     <dt id="domelement.props.schematypeinfo"><var class="varname">schemaTypeInfo</var></dt>
     <dd>
      <p class="para">Not implemented yet, always return <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></p>
     </dd>
    
    
     <dt id="domelement.props.tagname"><var class="varname">tagName</var></dt>
     <dd>
      <p class="para">The element name</p>
     </dd>
    
    
     <dt id="domelement.props.classname"><var class="varname">className</var></dt>
     <dd>
      <p class="para">A string representing the classes of the element separated by spaces.</p>
     </dd>
    
    
     <dt id="domelement.props.id"><var class="varname">id</var></dt>
     <dd>
      <p class="para">Reflects the element ID through the <code class="literal">&quot;id&quot;</code> attribute.</p>
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
       <td>8.3.0</td>
       <td>
        The <var class="varname">className</var> and <var class="varname">id</var> properties and
        the <span class="methodname"><a href="domelement.getattributenames.php" class="methodname">DOMElement::getAttributeNames()</a></span>,
        <span class="methodname"><a href="domelement.insertadjacentelement.php" class="methodname">DOMElement::insertAdjacentElement()</a></span>,
        <span class="methodname"><a href="domelement.insertadjacenttext.php" class="methodname">DOMElement::insertAdjacentText()</a></span>, and
        <span class="methodname"><a href="domelement.toggleattribute.php" class="methodname">DOMElement::toggleAttribute()</a></span> methods have been added.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        The <var class="varname">firstElementChild</var>, <var class="varname">lastElementChild</var>,
        <var class="varname">childElementCount</var>, <var class="varname">previousElementSibling</var>,
        and <var class="varname">nextElementSibling</var> properties have been added.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        <span class="classname"><strong class="classname">DOMElement</strong></span> implements
        <span class="interfacename"><a href="class.domparentnode.php" class="interfacename">DOMParentNode</a></span> and
        <span class="interfacename"><a href="class.domchildnode.php" class="interfacename">DOMChildNode</a></span> now.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>


  <div class="section">
   <h2 class="title">Notes</h2>
   <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">The DOM extension uses UTF-8 encoding. Use <span class="function"><a href="function.mb-convert-encoding.php" class="function">mb_convert_encoding()</a></span>, <span class="methodname"><a href="uconverter.transcode.php" class="methodname">UConverter::transcode()</a></span>, or <span class="function"><a href="function.iconv.php" class="function">iconv()</a></span> to handle other encodings.</p></p></blockquote>
  </div>

  



 
 </div>
 
 










































































































































 
<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="domelement.after.php">DOMElement::after</a> — Adds nodes after the element</li><li><a href="domelement.append.php">DOMElement::append</a> — Appends nodes after the last child node</li><li><a href="domelement.before.php">DOMElement::before</a> — Adds nodes before the element</li><li><a href="domelement.construct.php">DOMElement::__construct</a> — Creates a new DOMElement object</li><li><a href="domelement.getattribute.php">DOMElement::getAttribute</a> — Returns value of attribute</li><li><a href="domelement.getattributenames.php">DOMElement::getAttributeNames</a> — Get attribute names</li><li><a href="domelement.getattributenode.php">DOMElement::getAttributeNode</a> — Returns attribute node</li><li><a href="domelement.getattributenodens.php">DOMElement::getAttributeNodeNS</a> — Returns attribute node</li><li><a href="domelement.getattributens.php">DOMElement::getAttributeNS</a> — Returns value of attribute</li><li><a href="domelement.getelementsbytagname.php">DOMElement::getElementsByTagName</a> — Gets elements by tagname</li><li><a href="domelement.getelementsbytagnamens.php">DOMElement::getElementsByTagNameNS</a> — Get elements by namespaceURI and localName</li><li><a href="domelement.hasattribute.php">DOMElement::hasAttribute</a> — Checks to see if attribute exists</li><li><a href="domelement.hasattributens.php">DOMElement::hasAttributeNS</a> — Checks to see if attribute exists</li><li><a href="domelement.insertadjacentelement.php">DOMElement::insertAdjacentElement</a> — Insert adjacent element</li><li><a href="domelement.insertadjacenttext.php">DOMElement::insertAdjacentText</a> — Insert adjacent text</li><li><a href="domelement.prepend.php">DOMElement::prepend</a> — Prepends nodes before the first child node</li><li><a href="domelement.remove.php">DOMElement::remove</a> — Removes the element</li><li><a href="domelement.removeattribute.php">DOMElement::removeAttribute</a> — Removes attribute</li><li><a href="domelement.removeattributenode.php">DOMElement::removeAttributeNode</a> — Removes attribute</li><li><a href="domelement.removeattributens.php">DOMElement::removeAttributeNS</a> — Removes attribute</li><li><a href="domelement.replacechildren.php">DOMElement::replaceChildren</a> — Replace children in element</li><li><a href="domelement.replacewith.php">DOMElement::replaceWith</a> — Replaces the element with new nodes</li><li><a href="domelement.setattribute.php">DOMElement::setAttribute</a> — Adds new or modifies existing attribute</li><li><a href="domelement.setattributenode.php">DOMElement::setAttributeNode</a> — Adds new attribute node to element</li><li><a href="domelement.setattributenodens.php">DOMElement::setAttributeNodeNS</a> — Adds new attribute node to element</li><li><a href="domelement.setattributens.php">DOMElement::setAttributeNS</a> — Adds new attribute</li><li><a href="domelement.setidattribute.php">DOMElement::setIdAttribute</a> — Declares the attribute specified by name to be of type ID</li><li><a href="domelement.setidattributenode.php">DOMElement::setIdAttributeNode</a> — Declares the attribute specified by node to be of type ID</li><li><a href="domelement.setidattributens.php">DOMElement::setIdAttributeNS</a> — Declares the attribute specified by local name and namespace URI to be of type ID</li><li><a href="domelement.toggleattribute.php">DOMElement::toggleAttribute</a> — Toggle attribute</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domelement.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.domelement%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.domelement&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.domelement.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="86224">  <div class="votes">
    <div id="Vu86224">
    <a href="/manual/vote-note.php?id=86224&amp;page=class.domelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86224">
    <a href="/manual/vote-note.php?id=86224&amp;page=class.domelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86224" title="89% like this...">
    122
    </div>
  </div>
  <a href="#86224" class="name">
  <strong class="user"><em>j DOT wagner ( AT ) medieninnovation.com</em></strong></a><a class="genanchor" href="#86224"> &para;</a><div class="date" title="2008-10-08 09:11"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86224">
<div class="phpcode"><code><span class="html">Caveat!<br />It took me almost an hour to figure this out, so I hope it saves at least one of you some time.<br /><br />If you want to debug your DOM tree and try var_dump() or similar you will be fooled into thinking the DOMElement that you are looking at is empty, because var_dump() says: object(DOMElement)#1 (0) { } <br /><br />After much debugging I found out that all DOM objects are invisible to var_dump() and print_r(), my guess is because they are C objects and not PHP objects. So I tried saveXML(), which works fine on DOMDocument, but is not implemented on DOMElement.<br /><br />The solution is simple (if you know it):<br />$xml = $domElement-&gt;ownerDocument-&gt;saveXML($domElement);<br /><br />This will give you an XML representation of $domElement.</span></code></div>
  </div>
 </div>
  <div class="note" id="86596">  <div class="votes">
    <div id="Vu86596">
    <a href="/manual/vote-note.php?id=86596&amp;page=class.domelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86596">
    <a href="/manual/vote-note.php?id=86596&amp;page=class.domelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86596" title="82% like this...">
    62
    </div>
  </div>
  <a href="#86596" class="name">
  <strong class="user"><em>Pinochet</em></strong></a><a class="genanchor" href="#86596"> &para;</a><div class="date" title="2008-10-25 05:33"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86596">
<div class="phpcode"><code><span class="html">Hi to get the value of DOMElement just get the nodeValue public parameter (it is inherited from DOMNode):<br /><span class="default">&lt;?php <br /></span><span class="keyword">echo </span><span class="default">$domElement</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">; <br /></span><span class="default">?&gt;<br /></span>Everything is obvious if you now about this thing ;-)</span></code></div>
  </div>
 </div>
  <div class="note" id="113623">  <div class="votes">
    <div id="Vu113623">
    <a href="/manual/vote-note.php?id=113623&amp;page=class.domelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113623">
    <a href="/manual/vote-note.php?id=113623&amp;page=class.domelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113623" title="84% like this...">
    39
    </div>
  </div>
  <a href="#113623" class="name">
  <strong class="user"><em>Janne Enberg</em></strong></a><a class="genanchor" href="#113623"> &para;</a><div class="date" title="2013-11-07 11:02"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113623">
<div class="phpcode"><code><span class="html">This page doesn't list the inherited properties from DOMNode, e.g. the quite important textContent property. It would be immensely helpful if it would list those as well.</span></code></div>
  </div>
 </div>
  <div class="note" id="101243">  <div class="votes">
    <div id="Vu101243">
    <a href="/manual/vote-note.php?id=101243&amp;page=class.domelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101243">
    <a href="/manual/vote-note.php?id=101243&amp;page=class.domelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101243" title="71% like this...">
    26
    </div>
  </div>
  <a href="#101243" class="name">
  <strong class="user"><em>dpetroff ( at ) gmail.com</em></strong></a><a class="genanchor" href="#101243"> &para;</a><div class="date" title="2010-12-04 11:24"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101243">
<div class="phpcode"><code><span class="html">Hi!
<br />
<br />Combining all th comments, the easiest way to get inner HTML of the node is to use this function:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">get_inner_html</span><span class="keyword">( </span><span class="default">$node </span><span class="keyword">) {
<br />    </span><span class="default">$innerHTML</span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    </span><span class="default">$children </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">;
<br />    foreach (</span><span class="default">$children </span><span class="keyword">as </span><span class="default">$child</span><span class="keyword">) {
<br />        </span><span class="default">$innerHTML </span><span class="keyword">.= </span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">ownerDocument</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">( </span><span class="default">$child </span><span class="keyword">);
<br />    }
<br />
<br />    return </span><span class="default">$innerHTML</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90742">  <div class="votes">
    <div id="Vu90742">
    <a href="/manual/vote-note.php?id=90742&amp;page=class.domelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90742">
    <a href="/manual/vote-note.php?id=90742&amp;page=class.domelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90742" title="70% like this...">
    10
    </div>
  </div>
  <a href="#90742" class="name">
  <strong class="user"><em>Daniel Morlock</em></strong></a><a class="genanchor" href="#90742"> &para;</a><div class="date" title="2009-05-07 09:22"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90742">
<div class="phpcode"><code><span class="html">It would be nice to have a function which converts a document/node/element into a string. <br /><br />Anyways, I use the following code snippet to get the innerHTML value of a DOMNode:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getInnerHTML</span><span class="keyword">(</span><span class="default">$Node</span><span class="keyword">)<br />{<br />     </span><span class="default">$Body </span><span class="keyword">= </span><span class="default">$Node</span><span class="keyword">-&gt;</span><span class="default">ownerDocument</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">;<br />     </span><span class="default">$Document </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();     <br />     </span><span class="default">$Document</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$Document</span><span class="keyword">-&gt;</span><span class="default">importNode</span><span class="keyword">(</span><span class="default">$Body</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">));<br />     return </span><span class="default">$Document</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111494">  <div class="votes">
    <div id="Vu111494">
    <a href="/manual/vote-note.php?id=111494&amp;page=class.domelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111494">
    <a href="/manual/vote-note.php?id=111494&amp;page=class.domelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111494" title="64% like this...">
    4
    </div>
  </div>
  <a href="#111494" class="name">
  <strong class="user"><em>felix dot klee at inka dot de</em></strong></a><a class="genanchor" href="#111494"> &para;</a><div class="date" title="2013-02-26 03:23"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111494">
<div class="phpcode"><code><span class="html">How to rename an element and preserve attributes:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Changes the name of element $element to $newName.<br /></span><span class="keyword">function </span><span class="default">renameElement</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">, </span><span class="default">$newName</span><span class="keyword">) {<br />  </span><span class="default">$newElement </span><span class="keyword">= </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">ownerDocument</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="default">$newName</span><span class="keyword">);<br />  </span><span class="default">$parentElement </span><span class="keyword">= </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">;<br />  </span><span class="default">$parentElement</span><span class="keyword">-&gt;</span><span class="default">insertBefore</span><span class="keyword">(</span><span class="default">$newElement</span><span class="keyword">, </span><span class="default">$element</span><span class="keyword">);<br /><br />  </span><span class="default">$childNodes </span><span class="keyword">= </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">;<br />  while (</span><span class="default">$childNodes</span><span class="keyword">-&gt;</span><span class="default">length </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="default">$newElement</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$childNodes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">));<br />  }<br /><br />  </span><span class="default">$attributes </span><span class="keyword">= </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">;<br />  while (</span><span class="default">$attributes</span><span class="keyword">-&gt;</span><span class="default">length </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="default">$attribute </span><span class="keyword">= </span><span class="default">$attributes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br />    if (!</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$attribute</span><span class="keyword">-&gt;</span><span class="default">namespaceURI</span><span class="keyword">)) {<br />      </span><span class="default">$newElement</span><span class="keyword">-&gt;</span><span class="default">setAttributeNS</span><span class="keyword">(</span><span class="string">'<a href="http://www.w3.org/2000/xmlns/" rel="nofollow" target="_blank">http://www.w3.org/2000/xmlns/</a>'</span><span class="keyword">,<br />                                  </span><span class="string">'xmlns:'</span><span class="keyword">.</span><span class="default">$attribute</span><span class="keyword">-&gt;</span><span class="default">prefix</span><span class="keyword">,<br />                                  </span><span class="default">$attribute</span><span class="keyword">-&gt;</span><span class="default">namespaceURI</span><span class="keyword">);<br />    }<br />    </span><span class="default">$newElement</span><span class="keyword">-&gt;</span><span class="default">setAttributeNode</span><span class="keyword">(</span><span class="default">$attribute</span><span class="keyword">);<br />  }<br /><br />  </span><span class="default">$parentElement</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">);<br />}<br /> <br />function </span><span class="default">prettyPrint</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">) {<br />  </span><span class="default">$d</span><span class="keyword">-&gt;</span><span class="default">formatOutput </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />  echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">.</span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">()).</span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$d </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">( </span><span class="string">'1.0' </span><span class="keyword">);<br /></span><span class="default">$d</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="string">'&lt;?xml version="1.0"?&gt;<br />&lt;library&gt;<br />  &lt;data a:foo="1" x="bar" xmlns:a="<a href="http://example.com/a" rel="nofollow" target="_blank">http://example.com/a</a>"&gt;<br />    &lt;invite&gt;<br />      &lt;username&gt;jmansa&lt;/username&gt;<br />      &lt;userid&gt;1&lt;/userid&gt;<br />    &lt;/invite&gt;<br />    &lt;update&gt;1&lt;/update&gt;<br />  &lt;/data&gt;<br />&lt;/library&gt;'</span><span class="keyword">);<br /><br /></span><span class="default">$xpath </span><span class="keyword">= new </span><span class="default">DOMXPath</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">);<br /></span><span class="default">$elements </span><span class="keyword">= </span><span class="default">$xpath</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">'/library/data'</span><span class="keyword">);<br />if (</span><span class="default">$elements</span><span class="keyword">-&gt;</span><span class="default">length </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) {<br />  </span><span class="default">$element </span><span class="keyword">= </span><span class="default">$elements</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br />  </span><span class="default">renameElement</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">, </span><span class="string">'invites'</span><span class="keyword">);<br />}<br /><br /></span><span class="default">prettyPrint</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86803">  <div class="votes">
    <div id="Vu86803">
    <a href="/manual/vote-note.php?id=86803&amp;page=class.domelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86803">
    <a href="/manual/vote-note.php?id=86803&amp;page=class.domelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86803" title="62% like this...">
    4
    </div>
  </div>
  <a href="#86803" class="name">
  <strong class="user"><em>patrick smith</em></strong></a><a class="genanchor" href="#86803"> &para;</a><div class="date" title="2008-11-04 08:14"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86803">
<div class="phpcode"><code><span class="html">Although it may be preferable to use the dom to manipulate elements, sometimes it's useful to actually get the innerHTML from a document element (e.g. to load into a client-side editor).
<br />
<br />To get the innerHTML of a specific element ($elem_id) in a specific html file ($filepath):
<br />
<br /><span class="default">&lt;?php
<br />$innerHTML </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br /></span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();
<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadHTMLFile</span><span class="keyword">(</span><span class="default">$filepath</span><span class="keyword">);    
<br /></span><span class="default">$elem </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementById</span><span class="keyword">(</span><span class="default">$elem_id</span><span class="keyword">);
<br />
<br /></span><span class="comment">// loop through all childNodes, getting html        
<br /></span><span class="default">$children </span><span class="keyword">= </span><span class="default">$elem</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">;
<br />foreach (</span><span class="default">$children </span><span class="keyword">as </span><span class="default">$child</span><span class="keyword">) {
<br />    </span><span class="default">$tmp_doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();
<br />    </span><span class="default">$tmp_doc</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$tmp_doc</span><span class="keyword">-&gt;</span><span class="default">importNode</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">));        
<br />    </span><span class="default">$innerHTML </span><span class="keyword">.= </span><span class="default">$tmp_doc</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">();
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84561">  <div class="votes">
    <div id="Vu84561">
    <a href="/manual/vote-note.php?id=84561&amp;page=class.domelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84561">
    <a href="/manual/vote-note.php?id=84561&amp;page=class.domelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84561" title="61% like this...">
    3
    </div>
  </div>
  <a href="#84561" class="name">
  <strong class="user"><em>ae.fxx</em></strong></a><a class="genanchor" href="#84561"> &para;</a><div class="date" title="2008-07-18 01:49"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84561">
<div class="phpcode"><code><span class="html">Hi there.<br /><br />Remember to append a DOMNode (or any of its descendants) to a DOMDocument __BEFORE__ you try to append a child to it.<br /><br />I don't know why it has to be this way but it can't be done without it.<br /><br />bye</span></code></div>
  </div>
 </div>
  <div class="note" id="114520">  <div class="votes">
    <div id="Vu114520">
    <a href="/manual/vote-note.php?id=114520&amp;page=class.domelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114520">
    <a href="/manual/vote-note.php?id=114520&amp;page=class.domelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114520" title="56% like this...">
    2
    </div>
  </div>
  <a href="#114520" class="name">
  <strong class="user"><em>johnny</em></strong></a><a class="genanchor" href="#114520"> &para;</a><div class="date" title="2014-03-03 03:48"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114520">
<div class="phpcode"><code><span class="html">Get html of a node<br /> $html .= $dom-&gt;saveHTML($node);</span></code></div>
  </div>
 </div>
  <div class="note" id="101560">  <div class="votes">
    <div id="Vu101560">
    <a href="/manual/vote-note.php?id=101560&amp;page=class.domelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101560">
    <a href="/manual/vote-note.php?id=101560&amp;page=class.domelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101560" title="54% like this...">
    1
    </div>
  </div>
  <a href="#101560" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#101560"> &para;</a><div class="date" title="2010-12-24 08:22"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101560">
<div class="phpcode"><code><span class="html">you can use DOMNode::nodeValue<br />DOMElement inherits this public property.<br /><br />$elem-&gt;nodeValue</span></code></div>
  </div>
 </div>
  <div class="note" id="103608">  <div class="votes">
    <div id="Vu103608">
    <a href="/manual/vote-note.php?id=103608&amp;page=class.domelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103608">
    <a href="/manual/vote-note.php?id=103608&amp;page=class.domelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103608" title="53% like this...">
    1
    </div>
  </div>
  <a href="#103608" class="name">
  <strong class="user"><em>loopduplicate at burningtoken dot com</em></strong></a><a class="genanchor" href="#103608"> &para;</a><div class="date" title="2011-04-22 02:34"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103608">
<div class="phpcode"><code><span class="html">This works perfect for me as well:
<br />
<br /><span class="default">&lt;?php $xml </span><span class="keyword">= </span><span class="default">$domElement</span><span class="keyword">-&gt;</span><span class="default">ownerDocument</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">$domElement</span><span class="keyword">); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93340">  <div class="votes">
    <div id="Vu93340">
    <a href="/manual/vote-note.php?id=93340&amp;page=class.domelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93340">
    <a href="/manual/vote-note.php?id=93340&amp;page=class.domelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93340" title="53% like this...">
    1
    </div>
  </div>
  <a href="#93340" class="name">
  <strong class="user"><em>nawaman at gmail dot com</em></strong></a><a class="genanchor" href="#93340"> &para;</a><div class="date" title="2009-09-03 08:08"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93340">
<div class="phpcode"><code><span class="html">The following code shows can text-only content be extracted from a document.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">getTextFromNode</span><span class="keyword">(</span><span class="default">$Node</span><span class="keyword">, </span><span class="default">$Text </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">) {
<br />    if (</span><span class="default">$Node</span><span class="keyword">-&gt;</span><span class="default">tagName </span><span class="keyword">== </span><span class="default">null</span><span class="keyword">)
<br />        return </span><span class="default">$Text</span><span class="keyword">.</span><span class="default">$Node</span><span class="keyword">-&gt;</span><span class="default">textContent</span><span class="keyword">;
<br />
<br />    </span><span class="default">$Node </span><span class="keyword">= </span><span class="default">$Node</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">;
<br />    if (</span><span class="default">$Node </span><span class="keyword">!= </span><span class="default">null</span><span class="keyword">)
<br />        </span><span class="default">$Text </span><span class="keyword">= </span><span class="default">getTextFromNode</span><span class="keyword">(</span><span class="default">$Node</span><span class="keyword">, </span><span class="default">$Text</span><span class="keyword">);
<br />
<br />    while(</span><span class="default">$Node</span><span class="keyword">-&gt;</span><span class="default">nextSibling </span><span class="keyword">!= </span><span class="default">null</span><span class="keyword">) {
<br />        </span><span class="default">$Text </span><span class="keyword">= </span><span class="default">getTextFromNode</span><span class="keyword">(</span><span class="default">$Node</span><span class="keyword">-&gt;</span><span class="default">nextSibling</span><span class="keyword">, </span><span class="default">$Text</span><span class="keyword">);
<br />        </span><span class="default">$Node </span><span class="keyword">= </span><span class="default">$Node</span><span class="keyword">-&gt;</span><span class="default">nextSibling</span><span class="keyword">;
<br />    }
<br />    return </span><span class="default">$Text</span><span class="keyword">;
<br />}
<br />
<br />function </span><span class="default">getTextFromDocument</span><span class="keyword">(</span><span class="default">$DOMDoc</span><span class="keyword">) {
<br />    return </span><span class="default">getTextFromNode</span><span class="keyword">(</span><span class="default">$DOMDoc</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">$Doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();
<br /></span><span class="default">$Doc</span><span class="keyword">-&gt;</span><span class="default">loadHTMLFile</span><span class="keyword">(</span><span class="string">"Test.html"</span><span class="keyword">);
<br />echo </span><span class="default">getTextFromDocument</span><span class="keyword">(</span><span class="default">$Doc</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85724">  <div class="votes">
    <div id="Vu85724">
    <a href="/manual/vote-note.php?id=85724&amp;page=class.domelement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85724">
    <a href="/manual/vote-note.php?id=85724&amp;page=class.domelement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85724" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#85724" class="name">
  <strong class="user"><em>Severin</em></strong></a><a class="genanchor" href="#85724"> &para;</a><div class="date" title="2008-09-14 06:18"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85724">
<div class="phpcode"><code><span class="html">I wanted to find similar Elements - thats why I built an Xpath-String like this - maybe somebody needs it... its not very pretty - but neither is domdocument :)
<br />
<br /><span class="default">&lt;?php
<br />
<br />$dom</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="default">$xmlFile</span><span class="keyword">))
<br />
<br /></span><span class="default">$xpathQuery </span><span class="keyword">= </span><span class="string">'//*'</span><span class="keyword">;
<br /></span><span class="default">$xmlNodes </span><span class="keyword">= </span><span class="default">$xpath</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$xpathQuery</span><span class="keyword">);
<br />        
<br /></span><span class="default">$pathlist </span><span class="keyword">= array();
<br /></span><span class="default">$attrlist </span><span class="keyword">= array();
<br />foreach (</span><span class="default">$xmlNodes </span><span class="keyword">as </span><span class="default">$node</span><span class="keyword">) {
<br />
<br />  </span><span class="default">$depth </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_getDomDepth</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">);   </span><span class="comment">//get Path-Depth (for array key)
<br />  </span><span class="default">$pathlist</span><span class="keyword">[</span><span class="default">$depth</span><span class="keyword">] = </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">tagName</span><span class="keyword">;     </span><span class="comment">// tagname
<br />          
<br />  </span><span class="default">$attrs </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">;
<br />  </span><span class="default">$attr</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;
<br />  </span><span class="default">$a</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />  foreach (</span><span class="default">$attrs </span><span class="keyword">as </span><span class="default">$attrName </span><span class="keyword">=&gt; </span><span class="default">$attrNode</span><span class="keyword">)  </span><span class="comment">// attributes
<br />            </span><span class="keyword">{
<br />              if (</span><span class="default">$attrName </span><span class="keyword">!=</span><span class="string">'reg'</span><span class="keyword">)
<br />              {
<br />                if (</span><span class="default">$a</span><span class="keyword">++!=</span><span class="default">0</span><span class="keyword">) </span><span class="default">$attr </span><span class="keyword">.= </span><span class="string">' and '</span><span class="keyword">;
<br />                </span><span class="default">$attr </span><span class="keyword">.= </span><span class="string">'@'</span><span class="keyword">.</span><span class="default">$attrName</span><span class="keyword">.</span><span class="string">'='</span><span class="keyword">.</span><span class="string">"'"</span><span class="keyword">.</span><span class="default">$attrNode</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">.</span><span class="string">"'"</span><span class="keyword">;
<br />              }
<br />            }
<br />          
<br />          </span><span class="default">$attrlist</span><span class="keyword">[</span><span class="default">$depth</span><span class="keyword">] = </span><span class="default">$attr</span><span class="keyword">?</span><span class="string">'['</span><span class="keyword">.</span><span class="default">$attr</span><span class="keyword">.</span><span class="string">']'</span><span class="keyword">:</span><span class="string">''</span><span class="keyword">;
<br />          
<br />          </span><span class="default">$path </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">; for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">$depth</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) </span><span class="default">$path </span><span class="keyword">.= </span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$pathlist</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">].</span><span class="default">$attrlist</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];  </span><span class="comment">// the xpath of the actual Element
<br />
<br />    // ... now you can go on and user $path to find similar elements
<br />    </span><span class="keyword">}
<br />  }
<br />}
<br />
<br /> private function </span><span class="default">_getDomDepth</span><span class="keyword">(</span><span class="default">DomNode $node</span><span class="keyword">)
<br />   {
<br />     </span><span class="default">$r </span><span class="keyword">= -</span><span class="default">2</span><span class="keyword">;
<br />     while (</span><span class="default">$node</span><span class="keyword">) {
<br />       </span><span class="default">$r</span><span class="keyword">++;  
<br />       </span><span class="default">$node </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">;
<br />     } 
<br />     return  </span><span class="default">$r</span><span class="keyword">;
<br />   }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.domelement&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.domelement.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="class.domdocument.php" title="DOMDocument">DOMDocument</a>
                        </li>
                                                <li class="">
                            <a href="class.domdocumentfragment.php" title="DOMDocumentFragment">DOMDocumentFragment</a>
                        </li>
                                                <li class="">
                            <a href="class.domdocumenttype.php" title="DOMDocumentType">DOMDocumentType</a>
                        </li>
                                                <li class="current">
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
