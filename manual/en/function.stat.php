<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: stat - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.stat.php">
 <link rel="shorturl" href="https://www.php.net/stat">
 <link rel="alternate" href="https://www.php.net/stat" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.set-file-buffer.php">
 <link rel="next" href="https://www.php.net/manual/en/function.symlink.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.stat.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.stat.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.stat.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.stat.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.stat.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.stat.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.stat.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.stat.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.stat.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.stat.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.stat.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gives information about a file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: stat - Manual" />
<meta name="twitter:description" content="Gives information about a file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: stat - Manual" />
<meta itemprop="description" content="Gives information about a file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gives information about a file" />

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
        <a href="function.symlink.php">
          symlink &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.set-file-buffer.php">
          &laquo; set_file_buffer        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.file.php'>File System Related Extensions</a></li>      <li><a href='book.filesystem.php'>Filesystem</a></li>      <li><a href='ref.filesystem.php'>Filesystem Functions</a></li>      </ul>
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
            <option value='en/function.stat.php' selected="selected">English</option>
            <option value='de/function.stat.php'>German</option>
            <option value='es/function.stat.php'>Spanish</option>
            <option value='fr/function.stat.php'>French</option>
            <option value='it/function.stat.php'>Italian</option>
            <option value='ja/function.stat.php'>Japanese</option>
            <option value='pt_BR/function.stat.php'>Brazilian Portuguese</option>
            <option value='ru/function.stat.php'>Russian</option>
            <option value='tr/function.stat.php'>Turkish</option>
            <option value='uk/function.stat.php'>Ukrainian</option>
            <option value='zh/function.stat.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.stat" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">stat</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">stat</span> &mdash; <span class="dc-title">Gives information about a file</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.stat-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>stat</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Gathers the statistics of the file named by
   <code class="parameter">filename</code>.  If <code class="parameter">filename</code> is a
   symbolic link, statistics are from the file itself, not the symlink.
   Prior to PHP 7.4.0, on Windows <abbr class="abbrev">NTS</abbr> builds the <code class="literal">size</code>,
   <code class="literal">atime</code>, <code class="literal">mtime</code> and <code class="literal">ctime</code>
   statistics have been from the symlink, in this case.
  </p>
  <p class="para">
   <span class="function"><a href="function.lstat.php" class="function">lstat()</a></span> is identical to <span class="function"><strong>stat()</strong></span>
   except it would instead be based off the symlinks status.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.stat-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       Path to the file.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.stat-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <table class="doctable table">
    <caption><strong><span class="function"><strong>stat()</strong></span> and <span class="function"><a href="function.fstat.php" class="function">fstat()</a></span> result
     format</strong></caption>
    
     <thead>
      <tr>
       <th>Numeric</th>
       <th>Associative</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>0</td>
       <td>dev</td>
       <td>device number ***</td>
      </tr>

      <tr>
       <td>1</td>
       <td>ino</td>
       <td>inode number ****</td>
      </tr>

      <tr>
       <td>2</td>
       <td>mode</td>
       <td>inode protection mode *****</td>
      </tr>

      <tr>
       <td>3</td>
       <td>nlink</td>
       <td>number of links</td>
      </tr>

      <tr>
       <td>4</td>
       <td>uid</td>
       <td>userid of owner *</td>
      </tr>

      <tr>
       <td>5</td>
       <td>gid</td>
       <td>groupid of owner *</td>
      </tr>

      <tr>
       <td>6</td>
       <td>rdev</td>
       <td>device type, if inode device</td>
      </tr>

      <tr>
       <td>7</td>
       <td>size</td>
       <td>size in bytes</td>
      </tr>

      <tr>
       <td>8</td>
       <td>atime</td>
       <td>time of last access (Unix timestamp)</td>
      </tr>

      <tr>
       <td>9</td>
       <td>mtime</td>
       <td>time of last modification (Unix timestamp)</td>
      </tr>

      <tr>
       <td>10</td>
       <td>ctime</td>
       <td>time of last inode change (Unix timestamp)</td>
      </tr>

      <tr>
       <td>11</td>
       <td>blksize</td>
       <td>blocksize of filesystem IO **</td>
      </tr>

      <tr>
       <td>12</td>
       <td>blocks</td>
       <td>number of 512-byte blocks allocated **</td>
      </tr>

     </tbody>
    
   </table>

  </p>
  <p class="para">
   * On Windows this will always be <code class="literal">0</code>.
  </p>
  <p class="para">
   ** Only valid on systems supporting the st_blksize type - other
   systems (e.g. Windows) return <code class="literal">-1</code>.
  </p>
  <p class="para">
   *** On Windows, as of PHP 7.4.0, this is the serial number of the volume that contains the file,
   which is a 64-bit <em>unsigned</em> integer, so may overflow.
   Previously, it was the numeric representation of the drive letter (e.g. <code class="literal">2</code>
   for <code class="literal">C:</code>) for <span class="function"><strong>stat()</strong></span>, and <code class="literal">0</code> for
   <span class="function"><a href="function.lstat.php" class="function">lstat()</a></span>.
  </p>
  <p class="para">
   **** On Windows, as of PHP 7.4.0, this is the identifier associated with the file,
   which is a 64-bit <em>unsigned</em> integer, so may overflow.
   Previously, it was always <code class="literal">0</code>.
  </p>
  <p class="para">
   ***** On Windows, the writable permission bit is set according to the read-only
   file attribute, and the same value is reported for all users, group and owner.
   The ACL is not taken into account, contrary to <span class="function"><a href="function.is-writable.php" class="function">is_writable()</a></span>.
  </p>
  <p class="para">
  The value of <code class="literal">mode</code> contains information read by several functions. 
  When written in octal, starting from the right, the first three digits are returned by
  <span class="function"><a href="function.chmod.php" class="function">chmod()</a></span>. The next digit is ignored by PHP. The next two digits indicate
  the file type:
   <table class="doctable table">
    <caption><strong><code class="literal">mode</code> file types</strong></caption>
    
     <thead>
      <tr>
       <th><code class="literal">mode</code> in octal</th>
       <th>Meaning</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td><code class="literal">0140000</code></td>
       <td>socket</td>
      </tr>

      <tr>
       <td><code class="literal">0120000</code></td>
       <td>link</td>
      </tr>

      <tr>
       <td><code class="literal">0100000</code></td>
       <td>regular file</td>
      </tr>

      <tr>
       <td><code class="literal">0060000</code></td>
       <td>block device</td>
      </tr>

      <tr>
       <td><code class="literal">0040000</code></td>
       <td>directory</td>
      </tr>

      <tr>
       <td><code class="literal">0020000</code></td>
       <td>character device</td>
      </tr>

      <tr>
       <td><code class="literal">0010000</code></td>
       <td>fifo</td>
      </tr>

     </tbody>
    
   </table>

   So for example a regular file could be <code class="literal">0100644</code> and a directory could be
   <code class="literal">0040755</code>.
  </p>
  <p class="para">
   In case of error, <span class="function"><strong>stat()</strong></span> returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">
    Because PHP&#039;s integer type is signed and many platforms use 32bit integers,
    some filesystem functions may return unexpected results for files which
    are larger than 2GB.
   </span></p></blockquote>
 </div>


 <div class="refsect1 errors" id="refsect1-function.stat-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Upon failure, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.stat-changelog">
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
      <td>7.4.0</td>
      <td>
       On Windows, the device number is now the serial number of the volume that
       contains the file, and the inode number is the identifier associated with the file.
      </td>
     </tr>

     <tr>
      <td>7.4.0</td>
      <td>
       The <code class="literal">size</code>, <code class="literal">atime</code>, <code class="literal">mtime</code> and
       <code class="literal">ctime</code> statistics of symlinks are always those of the target.
       This was previously not the case for <abbr class="abbrev">NTS</abbr> builds on Windows.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.stat-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2423">
    <p><strong>Example #1 <span class="function"><strong>stat()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Get file stat */<br /></span><span style="color: #0000BB">$stat </span><span style="color: #007700">= </span><span style="color: #0000BB">stat</span><span style="color: #007700">(</span><span style="color: #DD0000">'C:\php\php.exe'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/*<br /> * Print file access time, this is the same <br /> * as calling fileatime()<br /> */<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'Access time: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$stat</span><span style="color: #007700">[</span><span style="color: #DD0000">'atime'</span><span style="color: #007700">];<br /><br /></span><span style="color: #FF8000">/*<br /> * Print file modification time, this is the <br /> * same as calling filemtime()<br /> */<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'Modification time: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$stat</span><span style="color: #007700">[</span><span style="color: #DD0000">'mtime'</span><span style="color: #007700">];<br /><br /></span><span style="color: #FF8000">/* Print the device number */<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'Device number: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$stat</span><span style="color: #007700">[</span><span style="color: #DD0000">'dev'</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2424">
    <p><strong>Example #2 Using <span class="function"><strong>stat()</strong></span> information together with <span class="function"><a href="function.touch.php" class="function">touch()</a></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Get file stat */<br /></span><span style="color: #0000BB">$stat </span><span style="color: #007700">= </span><span style="color: #0000BB">stat</span><span style="color: #007700">(</span><span style="color: #DD0000">'C:\php\php.exe'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Did we failed to get stat information? */<br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">$stat</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'stat() call failed...'</span><span style="color: #007700">;<br />} else {<br />    </span><span style="color: #FF8000">/*<br />     * We want the access time to be 1 week <br />     * after the current access time.<br />     */<br />    </span><span style="color: #0000BB">$atime </span><span style="color: #007700">= </span><span style="color: #0000BB">$stat</span><span style="color: #007700">[</span><span style="color: #DD0000">'atime'</span><span style="color: #007700">] + </span><span style="color: #0000BB">604800</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000">/* Touch the file */<br />    </span><span style="color: #007700">if (!</span><span style="color: #0000BB">touch</span><span style="color: #007700">(</span><span style="color: #DD0000">'some_file.txt'</span><span style="color: #007700">, </span><span style="color: #0000BB">time</span><span style="color: #007700">(), </span><span style="color: #0000BB">$atime</span><span style="color: #007700">)) {<br />        echo </span><span style="color: #DD0000">'Failed to touch file...'</span><span style="color: #007700">;<br />    } else {<br />        echo </span><span style="color: #DD0000">'touch() returned success...'</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.stat-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">Note that time resolution may differ
from one file system to another.</p></p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">The results of this
function are cached. See <span class="function"><a href="function.clearstatcache.php" class="function">clearstatcache()</a></span> for
more details.</span></p></blockquote>
  <div class="tip"><strong class="tip">Tip</strong><p class="simpara">As of PHP 5.0.0, this function
can also be used with <em>some</em> URL wrappers.  Refer to
<a href="wrappers.php" class="xref">Supported Protocols and Wrappers</a> to determine which wrappers support
<span class="function"><strong>stat()</strong></span> family of functionality.</p></div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.stat-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.lstat.php" class="function" rel="rdfs-seeAlso">lstat()</a> - Gives information about a file or symbolic link</span></li>
    <li><span class="function"><a href="function.fstat.php" class="function" rel="rdfs-seeAlso">fstat()</a> - Gets information about a file using an open file pointer</span></li>
    <li><span class="function"><a href="function.filemtime.php" class="function" rel="rdfs-seeAlso">filemtime()</a> - Gets file modification time</span></li>
    <li><span class="function"><a href="function.filegroup.php" class="function" rel="rdfs-seeAlso">filegroup()</a> - Gets file group</span></li>
    <li><span class="classname"><a href="class.splfileinfo.php" class="classname">SplFileInfo</a></span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/stat.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.stat%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.stat&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.stat.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">18 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="87241">  <div class="votes">
    <div id="Vu87241">
    <a href="/manual/vote-note.php?id=87241&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87241">
    <a href="/manual/vote-note.php?id=87241&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87241" title="85% like this...">
    14
    </div>
  </div>
  <a href="#87241" class="name">
  <strong class="user"><em>webmaster at askapache dot com</em></strong></a><a class="genanchor" href="#87241"> &para;</a><div class="date" title="2008-11-26 01:20"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87241">
<div class="phpcode"><code><span class="html">This is a souped up 'stat' function based on <br />many user-submitted code snippets and <br />@ <a href="http://www.askapache.com/security/chmod-stat.html" rel="nofollow" target="_blank">http://www.askapache.com/security/chmod-stat.html</a> <br /><br />Give it a filename, and it returns an array like stat. <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">alt_stat</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) {<br /> <br /> </span><span class="default">clearstatcache</span><span class="keyword">();<br /> </span><span class="default">$ss</span><span class="keyword">=@</span><span class="default">stat</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /> if(!</span><span class="default">$ss</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">; </span><span class="comment">//Couldnt stat file<br /> <br /> </span><span class="default">$ts</span><span class="keyword">=array(<br />  </span><span class="default">0140000</span><span class="keyword">=&gt;</span><span class="string">'ssocket'</span><span class="keyword">,<br />  </span><span class="default">0120000</span><span class="keyword">=&gt;</span><span class="string">'llink'</span><span class="keyword">,<br />  </span><span class="default">0100000</span><span class="keyword">=&gt;</span><span class="string">'-file'</span><span class="keyword">,<br />  </span><span class="default">0060000</span><span class="keyword">=&gt;</span><span class="string">'bblock'</span><span class="keyword">,<br />  </span><span class="default">0040000</span><span class="keyword">=&gt;</span><span class="string">'ddir'</span><span class="keyword">,<br />  </span><span class="default">0020000</span><span class="keyword">=&gt;</span><span class="string">'cchar'</span><span class="keyword">,<br />  </span><span class="default">0010000</span><span class="keyword">=&gt;</span><span class="string">'pfifo'<br /> </span><span class="keyword">);<br /> <br /> </span><span class="default">$p</span><span class="keyword">=</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'mode'</span><span class="keyword">];<br /> </span><span class="default">$t</span><span class="keyword">=</span><span class="default">decoct</span><span class="keyword">(</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'mode'</span><span class="keyword">] &amp; </span><span class="default">0170000</span><span class="keyword">); </span><span class="comment">// File Encoding Bit<br /> <br /> </span><span class="default">$str </span><span class="keyword">=(</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">octdec</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">),</span><span class="default">$ts</span><span class="keyword">))?</span><span class="default">$ts</span><span class="keyword">[</span><span class="default">octdec</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">)]{</span><span class="default">0</span><span class="keyword">}:</span><span class="string">'u'</span><span class="keyword">;<br /> </span><span class="default">$str</span><span class="keyword">.=((</span><span class="default">$p</span><span class="keyword">&amp;</span><span class="default">0x0100</span><span class="keyword">)?</span><span class="string">'r'</span><span class="keyword">:</span><span class="string">'-'</span><span class="keyword">).((</span><span class="default">$p</span><span class="keyword">&amp;</span><span class="default">0x0080</span><span class="keyword">)?</span><span class="string">'w'</span><span class="keyword">:</span><span class="string">'-'</span><span class="keyword">);<br /> </span><span class="default">$str</span><span class="keyword">.=((</span><span class="default">$p</span><span class="keyword">&amp;</span><span class="default">0x0040</span><span class="keyword">)?((</span><span class="default">$p</span><span class="keyword">&amp;</span><span class="default">0x0800</span><span class="keyword">)?</span><span class="string">'s'</span><span class="keyword">:</span><span class="string">'x'</span><span class="keyword">):((</span><span class="default">$p</span><span class="keyword">&amp;</span><span class="default">0x0800</span><span class="keyword">)?</span><span class="string">'S'</span><span class="keyword">:</span><span class="string">'-'</span><span class="keyword">));<br /> </span><span class="default">$str</span><span class="keyword">.=((</span><span class="default">$p</span><span class="keyword">&amp;</span><span class="default">0x0020</span><span class="keyword">)?</span><span class="string">'r'</span><span class="keyword">:</span><span class="string">'-'</span><span class="keyword">).((</span><span class="default">$p</span><span class="keyword">&amp;</span><span class="default">0x0010</span><span class="keyword">)?</span><span class="string">'w'</span><span class="keyword">:</span><span class="string">'-'</span><span class="keyword">);<br /> </span><span class="default">$str</span><span class="keyword">.=((</span><span class="default">$p</span><span class="keyword">&amp;</span><span class="default">0x0008</span><span class="keyword">)?((</span><span class="default">$p</span><span class="keyword">&amp;</span><span class="default">0x0400</span><span class="keyword">)?</span><span class="string">'s'</span><span class="keyword">:</span><span class="string">'x'</span><span class="keyword">):((</span><span class="default">$p</span><span class="keyword">&amp;</span><span class="default">0x0400</span><span class="keyword">)?</span><span class="string">'S'</span><span class="keyword">:</span><span class="string">'-'</span><span class="keyword">));<br /> </span><span class="default">$str</span><span class="keyword">.=((</span><span class="default">$p</span><span class="keyword">&amp;</span><span class="default">0x0004</span><span class="keyword">)?</span><span class="string">'r'</span><span class="keyword">:</span><span class="string">'-'</span><span class="keyword">).((</span><span class="default">$p</span><span class="keyword">&amp;</span><span class="default">0x0002</span><span class="keyword">)?</span><span class="string">'w'</span><span class="keyword">:</span><span class="string">'-'</span><span class="keyword">);<br /> </span><span class="default">$str</span><span class="keyword">.=((</span><span class="default">$p</span><span class="keyword">&amp;</span><span class="default">0x0001</span><span class="keyword">)?((</span><span class="default">$p</span><span class="keyword">&amp;</span><span class="default">0x0200</span><span class="keyword">)?</span><span class="string">'t'</span><span class="keyword">:</span><span class="string">'x'</span><span class="keyword">):((</span><span class="default">$p</span><span class="keyword">&amp;</span><span class="default">0x0200</span><span class="keyword">)?</span><span class="string">'T'</span><span class="keyword">:</span><span class="string">'-'</span><span class="keyword">));<br /> <br /> </span><span class="default">$s</span><span class="keyword">=array(<br /> </span><span class="string">'perms'</span><span class="keyword">=&gt;array(<br />  </span><span class="string">'umask'</span><span class="keyword">=&gt;</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%04o"</span><span class="keyword">,@</span><span class="default">umask</span><span class="keyword">()),<br />  </span><span class="string">'human'</span><span class="keyword">=&gt;</span><span class="default">$str</span><span class="keyword">,<br />  </span><span class="string">'octal1'</span><span class="keyword">=&gt;</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%o"</span><span class="keyword">, (</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'mode'</span><span class="keyword">] &amp; </span><span class="default">000777</span><span class="keyword">)),<br />  </span><span class="string">'octal2'</span><span class="keyword">=&gt;</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"0%o"</span><span class="keyword">, </span><span class="default">0777 </span><span class="keyword">&amp; </span><span class="default">$p</span><span class="keyword">),<br />  </span><span class="string">'decimal'</span><span class="keyword">=&gt;</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%04o"</span><span class="keyword">, </span><span class="default">$p</span><span class="keyword">),<br />  </span><span class="string">'fileperms'</span><span class="keyword">=&gt;@</span><span class="default">fileperms</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">),<br />  </span><span class="string">'mode1'</span><span class="keyword">=&gt;</span><span class="default">$p</span><span class="keyword">,<br />  </span><span class="string">'mode2'</span><span class="keyword">=&gt;</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'mode'</span><span class="keyword">]),<br /> <br /> </span><span class="string">'owner'</span><span class="keyword">=&gt;array(<br />  </span><span class="string">'fileowner'</span><span class="keyword">=&gt;</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'uid'</span><span class="keyword">],<br />  </span><span class="string">'filegroup'</span><span class="keyword">=&gt;</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'gid'</span><span class="keyword">],<br />  </span><span class="string">'owner'</span><span class="keyword">=&gt;<br />  (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'posix_getpwuid'</span><span class="keyword">))?<br />  @</span><span class="default">posix_getpwuid</span><span class="keyword">(</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'uid'</span><span class="keyword">]):</span><span class="string">''</span><span class="keyword">,<br />  </span><span class="string">'group'</span><span class="keyword">=&gt;<br />  (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'posix_getgrgid'</span><span class="keyword">))?<br />  @</span><span class="default">posix_getgrgid</span><span class="keyword">(</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'gid'</span><span class="keyword">]):</span><span class="string">''<br />  </span><span class="keyword">),<br /> <br /> </span><span class="string">'file'</span><span class="keyword">=&gt;array(<br />  </span><span class="string">'filename'</span><span class="keyword">=&gt;</span><span class="default">$file</span><span class="keyword">,<br />  </span><span class="string">'realpath'</span><span class="keyword">=&gt;(@</span><span class="default">realpath</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) != </span><span class="default">$file</span><span class="keyword">) ? @</span><span class="default">realpath</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) : </span><span class="string">''</span><span class="keyword">,<br />  </span><span class="string">'dirname'</span><span class="keyword">=&gt;@</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">),<br />  </span><span class="string">'basename'</span><span class="keyword">=&gt;@</span><span class="default">basename</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)<br />  ),<br /><br /> </span><span class="string">'filetype'</span><span class="keyword">=&gt;array(<br />  </span><span class="string">'type'</span><span class="keyword">=&gt;</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$ts</span><span class="keyword">[</span><span class="default">octdec</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">)],</span><span class="default">1</span><span class="keyword">),<br />  </span><span class="string">'type_octal'</span><span class="keyword">=&gt;</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%07o"</span><span class="keyword">, </span><span class="default">octdec</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">)),<br />  </span><span class="string">'is_file'</span><span class="keyword">=&gt;@</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">),<br />  </span><span class="string">'is_dir'</span><span class="keyword">=&gt;@</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">),<br />  </span><span class="string">'is_link'</span><span class="keyword">=&gt;@</span><span class="default">is_link</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">),<br />  </span><span class="string">'is_readable'</span><span class="keyword">=&gt; @</span><span class="default">is_readable</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">),<br />  </span><span class="string">'is_writable'</span><span class="keyword">=&gt; @</span><span class="default">is_writable</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)<br />  ),<br />  <br /> </span><span class="string">'device'</span><span class="keyword">=&gt;array(<br />  </span><span class="string">'device'</span><span class="keyword">=&gt;</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'dev'</span><span class="keyword">], </span><span class="comment">//Device<br />  </span><span class="string">'device_number'</span><span class="keyword">=&gt;</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'rdev'</span><span class="keyword">], </span><span class="comment">//Device number, if device.<br />  </span><span class="string">'inode'</span><span class="keyword">=&gt;</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'ino'</span><span class="keyword">], </span><span class="comment">//File serial number<br />  </span><span class="string">'link_count'</span><span class="keyword">=&gt;</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'nlink'</span><span class="keyword">], </span><span class="comment">//link count<br />  </span><span class="string">'link_to'</span><span class="keyword">=&gt;(</span><span class="default">$s</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">]==</span><span class="string">'link'</span><span class="keyword">) ? @</span><span class="default">readlink</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) : </span><span class="string">''<br />  </span><span class="keyword">),<br /> <br /> </span><span class="string">'size'</span><span class="keyword">=&gt;array(<br />  </span><span class="string">'size'</span><span class="keyword">=&gt;</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">], </span><span class="comment">//Size of file, in bytes.<br />  </span><span class="string">'blocks'</span><span class="keyword">=&gt;</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'blocks'</span><span class="keyword">], </span><span class="comment">//Number 512-byte blocks allocated<br />  </span><span class="string">'block_size'</span><span class="keyword">=&gt; </span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'blksize'</span><span class="keyword">] </span><span class="comment">//Optimal block size for I/O.<br />  </span><span class="keyword">), <br /> <br /> </span><span class="string">'time'</span><span class="keyword">=&gt;array(<br />  </span><span class="string">'mtime'</span><span class="keyword">=&gt;</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'mtime'</span><span class="keyword">], </span><span class="comment">//Time of last modification<br />  </span><span class="string">'atime'</span><span class="keyword">=&gt;</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'atime'</span><span class="keyword">], </span><span class="comment">//Time of last access.<br />  </span><span class="string">'ctime'</span><span class="keyword">=&gt;</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'ctime'</span><span class="keyword">], </span><span class="comment">//Time of last status change<br />  </span><span class="string">'accessed'</span><span class="keyword">=&gt;@</span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y M D H:i:s'</span><span class="keyword">,</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'atime'</span><span class="keyword">]),<br />  </span><span class="string">'modified'</span><span class="keyword">=&gt;@</span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y M D H:i:s'</span><span class="keyword">,</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'mtime'</span><span class="keyword">]),<br />  </span><span class="string">'created'</span><span class="keyword">=&gt;@</span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y M D H:i:s'</span><span class="keyword">,</span><span class="default">$ss</span><span class="keyword">[</span><span class="string">'ctime'</span><span class="keyword">])<br />  ),<br /> );<br /> <br /> </span><span class="default">clearstatcache</span><span class="keyword">();<br /> return </span><span class="default">$s</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />|=---------[ Example Output ]<br /><br />Array(<br />[perms] =&gt; Array<br />  (<br />  [umask] =&gt; 0022<br />  [human] =&gt; -rw-r--r--<br />  [octal1] =&gt; 644<br />  [octal2] =&gt; 0644<br />  [decimal] =&gt; 100644<br />  [fileperms] =&gt; 33188<br />  [mode1] =&gt; 33188<br />  [mode2] =&gt; 33188<br />  )<br /> <br />[filetype] =&gt; Array<br />  (<br />  [type] =&gt; file<br />  [type_octal] =&gt; 0100000<br />  [is_file] =&gt; 1<br />  [is_dir] =&gt;<br />  [is_link] =&gt;<br />  [is_readable] =&gt; 1<br />  [is_writable] =&gt; 1<br />  )<br /> <br />[owner] =&gt; Array<br />  (<br />  [fileowner] =&gt; 035483<br />  [filegroup] =&gt; 23472<br />  [owner_name] =&gt; askapache<br />  [group_name] =&gt; grp22558<br />  )<br /> <br />[file] =&gt; Array<br />  (<br />  [filename] =&gt; /home/askapache/askapache-stat/htdocs/ok/g.php<br />  [realpath] =&gt;<br />  [dirname] =&gt; /home/askapache/askapache-stat/htdocs/ok<br />  [basename] =&gt; g.php<br />  )<br /> <br />[device] =&gt; Array<br />  (<br />  [device] =&gt; 25<br />  [device_number] =&gt; 0<br />  [inode] =&gt; 92455020<br />  [link_count] =&gt; 1<br />  [link_to] =&gt;<br />  )<br /> <br />[size] =&gt; Array<br />  (<br />  [size] =&gt; 2652<br />  [blocks] =&gt; 8<br />  [block_size] =&gt; 8192<br />  )<br /> <br />[time] =&gt; Array<br />  (<br />  [mtime] =&gt; 1227685253<br />  [atime] =&gt; 1227685138<br />  [ctime] =&gt; 1227685253<br />  [accessed] =&gt; 2008 Nov Tue 23:38:58<br />  [modified] =&gt; 2008 Nov Tue 23:40:53<br />  [created] =&gt; 2008 Nov Tue 23:40:53<br />  )<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="114191">  <div class="votes">
    <div id="Vu114191">
    <a href="/manual/vote-note.php?id=114191&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114191">
    <a href="/manual/vote-note.php?id=114191&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114191" title="86% like this...">
    11
    </div>
  </div>
  <a href="#114191" class="name">
  <strong class="user"><em>webmaster at askapache dot com</em></strong></a><a class="genanchor" href="#114191"> &para;</a><div class="date" title="2014-01-22 05:16"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114191">
<div class="phpcode"><code><span class="html">On GNU/Linux you can retrieve the number of currently running processes on the machine by doing a stat for hard links on the '/proc' directory like so:<br /><br />$ stat -c '%h' /proc<br />118<br /><br />You can do the same thing in php by doing a stat on /proc and grabbing the [3] 'nlink' - number of links in the returned array.<br /><br />Here is the function I'm using, it does a clearstatcache() when called more than once.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Returns the number of running processes<br /> *<br /> * @link <a href="http://php.net/clearstatcache" rel="nofollow" target="_blank">http://php.net/clearstatcache</a><br /> * @link <a href="http://php.net/stat" rel="nofollow" target="_blank">http://php.net/stat</a>  Description of stat syntax.<br /> * @author <a href="http://www.askapache.com/php/get-number-running-proccesses.html" rel="nofollow" target="_blank">http://www.askapache.com/php/get-number-running-proccesses.html</a><br /> * @return int<br /> */<br /></span><span class="keyword">function </span><span class="default">get_process_count</span><span class="keyword">() {<br />  static </span><span class="default">$ver</span><span class="keyword">, </span><span class="default">$runs </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  <br />  </span><span class="comment">// check if php version supports clearstatcache params, but only check once<br />  </span><span class="keyword">if ( </span><span class="default">is_null</span><span class="keyword">( </span><span class="default">$ver </span><span class="keyword">) )<br />    </span><span class="default">$ver </span><span class="keyword">= </span><span class="default">version_compare</span><span class="keyword">( </span><span class="default">PHP_VERSION</span><span class="keyword">, </span><span class="string">'5.3.0'</span><span class="keyword">, </span><span class="string">'&gt;=' </span><span class="keyword">);<br /> <br />  </span><span class="comment">// Only call clearstatcache() if function called more than once */<br />  </span><span class="keyword">if ( </span><span class="default">$runs</span><span class="keyword">++ &gt; </span><span class="default">0 </span><span class="keyword">) { </span><span class="comment">// checks if $runs &gt; 0, then increments $runs by one.<br />    <br />    // if php version is &gt;= 5.3.0<br />    </span><span class="keyword">if ( </span><span class="default">$ver </span><span class="keyword">) {<br />      </span><span class="default">clearstatcache</span><span class="keyword">( </span><span class="default">true</span><span class="keyword">, </span><span class="string">'/proc' </span><span class="keyword">);<br />    } else {<br />      </span><span class="comment">// if php version is &lt; 5.3.0<br />      </span><span class="default">clearstatcache</span><span class="keyword">();<br />    }<br />  }<br />  <br />  </span><span class="default">$stat </span><span class="keyword">= </span><span class="default">stat</span><span class="keyword">( </span><span class="string">'/proc' </span><span class="keyword">);<br /> <br />  </span><span class="comment">// if stat succeeds and nlink value is present return it, otherwise return 0<br />  </span><span class="keyword">return ( ( </span><span class="default">false </span><span class="keyword">!== </span><span class="default">$stat </span><span class="keyword">&amp;&amp; isset( </span><span class="default">$stat</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] ) ) ? </span><span class="default">$stat</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] : </span><span class="default">0 </span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Example #1 get_process_count() example<br /><br /><span class="default">&lt;?php<br />$num_procs </span><span class="keyword">= </span><span class="default">get_process_count</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">$num_procs </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The above example will output:<br /><br />int(118)<br /><br />Which is the number of processes that were running.</span></code></div>
  </div>
 </div>
  <div class="note" id="58404">  <div class="votes">
    <div id="Vu58404">
    <a href="/manual/vote-note.php?id=58404&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58404">
    <a href="/manual/vote-note.php?id=58404&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58404" title="83% like this...">
    8
    </div>
  </div>
  <a href="#58404" class="name">
  <strong class="user"><em>admin at smitelli dot com</em></strong></a><a class="genanchor" href="#58404"> &para;</a><div class="date" title="2005-11-02 11:27"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58404">
<div class="phpcode"><code><span class="html">There's an important (yet little-known) problem with file dates on Windows and Daylight Savings. This affects the 'atime' and 'mtime' elements returned by stat(), and it also affects other filesystem-related functions such as fileatime() and filemtime().<br /><br />During the winter months (when Daylight Savings isn't in effect), Windows will report a certain timestamp for a given file. However, when summer comes and Daylight Savings starts, Windows will report a DIFFERENT timestamp! Even if the file hasn't been altered at all, Windows will shift every timestamp it reads forward one full hour during Daylight Savings.<br /><br />This all stems from the fact that M$ decided to use a hackneyed method of tracking file dates to make sure there are no ambiguous times during the "repeated hour" when DST ends in October, maintain compatibility with older FAT partitions, etc. An excellent description of what/why this is can be found at <a href="http://www.codeproject.com/datetime/dstbugs.asp" rel="nofollow" target="_blank">http://www.codeproject.com/datetime/dstbugs.asp</a><br /><br />This is noteworthy because *nix platforms don't have this problem. This could introduce some hard-to-track bugs if you're trying to move scripts that track file timestamps between platforms.<br /><br />I spent a fair amount of time trying to debug one of my own scripts that was suffering from this problem. I was storing file modification times in a MySQL table, then using that information to see which files had been altered since the last run of the script. After each Daylight Savings change, every single file the script saw was considered "changed" since the last run, since all the timestamps were off by +/- 3600 seconds.<br /><br />This one-liner is probably one of the most incorrect fixes that could ever be devised, but it's worked flawlessly in production-grade environments... Assuming $file_date is a Unix timestamp you've just read from a file:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">if (</span><span class="default">date</span><span class="keyword">(</span><span class="string">'I'</span><span class="keyword">) == </span><span class="default">1</span><span class="keyword">) </span><span class="default">$file_date </span><span class="keyword">-= </span><span class="default">3600</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />That will ensure that the timestamp you're working with is always consistently reported, regardless of whether the machine is in Daylight Savings or not.</span></code></div>
  </div>
 </div>
  <div class="note" id="82759">  <div class="votes">
    <div id="Vu82759">
    <a href="/manual/vote-note.php?id=82759&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82759">
    <a href="/manual/vote-note.php?id=82759&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82759" title="77% like this...">
    5
    </div>
  </div>
  <a href="#82759" class="name">
  <strong class="user"><em>mail4rico at gmail dot com</em></strong></a><a class="genanchor" href="#82759"> &para;</a><div class="date" title="2008-04-24 11:19"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82759">
<div class="phpcode"><code><span class="html">In response to the note whose first line is:<br />Re note posted by "admin at smitelli dot com"<br /><br />I believe you have the conversion backwards. You should add an hour to filemtime if the system is in DST and the file is not. Conversely, you should subtract an hour if the file time is DST and the current OS time is not.<br /><br />Here's a simplified, corrected version:<br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">getmodtime</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) { </span><span class="comment">//returns the time a file was modified.<br />        </span><span class="default">$mtime </span><span class="keyword">= </span><span class="default">filemtime</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />        </span><span class="comment">//date('I') returns 1 if DST is on and 0 if off.<br />        </span><span class="default">$diff </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'I'</span><span class="keyword">)-</span><span class="default">date</span><span class="keyword">(</span><span class="string">'I'</span><span class="keyword">, </span><span class="default">$mtime</span><span class="keyword">);<br />        </span><span class="comment">//diff =  0 if file-time and os-time are both in the same DST setting<br />        //diff =  1 if os is DST and file is not<br />        //diff = -1 if file is DST and os is not<br />        </span><span class="keyword">return </span><span class="default">$mtime </span><span class="keyword">+ </span><span class="default">$diff</span><span class="keyword">*</span><span class="default">3600</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span>Here's a test:<br /><span class="default">&lt;?php<br />    </span><span class="comment">//create two dummy files:<br />    </span><span class="default">$file0 </span><span class="keyword">= </span><span class="string">'file1.txt'</span><span class="keyword">;<br />    </span><span class="default">$file1 </span><span class="keyword">= </span><span class="string">'file2.txt'</span><span class="keyword">;<br />    </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$file0</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">);<br />    </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$file1</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">);<br />    <br />    </span><span class="default">$time0</span><span class="keyword">=</span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'Jan 1 2008 10:00'</span><span class="keyword">); echo </span><span class="string">'Date0 (ST): ' </span><span class="keyword">. </span><span class="default">date</span><span class="keyword">(</span><span class="default">DATE_COOKIE</span><span class="keyword">, </span><span class="default">$time0</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br />    </span><span class="default">$time1</span><span class="keyword">=</span><span class="default">strtotime</span><span class="keyword">(</span><span class="string">'Aug 1 2008 10:00'</span><span class="keyword">); echo </span><span class="string">'Date1 (DT): ' </span><span class="keyword">. </span><span class="default">date</span><span class="keyword">(</span><span class="default">DATE_COOKIE</span><span class="keyword">, </span><span class="default">$time1</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br />    </span><span class="default">touch</span><span class="keyword">(</span><span class="default">$file0</span><span class="keyword">, </span><span class="default">$time0</span><span class="keyword">); </span><span class="comment">//set file0 to Winter (Non-DST)<br />    </span><span class="default">touch</span><span class="keyword">(</span><span class="default">$file1</span><span class="keyword">, </span><span class="default">$time1</span><span class="keyword">); </span><span class="comment">//set file1 to Summer (DST)<br />    <br />    </span><span class="default">$ftime0 </span><span class="keyword">= </span><span class="default">filemtime</span><span class="keyword">(</span><span class="default">$file0</span><span class="keyword">);<br />    </span><span class="default">$ftime1 </span><span class="keyword">= </span><span class="default">filemtime</span><span class="keyword">(</span><span class="default">$file1</span><span class="keyword">);<br />    echo </span><span class="string">"\nUncorrected: \n"</span><span class="keyword">;<br />    echo </span><span class="string">'File 0: ' </span><span class="keyword">. (</span><span class="default">$ftime0</span><span class="keyword">-</span><span class="default">$time0</span><span class="keyword">) .</span><span class="string">"\n"</span><span class="keyword">;<br />    echo </span><span class="string">'File 1: ' </span><span class="keyword">. (</span><span class="default">$ftime1</span><span class="keyword">-</span><span class="default">$time1</span><span class="keyword">) .</span><span class="string">"\n"</span><span class="keyword">;<br />    </span><span class="comment">//if your system adjusts for DST, then _one_ of the above should be 3600 or -3600, depending on the time of year<br />    <br />    </span><span class="default">$ftime0 </span><span class="keyword">= </span><span class="default">getmodtime</span><span class="keyword">(</span><span class="default">$file0</span><span class="keyword">); </span><span class="comment">//use filemtime correction<br />    </span><span class="default">$ftime1 </span><span class="keyword">= </span><span class="default">getmodtime</span><span class="keyword">(</span><span class="default">$file1</span><span class="keyword">); </span><span class="comment">//use filemtime correction<br />    </span><span class="keyword">echo </span><span class="string">"\nCorrected: \n"</span><span class="keyword">;<br />    echo </span><span class="string">'File 0: ' </span><span class="keyword">. (</span><span class="default">$ftime0</span><span class="keyword">-</span><span class="default">$time0</span><span class="keyword">) .</span><span class="string">"\n"</span><span class="keyword">;<br />    echo </span><span class="string">'File 1: ' </span><span class="keyword">. (</span><span class="default">$ftime1</span><span class="keyword">-</span><span class="default">$time1</span><span class="keyword">) .</span><span class="string">"\n"</span><span class="keyword">;<br />    </span><span class="comment">//both of the corrected values output should be 0.<br /></span><span class="default">?&gt;<br /></span><br />Output:<br />------------------------------<br />(when run in summer)<br />------------------------------<br />Date0 (ST): Tuesday, 01-Jan-08 10:00:00 EST<br />Date1 (DT): Friday, 01-Aug-08 10:00:00 EDT<br /><br />Uncorrected: <br />File 0: -3600<br />File 1: 0<br /><br />Corrected: <br />File 0: 0<br />File 1: 0<br />------------------------------<br />(when run in winter--dates omitted)<br />------------------------------<br />Uncorrected: <br />File 0: 0<br />File 1: 3600<br /><br />Corrected: <br />File 0: 0<br />File 1: 0<br /><br />In response to Re note posted by "admin at smitelli dot com",  your version below gives the following output when substituted into my test:<br />------------------------------<br />(when run in summer--dates omitted)<br />------------------------------<br />Uncorrected: <br />File 0: -3600<br />File 1: 0<br /><br />Corrected: <br />File 0: -7200<br />File 1: 0<br />------------------------------<br />You can see that the operation is the opposite of what it should be.</span></code></div>
  </div>
 </div>
  <div class="note" id="54999">  <div class="votes">
    <div id="Vu54999">
    <a href="/manual/vote-note.php?id=54999&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54999">
    <a href="/manual/vote-note.php?id=54999&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54999" title="77% like this...">
    5
    </div>
  </div>
  <a href="#54999" class="name">
  <strong class="user"><em>com dot gmail at algofoogle</em></strong></a><a class="genanchor" href="#54999"> &para;</a><div class="date" title="2005-07-21 06:06"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54999">
<div class="phpcode"><code><span class="html">Re note posted by "salisbm at hotmail dot com":<br /><br />S_IFDIR is not a single-bit flag. It is a constant that relies on the "S_IFMT" bitmask. This bitmask should be applied to the "mode" parameter before comparing with any of the other "S_IF..." constants, as indicated by stat.h:<br /><br />#define S_ISDIR(m)  (((m) &amp; S_IFMT) == S_IFDIR)<br /><br />That is, this approach is incorrect:<br /><br /><span class="default">&lt;?php<br />define</span><span class="keyword">(</span><span class="string">'S_IFDIR'</span><span class="keyword">,</span><span class="default">040000</span><span class="keyword">);<br />if (</span><span class="default">$mode </span><span class="keyword">&amp; </span><span class="default">S_IFDIR</span><span class="keyword">)<br />{<br />  </span><span class="comment">/*<br />    incorrect!<br />    format could be S_IFDIR, but also<br />    S_IFBLK, S_IFSOCK, or S_IFWHT.<br />  */<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />...and should instead be:<br /><br /><span class="default">&lt;?php<br />define</span><span class="keyword">(</span><span class="string">'S_IFMT'</span><span class="keyword">,</span><span class="default">0170000</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'S_IFDIR'</span><span class="keyword">,</span><span class="default">040000</span><span class="keyword">);<br />if (</span><span class="default">S_IFDIR </span><span class="keyword">== (</span><span class="default">$mode </span><span class="keyword">&amp; </span><span class="default">S_IFMT</span><span class="keyword">)) {  </span><span class="comment">/* ... */  </span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />As pointed out by "svend at svendtofte dot com", however, there is also the "is_dir" function for this purpose, along with "is_file" and "is_link" to cover the most common format types...</span></code></div>
  </div>
 </div>
  <div class="note" id="1213">  <div class="votes">
    <div id="Vu1213">
    <a href="/manual/vote-note.php?id=1213&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd1213">
    <a href="/manual/vote-note.php?id=1213&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V1213" title="80% like this...">
    3
    </div>
  </div>
  <a href="#1213" class="name">
  <strong class="user"><em>ian at eiloart dot com</em></strong></a><a class="genanchor" href="#1213"> &para;</a><div class="date" title="1999-07-23 08:52"><strong>26 years ago</strong></div>
  <div class="text" id="Hcom1213">
<div class="phpcode"><code><span class="html">Here's what the UNIX man page on stat has to say about the difference between a file change and  a file modification:
<br />
<br />st_mtime  Time when data was last modified.  Changed by  the following  functions:   creat(),  mknod(), pipe(), utime(), and write(2).
<br />
<br />st_ctime  Time when file status was last  changed.   Changed by  the  following  functions: chmod(), chown(), creat(), link(2), mknod(), pipe(), unlink(2), utime(), and write().
<br />
<br />So a modification is a change in the data, whereas a change also happens if you modify file permissions and so on.</span></code></div>
  </div>
 </div>
  <div class="note" id="34919">  <div class="votes">
    <div id="Vu34919">
    <a href="/manual/vote-note.php?id=34919&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34919">
    <a href="/manual/vote-note.php?id=34919&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34919" title="66% like this...">
    7
    </div>
  </div>
  <a href="#34919" class="name">
  <strong class="user"><em>salisbm at hotmail dot com</em></strong></a><a class="genanchor" href="#34919"> &para;</a><div class="date" title="2003-08-11 05:21"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34919">
<div class="phpcode"><code><span class="html">I was curious how I could tell if a file was a directory... so I found on <a href="http://www.hmug.org/man/2/stat.html" rel="nofollow" target="_blank">http://www.hmug.org/man/2/stat.html</a> the following information about the mode bits:<br />#define S_IFMT 0170000           /* type of file */<br />#define        S_IFIFO  0010000  /* named pipe (fifo) */<br />#define        S_IFCHR  0020000  /* character special */<br />#define        S_IFDIR  0040000  /* directory */<br />#define        S_IFBLK  0060000  /* block special */<br />#define        S_IFREG  0100000  /* regular */<br />#define        S_IFLNK  0120000  /* symbolic link */<br />#define        S_IFSOCK 0140000  /* socket */<br />#define        S_IFWHT  0160000  /* whiteout */<br />#define S_ISUID 0004000  /* set user id on execution */<br />#define S_ISGID 0002000  /* set group id on execution */<br />#define S_ISVTX 0001000  /* save swapped text even after use */<br />#define S_IRUSR 0000400  /* read permission, owner */<br />#define S_IWUSR 0000200  /* write permission, owner */<br />#define S_IXUSR 0000100  /* execute/search permission, owner */<br /><br />Note that these numbers are in octal format.  Then, to check to see if the file is a directory, after calling fstat, I do:<br /><br />if ($fstats[mode] &amp; 040000)<br />  ... this must be a directory</span></code></div>
  </div>
 </div>
  <div class="note" id="72725">  <div class="votes">
    <div id="Vu72725">
    <a href="/manual/vote-note.php?id=72725&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72725">
    <a href="/manual/vote-note.php?id=72725&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72725" title="71% like this...">
    3
    </div>
  </div>
  <a href="#72725" class="name">
  <strong class="user"><em>JulieC</em></strong></a><a class="genanchor" href="#72725"> &para;</a><div class="date" title="2007-01-30 07:21"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72725">
<div class="phpcode"><code><span class="html">The dir_size function provided by "marting.dc AT gmail.com" works great, except the $mas variable is not initialized.  Add:<br /><br />   $mas = 0;<br /><br />before the while() loop.</span></code></div>
  </div>
 </div>
  <div class="note" id="61238">  <div class="votes">
    <div id="Vu61238">
    <a href="/manual/vote-note.php?id=61238&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61238">
    <a href="/manual/vote-note.php?id=61238&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61238" title="71% like this...">
    3
    </div>
  </div>
  <a href="#61238" class="name">
  <strong class="user"><em>marting.dc AT gmail.com</em></strong></a><a class="genanchor" href="#61238"> &para;</a><div class="date" title="2006-01-28 05:08"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61238">
<div class="phpcode"><code><span class="html">If you want to know a directory size, this function will help you:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">dir_size</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);
<br />    
<br />    while (</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)) {
<br />        if (</span><span class="default">$file </span><span class="keyword">!= </span><span class="string">'..' </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">'.' </span><span class="keyword">&amp;&amp; !</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">)) {
<br />            </span><span class="default">$mas </span><span class="keyword">+= </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">);
<br />            } else if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">) &amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">'..' </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">'.'</span><span class="keyword">) {
<br />            </span><span class="default">$mas </span><span class="keyword">+= </span><span class="default">dir_size</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">);
<br />        }
<br />    }
<br />    return </span><span class="default">$mas</span><span class="keyword">;
<br />}
<br />echo </span><span class="default">dir_size</span><span class="keyword">(</span><span class="string">'DIRECTORIO'</span><span class="keyword">).</span><span class="string">' Bytes'</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53614">  <div class="votes">
    <div id="Vu53614">
    <a href="/manual/vote-note.php?id=53614&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53614">
    <a href="/manual/vote-note.php?id=53614&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53614" title="71% like this...">
    3
    </div>
  </div>
  <a href="#53614" class="name">
  <strong class="user"><em>mao at nospam dot com</em></strong></a><a class="genanchor" href="#53614"> &para;</a><div class="date" title="2005-06-07 05:53"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53614">
<div class="phpcode"><code><span class="html">If you have ftp (and the related sftp) protocols disabled on your remote server, it can be hard figuring out how to 'stat' a remote file. The following works for me:<br /><br /><span class="default">&lt;?php  <br /><br />$conn </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">);<br /></span><span class="default">ssh2_auth_password</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">);<br /></span><span class="default">$stream </span><span class="keyword">= </span><span class="default">ssh2_exec</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"stat </span><span class="default">$fileName</span><span class="string"> &gt; </span><span class="default">$remotedest</span><span class="string">"</span><span class="keyword">);<br /></span><span class="default">ssh2_scp_recv</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$remotedest</span><span class="keyword">, </span><span class="default">$localdest</span><span class="keyword">);<br /></span><span class="default">$farray </span><span class="keyword">= </span><span class="default">file</span><span class="keyword">(</span><span class="default">$localdest</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$farray</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116050">  <div class="votes">
    <div id="Vu116050">
    <a href="/manual/vote-note.php?id=116050&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116050">
    <a href="/manual/vote-note.php?id=116050&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116050" title="66% like this...">
    3
    </div>
  </div>
  <a href="#116050" class="name">
  <strong class="user"><em>carlos [at] encore-lab [dot] com</em></strong></a><a class="genanchor" href="#116050"> &para;</a><div class="date" title="2014-11-03 02:47"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116050">
<div class="phpcode"><code><span class="html">stat() may not work on mounted CIFS' in 32 bit systems if you do not specify the option noserverino when mounting. E.g:<br /><br />mount -t cifs -o user="user",password="password",noserverino //example.local/share /mnt/mount-point<br /><br />Other functions based on stat() data such as file time functions and is_dir() are affected the same way.<br /><br />This happens because if you do not specify the option noserverino the remote inode may be 64 bit-based and thus the local system cannot handle it.</span></code></div>
  </div>
 </div>
  <div class="note" id="87603">  <div class="votes">
    <div id="Vu87603">
    <a href="/manual/vote-note.php?id=87603&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87603">
    <a href="/manual/vote-note.php?id=87603&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87603" title="66% like this...">
    3
    </div>
  </div>
  <a href="#87603" class="name">
  <strong class="user"><em>digitalaudiorock at hotmail dot com</em></strong></a><a class="genanchor" href="#87603"> &para;</a><div class="date" title="2008-12-12 08:23"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87603">
<div class="phpcode"><code><span class="html">Regarding the stat() on files larger than 2GB on 32 bit systems not working, note that the behavior appears to differ between Linux and Windows.  Under Windows there's so way to know whether or not this failed.<br /><br />It's been my experience that under Linux, performing a stat() on files that are too large for the integer size generates a warning and returns false.  However under Windows it silently truncates the high order bits of the size resulting in an incorrect number.  The only way you'd ever know it failed is in the event that the truncation happened to leave the sign bit on resulting in a negative size.  That is, there is _no_ reliable way to know it failed.<br /><br />This is true of filesize() as well.<br /><br />Tom</span></code></div>
  </div>
 </div>
  <div class="note" id="46406">  <div class="votes">
    <div id="Vu46406">
    <a href="/manual/vote-note.php?id=46406&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46406">
    <a href="/manual/vote-note.php?id=46406&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46406" title="57% like this...">
    1
    </div>
  </div>
  <a href="#46406" class="name">
  <strong class="user"><em>svend at svendtofte dot com</em></strong></a><a class="genanchor" href="#46406"> &para;</a><div class="date" title="2004-10-09 04:31"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46406">
<div class="phpcode"><code><span class="html">To the note of how you can figure out if a file is a folder or not, there is also the handy "is_dir" function.</span></code></div>
  </div>
 </div>
  <div class="note" id="125813">  <div class="votes">
    <div id="Vu125813">
    <a href="/manual/vote-note.php?id=125813&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125813">
    <a href="/manual/vote-note.php?id=125813&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125813" title="100% like this...">
    1
    </div>
  </div>
  <a href="#125813" class="name">
  <strong class="user"><em>Ray.Paseur sometimes uses Gmail</em></strong></a><a class="genanchor" href="#125813"> &para;</a><div class="date" title="2021-02-13 02:49"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125813">
<div class="phpcode"><code><span class="html">A good explanation of the "mode" bits is given here:<br /><a href="https://www.php.net/manual/en/function.fileperms.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/function.fileperms.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="81534">  <div class="votes">
    <div id="Vu81534">
    <a href="/manual/vote-note.php?id=81534&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81534">
    <a href="/manual/vote-note.php?id=81534&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81534" title="50% like this...">
    0
    </div>
  </div>
  <a href="#81534" class="name">
  <strong class="user"><em>Hellhound</em></strong></a><a class="genanchor" href="#81534"> &para;</a><div class="date" title="2008-03-03 02:16"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81534">
<div class="phpcode"><code><span class="html">To ignore index number or name specifics.. use:<br /><br />list($dev, $ino, $mode, $nlink, $uid, $gid, $rdev, $size, $atime, $mtime, $ctime, $blksize, $blocks)<br />         = lstat($directory_element);</span></code></div>
  </div>
 </div>
  <div class="note" id="66175">  <div class="votes">
    <div id="Vu66175">
    <a href="/manual/vote-note.php?id=66175&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66175">
    <a href="/manual/vote-note.php?id=66175&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66175" title="50% like this...">
    0
    </div>
  </div>
  <a href="#66175" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#66175"> &para;</a><div class="date" title="2006-05-16 10:10"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66175">
<div class="phpcode"><code><span class="html">Re note posted by "admin at smitelli dot com"<br /><br />I'm not sure how that can work all year round since you have to modify both opposing inside and outside DST based on the actual files themselves, as well as the current DST setting for the system.<br /><br />e.g. using filemtime, same thing for stat.<br /><br /><span class="default">&lt;?php<br /><br />$mtime </span><span class="keyword">= </span><span class="default">filemtime</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /><br />if (</span><span class="default">date</span><span class="keyword">(</span><span class="string">'I'</span><span class="keyword">) == </span><span class="default">1</span><span class="keyword">) {<br />    </span><span class="comment">// Win DST is enabled, adjust standard time <br />    // files back to 'real' file UTC.<br />    </span><span class="keyword">if (</span><span class="default">date</span><span class="keyword">(</span><span class="string">'I'</span><span class="keyword">, </span><span class="default">$mtime</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$mtime </span><span class="keyword">-= </span><span class="default">3600</span><span class="keyword">;<br />    }<br />} else {<br />    </span><span class="comment">// Win DST is disabled, adjust daylight time <br />    // files forward to 'real' file UTC.<br />    </span><span class="keyword">if (</span><span class="default">date</span><span class="keyword">(</span><span class="string">'I'</span><span class="keyword">, </span><span class="default">$mtime</span><span class="keyword">) == </span><span class="default">1</span><span class="keyword">) {<br />        </span><span class="default">$mtime </span><span class="keyword">+= </span><span class="default">3600</span><span class="keyword">;<br />    }<br />}<br /><br />echo </span><span class="default">gmdate</span><span class="keyword">(</span><span class="string">'Y-m-d H:i:s'</span><span class="keyword">, </span><span class="default">$mtime</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Just another example of why 'not' to use windows in a server room.</span></code></div>
  </div>
 </div>
  <div class="note" id="84596">  <div class="votes">
    <div id="Vu84596">
    <a href="/manual/vote-note.php?id=84596&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84596">
    <a href="/manual/vote-note.php?id=84596&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84596" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#84596" class="name">
  <strong class="user"><em>antonixyz at gmx dot net</em></strong></a><a class="genanchor" href="#84596"> &para;</a><div class="date" title="2008-07-21 02:19"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84596">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br />$stat </span><span class="keyword">= </span><span class="default">stat</span><span class="keyword">(</span><span class="default">$filepath</span><span class="keyword">);
<br /></span><span class="default">$mode </span><span class="keyword">= </span><span class="default">$stat</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];
<br /></span><span class="default">?&gt;
<br /></span>is identical to:
<br /><span class="default">&lt;?php $mode </span><span class="keyword">= </span><span class="default">fileperms</span><span class="keyword">(</span><span class="default">$filepath</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />at least on my linux box.</span></code></div>
  </div>
 </div>
  <div class="note" id="47320">  <div class="votes">
    <div id="Vu47320">
    <a href="/manual/vote-note.php?id=47320&amp;page=function.stat&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47320">
    <a href="/manual/vote-note.php?id=47320&amp;page=function.stat&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47320" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#47320" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#47320"> &para;</a><div class="date" title="2004-11-10 07:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47320">
<div class="phpcode"><code><span class="html">If the 2GB limit is driving you crazy, you can use this complete hack.  use in place of filesize()<br /><br />function file_size($file) {<br />  $size = filesize($file);<br />  if ( $size == 0)<br />    $size = exec("ls -l $file | awk '{print $5}'");<br />  return $size;<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.stat&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.stat.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.filesystem.php">Filesystem Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.basename.php" title="basename">basename</a>
                        </li>
                                                <li class="">
                            <a href="function.chgrp.php" title="chgrp">chgrp</a>
                        </li>
                                                <li class="">
                            <a href="function.chmod.php" title="chmod">chmod</a>
                        </li>
                                                <li class="">
                            <a href="function.chown.php" title="chown">chown</a>
                        </li>
                                                <li class="">
                            <a href="function.clearstatcache.php" title="clearstatcache">clearstatcache</a>
                        </li>
                                                <li class="">
                            <a href="function.copy.php" title="copy">copy</a>
                        </li>
                                                <li class="">
                            <a href="function.delete.php" title="delete">delete</a>
                        </li>
                                                <li class="">
                            <a href="function.dirname.php" title="dirname">dirname</a>
                        </li>
                                                <li class="">
                            <a href="function.disk-free-space.php" title="disk_&#8203;free_&#8203;space">disk_&#8203;free_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.disk-total-space.php" title="disk_&#8203;total_&#8203;space">disk_&#8203;total_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.diskfreespace.php" title="diskfreespace">diskfreespace</a>
                        </li>
                                                <li class="">
                            <a href="function.fclose.php" title="fclose">fclose</a>
                        </li>
                                                <li class="">
                            <a href="function.fdatasync.php" title="fdatasync">fdatasync</a>
                        </li>
                                                <li class="">
                            <a href="function.feof.php" title="feof">feof</a>
                        </li>
                                                <li class="">
                            <a href="function.fflush.php" title="fflush">fflush</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetc.php" title="fgetc">fgetc</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetcsv.php" title="fgetcsv">fgetcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.fgets.php" title="fgets">fgets</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetss.php" title="fgetss">fgetss</a>
                        </li>
                                                <li class="">
                            <a href="function.file.php" title="file">file</a>
                        </li>
                                                <li class="">
                            <a href="function.file-exists.php" title="file_&#8203;exists">file_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.file-get-contents.php" title="file_&#8203;get_&#8203;contents">file_&#8203;get_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.file-put-contents.php" title="file_&#8203;put_&#8203;contents">file_&#8203;put_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.fileatime.php" title="fileatime">fileatime</a>
                        </li>
                                                <li class="">
                            <a href="function.filectime.php" title="filectime">filectime</a>
                        </li>
                                                <li class="">
                            <a href="function.filegroup.php" title="filegroup">filegroup</a>
                        </li>
                                                <li class="">
                            <a href="function.fileinode.php" title="fileinode">fileinode</a>
                        </li>
                                                <li class="">
                            <a href="function.filemtime.php" title="filemtime">filemtime</a>
                        </li>
                                                <li class="">
                            <a href="function.fileowner.php" title="fileowner">fileowner</a>
                        </li>
                                                <li class="">
                            <a href="function.fileperms.php" title="fileperms">fileperms</a>
                        </li>
                                                <li class="">
                            <a href="function.filesize.php" title="filesize">filesize</a>
                        </li>
                                                <li class="">
                            <a href="function.filetype.php" title="filetype">filetype</a>
                        </li>
                                                <li class="">
                            <a href="function.flock.php" title="flock">flock</a>
                        </li>
                                                <li class="">
                            <a href="function.fnmatch.php" title="fnmatch">fnmatch</a>
                        </li>
                                                <li class="">
                            <a href="function.fopen.php" title="fopen">fopen</a>
                        </li>
                                                <li class="">
                            <a href="function.fpassthru.php" title="fpassthru">fpassthru</a>
                        </li>
                                                <li class="">
                            <a href="function.fputcsv.php" title="fputcsv">fputcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.fputs.php" title="fputs">fputs</a>
                        </li>
                                                <li class="">
                            <a href="function.fread.php" title="fread">fread</a>
                        </li>
                                                <li class="">
                            <a href="function.fscanf.php" title="fscanf">fscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.fseek.php" title="fseek">fseek</a>
                        </li>
                                                <li class="">
                            <a href="function.fstat.php" title="fstat">fstat</a>
                        </li>
                                                <li class="">
                            <a href="function.fsync.php" title="fsync">fsync</a>
                        </li>
                                                <li class="">
                            <a href="function.ftell.php" title="ftell">ftell</a>
                        </li>
                                                <li class="">
                            <a href="function.ftruncate.php" title="ftruncate">ftruncate</a>
                        </li>
                                                <li class="">
                            <a href="function.fwrite.php" title="fwrite">fwrite</a>
                        </li>
                                                <li class="">
                            <a href="function.glob.php" title="glob">glob</a>
                        </li>
                                                <li class="">
                            <a href="function.is-dir.php" title="is_&#8203;dir">is_&#8203;dir</a>
                        </li>
                                                <li class="">
                            <a href="function.is-executable.php" title="is_&#8203;executable">is_&#8203;executable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-file.php" title="is_&#8203;file">is_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.is-link.php" title="is_&#8203;link">is_&#8203;link</a>
                        </li>
                                                <li class="">
                            <a href="function.is-readable.php" title="is_&#8203;readable">is_&#8203;readable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-uploaded-file.php" title="is_&#8203;uploaded_&#8203;file">is_&#8203;uploaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.is-writable.php" title="is_&#8203;writable">is_&#8203;writable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-writeable.php" title="is_&#8203;writeable">is_&#8203;writeable</a>
                        </li>
                                                <li class="">
                            <a href="function.lchgrp.php" title="lchgrp">lchgrp</a>
                        </li>
                                                <li class="">
                            <a href="function.lchown.php" title="lchown">lchown</a>
                        </li>
                                                <li class="">
                            <a href="function.link.php" title="link">link</a>
                        </li>
                                                <li class="">
                            <a href="function.linkinfo.php" title="linkinfo">linkinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.lstat.php" title="lstat">lstat</a>
                        </li>
                                                <li class="">
                            <a href="function.mkdir.php" title="mkdir">mkdir</a>
                        </li>
                                                <li class="">
                            <a href="function.move-uploaded-file.php" title="move_&#8203;uploaded_&#8203;file">move_&#8203;uploaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-ini-file.php" title="parse_&#8203;ini_&#8203;file">parse_&#8203;ini_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-ini-string.php" title="parse_&#8203;ini_&#8203;string">parse_&#8203;ini_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.pathinfo.php" title="pathinfo">pathinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.pclose.php" title="pclose">pclose</a>
                        </li>
                                                <li class="">
                            <a href="function.popen.php" title="popen">popen</a>
                        </li>
                                                <li class="">
                            <a href="function.readfile.php" title="readfile">readfile</a>
                        </li>
                                                <li class="">
                            <a href="function.readlink.php" title="readlink">readlink</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath.php" title="realpath">realpath</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath-cache-get.php" title="realpath_&#8203;cache_&#8203;get">realpath_&#8203;cache_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath-cache-size.php" title="realpath_&#8203;cache_&#8203;size">realpath_&#8203;cache_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.rename.php" title="rename">rename</a>
                        </li>
                                                <li class="">
                            <a href="function.rewind.php" title="rewind">rewind</a>
                        </li>
                                                <li class="">
                            <a href="function.rmdir.php" title="rmdir">rmdir</a>
                        </li>
                                                <li class="">
                            <a href="function.set-file-buffer.php" title="set_&#8203;file_&#8203;buffer">set_&#8203;file_&#8203;buffer</a>
                        </li>
                                                <li class="current">
                            <a href="function.stat.php" title="stat">stat</a>
                        </li>
                                                <li class="">
                            <a href="function.symlink.php" title="symlink">symlink</a>
                        </li>
                                                <li class="">
                            <a href="function.tempnam.php" title="tempnam">tempnam</a>
                        </li>
                                                <li class="">
                            <a href="function.tmpfile.php" title="tmpfile">tmpfile</a>
                        </li>
                                                <li class="">
                            <a href="function.touch.php" title="touch">touch</a>
                        </li>
                                                <li class="">
                            <a href="function.umask.php" title="umask">umask</a>
                        </li>
                                                <li class="">
                            <a href="function.unlink.php" title="unlink">unlink</a>
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
