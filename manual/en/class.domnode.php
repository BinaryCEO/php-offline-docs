<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMNode - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.domnode.php">
 <link rel="shorturl" href="https://www.php.net/domnode">
 <link rel="alternate" href="https://www.php.net/domnode" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.dom.php">
 <link rel="prev" href="https://www.php.net/manual/en/domnamespacenode.wakeup.php">
 <link rel="next" href="https://www.php.net/manual/en/domnode.appendchild.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.domnode.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.domnode.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.domnode.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.domnode.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.domnode.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.domnode.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.domnode.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.domnode.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.domnode.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.domnode.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.domnode.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The DOMNode class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMNode - Manual" />
<meta name="twitter:description" content="The DOMNode class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMNode - Manual" />
<meta itemprop="description" content="The DOMNode class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The DOMNode class" />

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
        <a href="domnode.appendchild.php">
          DOMNode::appendChild &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domnamespacenode.wakeup.php">
          &laquo; DOMNameSpaceNode::__wakeup        </a>
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
            <option value='en/class.domnode.php' selected="selected">English</option>
            <option value='de/class.domnode.php'>German</option>
            <option value='es/class.domnode.php'>Spanish</option>
            <option value='fr/class.domnode.php'>French</option>
            <option value='it/class.domnode.php'>Italian</option>
            <option value='ja/class.domnode.php'>Japanese</option>
            <option value='pt_BR/class.domnode.php'>Brazilian Portuguese</option>
            <option value='ru/class.domnode.php'>Russian</option>
            <option value='tr/class.domnode.php'>Turkish</option>
            <option value='uk/class.domnode.php'>Ukrainian</option>
            <option value='zh/class.domnode.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.domnode" class="reference">
 <h1 class="title">The DOMNode class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>
 

 
  <div class="section" id="domnode.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">DOMNode</strong></strong>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.domnode.php#domnode.constants.document-position-disconnected"><var class="varname">DOCUMENT_POSITION_DISCONNECTED</var></a></var><span class="initializer"> = 0x1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.domnode.php#domnode.constants.document-position-preceding"><var class="varname">DOCUMENT_POSITION_PRECEDING</var></a></var><span class="initializer"> = 0x2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.domnode.php#domnode.constants.document-position-following"><var class="varname">DOCUMENT_POSITION_FOLLOWING</var></a></var><span class="initializer"> = 0x4</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.domnode.php#domnode.constants.document-position-contains"><var class="varname">DOCUMENT_POSITION_CONTAINS</var></a></var><span class="initializer"> = 0x8</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.domnode.php#domnode.constants.document-position-contained-by"><var class="varname">DOCUMENT_POSITION_CONTAINED_BY</var></a></var><span class="initializer"> = 0x10</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.domnode.php#domnode.constants.document-position-implementation-specific"><var class="varname">DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC</var></a></var><span class="initializer"> = 0x20</span>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
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
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="domnode.appendchild.php" class="methodname">appendChild</a></span>(<span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$node</code></span>): <span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.c14n.php" class="methodname">C14N</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$exclusive</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$withComments</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$xpath</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$nsPrefixes</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.c14nfile.php" class="methodname">C14NFile</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$uri</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$exclusive</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$withComments</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$xpath</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$nsPrefixes</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.clonenode.php" class="methodname">cloneNode</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$deep</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.comparedocumentposition.php" class="methodname">compareDocumentPosition</a></span>(<span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$other</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.contains.php" class="methodname">contains</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="class.domnamespacenode.php" class="type DOMNameSpaceNode">DOMNameSpaceNode</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$other</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.getlineno.php" class="methodname">getLineNo</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.getnodepath.php" class="methodname">getNodePath</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.getrootnode.php" class="methodname">getRootNode</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.hasattributes.php" class="methodname">hasAttributes</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.haschildnodes.php" class="methodname">hasChildNodes</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.insertbefore.php" class="methodname">insertBefore</a></span>(<span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$node</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span></span> <code class="parameter">$child</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.isdefaultnamespace.php" class="methodname">isDefaultNamespace</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.isequalnode.php" class="methodname">isEqualNode</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span></span> <code class="parameter">$otherNode</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.issamenode.php" class="methodname">isSameNode</a></span>(<span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$otherNode</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.issupported.php" class="methodname">isSupported</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$feature</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$version</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.lookupnamespaceuri.php" class="methodname">lookupNamespaceURI</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$prefix</code></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.lookupprefix.php" class="methodname">lookupPrefix</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace</code></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.normalize.php" class="methodname">normalize</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.removechild.php" class="methodname">removeChild</a></span>(<span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$child</code></span>): <span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.replacechild.php" class="methodname">replaceChild</a></span>(<span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$node</code></span>, <span class="methodparam"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span> <code class="parameter">$child</code></span>): <span class="type"><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.sleep.php" class="methodname">__sleep</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnode.wakeup.php" class="methodname">__wakeup</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   }</div>

 
  </div>

  <div class="section" id="domnode.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>
    
     <dt id="domnode.constants.document-position-disconnected">
      <strong><code><a href="class.domnode.php#domnode.constants.document-position-disconnected">DOMNode::DOCUMENT_POSITION_DISCONNECTED</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
       Set when the other node and reference node are not in the same tree.
      </span>
     </dd>
    
    
     <dt id="domnode.constants.document-position-preceding">
      <strong><code><a href="class.domnode.php#domnode.constants.document-position-preceding">DOMNode::DOCUMENT_POSITION_PRECEDING</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
       Set when the other node precedes the reference node.
      </span>
     </dd>
    
    
     <dt id="domnode.constants.document-position-following">
      <strong><code><a href="class.domnode.php#domnode.constants.document-position-following">DOMNode::DOCUMENT_POSITION_FOLLOWING</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
       Set when the other node follows the reference node.
      </span>
     </dd>
    
    
     <dt id="domnode.constants.document-position-contains">
      <strong><code><a href="class.domnode.php#domnode.constants.document-position-contains">DOMNode::DOCUMENT_POSITION_CONTAINS</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
       Set when the other node is an ancestor of the reference node.
      </span>
     </dd>
    
    
     <dt id="domnode.constants.document-position-contained-by">
      <strong><code><a href="class.domnode.php#domnode.constants.document-position-contained-by">DOMNode::DOCUMENT_POSITION_CONTAINED_BY</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
       Set when the other node is a descendant of the reference node.
      </span>
     </dd>
    
    
     <dt id="domnode.constants.document-position-implementation-specific">
      <strong><code><a href="class.domnode.php#domnode.constants.document-position-implementation-specific">DOMNode::DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC</a></code></strong>
     </dt>
     <dd>
      <span class="simpara">
       Set when the result depends on implementation-specific behaviour and
       may not be portable.
       This may happen with disconnected nodes or with attribute nodes.
      </span>
     </dd>
    
   </dl>
  </div>


  <div class="section" id="domnode.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="domnode.props.nodename"><var class="varname">nodeName</var></dt>
     <dd>
      <p class="para">Returns the most accurate name for the current node type</p>
     </dd>
    
    
     <dt id="domnode.props.nodevalue"><var class="varname">nodeValue</var></dt>
     <dd>
      <p class="para">
       The value of this node, depending on its type.
       Contrary to the W3C specification, the node value of
       <span class="classname"><a href="class.domelement.php" class="classname">DOMElement</a></span> nodes is equal to <a href="class.domnode.php#domnode.props.textcontent" class="link">DOMNode::textContent</a> instead
       of <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
      </p>
     </dd>
    
    
     <dt id="domnode.props.nodetype"><var class="varname">nodeType</var></dt>
     <dd>
      <p class="para">Gets the type of the node. One of the predefined <strong><code><a href="dom.constants.php#constant.xml-element-node">XML_<span class="replaceable">*</span>_NODE</a></code></strong> constants</p>
     </dd>
    
    
     <dt id="domnode.props.parentnode"><var class="varname">parentNode</var></dt>
     <dd>
      <p class="para">The parent of this node. If there is no such node, this returns <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.</p>
     </dd>
    
    
     <dt id="domnode.props.parentelement"><var class="varname">parentElement</var></dt>
     <dd>
      <p class="para">The parent element of this element. If there is no such element, this returns <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.</p>
     </dd>
    
    
     <dt id="domnode.props.childnodes"><var class="varname">childNodes</var></dt>
     <dd>
      <p class="para">
       A <span class="classname"><a href="class.domnodelist.php" class="classname">DOMNodeList</a></span> that contains all
       children of this node. If there are no children, this is an empty
       <span class="classname"><a href="class.domnodelist.php" class="classname">DOMNodeList</a></span>.
      </p>
     </dd>
    
    
     <dt id="domnode.props.firstchild"><var class="varname">firstChild</var></dt>
     <dd>
      <p class="para">
       The first child of this node. If there is no such node, this
       returns <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
      </p>
     </dd>
    
    
     <dt id="domnode.props.lastchild"><var class="varname">lastChild</var></dt>
     <dd>
      <p class="para">The last child of this node. If there is no such node, this returns <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.</p>
     </dd>
    
    
     <dt id="domnode.props.previoussibling"><var class="varname">previousSibling</var></dt>
     <dd>
      <p class="para">
       The node immediately preceding this node. If there is no such
       node, this returns <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
      </p>
     </dd>
    
    
     <dt id="domnode.props.nextsibling"><var class="varname">nextSibling</var></dt>
     <dd>
      <p class="para">
       The node immediately following this node. If there is no such
       node, this returns <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
      </p>
     </dd>
    
    
     <dt id="domnode.props.attributes"><var class="varname">attributes</var></dt>
     <dd>
      <p class="para">
       A <span class="classname"><a href="class.domnamednodemap.php" class="classname">DOMNamedNodeMap</a></span> containing the
       attributes of this node (if it is a <span class="classname"><a href="class.domelement.php" class="classname">DOMElement</a></span>)
       or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> otherwise.
      </p>
     </dd>
    
    
     <dt id="domnode.props.isconnected"><var class="varname">isConnected</var></dt>
     <dd>
      <p class="para">Whether the node is connected to a document</p>
     </dd>
    
    
     <dt id="domnode.props.ownerdocument"><var class="varname">ownerDocument</var></dt>
     <dd>
      <p class="para">The <span class="classname"><a href="class.domdocument.php" class="classname">DOMDocument</a></span> object associated with this node, or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> if this node does not have an associated document (e.g. if it is detached, or if it is a <span class="classname"><a href="class.domdocument.php" class="classname">DOMDocument</a></span>).</p>
     </dd>
    
    
     <dt id="domnode.props.namespaceuri"><var class="varname">namespaceURI</var></dt>
     <dd>
      <p class="para">The namespace URI of this node, or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> if it is unspecified.</p>
     </dd>
    
    
     <dt id="domnode.props.prefix"><var class="varname">prefix</var></dt>
     <dd>
      <p class="para">The namespace prefix of this node.</p>
     </dd>
    
    
     <dt id="domnode.props.localname"><var class="varname">localName</var></dt>
     <dd>
      <p class="para">Returns the local part of the qualified name of this node.</p>
     </dd>
    
    
     <dt id="domnode.props.baseuri"><var class="varname">baseURI</var></dt>
     <dd>
      <p class="para">
       The absolute base URI of this node or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> if the implementation
       wasn&#039;t able to obtain an absolute URI.
      </p>
     </dd>
    
    
     <dt id="domnode.props.textcontent"><var class="varname">textContent</var></dt>
     <dd>
      <p class="para">The text content of this node and its descendants.</p>
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
        Method <span class="methodname"><a href="domnode.comparedocumentposition.php" class="methodname">DOMNode::compareDocumentPosition()</a></span> has
        been added.
       </td>
      </tr>

      <tr>
       <td>8.4.0</td>
       <td>
        Constants <strong><code><a href="class.domnode.php#domnode.constants.document-position-disconnected">DOMNode::DOCUMENT_POSITION_DISCONNECTED</a></code></strong>,
        <strong><code><a href="class.domnode.php#domnode.constants.document-position-preceding">DOMNode::DOCUMENT_POSITION_PRECEDING</a></code></strong>,
        <strong><code><a href="class.domnode.php#domnode.constants.document-position-following">DOMNode::DOCUMENT_POSITION_FOLLOWING</a></code></strong>,
        <strong><code><a href="class.domnode.php#domnode.constants.document-position-contains">DOMNode::DOCUMENT_POSITION_CONTAINS</a></code></strong>,
        <strong><code><a href="class.domnode.php#domnode.constants.document-position-contained-by">DOMNode::DOCUMENT_POSITION_CONTAINED_BY</a></code></strong>,
         and
        <strong><code><a href="class.domnode.php#domnode.constants.document-position-implementation-specific">DOMNode::DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC</a></code></strong>
        have been added.
       </td>
      </tr>

      <tr>
       <td>8.3.0</td>
       <td>
        Methods <span class="methodname"><a href="domnode.contains.php" class="methodname">DOMNode::contains()</a></span>, and
        <span class="methodname"><a href="domnode.isequalnode.php" class="methodname">DOMNode::isEqualNode()</a></span> have been added.
       </td>
      </tr>

      <tr>
       <td>8.3.0</td>
       <td>
        Properties <span class="property"><a href="class.domnode.php#domnode.props.parentelement">DOMNode::$parentElement</a></span>, and
        <span class="property"><a href="class.domnode.php#domnode.props.isconnected">DOMNode::$isConnected</a></span> have been added.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        The unimplemented methods <span class="methodname"><a href="domnode.comparedocumentposition.php" class="methodname">DOMNode::compareDocumentPosition()</a></span>,
        <span class="methodname"><a href="domnode.isequalnode.php" class="methodname">DOMNode::isEqualNode()</a></span>,
        <span class="methodname"><strong>DOMNode::getFeature()</strong></span>,
        <span class="methodname"><strong>DOMNode::setUserData()</strong></span> and
        <span class="methodname"><strong>DOMNode::getUserData()</strong></span> have been removed.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>


  <div class="section">
   <h2 class="title">Notes</h2>
   <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">The DOM extension uses UTF-8 encoding. Use <span class="function"><a href="function.mb-convert-encoding.php" class="function">mb_convert_encoding()</a></span>, <span class="methodname"><a href="uconverter.transcode.php" class="methodname">UConverter::transcode()</a></span>, or <span class="function"><a href="function.iconv.php" class="function">iconv()</a></span> to handle other encodings.</p></p></blockquote>
  </div>



  <div class="section">
   <h2 class="title">See Also</h2>
   <p class="para">
    <ul class="simplelist">
     <li><a href="http://www.w3.org/TR/2003/WD-DOM-Level-3-Core-20030226/DOM3-Core.html#core-ID-1950641247" class="link external">&raquo;&nbsp;W3C specification of Node</a></li>
    </ul>
   </p>
  </div>

 
 </div>
 
 













































































































 
<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="domnode.appendchild.php">DOMNode::appendChild</a> — Adds new child at the end of the children</li><li><a href="domnode.c14n.php">DOMNode::C14N</a> — Canonicalize nodes to a string</li><li><a href="domnode.c14nfile.php">DOMNode::C14NFile</a> — Canonicalize nodes to a file</li><li><a href="domnode.clonenode.php">DOMNode::cloneNode</a> — Clones a node</li><li><a href="domnode.comparedocumentposition.php">DOMNode::compareDocumentPosition</a> — Compares the position of two nodes</li><li><a href="domnode.contains.php">DOMNode::contains</a> — Checks if node contains other node</li><li><a href="domnode.getlineno.php">DOMNode::getLineNo</a> — Get line number for a node</li><li><a href="domnode.getnodepath.php">DOMNode::getNodePath</a> — Get an XPath for a node</li><li><a href="domnode.getrootnode.php">DOMNode::getRootNode</a> — Get root node</li><li><a href="domnode.hasattributes.php">DOMNode::hasAttributes</a> — Checks if node has attributes</li><li><a href="domnode.haschildnodes.php">DOMNode::hasChildNodes</a> — Checks if node has children</li><li><a href="domnode.insertbefore.php">DOMNode::insertBefore</a> — Adds a new child before a reference node</li><li><a href="domnode.isdefaultnamespace.php">DOMNode::isDefaultNamespace</a> — Checks if the specified namespaceURI is the default namespace or not</li><li><a href="domnode.isequalnode.php">DOMNode::isEqualNode</a> — Checks that both nodes are equal</li><li><a href="domnode.issamenode.php">DOMNode::isSameNode</a> — Indicates if two nodes are the same node</li><li><a href="domnode.issupported.php">DOMNode::isSupported</a> — Checks if feature is supported for specified version</li><li><a href="domnode.lookupnamespaceuri.php">DOMNode::lookupNamespaceURI</a> — Gets the namespace URI of the node based on the prefix</li><li><a href="domnode.lookupprefix.php">DOMNode::lookupPrefix</a> — Gets the namespace prefix of the node based on the namespace URI</li><li><a href="domnode.normalize.php">DOMNode::normalize</a> — Normalizes the node</li><li><a href="domnode.removechild.php">DOMNode::removeChild</a> — Removes child from list of children</li><li><a href="domnode.replacechild.php">DOMNode::replaceChild</a> — Replaces a child</li><li><a href="domnode.sleep.php">DOMNode::__sleep</a> — Forbids serialization unless serialization methods are implemented in a subclass</li><li><a href="domnode.wakeup.php">DOMNode::__wakeup</a> — Forbids unserialization unless unserialization methods are implemented in a subclass</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domnode.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.domnode%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.domnode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.domnode.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="90705">  <div class="votes">
    <div id="Vu90705">
    <a href="/manual/vote-note.php?id=90705&amp;page=class.domnode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90705">
    <a href="/manual/vote-note.php?id=90705&amp;page=class.domnode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90705" title="86% like this...">
    43
    </div>
  </div>
  <a href="#90705" class="name">
  <strong class="user"><em>marc at ermshaus dot org</em></strong></a><a class="genanchor" href="#90705"> &para;</a><div class="date" title="2009-05-05 08:36"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90705">
<div class="phpcode"><code><span class="html">It took me forever to find a mapping for the XML_*_NODE constants. So I thought, it'd be handy to paste it here:<br /><br /> 1 XML_ELEMENT_NODE<br /> 2 XML_ATTRIBUTE_NODE<br /> 3 XML_TEXT_NODE<br /> 4 XML_CDATA_SECTION_NODE<br /> 5 XML_ENTITY_REFERENCE_NODE<br /> 6 XML_ENTITY_NODE<br /> 7 XML_PROCESSING_INSTRUCTION_NODE<br /> 8 XML_COMMENT_NODE<br /> 9 XML_DOCUMENT_NODE<br />10 XML_DOCUMENT_TYPE_NODE<br />11 XML_DOCUMENT_FRAGMENT_NODE<br />12 XML_NOTATION_NODE</span></code></div>
  </div>
 </div>
  <div class="note" id="95545">  <div class="votes">
    <div id="Vu95545">
    <a href="/manual/vote-note.php?id=95545&amp;page=class.domnode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95545">
    <a href="/manual/vote-note.php?id=95545&amp;page=class.domnode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95545" title="78% like this...">
    23
    </div>
  </div>
  <a href="#95545" class="name">
  <strong class="user"><em>David Rekowski</em></strong></a><a class="genanchor" href="#95545"> &para;</a><div class="date" title="2010-01-08 01:54"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95545">
<div class="phpcode"><code><span class="html">You cannot simply overwrite $textContent, to replace the text content of a DOMNode, as the missing readonly flag suggests. Instead you have to do something like this:<br /><br /><span class="default">&lt;?php<br /><br />$node</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">);<br /></span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(new </span><span class="default">DOMText</span><span class="keyword">(</span><span class="string">'new text content'</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />This example shows what happens:<br /><br /><span class="default">&lt;?php<br /><br />$doc </span><span class="keyword">= </span><span class="default">DOMDocument</span><span class="keyword">::</span><span class="default">loadXML</span><span class="keyword">(</span><span class="string">'&lt;node&gt;old content&lt;/node&gt;'</span><span class="keyword">);<br /></span><span class="default">$node </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'node'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br />echo </span><span class="string">"Content 1: "</span><span class="keyword">.</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">textContent</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">textContent </span><span class="keyword">= </span><span class="string">'new content'</span><span class="keyword">;<br />echo </span><span class="string">"Content 2: "</span><span class="keyword">.</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">textContent</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">$newText </span><span class="keyword">= new </span><span class="default">DOMText</span><span class="keyword">(</span><span class="string">'new content'</span><span class="keyword">);<br /><br /></span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$newText</span><span class="keyword">);<br />echo </span><span class="string">"Content 3: "</span><span class="keyword">.</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">textContent</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">);<br /></span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$newText</span><span class="keyword">);<br />echo </span><span class="string">"Content 4: "</span><span class="keyword">.</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">textContent</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />The output is:<br /><br />Content 1: old content // starting content<br />Content 2: old content // trying to replace overwriting $node-&gt;textContent<br />Content 3: old contentnew content // simply appending the new text node<br />Content 4: new content // removing firstchild before appending the new text node<br /><br />If you want to have a CDATA section, use this:<br /><br /><span class="default">&lt;?php<br />$doc </span><span class="keyword">= </span><span class="default">DOMDocument</span><span class="keyword">::</span><span class="default">loadXML</span><span class="keyword">(</span><span class="string">'&lt;node&gt;old content&lt;/node&gt;'</span><span class="keyword">);<br /></span><span class="default">$node </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'node'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">);<br /></span><span class="default">$newText </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createCDATASection</span><span class="keyword">(</span><span class="string">'new cdata content'</span><span class="keyword">);<br /></span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$newText</span><span class="keyword">);<br />echo </span><span class="string">"Content withCDATA: "</span><span class="keyword">.</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95639">  <div class="votes">
    <div id="Vu95639">
    <a href="/manual/vote-note.php?id=95639&amp;page=class.domnode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95639">
    <a href="/manual/vote-note.php?id=95639&amp;page=class.domnode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95639" title="77% like this...">
    20
    </div>
  </div>
  <a href="#95639" class="name">
  <strong class="user"><em>R. Studer</em></strong></a><a class="genanchor" href="#95639"> &para;</a><div class="date" title="2010-01-13 09:03"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95639">
<div class="phpcode"><code><span class="html">For clarification:<br />The assumingly 'discoverd' by previous posters and seemingly undocumented methods (.getElementsByTagName and .getAttribute) on this class (DOMNode) are in fact methods of the class DOMElement, which inherits from DOMNode.<br /><br />See: <a href="http://www.php.net/manual/en/class.domelement.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/class.domelement.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="87507">  <div class="votes">
    <div id="Vu87507">
    <a href="/manual/vote-note.php?id=87507&amp;page=class.domnode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87507">
    <a href="/manual/vote-note.php?id=87507&amp;page=class.domnode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87507" title="69% like this...">
    10
    </div>
  </div>
  <a href="#87507" class="name">
  <strong class="user"><em>brian  wildwoodassociates.info</em></strong></a><a class="genanchor" href="#87507"> &para;</a><div class="date" title="2008-12-07 11:27"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87507">
<div class="phpcode"><code><span class="html">This class has a getAttribute method.<br /><br />Assume that a DOMNode object $ref contained an anchor taken out of a DOMNode List.  Then <br /><br />    $url = $ref-&gt;getAttribute('href'); <br /><br />would isolate the url associated with the href part of the anchor.</span></code></div>
  </div>
 </div>
  <div class="note" id="105917">  <div class="votes">
    <div id="Vu105917">
    <a href="/manual/vote-note.php?id=105917&amp;page=class.domnode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105917">
    <a href="/manual/vote-note.php?id=105917&amp;page=class.domnode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105917" title="71% like this...">
    6
    </div>
  </div>
  <a href="#105917" class="name">
  <strong class="user"><em>alastair dot dallas at gmail dot com</em></strong></a><a class="genanchor" href="#105917"> &para;</a><div class="date" title="2011-09-25 08:44"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105917">
<div class="phpcode"><code><span class="html">The issues around mixed content took me some experimentation to remember, so I thought I'd add this note to save others time.<br /><br />When your markup is something like: &lt;div&gt;&lt;p&gt;First text.&lt;/p&gt;&lt;ul&gt;&lt;li&gt;&lt;p&gt;First bullet&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/div&gt;, you'll get XML_ELEMENT_NODEs that are quite regular. The &lt;div&gt; has children &lt;p&gt; and &lt;ul&gt; and the nodeValue for both &lt;p&gt;s yields the text you expect.<br /><br />But when your markup is more like &lt;p&gt;This is &lt;b&gt;bold&lt;/b&gt; and this is &lt;i&gt;italic&lt;/i&gt;.&lt;/p&gt;, you realize that the nodeValue for XML_ELEMENT_NODEs is not reliable. In this case, you need to look at the &lt;p&gt;'s child nodes. For this example, the &lt;p&gt; has children: #text, &lt;b&gt;, #text, &lt;i&gt;, #text. <br /><br />In this example, the nodeValue of &lt;b&gt; and &lt;i&gt; is the same as their #text children. But you could have markup like: &lt;p&gt;This &lt;b&gt;is bold and &lt;i&gt;bold italic&lt;/i&gt;&lt;/b&gt;, you see?&lt;/p&gt;. In this case, you need to look at the children of &lt;b&gt;, which will be #text, &lt;i&gt;, because the nodeValue of &lt;b&gt; will not be sufficient.<br /><br />XML_TEXT_NODEs have no children and are always named '#text'. Depending on how whitespace is handled, your tree may have "empty" #text nodes as children of &lt;body&gt; and elsewhere.<br /><br />Attributes are nodes, but I had forgotten that they are not in the tree expressed by childNodes. Walking the full tree using childNodes will not visit any attribute nodes.</span></code></div>
  </div>
 </div>
  <div class="note" id="114864">  <div class="votes">
    <div id="Vu114864">
    <a href="/manual/vote-note.php?id=114864&amp;page=class.domnode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114864">
    <a href="/manual/vote-note.php?id=114864&amp;page=class.domnode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114864" title="70% like this...">
    4
    </div>
  </div>
  <a href="#114864" class="name">
  <strong class="user"><em>pizarropablo at gmail dot com</em></strong></a><a class="genanchor" href="#114864"> &para;</a><div class="date" title="2014-04-16 02:36"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114864">
<div class="phpcode"><code><span class="html">In response to: alastair dot dallas at gmail dot com about "#text" nodes.<br />"#text" nodes appear when there are spaces or new lines between end tag and next initial tag.<br /><br />Eg "&lt;data&gt;&lt;age&gt;10&lt;/age&gt;[SPACES]&lt;other&gt;20&lt;/other&gt;[SPACES]&lt;/data&gt;"<br /><br />"data" childNodes has 4 childs:<br />- age = 10<br />- #text = spaces<br />- other = 20<br />- #text =  spaces</span></code></div>
  </div>
 </div>
  <div class="note" id="103012">  <div class="votes">
    <div id="Vu103012">
    <a href="/manual/vote-note.php?id=103012&amp;page=class.domnode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103012">
    <a href="/manual/vote-note.php?id=103012&amp;page=class.domnode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103012" title="65% like this...">
    8
    </div>
  </div>
  <a href="#103012" class="name">
  <strong class="user"><em>imranomar at gmail dot com</em></strong></a><a class="genanchor" href="#103012"> &para;</a><div class="date" title="2011-03-20 06:10"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103012">
<div class="phpcode"><code><span class="html">Just discovered that node-&gt;nodeValue strips out all the tags</span></code></div>
  </div>
 </div>
  <div class="note" id="94418">  <div class="votes">
    <div id="Vu94418">
    <a href="/manual/vote-note.php?id=94418&amp;page=class.domnode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94418">
    <a href="/manual/vote-note.php?id=94418&amp;page=class.domnode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94418" title="66% like this...">
    5
    </div>
  </div>
  <a href="#94418" class="name">
  <strong class="user"><em>Steve K</em></strong></a><a class="genanchor" href="#94418"> &para;</a><div class="date" title="2009-11-03 11:47"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94418">
<div class="phpcode"><code><span class="html">This class apparently also has a getElementsByTagName method.<br /><br />I was able to confirm this by evaluating the output from DOMNodeList-&gt;item() against various tests with the is_a() function.</span></code></div>
  </div>
 </div>
  <div class="note" id="115448">  <div class="votes">
    <div id="Vu115448">
    <a href="/manual/vote-note.php?id=115448&amp;page=class.domnode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115448">
    <a href="/manual/vote-note.php?id=115448&amp;page=class.domnode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115448" title="66% like this...">
    3
    </div>
  </div>
  <a href="#115448" class="name">
  <strong class="user"><em>metanull</em></strong></a><a class="genanchor" href="#115448"> &para;</a><div class="date" title="2014-07-24 03:11"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115448">
<div class="phpcode"><code><span class="html">Yet another DOMNode to php array conversion function. <br />Other ones on this page are generating too "complex" arrays; this one should keep the array as tidy as possible.<br />Note: make sure to set LIBXML_NOBLANKS when calling DOMDocument::load, loadXML or loadHTML<br />See: <a href="http://be2.php.net/manual/en/libxml.constants.php" rel="nofollow" target="_blank">http://be2.php.net/manual/en/libxml.constants.php</a><br />See: <a href="http://be2.php.net/manual/en/domdocument.loadxml.php" rel="nofollow" target="_blank">http://be2.php.net/manual/en/domdocument.loadxml.php</a><br /><br /><span class="default">&lt;?php<br />         </span><span class="comment">/**<br />         * Returns an array representation of a DOMNode<br />         * Note, make sure to use the LIBXML_NOBLANKS flag when loading XML into the DOMDocument<br />         * @param DOMDocument $dom<br />         * @param DOMNode $node<br />         * @return array<br />         */<br />        </span><span class="keyword">function </span><span class="default">nodeToArray</span><span class="keyword">( </span><span class="default">$dom</span><span class="keyword">, </span><span class="default">$node</span><span class="keyword">) {<br />            if(!</span><span class="default">is_a</span><span class="keyword">( </span><span class="default">$dom</span><span class="keyword">, </span><span class="string">'DOMDocument' </span><span class="keyword">) || !</span><span class="default">is_a</span><span class="keyword">( </span><span class="default">$node</span><span class="keyword">, </span><span class="string">'DOMNode' </span><span class="keyword">)) {<br />                return </span><span class="default">false</span><span class="keyword">;<br />            }<br />            </span><span class="default">$array </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">; <br />            if( empty( </span><span class="default">trim</span><span class="keyword">( </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">localName </span><span class="keyword">))) {</span><span class="comment">// Discard empty nodes<br />                </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;<br />            }<br />            if( </span><span class="default">XML_TEXT_NODE </span><span class="keyword">== </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">nodeType </span><span class="keyword">) {<br />                return </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">;<br />            }<br />            foreach (</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">attributes </span><span class="keyword">as </span><span class="default">$attr</span><span class="keyword">) { <br />                </span><span class="default">$array</span><span class="keyword">[</span><span class="string">'@'</span><span class="keyword">.</span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">localName</span><span class="keyword">] = </span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">; <br />            } <br />            foreach (</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$childNode</span><span class="keyword">) { <br />                if ( </span><span class="default">1 </span><span class="keyword">== </span><span class="default">$childNode</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">-&gt;</span><span class="default">length </span><span class="keyword">&amp;&amp; </span><span class="default">XML_TEXT_NODE </span><span class="keyword">== </span><span class="default">$childNode</span><span class="keyword">-&gt;</span><span class="default">firstChild</span><span class="keyword">-&gt;</span><span class="default">nodeType </span><span class="keyword">) { <br />                    </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$childNode</span><span class="keyword">-&gt;</span><span class="default">localName</span><span class="keyword">] = </span><span class="default">$childNode</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">; <br />                }  else {<br />                    if( </span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$a </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">nodeToArray</span><span class="keyword">( </span><span class="default">$dom</span><span class="keyword">, </span><span class="default">$childNode</span><span class="keyword">))) {<br />                        </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$childNode</span><span class="keyword">-&gt;</span><span class="default">localName</span><span class="keyword">] =     </span><span class="default">$a</span><span class="keyword">;<br />                    }<br />                }<br />            }<br />            return </span><span class="default">$array</span><span class="keyword">; <br />        }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113100">  <div class="votes">
    <div id="Vu113100">
    <a href="/manual/vote-note.php?id=113100&amp;page=class.domnode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113100">
    <a href="/manual/vote-note.php?id=113100&amp;page=class.domnode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113100" title="62% like this...">
    2
    </div>
  </div>
  <a href="#113100" class="name">
  <strong class="user"><em>matej dot golian at gmail dot com</em></strong></a><a class="genanchor" href="#113100"> &para;</a><div class="date" title="2013-08-29 01:15"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113100">
<div class="phpcode"><code><span class="html">Here is a little function that truncates a DomNode to a specified number of text characters. I use it to generate HTML excerpts for my blog entries.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">makehtmlexcerpt</span><span class="keyword">(</span><span class="default">DomNode $html</span><span class="keyword">, </span><span class="default">$excerptlength</span><span class="keyword">)<br />{<br /></span><span class="default">$remove </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$htmllength </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">html_entity_decode</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">-&gt;</span><span class="default">textContent</span><span class="keyword">, </span><span class="default">ENT_QUOTES</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">));<br /></span><span class="default">$truncate </span><span class="keyword">= </span><span class="default">$htmllength </span><span class="keyword">- </span><span class="default">$excerptlength</span><span class="keyword">;<br />if(</span><span class="default">$htmllength </span><span class="keyword">&gt; </span><span class="default">$excerptlength</span><span class="keyword">)<br />{<br />if(</span><span class="default">$html</span><span class="keyword">-&gt;</span><span class="default">hasChildNodes</span><span class="keyword">())<br />{<br /></span><span class="default">$children </span><span class="keyword">= </span><span class="default">$html</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">;<br />for(</span><span class="default">$counter </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$counter </span><span class="keyword">&lt; </span><span class="default">$children</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">; </span><span class="default">$counter </span><span class="keyword">++)<br />{<br /></span><span class="default">$child </span><span class="keyword">= </span><span class="default">$children</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$children</span><span class="keyword">-&gt;</span><span class="default">length </span><span class="keyword">- (</span><span class="default">$counter </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">));<br /></span><span class="default">$childlength </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">html_entity_decode</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">textContent</span><span class="keyword">, </span><span class="default">ENT_QUOTES</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">));<br />if(</span><span class="default">$childlength </span><span class="keyword">&lt;= </span><span class="default">$truncate</span><span class="keyword">)<br />{<br /></span><span class="default">$remove </span><span class="keyword">++;<br /></span><span class="default">$truncate </span><span class="keyword">= </span><span class="default">$truncate </span><span class="keyword">- </span><span class="default">$childlength</span><span class="keyword">;<br />}<br />else<br />{<br /></span><span class="default">$child </span><span class="keyword">= </span><span class="default">makehtmlexcerpt</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">, </span><span class="default">$childlength </span><span class="keyword">- </span><span class="default">$truncate</span><span class="keyword">);<br />break;<br />}<br />}<br />if(</span><span class="default">$remove </span><span class="keyword">!= </span><span class="default">0</span><span class="keyword">)<br />{<br />for(</span><span class="default">$counter </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$counter </span><span class="keyword">&lt; </span><span class="default">$remove</span><span class="keyword">; </span><span class="default">$counter </span><span class="keyword">++)<br />{<br /></span><span class="default">$html</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">-&gt;</span><span class="default">lastChild</span><span class="keyword">);<br />}<br />}<br />}<br />else<br />{<br />if(</span><span class="default">$html</span><span class="keyword">-&gt;</span><span class="default">nodeName </span><span class="keyword">== </span><span class="string">'#text'</span><span class="keyword">)<br />{<br /></span><span class="default">$html</span><span class="keyword">-&gt;</span><span class="default">nodeValue </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">html_entity_decode</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">, </span><span class="default">ENT_QUOTES</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">$htmllength </span><span class="keyword">- </span><span class="default">$truncate</span><span class="keyword">);<br />}<br />}<br />}<br />return </span><span class="default">$html</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90100">  <div class="votes">
    <div id="Vu90100">
    <a href="/manual/vote-note.php?id=90100&amp;page=class.domnode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90100">
    <a href="/manual/vote-note.php?id=90100&amp;page=class.domnode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90100" title="59% like this...">
    5
    </div>
  </div>
  <a href="#90100" class="name">
  <strong class="user"><em>matt at lamplightdb dot co dot uk</em></strong></a><a class="genanchor" href="#90100"> &para;</a><div class="date" title="2009-04-06 05:39"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90100">
<div class="phpcode"><code><span class="html">And apparently also a setAttribute method too:<br /><br />$node-&gt;setAttribute( 'attrName' , 'value' );</span></code></div>
  </div>
 </div>
  <div class="note" id="122706">  <div class="votes">
    <div id="Vu122706">
    <a href="/manual/vote-note.php?id=122706&amp;page=class.domnode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122706">
    <a href="/manual/vote-note.php?id=122706&amp;page=class.domnode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122706" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#122706" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#122706"> &para;</a><div class="date" title="2018-05-06 04:12"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122706">
<div class="phpcode"><code><span class="html">It would be helpful if docs for concrete properties mentioned readonly status of some properties:<br />"<br />ownerDocument<br /><br />    The DOMDocument object associated with this node.<br /><br />"</span></code></div>
  </div>
 </div>
  <div class="note" id="118655">  <div class="votes">
    <div id="Vu118655">
    <a href="/manual/vote-note.php?id=118655&amp;page=class.domnode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118655">
    <a href="/manual/vote-note.php?id=118655&amp;page=class.domnode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118655" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#118655" class="name">
  <strong class="user"><em>zlk1214 at gmail dot com</em></strong></a><a class="genanchor" href="#118655"> &para;</a><div class="date" title="2016-01-15 01:07"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118655">
<div class="phpcode"><code><span class="html">A function that can set the inner HTML without encoding error. $html can be broken content such as "&lt;a ID=id20&gt;ssss"<br />function setInnerHTML($node, $html) {<br />    removeChildren($node);<br />    if (empty($html)) {<br />        return;<br />    }<br />   <br />    $doc = $node-&gt;ownerDocument;<br />    $htmlclip = new DOMDocument();<br />    $htmlclip-&gt;loadHTML('&lt;meta http-equiv="Content-Type" content="text/html;charset=utf-8"&gt;&lt;div&gt;' . $html . '&lt;/div&gt;');<br />    $clipNode = $doc-&gt;importNode($htmlclip-&gt;documentElement-&gt;lastChild-&gt;firstChild, true);<br />    while ($item = $clipNode-&gt;firstChild) {<br />        $node-&gt;appendChild($item);<br />    }<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.domnode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.domnode.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
