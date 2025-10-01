<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ZipArchive::extractTo - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ziparchive.extractto.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/ziparchive.extractto.php">
 <link rel="alternate" href="https://www.php.net/manual/en/ziparchive.extractto.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.ziparchive.php">
 <link rel="prev" href="https://www.php.net/manual/en/ziparchive.deletename.php">
 <link rel="next" href="https://www.php.net/manual/en/ziparchive.getarchivecomment.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ziparchive.extractto.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ziparchive.extractto.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ziparchive.extractto.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ziparchive.extractto.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ziparchive.extractto.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ziparchive.extractto.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ziparchive.extractto.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ziparchive.extractto.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ziparchive.extractto.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ziparchive.extractto.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ziparchive.extractto.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Extract the archive contents" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ZipArchive::extractTo - Manual" />
<meta name="twitter:description" content="Extract the archive contents" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ZipArchive::extractTo - Manual" />
<meta itemprop="description" content="Extract the archive contents" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Extract the archive contents" />

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
        <a href="ziparchive.getarchivecomment.php">
          ZipArchive::getArchiveComment &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ziparchive.deletename.php">
          &laquo; ZipArchive::deleteName        </a>
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
            <option value='en/ziparchive.extractto.php' selected="selected">English</option>
            <option value='de/ziparchive.extractto.php'>German</option>
            <option value='es/ziparchive.extractto.php'>Spanish</option>
            <option value='fr/ziparchive.extractto.php'>French</option>
            <option value='it/ziparchive.extractto.php'>Italian</option>
            <option value='ja/ziparchive.extractto.php'>Japanese</option>
            <option value='pt_BR/ziparchive.extractto.php'>Brazilian Portuguese</option>
            <option value='ru/ziparchive.extractto.php'>Russian</option>
            <option value='tr/ziparchive.extractto.php'>Turkish</option>
            <option value='uk/ziparchive.extractto.php'>Ukrainian</option>
            <option value='zh/ziparchive.extractto.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ziparchive.extractto" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ZipArchive::extractTo</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL zip &gt;= 1.1.0)</p><p class="refpurpose"><span class="refname">ZipArchive::extractTo</span> &mdash; <span class="dc-title">Extract the archive contents</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-ziparchive.extractto-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>ZipArchive::extractTo</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pathto</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$files</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Extract the complete archive or the given files to the specified
   destination.
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    The default permissions for extracted files and directories
    give the widest possible access. This can be restricted
    by setting the current umask, which can be changed using
    <span class="function"><a href="function.umask.php" class="function">umask()</a></span>.
   </p>
   <p class="para">
    For security reasons, the original permissions are not restored.
    For an example of how to restore them, see the
    <a href="ziparchive.getexternalattributesindex.php#ziparchive.getexternalattributesindex.examples.perms" class="link">code sample</a>
    on the <span class="methodname"><a href="ziparchive.getexternalattributesindex.php" class="methodname">ZipArchive::getExternalAttributesIndex()</a></span> page.
   </p>
  </div>
 </div>

 <div class="refsect1 parameters" id="refsect1-ziparchive.extractto-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">pathto</code></dt>
     <dd>
      <p class="para">
       Location where to extract the files.
      </p>
     </dd>
    
    
     <dt><code class="parameter">files</code></dt>
     <dd>
      <p class="para">
       The entries to extract. It accepts either a single entry name or
       an array of names.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-ziparchive.extractto-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-ziparchive.extractto-examples">
  <h3 class="title">Examples</h3>
    <div class="example" id="example-921">
     <p><strong>Example #1 Extract all entries</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$zip </span><span style="color: #007700">= new </span><span style="color: #0000BB">ZipArchive</span><span style="color: #007700">;<br />if (</span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">open</span><span style="color: #007700">(</span><span style="color: #DD0000">'test.zip'</span><span style="color: #007700">) === </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extractTo</span><span style="color: #007700">(</span><span style="color: #DD0000">'/my/destination/dir/'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br />    echo </span><span style="color: #DD0000">'ok'</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">'failed'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    <div class="example" id="example-922">
     <p><strong>Example #2 Extract two entries</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$zip </span><span style="color: #007700">= new </span><span style="color: #0000BB">ZipArchive</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$res </span><span style="color: #007700">= </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">open</span><span style="color: #007700">(</span><span style="color: #DD0000">'test_im.zip'</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">$res </span><span style="color: #007700">=== </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extractTo</span><span style="color: #007700">(</span><span style="color: #DD0000">'/my/destination/dir/'</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'pear_item.gif'</span><span style="color: #007700">, </span><span style="color: #DD0000">'testfromfile.php'</span><span style="color: #007700">));<br />    </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br />    echo </span><span style="color: #DD0000">'ok'</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">'failed'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </div>


 <div class="refsect1 notes" id="refsect1-ziparchive.extractto-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">Windows NTFS file systems
do not support some characters in filenames, namely <code class="literal">&lt;|&gt;*?&quot;:</code>. Filenames with a trailing dot
are not supported either. Contrary to some extraction tools, this method does not replace these characters with
an underscore, but instead fails to extract such files.</p></p></blockquote>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/zip/ziparchive/extractto.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fziparchive.extractto%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ziparchive.extractto&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ziparchive.extractto.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">15 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="100802">  <div class="votes">
    <div id="Vu100802">
    <a href="/manual/vote-note.php?id=100802&amp;page=ziparchive.extractto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100802">
    <a href="/manual/vote-note.php?id=100802&amp;page=ziparchive.extractto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100802" title="69% like this...">
    49
    </div>
  </div>
  <a href="#100802" class="name">
  <strong class="user"><em>php-dev at proneticas dot net</em></strong></a><a class="genanchor" href="#100802"> &para;</a><div class="date" title="2010-11-07 11:22"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100802">
<div class="phpcode"><code><span class="html">If you want to copy one file at a time and remove the folder name that is stored in the ZIP file, so you don't have to create directories from the ZIP itself, then use this snippet (basically collapses the ZIP file into one Folder).<br /><br /><span class="default">&lt;?php<br /><br />$path </span><span class="keyword">= </span><span class="string">'zipfile.zip'<br /><br /></span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br />if (</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">) === </span><span class="default">true</span><span class="keyword">) {<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">numFiles</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">getNameIndex</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);<br />        </span><span class="default">$fileinfo </span><span class="keyword">= </span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />        </span><span class="default">copy</span><span class="keyword">(</span><span class="string">"zip://"</span><span class="keyword">.</span><span class="default">$path</span><span class="keyword">.</span><span class="string">"#"</span><span class="keyword">.</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">"/your/new/destination/"</span><span class="keyword">.</span><span class="default">$fileinfo</span><span class="keyword">[</span><span class="string">'basename'</span><span class="keyword">]);<br />    }                   <br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();                   <br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />* On a side note, you can also use $_FILES['userfile']['tmp_name'] as the $path for an uploaded ZIP so you never have to move it or extract a uploaded zip file.<br /><br />Cheers!<br /><br />ProNeticas Dev Team</span></code></div>
  </div>
 </div>
  <div class="note" id="122437">  <div class="votes">
    <div id="Vu122437">
    <a href="/manual/vote-note.php?id=122437&amp;page=ziparchive.extractto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122437">
    <a href="/manual/vote-note.php?id=122437&amp;page=ziparchive.extractto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122437" title="69% like this...">
    18
    </div>
  </div>
  <a href="#122437" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#122437"> &para;</a><div class="date" title="2018-02-24 06:43"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122437">
<div class="phpcode"><code><span class="html">If you want to extract the files just to the current folder, simply use<br />$zip-&gt;extractTo(".");<br /><br />It took me hours to figure this out.</span></code></div>
  </div>
 </div>
  <div class="note" id="116353">  <div class="votes">
    <div id="Vu116353">
    <a href="/manual/vote-note.php?id=116353&amp;page=ziparchive.extractto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116353">
    <a href="/manual/vote-note.php?id=116353&amp;page=ziparchive.extractto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116353" title="66% like this...">
    8
    </div>
  </div>
  <a href="#116353" class="name">
  <strong class="user"><em>stanislav dot eckert at vizson dot de</em></strong></a><a class="genanchor" href="#116353"> &para;</a><div class="date" title="2014-12-17 04:03"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116353">
<div class="phpcode"><code><span class="html">The extractTo() method does not offer any parameter to allow extracting files and folders recursively from another (parent) folder inside the ZIP archive. With the following method it is possible:<br /><br /><span class="default">&lt;?php<br />  </span><span class="keyword">class </span><span class="default">my_ZipArchive </span><span class="keyword">extends </span><span class="default">ZipArchive<br />  </span><span class="keyword">{<br />    public function </span><span class="default">extractSubdirTo</span><span class="keyword">(</span><span class="default">$destination</span><span class="keyword">, </span><span class="default">$subdir</span><span class="keyword">)<br />    {<br />      </span><span class="default">$errors </span><span class="keyword">= array();<br /><br />      </span><span class="comment">// Prepare dirs<br />      </span><span class="default">$destination </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">"/"</span><span class="keyword">, </span><span class="string">"\\"</span><span class="keyword">), </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">, </span><span class="default">$destination</span><span class="keyword">);<br />      </span><span class="default">$subdir </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">"/"</span><span class="keyword">, </span><span class="string">"\\"</span><span class="keyword">), </span><span class="string">"/"</span><span class="keyword">, </span><span class="default">$subdir</span><span class="keyword">);<br /><br />      if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$destination</span><span class="keyword">, </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">) * -</span><span class="default">1</span><span class="keyword">) != </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">)<br />        </span><span class="default">$destination </span><span class="keyword">.= </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">;<br /><br />      if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$subdir</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">) != </span><span class="string">"/"</span><span class="keyword">)<br />        </span><span class="default">$subdir </span><span class="keyword">.= </span><span class="string">"/"</span><span class="keyword">;<br /><br />      </span><span class="comment">// Extract files<br />      </span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">numFiles</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />      {<br />        </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getNameIndex</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);<br /><br />        if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$subdir</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">)) == </span><span class="default">$subdir</span><span class="keyword">)<br />        {<br />          </span><span class="default">$relativePath </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$subdir</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">));<br />          </span><span class="default">$relativePath </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">"/"</span><span class="keyword">, </span><span class="string">"\\"</span><span class="keyword">), </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">, </span><span class="default">$relativePath</span><span class="keyword">);<br /><br />          if (</span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$relativePath</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">)<br />          {<br />            if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">) == </span><span class="string">"/"</span><span class="keyword">)  </span><span class="comment">// Directory<br />            </span><span class="keyword">{<br />              </span><span class="comment">// New dir<br />              </span><span class="keyword">if (!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$destination </span><span class="keyword">. </span><span class="default">$relativePath</span><span class="keyword">))<br />                if (!@</span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$destination </span><span class="keyword">. </span><span class="default">$relativePath</span><span class="keyword">, </span><span class="default">0755</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">))<br />                  </span><span class="default">$errors</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$filename</span><span class="keyword">;<br />            }<br />            else<br />            {<br />              if (</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$relativePath</span><span class="keyword">) != </span><span class="string">"."</span><span class="keyword">)<br />              {<br />                if (!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$destination </span><span class="keyword">. </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$relativePath</span><span class="keyword">)))<br />                {<br />                  </span><span class="comment">// New dir (for file)<br />                  </span><span class="keyword">@</span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$destination </span><span class="keyword">. </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$relativePath</span><span class="keyword">), </span><span class="default">0755</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />                }<br />              }<br /><br />              </span><span class="comment">// New file<br />              </span><span class="keyword">if (@</span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$destination </span><span class="keyword">. </span><span class="default">$relativePath</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getFromIndex</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)) === </span><span class="default">false</span><span class="keyword">)<br />                </span><span class="default">$errors</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$filename</span><span class="keyword">;<br />            }<br />          }<br />        }<br />      }<br /><br />      return </span><span class="default">$errors</span><span class="keyword">;<br />    }<br />  }<br /></span><span class="default">?&gt;<br /></span><br />Example:<br /><span class="default">&lt;?php<br />  </span><span class="keyword">echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;<br /><br />  </span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">my_ZipArchive</span><span class="keyword">();<br />  if (</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">"test.zip"</span><span class="keyword">) === </span><span class="default">TRUE</span><span class="keyword">)<br />  {<br />    </span><span class="default">$errors </span><span class="keyword">= </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">extractSubdirTo</span><span class="keyword">(</span><span class="string">"C:/output"</span><span class="keyword">, </span><span class="string">"folder/subfolder/"</span><span class="keyword">);<br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /><br />    echo </span><span class="string">'ok, errors: ' </span><span class="keyword">. </span><span class="default">count</span><span class="keyword">(</span><span class="default">$errors</span><span class="keyword">);<br />  }<br />  else<br />  {<br />    echo </span><span class="string">'failed'</span><span class="keyword">;<br />  }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99509">  <div class="votes">
    <div id="Vu99509">
    <a href="/manual/vote-note.php?id=99509&amp;page=ziparchive.extractto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99509">
    <a href="/manual/vote-note.php?id=99509&amp;page=ziparchive.extractto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99509" title="65% like this...">
    8
    </div>
  </div>
  <a href="#99509" class="name">
  <strong class="user"><em>quake2005 at gmail dot com</em></strong></a><a class="genanchor" href="#99509"> &para;</a><div class="date" title="2010-08-20 11:05"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99509">
<div class="phpcode"><code><span class="html">If you want to extract one file at a time, you can use this:<br /><br /><span class="default">&lt;?php<br /><br />$path </span><span class="keyword">= </span><span class="string">'zipfile.zip'<br /><br /></span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br />if (</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">) === </span><span class="default">true</span><span class="keyword">) {<br />                    <br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">numFiles</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />                         <br />        </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">extractTo</span><span class="keyword">(</span><span class="string">'path/to/extraction/'</span><span class="keyword">, array(</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">getNameIndex</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)));<br />                        <br />        </span><span class="comment">// here you can run a custom function for the particular extracted file<br />                        <br />    </span><span class="keyword">}<br />                    <br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />                    <br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91238">  <div class="votes">
    <div id="Vu91238">
    <a href="/manual/vote-note.php?id=91238&amp;page=ziparchive.extractto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91238">
    <a href="/manual/vote-note.php?id=91238&amp;page=ziparchive.extractto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91238" title="57% like this...">
    4
    </div>
  </div>
  <a href="#91238" class="name">
  <strong class="user"><em>kawzaki at yahoo dot com</em></strong></a><a class="genanchor" href="#91238"> &para;</a><div class="date" title="2009-05-31 09:28"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91238">
<div class="phpcode"><code><span class="html">Please be aware of the fact that using this function has OVERWRITE true.<br /><br />an old file will be overwritten if the achieve (zipped file) contains file matching the same old file name.<br /><br />old files that has no match in the zip, will be kept as is.<br /><br />hopefully the someone will explain how to avoid overwriting old files.</span></code></div>
  </div>
 </div>
  <div class="note" id="97409">  <div class="votes">
    <div id="Vu97409">
    <a href="/manual/vote-note.php?id=97409&amp;page=ziparchive.extractto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97409">
    <a href="/manual/vote-note.php?id=97409&amp;page=ziparchive.extractto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97409" title="55% like this...">
    3
    </div>
  </div>
  <a href="#97409" class="name">
  <strong class="user"><em>cory dot mawhorter at ephective dot com</em></strong></a><a class="genanchor" href="#97409"> &para;</a><div class="date" title="2010-04-18 01:28"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97409">
<div class="phpcode"><code><span class="html">This function will flatten a zip file using the ZipArchive class.  
<br />
<br />It will extract all the files in the zip and store them in a single destination directory.  That is, no sub-directories will be created.
<br />
<br />If anyone knows a better way to determine if an entry is a directory, please chime in.  I feel dirty checking for a trailing slash.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// dest shouldn't have a trailing slash
<br /></span><span class="keyword">function </span><span class="default">zip_flatten </span><span class="keyword">( </span><span class="default">$zipfile</span><span class="keyword">, </span><span class="default">$dest</span><span class="keyword">=</span><span class="string">'.' </span><span class="keyword">)
<br />{
<br />    </span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;
<br />    if ( </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">( </span><span class="default">$zipfile </span><span class="keyword">) ) 
<br />    {
<br />        for ( </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">numFiles</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++ ) 
<br />        {
<br />            </span><span class="default">$entry </span><span class="keyword">= </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">getNameIndex</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);
<br />            if ( </span><span class="default">substr</span><span class="keyword">( </span><span class="default">$entry</span><span class="keyword">, -</span><span class="default">1 </span><span class="keyword">) == </span><span class="string">'/' </span><span class="keyword">) continue; </span><span class="comment">// skip directories
<br />            
<br />            </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">getStream</span><span class="keyword">( </span><span class="default">$entry </span><span class="keyword">);
<br />            </span><span class="default">$ofp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">( </span><span class="default">$dest</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">basename</span><span class="keyword">(</span><span class="default">$entry</span><span class="keyword">), </span><span class="string">'w' </span><span class="keyword">);
<br />            
<br />            if ( ! </span><span class="default">$fp </span><span class="keyword">) 
<br />                throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Unable to extract the file.'</span><span class="keyword">);
<br />            
<br />            while ( ! </span><span class="default">feof</span><span class="keyword">( </span><span class="default">$fp </span><span class="keyword">) ) 
<br />                </span><span class="default">fwrite</span><span class="keyword">( </span><span class="default">$ofp</span><span class="keyword">, </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">8192</span><span class="keyword">) );
<br />            
<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$ofp</span><span class="keyword">);
<br />        }
<br />
<br />                </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();
<br />    }
<br />    else
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    
<br />    return </span><span class="default">$zip</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="comment">/*
<br />Example Usage:
<br />
<br />zip_flatten( 'test.zip', 'my/path' );
<br />*/
<br /></span><span class="default">?&gt;
<br /></span>
<br />[EDIT BY danbrown AT php DOT net: Added $zip-close() per indication by original poster in follow-up note on 18-APR-2010.]</span></code></div>
  </div>
 </div>
  <div class="note" id="125721">  <div class="votes">
    <div id="Vu125721">
    <a href="/manual/vote-note.php?id=125721&amp;page=ziparchive.extractto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125721">
    <a href="/manual/vote-note.php?id=125721&amp;page=ziparchive.extractto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125721" title="53% like this...">
    1
    </div>
  </div>
  <a href="#125721" class="name">
  <strong class="user"><em>cucurella at gmail dot com</em></strong></a><a class="genanchor" href="#125721"> &para;</a><div class="date" title="2021-01-25 10:50"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125721">
<div class="phpcode"><code><span class="html">// Handling ERROR file by file !!<br /><br /><span class="default">&lt;?php<br /><br />$ERROR_UNZIP </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">$dest </span><span class="keyword">= </span><span class="string">"../"</span><span class="keyword">;<br /></span><span class="default">$zipfile </span><span class="keyword">= </span><span class="string">"test.zip"</span><span class="keyword">;<br /><br /></span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br /><br />if (</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">"</span><span class="default">$zipfile</span><span class="string">"</span><span class="keyword">) === </span><span class="default">true</span><span class="keyword">) {<br />    <br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$zip </span><span class="keyword">-&gt; </span><span class="default">numFiles</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$RETVAL </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /><br />        </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">getNameIndex</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);<br /><br />        </span><span class="default">$RETVAL </span><span class="keyword">= </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">extractTo</span><span class="keyword">(</span><span class="default">$dest</span><span class="keyword">,</span><span class="default">$filename</span><span class="keyword">);<br /><br />        if (</span><span class="default">$RETVAL</span><span class="keyword">) {<br />            print </span><span class="string">"</span><span class="default">$filename</span><span class="string"> ... [ OK ]&lt;br&gt;"</span><span class="keyword">;<br />        } else {<br />            print </span><span class="string">"</span><span class="default">$filename</span><span class="string"> ... [ ERROR ]&lt;br&gt;"</span><span class="keyword">;<br />            </span><span class="default">$ERROR_UNZIP </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        }<br />    }<br /><br />    </span><span class="comment">// close<br />    </span><span class="default">$zip </span><span class="keyword">-&gt; </span><span class="default">close</span><span class="keyword">();<br /><br />    </span><span class="comment">// retval<br />    </span><span class="keyword">if (</span><span class="default">$ERROR_UNZIP</span><span class="keyword">) {<br />        print </span><span class="string">"&lt;p&gt;ERROR unziping </span><span class="keyword">${</span><span class="default">zipfile</span><span class="keyword">}</span><span class="string">&lt;/p&gt;"</span><span class="keyword">;<br />    } else {<br />        print </span><span class="string">"&lt;p&gt;Unzip OK&lt;/p&gt;"</span><span class="keyword">;<br />    }<br />} else {<br />    print </span><span class="string">"&lt;p&gt;ERROR opening </span><span class="keyword">${</span><span class="default">zipfile</span><span class="keyword">}</span><span class="string">&lt;/p&gt;"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121683">  <div class="votes">
    <div id="Vu121683">
    <a href="/manual/vote-note.php?id=121683&amp;page=ziparchive.extractto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121683">
    <a href="/manual/vote-note.php?id=121683&amp;page=ziparchive.extractto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121683" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121683" class="name">
  <strong class="user"><em>skrzypecki at gmail dot com</em></strong></a><a class="genanchor" href="#121683"> &para;</a><div class="date" title="2017-09-25 06:12"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121683">
<div class="phpcode"><code><span class="html">Please note that the path can not be to long! I am not sure what the maximum length is, didnt find any information about that. But i kept getting issues when using extractTo().<br /><br />Than after google i found this little comment: <a href="https://github.com/composer/composer/issues/2824#issuecomment-308201902" rel="nofollow" target="_blank">https://github.com/composer/composer/issues/2824#issuecomment-308201902</a><br /><br />CopyPasted comment:<br />===<br />I had this path in my machine:<br /><br />C:/xampp5.0/htdocs/project-recordando-symfony/project-recordando-symfony<br />Then I ran composer install or/and composer update and it returned this error:<br /><br />ErrorException ZipArchive::extractTo...<br /><br />That error is because your path is too much long, I changed to:<br /><br />C:/xampp5.0/htdocs/p-symfony/*<br />and worked!<br />===</span></code></div>
  </div>
 </div>
  <div class="note" id="121585">  <div class="votes">
    <div id="Vu121585">
    <a href="/manual/vote-note.php?id=121585&amp;page=ziparchive.extractto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121585">
    <a href="/manual/vote-note.php?id=121585&amp;page=ziparchive.extractto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121585" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121585" class="name">
  <strong class="user"><em>synnus at gmail dot com</em></strong></a><a class="genanchor" href="#121585"> &para;</a><div class="date" title="2017-08-31 12:59"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121585">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php <br />    <br />    </span><span class="comment">// This version allows to see which file will be decompressed and to keep <br />    // a follow-up on decompression<br /><br />    </span><span class="default">define</span><span class="keyword">( </span><span class="string">'FILEPATH'</span><span class="keyword">,     </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">)     . </span><span class="string">'\\' </span><span class="keyword">);<br />    </span><span class="default">define</span><span class="keyword">( </span><span class="string">'TEST'</span><span class="keyword">,         </span><span class="default">FILEPATH             </span><span class="keyword">. </span><span class="string">'test\\' </span><span class="keyword">);<br /><br /></span><span class="default">$za </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">();<br /><br /></span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">FILEPATH </span><span class="keyword">. </span><span class="string">'test.zip'</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$za</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$za</span><span class="keyword">);<br />echo </span><span class="string">"Nombre de fichiers : " </span><span class="keyword">. </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">numFiles </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">"Statut : " </span><span class="keyword">. </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">status  </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">"Statut du système : " </span><span class="keyword">. </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">statusSys </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">"Nom du fichier : " </span><span class="keyword">. </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">filename </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">"Commentaire : " </span><span class="keyword">. </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">comment </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="comment">/*  in $za-&gt;statIndex($i)<br /><br />    [name] =&gt; data/x.luac<br />    [index] =&gt; 451<br />    [crc] =&gt; -1266183263<br />    [size] =&gt; 2936<br />    [mtime] =&gt; 1464790482<br />    [comp_size] =&gt; 976<br />    [comp_method] =&gt; 8<br />*/<br /><br /></span><span class="keyword">for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">numFiles</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {<br />    echo </span><span class="string">"index : </span><span class="default">$i</span><span class="string">\n"</span><span class="keyword">;<br />    </span><span class="default">$name </span><span class="keyword">= </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">statIndex</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)[</span><span class="string">'name'</span><span class="keyword">];<br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">statIndex</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)[</span><span class="string">'size'</span><span class="keyword">];<br />    </span><span class="default">$comp_size </span><span class="keyword">= </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">statIndex</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)[</span><span class="string">'comp_size'</span><span class="keyword">];<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$name </span><span class="keyword">. </span><span class="string">' [ ' </span><span class="keyword">. </span><span class="default">$size </span><span class="keyword">. </span><span class="string">'&gt;' </span><span class="keyword">. </span><span class="default">$comp_size </span><span class="keyword">. </span><span class="string">']' </span><span class="keyword">);<br />    </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">extractTo</span><span class="keyword">(</span><span class="default">TEST</span><span class="keyword">,</span><span class="default">$name</span><span class="keyword">);<br />}<br />echo </span><span class="string">"Nombre de fichiers :" </span><span class="keyword">. </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">numFiles </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;    <br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100875">  <div class="votes">
    <div id="Vu100875">
    <a href="/manual/vote-note.php?id=100875&amp;page=ziparchive.extractto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100875">
    <a href="/manual/vote-note.php?id=100875&amp;page=ziparchive.extractto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100875" title="50% like this...">
    0
    </div>
  </div>
  <a href="#100875" class="name">
  <strong class="user"><em>sachinyadav at live dot com</em></strong></a><a class="genanchor" href="#100875"> &para;</a><div class="date" title="2010-11-12 12:29"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100875">
<div class="phpcode"><code><span class="html">This script will search for ".txt" file(any file name) inside test.zip archive. Suppose, 'example.txt' file is found then the script will copy 'example.txt' to "txt_files" directory and rename it to 'test.zip.txt' and will remove all the blank lines from 'test.zip.txt' and resave and will exit the loop without searching remaining entries. <br />This script can be useful to extract .DIZ and GIF files to display ZIP archive details in your script.<br /><span class="default">&lt;?php <br />   $value</span><span class="keyword">=</span><span class="string">"test.zip"</span><span class="keyword">; <br />   </span><span class="default">$filename</span><span class="keyword">=</span><span class="string">"zip_files/</span><span class="default">$value</span><span class="string">"</span><span class="keyword">; <br />   </span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br />     if (</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">) === </span><span class="default">true</span><span class="keyword">) {<br />      echo </span><span class="string">"Generating TEXT file."</span><span class="keyword">;<br />          for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">numFiles</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) { <br />             </span><span class="default">$entry </span><span class="keyword">= </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">getNameIndex</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);<br />               if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'#\.(txt)$#i'</span><span class="keyword">, </span><span class="default">$entry</span><span class="keyword">))<br />                {<br />                </span><span class="comment">////This copy function will move the entry to the root of "txt_files" without creating any sub-folders unlike "ZIP-&gt;EXTRACTO" function.<br />                </span><span class="default">copy</span><span class="keyword">(</span><span class="string">'zip://'</span><span class="keyword">.</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">).</span><span class="string">'/zip_files/'</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">.</span><span class="string">'#'</span><span class="keyword">.</span><span class="default">$entry</span><span class="keyword">, </span><span class="string">'txt_files/'</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">.</span><span class="string">'.txt'</span><span class="keyword">); <br />                </span><span class="default">$content </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">"txt_files/</span><span class="default">$value</span><span class="string">.txt"</span><span class="keyword">);<br />                </span><span class="default">$newcontent </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/"</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$content</span><span class="keyword">);<br />                </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="string">"txt_files/</span><span class="default">$value</span><span class="string">.txt"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$newcontent</span><span class="string">"</span><span class="keyword">);<br />                break;<br />                } <br />              }  <br />             </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />            }<br />    else{<br />         echo </span><span class="string">"ZIP archive failed"</span><span class="keyword">;<br />        }<br /></span><span class="default">?&gt;<br /></span><br />enjoy PHP programming.<br />Sachin Yadav</span></code></div>
  </div>
 </div>
  <div class="note" id="83580">  <div class="votes">
    <div id="Vu83580">
    <a href="/manual/vote-note.php?id=83580&amp;page=ziparchive.extractto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83580">
    <a href="/manual/vote-note.php?id=83580&amp;page=ziparchive.extractto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83580" title="50% like this...">
    0
    </div>
  </div>
  <a href="#83580" class="name">
  <strong class="user"><em>tBone</em></strong></a><a class="genanchor" href="#83580"> &para;</a><div class="date" title="2008-06-02 05:03"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83580">
<div class="phpcode"><code><span class="html">This function, at least from my experience, maintains/forces the directory structure within the ZIP file.<br /><br />ie. if you have FOLDER1/File1.txt in the zip file and you use<br />$zip-&gt;extractTo('/extract', 'FOLDER1/File1.txt');<br />the location of the extracted file will be:<br />/extract/FOLDER1/File1.txt</span></code></div>
  </div>
 </div>
  <div class="note" id="118613">  <div class="votes">
    <div id="Vu118613">
    <a href="/manual/vote-note.php?id=118613&amp;page=ziparchive.extractto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118613">
    <a href="/manual/vote-note.php?id=118613&amp;page=ziparchive.extractto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118613" title="33% like this...">
    -4
    </div>
  </div>
  <a href="#118613" class="name">
  <strong class="user"><em>ben dot tyger at tygerclan dot net</em></strong></a><a class="genanchor" href="#118613"> &para;</a><div class="date" title="2016-01-08 06:03"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118613">
<div class="phpcode"><code><span class="html">Note, in Linux (possibly other *nix platforms too) there is no way to extract hidden files ( aka filename starting with a '.') from a Zip archive.</span></code></div>
  </div>
 </div>
  <div class="note" id="124566">  <div class="votes">
    <div id="Vu124566">
    <a href="/manual/vote-note.php?id=124566&amp;page=ziparchive.extractto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124566">
    <a href="/manual/vote-note.php?id=124566&amp;page=ziparchive.extractto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124566" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#124566" class="name">
  <strong class="user"><em>icixtec at gmail dot com</em></strong></a><a class="genanchor" href="#124566"> &para;</a><div class="date" title="2020-01-04 03:32"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124566">
<div class="phpcode"><code><span class="html">Para casos donde sea necesario descomprimir archivos sin saber si el nombre está en mayúsculas o minúsculas:<br /><br />$zip = new ZipArchive;<br />if ($zip-&gt;open('myfile.zip') === TRUE) {<br />    //no funciona<br />    //$zip-&gt;extractTo('./', array( 'file1.XML', 'file1.xml'));<br />    //funciona<br />    $zip-&gt;extractTo('./', 'file1.XML' );<br />    $zip-&gt;extractTo('./', 'file1.xml' );<br />    $zip-&gt;close();<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="121332">  <div class="votes">
    <div id="Vu121332">
    <a href="/manual/vote-note.php?id=121332&amp;page=ziparchive.extractto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121332">
    <a href="/manual/vote-note.php?id=121332&amp;page=ziparchive.extractto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121332" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#121332" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#121332"> &para;</a><div class="date" title="2017-07-07 09:54"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121332">
<div class="phpcode"><code><span class="html">WARNING!!!!<br /><br />if you are running php under Apache, a .htaccess file inside the zip file may fail the extractTo() method.</span></code></div>
  </div>
 </div>
  <div class="note" id="90045">  <div class="votes">
    <div id="Vu90045">
    <a href="/manual/vote-note.php?id=90045&amp;page=ziparchive.extractto&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90045">
    <a href="/manual/vote-note.php?id=90045&amp;page=ziparchive.extractto&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90045" title="27% like this...">
    -5
    </div>
  </div>
  <a href="#90045" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#90045"> &para;</a><div class="date" title="2009-04-02 01:50"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90045">
<div class="phpcode"><code><span class="html">I found it useful to add this to a function.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br />*  Extracts a ZIP archive to the specified extract path<br />*<br />*  @param string $file The ZIP archive to extract (including the path)    <br />*  @param string $extractPath The path to extract the ZIP archive to<br />*<br />*  @return boolean TURE if the ZIP archive is successfully extracted, FALSE if there was an errror <br />*  <br />*/<br /></span><span class="keyword">function </span><span class="default">zip_extract</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$extractPath</span><span class="keyword">) {<br /><br />    </span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br />    </span><span class="default">$res </span><span class="keyword">= </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />    if (</span><span class="default">$res </span><span class="keyword">=== </span><span class="default">TRUE</span><span class="keyword">) {<br />        </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">extractTo</span><span class="keyword">(</span><span class="default">$extractPath</span><span class="keyword">);<br />        </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />        return </span><span class="default">TRUE</span><span class="keyword">;<br />    } else {<br />        return </span><span class="default">FALSE</span><span class="keyword">;<br />    }<br /><br />} </span><span class="comment">// end function<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ziparchive.extractto&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ziparchive.extractto.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
