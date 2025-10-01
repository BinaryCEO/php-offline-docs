<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SimpleXML - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.simplexml.php">
 <link rel="shorturl" href="https://www.php.net/simplexml">
 <link rel="alternate" href="https://www.php.net/simplexml" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.xml.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.libxml-use-internal-errors.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.simplexml.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.simplexml.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.simplexml.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.simplexml.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.simplexml.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.simplexml.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.simplexml.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.simplexml.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.simplexml.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.simplexml.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.simplexml.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.simplexml.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="SimpleXML" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SimpleXML - Manual" />
<meta name="twitter:description" content="SimpleXML" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SimpleXML - Manual" />
<meta itemprop="description" content="SimpleXML" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="SimpleXML" />

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
        <a href="intro.simplexml.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.libxml-use-internal-errors.php">
          &laquo; libxml_use_internal_errors        </a>
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
            <option value='en/book.simplexml.php' selected="selected">English</option>
            <option value='de/book.simplexml.php'>German</option>
            <option value='es/book.simplexml.php'>Spanish</option>
            <option value='fr/book.simplexml.php'>French</option>
            <option value='it/book.simplexml.php'>Italian</option>
            <option value='ja/book.simplexml.php'>Japanese</option>
            <option value='pt_BR/book.simplexml.php'>Brazilian Portuguese</option>
            <option value='ru/book.simplexml.php'>Russian</option>
            <option value='tr/book.simplexml.php'>Turkish</option>
            <option value='uk/book.simplexml.php'>Ukrainian</option>
            <option value='zh/book.simplexml.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.simplexml" class="book">
 
 <h1 class="title">SimpleXML</h1>

 
 
 

 







 







 




 




 








<ul class="chunklist chunklist_book"><li><a href="intro.simplexml.php">Introduction</a></li><li><a href="simplexml.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="simplexml.requirements.php">Requirements</a></li><li><a href="simplexml.installation.php">Installation</a></li></ul></li><li><a href="simplexml.examples.php">Examples</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="simplexml.examples-basic.php">Basic SimpleXML usage</a></li><li><a href="simplexml.examples-errors.php">Dealing with XML errors</a></li></ul></li><li><a href="class.simplexmlelement.php">SimpleXMLElement</a> — The SimpleXMLElement class<ul class="chunklist chunklist_book chunklist_children"><li><a href="simplexmlelement.addattribute.php">SimpleXMLElement::addAttribute</a> — Adds an attribute to the SimpleXML element</li><li><a href="simplexmlelement.addchild.php">SimpleXMLElement::addChild</a> — Adds a child element to the XML node</li><li><a href="simplexmlelement.asxml.php">SimpleXMLElement::asXML</a> — Return a well-formed XML string based on SimpleXML element</li><li><a href="simplexmlelement.attributes.php">SimpleXMLElement::attributes</a> — Identifies an element's attributes</li><li><a href="simplexmlelement.children.php">SimpleXMLElement::children</a> — Finds children of given node</li><li><a href="simplexmlelement.construct.php">SimpleXMLElement::__construct</a> — Creates a new SimpleXMLElement object</li><li><a href="simplexmlelement.count.php">SimpleXMLElement::count</a> — Counts the children of an element</li><li><a href="simplexmlelement.current.php">SimpleXMLElement::current</a> — Returns the current element</li><li><a href="simplexmlelement.getdocnamespaces.php">SimpleXMLElement::getDocNamespaces</a> — Returns namespaces declared in document</li><li><a href="simplexmlelement.getname.php">SimpleXMLElement::getName</a> — Gets the name of the XML element</li><li><a href="simplexmlelement.getnamespaces.php">SimpleXMLElement::getNamespaces</a> — Returns namespaces used in document</li><li><a href="simplexmlelement.getchildren.php">SimpleXMLElement::getChildren</a> — Returns the sub-elements of the current element</li><li><a href="simplexmlelement.haschildren.php">SimpleXMLElement::hasChildren</a> — Checks whether the current element has sub elements</li><li><a href="simplexmlelement.key.php">SimpleXMLElement::key</a> — Return current key</li><li><a href="simplexmlelement.next.php">SimpleXMLElement::next</a> — Move to next element</li><li><a href="simplexmlelement.registerxpathnamespace.php">SimpleXMLElement::registerXPathNamespace</a> — Creates a prefix/ns context for the next XPath query</li><li><a href="simplexmlelement.rewind.php">SimpleXMLElement::rewind</a> — Rewind to the first element</li><li><a href="simplexmlelement.savexml.php">SimpleXMLElement::saveXML</a> — Alias of SimpleXMLElement::asXML</li><li><a href="simplexmlelement.tostring.php">SimpleXMLElement::__toString</a> — Returns the string content</li><li><a href="simplexmlelement.valid.php">SimpleXMLElement::valid</a> — Check whether the current element is valid</li><li><a href="simplexmlelement.xpath.php">SimpleXMLElement::xpath</a> — Runs XPath query on XML data</li></ul></li><li><a href="class.simplexmliterator.php">SimpleXMLIterator</a> — The SimpleXMLIterator class</li><li><a href="ref.simplexml.php">SimpleXML Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.simplexml-import-dom.php">simplexml_import_dom</a> — Get a SimpleXMLElement object from an XML or HTML node</li><li><a href="function.simplexml-load-file.php">simplexml_load_file</a> — Interprets an XML file into an object</li><li><a href="function.simplexml-load-string.php">simplexml_load_string</a> — Interprets a string of XML into an object</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/simplexml/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.simplexml%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.simplexml&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.simplexml.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">15 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="105330">  <div class="votes">
    <div id="Vu105330">
    <a href="/manual/vote-note.php?id=105330&amp;page=book.simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105330">
    <a href="/manual/vote-note.php?id=105330&amp;page=book.simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105330" title="68% like this...">
    288
    </div>
  </div>
  <a href="#105330" class="name">
  <strong class="user"><em>soloman at textgrid dot com</em></strong></a><a class="genanchor" href="#105330"> &para;</a><div class="date" title="2011-08-09 05:06"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105330">
<div class="phpcode"><code><span class="html">Three line xml2array:<br /><br /><span class="default">&lt;?php<br /><br />$xml </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$xmlstring</span><span class="keyword">);<br /></span><span class="default">$json </span><span class="keyword">= </span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">json_decode</span><span class="keyword">(</span><span class="default">$json</span><span class="keyword">,</span><span class="default">TRUE</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Ta da!</span></code></div>
  </div>
 </div>
  <div class="note" id="87083">  <div class="votes">
    <div id="Vu87083">
    <a href="/manual/vote-note.php?id=87083&amp;page=book.simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87083">
    <a href="/manual/vote-note.php?id=87083&amp;page=book.simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87083" title="61% like this...">
    6
    </div>
  </div>
  <a href="#87083" class="name">
  <strong class="user"><em>QLeap</em></strong></a><a class="genanchor" href="#87083"> &para;</a><div class="date" title="2008-11-18 02:27"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87083">
<div class="phpcode"><code><span class="html">Storing SimpleXMLElement values in $_SESSION does not work. Saving the results as an object or individual elements of the object will result in the dreaded "Warning: session_start() [function.session-start]: Node no longer exists" error.<br /><br />For example, this does not work:<br /><br />    $xml  = new SimpleXMLElement($page);<br />    $country  = $xml-&gt;Response-&gt;Placemark-&gt;AddressDetails-&gt;Country-&gt;CountryNameCode;<br />    $_SESSION['country'] = $country;<br /><br />This will work:<br /><br />    $_SESSION['country'] = (string) $country;</span></code></div>
  </div>
 </div>
  <div class="note" id="88457">  <div class="votes">
    <div id="Vu88457">
    <a href="/manual/vote-note.php?id=88457&amp;page=book.simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88457">
    <a href="/manual/vote-note.php?id=88457&amp;page=book.simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88457" title="60% like this...">
    4
    </div>
  </div>
  <a href="#88457" class="name">
  <strong class="user"><em>oscargodson at gmail dot com</em></strong></a><a class="genanchor" href="#88457"> &para;</a><div class="date" title="2009-01-25 03:05"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88457">
<div class="phpcode"><code><span class="html">To add to what others have said, you can't directly put a $_GET or $_POST value into a variable then into an attribute using SimpleXML. You must first convert it to an integer.<br /><br />This will NOT work<br /><br /><span class="default">&lt;?php<br />      $page_id </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">];<br />      echo </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">page</span><span class="keyword">[</span><span class="default">$page_id</span><span class="keyword">]<br /></span><span class="default">?&gt;<br /></span><br />You will get something like:<br />Notice: Trying to get property of non-object in /Applications/MAMP/htdocs/mysite/index.php on line 10<br /><br />However, this WILL work and is much simpler then using (string) or other methods.<br /><span class="default">&lt;?php<br />   $page_id </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">]);<br />   echo </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">page</span><span class="keyword">[</span><span class="default">$page_id</span><span class="keyword">]<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108688">  <div class="votes">
    <div id="Vu108688">
    <a href="/manual/vote-note.php?id=108688&amp;page=book.simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108688">
    <a href="/manual/vote-note.php?id=108688&amp;page=book.simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108688" title="57% like this...">
    10
    </div>
  </div>
  <a href="#108688" class="name">
  <strong class="user"><em>xaviered at gmail dot com</em></strong></a><a class="genanchor" href="#108688"> &para;</a><div class="date" title="2012-05-17 07:00"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108688">
<div class="phpcode"><code><span class="html">Here is a recursive function that will convert a given SimpleXMLElement object into an array, preserving namespaces and attributes.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">xmlObjToArr</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">) {
<br />        </span><span class="default">$namespace </span><span class="keyword">= </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">getDocNamespaces</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);
<br />        </span><span class="default">$namespace</span><span class="keyword">[</span><span class="default">NULL</span><span class="keyword">] = </span><span class="default">NULL</span><span class="keyword">;
<br />        
<br />        </span><span class="default">$children </span><span class="keyword">= array();
<br />        </span><span class="default">$attributes </span><span class="keyword">= array();
<br />        </span><span class="default">$name </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">((string)</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">());
<br />        
<br />        </span><span class="default">$text </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">((string)</span><span class="default">$obj</span><span class="keyword">);
<br />        if( </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) &lt;= </span><span class="default">0 </span><span class="keyword">) {
<br />            </span><span class="default">$text </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;
<br />        }
<br />        
<br />        </span><span class="comment">// get info for all namespaces
<br />        </span><span class="keyword">if(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">)) {
<br />            foreach( </span><span class="default">$namespace </span><span class="keyword">as </span><span class="default">$ns</span><span class="keyword">=&gt;</span><span class="default">$nsUrl </span><span class="keyword">) {
<br />                </span><span class="comment">// atributes
<br />                </span><span class="default">$objAttributes </span><span class="keyword">= </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">(</span><span class="default">$ns</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />                foreach( </span><span class="default">$objAttributes </span><span class="keyword">as </span><span class="default">$attributeName </span><span class="keyword">=&gt; </span><span class="default">$attributeValue </span><span class="keyword">) {
<br />                    </span><span class="default">$attribName </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">((string)</span><span class="default">$attributeName</span><span class="keyword">));
<br />                    </span><span class="default">$attribVal </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">((string)</span><span class="default">$attributeValue</span><span class="keyword">);
<br />                    if (!empty(</span><span class="default">$ns</span><span class="keyword">)) {
<br />                        </span><span class="default">$attribName </span><span class="keyword">= </span><span class="default">$ns </span><span class="keyword">. </span><span class="string">':' </span><span class="keyword">. </span><span class="default">$attribName</span><span class="keyword">;
<br />                    }
<br />                    </span><span class="default">$attributes</span><span class="keyword">[</span><span class="default">$attribName</span><span class="keyword">] = </span><span class="default">$attribVal</span><span class="keyword">;
<br />                }
<br />                
<br />                </span><span class="comment">// children
<br />                </span><span class="default">$objChildren </span><span class="keyword">= </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">children</span><span class="keyword">(</span><span class="default">$ns</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />                foreach( </span><span class="default">$objChildren </span><span class="keyword">as </span><span class="default">$childName</span><span class="keyword">=&gt;</span><span class="default">$child </span><span class="keyword">) {
<br />                    </span><span class="default">$childName </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">((string)</span><span class="default">$childName</span><span class="keyword">);
<br />                    if( !empty(</span><span class="default">$ns</span><span class="keyword">) ) {
<br />                        </span><span class="default">$childName </span><span class="keyword">= </span><span class="default">$ns</span><span class="keyword">.</span><span class="string">':'</span><span class="keyword">.</span><span class="default">$childName</span><span class="keyword">;
<br />                    }
<br />                    </span><span class="default">$children</span><span class="keyword">[</span><span class="default">$childName</span><span class="keyword">][] = </span><span class="default">xmlObjToArr</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">);
<br />                }
<br />            }
<br />        }
<br />        
<br />        return array(
<br />            </span><span class="string">'name'</span><span class="keyword">=&gt;</span><span class="default">$name</span><span class="keyword">,
<br />            </span><span class="string">'text'</span><span class="keyword">=&gt;</span><span class="default">$text</span><span class="keyword">,
<br />            </span><span class="string">'attributes'</span><span class="keyword">=&gt;</span><span class="default">$attributes</span><span class="keyword">,
<br />            </span><span class="string">'children'</span><span class="keyword">=&gt;</span><span class="default">$children
<br />        </span><span class="keyword">);
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84135">  <div class="votes">
    <div id="Vu84135">
    <a href="/manual/vote-note.php?id=84135&amp;page=book.simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84135">
    <a href="/manual/vote-note.php?id=84135&amp;page=book.simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84135" title="56% like this...">
    5
    </div>
  </div>
  <a href="#84135" class="name">
  <strong class="user"><em>aalaap at gmail dot com</em></strong></a><a class="genanchor" href="#84135"> &para;</a><div class="date" title="2008-06-30 06:58"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84135">
<div class="phpcode"><code><span class="html">Here are two quick and dirty functions that use SimpleXML to detect if a feed xml is RSS or ATOM:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">is_rss</span><span class="keyword">(</span><span class="default">$feedxml</span><span class="keyword">) {
<br />    @</span><span class="default">$feed </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(</span><span class="default">$feedxml</span><span class="keyword">);
<br />
<br />    if (</span><span class="default">$feed</span><span class="keyword">-&gt;</span><span class="default">channel</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">) {
<br />        return </span><span class="default">true</span><span class="keyword">;
<br />    } else {
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    }
<br />}
<br />
<br />function </span><span class="default">is_atom</span><span class="keyword">(</span><span class="default">$feedxml</span><span class="keyword">) {
<br />    @</span><span class="default">$feed </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(</span><span class="default">$feedxml</span><span class="keyword">);
<br />
<br />    if (</span><span class="default">$feed</span><span class="keyword">-&gt;</span><span class="default">entry</span><span class="keyword">) {
<br />        return </span><span class="default">true</span><span class="keyword">;
<br />    } else {
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />The functions take in the full text feed (retrieved via cURL, for example) and return a true or a false based on the result.</span></code></div>
  </div>
 </div>
  <div class="note" id="110958">  <div class="votes">
    <div id="Vu110958">
    <a href="/manual/vote-note.php?id=110958&amp;page=book.simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110958">
    <a href="/manual/vote-note.php?id=110958&amp;page=book.simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110958" title="54% like this...">
    5
    </div>
  </div>
  <a href="#110958" class="name">
  <strong class="user"><em>whyme</em></strong></a><a class="genanchor" href="#110958"> &para;</a><div class="date" title="2012-12-28 09:55"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110958">
<div class="phpcode"><code><span class="html">Simple means simple.  If you know the structure and just want the value of a tag:
<br />
<br /><span class="default">&lt;?php
<br />$xml </span><span class="keyword">= </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="default">$xmlfile</span><span class="keyword">);
<br />print </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">City</span><span class="keyword">-&gt;</span><span class="default">Street</span><span class="keyword">-&gt;</span><span class="default">Address</span><span class="keyword">-&gt;</span><span class="default">HouseColor</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />Warning, numbers can come out as strings, empty elements like &lt;HouseColor&gt;&lt;/HouseColor&gt; come out as array(0)</span></code></div>
  </div>
 </div>
  <div class="note" id="95762">  <div class="votes">
    <div id="Vu95762">
    <a href="/manual/vote-note.php?id=95762&amp;page=book.simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95762">
    <a href="/manual/vote-note.php?id=95762&amp;page=book.simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95762" title="55% like this...">
    3
    </div>
  </div>
  <a href="#95762" class="name">
  <strong class="user"><em>mahmutta at gmail dot com</em></strong></a><a class="genanchor" href="#95762"> &para;</a><div class="date" title="2010-01-20 12:58"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95762">
<div class="phpcode"><code><span class="html">while using simple xml and get double or float int value from xml object for using math operations (+ * - / ) some errors happens on the operation, this is because of simple xml returns everythings to objects. <br />exmple;<br /><br /><span class="default">&lt;?php<br /><br />$name </span><span class="keyword">= </span><span class="string">"somestring"</span><span class="keyword">;<br /></span><span class="default">$size </span><span class="keyword">= </span><span class="default">11.45</span><span class="keyword">;<br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="string">'<br />&lt;xml&gt;<br /> &lt;name&gt;somestring&lt;/name&gt;<br /> &lt;size&gt;11.45&lt;/size&gt;<br />&lt;/xml&gt;'</span><span class="keyword">;<br /><br /> <br /></span><span class="default">$xmlget </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">)<br /><br />echo </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">size</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">;    </span><span class="comment">// 20  its false<br />// ($xml-&gt;size is an object (int)11 and  (45) )<br /><br />// this is true<br /></span><span class="keyword">echo </span><span class="default">$size</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">;            </span><span class="comment">// 22.90 <br /></span><span class="keyword">echo (float)</span><span class="default">$size</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">;   </span><span class="comment">// 22.90 <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113348">  <div class="votes">
    <div id="Vu113348">
    <a href="/manual/vote-note.php?id=113348&amp;page=book.simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113348">
    <a href="/manual/vote-note.php?id=113348&amp;page=book.simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113348" title="52% like this...">
    3
    </div>
  </div>
  <a href="#113348" class="name">
  <strong class="user"><em>dkrnl at yandex dot ru</em></strong></a><a class="genanchor" href="#113348"> &para;</a><div class="date" title="2013-09-30 02:57"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113348">
<div class="phpcode"><code><span class="html">Wrapper XMLReader class, for simple SAX-reading huge xml:<br /><a href="https://github.com/dkrnl/SimpleXMLReader" rel="nofollow" target="_blank">https://github.com/dkrnl/SimpleXMLReader</a><br /><br />Usage example: <a href="http://github.com/dkrnl/SimpleXMLReader/blob/master/examples/example1.php" rel="nofollow" target="_blank">http://github.com/dkrnl/SimpleXMLReader/blob/master/examples/example1.php</a><br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Simple XML Reader<br /> *<br /> * @license Public Domain<br /> * @author Dmitry Pyatkov(aka dkrnl) &lt;dkrnl@yandex.ru&gt;<br /> * @url <a href="http://github.com/dkrnl/SimpleXMLReader" rel="nofollow" target="_blank">http://github.com/dkrnl/SimpleXMLReader</a><br /> */<br /></span><span class="keyword">class </span><span class="default">SimpleXMLReader </span><span class="keyword">extends </span><span class="default">XMLReader<br /></span><span class="keyword">{<br /><br />    </span><span class="comment">/**<br />     * Callbacks<br />     *<br />     * @var array<br />     */<br />    </span><span class="keyword">protected </span><span class="default">$callback </span><span class="keyword">= array();<br /><br />    </span><span class="comment">/**<br />     * Add node callback<br />     *<br />     * @param  string   $name<br />     * @param  callback $callback<br />     * @param  integer  $nodeType<br />     * @return SimpleXMLReader<br />     */<br />    </span><span class="keyword">public function </span><span class="default">registerCallback</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$callback</span><span class="keyword">, </span><span class="default">$nodeType </span><span class="keyword">= </span><span class="default">XMLREADER</span><span class="keyword">::</span><span class="default">ELEMENT</span><span class="keyword">)<br />    {<br />        if (isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callback</span><span class="keyword">[</span><span class="default">$nodeType</span><span class="keyword">][</span><span class="default">$name</span><span class="keyword">])) {<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Already exists callback </span><span class="default">$name</span><span class="string">(</span><span class="default">$nodeType</span><span class="string">)."</span><span class="keyword">);<br />        }<br />        if (!</span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$callback</span><span class="keyword">)) {<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Already exists parser callback </span><span class="default">$name</span><span class="string">(</span><span class="default">$nodeType</span><span class="string">)."</span><span class="keyword">);<br />        }<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callback</span><span class="keyword">[</span><span class="default">$nodeType</span><span class="keyword">][</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">$callback</span><span class="keyword">;<br />        return </span><span class="default">$this</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/**<br />     * Remove node callback<br />     *<br />     * @param  string  $name<br />     * @param  integer $nodeType<br />     * @return SimpleXMLReader<br />     */<br />    </span><span class="keyword">public function </span><span class="default">unRegisterCallback</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$nodeType </span><span class="keyword">= </span><span class="default">XMLREADER</span><span class="keyword">::</span><span class="default">ELEMENT</span><span class="keyword">)<br />    {<br />        if (!isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callback</span><span class="keyword">[</span><span class="default">$nodeType</span><span class="keyword">][</span><span class="default">$name</span><span class="keyword">])) {<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Unknow parser callback </span><span class="default">$name</span><span class="string">(</span><span class="default">$nodeType</span><span class="string">)."</span><span class="keyword">);<br />        }<br />        unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callback</span><span class="keyword">[</span><span class="default">$nodeType</span><span class="keyword">][</span><span class="default">$name</span><span class="keyword">]);<br />        return </span><span class="default">$this</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/**<br />     * Run parser<br />     *<br />     * @return void<br />     */<br />    </span><span class="keyword">public function </span><span class="default">parse</span><span class="keyword">()<br />    {<br />        if (empty(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callback</span><span class="keyword">)) {<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Empty parser callback."</span><span class="keyword">);<br />        }<br />        </span><span class="default">$continue </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        while (</span><span class="default">$continue </span><span class="keyword">&amp;&amp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">read</span><span class="keyword">()) {<br />            if (isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callback</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">nodeType</span><span class="keyword">][</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">])) {<br />                </span><span class="default">$continue </span><span class="keyword">= </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callback</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">nodeType</span><span class="keyword">][</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">], </span><span class="default">$this</span><span class="keyword">);<br />            }<br />        }<br />    }<br /><br />    </span><span class="comment">/**<br />     * Run XPath query on current node<br />     *<br />     * @param  string $path<br />     * @param  string $version<br />     * @param  string $encoding<br />     * @return array(SimpleXMLElement)<br />     */<br />    </span><span class="keyword">public function </span><span class="default">expandXpath</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">$version </span><span class="keyword">= </span><span class="string">"1.0"</span><span class="keyword">, </span><span class="default">$encoding </span><span class="keyword">= </span><span class="string">"UTF-8"</span><span class="keyword">)<br />    {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">expandSimpleXml</span><span class="keyword">(</span><span class="default">$version</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">)-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/**<br />     * Expand current node to string<br />     *<br />     * @param  string $version<br />     * @param  string $encoding<br />     * @return SimpleXMLElement<br />     */<br />    </span><span class="keyword">public function </span><span class="default">expandString</span><span class="keyword">(</span><span class="default">$version </span><span class="keyword">= </span><span class="string">"1.0"</span><span class="keyword">, </span><span class="default">$encoding </span><span class="keyword">= </span><span class="string">"UTF-8"</span><span class="keyword">)<br />    {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">expandSimpleXml</span><span class="keyword">(</span><span class="default">$version</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">)-&gt;</span><span class="default">asXML</span><span class="keyword">();<br />    }<br /><br />    </span><span class="comment">/**<br />     * Expand current node to SimpleXMLElement<br />     *<br />     * @param  string $version<br />     * @param  string $encoding<br />     * @param  string $className<br />     * @return SimpleXMLElement<br />     */<br />    </span><span class="keyword">public function </span><span class="default">expandSimpleXml</span><span class="keyword">(</span><span class="default">$version </span><span class="keyword">= </span><span class="string">"1.0"</span><span class="keyword">, </span><span class="default">$encoding </span><span class="keyword">= </span><span class="string">"UTF-8"</span><span class="keyword">, </span><span class="default">$className </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />    {<br />        </span><span class="default">$element </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">expand</span><span class="keyword">();<br />        </span><span class="default">$document </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">(</span><span class="default">$version</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">);<br />        </span><span class="default">$node </span><span class="keyword">= </span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">importNode</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        </span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">);<br />        return </span><span class="default">simplexml_import_dom</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">, </span><span class="default">$className</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/**<br />     * Expand current node to DomDocument<br />     *<br />     * @param  string $version<br />     * @param  string $encoding<br />     * @return DomDocument<br />     */<br />    </span><span class="keyword">public function </span><span class="default">expandDomDocument</span><span class="keyword">(</span><span class="default">$version </span><span class="keyword">= </span><span class="string">"1.0"</span><span class="keyword">, </span><span class="default">$encoding </span><span class="keyword">= </span><span class="string">"UTF-8"</span><span class="keyword">)<br />    {<br />        </span><span class="default">$element </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">expand</span><span class="keyword">();<br />        </span><span class="default">$document </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">(</span><span class="default">$version</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">);<br />        </span><span class="default">$node </span><span class="keyword">= </span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">importNode</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        </span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">);<br />        return </span><span class="default">$document</span><span class="keyword">;<br />    }<br /><br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="103816">  <div class="votes">
    <div id="Vu103816">
    <a href="/manual/vote-note.php?id=103816&amp;page=book.simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103816">
    <a href="/manual/vote-note.php?id=103816&amp;page=book.simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103816" title="53% like this...">
    4
    </div>
  </div>
  <a href="#103816" class="name">
  <strong class="user"><em>streaver91 at gmail dot com</em></strong></a><a class="genanchor" href="#103816"> &para;</a><div class="date" title="2011-05-04 08:49"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103816">
<div class="phpcode"><code><span class="html">The BIGGEST differece between an XML and a PHP array is that in an XML file, the name of elements can be the same even if they are siblings, eg. "&lt;pa&gt;&lt;ch /&gt;&lt;ch /&gt;&lt;ch /&gt;&lt;/pa&gt;", while in an PHP array, the key of which must be different.
<br />
<br />I think the array structure developed by svdmeer can fit for XML, and fits well.
<br />
<br />here is an example array converted from an xml file:
<br />array(
<br />"@tag"=&gt;"name",
<br />"@attr"=&gt;array(
<br />    "id"=&gt;"1","class"=&gt;"2")
<br />"@text"=&gt;"some text",
<br />)
<br />
<br />or if it has childrens, that can be:
<br />
<br />array(
<br />"@tag"=&gt;"name",
<br />"@attr"=&gt;array(
<br />    "id"=&gt;"1","class"=&gt;"2")
<br />"@items"=&gt;array(
<br />    0=&gt;array(
<br />        "@tag"=&gt;"name","@text"=&gt;"some text"
<br />    )
<br />)
<br />
<br />Also, I wrote a function that can change that array back to XML.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">array2XML</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">,</span><span class="default">$root</span><span class="keyword">) {
<br /></span><span class="default">$xml </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(</span><span class="string">"&lt;?xml version=\"1.0\" encoding=\"utf-8\" ?&gt;&lt;</span><span class="keyword">{</span><span class="default">$root</span><span class="keyword">}</span><span class="string">&gt;&lt;/</span><span class="keyword">{</span><span class="default">$root</span><span class="keyword">}</span><span class="string">&gt;"</span><span class="keyword">); 
<br /></span><span class="default">$f </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$f,$c,$a'</span><span class="keyword">,</span><span class="string">' 
<br />        foreach($a as $v) {
<br />            if(isset($v["@text"])) {
<br />                $ch = $c-&gt;addChild($v["@tag"],$v["@text"]);
<br />            } else {
<br />                $ch = $c-&gt;addChild($v["@tag"]);
<br />                if(isset($v["@items"])) {
<br />                    $f($f,$ch,$v["@items"]);
<br />                }
<br />            }
<br />            if(isset($v["@attr"])) {
<br />                foreach($v["@attr"] as $attr =&gt; $val) {
<br />                    $ch-&gt;addAttribute($attr,$val);
<br />                }
<br />            }
<br />        }'</span><span class="keyword">);
<br /></span><span class="default">$f</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">,</span><span class="default">$xml</span><span class="keyword">,</span><span class="default">$arr</span><span class="keyword">);
<br />return </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">asXML</span><span class="keyword">();
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101063">  <div class="votes">
    <div id="Vu101063">
    <a href="/manual/vote-note.php?id=101063&amp;page=book.simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101063">
    <a href="/manual/vote-note.php?id=101063&amp;page=book.simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101063" title="53% like this...">
    3
    </div>
  </div>
  <a href="#101063" class="name">
  <strong class="user"><em>philipp at strazny dot com</em></strong></a><a class="genanchor" href="#101063"> &para;</a><div class="date" title="2010-11-23 05:33"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101063">
<div class="phpcode"><code><span class="html">Here's a quick way to dump the nodeValues from SimpleXML into an array using the path to each nodeValue as key. The paths are compatible with e.g. DOMXPath. I use this when I need to update values externally (i.e. in code that doesn't know about the underlying xml). Then I use DOMXPath to find the node containing the original value and update it.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">XMLToArrayFlat</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">, &amp;</span><span class="default">$return</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">, </span><span class="default">$root</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$children </span><span class="keyword">= array();
<br />    if (</span><span class="default">$xml </span><span class="keyword">instanceof </span><span class="default">SimpleXMLElement</span><span class="keyword">) {
<br />        </span><span class="default">$children </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">children</span><span class="keyword">();
<br />        if (</span><span class="default">$root</span><span class="keyword">){ </span><span class="comment">// we're at root
<br />            </span><span class="default">$path </span><span class="keyword">.= </span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">();
<br />        }
<br />    }
<br />    if ( </span><span class="default">count</span><span class="keyword">(</span><span class="default">$children</span><span class="keyword">) == </span><span class="default">0 </span><span class="keyword">){
<br />        </span><span class="default">$return</span><span class="keyword">[</span><span class="default">$path</span><span class="keyword">] = (string)</span><span class="default">$xml</span><span class="keyword">;
<br />        return;
<br />    }
<br />    </span><span class="default">$seen</span><span class="keyword">=array();
<br />    foreach (</span><span class="default">$children </span><span class="keyword">as </span><span class="default">$child </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {
<br />        </span><span class="default">$childname </span><span class="keyword">= (</span><span class="default">$child </span><span class="keyword">instanceof </span><span class="default">SimpleXMLElement</span><span class="keyword">)?</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">():</span><span class="default">$child</span><span class="keyword">;
<br />        if ( !isset(</span><span class="default">$seen</span><span class="keyword">[</span><span class="default">$childname</span><span class="keyword">])){
<br />            </span><span class="default">$seen</span><span class="keyword">[</span><span class="default">$childname</span><span class="keyword">]=</span><span class="default">0</span><span class="keyword">;
<br />        }
<br />        </span><span class="default">$seen</span><span class="keyword">[</span><span class="default">$childname</span><span class="keyword">]++;
<br />        </span><span class="default">XMLToArrayFlat</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$return</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$child</span><span class="keyword">.</span><span class="string">'['</span><span class="keyword">.</span><span class="default">$seen</span><span class="keyword">[</span><span class="default">$childname</span><span class="keyword">].</span><span class="string">']'</span><span class="keyword">);
<br />    }
<br />} 
<br /></span><span class="default">?&gt;
<br /></span>
<br />Use like this:
<br />
<br /><span class="default">&lt;?php
<br />$xml </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(...</span><span class="default">some xml string</span><span class="keyword">...);
<br /></span><span class="default">$xmlarray </span><span class="keyword">= array(); </span><span class="comment">// this will hold the flattened data
<br /></span><span class="default">XMLToArrayFlat</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">, </span><span class="default">$xmlarray</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />You can also pull multiple files in one array:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">foreach(</span><span class="default">$files </span><span class="keyword">as </span><span class="default">$file</span><span class="keyword">){
<br />    </span><span class="default">$xml </span><span class="keyword">= </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />    </span><span class="default">XMLToArrayFlat</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">, </span><span class="default">$xmlarray</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">.</span><span class="string">':'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>The respective filename/path is thus prefixed to each key.</span></code></div>
  </div>
 </div>
  <div class="note" id="100981">  <div class="votes">
    <div id="Vu100981">
    <a href="/manual/vote-note.php?id=100981&amp;page=book.simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100981">
    <a href="/manual/vote-note.php?id=100981&amp;page=book.simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100981" title="51% like this...">
    1
    </div>
  </div>
  <a href="#100981" class="name">
  <strong class="user"><em>kristof at viewranger dot com</em></strong></a><a class="genanchor" href="#100981"> &para;</a><div class="date" title="2010-11-18 05:14"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100981">
<div class="phpcode"><code><span class="html">If you tried to load an XML file with this, but the CDATA parts were not loaded for some reason, is because you should do it this way:<br /><br />$xml = simplexml_load_file($this-&gt;filename, 'SimpleXMLElement', LIBXML_NOCDATA);<br /><br />This converts CDATA to String in the returning object.</span></code></div>
  </div>
 </div>
  <div class="note" id="101949">  <div class="votes">
    <div id="Vu101949">
    <a href="/manual/vote-note.php?id=101949&amp;page=book.simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101949">
    <a href="/manual/vote-note.php?id=101949&amp;page=book.simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101949" title="51% like this...">
    1
    </div>
  </div>
  <a href="#101949" class="name">
  <strong class="user"><em>phil at dier dot us</em></strong></a><a class="genanchor" href="#101949"> &para;</a><div class="date" title="2011-01-19 11:37"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101949">
<div class="phpcode"><code><span class="html">Here's a function I came up with to convert an associative array to XML.  Works for multidimensional arrays as well.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">assocArrayToXML</span><span class="keyword">(</span><span class="default">$root_element_name</span><span class="keyword">,</span><span class="default">$ar</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$xml </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(</span><span class="string">"&lt;?xml version=\"1.0\"?&gt;&lt;</span><span class="keyword">{</span><span class="default">$root_element_name</span><span class="keyword">}</span><span class="string">&gt;&lt;/</span><span class="keyword">{</span><span class="default">$root_element_name</span><span class="keyword">}</span><span class="string">&gt;"</span><span class="keyword">);
<br />    </span><span class="default">$f </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$f,$c,$a'</span><span class="keyword">,</span><span class="string">'
<br />            foreach($a as $k=&gt;$v) {
<br />                if(is_array($v)) {
<br />                    $ch=$c-&gt;addChild($k);
<br />                    $f($f,$ch,$v);
<br />                } else {
<br />                    $c-&gt;addChild($k,$v);
<br />                }
<br />            }'</span><span class="keyword">);
<br />    </span><span class="default">$f</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">,</span><span class="default">$xml</span><span class="keyword">,</span><span class="default">$ar</span><span class="keyword">);
<br />    return </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">asXML</span><span class="keyword">();
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="96263">  <div class="votes">
    <div id="Vu96263">
    <a href="/manual/vote-note.php?id=96263&amp;page=book.simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96263">
    <a href="/manual/vote-note.php?id=96263&amp;page=book.simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96263" title="50% like this...">
    0
    </div>
  </div>
  <a href="#96263" class="name">
  <strong class="user"><em>emmanuel</em></strong></a><a class="genanchor" href="#96263"> &para;</a><div class="date" title="2010-02-17 10:21"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96263">
<div class="phpcode"><code><span class="html">dynamic sql in php using xml:
<br />
<br />test.xml:
<br />&lt;?xml version="1.0" encoding="UTF-8"?&gt;
<br />&lt;sql&gt;
<br />    &lt;statement&gt;
<br />        SELECT * FROM USERS
<br />        &lt;call criteria="byId"&gt;WHERE id = %d&lt;/call&gt;
<br />        &lt;call criteria="byUsername"&gt;WHERE username = "%s"&lt;/call&gt;;
<br />    &lt;/statement&gt;
<br />&lt;/sql&gt;
<br />
<br />index.php:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">callMe</span><span class="keyword">(</span><span class="default">$param</span><span class="keyword">) {
<br />    </span><span class="default">$search </span><span class="keyword">= array(</span><span class="string">'byUsername' </span><span class="keyword">=&gt; </span><span class="string">'dynsql'</span><span class="keyword">);
<br />    
<br />    if (isset(</span><span class="default">$search</span><span class="keyword">[</span><span class="default">$param</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]])) {
<br />        return </span><span class="default">sprintf</span><span class="keyword">(</span><span class="default">$param</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">$search</span><span class="keyword">[</span><span class="default">$param</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]]);
<br />    }
<br />    
<br />    return </span><span class="string">""</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="string">"test.xml"</span><span class="keyword">);
<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">statement</span><span class="keyword">-&gt;</span><span class="default">asXML</span><span class="keyword">();
<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="string">'/&lt;call criteria="(\w+)"&gt;(.*?)&lt;\/call&gt;/'</span><span class="keyword">, </span><span class="string">'callMe'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);
<br /></span><span class="default">$node </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);
<br />echo </span><span class="default">$node</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />obviously, this example can be improved [in your own code.]</span></code></div>
  </div>
 </div>
  <div class="note" id="119080">  <div class="votes">
    <div id="Vu119080">
    <a href="/manual/vote-note.php?id=119080&amp;page=book.simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119080">
    <a href="/manual/vote-note.php?id=119080&amp;page=book.simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119080" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#119080" class="name">
  <strong class="user"><em>oleg at mastak dot fi</em></strong></a><a class="genanchor" href="#119080"> &para;</a><div class="date" title="2016-03-30 09:57"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119080">
<div class="phpcode"><code><span class="html">Two lines xml2array:<br /><br /><span class="default">&lt;?php<br /><br />$xml </span><span class="keyword">= </span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$xmlstring</span><span class="keyword">);<br /></span><span class="default">$array </span><span class="keyword">= (array) </span><span class="default">$xml</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90554">  <div class="votes">
    <div id="Vu90554">
    <a href="/manual/vote-note.php?id=90554&amp;page=book.simplexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90554">
    <a href="/manual/vote-note.php?id=90554&amp;page=book.simplexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90554" title="50% like this...">
    0
    </div>
  </div>
  <a href="#90554" class="name">
  <strong class="user"><em>mail at kleineedv dot de</em></strong></a><a class="genanchor" href="#90554"> &para;</a><div class="date" title="2009-04-28 12:37"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90554">
<div class="phpcode"><code><span class="html">I had a problem with simplexml reading nodes from an xml file. It always return an SimpleXML-Object but not the text inside the node.
<br />
<br />Example:
<br />&lt;?xml version="1.0" encoding="UTF-8"?&gt;
<br />&lt;Test&gt;
<br />    &lt;Id&gt;123&lt;/Id&gt;
<br />&lt;/Test&gt;
<br />
<br />Reading this xml into a variable called $xml and then doing the following
<br /><span class="default">&lt;?php
<br />$myId </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">Id</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>Did not return 123 in $myId, but instead I got a SimpleXMLElement Object.
<br />
<br />The solution is simple, when you know it. Use explicit string conversion.
<br /><span class="default">&lt;?php
<br />$myId </span><span class="keyword">= (string)</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">Id</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.simplexml&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.simplexml.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.xml.php">XML Manipulation</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.dom.php" title="DOM">DOM</a>
                        </li>
                                                <li class="">
                            <a href="book.libxml.php" title="libxml">libxml</a>
                        </li>
                                                <li class="current">
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
