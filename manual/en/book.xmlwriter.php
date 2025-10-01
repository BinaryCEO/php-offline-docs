<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: XMLWriter - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.xmlwriter.php">
 <link rel="shorturl" href="https://www.php.net/xmlwriter">
 <link rel="alternate" href="https://www.php.net/xmlwriter" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.xml.php">
 <link rel="prev" href="https://www.php.net/manual/en/xmlreader.xml.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.xmlwriter.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.xmlwriter.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.xmlwriter.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.xmlwriter.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.xmlwriter.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.xmlwriter.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.xmlwriter.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.xmlwriter.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.xmlwriter.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.xmlwriter.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.xmlwriter.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.xmlwriter.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="XMLWriter" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: XMLWriter - Manual" />
<meta name="twitter:description" content="XMLWriter" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: XMLWriter - Manual" />
<meta itemprop="description" content="XMLWriter" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="XMLWriter" />

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
        <a href="intro.xmlwriter.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="xmlreader.xml.php">
          &laquo; XMLReader::XML        </a>
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
            <option value='en/book.xmlwriter.php' selected="selected">English</option>
            <option value='de/book.xmlwriter.php'>German</option>
            <option value='es/book.xmlwriter.php'>Spanish</option>
            <option value='fr/book.xmlwriter.php'>French</option>
            <option value='it/book.xmlwriter.php'>Italian</option>
            <option value='ja/book.xmlwriter.php'>Japanese</option>
            <option value='pt_BR/book.xmlwriter.php'>Brazilian Portuguese</option>
            <option value='ru/book.xmlwriter.php'>Russian</option>
            <option value='tr/book.xmlwriter.php'>Turkish</option>
            <option value='uk/book.xmlwriter.php'>Ukrainian</option>
            <option value='zh/book.xmlwriter.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.xmlwriter" class="book">
 
 <h1 class="title">XMLWriter</h1>

 
 
 

 







 






 





<ul class="chunklist chunklist_book"><li><a href="intro.xmlwriter.php">Introduction</a></li><li><a href="xmlwriter.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="xmlwriter.requirements.php">Requirements</a></li><li><a href="xmlwriter.installation.php">Installation</a></li><li><a href="xmlwriter.resources.php">Resource Types</a></li></ul></li><li><a href="xmlwriter.examples.php">Examples</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="example.xmlwriter-simple.php">Creating a simple XML document</a></li><li><a href="example.xmlwriter-namespace.php">Working with XML namespaces</a></li><li><a href="example.xmlwriter-oop.php">Working with the OO API</a></li></ul></li><li><a href="class.xmlwriter.php">XMLWriter</a> — The XMLWriter class<ul class="chunklist chunklist_book chunklist_children"><li><a href="xmlwriter.endattribute.php">XMLWriter::endAttribute</a> — End attribute</li><li><a href="xmlwriter.endcdata.php">XMLWriter::endCdata</a> — End current CDATA</li><li><a href="xmlwriter.endcomment.php">XMLWriter::endComment</a> — Create end comment</li><li><a href="xmlwriter.enddocument.php">XMLWriter::endDocument</a> — End current document</li><li><a href="xmlwriter.enddtd.php">XMLWriter::endDtd</a> — End current DTD</li><li><a href="xmlwriter.enddtdattlist.php">XMLWriter::endDtdAttlist</a> — End current DTD AttList</li><li><a href="xmlwriter.enddtdelement.php">XMLWriter::endDtdElement</a> — End current DTD element</li><li><a href="xmlwriter.enddtdentity.php">XMLWriter::endDtdEntity</a> — End current DTD Entity</li><li><a href="xmlwriter.endelement.php">XMLWriter::endElement</a> — End current element</li><li><a href="xmlwriter.endpi.php">XMLWriter::endPi</a> — End current PI</li><li><a href="xmlwriter.flush.php">XMLWriter::flush</a> — Flush current buffer</li><li><a href="xmlwriter.fullendelement.php">XMLWriter::fullEndElement</a> — End current element</li><li><a href="xmlwriter.openmemory.php">XMLWriter::openMemory</a> — Create new xmlwriter using memory for string output</li><li><a href="xmlwriter.openuri.php">XMLWriter::openUri</a> — Create new xmlwriter using source uri for output</li><li><a href="xmlwriter.outputmemory.php">XMLWriter::outputMemory</a> — Returns current buffer</li><li><a href="xmlwriter.setindent.php">XMLWriter::setIndent</a> — Toggle indentation on/off</li><li><a href="xmlwriter.setindentstring.php">XMLWriter::setIndentString</a> — Set string used for indenting</li><li><a href="xmlwriter.startattribute.php">XMLWriter::startAttribute</a> — Create start attribute</li><li><a href="xmlwriter.startattributens.php">XMLWriter::startAttributeNs</a> — Create start namespaced attribute</li><li><a href="xmlwriter.startcdata.php">XMLWriter::startCdata</a> — Create start CDATA tag</li><li><a href="xmlwriter.startcomment.php">XMLWriter::startComment</a> — Create start comment</li><li><a href="xmlwriter.startdocument.php">XMLWriter::startDocument</a> — Create document tag</li><li><a href="xmlwriter.startdtd.php">XMLWriter::startDtd</a> — Create start DTD tag</li><li><a href="xmlwriter.startdtdattlist.php">XMLWriter::startDtdAttlist</a> — Create start DTD AttList</li><li><a href="xmlwriter.startdtdelement.php">XMLWriter::startDtdElement</a> — Create start DTD element</li><li><a href="xmlwriter.startdtdentity.php">XMLWriter::startDtdEntity</a> — Create start DTD Entity</li><li><a href="xmlwriter.startelement.php">XMLWriter::startElement</a> — Create start element tag</li><li><a href="xmlwriter.startelementns.php">XMLWriter::startElementNs</a> — Create start namespaced element tag</li><li><a href="xmlwriter.startpi.php">XMLWriter::startPi</a> — Create start PI tag</li><li><a href="xmlwriter.text.php">XMLWriter::text</a> — Write text</li><li><a href="xmlwriter.tomemory.php">XMLWriter::toMemory</a> — Create new XMLWriter using memory for string output</li><li><a href="xmlwriter.tostream.php">XMLWriter::toStream</a> — Create new XMLWriter using a stream for output</li><li><a href="xmlwriter.touri.php">XMLWriter::toUri</a> — Create new XMLWriter using a URI for output</li><li><a href="xmlwriter.writeattribute.php">XMLWriter::writeAttribute</a> — Write full attribute</li><li><a href="xmlwriter.writeattributens.php">XMLWriter::writeAttributeNs</a> — Write full namespaced attribute</li><li><a href="xmlwriter.writecdata.php">XMLWriter::writeCdata</a> — Write full CDATA tag</li><li><a href="xmlwriter.writecomment.php">XMLWriter::writeComment</a> — Write full comment tag</li><li><a href="xmlwriter.writedtd.php">XMLWriter::writeDtd</a> — Write full DTD tag</li><li><a href="xmlwriter.writedtdattlist.php">XMLWriter::writeDtdAttlist</a> — Write full DTD AttList tag</li><li><a href="xmlwriter.writedtdelement.php">XMLWriter::writeDtdElement</a> — Write full DTD element tag</li><li><a href="xmlwriter.writedtdentity.php">XMLWriter::writeDtdEntity</a> — Write full DTD Entity tag</li><li><a href="xmlwriter.writeelement.php">XMLWriter::writeElement</a> — Write full element tag</li><li><a href="xmlwriter.writeelementns.php">XMLWriter::writeElementNs</a> — Write full namespaced element tag</li><li><a href="xmlwriter.writepi.php">XMLWriter::writePi</a> — Writes a PI</li><li><a href="xmlwriter.writeraw.php">XMLWriter::writeRaw</a> — Write a raw XML text</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/xmlwriter/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.xmlwriter%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.xmlwriter&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.xmlwriter.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="83721">  <div class="votes">
    <div id="Vu83721">
    <a href="/manual/vote-note.php?id=83721&amp;page=book.xmlwriter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83721">
    <a href="/manual/vote-note.php?id=83721&amp;page=book.xmlwriter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83721" title="55% like this...">
    5
    </div>
  </div>
  <a href="#83721" class="name">
  <strong class="user"><em>Alexey Zakhlestin</em></strong></a><a class="genanchor" href="#83721"> &para;</a><div class="date" title="2008-06-09 03:47"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83721">
<div class="phpcode"><code><span class="html">important: XMLWriter expects UTF-8 data from you. It can output xml in various encodings, but input should be strictly utf-8!</span></code></div>
  </div>
 </div>
  <div class="note" id="118125">  <div class="votes">
    <div id="Vu118125">
    <a href="/manual/vote-note.php?id=118125&amp;page=book.xmlwriter&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118125">
    <a href="/manual/vote-note.php?id=118125&amp;page=book.xmlwriter&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118125" title="45% like this...">
    -3
    </div>
  </div>
  <a href="#118125" class="name">
  <strong class="user"><em>lingtalfi</em></strong></a><a class="genanchor" href="#118125"> &para;</a><div class="date" title="2015-10-08 08:35"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118125">
<div class="phpcode"><code><span class="html">The single quote predefined entity is not escaped.<br />The other predefined entities are but not the single quote, so you will have to do it yourself.<br /><br />That's what you would expect:<br /><br />Ampersand     &amp;     &amp;amp;<br />Single Quote     '     &amp;apos;<br />Double Quote     "     &amp;quot;<br />Greater Than     &gt;     &amp;gt;<br />Less Than     &lt;     &amp;lt;<br /><br />That's what you get with \XmlWriter:<br /><br />Ampersand     &amp;     &amp;amp;<br />Single Quote     '     '<br />Double Quote     "     &amp;quot;<br />Greater Than     &gt;     &amp;gt;<br />Less Than     &lt;     &amp;lt;</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.xmlwriter&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.xmlwriter.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
