<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Filesystem - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.filesystem.php">
 <link rel="shorturl" href="https://www.php.net/filesystem">
 <link rel="alternate" href="https://www.php.net/filesystem" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.fileprocess.file.php">
 <link rel="prev" href="https://www.php.net/manual/en/finfo.set-flags.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.filesystem.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.filesystem.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.filesystem.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.filesystem.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.filesystem.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.filesystem.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.filesystem.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.filesystem.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.filesystem.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.filesystem.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.filesystem.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.filesystem.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Filesystem" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Filesystem - Manual" />
<meta name="twitter:description" content="Filesystem" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Filesystem - Manual" />
<meta itemprop="description" content="Filesystem" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Filesystem" />

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
        <a href="intro.filesystem.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="finfo.set-flags.php">
          &laquo; finfo::set_flags        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.file.php'>File System Related Extensions</a></li>      </ul>
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
            <option value='en/book.filesystem.php' selected="selected">English</option>
            <option value='de/book.filesystem.php'>German</option>
            <option value='es/book.filesystem.php'>Spanish</option>
            <option value='fr/book.filesystem.php'>French</option>
            <option value='it/book.filesystem.php'>Italian</option>
            <option value='ja/book.filesystem.php'>Japanese</option>
            <option value='pt_BR/book.filesystem.php'>Brazilian Portuguese</option>
            <option value='ru/book.filesystem.php'>Russian</option>
            <option value='tr/book.filesystem.php'>Turkish</option>
            <option value='uk/book.filesystem.php'>Ukrainian</option>
            <option value='zh/book.filesystem.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.filesystem" class="book">
 
 <h1 class="title">Filesystem</h1>
 
 
 
 
 
 







 




 







<ul class="chunklist chunklist_book"><li><a href="intro.filesystem.php">Introduction</a></li><li><a href="filesystem.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="filesystem.configuration.php">Runtime Configuration</a></li><li><a href="filesystem.resources.php">Resource Types</a></li></ul></li><li><a href="filesystem.constants.php">Predefined Constants</a></li><li><a href="ref.filesystem.php">Filesystem Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.basename.php">basename</a> — Returns trailing name component of path</li><li><a href="function.chgrp.php">chgrp</a> — Changes file group</li><li><a href="function.chmod.php">chmod</a> — Changes file mode</li><li><a href="function.chown.php">chown</a> — Changes file owner</li><li><a href="function.clearstatcache.php">clearstatcache</a> — Clears file status cache</li><li><a href="function.copy.php">copy</a> — Copies file</li><li><a href="function.delete.php">delete</a> — See unlink or unset</li><li><a href="function.dirname.php">dirname</a> — Returns a parent directory's path</li><li><a href="function.disk-free-space.php">disk_free_space</a> — Returns available space on filesystem or disk partition</li><li><a href="function.disk-total-space.php">disk_total_space</a> — Returns the total size of a filesystem or disk partition</li><li><a href="function.diskfreespace.php">diskfreespace</a> — Alias of disk_free_space</li><li><a href="function.fclose.php">fclose</a> — Closes an open file pointer</li><li><a href="function.fdatasync.php">fdatasync</a> — Synchronizes data (but not meta-data) to the file</li><li><a href="function.feof.php">feof</a> — Tests for end-of-file on a file pointer</li><li><a href="function.fflush.php">fflush</a> — Flushes the output to a file</li><li><a href="function.fgetc.php">fgetc</a> — Gets character from file pointer</li><li><a href="function.fgetcsv.php">fgetcsv</a> — Gets line from file pointer and parse for CSV fields</li><li><a href="function.fgets.php">fgets</a> — Gets line from file pointer</li><li><a href="function.fgetss.php">fgetss</a> — Gets line from file pointer and strip HTML tags</li><li><a href="function.file.php">file</a> — Reads entire file into an array</li><li><a href="function.file-exists.php">file_exists</a> — Checks whether a file or directory exists</li><li><a href="function.file-get-contents.php">file_get_contents</a> — Reads entire file into a string</li><li><a href="function.file-put-contents.php">file_put_contents</a> — Write data to a file</li><li><a href="function.fileatime.php">fileatime</a> — Gets last access time of file</li><li><a href="function.filectime.php">filectime</a> — Gets inode change time of file</li><li><a href="function.filegroup.php">filegroup</a> — Gets file group</li><li><a href="function.fileinode.php">fileinode</a> — Gets file inode</li><li><a href="function.filemtime.php">filemtime</a> — Gets file modification time</li><li><a href="function.fileowner.php">fileowner</a> — Gets file owner</li><li><a href="function.fileperms.php">fileperms</a> — Gets file permissions</li><li><a href="function.filesize.php">filesize</a> — Gets file size</li><li><a href="function.filetype.php">filetype</a> — Gets file type</li><li><a href="function.flock.php">flock</a> — Portable advisory file locking</li><li><a href="function.fnmatch.php">fnmatch</a> — Match filename against a pattern</li><li><a href="function.fopen.php">fopen</a> — Opens file or URL</li><li><a href="function.fpassthru.php">fpassthru</a> — Output all remaining data on a file pointer</li><li><a href="function.fputcsv.php">fputcsv</a> — Format line as CSV and write to file pointer</li><li><a href="function.fputs.php">fputs</a> — Alias of fwrite</li><li><a href="function.fread.php">fread</a> — Binary-safe file read</li><li><a href="function.fscanf.php">fscanf</a> — Parses input from a file according to a format</li><li><a href="function.fseek.php">fseek</a> — Seeks on a file pointer</li><li><a href="function.fstat.php">fstat</a> — Gets information about a file using an open file pointer</li><li><a href="function.fsync.php">fsync</a> — Synchronizes changes to the file (including meta-data)</li><li><a href="function.ftell.php">ftell</a> — Returns the current position of the file read/write pointer</li><li><a href="function.ftruncate.php">ftruncate</a> — Truncates a file to a given length</li><li><a href="function.fwrite.php">fwrite</a> — Binary-safe file write</li><li><a href="function.glob.php">glob</a> — Find pathnames matching a pattern</li><li><a href="function.is-dir.php">is_dir</a> — Tells whether the filename is a directory</li><li><a href="function.is-executable.php">is_executable</a> — Tells whether the filename is executable</li><li><a href="function.is-file.php">is_file</a> — Tells whether the filename is a regular file</li><li><a href="function.is-link.php">is_link</a> — Tells whether the filename is a symbolic link</li><li><a href="function.is-readable.php">is_readable</a> — Tells whether a file exists and is readable</li><li><a href="function.is-uploaded-file.php">is_uploaded_file</a> — Tells whether the file was uploaded via HTTP POST</li><li><a href="function.is-writable.php">is_writable</a> — Tells whether the filename is writable</li><li><a href="function.is-writeable.php">is_writeable</a> — Alias of is_writable</li><li><a href="function.lchgrp.php">lchgrp</a> — Changes group ownership of symlink</li><li><a href="function.lchown.php">lchown</a> — Changes user ownership of symlink</li><li><a href="function.link.php">link</a> — Create a hard link</li><li><a href="function.linkinfo.php">linkinfo</a> — Gets information about a link</li><li><a href="function.lstat.php">lstat</a> — Gives information about a file or symbolic link</li><li><a href="function.mkdir.php">mkdir</a> — Makes directory</li><li><a href="function.move-uploaded-file.php">move_uploaded_file</a> — Moves an uploaded file to a new location</li><li><a href="function.parse-ini-file.php">parse_ini_file</a> — Parse a configuration file</li><li><a href="function.parse-ini-string.php">parse_ini_string</a> — Parse a configuration string</li><li><a href="function.pathinfo.php">pathinfo</a> — Returns information about a file path</li><li><a href="function.pclose.php">pclose</a> — Closes process file pointer</li><li><a href="function.popen.php">popen</a> — Opens process file pointer</li><li><a href="function.readfile.php">readfile</a> — Outputs a file</li><li><a href="function.readlink.php">readlink</a> — Returns the target of a symbolic link</li><li><a href="function.realpath.php">realpath</a> — Returns canonicalized absolute pathname</li><li><a href="function.realpath-cache-get.php">realpath_cache_get</a> — Get realpath cache entries</li><li><a href="function.realpath-cache-size.php">realpath_cache_size</a> — Get realpath cache size</li><li><a href="function.rename.php">rename</a> — Renames a file or directory</li><li><a href="function.rewind.php">rewind</a> — Rewind the position of a file pointer</li><li><a href="function.rmdir.php">rmdir</a> — Removes directory</li><li><a href="function.set-file-buffer.php">set_file_buffer</a> — Alias of stream_set_write_buffer</li><li><a href="function.stat.php">stat</a> — Gives information about a file</li><li><a href="function.symlink.php">symlink</a> — Creates a symbolic link</li><li><a href="function.tempnam.php">tempnam</a> — Create file with unique file name</li><li><a href="function.tmpfile.php">tmpfile</a> — Creates a temporary file</li><li><a href="function.touch.php">touch</a> — Sets access and modification time of file</li><li><a href="function.umask.php">umask</a> — Changes the current umask</li><li><a href="function.unlink.php">unlink</a> — Deletes a file</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.filesystem%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.filesystem&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.filesystem.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.fileprocess.file.php">File System Related Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.dio.php" title="Direct IO">Direct IO</a>
                        </li>
                                                <li class="">
                            <a href="book.dir.php" title="Directories">Directories</a>
                        </li>
                                                <li class="">
                            <a href="book.fileinfo.php" title="Fileinfo">Fileinfo</a>
                        </li>
                                                <li class="current">
                            <a href="book.filesystem.php" title="Filesystem">Filesystem</a>
                        </li>
                                                <li class="">
                            <a href="book.inotify.php" title="Inotify">Inotify</a>
                        </li>
                                                <li class="">
                            <a href="book.xattr.php" title="xattr">xattr</a>
                        </li>
                                                <li class="">
                            <a href="book.xdiff.php" title="xdiff">xdiff</a>
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
