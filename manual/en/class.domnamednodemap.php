<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMNamedNodeMap - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.domnamednodemap.php">
 <link rel="shorturl" href="https://www.php.net/domnamednodemap">
 <link rel="alternate" href="https://www.php.net/domnamednodemap" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.dom.php">
 <link rel="prev" href="https://www.php.net/manual/en/domimplementation.hasfeature.php">
 <link rel="next" href="https://www.php.net/manual/en/domnamednodemap.count.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.domnamednodemap.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.domnamednodemap.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.domnamednodemap.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.domnamednodemap.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.domnamednodemap.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.domnamednodemap.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.domnamednodemap.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.domnamednodemap.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.domnamednodemap.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.domnamednodemap.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.domnamednodemap.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The DOMNamedNodeMap class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMNamedNodeMap - Manual" />
<meta name="twitter:description" content="The DOMNamedNodeMap class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMNamedNodeMap - Manual" />
<meta itemprop="description" content="The DOMNamedNodeMap class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The DOMNamedNodeMap class" />

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
        <a href="domnamednodemap.count.php">
          DOMNamedNodeMap::count &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domimplementation.hasfeature.php">
          &laquo; DOMImplementation::hasFeature        </a>
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
            <option value='en/class.domnamednodemap.php' selected="selected">English</option>
            <option value='de/class.domnamednodemap.php'>German</option>
            <option value='es/class.domnamednodemap.php'>Spanish</option>
            <option value='fr/class.domnamednodemap.php'>French</option>
            <option value='it/class.domnamednodemap.php'>Italian</option>
            <option value='ja/class.domnamednodemap.php'>Japanese</option>
            <option value='pt_BR/class.domnamednodemap.php'>Brazilian Portuguese</option>
            <option value='ru/class.domnamednodemap.php'>Russian</option>
            <option value='tr/class.domnamednodemap.php'>Turkish</option>
            <option value='uk/class.domnamednodemap.php'>Ukrainian</option>
            <option value='zh/class.domnamednodemap.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.domnamednodemap" class="reference">
 <h1 class="title">The DOMNamedNodeMap class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>
 



 
  <div class="section" id="domnamednodemap.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">DOMNamedNodeMap</strong></strong>
    

    
     <span class="modifier">implements</span>
      <a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a>,

     <a href="class.countable.php" class="interfacename">Countable</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.domnamednodemap.php#domnamednodemap.props.length">$<var class="varname">length</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="domnamednodemap.count.php" class="methodname">count</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnamednodemap.getiterator.php" class="methodname">getIterator</a></span>(): <span class="type"><a href="class.iterator.php" class="type Iterator">Iterator</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnamednodemap.getnameditem.php" class="methodname">getNamedItem</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnamednodemap.getnameditemns.php" class="methodname">getNamedItemNS</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespace</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$localName</code></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="domnamednodemap.item.php" class="methodname">item</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span></span></div>

   }</div>

 
  </div>
 

  <div class="section" id="domnamednodemap.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="domnamednodemap.props.length"><var class="varname">length</var></dt>
     <dd>
      <p class="para">
       The number of nodes in the map. The range of valid child node 
       indices is <code class="literal">0</code> to <code class="literal">length - 1</code> inclusive.
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
       <td>8.0.0</td>
       <td>
        The unimplemented methods <span class="methodname"><strong>DOMNamedNodeMap::setNamedItem()</strong></span>,
        <span class="methodname"><strong>DOMNamedNodeMap::removeNamedItem()</strong></span>,
        <span class="methodname"><strong>DOMNamedNodeMap::setNamedItemNS()</strong></span> and
        <span class="methodname"><strong>DOMNamedNodeMap::removeNamedItem()</strong></span> have been removed.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        <span class="classname"><strong class="classname">DOMNamedNodeMap</strong></span> implements
        <span class="interfacename"><a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a></span> now.
        Previously, <span class="interfacename"><a href="class.traversable.php" class="interfacename">Traversable</a></span> was implemented instead.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>

  <div class="section">
   <h2 class="title">Notes</h2>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
      Nodes in the map can be accessed by array syntax.
    </span>
   </p></blockquote>
  </div>




 
 </div>
 
 























 
<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="domnamednodemap.count.php">DOMNamedNodeMap::count</a> — Get number of nodes in the map</li><li><a href="domnamednodemap.getiterator.php">DOMNamedNodeMap::getIterator</a> — Retrieve an external iterator</li><li><a href="domnamednodemap.getnameditem.php">DOMNamedNodeMap::getNamedItem</a> — Retrieves a node specified by name</li><li><a href="domnamednodemap.getnameditemns.php">DOMNamedNodeMap::getNamedItemNS</a> — Retrieves a node specified by local name and namespace URI</li><li><a href="domnamednodemap.item.php">DOMNamedNodeMap::item</a> — Retrieves a node specified by index</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domnamednodemap.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.domnamednodemap%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.domnamednodemap&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.domnamednodemap.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="94346">  <div class="votes">
    <div id="Vu94346">
    <a href="/manual/vote-note.php?id=94346&amp;page=class.domnamednodemap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94346">
    <a href="/manual/vote-note.php?id=94346&amp;page=class.domnamednodemap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94346" title="76% like this...">
    7
    </div>
  </div>
  <a href="#94346" class="name">
  <strong class="user"><em>kendsnyder at gmail dot com</em></strong></a><a class="genanchor" href="#94346"> &para;</a><div class="date" title="2009-10-29 07:55"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94346">
<div class="phpcode"><code><span class="html">To add to xafford's comment. When iterating a named node map collection using -&gt;item() or using foreach, removing a attribute with DOMNode-&gt;removeAttribute() or DOMNode-&gt;removeAttributeNode() alters the collection as if it were a stack. To illustrate, the code below tries to remove all attributes from each element but only removes the first. One work around is to copy the named node map into an array before removing attributes. Using PHP 5.2.9 on Windows XP.<br /><br /><span class="default">&lt;?php<br />error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br /></span><span class="default">$html  </span><span class="keyword">= </span><span class="string">'&lt;h1 id="h1test" class="h1test"&gt;Heading&lt;/h1&gt;'</span><span class="keyword">;<br /></span><span class="default">$html </span><span class="keyword">.= </span><span class="string">'&lt;p align="left" class="ptest"&gt;Hello World&lt;/p&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadHTML</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">);<br /><br /></span><span class="comment">// remove attributes from  the h1 element<br /></span><span class="default">$h1 </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'h1'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$length </span><span class="keyword">= </span><span class="default">$h1</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">;<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$length</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">) {<br />    </span><span class="default">$name </span><span class="keyword">= </span><span class="default">$h1</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)-&gt;</span><span class="default">name</span><span class="keyword">;<br />    </span><span class="default">$h1</span><span class="keyword">-&gt;</span><span class="default">removeAttribute</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);<br />    echo </span><span class="string">"h1: removed attribute `</span><span class="default">$name</span><span class="string">`&lt;br&gt;"</span><span class="keyword">;<br />}<br /></span><span class="comment">// remove attributes from the p element<br /></span><span class="default">$p </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'p'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br />foreach (</span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">attributes </span><span class="keyword">as </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$attrNode</span><span class="keyword">) {<br />    </span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">removeAttribute</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);<br />    echo </span><span class="string">"p: removed attribute `</span><span class="default">$name</span><span class="string">`&lt;br&gt;"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />OUTPUT:<br />-------<br />h1: removed attribute `id`<br /><br />Notice: Trying to get property of non-object in nodemap.php on line 13<br />h1: removed attribute ``<br />p: removed attribute `align`</span></code></div>
  </div>
 </div>
  <div class="note" id="94078">  <div class="votes">
    <div id="Vu94078">
    <a href="/manual/vote-note.php?id=94078&amp;page=class.domnamednodemap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94078">
    <a href="/manual/vote-note.php?id=94078&amp;page=class.domnamednodemap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94078" title="76% like this...">
    7
    </div>
  </div>
  <a href="#94078" class="name">
  <strong class="user"><em>xafford</em></strong></a><a class="genanchor" href="#94078"> &para;</a><div class="date" title="2009-10-15 03:16"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94078">
<div class="phpcode"><code><span class="html">I stumbled upon a problem with DOMNamedNodeMap. If you iterate over a DOMNamedNodeMap, representing the attributes of a DOMElement with foreach and you use DOMElement::removeAttributeNode only the first attribute will be handled.
<br />
<br />Example (not complete):
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">/*
<br /> * Imagine you got a node like this:
<br /> * &lt;a onclick="alert('evil')" href="<a href="http://example.com" rel="nofollow" target="_blank">http://example.com</a>"&gt;evil&lt;/a&gt;
<br /> * and onclick should be removed, href would not be tested.
<br /> */
<br />
<br /></span><span class="keyword">foreach ( </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">attributes </span><span class="keyword">as </span><span class="default">$attribute </span><span class="keyword">)
<br />{
<br />
<br />    echo </span><span class="string">'checking attribute '</span><span class="keyword">, </span><span class="default">$attribute</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">, </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;
<br />
<br />    if ( ! </span><span class="default">in_array </span><span class="keyword">( </span><span class="default">$attribute</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">, </span><span class="default">$allowed_attributes </span><span class="keyword">) )
<br />    {
<br />        </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">removeAttributeNode </span><span class="keyword">( </span><span class="default">$attribute </span><span class="keyword">);
<br />    }
<br />
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />The output would be:
<br />
<br />checking attribute onclick</span></code></div>
  </div>
 </div>
  <div class="note" id="125646">  <div class="votes">
    <div id="Vu125646">
    <a href="/manual/vote-note.php?id=125646&amp;page=class.domnamednodemap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125646">
    <a href="/manual/vote-note.php?id=125646&amp;page=class.domnamednodemap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125646" title="100% like this...">
    4
    </div>
  </div>
  <a href="#125646" class="name">
  <strong class="user"><em>sirajshaikh96 at yahoo dot com</em></strong></a><a class="genanchor" href="#125646"> &para;</a><div class="date" title="2021-01-01 02:48"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125646">
<div class="phpcode"><code><span class="html">I have tried to solve the general problem occurs in DOMNamedNodeMap that during executing for/foreachloop after executing removeAttribute('$name') for item(0), item(1) is not executing and warning occurs. Following codes give the solution of this problem that in loop item(0) should be applied rather than item($i) because after removing first attribute node now present element has only one attribute node.<br /><br /><span class="default">&lt;?php<br />$html  </span><span class="keyword">= </span><span class="string">'&lt;h1 id="h1test" class="h2test"&gt;Heading&lt;/h1&gt;'</span><span class="keyword">;<br /></span><span class="default">$html </span><span class="keyword">.= </span><span class="string">'&lt;p align="left" class="right"&gt;Hello World&lt;/p&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadHTML</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">);<br /><br /></span><span class="comment">// remove attributes from  the h1 element<br /></span><span class="default">$h1 </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'h1'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$length </span><span class="keyword">= </span><span class="default">$h1</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">;<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {    <br />    </span><span class="default">$name </span><span class="keyword">= </span><span class="default">$h1</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">)-&gt;</span><span class="default">nodeName</span><span class="keyword">;<br />    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$h1</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">)-&gt;</span><span class="default">nodeValue</span><span class="keyword">;<br />    </span><span class="default">$h1</span><span class="keyword">-&gt;</span><span class="default">removeAttribute</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);    <br />    echo </span><span class="string">"h1: removed attribute name :- " </span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">.</span><span class="string">"&lt;/br&gt;"</span><span class="keyword">;<br />    echo </span><span class="string">"h1: removed attribute value :- " </span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">.</span><span class="string">"&lt;/br&gt;"</span><span class="keyword">;   <br />    } <br /></span><span class="comment">// remove attributes from the p element<br /></span><span class="default">$p </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'p'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {        <br />    </span><span class="default">$name </span><span class="keyword">= </span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">)-&gt;</span><span class="default">nodeName</span><span class="keyword">;<br />    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">)-&gt;</span><span class="default">nodeValue</span><span class="keyword">;<br />    </span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">removeAttribute</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);    <br />    echo </span><span class="string">"p: removed attribute name :- " </span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">.</span><span class="string">"&lt;/br&gt;"</span><span class="keyword">;<br />    echo </span><span class="string">"p: removed attribute value :- " </span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">.</span><span class="string">"&lt;/br&gt;"</span><span class="keyword">;   <br />}<br /></span><span class="default">?&gt;<br /></span><br />OUTPUT:<br /><br />h1: removed attribute name :- id<br />h1: removed attribute value :- h1test<br />h1: removed attribute name :- class<br />h1: removed attribute value :- h2test<br />p: removed attribute name :- align<br />p: removed attribute value :- left<br />p: removed attribute name :- class<br />p: removed attribute value :- right</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.domnamednodemap&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.domnamednodemap.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
