<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ZipArchive::addGlob - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ziparchive.addglob.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/ziparchive.addglob.php">
 <link rel="alternate" href="https://www.php.net/manual/en/ziparchive.addglob.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.ziparchive.php">
 <link rel="prev" href="https://www.php.net/manual/en/ziparchive.addfromstring.php">
 <link rel="next" href="https://www.php.net/manual/en/ziparchive.addpattern.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ziparchive.addglob.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ziparchive.addglob.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ziparchive.addglob.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ziparchive.addglob.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ziparchive.addglob.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ziparchive.addglob.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ziparchive.addglob.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ziparchive.addglob.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ziparchive.addglob.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ziparchive.addglob.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ziparchive.addglob.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Add files from a directory by glob pattern" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ZipArchive::addGlob - Manual" />
<meta name="twitter:description" content="Add files from a directory by glob pattern" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ZipArchive::addGlob - Manual" />
<meta itemprop="description" content="Add files from a directory by glob pattern" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Add files from a directory by glob pattern" />

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
        <a href="ziparchive.addpattern.php">
          ZipArchive::addPattern &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ziparchive.addfromstring.php">
          &laquo; ZipArchive::addFromString        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.zip.php'>Zip</a></li>      <li><a href='class.ziparchive.php'>ZipArchive</a></li>      </ul>
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
            <option value='en/ziparchive.addglob.php' selected="selected">English</option>
            <option value='de/ziparchive.addglob.php'>German</option>
            <option value='es/ziparchive.addglob.php'>Spanish</option>
            <option value='fr/ziparchive.addglob.php'>French</option>
            <option value='it/ziparchive.addglob.php'>Italian</option>
            <option value='ja/ziparchive.addglob.php'>Japanese</option>
            <option value='pt_BR/ziparchive.addglob.php'>Brazilian Portuguese</option>
            <option value='ru/ziparchive.addglob.php'>Russian</option>
            <option value='tr/ziparchive.addglob.php'>Turkish</option>
            <option value='uk/ziparchive.addglob.php'>Ukrainian</option>
            <option value='zh/ziparchive.addglob.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ziparchive.addglob" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ZipArchive::addGlob</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8, PECL zip &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">ZipArchive::addGlob</span> &mdash; <span class="dc-title">Add files from a directory by glob pattern</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-ziparchive.addglob-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>ZipArchive::addGlob</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pattern</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Add files from a directory which match the glob <code class="parameter">pattern</code>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">For maximum portability, it is recommended to always use forward slashes (<code class="literal">/</code>) as directory separator in ZIP filenames.</span></p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-ziparchive.addglob-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">pattern</code></dt>
    <dd>
     <p class="para">
      A <span class="function"><a href="function.glob.php" class="function">glob()</a></span> pattern against which files will be matched.
     </p>
    </dd>
   
   
    <dt><code class="parameter">flags</code></dt>
    <dd>
     <p class="para">
      A bit mask of <code class="literal">glob()</code> flags.
     </p>
    </dd>
   
   
    <dt><code class="parameter">options</code></dt>
    <dd>
     <p class="para">
      An associative array of options. Available options are:
      <ul class="itemizedlist">
       <li class="listitem">
        <p class="para">
         <code class="literal">&quot;add_path&quot;</code>
        </p>
        <p class="para">
         Prefix to prepend when translating to the local path of the file within
         the archive. This is applied after any remove operations defined by the
         <code class="literal">&quot;remove_path&quot;</code> or <code class="literal">&quot;remove_all_path&quot;</code>
         options.
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         <code class="literal">&quot;remove_path&quot;</code>
        </p>
        <p class="para">
         Prefix to remove from matching file paths before adding to the archive.
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         <code class="literal">&quot;remove_all_path&quot;</code>
        </p>
        <p class="para">
         <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> to use the file name only and add to the root of the archive.
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         <code class="literal">&quot;flags&quot;</code>
        </p>
        <p class="para">
         Bitmask consisting of
         <strong><code><a href="zip.constants.php#ziparchive.constants.fl-overwrite">ZipArchive::FL_OVERWRITE</a></code></strong>,
         <strong><code><a href="zip.constants.php#ziparchive.constants.fl-enc-guess">ZipArchive::FL_ENC_GUESS</a></code></strong>,
         <strong><code><a href="zip.constants.php#ziparchive.constants.fl-enc-utf-8">ZipArchive::FL_ENC_UTF_8</a></code></strong>,
         <strong><code><a href="zip.constants.php#ziparchive.constants.fl-enc-cp437">ZipArchive::FL_ENC_CP437</a></code></strong>,
         <strong><code><a href="zip.constants.php#ziparchive.constants.fl-open-file-now">ZipArchive::FL_OPEN_FILE_NOW</a></code></strong>.
         The behaviour of these constants is described on the
         <a href="zip.constants.php" class="link">ZIP constants</a> page.
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         <code class="literal">&quot;comp_method&quot;</code>
        </p>
        <p class="para">
         Compression method, one of the <strong><code><a href="zip.constants.php#ziparchive.constants.cm-default">ZipArchive::CM_<span class="replaceable">*</span></a></code></strong>
         constants.
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         <code class="literal">&quot;comp_flags&quot;</code>
        </p>
        <p class="para">
         Compression level.
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         <code class="literal">&quot;enc_method&quot;</code>
        </p>
        <p class="para">
         Encryption method, one of the <strong><code><a href="zip.constants.php#ziparchive.constants.em-none">ZipArchive::EM_<span class="replaceable">*</span></a></code></strong>
         constants.
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         <code class="literal">&quot;enc_password&quot;</code>
        </p>
        <p class="para">
         Password used for encryption.
        </p>
       </li>
      </ul>
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-ziparchive.addglob-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   An <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of added files on success  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-ziparchive.addglob-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>8.0.0, PECL zip 1.18.0</td>
       <td>
        <code class="literal">&quot;flags&quot;</code> in <code class="parameter">options</code> was added.
       </td>
      </tr>

      <tr>
       <td>8.0.0, PECL zip 1.18.1</td>
       <td>
        <code class="literal">&quot;comp_method&quot;</code>, <code class="literal">&quot;comp_flags&quot;</code>,
        <code class="literal">&quot;enc_method&quot;</code> and <code class="literal">&quot;enc_password&quot;</code> in
        <code class="parameter">options</code> were added.
       </td>
      </tr>

      <tr>
       <td>8.3.0, PECL zip 1.22.1</td>
       <td>
        <strong><code><a href="zip.constants.php#ziparchive.constants.fl-open-file-now">ZipArchive::FL_OPEN_FILE_NOW</a></code></strong> was added.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-ziparchive.addglob-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="ziparchive.addglob.example.basic">
   <p><strong>Example #1 <span class="methodname"><strong>ZipArchive::addGlob()</strong></span> example</strong></p>
   <div class="example-contents"><p>
     Add all php scripts and text files from current working directory
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$zip </span><span style="color: #007700">= new </span><span style="color: #0000BB">ZipArchive</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$ret </span><span style="color: #007700">= </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">open</span><span style="color: #007700">(</span><span style="color: #DD0000">'application.zip'</span><span style="color: #007700">, </span><span style="color: #0000BB">ZipArchive</span><span style="color: #007700">::</span><span style="color: #0000BB">CREATE </span><span style="color: #007700">| </span><span style="color: #0000BB">ZipArchive</span><span style="color: #007700">::</span><span style="color: #0000BB">OVERWRITE</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">$ret </span><span style="color: #007700">!== </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">'Failed with code %d'</span><span style="color: #007700">, </span><span style="color: #0000BB">$ret</span><span style="color: #007700">);<br />} else {<br />    </span><span style="color: #0000BB">$options </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'add_path' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'sources/'</span><span style="color: #007700">, </span><span style="color: #DD0000">'remove_all_path' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addGlob</span><span style="color: #007700">(</span><span style="color: #DD0000">'*.{php,txt}'</span><span style="color: #007700">, </span><span style="color: #0000BB">GLOB_BRACE</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>



 <div class="refsect1 seealso" id="refsect1-ziparchive.addglob-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="ziparchive.addfile.php" class="methodname" rel="rdfs-seeAlso">ZipArchive::addFile()</a> - Adds a file to a ZIP archive from the given path</span></li>
    <li><span class="methodname"><a href="ziparchive.addpattern.php" class="methodname" rel="rdfs-seeAlso">ZipArchive::addPattern()</a> - Add files from a directory by PCRE pattern</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/zip/ziparchive/addglob.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fziparchive.addglob%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ziparchive.addglob&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ziparchive.addglob.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116717">  <div class="votes">
    <div id="Vu116717">
    <a href="/manual/vote-note.php?id=116717&amp;page=ziparchive.addglob&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116717">
    <a href="/manual/vote-note.php?id=116717&amp;page=ziparchive.addglob&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116717" title="60% like this...">
    6
    </div>
  </div>
  <a href="#116717" class="name">
  <strong class="user"><em>johnsmith at na dot com</em></strong></a><a class="genanchor" href="#116717"> &para;</a><div class="date" title="2015-02-19 03:36"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116717">
<div class="phpcode"><code><span class="html">Neither 'remove_all_path' or 'remove_path' options seem to be workng</span></code></div>
  </div>
 </div>
  <div class="note" id="120318">  <div class="votes">
    <div id="Vu120318">
    <a href="/manual/vote-note.php?id=120318&amp;page=ziparchive.addglob&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120318">
    <a href="/manual/vote-note.php?id=120318&amp;page=ziparchive.addglob&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120318" title="54% like this...">
    1
    </div>
  </div>
  <a href="#120318" class="name">
  <strong class="user"><em>sunbinzzzzz at gmail dot com</em></strong></a><a class="genanchor" href="#120318"> &para;</a><div class="date" title="2016-12-13 07:16"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120318">
<div class="phpcode"><code><span class="html">Yes!! neither 'remove_all_path' or 'remove_path'  be working，if you want the right result，you should like this， $option = array( 'add_path' =&gt; '/', 'remove_all_path' =&gt; 'your path' );   'add_path' just give a '/'， then you will (; 。</span></code></div>
  </div>
 </div>
  <div class="note" id="129233">  <div class="votes">
    <div id="Vu129233">
    <a href="/manual/vote-note.php?id=129233&amp;page=ziparchive.addglob&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129233">
    <a href="/manual/vote-note.php?id=129233&amp;page=ziparchive.addglob&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129233" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129233" class="name">
  <strong class="user"><em>hkn06tr at gmail dot com</em></strong></a><a class="genanchor" href="#129233"> &para;</a><div class="date" title="2024-02-10 05:24"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129233">
<div class="phpcode"><code><span class="html">The following all works:<br />---------<br />Ex-1:<br />Nearly all files for 5 level recursively are zipped:<br />$zip-&gt;addGlob("*.*");<br />$zip-&gt;addGlob("*/*.*");<br />$zip-&gt;addGlob("*/*/*.*");<br />$zip-&gt;addGlob("*/*/*/*.*");<br />$zip-&gt;addGlob("*/*/*/*/*.*");<br />$zip-&gt;addGlob("*/*/*/*/*/*.*"); // 5th<br />---------<br />Ex-2:<br />$zip-&gt;addGlob("library/*.*");<br />all files under library<br />---------<br />Ex-3:<br />$zip-&gt;addGlob("*/*.[cpj]*");  <br />Means all files starting with cpj<br />So they all included<br />css<br />php<br />js<br />---------<br />Ex-4:<br />$zip-&gt;addGlob("*/*.[cpj][sh]*");<br />Take guarantee:<br />css <br />php<br />js<br />---------<br />Ex-5 Bonus:<br />More complicated:<br />$zip-&gt;addGlob("[ab]*/c*/*.[cpjth][shxt]*");<br />All folder starting with a or b and then in subfolder must start with c but only those files:<br />css php txt js html</span></code></div>
  </div>
 </div>
  <div class="note" id="120538">  <div class="votes">
    <div id="Vu120538">
    <a href="/manual/vote-note.php?id=120538&amp;page=ziparchive.addglob&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120538">
    <a href="/manual/vote-note.php?id=120538&amp;page=ziparchive.addglob&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120538" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120538" class="name">
  <strong class="user"><em>Francesc Pineda Segarra</em></strong></a><a class="genanchor" href="#120538"> &para;</a><div class="date" title="2017-01-26 01:50"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120538">
<div class="phpcode"><code><span class="html">For me the better way seems to be:<br /><br />$options = array('add_path' =&gt; DIRECTORY_SEPARATOR, 'remove_all_path' =&gt; TRUE);<br /><br />On Windows uses \, on others /</span></code></div>
  </div>
 </div>
  <div class="note" id="117045">  <div class="votes">
    <div id="Vu117045">
    <a href="/manual/vote-note.php?id=117045&amp;page=ziparchive.addglob&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117045">
    <a href="/manual/vote-note.php?id=117045&amp;page=ziparchive.addglob&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117045" title="50% like this...">
    0
    </div>
  </div>
  <a href="#117045" class="name">
  <strong class="user"><em>sumariva at gmail dot com</em></strong></a><a class="genanchor" href="#117045"> &para;</a><div class="date" title="2015-04-07 01:40"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117045">
<div class="phpcode"><code><span class="html">As others suggested, to remove all paths, use the space as basepath.<br />Zip opened with builtin utility on a Windows XP and WinRAR.<br /><br />$options = array('add_path' =&gt; ' ','remove_all_path' =&gt; TRUE);<br /><br />Thanks for all contributers.</span></code></div>
  </div>
 </div>
  <div class="note" id="116705">  <div class="votes">
    <div id="Vu116705">
    <a href="/manual/vote-note.php?id=116705&amp;page=ziparchive.addglob&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116705">
    <a href="/manual/vote-note.php?id=116705&amp;page=ziparchive.addglob&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116705" title="50% like this...">
    0
    </div>
  </div>
  <a href="#116705" class="name">
  <strong class="user"><em>zckernel at gmail dot com</em></strong></a><a class="genanchor" href="#116705"> &para;</a><div class="date" title="2015-02-13 12:52"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116705">
<div class="phpcode"><code><span class="html">Doesn't work with the following options:<br />$options = array('remove_all_path' =&gt; TRUE);<br />$zipArchive-&gt;addGlob($path."/*", GLOB_BRACE, $options);<br /><br />The full path to file is adding to the archive.<br /><br />Works well if:<br />$options = array('add_path' =&gt; './','remove_all_path' =&gt; TRUE);</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ziparchive.addglob&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ziparchive.addglob.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.ziparchive.php">ZipArchive</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="ziparchive.addemptydir.php" title="addEmptyDir">addEmptyDir</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.addfile.php" title="addFile">addFile</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.addfromstring.php" title="addFromString">addFromString</a>
                        </li>
                                                <li class="current">
                            <a href="ziparchive.addglob.php" title="addGlob">addGlob</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.addpattern.php" title="addPattern">addPattern</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.clearerror.php" title="clearError">clearError</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.deleteindex.php" title="deleteIndex">deleteIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.deletename.php" title="deleteName">deleteName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.extractto.php" title="extractTo">extractTo</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getarchivecomment.php" title="getArchiveComment">getArchiveComment</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getarchiveflag.php" title="getArchiveFlag">getArchiveFlag</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getcommentindex.php" title="getCommentIndex">getCommentIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getcommentname.php" title="getCommentName">getCommentName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getexternalattributesindex.php" title="getExternalAttributesIndex">getExternalAttributesIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getexternalattributesname.php" title="getExternalAttributesName">getExternalAttributesName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getfromindex.php" title="getFromIndex">getFromIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getfromname.php" title="getFromName">getFromName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getnameindex.php" title="getNameIndex">getNameIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getstatusstring.php" title="getStatusString">getStatusString</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getstream.php" title="getStream">getStream</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getstreamindex.php" title="getStreamIndex">getStreamIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getstreamname.php" title="getStreamName">getStreamName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.iscompressionmethoddupported.php" title="isCompressionMethodSupported">isCompressionMethodSupported</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.isencryptionmethoddupported.php" title="isEncryptionMethodSupported">isEncryptionMethodSupported</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.locatename.php" title="locateName">locateName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.open.php" title="open">open</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.registercancelcallback.php" title="registerCancelCallback">registerCancelCallback</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.registerprogresscallback.php" title="registerProgressCallback">registerProgressCallback</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.renameindex.php" title="renameIndex">renameIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.renamename.php" title="renameName">renameName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.replacefile.php" title="replaceFile">replaceFile</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setarchivecomment.php" title="setArchiveComment">setArchiveComment</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setarchiveflag.php" title="setArchiveFlag">setArchiveFlag</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setcommentindex.php" title="setCommentIndex">setCommentIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setcommentname.php" title="setCommentName">setCommentName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setcompressionindex.php" title="setCompressionIndex">setCompressionIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setcompressionname.php" title="setCompressionName">setCompressionName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setencryptionindex.php" title="setEncryptionIndex">setEncryptionIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setencryptionname.php" title="setEncryptionName">setEncryptionName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setexternalattributesindex.php" title="setExternalAttributesIndex">setExternalAttributesIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setexternalattributesname.php" title="setExternalAttributesName">setExternalAttributesName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setmtimeindex.php" title="setMtimeIndex">setMtimeIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setmtimename.php" title="setMtimeName">setMtimeName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setpassword.php" title="setPassword">setPassword</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.statindex.php" title="statIndex">statIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.statname.php" title="statName">statName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.unchangeall.php" title="unchangeAll">unchangeAll</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.unchangearchive.php" title="unchangeArchive">unchangeArchive</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.unchangeindex.php" title="unchangeIndex">unchangeIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.unchangename.php" title="unchangeName">unchangeName</a>
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
