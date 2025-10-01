<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: is_file - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.is-file.php">
 <link rel="shorturl" href="https://www.php.net/is-file">
 <link rel="alternate" href="https://www.php.net/is-file" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.is-executable.php">
 <link rel="next" href="https://www.php.net/manual/en/function.is-link.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.is-file.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.is-file.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.is-file.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.is-file.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.is-file.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.is-file.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.is-file.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.is-file.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.is-file.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.is-file.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.is-file.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Tells whether the filename is a regular file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: is_file - Manual" />
<meta name="twitter:description" content="Tells whether the filename is a regular file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: is_file - Manual" />
<meta itemprop="description" content="Tells whether the filename is a regular file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Tells whether the filename is a regular file" />

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
        <a href="function.is-link.php">
          is_link &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.is-executable.php">
          &laquo; is_executable        </a>
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
            <option value='en/function.is-file.php' selected="selected">English</option>
            <option value='de/function.is-file.php'>German</option>
            <option value='es/function.is-file.php'>Spanish</option>
            <option value='fr/function.is-file.php'>French</option>
            <option value='it/function.is-file.php'>Italian</option>
            <option value='ja/function.is-file.php'>Japanese</option>
            <option value='pt_BR/function.is-file.php'>Brazilian Portuguese</option>
            <option value='ru/function.is-file.php'>Russian</option>
            <option value='tr/function.is-file.php'>Turkish</option>
            <option value='uk/function.is-file.php'>Ukrainian</option>
            <option value='zh/function.is-file.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.is-file" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">is_file</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">is_file</span> &mdash; <span class="dc-title">Tells whether the filename is a regular file</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.is-file-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>is_file</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Tells whether the given file is a regular file. If <code class="parameter">filename</code> is a
   symbolic link, it will resolve the symlink and will give information about the referred file.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.is-file-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-function.is-file-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the filename exists and is a regular file, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
   otherwise.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">
    Because PHP&#039;s integer type is signed and many platforms use 32bit integers,
    some filesystem functions may return unexpected results for files which
    are larger than 2GB.
   </span></p></blockquote>
 </div>


 <div class="refsect1 errors" id="refsect1-function.is-file-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
Upon failure, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
</p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.is-file-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2389">
    <p><strong>Example #1 <span class="function"><strong>is_file()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #DD0000">'a_file.txt'</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #DD0000">'/usr/bin/'</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">bool(true)
bool(false)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.is-file-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">The results of this
function are cached. See <span class="function"><a href="function.clearstatcache.php" class="function">clearstatcache()</a></span> for
more details.</span></p></blockquote>
  <div class="tip"><strong class="tip">Tip</strong><p class="simpara">As of PHP 5.0.0, this function
can also be used with <em>some</em> URL wrappers.  Refer to
<a href="wrappers.php" class="xref">Supported Protocols and Wrappers</a> to determine which wrappers support
<span class="function"><a href="function.stat.php" class="function">stat()</a></span> family of functionality.</p></div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.is-file-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.is-dir.php" class="function" rel="rdfs-seeAlso">is_dir()</a> - Tells whether the filename is a directory</span></li>
    <li><span class="function"><a href="function.is-link.php" class="function" rel="rdfs-seeAlso">is_link()</a> - Tells whether the filename is a symbolic link</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/is-file.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.is-file%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.is-file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.is-file.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">21 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107403">  <div class="votes">
    <div id="Vu107403">
    <a href="/manual/vote-note.php?id=107403&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107403">
    <a href="/manual/vote-note.php?id=107403&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107403" title="78% like this...">
    59
    </div>
  </div>
  <a href="#107403" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#107403"> &para;</a><div class="date" title="2012-02-06 07:44"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107403">
<div class="phpcode"><code><span class="html">Note that is_file() returns false if the parent directory doesn't have +x set for you; this make sense, but other functions such as readdir() don't seem to have this limitation. The end result is that you can loop through a directory's files but is_file() will always fail.</span></code></div>
  </div>
 </div>
  <div class="note" id="46845">  <div class="votes">
    <div id="Vu46845">
    <a href="/manual/vote-note.php?id=46845&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46845">
    <a href="/manual/vote-note.php?id=46845&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46845" title="73% like this...">
    11
    </div>
  </div>
  <a href="#46845" class="name">
  <strong class="user"><em>ludvig dot ericson at gmail dot com</em></strong></a><a class="genanchor" href="#46845"> &para;</a><div class="date" title="2004-10-25 11:06"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46845">
<div class="phpcode"><code><span class="html">I tend to use alot of includes, and I found that the is_file is based on the script executed, not ran.<br />if you request /foo.php and foo.php looks like this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">include(</span><span class="string">'foobar/bar.php'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>and bar.php looks like this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo (</span><span class="default">is_file</span><span class="keyword">(</span><span class="string">'foo/bar.txt'</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Then PHP (on win32, php 5.x) would look for /foo/bar.txt and not /foobar/foo/bar.txt.<br />you would have to rewrite the is_file statement for that, or change working directory.<br />Noting this since I sat with the problem for some time,<br /><br />cheers, Toxik.</span></code></div>
  </div>
 </div>
  <div class="note" id="50742">  <div class="votes">
    <div id="Vu50742">
    <a href="/manual/vote-note.php?id=50742&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50742">
    <a href="/manual/vote-note.php?id=50742&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50742" title="72% like this...">
    13
    </div>
  </div>
  <a href="#50742" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#50742"> &para;</a><div class="date" title="2005-03-08 09:02"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50742">
<div class="phpcode"><code><span class="html">### Symbolic links are resolved ###<br /><br />If you pass a symlink (unix symbolic link) as parameter, is_file will resolve the symlink and will give information about the refered file. For example:<br /><br />  touch file<br />  ln -s file link<br />  echo '&lt;? if (is_file("link")) echo "y\n"; ?&gt;' | php -q<br /><br />will print "y".<br /><br />is_dir resolves symlinks too.</span></code></div>
  </div>
 </div>
  <div class="note" id="76030">  <div class="votes">
    <div id="Vu76030">
    <a href="/manual/vote-note.php?id=76030&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76030">
    <a href="/manual/vote-note.php?id=76030&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76030" title="70% like this...">
    8
    </div>
  </div>
  <a href="#76030" class="name">
  <strong class="user"><em>cristian dot ban at neobytesolutions com</em></strong></a><a class="genanchor" href="#76030"> &para;</a><div class="date" title="2007-06-27 01:46"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76030">
<div class="phpcode"><code><span class="html">regarding note from rehfeld dot us : <br /><br />In my experience the best( and easiest ) way to find the extension of a file is : <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// use this when you are sure it actually has an extension.<br /></span><span class="default">$extension </span><span class="keyword">= </span><span class="default">end</span><span class="keyword">(</span><span class="default">explode</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">, </span><span class="default">$file_name</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />or <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// this one will also check if it actually has an extension<br /></span><span class="default">$parts </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">, </span><span class="default">$file_name</span><span class="keyword">);<br />if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$parts</span><span class="keyword">) &amp;&amp; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$parts</span><span class="keyword">) &gt; </span><span class="default">1</span><span class="keyword">)<br />    </span><span class="default">$extension </span><span class="keyword">= </span><span class="default">end</span><span class="keyword">(</span><span class="default">$parts</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="20249">  <div class="votes">
    <div id="Vu20249">
    <a href="/manual/vote-note.php?id=20249&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20249">
    <a href="/manual/vote-note.php?id=20249&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20249" title="68% like this...">
    7
    </div>
  </div>
  <a href="#20249" class="name">
  <strong class="user"><em>andreas dot stagl at fits dot at</em></strong></a><a class="genanchor" href="#20249"> &para;</a><div class="date" title="2002-03-27 11:34"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20249">
<div class="phpcode"><code><span class="html">if you're running apache as a service on a win32 machine, an you try to determinate if a file on an other pc in your network exists - ex.: is_file('//servername/share/dir1/dir2/file.txt') - you may return false when you're running the service as LocalSystem. To avoid this, you have to start the Apache-Service as a 'registered' domain user.</span></code></div>
  </div>
 </div>
  <div class="note" id="104505">  <div class="votes">
    <div id="Vu104505">
    <a href="/manual/vote-note.php?id=104505&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104505">
    <a href="/manual/vote-note.php?id=104505&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104505" title="66% like this...">
    5
    </div>
  </div>
  <a href="#104505" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#104505"> &para;</a><div class="date" title="2011-06-18 11:47"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104505">
<div class="phpcode"><code><span class="html">is_file doesn't recognize files whose filenames contain strange characters like czech ů or russian characters in general.<br /><br />I've seen many scripts that take it for granted that a path is a directory when it fails is_file($path). When trying to determine whether a path links to a file or a dir, you should always use is_dir after getting false from is_file($path). For cases like described above, both will fail.</span></code></div>
  </div>
 </div>
  <div class="note" id="118428">  <div class="votes">
    <div id="Vu118428">
    <a href="/manual/vote-note.php?id=118428&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118428">
    <a href="/manual/vote-note.php?id=118428&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118428" title="63% like this...">
    5
    </div>
  </div>
  <a href="#118428" class="name">
  <strong class="user"><em>www.ip4t.net - abdelrahman nourallah</em></strong></a><a class="genanchor" href="#118428"> &para;</a><div class="date" title="2015-12-04 11:37"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118428">
<div class="phpcode"><code><span class="html">sometimes this function does not work because permission , <br /><br />you can use this function that check if the path has dot in last will return true . <br /><br />public function isFile($file) {<br />        $f = pathinfo($file, PATHINFO_EXTENSION);<br />        return (strlen($f) &gt; 0) ? true : false;<br />    }<br />  <br />isfile('<a href="http://www.ip4t.net/image.jpg" rel="nofollow" target="_blank">http://www.ip4t.net/image.jpg</a>');<br /><br />you should replace a string between '' with your file path to check</span></code></div>
  </div>
 </div>
  <div class="note" id="86271">  <div class="votes">
    <div id="Vu86271">
    <a href="/manual/vote-note.php?id=86271&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86271">
    <a href="/manual/vote-note.php?id=86271&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86271" title="64% like this...">
    4
    </div>
  </div>
  <a href="#86271" class="name">
  <strong class="user"><em>rigrace at swbell dot net</em></strong></a><a class="genanchor" href="#86271"> &para;</a><div class="date" title="2008-10-09 09:48"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86271">
<div class="phpcode"><code><span class="html">It took me a day or so to figure out that is_file() actually looks for a valid $ existing path/file in string form. It is not performing a pattern-like test on the parameter given. Its testing to see if the given parameter leads to a specific  existing 'name.ext' or other (non-directory) file type object.</span></code></div>
  </div>
 </div>
  <div class="note" id="81316">  <div class="votes">
    <div id="Vu81316">
    <a href="/manual/vote-note.php?id=81316&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81316">
    <a href="/manual/vote-note.php?id=81316&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81316" title="63% like this...">
    3
    </div>
  </div>
  <a href="#81316" class="name">
  <strong class="user"><em>gizmo at gizmo dot sk</em></strong></a><a class="genanchor" href="#81316"> &para;</a><div class="date" title="2008-02-22 01:50"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81316">
<div class="phpcode"><code><span class="html">here is a workaround for the file size limit. uses bash file testing operator, so it may be changed to test directories etc.  (see <a href="http://tldp.org/LDP/abs/html/fto.html" rel="nofollow" target="_blank">http://tldp.org/LDP/abs/html/fto.html</a> for possible test operators)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">is_file_lfs</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">){<br />    </span><span class="default">exec</span><span class="keyword">(</span><span class="string">'[ -f "'</span><span class="keyword">.</span><span class="default">$path</span><span class="keyword">.</span><span class="string">'" ]'</span><span class="keyword">, </span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">$ret</span><span class="keyword">);<br />    return </span><span class="default">$ret </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57810">  <div class="votes">
    <div id="Vu57810">
    <a href="/manual/vote-note.php?id=57810&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57810">
    <a href="/manual/vote-note.php?id=57810&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57810" title="62% like this...">
    2
    </div>
  </div>
  <a href="#57810" class="name">
  <strong class="user"><em>Jonathan Shaltz</em></strong></a><a class="genanchor" href="#57810"> &para;</a><div class="date" title="2005-10-14 10:23"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57810">
<div class="phpcode"><code><span class="html">Maybe this is a newbie mistake, but note that paths are relative to the filesystem and the location of the script.  This means that MS IIS virtual directories are not available by relative path - use an absolute.<br />This threw me because virtual directories ARE available for URLs, at least on IIS.</span></code></div>
  </div>
 </div>
  <div class="note" id="86992">  <div class="votes">
    <div id="Vu86992">
    <a href="/manual/vote-note.php?id=86992&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86992">
    <a href="/manual/vote-note.php?id=86992&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86992" title="60% like this...">
    4
    </div>
  </div>
  <a href="#86992" class="name">
  <strong class="user"><em>Kevin Gregull</em></strong></a><a class="genanchor" href="#86992"> &para;</a><div class="date" title="2008-11-13 08:14"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86992">
<div class="phpcode"><code><span class="html">This Function deletes everything in a defined Folder:
<br />Works with PHP 4 and 5.
<br />
<br /><span class="default">&lt;?php
<br />  </span><span class="keyword">function </span><span class="default">deletefolder</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)
<br />  {
<br />    if (</span><span class="default">$handle</span><span class="keyword">=</span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)) 
<br />    {
<br />      while (</span><span class="default">false</span><span class="keyword">!==(</span><span class="default">$file</span><span class="keyword">=</span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">))) 
<br />      {
<br />        if (</span><span class="default">$file</span><span class="keyword">&lt;&gt;</span><span class="string">"." </span><span class="keyword">AND </span><span class="default">$file</span><span class="keyword">&lt;&gt;</span><span class="string">".."</span><span class="keyword">)
<br />        {
<br />          if (</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">))
<br />          {
<br />            @</span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">);
<br />          }
<br />          if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">))
<br />          {
<br />            </span><span class="default">deletefolder</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">);
<br />            @</span><span class="default">rmdir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">);
<br />          }
<br />        }
<br />      }
<br />    }
<br />  }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93481">  <div class="votes">
    <div id="Vu93481">
    <a href="/manual/vote-note.php?id=93481&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93481">
    <a href="/manual/vote-note.php?id=93481&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93481" title="57% like this...">
    2
    </div>
  </div>
  <a href="#93481" class="name">
  <strong class="user"><em>don dot duvall at deduvall dot com</em></strong></a><a class="genanchor" href="#93481"> &para;</a><div class="date" title="2009-09-11 02:55"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93481">
<div class="phpcode"><code><span class="html">I have noticed that using is_file on windows servers (mainly for development) to use a full path c:\ doesn't always work.<br /><br />I have had to use<br />C:/foldertowww/site/file.ext<br /><br />so I preform an str_replace('\\', '/', $path)<br />Sometimes I have had the \ instead of / work. (this is using apache2 on XP)<br /><br />but for sure you cannot have mixed separators.</span></code></div>
  </div>
 </div>
  <div class="note" id="127367">  <div class="votes">
    <div id="Vu127367">
    <a href="/manual/vote-note.php?id=127367&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127367">
    <a href="/manual/vote-note.php?id=127367&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127367" title="50% like this...">
    0
    </div>
  </div>
  <a href="#127367" class="name">
  <strong class="user"><em>samuel at jch-optimize dot net</em></strong></a><a class="genanchor" href="#127367"> &para;</a><div class="date" title="2022-07-29 05:10"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127367">
<div class="phpcode"><code><span class="html">Note also that if is_file(), (and also is_dir()), will return false if you have the open_basedir configuration set and the file (or directory) is not in one of the configured locations. <br /><br />Essentially as the other notes offer, if you don't have permissions to access the file or dir these functions return false but this is also another use case that one may overlook.</span></code></div>
  </div>
 </div>
  <div class="note" id="70470">  <div class="votes">
    <div id="Vu70470">
    <a href="/manual/vote-note.php?id=70470&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70470">
    <a href="/manual/vote-note.php?id=70470&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70470" title="50% like this...">
    0
    </div>
  </div>
  <a href="#70470" class="name">
  <strong class="user"><em>tatarynowicz at gmail dot com</em></strong></a><a class="genanchor" href="#70470"> &para;</a><div class="date" title="2006-10-17 07:35"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70470">
<div class="phpcode"><code><span class="html">An easy way not to have to choose between hard-coding full paths and using relative paths is either via this line:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// in the bootstrap file<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'DIR_ROOT'</span><span class="keyword">, </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">));<br /></span><span class="comment">// in other files, prefix paths with the constant<br /></span><span class="keyword">require(</span><span class="default">DIR_ROOT </span><span class="keyword">. </span><span class="string">'/relative/to/bootstrap.php'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />or if you have to use a relative path:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">require(</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">) . </span><span class="string">'/relative/to/this_file.php'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This way all your paths will be absolute, yet you can move the application anywhere in the filesystem.<br /><br />BTW, each successive call to dirname takes you one step up in the directory tree.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">__FILE__</span><span class="keyword">;<br /></span><span class="comment">// /www/site.com/public/index.php<br /></span><span class="keyword">echo </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">);<br /></span><span class="comment">// /www/site.com/public<br /></span><span class="keyword">echo </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">));<br /></span><span class="comment">// /www/site.com<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56334">  <div class="votes">
    <div id="Vu56334">
    <a href="/manual/vote-note.php?id=56334&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56334">
    <a href="/manual/vote-note.php?id=56334&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56334" title="50% like this...">
    0
    </div>
  </div>
  <a href="#56334" class="name">
  <strong class="user"><em>bill fumerola</em></strong></a><a class="genanchor" href="#56334"> &para;</a><div class="date" title="2005-08-30 06:45"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56334">
<div class="phpcode"><code><span class="html">be careful, is_file() fails on files larger than your integer storage (2^32 for most).<br /><br />Warning: is_file(): Stat failed for bigfile (errno=75 - Value too large for defined data type)</span></code></div>
  </div>
 </div>
  <div class="note" id="17558">  <div class="votes">
    <div id="Vu17558">
    <a href="/manual/vote-note.php?id=17558&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd17558">
    <a href="/manual/vote-note.php?id=17558&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V17558" title="50% like this...">
    0
    </div>
  </div>
  <a href="#17558" class="name">
  <strong class="user"><em>quietust at ircN dot org</em></strong></a><a class="genanchor" href="#17558"> &para;</a><div class="date" title="2001-12-13 08:20"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom17558">
<div class="phpcode"><code><span class="html">In PHP 4.1.0 under win32, this seems to print out a warning message if the file does not exist (using error_reporting = E_ALL &amp; ~E_NOTICE).</span></code></div>
  </div>
 </div>
  <div class="note" id="29392">  <div class="votes">
    <div id="Vu29392">
    <a href="/manual/vote-note.php?id=29392&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29392">
    <a href="/manual/vote-note.php?id=29392&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29392" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#29392" class="name">
  <strong class="user"><em>rlh at d8acom dot com</em></strong></a><a class="genanchor" href="#29392"> &para;</a><div class="date" title="2003-02-12 05:17"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29392">
<div class="phpcode"><code><span class="html">I do a lot of file parsing and have found the following technique extremely useful:<br /><br />while (false !== ($document = readdir($my_dir))) <br />{<br />    $ext=explode('.',$document);<br />    if($document != '.' &amp;&amp; $document != '..' &amp;&amp; $ext[1])<br />    {<br />                       'Do something to file...'<br />              }<br />}<br /><br />It gets around the fact that, when working on website pages, the html files are read as directories when downloaded. It also allows you to extend the usefulness of the above method by adding the ability to determine file types e.g.<br /><br />if($document != '.' &amp;&amp; $document != '..' &amp;&amp; $ext[1]=='htm')<br />or<br />if($document != '.' &amp;&amp; $document != '..' &amp;&amp; $ext[1]=='doc')</span></code></div>
  </div>
 </div>
  <div class="note" id="82003">  <div class="votes">
    <div id="Vu82003">
    <a href="/manual/vote-note.php?id=82003&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82003">
    <a href="/manual/vote-note.php?id=82003&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82003" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#82003" class="name">
  <strong class="user"><em>sy well-known-sign damla.net</em></strong></a><a class="genanchor" href="#82003"> &para;</a><div class="date" title="2008-03-23 04:23"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82003">
<div class="phpcode"><code><span class="html">In 32 bit environments, these functions including is_file(), stat() filesize() will not work due to PHPs default integer being signed. So anything above ~2.1 billion bytes you actually get a negative value.<br /><br />This is actually a bug but I dont think there is an easy workaround. Try to switch to 64 bit.</span></code></div>
  </div>
 </div>
  <div class="note" id="112974">  <div class="votes">
    <div id="Vu112974">
    <a href="/manual/vote-note.php?id=112974&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112974">
    <a href="/manual/vote-note.php?id=112974&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112974" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#112974" class="name">
  <strong class="user"><em>sarken at free dot fr</em></strong></a><a class="genanchor" href="#112974"> &para;</a><div class="date" title="2013-08-13 04:42"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112974">
<div class="phpcode"><code><span class="html">I see, is_file not work properly on specifical file in /dev (linux)<br />look : <br /><br />root@boofh:/data# php -r "var_dump(is_file('/dev/core'));"<br />bool(true)<br />root@boofh:/data# php -r "var_dump(is_file('/proc/kcore'));"<br />bool(true)<br /><br />root@boofh:/data# ls -alh /proc/kcore<br />-r-------- 1 root root 128T Aug 13 18:39 /proc/kcore<br /><br />OR FIND do not detect regular file.<br />root@boofh:/data# find /dev/ -type f<br />root@boofh:/data#<br /><br />// version of php :<br />root@boofh:/data# php -v<br />PHP 5.4.4-14+deb7u3 (cli) (built: Jul 17 2013 14:54:08)<br />Copyright (c) 1997-2012 The PHP Group<br />Zend Engine v2.4.0, Copyright (c) 1998-2012 Zend Technologies</span></code></div>
  </div>
 </div>
  <div class="note" id="45379">  <div class="votes">
    <div id="Vu45379">
    <a href="/manual/vote-note.php?id=45379&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45379">
    <a href="/manual/vote-note.php?id=45379&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45379" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#45379" class="name">
  <strong class="user"><em>rehfeld.us</em></strong></a><a class="genanchor" href="#45379"> &para;</a><div class="date" title="2004-09-03 03:04"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45379">
<div class="phpcode"><code><span class="html">regarding rlh at d8acom dot com method,<br /><br />It is incorrect. Well, it works but you are not guaranteed the file extension using that method.<br /><br />for example :   filename.inc.php<br /><br />your method will tell you the ext is "inc", but it is in fact "php"<br /><br />heres a way that will work properly.<br /><br /><span class="default">&lt;?php<br /><br />$dh </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br /><br />while (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$document </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$dh</span><span class="keyword">))) {<br />    </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">$document</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">);<br />    if (</span><span class="default">false </span><span class="keyword">!== </span><span class="default">$pos </span><span class="keyword">&amp;&amp; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$document</span><span class="keyword">) &gt; </span><span class="default">$pos </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">) {<br />        </span><span class="default">$ext </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$document</span><span class="keyword">, </span><span class="default">$pos </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112157">  <div class="votes">
    <div id="Vu112157">
    <a href="/manual/vote-note.php?id=112157&amp;page=function.is-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112157">
    <a href="/manual/vote-note.php?id=112157&amp;page=function.is-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112157" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#112157" class="name">
  <strong class="user"><em>david at bruchmann-web dot de</em></strong></a><a class="genanchor" href="#112157"> &para;</a><div class="date" title="2013-05-10 05:36"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112157">
<div class="phpcode"><code><span class="html">Today I got the in the comments already described behaviour that between directory and file can't be distinguished by is_file() or is_dir().<br />A dirty and incomplete hack is below, incomplete because it never includes links and I never tested what happens when a directory is not allowed to be read.<br /><br />$items = scandir($dir);<br />foreach ($items as $item){<br />    if ($item!='.' &amp;&amp; $item!='..'){<br />        $deep = @scandir($dir.'/'.$item);<br />        echo ($deep ? '[DIR] ':'[FILE] '.$item.nl2br(PHP_EOL);<br />    }<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.is-file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.is-file.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
