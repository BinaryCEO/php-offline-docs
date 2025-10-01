<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: finfo_file - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.finfo-file.php">
 <link rel="shorturl" href="https://www.php.net/finfo-file">
 <link rel="alternate" href="https://www.php.net/finfo-file" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.fileinfo.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.finfo-close.php">
 <link rel="next" href="https://www.php.net/manual/en/function.finfo-open.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.finfo-file.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.finfo-file.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.finfo-file.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.finfo-file.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.finfo-file.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.finfo-file.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.finfo-file.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.finfo-file.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.finfo-file.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.finfo-file.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.finfo-file.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Return information about a file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: finfo_file - Manual" />
<meta name="twitter:description" content="Return information about a file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: finfo_file - Manual" />
<meta itemprop="description" content="Return information about a file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Return information about a file" />

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
        <a href="function.finfo-open.php">
          finfo_open &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.finfo-close.php">
          &laquo; finfo_close        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.file.php'>File System Related Extensions</a></li>      <li><a href='book.fileinfo.php'>Fileinfo</a></li>      <li><a href='ref.fileinfo.php'>Fileinfo Functions</a></li>      </ul>
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
            <option value='en/function.finfo-file.php' selected="selected">English</option>
            <option value='de/function.finfo-file.php'>German</option>
            <option value='es/function.finfo-file.php'>Spanish</option>
            <option value='fr/function.finfo-file.php'>French</option>
            <option value='it/function.finfo-file.php'>Italian</option>
            <option value='ja/function.finfo-file.php'>Japanese</option>
            <option value='pt_BR/function.finfo-file.php'>Brazilian Portuguese</option>
            <option value='ru/function.finfo-file.php'>Russian</option>
            <option value='tr/function.finfo-file.php'>Turkish</option>
            <option value='uk/function.finfo-file.php'>Ukrainian</option>
            <option value='zh/function.finfo-file.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.finfo-file" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">finfo_file</h1>
  <h1 class="refname">finfo::file</h1>
  <p class="verinfo">(PHP &gt;= 5.3.0, PHP 7, PHP 8, PECL fileinfo &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">finfo_file</span> -- <span class="refname">finfo::file</span> &mdash; <span class="dc-title">Return information about a file</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.finfo-file-description">
  <h3 class="title">Description</h3>
  <p class="para">Procedural style</p>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>finfo_file</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.finfo.php" class="type finfo">finfo</a></span> <code class="parameter">$finfo</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="fileinfo.constants.php#constant.fileinfo-none">FILEINFO_NONE</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></span> <code class="parameter">$context</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">Object-oriented style</p>
  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="finfo.file.php" class="methodname">finfo::file</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="fileinfo.constants.php#constant.fileinfo-none">FILEINFO_NONE</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></span> <code class="parameter">$context</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>


  <p class="para rdfs-comment">
   This function is used to get information about a file.
  </p>

 </div>

 <div class="refsect1 parameters" id="refsect1-function.finfo-file-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">finfo</code></dt>
     <dd>
      <p class="para">An <span class="classname"><a href="class.finfo.php" class="classname">finfo</a></span> instance, returned by <span class="function"><a href="function.finfo-open.php" class="function">finfo_open()</a></span>.</p>
     </dd>
    
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       Name of a file to be checked.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       One or disjunction of more <a href="fileinfo.constants.php" class="link">Fileinfo
       constants</a>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">context</code></dt>
     <dd>
      <p class="para">
       For a description of <code class="literal">contexts</code>, refer to <a href="ref.stream.php" class="xref">Stream Functions</a>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.finfo-file-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a textual description of the contents of the
   <code class="parameter">filename</code> argument, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if an error occurred.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.finfo-file-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
 <td>8.1.0</td>
 <td>
  The <code class="parameter">finfo</code> parameter expects an <span class="classname"><a href="class.finfo.php" class="classname">finfo</a></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">context</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.finfo-file-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2329">
    <p><strong>Example #1 A <span class="function"><strong>finfo_file()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$finfo </span><span style="color: #007700">= </span><span style="color: #0000BB">finfo_open</span><span style="color: #007700">(</span><span style="color: #0000BB">FILEINFO_MIME_TYPE</span><span style="color: #007700">); </span><span style="color: #FF8000">// return mime type aka mimetype extension<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">glob</span><span style="color: #007700">(</span><span style="color: #DD0000">"*"</span><span style="color: #007700">) as </span><span style="color: #0000BB">$filename</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">finfo_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$finfo</span><span style="color: #007700">, </span><span style="color: #0000BB">$filename</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">finfo_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$finfo</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">text/html
image/gif
application/vnd.ms-excel</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.finfo-file-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.finfo-buffer.php" class="function" rel="rdfs-seeAlso">finfo_buffer()</a> - Return information about a string buffer</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/fileinfo/functions/finfo-file.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.finfo-file%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.finfo-file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.finfo-file.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="75275">  <div class="votes">
    <div id="Vu75275">
    <a href="/manual/vote-note.php?id=75275&amp;page=function.finfo-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75275">
    <a href="/manual/vote-note.php?id=75275&amp;page=function.finfo-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75275" title="66% like this...">
    22
    </div>
  </div>
  <a href="#75275" class="name">
  <strong class="user"><em>Schraalhans Keukenmeester</em></strong></a><a class="genanchor" href="#75275"> &para;</a><div class="date" title="2007-05-21 03:20"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75275">
<div class="phpcode"><code><span class="html">Tempting as it may seem to use finfo_file() to validate uploaded image files (Check whether a supposed imagefile really contains an image), the results cannot be trusted. It's not that hard to wrap harmful executable code in a file identified as a GIF for instance.<br /><br />A better &amp; safer option is to check the result of:<br /><br />if (!$img = @imagecreatefromgif($uploadedfilename)) {<br />  trigger_error('Not a GIF image!',E_USER_WARNING);<br />  // do necessary stuff<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="119467">  <div class="votes">
    <div id="Vu119467">
    <a href="/manual/vote-note.php?id=119467&amp;page=function.finfo-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119467">
    <a href="/manual/vote-note.php?id=119467&amp;page=function.finfo-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119467" title="65% like this...">
    11
    </div>
  </div>
  <a href="#119467" class="name">
  <strong class="user"><em>66Ton99 at gmail dot com</em></strong></a><a class="genanchor" href="#119467"> &para;</a><div class="date" title="2016-06-14 06:33"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119467">
<div class="phpcode"><code><span class="html">The way HOWTO get MIME-type of remote file.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MimeStreamWrapper<br /></span><span class="keyword">{<br />    const </span><span class="default">WRAPPER_NAME </span><span class="keyword">= </span><span class="string">'mime'</span><span class="keyword">;<br />    public </span><span class="default">$context</span><span class="keyword">;<br />    private static </span><span class="default">$isRegistered </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    private </span><span class="default">$callBackFunction</span><span class="keyword">;<br />    private </span><span class="default">$eof </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    private </span><span class="default">$fp</span><span class="keyword">;<br />    private </span><span class="default">$path</span><span class="keyword">;<br />    private </span><span class="default">$fileStat</span><span class="keyword">;<br />    private function </span><span class="default">getStat</span><span class="keyword">()<br />    {<br />        if (</span><span class="default">$fStat </span><span class="keyword">= </span><span class="default">fstat</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fp</span><span class="keyword">)) {<br />            return </span><span class="default">$fStat</span><span class="keyword">;<br />        }<br /><br />        </span><span class="default">$size </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;<br />        if (</span><span class="default">$headers </span><span class="keyword">= </span><span class="default">get_headers</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">path</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">)) {<br />            </span><span class="default">$head </span><span class="keyword">= </span><span class="default">array_change_key_case</span><span class="keyword">(</span><span class="default">$headers</span><span class="keyword">, </span><span class="default">CASE_LOWER</span><span class="keyword">);<br />            </span><span class="default">$size </span><span class="keyword">= (int)</span><span class="default">$head</span><span class="keyword">[</span><span class="string">'content-length'</span><span class="keyword">];<br />        }<br />        </span><span class="default">$blocks </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$size </span><span class="keyword">/ </span><span class="default">512</span><span class="keyword">);<br />        return array(<br />            </span><span class="string">'dev' </span><span class="keyword">=&gt; </span><span class="default">16777220</span><span class="keyword">,<br />            </span><span class="string">'ino' </span><span class="keyword">=&gt; </span><span class="default">15764</span><span class="keyword">,<br />            </span><span class="string">'mode' </span><span class="keyword">=&gt; </span><span class="default">33188</span><span class="keyword">,<br />            </span><span class="string">'nlink' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,<br />            </span><span class="string">'uid' </span><span class="keyword">=&gt; </span><span class="default">10000</span><span class="keyword">,<br />            </span><span class="string">'gid' </span><span class="keyword">=&gt; </span><span class="default">80</span><span class="keyword">,<br />            </span><span class="string">'rdev' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">,<br />            </span><span class="string">'size' </span><span class="keyword">=&gt; </span><span class="default">$size</span><span class="keyword">,<br />            </span><span class="string">'atime' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">,<br />            </span><span class="string">'mtime' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">,<br />            </span><span class="string">'ctime' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">,<br />            </span><span class="string">'blksize' </span><span class="keyword">=&gt; </span><span class="default">4096</span><span class="keyword">,<br />            </span><span class="string">'blocks' </span><span class="keyword">=&gt; </span><span class="default">$blocks</span><span class="keyword">,<br />        );<br />    }<br />    public function </span><span class="default">setPath</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">path </span><span class="keyword">= </span><span class="default">$path</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">path</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">) or die(</span><span class="string">'Cannot open file:  ' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">path</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fileStat </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getStat</span><span class="keyword">();<br />    }<br />    public function </span><span class="default">read</span><span class="keyword">(</span><span class="default">$count</span><span class="keyword">) {<br />        return </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fp</span><span class="keyword">, </span><span class="default">$count</span><span class="keyword">);<br />    }<br />    public function </span><span class="default">getStreamPath</span><span class="keyword">()<br />    {<br />        return </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">'<a href="ftp://" rel="nofollow" target="_blank">ftp://</a>'</span><span class="keyword">, </span><span class="string">'<a href="http://" rel="nofollow" target="_blank">http://</a>'</span><span class="keyword">, </span><span class="string">'<a href="https://" rel="nofollow" target="_blank">https://</a>'</span><span class="keyword">), </span><span class="default">self</span><span class="keyword">::</span><span class="default">WRAPPER_NAME </span><span class="keyword">. </span><span class="string">'://'</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">path</span><span class="keyword">);<br />    }<br />    public function </span><span class="default">getContext</span><span class="keyword">()<br />    {<br />        if (!</span><span class="default">self</span><span class="keyword">::</span><span class="default">$isRegistered</span><span class="keyword">) {<br />            </span><span class="default">stream_wrapper_register</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">WRAPPER_NAME</span><span class="keyword">, </span><span class="default">get_class</span><span class="keyword">());<br />            </span><span class="default">self</span><span class="keyword">::</span><span class="default">$isRegistered </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        }<br />        return </span><span class="default">stream_context_create</span><span class="keyword">(<br />            array(<br />                </span><span class="default">self</span><span class="keyword">::</span><span class="default">WRAPPER_NAME </span><span class="keyword">=&gt; array(<br />                    </span><span class="string">'cb' </span><span class="keyword">=&gt; array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'read'</span><span class="keyword">),<br />                    </span><span class="string">'fileStat' </span><span class="keyword">=&gt; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fileStat</span><span class="keyword">,<br />                )<br />            )<br />        );<br />    }<br />    public function </span><span class="default">stream_open</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">, &amp;</span><span class="default">$opened_path</span><span class="keyword">)<br />    {<br />        if (!</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^r[bt]?$/'</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">) || !</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">context</span><span class="keyword">) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        </span><span class="default">$opt </span><span class="keyword">= </span><span class="default">stream_context_get_options</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">context</span><span class="keyword">);<br />        if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$opt</span><span class="keyword">[</span><span class="default">self</span><span class="keyword">::</span><span class="default">WRAPPER_NAME</span><span class="keyword">]) ||<br />            !isset(</span><span class="default">$opt</span><span class="keyword">[</span><span class="default">self</span><span class="keyword">::</span><span class="default">WRAPPER_NAME</span><span class="keyword">][</span><span class="string">'cb'</span><span class="keyword">]) ||<br />            !</span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$opt</span><span class="keyword">[</span><span class="default">self</span><span class="keyword">::</span><span class="default">WRAPPER_NAME</span><span class="keyword">][</span><span class="string">'cb'</span><span class="keyword">])<br />        ) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callBackFunction </span><span class="keyword">= </span><span class="default">$opt</span><span class="keyword">[</span><span class="default">self</span><span class="keyword">::</span><span class="default">WRAPPER_NAME</span><span class="keyword">][</span><span class="string">'cb'</span><span class="keyword">];<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fileStat </span><span class="keyword">= </span><span class="default">$opt</span><span class="keyword">[</span><span class="default">self</span><span class="keyword">::</span><span class="default">WRAPPER_NAME</span><span class="keyword">][</span><span class="string">'fileStat'</span><span class="keyword">];<br /><br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">stream_read</span><span class="keyword">(</span><span class="default">$count</span><span class="keyword">)<br />    {<br />        if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">eof </span><span class="keyword">|| !</span><span class="default">$count</span><span class="keyword">) {<br />            return </span><span class="string">''</span><span class="keyword">;<br />        }<br />        if ((</span><span class="default">$s </span><span class="keyword">= </span><span class="default">call_user_func</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callBackFunction</span><span class="keyword">, </span><span class="default">$count</span><span class="keyword">)) == </span><span class="string">''</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">eof </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$s</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">stream_eof</span><span class="keyword">()<br />    {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">eof</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">stream_stat</span><span class="keyword">()<br />    {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fileStat</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">stream_cast</span><span class="keyword">(</span><span class="default">$castAs</span><span class="keyword">)<br />    {<br />        </span><span class="default">$read </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        </span><span class="default">$write  </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        </span><span class="default">$except </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        return @</span><span class="default">stream_select</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">, </span><span class="default">$write</span><span class="keyword">, </span><span class="default">$except</span><span class="keyword">, </span><span class="default">$castAs</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">$path </span><span class="keyword">= </span><span class="string">'<a href="http://fc04.deviantart.net/fs71/f/2010/227/4/6/PNG_Test_by_Destron23.png" rel="nofollow" target="_blank">http://fc04.deviantart.net/fs71/f/2010/227/4/6/PNG_Test_by_Destron23.png</a>'</span><span class="keyword">;<br />echo </span><span class="string">"File: "</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">$wrapper </span><span class="keyword">= new </span><span class="default">MimeStreamWrapper</span><span class="keyword">();<br /></span><span class="default">$wrapper</span><span class="keyword">-&gt;</span><span class="default">setPath</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br /><br /></span><span class="default">$fInfo </span><span class="keyword">= new </span><span class="default">finfo</span><span class="keyword">(</span><span class="default">FILEINFO_MIME</span><span class="keyword">);<br />echo </span><span class="string">"MIME-type: "</span><span class="keyword">, </span><span class="default">$fInfo</span><span class="keyword">-&gt;</span><span class="default">file</span><span class="keyword">(</span><span class="default">$wrapper</span><span class="keyword">-&gt;</span><span class="default">getStreamPath</span><span class="keyword">(), </span><span class="default">FILEINFO_MIME_TYPE</span><span class="keyword">, </span><span class="default">$wrapper</span><span class="keyword">-&gt;</span><span class="default">getContext</span><span class="keyword">()), </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117728">  <div class="votes">
    <div id="Vu117728">
    <a href="/manual/vote-note.php?id=117728&amp;page=function.finfo-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117728">
    <a href="/manual/vote-note.php?id=117728&amp;page=function.finfo-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117728" title="65% like this...">
    8
    </div>
  </div>
  <a href="#117728" class="name">
  <strong class="user"><em>tim at savaslabs dot com</em></strong></a><a class="genanchor" href="#117728"> &para;</a><div class="date" title="2015-07-29 05:44"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117728">
<div class="phpcode"><code><span class="html">Just noting (because I ran into it!) that the current implementation of finfo_file has a known bug which causes PHP to allocate huge amounts of memory when certain strings are present in text files that it is examining.<br /><br />See <a href="https://bugs.php.net/bug.php?id=69224" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=69224</a> for more info.</span></code></div>
  </div>
 </div>
  <div class="note" id="107750">  <div class="votes">
    <div id="Vu107750">
    <a href="/manual/vote-note.php?id=107750&amp;page=function.finfo-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107750">
    <a href="/manual/vote-note.php?id=107750&amp;page=function.finfo-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107750" title="59% like this...">
    10
    </div>
  </div>
  <a href="#107750" class="name">
  <strong class="user"><em>contato at vfreitas dot com</em></strong></a><a class="genanchor" href="#107750"> &para;</a><div class="date" title="2012-03-01 06:31"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107750">
<div class="phpcode"><code><span class="html">Well, i have a great probleam with that, MS Office 2007 extensions (pptx, xlsx, docx) do not have a default Mime type, they have "application/zip" mime type, so, to fix that, i do one little function to verify the extension.<br />That function allow's you to be safe of fake extensions hack.<br /><br /><span class="default">&lt;?php<br /><br />$arrayZips </span><span class="keyword">= array(</span><span class="string">"application/zip"</span><span class="keyword">, </span><span class="string">"application/x-zip"</span><span class="keyword">, </span><span class="string">"application/x-zip-compressed"</span><span class="keyword">);<br /><br /></span><span class="default">$arrayExtensions </span><span class="keyword">= array(</span><span class="string">".pptx"</span><span class="keyword">, </span><span class="string">".docx"</span><span class="keyword">, </span><span class="string">".dotx"</span><span class="keyword">, </span><span class="string">".xlsx"</span><span class="keyword">);<br /><br /></span><span class="default">$file </span><span class="keyword">= </span><span class="string">'path/to/file.xlsx'</span><span class="keyword">;<br /><br /></span><span class="default">$original_extension </span><span class="keyword">= (</span><span class="default">false </span><span class="keyword">=== </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">)) ? </span><span class="string">'' </span><span class="keyword">: </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">);<br /><br /></span><span class="default">$finfo </span><span class="keyword">= new </span><span class="default">finfo</span><span class="keyword">(</span><span class="default">FILEINFO_MIME</span><span class="keyword">);<br /><br /></span><span class="default">$type </span><span class="keyword">= </span><span class="default">$finfo</span><span class="keyword">-&gt;</span><span class="default">file</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /><br />if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">, </span><span class="default">$arrayZips</span><span class="keyword">) &amp;&amp; </span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$original_extension</span><span class="keyword">, </span><span class="default">$arrayExtensions</span><span class="keyword">))<br />{<br />   return </span><span class="default">$original_extension</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104396">  <div class="votes">
    <div id="Vu104396">
    <a href="/manual/vote-note.php?id=104396&amp;page=function.finfo-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104396">
    <a href="/manual/vote-note.php?id=104396&amp;page=function.finfo-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104396" title="60% like this...">
    4
    </div>
  </div>
  <a href="#104396" class="name">
  <strong class="user"><em>Zane MegaLab.it</em></strong></a><a class="genanchor" href="#104396"> &para;</a><div class="date" title="2011-06-13 08:38"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104396">
<div class="phpcode"><code><span class="html">I was getting application/octet-stream or "&lt;= not supported" for all the files.<br /><br />I found out that in PHP 5.3 the magic file is built-in into PHP and that is what should be used. The magic file found on the system may not always be what libmagic expects, hence the error.</span></code></div>
  </div>
 </div>
  <div class="note" id="82757">  <div class="votes">
    <div id="Vu82757">
    <a href="/manual/vote-note.php?id=82757&amp;page=function.finfo-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82757">
    <a href="/manual/vote-note.php?id=82757&amp;page=function.finfo-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82757" title="61% like this...">
    3
    </div>
  </div>
  <a href="#82757" class="name">
  <strong class="user"><em>darko at uvcms dot com</em></strong></a><a class="genanchor" href="#82757"> &para;</a><div class="date" title="2008-04-24 09:53"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82757">
<div class="phpcode"><code><span class="html">Another interresting feature of finfo_file on Windows.<br /><br />This function can return empty string instead of FALSE for some file types (ppt for example). Therefore to be sure do a triple check of output result and provide default type just in case. Here is a sample code:<br /><br />$ftype = 'application/octet-stream';<br />$finfo = @finfo_open(FILEINFO_MIME);<br />if ($finfo !== FALSE) {<br />   $fres = @finfo_file($finfo, $file);<br />   if ( ($fres !== FALSE) <br />        &amp;&amp; is_string($fres) <br />        &amp;&amp; (strlen($fres)&gt;0)) {<br />            $ftype = $fres;<br />        }<br />   @finfo_close($finfo);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="84842">  <div class="votes">
    <div id="Vu84842">
    <a href="/manual/vote-note.php?id=84842&amp;page=function.finfo-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84842">
    <a href="/manual/vote-note.php?id=84842&amp;page=function.finfo-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84842" title="54% like this...">
    2
    </div>
  </div>
  <a href="#84842" class="name">
  <strong class="user"><em>darko at uvcms dot com</em></strong></a><a class="genanchor" href="#84842"> &para;</a><div class="date" title="2008-08-01 08:28"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84842">
<div class="phpcode"><code><span class="html">OO (bit improved) version of the same thing
<br />
<br /><span class="default">&lt;?php
<br />$file </span><span class="keyword">= </span><span class="string">'&lt;somefile&gt;'</span><span class="keyword">;
<br /></span><span class="default">$ftype </span><span class="keyword">= </span><span class="string">'application/octet-stream'</span><span class="keyword">;
<br /></span><span class="default">$finfo </span><span class="keyword">= @new </span><span class="default">finfo</span><span class="keyword">(</span><span class="default">FILEINFO_MIME</span><span class="keyword">);
<br /></span><span class="default">$fres </span><span class="keyword">= @</span><span class="default">$finfo</span><span class="keyword">-&gt;</span><span class="default">file</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />if (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$fres</span><span class="keyword">) &amp;&amp; !empty(</span><span class="default">$fres</span><span class="keyword">)) {
<br />   </span><span class="default">$ftype </span><span class="keyword">= </span><span class="default">$fres</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120051">  <div class="votes">
    <div id="Vu120051">
    <a href="/manual/vote-note.php?id=120051&amp;page=function.finfo-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120051">
    <a href="/manual/vote-note.php?id=120051&amp;page=function.finfo-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120051" title="54% like this...">
    1
    </div>
  </div>
  <a href="#120051" class="name">
  <strong class="user"><em>powtac at gmx dot de</em></strong></a><a class="genanchor" href="#120051"> &para;</a><div class="date" title="2016-10-17 02:02"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120051">
<div class="phpcode"><code><span class="html">Be careful, files with BOM will not detected correctly!</span></code></div>
  </div>
 </div>
  <div class="note" id="114115">  <div class="votes">
    <div id="Vu114115">
    <a href="/manual/vote-note.php?id=114115&amp;page=function.finfo-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114115">
    <a href="/manual/vote-note.php?id=114115&amp;page=function.finfo-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114115" title="54% like this...">
    1
    </div>
  </div>
  <a href="#114115" class="name">
  <strong class="user"><em>niko dot jokipalo at gmail dot com</em></strong></a><a class="genanchor" href="#114115"> &para;</a><div class="date" title="2014-01-12 08:03"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114115">
<div class="phpcode"><code><span class="html">I spent days looking and searching for a database with actual plain language descriptions for the media types, for example<br />finfo(.png) --&gt; "image/png" --&gt; "PNG image".<br />In Ubuntu based OS's you can find already translated database at /usr/share/mime<br /><br /><a href="http://manpages.ubuntu.com/manpages/hardy/en/man5/gnome-mime.5.html" rel="nofollow" target="_blank">http://manpages.ubuntu.com/manpages/hardy/en/man5/gnome-mime.5.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="129845">  <div class="votes">
    <div id="Vu129845">
    <a href="/manual/vote-note.php?id=129845&amp;page=function.finfo-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129845">
    <a href="/manual/vote-note.php?id=129845&amp;page=function.finfo-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129845" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129845" class="name">
  <strong class="user"><em>jesen at protonmail dot com</em></strong></a><a class="genanchor" href="#129845"> &para;</a><div class="date" title="2024-11-10 08:09"><strong>10 months ago</strong></div>
  <div class="text" id="Hcom129845">
<div class="phpcode"><code><span class="html">When using `finfo_file()`, you may encounter results similar to the following, which require attention: `image/png; charset=binary`</span></code></div>
  </div>
 </div>
  <div class="note" id="112936">  <div class="votes">
    <div id="Vu112936">
    <a href="/manual/vote-note.php?id=112936&amp;page=function.finfo-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112936">
    <a href="/manual/vote-note.php?id=112936&amp;page=function.finfo-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112936" title="44% like this...">
    -3
    </div>
  </div>
  <a href="#112936" class="name">
  <strong class="user"><em>da_kooz at hotmail dot com</em></strong></a><a class="genanchor" href="#112936"> &para;</a><div class="date" title="2013-08-08 08:13"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112936">
<div class="phpcode"><code><span class="html">Here is an wrapper that will properly identify Microsoft Office 2007 documents. It's trivial and straightforward to use, edit, and to add more file extentions/mimetypes.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">get_mimetype</span><span class="keyword">(</span><span class="default">$filepath</span><span class="keyword">) {<br />    if(!</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\.[^\/\\\\]+$/'</span><span class="keyword">,</span><span class="default">$filepath</span><span class="keyword">)) {<br />        return </span><span class="default">finfo_file</span><span class="keyword">(</span><span class="default">finfo_open</span><span class="keyword">(</span><span class="default">FILEINFO_MIME_TYPE</span><span class="keyword">), </span><span class="default">$filepath</span><span class="keyword">);<br />    }<br />    switch(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/^.*\./'</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">$filepath</span><span class="keyword">))) {<br />        </span><span class="comment">// START MS Office 2007 Docs<br />        </span><span class="keyword">case </span><span class="string">'docx'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.openxmlformats-officedocument.wordprocessingml.document'</span><span class="keyword">;<br />        case </span><span class="string">'docm'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.ms-word.document.macroEnabled.12'</span><span class="keyword">;<br />        case </span><span class="string">'dotx'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.openxmlformats-officedocument.wordprocessingml.template'</span><span class="keyword">;<br />        case </span><span class="string">'dotm'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.ms-word.template.macroEnabled.12'</span><span class="keyword">;<br />        case </span><span class="string">'xlsx'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'</span><span class="keyword">;<br />        case </span><span class="string">'xlsm'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.ms-excel.sheet.macroEnabled.12'</span><span class="keyword">;<br />        case </span><span class="string">'xltx'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.openxmlformats-officedocument.spreadsheetml.template'</span><span class="keyword">;<br />        case </span><span class="string">'xltm'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.ms-excel.template.macroEnabled.12'</span><span class="keyword">;<br />        case </span><span class="string">'xlsb'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.ms-excel.sheet.binary.macroEnabled.12'</span><span class="keyword">;<br />        case </span><span class="string">'xlam'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.ms-excel.addin.macroEnabled.12'</span><span class="keyword">;<br />        case </span><span class="string">'pptx'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.openxmlformats-officedocument.presentationml.presentation'</span><span class="keyword">;<br />        case </span><span class="string">'pptm'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.ms-powerpoint.presentation.macroEnabled.12'</span><span class="keyword">;<br />        case </span><span class="string">'ppsx'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.openxmlformats-officedocument.presentationml.slideshow'</span><span class="keyword">;<br />        case </span><span class="string">'ppsm'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.ms-powerpoint.slideshow.macroEnabled.12'</span><span class="keyword">;<br />        case </span><span class="string">'potx'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.openxmlformats-officedocument.presentationml.template'</span><span class="keyword">;<br />        case </span><span class="string">'potm'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.ms-powerpoint.template.macroEnabled.12'</span><span class="keyword">;<br />        case </span><span class="string">'ppam'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.ms-powerpoint.addin.macroEnabled.12'</span><span class="keyword">;<br />        case </span><span class="string">'sldx'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.openxmlformats-officedocument.presentationml.slide'</span><span class="keyword">;<br />        case </span><span class="string">'sldm'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.ms-powerpoint.slide.macroEnabled.12'</span><span class="keyword">;<br />        case </span><span class="string">'one'</span><span class="keyword">:<br />            return </span><span class="string">'application/msonenote'</span><span class="keyword">;<br />        case </span><span class="string">'onetoc2'</span><span class="keyword">:<br />            return </span><span class="string">'application/msonenote'</span><span class="keyword">;<br />        case </span><span class="string">'onetmp'</span><span class="keyword">:<br />            return </span><span class="string">'application/msonenote'</span><span class="keyword">;<br />        case </span><span class="string">'onepkg'</span><span class="keyword">:<br />            return </span><span class="string">'application/msonenote'</span><span class="keyword">;<br />        case </span><span class="string">'thmx'</span><span class="keyword">:<br />            return </span><span class="string">'application/vnd.ms-officetheme'</span><span class="keyword">;<br />            </span><span class="comment">//END MS Office 2007 Docs<br /><br />    </span><span class="keyword">}<br />    return </span><span class="default">finfo_file</span><span class="keyword">(</span><span class="default">finfo_open</span><span class="keyword">(</span><span class="default">FILEINFO_MIME_TYPE</span><span class="keyword">), </span><span class="default">$filepath</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88035">  <div class="votes">
    <div id="Vu88035">
    <a href="/manual/vote-note.php?id=88035&amp;page=function.finfo-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88035">
    <a href="/manual/vote-note.php?id=88035&amp;page=function.finfo-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88035" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#88035" class="name">
  <strong class="user"><em>scott at thebrain dot ca</em></strong></a><a class="genanchor" href="#88035"> &para;</a><div class="date" title="2009-01-06 09:29"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88035">
<div class="phpcode"><code><span class="html">I thought to use fileinfo to check if a file was gzip or bzip2. However, the mime type of a compressed file is "data" because compression is an encoding rather than a type.
<br />
<br />gzip files begin with binary 1f8b.
<br />bzip2 files begin with magic bytes 'B'  'Z'  'h'.
<br />e.g.
<br />
<br /><span class="default">&lt;?php
<br />$s </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">"somefilepath"</span><span class="keyword">);
<br />if ( </span><span class="default">bin2hex</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">)) == </span><span class="string">'1f8b' </span><span class="keyword">) {</span><span class="comment">/* could be a gzip file */</span><span class="keyword">}
<br />if( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">) == </span><span class="string">'BZh' </span><span class="keyword">){</span><span class="comment">/* could be a bzip2 file */</span><span class="keyword">}
<br /></span><span class="default">?&gt;
<br /></span>
<br />I am not an encoding expert. My only testing was using a few of my own encoded files.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.finfo-file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.finfo-file.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.fileinfo.php">Fileinfo Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.finfo-buffer.php" title="finfo_&#8203;buffer">finfo_&#8203;buffer</a>
                        </li>
                                                <li class="">
                            <a href="function.finfo-close.php" title="finfo_&#8203;close">finfo_&#8203;close</a>
                        </li>
                                                <li class="current">
                            <a href="function.finfo-file.php" title="finfo_&#8203;file">finfo_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.finfo-open.php" title="finfo_&#8203;open">finfo_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.finfo-set-flags.php" title="finfo_&#8203;set_&#8203;flags">finfo_&#8203;set_&#8203;flags</a>
                        </li>
                                                <li class="">
                            <a href="function.mime-content-type.php" title="mime_&#8203;content_&#8203;type">mime_&#8203;content_&#8203;type</a>
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
