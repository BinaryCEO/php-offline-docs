<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: move_uploaded_file - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.move-uploaded-file.php">
 <link rel="shorturl" href="https://www.php.net/move-uploaded-file">
 <link rel="alternate" href="https://www.php.net/move-uploaded-file" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.mkdir.php">
 <link rel="next" href="https://www.php.net/manual/en/function.parse-ini-file.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.move-uploaded-file.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.move-uploaded-file.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.move-uploaded-file.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.move-uploaded-file.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.move-uploaded-file.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.move-uploaded-file.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.move-uploaded-file.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.move-uploaded-file.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.move-uploaded-file.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.move-uploaded-file.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.move-uploaded-file.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Moves an uploaded file to a new location" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: move_uploaded_file - Manual" />
<meta name="twitter:description" content="Moves an uploaded file to a new location" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: move_uploaded_file - Manual" />
<meta itemprop="description" content="Moves an uploaded file to a new location" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Moves an uploaded file to a new location" />

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
        <a href="function.parse-ini-file.php">
          parse_ini_file &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.mkdir.php">
          &laquo; mkdir        </a>
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
            <option value='en/function.move-uploaded-file.php' selected="selected">English</option>
            <option value='de/function.move-uploaded-file.php'>German</option>
            <option value='es/function.move-uploaded-file.php'>Spanish</option>
            <option value='fr/function.move-uploaded-file.php'>French</option>
            <option value='it/function.move-uploaded-file.php'>Italian</option>
            <option value='ja/function.move-uploaded-file.php'>Japanese</option>
            <option value='pt_BR/function.move-uploaded-file.php'>Brazilian Portuguese</option>
            <option value='ru/function.move-uploaded-file.php'>Russian</option>
            <option value='tr/function.move-uploaded-file.php'>Turkish</option>
            <option value='uk/function.move-uploaded-file.php'>Ukrainian</option>
            <option value='zh/function.move-uploaded-file.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.move-uploaded-file" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">move_uploaded_file</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.3, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">move_uploaded_file</span> &mdash; <span class="dc-title">Moves an uploaded file to a new location</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.move-uploaded-file-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>move_uploaded_file</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$from</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$to</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   This function checks to ensure that the file designated by
   <code class="parameter">from</code> is a valid upload file (meaning
   that it was uploaded via PHP&#039;s HTTP POST upload mechanism). If
   the file is valid, it will be moved to the filename given by
   <code class="parameter">to</code>.
  </p>
  <p class="para">
   This sort of check is especially important if there is any chance
   that anything done with uploaded files could reveal their
   contents to the user, or even to other users on the same
   system.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.move-uploaded-file-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">from</code></dt>
     <dd>
      <p class="para">
       The filename of the uploaded file.
      </p>
     </dd>
    
    
     <dt><code class="parameter">to</code></dt>
     <dd>
      <p class="para">
       The destination of the moved file.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.move-uploaded-file-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success.
  </p>
  <p class="para">
   If <code class="parameter">from</code> is not a valid upload file,
   then no action will occur, and
   <span class="function"><strong>move_uploaded_file()</strong></span> will return
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
  <p class="para">
   If <code class="parameter">from</code> is a valid upload file, but
   cannot be moved for some reason, no action will occur, and
   <span class="function"><strong>move_uploaded_file()</strong></span> will return
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Additionally, a warning will be issued.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.move-uploaded-file-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2401">
    <p><strong>Example #1 Uploading multiple files</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$uploads_dir </span><span style="color: #007700">= </span><span style="color: #DD0000">'/uploads'</span><span style="color: #007700">;<br />foreach (</span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">[</span><span style="color: #DD0000">"pictures"</span><span style="color: #007700">][</span><span style="color: #DD0000">"error"</span><span style="color: #007700">] as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$error</span><span style="color: #007700">) {<br />    if (</span><span style="color: #0000BB">$error </span><span style="color: #007700">== </span><span style="color: #0000BB">UPLOAD_ERR_OK</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$tmp_name </span><span style="color: #007700">= </span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">[</span><span style="color: #DD0000">"pictures"</span><span style="color: #007700">][</span><span style="color: #DD0000">"tmp_name"</span><span style="color: #007700">][</span><span style="color: #0000BB">$key</span><span style="color: #007700">];<br />        </span><span style="color: #FF8000">// basename() may prevent filesystem traversal attacks;<br />        // further validation/sanitation of the filename may be appropriate<br />        </span><span style="color: #0000BB">$name </span><span style="color: #007700">= </span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">[</span><span style="color: #DD0000">"pictures"</span><span style="color: #007700">][</span><span style="color: #DD0000">"name"</span><span style="color: #007700">][</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />        </span><span style="color: #0000BB">move_uploaded_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$tmp_name</span><span style="color: #007700">, </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$uploads_dir</span><span style="color: #DD0000">/</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.move-uploaded-file-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    <span class="function"><strong>move_uploaded_file()</strong></span> is
    <a href="ini.core.php#ini.open-basedir" class="link">open_basedir</a>
    aware. However, restrictions are placed only on the
    <code class="parameter">to</code> path as to allow the moving
    of uploaded files in which <code class="parameter">from</code> may conflict
    with such restrictions. <span class="function"><strong>move_uploaded_file()</strong></span> ensures
    the safety of this operation by allowing only those files uploaded
    through PHP to be moved.
   </p>
  </p></blockquote>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    If the destination file already exists, it will be overwritten.
   </p>
  </div>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.move-uploaded-file-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.is-uploaded-file.php" class="function" rel="rdfs-seeAlso">is_uploaded_file()</a> - Tells whether the file was uploaded via HTTP POST</span></li>
    <li><span class="function"><a href="function.rename.php" class="function" rel="rdfs-seeAlso">rename()</a> - Renames a file or directory</span></li>
    <li>See <a href="features.file-upload.php" class="link">Handling file uploads</a> for a simple usage example</li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/move-uploaded-file.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.move-uploaded-file%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.move-uploaded-file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.move-uploaded-file.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111412">  <div class="votes">
    <div id="Vu111412">
    <a href="/manual/vote-note.php?id=111412&amp;page=function.move-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111412">
    <a href="/manual/vote-note.php?id=111412&amp;page=function.move-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111412" title="66% like this...">
    216
    </div>
  </div>
  <a href="#111412" class="name">
  <strong class="user"><em>Yousef Ismaeil Cliprz</em></strong></a><a class="genanchor" href="#111412"> &para;</a><div class="date" title="2013-02-17 10:59"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111412">
<div class="phpcode"><code><span class="html">Security tips you must know before use this function :<br /><br />First : make sure that the file is not empty.<br /><br />Second : make sure the file name in English characters, numbers and (_-.) symbols, For more protection.<br /><br />You can use below function as in example<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Check $_FILES[][name]<br /> *<br /> * @param (string) $filename - Uploaded file name.<br /> * @author Yousef Ismaeil Cliprz<br /> */<br /></span><span class="keyword">function </span><span class="default">check_file_uploaded_name </span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)<br />{<br />    (bool) ((</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"`^[-0-9A-Z_\.]+$`i"</span><span class="keyword">,</span><span class="default">$filename</span><span class="keyword">)) ? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Third : make sure that the file name not bigger than 250 characters.<br /><br />as in example :<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Check $_FILES[][name] length.<br /> *<br /> * @param (string) $filename - Uploaded file name.<br /> * @author Yousef Ismaeil Cliprz.<br /> */<br /></span><span class="keyword">function </span><span class="default">check_file_uploaded_length </span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)<br />{<br />    return (bool) ((</span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">,</span><span class="string">"UTF-8"</span><span class="keyword">) &gt; </span><span class="default">225</span><span class="keyword">) ? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Fourth: Check File extensions and Mime Types that you want to allow in your project. You can use : pathinfo() <a href="http://php.net/pathinfo" rel="nofollow" target="_blank">http://php.net/pathinfo</a><br /><br />or you can use regular expression for check File extensions as in example<br /><br />#^(gif|jpg|jpeg|jpe|png)$#i<br /><br />or use in_array checking as<br /><br /><span class="default">&lt;?php<br /><br />$ext_type </span><span class="keyword">= array(</span><span class="string">'gif'</span><span class="keyword">,</span><span class="string">'jpg'</span><span class="keyword">,</span><span class="string">'jpe'</span><span class="keyword">,</span><span class="string">'jpeg'</span><span class="keyword">,</span><span class="string">'png'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />You have multi choices to checking extensions and Mime types.<br /><br />Fifth: Check file size and make sure the limit of php.ini to upload files is what you want, You can start from <a href="http://www.php.net/manual/en/ini.core.php#ini.file-uploads" rel="nofollow" target="_blank">http://www.php.net/manual/en/ini.core.php#ini.file-uploads</a><br /><br />And last but not least : Check the file content if have a bad codes or something like this function <a href="http://php.net/manual/en/function.file-get-contents.php." rel="nofollow" target="_blank">http://php.net/manual/en/function.file-get-contents.php.</a><br /><br />You can use .htaccess to stop working some scripts as in example php file in your upload path.<br /><br />use :<br /><br />AddHandler cgi-script .php .pl .jsp .asp .sh .cgi<br />Options -ExecCGI  <br /><br />Do not forget this steps for your project protection.</span></code></div>
  </div>
 </div>
  <div class="note" id="129280">  <div class="votes">
    <div id="Vu129280">
    <a href="/manual/vote-note.php?id=129280&amp;page=function.move-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129280">
    <a href="/manual/vote-note.php?id=129280&amp;page=function.move-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129280" title="85% like this...">
    5
    </div>
  </div>
  <a href="#129280" class="name">
  <strong class="user"><em>adeel dot cs at gmail dot com</em></strong></a><a class="genanchor" href="#129280"> &para;</a><div class="date" title="2024-02-26 09:53"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129280">
<div class="phpcode"><code><span class="html">Permissions issue.<br /><br />If you have set a setgid I.e g+s on the folder and wondering why the created files are owned by www-data:www-data, note that uploaded files are first saved in /tmp folder with the web user.<br /><br />The move_uploaded_file() command moves the files from /tmp to the given TO directory, including the current permissions the /temp file has.<br /><br />Hence the setgid gets ignored and doesn't inherit the parent permissions.</span></code></div>
  </div>
 </div>
  <div class="note" id="105026">  <div class="votes">
    <div id="Vu105026">
    <a href="/manual/vote-note.php?id=105026&amp;page=function.move-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105026">
    <a href="/manual/vote-note.php?id=105026&amp;page=function.move-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105026" title="66% like this...">
    105
    </div>
  </div>
  <a href="#105026" class="name">
  <strong class="user"><em>matthias dot dailey at gmail dot com</em></strong></a><a class="genanchor" href="#105026"> &para;</a><div class="date" title="2011-07-22 01:26"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105026">
<div class="phpcode"><code><span class="html">The destination directory must exist; move_uploaded_file() will not automatically create it for you.</span></code></div>
  </div>
 </div>
  <div class="note" id="86332">  <div class="votes">
    <div id="Vu86332">
    <a href="/manual/vote-note.php?id=86332&amp;page=function.move-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86332">
    <a href="/manual/vote-note.php?id=86332&amp;page=function.move-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86332" title="57% like this...">
    31
    </div>
  </div>
  <a href="#86332" class="name">
  <strong class="user"><em>Dan Delaney</em></strong></a><a class="genanchor" href="#86332"> &para;</a><div class="date" title="2008-10-13 01:41"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86332">
<div class="phpcode"><code><span class="html">For those using PHP on Windows and IIS, you SHOULD set the "upload_tmp_dir" value in php.ini to some directory around where your websites directory is, create that directory, and then set the same permissions on it that you have set for your websites directory. Otherwise, when you upload a file and it goes into C:\WINDOWS\Temp, then you move it to your website directory, its permissions will NOT be set correctly. This will cause you problems if you then want to manipulate that file with something like ImageMagick's convert utility.</span></code></div>
  </div>
 </div>
  <div class="note" id="69555">  <div class="votes">
    <div id="Vu69555">
    <a href="/manual/vote-note.php?id=69555&amp;page=function.move-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69555">
    <a href="/manual/vote-note.php?id=69555&amp;page=function.move-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69555" title="56% like this...">
    8
    </div>
  </div>
  <a href="#69555" class="name">
  <strong class="user"><em>shacker at birdhouse dot org</em></strong></a><a class="genanchor" href="#69555"> &para;</a><div class="date" title="2006-09-10 12:28"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69555">
<div class="phpcode"><code><span class="html">If you're dealing with files uploaded through some external FTP source and need to move them to a final destination, searching php.net for "mv" or "move" won't get you what you want. You want the rename() function. <br /><br /><a href="http://www.php.net/manual/en/function.rename.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.rename.php</a><br /><br />(move_uploaded_file() won't work, since the POST vars won't be present.)</span></code></div>
  </div>
 </div>
  <div class="note" id="123705">  <div class="votes">
    <div id="Vu123705">
    <a href="/manual/vote-note.php?id=123705&amp;page=function.move-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123705">
    <a href="/manual/vote-note.php?id=123705&amp;page=function.move-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123705" title="51% like this...">
    1
    </div>
  </div>
  <a href="#123705" class="name">
  <strong class="user"><em>Juliano P. Santos</em></strong></a><a class="genanchor" href="#123705"> &para;</a><div class="date" title="2019-03-19 10:25"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123705">
<div class="phpcode"><code><span class="html">For those which will use inotify-tools to start an event when move_uploaded_file put the file in a specific directory, be aware that move_uploaded_file will trigger the create event, and not the move event of inotify-tools.</span></code></div>
  </div>
 </div>
  <div class="note" id="64418">  <div class="votes">
    <div id="Vu64418">
    <a href="/manual/vote-note.php?id=64418&amp;page=function.move-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64418">
    <a href="/manual/vote-note.php?id=64418&amp;page=function.move-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64418" title="52% like this...">
    5
    </div>
  </div>
  <a href="#64418" class="name">
  <strong class="user"><em>Zarel</em></strong></a><a class="genanchor" href="#64418"> &para;</a><div class="date" title="2006-04-13 06:12"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64418">
<div class="phpcode"><code><span class="html">nouncad at mayetlite dot com posted a function that uploaded a file, and would rename it if it already existed, to filename[n].ext<br /><br />It only worked for files with extensions exactly three letters long, so I fixed that (and made a few other improvements while I was at it).<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Usage: uploadfile($_FILE['file']['name'],'temp/',$_FILE['file']['tmp_name'])<br /></span><span class="keyword">function </span><span class="default">uploadfile</span><span class="keyword">(</span><span class="default">$origin</span><span class="keyword">, </span><span class="default">$dest</span><span class="keyword">, </span><span class="default">$tmp_name</span><span class="keyword">)<br />{<br />  </span><span class="default">$origin </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">basename</span><span class="keyword">(</span><span class="default">$origin</span><span class="keyword">));<br />  </span><span class="default">$fulldest </span><span class="keyword">= </span><span class="default">$dest</span><span class="keyword">.</span><span class="default">$origin</span><span class="keyword">;<br />  </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">$origin</span><span class="keyword">;<br />  for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$fulldest</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++)<br />  {<br />    </span><span class="default">$fileext </span><span class="keyword">= (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$origin</span><span class="keyword">,</span><span class="string">'.'</span><span class="keyword">)===</span><span class="default">false</span><span class="keyword">?</span><span class="string">''</span><span class="keyword">:</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">(</span><span class="default">strrchr</span><span class="keyword">(</span><span class="default">$origin</span><span class="keyword">, </span><span class="string">"."</span><span class="keyword">), </span><span class="default">1</span><span class="keyword">));<br />    </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$origin</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$origin</span><span class="keyword">)-</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$fileext</span><span class="keyword">)).</span><span class="string">'['</span><span class="keyword">.</span><span class="default">$i</span><span class="keyword">.</span><span class="string">']'</span><span class="keyword">.</span><span class="default">$fileext</span><span class="keyword">;<br />    </span><span class="default">$fulldest </span><span class="keyword">= </span><span class="default">$dest</span><span class="keyword">.</span><span class="default">$newfilename</span><span class="keyword">;<br />  }<br />  <br />  if (</span><span class="default">move_uploaded_file</span><span class="keyword">(</span><span class="default">$tmp_name</span><span class="keyword">, </span><span class="default">$fulldest</span><span class="keyword">))<br />    return </span><span class="default">$filename</span><span class="keyword">;<br />  return </span><span class="default">false</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85149">  <div class="votes">
    <div id="Vu85149">
    <a href="/manual/vote-note.php?id=85149&amp;page=function.move-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85149">
    <a href="/manual/vote-note.php?id=85149&amp;page=function.move-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85149" title="52% like this...">
    3
    </div>
  </div>
  <a href="#85149" class="name">
  <strong class="user"><em>Florian S. in H. an der E. [.de]</em></strong></a><a class="genanchor" href="#85149"> &para;</a><div class="date" title="2008-08-17 02:02"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85149">
<div class="phpcode"><code><span class="html">move_uploaded_file (on my setup) always makes files 0600 ("rw- --- ---") and owned by the user running the webserver (owner AND group).<br />Even though the directory has a sticky bit set to the group permissions!<br />I couldn't find any settings to change this via php.ini or even using "umask()".<br /><br />I want my regular user on the server to be able to "tar cjf" the directory .. which would fail on files totally owned by the webserver-process-user;<br />the "copy(from, to)" function obeys the sticky-bit though!</span></code></div>
  </div>
 </div>
  <div class="note" id="128697">  <div class="votes">
    <div id="Vu128697">
    <a href="/manual/vote-note.php?id=128697&amp;page=function.move-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128697">
    <a href="/manual/vote-note.php?id=128697&amp;page=function.move-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128697" title="50% like this...">
    0
    </div>
  </div>
  <a href="#128697" class="name">
  <strong class="user"><em>chelidze dot givia at gmail dot com</em></strong></a><a class="genanchor" href="#128697"> &para;</a><div class="date" title="2023-07-06 02:54"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128697">
<div class="phpcode"><code><span class="html">When using move_uploaded_file(). If the user uploads an image with a name that already exists, move_uploaded_file() will overwrite it. It's a good practice to store images in directories that you generate upon creating ur card/user/product etc...<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">generateDir</span><span class="keyword">(</span><span class="default">int $n</span><span class="keyword">): </span><span class="default">string </span><span class="keyword">{<br />         </span><span class="default">$characters</span><span class="keyword">=</span><span class="string">"0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"</span><span class="keyword">;<br />        </span><span class="default">$dir </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />        for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$n</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />            </span><span class="default">$index </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$characters</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">);<br />            </span><span class="default">$dir </span><span class="keyword">.= </span><span class="default">$characters</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">];<br />        }<br />        return </span><span class="default">$dir</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">$image </span><span class="keyword">= </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">"image"</span><span class="keyword">];<br />    </span><span class="default">$imagePath </span><span class="keyword">= </span><span class="string">'images/'</span><span class="keyword">. </span><span class="default">generateDir</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">) .</span><span class="string">'/'</span><span class="keyword">. </span><span class="default">$image</span><span class="keyword">[</span><span class="string">"name"</span><span class="keyword">];<br /><br />    </span><span class="comment">// Make the directory first or else it will not proceed with the upload.<br />    </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$imagePath</span><span class="keyword">);<br />    <br />    </span><span class="comment">// some error handling etc...<br /><br />    </span><span class="default">move_uploaded_file</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">[</span><span class="string">"tmp_name"</span><span class="keyword">],  </span><span class="default">$imagePath</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76452">  <div class="votes">
    <div id="Vu76452">
    <a href="/manual/vote-note.php?id=76452&amp;page=function.move-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76452">
    <a href="/manual/vote-note.php?id=76452&amp;page=function.move-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76452" title="50% like this...">
    0
    </div>
  </div>
  <a href="#76452" class="name">
  <strong class="user"><em>nlgordon at iastate dot edu</em></strong></a><a class="genanchor" href="#76452"> &para;</a><div class="date" title="2007-07-16 11:29"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76452">
<div class="phpcode"><code><span class="html">Just a helpful comment.  If you have open_basedir set then you must set upload_tmp_dir to somewhere within the open_basedir.  Otherwise the file upload will be denied.  move_uploaded_file might be open_basedir aware, but the rest of the upload process isn't.</span></code></div>
  </div>
 </div>
  <div class="note" id="57959">  <div class="votes">
    <div id="Vu57959">
    <a href="/manual/vote-note.php?id=57959&amp;page=function.move-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57959">
    <a href="/manual/vote-note.php?id=57959&amp;page=function.move-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57959" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#57959" class="name">
  <strong class="user"><em>jest3r at mtonic dot net</em></strong></a><a class="genanchor" href="#57959"> &para;</a><div class="date" title="2005-10-19 09:10"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57959">
<div class="phpcode"><code><span class="html">It seems that move_uploaded_file use the GROUP permissions of the parent directory of the tmp file location, whereas a simple "copy" uses the group of the apache process. This could create a security nighmare if your tmp file location is owned by root:wheel</span></code></div>
  </div>
 </div>
  <div class="note" id="128556">  <div class="votes">
    <div id="Vu128556">
    <a href="/manual/vote-note.php?id=128556&amp;page=function.move-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128556">
    <a href="/manual/vote-note.php?id=128556&amp;page=function.move-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128556" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#128556" class="name">
  <strong class="user"><em>benbrown3882 at gmail dot com</em></strong></a><a class="genanchor" href="#128556"> &para;</a><div class="date" title="2023-05-19 04:04"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128556">
<div class="phpcode"><code><span class="html">Ensure the upload temporary directory and the destination directory have "write" permissions for Other.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.move-uploaded-file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.move-uploaded-file.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
