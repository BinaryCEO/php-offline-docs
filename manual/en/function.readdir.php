<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: readdir - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.readdir.php">
 <link rel="shorturl" href="https://www.php.net/readdir">
 <link rel="alternate" href="https://www.php.net/readdir" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.dir.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.opendir.php">
 <link rel="next" href="https://www.php.net/manual/en/function.rewinddir.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.readdir.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.readdir.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.readdir.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.readdir.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.readdir.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.readdir.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.readdir.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.readdir.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.readdir.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.readdir.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.readdir.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Read entry from directory handle" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: readdir - Manual" />
<meta name="twitter:description" content="Read entry from directory handle" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: readdir - Manual" />
<meta itemprop="description" content="Read entry from directory handle" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Read entry from directory handle" />

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
        <a href="function.rewinddir.php">
          rewinddir &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.opendir.php">
          &laquo; opendir        </a>
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
            <option value='en/function.readdir.php' selected="selected">English</option>
            <option value='de/function.readdir.php'>German</option>
            <option value='es/function.readdir.php'>Spanish</option>
            <option value='fr/function.readdir.php'>French</option>
            <option value='it/function.readdir.php'>Italian</option>
            <option value='ja/function.readdir.php'>Japanese</option>
            <option value='pt_BR/function.readdir.php'>Brazilian Portuguese</option>
            <option value='ru/function.readdir.php'>Russian</option>
            <option value='tr/function.readdir.php'>Turkish</option>
            <option value='uk/function.readdir.php'>Ukrainian</option>
            <option value='zh/function.readdir.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.readdir" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">readdir</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">readdir</span> &mdash; <span class="dc-title">Read entry from directory handle</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.readdir-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>readdir</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></span> <code class="parameter">$dir_handle</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Returns the name of the next entry in the directory. The
   entries are returned in the order in which they are stored by
   the filesystem.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.readdir-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">dir_handle</code></dt>
     <dd>
      <p class="para">
       The directory handle <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> previously opened
       with <span class="function"><a href="function.opendir.php" class="function">opendir()</a></span>. If the directory handle is 
       not specified, the last link opened by <span class="function"><a href="function.opendir.php" class="function">opendir()</a></span> 
       is assumed.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.readdir-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the entry name on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p> 
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function may
return Boolean <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, but may also return a non-Boolean value which
evaluates to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Please read the section on <a href="language.types.boolean.php" class="link">Booleans</a> for more
information. Use <a href="language.operators.comparison.php" class="link">the ===
operator</a> for testing the return value of this
function.</p></div>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.readdir-changelog">
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
       <code class="parameter">dir_handle</code> is now nullable.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.readdir-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2325">
    <p><strong>Example #1 List all entries in a directory</strong></p>
    <div class="example-contents"><p>
     Please note the fashion in which <span class="function"><strong>readdir()</strong></span>&#039;s
     return value is checked in the examples below. We are explicitly
     testing whether the return value is identical to (equal to and of
     the same type as--see <a href="language.operators.comparison.php" class="link">Comparison
     Operators</a> for more information) <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> since otherwise,
     any directory entry whose name evaluates to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> will stop the
     loop (e.g. a directory named &quot;0&quot;).
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$handle </span><span style="color: #007700">= </span><span style="color: #0000BB">opendir</span><span style="color: #007700">(</span><span style="color: #DD0000">'/path/to/files'</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"Directory handle: </span><span style="color: #0000BB">$handle</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">"Entries:\n"</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000">/* This is the correct way to loop over the directory. */<br />    </span><span style="color: #007700">while (</span><span style="color: #0000BB">false </span><span style="color: #007700">!== (</span><span style="color: #0000BB">$entry </span><span style="color: #007700">= </span><span style="color: #0000BB">readdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">))) {<br />        echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$entry</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />    }<br /><br />    </span><span style="color: #FF8000">/* This is the WRONG way to loop over the directory. */<br />    </span><span style="color: #007700">while (</span><span style="color: #0000BB">$entry </span><span style="color: #007700">= </span><span style="color: #0000BB">readdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">)) {<br />        echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$entry</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />    }<br /><br />    </span><span style="color: #0000BB">closedir</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-2326">
    <p><strong>Example #2 
     List all entries in the current directory and strip out <code class="literal">.</code>
     and <code class="literal">..</code>
    </strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$handle </span><span style="color: #007700">= </span><span style="color: #0000BB">opendir</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">)) {<br />    while (</span><span style="color: #0000BB">false </span><span style="color: #007700">!== (</span><span style="color: #0000BB">$entry </span><span style="color: #007700">= </span><span style="color: #0000BB">readdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">))) {<br />        if (</span><span style="color: #0000BB">$entry </span><span style="color: #007700">!= </span><span style="color: #DD0000">"." </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">$entry </span><span style="color: #007700">!= </span><span style="color: #DD0000">".."</span><span style="color: #007700">) {<br />            echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$entry</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />        }<br />    }<br />    </span><span style="color: #0000BB">closedir</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.readdir-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.is-dir.php" class="function" rel="rdfs-seeAlso">is_dir()</a> - Tells whether the filename is a directory</span></li>
    <li><span class="function"><a href="function.glob.php" class="function" rel="rdfs-seeAlso">glob()</a> - Find pathnames matching a pattern</span></li>
    <li><span class="function"><a href="function.opendir.php" class="function" rel="rdfs-seeAlso">opendir()</a> - Open directory handle</span></li>
    <li><span class="function"><a href="function.scandir.php" class="function" rel="rdfs-seeAlso">scandir()</a> - List files and directories inside the specified path</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dir/functions/readdir.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.readdir%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.readdir&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.readdir.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">29 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="103418">  <div class="votes">
    <div id="Vu103418">
    <a href="/manual/vote-note.php?id=103418&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103418">
    <a href="/manual/vote-note.php?id=103418&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103418" title="67% like this...">
    36
    </div>
  </div>
  <a href="#103418" class="name">
  <strong class="user"><em>sreekumar [at] sreek [dot] in</em></strong></a><a class="genanchor" href="#103418"> &para;</a><div class="date" title="2011-04-12 02:04"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103418">
<div class="phpcode"><code><span class="html">A function I created to non-recursively get the path of all files and folders including sub-directories of a given folder.
<br />Though I have not tested it completely, it seems to be working.
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">/**
<br /> * Finds path, relative to the given root folder, of all files and directories in the given directory and its sub-directories non recursively.
<br /> * Will return an array of the form 
<br /> * array(
<br /> *   'files' =&gt; [],
<br /> *   'dirs'  =&gt; [],
<br /> * )
<br /> * @author sreekumar
<br /> * @param string $root
<br /> * @result array
<br /> */
<br /></span><span class="keyword">function </span><span class="default">read_all_files</span><span class="keyword">(</span><span class="default">$root </span><span class="keyword">= </span><span class="string">'.'</span><span class="keyword">){
<br />  </span><span class="default">$files  </span><span class="keyword">= array(</span><span class="string">'files'</span><span class="keyword">=&gt;array(), </span><span class="string">'dirs'</span><span class="keyword">=&gt;array());
<br />  </span><span class="default">$directories  </span><span class="keyword">= array();
<br />  </span><span class="default">$last_letter  </span><span class="keyword">= </span><span class="default">$root</span><span class="keyword">[</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$root</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">];
<br />  </span><span class="default">$root  </span><span class="keyword">= (</span><span class="default">$last_letter </span><span class="keyword">== </span><span class="string">'\\' </span><span class="keyword">|| </span><span class="default">$last_letter </span><span class="keyword">== </span><span class="string">'/'</span><span class="keyword">) ? </span><span class="default">$root </span><span class="keyword">: </span><span class="default">$root</span><span class="keyword">.</span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">;
<br />  
<br />  </span><span class="default">$directories</span><span class="keyword">[]  = </span><span class="default">$root</span><span class="keyword">;
<br />  
<br />  while (</span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$directories</span><span class="keyword">)) {
<br />    </span><span class="default">$dir  </span><span class="keyword">= </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$directories</span><span class="keyword">);
<br />    if (</span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {
<br />      while (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">))) {
<br />        if (</span><span class="default">$file </span><span class="keyword">== </span><span class="string">'.' </span><span class="keyword">|| </span><span class="default">$file </span><span class="keyword">== </span><span class="string">'..'</span><span class="keyword">) {
<br />          continue;
<br />        }
<br />        </span><span class="default">$file  </span><span class="keyword">= </span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">;
<br />        if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)) {
<br />          </span><span class="default">$directory_path </span><span class="keyword">= </span><span class="default">$file</span><span class="keyword">.</span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">;
<br />          </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$directories</span><span class="keyword">, </span><span class="default">$directory_path</span><span class="keyword">);
<br />          </span><span class="default">$files</span><span class="keyword">[</span><span class="string">'dirs'</span><span class="keyword">][]  = </span><span class="default">$directory_path</span><span class="keyword">;
<br />        } elseif (</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)) {
<br />          </span><span class="default">$files</span><span class="keyword">[</span><span class="string">'files'</span><span class="keyword">][]  = </span><span class="default">$file</span><span class="keyword">;
<br />        }
<br />      }
<br />      </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br />    }
<br />  }
<br />  
<br />  return </span><span class="default">$files</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124235">  <div class="votes">
    <div id="Vu124235">
    <a href="/manual/vote-note.php?id=124235&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124235">
    <a href="/manual/vote-note.php?id=124235&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124235" title="66% like this...">
    1
    </div>
  </div>
  <a href="#124235" class="name">
  <strong class="user"><em>Mark Simon</em></strong></a><a class="genanchor" href="#124235"> &para;</a><div class="date" title="2019-09-26 01:05"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124235">
<div class="phpcode"><code><span class="html">PHP includes and alternative boolean operators whose precedence is below assignment. This means that an expression of the form<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">if((</span><span class="default">$a </span><span class="keyword">= </span><span class="default">something</span><span class="keyword">()) &amp;&amp; </span><span class="default">$a </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">) </span><span class="default">… </span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />can be written as <br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">if(</span><span class="default">$a </span><span class="keyword">= </span><span class="default">something</span><span class="keyword">() and </span><span class="default">$a </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">) </span><span class="default">… </span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />In this case, the loop can be written as:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">while (</span><span class="default">$entry </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">) and </span><span class="default">$entry </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">) {<br />        </span><span class="comment">//    etc<br />    </span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75132">  <div class="votes">
    <div id="Vu75132">
    <a href="/manual/vote-note.php?id=75132&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75132">
    <a href="/manual/vote-note.php?id=75132&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75132" title="64% like this...">
    4
    </div>
  </div>
  <a href="#75132" class="name">
  <strong class="user"><em>(Qube#php@Efnet)</em></strong></a><a class="genanchor" href="#75132"> &para;</a><div class="date" title="2007-05-14 02:41"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75132">
<div class="phpcode"><code><span class="html">Here is an updated version of preg_find() [which has been linked from the glob() man page for years] - this function should provide most of what you want back from reading files, directories, different sorting methods, recursion, and perhaps most powerful of all the ability to pattern match with a PCRE regex.<br /><br />You can get preg_find here: <a href="http://www.pgregg.com/projects/php/preg_find/preg_find.php.txt" rel="nofollow" target="_blank">http://www.pgregg.com/projects/php/preg_find/preg_find.php.txt</a><br />or if you prefer colourful .phps format: <a href="http://www.pgregg.com/projects/php/preg_find/preg_find.phps" rel="nofollow" target="_blank">http://www.pgregg.com/projects/php/preg_find/preg_find.phps</a><br />or scoll down to the end of this note.<br /><br />I wrote several examples on how to use it on my blog at: <a href="http://www.pgregg.com/forums/viewtopic.php?tid=73" rel="nofollow" target="_blank">http://www.pgregg.com/forums/viewtopic.php?tid=73</a><br /><br />simple glob() type replacement:<br />$files = preg_find('/./', $dir);<br /><br />recursive?<br />$files = preg_find('/./', $dir, PREG_FIND_RECURSIVE);<br /><br />pattern match? find all .php files:<br />$files = preg_find('/\.php$/D', $dir, PREG_FIND_RECURSIVE);<br /><br />sorted alphabetically?<br />$files = preg_find('/\.php$/D', $dir, PREG_FIND_RECURSIVE|PREG_FIND_SORTKEYS);<br /><br />sorted in by filesize, in descending order?<br />$files = preg_find('/./', $dir,<br />  PREG_FIND_RECURSIVE|PREG_FIND_RETURNASSOC |PREG_FIND_SORTFILESIZE|PREG_FIND_SORTDESC);<br />$files=array_keys($files);<br /><br />sorted by date modified?<br />$files = preg_find('/./', $dir,<br />  PREG_FIND_RECURSIVE|PREG_FIND_RETURNASSOC |PREG_FIND_SORTMODIFIED);<br />$files=array_keys($files);<br /><br />Ok, the PHP note says my note is too long, so please click on one of the above links to get it.</span></code></div>
  </div>
 </div>
  <div class="note" id="100710">  <div class="votes">
    <div id="Vu100710">
    <a href="/manual/vote-note.php?id=100710&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100710">
    <a href="/manual/vote-note.php?id=100710&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100710" title="57% like this...">
    7
    </div>
  </div>
  <a href="#100710" class="name">
  <strong class="user"><em>frasq at frasq dot org</em></strong></a><a class="genanchor" href="#100710"> &para;</a><div class="date" title="2010-11-01 07:46"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100710">
<div class="phpcode"><code><span class="html">A variation on listing all the files in a directory recursively. The code illustrates a basic technique : the use of an auxiliary function. It avoids building temporary lists which are merged on the way back. Note that the array which collects the information must be passed by reference.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">listdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">=</span><span class="string">'.'</span><span class="keyword">) {
<br />    if (!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    }
<br />    
<br />    </span><span class="default">$files </span><span class="keyword">= array();
<br />    </span><span class="default">listdiraux</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="default">$files</span><span class="keyword">);
<br />
<br />    return </span><span class="default">$files</span><span class="keyword">;
<br />}
<br />
<br />function </span><span class="default">listdiraux</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, &amp;</span><span class="default">$files</span><span class="keyword">) {
<br />    </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);
<br />    while ((</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {
<br />        if (</span><span class="default">$file </span><span class="keyword">== </span><span class="string">'.' </span><span class="keyword">|| </span><span class="default">$file </span><span class="keyword">== </span><span class="string">'..'</span><span class="keyword">) {
<br />            continue;
<br />        }
<br />        </span><span class="default">$filepath </span><span class="keyword">= </span><span class="default">$dir </span><span class="keyword">== </span><span class="string">'.' </span><span class="keyword">? </span><span class="default">$file </span><span class="keyword">: </span><span class="default">$dir </span><span class="keyword">. </span><span class="string">'/' </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">;
<br />        if (</span><span class="default">is_link</span><span class="keyword">(</span><span class="default">$filepath</span><span class="keyword">))
<br />            continue;
<br />        if (</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$filepath</span><span class="keyword">))
<br />            </span><span class="default">$files</span><span class="keyword">[] = </span><span class="default">$filepath</span><span class="keyword">;
<br />        else if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$filepath</span><span class="keyword">))
<br />            </span><span class="default">listdiraux</span><span class="keyword">(</span><span class="default">$filepath</span><span class="keyword">, </span><span class="default">$files</span><span class="keyword">);
<br />    }
<br />    </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">$files </span><span class="keyword">= </span><span class="default">listdir</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">);
<br /></span><span class="default">sort</span><span class="keyword">(</span><span class="default">$files</span><span class="keyword">, </span><span class="default">SORT_LOCALE_STRING</span><span class="keyword">);
<br />
<br />foreach (</span><span class="default">$files </span><span class="keyword">as </span><span class="default">$f</span><span class="keyword">) {
<br />    echo  </span><span class="default">$f</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="103771">  <div class="votes">
    <div id="Vu103771">
    <a href="/manual/vote-note.php?id=103771&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103771">
    <a href="/manual/vote-note.php?id=103771&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103771" title="57% like this...">
    7
    </div>
  </div>
  <a href="#103771" class="name">
  <strong class="user"><em>stuart at horuskol dot net</em></strong></a><a class="genanchor" href="#103771"> &para;</a><div class="date" title="2011-05-02 10:20"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103771">
<div class="phpcode"><code><span class="html">Looking through the examples, I can't see any that do a simple check on the value of the directory resource that opendir returns and is subsequently used by readdir.<br /><br />If opendir returns false, and you simply pass this to the readdir call in the while loop, you will get an infinite loop. <br /><br />A simple test helps prevent this:<br /><br /><span class="default">&lt;?php<br /><br />$dir </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br />while (</span><span class="default">$dir </span><span class="keyword">&amp;&amp; (</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {<br />  </span><span class="comment">// do stuff<br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104943">  <div class="votes">
    <div id="Vu104943">
    <a href="/manual/vote-note.php?id=104943&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104943">
    <a href="/manual/vote-note.php?id=104943&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104943" title="53% like this...">
    2
    </div>
  </div>
  <a href="#104943" class="name">
  <strong class="user"><em>Mauro Alessandro Nonnis</em></strong></a><a class="genanchor" href="#104943"> &para;</a><div class="date" title="2011-07-17 01:57"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104943">
<div class="phpcode"><code><span class="html">## List and Rename  all files on recursive directories with "recursive directory name" as template + filename<br />## Advice:  other files in the same directory will result in a warning <br />## scriptname : Recursive Dir_Renfiles_dirname-filename.php<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">)) {<br />    while (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">))) {<br />                if (</span><span class="default">$file </span><span class="keyword">!= </span><span class="string">"." </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">".." </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">"Recursive Dir_Renfiles_dirname-filename.php"</span><span class="keyword">) {<br />                    echo </span><span class="string">"</span><span class="default">$file</span><span class="string">"</span><span class="keyword">;<br />        echo </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />                    </span><span class="default">$count </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;<br />                     </span><span class="default">$handle2 </span><span class="keyword">= @</span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />                        while (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$file2 </span><span class="keyword">= @</span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle2</span><span class="keyword">))) {<br />                        echo </span><span class="string">"</span><span class="default">$file2</span><span class="string">"</span><span class="keyword">;      <br />                        if (</span><span class="default">$count </span><span class="keyword">&lt;</span><span class="default">10 </span><span class="keyword">){ @</span><span class="default">rename</span><span class="keyword">(</span><span class="string">"</span><span class="default">$file</span><span class="string">/</span><span class="default">$file2</span><span class="string">"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$file</span><span class="string">/</span><span class="default">$file</span><span class="string">"</span><span class="keyword">.</span><span class="string">"_</span><span class="default">$file2</span><span class="string">"</span><span class="keyword">);}<br />                        else { @</span><span class="default">rename</span><span class="keyword">(</span><span class="string">"</span><span class="default">$file</span><span class="string">/</span><span class="default">$file2</span><span class="string">"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$file</span><span class="string">/</span><span class="default">$file</span><span class="string">"</span><span class="keyword">.</span><span class="string">"_</span><span class="default">$file2</span><span class="string">"</span><span class="keyword">);}<br />                        echo </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />                         </span><span class="default">$count </span><span class="keyword">= </span><span class="default">$count </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;<br />                            }<br />             echo </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />        }<br />    }<br />    </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124364">  <div class="votes">
    <div id="Vu124364">
    <a href="/manual/vote-note.php?id=124364&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124364">
    <a href="/manual/vote-note.php?id=124364&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124364" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#124364" class="name">
  <strong class="user"><em>synnus at gmail dot com</em></strong></a><a class="genanchor" href="#124364"> &para;</a><div class="date" title="2019-11-04 08:56"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124364">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php <br /><br /> </span><span class="comment">// if( $entry[0] != '.' )  best for ' . ' and ' .. '<br /><br />            </span><span class="default">$d </span><span class="keyword">= </span><span class="default">dir</span><span class="keyword">( </span><span class="string">'.' </span><span class="keyword">);<br />            echo </span><span class="string">"Pointeur : " </span><span class="keyword">. </span><span class="default">$d</span><span class="keyword">-&gt;</span><span class="default">handle </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />            echo </span><span class="string">"Chemin : " </span><span class="keyword">. </span><span class="default">$d</span><span class="keyword">-&gt;</span><span class="default">path </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />            while (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$entry </span><span class="keyword">= </span><span class="default">$d</span><span class="keyword">-&gt;</span><span class="default">read</span><span class="keyword">())) {<br />               if(</span><span class="default">$entry</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] != </span><span class="string">'.'</span><span class="keyword">) {<br />                   echo </span><span class="default">$entry</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />               }<br />            }<br />            </span><span class="default">$d</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124275">  <div class="votes">
    <div id="Vu124275">
    <a href="/manual/vote-note.php?id=124275&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124275">
    <a href="/manual/vote-note.php?id=124275&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124275" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#124275" class="name">
  <strong class="user"><em>Mark Simon</em></strong></a><a class="genanchor" href="#124275"> &para;</a><div class="date" title="2019-10-09 05:44"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124275">
<div class="phpcode"><code><span class="html">Regarding the warning:<br /><br />This function may return Boolean FALSE, but may also return a non-Boolean value which evaluates to FALSE.<br /><br />Of course, this means that if you use:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">if(</span><span class="default">$entry </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">) == </span><span class="default">false</span><span class="keyword">) </span><span class="default">…<br />?&gt;<br /></span><br />or<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">while(</span><span class="default">$entry </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)) </span><span class="default">…<br />?&gt;<br /></span><br />you may get a false false, as it were.<br /><br />As far as I can tell, the only time this would actually occur is if you encounter an entry of 0.<br /><br />According to<br /><br /><a href="https://www.php.net/manual/en/language.types.boolean.php#language.types.boolean.casting" rel="nofollow" target="_blank">https://www.php.net/manual/en/language.types.boolean.php#language.types.boolean.casting</a><br /><br />this appears to be the only string which will evaluate to false.</span></code></div>
  </div>
 </div>
  <div class="note" id="109132">  <div class="votes">
    <div id="Vu109132">
    <a href="/manual/vote-note.php?id=109132&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109132">
    <a href="/manual/vote-note.php?id=109132&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109132" title="50% like this...">
    0
    </div>
  </div>
  <a href="#109132" class="name">
  <strong class="user"><em>avi dot megladon at gmail dot com</em></strong></a><a class="genanchor" href="#109132"> &para;</a><div class="date" title="2012-06-22 12:51"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109132">
<div class="phpcode"><code><span class="html">loop through folders and sub folders with option to remove specific files.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">listFolderFiles</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">,</span><span class="default">$exclude</span><span class="keyword">){
<br />    </span><span class="default">$ffs </span><span class="keyword">= </span><span class="default">scandir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);
<br />    echo </span><span class="string">'&lt;ul class="ulli"&gt;'</span><span class="keyword">;
<br />    foreach(</span><span class="default">$ffs </span><span class="keyword">as </span><span class="default">$ff</span><span class="keyword">){
<br />        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$exclude</span><span class="keyword">) and !</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$ff</span><span class="keyword">,</span><span class="default">$exclude</span><span class="keyword">)){
<br />            if(</span><span class="default">$ff </span><span class="keyword">!= </span><span class="string">'.' </span><span class="keyword">&amp;&amp; </span><span class="default">$ff </span><span class="keyword">!= </span><span class="string">'..'</span><span class="keyword">){
<br />            if(!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$ff</span><span class="keyword">)){
<br />            echo </span><span class="string">'&lt;li&gt;&lt;a href="edit_page.php?path='</span><span class="keyword">.</span><span class="default">ltrim</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$ff</span><span class="keyword">,</span><span class="string">'./'</span><span class="keyword">).</span><span class="string">'"&gt;'</span><span class="keyword">.</span><span class="default">$ff</span><span class="keyword">.</span><span class="string">'&lt;/a&gt;'</span><span class="keyword">;
<br />            } else {
<br />            echo </span><span class="string">'&lt;li&gt;'</span><span class="keyword">.</span><span class="default">$ff</span><span class="keyword">;    
<br />            }
<br />            if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$ff</span><span class="keyword">)) </span><span class="default">listFolderFiles</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$ff</span><span class="keyword">,</span><span class="default">$exclude</span><span class="keyword">);
<br />            echo </span><span class="string">'&lt;/li&gt;'</span><span class="keyword">;
<br />            }
<br />        }
<br />    }
<br />    echo </span><span class="string">'&lt;/ul&gt;'</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">listFolderFiles</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">,array(</span><span class="string">'index.php'</span><span class="keyword">,</span><span class="string">'edit_page.php'</span><span class="keyword">));
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82988">  <div class="votes">
    <div id="Vu82988">
    <a href="/manual/vote-note.php?id=82988&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82988">
    <a href="/manual/vote-note.php?id=82988&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82988" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82988" class="name">
  <strong class="user"><em>Kim Christensen</em></strong></a><a class="genanchor" href="#82988"> &para;</a><div class="date" title="2008-05-05 08:14"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82988">
<div class="phpcode"><code><span class="html">Handy little function that returns the number of files (not directories) that exists under a directory. <br />Choose if you want the function to recurse through sub-directories with the second parameter - <br />the default mode (false) is just to count the files directly under the supplied path.<br /><br /><span class="default">&lt;?php<br /><br />  </span><span class="comment">/**<br />   * Return the number of files that resides under a directory.<br />   * <br />   * @return integer<br />   * @param    string (required)   The directory you want to start in<br />   * @param    boolean (optional)  Recursive counting. Default to FALSE. <br />   * @param    integer (optional)  Initial value of file count<br />   */  <br /><br />  </span><span class="keyword">function </span><span class="default">num_files</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="default">$recursive</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">, </span><span class="default">$counter</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">) {<br />    static </span><span class="default">$counter</span><span class="keyword">;<br />    if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {<br />      if(</span><span class="default">$dh </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {<br />        while((</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$dh</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {<br />          if(</span><span class="default">$file </span><span class="keyword">!= </span><span class="string">"." </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">".."</span><span class="keyword">) {<br />              </span><span class="default">$counter </span><span class="keyword">= (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">)) ? </span><span class="default">num_files</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$recursive</span><span class="keyword">, </span><span class="default">$counter</span><span class="keyword">) : </span><span class="default">$counter</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;<br />          }<br />        }<br />        </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$dh</span><span class="keyword">);<br />      }<br />    }<br />    return </span><span class="default">$counter</span><span class="keyword">;<br />  }<br /><br />  </span><span class="comment">// Usage:<br />  </span><span class="default">$nfiles </span><span class="keyword">= </span><span class="default">num_files</span><span class="keyword">(</span><span class="string">"/home/kchr"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// count all files that resides under /home/kchr, including subdirs<br />  </span><span class="default">$nfiles </span><span class="keyword">= </span><span class="default">num_files</span><span class="keyword">(</span><span class="string">"/tmp"</span><span class="keyword">); </span><span class="comment">// count the files directly under /tmp<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75402">  <div class="votes">
    <div id="Vu75402">
    <a href="/manual/vote-note.php?id=75402&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75402">
    <a href="/manual/vote-note.php?id=75402&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75402" title="50% like this...">
    0
    </div>
  </div>
  <a href="#75402" class="name">
  <strong class="user"><em>schursin at gmail[deleteme] dot com</em></strong></a><a class="genanchor" href="#75402"> &para;</a><div class="date" title="2007-05-27 06:42"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75402">
<div class="phpcode"><code><span class="html">code:<br /><br /><span class="default">&lt;?php<br /><br />        </span><span class="keyword">function </span><span class="default">permission</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)<br />        {<br />            </span><span class="default">$perms </span><span class="keyword">= </span><span class="default">fileperms</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br /><br />            if     ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0xC000</span><span class="keyword">) == </span><span class="default">0xC000</span><span class="keyword">) { </span><span class="default">$info </span><span class="keyword">= </span><span class="string">'s'</span><span class="keyword">; }<br />            elseif ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0xA000</span><span class="keyword">) == </span><span class="default">0xA000</span><span class="keyword">) { </span><span class="default">$info </span><span class="keyword">= </span><span class="string">'l'</span><span class="keyword">; }<br />            elseif ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x8000</span><span class="keyword">) == </span><span class="default">0x8000</span><span class="keyword">) { </span><span class="default">$info </span><span class="keyword">= </span><span class="string">'-'</span><span class="keyword">; }<br />            elseif ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x6000</span><span class="keyword">) == </span><span class="default">0x6000</span><span class="keyword">) { </span><span class="default">$info </span><span class="keyword">= </span><span class="string">'b'</span><span class="keyword">; }<br />            elseif ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x4000</span><span class="keyword">) == </span><span class="default">0x4000</span><span class="keyword">) { </span><span class="default">$info </span><span class="keyword">= </span><span class="string">'d'</span><span class="keyword">; }<br />            elseif ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x2000</span><span class="keyword">) == </span><span class="default">0x2000</span><span class="keyword">) { </span><span class="default">$info </span><span class="keyword">= </span><span class="string">'c'</span><span class="keyword">; }<br />            elseif ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x1000</span><span class="keyword">) == </span><span class="default">0x1000</span><span class="keyword">) { </span><span class="default">$info </span><span class="keyword">= </span><span class="string">'p'</span><span class="keyword">; }<br />            else                                 { </span><span class="default">$info </span><span class="keyword">= </span><span class="string">'u'</span><span class="keyword">; }<br /><br />            </span><span class="comment">// владелец<br />            </span><span class="default">$info </span><span class="keyword">.= ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x0100</span><span class="keyword">) ? </span><span class="string">'r' </span><span class="keyword">: </span><span class="string">'-'</span><span class="keyword">);<br />            </span><span class="default">$info </span><span class="keyword">.= ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x0080</span><span class="keyword">) ? </span><span class="string">'w' </span><span class="keyword">: </span><span class="string">'-'</span><span class="keyword">);<br />            </span><span class="default">$info </span><span class="keyword">.= ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x0040</span><span class="keyword">) ? ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x0800</span><span class="keyword">) ? </span><span class="string">'s' </span><span class="keyword">: </span><span class="string">'x' </span><span class="keyword">) : ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x0800</span><span class="keyword">) ? </span><span class="string">'S' </span><span class="keyword">: </span><span class="string">'-'</span><span class="keyword">));<br /><br />            </span><span class="comment">// группа<br />            </span><span class="default">$info </span><span class="keyword">.= ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x0020</span><span class="keyword">) ? </span><span class="string">'r' </span><span class="keyword">: </span><span class="string">'-'</span><span class="keyword">);<br />            </span><span class="default">$info </span><span class="keyword">.= ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x0010</span><span class="keyword">) ? </span><span class="string">'w' </span><span class="keyword">: </span><span class="string">'-'</span><span class="keyword">);<br />            </span><span class="default">$info </span><span class="keyword">.= ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x0008</span><span class="keyword">) ? ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x0400</span><span class="keyword">) ? </span><span class="string">'s' </span><span class="keyword">: </span><span class="string">'x' </span><span class="keyword">) : ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x0400</span><span class="keyword">) ? </span><span class="string">'S' </span><span class="keyword">: </span><span class="string">'-'</span><span class="keyword">));<br /><br />            </span><span class="comment">// все<br />            </span><span class="default">$info </span><span class="keyword">.= ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x0004</span><span class="keyword">) ? </span><span class="string">'r' </span><span class="keyword">: </span><span class="string">'-'</span><span class="keyword">);<br />            </span><span class="default">$info </span><span class="keyword">.= ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x0002</span><span class="keyword">) ? </span><span class="string">'w' </span><span class="keyword">: </span><span class="string">'-'</span><span class="keyword">);<br />            </span><span class="default">$info </span><span class="keyword">.= ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x0001</span><span class="keyword">) ? ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x0200</span><span class="keyword">) ? </span><span class="string">'t' </span><span class="keyword">: </span><span class="string">'x' </span><span class="keyword">) : ((</span><span class="default">$perms </span><span class="keyword">&amp; </span><span class="default">0x0200</span><span class="keyword">) ? </span><span class="string">'T' </span><span class="keyword">: </span><span class="string">'-'</span><span class="keyword">));<br /><br />            return </span><span class="default">$info</span><span class="keyword">;<br />        }<br /><br />        function </span><span class="default">dir_list</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)<br />        {<br />            if (</span><span class="default">$dir</span><span class="keyword">[</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">] != </span><span class="string">'/'</span><span class="keyword">) </span><span class="default">$dir </span><span class="keyword">.= </span><span class="string">'/'</span><span class="keyword">;<br /><br />            if (!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) return array();<br /><br />            </span><span class="default">$dir_handle  </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br />            </span><span class="default">$dir_objects </span><span class="keyword">= array();<br />            while (</span><span class="default">$object </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$dir_handle</span><span class="keyword">))<br />                if (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">, array(</span><span class="string">'.'</span><span class="keyword">,</span><span class="string">'..'</span><span class="keyword">)))<br />                {<br />                    </span><span class="default">$filename    </span><span class="keyword">= </span><span class="default">$dir </span><span class="keyword">. </span><span class="default">$object</span><span class="keyword">;<br />                    </span><span class="default">$file_object </span><span class="keyword">= array(<br />                                            </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="default">$object</span><span class="keyword">,<br />                                            </span><span class="string">'size' </span><span class="keyword">=&gt; </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">),<br />                                            </span><span class="string">'perm' </span><span class="keyword">=&gt; </span><span class="default">permission</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">),<br />                                            </span><span class="string">'type' </span><span class="keyword">=&gt; </span><span class="default">filetype</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">),<br />                                            </span><span class="string">'time' </span><span class="keyword">=&gt; </span><span class="default">date</span><span class="keyword">(</span><span class="string">"d F Y H:i:s"</span><span class="keyword">, </span><span class="default">filemtime</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">))<br />                                        );<br />                    </span><span class="default">$dir_objects</span><span class="keyword">[] = </span><span class="default">$file_object</span><span class="keyword">;<br />                }<br /><br />            return </span><span class="default">$dir_objects</span><span class="keyword">;<br />        }<br /><br /></span><span class="default">?&gt;<br /></span><br />call:<br /><br /><span class="default">&lt;?php<br /><br />        print_r</span><span class="keyword">(</span><span class="default">dir_list</span><span class="keyword">(</span><span class="string">'/path/to/you/dir/'</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />output sample:<br /><br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [name] =&gt; api<br />            [size] =&gt; 0<br />            [perm] =&gt; drwxrwxrwx<br />            [type] =&gt; dir<br />            [time] =&gt; 28 May 2007 01:55:02<br />        )<br /><br />    [1] =&gt; Array<br />        (<br />            [name] =&gt; classes<br />            [size] =&gt; 0<br />            [perm] =&gt; drwxrwxrwx<br />            [type] =&gt; dir<br />            [time] =&gt; 26 May 2007 00:56:44<br />        )<br /><br />    [2] =&gt; Array<br />        (<br />            [name] =&gt; config.inc.php<br />            [size] =&gt; 143<br />            [perm] =&gt; -rw-rw-rw-<br />            [type] =&gt; file<br />            [time] =&gt; 26 May 2007 13:13:19<br />        )<br /><br />    [3] =&gt; Array<br />        (<br />            [name] =&gt; index.php<br />            [size] =&gt; 131<br />            [perm] =&gt; -rw-rw-rw-<br />            [type] =&gt; file<br />            [time] =&gt; 26 May 2007 22:15:18<br />        )<br /><br />    [4] =&gt; Array<br />        (<br />            [name] =&gt; modules<br />            [size] =&gt; 0<br />            [perm] =&gt; drwxrwxrwx<br />            [type] =&gt; dir<br />            [time] =&gt; 28 May 2007 00:47:40<br />        )<br /><br />    [5] =&gt; Array<br />        (<br />            [name] =&gt; temp<br />            [size] =&gt; 0<br />            [perm] =&gt; drwxrwxrwx<br />            [type] =&gt; dir<br />            [time] =&gt; 28 May 2007 04:49:33<br />        )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="75156">  <div class="votes">
    <div id="Vu75156">
    <a href="/manual/vote-note.php?id=75156&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75156">
    <a href="/manual/vote-note.php?id=75156&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75156" title="50% like this...">
    0
    </div>
  </div>
  <a href="#75156" class="name">
  <strong class="user"><em>(Qube#php@Efnet)</em></strong></a><a class="genanchor" href="#75156"> &para;</a><div class="date" title="2007-05-15 08:36"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75156">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">// Sample function to recursively return all files within a directory.<br />// <a href="http://www.pgregg.com/projects/php/code/recursive_readdir.phps" rel="nofollow" target="_blank">http://www.pgregg.com/projects/php/code/recursive_readdir.phps</a><br /><br /></span><span class="keyword">Function </span><span class="default">listdir</span><span class="keyword">(</span><span class="default">$start_dir</span><span class="keyword">=</span><span class="string">'.'</span><span class="keyword">) {<br /><br />  </span><span class="default">$files </span><span class="keyword">= array();<br />  if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$start_dir</span><span class="keyword">)) {<br />    </span><span class="default">$fh </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$start_dir</span><span class="keyword">);<br />    while ((</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {<br />      </span><span class="comment"># loop through the files, skipping . and .., and recursing if necessary<br />      </span><span class="keyword">if (</span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">)==</span><span class="default">0 </span><span class="keyword">|| </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'..'</span><span class="keyword">)==</span><span class="default">0</span><span class="keyword">) continue;<br />      </span><span class="default">$filepath </span><span class="keyword">= </span><span class="default">$start_dir </span><span class="keyword">. </span><span class="string">'/' </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">;<br />      if ( </span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$filepath</span><span class="keyword">) )<br />        </span><span class="default">$files </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$files</span><span class="keyword">, </span><span class="default">listdir</span><span class="keyword">(</span><span class="default">$filepath</span><span class="keyword">));<br />      else<br />        </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$files</span><span class="keyword">, </span><span class="default">$filepath</span><span class="keyword">);<br />    }<br />    </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);<br />  } else {<br />    </span><span class="comment"># false if the function was called with an invalid non-directory argument<br />    </span><span class="default">$files </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />  }<br /><br />  return </span><span class="default">$files</span><span class="keyword">;<br /><br />}<br /><br /></span><span class="default">$files </span><span class="keyword">= </span><span class="default">listdir</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$files</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="22941">  <div class="votes">
    <div id="Vu22941">
    <a href="/manual/vote-note.php?id=22941&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22941">
    <a href="/manual/vote-note.php?id=22941&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22941" title="50% like this...">
    0
    </div>
  </div>
  <a href="#22941" class="name">
  <strong class="user"><em>phpwizard-at-pech-dot-cz</em></strong></a><a class="genanchor" href="#22941"> &para;</a><div class="date" title="2002-07-04 01:22"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22941">
<div class="phpcode"><code><span class="html">It should work, but it'll be better to read section 13.1.3 Cache-control Mechanisms of RFC 2616 available at <a href="http://rfc.net/rfc2616.html" rel="nofollow" target="_blank">http://rfc.net/rfc2616.html</a> before you start with confusing proxies on the way from you and the client.<br /><br />Reading it is the best way to learn how proxies work, what should you do to modify cache-related headers of your documents and what you should never do again. :-)<br /><br />And of course not reading RFCs is the best way to never learn how internet works and the best way to behave like Microsoft corp.<br /><br />Have a nice day!<br />Jirka Pech</span></code></div>
  </div>
 </div>
  <div class="note" id="115252">  <div class="votes">
    <div id="Vu115252">
    <a href="/manual/vote-note.php?id=115252&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115252">
    <a href="/manual/vote-note.php?id=115252&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115252" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#115252" class="name">
  <strong class="user"><em>stiles daht nathan ahat geemale</em></strong></a><a class="genanchor" href="#115252"> &para;</a><div class="date" title="2014-06-20 05:54"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115252">
<div class="phpcode"><code><span class="html">I'm on 5.4.21 this function returns null after . and .. on an empty directory.  ZendServer for IBMi</span></code></div>
  </div>
 </div>
  <div class="note" id="104824">  <div class="votes">
    <div id="Vu104824">
    <a href="/manual/vote-note.php?id=104824&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104824">
    <a href="/manual/vote-note.php?id=104824&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104824" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#104824" class="name">
  <strong class="user"><em>mrlemonade</em></strong></a><a class="genanchor" href="#104824"> &para;</a><div class="date" title="2011-07-09 03:34"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104824">
<div class="phpcode"><code><span class="html">Get all files on recursive directories in single array.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/*
<br /> * mrlemonade ~
<br /> */
<br />
<br /></span><span class="keyword">function </span><span class="default">getFilesFromDir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">) {
<br />
<br />  </span><span class="default">$files </span><span class="keyword">= array();
<br />  if (</span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {
<br />    while (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">))) {
<br />        if (</span><span class="default">$file </span><span class="keyword">!= </span><span class="string">"." </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">".."</span><span class="keyword">) {
<br />            if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">)) {
<br />                </span><span class="default">$dir2 </span><span class="keyword">= </span><span class="default">$dir</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">;
<br />                </span><span class="default">$files</span><span class="keyword">[] = </span><span class="default">getFilesFromDir</span><span class="keyword">(</span><span class="default">$dir2</span><span class="keyword">);
<br />            }
<br />            else {
<br />              </span><span class="default">$files</span><span class="keyword">[] = </span><span class="default">$dir</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">;
<br />            }
<br />        }
<br />    }
<br />    </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br />  }
<br />
<br />  return </span><span class="default">array_flat</span><span class="keyword">(</span><span class="default">$files</span><span class="keyword">);
<br />}
<br />
<br />function </span><span class="default">array_flat</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) {
<br />
<br />  foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$a</span><span class="keyword">) {
<br />    if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">)) {
<br />      </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">array_flat</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">));
<br />    }
<br />    else {
<br />      </span><span class="default">$tmp</span><span class="keyword">[] = </span><span class="default">$a</span><span class="keyword">;
<br />    }
<br />  }
<br />
<br />  return </span><span class="default">$tmp</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="comment">// Usage
<br /></span><span class="default">$dir </span><span class="keyword">= </span><span class="string">'/data'</span><span class="keyword">;
<br /></span><span class="default">$foo </span><span class="keyword">= </span><span class="default">getFilesFromDir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);
<br />
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89582">  <div class="votes">
    <div id="Vu89582">
    <a href="/manual/vote-note.php?id=89582&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89582">
    <a href="/manual/vote-note.php?id=89582&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89582" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#89582" class="name">
  <strong class="user"><em>hanan dot ali dot shaikh at gmail dot com</em></strong></a><a class="genanchor" href="#89582"> &para;</a><div class="date" title="2009-03-14 11:37"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89582">
<div class="phpcode"><code><span class="html">This function is used to display random image i.e. at header position of a site. It reads the whole directory and then randomly print the image. I think it may be useful for someone.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if (</span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="string">'images/'</span><span class="keyword">)) {
<br />   </span><span class="default">$dir_array </span><span class="keyword">= array();
<br />    while (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">))) {
<br />        if(</span><span class="default">$file</span><span class="keyword">!=</span><span class="string">"." </span><span class="keyword">&amp;&amp; </span><span class="default">$file</span><span class="keyword">!=</span><span class="string">".."</span><span class="keyword">){
<br />            </span><span class="default">$dir_array</span><span class="keyword">[] = </span><span class="default">$file</span><span class="keyword">;
<br />        }
<br />    }
<br />    echo </span><span class="default">$dir_array</span><span class="keyword">[</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">count</span><span class="keyword">(</span><span class="default">$dir_array</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">)];
<br />    </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112741">  <div class="votes">
    <div id="Vu112741">
    <a href="/manual/vote-note.php?id=112741&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112741">
    <a href="/manual/vote-note.php?id=112741&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112741" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#112741" class="name">
  <strong class="user"><em>jpittman2 at gmail dot com</em></strong></a><a class="genanchor" href="#112741"> &para;</a><div class="date" title="2013-07-18 05:55"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112741">
<div class="phpcode"><code><span class="html">Warning when using readdir() on certain versions of CentOS on NFS-mounted directories:<br /><br />This is not a bug with PHP's readdir, but a bug with certain versions of CentOS's readdir implementation.  According to Post #6213 in the CentOS Bugs forum, when using CentOS kernel versions 2.6.18-348 through 2.6.18-348.3.1, invoking readdir on an NFS-mounted directory may not return all the entries.  Since PHP's readdir() uses this library, the issue is manifest in PHP as well.<br /><br />According to the post, upgrading to version 2.6.18-348.4.1.el5 should solve the issue, though I haven't tried it.<br /><br />glob() does NOT seem to suffer from this same vulnerability.</span></code></div>
  </div>
 </div>
  <div class="note" id="87733">  <div class="votes">
    <div id="Vu87733">
    <a href="/manual/vote-note.php?id=87733&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87733">
    <a href="/manual/vote-note.php?id=87733&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87733" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#87733" class="name">
  <strong class="user"><em>hotrungdungit at gmail dot com</em></strong></a><a class="genanchor" href="#87733"> &para;</a><div class="date" title="2008-12-18 08:59"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87733">
<div class="phpcode"><code><span class="html">Below will return an array of file names and folders in directory
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">ReadFolderDirectory</span><span class="keyword">(</span><span class="default">$dir </span><span class="keyword">= </span><span class="string">"root_dir/here"</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$listDir </span><span class="keyword">= array();
<br />        if(</span><span class="default">$handler </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {
<br />            while ((</span><span class="default">$sub </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handler</span><span class="keyword">)) !== </span><span class="default">FALSE</span><span class="keyword">) {
<br />                if (</span><span class="default">$sub </span><span class="keyword">!= </span><span class="string">"." </span><span class="keyword">&amp;&amp; </span><span class="default">$sub </span><span class="keyword">!= </span><span class="string">".." </span><span class="keyword">&amp;&amp; </span><span class="default">$sub </span><span class="keyword">!= </span><span class="string">"Thumb.db"</span><span class="keyword">) {
<br />                    if(</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$sub</span><span class="keyword">)) {
<br />                        </span><span class="default">$listDir</span><span class="keyword">[] = </span><span class="default">$sub</span><span class="keyword">;
<br />                    }elseif(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$sub</span><span class="keyword">)){
<br />                        </span><span class="default">$listDir</span><span class="keyword">[</span><span class="default">$sub</span><span class="keyword">] = </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ReadFolderDirectory</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$sub</span><span class="keyword">); 
<br />                    }
<br />                }
<br />            }    
<br />            </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handler</span><span class="keyword">);
<br />        }
<br />        return </span><span class="default">$listDir</span><span class="keyword">;    
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119667">  <div class="votes">
    <div id="Vu119667">
    <a href="/manual/vote-note.php?id=119667&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119667">
    <a href="/manual/vote-note.php?id=119667&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119667" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#119667" class="name">
  <strong class="user"><em>sergio dot barrios at upr dot edu dot cu</em></strong></a><a class="genanchor" href="#119667"> &para;</a><div class="date" title="2016-07-29 06:03"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119667">
<div class="phpcode"><code><span class="html">Find a file or folder within a directory. Say we want will loop n times by all subdirectories of a root directory and find a particular folder or file and know your address.<br /><br />In my case I needed to find each existing file in a directory metadata.opf a Calibre library and take all the data for each document this, if we consider that this directory had 20,000 folders author is a task that is humanly impossible . This recursive algorithm achieves do my homework. I hope it will help you.<br /><br /><span class="default">&lt;?php<br /><br />$root </span><span class="keyword">= </span><span class="string">'../Classes'</span><span class="keyword">;<br /></span><span class="default">$search_parameter </span><span class="keyword">= </span><span class="string">"CachedObjectStorageFactory.php"</span><span class="keyword">;<br /><br /></span><span class="comment">//if we call the function spider as spider($root); <br />//will show all the directory content including subdirectories<br /><br />//if we call the function spider as spider('../Classes', 'Shared');<br />//and will show the address of the directory<br /><br /></span><span class="default">spider</span><span class="keyword">(</span><span class="default">$root</span><span class="keyword">, </span><span class="default">$search_parameter</span><span class="keyword">);<br /></span><span class="default">closedir</span><span class="keyword">();<br />    <br />function </span><span class="default">spider</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">,</span><span class="default">$fileName</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">){<br />    <br />    </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br />     <br />    while(</span><span class="default">$file</span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)){<br /><br />       if(</span><span class="default">$file </span><span class="keyword">!= </span><span class="string">"." </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">".."</span><span class="keyword">){<br />                <br />          if(</span><span class="default">$fileName</span><span class="keyword">==</span><span class="string">""</span><span class="keyword">) <br />             echo </span><span class="default">$dir</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">.</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;  <br />        else<br />           if(</span><span class="default">$file </span><span class="keyword">== </span><span class="default">$fileName</span><span class="keyword">)        <br />            echo </span><span class="default">$dir</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">.</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;           <br />           <br />                 <br />        if(!</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">))             <br />            </span><span class="default">spider</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">,</span><span class="default">$fileName</span><span class="keyword">);<br />         <br />      }    <br />   }<br />   <br />}     <br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113122">  <div class="votes">
    <div id="Vu113122">
    <a href="/manual/vote-note.php?id=113122&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113122">
    <a href="/manual/vote-note.php?id=113122&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113122" title="44% like this...">
    -3
    </div>
  </div>
  <a href="#113122" class="name">
  <strong class="user"><em>Blizzz</em></strong></a><a class="genanchor" href="#113122"> &para;</a><div class="date" title="2013-09-02 04:42"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113122">
<div class="phpcode"><code><span class="html">If dir_handle is not a proper resource, null will be returned instead of false.</span></code></div>
  </div>
 </div>
  <div class="note" id="100872">  <div class="votes">
    <div id="Vu100872">
    <a href="/manual/vote-note.php?id=100872&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100872">
    <a href="/manual/vote-note.php?id=100872&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100872" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#100872" class="name">
  <strong class="user"><em>Qwerp</em></strong></a><a class="genanchor" href="#100872"> &para;</a><div class="date" title="2010-11-11 10:42"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100872">
<div class="phpcode"><code><span class="html">Here's a handy function you can use to list the files in the directory you specify, their type (dir or file) and whether they are hidden. <br />You could modify it to do other things too.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">listDirs</span><span class="keyword">(</span><span class="default">$where</span><span class="keyword">){<br />echo </span><span class="string">"&lt;table border=\"1\"&gt;&lt;tr&gt;&lt;td&gt;&lt;b&gt;Name&lt;/b&gt;&lt;/td&gt;&lt;td&gt;&lt;b&gt;Type&lt;/b&gt;&lt;/td&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"&lt;td&gt;&lt;b&gt;Invisible (Hidden)?&lt;/b&gt;&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;<br />    </span><span class="default">$itemHandler</span><span class="keyword">=</span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$where</span><span class="keyword">);<br />    </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    while((</span><span class="default">$item</span><span class="keyword">=</span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$itemHandler</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">){<br />        if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">)!=</span><span class="string">"."</span><span class="keyword">){<br />            if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">)){<br />                echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;</span><span class="default">$item</span><span class="string">&lt;/td&gt;&lt;td&gt;Directory&lt;/td&gt;&lt;td&gt;No&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;<br />            }else{<br />                echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;</span><span class="default">$item</span><span class="string">&lt;/td&gt;&lt;td&gt;File&lt;/td&gt;&lt;td&gt;No&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;<br />            }<br />            </span><span class="default">$i</span><span class="keyword">++;<br />        }else{<br />            if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">)){<br />                echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;</span><span class="default">$item</span><span class="string">&lt;/td&gt;&lt;td&gt;Directory&lt;/td&gt;&lt;td&gt;Yes&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;<br />            }else{<br />                echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;</span><span class="default">$item</span><span class="string">&lt;/td&gt;&lt;td&gt;File&lt;/td&gt;&lt;td&gt;Yes&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;<br />            }<br />            </span><span class="default">$i</span><span class="keyword">++;<br />        }<br />       }<br />echo </span><span class="string">"&lt;/table&gt;"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>Then call it like this.<br /><span class="default">&lt;?php<br />listDirs</span><span class="keyword">(</span><span class="default">DIR</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Example:<br /><span class="default">&lt;?php<br />listDirs</span><span class="keyword">(</span><span class="string">"/tests/directorylisting"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />You get a table like this.<br /><br />Name    Type    Invisible (Hidden)?<br />.    Directory    Yes<br />..    Directory    Yes<br />.DS_Store    File    Yes<br />.localized    File    Yes<br />index.php    File    No<br />OOOLS    Directory    No<br />QwerpWiki.php    File    No</span></code></div>
  </div>
 </div>
  <div class="note" id="90941">  <div class="votes">
    <div id="Vu90941">
    <a href="/manual/vote-note.php?id=90941&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90941">
    <a href="/manual/vote-note.php?id=90941&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90941" title="44% like this...">
    -3
    </div>
  </div>
  <a href="#90941" class="name">
  <strong class="user"><em>DaveRandom</em></strong></a><a class="genanchor" href="#90941"> &para;</a><div class="date" title="2009-05-17 07:39"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90941">
<div class="phpcode"><code><span class="html">A very flexible function to recursively list all files in a directory with the option to perform a custom set of actions on those files and/or include extra information about them in the returned data.<br /><br /> ----------<br /><br /> SYNTAX:<br />   $array = process_dir ( $dir , $recursive = FALSE )<br />        $dir  (STRING)   =  Directory to process<br />  $recursive  (BOOLEAN)  =  [Optional] Recursive if set to TRUE<br /><br /> RETURN VALUES:<br />  The function returns an indexed array, one entry for every file. Each entry is an associative array, containing the basic information 'filename' (name of file) and 'dirpath' (directory component of path to file), and any additional keys you configure. Returns FALSE on failure.<br /><br /> ----------<br /><br />  To allow you to configure another key, the entry for each file is stored in an array, "$entry" for each iteration. You can easily return any additional data for a given file using $entry['keyname'] = ... (Note that this data can be any variable type - string, bool, float, resource etc)<br /><br />  There is a string variable "$path" available, which contains the full path of the current file, relative to the initial "$dir" supplied at function call. This data is also available in it's constituent parts, "$dir" and "$file". Actions for each file can be constructed on the basis of these variables. The variables "$list", "$handle" and "$recursive" should not be used within your code.<br /><br /> ----------<br /><br /> Simply insert you code into the sections indicated by the comments below and your away!<br /><br /> The following example returns filename, filepath, and file modified time (in a human-readable string) for all items, filesize for all files but not directories, and a resource stream for all files with 'log' in the filename (but not *.log files).<br /><br /><span class="default">&lt;?php<br /><br />  </span><span class="keyword">function </span><span class="default">process_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">,</span><span class="default">$recursive </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">) {<br />    if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {<br />      for (</span><span class="default">$list </span><span class="keyword">= array(),</span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">); (</span><span class="default">FALSE </span><span class="keyword">!== (</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)));) {<br />        if ((</span><span class="default">$file </span><span class="keyword">!= </span><span class="string">'.' </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">'..'</span><span class="keyword">) &amp;&amp; (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">= </span><span class="default">$dir</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">))) {<br />          if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">) &amp;&amp; (</span><span class="default">$recursive</span><span class="keyword">)) {<br />            </span><span class="default">$list </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$list</span><span class="keyword">, </span><span class="default">process_dir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">));<br />          } else {<br />            </span><span class="default">$entry </span><span class="keyword">= array(</span><span class="string">'filename' </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">, </span><span class="string">'dirpath' </span><span class="keyword">=&gt; </span><span class="default">$dir</span><span class="keyword">);<br /><br /> </span><span class="comment">//---------------------------------------------------------//<br /> //                     - SECTION 1 -                       //<br /> //          Actions to be performed on ALL ITEMS           //<br /> //-----------------    Begin Editable    ------------------//<br /><br />  </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'modtime'</span><span class="keyword">] = </span><span class="default">filemtime</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br /><br /> </span><span class="comment">//-----------------     End Editable     ------------------//<br />            </span><span class="keyword">do if (!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)) {<br /> </span><span class="comment">//---------------------------------------------------------//<br /> //                     - SECTION 2 -                       //<br /> //         Actions to be performed on FILES ONLY           //<br /> //-----------------    Begin Editable    ------------------//<br /><br />  </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">] = </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br />  if (</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,</span><span class="default">PATHINFO_BASENAME</span><span class="keyword">),</span><span class="string">'log'</span><span class="keyword">)) {<br />    if (!</span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'handle'</span><span class="keyword">] = </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,</span><span class="default">r</span><span class="keyword">)) </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'handle'</span><span class="keyword">] = </span><span class="string">"FAIL"</span><span class="keyword">;<br />  }<br />  <br /> </span><span class="comment">//-----------------     End Editable     ------------------//<br />              </span><span class="keyword">break;<br />            } else {<br /> </span><span class="comment">//---------------------------------------------------------//<br /> //                     - SECTION 3 -                       //<br /> //       Actions to be performed on DIRECTORIES ONLY       //<br /> //-----------------    Begin Editable    ------------------//<br /><br /> //-----------------     End Editable     ------------------//<br />              </span><span class="keyword">break;<br />            } while (</span><span class="default">FALSE</span><span class="keyword">);<br />            </span><span class="default">$list</span><span class="keyword">[] = </span><span class="default">$entry</span><span class="keyword">;<br />          }<br />        }<br />      }<br />      </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br />      return </span><span class="default">$list</span><span class="keyword">;<br />    } else return </span><span class="default">FALSE</span><span class="keyword">;<br />  }<br />    <br />  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">process_dir</span><span class="keyword">(</span><span class="string">'C:/webserver/Apache2/httpdocs/processdir'</span><span class="keyword">,</span><span class="default">TRUE</span><span class="keyword">);<br /><br /> </span><span class="comment">// Output each opened file and then close<br />  </span><span class="keyword">foreach (</span><span class="default">$result </span><span class="keyword">as </span><span class="default">$file</span><span class="keyword">) {<br />    if (</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">[</span><span class="string">'handle'</span><span class="keyword">])) {<br />        echo </span><span class="string">"\n\nFILE (" </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">[</span><span class="string">'dirpath'</span><span class="keyword">].</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">[</span><span class="string">'filename'</span><span class="keyword">] . </span><span class="string">"):\n\n" </span><span class="keyword">. </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">[</span><span class="string">'handle'</span><span class="keyword">], </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">[</span><span class="string">'dirpath'</span><span class="keyword">].</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">[</span><span class="string">'filename'</span><span class="keyword">]));<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">[</span><span class="string">'handle'</span><span class="keyword">]);<br />    }<br />  }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90770">  <div class="votes">
    <div id="Vu90770">
    <a href="/manual/vote-note.php?id=90770&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90770">
    <a href="/manual/vote-note.php?id=90770&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90770" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#90770" class="name">
  <strong class="user"><em>HeadRoom</em></strong></a><a class="genanchor" href="#90770"> &para;</a><div class="date" title="2009-05-08 12:08"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90770">
<div class="phpcode"><code><span class="html">Thought I would include what I wrote to get a random image from a directory.
<br />
<br /><span class="default">&lt;?php
<br />$image_dir </span><span class="keyword">= </span><span class="string">'images'</span><span class="keyword">;
<br /></span><span class="default">$count </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />if (</span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$image_dir</span><span class="keyword">)) {
<br />    </span><span class="default">$retval </span><span class="keyword">= array();
<br />    while (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">))) {
<br />        if ((</span><span class="default">$file </span><span class="keyword">&lt;&gt; </span><span class="string">"."</span><span class="keyword">) &amp;&amp; (</span><span class="default">$file </span><span class="keyword">&lt;&gt; </span><span class="string">".."</span><span class="keyword">)) {
<br />        </span><span class="default">$retval</span><span class="keyword">[</span><span class="default">$count</span><span class="keyword">] = </span><span class="default">$file</span><span class="keyword">;
<br />        </span><span class="default">$count </span><span class="keyword">= </span><span class="default">$count </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;
<br />            }
<br />    }
<br />
<br />    </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br />}
<br /></span><span class="default">shuffle</span><span class="keyword">(</span><span class="default">$retval</span><span class="keyword">);
<br /></span><span class="default">$current_image </span><span class="keyword">= </span><span class="default">$retval</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br /></span><span class="default">?&gt;
<br /></span>
<br />[NOTE BY danbrown AT php DOT net: Contains a bugfix/typofix inspired by 'ffd8' on 19-JUN-09.]</span></code></div>
  </div>
 </div>
  <div class="note" id="82529">  <div class="votes">
    <div id="Vu82529">
    <a href="/manual/vote-note.php?id=82529&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82529">
    <a href="/manual/vote-note.php?id=82529&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82529" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#82529" class="name">
  <strong class="user"><em>info at agentur-obermaier dot de</em></strong></a><a class="genanchor" href="#82529"> &para;</a><div class="date" title="2008-04-15 04:13"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82529">
<div class="phpcode"><code><span class="html">This is a nice quick full dir read - sorry for my bad english ;)
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">ReadDirs</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">,</span><span class="default">$em</span><span class="keyword">){
<br />    if (</span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {
<br />    while (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">))) {
<br />        if (</span><span class="default">$file </span><span class="keyword">!= </span><span class="string">"." </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">".." </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">"Thumb.db"</span><span class="keyword">) {
<br />            if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">)){
<br />                echo </span><span class="default">$em</span><span class="keyword">.</span><span class="string">"&amp;raquo; "</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">.</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;
<br />                </span><span class="default">ReadDirs</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">,</span><span class="default">$em</span><span class="keyword">.</span><span class="string">"&amp;nbsp;&amp;nbsp;"</span><span class="keyword">);
<br />            }
<br />        }
<br />    }
<br />    </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95458">  <div class="votes">
    <div id="Vu95458">
    <a href="/manual/vote-note.php?id=95458&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95458">
    <a href="/manual/vote-note.php?id=95458&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95458" title="38% like this...">
    -3
    </div>
  </div>
  <a href="#95458" class="name">
  <strong class="user"><em>yasirlayth at live dot com</em></strong></a><a class="genanchor" href="#95458"> &para;</a><div class="date" title="2010-01-04 05:36"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95458">
<div class="phpcode"><code><span class="html">this simple function will index the directories and sub-directories of a given dir
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">get_dirs</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">){
<br />    global </span><span class="default">$dirs</span><span class="keyword">;
<br />    if (!isset(</span><span class="default">$dirs</span><span class="keyword">)){</span><span class="default">$dirs </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;}
<br />    if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">) !== </span><span class="string">'\\'</span><span class="keyword">){</span><span class="default">$dir </span><span class="keyword">.= </span><span class="string">'\\'</span><span class="keyword">;}
<br />    if (</span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)){
<br />        while (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">))){
<br />            if (</span><span class="default">filetype</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">) === </span><span class="string">'dir' </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">"." </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">".."</span><span class="keyword">){
<br />                </span><span class="default">clearstatcache</span><span class="keyword">();
<br />                </span><span class="default">$dirs </span><span class="keyword">.= </span><span class="default">$file </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;
<br />                </span><span class="default">get_dirs</span><span class="keyword">(</span><span class="default">$dir </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">);
<br />            }
<br />        }
<br />        </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br />    }
<br />    return </span><span class="default">$dirs</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115645">  <div class="votes">
    <div id="Vu115645">
    <a href="/manual/vote-note.php?id=115645&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115645">
    <a href="/manual/vote-note.php?id=115645&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115645" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#115645" class="name">
  <strong class="user"><em>garvitdelhi at gmail dot com</em></strong></a><a class="genanchor" href="#115645"> &para;</a><div class="date" title="2014-08-31 06:10"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115645">
<div class="phpcode"><code><span class="html">this function recurrsively goes to a particular depth and stops after the depth is reached.<br /><br />function read_path($root = '.', $depth = 1) {<br />        if($depth == 0) {<br />            return;<br />        }<br />        $last_letter  = $root[strlen($root)-1];<br />          $root  = ($last_letter == '\\' || $last_letter == '/') ? $root : $root.DIRECTORY_SEPARATOR;<br />          $files  = array('files'=&gt;array(), 'dirs'=&gt;array());<br />          if ($handle = opendir($root)) {<br />              while (false !== ($file = readdir($handle))) {<br />                if ($file == '.' || $file == '..') {<br />                      continue;<br />                }<br />                $file  = $root.$file;<br />                if (is_dir($file)) {<br />                      $directory_path = $file.DIRECTORY_SEPARATOR;<br />                    $files['dirs'][$directory_path]  = NULL;<br />                } elseif (is_file($file)) {<br />                    $files['files'][]  = $file;<br />                }<br />              }<br />              closedir($handle);<br />        }<br />          $done = [$root=&gt;$files];<br />          foreach ($done[$root]['dirs'] as $key=&gt;$value) {<br />              $done[$root]['dirs'][$key] = $this-&gt;read_path($key, $depth-1);<br />          }<br />          return $done[$root];<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="122801">  <div class="votes">
    <div id="Vu122801">
    <a href="/manual/vote-note.php?id=122801&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122801">
    <a href="/manual/vote-note.php?id=122801&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122801" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#122801" class="name">
  <strong class="user"><em>craig dot edwards at comech dot co dot uk</em></strong></a><a class="genanchor" href="#122801"> &para;</a><div class="date" title="2018-06-05 01:16"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122801">
<div class="phpcode"><code><span class="html">Please be aware that readdir() and opendir() etc will return sorted directory listings automatically on some operating systems, whilst others it will not.<br /><br />On later versions of windows, you can usually be guaranteed alphabetically sorted file listings from readdir(), and on Linux there is no such guarantee. If you require any particular sort order you should read the results to an array and use asort() or rsort() on it, or similar, to get the results into the order you need.</span></code></div>
  </div>
 </div>
  <div class="note" id="77776">  <div class="votes">
    <div id="Vu77776">
    <a href="/manual/vote-note.php?id=77776&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77776">
    <a href="/manual/vote-note.php?id=77776&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77776" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#77776" class="name">
  <strong class="user"><em>skysama at googles_email dot com</em></strong></a><a class="genanchor" href="#77776"> &para;</a><div class="date" title="2007-09-12 10:23"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77776">
<div class="phpcode"><code><span class="html">Yet another view files by extension<br /><br />/* NOTE:<br /> *  /a-d = do not include directories<br /> *  /b   = show files in bare mode ( no dates or filesize )<br /> */<br /><br /><span class="default">&lt;?php<br />$dir </span><span class="keyword">= </span><span class="string">'.\\img\\'</span><span class="keyword">;    </span><span class="comment">// reminder: escape your slashes<br /></span><span class="default">$filetype </span><span class="keyword">= </span><span class="string">"*.png"</span><span class="keyword">;<br /></span><span class="default">$filelist </span><span class="keyword">= </span><span class="default">shell_exec</span><span class="keyword">( </span><span class="string">"dir </span><span class="keyword">{</span><span class="default">$dir</span><span class="keyword">}{</span><span class="default">$filetype</span><span class="keyword">}</span><span class="string"> /a-d /b" </span><span class="keyword">);<br /></span><span class="default">$file_arr </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">( </span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$filelist </span><span class="keyword">);<br /></span><span class="default">array_pop</span><span class="keyword">( </span><span class="default">$file_arr </span><span class="keyword">); </span><span class="comment">// last line is always blank<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$file_arr </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122318">  <div class="votes">
    <div id="Vu122318">
    <a href="/manual/vote-note.php?id=122318&amp;page=function.readdir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122318">
    <a href="/manual/vote-note.php?id=122318&amp;page=function.readdir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122318" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#122318" class="name">
  <strong class="user"><em>osamahussain897 at gmail dot com</em></strong></a><a class="genanchor" href="#122318"> &para;</a><div class="date" title="2018-01-27 08:40"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122318">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="string">'../'</span><span class="keyword">)) {<br />    <br />    while(</span><span class="default">$entry </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)){<br />        </span><span class="default">$ent</span><span class="keyword">[] = </span><span class="default">$entry</span><span class="keyword">;<br />    }<br />    <br />    echo </span><span class="default">$ent</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]; </span><span class="comment">// Access To Custom Directory or File;<br />    </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.readdir&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.readdir.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.dir.php" title="dir">dir</a>
                        </li>
                                                <li class="">
                            <a href="function.getcwd.php" title="getcwd">getcwd</a>
                        </li>
                                                <li class="">
                            <a href="function.opendir.php" title="opendir">opendir</a>
                        </li>
                                                <li class="current">
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
