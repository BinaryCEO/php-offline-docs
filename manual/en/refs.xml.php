<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: XML Manipulation - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/refs.xml.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/refs.xml.php">
 <link rel="alternate" href="https://www.php.net/manual/en/refs.xml.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/funcref.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.win32-stop-service.php">
 <link rel="next" href="https://www.php.net/manual/en/book.dom.php">

 <link rel="alternate" href="https://www.php.net/manual/en/refs.xml.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/refs.xml.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/refs.xml.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/refs.xml.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/refs.xml.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/refs.xml.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/refs.xml.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/refs.xml.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/refs.xml.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/refs.xml.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/refs.xml.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="XML Manipulation" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: XML Manipulation - Manual" />
<meta name="twitter:description" content="XML Manipulation" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: XML Manipulation - Manual" />
<meta itemprop="description" content="XML Manipulation" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="XML Manipulation" />

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
        <a href="book.dom.php">
          DOM &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.win32-stop-service.php">
          &laquo; win32_stop_service        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      </ul>
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
            <option value='en/refs.xml.php' selected="selected">English</option>
            <option value='de/refs.xml.php'>German</option>
            <option value='es/refs.xml.php'>Spanish</option>
            <option value='fr/refs.xml.php'>French</option>
            <option value='it/refs.xml.php'>Italian</option>
            <option value='ja/refs.xml.php'>Japanese</option>
            <option value='pt_BR/refs.xml.php'>Brazilian Portuguese</option>
            <option value='ru/refs.xml.php'>Russian</option>
            <option value='tr/refs.xml.php'>Turkish</option>
            <option value='uk/refs.xml.php'>Ukrainian</option>
            <option value='zh/refs.xml.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="refs.xml" class="set">
   <h1 class="title">XML Manipulation</h1>
   





   

 





   







   





   






   

 





   







   







   

 





  <ul class="chunklist chunklist_set"><li><a href="book.dom.php">DOM</a> — Document Object Model<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.dom.php">Introduction</a></li><li><a href="dom.setup.php">Installing/Configuring</a></li><li><a href="dom.constants.php">Predefined Constants</a></li><li><a href="dom.examples.php">Examples</a></li><li><a href="class.domattr.php">DOMAttr</a> — The DOMAttr class</li><li><a href="class.domcdatasection.php">DOMCdataSection</a> — The DOMCdataSection class</li><li><a href="class.domcharacterdata.php">DOMCharacterData</a> — The DOMCharacterData class</li><li><a href="class.domchildnode.php">DOMChildNode</a> — The DOMChildNode interface</li><li><a href="class.domcomment.php">DOMComment</a> — The DOMComment class</li><li><a href="class.domdocument.php">DOMDocument</a> — The DOMDocument class</li><li><a href="class.domdocumentfragment.php">DOMDocumentFragment</a> — The DOMDocumentFragment class</li><li><a href="class.domdocumenttype.php">DOMDocumentType</a> — The DOMDocumentType class</li><li><a href="class.domelement.php">DOMElement</a> — The DOMElement class</li><li><a href="class.domentity.php">DOMEntity</a> — The DOMEntity class</li><li><a href="class.domentityreference.php">DOMEntityReference</a> — The DOMEntityReference class</li><li><a href="class.domexception.php">DOMException</a> — The DOMException / Dom\Exception class</li><li><a href="class.domimplementation.php">DOMImplementation</a> — The DOMImplementation class</li><li><a href="class.domnamednodemap.php">DOMNamedNodeMap</a> — The DOMNamedNodeMap class</li><li><a href="class.domnamespacenode.php">DOMNameSpaceNode</a> — The DOMNameSpaceNode class</li><li><a href="class.domnode.php">DOMNode</a> — The DOMNode class</li><li><a href="class.domnodelist.php">DOMNodeList</a> — The DOMNodeList class</li><li><a href="class.domnotation.php">DOMNotation</a> — The DOMNotation class</li><li><a href="class.domparentnode.php">DOMParentNode</a> — The DOMParentNode interface</li><li><a href="class.domprocessinginstruction.php">DOMProcessingInstruction</a> — The DOMProcessingInstruction class</li><li><a href="class.domtext.php">DOMText</a> — The DOMText class</li><li><a href="class.domxpath.php">DOMXPath</a> — The DOMXPath class</li><li><a href="enum.dom-adjacentposition.php">Dom\AdjacentPosition</a> — The Dom\AdjacentPosition Enum</li><li><a href="class.dom-attr.php">Dom\Attr</a> — The Dom\Attr class</li><li><a href="class.dom-cdatasection.php">Dom\CDATASection</a> — The Dom\CDATASection class</li><li><a href="class.dom-characterdata.php">Dom\CharacterData</a> — The Dom\CharacterData class</li><li><a href="class.dom-childnode.php">Dom\ChildNode</a> — The Dom\ChildNode interface</li><li><a href="class.dom-comment.php">Dom\Comment</a> — The Dom\Comment class</li><li><a href="class.dom-document.php">Dom\Document</a> — The Dom\Document class</li><li><a href="class.dom-documentfragment.php">Dom\DocumentFragment</a> — The Dom\DocumentFragment class</li><li><a href="class.dom-documenttype.php">Dom\DocumentType</a> — The Dom\DocumentType class</li><li><a href="class.dom-dtdnamednodemap.php">Dom\DtdNamedNodeMap</a> — The Dom\DtdNamedNodeMap class</li><li><a href="class.dom-element.php">Dom\Element</a> — The Dom\Element class</li><li><a href="class.dom-entity.php">Dom\Entity</a> — The Dom\Entity class</li><li><a href="class.dom-entityreference.php">Dom\EntityReference</a> — The Dom\EntityReference class</li><li><a href="class.dom-htmlcollection.php">Dom\HTMLCollection</a> — The Dom\HTMLCollection class</li><li><a href="class.dom-htmldocument.php">Dom\HTMLDocument</a> — The Dom\HTMLDocument class</li><li><a href="class.dom-htmlelement.php">Dom\HTMLElement</a> — The Dom\HTMLElement class</li><li><a href="class.dom-implementation.php">Dom\Implementation</a> — The Dom\Implementation class</li><li><a href="class.dom-namednodemap.php">Dom\NamedNodeMap</a> — The Dom\NamedNodeMap class</li><li><a href="class.dom-namespaceinfo.php">Dom\NamespaceInfo</a> — The Dom\NamespaceInfo class</li><li><a href="class.dom-node.php">Dom\Node</a> — The Dom\Node class</li><li><a href="class.dom-nodelist.php">Dom\NodeList</a> — The Dom\NodeList class</li><li><a href="class.dom-notation.php">Dom\Notation</a> — The Dom\Notation class</li><li><a href="class.dom-parentnode.php">Dom\ParentNode</a> — The Dom\ParentNode interface</li><li><a href="class.dom-processinginstruction.php">Dom\ProcessingInstruction</a> — The Dom\ProcessingInstruction class</li><li><a href="class.dom-text.php">Dom\Text</a> — The Dom\Text class</li><li><a href="class.dom-tokenlist.php">Dom\TokenList</a> — The Dom\TokenList class</li><li><a href="class.dom-xmldocument.php">Dom\XMLDocument</a> — The Dom\XMLDocument class</li><li><a href="class.dom-xpath.php">Dom\XPath</a> — The Dom\XPath class</li><li><a href="ref.dom.php">DOM Functions</a></li></ul></li><li><a href="book.libxml.php">libxml</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.libxml.php">Introduction</a></li><li><a href="libxml.setup.php">Installing/Configuring</a></li><li><a href="libxml.constants.php">Predefined Constants</a></li><li><a href="class.libxmlerror.php">LibXMLError</a> — The LibXMLError class</li><li><a href="ref.libxml.php">libxml Functions</a></li></ul></li><li><a href="book.simplexml.php">SimpleXML</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.simplexml.php">Introduction</a></li><li><a href="simplexml.setup.php">Installing/Configuring</a></li><li><a href="simplexml.examples.php">Examples</a></li><li><a href="class.simplexmlelement.php">SimpleXMLElement</a> — The SimpleXMLElement class</li><li><a href="class.simplexmliterator.php">SimpleXMLIterator</a> — The SimpleXMLIterator class</li><li><a href="ref.simplexml.php">SimpleXML Functions</a></li></ul></li><li><a href="book.wddx.php">WDDX</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.wddx.php">Introduction</a></li><li><a href="wddx.setup.php">Installing/Configuring</a></li><li><a href="wddx.examples.php">Examples</a></li><li><a href="ref.wddx.php">WDDX Functions</a></li></ul></li><li><a href="book.xmldiff.php">XMLDiff</a> — XML diff and merge<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.xmldiff.php">Introduction</a></li><li><a href="xmldiff.setup.php">Installing/Configuring</a></li><li><a href="class.xmldiff-base.php">XMLDiff\Base</a> — The XMLDiff\Base class</li><li><a href="class.xmldiff-dom.php">XMLDiff\DOM</a> — The XMLDiff\DOM class</li><li><a href="class.xmldiff-memory.php">XMLDiff\Memory</a> — The XMLDiff\Memory class</li><li><a href="class.xmldiff-file.php">XMLDiff\File</a> — The XMLDiff\File class</li></ul></li><li><a href="book.xml.php">XML Parser</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.xml.php">Introduction</a></li><li><a href="xml.setup.php">Installing/Configuring</a></li><li><a href="xml.constants.php">Predefined Constants</a></li><li><a href="xml.eventhandlers.php">Event Handlers</a></li><li><a href="xml.case-folding.php">Case Folding</a></li><li><a href="xml.error-codes.php">Error Codes</a></li><li><a href="xml.encoding.php">Character Encoding</a></li><li><a href="xml.examples.php">Examples</a></li><li><a href="ref.xml.php">XML Parser Functions</a></li><li><a href="class.xmlparser.php">XMLParser</a> — The XMLParser class</li></ul></li><li><a href="book.xmlreader.php">XMLReader</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.xmlreader.php">Introduction</a></li><li><a href="xmlreader.setup.php">Installing/Configuring</a></li><li><a href="class.xmlreader.php">XMLReader</a> — The XMLReader class</li></ul></li><li><a href="book.xmlwriter.php">XMLWriter</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.xmlwriter.php">Introduction</a></li><li><a href="xmlwriter.setup.php">Installing/Configuring</a></li><li><a href="xmlwriter.examples.php">Examples</a></li><li><a href="class.xmlwriter.php">XMLWriter</a> — The XMLWriter class</li></ul></li><li><a href="book.xsl.php">XSL</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.xsl.php">Introduction</a></li><li><a href="xsl.setup.php">Installing/Configuring</a></li><li><a href="xsl.constants.php">Predefined Constants</a></li><li><a href="xsl.examples.php">Examples</a></li><li><a href="class.xsltprocessor.php">XSLTProcessor</a> — The XSLTProcessor class</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-base/blob/master/manual.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Frefs.xml%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=refs.xml&amp;repo=en&amp;redirect=https://www.php.net/manual/en/refs.xml.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="funcref.php">Function Reference</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="refs.basic.php.php" title="Affecting PHP's Behaviour">Affecting PHP's Behaviour</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.audio.php" title="Audio Formats Manipulation">Audio Formats Manipulation</a>
                        </li>
                                                <li class="">
                            <a href="refs.remote.auth.php" title="Authentication Services">Authentication Services</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.cmdline.php" title="Command Line Specific Extensions">Command Line Specific Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.compression.php" title="Compression and Archive Extensions">Compression and Archive Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.crypto.php" title="Cryptography Extensions">Cryptography Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.database.php" title="Database Extensions">Database Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.calendar.php" title="Date and Time Related Extensions">Date and Time Related Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.fileprocess.file.php" title="File System Related Extensions">File System Related Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.international.php" title="Human Language and Character Encoding Support">Human Language and Character Encoding Support</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.image.php" title="Image Processing and Generation">Image Processing and Generation</a>
                        </li>
                                                <li class="">
                            <a href="refs.remote.mail.php" title="Mail Related Extensions">Mail Related Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.math.php" title="Mathematical Extensions">Mathematical Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.nontext.php" title="Non-&#8203;Text MIME Output">Non-&#8203;Text MIME Output</a>
                        </li>
                                                <li class="">
                            <a href="refs.fileprocess.process.php" title="Process Control Extensions">Process Control Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.basic.other.php" title="Other Basic Extensions">Other Basic Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.remote.other.php" title="Other Services">Other Services</a>
                        </li>
                                                <li class="">
                            <a href="refs.search.php" title="Search Engine Extensions">Search Engine Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.server.php" title="Server Specific Extensions">Server Specific Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.basic.session.php" title="Session Extensions">Session Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.basic.text.php" title="Text Processing">Text Processing</a>
                        </li>
                                                <li class="">
                            <a href="refs.basic.vartype.php" title="Variable and Type Related Extensions">Variable and Type Related Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.webservice.php" title="Web Services">Web Services</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.windows.php" title="Windows Only Extensions">Windows Only Extensions</a>
                        </li>
                                                <li class="current">
                            <a href="refs.xml.php" title="XML Manipulation">XML Manipulation</a>
                        </li>
                                                <li class="">
                            <a href="refs.ui.php" title="GUI Extensions">GUI Extensions</a>
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
