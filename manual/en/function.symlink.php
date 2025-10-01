<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: symlink - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.symlink.php">
 <link rel="shorturl" href="https://www.php.net/symlink">
 <link rel="alternate" href="https://www.php.net/symlink" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.stat.php">
 <link rel="next" href="https://www.php.net/manual/en/function.tempnam.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.symlink.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.symlink.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.symlink.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.symlink.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.symlink.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.symlink.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.symlink.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.symlink.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.symlink.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.symlink.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.symlink.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creates a symbolic link" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: symlink - Manual" />
<meta name="twitter:description" content="Creates a symbolic link" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: symlink - Manual" />
<meta itemprop="description" content="Creates a symbolic link" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creates a symbolic link" />

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
        <a href="function.tempnam.php">
          tempnam &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.stat.php">
          &laquo; stat        </a>
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
            <option value='en/function.symlink.php' selected="selected">English</option>
            <option value='de/function.symlink.php'>German</option>
            <option value='es/function.symlink.php'>Spanish</option>
            <option value='fr/function.symlink.php'>French</option>
            <option value='it/function.symlink.php'>Italian</option>
            <option value='ja/function.symlink.php'>Japanese</option>
            <option value='pt_BR/function.symlink.php'>Brazilian Portuguese</option>
            <option value='ru/function.symlink.php'>Russian</option>
            <option value='tr/function.symlink.php'>Turkish</option>
            <option value='uk/function.symlink.php'>Ukrainian</option>
            <option value='zh/function.symlink.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.symlink" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">symlink</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">symlink</span> &mdash; <span class="dc-title">Creates a symbolic link</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.symlink-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>symlink</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$target</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$link</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>symlink()</strong></span> creates a symbolic link to the existing
   <code class="parameter">target</code> with the specified name
   <code class="parameter">link</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.symlink-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">target</code></dt>
     <dd>
      <p class="para">
       Target of the link.
      </p>
     </dd>
    
    
     <dt><code class="parameter">link</code></dt>
     <dd>
      <p class="para">
       The link name.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.symlink-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.symlink-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   The function fails, and issues <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>,
   if <code class="parameter">link</code> already exists.
   On Windows, the function also fails, and issues <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>,
   if <code class="parameter">target</code> does not exist.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.symlink-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2425">
    <p><strong>Example #1 Create a symbolic link</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$target </span><span style="color: #007700">= </span><span style="color: #DD0000">'uploads.php'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$link </span><span style="color: #007700">= </span><span style="color: #DD0000">'uploads'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">symlink</span><span style="color: #007700">(</span><span style="color: #0000BB">$target</span><span style="color: #007700">, </span><span style="color: #0000BB">$link</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">readlink</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.symlink-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.is-link.php" class="function" rel="rdfs-seeAlso">is_link()</a> - Tells whether the filename is a symbolic link</span></li>
    <li><span class="function"><a href="function.link.php" class="function" rel="rdfs-seeAlso">link()</a> - Create a hard link</span></li>
    <li><span class="function"><a href="function.readlink.php" class="function" rel="rdfs-seeAlso">readlink()</a> - Returns the target of a symbolic link</span></li>
    <li><span class="function"><a href="function.linkinfo.php" class="function" rel="rdfs-seeAlso">linkinfo()</a> - Gets information about a link</span></li>
    <li><span class="function"><a href="function.unlink.php" class="function" rel="rdfs-seeAlso">unlink()</a> - Deletes a file</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/symlink.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.symlink%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.symlink&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.symlink.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="9960">  <div class="votes">
    <div id="Vu9960">
    <a href="/manual/vote-note.php?id=9960&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd9960">
    <a href="/manual/vote-note.php?id=9960&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V9960" title="65% like this...">
    22
    </div>
  </div>
  <a href="#9960" class="name">
  <strong class="user"><em>olszewski_marek at yahoo dot com</em></strong></a><a class="genanchor" href="#9960"> &para;</a><div class="date" title="2000-12-04 08:54"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom9960">
<div class="phpcode"><code><span class="html">Here is a simple way to control who downloads your files...
<br />
<br />You will have to set: $filename, $downloaddir, $safedir and $downloadURL.
<br />
<br />Basically $filename is the name of a file, $downloaddir is any dir on your server, $safedir is a dir that is not accessible by a browser that contains a file named $filename and $downloadURL is the URL equivalent of your $downloaddir.
<br />
<br />The way this works is when a user wants to download a file, a randomly named dir is created in the $downloaddir, and a symbolic link is created to the file being requested.  The browser is then redirected to the new link and the download begins.
<br />
<br />The code also deletes any past symbolic links created by any past users before creating one for itself.  This in effect leaves only one symbolic link at a time and prevents past users from downloading the file again without going through this script.  There appears to be no problem if a symbolic link is deleted while another person is downloading from that link.
<br />
<br />This is not too great if not many people download the file since the symbolic link will not be deleted until another person downloads the same file. 
<br />
<br />Anyway enjoy:
<br />
<br /><span class="default">&lt;?php
<br />$letters </span><span class="keyword">= </span><span class="string">'abcdefghijklmnopqrstuvwxyz'</span><span class="keyword">;
<br /></span><span class="default">srand</span><span class="keyword">((double) </span><span class="default">microtime</span><span class="keyword">() * </span><span class="default">1000000</span><span class="keyword">);
<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">4</span><span class="keyword">,</span><span class="default">12</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {
<br />   </span><span class="default">$q </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">,</span><span class="default">24</span><span class="keyword">);
<br />   </span><span class="default">$string </span><span class="keyword">= </span><span class="default">$string </span><span class="keyword">. </span><span class="default">$letters</span><span class="keyword">[</span><span class="default">$q</span><span class="keyword">];
<br />}
<br /></span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$downloaddir</span><span class="keyword">);
<br />while (</span><span class="default">$dir </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)) {
<br />   if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$downloaddir </span><span class="keyword">. </span><span class="default">$dir</span><span class="keyword">)){
<br />      if (</span><span class="default">$dir </span><span class="keyword">!= </span><span class="string">"." </span><span class="keyword">&amp;&amp; </span><span class="default">$dir </span><span class="keyword">!= </span><span class="string">".."</span><span class="keyword">){
<br />         @</span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$downloaddir </span><span class="keyword">. </span><span class="default">$dir </span><span class="keyword">. </span><span class="string">"/" </span><span class="keyword">. </span><span class="default">$filename</span><span class="keyword">);
<br />         @</span><span class="default">rmdir</span><span class="keyword">(</span><span class="default">$downloaddir </span><span class="keyword">. </span><span class="default">$dir</span><span class="keyword">);
<br />      }
<br />   }
<br />}
<br /></span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br /></span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$downloaddir </span><span class="keyword">. </span><span class="default">$string</span><span class="keyword">, </span><span class="default">0777</span><span class="keyword">);
<br /></span><span class="default">symlink</span><span class="keyword">(</span><span class="default">$safedir </span><span class="keyword">. </span><span class="default">$filename</span><span class="keyword">, </span><span class="default">$downloaddir </span><span class="keyword">. </span><span class="default">$string </span><span class="keyword">. </span><span class="string">"/" </span><span class="keyword">. </span><span class="default">$filename</span><span class="keyword">);
<br /></span><span class="default">Header</span><span class="keyword">(</span><span class="string">"Location: " </span><span class="keyword">. </span><span class="default">$downloadURL </span><span class="keyword">. </span><span class="default">$string </span><span class="keyword">. </span><span class="string">"/" </span><span class="keyword">. </span><span class="default">$filename</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122000">  <div class="votes">
    <div id="Vu122000">
    <a href="/manual/vote-note.php?id=122000&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122000">
    <a href="/manual/vote-note.php?id=122000&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122000" title="83% like this...">
    4
    </div>
  </div>
  <a href="#122000" class="name">
  <strong class="user"><em>Wixiweb</em></strong></a><a class="genanchor" href="#122000"> &para;</a><div class="date" title="2017-12-08 04:20"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122000">
<div class="phpcode"><code><span class="html">If you use the suhosin extension, you must allow symlink with :<br />&gt; suhosin.executor.allow_symlink = On<br /><br />Check your /var/log/syslog file for more information :<br />&gt; suhosin: ALERT - symlink called during open_basedir</span></code></div>
  </div>
 </div>
  <div class="note" id="97605">  <div class="votes">
    <div id="Vu97605">
    <a href="/manual/vote-note.php?id=97605&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97605">
    <a href="/manual/vote-note.php?id=97605&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97605" title="69% like this...">
    9
    </div>
  </div>
  <a href="#97605" class="name">
  <strong class="user"><em>reddy1042001 at yahoo dot co dot in</em></strong></a><a class="genanchor" href="#97605"> &para;</a><div class="date" title="2010-04-27 04:33"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97605">
<div class="phpcode"><code><span class="html">Symlinks on windows  are created by Symlink() which accept only absolute paths  but not relative paths .relative paths on windows are not supported for symlinks</span></code></div>
  </div>
 </div>
  <div class="note" id="74464">  <div class="votes">
    <div id="Vu74464">
    <a href="/manual/vote-note.php?id=74464&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74464">
    <a href="/manual/vote-note.php?id=74464&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74464" title="61% like this...">
    4
    </div>
  </div>
  <a href="#74464" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#74464"> &para;</a><div class="date" title="2007-04-12 06:44"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74464">
<div class="phpcode"><code><span class="html">Um, duh... that's all I gotta say about by previous note. Please delete it. :)<br /><br />Windows Vista has its own symlink program now (mklink). Hopefully future versions of PHP for Windows will have this function put it?<br /><br />Anyway, this will work on Vista (assuming your PHP user has the proper permissions):<br /><span class="default">&lt;?php<br />define</span><span class="keyword">(</span><span class="string">'SYMLINK_FILE'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'SYMLINK_DIR'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'SYMLINK_JUNCTION'</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />function </span><span class="default">symlink </span><span class="keyword">(</span><span class="default">$target</span><span class="keyword">, </span><span class="default">$link</span><span class="keyword">, </span><span class="default">$flag </span><span class="keyword">= </span><span class="default">SYMLINK_FILE</span><span class="keyword">) {<br />    switch (</span><span class="default">$flag</span><span class="keyword">) {<br />       case </span><span class="default">SYMLINK_DIR</span><span class="keyword">: </span><span class="default">$pswitch </span><span class="keyword">= </span><span class="string">'/d'</span><span class="keyword">; break;<br />       case </span><span class="default">SYMLINK_JUNCTION</span><span class="keyword">: </span><span class="default">$pswitch </span><span class="keyword">= </span><span class="string">'/j'</span><span class="keyword">; break;<br />       case </span><span class="default">SYMLINK_FILE</span><span class="keyword">:<br />       default: </span><span class="default">$pswitch </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">; break;<br />    }<br />    </span><span class="comment">// Change / to \ because it will break otherwise.<br />    </span><span class="default">$target </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">, </span><span class="string">'\\'</span><span class="keyword">, </span><span class="default">$target</span><span class="keyword">);<br />    </span><span class="default">$link </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">, </span><span class="string">'\\'</span><span class="keyword">, </span><span class="default">$link</span><span class="keyword">);<br />    return </span><span class="default">exec</span><span class="keyword">(</span><span class="string">'mklink ' </span><span class="keyword">. </span><span class="default">$pswitch </span><span class="keyword">. </span><span class="string">' "' </span><span class="keyword">. </span><span class="default">$link </span><span class="keyword">. </span><span class="string">'" "' </span><span class="keyword">. </span><span class="default">$target </span><span class="keyword">. </span><span class="string">'"'</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="74091">  <div class="votes">
    <div id="Vu74091">
    <a href="/manual/vote-note.php?id=74091&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74091">
    <a href="/manual/vote-note.php?id=74091&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74091" title="62% like this...">
    2
    </div>
  </div>
  <a href="#74091" class="name">
  <strong class="user"><em>Numien</em></strong></a><a class="genanchor" href="#74091"> &para;</a><div class="date" title="2007-03-23 02:51"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74091">
<div class="phpcode"><code><span class="html">The one difference to using symlinks for controlled file access vs. readfile() is that the HTTP server will handle content-type of the symlink automatically.<br /><br />If you always want it to be downloaded, this can be a negative point. However, if you want a file of non-predefined type to be viewable in the browser, this can be a real asset.<br /><br />Of course, you can use fileinfo/mime-magic to do that, but those require a module which isn't always available on shared hosting.</span></code></div>
  </div>
 </div>
  <div class="note" id="115152">  <div class="votes">
    <div id="Vu115152">
    <a href="/manual/vote-note.php?id=115152&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115152">
    <a href="/manual/vote-note.php?id=115152&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115152" title="55% like this...">
    5
    </div>
  </div>
  <a href="#115152" class="name">
  <strong class="user"><em>zeomniscient</em></strong></a><a class="genanchor" href="#115152"> &para;</a><div class="date" title="2014-06-04 01:21"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115152">
<div class="phpcode"><code><span class="html">Context:  php cli on windows OS.<br /><br />Do not forget to start the console with "Run as Administrator" else symlink will return 'false' and raise the following error :<br />Warning: symlink(): Cannot create symlink, error code(1314)</span></code></div>
  </div>
 </div>
  <div class="note" id="116958">  <div class="votes">
    <div id="Vu116958">
    <a href="/manual/vote-note.php?id=116958&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116958">
    <a href="/manual/vote-note.php?id=116958&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116958" title="56% like this...">
    2
    </div>
  </div>
  <a href="#116958" class="name">
  <strong class="user"><em>flobee</em></strong></a><a class="genanchor" href="#116958"> &para;</a><div class="date" title="2015-03-26 03:55"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116958">
<div class="phpcode"><code><span class="html">sym/hard linking i love to do it relative a lot but not that trivial when thinking wrong :-)<br />manpage says: the target is the _linkname_ and from that point to create relative links successful is to start from the directory where the link should be created e.g.: <br />/myfiles/now/here/<br />/myfiles/links/<br /><br />chdir( realpath(dirname($target))); <br />You need to create/find out the relativ path to the source, otherwise the absolut path will be used in a link.<br /><br />if you start to create the target path from the source eg: <br />"/myfiles/now/here/../../later/" and links should go to /myfiles/later/ you need to use realpath( dirname() ) set the new location using chdir() and start from here to link to the source which is ../now/here/<br />This you can find out e.g.: when having the absolut path of source and target:<br />$dirTo = realpath(dirname($to));<br />chdir($dirTo);<br />$linkName = basename($to);<br />$target = $dirTo . DIRECTORY_SEPARATOR . $linkName;<br />$srcFile = getRelativeDirectory($from, $to); //basicly a function which will find the from -&gt; to, but in this case the from ist the target where you need to start. <br />below you can find some examples how to split the path in chunks to find a relativ path</span></code></div>
  </div>
 </div>
  <div class="note" id="61904">  <div class="votes">
    <div id="Vu61904">
    <a href="/manual/vote-note.php?id=61904&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61904">
    <a href="/manual/vote-note.php?id=61904&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61904" title="57% like this...">
    2
    </div>
  </div>
  <a href="#61904" class="name">
  <strong class="user"><em>anything at the domain williamfrantz.com</em></strong></a><a class="genanchor" href="#61904"> &para;</a><div class="date" title="2006-02-14 05:15"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61904">
<div class="phpcode"><code><span class="html">Olszewski_marek makes a good suggestion, but the readfile() function can also be used to obscure file downloads from end users.<br /><br />/* Setup the file that will be sent */<br />$downloadDir = "some/secret/directory/";<br />$file = "theFileName.dat";<br /><br />/* Required for IE, otherwise Content-disposition is ignored */<br />if(ini_get('zlib.output_compression')) ini_set('zlib.output_compression', 'Off');<br /><br />/* Output HTTP headers that force "Save As" dialog */<br />header("Pragma: public");<br />header("Expires: 0");<br />header("Cache-Control: must-revalidate, post-check=0, pre-check=0");<br />header("Cache-Control: private",false);<br />header("Content-Type: application/octet-stream");<br />header("Content-Disposition: attachment; filename=\\"$file\\";");<br />header("Content-Transfer-Encoding: binary");<br />header("Content-Length: ".@filesize($downloadDir.$file));<br /><br />/* Prevent the script from timing out for large files */<br />set_time_limit(0);<br /><br />/* Send the entire file using @ to ignore all errors */<br />@readfile($downloadDir.$file);<br /><br />/* Exit immediately so no garbage follows the file contents */<br />exit;</span></code></div>
  </div>
 </div>
  <div class="note" id="122577">  <div class="votes">
    <div id="Vu122577">
    <a href="/manual/vote-note.php?id=122577&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122577">
    <a href="/manual/vote-note.php?id=122577&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122577" title="55% like this...">
    1
    </div>
  </div>
  <a href="#122577" class="name">
  <strong class="user"><em>alvaro at demogracia dot com</em></strong></a><a class="genanchor" href="#122577"> &para;</a><div class="date" title="2018-04-02 11:37"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122577">
<div class="phpcode"><code><span class="html">To remove symlinks you need to use:<br /><br />- rmdir() on Windows<br />- unlink() elsewhere<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">removeSymlink</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">) {<br />    if (</span><span class="default">PHP_SHLIB_SUFFIX</span><span class="keyword">===</span><span class="string">'dll'</span><span class="keyword">) {<br />        return </span><span class="default">rmdir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br />    }<br />    return </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117795">  <div class="votes">
    <div id="Vu117795">
    <a href="/manual/vote-note.php?id=117795&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117795">
    <a href="/manual/vote-note.php?id=117795&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117795" title="54% like this...">
    1
    </div>
  </div>
  <a href="#117795" class="name">
  <strong class="user"><em>raat1979 at gmail dot com</em></strong></a><a class="genanchor" href="#117795"> &para;</a><div class="date" title="2015-08-11 12:20"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117795">
<div class="phpcode"><code><span class="html">Be warned that at least with php 5.3 on windows 2008 R2 the symlink function is effected by the statcache. <br /><br />I got error 183 indicating the link existed. While the symlink was actually moved to a different location by  another process and would certainly not exist anymore.<br />Calling clearstatcache with a filename does not work. Most probably as the filename is converted to a device path (e.g. "\Device\HarddiskVolume1\D-Drive\www\pp\#static\index.html") which is a requirement for the windows call.<br /><br />easiest is to just call clearstatcache without a filename to resolve the issue.<br /><br />if you really want to call clearstatcache with a filename you could use readlink on the already deleted symlink (that still lives in the statcache) to get the filename. <br />For example something like this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">if(@</span><span class="default">symlink</span><span class="keyword">(</span><span class="string">'d:/www/pp/#static/index.html'</span><span class="keyword">,</span><span class="string">'d:/www/index.html'</span><span class="keyword">)===</span><span class="default">false</span><span class="keyword">){<br /></span><span class="comment">//link failed, perhaps a statcache issue? We try to get the target, if it is a statcache issue this should work just fine<br /><br /></span><span class="keyword">if((</span><span class="default">$rl </span><span class="keyword">= @</span><span class="default">readlink</span><span class="keyword">(</span><span class="default">$target</span><span class="keyword">))===</span><span class="default">false</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">; </span><span class="comment">//not a cache issue as stat on a non-existing file failed, something else must be wrong...<br /><br />//clear the stat cache for the actual target, strangely enough this works even-though this is the target and not the symlink to be created (*)<br /></span><span class="default">clearstatcache</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">,</span><span class="default">$rl</span><span class="keyword">); <br /><br />if(@</span><span class="default">symlink</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">,</span><span class="default">$target</span><span class="keyword">) ===</span><span class="default">false</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">; </span><span class="comment">//can't create the symlink<br /></span><span class="default">?&gt;<br /></span><br />*It looks for PHP on windows like the statcache is maintained on the target instead of the actual symlink (this would ease in getting the file properties and limit the size of the statcache)</span></code></div>
  </div>
 </div>
  <div class="note" id="70927">  <div class="votes">
    <div id="Vu70927">
    <a href="/manual/vote-note.php?id=70927&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70927">
    <a href="/manual/vote-note.php?id=70927&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70927" title="53% like this...">
    1
    </div>
  </div>
  <a href="#70927" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#70927"> &para;</a><div class="date" title="2006-11-04 04:33"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70927">
<div class="phpcode"><code><span class="html">&lt;?<br /><br />/**<br /> * A function to emulate symbolic links on Windows.<br /> * Uses the junction utility available at:<br /> * <a href="http://www.sysinternals.com" rel="nofollow" target="_blank">http://www.sysinternals.com</a><br /> * Note that this will only work on NTFS volumes.<br /> *<br /> * The syntax of the junction utility is:<br /> * junction &lt;junction directory&gt; &lt;junction target&gt;<br /> *<br /> * Note that the parameter order of the Junction command<br /> * is the reverse of the symlink function!<br /> *<br /> * @param string $target<br /> * @param string $link<br /> */<br />function _symlink( $target, $link ) {<br />  if ($_SERVER['WINDIR'] || $_SERVER['windir']) {<br />    exec('junction "' . $link . '" "' . $target . '"');<br />  } else {<br />    symlink($target,$link);<br />  }<br />}<br /><br />function _unlink($link ) {<br />  if ($_SERVER['WINDIR'] || $_SERVER['windir']) {<br />    exec('junction -d "' . $link . '"');<br />  } else {<br />    unlink($link);<br />  }<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="109607">  <div class="votes">
    <div id="Vu109607">
    <a href="/manual/vote-note.php?id=109607&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109607">
    <a href="/manual/vote-note.php?id=109607&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109607" title="52% like this...">
    1
    </div>
  </div>
  <a href="#109607" class="name">
  <strong class="user"><em>Calin</em></strong></a><a class="genanchor" href="#109607"> &para;</a><div class="date" title="2012-08-01 06:06"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109607">
<div class="phpcode"><code><span class="html">On IIS (Internet Information Services), you need to set permissions to allow the creation of symbolic links.<br /><br />Go to Local Security Policy -&gt; Local Policies -&gt; User Rights Assignment and right click on Create symbolic links -&gt; Properties -&gt; Add User or Group and add the "IUSR" user, which should be the user associated with IIS.<br />A restart may be required.<br /><br />If this doesn't work, go to IIS Manager -&gt; Authentication -&gt; select Anonymous Authentication -&gt; Edit and enter your current logged in user, which should be an administrator.<br />Hit OK and now the symlink() function in php should work fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="127703">  <div class="votes">
    <div id="Vu127703">
    <a href="/manual/vote-note.php?id=127703&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127703">
    <a href="/manual/vote-note.php?id=127703&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127703" title="100% like this...">
    1
    </div>
  </div>
  <a href="#127703" class="name">
  <strong class="user"><em>Scare!</em></strong></a><a class="genanchor" href="#127703"> &para;</a><div class="date" title="2022-10-08 12:32"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127703">
<div class="phpcode"><code><span class="html">On Windows, symlink() does not accept paths with symbolic links in them. Use realpath() <a href="https://www.php.net/manual/en/function.realpath.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/function.realpath.php</a> to expand the paths first.</span></code></div>
  </div>
 </div>
  <div class="note" id="128404">  <div class="votes">
    <div id="Vu128404">
    <a href="/manual/vote-note.php?id=128404&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128404">
    <a href="/manual/vote-note.php?id=128404&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128404" title="no votes...">
    0
    </div>
  </div>
  <a href="#128404" class="name">
  <strong class="user"><em>php-user at protonmail dot com</em></strong></a><a class="genanchor" href="#128404"> &para;</a><div class="date" title="2023-04-18 10:00"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128404">
<div class="phpcode"><code><span class="html">Something that is not documented is that this function checks whether the target file exists. Such behavior can be quite inconvenient if you want to create several symbolic links to locally mounted remote files, for example with Rclone. In this specific case this function can take 2 or even more seconds to finish.</span></code></div>
  </div>
 </div>
  <div class="note" id="115626">  <div class="votes">
    <div id="Vu115626">
    <a href="/manual/vote-note.php?id=115626&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115626">
    <a href="/manual/vote-note.php?id=115626&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115626" title="50% like this...">
    0
    </div>
  </div>
  <a href="#115626" class="name">
  <strong class="user"><em>lingtalfi</em></strong></a><a class="genanchor" href="#115626"> &para;</a><div class="date" title="2014-08-27 09:09"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115626">
<div class="phpcode"><code><span class="html">If symlink seems not to work correctly, try to define the target argument as an absolute path.<br />Coding on MacOsX PHP5.5, I noticed that in some cases using an absolute path on the target argument was the only way I could have a proper symlink created.</span></code></div>
  </div>
 </div>
  <div class="note" id="79186">  <div class="votes">
    <div id="Vu79186">
    <a href="/manual/vote-note.php?id=79186&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79186">
    <a href="/manual/vote-note.php?id=79186&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79186" title="50% like this...">
    0
    </div>
  </div>
  <a href="#79186" class="name">
  <strong class="user"><em>ewering at gmail dot com</em></strong></a><a class="genanchor" href="#79186"> &para;</a><div class="date" title="2007-11-14 01:01"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79186">
<div class="phpcode"><code><span class="html">This function sometimes just fails to work for no appearent reason, returning FALSE and not creating a symlink. Doing the same with exec('ln -s source dest') works perfectly. I recommend using the latter.</span></code></div>
  </div>
 </div>
  <div class="note" id="94562">  <div class="votes">
    <div id="Vu94562">
    <a href="/manual/vote-note.php?id=94562&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94562">
    <a href="/manual/vote-note.php?id=94562&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94562" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#94562" class="name">
  <strong class="user"><em>Porjo</em></strong></a><a class="genanchor" href="#94562"> &para;</a><div class="date" title="2009-11-11 07:36"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94562">
<div class="phpcode"><code><span class="html">Keep in mind when using a shared filesystem such as NFS, that you probably don't want to create a symbolic link with absolute paths e.g.<br /><br />On Server1 you are running a PHP script that needs to create a symbolic link called widget2 which links to widget1 inside an NFS share mounted on your localhost at /mnt/nfs/widgets<br /><br />On Server2 this same NFS share is mounted under /usr/local/widgets<br /><br />If you used absolute paths on Server1, then Server2 would try to reference /mnt/nfs/widgets/widget1 which it won't be able to find...<br /><br />You need to cd into the directory first, then create the link - that way the link will be relative. Unless you run the PHP script from the same directory where you'll be creating the symbolic links, then you can't use symlink(). Use exec() instead as follows:<br /><br /><span class="default">&lt;?php <br /><br />exec</span><span class="keyword">(</span><span class="string">"cd &lt;nfs mount path&gt;; ln -s &lt;target&gt; &lt;link_name&gt;"</span><span class="keyword">); <br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56654">  <div class="votes">
    <div id="Vu56654">
    <a href="/manual/vote-note.php?id=56654&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56654">
    <a href="/manual/vote-note.php?id=56654&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56654" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#56654" class="name">
  <strong class="user"><em>contact at tcknetwork dot com</em></strong></a><a class="genanchor" href="#56654"> &para;</a><div class="date" title="2005-09-11 08:04"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56654">
<div class="phpcode"><code><span class="html">To make your code portable on unix AND win32, do the following<br />1. Download <a href="http://www.dynawell.com/reskit/microsoft/win2000/linkd.zip" rel="nofollow" target="_blank">http://www.dynawell.com/reskit/microsoft/win2000/linkd.zip</a><br />2. Unzip, put linkd.exe in C:\Windows\System32 or C:\WINNT\System32<br />3. Include in your code the following<br />&lt;?<br />function _syslink($t /*target*/ ,$l /*link*/ ) {<br /> if ($_SERVER["WINDIR"]) {<br />  $p=dirname($_SERVER["SCRIPT_FILENAME"])."/";<br />  exec("linkd ".$p.$t." ".$p.$l);<br /> } else syslink($t,$l);<br />}<br />function _unlink($l /*link*/ ) {<br /> if ($_SERVER["WINDIR"]) {<br />  $p=dirname($_SERVER["SCRIPT_FILENAME"])."/";<br />  exec("linkd ".$p.$l." /D");<br /> } else unlink($l);<br />}<br />?&gt;<br />4. Enjoy<br />_symlink(TARGET,LINK) works like symlink() on *nix<br />_unlink(LINK) to delete properly the link created</span></code></div>
  </div>
 </div>
  <div class="note" id="60196">  <div class="votes">
    <div id="Vu60196">
    <a href="/manual/vote-note.php?id=60196&amp;page=function.symlink&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60196">
    <a href="/manual/vote-note.php?id=60196&amp;page=function.symlink&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60196" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#60196" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#60196"> &para;</a><div class="date" title="2005-12-29 07:21"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60196">
<div class="phpcode"><code><span class="html">Olszewski seems pretty good, but just to boost the security a bit, the fifth line of his script should read<br />&lt;?<br />...<br />    $q = rand(1,26); <br />...<br />?&gt;<br /><br />instead of rand(1,24).</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.symlink&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.symlink.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.stat.php" title="stat">stat</a>
                        </li>
                                                <li class="current">
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
