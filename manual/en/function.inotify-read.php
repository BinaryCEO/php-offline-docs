<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: inotify_read - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.inotify-read.php">
 <link rel="shorturl" href="https://www.php.net/inotify-read">
 <link rel="alternate" href="https://www.php.net/inotify-read" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.inotify.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.inotify-queue-len.php">
 <link rel="next" href="https://www.php.net/manual/en/function.inotify-rm-watch.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.inotify-read.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.inotify-read.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.inotify-read.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.inotify-read.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.inotify-read.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.inotify-read.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.inotify-read.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.inotify-read.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.inotify-read.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.inotify-read.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.inotify-read.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Read events from an inotify instance" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: inotify_read - Manual" />
<meta name="twitter:description" content="Read events from an inotify instance" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: inotify_read - Manual" />
<meta itemprop="description" content="Read events from an inotify instance" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Read events from an inotify instance" />

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
        <a href="function.inotify-rm-watch.php">
          inotify_rm_watch &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.inotify-queue-len.php">
          &laquo; inotify_queue_len        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.file.php'>File System Related Extensions</a></li>      <li><a href='book.inotify.php'>Inotify</a></li>      <li><a href='ref.inotify.php'>Inotify Functions</a></li>      </ul>
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
            <option value='en/function.inotify-read.php' selected="selected">English</option>
            <option value='de/function.inotify-read.php'>German</option>
            <option value='es/function.inotify-read.php'>Spanish</option>
            <option value='fr/function.inotify-read.php'>French</option>
            <option value='it/function.inotify-read.php'>Italian</option>
            <option value='ja/function.inotify-read.php'>Japanese</option>
            <option value='pt_BR/function.inotify-read.php'>Brazilian Portuguese</option>
            <option value='ru/function.inotify-read.php'>Russian</option>
            <option value='tr/function.inotify-read.php'>Turkish</option>
            <option value='uk/function.inotify-read.php'>Ukrainian</option>
            <option value='zh/function.inotify-read.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.inotify-read" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">inotify_read</h1>
  <p class="verinfo">(PECL inotify &gt;= 0.1.2)</p><p class="refpurpose"><span class="refname">inotify_read</span> &mdash; <span class="dc-title">Read events from an inotify instance</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.inotify-read-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>inotify_read</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$inotify_instance</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Read inotify events from an inotify instance.
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-function.inotify-read-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">inotify_instance</code></dt>
     <dd>
      <p class="para">
       Resource returned by
<span class="function"><a href="function.inotify-init.php" class="function">inotify_init()</a></span>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.inotify-read-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   An array of inotify events or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if no events was pending and
   <code class="parameter">inotify_instance</code> is non-blocking. Each event is an array with the following keys:
   <ul class="simplelist">
    <li>wd is a watch descriptor returned by
     <span class="function"><a href="function.inotify-add-watch.php" class="function">inotify_add_watch()</a></span></li>
    <li>mask is a bit mask of <a href="inotify.constants.php" class="link">events</a></li>
    <li>cookie is a unique id to connect related events (e.g. <strong><code>IN_MOVE_FROM</code></strong>
     and <strong><code>IN_MOVE_TO</code></strong>)</li>
    <li>name is the name of a file (e.g. if a file was modified in a
     watched directory)</li>
   </ul>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.inotify-read-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.inotify-init.php" class="function" rel="rdfs-seeAlso">inotify_init()</a> - Initialize an inotify instance</span></li>
    <li><span class="function"><a href="function.stream-select.php" class="function" rel="rdfs-seeAlso">stream_select()</a> - Runs the equivalent of the select() system call on the given
   arrays of streams with a timeout specified by seconds and microseconds</span></li>
    <li><span class="function"><a href="function.stream-set-blocking.php" class="function" rel="rdfs-seeAlso">stream_set_blocking()</a> - Set blocking/non-blocking mode on a stream</span></li>
    <li><span class="function"><a href="function.inotify-queue-len.php" class="function" rel="rdfs-seeAlso">inotify_queue_len()</a> - Return a number upper than zero if there are pending events</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/inotify/functions/inotify-read.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.inotify-read%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.inotify-read&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.inotify-read.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113281">  <div class="votes">
    <div id="Vu113281">
    <a href="/manual/vote-note.php?id=113281&amp;page=function.inotify-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113281">
    <a href="/manual/vote-note.php?id=113281&amp;page=function.inotify-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113281" title="62% like this...">
    6
    </div>
  </div>
  <a href="#113281" class="name">
  <strong class="user"><em>qriff at hotmail dot com</em></strong></a><a class="genanchor" href="#113281"> &para;</a><div class="date" title="2013-09-20 11:50"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113281">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br />$wd_constants </span><span class="keyword">= array(<br /></span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_ACCESS'</span><span class="keyword">,</span><span class="string">'File was accessed (read)'</span><span class="keyword">),<br /></span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_MODIFY'</span><span class="keyword">,</span><span class="string">'File was modified'</span><span class="keyword">),<br /></span><span class="default">4 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_ATTRIB'</span><span class="keyword">,</span><span class="string">'Metadata changed (e.g. permissions, mtime, etc.)'</span><span class="keyword">),<br /></span><span class="default">8 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_CLOSE_WRITE'</span><span class="keyword">,</span><span class="string">'File opened for writing was closed'</span><span class="keyword">),<br /></span><span class="default">16 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_CLOSE_NOWRITE'</span><span class="keyword">,</span><span class="string">'File not opened for writing was closed'</span><span class="keyword">),<br /></span><span class="default">32 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_OPEN'</span><span class="keyword">,</span><span class="string">'File was opened'</span><span class="keyword">),<br /></span><span class="default">128 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_MOVED_TO'</span><span class="keyword">,</span><span class="string">'File moved into watched directory'</span><span class="keyword">),<br /></span><span class="default">64 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_MOVED_FROM'</span><span class="keyword">,</span><span class="string">'File moved out of watched directory'</span><span class="keyword">),<br /></span><span class="default">256 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_CREATE'</span><span class="keyword">,</span><span class="string">'File or directory created in watched directory'</span><span class="keyword">),<br /></span><span class="default">512 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_DELETE'</span><span class="keyword">,</span><span class="string">'File or directory deleted in watched directory'</span><span class="keyword">),<br /></span><span class="default">1024 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_DELETE_SELF'</span><span class="keyword">,</span><span class="string">'Watched file or directory was deleted'</span><span class="keyword">),<br /></span><span class="default">2048 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_MOVE_SELF'</span><span class="keyword">,</span><span class="string">'Watch file or directory was moved'</span><span class="keyword">),<br /></span><span class="default">24 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_CLOSE'</span><span class="keyword">,</span><span class="string">'Equals to IN_CLOSE_WRITE | IN_CLOSE_NOWRITE'</span><span class="keyword">),<br /></span><span class="default">192 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_MOVE'</span><span class="keyword">,</span><span class="string">'Equals to IN_MOVED_FROM | IN_MOVED_TO'</span><span class="keyword">),<br /></span><span class="default">4095 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_ALL_EVENTS'</span><span class="keyword">,</span><span class="string">'Bitmask of all the above constants'</span><span class="keyword">),<br /></span><span class="default">8192 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_UNMOUNT'</span><span class="keyword">,</span><span class="string">'File system containing watched object was unmounted'</span><span class="keyword">),<br /></span><span class="default">16384 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_Q_OVERFLOW'</span><span class="keyword">,</span><span class="string">'Event queue overflowed (wd is -1 for this event)'</span><span class="keyword">),<br /></span><span class="default">32768 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_IGNORED'</span><span class="keyword">,</span><span class="string">'Watch was removed (explicitly by inotify_rm_watch() or because file was removed or filesystem unmounted'</span><span class="keyword">),<br /></span><span class="default">1073741824 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_ISDIR'</span><span class="keyword">,</span><span class="string">'Subject of this event is a directory'</span><span class="keyword">),<br /></span><span class="default">1073741840 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_CLOSE_NOWRITE'</span><span class="keyword">,</span><span class="string">'High-bit: File not opened for writing was closed'</span><span class="keyword">),<br /></span><span class="default">1073741856 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_OPEN'</span><span class="keyword">,</span><span class="string">'High-bit: File was opened'</span><span class="keyword">),<br /></span><span class="default">1073742080 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_CREATE'</span><span class="keyword">,</span><span class="string">'High-bit: File or directory created in watched directory'</span><span class="keyword">),<br /></span><span class="default">1073742336 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_DELETE'</span><span class="keyword">,</span><span class="string">'High-bit: File or directory deleted in watched directory'</span><span class="keyword">),<br /></span><span class="default">16777216 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_ONLYDIR'</span><span class="keyword">,</span><span class="string">'Only watch pathname if it is a directory (Since Linux 2.6.15)'</span><span class="keyword">),<br /></span><span class="default">33554432 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_DONT_FOLLOW'</span><span class="keyword">,</span><span class="string">'Do not dereference pathname if it is a symlink (Since Linux 2.6.15)'</span><span class="keyword">),<br /></span><span class="default">536870912 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_MASK_ADD'</span><span class="keyword">,</span><span class="string">'Add events to watch mask for this pathname if it already exists (instead of replacing mask).'</span><span class="keyword">),<br /></span><span class="default">2147483648 </span><span class="keyword">=&gt; array(</span><span class="string">'IN_ONESHOT'</span><span class="keyword">,</span><span class="string">'Monitor pathname for one event, then remove from watch list.'</span><span class="keyword">)<br />);<br /><br /></span><span class="default">$path </span><span class="keyword">= </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br /><br /></span><span class="default">$fd </span><span class="keyword">= </span><span class="default">inotify_init</span><span class="keyword">();<br /></span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$watch_descriptor </span><span class="keyword">= </span><span class="default">inotify_add_watch</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">, </span><span class="default">IN_ALL_EVENTS</span><span class="keyword">);<br /><br /></span><span class="default">$poll </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />while (</span><span class="default">true</span><span class="keyword">) {<br />  </span><span class="default">$ecount </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  </span><span class="default">$fcount </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  </span><span class="comment">// Poll for queued events, generated meanwhile<br />  // Because while (true) { } has some seriously bad mojo<br />  </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">);<br />  </span><span class="default">$poll</span><span class="keyword">++;<br />  </span><span class="default">$events </span><span class="keyword">= </span><span class="default">inotify_read</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">);<br />  if (</span><span class="default">$events</span><span class="keyword">) </span><span class="default">$ecount </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$events</span><span class="keyword">);<br />  echo </span><span class="string">"=== "</span><span class="keyword">.</span><span class="default">date</span><span class="keyword">(</span><span class="string">"Y-m-d H:i:s"</span><span class="keyword">).</span><span class="string">" inotify poll #</span><span class="default">$poll</span><span class="string"> contains "</span><span class="keyword">.</span><span class="default">$ecount</span><span class="keyword">.</span><span class="string">" events"</span><span class="keyword">;<br />  if (</span><span class="default">$events</span><span class="keyword">) echo </span><span class="string">":"</span><span class="keyword">;<br />  echo </span><span class="string">"\n"</span><span class="keyword">;<br />  if (</span><span class="default">$events</span><span class="keyword">) {<br />        foreach (</span><span class="default">$events </span><span class="keyword">as </span><span class="default">$event</span><span class="keyword">) {<br />                </span><span class="default">$fcount</span><span class="keyword">++;<br />                echo </span><span class="string">"        inotify Event #"</span><span class="keyword">.</span><span class="default">$fcount</span><span class="keyword">.</span><span class="string">" - Object: "</span><span class="keyword">.</span><span class="default">$event</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">].</span><span class="string">": "</span><span class="keyword">.</span><span class="default">$wd_constants</span><span class="keyword">[</span><span class="default">$event</span><span class="keyword">[</span><span class="string">'mask'</span><span class="keyword">]][</span><span class="default">0</span><span class="keyword">].</span><span class="string">" ("</span><span class="keyword">.</span><span class="default">$wd_constants</span><span class="keyword">[</span><span class="default">$event</span><span class="keyword">[</span><span class="string">'mask'</span><span class="keyword">]][</span><span class="default">1</span><span class="keyword">].</span><span class="string">")\n"</span><span class="keyword">;<br />        }<br />  }<br />}<br /><br /></span><span class="default">inotify_rm_watch</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">, </span><span class="default">$watch_descriptor</span><span class="keyword">);<br /><br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116286">  <div class="votes">
    <div id="Vu116286">
    <a href="/manual/vote-note.php?id=116286&amp;page=function.inotify-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116286">
    <a href="/manual/vote-note.php?id=116286&amp;page=function.inotify-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116286" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#116286" class="name">
  <strong class="user"><em>lingtalfi</em></strong></a><a class="genanchor" href="#116286"> &para;</a><div class="date" title="2014-12-05 04:52"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116286">
<div class="phpcode"><code><span class="html">once the watch is read, it is removed from the queue.<br />(inotify_queue_len will return 0)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.inotify-read&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.inotify-read.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.inotify.php">Inotify Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.inotify-add-watch.php" title="inotify_&#8203;add_&#8203;watch">inotify_&#8203;add_&#8203;watch</a>
                        </li>
                                                <li class="">
                            <a href="function.inotify-init.php" title="inotify_&#8203;init">inotify_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.inotify-queue-len.php" title="inotify_&#8203;queue_&#8203;len">inotify_&#8203;queue_&#8203;len</a>
                        </li>
                                                <li class="current">
                            <a href="function.inotify-read.php" title="inotify_&#8203;read">inotify_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.inotify-rm-watch.php" title="inotify_&#8203;rm_&#8203;watch">inotify_&#8203;rm_&#8203;watch</a>
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
