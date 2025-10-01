<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOM - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.dom.php">
 <link rel="shorturl" href="https://www.php.net/dom">
 <link rel="alternate" href="https://www.php.net/dom" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.xml.php">
 <link rel="prev" href="https://www.php.net/manual/en/refs.xml.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.dom.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.dom.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.dom.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.dom.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.dom.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.dom.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.dom.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.dom.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.dom.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.dom.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.dom.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.dom.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Document Object Model" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOM - Manual" />
<meta name="twitter:description" content="Document Object Model" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOM - Manual" />
<meta itemprop="description" content="Document Object Model" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Document Object Model" />

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
        <a href="intro.dom.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="refs.xml.php">
          &laquo; XML Manipulation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      </ul>
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
            <option value='en/book.dom.php' selected="selected">English</option>
            <option value='de/book.dom.php'>German</option>
            <option value='es/book.dom.php'>Spanish</option>
            <option value='fr/book.dom.php'>French</option>
            <option value='it/book.dom.php'>Italian</option>
            <option value='ja/book.dom.php'>Japanese</option>
            <option value='pt_BR/book.dom.php'>Brazilian Portuguese</option>
            <option value='ru/book.dom.php'>Russian</option>
            <option value='tr/book.dom.php'>Turkish</option>
            <option value='uk/book.dom.php'>Ukrainian</option>
            <option value='zh/book.dom.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.dom" class="book">
 
 <h1 class="title">Document Object Model</h1>
 

 

 







 




 



   



 




 




 




 



 




 




 




 




 




 




 





 





 





 





 



 




 





 





 



 




 




 






 



 



 



 



 


 



 



 



 



 



 



 



 



 



 



 



 



 



 



 



 



 



 


 



 



 



 



 




 

 

<ul class="chunklist chunklist_book"><li><a href="intro.dom.php">Introduction</a></li><li><a href="dom.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="dom.requirements.php">Requirements</a></li><li><a href="dom.installation.php">Installation</a></li></ul></li><li><a href="dom.constants.php">Predefined Constants</a></li><li><a href="dom.examples.php">Examples</a></li><li><a href="class.domattr.php">DOMAttr</a> — The DOMAttr class<ul class="chunklist chunklist_book chunklist_children"><li><a href="domattr.construct.php">DOMAttr::__construct</a> — Creates a new DOMAttr object</li><li><a href="domattr.isid.php">DOMAttr::isId</a> — Checks if attribute is a defined ID</li></ul></li><li><a href="class.domcdatasection.php">DOMCdataSection</a> — The DOMCdataSection class<ul class="chunklist chunklist_book chunklist_children"><li><a href="domcdatasection.construct.php">DOMCdataSection::__construct</a> — Constructs a new DOMCdataSection object</li></ul></li><li><a href="class.domcharacterdata.php">DOMCharacterData</a> — The DOMCharacterData class<ul class="chunklist chunklist_book chunklist_children"><li><a href="domcharacterdata.after.php">DOMCharacterData::after</a> — Adds nodes after the character data</li><li><a href="domcharacterdata.appenddata.php">DOMCharacterData::appendData</a> — Append the string to the end of the character data of the node</li><li><a href="domcharacterdata.before.php">DOMCharacterData::before</a> — Adds nodes before the character data</li><li><a href="domcharacterdata.deletedata.php">DOMCharacterData::deleteData</a> — Remove a range of characters from the character data</li><li><a href="domcharacterdata.insertdata.php">DOMCharacterData::insertData</a> — Insert a string at the specified UTF-8 codepoint offset</li><li><a href="domcharacterdata.remove.php">DOMCharacterData::remove</a> — Removes the character data node</li><li><a href="domcharacterdata.replacedata.php">DOMCharacterData::replaceData</a> — Replace a substring within the character data</li><li><a href="domcharacterdata.replacewith.php">DOMCharacterData::replaceWith</a> — Replaces the character data with new nodes</li><li><a href="domcharacterdata.substringdata.php">DOMCharacterData::substringData</a> — Extracts a range of data from the character data</li></ul></li><li><a href="class.domchildnode.php">DOMChildNode</a> — The DOMChildNode interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="domchildnode.after.php">DOMChildNode::after</a> — Adds nodes after the node</li><li><a href="domchildnode.before.php">DOMChildNode::before</a> — Adds nodes before the node</li><li><a href="domchildnode.remove.php">DOMChildNode::remove</a> — Removes the node</li><li><a href="domchildnode.replacewith.php">DOMChildNode::replaceWith</a> — Replaces the node with new nodes</li></ul></li><li><a href="class.domcomment.php">DOMComment</a> — The DOMComment class<ul class="chunklist chunklist_book chunklist_children"><li><a href="domcomment.construct.php">DOMComment::__construct</a> — Creates a new DOMComment object</li></ul></li><li><a href="class.domdocument.php">DOMDocument</a> — The DOMDocument class<ul class="chunklist chunklist_book chunklist_children"><li><a href="domdocument.adoptnode.php">DOMDocument::adoptNode</a> — Transfer a node from another document</li><li><a href="domdocument.append.php">DOMDocument::append</a> — Appends nodes after the last child node</li><li><a href="domdocument.construct.php">DOMDocument::__construct</a> — Creates a new DOMDocument object</li><li><a href="domdocument.createattribute.php">DOMDocument::createAttribute</a> — Create new attribute</li><li><a href="domdocument.createattributens.php">DOMDocument::createAttributeNS</a> — Create new attribute node with an associated namespace</li><li><a href="domdocument.createcdatasection.php">DOMDocument::createCDATASection</a> — Create new cdata node</li><li><a href="domdocument.createcomment.php">DOMDocument::createComment</a> — Create new comment node</li><li><a href="domdocument.createdocumentfragment.php">DOMDocument::createDocumentFragment</a> — Create new document fragment</li><li><a href="domdocument.createelement.php">DOMDocument::createElement</a> — Create new element node</li><li><a href="domdocument.createelementns.php">DOMDocument::createElementNS</a> — Create new element node with an associated namespace</li><li><a href="domdocument.createentityreference.php">DOMDocument::createEntityReference</a> — Create new entity reference node</li><li><a href="domdocument.createprocessinginstruction.php">DOMDocument::createProcessingInstruction</a> — Creates new PI node</li><li><a href="domdocument.createtextnode.php">DOMDocument::createTextNode</a> — Create new text node</li><li><a href="domdocument.getelementbyid.php">DOMDocument::getElementById</a> — Searches for an element with a certain id</li><li><a href="domdocument.getelementsbytagname.php">DOMDocument::getElementsByTagName</a> — Searches for all elements with given local tag name</li><li><a href="domdocument.getelementsbytagnamens.php">DOMDocument::getElementsByTagNameNS</a> — Searches for all elements with given tag name in specified namespace</li><li><a href="domdocument.importnode.php">DOMDocument::importNode</a> — Import node into current document</li><li><a href="domdocument.load.php">DOMDocument::load</a> — Load XML from a file</li><li><a href="domdocument.loadhtml.php">DOMDocument::loadHTML</a> — Load HTML from a string</li><li><a href="domdocument.loadhtmlfile.php">DOMDocument::loadHTMLFile</a> — Load HTML from a file</li><li><a href="domdocument.loadxml.php">DOMDocument::loadXML</a> — Load XML from a string</li><li><a href="domdocument.normalizedocument.php">DOMDocument::normalizeDocument</a> — Normalizes the document</li><li><a href="domdocument.prepend.php">DOMDocument::prepend</a> — Prepends nodes before the first child node</li><li><a href="domdocument.registernodeclass.php">DOMDocument::registerNodeClass</a> — Register extended class used to create base node type</li><li><a href="domdocument.relaxngvalidate.php">DOMDocument::relaxNGValidate</a> — Performs relaxNG validation on the document</li><li><a href="domdocument.relaxngvalidatesource.php">DOMDocument::relaxNGValidateSource</a> — Performs relaxNG validation on the document</li><li><a href="domdocument.replacechildren.php">DOMDocument::replaceChildren</a> — Replace children in document</li><li><a href="domdocument.save.php">DOMDocument::save</a> — Dumps the internal XML tree back into a file</li><li><a href="domdocument.savehtml.php">DOMDocument::saveHTML</a> — Dumps the internal document into a string using HTML formatting</li><li><a href="domdocument.savehtmlfile.php">DOMDocument::saveHTMLFile</a> — Dumps the internal document into a file using HTML formatting</li><li><a href="domdocument.savexml.php">DOMDocument::saveXML</a> — Dumps the internal XML tree back into a string</li><li><a href="domdocument.schemavalidate.php">DOMDocument::schemaValidate</a> — Validates a document based on a schema. Only XML Schema 1.0 is supported.</li><li><a href="domdocument.schemavalidatesource.php">DOMDocument::schemaValidateSource</a> — Validates a document based on a schema</li><li><a href="domdocument.validate.php">DOMDocument::validate</a> — Validates the document based on its DTD</li><li><a href="domdocument.xinclude.php">DOMDocument::xinclude</a> — Substitutes XIncludes in a DOMDocument Object</li></ul></li><li><a href="class.domdocumentfragment.php">DOMDocumentFragment</a> — The DOMDocumentFragment class<ul class="chunklist chunklist_book chunklist_children"><li><a href="domdocumentfragment.append.php">DOMDocumentFragment::append</a> — Appends nodes after the last child node</li><li><a href="domdocumentfragment.appendxml.php">DOMDocumentFragment::appendXML</a> — Append raw XML data</li><li><a href="domdocumentfragment.construct.php">DOMDocumentFragment::__construct</a> — Constructs a DOMDocumentFragment object</li><li><a href="domdocumentfragment.prepend.php">DOMDocumentFragment::prepend</a> — Prepends nodes before the first child node</li><li><a href="domdocumentfragment.replacechildren.php">DOMDocumentFragment::replaceChildren</a> — Replace children in fragment</li></ul></li><li><a href="class.domdocumenttype.php">DOMDocumentType</a> — The DOMDocumentType class</li><li><a href="class.domelement.php">DOMElement</a> — The DOMElement class<ul class="chunklist chunklist_book chunklist_children"><li><a href="domelement.after.php">DOMElement::after</a> — Adds nodes after the element</li><li><a href="domelement.append.php">DOMElement::append</a> — Appends nodes after the last child node</li><li><a href="domelement.before.php">DOMElement::before</a> — Adds nodes before the element</li><li><a href="domelement.construct.php">DOMElement::__construct</a> — Creates a new DOMElement object</li><li><a href="domelement.getattribute.php">DOMElement::getAttribute</a> — Returns value of attribute</li><li><a href="domelement.getattributenames.php">DOMElement::getAttributeNames</a> — Get attribute names</li><li><a href="domelement.getattributenode.php">DOMElement::getAttributeNode</a> — Returns attribute node</li><li><a href="domelement.getattributenodens.php">DOMElement::getAttributeNodeNS</a> — Returns attribute node</li><li><a href="domelement.getattributens.php">DOMElement::getAttributeNS</a> — Returns value of attribute</li><li><a href="domelement.getelementsbytagname.php">DOMElement::getElementsByTagName</a> — Gets elements by tagname</li><li><a href="domelement.getelementsbytagnamens.php">DOMElement::getElementsByTagNameNS</a> — Get elements by namespaceURI and localName</li><li><a href="domelement.hasattribute.php">DOMElement::hasAttribute</a> — Checks to see if attribute exists</li><li><a href="domelement.hasattributens.php">DOMElement::hasAttributeNS</a> — Checks to see if attribute exists</li><li><a href="domelement.insertadjacentelement.php">DOMElement::insertAdjacentElement</a> — Insert adjacent element</li><li><a href="domelement.insertadjacenttext.php">DOMElement::insertAdjacentText</a> — Insert adjacent text</li><li><a href="domelement.prepend.php">DOMElement::prepend</a> — Prepends nodes before the first child node</li><li><a href="domelement.remove.php">DOMElement::remove</a> — Removes the element</li><li><a href="domelement.removeattribute.php">DOMElement::removeAttribute</a> — Removes attribute</li><li><a href="domelement.removeattributenode.php">DOMElement::removeAttributeNode</a> — Removes attribute</li><li><a href="domelement.removeattributens.php">DOMElement::removeAttributeNS</a> — Removes attribute</li><li><a href="domelement.replacechildren.php">DOMElement::replaceChildren</a> — Replace children in element</li><li><a href="domelement.replacewith.php">DOMElement::replaceWith</a> — Replaces the element with new nodes</li><li><a href="domelement.setattribute.php">DOMElement::setAttribute</a> — Adds new or modifies existing attribute</li><li><a href="domelement.setattributenode.php">DOMElement::setAttributeNode</a> — Adds new attribute node to element</li><li><a href="domelement.setattributenodens.php">DOMElement::setAttributeNodeNS</a> — Adds new attribute node to element</li><li><a href="domelement.setattributens.php">DOMElement::setAttributeNS</a> — Adds new attribute</li><li><a href="domelement.setidattribute.php">DOMElement::setIdAttribute</a> — Declares the attribute specified by name to be of type ID</li><li><a href="domelement.setidattributenode.php">DOMElement::setIdAttributeNode</a> — Declares the attribute specified by node to be of type ID</li><li><a href="domelement.setidattributens.php">DOMElement::setIdAttributeNS</a> — Declares the attribute specified by local name and namespace URI to be of type ID</li><li><a href="domelement.toggleattribute.php">DOMElement::toggleAttribute</a> — Toggle attribute</li></ul></li><li><a href="class.domentity.php">DOMEntity</a> — The DOMEntity class</li><li><a href="class.domentityreference.php">DOMEntityReference</a> — The DOMEntityReference class<ul class="chunklist chunklist_book chunklist_children"><li><a href="domentityreference.construct.php">DOMEntityReference::__construct</a> — Creates a new DOMEntityReference object</li></ul></li><li><a href="class.domexception.php">DOMException</a> — The DOMException / Dom\Exception class</li><li><a href="class.domimplementation.php">DOMImplementation</a> — The DOMImplementation class<ul class="chunklist chunklist_book chunklist_children"><li><a href="domimplementation.construct.php">DOMImplementation::__construct</a> — Creates a new DOMImplementation object</li><li><a href="domimplementation.createdocument.php">DOMImplementation::createDocument</a> — Creates a DOMDocument object of the specified type with its document element</li><li><a href="domimplementation.createdocumenttype.php">DOMImplementation::createDocumentType</a> — Creates an empty DOMDocumentType object</li><li><a href="domimplementation.hasfeature.php">DOMImplementation::hasFeature</a> — Test if the DOM implementation implements a specific feature</li></ul></li><li><a href="class.domnamednodemap.php">DOMNamedNodeMap</a> — The DOMNamedNodeMap class<ul class="chunklist chunklist_book chunklist_children"><li><a href="domnamednodemap.count.php">DOMNamedNodeMap::count</a> — Get number of nodes in the map</li><li><a href="domnamednodemap.getiterator.php">DOMNamedNodeMap::getIterator</a> — Retrieve an external iterator</li><li><a href="domnamednodemap.getnameditem.php">DOMNamedNodeMap::getNamedItem</a> — Retrieves a node specified by name</li><li><a href="domnamednodemap.getnameditemns.php">DOMNamedNodeMap::getNamedItemNS</a> — Retrieves a node specified by local name and namespace URI</li><li><a href="domnamednodemap.item.php">DOMNamedNodeMap::item</a> — Retrieves a node specified by index</li></ul></li><li><a href="class.domnamespacenode.php">DOMNameSpaceNode</a> — The DOMNameSpaceNode class<ul class="chunklist chunklist_book chunklist_children"><li><a href="domnamespacenode.sleep.php">DOMNameSpaceNode::__sleep</a> — Forbids serialization unless serialization methods are implemented in a subclass</li><li><a href="domnamespacenode.wakeup.php">DOMNameSpaceNode::__wakeup</a> — Forbids unserialization unless unserialization methods are implemented in a subclass</li></ul></li><li><a href="class.domnode.php">DOMNode</a> — The DOMNode class<ul class="chunklist chunklist_book chunklist_children"><li><a href="domnode.appendchild.php">DOMNode::appendChild</a> — Adds new child at the end of the children</li><li><a href="domnode.c14n.php">DOMNode::C14N</a> — Canonicalize nodes to a string</li><li><a href="domnode.c14nfile.php">DOMNode::C14NFile</a> — Canonicalize nodes to a file</li><li><a href="domnode.clonenode.php">DOMNode::cloneNode</a> — Clones a node</li><li><a href="domnode.comparedocumentposition.php">DOMNode::compareDocumentPosition</a> — Compares the position of two nodes</li><li><a href="domnode.contains.php">DOMNode::contains</a> — Checks if node contains other node</li><li><a href="domnode.getlineno.php">DOMNode::getLineNo</a> — Get line number for a node</li><li><a href="domnode.getnodepath.php">DOMNode::getNodePath</a> — Get an XPath for a node</li><li><a href="domnode.getrootnode.php">DOMNode::getRootNode</a> — Get root node</li><li><a href="domnode.hasattributes.php">DOMNode::hasAttributes</a> — Checks if node has attributes</li><li><a href="domnode.haschildnodes.php">DOMNode::hasChildNodes</a> — Checks if node has children</li><li><a href="domnode.insertbefore.php">DOMNode::insertBefore</a> — Adds a new child before a reference node</li><li><a href="domnode.isdefaultnamespace.php">DOMNode::isDefaultNamespace</a> — Checks if the specified namespaceURI is the default namespace or not</li><li><a href="domnode.isequalnode.php">DOMNode::isEqualNode</a> — Checks that both nodes are equal</li><li><a href="domnode.issamenode.php">DOMNode::isSameNode</a> — Indicates if two nodes are the same node</li><li><a href="domnode.issupported.php">DOMNode::isSupported</a> — Checks if feature is supported for specified version</li><li><a href="domnode.lookupnamespaceuri.php">DOMNode::lookupNamespaceURI</a> — Gets the namespace URI of the node based on the prefix</li><li><a href="domnode.lookupprefix.php">DOMNode::lookupPrefix</a> — Gets the namespace prefix of the node based on the namespace URI</li><li><a href="domnode.normalize.php">DOMNode::normalize</a> — Normalizes the node</li><li><a href="domnode.removechild.php">DOMNode::removeChild</a> — Removes child from list of children</li><li><a href="domnode.replacechild.php">DOMNode::replaceChild</a> — Replaces a child</li><li><a href="domnode.sleep.php">DOMNode::__sleep</a> — Forbids serialization unless serialization methods are implemented in a subclass</li><li><a href="domnode.wakeup.php">DOMNode::__wakeup</a> — Forbids unserialization unless unserialization methods are implemented in a subclass</li></ul></li><li><a href="class.domnodelist.php">DOMNodeList</a> — The DOMNodeList class<ul class="chunklist chunklist_book chunklist_children"><li><a href="domnodelist.count.php">DOMNodeList::count</a> — Get number of nodes in the list</li><li><a href="domnodelist.getiterator.php">DOMNodeList::getIterator</a> — Retrieve an external iterator</li><li><a href="domnodelist.item.php">DOMNodeList::item</a> — Retrieves a node specified by index</li></ul></li><li><a href="class.domnotation.php">DOMNotation</a> — The DOMNotation class</li><li><a href="class.domparentnode.php">DOMParentNode</a> — The DOMParentNode interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="domparentnode.append.php">DOMParentNode::append</a> — Appends nodes after the last child node</li><li><a href="domparentnode.prepend.php">DOMParentNode::prepend</a> — Prepends nodes before the first child node</li><li><a href="domparentnode.replacechildren.php">DOMParentNode::replaceChildren</a> — Replace children in node</li></ul></li><li><a href="class.domprocessinginstruction.php">DOMProcessingInstruction</a> — The DOMProcessingInstruction class<ul class="chunklist chunklist_book chunklist_children"><li><a href="domprocessinginstruction.construct.php">DOMProcessingInstruction::__construct</a> — Creates a new DOMProcessingInstruction object</li></ul></li><li><a href="class.domtext.php">DOMText</a> — The DOMText class<ul class="chunklist chunklist_book chunklist_children"><li><a href="domtext.construct.php">DOMText::__construct</a> — Creates a new DOMText object</li><li><a href="domtext.iselementcontentwhitespace.php">DOMText::isElementContentWhitespace</a> — Returns whether this text node contains whitespace in element content</li><li><a href="domtext.iswhitespaceinelementcontent.php">DOMText::isWhitespaceInElementContent</a> — Indicates whether this text node contains whitespace</li><li><a href="domtext.splittext.php">DOMText::splitText</a> — Breaks this node into two nodes at the specified offset</li></ul></li><li><a href="class.domxpath.php">DOMXPath</a> — The DOMXPath class<ul class="chunklist chunklist_book chunklist_children"><li><a href="domxpath.construct.php">DOMXPath::__construct</a> — Creates a new DOMXPath object</li><li><a href="domxpath.evaluate.php">DOMXPath::evaluate</a> — Evaluates the given XPath expression and returns a typed result if possible</li><li><a href="domxpath.query.php">DOMXPath::query</a> — Evaluates the given XPath expression</li><li><a href="domxpath.quote.php">DOMXPath::quote</a> — Quotes a string for use in an XPath expression</li><li><a href="domxpath.registernamespace.php">DOMXPath::registerNamespace</a> — Registers the namespace with the DOMXPath object</li><li><a href="domxpath.registerphpfunctionns.php">DOMXPath::registerPhpFunctionNS</a> — Register a PHP functions as namespaced XPath function</li><li><a href="domxpath.registerphpfunctions.php">DOMXPath::registerPhpFunctions</a> — Register PHP functions as XPath functions</li></ul></li><li><a href="enum.dom-adjacentposition.php">Dom\AdjacentPosition</a> — The Dom\AdjacentPosition Enum</li><li><a href="class.dom-attr.php">Dom\Attr</a> — The Dom\Attr class<ul class="chunklist chunklist_book chunklist_children"><li><a href="dom-attr.isid.php">Dom\Attr::isId</a> — Checks if attribute is a defined ID</li><li><a href="dom-attr.rename.php">Dom\Attr::rename</a> — Changes the qualified name or namespace of an attribute</li></ul></li><li><a href="class.dom-cdatasection.php">Dom\CDATASection</a> — The Dom\CDATASection class</li><li><a href="class.dom-characterdata.php">Dom\CharacterData</a> — The Dom\CharacterData class<ul class="chunklist chunklist_book chunklist_children"><li><a href="dom-characterdata.after.php">Dom\CharacterData::after</a> — Adds nodes after the character data</li><li><a href="dom-characterdata.appenddata.php">Dom\CharacterData::appendData</a> — Append the string to the end of the character data of the node</li><li><a href="dom-characterdata.before.php">Dom\CharacterData::before</a> — Adds nodes before the character data</li><li><a href="dom-characterdata.deletedata.php">Dom\CharacterData::deleteData</a> — Remove a range of characters from the character data</li><li><a href="dom-characterdata.insertdata.php">Dom\CharacterData::insertData</a> — Insert a string at the specified UTF-8 codepoint offset</li><li><a href="dom-characterdata.remove.php">Dom\CharacterData::remove</a> — Removes the character data node</li><li><a href="dom-characterdata.replacedata.php">Dom\CharacterData::replaceData</a> — Replace a substring within the character data</li><li><a href="dom-characterdata.replacewith.php">Dom\CharacterData::replaceWith</a> — Replaces the character data with new nodes</li><li><a href="dom-characterdata.substringdata.php">Dom\CharacterData::substringData</a> — Extracts a range of data from the character data</li></ul></li><li><a href="class.dom-childnode.php">Dom\ChildNode</a> — The Dom\ChildNode interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="dom-childnode.after.php">Dom\ChildNode::after</a> — Adds nodes after the node</li><li><a href="dom-childnode.before.php">Dom\ChildNode::before</a> — Adds nodes before the node</li><li><a href="dom-childnode.remove.php">Dom\ChildNode::remove</a> — Removes the node</li><li><a href="dom-childnode.replacewith.php">Dom\ChildNode::replaceWith</a> — Replaces the node with new nodes</li></ul></li><li><a href="class.dom-comment.php">Dom\Comment</a> — The Dom\Comment class</li><li><a href="class.dom-document.php">Dom\Document</a> — The Dom\Document class</li><li><a href="class.dom-documentfragment.php">Dom\DocumentFragment</a> — The Dom\DocumentFragment class</li><li><a href="class.dom-documenttype.php">Dom\DocumentType</a> — The Dom\DocumentType class</li><li><a href="class.dom-dtdnamednodemap.php">Dom\DtdNamedNodeMap</a> — The Dom\DtdNamedNodeMap class</li><li><a href="class.dom-element.php">Dom\Element</a> — The Dom\Element class</li><li><a href="class.dom-entity.php">Dom\Entity</a> — The Dom\Entity class</li><li><a href="class.dom-entityreference.php">Dom\EntityReference</a> — The Dom\EntityReference class</li><li><a href="class.dom-htmlcollection.php">Dom\HTMLCollection</a> — The Dom\HTMLCollection class</li><li><a href="class.dom-htmldocument.php">Dom\HTMLDocument</a> — The Dom\HTMLDocument class<ul class="chunklist chunklist_book chunklist_children"><li><a href="dom-htmldocument.createempty.php">Dom\HTMLDocument::createEmpty</a> — Creates an empty HTML document</li><li><a href="dom-htmldocument.createfromfile.php">Dom\HTMLDocument::createFromFile</a> — Parses an HTML document from a file</li><li><a href="dom-htmldocument.createfromstring.php">Dom\HTMLDocument::createFromString</a> — Parses an HTML document from a string</li><li><a href="dom-htmldocument.savehtml.php">Dom\HTMLDocument::saveHtml</a> — Serializes the document as an HTML string</li><li><a href="dom-htmldocument.savehtmlfile.php">Dom\HTMLDocument::saveHtmlFile</a> — Serializes the document as an HTML file</li><li><a href="dom-htmldocument.savexml.php">Dom\HTMLDocument::saveXml</a> — Serializes the document as an XML string</li><li><a href="dom-htmldocument.savexmlfile.php">Dom\HTMLDocument::saveXmlFile</a> — Serializes the document as an XML file</li></ul></li><li><a href="class.dom-htmlelement.php">Dom\HTMLElement</a> — The Dom\HTMLElement class</li><li><a href="class.dom-implementation.php">Dom\Implementation</a> — The Dom\Implementation class</li><li><a href="class.dom-namednodemap.php">Dom\NamedNodeMap</a> — The Dom\NamedNodeMap class</li><li><a href="class.dom-namespaceinfo.php">Dom\NamespaceInfo</a> — The Dom\NamespaceInfo class</li><li><a href="class.dom-node.php">Dom\Node</a> — The Dom\Node class</li><li><a href="class.dom-nodelist.php">Dom\NodeList</a> — The Dom\NodeList class</li><li><a href="class.dom-notation.php">Dom\Notation</a> — The Dom\Notation class</li><li><a href="class.dom-parentnode.php">Dom\ParentNode</a> — The Dom\ParentNode interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="dom-parentnode.append.php">Dom\ParentNode::append</a> — Appends nodes after the last child node</li><li><a href="dom-parentnode.prepend.php">Dom\ParentNode::prepend</a> — Prepends nodes before the first child node</li><li><a href="dom-parentnode.queryselector.php">Dom\ParentNode::querySelector</a> — Returns the first element that matches the CSS selectors</li><li><a href="dom-parentnode.queryselectorall.php">Dom\ParentNode::querySelectorAll</a> — Returns a collection of elements that match the CSS selectors</li><li><a href="dom-parentnode.replacechildren.php">Dom\ParentNode::replaceChildren</a> — Replace children in node</li></ul></li><li><a href="class.dom-processinginstruction.php">Dom\ProcessingInstruction</a> — The Dom\ProcessingInstruction class</li><li><a href="class.dom-text.php">Dom\Text</a> — The Dom\Text class<ul class="chunklist chunklist_book chunklist_children"><li><a href="dom-text.splittext.php">Dom\Text::splitText</a> — Breaks this node into two nodes at the specified offset</li></ul></li><li><a href="class.dom-tokenlist.php">Dom\TokenList</a> — The Dom\TokenList class<ul class="chunklist chunklist_book chunklist_children"><li><a href="dom-tokenlist.add.php">Dom\TokenList::add</a> — Adds the given tokens to the list</li><li><a href="dom-tokenlist.contains.php">Dom\TokenList::contains</a> — Returns whether the list contains a given token</li><li><a href="dom-tokenlist.count.php">Dom\TokenList::count</a> — Returns the number of tokens in the list</li><li><a href="dom-tokenlist.getiterator.php">Dom\TokenList::getIterator</a> — Returns an iterator over the token list</li><li><a href="dom-tokenlist.item.php">Dom\TokenList::item</a> — Returns a token from the list</li><li><a href="dom-tokenlist.remove.php">Dom\TokenList::remove</a> — Removes the given tokens from the list</li><li><a href="dom-tokenlist.replace.php">Dom\TokenList::replace</a> — Replaces a token in the list with another one</li><li><a href="dom-tokenlist.supports.php">Dom\TokenList::supports</a> — Returns whether the given token is supported</li><li><a href="dom-tokenlist.toggle.php">Dom\TokenList::toggle</a> — Toggles the presence of a token in the list</li></ul></li><li><a href="class.dom-xmldocument.php">Dom\XMLDocument</a> — The Dom\XMLDocument class</li><li><a href="class.dom-xpath.php">Dom\XPath</a> — The Dom\XPath class</li><li><a href="ref.dom.php">DOM Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.dom-import-simplexml.php">dom_import_simplexml</a> — Gets a DOMAttr or DOMElement object from a
   SimpleXMLElement object</li><li><a href="function.dom-ns-import-simplexml.php">Dom\import_simplexml</a> — Gets a Dom\Attr or Dom\Element object from a
   SimpleXMLElement object</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.dom%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.dom&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.dom.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">38 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="84771">  <div class="votes">
    <div id="Vu84771">
    <a href="/manual/vote-note.php?id=84771&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84771">
    <a href="/manual/vote-note.php?id=84771&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84771" title="54% like this...">
    12
    </div>
  </div>
  <a href="#84771" class="name">
  <strong class="user"><em>tobiasz.cudnik[at]gmail.com</em></strong></a><a class="genanchor" href="#84771"> &para;</a><div class="date" title="2008-07-29 06:47"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84771">
<div class="phpcode"><code><span class="html">If you need simple interface to DOM check out phpQuery - jQuery port to PHP:<br /><a href="http://code.google.com/p/phpquery/" rel="nofollow" target="_blank">http://code.google.com/p/phpquery/</a><br /><br />It uses CSS selectors to fetch nodes.<br />Here's example how it works:<br /><span class="default">&lt;?php<br /></span><span class="comment">// just one file to include<br /></span><span class="keyword">require(</span><span class="string">'phpQuery/phpQuery.php'</span><span class="keyword">);<br /><br /></span><span class="default">$html </span><span class="keyword">= </span><span class="string">'<br />&lt;div&gt;<br />    mydiv<br />    &lt;ul&gt;<br />        &lt;li&gt;1&lt;/li&gt;<br />        &lt;li&gt;2&lt;/li&gt;<br />        &lt;li&gt;3&lt;/li&gt;<br />    &lt;/ul&gt;<br />&lt;/div&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">// intialize new DOM from markup<br /></span><span class="default">phpQuery</span><span class="keyword">::</span><span class="default">newDocument</span><span class="keyword">(</span><span class="default">$markup</span><span class="keyword">)<br />    -&gt;</span><span class="default">find</span><span class="keyword">(</span><span class="string">'ul &gt; li'</span><span class="keyword">)<br />        -&gt;</span><span class="default">addClass</span><span class="keyword">(</span><span class="string">'my-new-class'</span><span class="keyword">)<br />        -&gt;</span><span class="default">filter</span><span class="keyword">(</span><span class="string">':last'</span><span class="keyword">)<br />            -&gt;</span><span class="default">addClass</span><span class="keyword">(</span><span class="string">'last-li'</span><span class="keyword">);<br /><br /></span><span class="comment">// query all unordered lists in last used DOM<br /></span><span class="default">pq</span><span class="keyword">(</span><span class="string">'ul'</span><span class="keyword">)-&gt;</span><span class="default">insertAfter</span><span class="keyword">(</span><span class="string">'div'</span><span class="keyword">);<br /><br /></span><span class="comment">// iterate all LIs from last used DOM<br /></span><span class="keyword">foreach(</span><span class="default">pq</span><span class="keyword">(</span><span class="string">'li'</span><span class="keyword">) as </span><span class="default">$li</span><span class="keyword">) {<br />    </span><span class="comment">// iteration returns plain DOM nodes, not phpQuery objects<br />    </span><span class="default">pq</span><span class="keyword">(</span><span class="default">$li</span><span class="keyword">)-&gt;</span><span class="default">addClass</span><span class="keyword">(</span><span class="string">'my-second-new-class'</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// same as pq('anything')-&gt;htmlOuter()<br />// but on document root (returns doctype etc)<br /></span><span class="keyword">print </span><span class="default">phpQuery</span><span class="keyword">::</span><span class="default">getDocument</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />It uses DOM extension and XPath so it works only in PHP5.</span></code></div>
  </div>
 </div>
  <div class="note" id="115016">  <div class="votes">
    <div id="Vu115016">
    <a href="/manual/vote-note.php?id=115016&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115016">
    <a href="/manual/vote-note.php?id=115016&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115016" title="61% like this...">
    3
    </div>
  </div>
  <a href="#115016" class="name">
  <strong class="user"><em>super dot puma at gmail dot com</em></strong></a><a class="genanchor" href="#115016"> &para;</a><div class="date" title="2014-05-13 04:57"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115016">
<div class="phpcode"><code><span class="html">If  you want to print the DOM XML file content, you can use the next code:<br /><br />$doc = new DOMDocument();<br />$doc-&gt;load($xmlFileName);<br />echo "&lt;br&gt;" . $doc-&gt;documentURI;<br />$x = $doc-&gt;documentElement;<br />getNodeContent($x-&gt;childNodes, 0);<br /><br />function getNodeContent($nodes, $level){<br />    foreach ($nodes AS $item) {<br />    //  print "&lt;br&gt;&lt;br&gt;TIPO: " . $item-&gt;nodeType ;<br />      printValues($item, $level);<br />      if ($item-&gt;nodeType == 1) { //DOMElement<br />          foreach ($item-&gt;attributes AS $itemAtt) {<br />              printValues($itemAtt, $level+3);<br />          }<br />          if($item-&gt;childNodes || $item-&gt;childNodes-&gt;lenth &gt; 0) {<br />              getNodeContent($item-&gt;childNodes, $level+5);<br />          }<br />      }<br />    }<br />}<br /><br />function printValues($item, $level){<br />    if ($item-&gt;nodeType == 1) { //DOMElement<br />        printLevel($level);<br />        print $item-&gt;nodeName . " = " . $item-&gt;nodeValue;<br />    }<br />    if ($item-&gt;nodeType == 2) { //DOMAttr<br />        printLevel($level);<br />        print $item-&gt;name . " = " . $item-&gt;value ;<br />    }<br />    if ($item-&gt;nodeType == 3) { //DOMText<br />      if ($item-&gt;isWhitespaceInElementContent() == false){<br />        printLevel($level);<br />        print $item-&gt;wholeText ;<br />      }<br />    }<br />}<br /><br />function printLevel($level)<br />{<br />    print "&lt;br&gt;";<br />    if ($level == 0) {<br />        print "&lt;br&gt;";<br />    }<br />    for($i=0; $i &lt; $level; $i++) {<br />        print "-";<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="57274">  <div class="votes">
    <div id="Vu57274">
    <a href="/manual/vote-note.php?id=57274&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57274">
    <a href="/manual/vote-note.php?id=57274&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57274" title="62% like this...">
    2
    </div>
  </div>
  <a href="#57274" class="name">
  <strong class="user"><em>pes_cz</em></strong></a><a class="genanchor" href="#57274"> &para;</a><div class="date" title="2005-09-29 12:32"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom57274">
<div class="phpcode"><code><span class="html">When I tried to parse my XHTML Strict files with DOM extension, it couldn't understand xhtml entities (like &amp;copy;). I found post about it here (14-Jul-2005 09:05) which adviced to add resolveExternals = true, but it was very slow. There was some small note about xml catalogs but without any glue. Here it is:<br /><br />XML catalogs is something like cache. Download all needed dtd's to /etc/xml, edit file /etc/xml/catalog and add this line: &lt;public publicId="-//W3C//DTD XHTML 1.0 Strict//EN" uri="file:///etc/xml/xhtml1-strict.dtd" /&gt;<br /><br />Thats all. Thanks to <a href="http://www.whump.com/moreLikeThis/link/03815" rel="nofollow" target="_blank">http://www.whump.com/moreLikeThis/link/03815</a></span></code></div>
  </div>
 </div>
  <div class="note" id="60188">  <div class="votes">
    <div id="Vu60188">
    <a href="/manual/vote-note.php?id=60188&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60188">
    <a href="/manual/vote-note.php?id=60188&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60188" title="60% like this...">
    2
    </div>
  </div>
  <a href="#60188" class="name">
  <strong class="user"><em>simlee at indiana dot edu</em></strong></a><a class="genanchor" href="#60188"> &para;</a><div class="date" title="2005-12-29 12:16"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60188">
<div class="phpcode"><code><span class="html">The project I'm currently working on uses XPaths to dynamically navigate through chunks of an XML file.  I couldn't find any PHP code on the net that would build the XPath to a node for me, so I wrote my own function.  Turns out it wasn't as hard as I thought it might be (yay recursion), though it does entail using some PHP shenanigans...  <br /><br />Hopefully it'll save someone else the trouble of reinventing this wheel. <br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">getNodeXPath</span><span class="keyword">( </span><span class="default">$node </span><span class="keyword">) {<br />        </span><span class="comment">// REMEMBER THAT XPATHS USE BASE-1 INSTEAD OF BASE-0!!!<br />        <br />        // Get the index for the current node by looping through the siblings.<br />        </span><span class="default">$parentNode </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">;<br />        if( </span><span class="default">$parentNode </span><span class="keyword">!= </span><span class="default">null </span><span class="keyword">) {<br />            </span><span class="default">$nodeIndex </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />            do {<br />                </span><span class="default">$testNode </span><span class="keyword">= </span><span class="default">$parentNode</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">( </span><span class="default">$nodeIndex </span><span class="keyword">);<br />                </span><span class="default">$nodeName </span><span class="keyword">= </span><span class="default">$testNode</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">;<br />                </span><span class="default">$nodeIndex</span><span class="keyword">++;<br />                <br />                </span><span class="comment">// PHP trickery!  Here we create a counter based on the node <br />                //  name of the test node to use in the XPath.<br />                </span><span class="keyword">if( !isset( $</span><span class="default">$nodeName </span><span class="keyword">) ) $</span><span class="default">$nodeName </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />                else $</span><span class="default">$nodeName</span><span class="keyword">++;<br />                <br />                </span><span class="comment">// Failsafe return value.<br />                </span><span class="keyword">if( </span><span class="default">$nodeIndex </span><span class="keyword">&gt; </span><span class="default">$parentNode</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">-&gt;</span><span class="default">length </span><span class="keyword">) return( </span><span class="string">"/" </span><span class="keyword">);<br />            } while( !</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">isSameNode</span><span class="keyword">( </span><span class="default">$testNode </span><span class="keyword">) );<br />            <br />            </span><span class="comment">// Recursively get the XPath for the parent.<br />            </span><span class="keyword">return( </span><span class="default">getNodeXPath</span><span class="keyword">( </span><span class="default">$parentNode </span><span class="keyword">) . </span><span class="string">"/</span><span class="keyword">{</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">}</span><span class="string">[</span><span class="keyword">{$</span><span class="default">$nodeName</span><span class="keyword">}</span><span class="string">]" </span><span class="keyword">);<br />        } else {<br />            </span><span class="comment">// Hit the root node!  Note that the slash is added when <br />            //  building the XPath, so we return just an empty string.<br />            </span><span class="keyword">return( </span><span class="string">"" </span><span class="keyword">);<br />        }<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="58056">  <div class="votes">
    <div id="Vu58056">
    <a href="/manual/vote-note.php?id=58056&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58056">
    <a href="/manual/vote-note.php?id=58056&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58056" title="60% like this...">
    2
    </div>
  </div>
  <a href="#58056" class="name">
  <strong class="user"><em>toby at tobiasly dot com</em></strong></a><a class="genanchor" href="#58056"> &para;</a><div class="date" title="2005-10-22 11:08"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58056">
<div class="phpcode"><code><span class="html">This module is not included by default either in the CentOS 4 "centosplus" repository. For those using PHP5 on CentOS 4, a simple "yum --enablerepo=centosplus install php-xml" will do the trick (this will install both the XML and DOM modules).</span></code></div>
  </div>
 </div>
  <div class="note" id="73875">  <div class="votes">
    <div id="Vu73875">
    <a href="/manual/vote-note.php?id=73875&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73875">
    <a href="/manual/vote-note.php?id=73875&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73875" title="56% like this...">
    3
    </div>
  </div>
  <a href="#73875" class="name">
  <strong class="user"><em>Yanik &lt;clonyara(at)ahoo(dot)com&gt;</em></strong></a><a class="genanchor" href="#73875"> &para;</a><div class="date" title="2007-03-13 11:40"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73875">
<div class="phpcode"><code><span class="html">I hate DOM model !<br />so I wrote dom2array simple function (simple for use):<br /><br />function dom2array($node) {<br />  $res = array();<br />  print $node-&gt;nodeType.'&lt;br/&gt;';<br />  if($node-&gt;nodeType == XML_TEXT_NODE){<br />      $res = $node-&gt;nodeValue;<br />  }<br />  else{<br />      if($node-&gt;hasAttributes()){<br />          $attributes = $node-&gt;attributes;<br />          if(!is_null($attributes)){<br />              $res['@attributes'] = array();<br />              foreach ($attributes as $index=&gt;$attr) {<br />                  $res['@attributes'][$attr-&gt;name] = $attr-&gt;value;<br />              }<br />          }<br />      }<br />      if($node-&gt;hasChildNodes()){<br />          $children = $node-&gt;childNodes;<br />          for($i=0;$i&lt;$children-&gt;length;$i++){<br />              $child = $children-&gt;item($i);<br />              $res[$child-&gt;nodeName] = dom2array($child);<br />          }<br />      }<br />  }<br />  return $res;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="54893">  <div class="votes">
    <div id="Vu54893">
    <a href="/manual/vote-note.php?id=54893&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54893">
    <a href="/manual/vote-note.php?id=54893&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54893" title="57% like this...">
    2
    </div>
  </div>
  <a href="#54893" class="name">
  <strong class="user"><em>aidan at php dot net</em></strong></a><a class="genanchor" href="#54893"> &para;</a><div class="date" title="2005-07-18 08:27"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54893">
<div class="phpcode"><code><span class="html">When dealing with validation or loading, the output errors can be quite annoying.<br /><br />PHP 5.1 introduces libxml_get_errors().<br /><br /><a href="http://php.net/libxml_get_errors" rel="nofollow" target="_blank">http://php.net/libxml_get_errors</a></span></code></div>
  </div>
 </div>
  <div class="note" id="54909">  <div class="votes">
    <div id="Vu54909">
    <a href="/manual/vote-note.php?id=54909&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54909">
    <a href="/manual/vote-note.php?id=54909&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54909" title="55% like this...">
    2
    </div>
  </div>
  <a href="#54909" class="name">
  <strong class="user"><em>aidan at php dot net</em></strong></a><a class="genanchor" href="#54909"> &para;</a><div class="date" title="2005-07-19 06:04"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54909">
<div class="phpcode"><code><span class="html">As of PHP 5.1, libxml options may be set using constants rather than the use of proprietary DomDocument properties.<br /><br />DomDocument-&gt;resolveExternals is equivilant to setting<br />LIBXML_DTDLOAD<br />LIBXML_DTDATTR<br /><br />DomDocument-&gt;validateOnParse is equivilant to setting<br />LIBXML_DTDLOAD<br />LIBXML_DTDVALID<br /><br />PHP 5.1 users are encouraged to use the new constants. <br /><br />Example:<br /><br />DomDocument-&gt;load($file, LIBXML_DTDLOAD|LIBXML_DTDATTR);<br /><br />DomDocument-&gt;load($file, LIBXML_DTDLOAD|LIBXML_DTDVALID);</span></code></div>
  </div>
 </div>
  <div class="note" id="93717">  <div class="votes">
    <div id="Vu93717">
    <a href="/manual/vote-note.php?id=93717&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93717">
    <a href="/manual/vote-note.php?id=93717&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93717" title="53% like this...">
    2
    </div>
  </div>
  <a href="#93717" class="name">
  <strong class="user"><em>sweisman at pobox dot com</em></strong></a><a class="genanchor" href="#93717"> &para;</a><div class="date" title="2009-09-24 01:19"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93717">
<div class="phpcode"><code><span class="html">I had problems with the dom2array_full function by "nospam at ya dot ru". Here's my function, which works correctly for my project, and might work for yours:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">dom_to_array</span><span class="keyword">(</span><span class="default">$root</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$result </span><span class="keyword">= array();
<br />
<br />    if (</span><span class="default">$root</span><span class="keyword">-&gt;</span><span class="default">hasAttributes</span><span class="keyword">())
<br />    {
<br />        </span><span class="default">$attrs </span><span class="keyword">= </span><span class="default">$root</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">;
<br />
<br />        foreach (</span><span class="default">$attrs </span><span class="keyword">as </span><span class="default">$i </span><span class="keyword">=&gt; </span><span class="default">$attr</span><span class="keyword">)
<br />            </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">] = </span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">;
<br />    }
<br />
<br />    </span><span class="default">$children </span><span class="keyword">= </span><span class="default">$root</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">;
<br />
<br />    if (</span><span class="default">$children</span><span class="keyword">-&gt;</span><span class="default">length </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$child </span><span class="keyword">= </span><span class="default">$children</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);
<br />
<br />        if (</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeType </span><span class="keyword">== </span><span class="default">XML_TEXT_NODE</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$result</span><span class="keyword">[</span><span class="string">'_value'</span><span class="keyword">] = </span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">;
<br />
<br />            if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">) == </span><span class="default">1</span><span class="keyword">)
<br />                return </span><span class="default">$result</span><span class="keyword">[</span><span class="string">'_value'</span><span class="keyword">];
<br />            else
<br />                return </span><span class="default">$result</span><span class="keyword">;
<br />        }
<br />    }
<br />
<br />    </span><span class="default">$group </span><span class="keyword">= array();
<br />
<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$children</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)
<br />    {
<br />        </span><span class="default">$child </span><span class="keyword">= </span><span class="default">$children</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);
<br />
<br />        if (!isset(</span><span class="default">$result</span><span class="keyword">[</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">]))
<br />            </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">] = </span><span class="default">dom_to_array</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">);
<br />        else
<br />        {
<br />            if (!isset(</span><span class="default">$group</span><span class="keyword">[</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">]))
<br />            {
<br />                </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">];
<br />                </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">] = array(</span><span class="default">$tmp</span><span class="keyword">);
<br />                </span><span class="default">$group</span><span class="keyword">[</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;
<br />            }
<br />
<br />            </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">][] = </span><span class="default">dom_to_array</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">);
<br />        }
<br />    }
<br />
<br />    return </span><span class="default">$result</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93637">  <div class="votes">
    <div id="Vu93637">
    <a href="/manual/vote-note.php?id=93637&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93637">
    <a href="/manual/vote-note.php?id=93637&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93637" title="54% like this...">
    1
    </div>
  </div>
  <a href="#93637" class="name">
  <strong class="user"><em>odessa131 at aol dot nospam dot com</em></strong></a><a class="genanchor" href="#93637"> &para;</a><div class="date" title="2009-09-20 06:49"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93637">
<div class="phpcode"><code><span class="html">I had the hardest time updating a complex XML document. Here's a quick example on how to do it.<br /><br /><span class="default">&lt;?php <br /><br /></span><span class="comment">// Load the XML from a file.<br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="string">"a2062.xml"</span><span class="keyword">; </span><span class="comment">// This is an XFDL form previously unencoded and ungzipped.<br /></span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">preserveWhiteSpace </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">Load</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br /><br /></span><span class="comment">// Create an XPath query.<br />// Note: you must define the namespace if the XML document has defined namespaces.<br /></span><span class="default">$xpath </span><span class="keyword">= new </span><span class="default">DOMXPath</span><span class="keyword">(</span><span class="default">$dom</span><span class="keyword">);<br /></span><span class="default">$xpath</span><span class="keyword">-&gt;</span><span class="default">registerNamespace</span><span class="keyword">(</span><span class="string">'xfdl'</span><span class="keyword">, </span><span class="string">"<a href="http://www.PureEdge.com/XFDL/6.5" rel="nofollow" target="_blank">http://www.PureEdge.com/XFDL/6.5</a>"</span><span class="keyword">);<br /><br /></span><span class="comment">// Locate the value for the first Item Description field.<br /></span><span class="default">$query </span><span class="keyword">= </span><span class="string">"//xfdl:page/xfdl:field[@sid='ITEMDESA']/xfdl:value"</span><span class="keyword">;<br /></span><span class="default">$nodeList </span><span class="keyword">= </span><span class="default">$xpath</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">);<br /><br /></span><span class="default">$nodeList</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">)-&gt;</span><span class="default">nodeValue </span><span class="keyword">= </span><span class="string">"This is the text in the value node of the first Item Description field inside the DA 2062 PureEdge form."</span><span class="keyword">;<br /><br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">save</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />I hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="87471">  <div class="votes">
    <div id="Vu87471">
    <a href="/manual/vote-note.php?id=87471&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87471">
    <a href="/manual/vote-note.php?id=87471&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87471" title="53% like this...">
    1
    </div>
  </div>
  <a href="#87471" class="name">
  <strong class="user"><em>fantasyman3000 at gmail dot com</em></strong></a><a class="genanchor" href="#87471"> &para;</a><div class="date" title="2008-12-06 05:37"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87471">
<div class="phpcode"><code><span class="html">In response to "simlee at indiana dot edu",<br />- First of all thanks for sharing your funciton.<br />- It didn't work for me so i rewrite it from scratch using different method.<br /><br />Here is the new version, hope it helps someone : <br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br />* result sample : /html[1]/body[1]/span[1]/fieldset[1]/div[1]<br />* @return string<br />*/<br /></span><span class="keyword">function </span><span class="default">getNodeXPath</span><span class="keyword">( </span><span class="default">$node </span><span class="keyword">) {    <br />    </span><span class="default">$result</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br />    while (</span><span class="default">$parentNode </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">) {<br />        </span><span class="default">$nodeIndex</span><span class="keyword">=-</span><span class="default">1</span><span class="keyword">;<br />        </span><span class="default">$nodeTagIndex</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />        do {<br />            </span><span class="default">$nodeIndex</span><span class="keyword">++;<br />            </span><span class="default">$testNode </span><span class="keyword">= </span><span class="default">$parentNode</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">( </span><span class="default">$nodeIndex </span><span class="keyword">);<br />                <br />            if (</span><span class="default">$testNode</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">==</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">nodeName </span><span class="keyword">and </span><span class="default">$testNode</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">-&gt;</span><span class="default">isSameNode</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">) and </span><span class="default">$testNode</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">) {<br />                </span><span class="comment">//echo "{$testNode-&gt;parentNode-&gt;nodeName}-{$testNode-&gt;nodeName}-{}&lt;br/&gt;";<br />                </span><span class="default">$nodeTagIndex</span><span class="keyword">++;<br />            }<br />                <br />        } while (!</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">isSameNode</span><span class="keyword">(</span><span class="default">$testNode</span><span class="keyword">));<br /><br />        </span><span class="default">$result</span><span class="keyword">=</span><span class="string">"/</span><span class="keyword">{</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">}</span><span class="string">[</span><span class="keyword">{</span><span class="default">$nodeTagIndex</span><span class="keyword">}</span><span class="string">]"</span><span class="keyword">.</span><span class="default">$result</span><span class="keyword">;<br />        </span><span class="default">$node</span><span class="keyword">=</span><span class="default">$parentNode</span><span class="keyword">;<br />    };<br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />By Sina.Salek.ws</span></code></div>
  </div>
 </div>
  <div class="note" id="59734">  <div class="votes">
    <div id="Vu59734">
    <a href="/manual/vote-note.php?id=59734&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59734">
    <a href="/manual/vote-note.php?id=59734&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59734" title="54% like this...">
    1
    </div>
  </div>
  <a href="#59734" class="name">
  <strong class="user"><em>johanwthijs-at-hotmail-dot-com</em></strong></a><a class="genanchor" href="#59734"> &para;</a><div class="date" title="2005-12-14 06:25"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59734">
<div class="phpcode"><code><span class="html">Being an experienced ASP developer I was wondering how to replace textual content of a node (with msxml this is simply acheived by setting the 'text' property of a node). Out of frustration I started to play around with SimpleXml but I could not get it to work in combination with xPath.<br /><br />I took me a lot of time to find out so I hope this helps others:<br /><br />function replaceNodeText($objXml, $objNode, $strNewContent){<br />    /*<br />    This function replaces a node's string content with strNewContent<br />    */<br />    $objNodeListNested = &amp;$objNode-&gt;childNodes;<br />    foreach ( $objNodeListNested as $objNodeNested ){<br />         if ($objNodeNested-&gt;nodeType == XML_TEXT_NODE)$objNode-&gt;removeChild ($objNodeNested);<br />    }<br />    <br />    $objNode-&gt;appendChild($objXml-&gt;createTextNode($strNewContent));<br />}<br /><br />$objXml= new DOMDocument();<br />$objXml-&gt;loadXML('&lt;root&gt;&lt;node id="1"&gt;bla&lt;/note&gt;&lt;/root&gt;');<br />$objXpath = new domxpath($objXml);<br /><br />$strXpath="/root/node[@id='1']";<br />$objNodeList = $objXpath -&gt;query($strXpath);<br />foreach ($objNodeList as $objNode){<br />//pass the node by reference<br />replaceNodeText($objXml, &amp;$objNode, $strImportedValue);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="118227">  <div class="votes">
    <div id="Vu118227">
    <a href="/manual/vote-note.php?id=118227&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118227">
    <a href="/manual/vote-note.php?id=118227&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118227" title="52% like this...">
    1
    </div>
  </div>
  <a href="#118227" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#118227"> &para;</a><div class="date" title="2015-10-29 05:31"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118227">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />    </span><span class="comment">// this note is about how to get a DOMNode's outerHTML and innerHTML.<br />    </span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">);<br />    </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadHTML</span><span class="keyword">(</span><span class="string">'&lt;html&gt;&lt;body&gt;&lt;div&gt;&lt;p&gt;p1&lt;/p&gt;&lt;p&gt;p2&lt;/p&gt;&lt;/div&gt;&lt;/body&gt;&lt;/html&gt;'</span><span class="keyword">);    <br />    </span><span class="default">$node </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'div'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);    <br />    </span><span class="default">$outerHTML </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">ownerDocument</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">);    <br />    </span><span class="default">$innerHTML </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    foreach (</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$childNode</span><span class="keyword">){<br />        </span><span class="default">$innerHTML </span><span class="keyword">.= </span><span class="default">$childNode</span><span class="keyword">-&gt;</span><span class="default">ownerDocument</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">(</span><span class="default">$childNode</span><span class="keyword">);<br />    }<br />    echo </span><span class="string">'&lt;h2&gt;outerHTML: &lt;/h2&gt;'</span><span class="keyword">;<br />    echo </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$outerHTML</span><span class="keyword">);<br />    echo </span><span class="string">'&lt;h2&gt;innerHTML: &lt;/h2&gt;'</span><span class="keyword">;    <br />    echo </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$innerHTML</span><span class="keyword">);    <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56059">  <div class="votes">
    <div id="Vu56059">
    <a href="/manual/vote-note.php?id=56059&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56059">
    <a href="/manual/vote-note.php?id=56059&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56059" title="54% like this...">
    1
    </div>
  </div>
  <a href="#56059" class="name">
  <strong class="user"><em>amir.laherATcomplinet.com</em></strong></a><a class="genanchor" href="#56059"> &para;</a><div class="date" title="2005-08-22 05:09"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56059">
<div class="phpcode"><code><span class="html">This particular W3C page provides invaluable documentation for the DOM classes implemented in php5 (via libxml2). It fills in plenty of php.net's gaps:<br /><br /><a href="http://www.w3.org/TR/DOM-Level-2-Core/core.html" rel="nofollow" target="_blank">http://www.w3.org/TR/DOM-Level-2-Core/core.html</a><br /><br />Some key examples:<br />* concise summary of the class heirachy (1.1.1)<br />* clarification that DOM level 2 doesn't allow for population of internal DTDs<br />* explanation of DOMNode-&gt;normalize()<br />* explanation of the DOMImplementation class<br /><br />The interfaces are described in OMG's Interface Definition Language</span></code></div>
  </div>
 </div>
  <div class="note" id="71317">  <div class="votes">
    <div id="Vu71317">
    <a href="/manual/vote-note.php?id=71317&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71317">
    <a href="/manual/vote-note.php?id=71317&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71317" title="53% like this...">
    1
    </div>
  </div>
  <a href="#71317" class="name">
  <strong class="user"><em>cooper at asu dot ntu-kpi dot kiev dot ua</em></strong></a><a class="genanchor" href="#71317"> &para;</a><div class="date" title="2006-11-22 02:32"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71317">
<div class="phpcode"><code><span class="html">If you are using not object-oriented functions and it takes too much time to change them all (or you'll be replacing them later) then as a temporary decision can be used this modules:<br /><br />For DOM XML:<br /><a href="http://alexandre.alapetite.net/doc-alex/domxml-php4-php5/" rel="nofollow" target="_blank">http://alexandre.alapetite.net/doc-alex/domxml-php4-php5/</a><br /><br />For XSLT:<br /><a href="http://alexandre.alapetite.net/doc-alex/xslt-php4-php5/" rel="nofollow" target="_blank">http://alexandre.alapetite.net/doc-alex/xslt-php4-php5/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="85874">  <div class="votes">
    <div id="Vu85874">
    <a href="/manual/vote-note.php?id=85874&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85874">
    <a href="/manual/vote-note.php?id=85874&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85874" title="52% like this...">
    1
    </div>
  </div>
  <a href="#85874" class="name">
  <strong class="user"><em>miguelangelhdz  at  NOSPAM  dot  com</em></strong></a><a class="genanchor" href="#85874"> &para;</a><div class="date" title="2008-09-22 06:19"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85874">
<div class="phpcode"><code><span class="html">After searching how to extend the DOMDocument and DOMElement I found a way in the bug: <a href="http://bugs.php.net/bug.php?id=35104." rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=35104.</a> The following code shows how:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">extDOMDocument </span><span class="keyword">extends </span><span class="default">DOMDocument </span><span class="keyword">{<br /> public function </span><span class="default">createElement</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">) {<br />  </span><span class="default">$orphan </span><span class="keyword">= new </span><span class="default">extDOMElement</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">); </span><span class="comment">// new  sub-class object<br />  </span><span class="default">$docFragment </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">createDocumentFragment</span><span class="keyword">(); </span><span class="comment">// lightweight container maintains "ownerDocument"<br />  </span><span class="default">$docFragment</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$orphan</span><span class="keyword">); </span><span class="comment">// attach<br />  </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">$docFragment</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$orphan</span><span class="keyword">); </span><span class="comment">// remove<br />  </span><span class="keyword">return </span><span class="default">$ret</span><span class="keyword">; </span><span class="comment">// ownerDocument set; won't be destroyed on  method exit<br /> </span><span class="keyword">}<br /> </span><span class="comment">// .. more class definition<br /></span><span class="keyword">}<br /><br />class </span><span class="default">extDOMElement </span><span class="keyword">extends </span><span class="default">DOMElement </span><span class="keyword">{<br /> function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">, </span><span class="default">$namespaceURI</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">) {<br />  </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">$namespaceURI</span><span class="keyword">);<br /> }<br />  </span><span class="comment">//  ... more class definition here<br /></span><span class="keyword">}<br /><br /></span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">extDOMDocument</span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">);<br /></span><span class="default">$el </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'tagname'</span><span class="keyword">);<br /></span><span class="default">$el</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">"attr"</span><span class="keyword">, </span><span class="string">"val"</span><span class="keyword">);<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$el</span><span class="keyword">); <br /><br /></span><span class="comment">// append discards the DOMDocumentFragment and just adds its child nodes, but ownerDocument is maintained.<br /></span><span class="keyword">echo </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$el</span><span class="keyword">).</span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br />echo </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">).</span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"&lt;xmp&gt;"</span><span class="keyword">.</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">().</span><span class="string">"&lt;/xmp&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89718">  <div class="votes">
    <div id="Vu89718">
    <a href="/manual/vote-note.php?id=89718&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89718">
    <a href="/manual/vote-note.php?id=89718&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89718" title="52% like this...">
    1
    </div>
  </div>
  <a href="#89718" class="name">
  <strong class="user"><em>Junior</em></strong></a><a class="genanchor" href="#89718"> &para;</a><div class="date" title="2009-03-20 01:26"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89718">
<div class="phpcode"><code><span class="html">innerHTML in PHP DOM 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">DOMinnerHTML</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$innerHTML </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />    </span><span class="default">$children </span><span class="keyword">= </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">;
<br />    foreach (</span><span class="default">$children </span><span class="keyword">as </span><span class="default">$child</span><span class="keyword">) 
<br />    {
<br />        </span><span class="default">$tmp_dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();
<br />        </span><span class="default">$tmp_dom</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$tmp_dom</span><span class="keyword">-&gt;</span><span class="default">importNode</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));
<br />        </span><span class="default">$innerHTML</span><span class="keyword">.=</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$tmp_dom</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">());
<br />    }
<br />    return </span><span class="default">$innerHTML</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Example:
<br />
<br /><span class="default">&lt;?php
<br />$dom</span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(); 
<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="default">$html_string</span><span class="keyword">);
<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">preserveWhiteSpace </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />
<br /></span><span class="default">$domTable </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">"table"</span><span class="keyword">);
<br />
<br />foreach (</span><span class="default">$domTable </span><span class="keyword">as </span><span class="default">$tables</span><span class="keyword">)
<br />{
<br />    echo </span><span class="default">DOMinnerHTML</span><span class="keyword">(</span><span class="default">$tables</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122913">  <div class="votes">
    <div id="Vu122913">
    <a href="/manual/vote-note.php?id=122913&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122913">
    <a href="/manual/vote-note.php?id=122913&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122913" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122913" class="name">
  <strong class="user"><em>chealer at gmail dot com</em></strong></a><a class="genanchor" href="#122913"> &para;</a><div class="date" title="2018-07-05 05:12"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122913">
<div class="phpcode"><code><span class="html">This extension allows editing an HTML snippet, for example removing an element:<br />‌‌$dom = new DOMDocument();<br />‌‌$dom-&gt;loadHTML('keep&lt;b id="simple"&gt;REMOVE&lt;/b&gt;');<br />$‌‌remove = $dom-&gt;getElementById('simple');<br />‌‌$dom-&gt;removeChild($‌‌remove);<br />echo ‌‌$dom-&gt;saveHTML();<br />...would output "keep".<br /><br />But it does not preserve formatting. If your code defines attributes using double quotes, saveHTML() may for instance return single quotes instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="122659">  <div class="votes">
    <div id="Vu122659">
    <a href="/manual/vote-note.php?id=122659&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122659">
    <a href="/manual/vote-note.php?id=122659&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122659" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122659" class="name">
  <strong class="user"><em>emmanuellutula at hotmail dot com</em></strong></a><a class="genanchor" href="#122659"> &para;</a><div class="date" title="2018-04-24 04:35"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122659">
<div class="phpcode"><code><span class="html">If you want to  use DOMDocument in your PHPUnit Tests drive on Symfony Controller (testing form)! Use like :<br /><br />namespace Tests\YourBundle\Controller;<br /><br />use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;<br />use YourBundle\Controller\TextController;<br /><br />class DefaultControllerTest extends WebTestCase<br />{<br />    public function testIndex()<br />    {<br />        $client = static::createClient(array(), array());<br /><br />        $crawler = $client-&gt;request('GET', '/text/add');<br />        $this-&gt;assertTrue($crawler-&gt;filter("form")-&gt;count() &gt; 0, "Text form exist !");<br /><br />        $form = $crawler-&gt;filter("form")-&gt;form();<br /><br />        $domDocument = new \DOMDocument;<br /><br />        $domInput = $domDocument-&gt;createElement('input');<br />        $dom = $domDocument-&gt;appendChild($domInput);<br />        $dom-&gt;setAttribute('slug', 'bloc');<br />       <br /><br />        $formInput = new \Symfony\Component\DomCrawler\Field\InputFormField($domInput);<br />        $form-&gt;set($formInput); <br /><br />        $crawler = $client-&gt;submit($form);<br />            <br />        if ($client-&gt;getResponse()-&gt;isRedirect())<br />        {<br />            $crawler = $client-&gt;followRedirect(false);<br />        }<br /><br />       // $this-&gt;assertTrue($client-&gt;getResponse()-&gt;isSuccessful());<br />        //$this-&gt;assertEquals(200, $client-&gt;getResponse()-&gt;getStatusCode(),<br />        //             "Unexpected HTTP status code for GET /backoffice/login");<br />        <br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="105815">  <div class="votes">
    <div id="Vu105815">
    <a href="/manual/vote-note.php?id=105815&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105815">
    <a href="/manual/vote-note.php?id=105815&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105815" title="50% like this...">
    0
    </div>
  </div>
  <a href="#105815" class="name">
  <strong class="user"><em>Drupella</em></strong></a><a class="genanchor" href="#105815"> &para;</a><div class="date" title="2011-09-16 09:18"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105815">
<div class="phpcode"><code><span class="html">Here is a fast innerHTML function that returns the result without iterating over child nodes.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">innerHTML</span><span class="keyword">(</span><span class="default">$el</span><span class="keyword">) {<br />  </span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br />  </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">importNode</span><span class="keyword">(</span><span class="default">$el</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">));<br />  </span><span class="default">$html </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">());<br />  </span><span class="default">$tag </span><span class="keyword">= </span><span class="default">$el</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">;<br />  return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'@^&lt;' </span><span class="keyword">. </span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'[^&gt;]*&gt;|&lt;/' </span><span class="keyword">. </span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'&gt;$@'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$html</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example<br /><span class="default">&lt;?php<br />$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="comment">// A corrupt HTML string<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadHTML</span><span class="keyword">(</span><span class="string">'&lt;HTML&gt;&lt;A HREF="ss"&gt;asd&lt;/A&gt;'</span><span class="keyword">);<br /></span><span class="default">$body </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'body'</span><span class="keyword">)-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br />print </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">innerHTML</span><span class="keyword">(</span><span class="default">$body</span><span class="keyword">));<br /></span><span class="comment">// Prints &lt;a href="ss"&gt;asd&lt;/a&gt;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97518">  <div class="votes">
    <div id="Vu97518">
    <a href="/manual/vote-note.php?id=97518&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97518">
    <a href="/manual/vote-note.php?id=97518&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97518" title="50% like this...">
    0
    </div>
  </div>
  <a href="#97518" class="name">
  <strong class="user"><em>ben_demott at hotmail dot com</em></strong></a><a class="genanchor" href="#97518"> &para;</a><div class="date" title="2010-04-23 01:36"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97518">
<div class="phpcode"><code><span class="html">A function among several others to parse a google results page, I wrote this some time ago - google has probably changed their site since then, but I thought this might be helpful to someone.<br /><br />I'm moving servers, but I will probably throw this up on my blog when I get it back up.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">googleResult</span><span class="keyword">(</span><span class="default">$listItem</span><span class="keyword">) {<br />    </span><span class="comment">// given a LIST ITEM element, this will validate, and return an array for that LI entry as an inline result from google.<br />    /*<br />     * &lt;li class='g w0'&gt;<br />     *   &lt;h3 class='r'&gt;<br />     *     &lt;a href='the URL' class='l'&gt;<br />     *       Description &lt;em&gt;description&lt;/em&gt;<br />     *     &lt;/a&gt;<br />     *   &lt;/h3&gt;<br />     * &lt;/li&gt;<br />     *<br />       UPDATE:<br />       This function will now look for any subcontainer that has an href, it doesn't have to be an H3<br />       this will make it work with a few more formatted search results.<br />     */<br /><br />    </span><span class="default">$listItem </span><span class="keyword">= </span><span class="default">$listItem</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">;<br />        </span><span class="comment">// Yes I don't use instanceof - I guess you'll have to deal.<br />    </span><span class="keyword">foreach(</span><span class="default">$listItem </span><span class="keyword">as </span><span class="default">$element</span><span class="keyword">) {<br />        if(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">) &amp;&amp; </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">) == </span><span class="string">'DOMElement' </span><span class="keyword">&amp;&amp; </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">hasChildNodes</span><span class="keyword">()) {<br />            </span><span class="default">$hrefContainer </span><span class="keyword">= </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">;<br />            foreach(</span><span class="default">$hrefContainer </span><span class="keyword">as </span><span class="default">$element2</span><span class="keyword">) {<br />                if(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$element2</span><span class="keyword">) &amp;&amp; </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$element2</span><span class="keyword">) == </span><span class="string">'DOMElement' </span><span class="keyword">&amp;&amp; </span><span class="default">$element2</span><span class="keyword">-&gt;</span><span class="default">nodeName </span><span class="keyword">== </span><span class="string">'a' </span><span class="keyword">&amp;&amp; </span><span class="default">$element2</span><span class="keyword">-&gt;</span><span class="default">hasAttribute</span><span class="keyword">(</span><span class="string">'href'</span><span class="keyword">)) {<br />                    </span><span class="default">$anchor </span><span class="keyword">= </span><span class="default">$element2</span><span class="keyword">;<br />                    unset(</span><span class="default">$h3</span><span class="keyword">);<br />                    unset(</span><span class="default">$element2</span><span class="keyword">);<br />                    break;<br />                } else {<br />                  </span><span class="comment">//print __LINE__ ." :: Breaking out of loop (normal result) element is not an annchor Element='".$element2-&gt;nodeName."'\n";<br />                </span><span class="keyword">}<br />            }<br />            unset(</span><span class="default">$element</span><span class="keyword">);<br />            unset(</span><span class="default">$listItem</span><span class="keyword">);<br />            break;<br />        }<br />    }<br />    if(empty(</span><span class="default">$anchor</span><span class="keyword">) || !</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$anchor</span><span class="keyword">) || </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$anchor</span><span class="keyword">) != </span><span class="string">'DOMElement'</span><span class="keyword">) {<br />        </span><span class="comment">//print __LINE__ ." :: Returning false, did not locate anchor through iteration...";<br />        </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    </span><span class="default">$href </span><span class="keyword">= </span><span class="default">$anchor</span><span class="keyword">-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">'href'</span><span class="keyword">);<br />    if(empty(</span><span class="default">$href</span><span class="keyword">)) {<br />        </span><span class="comment">//print __LINE__ ." :: Found anchor object, could not read href attribute / href is empty? href='$href'\n";<br />        </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    </span><span class="default">$description </span><span class="keyword">= </span><span class="default">$anchor</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">;<br />    </span><span class="default">$urlDescription </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    foreach(</span><span class="default">$description </span><span class="keyword">as </span><span class="default">$words</span><span class="keyword">) {<br />        </span><span class="default">$name </span><span class="keyword">=  </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$words</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">);<br />        if(</span><span class="default">$name </span><span class="keyword">== </span><span class="string">'em' </span><span class="keyword">|| </span><span class="default">$name </span><span class="keyword">== </span><span class="string">'#text' </span><span class="keyword">|| </span><span class="default">$name </span><span class="keyword">== </span><span class="string">'b'</span><span class="keyword">) {<br />            if(!empty(</span><span class="default">$words</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">)) {<br />                </span><span class="default">$text </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$words</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">);<br />                </span><span class="default">$urlDescription </span><span class="keyword">= </span><span class="default">$urlDescription </span><span class="keyword">. </span><span class="default">$text </span><span class="keyword">. </span><span class="string">' '</span><span class="keyword">;<br />            }<br />        }<br />    }<br />    </span><span class="default">$urlDescription </span><span class="keyword">= </span><span class="default">htmlspecialchars_decode</span><span class="keyword">(</span><span class="default">$urlDescription</span><span class="keyword">, </span><span class="default">ENT_QUOTES</span><span class="keyword">);<br />    </span><span class="default">$urlDescription </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$urlDescription</span><span class="keyword">);<br />    return array(</span><span class="string">'description' </span><span class="keyword">=&gt; </span><span class="default">$urlDescription</span><span class="keyword">, </span><span class="string">'href' </span><span class="keyword">=&gt; </span><span class="default">$href</span><span class="keyword">);<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92571">  <div class="votes">
    <div id="Vu92571">
    <a href="/manual/vote-note.php?id=92571&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92571">
    <a href="/manual/vote-note.php?id=92571&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92571" title="50% like this...">
    0
    </div>
  </div>
  <a href="#92571" class="name">
  <strong class="user"><em>philipwaynerollins at gmail dot com</em></strong></a><a class="genanchor" href="#92571"> &para;</a><div class="date" title="2009-07-29 02:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92571">
<div class="phpcode"><code><span class="html">You can get the "innerHTML" by nodeValue so<br /><br /><span class="default">&lt;?php<br />    $doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">( );<br />    </span><span class="default">$ele </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">( </span><span class="string">'p'</span><span class="keyword">, </span><span class="string">'Sensei Ninja' </span><span class="keyword">);<br />    print </span><span class="default">$ele</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />You can even set it if you want<br /><br /><span class="default">&lt;?php<br />    $doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">( );<br />    </span><span class="default">$ele </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">( </span><span class="string">'p' </span><span class="keyword">);<br />    </span><span class="default">$ele</span><span class="keyword">-&gt;</span><span class="default">nodeValue </span><span class="keyword">= </span><span class="string">'Sensei Ninja'</span><span class="keyword">;<br />    </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">( </span><span class="default">$ele </span><span class="keyword">);<br />    print </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">( );<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88025">  <div class="votes">
    <div id="Vu88025">
    <a href="/manual/vote-note.php?id=88025&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88025">
    <a href="/manual/vote-note.php?id=88025&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88025" title="50% like this...">
    0
    </div>
  </div>
  <a href="#88025" class="name">
  <strong class="user"><em>nospam at ya dot ru</em></strong></a><a class="genanchor" href="#88025"> &para;</a><div class="date" title="2009-01-06 10:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88025">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?PHP<br /></span><span class="keyword">function </span><span class="default">dom2array_full</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">){ <br />    </span><span class="default">$result </span><span class="keyword">= array(); <br />    if(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">nodeType </span><span class="keyword">== </span><span class="default">XML_TEXT_NODE</span><span class="keyword">) { <br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">; <br />    } <br />    else { <br />        if(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">hasAttributes</span><span class="keyword">()) { <br />            </span><span class="default">$attributes </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">; <br />            if(!</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$attributes</span><span class="keyword">))  <br />                foreach (</span><span class="default">$attributes </span><span class="keyword">as </span><span class="default">$index</span><span class="keyword">=&gt;</span><span class="default">$attr</span><span class="keyword">)  <br />                    </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">] = </span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">; <br />        } <br />        if(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">hasChildNodes</span><span class="keyword">()){ <br />            </span><span class="default">$children </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">; <br />            for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$children</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) { <br />                </span><span class="default">$child </span><span class="keyword">= </span><span class="default">$children</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">); <br />                if(</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeName </span><span class="keyword">!= </span><span class="string">'#text'</span><span class="keyword">) <br />                if(!isset(</span><span class="default">$result</span><span class="keyword">[</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">])) <br />                    </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">] = </span><span class="default">dom2array</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">); <br />                else { <br />                    </span><span class="default">$aux </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">]; <br />                    </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">] = array( </span><span class="default">$aux </span><span class="keyword">); <br />                    </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">][] = </span><span class="default">dom2array</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">); <br />                } <br />            } <br />        } <br />    } <br />    return </span><span class="default">$result</span><span class="keyword">; <br />} <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81360">  <div class="votes">
    <div id="Vu81360">
    <a href="/manual/vote-note.php?id=81360&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81360">
    <a href="/manual/vote-note.php?id=81360&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81360" title="50% like this...">
    0
    </div>
  </div>
  <a href="#81360" class="name">
  <strong class="user"><em>danf dot 1979 at []gmail[] dot com</em></strong></a><a class="genanchor" href="#81360"> &para;</a><div class="date" title="2008-02-24 07:47"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81360">
<div class="phpcode"><code><span class="html">This is a couple of classes to deal with yahoo yui menu.<br /><br />/*<br />  $menubar = new MenuBar();<br /><br />  $file = new Menu("File");<br />  $file-&gt;setAttribute("href", "<a href="http://file.com" rel="nofollow" target="_blank">http://file.com</a>");<br /><br />  $quit = new Menu("Quit");<br />  $quit-&gt;setAttribute("href", "<a href="http://quit.com" rel="nofollow" target="_blank">http://quit.com</a>");<br /><br />  $file-&gt;appendChild($quit);<br />  $menubar-&gt;appendChild($file);<br /><br />  echo $menubar-&gt;grab();<br />*/<br /><br />//<br />// Author: Daniel Queirolo.<br />// LGPL<br />//<br /><br />/** ---------------------------------<br />/**  Class MenuBar()<br />/**  Creates a the menubar and appends<br />/**  yuimenubaritems to it.<br />/** ---------------------------------*/<br /><br />class MenuBar extends DOMDocument<br />{<br /><br />  public $menuID = "nav_menu";  // holds the css id that javascript yui menu code should have to recognize<br />  private $UL;                  // This node holds every menu, This is THE node.<br /><br />  /** ---------------------------------<br />  /**  Constructor<br />  /**  Generates a menubar skeleton and the UL node<br />  /** ---------------------------------*/<br /><br />  public function __construct() {<br /><br />    parent::__construct();<br /><br />    $rootdiv = parent::createElement("div");<br />    $rootdiv-&gt;setAttribute("class", "yui-skin-sam");<br /><br />    parent::appendChild($rootdiv);<br /><br />    $yui_menubar = parent::createElement("div");<br />    $yui_menubar-&gt;setAttribute("id", $this-&gt;menuID);<br />    $yui_menubar-&gt;setAttribute("class", "yuimenubar");<br /><br />    $rootdiv-&gt;appendChild($yui_menubar);<br /><br />    $bd = parent::createElement("div");<br />    $bd-&gt;setAttribute("class", "bd");<br /><br />    $yui_menubar-&gt;appendChild($bd);<br /><br />    $ul = parent::createElement("ul");<br />    $ul-&gt;setAttribute("class", "first-of-type");<br /><br />    // ALL Menu() instances ocurr inside an &lt;ul&gt; tag.<br /><br />    $this-&gt;UL = $bd-&gt;appendChild($ul);<br /><br />  }<br /><br />  /** ---------------------------------<br />  /**  appendChild()<br />  /**  Appends a new yuimenubaritem to the menubar UL node.<br />  /**  This function changes &lt;li&gt; and &lt;a&gt; classes to yuiMENUBARsomething<br />  /** ---------------------------------*/<br /><br />  public function appendChild($child) {<br /><br />    $li = parent::importNode($child-&gt;LI, true);<br /><br />    $li-&gt;setAttribute("class", "yuimenubaritem");<br /><br />    $li-&gt;getElementsByTagName("a")-&gt;item(0)-&gt;setAttribute("class", "yuimenubaritemlabel");<br /><br />    $this-&gt;UL-&gt;appendChild($li);<br /><br />  }<br /><br />  public function grab() {<br /><br />    return parent::saveHTML();<br /><br />  }<br /><br />}<br /><br />/** ---------------------------------<br />/**  Class Menu()<br />/**  Creates a yuimenuitem li node<br />/** ---------------------------------*/<br /><br />class Menu extends DOMDocument {<br /><br />  public $LI; // stores the &lt;li&gt; node (THE link) that will be exported to MenuBar() or used on appendChild()<br /><br />  /** ---------------------------------<br />  /**  Constructor<br />  /**  Generates a yuimenuitem li node<br />  /**  No yuimenubar items are created here. MenuBar handles that.<br />  /** ---------------------------------*/<br /><br />  public function __construct($link_name) {<br /><br />    parent::__construct();<br /><br />    $li = parent::createElement("li");<br />    $li-&gt;setAttribute("class", "yuimenuitem");<br /><br />    // LI node stores THE link.<br />    // if appendChild is used, the new (sub) Menu() would be LI node child.<br /><br />    $this-&gt;LI = parent::appendChild($li);<br /><br />    $a = parent::createElement("a", $link_name);<br />    $a-&gt;setAttribute("class", "yuimenuitemlabel");<br /><br />    $li-&gt;appendChild($a);<br /><br />    $this-&gt;li = $li;<br />    $this-&gt;a = $a;<br /><br />  }<br /><br />  /** ---------------------------------<br />  /**  appendChild<br />  /**  Appends a (sub) Menu() to current Menu() in LI<br />  /** ---------------------------------*/<br /><br />  public function appendChild($child) {<br /><br />    $yuimenu = parent::createElement("div");<br />    $yuimenu-&gt;setAttribute("class", "yuimenu");<br /><br />    $this-&gt;LI-&gt;appendChild($yuimenu);<br /><br />    $bd = parent::createElement("div");<br />    $bd-&gt;setAttribute("class", "bd");<br /><br />    $yuimenu-&gt;appendChild($bd);<br /><br />    $ul = parent::createElement("ul");<br /><br />    $bd-&gt;appendChild($ul);<br /><br />    // child-&gt;NODE holds THE link from the new child (from child's __construct())<br /><br />    $ul-&gt;appendChild(parent::importNode($child-&gt;LI, true));<br /><br />  }<br /><br />  public function setAttribute($name, $value, $node="a") {<br /><br />      if ($node == "a") {<br />        $this-&gt;a-&gt;setAttribute($name, $value);<br />      }<br /><br />      else {<br />        $this-&gt;li-&gt;setAttribute($name, $value);<br />      }<br />  }<br /><br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="75553">  <div class="votes">
    <div id="Vu75553">
    <a href="/manual/vote-note.php?id=75553&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75553">
    <a href="/manual/vote-note.php?id=75553&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75553" title="50% like this...">
    0
    </div>
  </div>
  <a href="#75553" class="name">
  <strong class="user"><em>Sanados at failure dot at</em></strong></a><a class="genanchor" href="#75553"> &para;</a><div class="date" title="2007-06-05 02:45"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75553">
<div class="phpcode"><code><span class="html">appended to <br />brian dot reynolds at risaris dot com<br />20-Feb-2007 10:09<br /><br />when you got variable nodes at start you array fails and looses nodes  beneath.<br />solution that counts occurance though eats up performance:<br /><br />function xmlToArray($n)<br />{<br />    $xml_array = array();<br />    $occurance = array();<br /><br />     foreach($n-&gt;childNodes as $nc)<br />     {<br />         $occurance[$nc-&gt;nodeName]++;<br />     }<br />     <br />    foreach($n-&gt;childNodes as $nc){<br />        if( $nc-&gt;hasChildNodes() )<br />        {<br />            if($occurance[$nc-&gt;nodeName] &gt; 1)<br />            {<br />                $xml_array[$nc-&gt;nodeName][] = xmlToArray($nc);<br />            }<br />            else<br />            {<br />                $xml_array[$nc-&gt;nodeName] = xmlToArray($nc);<br />            }<br />        }<br />        else<br />        {<br />            return utf8_decode($nc-&gt;nodeValue);<br />        }<br />    }<br />    return $xml_array;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="73793">  <div class="votes">
    <div id="Vu73793">
    <a href="/manual/vote-note.php?id=73793&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73793">
    <a href="/manual/vote-note.php?id=73793&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73793" title="50% like this...">
    0
    </div>
  </div>
  <a href="#73793" class="name">
  <strong class="user"><em>Nevyn at N dot O dot S dot P dot A dot M dot emai dot it</em></strong></a><a class="genanchor" href="#73793"> &para;</a><div class="date" title="2007-03-10 07:35"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73793">
<div class="phpcode"><code><span class="html">I wrote a couple of functions to:<br /> - create a DOMDocument from a file<br /> - parse the namespaces in it<br /> - create a XPath object with all the namespaces registered<br /> - load the schemalocations<br /> - validate the file on the main schema (the one without prefix)<br /><br />It is useful for me, see if it is also for someone else!!<br /><br />Giulio<br /><br />function decodeNode($node)<br />{<br />    $out = $node-&gt;ownerDocument-&gt;saveXML($node);<br />    $re = "{^&lt;((?:\\w*:)?\\w*)". //the tag name<br />    "[\\s\n\r]*((?:[\\s\n\r]*". <br />    "(?:\\w*:)?\\w+[\\s\n\r]*=[\\s\n\r]*". //possible attribute name<br />    "(?:\"[^\"]*\"|\'[^\']*\'))*)". //attribute value<br />    "[\\s\n\r]*&gt;[\r\n]*".<br />    "((?:.*[\r\n]*)*)". //content<br />    "[\r\n]*&lt;/\\1&gt;$}"; //closing tag<br />    preg_match($re, $out, $mat);<br />    return $mat;<br />}<br /><br />function innerXml($node)<br />{<br />    $mat = decodeNode($node);<br />    return $mat[3];<br />}<br /><br />function getnodeAttributes($node)<br />{<br />    $mat = decodeNode($node);<br />    $txt = $mat[2];<br />    $re = "{((?:\\w*:)?\\w+)[\\s\n\r]*=[\\s\n\r]*(\"[^\"]*\"|\'[^\']*\')}";<br />    preg_match_all($re, $txt, $mat);<br />    $att = array();<br />    for ($i=0; $i&lt;count($mat[0]); $i++)<br />    {<br />        $value = $mat[2][$i];<br />        if ($value[0] == "\'" || $value[0] == "\"")<br />        {<br />            $len = strlen($value);<br />            $value = substr($value, 1, strlen($value)-2);<br />        }<br />        $att[ $mat[1][$i] ] = $value;<br />    }<br />    return $att;<br />}<br /><br />function loadXml($file)<br />{<br />    $doc = new DOMDocument();<br />    $doc-&gt;load($file);<br />    //cerca l'attributo xmlns<br />    $xsi = false;<br />    $doc-&gt;namespaces = array();<br />    $doc-&gt;xpath = new DOMXPath($doc);<br />    <br />    $attr = getnodeAttributes($doc-&gt;documentElement);<br />    foreach ($attr as $name =&gt; $value)<br />    {<br />        if (substr($name,0,5) == "xmlns")<br />        {<br />            $uri = $value;<br />            $pre = $doc-&gt;documentElement-&gt;lookupPrefix($uri);<br />            if ($uri == "<a href="http://www.w3.org/2001/XMLSchema-instance" rel="nofollow" target="_blank">http://www.w3.org/2001/XMLSchema-instance</a>")<br />                $xsi = $pre;<br />            $doc-&gt;namespaces[$pre] = $uri;<br />            if ($pre == "")<br />                $pre = "noname";<br />            $doc-&gt;xpath-&gt;registerNamespace($pre, $uri);<br />        }<br />    }<br />    <br />    if ($xsi)<br />    {<br />        $doc-&gt;schemaLocations = array();<br />        $lst = $doc-&gt;xpath-&gt;query("//@$xsi:schemaLocation");<br />        foreach($lst as $el)<br />        {<br />            $re = "{[\\s\n\r]*([^\\s\n\r]+)[\\s\n\r]*([^\\s\n\r]+)}";<br />            preg_match_all($re, $el-&gt;nodeValue, $mat);<br />            for ($i=0; $i&lt;count($mat[0]); $i++)<br />            {<br />                $value = $mat[2][$i];<br />                $doc-&gt;schemaLocations[ $mat[1][$i] ] = $value;<br />            }<br />        }<br /><br />        $olddir = getcwd();<br />        chdir(dirname($file));<br />        $schema = $doc-&gt;schemaLocations[$doc-&gt;namespaces[""]];<br />        if (substr($schema,0,7) == "file://")<br />        {<br />            $schema = substr($value,7);<br />        }<br />        if (!$doc-&gt;schemaValidate($schema))<br />            dbg()-&gt;err("Invalid file");<br />        chdir($olddir);<br />    }<br />    <br />    return $doc;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="68967">  <div class="votes">
    <div id="Vu68967">
    <a href="/manual/vote-note.php?id=68967&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68967">
    <a href="/manual/vote-note.php?id=68967&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68967" title="50% like this...">
    0
    </div>
  </div>
  <a href="#68967" class="name">
  <strong class="user"><em>sean at lookin3d dot com</em></strong></a><a class="genanchor" href="#68967"> &para;</a><div class="date" title="2006-08-17 10:21"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68967">
<div class="phpcode"><code><span class="html">$xmlDoc=&lt;&lt;&lt;XML<br />&lt;?xml version="1.0"?&gt;<br />&lt;methodCall&gt;<br />   &lt;methodName&gt;examples.getStateName&lt;/methodName&gt;<br />   &lt;params&gt;<br />      &lt;param&gt;<br />         &lt;value&gt;&lt;i4&gt;41&lt;/i4&gt;&lt;/value&gt;<br />         &lt;/param&gt;<br />      &lt;/params&gt;<br />   &lt;/methodCall&gt;<br />XML;<br /><br />$xml= new DOMDocument();<br />$xml-&gt;preserveWhiteSpace=false;<br />$xml-&gt;loadXML($xmlDoc);<br />print_r(xml2array($xml));<br /><br />function xml2array($n)<br />{<br />    $return=array();<br />    foreach($n-&gt;childNodes as $nc)<br />    ($nc-&gt;hasChildNodes())<br />    ?($n-&gt;firstChild-&gt;nodeName== $n-&gt;lastChild-&gt;nodeName&amp;&amp;$n-&gt;childNodes-&gt;length&gt;1)<br />    ?$return[$nc-&gt;nodeName][]=xml2array($item)<br />    :$return[$nc-&gt;nodeName]=xml2array($nc)<br />    :$return=$nc-&gt;nodeValue;<br />    return $return;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="58856">  <div class="votes">
    <div id="Vu58856">
    <a href="/manual/vote-note.php?id=58856&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58856">
    <a href="/manual/vote-note.php?id=58856&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58856" title="50% like this...">
    0
    </div>
  </div>
  <a href="#58856" class="name">
  <strong class="user"><em>mark at vectrex dot org dot uk</em></strong></a><a class="genanchor" href="#58856"> &para;</a><div class="date" title="2005-11-17 02:10"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58856">
<div class="phpcode"><code><span class="html">Note that these DOM functions expect (and presumably return) all their data in UTF-8 character encoding, regardless of what PHP's current encoding is. This means that text nodes, attribute values etc, should be in utf8.<br /><br />This applies even if you're generating an XML document which is not ultimately in utf8.<br /><br />Mark</span></code></div>
  </div>
 </div>
  <div class="note" id="54777">  <div class="votes">
    <div id="Vu54777">
    <a href="/manual/vote-note.php?id=54777&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54777">
    <a href="/manual/vote-note.php?id=54777&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54777" title="50% like this...">
    0
    </div>
  </div>
  <a href="#54777" class="name">
  <strong class="user"><em>php at webdevelopers dot cz</em></strong></a><a class="genanchor" href="#54777"> &para;</a><div class="date" title="2005-07-14 12:05"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54777">
<div class="phpcode"><code><span class="html">[Editor's Note: If you're using entities, then you have no choice. XML Catalogs can speed DTD resolution.]
<br />
<br />Never use 
<br />
<br />$dom-&gt;resolveExternals=true;
<br />
<br />when parsing XHTML document that has the DOCTYPE declaration with DTD URL specified in it.
<br />
<br />Otherwise parsing the XHTML with DOCTYPE like this one:
<br />
<br />&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "<a href="http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" rel="nofollow" target="_blank">http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd</a>"&gt;
<br />
<br />will result in PHP/DOM downloading the DTD file from W3C site when parsing your document. It will add extra delay to your script - I experienced that $dom-&gt;load()'s total time was from 1 to 16 seconds.
<br />
<br />elixon</span></code></div>
  </div>
 </div>
  <div class="note" id="51817">  <div class="votes">
    <div id="Vu51817">
    <a href="/manual/vote-note.php?id=51817&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51817">
    <a href="/manual/vote-note.php?id=51817&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51817" title="50% like this...">
    0
    </div>
  </div>
  <a href="#51817" class="name">
  <strong class="user"><em>spammable69 at hotmail dot com</em></strong></a><a class="genanchor" href="#51817"> &para;</a><div class="date" title="2005-04-11 10:18"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51817">
<div class="phpcode"><code><span class="html">I wrote a framework to implement the StyleSheet interfaces as specified on the W3C website.  The code is written in PHP, and is NOT a complete implementation.  Use it how ya like.  I was planning on adding the CSSStyleSheet interfaces as well.  Feel free to ask.<br /><br />&lt;?<br />    class StyleSheetList {<br />        public length;<br />        private self;<br />        <br />        function __construct ( ) {<br />            $this-&gt;self = array();<br />        }<br />        <br />        function __get($property, $&amp;ret) {<br />            if($property == 'length')<br />                $ret = count($this-&gt;self);<br />            return true;<br />        }<br />        <br />        function __set($property, $val) {<br />            if($property == 'length')<br />                return true;<br />        }<br />        <br />        function item( $index ) {<br />            return $this-&gt;self[$index];<br />        }<br />    }<br />    <br />    class MediaList extends StyleSheetList {<br />        <br />        function appendMedium ( $newMedium ) {<br />            array_push($this-&gt;self, $newMedium);<br />        }<br />        <br />        function deleteMedium ( $oldMedium ) {<br />            foreach($this-&gt;self as $item) {<br />                if( $item == $oldMedium ) {<br />                    $item = $this-&gt;self[ $this-&gt;length-1 ];<br />                    array_pop($this-&gt;self);<br />                    break;<br />                }<br />            }<br />        }<br />    }<br />    <br />    class DocumentStyle {<br />        public styleSheets;<br />        <br />        function __construct ( ) {<br />            $this-&gt;styleSheets = new StyleSheetList();<br />        }<br />        <br />        function __set($property, $val) {<br />            if($property == 'styleSheets')<br />                return true;<br />        }<br />    }<br />    <br />    class LinkStyle {<br />        public sheet;<br />        <br />        function __construct () {<br />            $this-&gt;sheet = new StyleSheet();<br />        }<br />        <br />        function __set($property, $val) {<br />            if($property == 'sheet')<br />                return true;<br />        }<br />    }<br />    <br />    class StyleSheet {<br />        public type;<br />        public disabled;<br />        public ownerNode;<br />        public parentStyleSheet;<br />        public href;<br />        public title;<br />        public media;<br />        <br />        function __construct( $type, $disabled, $ownerNode, $parentStyleSheet, $href, $title){<br />            $this-&gt;type = $type;<br />            $this-&gt;disabled = $disabled;<br />            $this-&gt;media = new MediaList();<br />            $this-&gt;ownerNode = $ownerNode;<br />            $this-&gt;parentStyleSheet = $parentStyleSheet;<br />            $this-&gt;href = $href;<br />            $this-&gt;title = $title;<br />        }<br />    }<br />?&gt;<br /><br />Only contactable via <a href="http://murpsoft.com/contact.html" rel="nofollow" target="_blank">http://murpsoft.com/contact.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="80200">  <div class="votes">
    <div id="Vu80200">
    <a href="/manual/vote-note.php?id=80200&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80200">
    <a href="/manual/vote-note.php?id=80200&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80200" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#80200" class="name">
  <strong class="user"><em>naudyj at aus3d.com</em></strong></a><a class="genanchor" href="#80200"> &para;</a><div class="date" title="2008-01-03 05:06"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80200">
<div class="phpcode"><code><span class="html">The following can take a XML_TEXT_NODE node and return the contents in an array. Yanick's contribution rocks - but<br />it overwrote with duplicates only keeping the last line<br />in the returned array. All the other functions i tested from various sources failed to handle text nodes correctly. Hope this helps someone. It is adapted from code on this site.<br /><br />function myTextNode($n, &amp;$a)<br />{<br /> static $depth = 0;<br /> static $sz = '';<br /><br /> if ($cn = $n-&gt;firstChild) <br /> {<br />  while ($cn)<br />  {<br />   if ($cn-&gt;nodeType == XML_TEXT_NODE) <br />   {<br />    $sz .= $cn-&gt;nodeValue;<br />   } <br />   elseif ($cn-&gt;nodeType == XML_ELEMENT_NODE) <br />   {<br />    $b = 1;<br />    if ($cn-&gt;hasChildNodes()) <br />    {<br />     $depth++;<br />     if ($this-&gt;myHeadings($cn, $a)) <br />     {<br />      if ($sz){<br />       array_push($a, $sz);<br />       $sz = '';<br />      }<br />     }<br />     $depth--;<br />    }<br />   }<br />   $cn = $cn-&gt;nextSibling;<br />  }<br />  return $b;<br /> }<br />} <br /><br />so you could use:   <br /><br />$nodes = $dom-&gt;getElementsByTagName("td"); <br />if($nodes){<br /> foreach ($nodes as $node){<br />  $a = Array();<br />  myTextNode($node, $a);<br /> }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="77627">  <div class="votes">
    <div id="Vu77627">
    <a href="/manual/vote-note.php?id=77627&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77627">
    <a href="/manual/vote-note.php?id=77627&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77627" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#77627" class="name">
  <strong class="user"><em>PHPdeveloper</em></strong></a><a class="genanchor" href="#77627"> &para;</a><div class="date" title="2007-09-06 02:46"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77627">
<div class="phpcode"><code><span class="html">The Yanik's dom2array() function (added on 14-Mar-2007 08:40) does not handle multiple nodes with the same name, i.e.:<br /><br />&lt;foo&gt;<br />  &lt;name&gt;aa&lt;/name&gt;<br />  &lt;name&gt;bb&lt;/name&gt;<br />&lt;/foo&gt;<br /><br />It will overwrite former and your array will contain just the last one ("bb")</span></code></div>
  </div>
 </div>
  <div class="note" id="76838">  <div class="votes">
    <div id="Vu76838">
    <a href="/manual/vote-note.php?id=76838&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76838">
    <a href="/manual/vote-note.php?id=76838&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76838" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#76838" class="name">
  <strong class="user"><em>Francois  Hill</em></strong></a><a class="genanchor" href="#76838"> &para;</a><div class="date" title="2007-08-01 11:21"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76838">
<div class="phpcode"><code><span class="html">In response to lutfi at smartconsultant dot us :<br /><br />(see my post on<br /><a href="http://fr2.php.net/manual/en/" rel="nofollow" target="_blank">http://fr2.php.net/manual/en/</a><br />function.dom-domdocument-getelementsbytagname.php<br />)<br /><br />Use this class I wrote:<br /><br />class XPathableNode extends DOMNode<br />{<br />    protected $Node;<br />    protected $DOMDocument_from_node;<br />    protected $DOMXpath_for_node;<br /><br />    public function __construct(/* DOMNode */ $node)<br />    {<br />        $this-&gt;Node=$node;<br />        $this-&gt;DOMDocument_from_node=new <br />                                                          DomDocument();<br />        $domNode=$this-&gt;DOMDocument_from_node<br />                                  -&gt;importNode($this-&gt;Node, true);<br />        $this-&gt;DOMDocument_from_node<br />                                 -&gt;appendChild($domNode);<br />        $this-&gt;DomXpath_for_node = <br />                    new Domxpath($this-&gt;<br />                                         DOMDocument_from_node);<br />    }<br /><br />    public function convertHTML()<br />    {    return $this-&gt;DOMDocument_from_node<br />                                                             -&gt;saveHTML();<br />    }<br /><br />    public /*DomNodeList*/ function applyXpath($xpath)<br />    {    return $this-&gt;DomXpath_for_node<br />                                                       -&gt;query($xpath);<br />    }<br />}<br /><br />(sorry for the display... What a terrible hinderance on the<br />part of php.net !)<br /><br />Then :<br />Make a new XPathableNode out of your parent node.<br />You may then retrieve a DOMNodeList from it by applying a<br />xpath (thus being able to specify the depth  and name of <br />elements you want).<br /><br />Has got me around some (of the many) DOM awkwardnesses a few times.<br /><br />;o)</span></code></div>
  </div>
 </div>
  <div class="note" id="73365">  <div class="votes">
    <div id="Vu73365">
    <a href="/manual/vote-note.php?id=73365&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73365">
    <a href="/manual/vote-note.php?id=73365&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73365" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#73365" class="name">
  <strong class="user"><em>brian dot reynolds at risaris dot com</em></strong></a><a class="genanchor" href="#73365"> &para;</a><div class="date" title="2007-02-20 01:09"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73365">
<div class="phpcode"><code><span class="html">I found the xml2array function below very useful, but there seems to be a bug in it. The $item variable was never getting set. I've expanded this out to be a bit more readable, and the corrected code is : <br /><br />function xmlToArray($n)<br />{<br />    $return=array();<br /><br />    foreach($n-&gt;childNodes as $nc){<br />        if( $nc-&gt;hasChildNodes() ){<br />            if( $n-&gt;firstChild-&gt;nodeName== $n-&gt;lastChild-&gt;nodeName&amp;&amp;$n-&gt;childNodes-&gt;length&gt;1){<br />                $item = $n-&gt;firstChild;<br />                $return[$nc-&gt;nodeName][]=$this-&gt;xmlToArray($item);<br />            }<br />            else{<br />                 $return[$nc-&gt;nodeName]=$this-&gt;xmlToArray($nc);<br />            }<br />       }<br />       else{<br />           $return=$nc-&gt;nodeValue;<br />       } <br />    }<br />    return $return;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="80724">  <div class="votes">
    <div id="Vu80724">
    <a href="/manual/vote-note.php?id=80724&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80724">
    <a href="/manual/vote-note.php?id=80724&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80724" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#80724" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#80724"> &para;</a><div class="date" title="2008-01-29 11:37"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80724">
<div class="phpcode"><code><span class="html">In response to...<br />"If you create your own custom element extending DOMElement and append him in place of the document element, you cannot access to any new members newly defined in your custom class via DOMDocument::$documentElement."<br /><br />... it is not a bug, it is a feature. The DOMDocument::$documentElement property name may be misleading but according to the DOM Level 2 Core specification it is a convenience attribute meant to access the root element of your DOMDocument. See here: <a href="http://www.w3.org/TR/DOM-Level-2-Core/core.html#i-Document" rel="nofollow" target="_blank">http://www.w3.org/TR/DOM-Level-2-Core/core.html#i-Document</a></span></code></div>
  </div>
 </div>
  <div class="note" id="80613">  <div class="votes">
    <div id="Vu80613">
    <a href="/manual/vote-note.php?id=80613&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80613">
    <a href="/manual/vote-note.php?id=80613&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80613" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#80613" class="name">
  <strong class="user"><em>ryoroxdahouse at hotmail dot com</em></strong></a><a class="genanchor" href="#80613"> &para;</a><div class="date" title="2008-01-25 12:14"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80613">
<div class="phpcode"><code><span class="html">I use DOM to generate dynamically XHTML document.<br /><br />When trying to extend the DOMDocument and DOMElement classes, I found a very annoying bug concerning DOMDocument::$documentElement.<br /><br />If you create your own custom element extending DOMElement and append him in place of the document element, you cannot access to any new members newly defined in your custom class via DOMDocument::$documentElement.<br /><br />In my situation, I cannot use DOMDocument::registerNodeClass() because the document element is not necessarily the base class for all the elements in my document.<br /><br />*******<br />problem<br />*******<br /><br />See bellow for the repro step:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">class </span><span class="default">MyElement </span><span class="keyword">extends </span><span class="default">DOMElement</span><span class="keyword">{<br />        public </span><span class="default">$myProp</span><span class="keyword">=</span><span class="string">"myProp"</span><span class="keyword">;<br />        public function </span><span class="default">myMethod</span><span class="keyword">(){<br />            return </span><span class="string">'myMethod()'</span><span class="keyword">;<br />        }<br />    }<br />    <br />    </span><span class="default">$myDocument</span><span class="keyword">=new </span><span class="default">DOMDocument</span><span class="keyword">();<br />    </span><span class="default">$myDocument</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(new </span><span class="default">MyElement</span><span class="keyword">(</span><span class="string">'myElement'</span><span class="keyword">,</span><span class="string">'myElement'</span><span class="keyword">));<br />    echo (</span><span class="string">'$myElement-&gt;myProp :'</span><span class="keyword">.</span><span class="default">$myDocument</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">-&gt;</span><span class="default">myProp</span><span class="keyword">.</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">);<br />    echo (</span><span class="string">'$myElement-&gt;myMethod :'</span><span class="keyword">.</span><span class="default">$myDocument</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">-&gt;</span><span class="default">myMethod</span><span class="keyword">().</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />will output:<br /><br />Notice: Undefined property: DOMElement::$myProp in C:\Program Files\EasyPHP 2.0b1\www\testDOMBug\test2.php on line 11<br />$myElement-&gt;myProp :<br /><br />Fatal error: Call to undefined method DOMElement::myMethod() in C:\Program Files\EasyPHP 2.0b1\www\testDOMBug\test2.php on line 12<br /><br />*******<br />solution<br />*******<br /><br />After searching around, I found a pretty odd way to fix this problem. It seems that you have to stock a reference to your appended document element in an user-defined (and persistent) variable (in other words, not only in DOMDocument::$documentElement). See below:<br /><br /><span class="default">&lt;?php    <br />    </span><span class="keyword">class </span><span class="default">MyElement </span><span class="keyword">extends </span><span class="default">DOMElement</span><span class="keyword">{<br />        public </span><span class="default">$myProp</span><span class="keyword">=</span><span class="string">"myProp"</span><span class="keyword">;<br />        public function </span><span class="default">myMethod</span><span class="keyword">(){<br />            return </span><span class="string">'myMethod()'</span><span class="keyword">;<br />        }<br />    }<br />    <br />    </span><span class="default">$myDocument</span><span class="keyword">=new </span><span class="default">DOMDocument</span><span class="keyword">();<br />    </span><span class="default">$mydocumentElement</span><span class="keyword">=</span><span class="default">$myDocument</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(new </span><span class="default">MyElement</span><span class="keyword">(</span><span class="string">'myElement'</span><span class="keyword">,</span><span class="string">'myElement'</span><span class="keyword">)); </span><span class="comment">//here is the hack<br />    </span><span class="keyword">echo (</span><span class="string">'$myElement-&gt;myProp :'</span><span class="keyword">.</span><span class="default">$myDocument</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">-&gt;</span><span class="default">myProp</span><span class="keyword">.</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">);<br />    echo (</span><span class="string">'$myElement-&gt;myMethod :'</span><span class="keyword">.</span><span class="default">$myDocument</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">-&gt;</span><span class="default">myMethod</span><span class="keyword">().</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />will output:<br /><br />$myElement-&gt;myProp :myProp<br />$myElement-&gt;myMethod :myMethod()<br /><br />Hope it will help.</span></code></div>
  </div>
 </div>
  <div class="note" id="81860">  <div class="votes">
    <div id="Vu81860">
    <a href="/manual/vote-note.php?id=81860&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81860">
    <a href="/manual/vote-note.php?id=81860&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81860" title="40% like this...">
    -4
    </div>
  </div>
  <a href="#81860" class="name">
  <strong class="user"><em>Sven Arduwie</em></strong></a><a class="genanchor" href="#81860"> &para;</a><div class="date" title="2008-03-16 06:28"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81860">
<div class="phpcode"><code><span class="html">I needed a function that quickly converts an xml with key/value pairs to an array.<br /><br />for example:<br />&lt;?xml version="1.0" encoding="UTF-8"?&gt;<br />&lt;test&gt;<br />    &lt;key id="Array key #1" value="Value #1"/&gt;<br />    &lt;key id="Array key #2" value="Value #2"/&gt;<br />    &lt;key id="Dupe" value="Duplicate keys"/&gt;<br />    &lt;key id="Dupe" value="create numeric arrays"/&gt;<br />    &lt;key id="And another key"&gt;<br />        &lt;![CDATA[<br />            Multiline<br />            data<br />            works<br />            just<br />            as<br />            well.<br />        ]]&gt;<br />    &lt;/key&gt;<br />    &lt;nested&gt;<br />        &lt;key id="Nested key" value="Nested data works as well, but it still results in a 1 dimensional array."/&gt;<br />    &lt;/nested&gt;<br />&lt;/test&gt;<br /><br />Results in the following array:<br />array(5) {<br />  ["Array key #1"]=&gt;<br />  string(8) "Value #1"<br />  ["Array key #2"]=&gt;<br />  string(8) "Value #2"<br />  ["Dupe"]=&gt;<br />  array(2) {<br />    [0]=&gt;<br />    string(14) "Duplicate keys"<br />    [1]=&gt;<br />    string(21) "create numeric arrays"<br />  }<br />  ["And another key"]=&gt;<br />  string(49) "Multiline<br />            data<br />            works<br />            just<br />            as<br />            well."<br />  ["Nested key"]=&gt;<br />  string(73) "Nested data works as well, but it still results in a 1 dimensional array."<br />}<br /><br />Here's the code:<br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">xml2array</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">) {<br />        </span><span class="default">$domDocument </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">;<br />        </span><span class="default">$domDocument</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br />        </span><span class="default">$domXPath </span><span class="keyword">= new </span><span class="default">DOMXPath</span><span class="keyword">(</span><span class="default">$domDocument</span><span class="keyword">);<br />        </span><span class="default">$array </span><span class="keyword">= array();<br />        foreach (</span><span class="default">$domXPath</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">'//key'</span><span class="keyword">) as </span><span class="default">$keyDOM</span><span class="keyword">) {<br />            </span><span class="default">$id </span><span class="keyword">= </span><span class="default">$keyDOM</span><span class="keyword">-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">'id'</span><span class="keyword">);<br />            </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$keyDOM</span><span class="keyword">-&gt;</span><span class="default">hasAttribute</span><span class="keyword">(</span><span class="string">'value'</span><span class="keyword">) ? </span><span class="default">$keyDOM</span><span class="keyword">-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">'value'</span><span class="keyword">) : </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$keyDOM</span><span class="keyword">-&gt;</span><span class="default">textContent</span><span class="keyword">);<br />            if (</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">)) {<br />                if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$id</span><span class="keyword">])) {<br />                    </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$id</span><span class="keyword">][] = </span><span class="default">$value</span><span class="keyword">;<br />                } else {<br />                    </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$id</span><span class="keyword">] = array(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$id</span><span class="keyword">]);<br />                    </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$id</span><span class="keyword">][] = </span><span class="default">$value</span><span class="keyword">;<br />                }<br />            } else {<br />                </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$id</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />            }<br />        }<br />        return </span><span class="default">$array</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78941">  <div class="votes">
    <div id="Vu78941">
    <a href="/manual/vote-note.php?id=78941&amp;page=book.dom&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78941">
    <a href="/manual/vote-note.php?id=78941&amp;page=book.dom&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78941" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#78941" class="name">
  <strong class="user"><em>jim.filter (at gmail.com)</em></strong></a><a class="genanchor" href="#78941"> &para;</a><div class="date" title="2007-11-03 07:42"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78941">
<div class="phpcode"><code><span class="html">Array to DOM<br /><br />Here is a recursive function to turn a multidimensional array into an XML document.  It will handle multiple elements of the same tag, but only one per parent element. IE: <br /><br />Can't generate:         Can generate:<br />&lt;root&gt;                  &lt;root&gt;<br />  &lt;sub1&gt;data1&lt;/sub1&gt;      &lt;subs1&gt;<br />  &lt;sub1&gt;data2&lt;/sub1&gt;         &lt;value&gt;data1&lt;/value&gt;<br />  &lt;sub2&gt;data1&lt;/sub2&gt;         &lt;value&gt;data2&lt;/value&gt;<br />  &lt;sub2&gt;data2&lt;/sub2&gt;      &lt;/subs1&gt;<br />&lt;/root&gt;                   &lt;subs2&gt;<br />                            &lt;value&gt;data1&lt;/value&gt;<br />                            &lt;value&gt;data2&lt;/value&gt;<br />                          &lt;subs2&gt;<br />                        &lt;/root&gt;<br /><br />Also, the function performs no type of error checking on your array and will throw a DOMException if a key value you used in your array contains invalid characters for a proper DOM tag. This function is untested for "deep" multidimensional arrays.<br /><br />Complete code ready to run with example:<br /><br /><span class="default">&lt;?PHP<br />  </span><span class="keyword">function </span><span class="default">AtoX</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$DOM</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">, </span><span class="default">$root</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">){<br />    <br />    if(</span><span class="default">$DOM  </span><span class="keyword">== </span><span class="default">null</span><span class="keyword">){</span><span class="default">$DOM  </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">, </span><span class="string">'iso-8859-1'</span><span class="keyword">);}<br />    if(</span><span class="default">$root </span><span class="keyword">== </span><span class="default">null</span><span class="keyword">){</span><span class="default">$root </span><span class="keyword">= </span><span class="default">$DOM</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$DOM</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'root'</span><span class="keyword">));}<br />    <br />    </span><span class="default">$name </span><span class="keyword">= </span><span class="default">$array</span><span class="keyword">[</span><span class="string">'#MULTIPLE_ELEMENT_NAME'</span><span class="keyword">];<br /><br />      foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">){    <br />        if(</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &amp;&amp; </span><span class="default">$name </span><span class="keyword">!= </span><span class="default">null</span><span class="keyword">){<br />          if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)){<br />            </span><span class="default">$subroot </span><span class="keyword">= </span><span class="default">$root</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$DOM</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">));<br />            </span><span class="default">AtoX</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$DOM</span><span class="keyword">, </span><span class="default">$subroot</span><span class="keyword">);<br />          }<br />          else if(</span><span class="default">is_scalar</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)){<br />            </span><span class="default">$root</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$DOM</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">));<br />          }<br />        }<br />        else if(</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &amp;&amp; </span><span class="default">$key </span><span class="keyword">!= </span><span class="string">'#MULTIPLE_ELEMENT_NAME'</span><span class="keyword">){<br />          if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)){<br />            </span><span class="default">$subroot </span><span class="keyword">= </span><span class="default">$root</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$DOM</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">));<br />            </span><span class="default">AtoX</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$DOM</span><span class="keyword">, </span><span class="default">$subroot</span><span class="keyword">);<br />          }<br />          else if(</span><span class="default">is_scalar</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)){<br />            </span><span class="default">$root</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$DOM</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">));<br />          }<br />        }<br />      }<br />    return </span><span class="default">$DOM</span><span class="keyword">;  <br />  }<br />  <br />  </span><span class="default">$array </span><span class="keyword">= array(<br />                    </span><span class="string">'#MULTIPLE_ELEMENT_NAME' </span><span class="keyword">=&gt; </span><span class="string">'GenericDatas'</span><span class="keyword">,<br />                    </span><span class="string">'Date'      </span><span class="keyword">=&gt; </span><span class="string">'November 03, 2007'</span><span class="keyword">,<br />                    </span><span class="string">'Company'   </span><span class="keyword">=&gt; </span><span class="string">'Facility One'</span><span class="keyword">,<br />                    </span><span class="string">'Field'     </span><span class="keyword">=&gt; </span><span class="string">'Facility Management Software'</span><span class="keyword">,<br />                    </span><span class="string">'Employees' </span><span class="keyword">=&gt; array(<br />                                      </span><span class="string">'#MULTIPLE_ELEMENT_NAME' </span><span class="keyword">=&gt; </span><span class="string">'Employee'</span><span class="keyword">,<br />                                      </span><span class="string">'Cindy'</span><span class="keyword">,<br />                                      </span><span class="string">'Sean'</span><span class="keyword">,<br />                                      </span><span class="string">'Joe'</span><span class="keyword">,<br />                                      </span><span class="string">'Owen'</span><span class="keyword">,<br />                                      </span><span class="string">'Jim'</span><span class="keyword">,<br />                                      </span><span class="string">'Dale'</span><span class="keyword">,<br />                                      </span><span class="string">'Kelly'</span><span class="keyword">,<br />                                      </span><span class="string">'Ryan'</span><span class="keyword">,<br />                                      </span><span class="string">'Johnathan'</span><span class="keyword">,<br />                                      </span><span class="string">'Robin'</span><span class="keyword">,<br />                                      </span><span class="string">'William Marcus'</span><span class="keyword">,<br />                                      </span><span class="string">'NewCoops' </span><span class="keyword">=&gt; array(<br />                                                          </span><span class="string">'#MULTIPLE_ELEMENT_NAME' </span><span class="keyword">=&gt; </span><span class="string">'Coop'</span><span class="keyword">,<br />                                                          </span><span class="string">'John'</span><span class="keyword">,<br />                                                          </span><span class="string">'Tyler'</span><span class="keyword">,<br />                                                          </span><span class="string">'Ray'</span><span class="keyword">,<br />                                                          </span><span class="string">'Dawn'<br />                                                         </span><span class="keyword">)     <br />                                    ),<br />                    </span><span class="string">'Datas'</span><span class="keyword">,<br />                    </span><span class="string">'DATAS'</span><span class="keyword">,<br />                    </span><span class="string">'OtherDatas'<br />                </span><span class="keyword">);<br />  <br />  </span><span class="default">$DOM  </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">, </span><span class="string">'iso-8859-1'</span><span class="keyword">);<br />  </span><span class="default">$root </span><span class="keyword">= </span><span class="default">$DOM</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$DOM</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'CompanyData'</span><span class="keyword">)); <br />  </span><span class="default">$DOM  </span><span class="keyword">= </span><span class="default">AtoX</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$DOM</span><span class="keyword">, </span><span class="default">$root</span><span class="keyword">);<br />  </span><span class="default">$DOM</span><span class="keyword">-&gt;</span><span class="default">save</span><span class="keyword">(</span><span class="string">'C:\test.xml'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.dom&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.dom.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.xml.php">XML Manipulation</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="book.dom.php" title="DOM">DOM</a>
                        </li>
                                                <li class="">
                            <a href="book.libxml.php" title="libxml">libxml</a>
                        </li>
                                                <li class="">
                            <a href="book.simplexml.php" title="SimpleXML">SimpleXML</a>
                        </li>
                                                <li class="">
                            <a href="book.wddx.php" title="WDDX">WDDX</a>
                        </li>
                                                <li class="">
                            <a href="book.xmldiff.php" title="XMLDiff">XMLDiff</a>
                        </li>
                                                <li class="">
                            <a href="book.xml.php" title="XML Parser">XML Parser</a>
                        </li>
                                                <li class="">
                            <a href="book.xmlreader.php" title="XMLReader">XMLReader</a>
                        </li>
                                                <li class="">
                            <a href="book.xmlwriter.php" title="XMLWriter">XMLWriter</a>
                        </li>
                                                <li class="">
                            <a href="book.xsl.php" title="XSL">XSL</a>
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
