<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Zip Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.zip.php">
 <link rel="shorturl" href="https://www.php.net/zip">
 <link rel="alternate" href="https://www.php.net/zip" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.zip.php">
 <link rel="prev" href="https://www.php.net/manual/en/ziparchive.unchangename.php">
 <link rel="next" href="https://www.php.net/manual/en/function.zip-close.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.zip.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.zip.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.zip.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.zip.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.zip.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.zip.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.zip.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.zip.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.zip.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.zip.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.zip.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Zip Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Zip Functions - Manual" />
<meta name="twitter:description" content="Zip Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Zip Functions - Manual" />
<meta itemprop="description" content="Zip Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Zip Functions" />

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
        <a href="function.zip-close.php">
          zip_close &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ziparchive.unchangename.php">
          &laquo; ZipArchive::unchangeName        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.zip.php'>Zip</a></li>      </ul>
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
            <option value='en/ref.zip.php' selected="selected">English</option>
            <option value='de/ref.zip.php'>German</option>
            <option value='es/ref.zip.php'>Spanish</option>
            <option value='fr/ref.zip.php'>French</option>
            <option value='it/ref.zip.php'>Italian</option>
            <option value='ja/ref.zip.php'>Japanese</option>
            <option value='pt_BR/ref.zip.php'>Brazilian Portuguese</option>
            <option value='ru/ref.zip.php'>Russian</option>
            <option value='tr/ref.zip.php'>Turkish</option>
            <option value='uk/ref.zip.php'>Ukrainian</option>
            <option value='zh/ref.zip.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.zip" class="reference">
 <h1 class="title">Zip Functions</h1>
 <div class="partintro">
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">
    The procedural API is deprecated as of PHP 8.0.0.
    <span class="classname"><a href="class.ziparchive.php" class="classname">ZipArchive</a></span> should be used instead.
   </p>
  </div>
 </div>

 




























































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.zip-close.php">zip_close</a> — Close a ZIP file archive</li><li><a href="function.zip-entry-close.php">zip_entry_close</a> — Close a directory entry</li><li><a href="function.zip-entry-compressedsize.php">zip_entry_compressedsize</a> — Retrieve the compressed size of a directory entry</li><li><a href="function.zip-entry-compressionmethod.php">zip_entry_compressionmethod</a> — Retrieve the compression method of a directory entry</li><li><a href="function.zip-entry-filesize.php">zip_entry_filesize</a> — Retrieve the actual file size of a directory entry</li><li><a href="function.zip-entry-name.php">zip_entry_name</a> — Retrieve the name of a directory entry</li><li><a href="function.zip-entry-open.php">zip_entry_open</a> — Open a directory entry for reading</li><li><a href="function.zip-entry-read.php">zip_entry_read</a> — Read from an open directory entry</li><li><a href="function.zip-open.php">zip_open</a> — Open a ZIP file archive</li><li><a href="function.zip-read.php">zip_read</a> — Read next entry in a ZIP file archive</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/zip/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.zip%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.zip&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.zip.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">20 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="75079">  <div class="votes">
    <div id="Vu75079">
    <a href="/manual/vote-note.php?id=75079&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75079">
    <a href="/manual/vote-note.php?id=75079&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75079" title="57% like this...">
    12
    </div>
  </div>
  <a href="#75079" class="name">
  <strong class="user"><em>nielsvandenberge at hotmail dot com</em></strong></a><a class="genanchor" href="#75079"> &para;</a><div class="date" title="2007-05-11 02:29"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75079">
<div class="phpcode"><code><span class="html">This is the function I use to unzip a file. <br />It includes the following options:<br />* Unzip in any directory you like<br />* Unzip in the directory of the zip file<br />* Unzip in a directory with the zipfile's name in the directory of the zip file. (i.e.: C:\test.zip will be unzipped in  C:\test\)<br />* Overwrite existing files or not<br />* It creates non existing directories with the function Create_dirs($path)<br /><br />You should use absolute paths with slashes (/) instead of backslashes (\).<br />I tested it with PHP 5.2.0 with php_zip.dll extension loaded<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Unzip the source_file in the destination dir<br /> *<br /> * @param   string      The path to the ZIP-file.<br /> * @param   string      The path where the zipfile should be unpacked, if false the directory of the zip-file is used<br /> * @param   boolean     Indicates if the files will be unpacked in a directory with the name of the zip-file (true) or not (false) (only if the destination directory is set to false!)<br /> * @param   boolean     Overwrite existing files (true) or not (false)<br /> *  <br /> * @return  boolean     Succesful or not<br /> */<br /></span><span class="keyword">function </span><span class="default">unzip</span><span class="keyword">(</span><span class="default">$src_file</span><span class="keyword">, </span><span class="default">$dest_dir</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">, </span><span class="default">$create_zip_name_dir</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">, </span><span class="default">$overwrite</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">) <br />{<br />  if (</span><span class="default">$zip </span><span class="keyword">= </span><span class="default">zip_open</span><span class="keyword">(</span><span class="default">$src_file</span><span class="keyword">)) <br />  {<br />    if (</span><span class="default">$zip</span><span class="keyword">) <br />    {<br />      </span><span class="default">$splitter </span><span class="keyword">= (</span><span class="default">$create_zip_name_dir </span><span class="keyword">=== </span><span class="default">true</span><span class="keyword">) ? </span><span class="string">"." </span><span class="keyword">: </span><span class="string">"/"</span><span class="keyword">;<br />      if (</span><span class="default">$dest_dir </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) </span><span class="default">$dest_dir </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$src_file</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">$src_file</span><span class="keyword">, </span><span class="default">$splitter</span><span class="keyword">)).</span><span class="string">"/"</span><span class="keyword">;<br />      <br />      </span><span class="comment">// Create the directories to the destination dir if they don't already exist<br />      </span><span class="default">create_dirs</span><span class="keyword">(</span><span class="default">$dest_dir</span><span class="keyword">);<br /><br />      </span><span class="comment">// For every file in the zip-packet<br />      </span><span class="keyword">while (</span><span class="default">$zip_entry </span><span class="keyword">= </span><span class="default">zip_read</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">)) <br />      {<br />        </span><span class="comment">// Now we're going to create the directories in the destination directories<br />        <br />        // If the file is not in the root dir<br />        </span><span class="default">$pos_last_slash </span><span class="keyword">= </span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">), </span><span class="string">"/"</span><span class="keyword">);<br />        if (</span><span class="default">$pos_last_slash </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">)<br />        {<br />          </span><span class="comment">// Create the directory where the zip-entry should be saved (with a "/" at the end)<br />          </span><span class="default">create_dirs</span><span class="keyword">(</span><span class="default">$dest_dir</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">(</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">$pos_last_slash</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">));<br />        }<br /><br />        </span><span class="comment">// Open the entry<br />        </span><span class="keyword">if (</span><span class="default">zip_entry_open</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">,</span><span class="default">$zip_entry</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">)) <br />        {<br />          <br />          </span><span class="comment">// The name of the file to save on the disk<br />          </span><span class="default">$file_name </span><span class="keyword">= </span><span class="default">$dest_dir</span><span class="keyword">.</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);<br />          <br />          </span><span class="comment">// Check if the files should be overwritten or not<br />          </span><span class="keyword">if (</span><span class="default">$overwrite </span><span class="keyword">=== </span><span class="default">true </span><span class="keyword">|| </span><span class="default">$overwrite </span><span class="keyword">=== </span><span class="default">false </span><span class="keyword">&amp;&amp; !</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$file_name</span><span class="keyword">))<br />          {<br />            </span><span class="comment">// Get the content of the zip entry<br />            </span><span class="default">$fstream </span><span class="keyword">= </span><span class="default">zip_entry_read</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">, </span><span class="default">zip_entry_filesize</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">));<br /><br />            </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$file_name</span><span class="keyword">, </span><span class="default">$fstream </span><span class="keyword">);<br />            </span><span class="comment">// Set the rights<br />            </span><span class="default">chmod</span><span class="keyword">(</span><span class="default">$file_name</span><span class="keyword">, </span><span class="default">0777</span><span class="keyword">);<br />            echo </span><span class="string">"save: "</span><span class="keyword">.</span><span class="default">$file_name</span><span class="keyword">.</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />          }<br />          <br />          </span><span class="comment">// Close the entry<br />          </span><span class="default">zip_entry_close</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);<br />        }       <br />      }<br />      </span><span class="comment">// Close the zip-file<br />      </span><span class="default">zip_close</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">);<br />    }<br />  } <br />  else<br />  {<br />    return </span><span class="default">false</span><span class="keyword">;<br />  }<br />  <br />  return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/**<br /> * This function creates recursive directories if it doesn't already exist<br /> *<br /> * @param String  The path that should be created<br /> *  <br /> * @return  void<br /> */<br /></span><span class="keyword">function </span><span class="default">create_dirs</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)<br />{<br />  if (!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">))<br />  {<br />    </span><span class="default">$directory_path </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    </span><span class="default">$directories </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"/"</span><span class="keyword">,</span><span class="default">$path</span><span class="keyword">);<br />    </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$directories</span><span class="keyword">);<br />    <br />    foreach(</span><span class="default">$directories </span><span class="keyword">as </span><span class="default">$directory</span><span class="keyword">)<br />    {<br />      </span><span class="default">$directory_path </span><span class="keyword">.= </span><span class="default">$directory</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">;<br />      if (!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$directory_path</span><span class="keyword">))<br />      {<br />        </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$directory_path</span><span class="keyword">);<br />        </span><span class="default">chmod</span><span class="keyword">(</span><span class="default">$directory_path</span><span class="keyword">, </span><span class="default">0777</span><span class="keyword">);<br />      }<br />    }<br />  }<br />}<br /><br /></span><span class="comment">// Extract C:/zipfiletest/zip-file.zip to C:/zipfiletest/zip-file/ and overwrites existing files<br /></span><span class="default">unzip</span><span class="keyword">(</span><span class="string">"C:/zipfiletest/zip-file.zip"</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="comment">// Extract C:/zipfiletest/zip-file.zip to C:/another_map/zipfiletest/ and doesn't overwrite existing files. NOTE: It doesn't create a map with the zip-file-name!<br /></span><span class="default">unzip</span><span class="keyword">(</span><span class="string">"C:/zipfiletest/zip-file.zip"</span><span class="keyword">, </span><span class="string">"C:/another_map/zipfiletest/"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92941">  <div class="votes">
    <div id="Vu92941">
    <a href="/manual/vote-note.php?id=92941&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92941">
    <a href="/manual/vote-note.php?id=92941&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92941" title="61% like this...">
    5
    </div>
  </div>
  <a href="#92941" class="name">
  <strong class="user"><em>yarms at mail dot ru</em></strong></a><a class="genanchor" href="#92941"> &para;</a><div class="date" title="2009-08-15 09:24"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92941">
<div class="phpcode"><code><span class="html">very short version of function for unzipping files with folders structure:<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">unzip</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">){<br /><br />    </span><span class="default">$zip</span><span class="keyword">=</span><span class="default">zip_open</span><span class="keyword">(</span><span class="default">realpath</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">).</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">);<br />    if(!</span><span class="default">$zip</span><span class="keyword">) {return(</span><span class="string">"Unable to proccess file '</span><span class="keyword">{</span><span class="default">$file</span><span class="keyword">}</span><span class="string">'"</span><span class="keyword">);}<br /><br />    </span><span class="default">$e</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br /><br />    while(</span><span class="default">$zip_entry</span><span class="keyword">=</span><span class="default">zip_read</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">)) {<br />       </span><span class="default">$zdir</span><span class="keyword">=</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">));<br />       </span><span class="default">$zname</span><span class="keyword">=</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);<br /><br />       if(!</span><span class="default">zip_entry_open</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">,</span><span class="default">$zip_entry</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">)) {</span><span class="default">$e</span><span class="keyword">.=</span><span class="string">"Unable to proccess file '</span><span class="keyword">{</span><span class="default">$zname</span><span class="keyword">}</span><span class="string">'"</span><span class="keyword">;continue;}<br />       if(!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$zdir</span><span class="keyword">)) </span><span class="default">mkdirr</span><span class="keyword">(</span><span class="default">$zdir</span><span class="keyword">,</span><span class="default">0777</span><span class="keyword">);<br /><br />       </span><span class="comment">#print "{$zdir} | {$zname} \n";<br /><br />       </span><span class="default">$zip_fs</span><span class="keyword">=</span><span class="default">zip_entry_filesize</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);<br />       if(empty(</span><span class="default">$zip_fs</span><span class="keyword">)) continue;<br /><br />       </span><span class="default">$zz</span><span class="keyword">=</span><span class="default">zip_entry_read</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">,</span><span class="default">$zip_fs</span><span class="keyword">);<br /><br />       </span><span class="default">$z</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$zname</span><span class="keyword">,</span><span class="string">"w"</span><span class="keyword">);<br />       </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$z</span><span class="keyword">,</span><span class="default">$zz</span><span class="keyword">);<br />       </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$z</span><span class="keyword">);<br />       </span><span class="default">zip_entry_close</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);<br /><br />    } <br />    </span><span class="default">zip_close</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">);<br /><br />    return(</span><span class="default">$e</span><span class="keyword">);<br />} <br /><br />function </span><span class="default">mkdirr</span><span class="keyword">(</span><span class="default">$pn</span><span class="keyword">,</span><span class="default">$mode</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">) {<br /><br />  if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$pn</span><span class="keyword">)||empty(</span><span class="default">$pn</span><span class="keyword">)) return </span><span class="default">true</span><span class="keyword">;<br />  </span><span class="default">$pn</span><span class="keyword">=</span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">'/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">),</span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">,</span><span class="default">$pn</span><span class="keyword">);<br /><br />  if(</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$pn</span><span class="keyword">)) {</span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'mkdirr() File exists'</span><span class="keyword">, </span><span class="default">E_USER_WARNING</span><span class="keyword">);return </span><span class="default">false</span><span class="keyword">;}<br /><br />  </span><span class="default">$next_pathname</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$pn</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">$pn</span><span class="keyword">,</span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">));<br />  if(</span><span class="default">mkdirr</span><span class="keyword">(</span><span class="default">$next_pathname</span><span class="keyword">,</span><span class="default">$mode</span><span class="keyword">)) {if(!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$pn</span><span class="keyword">)) {return </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$pn</span><span class="keyword">,</span><span class="default">$mode</span><span class="keyword">);} }<br />  return </span><span class="default">false</span><span class="keyword">;<br />}<br /><br /></span><span class="default">unzip</span><span class="keyword">(</span><span class="string">"test.zip"</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />have a nice day :)</span></code></div>
  </div>
 </div>
  <div class="note" id="78940">  <div class="votes">
    <div id="Vu78940">
    <a href="/manual/vote-note.php?id=78940&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78940">
    <a href="/manual/vote-note.php?id=78940&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78940" title="66% like this...">
    2
    </div>
  </div>
  <a href="#78940" class="name">
  <strong class="user"><em>nheimann at gmx dot net</em></strong></a><a class="genanchor" href="#78940"> &para;</a><div class="date" title="2007-11-03 07:19"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78940">
<div class="phpcode"><code><span class="html">With this extension you can Add dirs with files with the ZipArchive Object
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * FlxZipArchive, Extends ZipArchiv. 
<br /> * Add Dirs with Files and Subdirs.
<br /> *
<br /> * &lt;code&gt;
<br /> *  $archive = new FlxZipArchive;
<br /> *  // .....
<br /> *  $archive-&gt;addDir( 'test/blub', 'blub' );
<br /> * &lt;/code&gt;
<br /> */
<br /></span><span class="keyword">class </span><span class="default">FlxZipArchive </span><span class="keyword">extends </span><span class="default">ZipArchive </span><span class="keyword">{
<br />    </span><span class="comment">/**
<br />     * Add a Dir with Files and Subdirs to the archive
<br />     *
<br />     * @param string $location Real Location
<br />     * @param string $name Name in Archive
<br />     * @author Nicolas Heimann 
<br />     * @access private
<br />     **/
<br />
<br />    </span><span class="keyword">public function </span><span class="default">addDir</span><span class="keyword">(</span><span class="default">$location</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">) {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">addEmptyDir</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);
<br />
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">addDirDo</span><span class="keyword">(</span><span class="default">$location</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">);
<br /></span><span class="comment">//     } // EO addDir;
<br />
<br />    /**
<br />     * Add Files &amp; Dirs to archive.
<br />     *
<br />     * @param string $location Real Location
<br />     * @param string $name Name in Archive
<br />     * @author Nicolas Heimann 
<br />     * @access private
<br />     **/
<br />
<br />    </span><span class="keyword">private function </span><span class="default">addDirDo</span><span class="keyword">(</span><span class="default">$location</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">) {
<br />        </span><span class="default">$name </span><span class="keyword">.= </span><span class="string">'/'</span><span class="keyword">;
<br />        </span><span class="default">$location </span><span class="keyword">.= </span><span class="string">'/'</span><span class="keyword">;
<br />
<br />        </span><span class="comment">// Read all Files in Dir
<br />        </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">opendir </span><span class="keyword">(</span><span class="default">$location</span><span class="keyword">);
<br />        while (</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">))
<br />        {
<br />            if (</span><span class="default">$file </span><span class="keyword">== </span><span class="string">'.' </span><span class="keyword">|| </span><span class="default">$file </span><span class="keyword">== </span><span class="string">'..'</span><span class="keyword">) continue;
<br />
<br />            </span><span class="comment">// Rekursiv, If dir: FlxZipArchive::addDir(), else ::File();
<br />            </span><span class="default">$do </span><span class="keyword">= (</span><span class="default">filetype</span><span class="keyword">() == </span><span class="string">'dir'</span><span class="keyword">) ? </span><span class="string">'addDir' </span><span class="keyword">: </span><span class="string">'addFile'</span><span class="keyword">;
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$do</span><span class="keyword">(</span><span class="default">$location </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$name </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">);
<br />        }
<br />    } </span><span class="comment">// EO addDirDo();
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="50252">  <div class="votes">
    <div id="Vu50252">
    <a href="/manual/vote-note.php?id=50252&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50252">
    <a href="/manual/vote-note.php?id=50252&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50252" title="60% like this...">
    1
    </div>
  </div>
  <a href="#50252" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#50252"> &para;</a><div class="date" title="2005-02-22 08:54"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50252">
<div class="phpcode"><code><span class="html">If (as me) all you wanted to do is store a big string (for example, a serialized array or the like) in a mysql BLOB field, remember that mysql has a COMPRESS() and UNCOMPRESS() pair of functions that do exactly that. Compression/decompression is therefore available also when accessing the DB from other languages like java, etc.</span></code></div>
  </div>
 </div>
  <div class="note" id="97279">  <div class="votes">
    <div id="Vu97279">
    <a href="/manual/vote-note.php?id=97279&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97279">
    <a href="/manual/vote-note.php?id=97279&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97279" title="57% like this...">
    1
    </div>
  </div>
  <a href="#97279" class="name">
  <strong class="user"><em>wdtemp at seznam dot cz</em></strong></a><a class="genanchor" href="#97279"> &para;</a><div class="date" title="2010-04-12 12:34"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97279">
<div class="phpcode"><code><span class="html">Hi,
<br />if you have the RAW CONTENT OF THE ZIP FILE IN A STRING ONLY and you can't create files on your server (because of the SAFE MODE) to be able to create a file which you can then pass to zip_open(), you'll be having hard times getting the uncompressed content of your ZIP data.
<br />This may help:
<br />I've written simple ZIP decompression function for decompressing the first file from the archive stored in a string (no matter what file it is). It's just about parsing a local file header of the first file, getting raw compressed data of that file and decompression of that data (usually, data in ZIP files are compressed by 'DEFLATE' method, so we'll just decompress it by gzinflate() function then).
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">decompress_first_file_from_zip</span><span class="keyword">(</span><span class="default">$ZIPContentStr</span><span class="keyword">){
<br /></span><span class="comment">//Input: ZIP archive - content of entire ZIP archive as a string
<br />//Output: decompressed content of the first file packed in the ZIP archive
<br />    //let's parse the ZIP archive
<br />    //(see '<a href="http://en.wikipedia.org/wiki/ZIP_%28file_format%29" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/ZIP_%28file_format%29</a>' for details)
<br />    //parse 'local file header' for the first file entry in the ZIP archive
<br />    </span><span class="keyword">if(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$ZIPContentStr</span><span class="keyword">)&lt;</span><span class="default">102</span><span class="keyword">){
<br />        </span><span class="comment">//any ZIP file smaller than 102 bytes is invalid
<br />        </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"error: input data too short&lt;br /&gt;\n"</span><span class="keyword">);
<br />        return </span><span class="string">''</span><span class="keyword">;
<br />    }
<br />    </span><span class="default">$CompressedSize</span><span class="keyword">=</span><span class="default">binstrtonum</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$ZIPContentStr</span><span class="keyword">,</span><span class="default">18</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">));
<br />    </span><span class="default">$UncompressedSize</span><span class="keyword">=</span><span class="default">binstrtonum</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$ZIPContentStr</span><span class="keyword">,</span><span class="default">22</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">));
<br />    </span><span class="default">$FileNameLen</span><span class="keyword">=</span><span class="default">binstrtonum</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$ZIPContentStr</span><span class="keyword">,</span><span class="default">26</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));
<br />    </span><span class="default">$ExtraFieldLen</span><span class="keyword">=</span><span class="default">binstrtonum</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$ZIPContentStr</span><span class="keyword">,</span><span class="default">28</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));
<br />    </span><span class="default">$Offs</span><span class="keyword">=</span><span class="default">30</span><span class="keyword">+</span><span class="default">$FileNameLen</span><span class="keyword">+</span><span class="default">$ExtraFieldLen</span><span class="keyword">;
<br />    </span><span class="default">$ZIPData</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$ZIPContentStr</span><span class="keyword">,</span><span class="default">$Offs</span><span class="keyword">,</span><span class="default">$CompressedSize</span><span class="keyword">);
<br />    </span><span class="default">$Data</span><span class="keyword">=</span><span class="default">gzinflate</span><span class="keyword">(</span><span class="default">$ZIPData</span><span class="keyword">);
<br />    if(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$Data</span><span class="keyword">)!=</span><span class="default">$UncompressedSize</span><span class="keyword">){
<br />        </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"error: uncompressed data have wrong size&lt;br /&gt;\n"</span><span class="keyword">);
<br />        return </span><span class="string">''</span><span class="keyword">;
<br />    }
<br />    else return </span><span class="default">$Data</span><span class="keyword">;
<br />}
<br />
<br />function </span><span class="default">binstrtonum</span><span class="keyword">(</span><span class="default">$Str</span><span class="keyword">){
<br /></span><span class="comment">//Returns a number represented in a raw binary data passed as string.
<br />//This is useful for example when reading integers from a file,
<br />// when we have the content of the file in a string only.
<br />//Examples:
<br />// chr(0xFF) will result as 255
<br />// chr(0xFF).chr(0xFF).chr(0x00).chr(0x00) will result as 65535
<br />// chr(0xFF).chr(0xFF).chr(0xFF).chr(0x00) will result as 16777215
<br />    </span><span class="default">$Num</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    for(</span><span class="default">$TC1</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$Str</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">;</span><span class="default">$TC1</span><span class="keyword">&gt;=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$TC1</span><span class="keyword">--){ </span><span class="comment">//go from most significant byte
<br />        </span><span class="default">$Num</span><span class="keyword">&lt;&lt;=</span><span class="default">8</span><span class="keyword">; </span><span class="comment">//shift to left by one byte (8 bits)
<br />        </span><span class="default">$Num</span><span class="keyword">|=</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$Str</span><span class="keyword">[</span><span class="default">$TC1</span><span class="keyword">]); </span><span class="comment">//add new byte
<br />    </span><span class="keyword">}
<br />    return </span><span class="default">$Num</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />ENJOY!!!
<br />wdim</span></code></div>
  </div>
 </div>
  <div class="note" id="75984">  <div class="votes">
    <div id="Vu75984">
    <a href="/manual/vote-note.php?id=75984&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75984">
    <a href="/manual/vote-note.php?id=75984&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75984" title="100% like this...">
    2
    </div>
  </div>
  <a href="#75984" class="name">
  <strong class="user"><em>bushj at rpi dot edu</em></strong></a><a class="genanchor" href="#75984"> &para;</a><div class="date" title="2007-06-25 10:59"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75984">
<div class="phpcode"><code><span class="html">I made a zip stream handler in case your distribution does not have the built in one using the new ZipArchive system. This one also features the ability to grab entries by index as well as by name. It is similar in capabilities to the builtin gzip/bzip2 compression stream handlers (<a href="http://us2.php.net/manual/en/wrappers.compression.php" rel="nofollow" target="_blank">http://us2.php.net/manual/en/wrappers.compression.php</a>) except it does not support writing.<br /><br />To use:<br />fopen('zip://absolute/path/to/file.zip?entryname', $mode) or<br />fopen('zip://absolute/path/to/file.zip#entryindex', $mode) or<br />fopen('zip://absolute/path/to/file.zip', $mode)<br /><br />$mode can only be 'r' or 'rb'. In the last case the first entry in the zip file is used.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">ZipStream </span><span class="keyword">{<br />  public </span><span class="default">$zip</span><span class="keyword">; </span><span class="comment">//the zip file<br />  </span><span class="keyword">public </span><span class="default">$entry</span><span class="keyword">; </span><span class="comment">//the opened zip entry<br />  </span><span class="keyword">public </span><span class="default">$length</span><span class="keyword">; </span><span class="comment">//the uncompressed size of the zip entry<br />  </span><span class="keyword">public </span><span class="default">$position</span><span class="keyword">; </span><span class="comment">//the current position in the zip entry read<br />  //Opens the zip file then retrieves and opens the entry to stream <br />  </span><span class="keyword">public function </span><span class="default">stream_open</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">, &amp;</span><span class="default">$opened_path</span><span class="keyword">) {<br />    if (</span><span class="default">$mode </span><span class="keyword">!= </span><span class="string">'r' </span><span class="keyword">&amp;&amp; </span><span class="default">$mode </span><span class="keyword">!= </span><span class="string">'rb'</span><span class="keyword">) </span><span class="comment">//only accept r and rb modes, no writing!<br />      </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">$path </span><span class="keyword">= </span><span class="string">'file:///'</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">); </span><span class="comment">//switch out file:/// for zip:// so we can use url_parse<br />    </span><span class="default">$url </span><span class="keyword">= </span><span class="default">parse_url</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br />    </span><span class="comment">//open the zip file<br />    </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">$url</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">];<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">zip </span><span class="keyword">= </span><span class="default">zip_open</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />    if (!</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">zip</span><span class="keyword">))<br />      return </span><span class="default">false</span><span class="keyword">;<br /><br />    </span><span class="comment">//if entry name is given, find that entry    <br />    </span><span class="keyword">if (</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'query'</span><span class="keyword">, </span><span class="default">$url</span><span class="keyword">) &amp;&amp; </span><span class="default">$url</span><span class="keyword">[</span><span class="string">'query'</span><span class="keyword">]) {<br />      </span><span class="default">$path </span><span class="keyword">= </span><span class="default">$url</span><span class="keyword">[</span><span class="string">'query'</span><span class="keyword">];<br />      do {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">entry </span><span class="keyword">= </span><span class="default">zip_read</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">zip</span><span class="keyword">);<br />        if (!</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">entry</span><span class="keyword">))<br />          return </span><span class="default">false</span><span class="keyword">;<br />      } while (</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">entry</span><span class="keyword">) != </span><span class="default">$path</span><span class="keyword">);     <br />    } else { </span><span class="comment">//otherwise get it by index (default to 0)<br />      </span><span class="default">$id </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />      if (</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'fragment'</span><span class="keyword">, </span><span class="default">$url</span><span class="keyword">) &amp;&amp; </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">[</span><span class="string">'fragment'</span><span class="keyword">]))<br />        </span><span class="default">$id </span><span class="keyword">= </span><span class="default">$url</span><span class="keyword">[</span><span class="string">'fragment'</span><span class="keyword">]*</span><span class="default">1</span><span class="keyword">;<br />      for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$id</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">entry </span><span class="keyword">= </span><span class="default">zip_read</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">zip</span><span class="keyword">);<br />        if (!</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">entry</span><span class="keyword">))<br />          return </span><span class="default">false</span><span class="keyword">;<br />      }<br />    }<br />    </span><span class="comment">//setup length and open the entry for reading<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">length </span><span class="keyword">= </span><span class="default">zip_entry_filesize</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">entry</span><span class="keyword">);<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">zip_entry_open</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">zip</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">entry</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">);<br />    return </span><span class="default">true</span><span class="keyword">;<br />  }<br />  </span><span class="comment">//Closes the zip entry and file<br />  </span><span class="keyword">public function </span><span class="default">stream_close</span><span class="keyword">() { @</span><span class="default">zip_entry_close</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">entry</span><span class="keyword">); @</span><span class="default">zip_close</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">zip</span><span class="keyword">); }<br />  </span><span class="comment">//Returns how many bytes have been read from the zip entry<br />  </span><span class="keyword">public function </span><span class="default">stream_tell</span><span class="keyword">() { return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position</span><span class="keyword">; }<br />  </span><span class="comment">//Returns true if the end of the zip entry has been reached<br />  </span><span class="keyword">public function </span><span class="default">stream_eof</span><span class="keyword">() { return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position </span><span class="keyword">&gt;= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">; }<br />  </span><span class="comment">//Returns the stat array, only 'size' is filled in with the uncompressed zip entry size<br />  </span><span class="keyword">public function </span><span class="default">url_stat</span><span class="keyword">() { return array(</span><span class="string">'dev'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'ino'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'mode'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'nlink'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'uid'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'gid'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'rdev'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'size'</span><span class="keyword">=&gt;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">, </span><span class="string">'atime'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'mtime'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'ctime'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'blksize'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">, </span><span class="string">'blocks'</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">); }<br />  </span><span class="comment">//Reads the next $count bytes or until the end of the zip entry. Returns the data or false if no data was read.<br />  </span><span class="keyword">public function </span><span class="default">stream_read</span><span class="keyword">(</span><span class="default">$count</span><span class="keyword">) {<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position </span><span class="keyword">+= </span><span class="default">$count</span><span class="keyword">;<br />    if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position </span><span class="keyword">&gt; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">)<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">length</span><span class="keyword">;<br />    return </span><span class="default">zip_entry_read</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">entry</span><span class="keyword">, </span><span class="default">$count</span><span class="keyword">);<br />  }<br />}<br /></span><span class="comment">//Register the zip stream handler<br /></span><span class="default">stream_wrapper_register</span><span class="keyword">(</span><span class="string">'zip'</span><span class="keyword">, </span><span class="string">'ZipStream'</span><span class="keyword">); </span><span class="comment">//if this fails there is already a zip stream handler and we will just use that one<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117821">  <div class="votes">
    <div id="Vu117821">
    <a href="/manual/vote-note.php?id=117821&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117821">
    <a href="/manual/vote-note.php?id=117821&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117821" title="50% like this...">
    0
    </div>
  </div>
  <a href="#117821" class="name">
  <strong class="user"><em>vk.com/vknkk</em></strong></a><a class="genanchor" href="#117821"> &para;</a><div class="date" title="2015-08-14 07:01"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117821">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// Extracting all *.zip files (including subfolders) into current directory (developed &amp; tested at Win7)<br /></span><span class="default">$files </span><span class="keyword">= </span><span class="default">glob</span><span class="keyword">(</span><span class="string">'*.zip'</span><span class="keyword">);<br />if (</span><span class="default">$files</span><span class="keyword">)<br />  foreach (</span><span class="default">$files </span><span class="keyword">as </span><span class="default">$fl</span><span class="keyword">) {<br />    </span><span class="default">$zip </span><span class="keyword">= </span><span class="default">zip_open</span><span class="keyword">(</span><span class="default">$fl</span><span class="keyword">);<br />    if (</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">)) {<br />      </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$fl</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">4</span><span class="keyword">); </span><span class="comment">// Directory by *.zip file name (Extract into "*/")<br />      </span><span class="keyword">if (!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">))<br />        </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br />      while (</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$entry </span><span class="keyword">= </span><span class="default">zip_read</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">))) {<br />        </span><span class="default">$is_file </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        </span><span class="default">$name </span><span class="keyword">= </span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$entry</span><span class="keyword">);<br />        </span><span class="default">$name_parts </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">);<br />        if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$name_parts</span><span class="keyword">) &gt; </span><span class="default">1</span><span class="keyword">) { </span><span class="comment">// Processing subfolders<br />          </span><span class="default">$path </span><span class="keyword">= </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$name_parts</span><span class="keyword">);<br />          </span><span class="default">$is_file </span><span class="keyword">= !empty(</span><span class="default">$path</span><span class="keyword">);<br />          </span><span class="default">$path </span><span class="keyword">= </span><span class="default">$dir</span><span class="keyword">;<br />          foreach (</span><span class="default">$name_parts </span><span class="keyword">as </span><span class="default">$part</span><span class="keyword">) {<br />            </span><span class="default">$path </span><span class="keyword">.= </span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$part</span><span class="keyword">;<br />            if (!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">))<br />              </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br />          }<br />        }<br />        if (</span><span class="default">$is_file</span><span class="keyword">)<br />          </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">, </span><span class="default">zip_entry_read</span><span class="keyword">(</span><span class="default">$entry</span><span class="keyword">, </span><span class="default">zip_entry_filesize</span><span class="keyword">(</span><span class="default">$entry</span><span class="keyword">)));<br />      }<br />      </span><span class="default">zip_close</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">);<br />    }<br />  }</span></span></code></div>
  </div>
 </div>
  <div class="note" id="30585">  <div class="votes">
    <div id="Vu30585">
    <a href="/manual/vote-note.php?id=30585&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30585">
    <a href="/manual/vote-note.php?id=30585&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30585" title="100% like this...">
    1
    </div>
  </div>
  <a href="#30585" class="name">
  <strong class="user"><em>chris</em></strong></a><a class="genanchor" href="#30585"> &para;</a><div class="date" title="2003-03-22 10:32"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30585">
<div class="phpcode"><code><span class="html">Watch out with archives that contain subfolders if you're using the zip functions to extract archives to actual files.  Let's say you're trying to extract foldername/filename.txt from the archive.  You can't fopen a directory that doesn't exist, so you'll have to check for the existance of directory foldername and create it if it isn't found, then fopen foldername/filename.txt and begin writing to that.</span></code></div>
  </div>
 </div>
  <div class="note" id="80705">  <div class="votes">
    <div id="Vu80705">
    <a href="/manual/vote-note.php?id=80705&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80705">
    <a href="/manual/vote-note.php?id=80705&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80705" title="50% like this...">
    0
    </div>
  </div>
  <a href="#80705" class="name">
  <strong class="user"><em>rodrigo dot moraes at gmail dot com</em></strong></a><a class="genanchor" href="#80705"> &para;</a><div class="date" title="2008-01-29 07:56"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80705">
<div class="phpcode"><code><span class="html">Here's a more simple extended class to add a whole directory recursively, keeping the same structure. It uses SPL.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">MyZipArchive </span><span class="keyword">extends </span><span class="default">ZipArchive
<br /></span><span class="keyword">{
<br />    </span><span class="comment">/**
<br />     *
<br />     * Adds a directory recursively.
<br />     *
<br />     * @param string $filename The path to the file to add.
<br />     *
<br />     * @param string $localname Local name inside ZIP archive.
<br />     *
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">addDir</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">$localname</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">addEmptyDir</span><span class="keyword">(</span><span class="default">$localname</span><span class="keyword">);
<br />        </span><span class="default">$iter </span><span class="keyword">= new </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">FilesystemIterator</span><span class="keyword">::</span><span class="default">SKIP_DOTS</span><span class="keyword">);
<br />
<br />        foreach (</span><span class="default">$iter </span><span class="keyword">as </span><span class="default">$fileinfo</span><span class="keyword">) {
<br />            if (! </span><span class="default">$fileinfo</span><span class="keyword">-&gt;</span><span class="default">isFile</span><span class="keyword">() &amp;&amp; !</span><span class="default">$fileinfo</span><span class="keyword">-&gt;</span><span class="default">isDir</span><span class="keyword">()) {
<br />                continue;
<br />            }
<br />
<br />            </span><span class="default">$method </span><span class="keyword">= </span><span class="default">$fileinfo</span><span class="keyword">-&gt;</span><span class="default">isFile</span><span class="keyword">() ? </span><span class="string">'addFile' </span><span class="keyword">: </span><span class="string">'addDir'</span><span class="keyword">;
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$method</span><span class="keyword">(</span><span class="default">$fileinfo</span><span class="keyword">-&gt;</span><span class="default">getPathname</span><span class="keyword">(), </span><span class="default">$localname </span><span class="keyword">. </span><span class="string">'/' </span><span class="keyword">.
<br />                </span><span class="default">$fileinfo</span><span class="keyword">-&gt;</span><span class="default">getFilename</span><span class="keyword">());
<br />        }
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />[EDIT BY danbrown AT php DOT net: Contains a bugfix suggested by (bart AT blueberry DOT nl) on 29-JUN-2011 with the following message. "Fix for the endless Iteratore add the flag FilesystemIterator::SKIP_DOTS"]</span></code></div>
  </div>
 </div>
  <div class="note" id="74847">  <div class="votes">
    <div id="Vu74847">
    <a href="/manual/vote-note.php?id=74847&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74847">
    <a href="/manual/vote-note.php?id=74847&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74847" title="50% like this...">
    0
    </div>
  </div>
  <a href="#74847" class="name">
  <strong class="user"><em>jeswanth@gmail</em></strong></a><a class="genanchor" href="#74847"> &para;</a><div class="date" title="2007-04-30 12:55"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74847">
<div class="phpcode"><code><span class="html">Hi, all<br /><br />There are lot of functions given below which etracts files, but what they lack is setting file permissions. On some servers file permissions are very important and the script cease to work after creating first directory, So I have added chmod to the code. There is only one limitation to the code, files without file extension are neither treated as files or directories so they are not chmoded, anyway this does not affect the code. Hope this helps.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">unpackZip</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">,</span><span class="default">$file</span><span class="keyword">) {<br />   if (</span><span class="default">$zip </span><span class="keyword">= </span><span class="default">zip_open</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">.</span><span class="string">".zip"</span><span class="keyword">)) {<br />     if (</span><span class="default">$zip</span><span class="keyword">) {<br />       </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">);<br />     </span><span class="default">chmod</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">, </span><span class="default">0777</span><span class="keyword">);<br />       while (</span><span class="default">$zip_entry </span><span class="keyword">= </span><span class="default">zip_read</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">)) {<br />         if (</span><span class="default">zip_entry_open</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">,</span><span class="default">$zip_entry</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">)) {<br />           </span><span class="default">$buf </span><span class="keyword">= </span><span class="default">zip_entry_read</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">, </span><span class="default">zip_entry_filesize</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">));<br />           </span><span class="default">$dir_name </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">));<br />           if (</span><span class="default">$dir_name </span><span class="keyword">!= </span><span class="string">"."</span><span class="keyword">) {<br />             </span><span class="default">$dir_op </span><span class="keyword">= </span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">;<br />               foreach ( </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"/"</span><span class="keyword">,</span><span class="default">$dir_name</span><span class="keyword">) as </span><span class="default">$k</span><span class="keyword">) {<br />                 </span><span class="default">$dir_op </span><span class="keyword">= </span><span class="default">$dir_op </span><span class="keyword">. </span><span class="default">$k</span><span class="keyword">;<br />                 if (</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$dir_op</span><span class="keyword">)) </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$dir_op</span><span class="keyword">);<br />                 if (!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir_op</span><span class="keyword">)) </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$dir_op</span><span class="keyword">);<br />            </span><span class="default">chmod</span><span class="keyword">(</span><span class="default">$dir_op</span><span class="keyword">, </span><span class="default">0777</span><span class="keyword">);<br />                 </span><span class="default">$dir_op </span><span class="keyword">= </span><span class="default">$dir_op </span><span class="keyword">. </span><span class="string">"/" </span><span class="keyword">;<br />                 }<br />               }<br />           </span><span class="default">$fp</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">),</span><span class="string">"w+"</span><span class="keyword">);<br />        </span><span class="default">chmod</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">), </span><span class="default">0777</span><span class="keyword">);<br />           </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,</span><span class="default">$buf</span><span class="keyword">);<br /><br />           </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br /><br />           </span><span class="default">zip_entry_close</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);<br />       } else<br />           return </span><span class="default">false</span><span class="keyword">;<br />       }<br />       </span><span class="default">zip_close</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">);<br />     }<br />  } else<br />     return </span><span class="default">false</span><span class="keyword">;<br /><br />  return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$dir </span><span class="keyword">= </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'DOCUMENT_ROOT'</span><span class="keyword">].</span><span class="string">"/"</span><span class="keyword">.</span><span class="string">"destdirectory/"</span><span class="keyword">;<br /></span><span class="default">$file </span><span class="keyword">= </span><span class="string">'zipfilename_without_extension'</span><span class="keyword">;<br /></span><span class="default">unpackZip</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">,</span><span class="default">$file</span><span class="keyword">);<br /></span><span class="default">$print </span><span class="keyword">= </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'DOCUMENT_ROOT'</span><span class="keyword">];<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70462">  <div class="votes">
    <div id="Vu70462">
    <a href="/manual/vote-note.php?id=70462&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70462">
    <a href="/manual/vote-note.php?id=70462&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70462" title="50% like this...">
    0
    </div>
  </div>
  <a href="#70462" class="name">
  <strong class="user"><em>bholub at chiefprojects dot com</em></strong></a><a class="genanchor" href="#70462"> &para;</a><div class="date" title="2006-10-17 12:14"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70462">
<div class="phpcode"><code><span class="html">This will simply unpack (including directories) $zip to $dir -- in this example the zip is being uploaded.<br /><span class="default">&lt;?php<br />    $dir </span><span class="keyword">= </span><span class="string">'C:\\reports-temp\\'</span><span class="keyword">;<br />    </span><span class="default">$zip </span><span class="keyword">= </span><span class="default">zip_open</span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'report_zip'</span><span class="keyword">][</span><span class="string">'tmp_name'</span><span class="keyword">]);<br />    while(</span><span class="default">$zip_entry </span><span class="keyword">= </span><span class="default">zip_read</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">)) {<br />        </span><span class="default">$entry </span><span class="keyword">= </span><span class="default">zip_entry_open</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">,</span><span class="default">$zip_entry</span><span class="keyword">);<br />        </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);<br />        </span><span class="default">$target_dir </span><span class="keyword">= </span><span class="default">$dir</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">,</span><span class="string">'/'</span><span class="keyword">));<br />        </span><span class="default">$filesize </span><span class="keyword">= </span><span class="default">zip_entry_filesize</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);<br />        if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$target_dir</span><span class="keyword">) || </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$target_dir</span><span class="keyword">)) {<br />            if (</span><span class="default">$filesize </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />                </span><span class="default">$contents </span><span class="keyword">= </span><span class="default">zip_entry_read</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">, </span><span class="default">$filesize</span><span class="keyword">);<br />                </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$filename</span><span class="keyword">,</span><span class="default">$contents</span><span class="keyword">);<br />            }<br />        }<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="61159">  <div class="votes">
    <div id="Vu61159">
    <a href="/manual/vote-note.php?id=61159&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61159">
    <a href="/manual/vote-note.php?id=61159&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61159" title="50% like this...">
    0
    </div>
  </div>
  <a href="#61159" class="name">
  <strong class="user"><em>angelnsn1 at hotmail dot com</em></strong></a><a class="genanchor" href="#61159"> &para;</a><div class="date" title="2006-01-26 06:06"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61159">
<div class="phpcode"><code><span class="html">this function extract all files and subdirectories, you can choose verbose mode for get paths of files extracted. the function return a msg what indicate the error, if msg is OK, all is done.
<br />
<br />---
<br />
<br />code:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">unzip</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$verbose </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {
<br />
<br />   </span><span class="default">$dir_path </span><span class="keyword">= </span><span class="string">"</span><span class="default">$dir$file</span><span class="string">"</span><span class="keyword">;
<br />   </span><span class="default">$zip_path </span><span class="keyword">= </span><span class="string">"</span><span class="default">$dir$file</span><span class="string">.zip"</span><span class="keyword">;
<br />   
<br />   </span><span class="default">$ERROR_MSGS</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">"OK"</span><span class="keyword">;
<br />   </span><span class="default">$ERROR_MSGS</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="string">"Zip path </span><span class="default">$zip_path</span><span class="string"> doesn't exists."</span><span class="keyword">;
<br />   </span><span class="default">$ERROR_MSGS</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="string">"Directory </span><span class="default">$dir_path</span><span class="string"> for unzip the pack already exists, impossible continue."</span><span class="keyword">;
<br />   </span><span class="default">$ERROR_MSGS</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] = </span><span class="string">"Error while opening the </span><span class="default">$zip_path</span><span class="string"> file."</span><span class="keyword">;
<br />   
<br />   </span><span class="default">$ERROR </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />   
<br />   if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$zip_path</span><span class="keyword">)) {
<br />   
<br />         if (!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$dir_path</span><span class="keyword">)) {
<br />             
<br />            </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$dir_path</span><span class="keyword">);    
<br />         
<br />         if ((</span><span class="default">$link </span><span class="keyword">= </span><span class="default">zip_open</span><span class="keyword">(</span><span class="default">$zip_path</span><span class="keyword">))) {
<br />             
<br />            while ((</span><span class="default">$zip_entry </span><span class="keyword">= </span><span class="default">zip_read</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">)) &amp;&amp; (!</span><span class="default">$ERROR</span><span class="keyword">)) {
<br />                
<br />               if (</span><span class="default">zip_entry_open</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">, </span><span class="default">$zip_entry</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">)) {
<br />           
<br />                  </span><span class="default">$data </span><span class="keyword">= </span><span class="default">zip_entry_read</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">, </span><span class="default">zip_entry_filesize</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">));
<br />                  </span><span class="default">$dir_name </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">));
<br />                  </span><span class="default">$name </span><span class="keyword">= </span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);
<br />                  
<br />                  if (</span><span class="default">$name</span><span class="keyword">[</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">] == </span><span class="string">'/'</span><span class="keyword">) {
<br />                         
<br />                        </span><span class="default">$base </span><span class="keyword">= </span><span class="string">"</span><span class="default">$dir_path</span><span class="string">/"</span><span class="keyword">;
<br />
<br />                     foreach ( </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"/"</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">) as </span><span class="default">$k</span><span class="keyword">) {
<br />                         
<br />                        </span><span class="default">$base </span><span class="keyword">.= </span><span class="string">"</span><span class="default">$k</span><span class="string">/"</span><span class="keyword">;
<br />                            
<br />                        if (!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$base</span><span class="keyword">))
<br />                           </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$base</span><span class="keyword">);
<br />                            
<br />                     }    
<br />                        
<br />                  }
<br />                  else { 
<br />                  
<br />                      </span><span class="default">$name </span><span class="keyword">= </span><span class="string">"</span><span class="default">$dir_path</span><span class="string">/</span><span class="default">$name</span><span class="string">"</span><span class="keyword">; 
<br />                      
<br />                      if (</span><span class="default">$verbose</span><span class="keyword">)
<br />                       echo </span><span class="string">"extracting: </span><span class="default">$name</span><span class="string">&lt;br&gt;"</span><span class="keyword">;
<br />                        
<br />                    </span><span class="default">$stream </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">);
<br />                    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);
<br />                    
<br />                  }  
<br />                 
<br />                  </span><span class="default">zip_entry_close</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);
<br />                 
<br />               }
<br />               else
<br />                  </span><span class="default">$ERROR </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;     
<br />  
<br />              }
<br />              
<br />              </span><span class="default">zip_close</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">);  
<br />             
<br />           }
<br />           else
<br />              </span><span class="default">$ERROR </span><span class="keyword">= </span><span class="string">"3"</span><span class="keyword">;
<br />       }
<br />       else 
<br />          </span><span class="default">$ERROR </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;
<br />    }
<br />    else 
<br />       </span><span class="default">$ERROR </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;
<br />      
<br />   return </span><span class="default">$ERROR_MSGS</span><span class="keyword">[</span><span class="default">$ERROR</span><span class="keyword">];        
<br />    
<br />}    
<br /></span><span class="default">?&gt;
<br /></span>
<br />---
<br />
<br />example:
<br />
<br /><span class="default">&lt;?php
<br />$error </span><span class="keyword">= </span><span class="default">unzip</span><span class="keyword">(</span><span class="string">"d:/www/dir/"</span><span class="keyword">, </span><span class="string">"zipname"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />
<br />echo </span><span class="default">$error</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />---
<br />
<br />i hope this help you,
<br />good bye.</span></code></div>
  </div>
 </div>
  <div class="note" id="56003">  <div class="votes">
    <div id="Vu56003">
    <a href="/manual/vote-note.php?id=56003&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56003">
    <a href="/manual/vote-note.php?id=56003&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56003" title="50% like this...">
    0
    </div>
  </div>
  <a href="#56003" class="name">
  <strong class="user"><em>ringu at mail dot ru</em></strong></a><a class="genanchor" href="#56003"> &para;</a><div class="date" title="2005-08-20 06:12"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56003">
<div class="phpcode"><code><span class="html">i try to find function that will show exists file in zip archive or not. of course i not found it. and so write mine:
<br />
<br />first will just check archive for list of files, if not found all files function return FALSE:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">zipx_entries_exists</span><span class="keyword">()
<br />{
<br />    </span><span class="default">$names</span><span class="keyword">=array();
<br />    </span><span class="default">$args</span><span class="keyword">=</span><span class="default">func_get_args</span><span class="keyword">();
<br />    </span><span class="default">$far_size</span><span class="keyword">=</span><span class="default">count</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">);    
<br />    if(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])
<br />        {            
<br />            for(; </span><span class="default">$zip_entry</span><span class="keyword">=</span><span class="default">zip_read</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); </span><span class="default">$names</span><span class="keyword">[]= </span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">));                                    
<br />            for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">&lt;=</span><span class="default">$far_size</span><span class="keyword">; </span><span class="default">$t</span><span class="keyword">+=</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">], </span><span class="default">$names</span><span class="keyword">), </span><span class="default">$x</span><span class="keyword">++);            
<br />            return </span><span class="default">$t</span><span class="keyword">==--</span><span class="default">$far_size</span><span class="keyword">;            
<br />        }else{
<br />             return </span><span class="string">'No zip file in descriptor!'</span><span class="keyword">;
<br />        }               
<br />}
<br />
<br /></span><span class="default">example</span><span class="keyword">: 
<br /></span><span class="default">$zip</span><span class="keyword">=</span><span class="default">zip_open</span><span class="keyword">(</span><span class="string">'any_zip_file_zip'</span><span class="keyword">);
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">zip_entries_exists</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">, </span><span class="string">'photo_1.jpg'</span><span class="keyword">, </span><span class="string">'photo_2.jpg'</span><span class="keyword">));
<br />
<br /></span><span class="default">second </span><span class="keyword">function </span><span class="default">will </span><span class="keyword">try </span><span class="default">to find files in zip</span><span class="keyword">, if </span><span class="default">not found it </span><span class="keyword">return </span><span class="default">string with names of not found files with specified delimeter</span><span class="keyword">:
<br />
<br />function </span><span class="default">zipx_entries_nonexists_list</span><span class="keyword">()
<br />{
<br />    </span><span class="default">$names</span><span class="keyword">=array();
<br />    </span><span class="default">$args</span><span class="keyword">=</span><span class="default">func_get_args</span><span class="keyword">();
<br />    </span><span class="default">$m</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">;
<br />    </span><span class="default">$far_size</span><span class="keyword">=</span><span class="default">count</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">);    
<br />    if(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])
<br />        {            
<br />            for(; </span><span class="default">$zip_entry</span><span class="keyword">=</span><span class="default">zip_read</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); </span><span class="default">$names</span><span class="keyword">[]= </span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">));                                    
<br />            for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">&lt;=</span><span class="default">$far_size</span><span class="keyword">; </span><span class="default">$m</span><span class="keyword">.=(</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">], </span><span class="default">$names</span><span class="keyword">) ? </span><span class="default">NULL </span><span class="keyword">: </span><span class="default">$args</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">].</span><span class="default">$args</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]), </span><span class="default">$x</span><span class="keyword">++);            
<br />            return </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);            
<br />        }else{
<br />             return </span><span class="string">'No zip file in descriptor!'</span><span class="keyword">;
<br />        }               
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />example: 
<br /><span class="default">&lt;?php
<br />$zip</span><span class="keyword">=</span><span class="default">zip_open</span><span class="keyword">(</span><span class="string">'any_zip_file_zip'</span><span class="keyword">);
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">zip_entries_nonexists_list</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">, </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">, </span><span class="string">'photo_1.jpg'</span><span class="keyword">, </span><span class="string">'photo_2.jpg'</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />it will return if not found files:
<br />photo_1.jpg&lt;br /&gt;photo_2.jpg</span></code></div>
  </div>
 </div>
  <div class="note" id="42827">  <div class="votes">
    <div id="Vu42827">
    <a href="/manual/vote-note.php?id=42827&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42827">
    <a href="/manual/vote-note.php?id=42827&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42827" title="50% like this...">
    0
    </div>
  </div>
  <a href="#42827" class="name">
  <strong class="user"><em>krishnendu at spymac dot com</em></strong></a><a class="genanchor" href="#42827"> &para;</a><div class="date" title="2004-05-31 01:28"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42827">
<div class="phpcode"><code><span class="html">If you want to unzip an password protected file with php..try the following command....it works in Unix/Apache environment...I haven't tested in any other environment...<br /><br />system("`which unzip` -P Password $zipfile -d $des",$ret_val)<br /><br />Where $zipfile is the path to the .zip to be unzipped and $des is path to the destination directory.....here both absolute and relative path to the script (which contains this system command) will work...<br /><br />if everything runs well...file should be unzipped at the $des directory..and you will get 0 value for $ret_val , which means success(info-zip.org)<br /><br />Regards<br />Krishnendu</span></code></div>
  </div>
 </div>
  <div class="note" id="33140">  <div class="votes">
    <div id="Vu33140">
    <a href="/manual/vote-note.php?id=33140&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33140">
    <a href="/manual/vote-note.php?id=33140&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33140" title="50% like this...">
    0
    </div>
  </div>
  <a href="#33140" class="name">
  <strong class="user"><em>travis</em></strong></a><a class="genanchor" href="#33140"> &para;</a><div class="date" title="2003-06-17 10:06"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33140">
<div class="phpcode"><code><span class="html">just a not of caution--using the dynamic zip class mentioned earlier seems to cause issues with high ascii characters (their values are not preserved correctly, and the file will not unzip)</span></code></div>
  </div>
 </div>
  <div class="note" id="83800">  <div class="votes">
    <div id="Vu83800">
    <a href="/manual/vote-note.php?id=83800&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83800">
    <a href="/manual/vote-note.php?id=83800&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83800" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#83800" class="name">
  <strong class="user"><em>phillpafford+php at gmail dot com</em></strong></a><a class="genanchor" href="#83800"> &para;</a><div class="date" title="2008-06-12 06:28"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83800">
<div class="phpcode"><code><span class="html">You could just use the linux commands<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Get the date<br /></span><span class="default">$date </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">"m-d-y"</span><span class="keyword">);<br /><br /></span><span class="comment">// Make Zip name<br /></span><span class="default">$zipname </span><span class="keyword">= </span><span class="string">"archive/site-script-backup." </span><span class="keyword">. </span><span class="default">$date </span><span class="keyword">. </span><span class="string">".zip"</span><span class="keyword">;<br /><br /></span><span class="comment">// Make a zip file<br /></span><span class="default">$cmd </span><span class="keyword">= `</span><span class="string">zip -r </span><span class="default">$zipname</span><span class="string"> *</span><span class="keyword">`;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105989">  <div class="votes">
    <div id="Vu105989">
    <a href="/manual/vote-note.php?id=105989&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105989">
    <a href="/manual/vote-note.php?id=105989&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105989" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#105989" class="name">
  <strong class="user"><em>shadowbranch at gmail dot com</em></strong></a><a class="genanchor" href="#105989"> &para;</a><div class="date" title="2011-09-30 05:40"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105989">
<div class="phpcode"><code><span class="html">This is the simplest method to unzip a file. Pass the function your filename and it will unzip it to the current directory of the script with permissions done properly on unix type operating systems. Far simpler to understand and read.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">unzip</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">){
<br />    </span><span class="default">$zip </span><span class="keyword">= </span><span class="default">zip_open</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />    if(</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">)){
<br />        </span><span class="default">$tree </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />        while((</span><span class="default">$zip_entry </span><span class="keyword">= </span><span class="default">zip_read</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">){
<br />            echo </span><span class="string">"Unpacking "</span><span class="keyword">.</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;
<br />            if(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">), </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">){
<br />                </span><span class="default">$last </span><span class="keyword">= </span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">), </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">);
<br />                </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">$last</span><span class="keyword">);
<br />                </span><span class="default">$file </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">), </span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">), </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">);
<br />                if(!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)){
<br />                    @</span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="default">0755</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">) or die(</span><span class="string">"Unable to create </span><span class="default">$dir</span><span class="string">\n"</span><span class="keyword">);
<br />                }
<br />                if(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)) &gt; </span><span class="default">0</span><span class="keyword">){
<br />                    </span><span class="default">$return </span><span class="keyword">= @</span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">, </span><span class="default">zip_entry_read</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">, </span><span class="default">zip_entry_filesize</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">)));
<br />                    if(</span><span class="default">$return </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">){
<br />                        die(</span><span class="string">"Unable to write file </span><span class="default">$dir</span><span class="string">/</span><span class="default">$file</span><span class="string">\n"</span><span class="keyword">);
<br />                    }
<br />                }
<br />            }else{
<br />                </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">zip_entry_read</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">, </span><span class="default">zip_entry_filesize</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">)));
<br />            }
<br />        }
<br />    }else{
<br />        echo </span><span class="string">"Unable to open zip file\n"</span><span class="keyword">;
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79057">  <div class="votes">
    <div id="Vu79057">
    <a href="/manual/vote-note.php?id=79057&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79057">
    <a href="/manual/vote-note.php?id=79057&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79057" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#79057" class="name">
  <strong class="user"><em>mmj48 at gmail dot com</em></strong></a><a class="genanchor" href="#79057"> &para;</a><div class="date" title="2007-11-08 05:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79057">
<div class="phpcode"><code><span class="html">Heres a function I wrote that will extract a zip file with the same directory structure...<br /><br />Enjoy:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">unzip</span><span class="keyword">(</span><span class="default">$zipfile</span><span class="keyword">)<br />{<br />    </span><span class="default">$zip </span><span class="keyword">= </span><span class="default">zip_open</span><span class="keyword">(</span><span class="default">$zipfile</span><span class="keyword">);<br />    while (</span><span class="default">$zip_entry </span><span class="keyword">= </span><span class="default">zip_read</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">))    {<br />        </span><span class="default">zip_entry_open</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">, </span><span class="default">$zip_entry</span><span class="keyword">);<br />        if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">), -</span><span class="default">1</span><span class="keyword">) == </span><span class="string">'/'</span><span class="keyword">) {<br />            </span><span class="default">$zdir </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);<br />            if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$zdir</span><span class="keyword">)) {<br />                </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Directory "&lt;b&gt;' </span><span class="keyword">. </span><span class="default">$zdir </span><span class="keyword">. </span><span class="string">'&lt;/b&gt;" exists'</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />                return </span><span class="default">false</span><span class="keyword">;<br />            }<br />            </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$zdir</span><span class="keyword">);<br />        }<br />        else {<br />            </span><span class="default">$name </span><span class="keyword">= </span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);<br />            if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">)) {<br />                </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'File "&lt;b&gt;' </span><span class="keyword">. </span><span class="default">$name </span><span class="keyword">. </span><span class="string">'&lt;/b&gt;" exists'</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />                return </span><span class="default">false</span><span class="keyword">;<br />            }<br />            </span><span class="default">$fopen </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">);<br />            </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fopen</span><span class="keyword">, </span><span class="default">zip_entry_read</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">, </span><span class="default">zip_entry_filesize</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">)), </span><span class="default">zip_entry_filesize</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">));<br />        }<br />        </span><span class="default">zip_entry_close</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);<br />    }<br />    </span><span class="default">zip_close</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">);<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="54232">  <div class="votes">
    <div id="Vu54232">
    <a href="/manual/vote-note.php?id=54232&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54232">
    <a href="/manual/vote-note.php?id=54232&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54232" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#54232" class="name">
  <strong class="user"><em>tom</em></strong></a><a class="genanchor" href="#54232"> &para;</a><div class="date" title="2005-06-27 09:33"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54232">
<div class="phpcode"><code><span class="html">If you just want to unzip a zip folder an alternative to some of the lengthy functions below is:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">unzip</span><span class="keyword">(</span><span class="default">$zip_file</span><span class="keyword">, </span><span class="default">$src_dir</span><span class="keyword">, </span><span class="default">$extract_dir</span><span class="keyword">)
<br />{
<br /> </span><span class="default">copy</span><span class="keyword">(</span><span class="default">$src_dir </span><span class="keyword">. </span><span class="string">"/" </span><span class="keyword">. </span><span class="default">$zip_file</span><span class="keyword">, </span><span class="default">$extract_dir </span><span class="keyword">. </span><span class="string">"/" </span><span class="keyword">. </span><span class="default">$zip_file</span><span class="keyword">);
<br /> </span><span class="default">chdir</span><span class="keyword">(</span><span class="default">$extract_dir</span><span class="keyword">);
<br /> </span><span class="default">shell_exec</span><span class="keyword">(</span><span class="string">"unzip </span><span class="default">$zip_file</span><span class="string">"</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />You don't need the ZIP extension for this.</span></code></div>
  </div>
 </div>
  <div class="note" id="52310">  <div class="votes">
    <div id="Vu52310">
    <a href="/manual/vote-note.php?id=52310&amp;page=ref.zip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52310">
    <a href="/manual/vote-note.php?id=52310&amp;page=ref.zip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52310" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#52310" class="name">
  <strong class="user"><em>candido1212 at yahoo dot com dot br</em></strong></a><a class="genanchor" href="#52310"> &para;</a><div class="date" title="2005-04-27 08:52"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52310">
<div class="phpcode"><code><span class="html">New Unzip function, recursive extract
<br />Require mkdirr() (recursive create dir)
<br />
<br /><span class="default">&lt;?php
<br />$file </span><span class="keyword">= </span><span class="string">"2537c61ef7f47fc3ae919da08bcc1911.zip"</span><span class="keyword">;
<br /></span><span class="default">$dir </span><span class="keyword">= </span><span class="default">getcwd</span><span class="keyword">();
<br />function </span><span class="default">Unzip</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$destiny</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$dir </span><span class="keyword">.= </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">;
<br />    </span><span class="default">$path_file </span><span class="keyword">= </span><span class="default">$dir </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">;
<br />    </span><span class="default">$zip </span><span class="keyword">= </span><span class="default">zip_open</span><span class="keyword">(</span><span class="default">$path_file</span><span class="keyword">);
<br />    </span><span class="default">$_tmp </span><span class="keyword">= array();
<br />    </span><span class="default">$count</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    if (</span><span class="default">$zip</span><span class="keyword">)
<br />    {
<br />        while (</span><span class="default">$zip_entry </span><span class="keyword">= </span><span class="default">zip_read</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">))
<br />        {
<br />            </span><span class="default">$_tmp</span><span class="keyword">[</span><span class="default">$count</span><span class="keyword">][</span><span class="string">"filename"</span><span class="keyword">] = </span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);
<br />            </span><span class="default">$_tmp</span><span class="keyword">[</span><span class="default">$count</span><span class="keyword">][</span><span class="string">"stored_filename"</span><span class="keyword">] = </span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);
<br />            </span><span class="default">$_tmp</span><span class="keyword">[</span><span class="default">$count</span><span class="keyword">][</span><span class="string">"size"</span><span class="keyword">] = </span><span class="default">zip_entry_filesize</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);
<br />            </span><span class="default">$_tmp</span><span class="keyword">[</span><span class="default">$count</span><span class="keyword">][</span><span class="string">"compressed_size"</span><span class="keyword">] = </span><span class="default">zip_entry_compressedsize</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);
<br />            </span><span class="default">$_tmp</span><span class="keyword">[</span><span class="default">$count</span><span class="keyword">][</span><span class="string">"mtime"</span><span class="keyword">] = </span><span class="string">""</span><span class="keyword">;
<br />            </span><span class="default">$_tmp</span><span class="keyword">[</span><span class="default">$count</span><span class="keyword">][</span><span class="string">"comment"</span><span class="keyword">] = </span><span class="string">""</span><span class="keyword">;
<br />            </span><span class="default">$_tmp</span><span class="keyword">[</span><span class="default">$count</span><span class="keyword">][</span><span class="string">"folder"</span><span class="keyword">] = </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">));
<br />            </span><span class="default">$_tmp</span><span class="keyword">[</span><span class="default">$count</span><span class="keyword">][</span><span class="string">"index"</span><span class="keyword">] = </span><span class="default">$count</span><span class="keyword">;
<br />            </span><span class="default">$_tmp</span><span class="keyword">[</span><span class="default">$count</span><span class="keyword">][</span><span class="string">"status"</span><span class="keyword">] = </span><span class="string">"ok"</span><span class="keyword">;
<br />            </span><span class="default">$_tmp</span><span class="keyword">[</span><span class="default">$count</span><span class="keyword">][</span><span class="string">"method"</span><span class="keyword">] = </span><span class="default">zip_entry_compressionmethod</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);
<br />            
<br />            if (</span><span class="default">zip_entry_open</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">, </span><span class="default">$zip_entry</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">))
<br />            {
<br />                </span><span class="default">$buf </span><span class="keyword">= </span><span class="default">zip_entry_read</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">, </span><span class="default">zip_entry_filesize</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">));
<br />                if(</span><span class="default">$destiny</span><span class="keyword">)
<br />                {
<br />                    </span><span class="default">$path_file </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"/"</span><span class="keyword">,</span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">, </span><span class="default">$destiny </span><span class="keyword">. </span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">));
<br />                }
<br />                else
<br />                {
<br />                    </span><span class="default">$path_file </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"/"</span><span class="keyword">,</span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">, </span><span class="default">$dir </span><span class="keyword">. </span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">));
<br />                }
<br />                </span><span class="default">$new_dir </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$path_file</span><span class="keyword">);
<br />                
<br />                </span><span class="comment">// Create Recursive Directory
<br />                </span><span class="default">mkdirr</span><span class="keyword">(</span><span class="default">$new_dir</span><span class="keyword">);
<br />                
<br />
<br />                </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$dir </span><span class="keyword">. </span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">), </span><span class="string">"w"</span><span class="keyword">);
<br />                </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$buf</span><span class="keyword">);
<br />                </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />
<br />                </span><span class="default">zip_entry_close</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);
<br />            } 
<br />            echo </span><span class="string">"\n&lt;/pre&gt;"</span><span class="keyword">;
<br />            </span><span class="default">$count</span><span class="keyword">++;
<br />        } 
<br />
<br />        </span><span class="default">zip_close</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">);
<br />    } 
<br />} 
<br /></span><span class="default">Unzip</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">,</span><span class="default">$file</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.zip&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.zip.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.zip.php">Zip</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.zip.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="zip.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="zip.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="zip.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.ziparchive.php" title="ZipArchive">ZipArchive</a>
                        </li>
                                                <li class="current">
                            <a href="ref.zip.php" title="Zip Functions">Zip Functions</a>
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
