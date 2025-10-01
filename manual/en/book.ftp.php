<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: FTP - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.ftp.php">
 <link rel="shorturl" href="https://www.php.net/ftp">
 <link rel="alternate" href="https://www.php.net/ftp" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.remote.other.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.eventexception.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.ftp.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.ftp.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.ftp.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.ftp.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.ftp.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.ftp.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.ftp.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.ftp.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.ftp.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.ftp.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.ftp.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.ftp.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="FTP" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: FTP - Manual" />
<meta name="twitter:description" content="FTP" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: FTP - Manual" />
<meta itemprop="description" content="FTP" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="FTP" />

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
        <a href="intro.ftp.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.eventexception.php">
          &laquo; EventException        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      </ul>
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
            <option value='en/book.ftp.php' selected="selected">English</option>
            <option value='de/book.ftp.php'>German</option>
            <option value='es/book.ftp.php'>Spanish</option>
            <option value='fr/book.ftp.php'>French</option>
            <option value='it/book.ftp.php'>Italian</option>
            <option value='ja/book.ftp.php'>Japanese</option>
            <option value='pt_BR/book.ftp.php'>Brazilian Portuguese</option>
            <option value='ru/book.ftp.php'>Russian</option>
            <option value='tr/book.ftp.php'>Turkish</option>
            <option value='uk/book.ftp.php'>Ukrainian</option>
            <option value='zh/book.ftp.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.ftp" class="book">
 
 <h1 class="title">FTP</h1>
 
 
 
 
 
 







 




 








 







 




<ul class="chunklist chunklist_book"><li><a href="intro.ftp.php">Introduction</a></li><li><a href="ftp.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="ftp.installation.php">Installation</a></li><li><a href="ftp.resources.php">Resource Types</a></li></ul></li><li><a href="ftp.constants.php">Predefined Constants</a></li><li><a href="ftp.examples.php">Examples</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="ftp.examples-basic.php">Basic usage</a></li></ul></li><li><a href="ref.ftp.php">FTP Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.ftp-alloc.php">ftp_alloc</a> — Allocates space for a file to be uploaded</li><li><a href="function.ftp-append.php">ftp_append</a> — Append the contents of a file to another file on the FTP server</li><li><a href="function.ftp-cdup.php">ftp_cdup</a> — Changes to the parent directory</li><li><a href="function.ftp-chdir.php">ftp_chdir</a> — Changes the current directory on a FTP server</li><li><a href="function.ftp-chmod.php">ftp_chmod</a> — Set permissions on a file via FTP</li><li><a href="function.ftp-close.php">ftp_close</a> — Closes an FTP connection</li><li><a href="function.ftp-connect.php">ftp_connect</a> — Opens an FTP connection</li><li><a href="function.ftp-delete.php">ftp_delete</a> — Deletes a file on the FTP server</li><li><a href="function.ftp-exec.php">ftp_exec</a> — Requests execution of a command on the FTP server</li><li><a href="function.ftp-fget.php">ftp_fget</a> — Downloads a file from the FTP server and saves to an open file</li><li><a href="function.ftp-fput.php">ftp_fput</a> — Uploads from an open file to the FTP server</li><li><a href="function.ftp-get.php">ftp_get</a> — Downloads a file from the FTP server</li><li><a href="function.ftp-get-option.php">ftp_get_option</a> — Retrieves various runtime behaviours of the current FTP connection</li><li><a href="function.ftp-login.php">ftp_login</a> — Logs in to an FTP connection</li><li><a href="function.ftp-mdtm.php">ftp_mdtm</a> — Returns the last modified time of the given file</li><li><a href="function.ftp-mkdir.php">ftp_mkdir</a> — Creates a directory</li><li><a href="function.ftp-mlsd.php">ftp_mlsd</a> — Returns a list of files in the given directory</li><li><a href="function.ftp-nb-continue.php">ftp_nb_continue</a> — Continues retrieving/sending a file (non-blocking)</li><li><a href="function.ftp-nb-fget.php">ftp_nb_fget</a> — Retrieves a file from the FTP server and writes it to an open file (non-blocking)</li><li><a href="function.ftp-nb-fput.php">ftp_nb_fput</a> — Stores a file from an open file to the FTP server (non-blocking)</li><li><a href="function.ftp-nb-get.php">ftp_nb_get</a> — Retrieves a file from the FTP server and writes it to a local file (non-blocking)</li><li><a href="function.ftp-nb-put.php">ftp_nb_put</a> — Stores a file on the FTP server (non-blocking)</li><li><a href="function.ftp-nlist.php">ftp_nlist</a> — Returns a list of files in the given directory</li><li><a href="function.ftp-pasv.php">ftp_pasv</a> — Turns passive mode on or off</li><li><a href="function.ftp-put.php">ftp_put</a> — Uploads a file to the FTP server</li><li><a href="function.ftp-pwd.php">ftp_pwd</a> — Returns the current directory name</li><li><a href="function.ftp-quit.php">ftp_quit</a> — Alias of ftp_close</li><li><a href="function.ftp-raw.php">ftp_raw</a> — Sends an arbitrary command to an FTP server</li><li><a href="function.ftp-rawlist.php">ftp_rawlist</a> — Returns a detailed list of files in the given directory</li><li><a href="function.ftp-rename.php">ftp_rename</a> — Renames a file or a directory on the FTP server</li><li><a href="function.ftp-rmdir.php">ftp_rmdir</a> — Removes a directory</li><li><a href="function.ftp-set-option.php">ftp_set_option</a> — Set miscellaneous runtime FTP options</li><li><a href="function.ftp-site.php">ftp_site</a> — Sends a SITE command to the server</li><li><a href="function.ftp-size.php">ftp_size</a> — Returns the size of the given file</li><li><a href="function.ftp-ssl-connect.php">ftp_ssl_connect</a> — Opens a Secure SSL-FTP connection</li><li><a href="function.ftp-systype.php">ftp_systype</a> — Returns the system type identifier of the remote FTP server</li></ul></li><li><a href="class.ftp-connection.php">FTP\Connection</a> — The FTP\Connection class</li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ftp/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.ftp%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.ftp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.ftp.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="105868">  <div class="votes">
    <div id="Vu105868">
    <a href="/manual/vote-note.php?id=105868&amp;page=book.ftp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105868">
    <a href="/manual/vote-note.php?id=105868&amp;page=book.ftp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105868" title="61% like this...">
    31
    </div>
  </div>
  <a href="#105868" class="name">
  <strong class="user"><em>tendrid at gmail dot com</em></strong></a><a class="genanchor" href="#105868"> &para;</a><div class="date" title="2011-09-21 09:15"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105868">
<div class="phpcode"><code><span class="html">For those who dont want to deal with handling the connection once created, here is a simple class that allows you to call any ftp function as if it were an extended method.  It automatically puts the ftp connection into the first argument slot (as all ftp functions require).
<br />
<br />This code is php 5.3+
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">ftp</span><span class="keyword">{
<br />    public </span><span class="default">$conn</span><span class="keyword">;
<br />
<br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">){
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">conn </span><span class="keyword">= </span><span class="default">ftp_connect</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);
<br />    }
<br />    
<br />    public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">,</span><span class="default">$a</span><span class="keyword">){
<br />        if(</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">,</span><span class="string">'ftp_'</span><span class="keyword">) !== </span><span class="default">false </span><span class="keyword">&amp;&amp; </span><span class="default">function_exists</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">)){
<br />            </span><span class="default">array_unshift</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">conn</span><span class="keyword">);
<br />            return </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">,</span><span class="default">$a</span><span class="keyword">);
<br />        }else{
<br />            </span><span class="comment">// replace with your own error handler.
<br />            </span><span class="keyword">die(</span><span class="string">"</span><span class="default">$func</span><span class="string"> is not a valid FTP function"</span><span class="keyword">);
<br />        }
<br />    }
<br />}
<br />
<br /></span><span class="comment">// Example
<br /></span><span class="default">$ftp </span><span class="keyword">= new </span><span class="default">ftp</span><span class="keyword">(</span><span class="string">'ftp.example.com'</span><span class="keyword">);
<br /></span><span class="default">$ftp</span><span class="keyword">-&gt;</span><span class="default">ftp_login</span><span class="keyword">(</span><span class="string">'username'</span><span class="keyword">,</span><span class="string">'password'</span><span class="keyword">);
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$ftp</span><span class="keyword">-&gt;</span><span class="default">ftp_nlist</span><span class="keyword">());
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111481">  <div class="votes">
    <div id="Vu111481">
    <a href="/manual/vote-note.php?id=111481&amp;page=book.ftp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111481">
    <a href="/manual/vote-note.php?id=111481&amp;page=book.ftp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111481" title="50% like this...">
    3
    </div>
  </div>
  <a href="#111481" class="name">
  <strong class="user"><em>asifkhandk at gmail dot com</em></strong></a><a class="genanchor" href="#111481"> &para;</a><div class="date" title="2013-02-24 05:19"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111481">
<div class="phpcode"><code><span class="html">Upload file to server via ftp.
<br />
<br /><span class="default">&lt;?php
<br />$ftp_server</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;
<br /> </span><span class="default">$ftp_user_name</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;
<br /> </span><span class="default">$ftp_user_pass</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;
<br /> </span><span class="default">$file </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;</span><span class="comment">//tobe uploaded
<br /> </span><span class="default">$remote_file </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />
<br /> </span><span class="comment">// set up basic connection
<br /> </span><span class="default">$conn_id </span><span class="keyword">= </span><span class="default">ftp_connect</span><span class="keyword">(</span><span class="default">$ftp_server</span><span class="keyword">);
<br />
<br /> </span><span class="comment">// login with username and password
<br /> </span><span class="default">$login_result </span><span class="keyword">= </span><span class="default">ftp_login</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$ftp_user_name</span><span class="keyword">, </span><span class="default">$ftp_user_pass</span><span class="keyword">);
<br />
<br /> </span><span class="comment">// upload a file
<br /> </span><span class="keyword">if (</span><span class="default">ftp_put</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$remote_file</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">FTP_ASCII</span><span class="keyword">)) {
<br />    echo </span><span class="string">"successfully uploaded </span><span class="default">$file</span><span class="string">\n"</span><span class="keyword">;
<br />    exit;
<br /> } else {
<br />    echo </span><span class="string">"There was a problem while uploading </span><span class="default">$file</span><span class="string">\n"</span><span class="keyword">;
<br />    exit;
<br />    }
<br /> </span><span class="comment">// close the connection
<br /> </span><span class="default">ftp_close</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.ftp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.ftp.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.remote.other.php">Other Services</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.curl.php" title="cURL">cURL</a>
                        </li>
                                                <li class="">
                            <a href="book.event.php" title="Event">Event</a>
                        </li>
                                                <li class="current">
                            <a href="book.ftp.php" title="FTP">FTP</a>
                        </li>
                                                <li class="">
                            <a href="book.gearman.php" title="Gearman">Gearman</a>
                        </li>
                                                <li class="">
                            <a href="book.ldap.php" title="LDAP">LDAP</a>
                        </li>
                                                <li class="">
                            <a href="book.memcache.php" title="Memcache">Memcache</a>
                        </li>
                                                <li class="">
                            <a href="book.memcached.php" title="Memcached">Memcached</a>
                        </li>
                                                <li class="">
                            <a href="book.mqseries.php" title="mqseries">mqseries</a>
                        </li>
                                                <li class="">
                            <a href="book.network.php" title="Network">Network</a>
                        </li>
                                                <li class="">
                            <a href="book.rrd.php" title="RRD">RRD</a>
                        </li>
                                                <li class="">
                            <a href="book.scoutapm.php" title="ScoutAPM">ScoutAPM</a>
                        </li>
                                                <li class="">
                            <a href="book.snmp.php" title="SNMP">SNMP</a>
                        </li>
                                                <li class="">
                            <a href="book.sockets.php" title="Sockets">Sockets</a>
                        </li>
                                                <li class="">
                            <a href="book.ssh2.php" title="SSH2">SSH2</a>
                        </li>
                                                <li class="">
                            <a href="book.stomp.php" title="Stomp">Stomp</a>
                        </li>
                                                <li class="">
                            <a href="book.svm.php" title="SVM">SVM</a>
                        </li>
                                                <li class="">
                            <a href="book.svn.php" title="SVN">SVN</a>
                        </li>
                                                <li class="">
                            <a href="book.tcpwrap.php" title="TCP">TCP</a>
                        </li>
                                                <li class="">
                            <a href="book.varnish.php" title="Varnish">Varnish</a>
                        </li>
                                                <li class="">
                            <a href="book.yaz.php" title="YAZ">YAZ</a>
                        </li>
                                                <li class="">
                            <a href="book.zmq.php" title="0MQ messaging">0MQ messaging</a>
                        </li>
                                                <li class="">
                            <a href="book.zookeeper.php" title="ZooKeeper">ZooKeeper</a>
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
