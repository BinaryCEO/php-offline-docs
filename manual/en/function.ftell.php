<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ftell - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ftell.php">
 <link rel="shorturl" href="https://www.php.net/ftell">
 <link rel="alternate" href="https://www.php.net/ftell" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.fsync.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ftruncate.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ftell.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ftell.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ftell.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ftell.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ftell.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ftell.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ftell.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ftell.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ftell.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ftell.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ftell.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the current position of the file read/write pointer" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ftell - Manual" />
<meta name="twitter:description" content="Returns the current position of the file read/write pointer" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ftell - Manual" />
<meta itemprop="description" content="Returns the current position of the file read/write pointer" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the current position of the file read/write pointer" />

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
        <a href="function.ftruncate.php">
          ftruncate &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.fsync.php">
          &laquo; fsync        </a>
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
            <option value='en/function.ftell.php' selected="selected">English</option>
            <option value='de/function.ftell.php'>German</option>
            <option value='es/function.ftell.php'>Spanish</option>
            <option value='fr/function.ftell.php'>French</option>
            <option value='it/function.ftell.php'>Italian</option>
            <option value='ja/function.ftell.php'>Japanese</option>
            <option value='pt_BR/function.ftell.php'>Brazilian Portuguese</option>
            <option value='ru/function.ftell.php'>Russian</option>
            <option value='tr/function.ftell.php'>Turkish</option>
            <option value='uk/function.ftell.php'>Ukrainian</option>
            <option value='zh/function.ftell.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ftell" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ftell</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ftell</span> &mdash; <span class="dc-title">Returns the current position of the file read/write pointer</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.ftell-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ftell</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$stream</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Returns the position of the file pointer referenced by <code class="parameter">stream</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ftell-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">stream</code></dt>
     <dd>
      <p class="para">
       The file pointer must be valid, and must point to a file successfully
       opened by <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span> or <span class="function"><a href="function.popen.php" class="function">popen()</a></span>.
       <span class="function"><strong>ftell()</strong></span> gives undefined results for append-only streams
       (opened with &quot;a&quot; flag).
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ftell-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the position of the file pointer referenced by
   <code class="parameter">stream</code> as an integer; i.e., its offset into the file stream.
  </p>
  <p class="para">
   If an error occurs, returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">
    Because PHP&#039;s integer type is signed and many platforms use 32bit integers,
    some filesystem functions may return unexpected results for files which
    are larger than 2GB.
   </span></p></blockquote>
 </div>


 <div class="refsect1 examples" id="refsect1-function.ftell-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2382">
    <p><strong>Example #1 <span class="function"><strong>ftell()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// opens a file and read some data<br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"/etc/passwd"</span><span style="color: #007700">, </span><span style="color: #DD0000">"r"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">fgets</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">12</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// where are we ?<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">ftell</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">); </span><span style="color: #FF8000">// 11<br /><br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ftell-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.fopen.php" class="function" rel="rdfs-seeAlso">fopen()</a> - Opens file or URL</span></li>
    <li><span class="function"><a href="function.popen.php" class="function" rel="rdfs-seeAlso">popen()</a> - Opens process file pointer</span></li>
    <li><span class="function"><a href="function.fseek.php" class="function" rel="rdfs-seeAlso">fseek()</a> - Seeks on a file pointer</span></li>
    <li><span class="function"><a href="function.rewind.php" class="function" rel="rdfs-seeAlso">rewind()</a> - Rewind the position of a file pointer</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/ftell.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ftell%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ftell&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ftell.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116885">  <div class="votes">
    <div id="Vu116885">
    <a href="/manual/vote-note.php?id=116885&amp;page=function.ftell&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116885">
    <a href="/manual/vote-note.php?id=116885&amp;page=function.ftell&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116885" title="78% like this...">
    8
    </div>
  </div>
  <a href="#116885" class="name">
  <strong class="user"><em>Mindaugas</em></strong></a><a class="genanchor" href="#116885"> &para;</a><div class="date" title="2015-03-15 09:37"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116885">
<div class="phpcode"><code><span class="html">When opening a file for reading and writing via fopen('file','a+') the file pointer should be at the end of the file. However ftell() returns int(0) even if the file is not empty. Also it seems that there is two pointers, first for reading and second for writing, because it acts differently on first operation (reading or writing).<br /><br />Example:<br /><span class="default">&lt;?php<br />$file </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'counter.txt'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);<br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'123456789'</span><span class="keyword">);<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /><br /></span><span class="default">$file </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'counter.txt'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />echo </span><span class="default">ftell</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) . </span><span class="string">' "' </span><span class="keyword">. </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) . </span><span class="string">'" ' </span><span class="keyword">. </span><span class="default">ftell</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /><br /></span><span class="default">$file </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'counter.txt'</span><span class="keyword">, </span><span class="string">'a+'</span><span class="keyword">);<br />echo </span><span class="default">ftell</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) . </span><span class="string">' "' </span><span class="keyword">. </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) . </span><span class="string">'" ' </span><span class="keyword">. </span><span class="default">ftell</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /><br /></span><span class="default">$file </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'counter.txt'</span><span class="keyword">, </span><span class="string">'r+'</span><span class="keyword">);<br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'rr'</span><span class="keyword">);<br />echo </span><span class="default">ftell</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) . </span><span class="string">' "' </span><span class="keyword">. </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) . </span><span class="string">'" ' </span><span class="keyword">. </span><span class="default">ftell</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /><br /></span><span class="default">$file </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'counter.txt'</span><span class="keyword">, </span><span class="string">'a+'</span><span class="keyword">);<br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'aa'</span><span class="keyword">);<br />echo </span><span class="default">ftell</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) . </span><span class="string">' "' </span><span class="keyword">. </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) . </span><span class="string">'" ' </span><span class="keyword">. </span><span class="default">ftell</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /><br /></span><span class="default">$file </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'counter.txt'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />echo </span><span class="default">ftell</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) . </span><span class="string">' "' </span><span class="keyword">. </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) . </span><span class="string">'" ' </span><span class="keyword">. </span><span class="default">ftell</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Result:<br />0 "123456789" 9<br />0 "123456789" 9<br />2 "3456789" 9<br />2 "" 2<br />0 "rr3456789aa" 11</span></code></div>
  </div>
 </div>
  <div class="note" id="127784">  <div class="votes">
    <div id="Vu127784">
    <a href="/manual/vote-note.php?id=127784&amp;page=function.ftell&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127784">
    <a href="/manual/vote-note.php?id=127784&amp;page=function.ftell&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127784" title="75% like this...">
    2
    </div>
  </div>
  <a href="#127784" class="name">
  <strong class="user"><em>d9k at ya dot ru</em></strong></a><a class="genanchor" href="#127784"> &para;</a><div class="date" title="2022-10-20 09:45"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127784">
<div class="phpcode"><code><span class="html">Had to use <br /><br /><span class="default">&lt;?php<br />posix_isatty</span><span class="keyword">(</span><span class="default">STDIN</span><span class="keyword">) == </span><span class="default">false<br />?&gt;<br /></span><br />instead of <br /><br /><span class="default">&lt;?php<br />ftell</span><span class="keyword">(</span><span class="default">STDIN</span><span class="keyword">) !== </span><span class="default">false<br />?&gt;<br /></span><br />after upgrade from php 7 to 8 on ubuntu.</span></code></div>
  </div>
 </div>
  <div class="note" id="93391">  <div class="votes">
    <div id="Vu93391">
    <a href="/manual/vote-note.php?id=93391&amp;page=function.ftell&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93391">
    <a href="/manual/vote-note.php?id=93391&amp;page=function.ftell&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93391" title="54% like this...">
    2
    </div>
  </div>
  <a href="#93391" class="name">
  <strong class="user"><em>burninleo at gmx dot net</em></strong></a><a class="genanchor" href="#93391"> &para;</a><div class="date" title="2009-09-07 01:38"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93391">
<div class="phpcode"><code><span class="html">When opening a file to append via fopen('file','ab') the file pointer should be at the end of the file. However ftell() returns int(0) even if the file is not empty and even after writing some text into the file.</span></code></div>
  </div>
 </div>
  <div class="note" id="58026">  <div class="votes">
    <div id="Vu58026">
    <a href="/manual/vote-note.php?id=58026&amp;page=function.ftell&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58026">
    <a href="/manual/vote-note.php?id=58026&amp;page=function.ftell&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58026" title="50% like this...">
    0
    </div>
  </div>
  <a href="#58026" class="name">
  <strong class="user"><em>mbirth at webwriters dot de</em></strong></a><a class="genanchor" href="#58026"> &para;</a><div class="date" title="2005-10-21 11:09"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58026">
<div class="phpcode"><code><span class="html">Attention! If you open a file with the "text"-modifier (e.g. 'rt') and the file contains \r\n as line-endings, ftell() returns the position as if there were only \n as line-endings.<br /><br />Example:<br />If the first line only contains 1 char followed by \r\n, the start of the second line should be position 3. (1char + \r + \n = 3 bytes) But ftell() will return 2 - ignoring one byte. If you call ftell() in line 3, the value will differ from the real value by 2 bytes. The error gets greater with every line.<br /><br />(Watched this behavior in PHP 5.0.4 for Windows.)<br /><br />BUT: fseek() works as expected - using the true byte values.</span></code></div>
  </div>
 </div>
  <div class="note" id="54033">  <div class="votes">
    <div id="Vu54033">
    <a href="/manual/vote-note.php?id=54033&amp;page=function.ftell&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54033">
    <a href="/manual/vote-note.php?id=54033&amp;page=function.ftell&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54033" title="50% like this...">
    0
    </div>
  </div>
  <a href="#54033" class="name">
  <strong class="user"><em>mweierophinney at gmail dot com</em></strong></a><a class="genanchor" href="#54033"> &para;</a><div class="date" title="2005-06-21 10:00"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54033">
<div class="phpcode"><code><span class="html">Actually, ftell() gives more than an undefined result for append only streams; it gives the offset from the end of the file as defined before any data was appended. So if you open a file that had 3017 characters, and append 41 characters, and then execute ftell(), the value returned will be 41.</span></code></div>
  </div>
 </div>
  <div class="note" id="127783">  <div class="votes">
    <div id="Vu127783">
    <a href="/manual/vote-note.php?id=127783&amp;page=function.ftell&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127783">
    <a href="/manual/vote-note.php?id=127783&amp;page=function.ftell&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127783" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#127783" class="name">
  <strong class="user"><em>d9k at ya dot ru</em></strong></a><a class="genanchor" href="#127783"> &para;</a><div class="date" title="2022-10-20 09:44"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127783">
<div class="phpcode"><code><span class="html">Had to use <br /><br /><span class="default">&lt;?php<br />posix_isatty</span><span class="keyword">(</span><span class="default">STDIN</span><span class="keyword">) == </span><span class="default">false<br />?&gt;<br /></span><br />instead of <br /><br /><span class="default">&lt;?php<br />ftell</span><span class="keyword">(</span><span class="default">STDIN</span><span class="keyword">) !== </span><span class="default">false<br />?&gt;<br /></span><br />after upgrade from php 7 to 8 on ubuntu.</span></code></div>
  </div>
 </div>
  <div class="note" id="53427">  <div class="votes">
    <div id="Vu53427">
    <a href="/manual/vote-note.php?id=53427&amp;page=function.ftell&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53427">
    <a href="/manual/vote-note.php?id=53427&amp;page=function.ftell&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53427" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#53427" class="name">
  <strong class="user"><em>php at michielvleugel dot com</em></strong></a><a class="genanchor" href="#53427"> &para;</a><div class="date" title="2005-06-01 03:19"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53427">
<div class="phpcode"><code><span class="html">When trying to determine whether or not something was piped into a command line script, it is not smart to do a fgets(STDIN), because it will wait indefenitely if nothing is piped. Instead, I found ftell on STDIN to be very handy: it will return an integer of zero when something was piped, and nothing if nothing was piped to the script.<br /><br />#!/usr/bin/php4 -q<br />&lt;?<br />#following will hang if nothing is piped:<br />#$sometext = fgets(STDIN, 256)<br /><br />$tell = ftell(STDIN);<br /><br />if (is_integer($tell)==true) <br />  {echo "Something was piped: ".fread(STDIN,256)."\n";}<br />else <br />  {echo "Nothing was piped\n";}<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="73526">  <div class="votes">
    <div id="Vu73526">
    <a href="/manual/vote-note.php?id=73526&amp;page=function.ftell&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73526">
    <a href="/manual/vote-note.php?id=73526&amp;page=function.ftell&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73526" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#73526" class="name">
  <strong class="user"><em>missilesilo at gmail dot com</em></strong></a><a class="genanchor" href="#73526"> &para;</a><div class="date" title="2007-02-27 03:02"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73526">
<div class="phpcode"><code><span class="html">In response to php at michielvleugel dot com:<br /><br />This does not seem to be the case with PHP 5.2.0 and FreeBSD 5.4.<br /><br />#!/usr/local/bin/php<br /><span class="default">&lt;?php<br />$tell </span><span class="keyword">= </span><span class="default">ftell</span><span class="keyword">(</span><span class="default">STDIN</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$tell</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />root@localhost:/home/david# echo Hello World | ./test.php<br />int(0)<br />root@localhost:/home/david# ./test.php<br />int(6629927)<br /><br />When something is piped to the script, it returns an integer value of 0, however, it also returns an integer when nothing is piped to the script.<br /><br />The code should  be modified to this:<br /><br />#!/usr/local/bin/php<br /><span class="default">&lt;?php<br />$tell </span><span class="keyword">= </span><span class="default">ftell</span><span class="keyword">(</span><span class="default">STDIN</span><span class="keyword">);<br /><br />if (</span><span class="default">$tell </span><span class="keyword">=== </span><span class="default">0</span><span class="keyword">)<br />    echo </span><span class="string">"Something was piped: " </span><span class="keyword">. </span><span class="default">fread</span><span class="keyword">(</span><span class="default">STDIN</span><span class="keyword">,</span><span class="default">256</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br />else<br />    echo </span><span class="string">"Nothing was piped\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />And the result is:<br /><br />root@localhost:/home/david# echo Hello World | ./test.php<br />Something was piped: Hello World<br />root@localhost:/home/david# ./test.php<br />Nothing was piped</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ftell&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ftell.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
