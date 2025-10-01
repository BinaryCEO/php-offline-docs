<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SplFileInfo::getBasename - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/splfileinfo.getbasename.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/splfileinfo.getbasename.php">
 <link rel="alternate" href="https://www.php.net/manual/en/splfileinfo.getbasename.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.splfileinfo.php">
 <link rel="prev" href="https://www.php.net/manual/en/splfileinfo.getatime.php">
 <link rel="next" href="https://www.php.net/manual/en/splfileinfo.getctime.php">

 <link rel="alternate" href="https://www.php.net/manual/en/splfileinfo.getbasename.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/splfileinfo.getbasename.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/splfileinfo.getbasename.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/splfileinfo.getbasename.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/splfileinfo.getbasename.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/splfileinfo.getbasename.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/splfileinfo.getbasename.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/splfileinfo.getbasename.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/splfileinfo.getbasename.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/splfileinfo.getbasename.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/splfileinfo.getbasename.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets the base name of the file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SplFileInfo::getBasename - Manual" />
<meta name="twitter:description" content="Gets the base name of the file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SplFileInfo::getBasename - Manual" />
<meta itemprop="description" content="Gets the base name of the file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets the base name of the file" />

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
        <a href="splfileinfo.getctime.php">
          SplFileInfo::getCTime &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="splfileinfo.getatime.php">
          &laquo; SplFileInfo::getATime        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.spl.php'>SPL</a></li>      <li><a href='spl.files.php'>File Handling</a></li>      <li><a href='class.splfileinfo.php'>SplFileInfo</a></li>      </ul>
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
            <option value='en/splfileinfo.getbasename.php' selected="selected">English</option>
            <option value='de/splfileinfo.getbasename.php'>German</option>
            <option value='es/splfileinfo.getbasename.php'>Spanish</option>
            <option value='fr/splfileinfo.getbasename.php'>French</option>
            <option value='it/splfileinfo.getbasename.php'>Italian</option>
            <option value='ja/splfileinfo.getbasename.php'>Japanese</option>
            <option value='pt_BR/splfileinfo.getbasename.php'>Brazilian Portuguese</option>
            <option value='ru/splfileinfo.getbasename.php'>Russian</option>
            <option value='tr/splfileinfo.getbasename.php'>Turkish</option>
            <option value='uk/splfileinfo.getbasename.php'>Ukrainian</option>
            <option value='zh/splfileinfo.getbasename.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="splfileinfo.getbasename" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SplFileInfo::getBasename</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.2, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SplFileInfo::getBasename</span> &mdash; <span class="dc-title">Gets the base name of the file</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-splfileinfo.getbasename-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SplFileInfo::getBasename</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$suffix</code><span class="initializer"> = &quot;&quot;</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   This method returns the base name of the file, directory, or link without
   path info.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
    <span class="function"><strong>SplFileInfo::getBasename()</strong></span> is locale aware, so for it to see the 
    correct basename with multibyte character paths, the matching locale must 
    be set using the <span class="function"><a href="function.setlocale.php" class="function">setlocale()</a></span> function.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-splfileinfo.getbasename-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">suffix</code></dt>
     <dd>
      <p class="para">
       Optional suffix to omit from the base name returned.
      </p>
     </dd>
    
   </dl>
  </p>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-splfileinfo.getbasename-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the base name without path information.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-splfileinfo.getbasename-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3966">
    <p><strong>Example #1 <span class="function"><strong>SplFileInfo::getBasename()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$info </span><span style="color: #007700">= new </span><span style="color: #0000BB">SplFileInfo</span><span style="color: #007700">(</span><span style="color: #DD0000">'file.txt'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$info</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBasename</span><span style="color: #007700">());<br /><br /></span><span style="color: #0000BB">$info </span><span style="color: #007700">= new </span><span style="color: #0000BB">SplFileInfo</span><span style="color: #007700">(</span><span style="color: #DD0000">'/path/to/file.txt'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$info</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBasename</span><span style="color: #007700">());<br /><br /></span><span style="color: #0000BB">$info </span><span style="color: #007700">= new </span><span style="color: #0000BB">SplFileInfo</span><span style="color: #007700">(</span><span style="color: #DD0000">'/path/to/file.txt'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$info</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBasename</span><span style="color: #007700">(</span><span style="color: #DD0000">'.txt'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">string(8) &quot;file.txt&quot;
string(8) &quot;file.txt&quot;
string(4) &quot;file&quot;</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-splfileinfo.getbasename-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="splfileinfo.getfilename.php" class="methodname" rel="rdfs-seeAlso">SplFileInfo::getFilename()</a> - Gets the filename</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/splfileinfo/getbasename.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsplfileinfo.getbasename%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=splfileinfo.getbasename&amp;repo=en&amp;redirect=https://www.php.net/manual/en/splfileinfo.getbasename.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118867">  <div class="votes">
    <div id="Vu118867">
    <a href="/manual/vote-note.php?id=118867&amp;page=splfileinfo.getbasename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118867">
    <a href="/manual/vote-note.php?id=118867&amp;page=splfileinfo.getbasename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118867" title="94% like this...">
    33
    </div>
  </div>
  <a href="#118867" class="name">
  <strong class="user"><em>adam dot schubert at sg1-game dot net</em></strong></a><a class="genanchor" href="#118867"> &para;</a><div class="date" title="2016-02-19 03:11"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118867">
<div class="phpcode"><code><span class="html">If you want to get only filename and dont want to use weird:<br /><br /><span class="default">&lt;?php<br />pathinfo</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">getBasename</span><span class="keyword">(), </span><span class="default">PATHINFO_FILENAME</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />You can use (also weird but ~better looking):<br /><br /><span class="default">&lt;?php<br />$file</span><span class="keyword">-&gt;</span><span class="default">getBasename</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">getExtension</span><span class="keyword">());<br /></span><span class="default">?&gt;<br /></span><br />PS: Why there is getFilename ? when it returns ~same stuff as getBasename ? I have to do this ugly stuff^ instead of simple getFilename...</span></code></div>
  </div>
 </div>
  <div class="note" id="120379">  <div class="votes">
    <div id="Vu120379">
    <a href="/manual/vote-note.php?id=120379&amp;page=splfileinfo.getbasename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120379">
    <a href="/manual/vote-note.php?id=120379&amp;page=splfileinfo.getbasename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120379" title="90% like this...">
    9
    </div>
  </div>
  <a href="#120379" class="name">
  <strong class="user"><em>schuyler dot bos at gmail dot com</em></strong></a><a class="genanchor" href="#120379"> &para;</a><div class="date" title="2016-12-27 10:51"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120379">
<div class="phpcode"><code><span class="html">Agreed, this is just silly.  why not make getFileName() just return the string without extension. then, there would be a method to return all the different permutations without having to do weird coding.<br /><br />getBaseName()<br />getExtention()<br />getFileName()<br /><br />although due to nomenclature it might make more sense to have getBaseName() return the file name without extension, since getFileName() would kinda suggest it has a file extension on it.</span></code></div>
  </div>
 </div>
  <div class="note" id="122504">  <div class="votes">
    <div id="Vu122504">
    <a href="/manual/vote-note.php?id=122504&amp;page=splfileinfo.getbasename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122504">
    <a href="/manual/vote-note.php?id=122504&amp;page=splfileinfo.getbasename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122504" title="80% like this...">
    3
    </div>
  </div>
  <a href="#122504" class="name">
  <strong class="user"><em>glen at pld-linux dot org</em></strong></a><a class="genanchor" href="#122504"> &para;</a><div class="date" title="2018-03-13 07:49"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122504">
<div class="phpcode"><code><span class="html">similarly to basename, this method also suffers corruption if filename starts with non-ascii and locale not set to matching charset<br /><br />$ LC_ALL=C php -r 'var_dump(basename("ämb.er")); $fi = new SplFileInfo("äm.ber"); var_dump($fi-&gt;getBasename());';<br />string(5) "mb.er"<br />string(5) "m.ber"<br /><br />$ LC_ALL=en_US.UTF-8 php -r 'var_dump(basename("ämb.er")); $fi = new SplFileInfo("äm.ber"); var_dump($fi-&gt;getBasename());';<br />string(7) "ämb.er"<br />string(7) "äm.ber"</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=splfileinfo.getbasename&amp;repo=en&amp;redirect=https://www.php.net/manual/en/splfileinfo.getbasename.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.splfileinfo.php">SplFileInfo</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="splfileinfo.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.getatime.php" title="getATime">getATime</a>
                        </li>
                                                <li class="current">
                            <a href="splfileinfo.getbasename.php" title="getBasename">getBasename</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.getctime.php" title="getCTime">getCTime</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.getextension.php" title="getExtension">getExtension</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.getfileinfo.php" title="getFileInfo">getFileInfo</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.getfilename.php" title="getFilename">getFilename</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.getgroup.php" title="getGroup">getGroup</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.getinode.php" title="getInode">getInode</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.getlinktarget.php" title="getLinkTarget">getLinkTarget</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.getmtime.php" title="getMTime">getMTime</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.getowner.php" title="getOwner">getOwner</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.getpath.php" title="getPath">getPath</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.getpathinfo.php" title="getPathInfo">getPathInfo</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.getpathname.php" title="getPathname">getPathname</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.getperms.php" title="getPerms">getPerms</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.getrealpath.php" title="getRealPath">getRealPath</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.getsize.php" title="getSize">getSize</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.gettype.php" title="getType">getType</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.isdir.php" title="isDir">isDir</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.isexecutable.php" title="isExecutable">isExecutable</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.isfile.php" title="isFile">isFile</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.islink.php" title="isLink">isLink</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.isreadable.php" title="isReadable">isReadable</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.iswritable.php" title="isWritable">isWritable</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.openfile.php" title="openFile">openFile</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.setfileclass.php" title="setFileClass">setFileClass</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.setinfoclass.php" title="setInfoClass">setInfoClass</a>
                        </li>
                                                <li class="">
                            <a href="splfileinfo.tostring.php" title="_&#8203;_&#8203;toString">_&#8203;_&#8203;toString</a>
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
