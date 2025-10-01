<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SimpleXMLIterator - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.simplexmliterator.php">
 <link rel="shorturl" href="https://www.php.net/simplexmliterator">
 <link rel="alternate" href="https://www.php.net/simplexmliterator" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.simplexml.php">
 <link rel="prev" href="https://www.php.net/manual/en/simplexmlelement.xpath.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.simplexml.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.simplexmliterator.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.simplexmliterator.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.simplexmliterator.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.simplexmliterator.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.simplexmliterator.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.simplexmliterator.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.simplexmliterator.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.simplexmliterator.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.simplexmliterator.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.simplexmliterator.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.simplexmliterator.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SimpleXMLIterator class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SimpleXMLIterator - Manual" />
<meta name="twitter:description" content="The SimpleXMLIterator class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SimpleXMLIterator - Manual" />
<meta itemprop="description" content="The SimpleXMLIterator class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SimpleXMLIterator class" />

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
        <a href="ref.simplexml.php">
          SimpleXML Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="simplexmlelement.xpath.php">
          &laquo; SimpleXMLElement::xpath        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.simplexml.php'>SimpleXML</a></li>      </ul>
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
            <option value='en/class.simplexmliterator.php' selected="selected">English</option>
            <option value='de/class.simplexmliterator.php'>German</option>
            <option value='es/class.simplexmliterator.php'>Spanish</option>
            <option value='fr/class.simplexmliterator.php'>French</option>
            <option value='it/class.simplexmliterator.php'>Italian</option>
            <option value='ja/class.simplexmliterator.php'>Japanese</option>
            <option value='pt_BR/class.simplexmliterator.php'>Brazilian Portuguese</option>
            <option value='ru/class.simplexmliterator.php'>Russian</option>
            <option value='tr/class.simplexmliterator.php'>Turkish</option>
            <option value='uk/class.simplexmliterator.php'>Ukrainian</option>
            <option value='zh/class.simplexmliterator.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.simplexmliterator" class="reference">
 <h1 class="title">The SimpleXMLIterator class</h1>
 

 <div class="partintro"><p class="verinfo">(No version information available, might only be in Git)</p>


  <div class="section" id="simplexmliterator.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The SimpleXMLIterator provides recursive iteration over all nodes of a <span class="classname"><a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a></span> object.
   </p>
  </div>


  <div class="section" id="simplexmliterator.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">SimpleXMLIterator</strong></strong>
    

    
     <span class="modifier">extends</span>
      <a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.construct.php" class="methodname">SimpleXMLElement::__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$dataIsURL</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespaceOrPrefix</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$isPrefix</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.addattribute.php" class="methodname">SimpleXMLElement::addAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespace</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.addchild.php" class="methodname">SimpleXMLElement::addChild</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$value</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespace</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.simplexmlelement.php" class="type SimpleXMLElement">SimpleXMLElement</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.asxml.php" class="methodname">SimpleXMLElement::asXML</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$filename</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.attributes.php" class="methodname">SimpleXMLElement::attributes</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespaceOrPrefix</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$isPrefix</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.simplexmlelement.php" class="type SimpleXMLElement">SimpleXMLElement</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.children.php" class="methodname">SimpleXMLElement::children</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespaceOrPrefix</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$isPrefix</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.simplexmlelement.php" class="type SimpleXMLElement">SimpleXMLElement</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.count.php" class="methodname">SimpleXMLElement::count</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.current.php" class="methodname">SimpleXMLElement::current</a></span>(): <span class="type"><a href="class.simplexmlelement.php" class="type SimpleXMLElement">SimpleXMLElement</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.getdocnamespaces.php" class="methodname">SimpleXMLElement::getDocNamespaces</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$recursive</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$fromRoot</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.getname.php" class="methodname">SimpleXMLElement::getName</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.getnamespaces.php" class="methodname">SimpleXMLElement::getNamespaces</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$recursive</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.getchildren.php" class="methodname">SimpleXMLElement::getChildren</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.simplexmlelement.php" class="type SimpleXMLElement">SimpleXMLElement</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.haschildren.php" class="methodname">SimpleXMLElement::hasChildren</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.key.php" class="methodname">SimpleXMLElement::key</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.next.php" class="methodname">SimpleXMLElement::next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.registerxpathnamespace.php" class="methodname">SimpleXMLElement::registerXPathNamespace</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$prefix</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespace</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.rewind.php" class="methodname">SimpleXMLElement::rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.tostring.php" class="methodname">SimpleXMLElement::__toString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.valid.php" class="methodname">SimpleXMLElement::valid</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="simplexmlelement.xpath.php" class="methodname">SimpleXMLElement::xpath</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$expression</code></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

   }</div>

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
        Iterator methods (<span class="methodname"><strong>SimpleXMLIterator::hasChildren()</strong></span>,
        <span class="methodname"><strong>SimpleXMLIterator::getChildren()</strong></span>,
        <span class="methodname"><strong>SimpleXMLIterator::current()</strong></span>, <span class="methodname"><strong>SimpleXMLIterator::key()</strong></span>,
        <span class="methodname"><strong>SimpleXMLIterator::next()</strong></span>,<span class="methodname"><strong>SimpleXMLIterator::rewind()</strong></span>,
        <span class="methodname"><strong>SimpleXMLIterator::valid()</strong></span>) were moved to <span class="classname"><a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a></span>.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        <span class="classname"><strong class="classname">SimpleXMLIterator</strong></span> implements
        <span class="interfacename"><a href="class.stringable.php" class="interfacename">Stringable</a></span> now.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>

 </div>

</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/simplexml/simplexmliterator.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.simplexmliterator%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.simplexmliterator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.simplexmliterator.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="92323">  <div class="votes">
    <div id="Vu92323">
    <a href="/manual/vote-note.php?id=92323&amp;page=class.simplexmliterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92323">
    <a href="/manual/vote-note.php?id=92323&amp;page=class.simplexmliterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92323" title="80% like this...">
    15
    </div>
  </div>
  <a href="#92323" class="name">
  <strong class="user"><em>ratfactor at gmail dot com</em></strong></a><a class="genanchor" href="#92323"> &para;</a><div class="date" title="2009-07-19 05:08"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92323">
<div class="phpcode"><code><span class="html">The documentation is a bit sparse for SimpleXmlIterator.  Here is an example showing the use of its methods. xml2Array and sxiToArray work together to convert an XML document to an associative array structure.<br /><br />The contents of cats.xml:<br />======================================<br />&lt;cats&gt;<br />  &lt;cat&gt;<br />      &lt;name&gt;Jack&lt;/name&gt;<br />      &lt;age&gt;2&lt;/age&gt;<br />      &lt;color&gt;grey&lt;/color&gt;<br />      &lt;color&gt;white&lt;/color&gt;<br />  &lt;/cat&gt;<br />  &lt;cat&gt;<br />      &lt;name&gt;Maxwell&lt;/name&gt;<br />      &lt;age&gt;12&lt;/age&gt;<br />      &lt;color&gt;orange&lt;/color&gt;<br />      &lt;color&gt;black&lt;/color&gt;<br />  &lt;/cat&gt;<br />&lt;/cats&gt;<br />======================================<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">xml2array</span><span class="keyword">(</span><span class="default">$fname</span><span class="keyword">){<br />  </span><span class="default">$sxi </span><span class="keyword">= new </span><span class="default">SimpleXmlIterator</span><span class="keyword">(</span><span class="default">$fname</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />  return </span><span class="default">sxiToArray</span><span class="keyword">(</span><span class="default">$sxi</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">sxiToArray</span><span class="keyword">(</span><span class="default">$sxi</span><span class="keyword">){<br />  </span><span class="default">$a </span><span class="keyword">= array();<br />  for( </span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">(); </span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">(); </span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">() ) {<br />    if(!</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">(), </span><span class="default">$a</span><span class="keyword">)){<br />      </span><span class="default">$a</span><span class="keyword">[</span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">()] = array();<br />    }<br />    if(</span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">hasChildren</span><span class="keyword">()){<br />      </span><span class="default">$a</span><span class="keyword">[</span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">()][] = </span><span class="default">sxiToArray</span><span class="keyword">(</span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">());<br />    }<br />    else{<br />      </span><span class="default">$a</span><span class="keyword">[</span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">()][] = </span><span class="default">strval</span><span class="keyword">(</span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">());<br />    }<br />  }<br />  return </span><span class="default">$a</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// Read cats.xml and print the results:<br /></span><span class="default">$catArray </span><span class="keyword">= </span><span class="default">xml2array</span><span class="keyword">(</span><span class="string">'cats.xml'</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$catArray</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Results (reformatted a bit for compactness and clarity):<br />======================================<br />Array(<br />  [cat] =&gt; Array(<br />    [0] =&gt; Array(<br />      [name] =&gt; Array(  [0] =&gt; Jack    )<br />      [age] =&gt; Array(   [0] =&gt; 2       )<br />      [color] =&gt; Array( [0] =&gt; grey,<br />                        [1] =&gt; white   )<br />    )<br />    [1] =&gt; Array(<br />      [name] =&gt; Array(  [0] =&gt; Maxwell )<br />      [age] =&gt; Array(   [0] =&gt; 12      )<br />      [color] =&gt; Array( [0] =&gt; orange<br />                        [1] =&gt; black   )<br />    )<br />  )<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="111916">  <div class="votes">
    <div id="Vu111916">
    <a href="/manual/vote-note.php?id=111916&amp;page=class.simplexmliterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111916">
    <a href="/manual/vote-note.php?id=111916&amp;page=class.simplexmliterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111916" title="66% like this...">
    7
    </div>
  </div>
  <a href="#111916" class="name">
  <strong class="user"><em>hezll at msn dot com</em></strong></a><a class="genanchor" href="#111916"> &para;</a><div class="date" title="2013-04-11 04:34"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111916">
<div class="phpcode"><code><span class="html">Most of the time we need to convert the XML to array or JSON , but now I have to completed the requirement of converting XML to XPath which make our template easily geting the data from XML data source due to the Xpath mapping .Here is the function:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">sxiToXpath</span><span class="keyword">(</span><span class="default">$sxi</span><span class="keyword">, </span><span class="default">$key </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, &amp;</span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />{<br />    </span><span class="default">$keys_arr </span><span class="keyword">= array();<br />    </span><span class="comment">//get the keys count array<br />    </span><span class="keyword">for (</span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">(); </span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">(); </span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">())<br />    {<br />        </span><span class="default">$sk </span><span class="keyword">= </span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">();<br />        if (</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$sk</span><span class="keyword">, </span><span class="default">$keys_arr</span><span class="keyword">))<br />        {<br />            </span><span class="default">$keys_arr</span><span class="keyword">[</span><span class="default">$sk</span><span class="keyword">]+=</span><span class="default">1</span><span class="keyword">;<br />            </span><span class="default">$keys_arr</span><span class="keyword">[</span><span class="default">$sk</span><span class="keyword">] = </span><span class="default">$keys_arr</span><span class="keyword">[</span><span class="default">$sk</span><span class="keyword">];<br />        }<br />        else<br />        {<br />            </span><span class="default">$keys_arr</span><span class="keyword">[</span><span class="default">$sk</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br />        }<br />    }<br />    </span><span class="comment">//create the xpath <br />    </span><span class="keyword">for (</span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">(); </span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">(); </span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">())<br />    {<br />        </span><span class="default">$sk </span><span class="keyword">= </span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">();<br />        if (!isset($</span><span class="default">$sk</span><span class="keyword">))<br />        {<br />            $</span><span class="default">$sk </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />        }<br />        if (</span><span class="default">$keys_arr</span><span class="keyword">[</span><span class="default">$sk</span><span class="keyword">] &gt;= </span><span class="default">1</span><span class="keyword">)<br />        {<br />            </span><span class="default">$spk </span><span class="keyword">= </span><span class="default">$sk </span><span class="keyword">. </span><span class="string">'[' </span><span class="keyword">. $</span><span class="default">$sk </span><span class="keyword">. </span><span class="string">']'</span><span class="keyword">;<br />            </span><span class="default">$keys_arr</span><span class="keyword">[</span><span class="default">$sk</span><span class="keyword">] = </span><span class="default">$keys_arr</span><span class="keyword">[</span><span class="default">$sk</span><span class="keyword">] - </span><span class="default">1</span><span class="keyword">;<br />            $</span><span class="default">$sk</span><span class="keyword">++;<br />        }<br />        else<br />        {<br />            </span><span class="default">$spk </span><span class="keyword">= </span><span class="default">$sk</span><span class="keyword">;<br />        }<br />        </span><span class="default">$kp </span><span class="keyword">= </span><span class="default">$key </span><span class="keyword">? </span><span class="default">$key </span><span class="keyword">. </span><span class="string">'/' </span><span class="keyword">. </span><span class="default">$spk </span><span class="keyword">: </span><span class="string">'/' </span><span class="keyword">. </span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">() . </span><span class="string">'/' </span><span class="keyword">. </span><span class="default">$spk</span><span class="keyword">;<br />        if (</span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">hasChildren</span><span class="keyword">())<br />        {<br />            </span><span class="default">sxiToXpath</span><span class="keyword">(</span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">getChildren</span><span class="keyword">(), </span><span class="default">$kp</span><span class="keyword">, </span><span class="default">$tmp</span><span class="keyword">);<br />        }<br />        else<br />        {<br />            </span><span class="default">$tmp</span><span class="keyword">[</span><span class="default">$kp</span><span class="keyword">] = </span><span class="default">strval</span><span class="keyword">(</span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">());<br />        }<br />        </span><span class="default">$at </span><span class="keyword">= </span><span class="default">$sxi</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">attributes</span><span class="keyword">();<br />        if (</span><span class="default">$at</span><span class="keyword">)<br />        {<br />            </span><span class="default">$tmp_kp </span><span class="keyword">= </span><span class="default">$kp</span><span class="keyword">;<br />            foreach (</span><span class="default">$at </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">)<br />            {<br />                </span><span class="default">$kp </span><span class="keyword">.= </span><span class="string">'/@' </span><span class="keyword">. </span><span class="default">$k</span><span class="keyword">;<br />                </span><span class="default">$tmp</span><span class="keyword">[</span><span class="default">$kp</span><span class="keyword">] = </span><span class="default">$v</span><span class="keyword">;<br />                </span><span class="default">$kp </span><span class="keyword">= </span><span class="default">$tmp_kp</span><span class="keyword">;<br />            }<br />        }<br />    }<br />    return </span><span class="default">$tmp</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">xmlToXpath</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">)<br />{<br />    </span><span class="default">$sxi </span><span class="keyword">= new </span><span class="default">SimpleXmlIterator</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br />    return </span><span class="default">sxiToXpath</span><span class="keyword">(</span><span class="default">$sxi</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">/**<br /> *  How to use the function <br /> */<br /></span><span class="default">$xml </span><span class="keyword">= &lt;&lt;&lt;EOT<br /></span><span class="string">&lt;?xml version="1.0" encoding="utf8" ?&gt;        <br />&lt;data&gt;<br />   &lt;item ID="30001"&gt;<br />      &lt;Company&gt;Navarro Corp.&lt;/Company&gt;<br />   &lt;/item&gt;<br />   &lt;item ID="30002" IDd="30002"&gt;<br />      &lt;Company&gt;Performant Systems&lt;/Company&gt;<br />   &lt;/item&gt;<br />   &lt;item ID="30003"&gt;<br />      &lt;Company id='id_test'&gt;&lt;g id='id_g'&gt;glove&lt;/g&gt;&lt;/Company&gt;    <br />   &lt;/item&gt;<br />    &lt;item&gt;<br />    &lt;/item&gt;<br />&lt;/data&gt;<br /></span><span class="keyword">EOT;<br /><br /></span><span class="default">$rs </span><span class="keyword">= </span><span class="default">xmlToXpath</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$rs</span><span class="keyword">);<br /><br /></span><span class="comment">/**<br /> * the results may lkie this:<br />Array<br />(<br />    [/data/item[1]/Company[1]] =&gt; Navarro Corp.<br />    [/data/item[1]/@ID] =&gt; SimpleXMLIterator Object<br />        (<br />            [0] =&gt; 30001<br />        )<br />    [/data/item[2]/Company[1]] =&gt; Performant Systems<br />    [/data/item[2]/@ID] =&gt; SimpleXMLIterator Object<br />        (<br />            [0] =&gt; 30002<br />        )<br /><br />    [/data/item[2]/@IDd] =&gt; SimpleXMLIterator Object<br />        (<br />            [0] =&gt; 30002<br />        )<br /><br />    [/data/item[3]/Company[1]/g[1]] =&gt; glove<br />    [/data/item[3]/Company[1]/g[1]/@id] =&gt; SimpleXMLIterator Object<br />        (<br />            [0] =&gt; id_g<br />        )<br /><br />    [/data/item[3]/Company[1]/@id] =&gt; SimpleXMLIterator Object<br />        (<br />            [0] =&gt; id_test<br />        )<br /><br />    [/data/item[3]/@ID] =&gt; SimpleXMLIterator Object<br />        (<br />            [0] =&gt; 30003<br />        )<br /><br />    [/data/item[4]] =&gt; <br />    <br />) <br /> */<br /><br /></span><span class="keyword">echo </span><span class="string">"Total:" </span><span class="keyword">. </span><span class="default">count</span><span class="keyword">(</span><span class="default">$rs</span><span class="keyword">);<br /><br />echo </span><span class="string">"&lt;hr&gt;"</span><span class="keyword">;<br /></span><span class="comment">/* You can check the xpath result like this */<br /></span><span class="default">$xml </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br />foreach (</span><span class="default">$rs </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">)<br />{<br />    echo </span><span class="string">"Xpath:" </span><span class="keyword">. </span><span class="default">$k </span><span class="keyword">. </span><span class="string">" |Value:" </span><span class="keyword">. </span><span class="default">$v </span><span class="keyword">. </span><span class="string">" "</span><span class="keyword">;<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">));<br />    echo </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115383">  <div class="votes">
    <div id="Vu115383">
    <a href="/manual/vote-note.php?id=115383&amp;page=class.simplexmliterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115383">
    <a href="/manual/vote-note.php?id=115383&amp;page=class.simplexmliterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115383" title="66% like this...">
    3
    </div>
  </div>
  <a href="#115383" class="name">
  <strong class="user"><em>centy2010 at hotmail dot com</em></strong></a><a class="genanchor" href="#115383"> &para;</a><div class="date" title="2014-07-16 03:22"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115383">
<div class="phpcode"><code><span class="html">I filled my database from an XML file about 1260 Kb.<br />I made my process less than a second. Simply by using SimpleXML.<br /><br />I give you a little example of the usage to fill a database.<br />Given the table universe.<br />With 4 columns Coords, Planet_Name, Player_id, Moon_Size.<br /><br />Now You have a XML file named universe.xml with this kind of data.<br />I enclose the data within php tags but it's a file :p<br /><span class="default">&lt;?php<br />$xml </span><span class="keyword">= &lt;&lt;&lt;EOT<br /></span><span class="string">&lt;?xml version="1.0" encoding="UTF-8"?&gt;<br />&lt;universe xmlns:xsi="<a href="http://www.w3.org/2001/XMLSchema-instance" rel="nofollow" target="_blank">http://www.w3.org/2001/XMLSchema-instance</a>" -<br />xsi:noNamespaceSchemaLocation="<a href="http://s127-fr.ogame.gameforge.com/api/xsd/universe.xsd" rel="nofollow" target="_blank">http://s127-fr.ogame.gameforge.com/api/xsd/universe.xsd</a>" -<br />timestamp="1405413350" serverId="fr127"&gt;<br />    &lt;planet id="1" player="1" name="Arakis" coords="1:1:2"&gt;<br />        &lt;moon id="2" name="Mond" size="4998"/&gt;<br />    &lt;/planet&gt;<br />    &lt;planet id="33620176" player="100000" name="GameAdmin" coords="1:1:3"/&gt;<br />    &lt;planet id="33620179" player="100003" name="Heimatplanet" coords="1:1:1"/&gt;<br />    &lt;planet id="33620186" player="100004" name="OGame Team" coords="6:250:1"/&gt;<br />    &lt;planet id="33620242" player="100058" name="KnS" coords="9:1:6"&gt;<br />        &lt;moon id="33668391" name="Lune" size="8831"/&gt;<br />    &lt;/planet&gt;<br />&lt;/universe&gt;<br /></span><span class="keyword">EOT;<br /></span><span class="default">?&gt;<br /></span><br />Now how to bring these data in my 4 columns table :<br /><br /><span class="default">&lt;?php<br />$newfname </span><span class="keyword">= </span><span class="default">$path</span><span class="keyword">.</span><span class="string">"Universe.XML"</span><span class="keyword">;<br /></span><span class="default">$mydata </span><span class="keyword">= new </span><span class="default">SimpleXmlIterator</span><span class="keyword">(</span><span class="default">$newfname</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$myquery </span><span class="keyword">= </span><span class="string">"INSERT INTO `"</span><span class="keyword">.</span><span class="default">$tablename</span><span class="keyword">.</span><span class="string">"` (`coords`,`planet_name`, `player_id`, `moon_size`) VALUES "</span><span class="keyword">;<br />for (</span><span class="default">$mydata</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">();</span><span class="default">$mydata</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">();</span><span class="default">$mydata</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">()) {<br />    </span><span class="default">$myquery</span><span class="keyword">.= </span><span class="string">" ('"</span><span class="keyword">.</span><span class="default">$mydata</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">attributes</span><span class="keyword">()[</span><span class="string">'coords'</span><span class="keyword">]<br /></span><span class="default">_</span><span class="keyword">.</span><span class="string">"','"</span><span class="keyword">.</span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">$mydata</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">attributes</span><span class="keyword">()[</span><span class="string">'name'</span><span class="keyword">])<br /></span><span class="default">_</span><span class="keyword">.</span><span class="string">"','"</span><span class="keyword">.</span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">$mydata</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">attributes</span><span class="keyword">()[</span><span class="string">'player'</span><span class="keyword">])<br /></span><span class="default">_</span><span class="keyword">.</span><span class="string">"','"</span><span class="keyword">;<br />    if (</span><span class="default">$mydata</span><span class="keyword">-&gt;</span><span class="default">haschildren</span><span class="keyword">()) {<br />        </span><span class="default">$myquery</span><span class="keyword">.= </span><span class="default">$mydate</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">children</span><span class="keyword">()-&gt;</span><span class="default">attributes</span><span class="keyword">()[</span><span class="string">'size'</span><span class="keyword">].</span><span class="string">"'),"</span><span class="keyword">;<br />    } else {<br />        </span><span class="default">$myquery</span><span class="keyword">.= </span><span class="string">"'),"</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$myquery </span><span class="keyword">= </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">$myquery</span><span class="keyword">, </span><span class="string">","</span><span class="keyword">);<br /></span><span class="default">$datatosql </span><span class="keyword">= </span><span class="default">mysql_query</span><span class="keyword">(</span><span class="default">$myquery</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123445">  <div class="votes">
    <div id="Vu123445">
    <a href="/manual/vote-note.php?id=123445&amp;page=class.simplexmliterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123445">
    <a href="/manual/vote-note.php?id=123445&amp;page=class.simplexmliterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123445" title="66% like this...">
    1
    </div>
  </div>
  <a href="#123445" class="name">
  <strong class="user"><em>rukkykf at gmail dot com</em></strong></a><a class="genanchor" href="#123445"> &para;</a><div class="date" title="2018-12-16 06:54"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123445">
<div class="phpcode"><code><span class="html">I think it's worth mentioning that you need to call the rewind() method on the SimpleXMLIterator object immediately after initialization before you can start doing any other operations on the object. An example: <br /><br /><span class="default">&lt;?php<br />$xml </span><span class="keyword">= new </span><span class="default">SimpleXMLIterator</span><span class="keyword">(</span><span class="string">'file.xml'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="comment">// $x here will be set to null because the rewind() method has not been called<br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">(); <br /><br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">(); <br /><br /></span><span class="comment">// $x here will be set to the first element<br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">(); <br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118109">  <div class="votes">
    <div id="Vu118109">
    <a href="/manual/vote-note.php?id=118109&amp;page=class.simplexmliterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118109">
    <a href="/manual/vote-note.php?id=118109&amp;page=class.simplexmliterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118109" title="100% like this...">
    1
    </div>
  </div>
  <a href="#118109" class="name">
  <strong class="user"><em>php-lover at live dot com</em></strong></a><a class="genanchor" href="#118109"> &para;</a><div class="date" title="2015-10-05 09:50"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118109">
<div class="phpcode"><code><span class="html">Function to extract SimpleXMLElement data to array.<br /><br />function extract($sxe = null) {<br />    if (!$sxe instanceOf SimpleXMLElement)<br />        return array();<br /><br />    $extract = array();<br /><br />    foreach ($sxe-&gt;children() as $key =&gt; $value) {<br />        if (array_key_exists($key, $extract)) {<br />            if (!isset($extract[$key][0])) {<br />                $tmp_extract = $extract[$key];<br />                $extract[$key] = array();<br />                $extract[$key][0] = $tmp_extract; <br />            } else<br />                $extract[$key] = (array) $extract[$key];<br />        } <br /><br />        if ($value-&gt;count()) {<br />            if (isset($extract[$key]) &amp;&amp; is_array($extract[$key]))<br />                $extract[$key][] = $this-&gt;extract($value);<br />            else<br />                $extract[$key] = $this-&gt;extract($value);<br />        } else {<br />            if (isset($extract[$key]) &amp;&amp; is_array($extract[$key]))<br />                $extract[$key][] = empty(strval($value)) ? null : strval($value);<br />            else<br />                $extract[$key] = empty(strval($value)) ? null : strval($value);<br />        }<br />    }<br /><br />    return $extract;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="125427">  <div class="votes">
    <div id="Vu125427">
    <a href="/manual/vote-note.php?id=125427&amp;page=class.simplexmliterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125427">
    <a href="/manual/vote-note.php?id=125427&amp;page=class.simplexmliterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125427" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#125427" class="name">
  <strong class="user"><em>prouchetvincent at free dot fr</em></strong></a><a class="genanchor" href="#125427"> &para;</a><div class="date" title="2020-10-10 12:47"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125427">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="keyword">=======================================================<br /></span><span class="default">$index </span><span class="keyword">= <br />&lt;?</span><span class="default">xml version</span><span class="keyword">=</span><span class="string">"1.0" </span><span class="default">encoding</span><span class="keyword">=</span><span class="string">"UTF-8"</span><span class="default">?&gt;<br /></span>&lt;root&gt;<br />    &lt;article id="8" visibility="true" filename="2020-10-08" fileExtension="xml"&gt;<br />            &lt;tag&gt;xml&lt;/tag&gt;<br />            &lt;tag&gt;php&lt;/tag&gt;<br />            &lt;tag&gt;experiment&lt;/tag&gt;        <br />    &lt;/article&gt;<br />    &lt;article id="7" visibility="true" filename="2020-10-07" fileExtension="xml"&gt;<br />            &lt;tag&gt;xml&lt;/tag&gt;<br />            &lt;tag&gt;php&lt;/tag&gt;<br />            &lt;tag&gt;experiment&lt;/tag&gt;        <br />    &lt;/article&gt;<br />    &lt;article id="6" visibility="true" filename="2020-10-02" fileExtension="xml"&gt;<br />            &lt;tag&gt;xml&lt;/tag&gt;<br />            &lt;tag&gt;php&lt;/tag&gt;<br />            &lt;tag&gt;experiment&lt;/tag&gt;        <br />    &lt;/article&gt;<br />    &lt;article id="5" visibility="true" filename="2020-09-30" fileExtension="xml"&gt;<br />            &lt;tag&gt;xml&lt;/tag&gt;<br />            &lt;tag&gt;php&lt;/tag&gt;<br />            &lt;tag&gt;experiment&lt;/tag&gt;        <br />    &lt;/article&gt;<br />    &lt;article id="4" visibility="true" filename="2020-09-26" fileExtension="xml"&gt;<br />            &lt;tag&gt;xml&lt;/tag&gt;<br />            &lt;tag&gt;php&lt;/tag&gt;<br />            &lt;tag&gt;experiment&lt;/tag&gt;        <br />    &lt;/article&gt;<br />    &lt;article id="3" visibility="true" filename="2020-09-22"     fileExtension="xml"&gt;<br />            &lt;tag&gt;xml&lt;/tag&gt;<br />            &lt;tag&gt;php&lt;/tag&gt;<br />            &lt;tag&gt;experiment&lt;/tag&gt;        <br />    &lt;/article&gt;<br />    &lt;article id="2" visibility="true" filename="2020-09-20"     fileExtension="xml"&gt;<br />            &lt;tag&gt;xml&lt;/tag&gt;<br />            &lt;tag&gt;php&lt;/tag&gt;<br />            &lt;tag&gt;experiment&lt;/tag&gt;        <br />    &lt;/article&gt;<br />        &lt;article id="1" visibility="true" filename="hello world" fileExtension="xml"&gt;<br />            Hello World<br />            &lt;tag&gt;xml&lt;/tag&gt;<br />            &lt;tag&gt;php&lt;/tag&gt;<br />            &lt;tag&gt;experiment&lt;/tag&gt;        <br />    &lt;/article&gt;<br />&lt;/root&gt;<br />====================================================================<br />?&gt;<br />If you have to use an iterator to parse your XML<br />and need tu get an attribute of tags of this iterator then<br />use the fonction<br />-&gt;current()<br />of simpleXMLIterator on your object before <br />-&gt;attributes()-&gt;{attibute name}<br /><span class="default">&lt;?php<br />$file</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;<br />try{<br />     </span><span class="default">$index </span><span class="keyword">= new </span><span class="default">SimpleXMLIterator </span><span class="keyword">( </span><span class="default">file_get_contents </span><span class="keyword">( </span><span class="default">FILEDIRECTORY</span><span class="keyword">. </span><span class="string">'index.xml' </span><span class="keyword">) );}<br />catch(</span><span class="default">Exception $e</span><span class="keyword">) {</span><span class="default">whatever you want to </span><span class="keyword">do </span><span class="default">on error</span><span class="keyword">}}<br /><br />for( </span><span class="default">$index</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">(); </span><span class="default">$index</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">(); </span><span class="default">$index</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">() ) {<br />    try {<br />          </span><span class="default">$file </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">FILESDIRECTORY</span><span class="keyword">.</span><span class="default">$index</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">attributes</span><span class="keyword">()-&gt;{</span><span class="string">'fileName'</span><span class="keyword">}. </span><span class="string">'.xml' </span><span class="keyword">);<br />    } catch (</span><span class="default">Exception $e</span><span class="keyword">) {</span><span class="default">whatever you want to </span><span class="keyword">do </span><span class="default">on error</span><span class="keyword">}<br />    </span><span class="default">$article </span><span class="keyword">= new </span><span class="default">Article </span><span class="keyword">();<br />    </span><span class="default">$article</span><span class="keyword">-&gt;</span><span class="default">setXMLArticle </span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />    </span><span class="default">array_push</span><span class="keyword">( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">articles</span><span class="keyword">, </span><span class="default">$article </span><span class="keyword">);<br />    </span><span class="default">$file </span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span>This exemple use a custom made Article object that itself parse the file given to him to initialise its properties .<br />Here we open a file (Yes I use constant for my directories)<br />make it a simpleXMLIterator and parse article elements to get the filename attribute to use it to open another XML file for data collection.<br />don't forget !!! In PHP Object created by new ClassName() are ALWAYS given by reference that is why new Article() in inside the loop and not outside<br />(yhea, I did that mistake)<br />XMLIterator are powerfull yet harder to understand in themselves but once passed that one point.<br />They are very more easier to use than plain arrays.</span></code></div>
  </div>
 </div>
  <div class="note" id="102973">  <div class="votes">
    <div id="Vu102973">
    <a href="/manual/vote-note.php?id=102973&amp;page=class.simplexmliterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102973">
    <a href="/manual/vote-note.php?id=102973&amp;page=class.simplexmliterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102973" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#102973" class="name">
  <strong class="user"><em>ajnsit dot NOSPAM at gmail dot com</em></strong></a><a class="genanchor" href="#102973"> &para;</a><div class="date" title="2011-03-17 10:14"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102973">
<div class="phpcode"><code><span class="html">Here's a simple function to convert an XML string to an array -<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// PHP5.3 and above only<br /></span><span class="keyword">function </span><span class="default">parse</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    </span><span class="default">$f </span><span class="keyword">= function(</span><span class="default">$iter</span><span class="keyword">) {<br />      foreach(</span><span class="default">$iter </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$val</span><span class="keyword">)<br />        </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][] = (</span><span class="default">$iter</span><span class="keyword">-&gt;</span><span class="default">hasChildren</span><span class="keyword">())?<br />          </span><span class="default">call_user_func </span><span class="keyword">(</span><span class="default">__FUNCTION__</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">)<br />          : </span><span class="default">strval</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">);<br />      return </span><span class="default">$arr</span><span class="keyword">;<br />    };<br />    return </span><span class="default">$f</span><span class="keyword">(new </span><span class="default">SimpleXmlIterator</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;<br /></span><br />PHP 5.2 and below do not have anonymous functions.<br />But you can create a helper function to achieve the same thing -<br /><br /><span class="default">&lt;?php<br />  </span><span class="keyword">function </span><span class="default">parse</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    return </span><span class="default">parseHelper</span><span class="keyword">(new </span><span class="default">SimpleXmlIterator</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">));<br />  }<br />  function </span><span class="default">parseHelper</span><span class="keyword">(</span><span class="default">$iter</span><span class="keyword">) {<br />    foreach(</span><span class="default">$iter </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$val</span><span class="keyword">)<br />      </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][] = (</span><span class="default">$iter</span><span class="keyword">-&gt;</span><span class="default">hasChildren</span><span class="keyword">())?<br />        </span><span class="default">call_user_func </span><span class="keyword">(</span><span class="default">__FUNCTION__</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">)<br />        : </span><span class="default">strval</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">);<br />    return </span><span class="default">$arr</span><span class="keyword">;<br />  }<br /></span><span class="default">?&gt;<br /></span><br />Using it is straightforward enough -<br /><br /><span class="default">&lt;?php<br /><br />$xml </span><span class="keyword">= </span><span class="string">'<br />&lt;movies&gt;<br />  &lt;movie&gt;abcd&lt;/movie&gt;<br />  &lt;movie&gt;efgh&lt;/movie&gt;<br />  &lt;movie&gt;hijk&lt;/movie&gt;<br />&lt;/movies&gt;'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">parse</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />This will output -<br /><br />array<br />  'movie' =&gt; <br />    array<br />      0 =&gt; string 'abcd' (length=4)<br />      1 =&gt; string 'efgh' (length=4)<br />      2 =&gt; string 'hijk' (length=4)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.simplexmliterator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.simplexmliterator.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.simplexml.php">SimpleXML</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.simplexml.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="simplexml.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="simplexml.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.simplexmlelement.php" title="SimpleXMLElement">SimpleXMLElement</a>
                        </li>
                                                <li class="current">
                            <a href="class.simplexmliterator.php" title="SimpleXMLIterator">SimpleXMLIterator</a>
                        </li>
                                                <li class="">
                            <a href="ref.simplexml.php" title="SimpleXML Functions">SimpleXML Functions</a>
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
