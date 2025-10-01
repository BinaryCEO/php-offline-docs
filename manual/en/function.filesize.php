<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: filesize - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.filesize.php">
 <link rel="shorturl" href="https://www.php.net/filesize">
 <link rel="alternate" href="https://www.php.net/filesize" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.fileperms.php">
 <link rel="next" href="https://www.php.net/manual/en/function.filetype.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.filesize.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.filesize.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.filesize.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.filesize.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.filesize.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.filesize.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.filesize.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.filesize.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.filesize.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.filesize.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.filesize.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets file size" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: filesize - Manual" />
<meta name="twitter:description" content="Gets file size" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: filesize - Manual" />
<meta itemprop="description" content="Gets file size" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets file size" />

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
        <a href="function.filetype.php">
          filetype &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.fileperms.php">
          &laquo; fileperms        </a>
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
            <option value='en/function.filesize.php' selected="selected">English</option>
            <option value='de/function.filesize.php'>German</option>
            <option value='es/function.filesize.php'>Spanish</option>
            <option value='fr/function.filesize.php'>French</option>
            <option value='it/function.filesize.php'>Italian</option>
            <option value='ja/function.filesize.php'>Japanese</option>
            <option value='pt_BR/function.filesize.php'>Brazilian Portuguese</option>
            <option value='ru/function.filesize.php'>Russian</option>
            <option value='tr/function.filesize.php'>Turkish</option>
            <option value='uk/function.filesize.php'>Ukrainian</option>
            <option value='zh/function.filesize.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.filesize" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">filesize</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filesize</span> &mdash; <span class="dc-title">Gets file size</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.filesize-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>filesize</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Gets the size for the given file.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.filesize-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-function.filesize-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the size of the file in bytes, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> (and generates an error
   of level <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>) in case of an error.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">
    Because PHP&#039;s integer type is signed and many platforms use 32bit integers,
    some filesystem functions may return unexpected results for files which
    are larger than 2GB.
   </span></p></blockquote>
 </div>


 <div class="refsect1 errors" id="refsect1-function.filesize-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
Upon failure, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
</p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.filesize-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2366">
    <p><strong>Example #1 <span class="function"><strong>filesize()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// outputs e.g.  somefile.txt: 1024 bytes<br /><br /></span><span style="color: #0000BB">$filename </span><span style="color: #007700">= </span><span style="color: #DD0000">'somefile.txt'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$filename </span><span style="color: #007700">. </span><span style="color: #DD0000">': ' </span><span style="color: #007700">. </span><span style="color: #0000BB">filesize</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">) . </span><span style="color: #DD0000">' bytes'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.filesize-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">The results of this
function are cached. See <span class="function"><a href="function.clearstatcache.php" class="function">clearstatcache()</a></span> for
more details.</span></p></blockquote>
  <div class="tip"><strong class="tip">Tip</strong><p class="simpara">As of PHP 5.0.0, this function
can also be used with <em>some</em> URL wrappers.  Refer to
<a href="wrappers.php" class="xref">Supported Protocols and Wrappers</a> to determine which wrappers support
<span class="function"><a href="function.stat.php" class="function">stat()</a></span> family of functionality.</p></div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.filesize-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.file-exists.php" class="function" rel="rdfs-seeAlso">file_exists()</a> - Checks whether a file or directory exists</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/filesize.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.filesize%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.filesize&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.filesize.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">34 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="106569">  <div class="votes">
    <div id="Vu106569">
    <a href="/manual/vote-note.php?id=106569&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106569">
    <a href="/manual/vote-note.php?id=106569&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106569" title="72% like this...">
    245
    </div>
  </div>
  <a href="#106569" class="name">
  <strong class="user"><em>rommel at rommelsantor dot com</em></strong></a><a class="genanchor" href="#106569"> &para;</a><div class="date" title="2011-11-19 12:11"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106569">
<div class="phpcode"><code><span class="html">Extremely simple function to get human filesize.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">human_filesize</span><span class="keyword">(</span><span class="default">$bytes</span><span class="keyword">, </span><span class="default">$decimals </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">) {<br />  </span><span class="default">$sz </span><span class="keyword">= </span><span class="string">'BKMGTP'</span><span class="keyword">;<br />  </span><span class="default">$factor </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">((</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$bytes</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">) / </span><span class="default">3</span><span class="keyword">);<br />  return </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%.</span><span class="keyword">{</span><span class="default">$decimals</span><span class="keyword">}</span><span class="string">f"</span><span class="keyword">, </span><span class="default">$bytes </span><span class="keyword">/ </span><span class="default">pow</span><span class="keyword">(</span><span class="default">1024</span><span class="keyword">, </span><span class="default">$factor</span><span class="keyword">)) . @</span><span class="default">$sz</span><span class="keyword">[</span><span class="default">$factor</span><span class="keyword">];<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101996">  <div class="votes">
    <div id="Vu101996">
    <a href="/manual/vote-note.php?id=101996&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101996">
    <a href="/manual/vote-note.php?id=101996&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101996" title="70% like this...">
    64
    </div>
  </div>
  <a href="#101996" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#101996"> &para;</a><div class="date" title="2011-01-21 06:58"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101996">
<div class="phpcode"><code><span class="html">if you recently appended something to file, and closed it then this method will not show appended data:<br /><span class="default">&lt;?php<br /></span><span class="comment">// get contents of a file into a string<br /></span><span class="default">$filename </span><span class="keyword">= </span><span class="string">"/usr/local/something.txt"</span><span class="keyword">;<br /></span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br /></span><span class="default">$contents </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">));<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>You should insert a call to clearstatcache() before calling filesize()<br />I've spent two hours to find that =/</span></code></div>
  </div>
 </div>
  <div class="note" id="120250">  <div class="votes">
    <div id="Vu120250">
    <a href="/manual/vote-note.php?id=120250&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120250">
    <a href="/manual/vote-note.php?id=120250&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120250" title="72% like this...">
    13
    </div>
  </div>
  <a href="#120250" class="name">
  <strong class="user"><em>evgenij at kostanay dot kz</em></strong></a><a class="genanchor" href="#120250"> &para;</a><div class="date" title="2016-12-01 09:05"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120250">
<div class="phpcode"><code><span class="html">Slightly edited version of the function from rommel at rommelsantor dot com. Now it returns a two characters file size which is a bit more convenient to read.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">human_filesize</span><span class="keyword">(</span><span class="default">$bytes</span><span class="keyword">, </span><span class="default">$decimals </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">) {<br />    </span><span class="default">$factor </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">((</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$bytes</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">) / </span><span class="default">3</span><span class="keyword">);<br />    if (</span><span class="default">$factor </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) </span><span class="default">$sz </span><span class="keyword">= </span><span class="string">'KMGT'</span><span class="keyword">;<br />    return </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%.</span><span class="keyword">{</span><span class="default">$decimals</span><span class="keyword">}</span><span class="string">f"</span><span class="keyword">, </span><span class="default">$bytes </span><span class="keyword">/ </span><span class="default">pow</span><span class="keyword">(</span><span class="default">1024</span><span class="keyword">, </span><span class="default">$factor</span><span class="keyword">)) . @</span><span class="default">$sz</span><span class="keyword">[</span><span class="default">$factor </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">] . </span><span class="string">'B'</span><span class="keyword">;<br />}<br /><br />print </span><span class="default">human_filesize</span><span class="keyword">(</span><span class="default">12</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);                </span><span class="comment">// 12B<br /></span><span class="keyword">print </span><span class="default">human_filesize</span><span class="keyword">(</span><span class="default">1234567890</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);        </span><span class="comment">// 1.1498GB<br /></span><span class="keyword">print </span><span class="default">human_filesize</span><span class="keyword">(</span><span class="default">123456789</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);            </span><span class="comment">// 117.7MB<br /></span><span class="keyword">print </span><span class="default">human_filesize</span><span class="keyword">(</span><span class="default">12345678901234</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">);    </span><span class="comment">// 11.22833TB<br /></span><span class="keyword">print </span><span class="default">human_filesize</span><span class="keyword">(</span><span class="default">1234567</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);            </span><span class="comment">// 1.177MB<br /></span><span class="keyword">print </span><span class="default">human_filesize</span><span class="keyword">(</span><span class="default">123456</span><span class="keyword">);                </span><span class="comment">// 120.56KB<br /></span><span class="default">?&gt;<br /></span><br />I removed the P units because strlen doesn't seem to work as expected with integers longer than 14 digits. Though it might be only my system's limitation.</span></code></div>
  </div>
 </div>
  <div class="note" id="121370">  <div class="votes">
    <div id="Vu121370">
    <a href="/manual/vote-note.php?id=121370&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121370">
    <a href="/manual/vote-note.php?id=121370&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121370" title="69% like this...">
    10
    </div>
  </div>
  <a href="#121370" class="name">
  <strong class="user"><em>ivijan dot stefan at gmail dot com</em></strong></a><a class="genanchor" href="#121370"> &para;</a><div class="date" title="2017-07-12 03:02"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121370">
<div class="phpcode"><code><span class="html">This function also can be great for browser caching controll. For example, you have a stylesheet and you want to make sure everyone has the most recent version. You could rename it every time you edit it, but that would be a waste of time. Instead, you can do like: <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="string">'&lt;link rel="stylesheet" href="style.css?ver=1.'</span><span class="keyword">.</span><span class="default">filesize</span><span class="keyword">(</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">).</span><span class="string">'/style.css'</span><span class="keyword">).</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">filemtime</span><span class="keyword">(</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">).</span><span class="string">'/style.css'</span><span class="keyword">).</span><span class="string">'.0"&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Sample output: <br /><br />&lt;link rel="stylesheet" href="style.css?ver=1.8824.1499869132.0"&gt;<br /><br />This also can be apply for JS and also images with same name.</span></code></div>
  </div>
 </div>
  <div class="note" id="112996">  <div class="votes">
    <div id="Vu112996">
    <a href="/manual/vote-note.php?id=112996&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112996">
    <a href="/manual/vote-note.php?id=112996&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112996" title="62% like this...">
    45
    </div>
  </div>
  <a href="#112996" class="name">
  <strong class="user"><em>Arseny Mogilev</em></strong></a><a class="genanchor" href="#112996"> &para;</a><div class="date" title="2013-08-16 10:51"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112996">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/** <br />* Converts bytes into human readable file size. <br />* <br />* @param string $bytes <br />* @return string human readable file size (2,87 Мб)<br />* @author Mogilev Arseny <br />*/ <br /></span><span class="keyword">function </span><span class="default">FileSizeConvert</span><span class="keyword">(</span><span class="default">$bytes</span><span class="keyword">)<br />{<br />    </span><span class="default">$bytes </span><span class="keyword">= </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$bytes</span><span class="keyword">);<br />        </span><span class="default">$arBytes </span><span class="keyword">= array(<br />            </span><span class="default">0 </span><span class="keyword">=&gt; array(<br />                </span><span class="string">"UNIT" </span><span class="keyword">=&gt; </span><span class="string">"TB"</span><span class="keyword">,<br />                </span><span class="string">"VALUE" </span><span class="keyword">=&gt; </span><span class="default">pow</span><span class="keyword">(</span><span class="default">1024</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">)<br />            ),<br />            </span><span class="default">1 </span><span class="keyword">=&gt; array(<br />                </span><span class="string">"UNIT" </span><span class="keyword">=&gt; </span><span class="string">"GB"</span><span class="keyword">,<br />                </span><span class="string">"VALUE" </span><span class="keyword">=&gt; </span><span class="default">pow</span><span class="keyword">(</span><span class="default">1024</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">)<br />            ),<br />            </span><span class="default">2 </span><span class="keyword">=&gt; array(<br />                </span><span class="string">"UNIT" </span><span class="keyword">=&gt; </span><span class="string">"MB"</span><span class="keyword">,<br />                </span><span class="string">"VALUE" </span><span class="keyword">=&gt; </span><span class="default">pow</span><span class="keyword">(</span><span class="default">1024</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)<br />            ),<br />            </span><span class="default">3 </span><span class="keyword">=&gt; array(<br />                </span><span class="string">"UNIT" </span><span class="keyword">=&gt; </span><span class="string">"KB"</span><span class="keyword">,<br />                </span><span class="string">"VALUE" </span><span class="keyword">=&gt; </span><span class="default">1024<br />            </span><span class="keyword">),<br />            </span><span class="default">4 </span><span class="keyword">=&gt; array(<br />                </span><span class="string">"UNIT" </span><span class="keyword">=&gt; </span><span class="string">"B"</span><span class="keyword">,<br />                </span><span class="string">"VALUE" </span><span class="keyword">=&gt; </span><span class="default">1<br />            </span><span class="keyword">),<br />        );<br /><br />    foreach(</span><span class="default">$arBytes </span><span class="keyword">as </span><span class="default">$arItem</span><span class="keyword">)<br />    {<br />        if(</span><span class="default">$bytes </span><span class="keyword">&gt;= </span><span class="default">$arItem</span><span class="keyword">[</span><span class="string">"VALUE"</span><span class="keyword">])<br />        {<br />            </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$bytes </span><span class="keyword">/ </span><span class="default">$arItem</span><span class="keyword">[</span><span class="string">"VALUE"</span><span class="keyword">];<br />            </span><span class="default">$result </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">, </span><span class="string">"," </span><span class="keyword">, </span><span class="default">strval</span><span class="keyword">(</span><span class="default">round</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">))).</span><span class="string">" "</span><span class="keyword">.</span><span class="default">$arItem</span><span class="keyword">[</span><span class="string">"UNIT"</span><span class="keyword">];<br />            break;<br />        }<br />    }<br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121437">  <div class="votes">
    <div id="Vu121437">
    <a href="/manual/vote-note.php?id=121437&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121437">
    <a href="/manual/vote-note.php?id=121437&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121437" title="67% like this...">
    11
    </div>
  </div>
  <a href="#121437" class="name">
  <strong class="user"><em>synnus at gmail dot com</em></strong></a><a class="genanchor" href="#121437"> &para;</a><div class="date" title="2017-07-26 02:13"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121437">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php <br /><br />      </span><span class="comment">// Recover all file sizes larger than &gt; 4GB.<br />      // Works on php 32bits and 64bits and supports linux<br />      // Used the com_dotnet extension<br /><br />     </span><span class="keyword">function </span><span class="default">getSize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) {<br />        </span><span class="default">$size </span><span class="keyword">= </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />        if (</span><span class="default">$size </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">)<br />            if (!(</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">PHP_OS</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">)) == </span><span class="string">'WIN'</span><span class="keyword">)) {<br />                </span><span class="default">$size </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(`</span><span class="string">stat -c%s </span><span class="default">$file</span><span class="keyword">`);<br />            }<br />            else{<br />                </span><span class="default">$fsobj </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"Scripting.FileSystemObject"</span><span class="keyword">);<br />                </span><span class="default">$f </span><span class="keyword">= </span><span class="default">$fsobj</span><span class="keyword">-&gt;</span><span class="default">GetFile</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />                </span><span class="default">$size </span><span class="keyword">= </span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">Size</span><span class="keyword">;<br />            }<br />        return </span><span class="default">$size</span><span class="keyword">;<br />    } <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121406">  <div class="votes">
    <div id="Vu121406">
    <a href="/manual/vote-note.php?id=121406&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121406">
    <a href="/manual/vote-note.php?id=121406&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121406" title="62% like this...">
    15
    </div>
  </div>
  <a href="#121406" class="name">
  <strong class="user"><em>Damien Dussouillez</em></strong></a><a class="genanchor" href="#121406"> &para;</a><div class="date" title="2017-07-20 06:25"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121406">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Return file size (even for file &gt; 2 Gb)<br /> * For file size over PHP_INT_MAX (2 147 483 647), PHP filesize function loops from -PHP_INT_MAX to PHP_INT_MAX.<br /> *<br /> * @param string $path Path of the file<br /> * @return mixed File size or false if error<br /> */<br /></span><span class="keyword">function </span><span class="default">realFileSize</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)<br />{<br />    if (!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">))<br />        return </span><span class="default">false</span><span class="keyword">;<br /><br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br />    <br />    if (!(</span><span class="default">$file </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">)))<br />        return </span><span class="default">false</span><span class="keyword">;<br />    <br />    if (</span><span class="default">$size </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">)<br />    {</span><span class="comment">//Check if it really is a small file (&lt; 2 GB)<br />        </span><span class="keyword">if (</span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">SEEK_END</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">)<br />        {</span><span class="comment">//It really is a small file<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />            return </span><span class="default">$size</span><span class="keyword">;<br />        }<br />    }<br />    <br />    </span><span class="comment">//Quickly jump the first 2 GB with fseek. After that fseek is not working on 32 bit php (it uses int internally)<br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">PHP_INT_MAX </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;<br />    if (</span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">PHP_INT_MAX </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">) !== </span><span class="default">0</span><span class="keyword">)<br />    {<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="default">$length </span><span class="keyword">= </span><span class="default">1024 </span><span class="keyword">* </span><span class="default">1024</span><span class="keyword">;<br />    while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">))<br />    {</span><span class="comment">//Read the file until end<br />        </span><span class="default">$read </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br />        </span><span class="default">$size </span><span class="keyword">= </span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br />    }<br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">bcsub</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">));<br />    <br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />    return </span><span class="default">$size</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119102">  <div class="votes">
    <div id="Vu119102">
    <a href="/manual/vote-note.php?id=119102&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119102">
    <a href="/manual/vote-note.php?id=119102&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119102" title="64% like this...">
    7
    </div>
  </div>
  <a href="#119102" class="name">
  <strong class="user"><em>synnus at gmail dot com</em></strong></a><a class="genanchor" href="#119102"> &para;</a><div class="date" title="2016-04-01 05:54"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119102">
<div class="phpcode"><code><span class="html">// best converting the negative number with File Size . <br />// does not work with files greater than 4GB<br />//<br />// specifically for 32 bit systems. limit conversions filsize is 4GB or <br />// 4294967296. why we get negative numbers? by what the file <br />// pointer of the meter must work with the PHP MAX value is 2147483647.<br />// Offset file : 0 , 1 , 2 , 3 , ... 2147483647 = 2GB <br />// to go higher up the 4GB negative numbers are used<br />// and therefore after 2147483647, we will -2147483647<br />// -2147483647,  -2147483646, -2147483645, -2147483644 ... 0 = 4GB<br />// therefore 0, 2147483647 and -2147483647 to 0. all done 4GB = 4294967296<br />// the first offset to 0 and the last offset to 0 of 4GB should be added in <br />// your compute, so "+ 2" for the number of bytes exate . <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">filsize_32b</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) {<br />    </span><span class="default">$filez </span><span class="keyword">= </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />    if(</span><span class="default">$filez </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) {  return ((</span><span class="default">$filez </span><span class="keyword">+ </span><span class="default">PHP_INT_MAX</span><span class="keyword">) + </span><span class="default">PHP_INT_MAX </span><span class="keyword">+ </span><span class="default">2</span><span class="keyword">); } <br />    else { return </span><span class="default">$filez</span><span class="keyword">; }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114952">  <div class="votes">
    <div id="Vu114952">
    <a href="/manual/vote-note.php?id=114952&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114952">
    <a href="/manual/vote-note.php?id=114952&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114952" title="61% like this...">
    17
    </div>
  </div>
  <a href="#114952" class="name">
  <strong class="user"><em>CertaiN</em></strong></a><a class="genanchor" href="#114952"> &para;</a><div class="date" title="2014-05-05 07:52"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114952">
<div class="phpcode"><code><span class="html">The simplest and most efficient implemention for getting remote filesize:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">remote_filesize</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">) {<br />    static </span><span class="default">$regex </span><span class="keyword">= </span><span class="string">'/^Content-Length: *+\K\d++$/im'</span><span class="keyword">;<br />    if (!</span><span class="default">$fp </span><span class="keyword">= @</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">)) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    if (<br />        isset(</span><span class="default">$http_response_header</span><span class="keyword">) &amp;&amp;<br />        </span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$regex</span><span class="keyword">, </span><span class="default">implode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$http_response_header</span><span class="keyword">), </span><span class="default">$matches</span><span class="keyword">)<br />    ) {<br />        return (int)</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    }<br />    return </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="54698">  <div class="votes">
    <div id="Vu54698">
    <a href="/manual/vote-note.php?id=54698&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54698">
    <a href="/manual/vote-note.php?id=54698&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54698" title="64% like this...">
    5
    </div>
  </div>
  <a href="#54698" class="name">
  <strong class="user"><em>aidan at php dot net</em></strong></a><a class="genanchor" href="#54698"> &para;</a><div class="date" title="2005-07-12 09:01"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54698">
<div class="phpcode"><code><span class="html">This function quickly calculates the size of a directory:
<br /><a href="http://aidanlister.com/repos/v/function.dirsize.php" rel="nofollow" target="_blank">http://aidanlister.com/repos/v/function.dirsize.php</a>
<br />
<br />You can convert filesizes to a human readable size using:
<br /><a href="http://aidanlister.com/repos/v/function.size_readable.php" rel="nofollow" target="_blank">http://aidanlister.com/repos/v/function.size_readable.php</a>
<br />
<br />For a faster (unix only) implementation, see function.disk-total-space, note #34100
<br /><a href="http://www.php.net/manual/en/function.disk-total-space.php#34100" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.disk-total-space.php#34100</a>
<br />
<br />Also of interest is this wikipedia article, discussing the difference between a kilobyte (1000) and a kibibyte (1024).
<br /><a href="http://en.wikipedia.org/wiki/Bytes" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/Bytes</a></span></code></div>
  </div>
 </div>
  <div class="note" id="119435">  <div class="votes">
    <div id="Vu119435">
    <a href="/manual/vote-note.php?id=119435&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119435">
    <a href="/manual/vote-note.php?id=119435&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119435" title="61% like this...">
    12
    </div>
  </div>
  <a href="#119435" class="name">
  <strong class="user"><em>C0nw0nk</em></strong></a><a class="genanchor" href="#119435"> &para;</a><div class="date" title="2016-06-04 06:14"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119435">
<div class="phpcode"><code><span class="html">Here is my super fast method of getting &gt;2GB files to output the correct byte size on any version of windows works with both 32Bit and 64Bit.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">find_filesize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)<br />{<br />    if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">PHP_OS</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">) == </span><span class="string">"WIN"</span><span class="keyword">)<br />    {<br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="string">'for %I in ("'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">.</span><span class="string">'") do @echo %~zI'</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">);<br />        </span><span class="default">$return </span><span class="keyword">= </span><span class="default">$output</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    }<br />    else<br />    {<br />        </span><span class="default">$return </span><span class="keyword">= </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$return</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//Usage : find_filesize("path");<br />//Example :<br /></span><span class="keyword">echo </span><span class="string">"File size is : "</span><span class="keyword">.</span><span class="default">find_filesize</span><span class="keyword">(</span><span class="string">"D:\Server\movie.mp4"</span><span class="keyword">).</span><span class="string">""</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124251">  <div class="votes">
    <div id="Vu124251">
    <a href="/manual/vote-note.php?id=124251&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124251">
    <a href="/manual/vote-note.php?id=124251&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124251" title="61% like this...">
    3
    </div>
  </div>
  <a href="#124251" class="name">
  <strong class="user"><em>John Crocker</em></strong></a><a class="genanchor" href="#124251"> &para;</a><div class="date" title="2019-09-30 12:46"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124251">
<div class="phpcode"><code><span class="html">The first example given may lead one to assume that this function works with a local filename e.g. $fs = filesize("error_log") but if you manually delete some text, then save and close the file, the next time you check filesize("error_log") it will return the original value, because the value is cached for performance reasons. If you didn't know this, it would look like a nasty bug.<br /><br />So, everyone tells you to insert clearstatcache() which is supposed to clear the cached value and allow you to retrieve the current file size but it still does nothing and looks like another bug!<br /><br />However, I found that if you always specify the FULL PATH<br />e.g. $fs = filesize("/user/some/path/error_log");<br />then clearstatcache() is not even needed.</span></code></div>
  </div>
 </div>
  <div class="note" id="112806">  <div class="votes">
    <div id="Vu112806">
    <a href="/manual/vote-note.php?id=112806&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112806">
    <a href="/manual/vote-note.php?id=112806&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112806" title="61% like this...">
    6
    </div>
  </div>
  <a href="#112806" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#112806"> &para;</a><div class="date" title="2013-07-24 10:57"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112806">
<div class="phpcode"><code><span class="html">This functions returns the exact file size for file larger than 2 GB on 32 bit OS:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">file_get_size</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) {<br />    </span><span class="comment">//open file<br />    </span><span class="default">$fh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">); <br />    </span><span class="comment">//declare some variables<br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="string">"0"</span><span class="keyword">;<br />    </span><span class="default">$char </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    </span><span class="comment">//set file pointer to 0; I'm a little bit paranoid, you can remove this<br />    </span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">SEEK_SET</span><span class="keyword">);<br />    </span><span class="comment">//set multiplicator to zero<br />    </span><span class="default">$count </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    while (</span><span class="default">true</span><span class="keyword">) {<br />        </span><span class="comment">//jump 1 MB forward in file<br />        </span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">1048576</span><span class="keyword">, </span><span class="default">SEEK_CUR</span><span class="keyword">);<br />        </span><span class="comment">//check if we actually left the file<br />        </span><span class="keyword">if ((</span><span class="default">$char </span><span class="keyword">= </span><span class="default">fgetc</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {<br />            </span><span class="comment">//if not, go on<br />            </span><span class="default">$count </span><span class="keyword">++;<br />        } else {<br />            </span><span class="comment">//else jump back where we were before leaving and exit loop<br />            </span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, -</span><span class="default">1048576</span><span class="keyword">, </span><span class="default">SEEK_CUR</span><span class="keyword">);<br />            break;<br />        }<br />    }<br />    </span><span class="comment">//we could make $count jumps, so the file is at least $count * 1.000001 MB large<br />    //1048577 because we jump 1 MB and fgetc goes 1 B forward too<br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">bcmul</span><span class="keyword">(</span><span class="string">"1048577"</span><span class="keyword">, </span><span class="default">$count</span><span class="keyword">);<br />    </span><span class="comment">//now count the last few bytes; they're always less than 1048576 so it's quite fast<br />    </span><span class="default">$fine </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    while(</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$char </span><span class="keyword">= </span><span class="default">fgetc</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">))) {<br />        </span><span class="default">$fine </span><span class="keyword">++;<br />    }<br />    </span><span class="comment">//and add them<br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">$fine</span><span class="keyword">);<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);<br />    return </span><span class="default">$size</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119106">  <div class="votes">
    <div id="Vu119106">
    <a href="/manual/vote-note.php?id=119106&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119106">
    <a href="/manual/vote-note.php?id=119106&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119106" title="61% like this...">
    3
    </div>
  </div>
  <a href="#119106" class="name">
  <strong class="user"><em>synnus at gmail dot com</em></strong></a><a class="genanchor" href="#119106"> &para;</a><div class="date" title="2016-04-02 02:32"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119106">
<div class="phpcode"><code><span class="html">// extract filesize with command dir windows 10<br />// is ok for all system 32/64 and the best compatibility  for Dummy file<br />// but cant return value in (int) for best return use Float  <br /><br /><span class="default">&lt;?php <br /><br />filesize_dir</span><span class="keyword">(</span><span class="string">"d:\\test.mkv"</span><span class="keyword">); </span><span class="comment">//11.5GB =&gt; return (float) 12401880207 <br /><br /></span><span class="keyword">function </span><span class="default">filesize_dir</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) {<br />    </span><span class="default">exec</span><span class="keyword">(</span><span class="string">'dir ' </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$inf</span><span class="keyword">);<br />    </span><span class="default">$size_raw </span><span class="keyword">= </span><span class="default">$inf</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">];<br />    </span><span class="default">$size_exp </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">$size_raw</span><span class="keyword">);<br />    </span><span class="default">$size_ext </span><span class="keyword">= </span><span class="default">$size_exp</span><span class="keyword">[</span><span class="default">19</span><span class="keyword">];<br />    </span><span class="default">$size_int </span><span class="keyword">= (float) </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">), </span><span class="string">''</span><span class="keyword">, </span><span class="default">$size_ext</span><span class="keyword">);<br />    return </span><span class="default">$size_int</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119105">  <div class="votes">
    <div id="Vu119105">
    <a href="/manual/vote-note.php?id=119105&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119105">
    <a href="/manual/vote-note.php?id=119105&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119105" title="60% like this...">
    4
    </div>
  </div>
  <a href="#119105" class="name">
  <strong class="user"><em>synnus at gmail dot com</em></strong></a><a class="genanchor" href="#119105"> &para;</a><div class="date" title="2016-04-02 01:09"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119105">
<div class="phpcode"><code><span class="html">// use system windows for give filesize <br />// best for php 32bit or php 64bit<br />// I do not know if it works on other windows, but on Windows 10 works well here<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="default">filesize_cmd</span><span class="keyword">(</span><span class="string">'c:\\'</span><span class="keyword">, </span><span class="string">'log.txt'</span><span class="keyword">); </span><span class="comment">//return  1135<br /><br /></span><span class="keyword">function </span><span class="default">filesize_cmd</span><span class="keyword">(</span><span class="default">$folder</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">) {<br />return </span><span class="default">exec</span><span class="keyword">(</span><span class="string">'forfiles /p '</span><span class="keyword">.</span><span class="default">$folder</span><span class="keyword">.</span><span class="string">' /m "'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">.</span><span class="string">'" /c "cmd /c echo @fsize"'</span><span class="keyword">); <br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123515">  <div class="votes">
    <div id="Vu123515">
    <a href="/manual/vote-note.php?id=123515&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123515">
    <a href="/manual/vote-note.php?id=123515&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123515" title="60% like this...">
    1
    </div>
  </div>
  <a href="#123515" class="name">
  <strong class="user"><em>PHP-Hasan</em></strong></a><a class="genanchor" href="#123515"> &para;</a><div class="date" title="2019-01-12 05:05"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123515">
<div class="phpcode"><code><span class="html">Under Windows 10 filesize obviously cannot work with relative path names. Use absolute path instead. $size = filesize(".\\myfile.txt"); does not work for me while "d:\\MyFiles\\Myfile.txt" will do. The same applys to similar functions like is_file() or stat(). They won't work correctly unless given an absolute path.</span></code></div>
  </div>
 </div>
  <div class="note" id="121325">  <div class="votes">
    <div id="Vu121325">
    <a href="/manual/vote-note.php?id=121325&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121325">
    <a href="/manual/vote-note.php?id=121325&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121325" title="60% like this...">
    2
    </div>
  </div>
  <a href="#121325" class="name">
  <strong class="user"><em>mbh789 at gmail dot com</em></strong></a><a class="genanchor" href="#121325"> &para;</a><div class="date" title="2017-07-06 09:27"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121325">
<div class="phpcode"><code><span class="html">function dir_size($file) {<br />   //tested on win 7x64 php 5.4 <br />    exec('dir /s /a "' . $file.'"', $inf);<br />    $r=explode(' ',$inf[count($inf)-2]);<br />    $rr = preg_replace('~[^\d]+~','',$r[count($r)-2]);<br />    return $rr;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="118788">  <div class="votes">
    <div id="Vu118788">
    <a href="/manual/vote-note.php?id=118788&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118788">
    <a href="/manual/vote-note.php?id=118788&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118788" title="60% like this...">
    2
    </div>
  </div>
  <a href="#118788" class="name">
  <strong class="user"><em>honza dot kuchar at grifart dot cz</em></strong></a><a class="genanchor" href="#118788"> &para;</a><div class="date" title="2016-02-05 09:43"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118788">
<div class="phpcode"><code><span class="html">For files bigger then 2 GB use my library called Big File Tools. <a href="https://github.com/jkuchar/BigFileTools." rel="nofollow" target="_blank">https://github.com/jkuchar/BigFileTools.</a> More details on stackoverflow: <a href="http://stackoverflow.com/a/35233556/631369" rel="nofollow" target="_blank">http://stackoverflow.com/a/35233556/631369</a></span></code></div>
  </div>
 </div>
  <div class="note" id="84130">  <div class="votes">
    <div id="Vu84130">
    <a href="/manual/vote-note.php?id=84130&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84130">
    <a href="/manual/vote-note.php?id=84130&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84130" title="59% like this...">
    5
    </div>
  </div>
  <a href="#84130" class="name">
  <strong class="user"><em>Supermagnus</em></strong></a><a class="genanchor" href="#84130"> &para;</a><div class="date" title="2008-06-30 03:38"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84130">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">getSizeFile</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">) {
<br />    if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">)==</span><span class="string">'http'</span><span class="keyword">) {
<br />        </span><span class="default">$x </span><span class="keyword">= </span><span class="default">array_change_key_case</span><span class="keyword">(</span><span class="default">get_headers</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">),</span><span class="default">CASE_LOWER</span><span class="keyword">);
<br />        if ( </span><span class="default">strcasecmp</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="string">'HTTP/1.1 200 OK'</span><span class="keyword">) != </span><span class="default">0 </span><span class="keyword">) { </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">[</span><span class="string">'content-length'</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">]; }
<br />        else { </span><span class="default">$x </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">[</span><span class="string">'content-length'</span><span class="keyword">]; }
<br />    }
<br />    else { </span><span class="default">$x </span><span class="keyword">= @</span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">); }
<br />
<br />    return </span><span class="default">$x</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />In case of you have a redirection in the server (like Redirect Permanent in the .htaccess)
<br />
<br />In this case we have for exemple:
<br />    [content-length] =&gt; Array
<br />
<br />        (
<br />
<br />            [0] =&gt; 294          // Size requested file
<br />
<br />            [1] =&gt; 357556     // Real Size redirected file
<br />
<br />        )</span></code></div>
  </div>
 </div>
  <div class="note" id="113457">  <div class="votes">
    <div id="Vu113457">
    <a href="/manual/vote-note.php?id=113457&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113457">
    <a href="/manual/vote-note.php?id=113457&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113457" title="57% like this...">
    6
    </div>
  </div>
  <a href="#113457" class="name">
  <strong class="user"><em>linda dot collins at mailinator dot com</em></strong></a><a class="genanchor" href="#113457"> &para;</a><div class="date" title="2013-10-13 02:08"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113457">
<div class="phpcode"><code><span class="html">A fast implementation that determines actual file size of large files (&gt;2GB) on 32-bit PHP:<br /><br />function RealFileSize($fp)<br />{<br />    $pos = 0;<br />    $size = 1073741824;<br />    fseek($fp, 0, SEEK_SET);<br />    while ($size &gt; 1)<br />    {<br />        fseek($fp, $size, SEEK_CUR);<br /><br />        if (fgetc($fp) === false)<br />        {<br />            fseek($fp, -$size, SEEK_CUR);<br />            $size = (int)($size / 2);<br />        }<br />        else<br />        {<br />            fseek($fp, -1, SEEK_CUR);<br />            $pos += $size;<br />        }<br />    }<br /><br />    while (fgetc($fp) !== false)  $pos++;<br /><br />    return $pos;<br />}<br /><br />Input is an open file handle.  Return value is an integer for file sizes &lt; 4GB, floating-point otherwise.<br /><br />This starts out by skipping ~1GB at a time, reads a character in, repeats.  When it gets into the last GB, it halves the size whenever the read fails.  The last couple of bytes are just read in.<br /><br />Some people might have concerns over this function because $pos will become a floating point number after exceeding integer limits and they know of floating point's tendencies to be inaccurate.  On most computers that correctly implement the IEEE floating point spec, $pos will be accurate out to around 9 *petabytes*.  Unless you are working with multi-petabyte files in PHP or the code is executing on strange hardware, this function is going to be more than sufficient.  Every part of this function has been carefully crafted to deal with 32-bit deficiencies.</span></code></div>
  </div>
 </div>
  <div class="note" id="80959">  <div class="votes">
    <div id="Vu80959">
    <a href="/manual/vote-note.php?id=80959&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80959">
    <a href="/manual/vote-note.php?id=80959&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80959" title="58% like this...">
    5
    </div>
  </div>
  <a href="#80959" class="name">
  <strong class="user"><em>jason dot whitehead dot tas at gmail dot com</em></strong></a><a class="genanchor" href="#80959"> &para;</a><div class="date" title="2008-02-08 03:14"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80959">
<div class="phpcode"><code><span class="html">I have created a handy function, using parts of code from kaspernj at gmail dot com and md2perpe at gmail dot com, which should get file sizes &gt; 4GB on Windows, Linux and Mac  (at least).
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">function </span><span class="default">getSize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) {
<br />        </span><span class="default">$size </span><span class="keyword">= </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />        if (</span><span class="default">$size </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">)
<br />            if (!(</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">PHP_OS</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">)) == </span><span class="string">'WIN'</span><span class="keyword">))
<br />                </span><span class="default">$size </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(`</span><span class="string">stat -c%s </span><span class="default">$file</span><span class="keyword">`);
<br />            else{
<br />                </span><span class="default">$fsobj </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"Scripting.FileSystemObject"</span><span class="keyword">);
<br />                </span><span class="default">$f </span><span class="keyword">= </span><span class="default">$fsobj</span><span class="keyword">-&gt;</span><span class="default">GetFile</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />                </span><span class="default">$size </span><span class="keyword">= </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">Size</span><span class="keyword">;
<br />            }
<br />        return </span><span class="default">$size</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125204">  <div class="votes">
    <div id="Vu125204">
    <a href="/manual/vote-note.php?id=125204&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125204">
    <a href="/manual/vote-note.php?id=125204&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125204" title="57% like this...">
    1
    </div>
  </div>
  <a href="#125204" class="name">
  <strong class="user"><em>php at yurgon dot de</em></strong></a><a class="genanchor" href="#125204"> &para;</a><div class="date" title="2020-07-24 12:27"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125204">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// Quick example to test the return value in order to tell a 0 byte file from a failed call to filesize()<br /><br /></span><span class="default">$size </span><span class="keyword">= </span><span class="default">filesize</span><span class="keyword">(</span><span class="string">"some.file"</span><span class="keyword">);<br /><br />if (</span><span class="default">$size </span><span class="keyword">=== </span><span class="default">FALSE</span><span class="keyword">) {<br />  echo </span><span class="string">"filesize not available"</span><span class="keyword">;<br />} else {<br />  echo </span><span class="string">"some.file is </span><span class="default">$size</span><span class="string"> bytes long"</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// A shorter version, slightly different<br /></span><span class="keyword">if ( (</span><span class="default">$size </span><span class="keyword">= </span><span class="default">filesize</span><span class="keyword">(</span><span class="string">"some.file"</span><span class="keyword">)) !== </span><span class="default">FALSE</span><span class="keyword">)<br />  echo </span><span class="string">"some.file is </span><span class="default">$size</span><span class="string"> bytes long"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116205">  <div class="votes">
    <div id="Vu116205">
    <a href="/manual/vote-note.php?id=116205&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116205">
    <a href="/manual/vote-note.php?id=116205&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116205" title="56% like this...">
    2
    </div>
  </div>
  <a href="#116205" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#116205"> &para;</a><div class="date" title="2014-11-21 04:01"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116205">
<div class="phpcode"><code><span class="html">Here a function to get the size of a file in a human understanding way with decimal separator, thousand separator, decimals...<br /><br />function convertFileSize($file, $size=null, $decimals=2, $dec_sep='.', $thousands_sep=','){<br /> if (!is_file($file)){<br />  return "El fichero no existe";<br /> }<br /> $bytes = filesize($file);<br /> $sizes = 'BKMGTP';<br /> if (isset($size)){<br />  $factor = strpos($sizes, $size[0]);<br />  if ($factor===false){<br />   return "El tamaño debe ser B, K, M, G, T o P";<br />  }<br /> } else {<br />  $factor = floor((strlen($bytes) - 1) / 3);<br />  $size = $sizes[$factor];<br /> }<br /> return number_format($bytes / pow(1024, $factor), $decimals, $dec_sep, $thousands_sep).' '.$size;<br />}<br /><br />Source: <a href="http://softontherocks.blogspot.com/2014/11/obtener-el-tamano-de-un-fichero-y.html" rel="nofollow" target="_blank">http://softontherocks.blogspot.com/2014/11/obtener-el-tamano-de-un-fichero-y.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="101883">  <div class="votes">
    <div id="Vu101883">
    <a href="/manual/vote-note.php?id=101883&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101883">
    <a href="/manual/vote-note.php?id=101883&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101883" title="56% like this...">
    3
    </div>
  </div>
  <a href="#101883" class="name">
  <strong class="user"><em>frank (at) haua dot net</em></strong></a><a class="genanchor" href="#101883"> &para;</a><div class="date" title="2011-01-15 06:19"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101883">
<div class="phpcode"><code><span class="html">I have a cli script running that use the filesize function on a ssh2_sftp connection. It has the &gt;2Gb limit issue, while it does not have that issue locally. I have managed to get around this by doing a "du -sb" command through ssh2_shell.
<br />
<br />The following function takes the ssh2_connect resource and the path as input. It may not be neat, but it solves the problem for the moment.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">fSSHFileSize</span><span class="keyword">(</span><span class="default">$oConn</span><span class="keyword">, </span><span class="default">$sPath</span><span class="keyword">) {
<br />    if(</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$oShell </span><span class="keyword">= @</span><span class="default">ssh2_shell</span><span class="keyword">(</span><span class="default">$oConn</span><span class="keyword">, </span><span class="string">'xterm'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">500</span><span class="keyword">, </span><span class="default">24</span><span class="keyword">, </span><span class="default">SSH2_TERM_UNIT_CHARS</span><span class="keyword">))) {
<br />        </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$oShell</span><span class="keyword">, </span><span class="string">"du -sb '"</span><span class="keyword">.</span><span class="default">$sPath</span><span class="keyword">.</span><span class="string">"'"</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">);
<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);
<br />        while(</span><span class="default">$sLine </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$oShell</span><span class="keyword">)) {
<br />            </span><span class="default">flush</span><span class="keyword">();
<br />            </span><span class="default">$aResult</span><span class="keyword">[] = </span><span class="default">$sLine</span><span class="keyword">;
<br />        }
<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$oShell</span><span class="keyword">);
<br />        </span><span class="default">$iSize </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$aResult</span><span class="keyword">) &gt; </span><span class="default">1</span><span class="keyword">) {
<br />            </span><span class="default">$sTemp </span><span class="keyword">= </span><span class="default">$aResult</span><span class="keyword">[</span><span class="default">count</span><span class="keyword">(</span><span class="default">$aResult</span><span class="keyword">)-</span><span class="default">2</span><span class="keyword">];
<br />            </span><span class="default">$sSize </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$sTemp</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$sTemp</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">9</span><span class="keyword">)));
<br />            if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$sSize</span><span class="keyword">))) {
<br />                </span><span class="default">$iTemp </span><span class="keyword">= (int)</span><span class="default">$sSize</span><span class="keyword">;
<br />                if(</span><span class="default">$iTemp </span><span class="keyword">&gt; </span><span class="string">"2000000000"</span><span class="keyword">) </span><span class="default">$iSize </span><span class="keyword">= </span><span class="default">$iTemp</span><span class="keyword">;
<br />            }
<br />        }
<br />        return </span><span class="default">$iSize</span><span class="keyword">;
<br />    }
<br />    return </span><span class="default">0</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120115">  <div class="votes">
    <div id="Vu120115">
    <a href="/manual/vote-note.php?id=120115&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120115">
    <a href="/manual/vote-note.php?id=120115&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120115" title="55% like this...">
    2
    </div>
  </div>
  <a href="#120115" class="name">
  <strong class="user"><em>synnus at gmail dot com</em></strong></a><a class="genanchor" href="#120115"> &para;</a><div class="date" title="2016-11-03 12:52"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120115">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /> </span><span class="comment">// File size for windows <br /> // if filesize() php &gt; PHP_INT_MAX (4 294 967 296) :: failled<br /> // filesize_cmd returns the value measured by windows<br /><br /></span><span class="keyword">function </span><span class="default">filesize_cmd</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) {<br />    </span><span class="default">$pth </span><span class="keyword">= </span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);        <br />    </span><span class="default">$fz </span><span class="keyword">= </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />    </span><span class="default">$fx </span><span class="keyword">= </span><span class="default">exec</span><span class="keyword">(</span><span class="string">'forfiles /p ' </span><span class="keyword">. </span><span class="default">$pth</span><span class="keyword">[</span><span class="string">'dirname'</span><span class="keyword">] . </span><span class="string">' /m "' </span><span class="keyword">. </span><span class="default">$pth</span><span class="keyword">[</span><span class="string">'basename'</span><span class="keyword">] . </span><span class="string">'" /c "cmd /c echo @fsize"'</span><span class="keyword">);    <br />    if(</span><span class="default">$fz </span><span class="keyword">!= </span><span class="default">$fx</span><span class="keyword">) { return </span><span class="default">$fx</span><span class="keyword">; }<br />    return </span><span class="default">$fz</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79023">  <div class="votes">
    <div id="Vu79023">
    <a href="/manual/vote-note.php?id=79023&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79023">
    <a href="/manual/vote-note.php?id=79023&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79023" title="56% like this...">
    3
    </div>
  </div>
  <a href="#79023" class="name">
  <strong class="user"><em>webmaster at eclipse org</em></strong></a><a class="genanchor" href="#79023"> &para;</a><div class="date" title="2007-11-07 07:30"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79023">
<div class="phpcode"><code><span class="html">On 64-bit platforms, this seems quite reliable for getting the filesize of files &gt; 4GB
<br />
<br /><span class="default">&lt;?php
<br />$a </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);
<br /></span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">SEEK_END</span><span class="keyword">);
<br /></span><span class="default">$filesize </span><span class="keyword">= </span><span class="default">ftell</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);
<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92462">  <div class="votes">
    <div id="Vu92462">
    <a href="/manual/vote-note.php?id=92462&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92462">
    <a href="/manual/vote-note.php?id=92462&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92462" title="53% like this...">
    2
    </div>
  </div>
  <a href="#92462" class="name">
  <strong class="user"><em>tmont</em></strong></a><a class="genanchor" href="#92462"> &para;</a><div class="date" title="2009-07-25 02:05"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92462">
<div class="phpcode"><code><span class="html">Here's the best way (that I've found) to get the size of a remote file. Note that HEAD requests don't get the actual body of the request, they just retrieve the headers. So making a HEAD request to a resource that is 100MB will take the same amount of time as a HEAD request to a resource that is 1KB.<br /><br /><span class="default">&lt;?php<br />$remoteFile </span><span class="keyword">= </span><span class="string">'<a href="http://us.php.net/get/php-5.2.10.tar.bz2/from/this/mirror" rel="nofollow" target="_blank">http://us.php.net/get/php-5.2.10.tar.bz2/from/this/mirror</a>'</span><span class="keyword">;<br /></span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(</span><span class="default">$remoteFile</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_NOBODY</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_HEADER</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_FOLLOWLOCATION</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">//not necessary unless the file redirects (like the PHP example we're using here)<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /></span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br />if (</span><span class="default">$data </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />  echo </span><span class="string">'cURL failed'</span><span class="keyword">;<br />  exit;<br />}<br /><br /></span><span class="default">$contentLength </span><span class="keyword">= </span><span class="string">'unknown'</span><span class="keyword">;<br /></span><span class="default">$status </span><span class="keyword">= </span><span class="string">'unknown'</span><span class="keyword">;<br />if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^HTTP\/1\.[01] (\d\d\d)/'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">)) {<br />  </span><span class="default">$status </span><span class="keyword">= (int)</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />}<br />if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/Content-Length: (\d+)/'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">)) {<br />  </span><span class="default">$contentLength </span><span class="keyword">= (int)</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />}<br /><br />echo </span><span class="string">'HTTP Status: ' </span><span class="keyword">. </span><span class="default">$status </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">'Content-Length: ' </span><span class="keyword">. </span><span class="default">$contentLength</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Result:<br /><br />HTTP Status: 302<br />Content-Length: 8808759</span></code></div>
  </div>
 </div>
  <div class="note" id="115792">  <div class="votes">
    <div id="Vu115792">
    <a href="/manual/vote-note.php?id=115792&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115792">
    <a href="/manual/vote-note.php?id=115792&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115792" title="51% like this...">
    1
    </div>
  </div>
  <a href="#115792" class="name">
  <strong class="user"><em>k dot reznichak at pcpin dot com</em></strong></a><a class="genanchor" href="#115792"> &para;</a><div class="date" title="2014-09-24 10:19"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115792">
<div class="phpcode"><code><span class="html">Here ist the very fast and reliable way to get size of large files &gt; 2Gb on 32bit and 64bit platforms.<br /><br /><span class="default">&lt;?php<br />  </span><span class="comment">/**<br />   * Get the size of file, platform- and architecture-independant.<br />   * This function supports 32bit and 64bit architectures and works fith large files &gt; 2 GB<br />   * The return value type depends on platform/architecture: (float) when PHP_INT_SIZE &lt; 8 or (int) otherwise<br />   * @param   resource $fp<br />   * @return  mixed (int|float) File size on success or (bool) FALSE on error<br />   */<br />  </span><span class="keyword">function </span><span class="default">my_filesize</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">) {<br />    </span><span class="default">$return </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    if (</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) {<br />      if (</span><span class="default">PHP_INT_SIZE </span><span class="keyword">&lt; </span><span class="default">8</span><span class="keyword">) {<br />        </span><span class="comment">// 32bit<br />        </span><span class="keyword">if (</span><span class="default">0 </span><span class="keyword">=== </span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">SEEK_END</span><span class="keyword">)) {<br />          </span><span class="default">$return </span><span class="keyword">= </span><span class="default">0.0</span><span class="keyword">;<br />          </span><span class="default">$step </span><span class="keyword">= </span><span class="default">0x7FFFFFFF</span><span class="keyword">;<br />          while (</span><span class="default">$step </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />            if (</span><span class="default">0 </span><span class="keyword">=== </span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, - </span><span class="default">$step</span><span class="keyword">, </span><span class="default">SEEK_CUR</span><span class="keyword">)) {<br />              </span><span class="default">$return </span><span class="keyword">+= </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$step</span><span class="keyword">);<br />            } else {<br />              </span><span class="default">$step </span><span class="keyword">&gt;&gt;= </span><span class="default">1</span><span class="keyword">;<br />            }<br />          }<br />        }<br />      } elseif (</span><span class="default">0 </span><span class="keyword">=== </span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">SEEK_END</span><span class="keyword">)) {<br />        </span><span class="comment">// 64bit<br />        </span><span class="default">$return </span><span class="keyword">= </span><span class="default">ftell</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />      }<br />    }<br />    return </span><span class="default">$return</span><span class="keyword">;<br />  }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130010">  <div class="votes">
    <div id="Vu130010">
    <a href="/manual/vote-note.php?id=130010&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130010">
    <a href="/manual/vote-note.php?id=130010&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130010" title="no votes...">
    0
    </div>
  </div>
  <a href="#130010" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#130010"> &para;</a><div class="date" title="2025-02-07 11:55"><strong>7 months ago</strong></div>
  <div class="text" id="Hcom130010">
<div class="phpcode"><code><span class="html">#Human File Size<br />function human_filesize($bytes, $decimals = 2) {<br />  $sz = ["B", "KB", "MB", "GB", "TB", "PB"];<br />  if($bytes &lt; 1024) $decimals = 0;<br />  $factor = floor((strlen($bytes) - 1) / 3);<br />  return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="64450">  <div class="votes">
    <div id="Vu64450">
    <a href="/manual/vote-note.php?id=64450&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64450">
    <a href="/manual/vote-note.php?id=64450&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64450" title="50% like this...">
    0
    </div>
  </div>
  <a href="#64450" class="name">
  <strong class="user"><em>core58 at mail dot ru</em></strong></a><a class="genanchor" href="#64450"> &para;</a><div class="date" title="2006-04-14 08:21"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64450">
<div class="phpcode"><code><span class="html">some notes and modifications to previous post.
<br />refering to RFC, when using HTTP/1.1 your request (either GET or POST or HEAD) must contain Host header string, opposite to HTTP/1.1 where Host ain't required. but there's no sure how your remote server would treat the request so you can add Host anyway (it won't be an error for HTTP/1.0).
<br />host value _must_ be a host name (not CNAME and not IP address).
<br />
<br />this function catches response, containing Location header and recursively sends HEAD request to host where we are moved until final response is met.
<br />(you can experience such redirections often when downloading something from php scripts or some hash links that use apache mod_rewrite. most all of dowloading masters handle 302 redirects correctly, so this code does it too (running recursively thru 302 redirections).)
<br />
<br />[$counter302] specify how much times your allow this function to jump if redirections are met. If initial limit (5 is default) expired -- it returns 0 (should be modified for your purposes whatever).0
<br />ReadHeader() function is listed in previous post
<br />(param description is placed there too).
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">remote_filesize_thru</span><span class="keyword">( </span><span class="default">$ipAddress</span><span class="keyword">, </span><span class="default">$url</span><span class="keyword">, </span><span class="default">$counter302 </span><span class="keyword">= </span><span class="default">5 </span><span class="keyword">)
<br />{
<br />    </span><span class="default">$socket </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">( </span><span class="string">"10.233.225.2"</span><span class="keyword">, </span><span class="default">8080 </span><span class="keyword">);
<br />    if( !</span><span class="default">$socket </span><span class="keyword">)
<br />    {
<br />        </span><span class="comment">// failed to open TCP socket connection
<br />        // do something sensible here besides exit();
<br />        </span><span class="keyword">echo </span><span class="string">"&lt;br&gt;failed to open socket for [</span><span class="default">$ipAddress</span><span class="string">]"</span><span class="keyword">;
<br />        exit();
<br />    }
<br />                    
<br />    </span><span class="comment">// just send HEAD request to server
<br />    </span><span class="default">$head </span><span class="keyword">= </span><span class="string">"HEAD </span><span class="default">$url</span><span class="string"> HTTP/1.0\r\nConnection: Close\r\n\r\n"</span><span class="keyword">;
<br />    </span><span class="comment">// you may use HTTP/1.1 instead, then your request head string _must_ contain "Host: " header
<br />    </span><span class="default">fwrite</span><span class="keyword">( </span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$head </span><span class="keyword">);
<br />        
<br />    </span><span class="comment">// read the response header
<br />    </span><span class="default">$header </span><span class="keyword">= </span><span class="default">ReadHeader</span><span class="keyword">( </span><span class="default">$socket </span><span class="keyword">);
<br />    if( !</span><span class="default">$header </span><span class="keyword">)
<br />    {
<br />        </span><span class="comment">// handle empty response here the way you need...
<br />        </span><span class="default">Header</span><span class="keyword">( </span><span class="string">"HTTP/1.1 404 Not Found" </span><span class="keyword">);
<br />        exit();
<br />    }
<br />    
<br />    </span><span class="default">fclose</span><span class="keyword">( </span><span class="default">$socket </span><span class="keyword">);
<br />    
<br />    </span><span class="comment">// check for "Location" header
<br />    </span><span class="default">$locationMarker </span><span class="keyword">= </span><span class="string">"Location: "</span><span class="keyword">;
<br />    </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">( </span><span class="default">$header</span><span class="keyword">, </span><span class="default">$locationMarker </span><span class="keyword">);
<br />    if( </span><span class="default">$pos </span><span class="keyword">&gt; </span><span class="default">0 </span><span class="keyword">)
<br />    {
<br />            </span><span class="default">$counter302</span><span class="keyword">--;
<br />            if( </span><span class="default">$counter302 </span><span class="keyword">&lt; </span><span class="default">0 </span><span class="keyword">)
<br />            {
<br />                     </span><span class="comment">// redirect limit (5 by default) expired -- return some warning or do something sensible here
<br />                    </span><span class="keyword">echo </span><span class="string">"warning: too long redirection sequence"</span><span class="keyword">;
<br />                    return </span><span class="default">0</span><span class="keyword">;
<br />            }
<br />
<br />            </span><span class="comment">// Location is present -- we should determine target host and move there, like any downloading masters do...
<br />            // no need to use regex here
<br />            </span><span class="default">$end </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">( </span><span class="default">$header</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$pos </span><span class="keyword">);
<br />            </span><span class="default">$location </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">( </span><span class="default">$header</span><span class="keyword">, </span><span class="default">$pos </span><span class="keyword">+ </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$locationMarker </span><span class="keyword">), </span><span class="default">$end </span><span class="keyword">- </span><span class="default">$pos </span><span class="keyword">- </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$locationMarker </span><span class="keyword">) ), </span><span class="string">"\\r\\n" </span><span class="keyword">);
<br />             
<br />             </span><span class="comment">// extract pure host (without "<a href="http://" rel="nofollow" target="_blank">http://</a>")
<br />             </span><span class="default">$host </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">( </span><span class="string">"/"</span><span class="keyword">, </span><span class="default">$location </span><span class="keyword">);
<br />             </span><span class="default">$ipa </span><span class="keyword">= </span><span class="default">gethostbyname</span><span class="keyword">( </span><span class="default">$host</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] );
<br />             </span><span class="comment">// move to Location
<br />             </span><span class="keyword">return </span><span class="default">remote_filesize_thru</span><span class="keyword">( </span><span class="default">$ipa</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">, </span><span class="default">$counter302 </span><span class="keyword">);
<br />    }
<br />        
<br />    </span><span class="comment">// try to acquire Content-Length within the response
<br />    </span><span class="default">$regex </span><span class="keyword">= </span><span class="string">'/Content-Length:\s([0-9].+?)\s/'</span><span class="keyword">;
<br />    </span><span class="default">$count </span><span class="keyword">= </span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$regex</span><span class="keyword">, </span><span class="default">$header</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);
<br />                        
<br />    </span><span class="comment">// if there was a Content-Length field, its value
<br />    // will now be in $matches[1]
<br />    </span><span class="keyword">if( isset( </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] ) )
<br />          </span><span class="default">$size </span><span class="keyword">= </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];
<br />    else
<br />          </span><span class="default">$size </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    
<br />    return </span><span class="default">$size</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92418">  <div class="votes">
    <div id="Vu92418">
    <a href="/manual/vote-note.php?id=92418&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92418">
    <a href="/manual/vote-note.php?id=92418&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92418" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#92418" class="name">
  <strong class="user"><em>Svetoslav Marinov</em></strong></a><a class="genanchor" href="#92418"> &para;</a><div class="date" title="2009-07-23 10:24"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92418">
<div class="phpcode"><code><span class="html">This is an updated version of my previous filesize2bytes.
<br />The return type now it's really an int.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * Converts human readable file size (e.g. 10 MB, 200.20 GB) into bytes.
<br /> *
<br /> * @param string $str
<br /> * @return int the result is in bytes
<br /> * @author Svetoslav Marinov
<br /> * @author <a href="http://slavi.biz" rel="nofollow" target="_blank">http://slavi.biz</a>
<br /> */
<br /></span><span class="keyword">function </span><span class="default">filesize2bytes</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {
<br />    </span><span class="default">$bytes </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />
<br />    </span><span class="default">$bytes_array </span><span class="keyword">= array(
<br />        </span><span class="string">'B' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,
<br />        </span><span class="string">'KB' </span><span class="keyword">=&gt; </span><span class="default">1024</span><span class="keyword">,
<br />        </span><span class="string">'MB' </span><span class="keyword">=&gt; </span><span class="default">1024 </span><span class="keyword">* </span><span class="default">1024</span><span class="keyword">,
<br />        </span><span class="string">'GB' </span><span class="keyword">=&gt; </span><span class="default">1024 </span><span class="keyword">* </span><span class="default">1024 </span><span class="keyword">* </span><span class="default">1024</span><span class="keyword">,
<br />        </span><span class="string">'TB' </span><span class="keyword">=&gt; </span><span class="default">1024 </span><span class="keyword">* </span><span class="default">1024 </span><span class="keyword">* </span><span class="default">1024 </span><span class="keyword">* </span><span class="default">1024</span><span class="keyword">,
<br />        </span><span class="string">'PB' </span><span class="keyword">=&gt; </span><span class="default">1024 </span><span class="keyword">* </span><span class="default">1024 </span><span class="keyword">* </span><span class="default">1024 </span><span class="keyword">* </span><span class="default">1024 </span><span class="keyword">* </span><span class="default">1024</span><span class="keyword">,
<br />    );
<br />
<br />    </span><span class="default">$bytes </span><span class="keyword">= </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);
<br />
<br />    if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'#([KMGTP]?B)$#si'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">) &amp;&amp; !empty(</span><span class="default">$bytes_array</span><span class="keyword">[</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]])) {
<br />        </span><span class="default">$bytes </span><span class="keyword">*= </span><span class="default">$bytes_array</span><span class="keyword">[</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]];
<br />    }
<br />
<br />    </span><span class="default">$bytes </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">round</span><span class="keyword">(</span><span class="default">$bytes</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">));
<br />
<br />    return </span><span class="default">$bytes</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="94566">  <div class="votes">
    <div id="Vu94566">
    <a href="/manual/vote-note.php?id=94566&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94566">
    <a href="/manual/vote-note.php?id=94566&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94566" title="42% like this...">
    -4
    </div>
  </div>
  <a href="#94566" class="name">
  <strong class="user"><em>itsrool at gmail dot com</em></strong></a><a class="genanchor" href="#94566"> &para;</a><div class="date" title="2009-11-12 12:36"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94566">
<div class="phpcode"><code><span class="html">My solution for calculating the directory size:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * Get the directory size
<br /> * @param directory $directory
<br /> * @return integer
<br /> */
<br /></span><span class="keyword">function </span><span class="default">dirSize</span><span class="keyword">(</span><span class="default">$directory</span><span class="keyword">) {
<br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    foreach(new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(new </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="default">$directory</span><span class="keyword">)) as </span><span class="default">$file</span><span class="keyword">){
<br />        </span><span class="default">$size</span><span class="keyword">+=</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">getSize</span><span class="keyword">();
<br />    }
<br />    return </span><span class="default">$size</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121531">  <div class="votes">
    <div id="Vu121531">
    <a href="/manual/vote-note.php?id=121531&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121531">
    <a href="/manual/vote-note.php?id=121531&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121531" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#121531" class="name">
  <strong class="user"><em>Lingasamy Sakthivel</em></strong></a><a class="genanchor" href="#121531"> &para;</a><div class="date" title="2017-08-17 11:27"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121531">
<div class="phpcode"><code><span class="html">Using fseek is really slow. This one really better and faster.<br /><br />    if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {<br />        $size = trim(exec("for %F in (\"" . $file . "\") do @echo %~zF"));<br />    }<br />    elseif ((PHP_OS == 'Linux') || (PHP_OS == 'FreeBSD') || (PHP_OS == 'Unix') || (PHP_OS == 'SunOS')) {<br />        $size = trim(shell_exec("stat -c%s " . escapeshellarg($file)));<br />    } else {<br />        $size = filesize($file);<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="120009">  <div class="votes">
    <div id="Vu120009">
    <a href="/manual/vote-note.php?id=120009&amp;page=function.filesize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120009">
    <a href="/manual/vote-note.php?id=120009&amp;page=function.filesize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120009" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#120009" class="name">
  <strong class="user"><em>jakob dot riishede dot moller at gmail dot com</em></strong></a><a class="genanchor" href="#120009"> &para;</a><div class="date" title="2016-10-09 04:40"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120009">
<div class="phpcode"><code><span class="html">"Note: Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions may return unexpected results for files which are larger than 2GB."<br /><br />This ought to be a warning and not a note: filesize - as some of the other comments suggest - is useless for applications where custom action must be taken for large files.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.filesize&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.filesize.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
