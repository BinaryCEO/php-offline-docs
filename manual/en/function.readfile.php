<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: readfile - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.readfile.php">
 <link rel="shorturl" href="https://www.php.net/readfile">
 <link rel="alternate" href="https://www.php.net/readfile" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.popen.php">
 <link rel="next" href="https://www.php.net/manual/en/function.readlink.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.readfile.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.readfile.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.readfile.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.readfile.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.readfile.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.readfile.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.readfile.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.readfile.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.readfile.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.readfile.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.readfile.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Outputs a file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: readfile - Manual" />
<meta name="twitter:description" content="Outputs a file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: readfile - Manual" />
<meta itemprop="description" content="Outputs a file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Outputs a file" />

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
        <a href="function.readlink.php">
          readlink &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.popen.php">
          &laquo; popen        </a>
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
            <option value='en/function.readfile.php' selected="selected">English</option>
            <option value='de/function.readfile.php'>German</option>
            <option value='es/function.readfile.php'>Spanish</option>
            <option value='fr/function.readfile.php'>French</option>
            <option value='it/function.readfile.php'>Italian</option>
            <option value='ja/function.readfile.php'>Japanese</option>
            <option value='pt_BR/function.readfile.php'>Brazilian Portuguese</option>
            <option value='ru/function.readfile.php'>Russian</option>
            <option value='tr/function.readfile.php'>Turkish</option>
            <option value='uk/function.readfile.php'>Ukrainian</option>
            <option value='zh/function.readfile.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.readfile" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">readfile</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">readfile</span> &mdash; <span class="dc-title">Outputs a file</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.readfile-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>readfile</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$use_include_path</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></span> <code class="parameter">$context</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Reads a file and writes it to the output buffer.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.readfile-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       The filename being read.
      </p>
     </dd>
    
    
     <dt><code class="parameter">use_include_path</code></dt>
     <dd>
      <p class="para">
       You can use the optional second parameter and set it to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, if
       you want to search for the file in the <a href="ini.core.php#ini.include-path" class="link">include_path</a>, too.
      </p>
     </dd>
    
    
     <dt><code class="parameter">context</code></dt>
     <dd>
       <p class="para">A <a href="stream.contexts.php" class="link">context stream</a>
<span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>.</p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.readfile-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the number of bytes read from the file on success,
    or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.readfile-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
Upon failure, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
</p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.readfile-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2414">
    <p><strong>Example #1 Forcing a download using <span class="function"><strong>readfile()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$file </span><span style="color: #007700">= </span><span style="color: #DD0000">'monkey.gif'</span><span style="color: #007700">;<br /><br />if (</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Description: File Transfer'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: application/octet-stream'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Disposition: attachment; filename="'</span><span style="color: #007700">.</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">).</span><span style="color: #DD0000">'"'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Expires: 0'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Cache-Control: must-revalidate'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Pragma: public'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Length: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">filesize</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">));<br />    </span><span style="color: #0000BB">readfile</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br />    exit;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="mediaobject">
     
     <div class="imageobject">
      <img src="images/e88cefb5c3fca5060e2490b9763c4433-readfile.png" alt="Open / Save dialogue" width="319" height="245" />
     </div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.readfile-notes">
  <h3 class="title">Notes</h3>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    <span class="function"><strong>readfile()</strong></span> will not present any memory issues, 
    even when sending large files, on its own. If you encounter an 
    out of memory error ensure that output buffering is off with 
    <span class="function"><a href="function.ob-get-level.php" class="function">ob_get_level()</a></span>.
   </p>
  </p></blockquote>

  <div class="tip"><strong class="tip">Tip</strong><p class="simpara">A URL can be used as a
filename with this function if the <a href="filesystem.configuration.php#ini.allow-url-fopen" class="link">fopen wrappers</a> have been enabled.
See <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span> for more details on how to specify the
filename. See the <a href="wrappers.php" class="xref">Supported Protocols and Wrappers</a> for links to information
about what abilities the various wrappers have, notes on their usage,
and information on any predefined variables they may
provide.</p></div>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.readfile-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.fpassthru.php" class="function" rel="rdfs-seeAlso">fpassthru()</a> - Output all remaining data on a file pointer</span></li>
    <li><span class="function"><a href="function.file.php" class="function" rel="rdfs-seeAlso">file()</a> - Reads entire file into an array</span></li>
    <li><span class="function"><a href="function.fopen.php" class="function" rel="rdfs-seeAlso">fopen()</a> - Opens file or URL</span></li>
    <li><span class="function"><a href="function.include.php" class="function" rel="rdfs-seeAlso">include</a> - include</span></li>
    <li><span class="function"><a href="function.require.php" class="function" rel="rdfs-seeAlso">require</a> - require</span></li>
    <li><span class="function"><a href="function.virtual.php" class="function" rel="rdfs-seeAlso">virtual()</a> - Perform an Apache sub-request</span></li>
    <li><span class="function"><a href="function.file-get-contents.php" class="function" rel="rdfs-seeAlso">file_get_contents()</a> - Reads entire file into a string</span></li>
    <li><a href="wrappers.php" class="xref">Supported Protocols and Wrappers</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/readfile.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.readfile%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.readfile&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.readfile.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">25 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114450">  <div class="votes">
    <div id="Vu114450">
    <a href="/manual/vote-note.php?id=114450&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114450">
    <a href="/manual/vote-note.php?id=114450&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114450" title="68% like this...">
    67
    </div>
  </div>
  <a href="#114450" class="name">
  <strong class="user"><em>riksoft at gmail dot com</em></strong></a><a class="genanchor" href="#114450"> &para;</a><div class="date" title="2014-02-21 06:03"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114450">
<div class="phpcode"><code><span class="html">Just a note for those who face problems on names containing spaces (e.g. "test test.pdf").<br /><br />In the examples (99% of the time) you can find<br />header('Content-Disposition: attachment; filename='.basename($file));<br /><br />but the correct way to set the filename is quoting it (double quote):<br />header('Content-Disposition: attachment; filename="'.basename($file).'"' );<br /><br />Some browsers may work without quotation, but for sure not Firefox and as Mozilla explains, the quotation of the filename in the content-disposition is according to the RFC<br /><a href="http://kb.mozillazine.org/Filenames_with_spaces_are_truncated_upon_download" rel="nofollow" target="_blank">http://kb.mozillazine.org/Filenames_with_spaces_are_truncated_upon_download</a></span></code></div>
  </div>
 </div>
  <div class="note" id="83653">  <div class="votes">
    <div id="Vu83653">
    <a href="/manual/vote-note.php?id=83653&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83653">
    <a href="/manual/vote-note.php?id=83653&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83653" title="62% like this...">
    63
    </div>
  </div>
  <a href="#83653" class="name">
  <strong class="user"><em>yura_imbp at mail dot ru</em></strong></a><a class="genanchor" href="#83653"> &para;</a><div class="date" title="2008-06-05 09:46"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83653">
<div class="phpcode"><code><span class="html">if you need to limit download rate, use this code <br /><br /><span class="default">&lt;?php<br />$local_file </span><span class="keyword">= </span><span class="string">'file.zip'</span><span class="keyword">;<br /></span><span class="default">$download_file </span><span class="keyword">= </span><span class="string">'name.zip'</span><span class="keyword">;<br /><br /></span><span class="comment">// set the download rate limit (=&gt; 20,5 kb/s)<br /></span><span class="default">$download_rate </span><span class="keyword">= </span><span class="default">20.5</span><span class="keyword">;<br />if(</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$local_file</span><span class="keyword">) &amp;&amp; </span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$local_file</span><span class="keyword">))<br />{<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Cache-control: private'</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: application/octet-stream'</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Length: '</span><span class="keyword">.</span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$local_file</span><span class="keyword">));<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Disposition: filename='</span><span class="keyword">.</span><span class="default">$download_file</span><span class="keyword">);<br /><br />    </span><span class="default">flush</span><span class="keyword">();<br />    </span><span class="default">$file </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$local_file</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br />    while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">))<br />    {<br />        </span><span class="comment">// send the current file part to the browser<br />        </span><span class="keyword">print </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">round</span><span class="keyword">(</span><span class="default">$download_rate </span><span class="keyword">* </span><span class="default">1024</span><span class="keyword">));<br />        </span><span class="comment">// flush the content to the browser<br />        </span><span class="default">flush</span><span class="keyword">();<br />        </span><span class="comment">// sleep one second<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />    }<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);}<br />else {<br />    die(</span><span class="string">'Error: The file '</span><span class="keyword">.</span><span class="default">$local_file</span><span class="keyword">.</span><span class="string">' does not exist!'</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122771">  <div class="votes">
    <div id="Vu122771">
    <a href="/manual/vote-note.php?id=122771&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122771">
    <a href="/manual/vote-note.php?id=122771&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122771" title="68% like this...">
    9
    </div>
  </div>
  <a href="#122771" class="name">
  <strong class="user"><em>Paulinator</em></strong></a><a class="genanchor" href="#122771"> &para;</a><div class="date" title="2018-05-27 09:45"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122771">
<div class="phpcode"><code><span class="html">Always using MIME-Type 'application/octet-stream' is not optimal. Most if not all browsers will simply download files with that type.<br /><br />If you use proper MIME types (and inline Content-Disposition), browsers will have better default actions for some of them. Eg. in case of images, browsers will display them, which is probably what you'd want.<br /><br />To deliver the file with the proper MIME type, the easiest way is to use:<br /><br />header('Content-Type: ' . mime_content_type($file)); <br />header('Content-Disposition: inline; filename="'.basename($file).'"');</span></code></div>
  </div>
 </div>
  <div class="note" id="78582">  <div class="votes">
    <div id="Vu78582">
    <a href="/manual/vote-note.php?id=78582&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78582">
    <a href="/manual/vote-note.php?id=78582&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78582" title="63% like this...">
    15
    </div>
  </div>
  <a href="#78582" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#78582"> &para;</a><div class="date" title="2007-10-17 09:27"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78582">
<div class="phpcode"><code><span class="html">To avoid the risk of choosing themselves which files to download by messing with the request and doing things like inserting "../" into the "filename", simply remember that URLs are not file paths, and there's no reason why the mapping between them has to be so literal as "download.php?file=thingy.mpg" resulting in the download of the file "thingy.mpg".<br /><br />It's your script and you have full control over how it maps file requests to file names, and which requests retrieve which files.<br /><br />But even then, as ever, never trust ANYTHING in the request. Basic first-day-at-school security principle, that.</span></code></div>
  </div>
 </div>
  <div class="note" id="81032">  <div class="votes">
    <div id="Vu81032">
    <a href="/manual/vote-note.php?id=81032&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81032">
    <a href="/manual/vote-note.php?id=81032&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81032" title="60% like this...">
    18
    </div>
  </div>
  <a href="#81032" class="name">
  <strong class="user"><em>TimB</em></strong></a><a class="genanchor" href="#81032"> &para;</a><div class="date" title="2008-02-11 02:23"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81032">
<div class="phpcode"><code><span class="html">To anyone that's had problems with Readfile() reading large files into memory the problem is not Readfile() itself, it's because you have output buffering on. Just turn off output buffering immediately before the call to Readfile(). Use something like ob_end_flush().</span></code></div>
  </div>
 </div>
  <div class="note" id="86478">  <div class="votes">
    <div id="Vu86478">
    <a href="/manual/vote-note.php?id=86478&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86478">
    <a href="/manual/vote-note.php?id=86478&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86478" title="65% like this...">
    9
    </div>
  </div>
  <a href="#86478" class="name">
  <strong class="user"><em>levhita at gmail dot com</em></strong></a><a class="genanchor" href="#86478"> &para;</a><div class="date" title="2008-10-21 12:59"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86478">
<div class="phpcode"><code><span class="html">A note on the smartReadFile function from gaosipov:<br /><br />Change the indexes on the preg_match matches to:<br />      <br />      $begin = intval($matches[1]);<br />      if( !empty($matches[2]) ) {<br />        $end = intval($matches[2]);<br />      }<br /><br />Otherwise the $begin would be set to the entire section matched and the $end to what should be the begin.<br /><br />See preg_match for more details on this.</span></code></div>
  </div>
 </div>
  <div class="note" id="81925">  <div class="votes">
    <div id="Vu81925">
    <a href="/manual/vote-note.php?id=81925&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81925">
    <a href="/manual/vote-note.php?id=81925&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81925" title="57% like this...">
    21
    </div>
  </div>
  <a href="#81925" class="name">
  <strong class="user"><em>marro at email dot cz</em></strong></a><a class="genanchor" href="#81925"> &para;</a><div class="date" title="2008-03-19 11:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81925">
<div class="phpcode"><code><span class="html">My script working correctly on IE6 and Firefox 2 with any typ e of files (I hope :))<br /><br />function DownloadFile($file) { // $file = include path <br />        if(file_exists($file)) {<br />            header('Content-Description: File Transfer');<br />            header('Content-Type: application/octet-stream');<br />            header('Content-Disposition: attachment; filename='.basename($file));<br />            header('Content-Transfer-Encoding: binary');<br />            header('Expires: 0');<br />            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');<br />            header('Pragma: public');<br />            header('Content-Length: ' . filesize($file));<br />            ob_clean();<br />            flush();<br />            readfile($file);<br />            exit;<br />        }<br /><br />    }<br /><br />Run on Apache 2 (WIN32) PHP5</span></code></div>
  </div>
 </div>
  <div class="note" id="52598">  <div class="votes">
    <div id="Vu52598">
    <a href="/manual/vote-note.php?id=52598&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52598">
    <a href="/manual/vote-note.php?id=52598&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52598" title="62% like this...">
    13
    </div>
  </div>
  <a href="#52598" class="name">
  <strong class="user"><em>flobee at gmail dot com</em></strong></a><a class="genanchor" href="#52598"> &para;</a><div class="date" title="2005-05-06 11:17"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52598">
<div class="phpcode"><code><span class="html">regarding php5:<br />i found out that there is already a disscussion @php-dev  about readfile() and fpassthru() where only exactly 2 MB will be delivered.<br /><br />so you may use this on php5 to get lager files<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">readfile_chunked</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">,</span><span class="default">$retbytes</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">) {<br />    </span><span class="default">$chunksize </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">*(</span><span class="default">1024</span><span class="keyword">*</span><span class="default">1024</span><span class="keyword">); </span><span class="comment">// how many bytes per chunk<br />    </span><span class="default">$buffer </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$cnt </span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    </span><span class="comment">// $handle = fopen($filename, 'rb');<br />    </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">);<br />    if (</span><span class="default">$handle </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)) {<br />        </span><span class="default">$buffer </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$chunksize</span><span class="keyword">);<br />        echo </span><span class="default">$buffer</span><span class="keyword">;<br />        if (</span><span class="default">$retbytes</span><span class="keyword">) {<br />            </span><span class="default">$cnt </span><span class="keyword">+= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">);<br />        }<br />    }<br />        </span><span class="default">$status </span><span class="keyword">= </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br />    if (</span><span class="default">$retbytes </span><span class="keyword">&amp;&amp; </span><span class="default">$status</span><span class="keyword">) {<br />        return </span><span class="default">$cnt</span><span class="keyword">; </span><span class="comment">// return num. bytes delivered like readfile() does.<br />    </span><span class="keyword">} <br />    return </span><span class="default">$status</span><span class="keyword">;<br /><br />} <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126169">  <div class="votes">
    <div id="Vu126169">
    <a href="/manual/vote-note.php?id=126169&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126169">
    <a href="/manual/vote-note.php?id=126169&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126169" title="58% like this...">
    2
    </div>
  </div>
  <a href="#126169" class="name">
  <strong class="user"><em>jorensmerenjanu at gmail dot com</em></strong></a><a class="genanchor" href="#126169"> &para;</a><div class="date" title="2021-06-14 08:31"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126169">
<div class="phpcode"><code><span class="html">For anyone having the problem of your html page being outputted in the downloaded file: call the functions ob_clean() and flush() before readfile()</span></code></div>
  </div>
 </div>
  <div class="note" id="86244">  <div class="votes">
    <div id="Vu86244">
    <a href="/manual/vote-note.php?id=86244&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86244">
    <a href="/manual/vote-note.php?id=86244&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86244" title="55% like this...">
    7
    </div>
  </div>
  <a href="#86244" class="name">
  <strong class="user"><em>gaosipov at gmail dot com</em></strong></a><a class="genanchor" href="#86244"> &para;</a><div class="date" title="2008-10-09 02:08"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86244">
<div class="phpcode"><code><span class="html">Send file with HTTPRange support (partial download):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">smartReadFile</span><span class="keyword">(</span><span class="default">$location</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">, </span><span class="default">$mimeType</span><span class="keyword">=</span><span class="string">'application/octet-stream'</span><span class="keyword">)<br />{ if(!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$location</span><span class="keyword">))<br />  { </span><span class="default">header </span><span class="keyword">(</span><span class="string">"HTTP/1.0 404 Not Found"</span><span class="keyword">);<br />    return;<br />  }<br />  <br />  </span><span class="default">$size</span><span class="keyword">=</span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$location</span><span class="keyword">);<br />  </span><span class="default">$time</span><span class="keyword">=</span><span class="default">date</span><span class="keyword">(</span><span class="string">'r'</span><span class="keyword">,</span><span class="default">filemtime</span><span class="keyword">(</span><span class="default">$location</span><span class="keyword">));<br />  <br />  </span><span class="default">$fm</span><span class="keyword">=@</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$location</span><span class="keyword">,</span><span class="string">'rb'</span><span class="keyword">);<br />  if(!</span><span class="default">$fm</span><span class="keyword">)<br />  { </span><span class="default">header </span><span class="keyword">(</span><span class="string">"HTTP/1.0 505 Internal server error"</span><span class="keyword">);<br />    return;<br />  }<br />  <br />  </span><span class="default">$begin</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />  </span><span class="default">$end</span><span class="keyword">=</span><span class="default">$size</span><span class="keyword">;<br />  <br />  if(isset(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_RANGE'</span><span class="keyword">]))<br />  { if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/bytes=\h*(\d+)-(\d*)[\D.*]?/i'</span><span class="keyword">, </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_RANGE'</span><span class="keyword">], </span><span class="default">$matches</span><span class="keyword">))<br />    { </span><span class="default">$begin</span><span class="keyword">=</span><span class="default">intval</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />      if(!empty(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]))<br />        </span><span class="default">$end</span><span class="keyword">=</span><span class="default">intval</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />    }<br />  }<br />  <br />  if(</span><span class="default">$begin</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">||</span><span class="default">$end</span><span class="keyword">&lt;</span><span class="default">$size</span><span class="keyword">)<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'HTTP/1.0 206 Partial Content'</span><span class="keyword">);<br />  else<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'HTTP/1.0 200 OK'</span><span class="keyword">);  <br />  <br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: </span><span class="default">$mimeType</span><span class="string">"</span><span class="keyword">); <br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Cache-Control: public, must-revalidate, max-age=0'</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Pragma: no-cache'</span><span class="keyword">);  <br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Accept-Ranges: bytes'</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Length:'</span><span class="keyword">.(</span><span class="default">$end</span><span class="keyword">-</span><span class="default">$begin</span><span class="keyword">));<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Range: bytes </span><span class="default">$begin</span><span class="string">-</span><span class="default">$end</span><span class="string">/</span><span class="default">$size</span><span class="string">"</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Disposition: inline; filename=</span><span class="default">$filename</span><span class="string">"</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Transfer-Encoding: binary\n"</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Last-Modified: </span><span class="default">$time</span><span class="string">"</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Connection: close'</span><span class="keyword">);  <br />  <br />  </span><span class="default">$cur</span><span class="keyword">=</span><span class="default">$begin</span><span class="keyword">;<br />  </span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$fm</span><span class="keyword">,</span><span class="default">$begin</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /><br />  while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fm</span><span class="keyword">)&amp;&amp;</span><span class="default">$cur</span><span class="keyword">&lt;</span><span class="default">$end</span><span class="keyword">&amp;&amp;(</span><span class="default">connection_status</span><span class="keyword">()==</span><span class="default">0</span><span class="keyword">))<br />  { print </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fm</span><span class="keyword">,</span><span class="default">min</span><span class="keyword">(</span><span class="default">1024</span><span class="keyword">*</span><span class="default">16</span><span class="keyword">,</span><span class="default">$end</span><span class="keyword">-</span><span class="default">$cur</span><span class="keyword">));<br />    </span><span class="default">$cur</span><span class="keyword">+=</span><span class="default">1024</span><span class="keyword">*</span><span class="default">16</span><span class="keyword">;<br />  }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Usage:<br /><br /><span class="default">&lt;?php<br />smartReadFile</span><span class="keyword">(</span><span class="string">"/tmp/filename"</span><span class="keyword">,</span><span class="string">"myfile.mp3"</span><span class="keyword">,</span><span class="string">"audio/mpeg"</span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span><br />It can be slow for big files to read by fread, but this is a single way to read file in strict bounds. You can modify this and add fpassthru instead of fread and while, but it sends all data from begin --- it would be not fruitful if request is bytes from 100 to 200 from 100mb file.</span></code></div>
  </div>
 </div>
  <div class="note" id="125826">  <div class="votes">
    <div id="Vu125826">
    <a href="/manual/vote-note.php?id=125826&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125826">
    <a href="/manual/vote-note.php?id=125826&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125826" title="55% like this...">
    1
    </div>
  </div>
  <a href="#125826" class="name">
  <strong class="user"><em>simbiat at outlook dot com</em></strong></a><a class="genanchor" href="#125826"> &para;</a><div class="date" title="2021-02-15 08:28"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125826">
<div class="phpcode"><code><span class="html">flobee.at.gmail.dot.com shared "readfile_chunked" function. It does work, but you may encounter memory exhaustion using "fread". Meanwhile "stream_copy_to_stream" seems to utilize the same amount of memory as "readfile". At least, when I was testing "download" function for my <a href="https://github.com/Simbiat/HTTP20" rel="nofollow" target="_blank">https://github.com/Simbiat/HTTP20</a> library on 1.5G file with 256M memory limitation that was the case: "fread" I got peak memory usage of ~240M, while with "stream_copy_to_stream" - ~150M.<br />It does not mean that you can fully escape memory exhaustion, though: if you are reading too much at a time, you can still encounter it. That is why in my library I use a helper function ("speedLimit") to calculate whether selected speed limit will fit the available memory (while allowing some headroom).<br />You can read comments in the code itself for more details and raise issues for the library, if you think something is incorrect there (especially since it's WIP at the moment of writing this), but so far I am able to get consistent behavior with it.</span></code></div>
  </div>
 </div>
  <div class="note" id="103837">  <div class="votes">
    <div id="Vu103837">
    <a href="/manual/vote-note.php?id=103837&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103837">
    <a href="/manual/vote-note.php?id=103837&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103837" title="55% like this...">
    4
    </div>
  </div>
  <a href="#103837" class="name">
  <strong class="user"><em>daren -remove-me- schwenke</em></strong></a><a class="genanchor" href="#103837"> &para;</a><div class="date" title="2011-05-05 08:52"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103837">
<div class="phpcode"><code><span class="html">If you are lucky enough to not be on shared hosting and have apache, look at installing mod_xsendfile.<br />This was the only way I found to both protect and transfer very large files with PHP (gigabytes).  <br />It's also proved to be much faster for basically any file.<br />Available directives have changed since the other note on this and XSendFileAllowAbove was replaced with XSendFilePath to allow more control over access to files outside of webroot.<br /><br />Download the source.<br /><br />Install with: apxs -cia mod_xsendfile.c<br /><br />Add the appropriate configuration directives to your .htaccess or httpd.conf files:<br /># Turn it on<br />XSendFile on<br /># Whitelist a target directory.<br />XSendFilePath /tmp/blah<br /><br />Then to use it in your script:<br /><span class="default">&lt;?php<br />$file </span><span class="keyword">= </span><span class="string">'/tmp/blah/foo.iso'</span><span class="keyword">;<br /></span><span class="default">$download_name </span><span class="keyword">= </span><span class="default">basename</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)) {<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: application/octet-stream'</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Disposition: attachment; filename='</span><span class="keyword">.</span><span class="default">$download_name</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'X-Sendfile: '</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">);<br />    exit;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="54295">  <div class="votes">
    <div id="Vu54295">
    <a href="/manual/vote-note.php?id=54295&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54295">
    <a href="/manual/vote-note.php?id=54295&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54295" title="53% like this...">
    4
    </div>
  </div>
  <a href="#54295" class="name">
  <strong class="user"><em>chrisputnam at gmail dot com</em></strong></a><a class="genanchor" href="#54295"> &para;</a><div class="date" title="2005-06-29 01:44"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54295">
<div class="phpcode"><code><span class="html">In response to flowbee@gmail.com --
<br />
<br />When using the readfile_chunked function noted here with files larger than 10MB or so I am still having memory errors. It's because the writers have left out the all important flush() after each read. So this is the proper chunked readfile (which isn't really readfile at all, and should probably be crossposted to passthru(), fopen(), and popen() just so browsers can find this information):
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">readfile_chunked</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">,</span><span class="default">$retbytes</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">) {
<br />   </span><span class="default">$chunksize </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">*(</span><span class="default">1024</span><span class="keyword">*</span><span class="default">1024</span><span class="keyword">); </span><span class="comment">// how many bytes per chunk
<br />   </span><span class="default">$buffer </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />   </span><span class="default">$cnt </span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />   </span><span class="comment">// $handle = fopen($filename, 'rb');
<br />   </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">);
<br />   if (</span><span class="default">$handle </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {
<br />       return </span><span class="default">false</span><span class="keyword">;
<br />   }
<br />   while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)) {
<br />       </span><span class="default">$buffer </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$chunksize</span><span class="keyword">);
<br />       echo </span><span class="default">$buffer</span><span class="keyword">;
<br />       </span><span class="default">ob_flush</span><span class="keyword">();
<br />       </span><span class="default">flush</span><span class="keyword">();
<br />       if (</span><span class="default">$retbytes</span><span class="keyword">) {
<br />           </span><span class="default">$cnt </span><span class="keyword">+= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">);
<br />       }
<br />   }
<br />       </span><span class="default">$status </span><span class="keyword">= </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br />   if (</span><span class="default">$retbytes </span><span class="keyword">&amp;&amp; </span><span class="default">$status</span><span class="keyword">) {
<br />       return </span><span class="default">$cnt</span><span class="keyword">; </span><span class="comment">// return num. bytes delivered like readfile() does.
<br />   </span><span class="keyword">}
<br />   return </span><span class="default">$status</span><span class="keyword">;
<br />
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />All I've added is a flush(); after the echo line. Be sure to include this!</span></code></div>
  </div>
 </div>
  <div class="note" id="130459">  <div class="votes">
    <div id="Vu130459">
    <a href="/manual/vote-note.php?id=130459&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130459">
    <a href="/manual/vote-note.php?id=130459&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130459" title="no votes...">
    0
    </div>
  </div>
  <a href="#130459" class="name">
  <strong class="user"><em>kacmal314 at gmail dot com</em></strong></a><a class="genanchor" href="#130459"> &para;</a><div class="date" title="2025-08-26 12:09"><strong>1 month ago</strong></div>
  <div class="text" id="Hcom130459">
<div class="phpcode"><code><span class="html">* context: readfile outputs html gibberish to a csv file<br /><br />* environment: Linux with Litespeed<br /><br />tweak to your needs<br /><br />=== download function ===<br /><br />class Filesystem<br />{<br />  public static function download(string $filePathName, string $mime, bool $shouldDelete)<br />  {<br />    if(file_exists($filePathName))<br />    {<br />      header('Content-Description: File Transfer');<br />      header("Content-Type: $mime");<br />      header('Content-Disposition: attachment; filename="' . basename($filePathName) . '"');<br />      header('Content-Transfer-Encoding: binary');<br />      header('Expires: 0');<br />      header('Cache-Control: must-revalidate, post-check=0, pre-check=0');<br />      header('Pragma: public');<br />      header('Content-Length: ' . filesize($filePathName));<br /><br />      readfile($filePathName);<br /><br />    }<br /><br />    clearstatcache();<br /><br />    if ($shouldDelete &amp;&amp; file_exists($filePathName))<br />    {<br />      unlink($filePathName);<br />    }<br /><br />    throw new \Throwable('FileDownloaded');<br />  }<br />}<br /><br />=== wrapper function ===<br /><br />class MyController<br />{<br />  public function download($fileName)<br />  {<br />    try<br />    {<br /><br />      FileSystem::download(<br />        storage_path("app/private/database/$fileName"),<br />        'text/csv',<br />        true<br />      );<br /><br />    }<br />    catch (\Throwable $e)<br />    {<br /><br />      if ($e-&gt;getMessage() == 'FileDownloaded')<br />      {<br />        // redirect back<br />      }<br /><br />      throw $e;<br /><br />    }<br />  }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="70296">  <div class="votes">
    <div id="Vu70296">
    <a href="/manual/vote-note.php?id=70296&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70296">
    <a href="/manual/vote-note.php?id=70296&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70296" title="50% like this...">
    0
    </div>
  </div>
  <a href="#70296" class="name">
  <strong class="user"><em>mAu</em></strong></a><a class="genanchor" href="#70296"> &para;</a><div class="date" title="2006-10-10 12:25"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70296">
<div class="phpcode"><code><span class="html">Instead of using<br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">'Content-Type: application/force-download'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>use<br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">'Content-Type: application/octet-stream'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Some browsers have troubles with force-download.</span></code></div>
  </div>
 </div>
  <div class="note" id="56986">  <div class="votes">
    <div id="Vu56986">
    <a href="/manual/vote-note.php?id=56986&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56986">
    <a href="/manual/vote-note.php?id=56986&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56986" title="46% like this...">
    -2
    </div>
  </div>
  <a href="#56986" class="name">
  <strong class="user"><em>antispam [at] rdx page [dot] com</em></strong></a><a class="genanchor" href="#56986"> &para;</a><div class="date" title="2005-09-20 02:14"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56986">
<div class="phpcode"><code><span class="html">Just a note:  If you're using bw_mod (current version 0.6) to limit bandwidth in Apache 2, it *will not* limit bandwidth during readfile events.</span></code></div>
  </div>
 </div>
  <div class="note" id="114483">  <div class="votes">
    <div id="Vu114483">
    <a href="/manual/vote-note.php?id=114483&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114483">
    <a href="/manual/vote-note.php?id=114483&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114483" title="45% like this...">
    -5
    </div>
  </div>
  <a href="#114483" class="name">
  <strong class="user"><em>Brian</em></strong></a><a class="genanchor" href="#114483"> &para;</a><div class="date" title="2014-02-25 01:01"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114483">
<div class="phpcode"><code><span class="html">If you are looking for an algorithm that will allow you to download (force download) a big file, may this one will help you.<br /><br />$filename = "file.csv";<br />$filepath = "/path/to/file/" . $filename;<br /><br />// Close sessions to prevent user from waiting until <br />// download will finish (uncomment if needed)<br />//session_write_close();<br /><br />set_time_limit(0);<br />ignore_user_abort(false);<br />ini_set('output_buffering', 0);<br />ini_set('zlib.output_compression', 0);<br /><br />$chunk = 10 * 1024 * 1024; // bytes per chunk (10 MB)<br /><br />$fh = fopen($filepath, "rb");<br /><br />if ($fh === false) { <br />    echo "Unable open file"; <br />}<br /><br />header('Content-Description: File Transfer');<br />header('Content-Type: application/octet-stream');<br />header('Content-Disposition: attachment; filename="' . $filename . '"'); <br />header('Expires: 0');<br />header('Cache-Control: must-revalidate');<br />header('Pragma: public');<br />header('Content-Length: ' . filesize($filepath));<br /><br />// Repeat reading until EOF<br />while (!feof($fh)) { <br />    echo fread($handle, $chunk);<br />    <br />    ob_flush();  // flush output<br />    flush();<br />}<br /><br />exit;</span></code></div>
  </div>
 </div>
  <div class="note" id="57972">  <div class="votes">
    <div id="Vu57972">
    <a href="/manual/vote-note.php?id=57972&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57972">
    <a href="/manual/vote-note.php?id=57972&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57972" title="43% like this...">
    -4
    </div>
  </div>
  <a href="#57972" class="name">
  <strong class="user"><em>peavey at pixelpickers dot com</em></strong></a><a class="genanchor" href="#57972"> &para;</a><div class="date" title="2005-10-20 06:38"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57972">
<div class="phpcode"><code><span class="html">A mime-type-independent forced download can also be conducted by using:<br /><br />&lt;?<br />(...)<br />header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // some day in the past<br />header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");<br />header("Content-type: application/x-download");<br />header("Content-Disposition: attachment; filename={$new_name}");<br />header("Content-Transfer-Encoding: binary");<br />?&gt;<br /><br />Cheers,<br /><br />Peavey</span></code></div>
  </div>
 </div>
  <div class="note" id="57861">  <div class="votes">
    <div id="Vu57861">
    <a href="/manual/vote-note.php?id=57861&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57861">
    <a href="/manual/vote-note.php?id=57861&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57861" title="42% like this...">
    -5
    </div>
  </div>
  <a href="#57861" class="name">
  <strong class="user"><em>planetmaster at planetgac dot com</em></strong></a><a class="genanchor" href="#57861"> &para;</a><div class="date" title="2005-10-16 11:44"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57861">
<div class="phpcode"><code><span class="html">Using pieces of the forced download script, adding in MySQL database functions, and hiding the file location for security was what we needed for downloading wmv files from our members creations without prompting Media player as well as secure the file itself and use only database queries. Something to the effect below, very customizable for private access, remote files, and keeping order of your online media.
<br />
<br />&lt;?
<br />    # Protect Script against SQL-Injections
<br />    $fileid=intval($_GET[id]);
<br />    # setup SQL statement
<br />    $sql = " SELECT id, fileurl, filename, filesize FROM ibf_movies WHERE id=' $fileid' ";
<br />
<br />    # execute SQL statement
<br />    $res = mysql_query($sql);
<br />
<br />        # display results
<br />        while ($row = mysql_fetch_array($res)) {
<br />        $fileurl = $row['fileurl'];
<br />        $filename= $row['filename'];
<br />        $filesize= $row['filesize'];
<br />
<br />           $file_extension = strtolower(substr(strrchr($filename,"."),1));
<br />
<br />           switch ($file_extension) {
<br />               case "wmv": $ctype="video/x-ms-wmv"; break;
<br />               default: $ctype="application/force-download";
<br />           }
<br />
<br />// required for IE, otherwise Content-disposition is ignored
<br />if(ini_get('zlib.output_compression'))
<br />ini_set('zlib.output_compression', 'Off');
<br />
<br />           header("Pragma: public");
<br />           header("Expires: 0");
<br />           header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
<br />           header("Cache-Control: private",false);
<br />           header("Content-Type: video/x-ms-wmv");
<br />           header("Content-Type: $ctype");
<br />           header("Content-Disposition: attachment; filename=\"".basename($filename)."\";");
<br />           header("Content-Transfer-Encoding: binary");
<br />           header("Content-Length: ".@filesize($filename));
<br />           set_time_limit(0);
<br />           @readfile("$fileurl") or die("File not found."); 
<br />
<br />}
<br />
<br />$donwloaded = "downloads + 1";
<br />
<br />    if ($_GET["hit"]) {
<br />        mysql_query("UPDATE ibf_movies SET downloads = $donwloaded WHERE id=' $fileid'");
<br />
<br />}
<br />
<br />?&gt;
<br />
<br />While at it I added into download.php a hit (download) counter. Of course you need to setup the DB, table, and columns. Email me for Full setup// Session marker is also a security/logging option
<br />Used in the context of linking:
<br /><a href="http://www.yourdomain.com/download.php?id=xx&amp;hit=1" rel="nofollow" target="_blank">http://www.yourdomain.com/download.php?id=xx&amp;hit=1</a>
<br />
<br />[Edited by sp@php.net: Added Protection against SQL-Injection]</span></code></div>
  </div>
 </div>
  <div class="note" id="46838">  <div class="votes">
    <div id="Vu46838">
    <a href="/manual/vote-note.php?id=46838&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46838">
    <a href="/manual/vote-note.php?id=46838&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46838" title="41% like this...">
    -4
    </div>
  </div>
  <a href="#46838" class="name">
  <strong class="user"><em>Thomas Jespersen</em></strong></a><a class="genanchor" href="#46838"> &para;</a><div class="date" title="2004-10-25 06:06"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46838">
<div class="phpcode"><code><span class="html">Remember if you make a "force download" script like mentioned below that you SANITIZE YOUR INPUT!<br /><br />I have seen a lot of  download scripts that does not test so you are able to download anything you want on the server.<br /><br />Test especially for strings like ".." which makes directory traversal possible. If possible only permit characters a-z, A-Z and 0-9 and make it possible to only download from one "download-folder".</span></code></div>
  </div>
 </div>
  <div class="note" id="52077">  <div class="votes">
    <div id="Vu52077">
    <a href="/manual/vote-note.php?id=52077&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52077">
    <a href="/manual/vote-note.php?id=52077&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52077" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#52077" class="name">
  <strong class="user"><em>TheDayOfCondor</em></strong></a><a class="genanchor" href="#52077"> &para;</a><div class="date" title="2005-04-20 09:10"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52077">
<div class="phpcode"><code><span class="html">Beware - the chunky readfile suggested by Rob Funk can easily exceed you maximum script execution time (30 seconds by default).<br /><br />I suggest you to use the set_time_limit function inside the while loop to reset the php watchdog.</span></code></div>
  </div>
 </div>
  <div class="note" id="123819">  <div class="votes">
    <div id="Vu123819">
    <a href="/manual/vote-note.php?id=123819&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123819">
    <a href="/manual/vote-note.php?id=123819&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123819" title="35% like this...">
    -4
    </div>
  </div>
  <a href="#123819" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#123819"> &para;</a><div class="date" title="2019-05-03 11:35"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123819">
<div class="phpcode"><code><span class="html">To avoid errors, <br />just be careful whether slash "/" is allowed or not at the beginning of $file_name parameter.<br /><br />In my case, trying to send PDF files thru PHP after access-logging,<br />the beginning "/" must be removed in PHP 7.1.</span></code></div>
  </div>
 </div>
  <div class="note" id="52302">  <div class="votes">
    <div id="Vu52302">
    <a href="/manual/vote-note.php?id=52302&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52302">
    <a href="/manual/vote-note.php?id=52302&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52302" title="37% like this...">
    -4
    </div>
  </div>
  <a href="#52302" class="name">
  <strong class="user"><em>TheDayOfCondor</em></strong></a><a class="genanchor" href="#52302"> &para;</a><div class="date" title="2005-04-27 06:24"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52302">
<div class="phpcode"><code><span class="html">I think that readfile suffers from the maximum script execution time. The readfile is always completed even if it exceed the default 30 seconds limit, then the script is aborted.<br />Be warned that you can get very odd behaviour not only on large files, but also on small files if the user has a slow connection.<br /><br />The best thing to do is to use <br /><br />&lt;?<br />  set_time_limit(0);<br />?&gt;<br /><br />just before the readfile, to disable completely the watchdog if you intend to use the readfile call to tranfer a file to the user.</span></code></div>
  </div>
 </div>
  <div class="note" id="98046">  <div class="votes">
    <div id="Vu98046">
    <a href="/manual/vote-note.php?id=98046&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98046">
    <a href="/manual/vote-note.php?id=98046&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98046" title="36% like this...">
    -5
    </div>
  </div>
  <a href="#98046" class="name">
  <strong class="user"><em>Zambz</em></strong></a><a class="genanchor" href="#98046"> &para;</a><div class="date" title="2010-05-22 06:33"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98046">
<div class="phpcode"><code><span class="html">If you are using the procedures outlined in this article to force sending a file to a user, you may find that the "Content-Length" header is not being sent on some servers.<br /><br />The reason this occurs is because some servers are setup by default to enable gzip compression, which sends an additional header for such operations.  This additional header is "Transfer-Encoding: chunked" which essentially overrides the "Content-Length" header and forces a chunked download.  Of course, this is not required if you are using the intelligent versions of readfile in this article. <br /><br />A missing Content-Length header implies the following:<br /><br />1) Your browser will not show a progress bar on downloads because it doesn't know their length<br />2) If you output anything (e.g. white space) after the readfile function (by mistake), the browser will add that to the end of the download, resulting in corrupt data.<br /><br />The easiest way to disable this behaviour is with the following .htaccess directive.<br /><br />SetEnv no-gzip dont-vary</span></code></div>
  </div>
 </div>
  <div class="note" id="120187">  <div class="votes">
    <div id="Vu120187">
    <a href="/manual/vote-note.php?id=120187&amp;page=function.readfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120187">
    <a href="/manual/vote-note.php?id=120187&amp;page=function.readfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120187" title="33% like this...">
    -5
    </div>
  </div>
  <a href="#120187" class="name">
  <strong class="user"><em>anon</em></strong></a><a class="genanchor" href="#120187"> &para;</a><div class="date" title="2016-11-19 02:30"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120187">
<div class="phpcode"><code><span class="html">In the C source, this function simply opens the path in read+binary mode, without a lock, and uses fpassthru()<br /><br />If you need a locked read, use fopen(), flock(), and then fpassthru() directly.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.readfile&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.readfile.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
