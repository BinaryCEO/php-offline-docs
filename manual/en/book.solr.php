<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Solr - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.solr.php">
 <link rel="shorturl" href="https://www.php.net/solr">
 <link rel="alternate" href="https://www.php.net/solr" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.search.php">
 <link rel="prev" href="https://www.php.net/manual/en/refs.search.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.solr.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.solr.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.solr.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.solr.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.solr.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.solr.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.solr.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.solr.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.solr.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.solr.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.solr.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.solr.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Apache Solr" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Solr - Manual" />
<meta name="twitter:description" content="Apache Solr" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Solr - Manual" />
<meta itemprop="description" content="Apache Solr" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Apache Solr" />

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
        <a href="intro.solr.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="refs.search.php">
          &laquo; Search Engine Extensions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.search.php'>Search Engine Extensions</a></li>      </ul>
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
            <option value='en/book.solr.php' selected="selected">English</option>
            <option value='de/book.solr.php'>German</option>
            <option value='es/book.solr.php'>Spanish</option>
            <option value='fr/book.solr.php'>French</option>
            <option value='it/book.solr.php'>Italian</option>
            <option value='ja/book.solr.php'>Japanese</option>
            <option value='pt_BR/book.solr.php'>Brazilian Portuguese</option>
            <option value='ru/book.solr.php'>Russian</option>
            <option value='tr/book.solr.php'>Turkish</option>
            <option value='uk/book.solr.php'>Ukrainian</option>
            <option value='zh/book.solr.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.solr" class="book">
 
 <h1 class="title">Apache Solr</h1>
 

 

 







 







 







 
 







 
 






 
 






 






 






 
 






 
 






 
 






 






 






 






 






 
 






 






 






 






 






  
 






 






 






 






 






 






 
 
<ul class="chunklist chunklist_book"><li><a href="intro.solr.php">Introduction</a></li><li><a href="solr.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="solr.requirements.php">Requirements</a></li><li><a href="solr.installation.php">Installation</a></li></ul></li><li><a href="solr.constants.php">Predefined Constants</a></li><li><a href="ref.solr.php">Solr Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.solr-get-version.php">solr_get_version</a> — Returns the current version of the Apache Solr extension</li></ul></li><li><a href="solr.examples.php">Examples</a></li><li><a href="class.solrutils.php">SolrUtils</a> — The SolrUtils class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrutils.digestxmlresponse.php">SolrUtils::digestXmlResponse</a> — Parses an response XML string into a SolrObject</li><li><a href="solrutils.escapequerychars.php">SolrUtils::escapeQueryChars</a> — Escapes a lucene query string</li><li><a href="solrutils.getsolrversion.php">SolrUtils::getSolrVersion</a> — Returns the current version of the Solr extension</li><li><a href="solrutils.queryphrase.php">SolrUtils::queryPhrase</a> — Prepares a phrase from an unescaped lucene string</li></ul></li><li><a href="class.solrinputdocument.php">SolrInputDocument</a> — The SolrInputDocument class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrinputdocument.addchilddocument.php">SolrInputDocument::addChildDocument</a> — Adds a child document for block indexing</li><li><a href="solrinputdocument.addchilddocuments.php">SolrInputDocument::addChildDocuments</a> — Adds an array of child documents</li><li><a href="solrinputdocument.addfield.php">SolrInputDocument::addField</a> — Adds a field to the document</li><li><a href="solrinputdocument.clear.php">SolrInputDocument::clear</a> — Resets the input document</li><li><a href="solrinputdocument.clone.php">SolrInputDocument::__clone</a> — Creates a copy of a SolrDocument</li><li><a href="solrinputdocument.construct.php">SolrInputDocument::__construct</a> — Constructor</li><li><a href="solrinputdocument.deletefield.php">SolrInputDocument::deleteField</a> — Removes a field from the document</li><li><a href="solrinputdocument.destruct.php">SolrInputDocument::__destruct</a> — Destructor</li><li><a href="solrinputdocument.fieldexists.php">SolrInputDocument::fieldExists</a> — Checks if a field exists</li><li><a href="solrinputdocument.getboost.php">SolrInputDocument::getBoost</a> — Retrieves the current boost value for the document</li><li><a href="solrinputdocument.getchilddocuments.php">SolrInputDocument::getChildDocuments</a> — Returns an array of child documents (SolrInputDocument)</li><li><a href="solrinputdocument.getchilddocumentscount.php">SolrInputDocument::getChildDocumentsCount</a> — Returns the number of child documents</li><li><a href="solrinputdocument.getfield.php">SolrInputDocument::getField</a> — Retrieves a field by name</li><li><a href="solrinputdocument.getfieldboost.php">SolrInputDocument::getFieldBoost</a> — Retrieves the boost value for a particular field</li><li><a href="solrinputdocument.getfieldcount.php">SolrInputDocument::getFieldCount</a> — Returns the number of fields in the document</li><li><a href="solrinputdocument.getfieldnames.php">SolrInputDocument::getFieldNames</a> — Returns an array containing all the fields in the document</li><li><a href="solrinputdocument.haschilddocuments.php">SolrInputDocument::hasChildDocuments</a> — Returns true if the document has any child documents</li><li><a href="solrinputdocument.merge.php">SolrInputDocument::merge</a> — Merges one input document into another</li><li><a href="solrinputdocument.reset.php">SolrInputDocument::reset</a> — Alias of SolrInputDocument::clear</li><li><a href="solrinputdocument.setboost.php">SolrInputDocument::setBoost</a> — Sets the boost value for this document</li><li><a href="solrinputdocument.setfieldboost.php">SolrInputDocument::setFieldBoost</a> — Sets the index-time boost value for a field</li><li><a href="solrinputdocument.sort.php">SolrInputDocument::sort</a> — Sorts the fields within the document</li><li><a href="solrinputdocument.toarray.php">SolrInputDocument::toArray</a> — Returns an array representation of the input document</li></ul></li><li><a href="class.solrdocument.php">SolrDocument</a> — The SolrDocument class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrdocument.addfield.php">SolrDocument::addField</a> — Adds a field to the document</li><li><a href="solrdocument.clear.php">SolrDocument::clear</a> — Drops all the fields in the document</li><li><a href="solrdocument.clone.php">SolrDocument::__clone</a> — Creates a copy of a SolrDocument object</li><li><a href="solrdocument.construct.php">SolrDocument::__construct</a> — Constructor</li><li><a href="solrdocument.current.php">SolrDocument::current</a> — Retrieves the current field</li><li><a href="solrdocument.deletefield.php">SolrDocument::deleteField</a> — Removes a field from the document</li><li><a href="solrdocument.destruct.php">SolrDocument::__destruct</a> — Destructor</li><li><a href="solrdocument.fieldexists.php">SolrDocument::fieldExists</a> — Checks if a field exists in the document</li><li><a href="solrdocument.get.php">SolrDocument::__get</a> — Access the field as a property</li><li><a href="solrdocument.getchilddocuments.php">SolrDocument::getChildDocuments</a> — Returns an array of child documents (SolrDocument)</li><li><a href="solrdocument.getchilddocumentscount.php">SolrDocument::getChildDocumentsCount</a> — Returns the number of child documents</li><li><a href="solrdocument.getfield.php">SolrDocument::getField</a> — Retrieves a field by name</li><li><a href="solrdocument.getfieldcount.php">SolrDocument::getFieldCount</a> — Returns the number of fields in this document</li><li><a href="solrdocument.getfieldnames.php">SolrDocument::getFieldNames</a> — Returns an array of fields names in the document</li><li><a href="solrdocument.getinputdocument.php">SolrDocument::getInputDocument</a> — Returns a SolrInputDocument equivalent of the object</li><li><a href="solrdocument.haschilddocuments.php">SolrDocument::hasChildDocuments</a> — Checks whether the document has any child documents</li><li><a href="solrdocument.isset.php">SolrDocument::__isset</a> — Checks if a field exists</li><li><a href="solrdocument.key.php">SolrDocument::key</a> — Retrieves the current key</li><li><a href="solrdocument.merge.php">SolrDocument::merge</a> — Merges source to the current SolrDocument</li><li><a href="solrdocument.next.php">SolrDocument::next</a> — Moves the internal pointer to the next field</li><li><a href="solrdocument.offsetexists.php">SolrDocument::offsetExists</a> — Checks if a particular field exists</li><li><a href="solrdocument.offsetget.php">SolrDocument::offsetGet</a> — Retrieves a field</li><li><a href="solrdocument.offsetset.php">SolrDocument::offsetSet</a> — Adds a field to the document</li><li><a href="solrdocument.offsetunset.php">SolrDocument::offsetUnset</a> — Removes a field</li><li><a href="solrdocument.reset.php">SolrDocument::reset</a> — Alias of SolrDocument::clear</li><li><a href="solrdocument.rewind.php">SolrDocument::rewind</a> — Resets the internal pointer to the beginning</li><li><a href="solrdocument.serialize.php">SolrDocument::serialize</a> — Used for custom serialization</li><li><a href="solrdocument.set.php">SolrDocument::__set</a> — Adds another field to the document</li><li><a href="solrdocument.sort.php">SolrDocument::sort</a> — Sorts the fields in the document</li><li><a href="solrdocument.toarray.php">SolrDocument::toArray</a> — Returns an array representation of the document</li><li><a href="solrdocument.unserialize.php">SolrDocument::unserialize</a> — Custom serialization of SolrDocument objects</li><li><a href="solrdocument.unset.php">SolrDocument::__unset</a> — Removes a field from the document</li><li><a href="solrdocument.valid.php">SolrDocument::valid</a> — Checks if the current position internally is still valid</li></ul></li><li><a href="class.solrdocumentfield.php">SolrDocumentField</a> — The SolrDocumentField class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrdocumentfield.construct.php">SolrDocumentField::__construct</a> — Constructor</li><li><a href="solrdocumentfield.destruct.php">SolrDocumentField::__destruct</a> — Destructor</li></ul></li><li><a href="class.solrobject.php">SolrObject</a> — The SolrObject class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrobject.construct.php">SolrObject::__construct</a> — Creates Solr object</li><li><a href="solrobject.destruct.php">SolrObject::__destruct</a> — Destructor</li><li><a href="solrobject.getpropertynames.php">SolrObject::getPropertyNames</a> — Returns an array of all the names of the properties</li><li><a href="solrobject.offsetexists.php">SolrObject::offsetExists</a> — Checks if the property exists</li><li><a href="solrobject.offsetget.php">SolrObject::offsetGet</a> — Used to retrieve a property</li><li><a href="solrobject.offsetset.php">SolrObject::offsetSet</a> — Sets the value for a property</li><li><a href="solrobject.offsetunset.php">SolrObject::offsetUnset</a> — Unsets the value for the property</li></ul></li><li><a href="class.solrclient.php">SolrClient</a> — The SolrClient class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrclient.adddocument.php">SolrClient::addDocument</a> — Adds a document to the index</li><li><a href="solrclient.adddocuments.php">SolrClient::addDocuments</a> — Adds a collection of SolrInputDocument instances to the index</li><li><a href="solrclient.commit.php">SolrClient::commit</a> — Finalizes all add/deletes made to the index</li><li><a href="solrclient.construct.php">SolrClient::__construct</a> — Constructor for the SolrClient object</li><li><a href="solrclient.deletebyid.php">SolrClient::deleteById</a> — Delete by Id</li><li><a href="solrclient.deletebyids.php">SolrClient::deleteByIds</a> — Deletes by Ids</li><li><a href="solrclient.deletebyqueries.php">SolrClient::deleteByQueries</a> — Removes all documents matching any of the queries</li><li><a href="solrclient.deletebyquery.php">SolrClient::deleteByQuery</a> — Deletes all documents matching the given query</li><li><a href="solrclient.destruct.php">SolrClient::__destruct</a> — Destructor for SolrClient</li><li><a href="solrclient.getbyid.php">SolrClient::getById</a> — Get Document By Id. Utilizes Solr Realtime Get (RTG)</li><li><a href="solrclient.getbyids.php">SolrClient::getByIds</a> — Get Documents by their Ids. Utilizes Solr Realtime Get (RTG)</li><li><a href="solrclient.getdebug.php">SolrClient::getDebug</a> — Returns the debug data for the last connection attempt</li><li><a href="solrclient.getoptions.php">SolrClient::getOptions</a> — Returns the client options set internally</li><li><a href="solrclient.optimize.php">SolrClient::optimize</a> — Defragments the index</li><li><a href="solrclient.ping.php">SolrClient::ping</a> — Checks if Solr server is still up</li><li><a href="solrclient.query.php">SolrClient::query</a> — Sends a query to the server</li><li><a href="solrclient.request.php">SolrClient::request</a> — Sends a raw update request</li><li><a href="solrclient.rollback.php">SolrClient::rollback</a> — Rollbacks all add/deletes made to the index since the last commit</li><li><a href="solrclient.setresponsewriter.php">SolrClient::setResponseWriter</a> — Sets the response writer used to prepare the response from Solr</li><li><a href="solrclient.setservlet.php">SolrClient::setServlet</a> — Changes the specified servlet type to a new value</li><li><a href="solrclient.system.php">SolrClient::system</a> — Retrieve Solr Server information</li><li><a href="solrclient.threads.php">SolrClient::threads</a> — Checks the threads status</li></ul></li><li><a href="class.solrresponse.php">SolrResponse</a> — The SolrResponse class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrresponse.getdigestedresponse.php">SolrResponse::getDigestedResponse</a> — Returns the XML response as serialized PHP data</li><li><a href="solrresponse.gethttpstatus.php">SolrResponse::getHttpStatus</a> — Returns the HTTP status of the response</li><li><a href="solrresponse.gethttpstatusmessage.php">SolrResponse::getHttpStatusMessage</a> — Returns more details on the HTTP status</li><li><a href="solrresponse.getrawrequest.php">SolrResponse::getRawRequest</a> — Returns the raw request sent to the Solr server</li><li><a href="solrresponse.getrawrequestheaders.php">SolrResponse::getRawRequestHeaders</a> — Returns the raw request headers sent to the Solr server</li><li><a href="solrresponse.getrawresponse.php">SolrResponse::getRawResponse</a> — Returns the raw response from the server</li><li><a href="solrresponse.getrawresponseheaders.php">SolrResponse::getRawResponseHeaders</a> — Returns the raw response headers from the server</li><li><a href="solrresponse.getrequesturl.php">SolrResponse::getRequestUrl</a> — Returns the full URL the request was sent to</li><li><a href="solrresponse.getresponse.php">SolrResponse::getResponse</a> — Returns a SolrObject representing the XML response from the server</li><li><a href="solrresponse.setparsemode.php">SolrResponse::setParseMode</a> — Sets the parse mode</li><li><a href="solrresponse.success.php">SolrResponse::success</a> — Was the request a success</li></ul></li><li><a href="class.solrqueryresponse.php">SolrQueryResponse</a> — The SolrQueryResponse class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrqueryresponse.construct.php">SolrQueryResponse::__construct</a> — Constructor</li><li><a href="solrqueryresponse.destruct.php">SolrQueryResponse::__destruct</a> — Destructor</li></ul></li><li><a href="class.solrupdateresponse.php">SolrUpdateResponse</a> — The SolrUpdateResponse class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrupdateresponse.construct.php">SolrUpdateResponse::__construct</a> — Constructor</li><li><a href="solrupdateresponse.destruct.php">SolrUpdateResponse::__destruct</a> — Destructor</li></ul></li><li><a href="class.solrpingresponse.php">SolrPingResponse</a> — The SolrPingResponse class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrpingresponse.construct.php">SolrPingResponse::__construct</a> — Constructor</li><li><a href="solrpingresponse.destruct.php">SolrPingResponse::__destruct</a> — Destructor</li><li><a href="solrpingresponse.getresponse.php">SolrPingResponse::getResponse</a> — Returns the response from the server</li></ul></li><li><a href="class.solrgenericresponse.php">SolrGenericResponse</a> — The SolrGenericResponse class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrgenericresponse.construct.php">SolrGenericResponse::__construct</a> — Constructor</li><li><a href="solrgenericresponse.destruct.php">SolrGenericResponse::__destruct</a> — Destructor</li></ul></li><li><a href="class.solrparams.php">SolrParams</a> — The SolrParams class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrparams.add.php">SolrParams::add</a> — Alias of SolrParams::addParam</li><li><a href="solrparams.addparam.php">SolrParams::addParam</a> — Adds a parameter to the object</li><li><a href="solrparams.get.php">SolrParams::get</a> — Alias of SolrParams::getParam</li><li><a href="solrparams.getparam.php">SolrParams::getParam</a> — Returns a parameter value</li><li><a href="solrparams.getparams.php">SolrParams::getParams</a> — Returns an array of non URL-encoded parameters</li><li><a href="solrparams.getpreparedparams.php">SolrParams::getPreparedParams</a> — Returns an array of URL-encoded parameters</li><li><a href="solrparams.serialize.php">SolrParams::serialize</a> — Used for custom serialization</li><li><a href="solrparams.set.php">SolrParams::set</a> — Alias of SolrParams::setParam</li><li><a href="solrparams.setparam.php">SolrParams::setParam</a> — Sets the parameter to the specified value</li><li><a href="solrparams.tostring.php">SolrParams::toString</a> — Returns all the name-value pair parameters in the object</li><li><a href="solrparams.unserialize.php">SolrParams::unserialize</a> — Used for custom serialization</li></ul></li><li><a href="class.solrmodifiableparams.php">SolrModifiableParams</a> — The SolrModifiableParams class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrmodifiableparams.construct.php">SolrModifiableParams::__construct</a> — Constructor</li><li><a href="solrmodifiableparams.destruct.php">SolrModifiableParams::__destruct</a> — Destructor</li></ul></li><li><a href="class.solrquery.php">SolrQuery</a> — The SolrQuery class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrquery.addexpandfilterquery.php">SolrQuery::addExpandFilterQuery</a> — Overrides main filter query, determines which documents to include in the main group</li><li><a href="solrquery.addexpandsortfield.php">SolrQuery::addExpandSortField</a> — Orders the documents within the expanded groups (expand.sort parameter)</li><li><a href="solrquery.addfacetdatefield.php">SolrQuery::addFacetDateField</a> — Maps to facet.date</li><li><a href="solrquery.addfacetdateother.php">SolrQuery::addFacetDateOther</a> — Adds another facet.date.other parameter</li><li><a href="solrquery.addfacetfield.php">SolrQuery::addFacetField</a> — Adds another field to the facet</li><li><a href="solrquery.addfacetquery.php">SolrQuery::addFacetQuery</a> — Adds a facet query</li><li><a href="solrquery.addfield.php">SolrQuery::addField</a> — Specifies which fields to return in the result</li><li><a href="solrquery.addfilterquery.php">SolrQuery::addFilterQuery</a> — Specifies a filter query</li><li><a href="solrquery.addgroupfield.php">SolrQuery::addGroupField</a> — Add a field to be used to group results</li><li><a href="solrquery.addgroupfunction.php">SolrQuery::addGroupFunction</a> — Allows grouping results based on the unique values of a function query (group.func parameter)</li><li><a href="solrquery.addgroupquery.php">SolrQuery::addGroupQuery</a> — Allows grouping of documents that match the given query</li><li><a href="solrquery.addgroupsortfield.php">SolrQuery::addGroupSortField</a> — Add a group sort field (group.sort parameter)</li><li><a href="solrquery.addhighlightfield.php">SolrQuery::addHighlightField</a> — Maps to hl.fl</li><li><a href="solrquery.addmltfield.php">SolrQuery::addMltField</a> — Sets a field to use for similarity</li><li><a href="solrquery.addmltqueryfield.php">SolrQuery::addMltQueryField</a> — Maps to mlt.qf</li><li><a href="solrquery.addsortfield.php">SolrQuery::addSortField</a> — Used to control how the results should be sorted</li><li><a href="solrquery.addstatsfacet.php">SolrQuery::addStatsFacet</a> — Requests a return of sub results for values within the given facet</li><li><a href="solrquery.addstatsfield.php">SolrQuery::addStatsField</a> — Maps to stats.field parameter</li><li><a href="solrquery.collapse.php">SolrQuery::collapse</a> — Collapses the result set to a single document per group</li><li><a href="solrquery.construct.php">SolrQuery::__construct</a> — Constructor</li><li><a href="solrquery.destruct.php">SolrQuery::__destruct</a> — Destructor</li><li><a href="solrquery.getexpand.php">SolrQuery::getExpand</a> — Returns true if group expanding is enabled</li><li><a href="solrquery.getexpandfilterqueries.php">SolrQuery::getExpandFilterQueries</a> — Returns the expand filter queries</li><li><a href="solrquery.getexpandquery.php">SolrQuery::getExpandQuery</a> — Returns the expand query expand.q parameter</li><li><a href="solrquery.getexpandrows.php">SolrQuery::getExpandRows</a> — Returns The number of rows to display in each group (expand.rows)</li><li><a href="solrquery.getexpandsortfields.php">SolrQuery::getExpandSortFields</a> — Returns an array of fields</li><li><a href="solrquery.getfacet.php">SolrQuery::getFacet</a> — Returns the value of the facet parameter</li><li><a href="solrquery.getfacetdateend.php">SolrQuery::getFacetDateEnd</a> — Returns the value for the facet.date.end parameter</li><li><a href="solrquery.getfacetdatefields.php">SolrQuery::getFacetDateFields</a> — Returns all the facet.date fields</li><li><a href="solrquery.getfacetdategap.php">SolrQuery::getFacetDateGap</a> — Returns the value of the facet.date.gap parameter</li><li><a href="solrquery.getfacetdatehardend.php">SolrQuery::getFacetDateHardEnd</a> — Returns the value of the facet.date.hardend parameter</li><li><a href="solrquery.getfacetdateother.php">SolrQuery::getFacetDateOther</a> — Returns the value for the facet.date.other parameter</li><li><a href="solrquery.getfacetdatestart.php">SolrQuery::getFacetDateStart</a> — Returns the  lower bound for the first date range for all date faceting on this field</li><li><a href="solrquery.getfacetfields.php">SolrQuery::getFacetFields</a> — Returns all the facet fields</li><li><a href="solrquery.getfacetlimit.php">SolrQuery::getFacetLimit</a> — Returns the maximum number of constraint counts that should be returned for the facet fields</li><li><a href="solrquery.getfacetmethod.php">SolrQuery::getFacetMethod</a> — Returns the value of the facet.method parameter</li><li><a href="solrquery.getfacetmincount.php">SolrQuery::getFacetMinCount</a> — Returns the minimum counts for facet fields should be included in the response</li><li><a href="solrquery.getfacetmissing.php">SolrQuery::getFacetMissing</a> — Returns the current state of the facet.missing parameter</li><li><a href="solrquery.getfacetoffset.php">SolrQuery::getFacetOffset</a> — Returns an offset into the list of constraints to be used for pagination</li><li><a href="solrquery.getfacetprefix.php">SolrQuery::getFacetPrefix</a> — Returns the facet prefix</li><li><a href="solrquery.getfacetqueries.php">SolrQuery::getFacetQueries</a> — Returns all the facet queries</li><li><a href="solrquery.getfacetsort.php">SolrQuery::getFacetSort</a> — Returns the facet sort type</li><li><a href="solrquery.getfields.php">SolrQuery::getFields</a> — Returns the list of fields that will be returned in the response</li><li><a href="solrquery.getfilterqueries.php">SolrQuery::getFilterQueries</a> — Returns an array of filter queries</li><li><a href="solrquery.getgroup.php">SolrQuery::getGroup</a> — Returns true if grouping is enabled</li><li><a href="solrquery.getgroupcachepercent.php">SolrQuery::getGroupCachePercent</a> — Returns group cache percent value</li><li><a href="solrquery.getgroupfacet.php">SolrQuery::getGroupFacet</a> — Returns the group.facet parameter value</li><li><a href="solrquery.getgroupfields.php">SolrQuery::getGroupFields</a> — Returns group fields (group.field parameter values)</li><li><a href="solrquery.getgroupformat.php">SolrQuery::getGroupFormat</a> — Returns the group.format value</li><li><a href="solrquery.getgroupfunctions.php">SolrQuery::getGroupFunctions</a> — Returns group functions (group.func parameter values)</li><li><a href="solrquery.getgrouplimit.php">SolrQuery::getGroupLimit</a> — Returns the group.limit value</li><li><a href="solrquery.getgroupmain.php">SolrQuery::getGroupMain</a> — Returns the group.main value</li><li><a href="solrquery.getgroupngroups.php">SolrQuery::getGroupNGroups</a> — Returns the group.ngroups value</li><li><a href="solrquery.getgroupoffset.php">SolrQuery::getGroupOffset</a> — Returns the group.offset value</li><li><a href="solrquery.getgroupqueries.php">SolrQuery::getGroupQueries</a> — Returns all the group.query parameter values</li><li><a href="solrquery.getgroupsortfields.php">SolrQuery::getGroupSortFields</a> — Returns the group.sort value</li><li><a href="solrquery.getgrouptruncate.php">SolrQuery::getGroupTruncate</a> — Returns the group.truncate value</li><li><a href="solrquery.gethighlight.php">SolrQuery::getHighlight</a> — Returns the state of the hl parameter</li><li><a href="solrquery.gethighlightalternatefield.php">SolrQuery::getHighlightAlternateField</a> — Returns the highlight field to use as backup or default</li><li><a href="solrquery.gethighlightfields.php">SolrQuery::getHighlightFields</a> — Returns all the fields that Solr should generate highlighted snippets for</li><li><a href="solrquery.gethighlightformatter.php">SolrQuery::getHighlightFormatter</a> — Returns the formatter for the highlighted output</li><li><a href="solrquery.gethighlightfragmenter.php">SolrQuery::getHighlightFragmenter</a> — Returns the text snippet generator for highlighted text</li><li><a href="solrquery.gethighlightfragsize.php">SolrQuery::getHighlightFragsize</a> — Returns the number of characters of fragments to consider for highlighting</li><li><a href="solrquery.gethighlighthighlightmultiterm.php">SolrQuery::getHighlightHighlightMultiTerm</a> — Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries</li><li><a href="solrquery.gethighlightmaxalternatefieldlength.php">SolrQuery::getHighlightMaxAlternateFieldLength</a> — Returns the maximum number of characters of the field to return</li><li><a href="solrquery.gethighlightmaxanalyzedchars.php">SolrQuery::getHighlightMaxAnalyzedChars</a> — Returns the maximum number of characters into a document to look for suitable snippets</li><li><a href="solrquery.gethighlightmergecontiguous.php">SolrQuery::getHighlightMergeContiguous</a> — Returns whether or not the collapse contiguous fragments into a single fragment</li><li><a href="solrquery.gethighlightquery.php">SolrQuery::getHighlightQuery</a> — return the highlightquery (hl.q)</li><li><a href="solrquery.gethighlightregexmaxanalyzedchars.php">SolrQuery::getHighlightRegexMaxAnalyzedChars</a> — Returns the maximum number of characters from a field when using the regex fragmenter</li><li><a href="solrquery.gethighlightregexpattern.php">SolrQuery::getHighlightRegexPattern</a> — Returns the regular expression for fragmenting</li><li><a href="solrquery.gethighlightregexslop.php">SolrQuery::getHighlightRegexSlop</a> — Returns the deviation factor from the ideal fragment size</li><li><a href="solrquery.gethighlightrequirefieldmatch.php">SolrQuery::getHighlightRequireFieldMatch</a> — Returns if a field will only be highlighted if the query matched in this particular field</li><li><a href="solrquery.gethighlightsimplepost.php">SolrQuery::getHighlightSimplePost</a> — Returns the text which appears after a highlighted term</li><li><a href="solrquery.gethighlightsimplepre.php">SolrQuery::getHighlightSimplePre</a> — Returns the text which appears before a highlighted term</li><li><a href="solrquery.gethighlightsnippets.php">SolrQuery::getHighlightSnippets</a> — Returns the maximum number of highlighted snippets to generate per field</li><li><a href="solrquery.gethighlightusephrasehighlighter.php">SolrQuery::getHighlightUsePhraseHighlighter</a> — Returns the state of the hl.usePhraseHighlighter parameter</li><li><a href="solrquery.getmlt.php">SolrQuery::getMlt</a> — Returns whether or not MoreLikeThis results should be enabled</li><li><a href="solrquery.getmltboost.php">SolrQuery::getMltBoost</a> — Returns whether or not the query will be boosted by the interesting term relevance</li><li><a href="solrquery.getmltcount.php">SolrQuery::getMltCount</a> — Returns the number of similar documents to return for each result</li><li><a href="solrquery.getmltfields.php">SolrQuery::getMltFields</a> — Returns all the fields to use for similarity</li><li><a href="solrquery.getmltmaxnumqueryterms.php">SolrQuery::getMltMaxNumQueryTerms</a> — Returns the maximum number of query terms that will be included in any generated query</li><li><a href="solrquery.getmltmaxnumtokens.php">SolrQuery::getMltMaxNumTokens</a> — Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support</li><li><a href="solrquery.getmltmaxwordlength.php">SolrQuery::getMltMaxWordLength</a> — Returns the maximum word length above which words will be ignored</li><li><a href="solrquery.getmltmindocfrequency.php">SolrQuery::getMltMinDocFrequency</a> — Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs</li><li><a href="solrquery.getmltmintermfrequency.php">SolrQuery::getMltMinTermFrequency</a> — Returns the frequency below which terms will be ignored in the source document</li><li><a href="solrquery.getmltminwordlength.php">SolrQuery::getMltMinWordLength</a> — Returns the minimum word length below which words will be ignored</li><li><a href="solrquery.getmltqueryfields.php">SolrQuery::getMltQueryFields</a> — Returns the query fields and their boosts</li><li><a href="solrquery.getquery.php">SolrQuery::getQuery</a> — Returns the main query</li><li><a href="solrquery.getrows.php">SolrQuery::getRows</a> — Returns the maximum number of documents</li><li><a href="solrquery.getsortfields.php">SolrQuery::getSortFields</a> — Returns all the sort fields</li><li><a href="solrquery.getstart.php">SolrQuery::getStart</a> — Returns the offset in the complete result set</li><li><a href="solrquery.getstats.php">SolrQuery::getStats</a> — Returns whether or not stats is enabled</li><li><a href="solrquery.getstatsfacets.php">SolrQuery::getStatsFacets</a> — Returns all the stats facets that were set</li><li><a href="solrquery.getstatsfields.php">SolrQuery::getStatsFields</a> — Returns all the statistics fields</li><li><a href="solrquery.getterms.php">SolrQuery::getTerms</a> — Returns whether or not the TermsComponent is enabled</li><li><a href="solrquery.gettermsfield.php">SolrQuery::getTermsField</a> — Returns the field from which the terms are retrieved</li><li><a href="solrquery.gettermsincludelowerbound.php">SolrQuery::getTermsIncludeLowerBound</a> — Returns whether or not to include the lower bound in the result set</li><li><a href="solrquery.gettermsincludeupperbound.php">SolrQuery::getTermsIncludeUpperBound</a> — Returns whether or not to include the upper bound term in the result set</li><li><a href="solrquery.gettermslimit.php">SolrQuery::getTermsLimit</a> — Returns the maximum number of terms Solr should return</li><li><a href="solrquery.gettermslowerbound.php">SolrQuery::getTermsLowerBound</a> — Returns the term to start at</li><li><a href="solrquery.gettermsmaxcount.php">SolrQuery::getTermsMaxCount</a> — Returns the maximum document frequency</li><li><a href="solrquery.gettermsmincount.php">SolrQuery::getTermsMinCount</a> — Returns the minimum document frequency to return in order to be included</li><li><a href="solrquery.gettermsprefix.php">SolrQuery::getTermsPrefix</a> — Returns the term prefix</li><li><a href="solrquery.gettermsreturnraw.php">SolrQuery::getTermsReturnRaw</a> — Whether or not to return raw characters</li><li><a href="solrquery.gettermssort.php">SolrQuery::getTermsSort</a> — Returns an integer indicating how terms are sorted</li><li><a href="solrquery.gettermsupperbound.php">SolrQuery::getTermsUpperBound</a> — Returns the term to stop at</li><li><a href="solrquery.gettimeallowed.php">SolrQuery::getTimeAllowed</a> — Returns the time in milliseconds allowed for the query to finish</li><li><a href="solrquery.removeexpandfilterquery.php">SolrQuery::removeExpandFilterQuery</a> — Removes an expand filter query</li><li><a href="solrquery.removeexpandsortfield.php">SolrQuery::removeExpandSortField</a> — Removes an expand sort field from the expand.sort parameter</li><li><a href="solrquery.removefacetdatefield.php">SolrQuery::removeFacetDateField</a> — Removes one of the facet date fields</li><li><a href="solrquery.removefacetdateother.php">SolrQuery::removeFacetDateOther</a> — Removes one of the facet.date.other parameters</li><li><a href="solrquery.removefacetfield.php">SolrQuery::removeFacetField</a> — Removes one of the facet.date parameters</li><li><a href="solrquery.removefacetquery.php">SolrQuery::removeFacetQuery</a> — Removes one of the facet.query parameters</li><li><a href="solrquery.removefield.php">SolrQuery::removeField</a> — Removes a field from the list of fields</li><li><a href="solrquery.removefilterquery.php">SolrQuery::removeFilterQuery</a> — Removes a filter query</li><li><a href="solrquery.removehighlightfield.php">SolrQuery::removeHighlightField</a> — Removes one of the fields used for highlighting</li><li><a href="solrquery.removemltfield.php">SolrQuery::removeMltField</a> — Removes one of the moreLikeThis fields</li><li><a href="solrquery.removemltqueryfield.php">SolrQuery::removeMltQueryField</a> — Removes one of the moreLikeThis query fields</li><li><a href="solrquery.removesortfield.php">SolrQuery::removeSortField</a> — Removes one of the sort fields</li><li><a href="solrquery.removestatsfacet.php">SolrQuery::removeStatsFacet</a> — Removes one of the stats.facet parameters</li><li><a href="solrquery.removestatsfield.php">SolrQuery::removeStatsField</a> — Removes one of the stats.field parameters</li><li><a href="solrquery.setechohandler.php">SolrQuery::setEchoHandler</a> — Toggles the echoHandler parameter</li><li><a href="solrquery.setechoparams.php">SolrQuery::setEchoParams</a> — Determines what kind of parameters to include in the response</li><li><a href="solrquery.setexpand.php">SolrQuery::setExpand</a> — Enables/Disables the Expand Component</li><li><a href="solrquery.setexpandquery.php">SolrQuery::setExpandQuery</a> — Sets the expand.q parameter</li><li><a href="solrquery.setexpandrows.php">SolrQuery::setExpandRows</a> — Sets the number of rows to display in each group (expand.rows). Server Default 5</li><li><a href="solrquery.setexplainother.php">SolrQuery::setExplainOther</a> — Sets the explainOther common query parameter</li><li><a href="solrquery.setfacet.php">SolrQuery::setFacet</a> — Maps to the facet parameter. Enables or disables facetting</li><li><a href="solrquery.setfacetdateend.php">SolrQuery::setFacetDateEnd</a> — Maps to facet.date.end</li><li><a href="solrquery.setfacetdategap.php">SolrQuery::setFacetDateGap</a> — Maps to facet.date.gap</li><li><a href="solrquery.setfacetdatehardend.php">SolrQuery::setFacetDateHardEnd</a> — Maps to facet.date.hardend</li><li><a href="solrquery.setfacetdatestart.php">SolrQuery::setFacetDateStart</a> — Maps to facet.date.start</li><li><a href="solrquery.setfacetenumcachemindefaultfrequency.php">SolrQuery::setFacetEnumCacheMinDefaultFrequency</a> — Sets the minimum document frequency used for determining term count</li><li><a href="solrquery.setfacetlimit.php">SolrQuery::setFacetLimit</a> — Maps to facet.limit</li><li><a href="solrquery.setfacetmethod.php">SolrQuery::setFacetMethod</a> — Specifies the type of algorithm to use when faceting a field</li><li><a href="solrquery.setfacetmincount.php">SolrQuery::setFacetMinCount</a> — Maps to facet.mincount</li><li><a href="solrquery.setfacetmissing.php">SolrQuery::setFacetMissing</a> — Maps to facet.missing</li><li><a href="solrquery.setfacetoffset.php">SolrQuery::setFacetOffset</a> — Sets the offset into the list of constraints to allow for pagination</li><li><a href="solrquery.setfacetprefix.php">SolrQuery::setFacetPrefix</a> — Specifies a string prefix with which to limits the terms on which to facet</li><li><a href="solrquery.setfacetsort.php">SolrQuery::setFacetSort</a> — Determines the ordering of the facet field constraints</li><li><a href="solrquery.setgroup.php">SolrQuery::setGroup</a> — Enable/Disable result grouping (group parameter)</li><li><a href="solrquery.setgroupcachepercent.php">SolrQuery::setGroupCachePercent</a> — Enables caching for result grouping</li><li><a href="solrquery.setgroupfacet.php">SolrQuery::setGroupFacet</a> — Sets group.facet parameter</li><li><a href="solrquery.setgroupformat.php">SolrQuery::setGroupFormat</a> — Sets the group format, result structure (group.format parameter)</li><li><a href="solrquery.setgrouplimit.php">SolrQuery::setGroupLimit</a> — Specifies the number of results to return for each group. The server default value is 1</li><li><a href="solrquery.setgroupmain.php">SolrQuery::setGroupMain</a> — If true, the result of the first field grouping command is used as the main result list in the response, using group.format=simple</li><li><a href="solrquery.setgroupngroups.php">SolrQuery::setGroupNGroups</a> — If true, Solr includes the number of groups that have matched the query in the results</li><li><a href="solrquery.setgroupoffset.php">SolrQuery::setGroupOffset</a> — Sets the group.offset parameter</li><li><a href="solrquery.setgrouptruncate.php">SolrQuery::setGroupTruncate</a> — If true, facet counts are based on the most relevant document of each group matching the query</li><li><a href="solrquery.sethighlight.php">SolrQuery::setHighlight</a> — Enables or disables highlighting</li><li><a href="solrquery.sethighlightalternatefield.php">SolrQuery::setHighlightAlternateField</a> — Specifies the backup field to use</li><li><a href="solrquery.sethighlightformatter.php">SolrQuery::setHighlightFormatter</a> — Specify a formatter for the highlight output</li><li><a href="solrquery.sethighlightfragmenter.php">SolrQuery::setHighlightFragmenter</a> — Sets a text snippet generator for highlighted text</li><li><a href="solrquery.sethighlightfragsize.php">SolrQuery::setHighlightFragsize</a> — The size of fragments to consider for highlighting</li><li><a href="solrquery.sethighlighthighlightmultiterm.php">SolrQuery::setHighlightHighlightMultiTerm</a> — Use SpanScorer to highlight phrase terms</li><li><a href="solrquery.sethighlightmaxalternatefieldlength.php">SolrQuery::setHighlightMaxAlternateFieldLength</a> — Sets the maximum number of characters of the field to return</li><li><a href="solrquery.sethighlightmaxanalyzedchars.php">SolrQuery::setHighlightMaxAnalyzedChars</a> — Specifies the number of characters into a document to look for suitable snippets</li><li><a href="solrquery.sethighlightmergecontiguous.php">SolrQuery::setHighlightMergeContiguous</a> — Whether or not to collapse contiguous fragments into a single fragment</li><li><a href="solrquery.sethighlightquery.php">SolrQuery::setHighlightQuery</a> — A query designated for highlighting (hl.q)</li><li><a href="solrquery.sethighlightregexmaxanalyzedchars.php">SolrQuery::setHighlightRegexMaxAnalyzedChars</a> — Specify the maximum number of characters to analyze</li><li><a href="solrquery.sethighlightregexpattern.php">SolrQuery::setHighlightRegexPattern</a> — Specify the regular expression for fragmenting</li><li><a href="solrquery.sethighlightregexslop.php">SolrQuery::setHighlightRegexSlop</a> — Sets the factor by which the regex fragmenter can stray from the ideal fragment size</li><li><a href="solrquery.sethighlightrequirefieldmatch.php">SolrQuery::setHighlightRequireFieldMatch</a> — Require field matching during highlighting</li><li><a href="solrquery.sethighlightsimplepost.php">SolrQuery::setHighlightSimplePost</a> — Sets the text which appears after a highlighted term</li><li><a href="solrquery.sethighlightsimplepre.php">SolrQuery::setHighlightSimplePre</a> — Sets the text which appears before a highlighted term</li><li><a href="solrquery.sethighlightsnippets.php">SolrQuery::setHighlightSnippets</a> — Sets the maximum number of highlighted snippets to generate per field</li><li><a href="solrquery.sethighlightusephrasehighlighter.php">SolrQuery::setHighlightUsePhraseHighlighter</a> — Whether to highlight phrase terms only when they appear within the query phrase</li><li><a href="solrquery.setmlt.php">SolrQuery::setMlt</a> — Enables or disables moreLikeThis</li><li><a href="solrquery.setmltboost.php">SolrQuery::setMltBoost</a> — Set if the query will be boosted by the interesting term relevance</li><li><a href="solrquery.setmltcount.php">SolrQuery::setMltCount</a> — Set the number of similar documents to return for each result</li><li><a href="solrquery.setmltmaxnumqueryterms.php">SolrQuery::setMltMaxNumQueryTerms</a> — Sets the maximum number of query terms included</li><li><a href="solrquery.setmltmaxnumtokens.php">SolrQuery::setMltMaxNumTokens</a> — Specifies the maximum number of tokens to parse</li><li><a href="solrquery.setmltmaxwordlength.php">SolrQuery::setMltMaxWordLength</a> — Sets the maximum word length</li><li><a href="solrquery.setmltmindocfrequency.php">SolrQuery::setMltMinDocFrequency</a> — Sets the mltMinDoc frequency</li><li><a href="solrquery.setmltmintermfrequency.php">SolrQuery::setMltMinTermFrequency</a> — Sets the frequency below which terms will be ignored in the source docs</li><li><a href="solrquery.setmltminwordlength.php">SolrQuery::setMltMinWordLength</a> — Sets the minimum word length</li><li><a href="solrquery.setomitheader.php">SolrQuery::setOmitHeader</a> — Exclude the header from the returned results</li><li><a href="solrquery.setquery.php">SolrQuery::setQuery</a> — Sets the search query</li><li><a href="solrquery.setrows.php">SolrQuery::setRows</a> — Specifies the maximum number of rows to return in the result</li><li><a href="solrquery.setshowdebuginfo.php">SolrQuery::setShowDebugInfo</a> — Flag to show debug information</li><li><a href="solrquery.setstart.php">SolrQuery::setStart</a> — Specifies the number of rows to skip</li><li><a href="solrquery.setstats.php">SolrQuery::setStats</a> — Enables or disables the Stats component</li><li><a href="solrquery.setterms.php">SolrQuery::setTerms</a> — Enables or disables the TermsComponent</li><li><a href="solrquery.settermsfield.php">SolrQuery::setTermsField</a> — Sets the name of the field to get the Terms from</li><li><a href="solrquery.settermsincludelowerbound.php">SolrQuery::setTermsIncludeLowerBound</a> — Include the lower bound term in the result set</li><li><a href="solrquery.settermsincludeupperbound.php">SolrQuery::setTermsIncludeUpperBound</a> — Include the upper bound term in the result set</li><li><a href="solrquery.settermslimit.php">SolrQuery::setTermsLimit</a> — Sets the maximum number of terms to return</li><li><a href="solrquery.settermslowerbound.php">SolrQuery::setTermsLowerBound</a> — Specifies the Term to start from</li><li><a href="solrquery.settermsmaxcount.php">SolrQuery::setTermsMaxCount</a> — Sets the maximum document frequency</li><li><a href="solrquery.settermsmincount.php">SolrQuery::setTermsMinCount</a> — Sets the minimum document frequency</li><li><a href="solrquery.settermsprefix.php">SolrQuery::setTermsPrefix</a> — Restrict matches to terms that start with the prefix</li><li><a href="solrquery.settermsreturnraw.php">SolrQuery::setTermsReturnRaw</a> — Return the raw characters of the indexed term</li><li><a href="solrquery.settermssort.php">SolrQuery::setTermsSort</a> — Specifies how to sort the returned terms</li><li><a href="solrquery.settermsupperbound.php">SolrQuery::setTermsUpperBound</a> — Sets the term to stop at</li><li><a href="solrquery.settimeallowed.php">SolrQuery::setTimeAllowed</a> — The time allowed for search to finish</li></ul></li><li><a href="class.solrdismaxquery.php">SolrDisMaxQuery</a> — The SolrDisMaxQuery class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrdismaxquery.addbigramphrasefield.php">SolrDisMaxQuery::addBigramPhraseField</a> — Adds a Phrase Bigram Field (pf2 parameter)</li><li><a href="solrdismaxquery.addboostquery.php">SolrDisMaxQuery::addBoostQuery</a> — Adds a boost query field with value and optional boost (bq parameter)</li><li><a href="solrdismaxquery.addphrasefield.php">SolrDisMaxQuery::addPhraseField</a> — Adds a Phrase Field (pf parameter)</li><li><a href="solrdismaxquery.addqueryfield.php">SolrDisMaxQuery::addQueryField</a> — Add a query field with optional boost (qf parameter)</li><li><a href="solrdismaxquery.addtrigramphrasefield.php">SolrDisMaxQuery::addTrigramPhraseField</a> — Adds a Trigram Phrase Field (pf3 parameter)</li><li><a href="solrdismaxquery.adduserfield.php">SolrDisMaxQuery::addUserField</a> — Adds a field to User Fields Parameter (uf)</li><li><a href="solrdismaxquery.construct.php">SolrDisMaxQuery::__construct</a> — Class Constructor</li><li><a href="solrdismaxquery.removebigramphrasefield.php">SolrDisMaxQuery::removeBigramPhraseField</a> — Removes phrase bigram field (pf2 parameter)</li><li><a href="solrdismaxquery.removeboostquery.php">SolrDisMaxQuery::removeBoostQuery</a> — Removes a boost query partial by field name (bq)</li><li><a href="solrdismaxquery.removephrasefield.php">SolrDisMaxQuery::removePhraseField</a> — Removes a Phrase Field (pf parameter)</li><li><a href="solrdismaxquery.removequeryfield.php">SolrDisMaxQuery::removeQueryField</a> — Removes a Query Field (qf parameter)</li><li><a href="solrdismaxquery.removetrigramphrasefield.php">SolrDisMaxQuery::removeTrigramPhraseField</a> — Removes a Trigram Phrase Field (pf3 parameter)</li><li><a href="solrdismaxquery.removeuserfield.php">SolrDisMaxQuery::removeUserField</a> — Removes a field from The User Fields Parameter (uf)</li><li><a href="solrdismaxquery.setbigramphrasefields.php">SolrDisMaxQuery::setBigramPhraseFields</a> — Sets Bigram Phrase Fields and their boosts (and slops) using pf2 parameter</li><li><a href="solrdismaxquery.setbigramphraseslop.php">SolrDisMaxQuery::setBigramPhraseSlop</a> — Sets Bigram Phrase Slop (ps2 parameter)</li><li><a href="solrdismaxquery.setboostfunction.php">SolrDisMaxQuery::setBoostFunction</a> — Sets a Boost Function (bf parameter)</li><li><a href="solrdismaxquery.setboostquery.php">SolrDisMaxQuery::setBoostQuery</a> — Directly Sets Boost Query Parameter (bq)</li><li><a href="solrdismaxquery.setminimummatch.php">SolrDisMaxQuery::setMinimumMatch</a> — Set Minimum &quot;Should&quot; Match (mm)</li><li><a href="solrdismaxquery.setphrasefields.php">SolrDisMaxQuery::setPhraseFields</a> — Sets  Phrase Fields and their boosts (and slops) using pf2 parameter</li><li><a href="solrdismaxquery.setphraseslop.php">SolrDisMaxQuery::setPhraseSlop</a> — Sets the default slop on phrase queries (ps parameter)</li><li><a href="solrdismaxquery.setqueryalt.php">SolrDisMaxQuery::setQueryAlt</a> — Set Query Alternate (q.alt parameter)</li><li><a href="solrdismaxquery.setqueryphraseslop.php">SolrDisMaxQuery::setQueryPhraseSlop</a> — Specifies the amount of slop permitted on phrase queries explicitly included in the user's query string (qf parameter)</li><li><a href="solrdismaxquery.settiebreaker.php">SolrDisMaxQuery::setTieBreaker</a> — Sets Tie Breaker parameter (tie parameter)</li><li><a href="solrdismaxquery.settrigramphrasefields.php">SolrDisMaxQuery::setTrigramPhraseFields</a> — Directly Sets Trigram Phrase Fields (pf3 parameter)</li><li><a href="solrdismaxquery.settrigramphraseslop.php">SolrDisMaxQuery::setTrigramPhraseSlop</a> — Sets Trigram Phrase Slop (ps3 parameter)</li><li><a href="solrdismaxquery.setuserfields.php">SolrDisMaxQuery::setUserFields</a> — Sets User Fields parameter (uf)</li><li><a href="solrdismaxquery.usedismaxqueryparser.php">SolrDisMaxQuery::useDisMaxQueryParser</a> — Switch QueryParser to be DisMax Query Parser</li><li><a href="solrdismaxquery.useedismaxqueryparser.php">SolrDisMaxQuery::useEDisMaxQueryParser</a> — Switch QueryParser to be EDisMax</li></ul></li><li><a href="class.solrcollapsefunction.php">SolrCollapseFunction</a> — The SolrCollapseFunction class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrcollapsefunction.construct.php">SolrCollapseFunction::__construct</a> — Constructor</li><li><a href="solrcollapsefunction.getfield.php">SolrCollapseFunction::getField</a> — Returns the field that is being collapsed on</li><li><a href="solrcollapsefunction.gethint.php">SolrCollapseFunction::getHint</a> — Returns collapse hint</li><li><a href="solrcollapsefunction.getmax.php">SolrCollapseFunction::getMax</a> — Returns max parameter</li><li><a href="solrcollapsefunction.getmin.php">SolrCollapseFunction::getMin</a> — Returns min parameter</li><li><a href="solrcollapsefunction.getnullpolicy.php">SolrCollapseFunction::getNullPolicy</a> — Returns null policy</li><li><a href="solrcollapsefunction.getsize.php">SolrCollapseFunction::getSize</a> — Returns size parameter</li><li><a href="solrcollapsefunction.setfield.php">SolrCollapseFunction::setField</a> — Sets the field to collapse on</li><li><a href="solrcollapsefunction.sethint.php">SolrCollapseFunction::setHint</a> — Sets collapse hint</li><li><a href="solrcollapsefunction.setmax.php">SolrCollapseFunction::setMax</a> — Selects the group heads by the max value of a numeric field or function query</li><li><a href="solrcollapsefunction.setmin.php">SolrCollapseFunction::setMin</a> — Sets the initial size of the collapse data structures when collapsing on a numeric field only</li><li><a href="solrcollapsefunction.setnullpolicy.php">SolrCollapseFunction::setNullPolicy</a> — Sets the NULL Policy</li><li><a href="solrcollapsefunction.setsize.php">SolrCollapseFunction::setSize</a> — Sets the initial size of the collapse data structures when collapsing on a numeric field only</li><li><a href="solrcollapsefunction.tostring.php">SolrCollapseFunction::__toString</a> — Returns a string representing the constructed collapse function</li></ul></li><li><a href="class.solrexception.php">SolrException</a> — The SolrException class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrexception.getinternalinfo.php">SolrException::getInternalInfo</a> — Returns internal information where the Exception was thrown</li></ul></li><li><a href="class.solrclientexception.php">SolrClientException</a> — The SolrClientException class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrclientexception.getinternalinfo.php">SolrClientException::getInternalInfo</a> — Returns internal information where the Exception was thrown</li></ul></li><li><a href="class.solrserverexception.php">SolrServerException</a> — The SolrServerException class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrserverexception.getinternalinfo.php">SolrServerException::getInternalInfo</a> — Returns internal information where the Exception was thrown</li></ul></li><li><a href="class.solrillegalargumentexception.php">SolrIllegalArgumentException</a> — The SolrIllegalArgumentException class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrillegalargumentexception.getinternalinfo.php">SolrIllegalArgumentException::getInternalInfo</a> — Returns internal information where the Exception was thrown</li></ul></li><li><a href="class.solrillegaloperationexception.php">SolrIllegalOperationException</a> — The SolrIllegalOperationException class<ul class="chunklist chunklist_book chunklist_children"><li><a href="solrillegaloperationexception.getinternalinfo.php">SolrIllegalOperationException::getInternalInfo</a> — Returns internal information where the Exception was thrown</li></ul></li><li><a href="class.solrmissingmandatoryparameterexception.php">SolrMissingMandatoryParameterException</a> — The SolrMissingMandatoryParameterException class</li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/solr/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.solr%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.solr&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.solr.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="123671">  <div class="votes">
    <div id="Vu123671">
    <a href="/manual/vote-note.php?id=123671&amp;page=book.solr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123671">
    <a href="/manual/vote-note.php?id=123671&amp;page=book.solr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123671" title="73% like this...">
    7
    </div>
  </div>
  <a href="#123671" class="name">
  <strong class="user"><em>ASchmidt at Anamera dot net</em></strong></a><a class="genanchor" href="#123671"> &para;</a><div class="date" title="2019-03-08 07:28"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123671">
<div class="phpcode"><code><span class="html">This extension was last updated for PHP 7.1 three years ago.<br /><br />As of this date, it has not been released for PHP 7.2 or PHP 7.3. In other words, it's not actively maintained.</span></code></div>
  </div>
 </div>
  <div class="note" id="110122">  <div class="votes">
    <div id="Vu110122">
    <a href="/manual/vote-note.php?id=110122&amp;page=book.solr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110122">
    <a href="/manual/vote-note.php?id=110122&amp;page=book.solr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110122" title="57% like this...">
    3
    </div>
  </div>
  <a href="#110122" class="name">
  <strong class="user"><em>Corentin Larose</em></strong></a><a class="genanchor" href="#110122"> &para;</a><div class="date" title="2012-09-21 02:56"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110122">
<div class="phpcode"><code><span class="html">Hello,<br /><br />you have to use SolrQuery::addFilterQuery() instead of SolrQuery::addFacetQuery() which is intended for another goal.<br /><br />SolrQuery::addFilterQuery() : fq<br />SolrQuery::addFacetQuery() : facet.query<br /><br />Regards,<br /><br />Corentin Larose - CTO@QAPA</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.solr&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.solr.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.search.php">Search Engine Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="book.solr.php" title="Solr">Solr</a>
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
