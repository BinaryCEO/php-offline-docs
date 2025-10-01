<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: scandir - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.scandir.php">
 <link rel="shorturl" href="https://www.php.net/scandir">
 <link rel="alternate" href="https://www.php.net/scandir" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.dir.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.rewinddir.php">
 <link rel="next" href="https://www.php.net/manual/en/book.fileinfo.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.scandir.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.scandir.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.scandir.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.scandir.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.scandir.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.scandir.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.scandir.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.scandir.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.scandir.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.scandir.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.scandir.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="List files and directories inside the specified path" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: scandir - Manual" />
<meta name="twitter:description" content="List files and directories inside the specified path" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: scandir - Manual" />
<meta itemprop="description" content="List files and directories inside the specified path" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="List files and directories inside the specified path" />

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
        <a href="book.fileinfo.php">
          Fileinfo &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.rewinddir.php">
          &laquo; rewinddir        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.file.php'>File System Related Extensions</a></li>      <li><a href='book.dir.php'>Directories</a></li>      <li><a href='ref.dir.php'>Directory Functions</a></li>      </ul>
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
            <option value='en/function.scandir.php' selected="selected">English</option>
            <option value='de/function.scandir.php'>German</option>
            <option value='es/function.scandir.php'>Spanish</option>
            <option value='fr/function.scandir.php'>French</option>
            <option value='it/function.scandir.php'>Italian</option>
            <option value='ja/function.scandir.php'>Japanese</option>
            <option value='pt_BR/function.scandir.php'>Brazilian Portuguese</option>
            <option value='ru/function.scandir.php'>Russian</option>
            <option value='tr/function.scandir.php'>Turkish</option>
            <option value='uk/function.scandir.php'>Ukrainian</option>
            <option value='zh/function.scandir.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.scandir" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">scandir</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">scandir</span> &mdash; <span class="dc-title">List files and directories inside the specified path</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.scandir-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>scandir</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$directory</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$sorting_order</code><span class="initializer"> = <strong><code><a href="dir.constants.php#constant.scandir-sort-ascending">SCANDIR_SORT_ASCENDING</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></span> <code class="parameter">$context</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Returns an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of files and directories from the
   <code class="parameter">directory</code>.
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-function.scandir-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">directory</code></dt>
     <dd>
      <p class="para">
       The directory that will be scanned.
      </p>
     </dd>
    
    
     <dt><code class="parameter">sorting_order</code></dt>
     <dd>
      <p class="para">
       By default, the sorted order is alphabetical in ascending order.  If
       the optional <code class="parameter">sorting_order</code> is set to
       <strong><code><a href="dir.constants.php#constant.scandir-sort-descending">SCANDIR_SORT_DESCENDING</a></code></strong>, then the sort order is
       alphabetical in descending order. If it is set to
       <strong><code><a href="dir.constants.php#constant.scandir-sort-none">SCANDIR_SORT_NONE</a></code></strong> then the result is unsorted.
      </p>
     </dd>
    
    
     <dt><code class="parameter">context</code></dt>
     <dd>
      <p class="para">
       For a description of the <code class="parameter">context</code> parameter, 
       refer to <a href="ref.stream.php" class="link">the streams section</a> of
       the manual.
      </p> 
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.scandir-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of filenames on success, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on 
   failure. If <code class="parameter">directory</code> is not a directory, then 
   boolean <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned, and an error of level 
   <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is generated.
  </p> 
 </div>


 <div class="refsect1 changelog" id="refsect1-function.scandir-changelog">
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
      <td>8.0.0</td>
      <td>
       <code class="parameter">context</code> is now nullable.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>



 <div class="refsect1 examples" id="refsect1-function.scandir-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2327">
    <p><strong>Example #1 A simple <span class="function"><strong>scandir()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$dir    </span><span style="color: #007700">= </span><span style="color: #DD0000">'/tmp'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$files1 </span><span style="color: #007700">= </span><span style="color: #0000BB">scandir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$files2 </span><span style="color: #007700">= </span><span style="color: #0000BB">scandir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">, </span><span style="color: #0000BB">SCANDIR_SORT_DESCENDING</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$files1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$files2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [0] =&gt; .
    [1] =&gt; ..
    [2] =&gt; bar.php
    [3] =&gt; foo.txt
    [4] =&gt; somedir
)
Array
(
    [0] =&gt; somedir
    [1] =&gt; foo.txt
    [2] =&gt; bar.php
    [3] =&gt; ..
    [4] =&gt; .
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.scandir-notes">
  <h3 class="title">Notes</h3>
  <div class="tip"><strong class="tip">Tip</strong><p class="simpara">A URL can be used as a
filename with this function if the <a href="filesystem.configuration.php#ini.allow-url-fopen" class="link">fopen wrappers</a> have been enabled.
See <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span> for more details on how to specify the
filename. See the <a href="wrappers.php" class="xref">Supported Protocols and Wrappers</a> for links to information
about what abilities the various wrappers have, notes on their usage,
and information on any predefined variables they may
provide.</p></div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.scandir-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.opendir.php" class="function" rel="rdfs-seeAlso">opendir()</a> - Open directory handle</span></li>
    <li><span class="function"><a href="function.readdir.php" class="function" rel="rdfs-seeAlso">readdir()</a> - Read entry from directory handle</span></li>
    <li><span class="function"><a href="function.glob.php" class="function" rel="rdfs-seeAlso">glob()</a> - Find pathnames matching a pattern</span></li>
    <li><span class="function"><a href="function.is-dir.php" class="function" rel="rdfs-seeAlso">is_dir()</a> - Tells whether the filename is a directory</span></li>
    <li><span class="function"><a href="function.sort.php" class="function" rel="rdfs-seeAlso">sort()</a> - Sort an array in ascending order</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dir/functions/scandir.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.scandir%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.scandir&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.scandir.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107215">  <div class="votes">
    <div id="Vu107215">
    <a href="/manual/vote-note.php?id=107215&amp;page=function.scandir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107215">
    <a href="/manual/vote-note.php?id=107215&amp;page=function.scandir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107215" title="84% like this...">
    865
    </div>
  </div>
  <a href="#107215" class="name">
  <strong class="user"><em>dwieeb at gmail dot com</em></strong></a><a class="genanchor" href="#107215"> &para;</a><div class="date" title="2012-01-22 08:06"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107215">
<div class="phpcode"><code><span class="html">Easy way to get rid of the dots that scandir() picks up in Linux environments:<br /><br /><span class="default">&lt;?php<br />$directory </span><span class="keyword">= </span><span class="string">'/path/to/my/directory'</span><span class="keyword">;<br /></span><span class="default">$scanned_directory </span><span class="keyword">= </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">scandir</span><span class="keyword">(</span><span class="default">$directory</span><span class="keyword">), array(</span><span class="string">'..'</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110570">  <div class="votes">
    <div id="Vu110570">
    <a href="/manual/vote-note.php?id=110570&amp;page=function.scandir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110570">
    <a href="/manual/vote-note.php?id=110570&amp;page=function.scandir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110570" title="71% like this...">
    178
    </div>
  </div>
  <a href="#110570" class="name">
  <strong class="user"><em>mmda dot nl at gmail dot com</em></strong></a><a class="genanchor" href="#110570"> &para;</a><div class="date" title="2012-11-08 12:43"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110570">
<div class="phpcode"><code><span class="html">Here is my 2 cents. I wanted to create an array of my directory structure recursively. I wanted to easely access data in a certain directory using foreach. I came up with the following:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">dirToArray</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">) {
<br />   
<br />   </span><span class="default">$result </span><span class="keyword">= array();
<br />
<br />   </span><span class="default">$cdir </span><span class="keyword">= </span><span class="default">scandir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);
<br />   foreach (</span><span class="default">$cdir </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)
<br />   {
<br />      if (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">,array(</span><span class="string">"."</span><span class="keyword">,</span><span class="string">".."</span><span class="keyword">)))
<br />      {
<br />         if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir </span><span class="keyword">. </span><span class="default">DIRECTORY_SEPARATOR </span><span class="keyword">. </span><span class="default">$value</span><span class="keyword">))
<br />         {
<br />            </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">] = </span><span class="default">dirToArray</span><span class="keyword">(</span><span class="default">$dir </span><span class="keyword">. </span><span class="default">DIRECTORY_SEPARATOR </span><span class="keyword">. </span><span class="default">$value</span><span class="keyword">);
<br />         }
<br />         else
<br />         {
<br />            </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">$value</span><span class="keyword">;
<br />         } 
<br />      }
<br />   }
<br />   
<br />   return </span><span class="default">$result</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Output
<br />Array
<br />(
<br />   [subdir1] =&gt; Array
<br />   (
<br />      [0] =&gt; file1.txt
<br />      [subsubdir] =&gt; Array
<br />      (
<br />         [0] =&gt; file2.txt
<br />         [1] =&gt; file3.txt
<br />      )
<br />   )
<br />   [subdir2] =&gt; Array
<br />   (
<br />    [0] =&gt; file4.txt
<br />   }
<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="122438">  <div class="votes">
    <div id="Vu122438">
    <a href="/manual/vote-note.php?id=122438&amp;page=function.scandir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122438">
    <a href="/manual/vote-note.php?id=122438&amp;page=function.scandir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122438" title="63% like this...">
    29
    </div>
  </div>
  <a href="#122438" class="name">
  <strong class="user"><em>info at remark dot no</em></strong></a><a class="genanchor" href="#122438"> &para;</a><div class="date" title="2018-02-25 07:08"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122438">
<div class="phpcode"><code><span class="html">Someone wrote that array_slice could be used to quickly remove directory entries "." and "..". However, "-" is a valid entry that would come before those, so array_slice would remove the wrong entries.</span></code></div>
  </div>
 </div>
  <div class="note" id="107117">  <div class="votes">
    <div id="Vu107117">
    <a href="/manual/vote-note.php?id=107117&amp;page=function.scandir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107117">
    <a href="/manual/vote-note.php?id=107117&amp;page=function.scandir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107117" title="61% like this...">
    23
    </div>
  </div>
  <a href="#107117" class="name">
  <strong class="user"><em>kodlee at kodleeshare dot net</em></strong></a><a class="genanchor" href="#107117"> &para;</a><div class="date" title="2012-01-08 03:51"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107117">
<div class="phpcode"><code><span class="html">I needed to find a way to get the full path of all files in the directory and all subdirectories of a directory.
<br />Here's my solution: Recursive functions!
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">find_all_files</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$root </span><span class="keyword">= </span><span class="default">scandir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);
<br />    foreach(</span><span class="default">$root </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">)
<br />    {
<br />        if(</span><span class="default">$value </span><span class="keyword">=== </span><span class="string">'.' </span><span class="keyword">|| </span><span class="default">$value </span><span class="keyword">=== </span><span class="string">'..'</span><span class="keyword">) {continue;}
<br />        if(</span><span class="default">is_file</span><span class="keyword">(</span><span class="string">"</span><span class="default">$dir</span><span class="string">/</span><span class="default">$value</span><span class="string">"</span><span class="keyword">)) {</span><span class="default">$result</span><span class="keyword">[]=</span><span class="string">"</span><span class="default">$dir</span><span class="string">/</span><span class="default">$value</span><span class="string">"</span><span class="keyword">;continue;}
<br />        foreach(</span><span class="default">find_all_files</span><span class="keyword">(</span><span class="string">"</span><span class="default">$dir</span><span class="string">/</span><span class="default">$value</span><span class="string">"</span><span class="keyword">) as </span><span class="default">$value</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$result</span><span class="keyword">[]=</span><span class="default">$value</span><span class="keyword">;
<br />        }
<br />    }
<br />    return </span><span class="default">$result</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114184">  <div class="votes">
    <div id="Vu114184">
    <a href="/manual/vote-note.php?id=114184&amp;page=function.scandir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114184">
    <a href="/manual/vote-note.php?id=114184&amp;page=function.scandir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114184" title="59% like this...">
    18
    </div>
  </div>
  <a href="#114184" class="name">
  <strong class="user"><em>gambit_642 AT hotmailDOTcom</em></strong></a><a class="genanchor" href="#114184"> &para;</a><div class="date" title="2014-01-22 02:04"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114184">
<div class="phpcode"><code><span class="html">Needed something that could return the contents of single or multiple directories, recursively or non-recursively,<br />for all files or specified file extensions that would be<br />accessible easily from any scope or script.<br /><br />And I wanted to allow overloading cause sometimes I'm too lazy to pass all params.<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">scanDir </span><span class="keyword">{<br />    static private </span><span class="default">$directories</span><span class="keyword">, </span><span class="default">$files</span><span class="keyword">, </span><span class="default">$ext_filter</span><span class="keyword">, </span><span class="default">$recursive</span><span class="keyword">;<br /><br /></span><span class="comment">// ----------------------------------------------------------------------------------------------<br />    // scan(dirpath::string|array, extensions::string|array, recursive::true|false)<br />    </span><span class="keyword">static public function </span><span class="default">scan</span><span class="keyword">(){<br />        </span><span class="comment">// Initialize defaults<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$recursive </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$directories </span><span class="keyword">= array();<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$files </span><span class="keyword">= array();<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$ext_filter </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /><br />        </span><span class="comment">// Check we have minimum parameters<br />        </span><span class="keyword">if(!</span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">()){<br />            die(</span><span class="string">"Must provide a path string or array of path strings"</span><span class="keyword">);<br />        }<br />        if(</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) != </span><span class="string">"string" </span><span class="keyword">&amp;&amp; </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) != </span><span class="string">"array"</span><span class="keyword">){<br />            die(</span><span class="string">"Must provide a path string or array of path strings"</span><span class="keyword">);<br />        }<br /><br />        </span><span class="comment">// Check if recursive scan | default action: no sub-directories<br />        </span><span class="keyword">if(isset(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) &amp;&amp; </span><span class="default">$args</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] == </span><span class="default">true</span><span class="keyword">){</span><span class="default">self</span><span class="keyword">::</span><span class="default">$recursive </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;}<br /><br />        </span><span class="comment">// Was a filter on file extensions included? | default action: return all file types<br />        </span><span class="keyword">if(isset(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])){<br />            if(</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) == </span><span class="string">"array"</span><span class="keyword">){</span><span class="default">self</span><span class="keyword">::</span><span class="default">$ext_filter </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'strtolower'</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);}<br />            else<br />            if(</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) == </span><span class="string">"string"</span><span class="keyword">){</span><span class="default">self</span><span class="keyword">::</span><span class="default">$ext_filter</span><span class="keyword">[] = </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);}<br />        }<br /><br />        </span><span class="comment">// Grab path(s)<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">verifyPaths</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />        return </span><span class="default">self</span><span class="keyword">::</span><span class="default">$files</span><span class="keyword">;<br />    }<br /><br />    static private function </span><span class="default">verifyPaths</span><span class="keyword">(</span><span class="default">$paths</span><span class="keyword">){<br />        </span><span class="default">$path_errors </span><span class="keyword">= array();<br />        if(</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$paths</span><span class="keyword">) == </span><span class="string">"string"</span><span class="keyword">){</span><span class="default">$paths </span><span class="keyword">= array(</span><span class="default">$paths</span><span class="keyword">);}<br /><br />        foreach(</span><span class="default">$paths </span><span class="keyword">as </span><span class="default">$path</span><span class="keyword">){<br />            if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)){<br />                </span><span class="default">self</span><span class="keyword">::</span><span class="default">$directories</span><span class="keyword">[] = </span><span class="default">$path</span><span class="keyword">;<br />                </span><span class="default">$dirContents </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">find_contents</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br />            } else {<br />                </span><span class="default">$path_errors</span><span class="keyword">[] = </span><span class="default">$path</span><span class="keyword">;<br />            }<br />        }<br /><br />        if(</span><span class="default">$path_errors</span><span class="keyword">){echo </span><span class="string">"The following directories do not exists&lt;br /&gt;"</span><span class="keyword">;die(</span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$path_errors</span><span class="keyword">));}<br />    }<br /><br />    </span><span class="comment">// This is how we scan directories<br />    </span><span class="keyword">static private function </span><span class="default">find_contents</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">){<br />        </span><span class="default">$result </span><span class="keyword">= array();<br />        </span><span class="default">$root </span><span class="keyword">= </span><span class="default">scandir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br />        foreach(</span><span class="default">$root </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">){<br />            if(</span><span class="default">$value </span><span class="keyword">=== </span><span class="string">'.' </span><span class="keyword">|| </span><span class="default">$value </span><span class="keyword">=== </span><span class="string">'..'</span><span class="keyword">) {continue;}<br />            if(</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">)){<br />                if(!</span><span class="default">self</span><span class="keyword">::</span><span class="default">$ext_filter </span><span class="keyword">|| </span><span class="default">in_array</span><span class="keyword">(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">, </span><span class="default">PATHINFO_EXTENSION</span><span class="keyword">)), </span><span class="default">self</span><span class="keyword">::</span><span class="default">$ext_filter</span><span class="keyword">)){<br />                    </span><span class="default">self</span><span class="keyword">::</span><span class="default">$files</span><span class="keyword">[] = </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">$dir</span><span class="keyword">.</span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">;<br />                }<br />                continue;<br />            }<br />            if(</span><span class="default">self</span><span class="keyword">::</span><span class="default">$recursive</span><span class="keyword">){<br />                foreach(</span><span class="default">self</span><span class="keyword">::</span><span class="default">find_contents</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">) as </span><span class="default">$value</span><span class="keyword">) {<br />                    </span><span class="default">self</span><span class="keyword">::</span><span class="default">$files</span><span class="keyword">[] = </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">$value</span><span class="keyword">;<br />                }<br />            }<br />        }<br />        </span><span class="comment">// Return required for recursive search<br />        </span><span class="keyword">return </span><span class="default">$result</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Usage:<br />scanDir::scan(path(s):string|array, [file_extensions:string|array], [subfolders?:true|false]);<br /><span class="default">&lt;?php<br /></span><span class="comment">//Scan a single directory for all files, no sub-directories<br /></span><span class="default">$files </span><span class="keyword">= </span><span class="default">scanDir</span><span class="keyword">::</span><span class="default">scan</span><span class="keyword">(</span><span class="string">'D:\Websites\temp'</span><span class="keyword">);<br /><br /></span><span class="comment">//Scan multiple directories for all files, no sub-dirs<br /></span><span class="default">$dirs </span><span class="keyword">= array(<br />    </span><span class="string">'D:\folder'</span><span class="keyword">;<br />    </span><span class="string">'D:\folder2'</span><span class="keyword">;<br />    </span><span class="string">'C:\Other'</span><span class="keyword">;<br />);<br /></span><span class="default">$files </span><span class="keyword">= </span><span class="default">scanDir</span><span class="keyword">::</span><span class="default">scan</span><span class="keyword">(</span><span class="default">$dirs</span><span class="keyword">);<br /><br /></span><span class="comment">// Scan multiple directories for files with provided file extension,<br />// no sub-dirs<br /></span><span class="default">$files </span><span class="keyword">= </span><span class="default">scanDir</span><span class="keyword">::</span><span class="default">scan</span><span class="keyword">(</span><span class="default">$dirs</span><span class="keyword">, </span><span class="string">"jpg"</span><span class="keyword">);<br /></span><span class="comment">//or with an array of extensions<br /></span><span class="default">$file_ext </span><span class="keyword">= array(<br />    </span><span class="string">"jpg"</span><span class="keyword">,<br />    </span><span class="string">"bmp"</span><span class="keyword">,<br />    </span><span class="string">"png"<br /></span><span class="keyword">);<br /></span><span class="default">$files </span><span class="keyword">= </span><span class="default">scanDir</span><span class="keyword">::</span><span class="default">scan</span><span class="keyword">(</span><span class="default">$dirs</span><span class="keyword">, </span><span class="default">$file_ext</span><span class="keyword">);<br /><br /></span><span class="comment">// Scan multiple directories for files with any extension,<br />// include files in recursive sub-folders<br /></span><span class="default">$files </span><span class="keyword">= </span><span class="default">scanDir</span><span class="keyword">::</span><span class="default">scan</span><span class="keyword">(</span><span class="default">$dirs</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="comment">// Multiple dirs, with specified extensions, include sub-dir files<br /></span><span class="default">$files </span><span class="keyword">= </span><span class="default">scanDir</span><span class="keyword">::</span><span class="default">scan</span><span class="keyword">(</span><span class="default">$dirs</span><span class="keyword">, </span><span class="default">$file_ext</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115871">  <div class="votes">
    <div id="Vu115871">
    <a href="/manual/vote-note.php?id=115871&amp;page=function.scandir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115871">
    <a href="/manual/vote-note.php?id=115871&amp;page=function.scandir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115871" title="56% like this...">
    48
    </div>
  </div>
  <a href="#115871" class="name">
  <strong class="user"><em>eep2004 at ukr dot net</em></strong></a><a class="genanchor" href="#115871"> &para;</a><div class="date" title="2014-10-07 09:28"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115871">
<div class="phpcode"><code><span class="html">Fastest way to get a list of files without dots.<br /><span class="default">&lt;?php<br />$files </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">scandir</span><span class="keyword">(</span><span class="string">'/path/to/directory/'</span><span class="keyword">), </span><span class="default">2</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123647">  <div class="votes">
    <div id="Vu123647">
    <a href="/manual/vote-note.php?id=123647&amp;page=function.scandir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123647">
    <a href="/manual/vote-note.php?id=123647&amp;page=function.scandir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123647" title="58% like this...">
    5
    </div>
  </div>
  <a href="#123647" class="name">
  <strong class="user"><em>artmanniako at gmail dot com</em></strong></a><a class="genanchor" href="#123647"> &para;</a><div class="date" title="2019-03-02 11:28"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123647">
<div class="phpcode"><code><span class="html">How i solved problem with '.' and '..'<br /><br />$x = scandir__DIR__; //any directory<br />foreach ($x as $key =&gt; $value) {<br />        if ('.' !== $value &amp;&amp; '..' !== $value){<br />               echo $value;<br />   } <br />}<br />Simple and working</span></code></div>
  </div>
 </div>
  <div class="note" id="126663">  <div class="votes">
    <div id="Vu126663">
    <a href="/manual/vote-note.php?id=126663&amp;page=function.scandir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126663">
    <a href="/manual/vote-note.php?id=126663&amp;page=function.scandir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126663" title="56% like this...">
    5
    </div>
  </div>
  <a href="#126663" class="name">
  <strong class="user"><em>coolbikram0 at gmail dot com</em></strong></a><a class="genanchor" href="#126663"> &para;</a><div class="date" title="2021-12-04 05:53"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126663">
<div class="phpcode"><code><span class="html">A simple recursive function to list all files and subdirectories in a directory:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">listAllFiles</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">) {<br />  </span><span class="default">$array </span><span class="keyword">= </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">scandir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">), array(</span><span class="string">'.'</span><span class="keyword">, </span><span class="string">'..'</span><span class="keyword">));<br />  <br />  foreach (</span><span class="default">$array </span><span class="keyword">as &amp;</span><span class="default">$item</span><span class="keyword">) {<br />    </span><span class="default">$item </span><span class="keyword">= </span><span class="default">$dir </span><span class="keyword">. </span><span class="default">$item</span><span class="keyword">;<br />  }<br />  unset(</span><span class="default">$item</span><span class="keyword">);<br />  foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$item</span><span class="keyword">) {<br />    if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">)) {<br />     </span><span class="default">$array </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">listAllFiles</span><span class="keyword">(</span><span class="default">$item </span><span class="keyword">. </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">));<br />    }<br />  }<br />  return </span><span class="default">$array</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52755">  <div class="votes">
    <div id="Vu52755">
    <a href="/manual/vote-note.php?id=52755&amp;page=function.scandir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52755">
    <a href="/manual/vote-note.php?id=52755&amp;page=function.scandir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52755" title="56% like this...">
    3
    </div>
  </div>
  <a href="#52755" class="name">
  <strong class="user"><em>Pawel Dlugosz</em></strong></a><a class="genanchor" href="#52755"> &para;</a><div class="date" title="2005-05-11 11:18"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52755">
<div class="phpcode"><code><span class="html">For directory containing files like (for example) -.jpg the results of scandir are a little "weird" ;)<br /><br /><span class="default">&lt;?php<br />   <br />   $dir </span><span class="keyword">= </span><span class="string">'/somedir'</span><span class="keyword">;<br />   </span><span class="default">$files </span><span class="keyword">= </span><span class="default">scandir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br />   </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$files</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Array<br />(<br />    [0] =&gt; -.jpg<br />    [1] =&gt; .<br />    [2] =&gt; ..<br />    [3] =&gt; foo.txt<br />    [4] =&gt; somedir<br />)<br /><br />Beware - sorting is in ASCII order :)</span></code></div>
  </div>
 </div>
  <div class="note" id="46872">  <div class="votes">
    <div id="Vu46872">
    <a href="/manual/vote-note.php?id=46872&amp;page=function.scandir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46872">
    <a href="/manual/vote-note.php?id=46872&amp;page=function.scandir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46872" title="55% like this...">
    3
    </div>
  </div>
  <a href="#46872" class="name">
  <strong class="user"><em>Stan P. van de Burgt</em></strong></a><a class="genanchor" href="#46872"> &para;</a><div class="date" title="2004-10-26 09:05"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46872">
<div class="phpcode"><code><span class="html">scandir() with regexp matching on file name and sorting options based on stat().
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">myscandir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="default">$exp</span><span class="keyword">, </span><span class="default">$how</span><span class="keyword">=</span><span class="string">'name'</span><span class="keyword">, </span><span class="default">$desc</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$r </span><span class="keyword">= array();
<br />    </span><span class="default">$dh </span><span class="keyword">= @</span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);
<br />    if (</span><span class="default">$dh</span><span class="keyword">) {
<br />        while ((</span><span class="default">$fname </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$dh</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {
<br />            if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$exp</span><span class="keyword">, </span><span class="default">$fname</span><span class="keyword">)) {
<br />                </span><span class="default">$stat </span><span class="keyword">= </span><span class="default">stat</span><span class="keyword">(</span><span class="string">"</span><span class="default">$dir</span><span class="string">/</span><span class="default">$fname</span><span class="string">"</span><span class="keyword">);
<br />                </span><span class="default">$r</span><span class="keyword">[</span><span class="default">$fname</span><span class="keyword">] = (</span><span class="default">$how </span><span class="keyword">== </span><span class="string">'name'</span><span class="keyword">)? </span><span class="default">$fname</span><span class="keyword">: </span><span class="default">$stat</span><span class="keyword">[</span><span class="default">$how</span><span class="keyword">];
<br />            }
<br />        }
<br />        </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$dh</span><span class="keyword">);
<br />        if (</span><span class="default">$desc</span><span class="keyword">) {
<br />            </span><span class="default">arsort</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">);
<br />        }
<br />        else {
<br />            </span><span class="default">asort</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">);
<br />        }
<br />    }
<br />    return(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">));
<br />}
<br />
<br /></span><span class="default">$r </span><span class="keyword">= </span><span class="default">myscandir</span><span class="keyword">(</span><span class="string">'./book/'</span><span class="keyword">, </span><span class="string">'/^article[0-9]{4}\.txt$/i'</span><span class="keyword">, </span><span class="string">'ctime'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />files can be sorted on name and stat() attributes, ascending and descending:
<br />
<br />name    file name
<br />dev     device number
<br />ino     inode number
<br />mode    inode protection mode
<br />nlink   number of links
<br />uid     userid of owner
<br />gid     groupid of owner
<br />rdev    device type, if inode device *
<br />size    size in bytes
<br />atime   time of last access (Unix timestamp)
<br />mtime   time of last modification (Unix timestamp)
<br />ctime   time of last inode change (Unix timestamp)
<br />blksize blocksize of filesystem IO *
<br />blocks  number of blocks allocated</span></code></div>
  </div>
 </div>
  <div class="note" id="119422">  <div class="votes">
    <div id="Vu119422">
    <a href="/manual/vote-note.php?id=119422&amp;page=function.scandir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119422">
    <a href="/manual/vote-note.php?id=119422&amp;page=function.scandir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119422" title="52% like this...">
    1
    </div>
  </div>
  <a href="#119422" class="name">
  <strong class="user"><em>simon dot riget at gmail dot com</em></strong></a><a class="genanchor" href="#119422"> &para;</a><div class="date" title="2016-06-02 07:28"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119422">
<div class="phpcode"><code><span class="html">This is a simple and versatile function that returns an array tree of files, matching wildcards:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// List files in tree, matching wildcards * and ?<br /></span><span class="keyword">function </span><span class="default">tree</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">){<br />  static </span><span class="default">$match</span><span class="keyword">;<br /><br />  </span><span class="comment">// Find the real directory part of the path, and set the match parameter<br />  </span><span class="default">$last</span><span class="keyword">=</span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,</span><span class="string">"/"</span><span class="keyword">);<br />  if(!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)){<br />    </span><span class="default">$match</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,</span><span class="default">$last</span><span class="keyword">);<br />    while(!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$last</span><span class="keyword">)) &amp;&amp; </span><span class="default">$last</span><span class="keyword">!==</span><span class="default">false</span><span class="keyword">)<br />      </span><span class="default">$last</span><span class="keyword">=</span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,</span><span class="string">"/"</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">);<br />  }<br />  if(empty(</span><span class="default">$match</span><span class="keyword">)) </span><span class="default">$match</span><span class="keyword">=</span><span class="string">"/*"</span><span class="keyword">;<br />  if(!</span><span class="default">$path</span><span class="keyword">=</span><span class="default">realpath</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)) return;<br /><br />  </span><span class="comment">// List files<br />  </span><span class="keyword">foreach(</span><span class="default">glob</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">.</span><span class="default">$match</span><span class="keyword">) as </span><span class="default">$file</span><span class="keyword">){<br />    </span><span class="default">$list</span><span class="keyword">[]=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">,</span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">,</span><span class="string">"/"</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">);<br />  }  <br /><br />  </span><span class="comment">// Process sub directories<br />  </span><span class="keyword">foreach(</span><span class="default">glob</span><span class="keyword">(</span><span class="string">"</span><span class="default">$path</span><span class="string">/*"</span><span class="keyword">, </span><span class="default">GLOB_ONLYDIR</span><span class="keyword">) as </span><span class="default">$dir</span><span class="keyword">){<br />    </span><span class="default">$list</span><span class="keyword">[</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">,</span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">,</span><span class="string">"/"</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">)]=</span><span class="default">tree</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br />  }<br />  <br />  return @</span><span class="default">$list</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108229">  <div class="votes">
    <div id="Vu108229">
    <a href="/manual/vote-note.php?id=108229&amp;page=function.scandir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108229">
    <a href="/manual/vote-note.php?id=108229&amp;page=function.scandir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108229" title="52% like this...">
    1
    </div>
  </div>
  <a href="#108229" class="name">
  <strong class="user"><em>fazle dot elahee at gmail dot com</em></strong></a><a class="genanchor" href="#108229"> &para;</a><div class="date" title="2012-04-09 06:52"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108229">
<div class="phpcode"><code><span class="html">/**<br /> * This function will scan all files recursively in the sub-folder and folder.<br /> *<br /> * @author Fazle Elahee<br /> *<br /> */<br /><br />function scanFileNameRecursivly($path = '', &amp;$name = array() )<br />{<br />  $path = $path == ''? dirname(__FILE__) : $path;<br />  $lists = @scandir($path);<br />  <br />  if(!empty($lists))<br />  {<br />      foreach($lists as $f)<br />      { <br />    <br />      if(is_dir($path.DIRECTORY_SEPARATOR.$f) &amp;&amp; $f != ".." &amp;&amp; $f != ".")<br />      {<br />          scanFileNameRecursivly($path.DIRECTORY_SEPARATOR.$f, &amp;$name); <br />      }<br />      else<br />      {<br />          $name[] = $path.DIRECTORY_SEPARATOR.$f;<br />      }<br />      }<br />  }<br />  return $name;<br />}<br /><br />$path = "/var/www/SimplejQueryDropdowns";<br />$file_names = scanFileNameRecursivly($path);<br /><br />echo "&lt;pre&gt;";<br />var_dump($file_names);<br />echo "&lt;/pre&gt;";</span></code></div>
  </div>
 </div>
  <div class="note" id="50623">  <div class="votes">
    <div id="Vu50623">
    <a href="/manual/vote-note.php?id=50623&amp;page=function.scandir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50623">
    <a href="/manual/vote-note.php?id=50623&amp;page=function.scandir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50623" title="53% like this...">
    1
    </div>
  </div>
  <a href="#50623" class="name">
  <strong class="user"><em>csaba at alum dot mit dot edu</em></strong></a><a class="genanchor" href="#50623"> &para;</a><div class="date" title="2005-03-04 03:19"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50623">
<div class="phpcode"><code><span class="html">Scandir on steroids:
<br />For when you want to filter your file list, or only want to list so many levels of subdirectories...
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">dirList</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">, </span><span class="default">$types</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">, </span><span class="default">$levels</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">, </span><span class="default">$aFilter</span><span class="keyword">=array()) {
<br /></span><span class="comment">//  returns an array of the specified files/directories
<br />//  start search in $path (defaults to current working directory)
<br />//  return $types:  2 =&gt; files; 1 =&gt; directories; 3 =&gt; both;
<br />//  $levels: 1 =&gt; look in the $path only; 2 =&gt; $path and all children;
<br />//          3 =&gt; $path, children, grandchildren; 0 =&gt; $path and all subdirectories;
<br />//          less than 0 =&gt; complement of -$levels, OR everything starting -$levels down
<br />//                e.g. -1 =&gt; everthing except $path; -2 =&gt; all descendants except $path + children
<br />//  Remaining argument(s) is(are) a filter array(list) of regular expressions which operate on the full path.
<br />//    First character (before the '/' of the regExp) '-' =&gt; NOT.
<br />//    First character (after a possible '-') 'd' =&gt; apply to directory name
<br />//    The filters may be passed in as an array of strings or as a list of strings
<br />//  Note that output directories are prefixed with a '*' (done in the line above the return)
<br />   </span><span class="default">$dS </span><span class="keyword">= </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">;
<br />   if (!(</span><span class="default">$path </span><span class="keyword">= </span><span class="default">realpath</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">?</span><span class="default">$path</span><span class="keyword">:</span><span class="default">getcwd</span><span class="keyword">()))) return array();    </span><span class="comment">// bad path
<br />   // next line rids terminating \ on drives (works since c: == c:\ on PHP).  OK in *nix?
<br />   </span><span class="keyword">if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">)==</span><span class="default">$dS</span><span class="keyword">) </span><span class="default">$path </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">);
<br />   if (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$types</span><span class="keyword">)) </span><span class="default">$types </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;
<br />   if (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$levels</span><span class="keyword">)) </span><span class="default">$levels </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;
<br />   if (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$aFilter</span><span class="keyword">)) </span><span class="default">$aFilter</span><span class="keyword">=array();
<br />
<br />   </span><span class="comment">// last argument may be passed as a list or as an array
<br />   </span><span class="default">$aFilter </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">func_get_args</span><span class="keyword">(),</span><span class="default">3</span><span class="keyword">);
<br />   if (</span><span class="default">$aFilter </span><span class="keyword">&amp;&amp; </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$aFilter</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])==</span><span class="string">"array"</span><span class="keyword">) </span><span class="default">$aFilter</span><span class="keyword">=</span><span class="default">$aFilter</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />   </span><span class="default">$adFilter </span><span class="keyword">= array();
<br />   </span><span class="comment">// now move directory filters to separate array:
<br />   </span><span class="keyword">foreach (</span><span class="default">$aFilter </span><span class="keyword">as </span><span class="default">$i</span><span class="keyword">=&gt;</span><span class="default">$filter</span><span class="keyword">)                  </span><span class="comment">// for each directory filter...
<br />     </span><span class="keyword">if ((</span><span class="default">$pos</span><span class="keyword">=</span><span class="default">stripos</span><span class="keyword">(</span><span class="string">" </span><span class="default">$filter</span><span class="string">"</span><span class="keyword">,</span><span class="string">"d"</span><span class="keyword">)) &amp;&amp; </span><span class="default">$pos</span><span class="keyword">&lt;</span><span class="default">3</span><span class="keyword">) {  </span><span class="comment">// next line eliminates the 'd'
<br />         </span><span class="default">$adFilter</span><span class="keyword">[] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$filter</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$pos</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">) . </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$filter</span><span class="keyword">,</span><span class="default">$pos</span><span class="keyword">);
<br />         unset(</span><span class="default">$aFilter</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]); }
<br />   </span><span class="default">$aFilter </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$aFilter</span><span class="keyword">);    </span><span class="comment">// reset indeces
<br />
<br />   </span><span class="default">$aRes </span><span class="keyword">= array();                    </span><span class="comment">// results, $aAcc is an Accumulator
<br />   </span><span class="default">$aDir </span><span class="keyword">= array(</span><span class="default">$path</span><span class="keyword">);    </span><span class="comment">// dirs to check
<br />   </span><span class="keyword">for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">$levels</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">?</span><span class="default">$levels</span><span class="keyword">++:-</span><span class="default">1</span><span class="keyword">;(</span><span class="default">$aAcc</span><span class="keyword">=array())||</span><span class="default">$i</span><span class="keyword">--&amp;&amp;</span><span class="default">$aDir</span><span class="keyword">;</span><span class="default">$aDir</span><span class="keyword">=</span><span class="default">$aAcc</span><span class="keyword">)
<br />     while (</span><span class="default">$dir </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$aDir</span><span class="keyword">))
<br />         foreach (</span><span class="default">scandir </span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">) as </span><span class="default">$fileOrDir</span><span class="keyword">)
<br />           if (</span><span class="default">$fileOrDir</span><span class="keyword">!=</span><span class="string">"." </span><span class="keyword">&amp;&amp; </span><span class="default">$fileOrDir</span><span class="keyword">!=</span><span class="string">".."</span><span class="keyword">) {
<br />               if (</span><span class="default">$dirP </span><span class="keyword">= </span><span class="default">is_dir </span><span class="keyword">(</span><span class="default">$rp</span><span class="keyword">=</span><span class="string">"</span><span class="default">$dir$dS$fileOrDir</span><span class="string">"</span><span class="keyword">))
<br />                 if (</span><span class="default">pathFilter</span><span class="keyword">(</span><span class="string">"</span><span class="default">$rp$dS</span><span class="string">"</span><span class="keyword">, </span><span class="default">$adFilter</span><span class="keyword">))
<br />                     </span><span class="default">$aAcc</span><span class="keyword">[] = </span><span class="default">$rp</span><span class="keyword">;
<br />               if (</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$levels</span><span class="keyword">-</span><span class="default">1 </span><span class="keyword">&amp;&amp; (</span><span class="default">$types </span><span class="keyword">&amp; (</span><span class="default">2</span><span class="keyword">-</span><span class="default">$dirP</span><span class="keyword">)))
<br />                 if (</span><span class="default">pathFilter</span><span class="keyword">(</span><span class="default">$rp</span><span class="keyword">, </span><span class="default">$aFilter</span><span class="keyword">))
<br />                     </span><span class="default">$aRes</span><span class="keyword">[] = (</span><span class="default">$dirP</span><span class="keyword">?</span><span class="string">"*"</span><span class="keyword">:</span><span class="string">""</span><span class="keyword">) . </span><span class="default">$rp</span><span class="keyword">; }
<br />   return </span><span class="default">$aRes</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />example usage:
<br /><span class="default">&lt;?php
<br />define </span><span class="keyword">(</span><span class="string">"_"</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">);
<br /></span><span class="comment">// this will find all non .jpg, non .Thumbs.db files under c:\Photo
<br /></span><span class="default">$aFiles </span><span class="keyword">= </span><span class="default">dirList</span><span class="keyword">(</span><span class="string">'c:\Photo'</span><span class="keyword">, </span><span class="default">_</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="string">'-/\.jpg$/i'</span><span class="keyword">, </span><span class="string">'-/\\\\Thumbs.db$/'</span><span class="keyword">);
<br /></span><span class="default">$aFiles </span><span class="keyword">= </span><span class="default">dirList</span><span class="keyword">();    </span><span class="comment">// find the files in the current directory
<br />// next lines will find .jpg files in non Photo(s) subdirectories, excluding Temporary Internet Files
<br /></span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">60</span><span class="keyword">);        </span><span class="comment">// iterating from the top level can take a while
<br /></span><span class="default">$aFiles </span><span class="keyword">= </span><span class="default">dirList</span><span class="keyword">(</span><span class="string">"c:\\"</span><span class="keyword">, </span><span class="default">_</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="string">'/\.jpg$/i'</span><span class="keyword">, </span><span class="string">'-d/\\\\Photos?$/i'</span><span class="keyword">, </span><span class="string">'-d/Temporary Internet/i'</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Note that this function will consume a lot of time if scanning large
<br />directory structures (which is the reason for the '[-]d/.../' filters).
<br />
<br />Csaba Gabor from Vienna</span></code></div>
  </div>
 </div>
  <div class="note" id="80057">  <div class="votes">
    <div id="Vu80057">
    <a href="/manual/vote-note.php?id=80057&amp;page=function.scandir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80057">
    <a href="/manual/vote-note.php?id=80057&amp;page=function.scandir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80057" title="52% like this...">
    1
    </div>
  </div>
  <a href="#80057" class="name">
  <strong class="user"><em>fatpratmatt dot  at  dot gmail dot com</em></strong></a><a class="genanchor" href="#80057"> &para;</a><div class="date" title="2007-12-27 04:28"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80057">
<div class="phpcode"><code><span class="html">This function generates a list of all files in the chosen directory and all subdirectories, throws them into a NON-multidimentional array and returns them.<br /><br />Most of the recursive functions on this page only return a multi-dimensional array.<br /><br />This is actually a modification of some one else's function (thanks mail at bartrail dot de ;])<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">scanDirectories</span><span class="keyword">(</span><span class="default">$rootDir</span><span class="keyword">, </span><span class="default">$allData</span><span class="keyword">=array()) {<br />    </span><span class="comment">// set filenames invisible if you want<br />    </span><span class="default">$invisibleFileNames </span><span class="keyword">= array(</span><span class="string">"."</span><span class="keyword">, </span><span class="string">".."</span><span class="keyword">, </span><span class="string">".htaccess"</span><span class="keyword">, </span><span class="string">".htpasswd"</span><span class="keyword">);<br />    </span><span class="comment">// run through content of root directory<br />    </span><span class="default">$dirContent </span><span class="keyword">= </span><span class="default">scandir</span><span class="keyword">(</span><span class="default">$rootDir</span><span class="keyword">);<br />    foreach(</span><span class="default">$dirContent </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$content</span><span class="keyword">) {<br />        </span><span class="comment">// filter all files not accessible<br />        </span><span class="default">$path </span><span class="keyword">= </span><span class="default">$rootDir</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$content</span><span class="keyword">;<br />        if(!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">, </span><span class="default">$invisibleFileNames</span><span class="keyword">)) {<br />            </span><span class="comment">// if content is file &amp; readable, add to array<br />            </span><span class="keyword">if(</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">) &amp;&amp; </span><span class="default">is_readable</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)) {<br />                </span><span class="comment">// save file name with path<br />                </span><span class="default">$allData</span><span class="keyword">[] = </span><span class="default">$path</span><span class="keyword">;<br />            </span><span class="comment">// if content is a directory and readable, add path and name<br />            </span><span class="keyword">}elseif(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">) &amp;&amp; </span><span class="default">is_readable</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)) {<br />                </span><span class="comment">// recursive callback to open new directory<br />                </span><span class="default">$allData </span><span class="keyword">= </span><span class="default">scanDirectories</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">$allData</span><span class="keyword">);<br />            }<br />        }<br />    }<br />    return </span><span class="default">$allData</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example output:<br /><br />print_r(scanDirectories("www"));<br />---<br />Array<br />(<br />    [0] =&gt; www/index.php<br />    [1] =&gt; www/admin.php<br />    [3] =&gt; www/css/css.css<br />    [4] =&gt; www/articles/2007/article1.txt<br />    [4] =&gt; www/articles/2006/article1.txt<br />    [8] =&gt; www/img/img1.png<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="121183">  <div class="votes">
    <div id="Vu121183">
    <a href="/manual/vote-note.php?id=121183&amp;page=function.scandir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121183">
    <a href="/manual/vote-note.php?id=121183&amp;page=function.scandir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121183" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121183" class="name">
  <strong class="user"><em>SPekary</em></strong></a><a class="genanchor" href="#121183"> &para;</a><div class="date" title="2017-06-03 06:30"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121183">
<div class="phpcode"><code><span class="html">Unless you specify no sorting, file names are sorted in ASCII alphabetic order, meaning numbers first, then uppercase, then lowercase letters, even on operating systems whose file system ignores the case of file names when it does its own sorting.<br /><br />For example, on Mac OS, the following files will appear in this order in the Finder, when your disk is formated using the standard file system:<br />1file.php<br />a.inc<br />B.txt<br />c.txt<br /><br />However, scandir will produce an array in the following order:<br />1file.php<br />B.txt<br />a.inc<br />c.txt</span></code></div>
  </div>
 </div>
  <div class="note" id="109140">  <div class="votes">
    <div id="Vu109140">
    <a href="/manual/vote-note.php?id=109140&amp;page=function.scandir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109140">
    <a href="/manual/vote-note.php?id=109140&amp;page=function.scandir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109140" title="50% like this...">
    1
    </div>
  </div>
  <a href="#109140" class="name">
  <strong class="user"><em>carneiro at isharelife dot com dot br</em></strong></a><a class="genanchor" href="#109140"> &para;</a><div class="date" title="2012-06-22 06:47"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109140">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/**<br />     * Get an array that represents directory tree<br />     * @param string $directory     Directory path<br />     * @param bool $recursive         Include sub directories<br />     * @param bool $listDirs         Include directories on listing<br />     * @param bool $listFiles         Include files on listing<br />     * @param regex $exclude         Exclude paths that matches this regex<br />     */<br />    </span><span class="keyword">function </span><span class="default">directoryToArray</span><span class="keyword">(</span><span class="default">$directory</span><span class="keyword">, </span><span class="default">$recursive </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">, </span><span class="default">$listDirs </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">, </span><span class="default">$listFiles </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">, </span><span class="default">$exclude </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">) {<br />        </span><span class="default">$arrayItems </span><span class="keyword">= array();<br />        </span><span class="default">$skipByExclude </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$directory</span><span class="keyword">);<br />        if (</span><span class="default">$handle</span><span class="keyword">) {<br />            while (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">))) {<br />            </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/(^(([\.]){1,2})$|(\.(svn|git|md))|(Thumbs\.db|\.DS_STORE))$/iu"</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$skip</span><span class="keyword">);<br />            if(</span><span class="default">$exclude</span><span class="keyword">){<br />                </span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$exclude</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$skipByExclude</span><span class="keyword">);<br />            }<br />            if (!</span><span class="default">$skip </span><span class="keyword">&amp;&amp; !</span><span class="default">$skipByExclude</span><span class="keyword">) {<br />                if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$directory</span><span class="keyword">. </span><span class="default">DIRECTORY_SEPARATOR </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">)) {<br />                    if(</span><span class="default">$recursive</span><span class="keyword">) {<br />                        </span><span class="default">$arrayItems </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$arrayItems</span><span class="keyword">, </span><span class="default">directoryToArray</span><span class="keyword">(</span><span class="default">$directory</span><span class="keyword">. </span><span class="default">DIRECTORY_SEPARATOR </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$recursive</span><span class="keyword">, </span><span class="default">$listDirs</span><span class="keyword">, </span><span class="default">$listFiles</span><span class="keyword">, </span><span class="default">$exclude</span><span class="keyword">));<br />                    }<br />                    if(</span><span class="default">$listDirs</span><span class="keyword">){<br />                        </span><span class="default">$file </span><span class="keyword">= </span><span class="default">$directory </span><span class="keyword">. </span><span class="default">DIRECTORY_SEPARATOR </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">;<br />                        </span><span class="default">$arrayItems</span><span class="keyword">[] = </span><span class="default">$file</span><span class="keyword">;<br />                    }<br />                } else {<br />                    if(</span><span class="default">$listFiles</span><span class="keyword">){<br />                        </span><span class="default">$file </span><span class="keyword">= </span><span class="default">$directory </span><span class="keyword">. </span><span class="default">DIRECTORY_SEPARATOR </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">;<br />                        </span><span class="default">$arrayItems</span><span class="keyword">[] = </span><span class="default">$file</span><span class="keyword">;<br />                    }<br />                }<br />            }<br />        }<br />        </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br />        }<br />        return </span><span class="default">$arrayItems</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.scandir&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.scandir.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.dir.php">Directory Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.chdir.php" title="chdir">chdir</a>
                        </li>
                                                <li class="">
                            <a href="function.chroot.php" title="chroot">chroot</a>
                        </li>
                                                <li class="">
                            <a href="function.closedir.php" title="closedir">closedir</a>
                        </li>
                                                <li class="">
                            <a href="function.dir.php" title="dir">dir</a>
                        </li>
                                                <li class="">
                            <a href="function.getcwd.php" title="getcwd">getcwd</a>
                        </li>
                                                <li class="">
                            <a href="function.opendir.php" title="opendir">opendir</a>
                        </li>
                                                <li class="">
                            <a href="function.readdir.php" title="readdir">readdir</a>
                        </li>
                                                <li class="">
                            <a href="function.rewinddir.php" title="rewinddir">rewinddir</a>
                        </li>
                                                <li class="current">
                            <a href="function.scandir.php" title="scandir">scandir</a>
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
