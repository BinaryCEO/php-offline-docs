<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: dir - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.dir.php">
 <link rel="shorturl" href="https://www.php.net/dir">
 <link rel="alternate" href="https://www.php.net/dir" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.dir.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.closedir.php">
 <link rel="next" href="https://www.php.net/manual/en/function.getcwd.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.dir.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.dir.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.dir.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.dir.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.dir.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.dir.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.dir.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.dir.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.dir.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.dir.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.dir.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Return an instance of the Directory class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: dir - Manual" />
<meta name="twitter:description" content="Return an instance of the Directory class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: dir - Manual" />
<meta itemprop="description" content="Return an instance of the Directory class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Return an instance of the Directory class" />

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
        <a href="function.getcwd.php">
          getcwd &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.closedir.php">
          &laquo; closedir        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.file.php'>File System Related Extensions</a></li>      <li><a href='book.dir.php'>Directories</a></li>      <li><a href='ref.dir.php'>Directory Functions</a></li>      </ul>
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
            <option value='en/function.dir.php' selected="selected">English</option>
            <option value='de/function.dir.php'>German</option>
            <option value='es/function.dir.php'>Spanish</option>
            <option value='fr/function.dir.php'>French</option>
            <option value='it/function.dir.php'>Italian</option>
            <option value='ja/function.dir.php'>Japanese</option>
            <option value='pt_BR/function.dir.php'>Brazilian Portuguese</option>
            <option value='ru/function.dir.php'>Russian</option>
            <option value='tr/function.dir.php'>Turkish</option>
            <option value='uk/function.dir.php'>Ukrainian</option>
            <option value='zh/function.dir.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.dir" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">dir</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">dir</span> &mdash; <span class="dc-title">Return an instance of the Directory class</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.dir-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>dir</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$directory</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></span> <code class="parameter">$context</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="class.directory.php" class="type Directory">Directory</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  
  <p class="para rdfs-comment">
   A pseudo-object-oriented mechanism for reading a directory.  The
   given <code class="parameter">directory</code> is opened.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.dir-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">directory</code></dt>
    <dd>
     <p class="para">
      Directory to open
     </p>
    </dd>
   
   
    <dt><code class="parameter">context</code></dt>
    <dd>
      <p class="para">A <a href="stream.contexts.php" class="link">context stream</a>
<span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>.</p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.dir-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an instance of <span class="classname"><a href="class.directory.php" class="classname">Directory</a></span>, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> in case of error.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.dir-changelog">
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
       <code class="parameter">context</code> is now nullable.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.dir-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2322">
    <p><strong>Example #1 <span class="function"><strong>dir()</strong></span> example</strong></p>
    <div class="example-contents"><p>
     Please note the fashion in which <span class="function"><a href="directory.read.php" class="function">Directory::read()</a></span>&#039;s
     return value is checked in the example below. We are explicitly
     testing whether the return value is identical to (equal to and of
     the same type as - see <a href="language.operators.comparison.php" class="link">
     Comparison Operators</a> for more information) <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> since
     otherwise, any directory entry whose name evaluates to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> will
     stop the loop.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$d </span><span style="color: #007700">= </span><span style="color: #0000BB">dir</span><span style="color: #007700">(</span><span style="color: #DD0000">"/etc/php5"</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Handle: " </span><span style="color: #007700">. </span><span style="color: #0000BB">$d</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handle </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"Path: " </span><span style="color: #007700">. </span><span style="color: #0000BB">$d</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">path </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />while (</span><span style="color: #0000BB">false </span><span style="color: #007700">!== (</span><span style="color: #0000BB">$entry </span><span style="color: #007700">= </span><span style="color: #0000BB">$d</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">read</span><span style="color: #007700">())) {<br />   echo </span><span style="color: #0000BB">$entry</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">$d</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Handle: Resource id #2
Path: /etc/php5
.
..
apache
cgi
cli</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.dir-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The order in which directory entries are returned by the read method is
    system-dependent.
   </p>
  </p></blockquote>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/dir/functions/dir.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.dir%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.dir&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dir.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126112">  <div class="votes">
    <div id="Vu126112">
    <a href="/manual/vote-note.php?id=126112&amp;page=function.dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126112">
    <a href="/manual/vote-note.php?id=126112&amp;page=function.dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126112" title="76% like this...">
    9
    </div>
  </div>
  <a href="#126112" class="name">
  <strong class="user"><em>synnus at gmail dot com</em></strong></a><a class="genanchor" href="#126112"> &para;</a><div class="date" title="2021-05-26 12:35"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126112">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br />   </span><span class="comment">// simple juste use FilesystemIterator <br />   // and you can skip dot and duble dot<br />   // and use it in array<br />   // new FilesystemIterator( PATH , OPTIONS ) : array <br /><br /></span><span class="default">$array_file_list </span><span class="keyword">= new </span><span class="default">FilesystemIterator</span><span class="keyword">( </span><span class="default">PATH_ROOT </span><span class="keyword">. </span><span class="string">'folder/'</span><span class="keyword">, </span><span class="default">FilesystemIterator</span><span class="keyword">::</span><span class="default">SKIP_DOTS </span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="60562">  <div class="votes">
    <div id="Vu60562">
    <a href="/manual/vote-note.php?id=60562&amp;page=function.dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60562">
    <a href="/manual/vote-note.php?id=60562&amp;page=function.dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60562" title="60% like this...">
    8
    </div>
  </div>
  <a href="#60562" class="name">
  <strong class="user"><em>fordiman at gmail dot com</em></strong></a><a class="genanchor" href="#60562"> &para;</a><div class="date" title="2006-01-10 10:05"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60562">
<div class="phpcode"><code><span class="html">This one's pretty nice.  After getting frustrated for hunting down .jpg files in my massive music collection (PHP would run out of memory), I thought there should be a preg_ls function.<br /><br />function preg_ls ($path=".", $rec=false, $pat="/.*/") {<br />    // it's going to be used repeatedly, ensure we compile it for speed.<br />    $pat=preg_replace("|(/.*/[^S]*)|s", "\\1S", $pat);<br />    //Remove trailing slashes from path<br />    while (substr($path,-1,1)=="/") $path=substr($path,0,-1);<br />    //also, make sure that $path is a directory and repair any screwups<br />    if (!is_dir($path)) $path=dirname($path);<br />    //assert either truth or falsehoold of $rec, allow no scalars to mean truth<br />    if ($rec!==true) $rec=false;<br />    //get a directory handle<br />    $d=dir($path);<br />    //initialise the output array<br />    $ret=Array();<br />    //loop, reading until there's no more to read<br />    while (false!==($e=$d-&gt;read())) {<br />        //Ignore parent- and self-links<br />        if (($e==".")||($e=="..")) continue;<br />        //If we're working recursively and it's a directory, grab and merge<br />        if ($rec &amp;&amp; is_dir($path."/".$e)) {<br />            $ret=array_merge($ret,preg_ls($path."/".$e,$rec,$pat));<br />            continue;<br />        }<br />        //If it don't match, exclude it<br />        if (!preg_match($pat,$e)) continue;<br />        //In all other cases, add it to the output array<br />        $ret[]=$path."/".$e;<br />    }<br />    //finally, return the array<br />    return $ret;<br />}<br /><br />Not bad for a mere 18 lines, don't you think?<br /><br />Example use:<br /><br />foreach (preg_ls("/etc/X11", true, "/.*\.conf/i") as $file) echo $file."\n";<br /><br />Output: <br /><br />/etc/X11/xkb/README.config<br />/etc/X11/xorg.conf-vesa<br />/etc/X11/xorg.conf~<br />/etc/X11/gui.conf<br />/etc/X11/xorg.conf<br />/etc/X11/xorg.conf-fbdev</span></code></div>
  </div>
 </div>
  <div class="note" id="126890">  <div class="votes">
    <div id="Vu126890">
    <a href="/manual/vote-note.php?id=126890&amp;page=function.dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126890">
    <a href="/manual/vote-note.php?id=126890&amp;page=function.dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126890" title="66% like this...">
    2
    </div>
  </div>
  <a href="#126890" class="name">
  <strong class="user"><em>synnus at gmail dot com</em></strong></a><a class="genanchor" href="#126890"> &para;</a><div class="date" title="2022-03-01 12:34"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126890">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/*<br />  New recursive PHP8 <br />  gen array path with  FilesystemIterator<br />*/<br /><br /></span><span class="default">$recurcive_path </span><span class="keyword">= [];<br /></span><span class="default">rdir</span><span class="keyword">(</span><span class="default">path</span><span class="keyword">, </span><span class="default">$recurcive_path</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$recurcive_path</span><span class="keyword">);<br /><br />function </span><span class="default">rdir</span><span class="keyword">(</span><span class="default">string $path</span><span class="keyword">, array &amp;</span><span class="default">$recurcive_path</span><span class="keyword">): </span><span class="default">string<br /></span><span class="keyword">{<br />    if (</span><span class="default">$path </span><span class="keyword">!= </span><span class="string">''</span><span class="keyword">) {<br />        </span><span class="default">$recurcive_path</span><span class="keyword">[] = </span><span class="default">$path</span><span class="keyword">;<br />        </span><span class="default">$array_list </span><span class="keyword">= </span><span class="default">iterator_to_array</span><span class="keyword">(new </span><span class="default">FilesystemIterator</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">FilesystemIterator</span><span class="keyword">::</span><span class="default">SKIP_DOTS</span><span class="keyword">));<br />        foreach (</span><span class="default">$array_list </span><span class="keyword">as </span><span class="default">$name</span><span class="keyword">) {<br />            </span><span class="default">$pathname </span><span class="keyword">= </span><span class="default">$name</span><span class="keyword">-&gt;</span><span class="default">getpathname</span><span class="keyword">();<br />            if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$pathname</span><span class="keyword">) &amp;&amp; </span><span class="default">$name</span><span class="keyword">-&gt;</span><span class="default">getfilename</span><span class="keyword">()[</span><span class="default">0</span><span class="keyword">] != </span><span class="string">'.'</span><span class="keyword">){<br />                </span><span class="default">$path </span><span class="keyword">= </span><span class="default">rdir</span><span class="keyword">(</span><span class="default">$pathname</span><span class="keyword">,</span><span class="default">$recurcive_path</span><span class="keyword">);<br />            }<br />        }<br />        return </span><span class="default">$path</span><span class="keyword">;<br />    }<br />    return </span><span class="string">''</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="62224">  <div class="votes">
    <div id="Vu62224">
    <a href="/manual/vote-note.php?id=62224&amp;page=function.dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62224">
    <a href="/manual/vote-note.php?id=62224&amp;page=function.dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62224" title="57% like this...">
    3
    </div>
  </div>
  <a href="#62224" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#62224"> &para;</a><div class="date" title="2006-02-22 01:02"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62224">
<div class="phpcode"><code><span class="html">Regarding samuel's comment about the dir() function not supporting Unicode properly, it's all in the encoding. The function does NOT internally change Unicode characters into question marks (?), as I was first led to believe. If you simply try to output them in UTF-8, they'll show up just right.</span></code></div>
  </div>
 </div>
  <div class="note" id="61064">  <div class="votes">
    <div id="Vu61064">
    <a href="/manual/vote-note.php?id=61064&amp;page=function.dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61064">
    <a href="/manual/vote-note.php?id=61064&amp;page=function.dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61064" title="56% like this...">
    2
    </div>
  </div>
  <a href="#61064" class="name">
  <strong class="user"><em>samuel dot l at mushicrew dot com</em></strong></a><a class="genanchor" href="#61064"> &para;</a><div class="date" title="2006-01-24 10:52"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61064">
<div class="phpcode"><code><span class="html">Note that the dir object will use the default encoding for non-unicode programs on Windows with PHP 5.x.<br /><br />So, if you have a file named with characters unsupported by the current default encoding, the dir-&gt;read() method will return a wrong entry.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />** This script is on the same directory than a file named with<br />** unsupported characters for the current default encoding.<br />*/<br /></span><span class="default">$d </span><span class="keyword">= </span><span class="default">dir</span><span class="keyword">(</span><span class="string">"./"</span><span class="keyword">);<br />while(</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$e </span><span class="keyword">= </span><span class="default">$d</span><span class="keyword">-&gt;</span><span class="default">read</span><span class="keyword">()))<br />    echo </span><span class="default">$e </span><span class="keyword">. </span><span class="string">'&lt;br/&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />This will print a "?" for every unsupported characters, and not the right file name. So take care if you check with is_file/is_dir right after enumerating.</span></code></div>
  </div>
 </div>
  <div class="note" id="101924">  <div class="votes">
    <div id="Vu101924">
    <a href="/manual/vote-note.php?id=101924&amp;page=function.dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101924">
    <a href="/manual/vote-note.php?id=101924&amp;page=function.dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101924" title="50% like this...">
    0
    </div>
  </div>
  <a href="#101924" class="name">
  <strong class="user"><em>GUILLE@GARGANO</em></strong></a><a class="genanchor" href="#101924"> &para;</a><div class="date" title="2011-01-18 09:17"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101924">
<div class="phpcode"><code><span class="html">to get a dir of <a href="http://www.example.com/directory" rel="nofollow" target="_blank">http://www.example.com/directory</a>
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">remotedir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)
<br />{
<br />  </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="string">"%20"</span><span class="keyword">, </span><span class="default">html_entity_decode</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">));
<br />  if ((</span><span class="default">$rh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">)) === </span><span class="default">FALSE</span><span class="keyword">) { return </span><span class="default">false</span><span class="keyword">; }
<br />  </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />  while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$rh</span><span class="keyword">)) {
<br />     </span><span class="default">$archivos </span><span class="keyword">= </span><span class="default">fgetss</span><span class="keyword">(</span><span class="default">$rh</span><span class="keyword">);
<br />     </span><span class="default">$directorio</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">++] = </span><span class="default">trim</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$archivos</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$archivos</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">)) );
<br />  }
<br />  </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$rh</span><span class="keyword">);
<br />  return </span><span class="default">$directorio</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.dir&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dir.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.dir.php">Directory Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.chdir.php" title="chdir">chdir</a>
                        </li>
                                                <li class="">
                            <a href="function.chroot.php" title="chroot">chroot</a>
                        </li>
                                                <li class="">
                            <a href="function.closedir.php" title="closedir">closedir</a>
                        </li>
                                                <li class="current">
                            <a href="function.dir.php" title="dir">dir</a>
                        </li>
                                                <li class="">
                            <a href="function.getcwd.php" title="getcwd">getcwd</a>
                        </li>
                                                <li class="">
                            <a href="function.opendir.php" title="opendir">opendir</a>
                        </li>
                                                <li class="">
                            <a href="function.readdir.php" title="readdir">readdir</a>
                        </li>
                                                <li class="">
                            <a href="function.rewinddir.php" title="rewinddir">rewinddir</a>
                        </li>
                                                <li class="">
                            <a href="function.scandir.php" title="scandir">scandir</a>
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
