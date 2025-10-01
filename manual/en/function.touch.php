<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: touch - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.touch.php">
 <link rel="shorturl" href="https://www.php.net/touch">
 <link rel="alternate" href="https://www.php.net/touch" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.tmpfile.php">
 <link rel="next" href="https://www.php.net/manual/en/function.umask.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.touch.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.touch.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.touch.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.touch.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.touch.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.touch.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.touch.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.touch.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.touch.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.touch.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.touch.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sets access and modification time of file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: touch - Manual" />
<meta name="twitter:description" content="Sets access and modification time of file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: touch - Manual" />
<meta itemprop="description" content="Sets access and modification time of file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sets access and modification time of file" />

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
        <a href="function.umask.php">
          umask &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.tmpfile.php">
          &laquo; tmpfile        </a>
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
            <option value='en/function.touch.php' selected="selected">English</option>
            <option value='de/function.touch.php'>German</option>
            <option value='es/function.touch.php'>Spanish</option>
            <option value='fr/function.touch.php'>French</option>
            <option value='it/function.touch.php'>Italian</option>
            <option value='ja/function.touch.php'>Japanese</option>
            <option value='pt_BR/function.touch.php'>Brazilian Portuguese</option>
            <option value='ru/function.touch.php'>Russian</option>
            <option value='tr/function.touch.php'>Turkish</option>
            <option value='uk/function.touch.php'>Ukrainian</option>
            <option value='zh/function.touch.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.touch" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">touch</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">touch</span> &mdash; <span class="dc-title">Sets access and modification time of file</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.touch-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>touch</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$mtime</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$atime</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Attempts to set the access and modification times of the file named in the
   <code class="parameter">filename</code> parameter to the value given in
   <code class="parameter">mtime</code>. 
   Note that the access time is always modified, regardless of the number
   of parameters.
  </p>
  <p class="para">
   If the file does not exist, it will be created. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.touch-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       The name of the file being touched.
      </p>
     </dd>
    
    
     <dt><code class="parameter">mtime</code></dt>
     <dd>
      <p class="para">
       The touch time. If <code class="parameter">mtime</code> is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, 
       the current system <span class="function"><a href="function.time.php" class="function">time()</a></span> is used.
      </p>
     </dd>
    
    
     <dt><code class="parameter">atime</code></dt>
     <dd>
      <p class="para">
       If not <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, the access time of the given filename is set to
       the value of <code class="parameter">atime</code>. Otherwise, it is set to
       the value passed to the <code class="parameter">mtime</code> parameter.
       If both are <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, the current system time is used.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.touch-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.touch-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">mtime</code> and <code class="parameter">atime</code>
       are now nullable.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.touch-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2428">
    <p><strong>Example #1 <span class="function"><strong>touch()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">touch</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #0000BB">$filename </span><span style="color: #007700">. </span><span style="color: #DD0000">' modification time has been changed to present time'</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">'Sorry, could not change modification time of ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$filename</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2429">
    <p><strong>Example #2 <span class="function"><strong>touch()</strong></span> using the <code class="parameter">mtime</code> parameter</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// This is the touch time, we'll set it to one hour in the past.<br /></span><span style="color: #0000BB">$time </span><span style="color: #007700">= </span><span style="color: #0000BB">time</span><span style="color: #007700">() - </span><span style="color: #0000BB">3600</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Touch the file<br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">touch</span><span style="color: #007700">(</span><span style="color: #DD0000">'some_file.txt'</span><span style="color: #007700">, </span><span style="color: #0000BB">$time</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">'Whoops, something went wrong...'</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">'Touched file with success'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.touch-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">Note that time resolution may differ
from one file system to another.</p></p></blockquote>
 </div>

 
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/touch.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.touch%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.touch&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.touch.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113652">  <div class="votes">
    <div id="Vu113652">
    <a href="/manual/vote-note.php?id=113652&amp;page=function.touch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113652">
    <a href="/manual/vote-note.php?id=113652&amp;page=function.touch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113652" title="68% like this...">
    16
    </div>
  </div>
  <a href="#113652" class="name">
  <strong class="user"><em>anon</em></strong></a><a class="genanchor" href="#113652"> &para;</a><div class="date" title="2013-11-10 04:38"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113652">
<div class="phpcode"><code><span class="html">Note that when PHP is called by f.e. apache or nginx instead of directly from the command line, touch() will not prefix the location of the invoking script, so the supplied filename must contain an absolute path.<br /><br />With script started from /home/user/www, this will not touch "/home/user/www/somefile":<br /><br /><span class="default">&lt;?php<br />    touch</span><span class="keyword">( </span><span class="string">'somefile' </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />But this will:<br /><br /><span class="default">&lt;?php<br />    touch</span><span class="keyword">( </span><span class="default">__DIR__ </span><span class="keyword">. </span><span class="string">'/somefile' </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68227">  <div class="votes">
    <div id="Vu68227">
    <a href="/manual/vote-note.php?id=68227&amp;page=function.touch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68227">
    <a href="/manual/vote-note.php?id=68227&amp;page=function.touch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68227" title="73% like this...">
    12
    </div>
  </div>
  <a href="#68227" class="name">
  <strong class="user"><em>Charles Belov</em></strong></a><a class="genanchor" href="#68227"> &para;</a><div class="date" title="2006-07-18 06:10"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68227">
<div class="phpcode"><code><span class="html">Update the access time without updating the modified time:<br /><br />Unix command: touch -a filename<br /><br />PHP: touch(filename, date('U', filemtime(filename)), time())</span></code></div>
  </div>
 </div>
  <div class="note" id="84081">  <div class="votes">
    <div id="Vu84081">
    <a href="/manual/vote-note.php?id=84081&amp;page=function.touch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84081">
    <a href="/manual/vote-note.php?id=84081&amp;page=function.touch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84081" title="66% like this...">
    12
    </div>
  </div>
  <a href="#84081" class="name">
  <strong class="user"><em>Jeff</em></strong></a><a class="genanchor" href="#84081"> &para;</a><div class="date" title="2008-06-26 12:29"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84081">
<div class="phpcode"><code><span class="html">I've been trying to set a filemtime into the future with touch() on PHP5.<br /><br />It seems touch $time has a future limit around 1000000 seconds (11 days or so). Beyond this point it reverts to a previous $time.<br /><br />It doesn't make much sense but I could save you hours of time.<br /><br />$time = time()+1500000;<br />touch($cachedfile,$time);</span></code></div>
  </div>
 </div>
  <div class="note" id="87315">  <div class="votes">
    <div id="Vu87315">
    <a href="/manual/vote-note.php?id=87315&amp;page=function.touch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87315">
    <a href="/manual/vote-note.php?id=87315&amp;page=function.touch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87315" title="68% like this...">
    7
    </div>
  </div>
  <a href="#87315" class="name">
  <strong class="user"><em>mrgrier at yahoo dot com</em></strong></a><a class="genanchor" href="#87315"> &para;</a><div class="date" title="2008-11-29 10:29"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87315">
<div class="phpcode"><code><span class="html">At least on Linux, touch will not change the time on a symlink itself, but on the file/directory it points to. The only way to work around this is to unlink the symlink, then recreate it.<br /><br />It took a bit of searching to discover this. The OS itself provides no way to do it. Many people wondered why anyone would want to do this. I use symlinks inside a web tree to point to files outside the web tree. After a certain length of time has passed, I want the symlinks to die, so the files cannot be successfully hotlinked.</span></code></div>
  </div>
 </div>
  <div class="note" id="93787">  <div class="votes">
    <div id="Vu93787">
    <a href="/manual/vote-note.php?id=93787&amp;page=function.touch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93787">
    <a href="/manual/vote-note.php?id=93787&amp;page=function.touch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93787" title="58% like this...">
    6
    </div>
  </div>
  <a href="#93787" class="name">
  <strong class="user"><em>ernst at cron-it dot de</em></strong></a><a class="genanchor" href="#93787"> &para;</a><div class="date" title="2009-09-29 06:38"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93787">
<div class="phpcode"><code><span class="html">To touch a file without being owner, it is much easier:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">touchFile</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) {
<br />  </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'a'</span><span class="keyword">));
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97239">  <div class="votes">
    <div id="Vu97239">
    <a href="/manual/vote-note.php?id=97239&amp;page=function.touch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97239">
    <a href="/manual/vote-note.php?id=97239&amp;page=function.touch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97239" title="63% like this...">
    3
    </div>
  </div>
  <a href="#97239" class="name">
  <strong class="user"><em>chris dot dallaire at csquaredsystems dot com</em></strong></a><a class="genanchor" href="#97239"> &para;</a><div class="date" title="2010-04-09 07:41"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97239">
<div class="phpcode"><code><span class="html">I needed to use this to touch the /etc/cron.d directory when I updated some files in there. I know the docs say this isn't necessary, but I'm finding that i need to do it in order form my changes to be picked up quickly. <br /><br />I ran into the permissions error as well and I found that using chmod 777 /etc/cron.d does the trick.<br /><br />So, you should be able to use the PHP touch function on a directory that has open write access.<br /><br />Of course, this isn't the most secure approach, but in our application it's not a big deal for that folder to not be super secure.</span></code></div>
  </div>
 </div>
  <div class="note" id="86781">  <div class="votes">
    <div id="Vu86781">
    <a href="/manual/vote-note.php?id=86781&amp;page=function.touch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86781">
    <a href="/manual/vote-note.php?id=86781&amp;page=function.touch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86781" title="57% like this...">
    3
    </div>
  </div>
  <a href="#86781" class="name">
  <strong class="user"><em>ddalex at gmail dot com</em></strong></a><a class="genanchor" href="#86781"> &para;</a><div class="date" title="2008-11-03 09:25"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86781">
<div class="phpcode"><code><span class="html">Actually, Glen is right, PHP won't touch if it is not the current owner of the file, even if the directory and files are writeable by the PHP user.</span></code></div>
  </div>
 </div>
  <div class="note" id="121530">  <div class="votes">
    <div id="Vu121530">
    <a href="/manual/vote-note.php?id=121530&amp;page=function.touch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121530">
    <a href="/manual/vote-note.php?id=121530&amp;page=function.touch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121530" title="55% like this...">
    1
    </div>
  </div>
  <a href="#121530" class="name">
  <strong class="user"><em>centurianii at yahoo dot co dot uk</em></strong></a><a class="genanchor" href="#121530"> &para;</a><div class="date" title="2017-08-17 08:01"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121530">
<div class="phpcode"><code><span class="html">A better explanation:<br /><br />For file $file and UNIX time stored in vars $access and $modified<br /><br />- change only access time<br />\touch($file, \filemtime($file), $access);<br /><br />- change only modified time<br />\touch($file, $modified, \fileatime($file));<br /><br />- change both access and modified time<br />\touch($file, $modified, $access);<br /><br />Seeing the results:<br /><br />//use a session cookie stored in a custom folder<br />$file = '/var/www/test_com/session/sess_qfn587cudfpgsijm1bs4d81s75';<br />echo 'stats for sess_qfn587cudfpgsijm1bs4d81s75&lt;br/&gt;';<br />\clearstatcache();<br />echo 'access: '.\date("Y-m-d H:i:s", \fileatime($file)).'&lt;br/&gt;';<br />echo 'modified: '.\date("Y-m-d H:i:s", \filemtime($file)).'&lt;br/&gt;';<br />echo 'change access to now, modified +1 hour&lt;br/&gt;';<br />\touch($x, \filemtime($file)+3600, time());<br />\clearstatcache();<br />echo 'access: '.\date("Y-m-d H:i:s", \fileatime($file)).'&lt;br/&gt;';<br />echo 'modified: '.\date("Y-m-d H:i:s", \filemtime($file)).'&lt;br/&gt;';<br /><br />Notice the double call to clearstatcache()!</span></code></div>
  </div>
 </div>
  <div class="note" id="87356">  <div class="votes">
    <div id="Vu87356">
    <a href="/manual/vote-note.php?id=87356&amp;page=function.touch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87356">
    <a href="/manual/vote-note.php?id=87356&amp;page=function.touch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87356" title="53% like this...">
    1
    </div>
  </div>
  <a href="#87356" class="name">
  <strong class="user"><em>info at archiwumrocka dot art dot pl</em></strong></a><a class="genanchor" href="#87356"> &para;</a><div class="date" title="2008-12-01 01:59"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87356">
<div class="phpcode"><code><span class="html">Only way to change modification date in catalogue is to create file in via touch() and dalete it with unlink():
<br />
<br /><span class="default">&lt;?php
<br />$dir    </span><span class="keyword">= </span><span class="string">'temp'</span><span class="keyword">;
<br /></span><span class="default">$files1 </span><span class="keyword">= </span><span class="default">scandir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);
<br />
<br /></span><span class="default">$files1 </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$files1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);
<br />
<br />foreach (</span><span class="default">$files1 </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) 
<br />{
<br />    if (!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)) continue;
<br />    if (!</span><span class="default">touch</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)) 
<br />    {
<br />        </span><span class="default">touch</span><span class="keyword">(</span><span class="default">$val </span><span class="keyword">. </span><span class="string">"/plik.txt"</span><span class="keyword">);
<br />        </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$val </span><span class="keyword">. </span><span class="string">"/plik.txt"</span><span class="keyword">);
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129236">  <div class="votes">
    <div id="Vu129236">
    <a href="/manual/vote-note.php?id=129236&amp;page=function.touch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129236">
    <a href="/manual/vote-note.php?id=129236&amp;page=function.touch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129236" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129236" class="name">
  <strong class="user"><em>picek dot jaroslav at protonmail dot com</em></strong></a><a class="genanchor" href="#129236"> &para;</a><div class="date" title="2024-02-11 10:32"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129236">
<div class="phpcode"><code><span class="html">I have found out that setting a negative *mtime* deletes the file. The following code always deletes the file at $path while $touch returns true.<br /><br /><span class="default">&lt;?php<br />$path </span><span class="keyword">= </span><span class="string">'/folder/file'</span><span class="keyword">;<br /></span><span class="default">$timestamp </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;<br /><br /></span><span class="default">$touch </span><span class="keyword">= </span><span class="default">touch</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">$timestamp</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Running PHP 7.4.5</span></code></div>
  </div>
 </div>
  <div class="note" id="24348">  <div class="votes">
    <div id="Vu24348">
    <a href="/manual/vote-note.php?id=24348&amp;page=function.touch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24348">
    <a href="/manual/vote-note.php?id=24348&amp;page=function.touch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24348" title="53% like this...">
    1
    </div>
  </div>
  <a href="#24348" class="name">
  <strong class="user"><em>feathern at yahoo dot com</em></strong></a><a class="genanchor" href="#24348"> &para;</a><div class="date" title="2002-08-13 03:31"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24348">
<div class="phpcode"><code><span class="html">Neat little script that will give you a list of all modified files in a certain folder after a certain date:<br /><br />$filelist = Array();<br />$filelist = list_dir("d:\\my_folder");<br />for($i=0;$i&lt;count($filelist);$i++){<br />    $test = Array();<br />    $test = explode("/",date("m/d/Y",filemtime($filelist[$i])));<br />//example of files that are later then<br />//06/17/2002<br />    if(($test[2] &gt; 2001) &amp;&amp; ($test[1] &gt; 16) &amp;&amp; ($test[0] &gt; 5)){<br />        echo $filelist[$i]."\r\n";<br />    }<br />    clearstatcache();<br />}<br />function list_dir($dn){<br />    if($dn[strlen($dn)-1] != '\\') $dn.='\\';<br />    static $ra = array();<br />    $handle = opendir($dn);<br />    while($fn = readdir($handle)){<br />        if($fn == '.' || $fn == '..') continue;<br />        if(is_dir($dn.$fn)) list_dir($dn.$fn.'\\');<br />        else $ra[] = $dn.$fn;<br />    }<br />    closedir($handle);<br />    return $ra;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="55101">  <div class="votes">
    <div id="Vu55101">
    <a href="/manual/vote-note.php?id=55101&amp;page=function.touch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55101">
    <a href="/manual/vote-note.php?id=55101&amp;page=function.touch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55101" title="50% like this...">
    0
    </div>
  </div>
  <a href="#55101" class="name">
  <strong class="user"><em>rf_public at yahoo dot co dot uk</em></strong></a><a class="genanchor" href="#55101"> &para;</a><div class="date" title="2005-07-25 12:19"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55101">
<div class="phpcode"><code><span class="html">Note: the script to touch a file you don't own will change it's owner so ensure permissions are correct or you could lose access to it</span></code></div>
  </div>
 </div>
  <div class="note" id="78606">  <div class="votes">
    <div id="Vu78606">
    <a href="/manual/vote-note.php?id=78606&amp;page=function.touch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78606">
    <a href="/manual/vote-note.php?id=78606&amp;page=function.touch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78606" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#78606" class="name">
  <strong class="user"><em>Glen</em></strong></a><a class="genanchor" href="#78606"> &para;</a><div class="date" title="2007-10-18 01:01"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78606">
<div class="phpcode"><code><span class="html">In unix on the command-line, you can touch files you don't own - but like other comments on this page state - PHP's built in touch won't work.<br /><br />I simple alternative (on unix):<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">function </span><span class="default">touch_it_good</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)<br />    {<br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="string">"touch </span><span class="keyword">{</span><span class="default">$filename</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84983">  <div class="votes">
    <div id="Vu84983">
    <a href="/manual/vote-note.php?id=84983&amp;page=function.touch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84983">
    <a href="/manual/vote-note.php?id=84983&amp;page=function.touch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84983" title="38% like this...">
    -3
    </div>
  </div>
  <a href="#84983" class="name">
  <strong class="user"><em>Radon8472</em></strong></a><a class="genanchor" href="#84983"> &para;</a><div class="date" title="2008-08-08 05:07"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84983">
<div class="phpcode"><code><span class="html">Important info:<br /><br />touch() used on a directory always returns FALSE and prints "Permission denied" on NTFS and FAT Filesystem (tested on winXP).</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.touch&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.touch.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.symlink.php" title="symlink">symlink</a>
                        </li>
                                                <li class="">
                            <a href="function.tempnam.php" title="tempnam">tempnam</a>
                        </li>
                                                <li class="">
                            <a href="function.tmpfile.php" title="tmpfile">tmpfile</a>
                        </li>
                                                <li class="current">
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
