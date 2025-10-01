<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ftok - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ftok.php">
 <link rel="shorturl" href="https://www.php.net/ftok">
 <link rel="alternate" href="https://www.php.net/ftok" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sem.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.sem.php">
 <link rel="next" href="https://www.php.net/manual/en/function.msg-get-queue.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ftok.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ftok.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ftok.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ftok.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ftok.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ftok.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ftok.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ftok.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ftok.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ftok.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ftok.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Convert a pathname and a project identifier to a System V IPC key" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ftok - Manual" />
<meta name="twitter:description" content="Convert a pathname and a project identifier to a System V IPC key" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ftok - Manual" />
<meta itemprop="description" content="Convert a pathname and a project identifier to a System V IPC key" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Convert a pathname and a project identifier to a System V IPC key" />

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
        <a href="function.msg-get-queue.php">
          msg_get_queue &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.sem.php">
          &laquo; Semaphore Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.sem.php'>Semaphore</a></li>      <li><a href='ref.sem.php'>Semaphore Functions</a></li>      </ul>
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
            <option value='en/function.ftok.php' selected="selected">English</option>
            <option value='de/function.ftok.php'>German</option>
            <option value='es/function.ftok.php'>Spanish</option>
            <option value='fr/function.ftok.php'>French</option>
            <option value='it/function.ftok.php'>Italian</option>
            <option value='ja/function.ftok.php'>Japanese</option>
            <option value='pt_BR/function.ftok.php'>Brazilian Portuguese</option>
            <option value='ru/function.ftok.php'>Russian</option>
            <option value='tr/function.ftok.php'>Turkish</option>
            <option value='uk/function.ftok.php'>Ukrainian</option>
            <option value='zh/function.ftok.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ftok" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ftok</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ftok</span> &mdash; <span class="dc-title">Convert a pathname and a project identifier to a System V IPC key</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.ftok-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ftok</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$project_id</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   The function converts the <code class="parameter">filename</code> of an existing
   accessible file and a project identifier into an
   <code class="literal">integer</code> for use with for example
   <span class="function"><a href="function.shmop-open.php" class="function">shmop_open()</a></span> and other System V IPC keys. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ftok-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       Path to an accessible file.
      </p>
     </dd>
    
    
     <dt><code class="parameter">project_id</code></dt>
     <dd>
      <p class="para">
       Project identifier. This must be a one character string.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ftok-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   On success the return value will be the created key value, otherwise
   <code class="literal">-1</code> is returned.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ftok-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.shmop-open.php" class="function" rel="rdfs-seeAlso">shmop_open()</a> - Create or open shared memory block</span></li>
    <li><span class="function"><a href="function.sem-get.php" class="function" rel="rdfs-seeAlso">sem_get()</a> - Get a semaphore id</span></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/sem/functions/ftok.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ftok%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ftok&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ftok.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="43309">  <div class="votes">
    <div id="Vu43309">
    <a href="/manual/vote-note.php?id=43309&amp;page=function.ftok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43309">
    <a href="/manual/vote-note.php?id=43309&amp;page=function.ftok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43309" title="85% like this...">
    14
    </div>
  </div>
  <a href="#43309" class="name">
  <strong class="user"><em>abk at avatartechnology dot com</em></strong></a><a class="genanchor" href="#43309"> &para;</a><div class="date" title="2004-06-17 01:17"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43309">
<div class="phpcode"><code><span class="html">Thanks to  daniele_dll@yahoo.it who got this in turn from linux glibc 2.3.2: <a href="http://www.php.net/manual/en/function.shmop-open.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.shmop-open.php</a> -- I'm putting this here because it might be helpful to others.<br /><br />function ftok($pathname, $proj_id) {<br />   $st = @stat($pathname);<br />   if (!$st) {<br />       return -1;<br />   }<br />  <br />   $key = sprintf("%u", (($st['ino'] &amp; 0xffff) | (($st['dev'] &amp; 0xff) &lt;&lt; 16) | (($proj_id &amp; 0xff) &lt;&lt; 24)));<br />   return $key;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="112015">  <div class="votes">
    <div id="Vu112015">
    <a href="/manual/vote-note.php?id=112015&amp;page=function.ftok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112015">
    <a href="/manual/vote-note.php?id=112015&amp;page=function.ftok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112015" title="78% like this...">
    8
    </div>
  </div>
  <a href="#112015" class="name">
  <strong class="user"><em>vlatko dot surlan at evorion dot hr</em></strong></a><a class="genanchor" href="#112015"> &para;</a><div class="date" title="2013-04-22 10:09"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112015">
<div class="phpcode"><code><span class="html">The rather unintuitive usage of ftok with shm related functions like shmop_open and shm_attach could simply be explained as a need to avoid shm key collisions. Using ftok with a file that belongs to your project is likely to generate a unique key. Additionally, using ftok with a file from your project avoids the need to store the key so that other processes can access the segment because ftok will always give you the same key if you pass the same file.</span></code></div>
  </div>
 </div>
  <div class="note" id="42715">  <div class="votes">
    <div id="Vu42715">
    <a href="/manual/vote-note.php?id=42715&amp;page=function.ftok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42715">
    <a href="/manual/vote-note.php?id=42715&amp;page=function.ftok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42715" title="70% like this...">
    7
    </div>
  </div>
  <a href="#42715" class="name">
  <strong class="user"><em>david dot rech at virusmedia dot de</em></strong></a><a class="genanchor" href="#42715"> &para;</a><div class="date" title="2004-05-26 07:50"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42715">
<div class="phpcode"><code><span class="html">Missing ftok() on Windows? Here's my little workaround:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if( !</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'ftok'</span><span class="keyword">) )<br />{<br />    function </span><span class="default">ftok</span><span class="keyword">(</span><span class="default">$filename </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">, </span><span class="default">$proj </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">)<br />    {<br />        if( empty(</span><span class="default">$filename</span><span class="keyword">) || !</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">) )<br />        {<br />            return -</span><span class="default">1</span><span class="keyword">;<br />        }<br />        else<br />        {<br />            </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">$filename </span><span class="keyword">. (string) </span><span class="default">$proj</span><span class="keyword">;<br />            for(</span><span class="default">$key </span><span class="keyword">= array(); </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">); </span><span class="default">$key</span><span class="keyword">[] = </span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">), </span><span class="default">1</span><span class="keyword">)));<br />            return </span><span class="default">dechex</span><span class="keyword">(</span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">));<br />        }<br />    }<br />}</span><span class="default">?&gt;<br /></span><br />NOTE: There *may* be duplicate keys, even if probability is low.<br /><br />The key's were NOT computed like the original UNIX ftok() because i.e. fileinode() is also missing on windows. Normally ftok() computes a key based on the file inode and the system minor id of the harddrive the file resides.<br /><br />Behaviour is like PHPs ftok(), -1 is returned if file is missing or $filename is empty, computed int as hex on success.<br /><br />--<br />Regards,<br />David Rech</span></code></div>
  </div>
 </div>
  <div class="note" id="46709">  <div class="votes">
    <div id="Vu46709">
    <a href="/manual/vote-note.php?id=46709&amp;page=function.ftok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46709">
    <a href="/manual/vote-note.php?id=46709&amp;page=function.ftok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46709" title="75% like this...">
    2
    </div>
  </div>
  <a href="#46709" class="name">
  <strong class="user"><em>mbowie at buzmo dot com</em></strong></a><a class="genanchor" href="#46709"> &para;</a><div class="date" title="2004-10-20 02:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46709">
<div class="phpcode"><code><span class="html">If you're planning to use ftok() to generate an IPC identifier to share with other applications, note that PHP uses the ASCII value of the proj parameter to generate the key, not the proj (aka id) parameter itself.<br /><br />The result of this is that if you're using "1" as the id on the PHP side, you'll need to use 49 elsewhere.<br /><br />This may not be the case under all OS's, but certainly is for FreeBSD which requires the id parameter passed to ftok to be an int.<br /><br />Also of note, ipcs and ipcrm are extremely useful for debugging SysV queues etc.<br /><br />References:<br /><a href="http://www.freebsd.org/cgi/man.cgi?query=ftok" rel="nofollow" target="_blank">http://www.freebsd.org/cgi/man.cgi?query=ftok</a><br /><a href="http://www.asciitable.com" rel="nofollow" target="_blank">http://www.asciitable.com</a></span></code></div>
  </div>
 </div>
  <div class="note" id="116498">  <div class="votes">
    <div id="Vu116498">
    <a href="/manual/vote-note.php?id=116498&amp;page=function.ftok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116498">
    <a href="/manual/vote-note.php?id=116498&amp;page=function.ftok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116498" title="66% like this...">
    2
    </div>
  </div>
  <a href="#116498" class="name">
  <strong class="user"><em>seelts at gmail dot com</em></strong></a><a class="genanchor" href="#116498"> &para;</a><div class="date" title="2015-01-13 12:17"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116498">
<div class="phpcode"><code><span class="html">abk@avatartechnology.com has copied the code of daniele_dll@yahoo.it<br />But it is not correct.<br />The right version is here:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">ftok </span><span class="keyword">(</span><span class="default">$filePath</span><span class="keyword">, </span><span class="default">$projectId</span><span class="keyword">) {<br />    </span><span class="default">$fileStats </span><span class="keyword">= </span><span class="default">stat</span><span class="keyword">(</span><span class="default">$filePath</span><span class="keyword">);<br />    if (!</span><span class="default">$fileStats</span><span class="keyword">) {<br />        return -</span><span class="default">1</span><span class="keyword">;<br />    }<br /><br />    return </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%u'</span><span class="keyword">,<br />        (</span><span class="default">$fileStats</span><span class="keyword">[</span><span class="string">'ino'</span><span class="keyword">] &amp; </span><span class="default">0xffff</span><span class="keyword">) | ((</span><span class="default">$fileStats</span><span class="keyword">[</span><span class="string">'dev'</span><span class="keyword">] &amp; </span><span class="default">0xff</span><span class="keyword">) &lt;&lt; </span><span class="default">16</span><span class="keyword">) | ((</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$projectId</span><span class="keyword">) &amp; </span><span class="default">0xff</span><span class="keyword">) &lt;&lt; </span><span class="default">24</span><span class="keyword">)<br />    );<br />}<br /></span><span class="default">?&gt;<br /></span><br />The difference is that $projectId string should be used as ASCII value via ord() function. Otherwise it will be interpreted as 0.</span></code></div>
  </div>
 </div>
  <div class="note" id="74560">  <div class="votes">
    <div id="Vu74560">
    <a href="/manual/vote-note.php?id=74560&amp;page=function.ftok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74560">
    <a href="/manual/vote-note.php?id=74560&amp;page=function.ftok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74560" title="50% like this...">
    0
    </div>
  </div>
  <a href="#74560" class="name">
  <strong class="user"><em>marco at greenlightsolutions dot nl</em></strong></a><a class="genanchor" href="#74560"> &para;</a><div class="date" title="2007-04-17 08:08"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74560">
<div class="phpcode"><code><span class="html">As ftok uses only the last 16 bits of the inode of the file, you can get collisions on large filesystems. Unfortunately, on large filesystems you can get collisions rather quickly: if you have a collection of 350-400 files, odds are that two of them have inodes with the same last 16 bits. So I've taken to using fileinode instead of ftok with functions like shmop_open.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ftok&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ftok.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.sem.php">Semaphore Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.ftok.php" title="ftok">ftok</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-get-queue.php" title="msg_&#8203;get_&#8203;queue">msg_&#8203;get_&#8203;queue</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-queue-exists.php" title="msg_&#8203;queue_&#8203;exists">msg_&#8203;queue_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-receive.php" title="msg_&#8203;receive">msg_&#8203;receive</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-remove-queue.php" title="msg_&#8203;remove_&#8203;queue">msg_&#8203;remove_&#8203;queue</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-send.php" title="msg_&#8203;send">msg_&#8203;send</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-set-queue.php" title="msg_&#8203;set_&#8203;queue">msg_&#8203;set_&#8203;queue</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-stat-queue.php" title="msg_&#8203;stat_&#8203;queue">msg_&#8203;stat_&#8203;queue</a>
                        </li>
                                                <li class="">
                            <a href="function.sem-acquire.php" title="sem_&#8203;acquire">sem_&#8203;acquire</a>
                        </li>
                                                <li class="">
                            <a href="function.sem-get.php" title="sem_&#8203;get">sem_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.sem-release.php" title="sem_&#8203;release">sem_&#8203;release</a>
                        </li>
                                                <li class="">
                            <a href="function.sem-remove.php" title="sem_&#8203;remove">sem_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-attach.php" title="shm_&#8203;attach">shm_&#8203;attach</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-detach.php" title="shm_&#8203;detach">shm_&#8203;detach</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-get-var.php" title="shm_&#8203;get_&#8203;var">shm_&#8203;get_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-has-var.php" title="shm_&#8203;has_&#8203;var">shm_&#8203;has_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-put-var.php" title="shm_&#8203;put_&#8203;var">shm_&#8203;put_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-remove.php" title="shm_&#8203;remove">shm_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-remove-var.php" title="shm_&#8203;remove_&#8203;var">shm_&#8203;remove_&#8203;var</a>
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
