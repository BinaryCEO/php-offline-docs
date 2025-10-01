<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Introduction - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/intro.phar.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/intro.phar.php">
 <link rel="alternate" href="https://www.php.net/manual/en/intro.phar.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.phar.php">
 <link rel="prev" href="https://www.php.net/manual/en/book.phar.php">
 <link rel="next" href="https://www.php.net/manual/en/phar.setup.php">

 <link rel="alternate" href="https://www.php.net/manual/en/intro.phar.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/intro.phar.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/intro.phar.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/intro.phar.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/intro.phar.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/intro.phar.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/intro.phar.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/intro.phar.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/intro.phar.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/intro.phar.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/intro.phar.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Introduction" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Introduction - Manual" />
<meta name="twitter:description" content="Introduction" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Introduction - Manual" />
<meta itemprop="description" content="Introduction" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Introduction" />

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
        <a href="phar.setup.php">
          Installing/Configuring &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="book.phar.php">
          &laquo; Phar        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.phar.php'>Phar</a></li>      </ul>
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
            <option value='en/intro.phar.php' selected="selected">English</option>
            <option value='de/intro.phar.php'>German</option>
            <option value='es/intro.phar.php'>Spanish</option>
            <option value='fr/intro.phar.php'>French</option>
            <option value='it/intro.phar.php'>Italian</option>
            <option value='ja/intro.phar.php'>Japanese</option>
            <option value='pt_BR/intro.phar.php'>Brazilian Portuguese</option>
            <option value='ru/intro.phar.php'>Russian</option>
            <option value='tr/intro.phar.php'>Turkish</option>
            <option value='uk/intro.phar.php'>Ukrainian</option>
            <option value='zh/intro.phar.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="intro.phar" class="preface">
  <h1 class="title">Introduction</h1>
  <p class="para">
   The phar extension provides a way to put entire PHP applications into a single file
   called a &quot;phar&quot; (PHP Archive) for easy distribution and installation.
   In addition to providing this service, the phar extension also provides a file-format
   abstraction method for creating and manipulating tar and zip files through the
   <span class="classname"><a href="class.phardata.php" class="classname">PharData</a></span> class, much as
   PDO provides a unified interface for accessing different databases.  Unlike PDO,
   which cannot convert between different databases, Phar also can convert between tar,
   zip and phar file formats with a single line of code.  see
   <span class="function"><a href="phar.converttoexecutable.php" class="function">Phar::convertToExecutable()</a></span> for one example.
  </p>
  <p class="para">
   What is phar?  Phar archives are best characterized as a convenient way to group
   several files into a single file.  As such, a phar archive provides a way to
   distribute a complete PHP application in a single file and run it from that file
   without the need to extract it to disk.  Additionally, phar archives can be
   executed by PHP as easily as any other file, both on the commandline and from
   a web server.  Phar is kind of like a thumb drive for PHP applications.
  </p>
  <p class="para">
   Phar implements this functionality through a <a href="book.stream.php" class="link">Stream
   Wrapper</a>.  Normally, to use an external file within a PHP script, you
   would use <span class="function"><a href="function.include.php" class="function">include</a></span>:
  </p>
  <p class="para">
   <div class="example" id="example-793">
    <p><strong>Example #1 Using an external file</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /> </span><span style="color: #007700">include </span><span style="color: #DD0000">'/path/to/external/file.php'</span><span style="color: #007700">;<br /> </span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   PHP can be thought of as actually translating
   <code class="literal">/path/to/external/file.php</code> into a
   stream wrapper as <code class="literal">file:///path/to/external/file.php</code>, and under
   the hood it does in fact use the plain file stream wrapper stream functions to
   access all local files.
  </p>
  <p class="para">
   To use a file named <code class="literal">file.php</code> contained with a phar archive
   <code class="literal">/path/to/myphar.phar</code>,
   the syntax is very similar to the <code class="literal">file://</code> syntax above.
  </p>
  <p class="para">
   <div class="example" id="example-794">
    <p><strong>Example #2 Using a file within a phar archive</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /> </span><span style="color: #007700">include </span><span style="color: #DD0000">'phar:///path/to/myphar.phar/file.php'</span><span style="color: #007700">;<br /> </span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   In fact, one can treat a phar archive exactly as if it were an external disk, using
   any of <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span>-related functions, <span class="function"><a href="function.opendir.php" class="function">opendir()</a></span> and
   <span class="function"><a href="function.mkdir.php" class="function">mkdir()</a></span>-related functions to read, change, or create new files
   and directories within the phar archive.  This allows complete PHP applications
   to be distributed in a single file and run directly from that file.
  </p>
  <p class="para">
   The most common usage for a phar archive is to distribute a complete application
   in a single file.  For instance, the PEAR Installer that is bundled with PHP
   versions is distributed as a phar archive.  To use a phar archive distributed
   in this way, the archive can be executed on the command-line or via a web server.
  </p>
  <p class="para">
   Phar archives can be distributed as <code class="literal">tar</code> archives,
   <code class="literal">zip</code> archives, or as the custom <code class="literal">phar</code> file format
   designed specifically for the phar extension.  Each file format has advantages
   and disadvantages.  The tar and zip file formats can be read or extracted by any
   third-party tool that can read the format, but require the phar extension in order to
   run with PHP.  The phar file format is customized and unique to the phar extension,
   and can only be created by the phar extension or the PEAR package
   <a href="https://pear.php.net/package/PHP_Archive" class="link external">&raquo;&nbsp;PHP_Archive</a>, but has the
   advantage that applications created in this format will run even if the phar
   extension is not enabled.
  </p>
  <p class="para">
   In other words, even with the phar extension disabled, one can execute or include
   a phar-based archive.  Accessing individual files within a phar archive is only
   possible with the phar extension unless the phar archive was created by PHP_Archive.
  </p>
  <p class="para">
   The phar extension is also capable of converting a phar archive from tar to zip or
   to phar file format in a single command:
  </p>
  <p class="para">
   <div class="example" id="example-795">
    <p><strong>Example #3 Converting a phar archive from phar to tar file format</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /> $phar </span><span style="color: #007700">= new </span><span style="color: #0000BB">Phar</span><span style="color: #007700">(</span><span style="color: #DD0000">'myphar.phar'</span><span style="color: #007700">);<br /> </span><span style="color: #0000BB">$pgz </span><span style="color: #007700">= </span><span style="color: #0000BB">$phar</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">convertToExecutable</span><span style="color: #007700">(</span><span style="color: #0000BB">Phar</span><span style="color: #007700">::</span><span style="color: #0000BB">TAR</span><span style="color: #007700">, </span><span style="color: #0000BB">Phar</span><span style="color: #007700">::</span><span style="color: #0000BB">GZ</span><span style="color: #007700">); </span><span style="color: #FF8000">// makes myphar.phar.tar.gz<br /> </span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   Phar can compress individual files or an entire archive
   using <a href="book.zlib.php" class="link">gzip</a> compression or
   <a href="book.bzip2.php" class="link">bzip2</a> compression, and can verify archive
   integrity automatically through the use of MD5, SHA-1, SHA-256 or SHA-512
   signatures.
  </p>
  <p class="para">
   Lastly, the Phar extension is security-conscious, and disables write access
   to executable phar archives by default, and requires system-level disabling of the
   <code class="literal">phar.readonly</code> php.ini setting in order to create or
   modify phar archives.  Normal tar and zip archives without an executable stub
   can always be created or modified using the <span class="classname"><a href="class.phardata.php" class="classname">PharData</a></span> class.
  </p>
  <p class="para">
   If you are creating applications for distribution, you will want to read
   <a href="phar.creating.php" class="link">How to create Phar Archives</a>.  If you want
   more information on the differences between the three file formats that phar supports,
   you should read <a href="phar.fileformat.php" class="link">Phar, Tar and Zip</a>.
  </p>
  <p class="para">
   If you are using phar applications, there are helpful tips in
   <a href="phar.using.php" class="link">How to use Phar Archives</a>.
  </p>
  <p class="para">
   The word <code class="literal">phar</code> is a portmanteau of <code class="literal">PHP</code> and
   <code class="literal">Archive</code> and is based loosely
   on the <code class="literal">jar</code> (Java Archive) familiar to Java developers.
  </p>
  <p class="para">
   The implementation for Phar archives is based on the PEAR package
   <a href="https://pear.php.net/package/PHP_Archive" class="link external">&raquo;&nbsp;PHP_Archive</a>, and
   the implementation details are similar, although the Phar extension
   is much more powerful.  In addition, the Phar extension allows most PHP
   applications to be run unmodified while PHP_Archive-based phar archives
   often require extensive modification in order to work.
  </p>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/phar/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fintro.phar%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=intro.phar&amp;repo=en&amp;redirect=https://www.php.net/manual/en/intro.phar.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.phar.php">Phar</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="intro.phar.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="phar.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="phar.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="phar.using.php" title="Using Phar Archives">Using Phar Archives</a>
                        </li>
                                                <li class="">
                            <a href="phar.creating.php" title="Creating Phar Archives">Creating Phar Archives</a>
                        </li>
                                                <li class="">
                            <a href="phar.fileformat.php" title="What makes a phar a phar and not a tar or a zip?">What makes a phar a phar and not a tar or a zip?</a>
                        </li>
                                                <li class="">
                            <a href="class.phar.php" title="Phar">Phar</a>
                        </li>
                                                <li class="">
                            <a href="class.phardata.php" title="PharData">PharData</a>
                        </li>
                                                <li class="">
                            <a href="class.pharfileinfo.php" title="PharFileInfo">PharFileInfo</a>
                        </li>
                                                <li class="">
                            <a href="class.pharexception.php" title="PharException">PharException</a>
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
