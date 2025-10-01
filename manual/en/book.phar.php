<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Phar - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.phar.php">
 <link rel="shorturl" href="https://www.php.net/phar">
 <link rel="alternate" href="https://www.php.net/phar" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.compression.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.lzf-optimized-for.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.phar.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.phar.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.phar.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.phar.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.phar.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.phar.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.phar.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.phar.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.phar.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.phar.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.phar.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.phar.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Phar" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Phar - Manual" />
<meta name="twitter:description" content="Phar" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Phar - Manual" />
<meta itemprop="description" content="Phar" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Phar" />

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
        <a href="intro.phar.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.lzf-optimized-for.php">
          &laquo; lzf_optimized_for        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      </ul>
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
            <option value='en/book.phar.php' selected="selected">English</option>
            <option value='de/book.phar.php'>German</option>
            <option value='es/book.phar.php'>Spanish</option>
            <option value='fr/book.phar.php'>French</option>
            <option value='it/book.phar.php'>Italian</option>
            <option value='ja/book.phar.php'>Japanese</option>
            <option value='pt_BR/book.phar.php'>Brazilian Portuguese</option>
            <option value='ru/book.phar.php'>Russian</option>
            <option value='tr/book.phar.php'>Turkish</option>
            <option value='uk/book.phar.php'>Ukrainian</option>
            <option value='zh/book.phar.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.phar" class="book">
 
 <h1 class="title">Phar</h1>
 
 
 
 
 
 







 




 





 





 





 




 




 




 





<ul class="chunklist chunklist_book"><li><a href="intro.phar.php">Introduction</a></li><li><a href="phar.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="phar.requirements.php">Requirements</a></li><li><a href="phar.installation.php">Installation</a></li><li><a href="phar.configuration.php">Runtime Configuration</a></li><li><a href="phar.resources.php">Resource Types</a></li></ul></li><li><a href="phar.constants.php">Predefined Constants</a></li><li><a href="phar.using.php">Using Phar Archives</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="phar.using.intro.php">Using Phar Archives: Introduction</a></li><li><a href="phar.using.stream.php">Using Phar Archives: the phar stream wrapper</a></li><li><a href="phar.using.object.php">Using Phar Archives: the Phar and PharData class</a></li></ul></li><li><a href="phar.creating.php">Creating Phar Archives</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="phar.creating.intro.php">Creating Phar Archives: Introduction</a></li></ul></li><li><a href="phar.fileformat.php">What makes a phar a phar and not a tar or a zip?</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="phar.fileformat.ingredients.php">Ingredients of all Phar archives, independent of file format</a></li><li><a href="phar.fileformat.stub.php">Phar file stub</a></li><li><a href="phar.fileformat.comparison.php">Head-to-head comparison of Phar, Tar and Zip</a></li><li><a href="phar.fileformat.tar.php">Tar-based phars</a></li><li><a href="phar.fileformat.zip.php">Zip-based phars</a></li><li><a href="phar.fileformat.phar.php">Phar File Format</a></li><li><a href="phar.fileformat.flags.php">Global Phar bitmapped flags</a></li><li><a href="phar.fileformat.manifestfile.php">Phar manifest file entry definition</a></li><li><a href="phar.fileformat.signature.php">Phar Signature format</a></li></ul></li><li><a href="class.phar.php">Phar</a> — The Phar class<ul class="chunklist chunklist_book chunklist_children"><li><a href="phar.addemptydir.php">Phar::addEmptyDir</a> — Add an empty directory to the phar archive</li><li><a href="phar.addfile.php">Phar::addFile</a> — Add a file from the filesystem to the phar archive</li><li><a href="phar.addfromstring.php">Phar::addFromString</a> — Add a file from a string to the phar archive</li><li><a href="phar.apiversion.php">Phar::apiVersion</a> — Returns the api version</li><li><a href="phar.buildfromdirectory.php">Phar::buildFromDirectory</a> — Construct a phar archive from the files within a directory</li><li><a href="phar.buildfromiterator.php">Phar::buildFromIterator</a> — Construct a phar archive from an iterator</li><li><a href="phar.cancompress.php">Phar::canCompress</a> — Returns whether phar extension supports compression using either zlib or bzip2</li><li><a href="phar.canwrite.php">Phar::canWrite</a> — Returns whether phar extension supports writing and creating phars</li><li><a href="phar.compress.php">Phar::compress</a> — Compresses the entire Phar archive using Gzip or Bzip2 compression</li><li><a href="phar.compressfiles.php">Phar::compressFiles</a> — Compresses all files in the current Phar archive</li><li><a href="phar.construct.php">Phar::__construct</a> — Construct a Phar archive object</li><li><a href="phar.converttodata.php">Phar::convertToData</a> — Convert a phar archive to a non-executable tar or zip file</li><li><a href="phar.converttoexecutable.php">Phar::convertToExecutable</a> — Convert a phar archive to another executable phar archive file format</li><li><a href="phar.copy.php">Phar::copy</a> — Copy a file internal to the phar archive to another new file within the phar</li><li><a href="phar.count.php">Phar::count</a> — Returns the number of entries (files) in the Phar archive</li><li><a href="phar.createdefaultstub.php">Phar::createDefaultStub</a> — Create a phar-file format specific stub</li><li><a href="phar.decompress.php">Phar::decompress</a> — Decompresses the entire Phar archive</li><li><a href="phar.decompressfiles.php">Phar::decompressFiles</a> — Decompresses all files in the current Phar archive</li><li><a href="phar.delmetadata.php">Phar::delMetadata</a> — Deletes the global metadata of the phar</li><li><a href="phar.delete.php">Phar::delete</a> — Delete a file within a phar archive</li><li><a href="phar.destruct.php">Phar::__destruct</a> — Destructs a Phar archive object</li><li><a href="phar.extractto.php">Phar::extractTo</a> — Extract the contents of a phar archive to a directory</li><li><a href="phar.getalias.php">Phar::getAlias</a> — Get the alias for Phar</li><li><a href="phar.getmetadata.php">Phar::getMetadata</a> — Returns phar archive meta-data</li><li><a href="phar.getmodified.php">Phar::getModified</a> — Return whether phar was modified</li><li><a href="phar.getpath.php">Phar::getPath</a> — Get the real path to the Phar archive on disk</li><li><a href="phar.getsignature.php">Phar::getSignature</a> — Return MD5/SHA1/SHA256/SHA512/OpenSSL signature of a Phar archive</li><li><a href="phar.getstub.php">Phar::getStub</a> — Return the PHP loader or bootstrap stub of a Phar archive</li><li><a href="phar.getsupportedcompression.php">Phar::getSupportedCompression</a> — Return array of supported compression algorithms</li><li><a href="phar.getsupportedsignatures.php">Phar::getSupportedSignatures</a> — Return array of supported signature types</li><li><a href="phar.getversion.php">Phar::getVersion</a> — Return version info of Phar archive</li><li><a href="phar.hasmetadata.php">Phar::hasMetadata</a> — Returns whether phar has global meta-data</li><li><a href="phar.interceptfilefuncs.php">Phar::interceptFileFuncs</a> — Instructs phar to intercept fopen, file_get_contents, opendir, and all of the stat-related functions</li><li><a href="phar.isbuffering.php">Phar::isBuffering</a> — Used to determine whether Phar write operations are being buffered, or are flushing directly to disk</li><li><a href="phar.iscompressed.php">Phar::isCompressed</a> — Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on)</li><li><a href="phar.isfileformat.php">Phar::isFileFormat</a> — Returns true if the phar archive is based on the tar/phar/zip file format depending on the parameter</li><li><a href="phar.isvalidpharfilename.php">Phar::isValidPharFilename</a> — Returns whether the given filename is a valid phar filename</li><li><a href="phar.iswritable.php">Phar::isWritable</a> — Returns true if the phar archive can be modified</li><li><a href="phar.loadphar.php">Phar::loadPhar</a> — Loads any phar archive with an alias</li><li><a href="phar.mapphar.php">Phar::mapPhar</a> — Reads the currently executed file (a phar) and registers its manifest</li><li><a href="phar.mount.php">Phar::mount</a> — Mount an external path or file to a virtual location within the phar archive</li><li><a href="phar.mungserver.php">Phar::mungServer</a> — Defines a list of up to 4 $_SERVER variables that should be modified for execution</li><li><a href="phar.offsetexists.php">Phar::offsetExists</a> — Determines whether a file exists in the phar</li><li><a href="phar.offsetget.php">Phar::offsetGet</a> — Gets a PharFileInfo object for a specific file</li><li><a href="phar.offsetset.php">Phar::offsetSet</a> — Set the contents of an internal file to those of an external file</li><li><a href="phar.offsetunset.php">Phar::offsetUnset</a> — Remove a file from a phar</li><li><a href="phar.running.php">Phar::running</a> — Returns the full path on disk or full phar URL to the currently executing Phar archive</li><li><a href="phar.setalias.php">Phar::setAlias</a> — Set the alias for the Phar archive</li><li><a href="phar.setdefaultstub.php">Phar::setDefaultStub</a> — Used to set the PHP loader or bootstrap stub of a Phar archive to the default loader</li><li><a href="phar.setmetadata.php">Phar::setMetadata</a> — Sets phar archive meta-data</li><li><a href="phar.setsignaturealgorithm.php">Phar::setSignatureAlgorithm</a> — Set the signature algorithm for a phar and apply it</li><li><a href="phar.setstub.php">Phar::setStub</a> — Used to set the PHP loader or bootstrap stub of a Phar archive</li><li><a href="phar.startbuffering.php">Phar::startBuffering</a> — Start buffering Phar write operations, do not modify the Phar object on disk</li><li><a href="phar.stopbuffering.php">Phar::stopBuffering</a> — Stop buffering write requests to the Phar archive, and save changes to disk</li><li><a href="phar.unlinkarchive.php">Phar::unlinkArchive</a> — Completely remove a phar archive from disk and from memory</li><li><a href="phar.webphar.php">Phar::webPhar</a> — Routes a request from a web browser to an internal file within the phar archive</li></ul></li><li><a href="class.phardata.php">PharData</a> — The PharData class<ul class="chunklist chunklist_book chunklist_children"><li><a href="phardata.addemptydir.php">PharData::addEmptyDir</a> — Add an empty directory to the tar/zip archive</li><li><a href="phardata.addfile.php">PharData::addFile</a> — Add a file from the filesystem to the tar/zip archive</li><li><a href="phardata.addfromstring.php">PharData::addFromString</a> — Add a file from a string to the tar/zip archive</li><li><a href="phardata.buildfromdirectory.php">PharData::buildFromDirectory</a> — Construct a tar/zip archive from the files within a directory</li><li><a href="phardata.buildfromiterator.php">PharData::buildFromIterator</a> — Construct a tar or zip archive from an iterator</li><li><a href="phardata.compress.php">PharData::compress</a> — Compresses the entire tar/zip archive using Gzip or Bzip2 compression</li><li><a href="phardata.compressfiles.php">PharData::compressFiles</a> — Compresses all files in the current tar/zip archive</li><li><a href="phardata.construct.php">PharData::__construct</a> — Construct a non-executable tar or zip archive object</li><li><a href="phardata.converttodata.php">PharData::convertToData</a> — Convert a phar archive to a non-executable tar or zip file</li><li><a href="phardata.converttoexecutable.php">PharData::convertToExecutable</a> — Convert a non-executable tar/zip archive to an executable phar archive</li><li><a href="phardata.copy.php">PharData::copy</a> — Copy a file internal to the tar/zip archive to another new file within the same archive</li><li><a href="phardata.decompress.php">PharData::decompress</a> — Decompresses the entire Phar archive</li><li><a href="phardata.decompressfiles.php">PharData::decompressFiles</a> — Decompresses all files in the current zip archive</li><li><a href="phardata.delmetadata.php">PharData::delMetadata</a> — Deletes the global metadata of a zip archive</li><li><a href="phardata.delete.php">PharData::delete</a> — Delete a file within a tar/zip archive</li><li><a href="phardata.destruct.php">PharData::__destruct</a> — Destructs a non-executable tar or zip archive object</li><li><a href="phardata.extractto.php">PharData::extractTo</a> — Extract the contents of a tar/zip archive to a directory</li><li><a href="phardata.iswritable.php">PharData::isWritable</a> — Returns true if the tar/zip archive can be modified</li><li><a href="phardata.offsetset.php">PharData::offsetSet</a> — Set the contents of a file within the tar/zip to those of an external file or string</li><li><a href="phardata.offsetunset.php">PharData::offsetUnset</a> — Remove a file from a tar/zip archive</li><li><a href="phardata.setalias.php">PharData::setAlias</a> — Dummy function (Phar::setAlias is not valid for PharData)</li><li><a href="phardata.setdefaultstub.php">PharData::setDefaultStub</a> — Dummy function (Phar::setDefaultStub is not valid for PharData)</li><li><a href="phardata.setmetadata.php">PharData::setMetadata</a> — Sets phar archive meta-data</li><li><a href="phardata.setsignaturealgorithm.php">PharData::setSignatureAlgorithm</a> — Set the signature algorithm for a phar and apply it</li><li><a href="phardata.setstub.php">PharData::setStub</a> — Dummy function (Phar::setStub is not valid for PharData)</li></ul></li><li><a href="class.pharfileinfo.php">PharFileInfo</a> — The PharFileInfo class<ul class="chunklist chunklist_book chunklist_children"><li><a href="pharfileinfo.chmod.php">PharFileInfo::chmod</a> — Sets file-specific permission bits</li><li><a href="pharfileinfo.compress.php">PharFileInfo::compress</a> — Compresses the current Phar entry with either zlib or bzip2 compression</li><li><a href="pharfileinfo.construct.php">PharFileInfo::__construct</a> — Construct a Phar entry object</li><li><a href="pharfileinfo.decompress.php">PharFileInfo::decompress</a> — Decompresses the current Phar entry within the phar</li><li><a href="pharfileinfo.delmetadata.php">PharFileInfo::delMetadata</a> — Deletes the metadata of the entry</li><li><a href="pharfileinfo.destruct.php">PharFileInfo::__destruct</a> — Destructs a Phar entry object</li><li><a href="pharfileinfo.getcrc32.php">PharFileInfo::getCRC32</a> — Returns CRC32 code or throws an exception if CRC has not been verified</li><li><a href="pharfileinfo.getcompressedsize.php">PharFileInfo::getCompressedSize</a> — Returns the actual size of the file (with compression) inside the Phar archive</li><li><a href="pharfileinfo.getcontent.php">PharFileInfo::getContent</a> — Get the complete file contents of the entry</li><li><a href="pharfileinfo.getmetadata.php">PharFileInfo::getMetadata</a> — Returns file-specific meta-data saved with a file</li><li><a href="pharfileinfo.getpharflags.php">PharFileInfo::getPharFlags</a> — Returns the Phar file entry flags</li><li><a href="pharfileinfo.hasmetadata.php">PharFileInfo::hasMetadata</a> — Returns the metadata of the entry</li><li><a href="pharfileinfo.iscrcchecked.php">PharFileInfo::isCRCChecked</a> — Returns whether file entry has had its CRC verified</li><li><a href="pharfileinfo.iscompressed.php">PharFileInfo::isCompressed</a> — Returns whether the entry is compressed</li><li><a href="pharfileinfo.setmetadata.php">PharFileInfo::setMetadata</a> — Sets file-specific meta-data saved with a file</li></ul></li><li><a href="class.pharexception.php">PharException</a> — The PharException class</li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/phar/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.phar%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.phar&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.phar.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112337">  <div class="votes">
    <div id="Vu112337">
    <a href="/manual/vote-note.php?id=112337&amp;page=book.phar&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112337">
    <a href="/manual/vote-note.php?id=112337&amp;page=book.phar&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112337" title="76% like this...">
    35
    </div>
  </div>
  <a href="#112337" class="name">
  <strong class="user"><em>dava</em></strong></a><a class="genanchor" href="#112337"> &para;</a><div class="date" title="2013-06-03 09:18"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112337">
<div class="phpcode"><code><span class="html">Here is an apache2 htaccess example that prevents the downloading of phar-Archives by the user:<br /><br />RewriteEngine on<br />RewriteRule ^(.*)\.phar$ - [F]<br /><br />It triggers a "403 - Forbidden" message instead of delivering the archive.</span></code></div>
  </div>
 </div>
  <div class="note" id="106590">  <div class="votes">
    <div id="Vu106590">
    <a href="/manual/vote-note.php?id=106590&amp;page=book.phar&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106590">
    <a href="/manual/vote-note.php?id=106590&amp;page=book.phar&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106590" title="75% like this...">
    17
    </div>
  </div>
  <a href="#106590" class="name">
  <strong class="user"><em>bohwaz</em></strong></a><a class="genanchor" href="#106590"> &para;</a><div class="date" title="2011-11-21 02:43"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106590">
<div class="phpcode"><code><span class="html">If you get blank pages when trying to access a phar web-page, then you probably have Suhosin on your PHP (like in Debian and Ubuntu), and you need to ad this to your php.ini to allow execution of PHAR archives :<br /><br />suhosin.executor.include.whitelist="phar"</span></code></div>
  </div>
 </div>
  <div class="note" id="112265">  <div class="votes">
    <div id="Vu112265">
    <a href="/manual/vote-note.php?id=112265&amp;page=book.phar&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112265">
    <a href="/manual/vote-note.php?id=112265&amp;page=book.phar&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112265" title="65% like this...">
    6
    </div>
  </div>
  <a href="#112265" class="name">
  <strong class="user"><em>v-mafick at microsoft dot com</em></strong></a><a class="genanchor" href="#112265"> &para;</a><div class="date" title="2013-05-24 09:22"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112265">
<div class="phpcode"><code><span class="html">Users should set the `sys_temp_dir` directive.<br /><br />PHAR stores temporary files in either `sys_temp_dir` or the current working directory(CWD).<br /><br />This is especially important if you're CWD is on a remote file system. Often web server clusters will share a common file system between each web server (using NFS, DFS, etc...). In such scenarios, if you don't set `sys_temp_dir` to a local directory, PHAR will be creating temporary files over the network, which will result in performance and functionality problems.</span></code></div>
  </div>
 </div>
  <div class="note" id="121323">  <div class="votes">
    <div id="Vu121323">
    <a href="/manual/vote-note.php?id=121323&amp;page=book.phar&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121323">
    <a href="/manual/vote-note.php?id=121323&amp;page=book.phar&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121323" title="61% like this...">
    3
    </div>
  </div>
  <a href="#121323" class="name">
  <strong class="user"><em>brunoczim</em></strong></a><a class="genanchor" href="#121323"> &para;</a><div class="date" title="2017-07-05 01:24"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121323">
<div class="phpcode"><code><span class="html">Here is a very simple program for creating phar files with CLI. Note that it requires phar.readonly in php.ini  set to false (Off).<br /><br /><span class="default">&lt;?php<br />$filename </span><span class="keyword">= </span><span class="string">"default"</span><span class="keyword">;<br /></span><span class="default">$dir </span><span class="keyword">= </span><span class="string">"./"</span><span class="keyword">;<br /></span><span class="default">$regex </span><span class="keyword">= </span><span class="string">"/^(?!.*build\\.php)(?:.*)$/"</span><span class="keyword">;<br /></span><span class="default">$main </span><span class="keyword">= </span><span class="string">"main.php"</span><span class="keyword">;<br /></span><span class="default">$shebang </span><span class="keyword">= </span><span class="string">"#!/usr/bin/env php"</span><span class="keyword">;<br /></span><span class="default">$chmod </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /><br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$argc</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    switch (</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) {<br />        case </span><span class="string">"-o"</span><span class="keyword">:<br />            </span><span class="default">$i</span><span class="keyword">++;<br />            if (</span><span class="default">$i </span><span class="keyword">&gt;= </span><span class="default">$argc</span><span class="keyword">) {<br />                echo </span><span class="string">"Missing output file name" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />                exit(</span><span class="default">1</span><span class="keyword">);<br />            }<br />            </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />            break;<br />        case </span><span class="string">"-i"</span><span class="keyword">:<br />            </span><span class="default">$i</span><span class="keyword">++;<br />            if (</span><span class="default">$i </span><span class="keyword">&gt;= </span><span class="default">$argc</span><span class="keyword">) {<br />                echo </span><span class="string">"Missing input directory name" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />                exit(</span><span class="default">1</span><span class="keyword">);<br />            }<br />            </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />            break;<br />        case </span><span class="string">"-p"</span><span class="keyword">:<br />            </span><span class="default">$i</span><span class="keyword">++;<br />            if (</span><span class="default">$i </span><span class="keyword">&gt;= </span><span class="default">$argc</span><span class="keyword">) {<br />                echo </span><span class="string">"Missing regular expression pattern" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />                exit(</span><span class="default">1</span><span class="keyword">);<br />            }<br />            </span><span class="default">$regex </span><span class="keyword">= </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />            break;<br />        case </span><span class="string">"-m"</span><span class="keyword">:<br />            </span><span class="default">$i</span><span class="keyword">++;<br />            if (</span><span class="default">$i </span><span class="keyword">&gt;= </span><span class="default">$argc</span><span class="keyword">) {<br />                echo </span><span class="string">"Missing main file" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />                exit(</span><span class="default">1</span><span class="keyword">);<br />            }<br />            </span><span class="default">$main </span><span class="keyword">= </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />            break;<br />        case </span><span class="string">"-b"</span><span class="keyword">:<br />            </span><span class="default">$i</span><span class="keyword">++;<br />            if (</span><span class="default">$i </span><span class="keyword">&gt;= </span><span class="default">$argc</span><span class="keyword">) {<br />                echo </span><span class="string">"Missing shebang of file" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />                exit(</span><span class="default">1</span><span class="keyword">);<br />            }<br />            </span><span class="default">$shebang </span><span class="keyword">= </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />            break;<br />        case </span><span class="string">"--no-chmod"</span><span class="keyword">:<br />            </span><span class="default">$chmod </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />            break;<br />    }<br />}<br />if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)) </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br /></span><span class="default">$phar </span><span class="keyword">= new </span><span class="default">Phar</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br /></span><span class="default">$phar</span><span class="keyword">-&gt;</span><span class="default">buildFromDirectory</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="default">$regex</span><span class="keyword">);<br /></span><span class="default">$phar</span><span class="keyword">-&gt;</span><span class="default">setStub</span><span class="keyword">((</span><span class="default">$shebang </span><span class="keyword">? </span><span class="default">$shebang </span><span class="keyword">. </span><span class="default">PHP_EOL </span><span class="keyword">: </span><span class="string">""</span><span class="keyword">) . </span><span class="default">$phar</span><span class="keyword">-&gt;</span><span class="default">createDefaultStub</span><span class="keyword">(</span><span class="default">$main</span><span class="keyword">));<br />if (</span><span class="default">$chmod</span><span class="keyword">) {<br />    </span><span class="default">chmod</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">fileperms</span><span class="keyword">(</span><span class="default">$phar</span><span class="keyword">) | </span><span class="default">0700</span><span class="keyword">);<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123125">  <div class="votes">
    <div id="Vu123125">
    <a href="/manual/vote-note.php?id=123125&amp;page=book.phar&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123125">
    <a href="/manual/vote-note.php?id=123125&amp;page=book.phar&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123125" title="53% like this...">
    1
    </div>
  </div>
  <a href="#123125" class="name">
  <strong class="user"><em>lemonkid from OpenToAll</em></strong></a><a class="genanchor" href="#123125"> &para;</a><div class="date" title="2018-09-12 06:39"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123125">
<div class="phpcode"><code><span class="html">when read via phar://, stream will unserialize object including phar file<br /><br />Use this to create phar<br /><span class="default">&lt;?php<br /></span><span class="comment">// create new Phar<br /></span><span class="default">$phar </span><span class="keyword">= new </span><span class="default">Phar</span><span class="keyword">(</span><span class="string">'lemon.phar'</span><span class="keyword">);<br /></span><span class="default">$phar</span><span class="keyword">-&gt;</span><span class="default">startBuffering</span><span class="keyword">();<br /></span><span class="default">$phar</span><span class="keyword">-&gt;</span><span class="default">addFromString</span><span class="keyword">(</span><span class="string">'test.txt'</span><span class="keyword">, </span><span class="string">'text'</span><span class="keyword">);<br /></span><span class="default">$phar</span><span class="keyword">-&gt;</span><span class="default">setStub</span><span class="keyword">(</span><span class="string">'&lt;?php __HALT_COMPILER(); ? &gt;'</span><span class="keyword">);<br /><br /></span><span class="comment">// add object of any class as meta data<br /></span><span class="keyword">class </span><span class="default">AnyClass </span><span class="keyword">{}<br /></span><span class="default">$object </span><span class="keyword">= new </span><span class="default">AnyClass</span><span class="keyword">;<br /></span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">data </span><span class="keyword">= </span><span class="string">'Chanh'</span><span class="keyword">;<br /></span><span class="default">$phar</span><span class="keyword">-&gt;</span><span class="default">setMetadata</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">);<br /></span><span class="default">$phar</span><span class="keyword">-&gt;</span><span class="default">stopBuffering</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />and read it by:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">AnyClass </span><span class="keyword">{<br />    function </span><span class="default">__destruct</span><span class="keyword">() {<br />        echo </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">;<br />    }<br />}<br /></span><span class="comment">// output: Chanh<br /></span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'phar://test.phar'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113912">  <div class="votes">
    <div id="Vu113912">
    <a href="/manual/vote-note.php?id=113912&amp;page=book.phar&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113912">
    <a href="/manual/vote-note.php?id=113912&amp;page=book.phar&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113912" title="53% like this...">
    1
    </div>
  </div>
  <a href="#113912" class="name">
  <strong class="user"><em>t dot habenreich at web dot de</em></strong></a><a class="genanchor" href="#113912"> &para;</a><div class="date" title="2013-12-16 08:38"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113912">
<div class="phpcode"><code><span class="html">Here is a very simple class to build a phar file from a given source directory. You can use this for your own project and simple deployment.<br /><br />But my main goal was to show how to use PHAR functions in a simple way.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">BuildPhar<br /></span><span class="keyword">{<br />  private </span><span class="default">$_sourceDirectory </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />  private </span><span class="default">$_stubFile        </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />  private </span><span class="default">$_outputDirectory </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />  private </span><span class="default">$_pharFileName    </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br />  </span><span class="comment">/**<br />   * @param $_sourceDirectory       // This is the directory where your project is stored.<br />   * @param $stubFile               // Name the entry point for your phar file. This file have to be within the source<br />   *                                   directory. <br />   * @param null $_outputDirectory  // Directory where the phar file will be placed.<br />   * @param string $pharFileName    // Name of your final *.phar file.<br />   */<br />  </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$_sourceDirectory</span><span class="keyword">, </span><span class="default">$stubFile</span><span class="keyword">, </span><span class="default">$_outputDirectory </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$pharFileName </span><span class="keyword">= </span><span class="string">'myPhar.phar'</span><span class="keyword">) {<br /><br />    if ((</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$_sourceDirectory</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) || (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$_sourceDirectory</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">)) {<br />      throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'No valid source directory given.'</span><span class="keyword">);<br />    }<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_sourceDirectory </span><span class="keyword">= </span><span class="default">$_sourceDirectory</span><span class="keyword">;<br /><br />    if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_sourceDirectory</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$stubFile</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) {<br />      throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Your given stub file doesn\'t exists.'</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_stubFile </span><span class="keyword">= </span><span class="default">$stubFile</span><span class="keyword">;<br /><br />    if(empty(</span><span class="default">$pharFileName</span><span class="keyword">) === </span><span class="default">true</span><span class="keyword">) {<br />      throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Your given output name for your phar-file is empty.'</span><span class="keyword">);<br />    }<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_pharFileName </span><span class="keyword">= </span><span class="default">$pharFileName</span><span class="keyword">;<br /><br />    if ((empty(</span><span class="default">$_outputDirectory</span><span class="keyword">) === </span><span class="default">true</span><span class="keyword">) || (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$_outputDirectory</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) || (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$_outputDirectory</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">)) {<br /><br />      if (</span><span class="default">$_outputDirectory </span><span class="keyword">!== </span><span class="default">null</span><span class="keyword">) {<br />        </span><span class="default">trigger_error </span><span class="keyword">( </span><span class="string">'Your output directory is invalid. We set the fallback to: "'</span><span class="keyword">.</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">).</span><span class="string">'".'</span><span class="keyword">, </span><span class="default">E_USER_WARNING</span><span class="keyword">);<br />      }<br /><br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_outputDirectory </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">);<br />    } else {<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_outputDirectory </span><span class="keyword">= </span><span class="default">$_outputDirectory</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">prepareBuildDirectory</span><span class="keyword">();<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">buildPhar</span><span class="keyword">();<br />  }<br /><br />  private function </span><span class="default">prepareBuildDirectory</span><span class="keyword">() {<br />    if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/.phar$/'</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_pharFileName</span><span class="keyword">) == </span><span class="default">FALSE</span><span class="keyword">) {<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_pharFileName </span><span class="keyword">.= </span><span class="string">'.phar'</span><span class="keyword">;<br />    }<br /><br />    if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_pharFileName</span><span class="keyword">) === </span><span class="default">true</span><span class="keyword">) {<br />      </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_pharFileName</span><span class="keyword">);<br />    }<br />  }<br /><br />  private function </span><span class="default">buildPhar</span><span class="keyword">() {<br />    </span><span class="default">$phar </span><span class="keyword">= new </span><span class="default">Phar</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_outputDirectory</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_pharFileName</span><span class="keyword">);<br />    </span><span class="default">$phar</span><span class="keyword">-&gt;</span><span class="default">buildFromDirectory</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_sourceDirectory</span><span class="keyword">);<br />    </span><span class="default">$phar</span><span class="keyword">-&gt;</span><span class="default">setDefaultStub</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_stubFile</span><span class="keyword">);<br />  }<br />}<br /></span><span class="comment">//END Class<br /><br />//Example Usage:<br /></span><span class="default">$builder </span><span class="keyword">= new </span><span class="default">BuildPhar</span><span class="keyword">(<br />  </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">).</span><span class="string">'/_source'</span><span class="keyword">,<br />  </span><span class="string">'my_default_stub.php'</span><span class="keyword">,<br />  </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">).</span><span class="string">'/_output'</span><span class="keyword">,<br />  </span><span class="string">'my-phar-file.phar'<br /></span><span class="keyword">);</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.phar&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.phar.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.compression.php">Compression and Archive Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.bzip2.php" title="Bzip2">Bzip2</a>
                        </li>
                                                <li class="">
                            <a href="book.lzf.php" title="LZF">LZF</a>
                        </li>
                                                <li class="current">
                            <a href="book.phar.php" title="Phar">Phar</a>
                        </li>
                                                <li class="">
                            <a href="book.rar.php" title="Rar">Rar</a>
                        </li>
                                                <li class="">
                            <a href="book.zip.php" title="Zip">Zip</a>
                        </li>
                                                <li class="">
                            <a href="book.zlib.php" title="Zlib">Zlib</a>
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
