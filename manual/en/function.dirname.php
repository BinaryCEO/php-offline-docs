<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: dirname - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.dirname.php">
 <link rel="shorturl" href="https://www.php.net/dirname">
 <link rel="alternate" href="https://www.php.net/dirname" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.delete.php">
 <link rel="next" href="https://www.php.net/manual/en/function.disk-free-space.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.dirname.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.dirname.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.dirname.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.dirname.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.dirname.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.dirname.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.dirname.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.dirname.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.dirname.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.dirname.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.dirname.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns a parent directory's path" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: dirname - Manual" />
<meta name="twitter:description" content="Returns a parent directory's path" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: dirname - Manual" />
<meta itemprop="description" content="Returns a parent directory's path" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns a parent directory's path" />

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
        <a href="function.disk-free-space.php">
          disk_free_space &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.delete.php">
          &laquo; delete        </a>
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
            <option value='en/function.dirname.php' selected="selected">English</option>
            <option value='de/function.dirname.php'>German</option>
            <option value='es/function.dirname.php'>Spanish</option>
            <option value='fr/function.dirname.php'>French</option>
            <option value='it/function.dirname.php'>Italian</option>
            <option value='ja/function.dirname.php'>Japanese</option>
            <option value='pt_BR/function.dirname.php'>Brazilian Portuguese</option>
            <option value='ru/function.dirname.php'>Russian</option>
            <option value='tr/function.dirname.php'>Turkish</option>
            <option value='uk/function.dirname.php'>Ukrainian</option>
            <option value='zh/function.dirname.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.dirname" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">dirname</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">dirname</span> &mdash; <span class="dc-title">Returns a parent directory&#039;s path</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.dirname-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>dirname</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$levels</code><span class="initializer"> = 1</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Given a string containing the path of a file or directory, this function
   will return the parent directory&#039;s path that is
   <code class="parameter">levels</code> up from the current directory.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    <span class="function"><strong>dirname()</strong></span> operates naively on the input string,
    and is not aware of the actual filesystem, or path components such
    as &quot;<code class="literal">..</code>&quot;.
   </p>
  </p></blockquote>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
    On Windows, <span class="function"><strong>dirname()</strong></span> assumes the currently set codepage, so for it to see the
    correct directory name with multibyte character paths, the matching codepage must
    be set.
    If <code class="parameter">path</code> contains characters which are invalid for the
    current codepage, the behavior of <span class="function"><strong>dirname()</strong></span> is undefined.
   </p>
   <p class="para">
    On other systems, <span class="function"><strong>dirname()</strong></span> assumes <code class="parameter">path</code>
    to be encoded in an ASCII compatible encoding. Otherwise, the behavior of
    the function is undefined.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.dirname-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">path</code></dt>
     <dd>
      <p class="para">
       A path.
      </p>
      <p class="para">
       On Windows, both slash (<code class="literal">/</code>) and backslash
       (<code class="literal">\</code>) are used as directory separator character. In
       other environments, it is the forward slash (<code class="literal">/</code>).
      </p>
     </dd>
    
    
     <dt><code class="parameter">levels</code></dt>
     <dd>
      <p class="para">
       The number of parent directories to go up.
      </p>
      <p class="para">
       This must be an integer greater than 0.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.dirname-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the path of a parent directory. If there are no slashes in
   <code class="parameter">path</code>, a dot (&#039;<code class="literal">.</code>&#039;) is returned,
   indicating the current directory. Otherwise, the returned string is
   <code class="parameter">path</code> with any trailing
   <code class="literal">/component</code> removed.
  </p>

  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
    Be careful when using this function in a loop that can reach the
    top-level directory as this can result in an infinite loop.
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />dirname</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">);    </span><span style="color: #FF8000">// Will return '.'.<br /></span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #DD0000">'/'</span><span style="color: #007700">);    </span><span style="color: #FF8000">// Will return `\` on Windows and '/' on *nix systems.<br /></span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">);   </span><span style="color: #FF8000">// Will return `\` on Windows and '.' on *nix systems.<br /></span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #DD0000">'C:\\'</span><span style="color: #007700">); </span><span style="color: #FF8000">// Will return 'C:\' on Windows and '.' on *nix systems.<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>
 </div>


 <div class="refsect1 examples" id="refsect1-function.dirname-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2338">
    <p><strong>Example #1 <span class="function"><strong>dirname()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #DD0000">"/etc/passwd"</span><span style="color: #007700">) . </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #DD0000">"/etc/"</span><span style="color: #007700">) . </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #DD0000">"."</span><span style="color: #007700">) . </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #DD0000">"C:\\"</span><span style="color: #007700">) . </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #DD0000">"/usr/local/lib"</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">);</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">/etc
/ (or \ on Windows)
.
C:\
/usr</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.dirname-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.basename.php" class="function" rel="rdfs-seeAlso">basename()</a> - Returns trailing name component of path</span></li>
    <li><span class="function"><a href="function.pathinfo.php" class="function" rel="rdfs-seeAlso">pathinfo()</a> - Returns information about a file path</span></li>
    <li><span class="function"><a href="function.realpath.php" class="function" rel="rdfs-seeAlso">realpath()</a> - Returns canonicalized absolute pathname</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/dirname.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.dirname%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.dirname&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dirname.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115982">  <div class="votes">
    <div id="Vu115982">
    <a href="/manual/vote-note.php?id=115982&amp;page=function.dirname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115982">
    <a href="/manual/vote-note.php?id=115982&amp;page=function.dirname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115982" title="60% like this...">
    49
    </div>
  </div>
  <a href="#115982" class="name">
  <strong class="user"><em>y dot a dot dejong at singular dot of dot alumni dot utwente dot nl</em></strong></a><a class="genanchor" href="#115982"> &para;</a><div class="date" title="2014-10-22 07:51"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115982">
<div class="phpcode"><code><span class="html">As of PHP 5.3.0, you can use __DIR__ as a replacement for dirname(__FILE__)</span></code></div>
  </div>
 </div>
  <div class="note" id="54130">  <div class="votes">
    <div id="Vu54130">
    <a href="/manual/vote-note.php?id=54130&amp;page=function.dirname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54130">
    <a href="/manual/vote-note.php?id=54130&amp;page=function.dirname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54130" title="70% like this...">
    37
    </div>
  </div>
  <a href="#54130" class="name">
  <strong class="user"><em>tobylewis at mac dot com</em></strong></a><a class="genanchor" href="#54130"> &para;</a><div class="date" title="2005-06-24 06:52"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54130">
<div class="phpcode"><code><span class="html">Since the paths in the examples given only have two parts (e.g. "/etc/passwd") it is not obvious whether dirname returns the single path element of the parent directory or whether it returns the whole path up to and including the parent directory.  From experimentation it appears to be the latter.<br /><br />e.g. <br /><br />dirname('/usr/local/magic/bin');<br /><br />returns '/usr/local/magic'  and not just 'magic'<br /><br />Also it is not immediately obvious that dirname effectively returns the parent directory of the last item of the path regardless of whether the last item is a directory or a file.  (i.e. one might think that if the path given was a directory then dirname would return the entire original path since that is a directory name.)<br /><br />Further the presense of a directory separator at the end of the path does not necessarily indicate that last item of the path is a directory, and so <br /><br />dirname('/usr/local/magic/bin/');  #note final '/'<br /><br />would return the same result as in my example above.<br /><br />In short this seems to be more of a string manipulation function that strips off the last non-null file or directory element off of a path string.</span></code></div>
  </div>
 </div>
  <div class="note" id="21138">  <div class="votes">
    <div id="Vu21138">
    <a href="/manual/vote-note.php?id=21138&amp;page=function.dirname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd21138">
    <a href="/manual/vote-note.php?id=21138&amp;page=function.dirname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V21138" title="58% like this...">
    42
    </div>
  </div>
  <a href="#21138" class="name">
  <strong class="user"><em>tapken at engter dot de</em></strong></a><a class="genanchor" href="#21138"> &para;</a><div class="date" title="2002-04-30 12:09"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom21138">
<div class="phpcode"><code><span class="html">To get the directory of current included file:
<br />
<br /><span class="default">&lt;?php
<br />dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />For example, if a script called 'database.init.php' which is included from anywhere on the filesystem wants to include the script 'database.class.php', which lays in the same directory, you can use:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">include_once(</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">) . </span><span class="string">'/database.class.php'</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123472">  <div class="votes">
    <div id="Vu123472">
    <a href="/manual/vote-note.php?id=123472&amp;page=function.dirname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123472">
    <a href="/manual/vote-note.php?id=123472&amp;page=function.dirname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123472" title="75% like this...">
    4
    </div>
  </div>
  <a href="#123472" class="name">
  <strong class="user"><em>bobray at softville dot com</em></strong></a><a class="genanchor" href="#123472"> &para;</a><div class="date" title="2018-12-28 05:04"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123472">
<div class="phpcode"><code><span class="html">Be aware that if you call dirname(__FILE__) on Windows, you may get backslashes. If you then try to use str_replace() or preg_replace() to replace part of the path using forward slashes in your search pattern, there will be no match. You can normalize paths with $path = str_replace('\\',  '/' ,$path) before doing any transformations</span></code></div>
  </div>
 </div>
  <div class="note" id="87637">  <div class="votes">
    <div id="Vu87637">
    <a href="/manual/vote-note.php?id=87637&amp;page=function.dirname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87637">
    <a href="/manual/vote-note.php?id=87637&amp;page=function.dirname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87637" title="60% like this...">
    10
    </div>
  </div>
  <a href="#87637" class="name">
  <strong class="user"><em>joe dot naylor at gmail dot com</em></strong></a><a class="genanchor" href="#87637"> &para;</a><div class="date" title="2008-12-13 10:07"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87637">
<div class="phpcode"><code><span class="html">The dirname function does not usually return a slash on the end, which might encourage you to create links using code like this:<br />$url = dirname($_SERVER['PHP_SELF']) . '/somepage.php';<br /><br />However dirname returns a slash if the path you specify is the root, so $url in that case would become '//somepage.php'.  If you put that URL as the action on a form, for example, submitting the form will try to go to <a href="http://somepage.php." rel="nofollow" target="_blank">http://somepage.php.</a><br /><br />I ran into this when I wrote a site on a url with a path, www.somehost.com/client/somepage.php, where the code above works great, but then wanted to put it on a subdomain, client.somehost.com/somepage.php, where things started breaking.<br /><br />The best solution would be to create a function that generates absolute URLs and use that throughout the site, but creating a safe_dirname function (and an htaccess rewrite to fix double-slashes just in case) fixed the issue for me:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">safe_dirname</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)<br />{<br />   </span><span class="default">$dirname </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br />   return </span><span class="default">$dirname </span><span class="keyword">== </span><span class="string">'/' </span><span class="keyword">? </span><span class="string">'' </span><span class="keyword">: </span><span class="default">$dirname</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="54868">  <div class="votes">
    <div id="Vu54868">
    <a href="/manual/vote-note.php?id=54868&amp;page=function.dirname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54868">
    <a href="/manual/vote-note.php?id=54868&amp;page=function.dirname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54868" title="52% like this...">
    3
    </div>
  </div>
  <a href="#54868" class="name">
  <strong class="user"><em>klugg this-is-junk at tlen dot pl</em></strong></a><a class="genanchor" href="#54868"> &para;</a><div class="date" title="2005-07-18 07:14"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54868">
<div class="phpcode"><code><span class="html">Attention with this. Dirname likes to mess with the slashes.<br />On Windows, Apache: <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">'$_SERVER[PHP_SELF]: ' </span><span class="keyword">. </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'PHP_SELF'</span><span class="keyword">] . </span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br />echo </span><span class="string">'Dirname($_SERVER[PHP_SELF]: ' </span><span class="keyword">. </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'PHP_SELF'</span><span class="keyword">]) . </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />prints out<br /><br />$_SERVER[PHP_SELF]: /index.php<br />Dirname($_SERVER[PHP_SELF]: \</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.dirname&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dirname.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
