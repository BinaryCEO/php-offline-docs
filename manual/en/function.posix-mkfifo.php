<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: posix_mkfifo - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.posix-mkfifo.php">
 <link rel="shorturl" href="https://www.php.net/posix-mkfifo">
 <link rel="alternate" href="https://www.php.net/posix-mkfifo" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.posix.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.posix-kill.php">
 <link rel="next" href="https://www.php.net/manual/en/function.posix-mknod.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.posix-mkfifo.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.posix-mkfifo.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.posix-mkfifo.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.posix-mkfifo.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.posix-mkfifo.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.posix-mkfifo.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.posix-mkfifo.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.posix-mkfifo.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.posix-mkfifo.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.posix-mkfifo.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.posix-mkfifo.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create a fifo special file (a named pipe)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: posix_mkfifo - Manual" />
<meta name="twitter:description" content="Create a fifo special file (a named pipe)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: posix_mkfifo - Manual" />
<meta itemprop="description" content="Create a fifo special file (a named pipe)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create a fifo special file (a named pipe)" />

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
        <a href="function.posix-mknod.php">
          posix_mknod &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.posix-kill.php">
          &laquo; posix_kill        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.posix.php'>POSIX</a></li>      <li><a href='ref.posix.php'>POSIX Functions</a></li>      </ul>
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
            <option value='en/function.posix-mkfifo.php' selected="selected">English</option>
            <option value='de/function.posix-mkfifo.php'>German</option>
            <option value='es/function.posix-mkfifo.php'>Spanish</option>
            <option value='fr/function.posix-mkfifo.php'>French</option>
            <option value='it/function.posix-mkfifo.php'>Italian</option>
            <option value='ja/function.posix-mkfifo.php'>Japanese</option>
            <option value='pt_BR/function.posix-mkfifo.php'>Brazilian Portuguese</option>
            <option value='ru/function.posix-mkfifo.php'>Russian</option>
            <option value='tr/function.posix-mkfifo.php'>Turkish</option>
            <option value='uk/function.posix-mkfifo.php'>Ukrainian</option>
            <option value='zh/function.posix-mkfifo.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.posix-mkfifo" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">posix_mkfifo</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_mkfifo</span> &mdash; <span class="dc-title">Create a fifo special file (a named pipe)</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.posix-mkfifo-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>posix_mkfifo</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$permissions</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>posix_mkfifo()</strong></span> creates a special
   <code class="literal">FIFO</code> file which exists in the file system and acts as
   a bidirectional communication endpoint for processes.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.posix-mkfifo-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       Path to the <code class="literal">FIFO</code> file.
      </p>
     </dd>
    
    
     <dt><code class="parameter">permissions</code></dt>
     <dd>
      <p class="para">
       The second parameter <code class="parameter">permissions</code> has to be given in
       octal notation (e.g. 0644). The permission of the newly created
       <code class="literal">FIFO</code> also depends on the setting of the current
       <span class="function"><a href="function.umask.php" class="function">umask()</a></span>. The permissions of the created file are
       (mode &amp; ~umask).
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.posix-mkfifo-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/posix/functions/posix-mkfifo.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.posix-mkfifo%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.posix-mkfifo&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.posix-mkfifo.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="89642">  <div class="votes">
    <div id="Vu89642">
    <a href="/manual/vote-note.php?id=89642&amp;page=function.posix-mkfifo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89642">
    <a href="/manual/vote-note.php?id=89642&amp;page=function.posix-mkfifo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89642" title="78% like this...">
    8
    </div>
  </div>
  <a href="#89642" class="name">
  <strong class="user"><em>tim</em></strong></a><a class="genanchor" href="#89642"> &para;</a><div class="date" title="2009-03-17 10:00"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89642">
<div class="phpcode"><code><span class="html">For non-blocking, fopen'd read access to a "half-connected" pipe (created with /usr/bin/mkfifo, posix_mkfifo, etc.), I just go ahead and do:<br /><span class="default">&lt;?php<br />  $fh</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$fifo</span><span class="keyword">, </span><span class="string">"r+"</span><span class="keyword">); </span><span class="comment">// ensures at least one writer (us) so will be non-blocking<br />  </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">); </span><span class="comment">// prevent fread / fwrite blocking<br /></span><span class="default">?&gt;<br /></span><br />The "r+" allows fopen to return immediately regardless of external  writer channel.  You then have to use your own conventions to track $fh as a pseudo-read-only resource, since fwrite would technically be permitted as well.  I've successfully used this approach on Linux with PHP 4.3.10 and PHP 5.2.4 with both half-connected (no writer yet) and pre-connected (writer already waiting) pipes, polling with stream_select as usual.</span></code></div>
  </div>
 </div>
  <div class="note" id="82326">  <div class="votes">
    <div id="Vu82326">
    <a href="/manual/vote-note.php?id=82326&amp;page=function.posix-mkfifo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82326">
    <a href="/manual/vote-note.php?id=82326&amp;page=function.posix-mkfifo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82326" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82326" class="name">
  <strong class="user"><em>TorokAlpar at Gmail dot com</em></strong></a><a class="genanchor" href="#82326"> &para;</a><div class="date" title="2008-04-05 12:11"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82326">
<div class="phpcode"><code><span class="html">Here is a possible solution to what  - tech at kwur dot com- mentioned:<br /><br /> I faced the problem where i had a process (a server) that needed to take care of socket connection, and in the meanwhile get some data from the database. I didn't wanted to make the clients wait for the query execution time, so i decided to make a separate process that executes the query on the DB, and the two would communicate over a pipe. Of course i didn't wanted the server blocking if no data was available. So what i come up with is to use stream_select() , and to overcome the mentioned problem, i would fork the process, open up the pipe for writing in the child, this way the parent won't block when it opens the pipe.<br /><br />here is some code <br /><br />&lt;code&gt;<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if (</span><span class="default">pcntl_fork</span><span class="keyword">() == </span><span class="default">0</span><span class="keyword">)<br />{<br />    </span><span class="comment">// kid<br />    </span><span class="default">$file </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"JobsQueue"</span><span class="keyword">,</span><span class="string">"w"</span><span class="keyword">);<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />    exit(</span><span class="default">0</span><span class="keyword">);   <br />}<br />else<br />{<br />    </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">15</span><span class="keyword">); </span><span class="comment">// make sure that the child executes first<br />    </span><span class="default">$file </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"JobsQueue"</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);<br />}<br /><br /> echo </span><span class="string">"opened the queue \n"</span><span class="keyword">;<br /> <br /> while (</span><span class="default">true</span><span class="keyword">)<br /> {<br />     </span><span class="default">$reders </span><span class="keyword">= array(</span><span class="default">$file</span><span class="keyword">);<br />     if (</span><span class="default">stream_select</span><span class="keyword">(</span><span class="default">$reders</span><span class="keyword">,</span><span class="default">$writers</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">,</span><span class="default">$except</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">15</span><span class="keyword">) &lt; </span><span class="default">1</span><span class="keyword">)<br />     {<br />         continue;<br />     }<br />     else<br />     {<br />         </span><span class="comment">// read data from the fifo<br />         </span><span class="default">$data </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">,</span><span class="default">1024</span><span class="keyword">);<br />         echo </span><span class="default">$data</span><span class="keyword">;<br />     }          <br />     </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /> }<br /><br /></span><span class="default">?&gt;<br /></span><br />&lt;/code&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="77137">  <div class="votes">
    <div id="Vu77137">
    <a href="/manual/vote-note.php?id=77137&amp;page=function.posix-mkfifo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77137">
    <a href="/manual/vote-note.php?id=77137&amp;page=function.posix-mkfifo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77137" title="50% like this...">
    0
    </div>
  </div>
  <a href="#77137" class="name">
  <strong class="user"><em>Enric Jaen</em></strong></a><a class="genanchor" href="#77137"> &para;</a><div class="date" title="2007-08-16 09:22"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77137">
<div class="phpcode"><code><span class="html">A way to have a non-blocking pipe reader is to check first if the pipe exists. If so, then read from the pipe, otherwise do other stuff. This will work assuming that the writer creates the pipe, writes on it, and after that deletes the pipe.<br /><br />This is a blocking writer:<br /><br /><span class="default">&lt;?php<br />   $pipe</span><span class="keyword">=</span><span class="string">"/tmp/pipe"</span><span class="keyword">;<br />   </span><span class="default">$mode</span><span class="keyword">=</span><span class="default">0600</span><span class="keyword">;<br />   if(!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$pipe</span><span class="keyword">)) {<br />      </span><span class="comment">// create the pipe<br />      </span><span class="default">umask</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br />      </span><span class="default">posix_mkfifo</span><span class="keyword">(</span><span class="default">$pipe</span><span class="keyword">,</span><span class="default">$mode</span><span class="keyword">);<br />   }<br />   </span><span class="default">$f </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$pipe</span><span class="keyword">,</span><span class="string">"w"</span><span class="keyword">);<br />   </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">,</span><span class="string">"hello"</span><span class="keyword">);  </span><span class="comment">//block until there is a reader<br />   </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$pipe</span><span class="keyword">); </span><span class="comment">//delete pipe<br /><br /></span><span class="default">?&gt;<br /></span><br />And this is the non-blocking reader:<br /><br /><span class="default">&lt;?php<br />   $pipe</span><span class="keyword">=</span><span class="string">"/tmp/pipe"</span><span class="keyword">;<br />   if(!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$pipe</span><span class="keyword">)) {<br />      echo </span><span class="string">"I am not blocked!"</span><span class="keyword">;<br />   }<br />   else {<br />      </span><span class="comment">//block and read from the pipe<br />      </span><span class="default">$f </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$pipe</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);<br />      echo </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">);<br />   }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77928">  <div class="votes">
    <div id="Vu77928">
    <a href="/manual/vote-note.php?id=77928&amp;page=function.posix-mkfifo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77928">
    <a href="/manual/vote-note.php?id=77928&amp;page=function.posix-mkfifo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77928" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#77928" class="name">
  <strong class="user"><em>tech at kwur dot com</em></strong></a><a class="genanchor" href="#77928"> &para;</a><div class="date" title="2007-09-19 10:44"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77928">
<div class="phpcode"><code><span class="html">This is still not a solution: if I listen to commands on a pipe and output status on a separate pipe, PHP will block on both opens because something else has not already connected to this pipe.  Because I can't do a low-level fcntl() to to set O_NONBLOCK or something like it, this always locks up and is really stupid.  The only way I can get it to work is to spawn seperate subshells with system() and have them cat, or echo respectively and then the pipes work properly...usually?  Its alot of trouble that we can't set the blocking on the open!!</span></code></div>
  </div>
 </div>
  <div class="note" id="75230">  <div class="votes">
    <div id="Vu75230">
    <a href="/manual/vote-note.php?id=75230&amp;page=function.posix-mkfifo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75230">
    <a href="/manual/vote-note.php?id=75230&amp;page=function.posix-mkfifo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75230" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#75230" class="name">
  <strong class="user"><em>Uther Pendragon</em></strong></a><a class="genanchor" href="#75230"> &para;</a><div class="date" title="2007-05-18 02:12"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75230">
<div class="phpcode"><code><span class="html">Note (quoted from `man 7 pipe` on debian linux):<br /><br />"On some systems (but not Linux), pipes are bidirectional:  data  can  be  transmitted  in  both directions  between  the pipe ends.  According to POSIX.1-2001, pipes only need to be unidirectional.  Portable applications should avoid reliance on bidirectional pipe semantics."<br /><br />Linux pipes are NOT bidirectional.<br /><br />Also, it appears to me that the use of fifo (named) pipes in php is pretty pointless as there appears to be NO way of determining whether opening (let alone reading) from it will block.  stream_select SHOULD be able to accomplish this, unfortunatly you cannot get to this point because even trying to OPEN a pipe for read will block until there is a writer.<br /><br />I even tried to use popen("cat $name_of_pipe", 'r'), and even it blocked until it was opened for write by another process.</span></code></div>
  </div>
 </div>
  <div class="note" id="95385">  <div class="votes">
    <div id="Vu95385">
    <a href="/manual/vote-note.php?id=95385&amp;page=function.posix-mkfifo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95385">
    <a href="/manual/vote-note.php?id=95385&amp;page=function.posix-mkfifo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95385" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#95385" class="name">
  <strong class="user"><em>Mauro Titimoli</em></strong></a><a class="genanchor" href="#95385"> &para;</a><div class="date" title="2009-12-30 05:36"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95385">
<div class="phpcode"><code><span class="html">Object Oriented FIFO Communication process:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">interface </span><span class="default">Communication </span><span class="keyword">{
<br />    public function </span><span class="default">receive</span><span class="keyword">(</span><span class="default">$bytes </span><span class="keyword">= </span><span class="default">1024</span><span class="keyword">);
<br />
<br />    public function </span><span class="default">getData</span><span class="keyword">();
<br />
<br />    public function </span><span class="default">clearData</span><span class="keyword">();
<br />
<br />    public function </span><span class="default">send</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);
<br />}
<br />
<br />class </span><span class="default">FIFOCommunication </span><span class="keyword">implements </span><span class="default">Communication </span><span class="keyword">{
<br />    private </span><span class="default">$fifos</span><span class="keyword">;
<br />
<br />    private </span><span class="default">$data</span><span class="keyword">;
<br />
<br />    static public function </span><span class="default">stream_fifo_open</span><span class="keyword">(</span><span class="default">$fifoPath</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">) {
<br />        if (</span><span class="default">pcntl_fork</span><span class="keyword">() == </span><span class="default">0</span><span class="keyword">) {
<br />            if (! </span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$fifoPath</span><span class="keyword">)) {
<br />                </span><span class="default">posix_mkfifo</span><span class="keyword">(</span><span class="default">$fifoPath</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">);
<br />            }
<br />
<br />            </span><span class="default">$fifo </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$fifoPath</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);
<br />            </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);
<br />
<br />            exit(</span><span class="default">0</span><span class="keyword">);
<br />        }
<br />        else {
<br />            </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">15</span><span class="keyword">);
<br />
<br />            return </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$fifoPath</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);
<br />        }
<br />    }
<br />
<br />    static public function </span><span class="default">stream_fifo_write</span><span class="keyword">(</span><span class="default">$fifoPath</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">) {
<br />        if (</span><span class="default">pcntl_fork</span><span class="keyword">() == </span><span class="default">0</span><span class="keyword">) {
<br />            if (! </span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$fifoPath</span><span class="keyword">)) {
<br />                </span><span class="default">posix_mkfifo</span><span class="keyword">(</span><span class="default">$fifoPath</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">);
<br />            }
<br />
<br />            </span><span class="default">$fifo </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$fifoPath</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);
<br />
<br />            </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fifo</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);
<br />
<br />            exit(</span><span class="default">0</span><span class="keyword">);
<br />        }
<br />    }
<br />
<br />    public function </span><span class="default">__construct</span><span class="keyword">(
<br />        </span><span class="default">$fifoInputName</span><span class="keyword">, </span><span class="default">$fifoInputMode</span><span class="keyword">,
<br />        </span><span class="default">$fifoOutputName</span><span class="keyword">, </span><span class="default">$fifoOutputMode
<br />    </span><span class="keyword">) {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fifos </span><span class="keyword">= array(
<br />            </span><span class="string">'input' </span><span class="keyword">=&gt; array(
<br />                </span><span class="string">'file' </span><span class="keyword">=&gt; </span><span class="default">self</span><span class="keyword">::</span><span class="default">stream_fifo_open</span><span class="keyword">(</span><span class="default">$fifoInputName</span><span class="keyword">, </span><span class="default">$fifoInputMode</span><span class="keyword">),
<br />                </span><span class="string">'mode' </span><span class="keyword">=&gt; </span><span class="default">$fifoInputMode</span><span class="keyword">,
<br />                </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="default">$fifoInputName</span><span class="keyword">,
<br />                </span><span class="string">'use' </span><span class="keyword">=&gt; </span><span class="string">'r'</span><span class="keyword">,
<br />            ),
<br />            </span><span class="string">'output' </span><span class="keyword">=&gt; array(
<br />                </span><span class="string">'mode' </span><span class="keyword">=&gt; </span><span class="default">$fifoOutputMode</span><span class="keyword">,
<br />                </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="default">$fifoOutputName</span><span class="keyword">,
<br />                </span><span class="string">'use' </span><span class="keyword">=&gt; </span><span class="string">'w'
<br />            </span><span class="keyword">)
<br />        );
<br />    }
<br />    public function </span><span class="default">remove</span><span class="keyword">(</span><span class="default">$type </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {
<br />        switch (</span><span class="default">$type</span><span class="keyword">) {
<br />            case </span><span class="string">'input'</span><span class="keyword">:
<br />                @</span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fifos</span><span class="keyword">[</span><span class="string">'input'</span><span class="keyword">][</span><span class="string">'name'</span><span class="keyword">]);
<br />                break;
<br />
<br />            case </span><span class="string">'output'</span><span class="keyword">:
<br />                @</span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fifos</span><span class="keyword">[</span><span class="string">'output'</span><span class="keyword">][</span><span class="string">'name'</span><span class="keyword">]);
<br />                break;
<br />
<br />            default:
<br />                @</span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fifos</span><span class="keyword">[</span><span class="string">'input'</span><span class="keyword">][</span><span class="string">'name'</span><span class="keyword">]);
<br />                @</span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fifos</span><span class="keyword">[</span><span class="string">'output'</span><span class="keyword">][</span><span class="string">'name'</span><span class="keyword">]);
<br />        }
<br />    }
<br />
<br />    public function </span><span class="default">receive</span><span class="keyword">(</span><span class="default">$bytes </span><span class="keyword">= </span><span class="default">1024</span><span class="keyword">) {
<br />        </span><span class="default">$readers </span><span class="keyword">= array(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fifos</span><span class="keyword">[</span><span class="string">'input'</span><span class="keyword">][</span><span class="string">'file'</span><span class="keyword">]);
<br />        if (</span><span class="default">stream_select</span><span class="keyword">(</span><span class="default">$readers</span><span class="keyword">, </span><span class="default">$writers </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$except </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">) == </span><span class="default">1</span><span class="keyword">) {
<br />            </span><span class="default">$data </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fifos</span><span class="keyword">[</span><span class="string">'input'</span><span class="keyword">][</span><span class="string">'file'</span><span class="keyword">], </span><span class="default">$bytes</span><span class="keyword">);
<br />        }
<br />
<br />        if (! empty(</span><span class="default">$data</span><span class="keyword">)) {
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data </span><span class="keyword">.= </span><span class="default">$data</span><span class="keyword">;
<br />            return </span><span class="default">true</span><span class="keyword">;
<br />        }
<br />        else {
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />        }
<br />    }
<br />
<br />    public function </span><span class="default">getData</span><span class="keyword">() {
<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">;
<br />    }
<br />
<br />    public function </span><span class="default">clearData</span><span class="keyword">() {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;
<br />    }
<br />
<br />    public function </span><span class="default">send</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) {
<br />        </span><span class="default">$fifoOutput </span><span class="keyword">= &amp; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fifos</span><span class="keyword">[</span><span class="string">'output'</span><span class="keyword">];
<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">stream_fifo_write</span><span class="keyword">(</span><span class="default">$fifoOutput</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">], </span><span class="default">$fifoOutput</span><span class="keyword">[</span><span class="string">'mode'</span><span class="keyword">], </span><span class="default">$data</span><span class="keyword">);
<br />    }
<br />}
<br />
<br /></span><span class="default">$fifoCommunication </span><span class="keyword">= new </span><span class="default">FIFOCommunication</span><span class="keyword">(
<br />    </span><span class="default">getmypid</span><span class="keyword">() . </span><span class="string">'.input'</span><span class="keyword">, </span><span class="default">0600</span><span class="keyword">,
<br />    </span><span class="default">getmypid</span><span class="keyword">() . </span><span class="string">'.output'</span><span class="keyword">, </span><span class="default">0600
<br /></span><span class="keyword">);
<br />
<br />echo </span><span class="string">"COMMUNICATION STARTED\n"</span><span class="keyword">;
<br />
<br />while (</span><span class="default">true</span><span class="keyword">) {
<br />    if (</span><span class="default">$fifoCommunication</span><span class="keyword">-&gt;</span><span class="default">receive</span><span class="keyword">()) {
<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">$fifoCommunication</span><span class="keyword">-&gt;</span><span class="default">getData</span><span class="keyword">();
<br />        if (</span><span class="default">$data </span><span class="keyword">== </span><span class="string">"EXIT\n"</span><span class="keyword">) {
<br />            break;
<br />        }
<br />        else {
<br />            </span><span class="default">$fifoCommunication</span><span class="keyword">-&gt;</span><span class="default">send</span><span class="keyword">(</span><span class="string">'RECEIVED: ' </span><span class="keyword">. </span><span class="default">$fifoCommunication</span><span class="keyword">-&gt;</span><span class="default">getData</span><span class="keyword">());
<br />        }
<br />    }
<br />
<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">$fifoComunication</span><span class="keyword">-&gt;</span><span class="default">remove</span><span class="keyword">();
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86345">  <div class="votes">
    <div id="Vu86345">
    <a href="/manual/vote-note.php?id=86345&amp;page=function.posix-mkfifo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86345">
    <a href="/manual/vote-note.php?id=86345&amp;page=function.posix-mkfifo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86345" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#86345" class="name">
  <strong class="user"><em>mike at easystyle dot org</em></strong></a><a class="genanchor" href="#86345"> &para;</a><div class="date" title="2008-10-14 05:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86345">
<div class="phpcode"><code><span class="html">Couldn't you just open up a writer yourself right after you open up a reader?  Just to be sure that you won't have any blocking issues...</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.posix-mkfifo&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.posix-mkfifo.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.posix.php">POSIX Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.posix-access.php" title="posix_&#8203;access">posix_&#8203;access</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-ctermid.php" title="posix_&#8203;ctermid">posix_&#8203;ctermid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-eaccess.php" title="posix_&#8203;eaccess">posix_&#8203;eaccess</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-errno.php" title="posix_&#8203;errno">posix_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-fpathconf.php" title="posix_&#8203;fpathconf">posix_&#8203;fpathconf</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-get-last-error.php" title="posix_&#8203;get_&#8203;last_&#8203;error">posix_&#8203;get_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getcwd.php" title="posix_&#8203;getcwd">posix_&#8203;getcwd</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getegid.php" title="posix_&#8203;getegid">posix_&#8203;getegid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-geteuid.php" title="posix_&#8203;geteuid">posix_&#8203;geteuid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getgid.php" title="posix_&#8203;getgid">posix_&#8203;getgid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getgrgid.php" title="posix_&#8203;getgrgid">posix_&#8203;getgrgid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getgrnam.php" title="posix_&#8203;getgrnam">posix_&#8203;getgrnam</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getgroups.php" title="posix_&#8203;getgroups">posix_&#8203;getgroups</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getlogin.php" title="posix_&#8203;getlogin">posix_&#8203;getlogin</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getpgid.php" title="posix_&#8203;getpgid">posix_&#8203;getpgid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getpgrp.php" title="posix_&#8203;getpgrp">posix_&#8203;getpgrp</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getpid.php" title="posix_&#8203;getpid">posix_&#8203;getpid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getppid.php" title="posix_&#8203;getppid">posix_&#8203;getppid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getpwnam.php" title="posix_&#8203;getpwnam">posix_&#8203;getpwnam</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getpwuid.php" title="posix_&#8203;getpwuid">posix_&#8203;getpwuid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getrlimit.php" title="posix_&#8203;getrlimit">posix_&#8203;getrlimit</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getsid.php" title="posix_&#8203;getsid">posix_&#8203;getsid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getuid.php" title="posix_&#8203;getuid">posix_&#8203;getuid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-initgroups.php" title="posix_&#8203;initgroups">posix_&#8203;initgroups</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-isatty.php" title="posix_&#8203;isatty">posix_&#8203;isatty</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-kill.php" title="posix_&#8203;kill">posix_&#8203;kill</a>
                        </li>
                                                <li class="current">
                            <a href="function.posix-mkfifo.php" title="posix_&#8203;mkfifo">posix_&#8203;mkfifo</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-mknod.php" title="posix_&#8203;mknod">posix_&#8203;mknod</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-pathconf.php" title="posix_&#8203;pathconf">posix_&#8203;pathconf</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setegid.php" title="posix_&#8203;setegid">posix_&#8203;setegid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-seteuid.php" title="posix_&#8203;seteuid">posix_&#8203;seteuid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setgid.php" title="posix_&#8203;setgid">posix_&#8203;setgid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setpgid.php" title="posix_&#8203;setpgid">posix_&#8203;setpgid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setrlimit.php" title="posix_&#8203;setrlimit">posix_&#8203;setrlimit</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setsid.php" title="posix_&#8203;setsid">posix_&#8203;setsid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setuid.php" title="posix_&#8203;setuid">posix_&#8203;setuid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-strerror.php" title="posix_&#8203;strerror">posix_&#8203;strerror</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-sysconf.php" title="posix_&#8203;sysconf">posix_&#8203;sysconf</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-times.php" title="posix_&#8203;times">posix_&#8203;times</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-ttyname.php" title="posix_&#8203;ttyname">posix_&#8203;ttyname</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-uname.php" title="posix_&#8203;uname">posix_&#8203;uname</a>
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
