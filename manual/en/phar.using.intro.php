<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Using Phar Archives: Introduction - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/phar.using.intro.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/phar.using.intro.php">
 <link rel="alternate" href="https://www.php.net/manual/en/phar.using.intro.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/phar.using.php">
 <link rel="prev" href="https://www.php.net/manual/en/phar.using.php">
 <link rel="next" href="https://www.php.net/manual/en/phar.using.stream.php">

 <link rel="alternate" href="https://www.php.net/manual/en/phar.using.intro.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/phar.using.intro.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/phar.using.intro.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/phar.using.intro.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/phar.using.intro.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/phar.using.intro.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/phar.using.intro.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/phar.using.intro.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/phar.using.intro.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/phar.using.intro.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/phar.using.intro.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Using Phar Archives: Introduction" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Using Phar Archives: Introduction - Manual" />
<meta name="twitter:description" content="Using Phar Archives: Introduction" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Using Phar Archives: Introduction - Manual" />
<meta itemprop="description" content="Using Phar Archives: Introduction" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Using Phar Archives: Introduction" />

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
        <a href="phar.using.stream.php">
          Using Phar Archives: the phar stream wrapper &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="phar.using.php">
          &laquo; Using Phar Archives        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.phar.php'>Phar</a></li>      <li><a href='phar.using.php'>Using Phar Archives</a></li>      </ul>
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
            <option value='en/phar.using.intro.php' selected="selected">English</option>
            <option value='de/phar.using.intro.php'>German</option>
            <option value='es/phar.using.intro.php'>Spanish</option>
            <option value='fr/phar.using.intro.php'>French</option>
            <option value='it/phar.using.intro.php'>Italian</option>
            <option value='ja/phar.using.intro.php'>Japanese</option>
            <option value='pt_BR/phar.using.intro.php'>Brazilian Portuguese</option>
            <option value='ru/phar.using.intro.php'>Russian</option>
            <option value='tr/phar.using.intro.php'>Turkish</option>
            <option value='uk/phar.using.intro.php'>Ukrainian</option>
            <option value='zh/phar.using.intro.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="phar.using.intro" class="section">
 <h2 class="title">Using Phar Archives: Introduction</h2>
 <p class="para">
  Phar archives are similar in concept to Java JAR archives, but are tailored
  to the needs and to the flexibility of PHP applications.  A Phar archive is
  used to distribute a complete PHP application or library in a single file. A
  Phar archive application is used exactly like any other PHP application:
 </p>
 <div class="example-contents screen">
  <div class="cdata"><pre>
php coolapplication.phar
  </pre></div>
 </div>
 <p class="para">
  Using a Phar archive library is identical to using any other PHP library:
 </p>
 <p class="para">
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'coollibrary.phar'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  The <code class="literal">phar</code> stream wrapper provides the core of the phar extension, and
  is explained in detail <a href="phar.using.stream.php" class="link">here</a>.
  The phar stream wrapper allows accessing the files within a phar archive using
  PHP&#039;s standard file functions <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span>, <span class="function"><a href="function.opendir.php" class="function">opendir()</a></span>, and
  others that work on regular files.  The <code class="literal">phar</code> stream wrapper supports all
  read/write operations on both files and directories.
 </p>
 <p class="para">
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'phar://coollibrary.phar/internal/file.php'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-type: image/jpeg'</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// phars can be accessed by full path or by alias<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'phar:///fullpath/to/coollibrary.phar/images/wow.jpg'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  The <span class="classname"><a href="class.phar.php" class="classname">Phar</a></span> class implements advanced functionality for accessing
  files and for creating phar archives.  The Phar class is explained in detail
  <a href="phar.using.object.php" class="link">here</a>.
 </p>
 <p class="para">
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">try {<br />    </span><span style="color: #FF8000">// open an existing phar<br />    </span><span style="color: #0000BB">$p </span><span style="color: #007700">= new </span><span style="color: #0000BB">Phar</span><span style="color: #007700">(</span><span style="color: #DD0000">'coollibrary.phar'</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />    </span><span style="color: #FF8000">// Phar extends SPL's DirectoryIterator class<br />    </span><span style="color: #007700">foreach (new </span><span style="color: #0000BB">RecursiveIteratorIterator</span><span style="color: #007700">(</span><span style="color: #0000BB">$p</span><span style="color: #007700">) as </span><span style="color: #0000BB">$file</span><span style="color: #007700">) {<br />        </span><span style="color: #FF8000">// $file is a PharFileInfo class, and inherits from SplFileInfo<br />        </span><span style="color: #007700">echo </span><span style="color: #0000BB">$file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFileName</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />        echo </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPathName</span><span style="color: #007700">()) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// display contents;<br />    </span><span style="color: #007700">}<br />    if (isset(</span><span style="color: #0000BB">$p</span><span style="color: #007700">[</span><span style="color: #DD0000">'internal/file.php'</span><span style="color: #007700">])) {<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$p</span><span style="color: #007700">[</span><span style="color: #DD0000">'internal/file.php'</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">getMetadata</span><span style="color: #007700">());<br />    }<br /><br />    </span><span style="color: #FF8000">// create a new phar - phar.readonly must be 0 in php.ini<br />    // phar.readonly is enabled by default for security reasons.<br />    // On production servers, Phars need never be created,<br />    // only executed.<br />    </span><span style="color: #007700">if (</span><span style="color: #0000BB">Phar</span><span style="color: #007700">::</span><span style="color: #0000BB">canWrite</span><span style="color: #007700">()) {<br />        </span><span style="color: #0000BB">$p </span><span style="color: #007700">= new </span><span style="color: #0000BB">Phar</span><span style="color: #007700">(</span><span style="color: #DD0000">'newphar.tar.phar'</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #DD0000">'newphar.tar.phar'</span><span style="color: #007700">);<br />        </span><span style="color: #FF8000">// make this a tar-based phar archive, compressed with gzip compression (.tar.gz)<br />        </span><span style="color: #0000BB">$p </span><span style="color: #007700">= </span><span style="color: #0000BB">$p</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">convertToExecutable</span><span style="color: #007700">(</span><span style="color: #0000BB">Phar</span><span style="color: #007700">::</span><span style="color: #0000BB">TAR</span><span style="color: #007700">, </span><span style="color: #0000BB">Phar</span><span style="color: #007700">::</span><span style="color: #0000BB">GZ</span><span style="color: #007700">);<br /><br />        </span><span style="color: #FF8000">// create transaction - nothing is written to newphar.phar<br />        // until stopBuffering() is called, although temporary storage is needed<br />        </span><span style="color: #0000BB">$p</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">startBuffering</span><span style="color: #007700">();<br />        </span><span style="color: #FF8000">// add all files in /path/to/project, saving in the phar with the prefix "project"<br />        </span><span style="color: #0000BB">$p</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buildFromIterator</span><span style="color: #007700">(new </span><span style="color: #0000BB">RecursiveIteratorIterator</span><span style="color: #007700">(new </span><span style="color: #0000BB">RecursiveDirectoryIterator</span><span style="color: #007700">(</span><span style="color: #DD0000">'/path/to/project'</span><span style="color: #007700">)), </span><span style="color: #DD0000">'/path/to/'</span><span style="color: #007700">);<br /><br />        </span><span style="color: #FF8000">// add a new file via the array access API<br />        </span><span style="color: #0000BB">$p</span><span style="color: #007700">[</span><span style="color: #DD0000">'file1.txt'</span><span style="color: #007700">] = </span><span style="color: #DD0000">'Information'</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'hugefile.dat'</span><span style="color: #007700">, </span><span style="color: #DD0000">'rb'</span><span style="color: #007700">);<br />        </span><span style="color: #FF8000">// copy all data from the stream<br />        </span><span style="color: #0000BB">$p</span><span style="color: #007700">[</span><span style="color: #DD0000">'data/hugefile.dat'</span><span style="color: #007700">] = </span><span style="color: #0000BB">$fp</span><span style="color: #007700">;<br /><br />        if (</span><span style="color: #0000BB">Phar</span><span style="color: #007700">::</span><span style="color: #0000BB">canCompress</span><span style="color: #007700">(</span><span style="color: #0000BB">Phar</span><span style="color: #007700">::</span><span style="color: #0000BB">GZ</span><span style="color: #007700">)) {<br />            </span><span style="color: #0000BB">$p</span><span style="color: #007700">[</span><span style="color: #DD0000">'data/hugefile.dat'</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">compress</span><span style="color: #007700">(</span><span style="color: #0000BB">Phar</span><span style="color: #007700">::</span><span style="color: #0000BB">GZ</span><span style="color: #007700">);<br />        }<br /><br />        </span><span style="color: #0000BB">$p</span><span style="color: #007700">[</span><span style="color: #DD0000">'images/wow.jpg'</span><span style="color: #007700">] = </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'images/wow.jpg'</span><span style="color: #007700">);<br />        </span><span style="color: #FF8000">// any value can be saved as file-specific meta-data<br />        </span><span style="color: #0000BB">$p</span><span style="color: #007700">[</span><span style="color: #DD0000">'images/wow.jpg'</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">setMetadata</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'mime-type' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'image/jpeg'</span><span style="color: #007700">));<br />        </span><span style="color: #0000BB">$p</span><span style="color: #007700">[</span><span style="color: #DD0000">'index.php'</span><span style="color: #007700">] = </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'index.php'</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$p</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setMetadata</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'bootstrap' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'index.php'</span><span style="color: #007700">));<br /><br />        </span><span style="color: #FF8000">// save the phar archive to disk<br />        </span><span style="color: #0000BB">$p</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stopBuffering</span><span style="color: #007700">();<br />    }<br />} catch (</span><span style="color: #0000BB">Exception $e</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'Could not open Phar: '</span><span style="color: #007700">, </span><span style="color: #0000BB">$e</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  In addition, verification of phar file contents can be done using any of the
  supported symmetric hash algorithms (MD5, SHA1, SHA256 and SHA512 if ext/hash is enabled)
  and using asymmetric public/private key signing using OpenSSL.  To
  take advantage of OpenSSL signing, you need to generate a public/private key pair, and
  use the private key to set the signature using
  <span class="function"><a href="phar.setsignaturealgorithm.php" class="function">Phar::setSignatureAlgorithm()</a></span>.  In addition, the public key
  as extracted using this code:
  <div class="example-contents">
   <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$public </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_get_publickey</span><span style="color: #007700">(</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'private.pem'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">$pkey </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">openssl_pkey_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$public</span><span style="color: #007700">, </span><span style="color: #0000BB">$pkey</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

  must be saved adjacent to the phar archive it verifies.  If the phar archive
  is saved as <code class="literal">/path/to/my.phar</code>, the public key must be saved
  as <code class="literal">/path/to/my.phar.pubkey</code>, or phar will be unable to verify
  the OpenSSL signature.
 </p>
 <p class="para">
  The <span class="classname"><a href="class.phar.php" class="classname">Phar</a></span> class also provides 3 static methods, <span class="function"><a href="phar.webphar.php" class="function">Phar::webPhar()</a></span>,
  <span class="function"><a href="phar.mungserver.php" class="function">Phar::mungServer()</a></span> and <span class="function"><a href="phar.interceptfilefuncs.php" class="function">Phar::interceptFileFuncs()</a></span> that are crucial
  to packaging up PHP applications designed for usage on regular filesystems and for web-based applications.
  <span class="function"><a href="phar.webphar.php" class="function">Phar::webPhar()</a></span> implements a front controller that routes HTTP calls to the correct
  location within the phar archive.  <span class="function"><a href="phar.mungserver.php" class="function">Phar::mungServer()</a></span> is used to modify the values of
  the <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER</a></var> array to trick applications that process these values.
  <span class="function"><a href="phar.interceptfilefuncs.php" class="function">Phar::interceptFileFuncs()</a></span> instructs Phar to intercept calls to
  <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span>, <span class="function"><a href="function.file-get-contents.php" class="function">file_get_contents()</a></span>, <span class="function"><a href="function.opendir.php" class="function">opendir()</a></span>, and
  all of the stat-based functions (<span class="function"><a href="function.file-exists.php" class="function">file_exists()</a></span>, <span class="function"><a href="function.is-readable.php" class="function">is_readable()</a></span> and so on) and
  route all relative paths to locations within the phar archive.
 </p>
 <p class="para">
  As an example, packaging up a release of the popular phpMyAdmin application for use as a phar archive requires
  only this simple script and then <code class="literal">phpMyAdmin.phar.tar.php</code> can be accessed as a regular file
  from your web server after modifying the user/password:
 </p>
 <p class="para">
  <div class="informalexample">
   <div class="example-contents">
    <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">@</span><span style="color: #0000BB">unlink</span><span style="color: #007700">(</span><span style="color: #DD0000">'phpMyAdmin.phar.tar.php'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">copy</span><span style="color: #007700">(</span><span style="color: #DD0000">'phpMyAdmin-2.11.3-english.tar.gz'</span><span style="color: #007700">, </span><span style="color: #DD0000">'phpMyAdmin.phar.tar.php'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">Phar</span><span style="color: #007700">(</span><span style="color: #DD0000">'phpMyAdmin.phar.tar.php'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">startBuffering</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">"phpMyAdmin-2.11.3-english/config.inc.php"</span><span style="color: #007700">] = </span><span style="color: #DD0000">'&lt;?php<br />/* Servers configuration */<br />$i = 0;<br /><br />/* Server localhost (config:root) [1] */<br />$i++;<br />$cfg[\'Servers\'][$i][\'host\'] = \'localhost\';<br />$cfg[\'Servers\'][$i][\'extension\'] = \'mysqli\';<br />$cfg[\'Servers\'][$i][\'connect_type\'] = \'tcp\';<br />$cfg[\'Servers\'][$i][\'compress\'] = false;<br />$cfg[\'Servers\'][$i][\'auth_type\'] = \'config\';<br />$cfg[\'Servers\'][$i][\'user\'] = \'root\';<br />$cfg[\'Servers\'][$i][\'password\'] = \'\';<br /><br /><br />/* End of servers configuration */<br />if (strpos(PHP_OS, \'WIN\') !== false) {<br />    $cfg[\'UploadDir\'] = getcwd();<br />} else {<br />    $cfg[\'UploadDir\'] = \'/tmp/pharphpmyadmin\';<br />    @mkdir(\'/tmp/pharphpmyadmin\');<br />    @chmod(\'/tmp/pharphpmyadmin\', 0777);<br />}'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setStub</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;?php<br />Phar::interceptFileFuncs();<br />Phar::webPhar("phpMyAdmin.phar", "phpMyAdmin-2.11.3-english/index.php");<br />echo "phpMyAdmin is intended to be executed from a web browser\n";<br />exit -1;<br />__HALT_COMPILER();<br />'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stopBuffering</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/phar/using.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fphar.using.intro%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=phar.using.intro&amp;repo=en&amp;redirect=https://www.php.net/manual/en/phar.using.intro.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="100127">  <div class="votes">
    <div id="Vu100127">
    <a href="/manual/vote-note.php?id=100127&amp;page=phar.using.intro&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100127">
    <a href="/manual/vote-note.php?id=100127&amp;page=phar.using.intro&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100127" title="77% like this...">
    15
    </div>
  </div>
  <a href="#100127" class="name">
  <strong class="user"><em>shaun at shaunfreeman dot co dot uk</em></strong></a><a class="genanchor" href="#100127"> &para;</a><div class="date" title="2010-09-27 03:06"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100127">
<div class="phpcode"><code><span class="html">If you are trying to use Phar for a web application and just getting a blank screen, if you have enabled suhosin as well you have to add:<br /><br />suhosin.executor.include.whitelist="phar"<br /><br />to "/etc/php5/conf.d/suhosin.ini" file or your "php.ini" file.<br /><br />once done everything works fine and dandy.</span></code></div>
  </div>
 </div>
  <div class="note" id="114713">  <div class="votes">
    <div id="Vu114713">
    <a href="/manual/vote-note.php?id=114713&amp;page=phar.using.intro&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114713">
    <a href="/manual/vote-note.php?id=114713&amp;page=phar.using.intro&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114713" title="77% like this...">
    10
    </div>
  </div>
  <a href="#114713" class="name">
  <strong class="user"><em>ch1902</em></strong></a><a class="genanchor" href="#114713"> &para;</a><div class="date" title="2014-03-27 01:14"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114713">
<div class="phpcode"><code><span class="html">If you are going to be running a webPhar from the browser, for example <a href="http://localhost/myphar.phar" rel="nofollow" target="_blank">http://localhost/myphar.phar</a> then you will probably have to associate the .phar extension with PHP in your webserver to interpret the PHP code. In Apache modify httpd.conf to include<br /><br />AddType application/x-httpd-php .php .phar</span></code></div>
  </div>
 </div>
  <div class="note" id="112560">  <div class="votes">
    <div id="Vu112560">
    <a href="/manual/vote-note.php?id=112560&amp;page=phar.using.intro&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112560">
    <a href="/manual/vote-note.php?id=112560&amp;page=phar.using.intro&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112560" title="55% like this...">
    2
    </div>
  </div>
  <a href="#112560" class="name">
  <strong class="user"><em>frame86 at live dot com</em></strong></a><a class="genanchor" href="#112560"> &para;</a><div class="date" title="2013-06-29 11:46"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112560">
<div class="phpcode"><code><span class="html">The openssl example is completely wrong. The public key must be extracted from certificate and openssl_pkey_export() is for private key only.<br /><br />Working example:<br /><span class="default">&lt;?php<br />$publicKey </span><span class="keyword">= </span><span class="default">openssl_get_publickey</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'certificate.pem'</span><span class="keyword">));<br /></span><span class="default">$details </span><span class="keyword">= </span><span class="default">openssl_pkey_get_details</span><span class="keyword">(</span><span class="default">$publicKey</span><span class="keyword">);<br /></span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="string">'my.phar.pubkey'</span><span class="keyword">, </span><span class="default">$details</span><span class="keyword">[</span><span class="string">'key'</span><span class="keyword">]);<br /></span><span class="default">?&gt;<br /></span><br />No need to say that the best and strongest encryption of my.phar/.phar/signature.bin is useless if the consumer does not check against a valid fingerprint or certificate of public key as anybody can open, read, recreate and sign a new archive with new key. Do you do? Think about it.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=phar.using.intro&amp;repo=en&amp;redirect=https://www.php.net/manual/en/phar.using.intro.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="phar.using.php">Using Phar Archives</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="phar.using.intro.php" title="Using Phar Archives: Introduction">Using Phar Archives: Introduction</a>
                        </li>
                                                <li class="">
                            <a href="phar.using.stream.php" title="Using Phar Archives: the phar stream wrapper">Using Phar Archives: the phar stream wrapper</a>
                        </li>
                                                <li class="">
                            <a href="phar.using.object.php" title="Using Phar Archives: the Phar and PharData class">Using Phar Archives: the Phar and PharData class</a>
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
