<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: posix_mknod - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.posix-mknod.php">
 <link rel="shorturl" href="https://www.php.net/posix-mknod">
 <link rel="alternate" href="https://www.php.net/posix-mknod" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.posix.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.posix-mkfifo.php">
 <link rel="next" href="https://www.php.net/manual/en/function.posix-pathconf.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.posix-mknod.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.posix-mknod.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.posix-mknod.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.posix-mknod.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.posix-mknod.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.posix-mknod.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.posix-mknod.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.posix-mknod.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.posix-mknod.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.posix-mknod.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.posix-mknod.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create a special or ordinary file (POSIX.1)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: posix_mknod - Manual" />
<meta name="twitter:description" content="Create a special or ordinary file (POSIX.1)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: posix_mknod - Manual" />
<meta itemprop="description" content="Create a special or ordinary file (POSIX.1)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create a special or ordinary file (POSIX.1)" />

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
        <a href="function.posix-pathconf.php">
          posix_pathconf &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.posix-mkfifo.php">
          &laquo; posix_mkfifo        </a>
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
            <option value='en/function.posix-mknod.php' selected="selected">English</option>
            <option value='de/function.posix-mknod.php'>German</option>
            <option value='es/function.posix-mknod.php'>Spanish</option>
            <option value='fr/function.posix-mknod.php'>French</option>
            <option value='it/function.posix-mknod.php'>Italian</option>
            <option value='ja/function.posix-mknod.php'>Japanese</option>
            <option value='pt_BR/function.posix-mknod.php'>Brazilian Portuguese</option>
            <option value='ru/function.posix-mknod.php'>Russian</option>
            <option value='tr/function.posix-mknod.php'>Turkish</option>
            <option value='uk/function.posix-mknod.php'>Ukrainian</option>
            <option value='zh/function.posix-mknod.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.posix-mknod" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">posix_mknod</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_mknod</span> &mdash; <span class="dc-title">
   Create a special or ordinary file (POSIX.1)
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.posix-mknod-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>posix_mknod</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$major</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$minor</code><span class="initializer"> = 0</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Creates a special or ordinary file.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.posix-mknod-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       The file to create
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       This parameter is constructed by a bitwise OR between file type (one of
       the following constants: <strong><code><a href="posix.constants.mknod.php#constant.posix-s-ifreg">POSIX_S_IFREG</a></code></strong>,
       <strong><code><a href="posix.constants.mknod.php#constant.posix-s-ifchr">POSIX_S_IFCHR</a></code></strong>, <strong><code><a href="posix.constants.mknod.php#constant.posix-s-ifblk">POSIX_S_IFBLK</a></code></strong>,
       <strong><code><a href="posix.constants.mknod.php#constant.posix-s-ififo">POSIX_S_IFIFO</a></code></strong> or
       <strong><code><a href="posix.constants.mknod.php#constant.posix-s-ifsock">POSIX_S_IFSOCK</a></code></strong>) and permissions.
      </p>
     </dd>
    
    
     <dt><code class="parameter">major</code></dt>
     <dd>
      <p class="para">
       The major device kernel identifier (required to pass when using
       <strong><code>S_IFCHR</code></strong> or <strong><code>S_IFBLK</code></strong>).
      </p>
     </dd>
    
    
     <dt><code class="parameter">minor</code></dt>
     <dd>
      <p class="para">
       The minor device kernel identifier.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.posix-mknod-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.posix-mknod-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3591">
    <p><strong>Example #1 A <span class="function"><strong>posix_mknod()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$file </span><span style="color: #007700">= </span><span style="color: #DD0000">'/tmp/tmpfile'</span><span style="color: #007700">;  </span><span style="color: #FF8000">// file name<br /></span><span style="color: #0000BB">$type </span><span style="color: #007700">= </span><span style="color: #0000BB">POSIX_S_IFBLK</span><span style="color: #007700">;   </span><span style="color: #FF8000">// file type<br /></span><span style="color: #0000BB">$permissions </span><span style="color: #007700">= </span><span style="color: #0000BB">0777</span><span style="color: #007700">;     </span><span style="color: #FF8000">// octal<br /></span><span style="color: #0000BB">$major </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$minor </span><span style="color: #007700">= </span><span style="color: #0000BB">8</span><span style="color: #007700">;              </span><span style="color: #FF8000">// /dev/random<br /><br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">posix_mknod</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">, </span><span style="color: #0000BB">$type </span><span style="color: #007700">| </span><span style="color: #0000BB">$permissions</span><span style="color: #007700">, </span><span style="color: #0000BB">$major</span><span style="color: #007700">, </span><span style="color: #0000BB">$minor</span><span style="color: #007700">)) {<br />    die(</span><span style="color: #DD0000">'Error ' </span><span style="color: #007700">. </span><span style="color: #0000BB">posix_get_last_error</span><span style="color: #007700">() . </span><span style="color: #DD0000">': ' </span><span style="color: #007700">. </span><span style="color: #0000BB">posix_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">posix_get_last_error</span><span style="color: #007700">()));<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.posix-mknod-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.posix-mkfifo.php" class="function" rel="rdfs-seeAlso">posix_mkfifo()</a> - Create a fifo special file (a named pipe)</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/posix/functions/posix-mknod.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.posix-mknod%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.posix-mknod&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.posix-mknod.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
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
                                                <li class="">
                            <a href="function.posix-mkfifo.php" title="posix_&#8203;mkfifo">posix_&#8203;mkfifo</a>
                        </li>
                                                <li class="current">
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
