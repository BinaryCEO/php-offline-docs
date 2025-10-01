<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: file_exists - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.file-exists.php">
 <link rel="shorturl" href="https://www.php.net/file-exists">
 <link rel="alternate" href="https://www.php.net/file-exists" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.file.php">
 <link rel="next" href="https://www.php.net/manual/en/function.file-get-contents.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.file-exists.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.file-exists.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.file-exists.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.file-exists.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.file-exists.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.file-exists.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.file-exists.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.file-exists.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.file-exists.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.file-exists.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.file-exists.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Checks whether a file or directory exists" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: file_exists - Manual" />
<meta name="twitter:description" content="Checks whether a file or directory exists" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: file_exists - Manual" />
<meta itemprop="description" content="Checks whether a file or directory exists" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Checks whether a file or directory exists" />

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
        <a href="function.file-get-contents.php">
          file_get_contents &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.file.php">
          &laquo; file        </a>
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
            <option value='en/function.file-exists.php' selected="selected">English</option>
            <option value='de/function.file-exists.php'>German</option>
            <option value='es/function.file-exists.php'>Spanish</option>
            <option value='fr/function.file-exists.php'>French</option>
            <option value='it/function.file-exists.php'>Italian</option>
            <option value='ja/function.file-exists.php'>Japanese</option>
            <option value='pt_BR/function.file-exists.php'>Brazilian Portuguese</option>
            <option value='ru/function.file-exists.php'>Russian</option>
            <option value='tr/function.file-exists.php'>Turkish</option>
            <option value='uk/function.file-exists.php'>Ukrainian</option>
            <option value='zh/function.file-exists.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.file-exists" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">file_exists</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">file_exists</span> &mdash; <span class="dc-title">Checks whether a file or directory exists</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.file-exists-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>file_exists</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Checks whether a file or directory exists.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.file-exists-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       Path to the file or directory.
      </p>
      <p class="para">
       On windows, use <var class="filename">//computername/share/filename</var> or
       <var class="filename">\\computername\share\filename</var> to check files on
       network shares.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.file-exists-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the file or directory specified by
   <code class="parameter">filename</code> exists; <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This function will return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> for symlinks pointing to non-existing
    files.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The check is done using the real UID/GID instead of the effective one.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">
    Because PHP&#039;s integer type is signed and many platforms use 32bit integers,
    some filesystem functions may return unexpected results for files which
    are larger than 2GB.
   </span></p></blockquote>
 </div>


 <div class="refsect1 errors" id="refsect1-function.file-exists-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
Upon failure, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
</p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.file-exists-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2351">
    <p><strong>Example #1 Testing whether a file exists</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$filename </span><span style="color: #007700">= </span><span style="color: #DD0000">'/path/to/foo.txt'</span><span style="color: #007700">;<br /><br />if (</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"The file </span><span style="color: #0000BB">$filename</span><span style="color: #DD0000"> exists"</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">"The file </span><span style="color: #0000BB">$filename</span><span style="color: #DD0000"> does not exist"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.file-exists-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">The results of this
function are cached. See <span class="function"><a href="function.clearstatcache.php" class="function">clearstatcache()</a></span> for
more details.</span></p></blockquote>
  <div class="tip"><strong class="tip">Tip</strong><p class="simpara">As of PHP 5.0.0, this function
can also be used with <em>some</em> URL wrappers.  Refer to
<a href="wrappers.php" class="xref">Supported Protocols and Wrappers</a> to determine which wrappers support
<span class="function"><a href="function.stat.php" class="function">stat()</a></span> family of functionality.</p></div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.file-exists-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.is-readable.php" class="function" rel="rdfs-seeAlso">is_readable()</a> - Tells whether a file exists and is readable</span></li>
    <li><span class="function"><a href="function.is-writable.php" class="function" rel="rdfs-seeAlso">is_writable()</a> - Tells whether the filename is writable</span></li>
    <li><span class="function"><a href="function.is-file.php" class="function" rel="rdfs-seeAlso">is_file()</a> - Tells whether the filename is a regular file</span></li>
    <li><span class="function"><a href="function.file.php" class="function" rel="rdfs-seeAlso">file()</a> - Reads entire file into an array</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/file-exists.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.file-exists%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.file-exists&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.file-exists.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">28 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="79308">  <div class="votes">
    <div id="Vu79308">
    <a href="/manual/vote-note.php?id=79308&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79308">
    <a href="/manual/vote-note.php?id=79308&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79308" title="68% like this...">
    80
    </div>
  </div>
  <a href="#79308" class="name">
  <strong class="user"><em>maurice at idify dot nl</em></strong></a><a class="genanchor" href="#79308"> &para;</a><div class="date" title="2007-11-20 02:45"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79308">
<div class="phpcode"><code><span class="html">Note: The results of this function are cached. See clearstatcache() for more details.<br /><br />That's a pretty big note. Don't forget this one, since it can make your file_exists() behave unexpectedly - probably at production time ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="129866">  <div class="votes">
    <div id="Vu129866">
    <a href="/manual/vote-note.php?id=129866&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129866">
    <a href="/manual/vote-note.php?id=129866&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129866" title="71% like this...">
    6
    </div>
  </div>
  <a href="#129866" class="name">
  <strong class="user"><em>tobyhoward at gmail dot com</em></strong></a><a class="genanchor" href="#129866"> &para;</a><div class="date" title="2024-11-23 10:30"><strong>10 months ago</strong></div>
  <div class="text" id="Hcom129866">
<div class="phpcode"><code><span class="html">If you suspect the file path you are testing contains spaces, DO NOT put your path in quotes, either single or double. file_exists() will interpret the quotes as characters belonging to the file path. Instead, do nothing special:  file_exists() will correctly escape spaces on your behalf.</span></code></div>
  </div>
 </div>
  <div class="note" id="114011">  <div class="votes">
    <div id="Vu114011">
    <a href="/manual/vote-note.php?id=114011&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114011">
    <a href="/manual/vote-note.php?id=114011&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114011" title="58% like this...">
    23
    </div>
  </div>
  <a href="#114011" class="name">
  <strong class="user"><em>welkom at remconijhuis dot nl</em></strong></a><a class="genanchor" href="#114011"> &para;</a><div class="date" title="2013-12-30 11:10"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114011">
<div class="phpcode"><code><span class="html">I needed to measure performance for a project, so I did a simple test with one million file_exists() and is_file() checks. In one scenario, only seven of the files existed. In the second, all files existed. is_file() needed 3.0 for scenario one and 3.3 seconds for scenario two.  file_exists() needed 2.8 and 2.9 seconds, respectively. The absolute numbers are off course system-dependant, but it clearly indicates that file_exists() is faster.</span></code></div>
  </div>
 </div>
  <div class="note" id="119751">  <div class="votes">
    <div id="Vu119751">
    <a href="/manual/vote-note.php?id=119751&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119751">
    <a href="/manual/vote-note.php?id=119751&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119751" title="60% like this...">
    14
    </div>
  </div>
  <a href="#119751" class="name">
  <strong class="user"><em>ziptwipi at goioia dot com</em></strong></a><a class="genanchor" href="#119751"> &para;</a><div class="date" title="2016-08-17 05:44"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119751">
<div class="phpcode"><code><span class="html">Note that realpath() will return false if the file doesn't exist. So if you're going to absolutize the path and resolve symlinks anyway, you can just check the return value from realpath() instead of calling file_exists() first</span></code></div>
  </div>
 </div>
  <div class="note" id="75064">  <div class="votes">
    <div id="Vu75064">
    <a href="/manual/vote-note.php?id=75064&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75064">
    <a href="/manual/vote-note.php?id=75064&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75064" title="54% like this...">
    22
    </div>
  </div>
  <a href="#75064" class="name">
  <strong class="user"><em>vernon at kesnerdesigns dot net</em></strong></a><a class="genanchor" href="#75064"> &para;</a><div class="date" title="2007-05-10 08:44"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75064">
<div class="phpcode"><code><span class="html">In response to seejohnrun's version to check if a URL exists. Even if the file doesn't exist you're still going to get 404 headers.  You can still use get_headers if you don't have the option of using CURL..<br /><br />$file = '<a href="http://www.domain.com/somefile.jpg" rel="nofollow" target="_blank">http://www.domain.com/somefile.jpg</a>';<br />$file_headers = @get_headers($file);<br />if($file_headers[0] == 'HTTP/1.1 404 Not Found') {<br />    $exists = false;<br />}<br />else {<br />    $exists = true;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="123884">  <div class="votes">
    <div id="Vu123884">
    <a href="/manual/vote-note.php?id=123884&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123884">
    <a href="/manual/vote-note.php?id=123884&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123884" title="56% like this...">
    8
    </div>
  </div>
  <a href="#123884" class="name">
  <strong class="user"><em>jag</em></strong></a><a class="genanchor" href="#123884"> &para;</a><div class="date" title="2019-05-24 11:00"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123884">
<div class="phpcode"><code><span class="html">file_exists() does NOT search the php include_path for your file, so don't use it before trying to include or require.<br /><br />use<br /><br />    @$result = include $filename;<br /><br />Yes, include does return false when the file can't be found, but it does also generate a warning. That's why you need the @. Don't try to get around the warning issue by using file_exists(). That will leave you scratching your head until you figure out or stumble across the fact that file_exists() DOESN'T SEARCH THE PHP INCLUDE_PATH.</span></code></div>
  </div>
 </div>
  <div class="note" id="92617">  <div class="votes">
    <div id="Vu92617">
    <a href="/manual/vote-note.php?id=92617&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92617">
    <a href="/manual/vote-note.php?id=92617&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92617" title="56% like this...">
    9
    </div>
  </div>
  <a href="#92617" class="name">
  <strong class="user"><em>pgl at yoyo dot org</em></strong></a><a class="genanchor" href="#92617"> &para;</a><div class="date" title="2009-07-31 07:03"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92617">
<div class="phpcode"><code><span class="html">Note that this will return false for streams, eg, php://stdin.</span></code></div>
  </div>
 </div>
  <div class="note" id="60458">  <div class="votes">
    <div id="Vu60458">
    <a href="/manual/vote-note.php?id=60458&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60458">
    <a href="/manual/vote-note.php?id=60458&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60458" title="56% like this...">
    9
    </div>
  </div>
  <a href="#60458" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#60458"> &para;</a><div class="date" title="2006-01-07 01:08"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60458">
<div class="phpcode"><code><span class="html">I wrote this little handy function to check if an image exists in a directory, and if so, return a filename which doesnt exists e.g. if you try 'flower.jpg' and it exists, then it tries 'flower[1].jpg' and if that one exists it tries 'flower[2].jpg' and so on. It works fine at my place. Ofcourse you can use it also for other filetypes than images.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">imageExists</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">$dir</span><span class="keyword">) {<br /><br />    </span><span class="default">$i</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">$probeer</span><span class="keyword">=</span><span class="default">$image</span><span class="keyword">;<br /><br />    while(</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$probeer</span><span class="keyword">)) {<br />        </span><span class="default">$punt</span><span class="keyword">=</span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="string">"."</span><span class="keyword">);<br />        if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,(</span><span class="default">$punt</span><span class="keyword">-</span><span class="default">3</span><span class="keyword">),</span><span class="default">1</span><span class="keyword">)!==(</span><span class="string">"["</span><span class="keyword">) &amp;&amp; </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,(</span><span class="default">$punt</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">),</span><span class="default">1</span><span class="keyword">)!==(</span><span class="string">"]"</span><span class="keyword">)) {<br />            </span><span class="default">$probeer</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$punt</span><span class="keyword">).</span><span class="string">"["</span><span class="keyword">.</span><span class="default">$i</span><span class="keyword">.</span><span class="string">"]"</span><span class="keyword">.<br />            </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,(</span><span class="default">$punt</span><span class="keyword">),</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">)-</span><span class="default">$punt</span><span class="keyword">);<br />        } else {<br />            </span><span class="default">$probeer</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,(</span><span class="default">$punt</span><span class="keyword">-</span><span class="default">3</span><span class="keyword">)).</span><span class="string">"["</span><span class="keyword">.</span><span class="default">$i</span><span class="keyword">.</span><span class="string">"]"</span><span class="keyword">.<br />            </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,(</span><span class="default">$punt</span><span class="keyword">),</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">)-</span><span class="default">$punt</span><span class="keyword">);<br />        }<br />        </span><span class="default">$i</span><span class="keyword">++;<br />    }<br />    return </span><span class="default">$probeer</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49805">  <div class="votes">
    <div id="Vu49805">
    <a href="/manual/vote-note.php?id=49805&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49805">
    <a href="/manual/vote-note.php?id=49805&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49805" title="56% like this...">
    7
    </div>
  </div>
  <a href="#49805" class="name">
  <strong class="user"><em>Nathaniel</em></strong></a><a class="genanchor" href="#49805"> &para;</a><div class="date" title="2005-02-08 09:08"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49805">
<div class="phpcode"><code><span class="html">I spent the last two hours wondering what was wrong with my if statement: file_exists($file) was returning false, however I could call include($file) with no problem.<br /><br />It turns out that I didn't realize that the php include_path value I had set in the .htaccess file didn't carry over to file_exists, is_file, etc.<br /><br />Thus:<br /><br /><span class="default">&lt;?PHP<br /></span><span class="comment">// .htaccess php_value include_path '/home/user/public_html/';<br /><br />// includes lies in /home/user/public_html/includes/<br /><br />//doesn't work, file_exists returns false<br /></span><span class="keyword">if ( </span><span class="default">file_exists</span><span class="keyword">(</span><span class="string">'includes/config.php'</span><span class="keyword">) )<br />{<br />     include(</span><span class="string">'includes/config.php'</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">//does work, file_exists returns true<br /></span><span class="keyword">if ( </span><span class="default">file_exists</span><span class="keyword">(</span><span class="string">'/home/user/public_html/includes/config.php'</span><span class="keyword">) )<br />{<br />    include(</span><span class="string">'includes/config.php'</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Just goes to show that "shortcuts for simplicity" like setting the include_path in .htaccess can just cause more grief in the long run.</span></code></div>
  </div>
 </div>
  <div class="note" id="81400">  <div class="votes">
    <div id="Vu81400">
    <a href="/manual/vote-note.php?id=81400&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81400">
    <a href="/manual/vote-note.php?id=81400&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81400" title="56% like this...">
    6
    </div>
  </div>
  <a href="#81400" class="name">
  <strong class="user"><em>jaz-t at hotmail dot com</em></strong></a><a class="genanchor" href="#81400"> &para;</a><div class="date" title="2008-02-26 07:12"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81400">
<div class="phpcode"><code><span class="html">Note on openspecies entry (excellent btw, thanks!).<br /><br />If your server cannot resolve its own DNS, use the following:<br />$f = preg_replace('/www\.yourserver\.(net|com)/', getenv('SERVER_ADDR'), $f);<br /><br />Just before the $h = @get_headers($f); line.<br /><br />Replace the extensions (net|com|...) in the regexp expression as appropriate.<br /><br />EXAMPLE:<br />File you are checking for: <a href="http://www.youserver.net/myfile.gif" rel="nofollow" target="_blank">http://www.youserver.net/myfile.gif</a><br />Server IP: 10.0.0.125<br /><br />The preg_replace will effectively 'resolve' the address for you by assigning $f as follows:<br /><a href="http://10.0.0.125/myfile.gif" rel="nofollow" target="_blank">http://10.0.0.125/myfile.gif</a></span></code></div>
  </div>
 </div>
  <div class="note" id="76194">  <div class="votes">
    <div id="Vu76194">
    <a href="/manual/vote-note.php?id=76194&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76194">
    <a href="/manual/vote-note.php?id=76194&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76194" title="55% like this...">
    7
    </div>
  </div>
  <a href="#76194" class="name">
  <strong class="user"><em>bvazquez at siscomx dot com</em></strong></a><a class="genanchor" href="#76194"> &para;</a><div class="date" title="2007-07-04 09:13"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76194">
<div class="phpcode"><code><span class="html">If you are trying to access a Windows Network Share you have to configure your WebServer with enough permissions for example:<br /><br />$file = fopen("\\siscomx17\c\websapp.log",'r');<br /><br />You will get an error telling you that the pathname doesnt exist this will be because Apache or IIS run as LocalSystem so you will have to enter to Services and configure Apache on "Open a session as" Create a new user that has enough permissions and also be sure that target share has the proper permissions.<br /><br />Hope this save some hours of research to anyone.</span></code></div>
  </div>
 </div>
  <div class="note" id="103436">  <div class="votes">
    <div id="Vu103436">
    <a href="/manual/vote-note.php?id=103436&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103436">
    <a href="/manual/vote-note.php?id=103436&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103436" title="53% like this...">
    7
    </div>
  </div>
  <a href="#103436" class="name">
  <strong class="user"><em>spark at limao dot com dot br</em></strong></a><a class="genanchor" href="#103436"> &para;</a><div class="date" title="2011-04-13 07:26"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103436">
<div class="phpcode"><code><span class="html">this code here is in case you want to check if a file exists in another server:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">fileExists</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">){<br />    return (@</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">)==</span><span class="default">true</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />unfortunately the file_exists can't reach remote servers, so I used the fopen function.</span></code></div>
  </div>
 </div>
  <div class="note" id="88607">  <div class="votes">
    <div id="Vu88607">
    <a href="/manual/vote-note.php?id=88607&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88607">
    <a href="/manual/vote-note.php?id=88607&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88607" title="54% like this...">
    4
    </div>
  </div>
  <a href="#88607" class="name">
  <strong class="user"><em>fabin dot gnu at gmail dot com</em></strong></a><a class="genanchor" href="#88607"> &para;</a><div class="date" title="2009-01-31 01:03"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88607">
<div class="phpcode"><code><span class="html">The code can be used to t a filename that can be used to create a new filename.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">generateRandomString</span><span class="keyword">(</span><span class="default">$length </span><span class="keyword">= </span><span class="default">8</span><span class="keyword">)
<br />{    
<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />    
<br />    </span><span class="comment">//character that can be used
<br />    </span><span class="default">$possible </span><span class="keyword">= </span><span class="string">"0123456789bcdfghjkmnpqrstvwxyz"</span><span class="keyword">; 
<br />    
<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$length</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++)
<br />    {
<br />        </span><span class="default">$char </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$possible</span><span class="keyword">, </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$possible</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">), </span><span class="default">1</span><span class="keyword">);
<br />        
<br />        if (!</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$char</span><span class="keyword">)) 
<br />        { 
<br />            </span><span class="default">$string </span><span class="keyword">.= </span><span class="default">$char</span><span class="keyword">;
<br />        }
<br />    }
<br />
<br />    return </span><span class="default">$string</span><span class="keyword">;
<br />}
<br />
<br />function </span><span class="default">randomFile</span><span class="keyword">(</span><span class="default">$folder </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">, </span><span class="default">$extension </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">)
<br />{ 
<br />    </span><span class="default">$folder </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$folder</span><span class="keyword">);
<br />    </span><span class="default">$folder </span><span class="keyword">= (</span><span class="default">$folder </span><span class="keyword">== </span><span class="string">''</span><span class="keyword">) ? </span><span class="string">'./' </span><span class="keyword">: </span><span class="default">$folder</span><span class="keyword">;
<br /> 
<br />    </span><span class="comment">//check if directory exist
<br />    </span><span class="keyword">if (!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$folder</span><span class="keyword">)){ die(</span><span class="string">'invalid folder given!'</span><span class="keyword">); }
<br /> 
<br />    </span><span class="comment">//generate a filepath
<br />    </span><span class="default">$filepath </span><span class="keyword">= </span><span class="default">$folder </span><span class="keyword">. </span><span class="string">"/" </span><span class="keyword">. </span><span class="default">generateRandomString</span><span class="keyword">(</span><span class="default">128</span><span class="keyword">) . </span><span class="default">$extension</span><span class="keyword">;
<br />    
<br />    </span><span class="comment">//check if that filepath already exist, if it exist if generates again
<br />    //till if gets one that doesn't exist
<br />    </span><span class="keyword">while(</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$filepath</span><span class="keyword">))
<br />    {
<br />        </span><span class="default">$filepath </span><span class="keyword">= </span><span class="default">$folder </span><span class="keyword">. </span><span class="string">"/" </span><span class="keyword">. </span><span class="default">generateRandomString</span><span class="keyword">(</span><span class="default">128</span><span class="keyword">) . </span><span class="default">$extension</span><span class="keyword">;
<br />    }
<br />    
<br />    return </span><span class="default">$filepath</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78656">  <div class="votes">
    <div id="Vu78656">
    <a href="/manual/vote-note.php?id=78656&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78656">
    <a href="/manual/vote-note.php?id=78656&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78656" title="54% like this...">
    5
    </div>
  </div>
  <a href="#78656" class="name">
  <strong class="user"><em>ktcb123 at hotmail dot com</em></strong></a><a class="genanchor" href="#78656"> &para;</a><div class="date" title="2007-10-22 12:26"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78656">
<div class="phpcode"><code><span class="html">For some reason, none of the url_exists() functions posted here worked for me, so here is my own tweaked version of it.<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">url_exists</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">){<br />        </span><span class="default">$url </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"<a href="http://" rel="nofollow" target="_blank">http://</a>"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">$url</span><span class="keyword">);<br />        if (</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="string">"/"</span><span class="keyword">)) {<br />            </span><span class="default">$url </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"/"</span><span class="keyword">, </span><span class="default">$url</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />            </span><span class="default">$url</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$url</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />        } else {<br />            </span><span class="default">$url </span><span class="keyword">= array(</span><span class="default">$url</span><span class="keyword">, </span><span class="string">"/"</span><span class="keyword">);<br />        }<br /><br />        </span><span class="default">$fh </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">80</span><span class="keyword">);<br />        if (</span><span class="default">$fh</span><span class="keyword">) {<br />            </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">,</span><span class="string">"GET "</span><span class="keyword">.</span><span class="default">$url</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">].</span><span class="string">" HTTP/1.1\nHost:"</span><span class="keyword">.</span><span class="default">$url</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">].</span><span class="string">"\n\n"</span><span class="keyword">);<br />            if (</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">) == </span><span class="string">"HTTP/1.1 404 Not Found"</span><span class="keyword">) { return </span><span class="default">FALSE</span><span class="keyword">; }<br />            else { return </span><span class="default">TRUE</span><span class="keyword">;    }<br /><br />        } else { return </span><span class="default">FALSE</span><span class="keyword">;}<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73904">  <div class="votes">
    <div id="Vu73904">
    <a href="/manual/vote-note.php?id=73904&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73904">
    <a href="/manual/vote-note.php?id=73904&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73904" title="53% like this...">
    4
    </div>
  </div>
  <a href="#73904" class="name">
  <strong class="user"><em>earle dot west at transactionalweb dot com</em></strong></a><a class="genanchor" href="#73904"> &para;</a><div class="date" title="2007-03-14 05:49"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73904">
<div class="phpcode"><code><span class="html">If the file being tested by file_exists() is a file on a symbolically-linked directory structure, the results depend on the permissions of the directory tree node underneath the linked tree.   PHP under a web server (i.e. apache) will respect permissions of the file system underneath the symbolic link, contrasting with PHP as a shell script which respects permissions of the directories that are linked (i.e. on top, and visible).   <br /><br />This results in files that appear to NOT exist on a symbolic link, even though they are very much in existance and indeed are readable by the web server.</span></code></div>
  </div>
 </div>
  <div class="note" id="85189">  <div class="votes">
    <div id="Vu85189">
    <a href="/manual/vote-note.php?id=85189&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85189">
    <a href="/manual/vote-note.php?id=85189&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85189" title="53% like this...">
    3
    </div>
  </div>
  <a href="#85189" class="name">
  <strong class="user"><em>Avee</em></strong></a><a class="genanchor" href="#85189"> &para;</a><div class="date" title="2008-08-19 08:21"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85189">
<div class="phpcode"><code><span class="html">I made a bit of code that sees whether a file served via RTSP is there or not:<br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">function </span><span class="default">rtsp_exists</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">) {<br /><br />    </span><span class="default">$server </span><span class="keyword">= </span><span class="default">parse_url</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="default">PHP_URL_HOST</span><span class="keyword">);<br />    </span><span class="default">$port </span><span class="keyword">= </span><span class="string">"554"</span><span class="keyword">;<br />    </span><span class="default">$hdrs </span><span class="keyword">= </span><span class="string">"DESCRIBE " </span><span class="keyword">.</span><span class="default">$url </span><span class="keyword">.</span><span class="string">" RTSP/1.0"</span><span class="keyword">.</span><span class="string">"\r\n\r\n"</span><span class="keyword">;<br /><br />    </span><span class="comment">//Open connection (15s timeout)<br />    </span><span class="default">$sh </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$err</span><span class="keyword">, </span><span class="default">$err_otp</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">);<br />    </span><span class="comment">//Check connections<br />    </span><span class="keyword">if(!</span><span class="default">$sh</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />    </span><span class="comment">//Send headers<br />    </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$sh</span><span class="keyword">,</span><span class="default">$hdrs</span><span class="keyword">);<br />    </span><span class="comment">//Receive data (1KB)<br />    </span><span class="default">$rtds </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$sh</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);<br />    </span><span class="comment">//Close socket<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$sh</span><span class="keyword">);<br /><br />    return </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$rtds</span><span class="keyword">, </span><span class="string">"200 OK"</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121436">  <div class="votes">
    <div id="Vu121436">
    <a href="/manual/vote-note.php?id=121436&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121436">
    <a href="/manual/vote-note.php?id=121436&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121436" title="52% like this...">
    3
    </div>
  </div>
  <a href="#121436" class="name">
  <strong class="user"><em>vcoletti at tiscali dot it</em></strong></a><a class="genanchor" href="#121436"> &para;</a><div class="date" title="2017-07-26 10:35"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121436">
<div class="phpcode"><code><span class="html">With PHP 7.0 on Ubuntu 17.04 and with the option allow_url_fopen=On, file_exists() returns always false when trying to check a remote file via HTTP.<br /><br />So<br />        $url="<a href="http://www.somewhere.org/index.htm" rel="nofollow" target="_blank">http://www.somewhere.org/index.htm</a>";<br />        if (file_exists($url)) echo "Wow!\n";<br />        else echo "missing\n";<br /><br />returns always "missing", even for an existing URL.<br /><br />I found that in the same situation the file() function can read the remote file, so I changed my routine in<br /><br />        $url="<a href="http://www.somewhere.org/index.htm" rel="nofollow" target="_blank">http://www.somewhere.org/index.htm</a>";<br />        if (false!==file($url)) echo "Wow!\n";<br />        else echo "missing\n";<br />                <br />This is clearly a bit slower, especially if the remote file is big, but it solves this little problem.</span></code></div>
  </div>
 </div>
  <div class="note" id="93572">  <div class="votes">
    <div id="Vu93572">
    <a href="/manual/vote-note.php?id=93572&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93572">
    <a href="/manual/vote-note.php?id=93572&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93572" title="51% like this...">
    2
    </div>
  </div>
  <a href="#93572" class="name">
  <strong class="user"><em>ferodano at gmail dot com</em></strong></a><a class="genanchor" href="#93572"> &para;</a><div class="date" title="2009-09-16 01:54"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93572">
<div class="phpcode"><code><span class="html">You could use document root to be on the safer side because the function does not take relative paths:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if( </span><span class="default">file_exists</span><span class="keyword">( </span><span class="default">$_SERVER</span><span class="keyword">{</span><span class="string">'DOCUMENT_ROOT'</span><span class="keyword">} . </span><span class="string">"/my_images/abc.jpg"</span><span class="keyword">))  {
<br />   ...
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Do not forget to put the slash '/', e.g. my doc root in Ubuntu is /var/www without the slash.</span></code></div>
  </div>
 </div>
  <div class="note" id="49900">  <div class="votes">
    <div id="Vu49900">
    <a href="/manual/vote-note.php?id=49900&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49900">
    <a href="/manual/vote-note.php?id=49900&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49900" title="52% like this...">
    2
    </div>
  </div>
  <a href="#49900" class="name">
  <strong class="user"><em>andrewNOSPAMPLEASE at abcd dot NOSPAMERSca</em></strong></a><a class="genanchor" href="#49900"> &para;</a><div class="date" title="2005-02-11 05:29"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49900">
<div class="phpcode"><code><span class="html">file_exists will have trouble finding your file if the file permissions are not read enabled for 'other' when not owned by your php user. I thought I was having trouble with a directory name having a space in it (/users/andrew/Pictures/iPhoto Library/AlbumData.xml) but the reality was that there weren't read permissions on Pictures, iPhoto Library or AlbumData.xml. Once I fixed that, file_exists worked.</span></code></div>
  </div>
 </div>
  <div class="note" id="77662">  <div class="votes">
    <div id="Vu77662">
    <a href="/manual/vote-note.php?id=77662&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77662">
    <a href="/manual/vote-note.php?id=77662&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77662" title="51% like this...">
    1
    </div>
  </div>
  <a href="#77662" class="name">
  <strong class="user"><em>guillermogomezruiz at gmail dot com</em></strong></a><a class="genanchor" href="#77662"> &para;</a><div class="date" title="2007-09-07 04:08"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77662">
<div class="phpcode"><code><span class="html">I was having problems with the file_exists when using urls, so I made this function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">file_exists_2</span><span class="keyword">(</span><span class="default">$filePath</span><span class="keyword">)<br />{<br />    return (</span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(</span><span class="default">$filePath</span><span class="keyword">)) ? @</span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">) || </span><span class="default">true </span><span class="keyword">: </span><span class="default">false</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Cheers!</span></code></div>
  </div>
 </div>
  <div class="note" id="59986">  <div class="votes">
    <div id="Vu59986">
    <a href="/manual/vote-note.php?id=59986&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59986">
    <a href="/manual/vote-note.php?id=59986&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59986" title="50% like this...">
    1
    </div>
  </div>
  <a href="#59986" class="name">
  <strong class="user"><em>Fabrizio (staff at bibivu dot com)</em></strong></a><a class="genanchor" href="#59986"> &para;</a><div class="date" title="2005-12-21 06:11"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59986">
<div class="phpcode"><code><span class="html">here a function to check if a certain URL exist:<br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">url_exists</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">) {<br />        </span><span class="default">$a_url </span><span class="keyword">= </span><span class="default">parse_url</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);<br />        if (!isset(</span><span class="default">$a_url</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">])) </span><span class="default">$a_url</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">] = </span><span class="default">80</span><span class="keyword">;<br />        </span><span class="default">$errno </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$errstr </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        </span><span class="default">$timeout </span><span class="keyword">= </span><span class="default">30</span><span class="keyword">;<br />        if(isset(</span><span class="default">$a_url</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">]) &amp;&amp; </span><span class="default">$a_url</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">]!=</span><span class="default">gethostbyname</span><span class="keyword">(</span><span class="default">$a_url</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">])){<br />            </span><span class="default">$fid </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$a_url</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">], </span><span class="default">$a_url</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">], </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$timeout</span><span class="keyword">);<br />            if (!</span><span class="default">$fid</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />            </span><span class="default">$page </span><span class="keyword">= isset(</span><span class="default">$a_url</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">])  ?</span><span class="default">$a_url</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">]:</span><span class="string">''</span><span class="keyword">;<br />            </span><span class="default">$page </span><span class="keyword">.= isset(</span><span class="default">$a_url</span><span class="keyword">[</span><span class="string">'query'</span><span class="keyword">])?</span><span class="string">'?'</span><span class="keyword">.</span><span class="default">$a_url</span><span class="keyword">[</span><span class="string">'query'</span><span class="keyword">]:</span><span class="string">''</span><span class="keyword">;<br />            </span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fid</span><span class="keyword">, </span><span class="string">'HEAD '</span><span class="keyword">.</span><span class="default">$page</span><span class="keyword">.</span><span class="string">' HTTP/1.0'</span><span class="keyword">.</span><span class="string">"\r\n"</span><span class="keyword">.</span><span class="string">'Host: '</span><span class="keyword">.</span><span class="default">$a_url</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">].</span><span class="string">"\r\n\r\n"</span><span class="keyword">);<br />            </span><span class="default">$head </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fid</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">);<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fid</span><span class="keyword">);<br />            return </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'#^HTTP/.*\s+[200|302]+\s#i'</span><span class="keyword">, </span><span class="default">$head</span><span class="keyword">);<br />        } else {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    }<br /></span><span class="default">?&gt;<br /></span><br />in my CMS, I am using it with those lines:<br /><span class="default">&lt;?php<br />        </span><span class="keyword">if(!isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">f_exist</span><span class="keyword">[</span><span class="default">$image</span><span class="keyword">][</span><span class="string">'exist'</span><span class="keyword">]))<br />            if(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$fimage</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">)) == </span><span class="string">'http' </span><span class="keyword">|| </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$fimage</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">)) == </span><span class="string">'www.'</span><span class="keyword">){<br />                if(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">)) == </span><span class="string">'www.'</span><span class="keyword">){<br />                    </span><span class="default">$fimage </span><span class="keyword">= </span><span class="string">'<a href="http://" rel="nofollow" target="_blank">http://</a>'</span><span class="keyword">.</span><span class="default">$fimage</span><span class="keyword">;<br />                    </span><span class="default">$image </span><span class="keyword">= </span><span class="string">'<a href="http://" rel="nofollow" target="_blank">http://</a>'</span><span class="keyword">.</span><span class="default">$image</span><span class="keyword">;<br />                }<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">f_exist</span><span class="keyword">[</span><span class="default">$image</span><span class="keyword">][</span><span class="string">'exist'</span><span class="keyword">] = </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">url_exists</span><span class="keyword">(</span><span class="default">$fimage</span><span class="keyword">); </span><span class="comment">//for now<br />            </span><span class="keyword">} else {<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">f_exist</span><span class="keyword">[</span><span class="default">$image</span><span class="keyword">][</span><span class="string">'exist'</span><span class="keyword">] = (</span><span class="default">$fimage</span><span class="keyword">!=</span><span class="string">'' </span><span class="keyword">&amp;&amp; </span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$fimage</span><span class="keyword">) &amp;&amp; </span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$fimage</span><span class="keyword">) &amp;&amp; </span><span class="default">is_readable</span><span class="keyword">(</span><span class="default">$fimage</span><span class="keyword">) &amp;&amp; </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$fimage</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">);<br />            }<br />        }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81408">  <div class="votes">
    <div id="Vu81408">
    <a href="/manual/vote-note.php?id=81408&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81408">
    <a href="/manual/vote-note.php?id=81408&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81408" title="50% like this...">
    1
    </div>
  </div>
  <a href="#81408" class="name">
  <strong class="user"><em>stuart</em></strong></a><a class="genanchor" href="#81408"> &para;</a><div class="date" title="2008-02-26 10:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81408">
<div class="phpcode"><code><span class="html">When using file_exists, seems you cannot do:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">foreach (</span><span class="default">$possibles </span><span class="keyword">as </span><span class="default">$poss</span><span class="keyword">)
<br />{
<br />    if ( </span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">SITE_RANGE_IMAGE_PATH </span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">range_id </span><span class="keyword">.</span><span class="string">'/ '</span><span class="keyword">.</span><span class="default">$poss </span><span class="keyword">.</span><span class="string">'.jpg'</span><span class="keyword">) )
<br />    {
<br />        </span><span class="comment">// exists
<br />    </span><span class="keyword">}
<br />    else
<br />    {
<br />        </span><span class="comment">// not found
<br />    </span><span class="keyword">}
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />so you must do:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">foreach (</span><span class="default">$possibles </span><span class="keyword">as </span><span class="default">$poss</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$img </span><span class="keyword">= </span><span class="default">SITE_RANGE_IMAGE_PATH </span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">range_id </span><span class="keyword">.</span><span class="string">'/ '</span><span class="keyword">.</span><span class="default">$poss </span><span class="keyword">.</span><span class="string">'.jpg'
<br />    </span><span class="keyword">if ( </span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">) )
<br />    {
<br />        </span><span class="comment">// exists
<br />    </span><span class="keyword">}
<br />    else
<br />    {
<br />        </span><span class="comment">// not found
<br />    </span><span class="keyword">}
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Then things will work fine.
<br />
<br />This is at least the case on this Windows system running php 5.2.5 and apache 2.2.3
<br />
<br />Not sure if it is down to the concatenation or the fact theres a constant in there, i'm about to run away and test just that...</span></code></div>
  </div>
 </div>
  <div class="note" id="126186">  <div class="votes">
    <div id="Vu126186">
    <a href="/manual/vote-note.php?id=126186&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126186">
    <a href="/manual/vote-note.php?id=126186&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126186" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#126186" class="name">
  <strong class="user"><em>trevorhawes2 at gmail dot com</em></strong></a><a class="genanchor" href="#126186"> &para;</a><div class="date" title="2021-06-23 06:06"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126186">
<div class="phpcode"><code><span class="html">NB: This function expects the full server-related pathname to work.<br /><br />For example, if you run a PHP routine from within, for example, the root folder of your website and and ask:<br /><br />$bstr = file_exists("/images/Proofreading_patients.jpg");<br /><br />You will get FALSE even if that file does exist off root.<br /><br />You need to add<br /><br />$bstr = file_exists(__DIR_."/images/Proofreading_patients.jpg");<br /><br />to get it to return TRUE - ie : /srv/www/mywebsite.com/public/images/Proofreading_patients.jpg</span></code></div>
  </div>
 </div>
  <div class="note" id="107191">  <div class="votes">
    <div id="Vu107191">
    <a href="/manual/vote-note.php?id=107191&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107191">
    <a href="/manual/vote-note.php?id=107191&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107191" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#107191" class="name">
  <strong class="user"><em>DeyV at poczta dot php dot pl</em></strong></a><a class="genanchor" href="#107191"> &para;</a><div class="date" title="2012-01-13 04:47"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107191">
<div class="phpcode"><code><span class="html">Great alternative to file_exists() is stream_resolve_include_path()</span></code></div>
  </div>
 </div>
  <div class="note" id="115024">  <div class="votes">
    <div id="Vu115024">
    <a href="/manual/vote-note.php?id=115024&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115024">
    <a href="/manual/vote-note.php?id=115024&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115024" title="48% like this...">
    -2
    </div>
  </div>
  <a href="#115024" class="name">
  <strong class="user"><em>broken at links dot com</em></strong></a><a class="genanchor" href="#115024"> &para;</a><div class="date" title="2014-05-14 12:29"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115024">
<div class="phpcode"><code><span class="html">file_exists() will return FALSE for broken links<br /><br />$ ln -s does_not_exist my_link<br />$ ls -l<br />lrwxr-xr-x   1 user  group    14 May 13 17:28 my_link -&gt; does_not_exist<br />$ php -r "var_dump(file_exists('my_link'));"<br />bool(false)</span></code></div>
  </div>
 </div>
  <div class="note" id="79118">  <div class="votes">
    <div id="Vu79118">
    <a href="/manual/vote-note.php?id=79118&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79118">
    <a href="/manual/vote-note.php?id=79118&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79118" title="47% like this...">
    -3
    </div>
  </div>
  <a href="#79118" class="name">
  <strong class="user"><em>marufit at gmail dot com</em></strong></a><a class="genanchor" href="#79118"> &para;</a><div class="date" title="2007-11-12 03:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79118">
<div class="phpcode"><code><span class="html">Older php (v4.x) do not work with get_headers() function. So I made this one and working.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">url_exists</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">) {<br />    </span><span class="comment">// Version 4.x supported<br />    </span><span class="default">$handle   </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);<br />    if (</span><span class="default">false </span><span class="keyword">=== </span><span class="default">$handle</span><span class="keyword">)<br />    {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">CURLOPT_HEADER</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />    </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">CURLOPT_FAILONERROR</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);  </span><span class="comment">// this works<br />    </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">CURLOPT_NOBODY</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />    </span><span class="default">$connectable </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br />    </span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);    <br />    return </span><span class="default">$connectable</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126976">  <div class="votes">
    <div id="Vu126976">
    <a href="/manual/vote-note.php?id=126976&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126976">
    <a href="/manual/vote-note.php?id=126976&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126976" title="43% like this...">
    -3
    </div>
  </div>
  <a href="#126976" class="name">
  <strong class="user"><em>Steve GS</em></strong></a><a class="genanchor" href="#126976"> &para;</a><div class="date" title="2022-04-08 09:04"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126976">
<div class="phpcode"><code><span class="html">Wordpress always prepends the full URL to any file it stores in its database so, as noted elsewhere, file_exists() can't find the file since it uses the 'document root', not the URL.  An easy way out of this is to use:<br /><br />file_exists (str_replace (home_url(), $_SERVER['DOCUMENT_ROOT'], $file) )<br /><br />to check if file $file exists.  Note: As from PHP8, 'DOCUMENT_ROOT' must be enclosed within SQUARE BRACKETS, not braces as suggested by ferodano at gmail dot com<br /><br />Or, if not using WP, replace home_url() above with the absolute URL name, eg. '<a href="https://mywebsite.com" rel="nofollow" target="_blank">https://mywebsite.com</a>' - within quotes and no trailing foreslash.</span></code></div>
  </div>
 </div>
  <div class="note" id="124152">  <div class="votes">
    <div id="Vu124152">
    <a href="/manual/vote-note.php?id=124152&amp;page=function.file-exists&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124152">
    <a href="/manual/vote-note.php?id=124152&amp;page=function.file-exists&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124152" title="41% like this...">
    -5
    </div>
  </div>
  <a href="#124152" class="name">
  <strong class="user"><em>varrg</em></strong></a><a class="genanchor" href="#124152"> &para;</a><div class="date" title="2019-08-29 09:55"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124152">
<div class="phpcode"><code><span class="html">file_exists() is vulnerable to race conditions and clearstatcache() is not adequate to avoid it.<br /><br />The following function is a good solution:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">file_exists_safe</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) {<br />    if (!</span><span class="default">$fd </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'xb'</span><span class="keyword">)) {<br />        return </span><span class="default">true</span><span class="keyword">;  </span><span class="comment">// the file already exists<br />    </span><span class="keyword">}<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">);  </span><span class="comment">// the file is now created, we don't need the file handler<br />    </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />The function will create a file if non-existent, following calls will fail because the file exists (in effect being a lock).<br /><br />IMPORTANT: The file will remain on the disk if it was successfully created and you must clean up after you, f.ex. remove it or overwrite it. This step is purposely omitted from the function as to let scripts do calculations all the while being sure the file won't be "seized" by another process.<br /><br />NOTE: This method fails if the above function is not used for checking in all other scripts/processes as it doesn't actually lock the file.<br />FIX: You could flock() the file to prevent that (although all other scripts similarly must check it with flock() then, see <a href="https://www.php.net/manual/en/function.flock.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/function.flock.php</a>). Be sure to unlock and fclose() the file AFTER you're done with it, and not within the above function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">create_and_lock</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) {<br />    if (!</span><span class="default">$fd </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'xb'</span><span class="keyword">)) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    if (!</span><span class="default">flock</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">, </span><span class="default">LOCK_EX</span><span class="keyword">|</span><span class="default">LOCK_NB</span><span class="keyword">)) {  </span><span class="comment">// may fail for other reasons, LOCK_NB will prevent blocking<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">);<br />        </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);  </span><span class="comment">// clean up<br />        </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$fd</span><span class="keyword">;<br />}<br /><br />if (</span><span class="default">$lock </span><span class="keyword">= </span><span class="default">create_and_lock</span><span class="keyword">(</span><span class="string">"foo.txt"</span><span class="keyword">)) {<br />    </span><span class="comment">// do stuff<br />    </span><span class="default">flock</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">, </span><span class="default">LOCK_UN</span><span class="keyword">);  </span><span class="comment">// unlock<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">);  </span><span class="comment">// close<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />SEE ALSO: <a href="https://linux.die.net/man/2/open" rel="nofollow" target="_blank">https://linux.die.net/man/2/open</a> about O_CREAT|O_EXCL (which is used with the 'x' modifier for fopen()) and problems with NFS</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.file-exists&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.file-exists.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
