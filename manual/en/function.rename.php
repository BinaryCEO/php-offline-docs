<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: rename - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.rename.php">
 <link rel="shorturl" href="https://www.php.net/rename">
 <link rel="alternate" href="https://www.php.net/rename" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.realpath-cache-size.php">
 <link rel="next" href="https://www.php.net/manual/en/function.rewind.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.rename.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.rename.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.rename.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.rename.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.rename.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.rename.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.rename.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.rename.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.rename.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.rename.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.rename.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Renames a file or directory" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: rename - Manual" />
<meta name="twitter:description" content="Renames a file or directory" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: rename - Manual" />
<meta itemprop="description" content="Renames a file or directory" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Renames a file or directory" />

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
        <a href="function.rewind.php">
          rewind &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.realpath-cache-size.php">
          &laquo; realpath_cache_size        </a>
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
            <option value='en/function.rename.php' selected="selected">English</option>
            <option value='de/function.rename.php'>German</option>
            <option value='es/function.rename.php'>Spanish</option>
            <option value='fr/function.rename.php'>French</option>
            <option value='it/function.rename.php'>Italian</option>
            <option value='ja/function.rename.php'>Japanese</option>
            <option value='pt_BR/function.rename.php'>Brazilian Portuguese</option>
            <option value='ru/function.rename.php'>Russian</option>
            <option value='tr/function.rename.php'>Turkish</option>
            <option value='uk/function.rename.php'>Ukrainian</option>
            <option value='zh/function.rename.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.rename" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">rename</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">rename</span> &mdash; <span class="dc-title">Renames a file or directory</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.rename-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>rename</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$from</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$to</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></span> <code class="parameter">$context</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Attempts to rename <code class="parameter">from</code> to
   <code class="parameter">to</code>, moving it between directories if necessary.
   If renaming a file and <code class="parameter">to</code> exists,
   it will be overwritten. If renaming a directory and
   <code class="parameter">to</code> exists,
   this function will emit a warning.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.rename-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">from</code></dt>
     <dd>
      <p class="para">
       The old name.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        The wrapper used in <code class="parameter">from</code>
        <em>must</em> match the wrapper used in
        <code class="parameter">to</code>.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">to</code></dt>
     <dd>
      <p class="para">
       The new name.
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <span class="simpara">
         On Windows, if <code class="parameter">to</code> already exists, it must be writable.
         Otherwise <span class="function"><strong>rename()</strong></span> fails and issues <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>.
        </span>
       </p></blockquote>
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


 <div class="refsect1 returnvalues" id="refsect1-function.rename-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.rename-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2420">
    <p><strong>Example #1 Example with <span class="function"><strong>rename()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />rename</span><span style="color: #007700">(</span><span style="color: #DD0000">"/tmp/tmp_file.txt"</span><span style="color: #007700">, </span><span style="color: #DD0000">"/home/user/login/docs/my_file.txt"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.rename-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.copy.php" class="function" rel="rdfs-seeAlso">copy()</a> - Copies file</span></li>
    <li><span class="function"><a href="function.unlink.php" class="function" rel="rdfs-seeAlso">unlink()</a> - Deletes a file</span></li>
    <li><span class="function"><a href="function.move-uploaded-file.php" class="function" rel="rdfs-seeAlso">move_uploaded_file()</a> - Moves an uploaded file to a new location</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/rename.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.rename%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.rename&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.rename.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">27 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="97347">  <div class="votes">
    <div id="Vu97347">
    <a href="/manual/vote-note.php?id=97347&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97347">
    <a href="/manual/vote-note.php?id=97347&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97347" title="74% like this...">
    197
    </div>
  </div>
  <a href="#97347" class="name">
  <strong class="user"><em>andrew at 21cv dot co dot uk</em></strong></a><a class="genanchor" href="#97347"> &para;</a><div class="date" title="2010-04-15 05:19"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97347">
<div class="phpcode"><code><span class="html">Code first, then explanation.<br /><br /><span class="default">&lt;?php<br /><br /> rename </span><span class="keyword">(</span><span class="string">"/folder/file.ext"</span><span class="keyword">, </span><span class="string">"newfile.ext"</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />That doesn't rename the file within the folder, as you might assume, instead, it moves the file to whatever the PHP working directory is... Chances are you'll not find it in your FTP tree. Instead, use the following:<br /><br /><span class="default">&lt;?php<br /><br /> rename </span><span class="keyword">(</span><span class="string">"/folder/file.ext"</span><span class="keyword">, </span><span class="string">"/folder/newfile.ext"</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117590">  <div class="votes">
    <div id="Vu117590">
    <a href="/manual/vote-note.php?id=117590&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117590">
    <a href="/manual/vote-note.php?id=117590&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117590" title="72% like this...">
    33
    </div>
  </div>
  <a href="#117590" class="name">
  <strong class="user"><em>ben at indietorrent dot org</em></strong></a><a class="genanchor" href="#117590"> &para;</a><div class="date" title="2015-07-02 03:31"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117590">
<div class="phpcode"><code><span class="html">From the Changelog notes:<br /><br />"Warnings may be generated if the destination filesystem doesn't permit chown() or chmod() system calls to be made on files — for example, if the destination filesystem is a FAT filesystem."<br /><br />More explicitly, rename() may still return (bool) true, despite the warnings that result from the underlying calls to chown() or chmod(). This behavior can be misleading absent a deeper understanding of the underlying mechanics. To rename across filesystems, PHP "fakes it" by calling copy(), unlink(), chown(), and chmod() (not necessarily in that order). See PHP bug #50676 for more information.<br /><br />On UNIX-like operating systems, filesystems may be mounted with an explicit uid and/or gid (for example, with mount options "uid=someuser,gid=somegroup"). Attempting to call rename() with such a destination filesystem will cause an "Operation not permitted" warning, even though the file is indeed renamed and rename() returns (bool) true.<br /><br />This is not a bug. Either handle the warning as is appropriate to your use-case, or call copy() and then unlink(), which will avoid the doomed calls to chown() and chmod(), thereby eliminating the warning.</span></code></div>
  </div>
 </div>
  <div class="note" id="113943">  <div class="votes">
    <div id="Vu113943">
    <a href="/manual/vote-note.php?id=113943&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113943">
    <a href="/manual/vote-note.php?id=113943&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113943" title="70% like this...">
    18
    </div>
  </div>
  <a href="#113943" class="name">
  <strong class="user"><em>mike</em></strong></a><a class="genanchor" href="#113943"> &para;</a><div class="date" title="2013-12-19 11:35"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113943">
<div class="phpcode"><code><span class="html">Important note - rename() does NOT work for *directories* across filesystems or devices. Only *files*<br /><br />You will get two warnings:<br />"PHP Warning:  rename(): The first argument to copy() function cannot be a directory in &lt;whatever&gt; on line &lt;whatever&gt;"<br />"PHP Warning:  rename(t2,/var/run/test/t2): Invalid cross-device link in &lt;whatever&gt; on line &lt;whatever&gt;"<br /><br />The copy() mentioned I assume is C's copy() and not PHP's copy() function. There is an associated bug in the Ubuntu bug system for this as well, that was escalated to bugs.php.net:<br /><a href="https://bugs.php.net/bug.php?id=54097" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=54097</a><br /><br />The only workarounds right now I believe is using PHP copy($source, $dest) and then on success, PHP unlink($source), or doing system("mv $source $dest") which is hokey, and should be surrounded by quotes for paths with spaces or other shell metacharacters, and possibly escaped for security.</span></code></div>
  </div>
 </div>
  <div class="note" id="2430">  <div class="votes">
    <div id="Vu2430">
    <a href="/manual/vote-note.php?id=2430&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd2430">
    <a href="/manual/vote-note.php?id=2430&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V2430" title="71% like this...">
    19
    </div>
  </div>
  <a href="#2430" class="name">
  <strong class="user"><em>michael-nospam at sal dot mik dot hyperlink dot net dot au</em></strong></a><a class="genanchor" href="#2430"> &para;</a><div class="date" title="1999-11-24 11:43"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom2430">
<div class="phpcode"><code><span class="html">Note, that on Unix, a rename is a beautiful way of getting atomic updates to files.
<br />
<br />Just copy the old contents (if necessary), and write the new contents into a new file, then rename over the original file.
<br />
<br />Any processes reading from the file will continue to do so, any processes trying to open the file while you're writing to it will get the old file (because you'll be writing to a temp file), and there is no "intermediate" time between there being a file, and there not being a file (or there being half a file).
<br />
<br />Oh, and this only works if you have the temp file and the destination file on the same filesystem (eg. partition/hard-disk).</span></code></div>
  </div>
 </div>
  <div class="note" id="84290">  <div class="votes">
    <div id="Vu84290">
    <a href="/manual/vote-note.php?id=84290&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84290">
    <a href="/manual/vote-note.php?id=84290&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84290" title="63% like this...">
    20
    </div>
  </div>
  <a href="#84290" class="name">
  <strong class="user"><em>Whooptydoo</em></strong></a><a class="genanchor" href="#84290"> &para;</a><div class="date" title="2008-07-07 09:11"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84290">
<div class="phpcode"><code><span class="html">If by any chance you end up with something equivalent to this:<br /><br /><span class="default">&lt;?php<br />rename</span><span class="keyword">(</span><span class="string">'/foo/bar'</span><span class="keyword">,</span><span class="string">'/foo/bar'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />It returns true. It's not documented.</span></code></div>
  </div>
 </div>
  <div class="note" id="92575">  <div class="votes">
    <div id="Vu92575">
    <a href="/manual/vote-note.php?id=92575&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92575">
    <a href="/manual/vote-note.php?id=92575&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92575" title="62% like this...">
    14
    </div>
  </div>
  <a href="#92575" class="name">
  <strong class="user"><em>pcdinh at phpvietnam dot net</em></strong></a><a class="genanchor" href="#92575"> &para;</a><div class="date" title="2009-07-29 09:10"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92575">
<div class="phpcode"><code><span class="html">For those who are still confused about the behavior of rename() in Linux and Windows (Windows XP) when target destination exists:<br /><br />I have tested rename($oldName, $targetName) in PHP 5.3.0 and PHP 5.2.9 on both OS and find that if a file named $targetName does exist before, it will be overwritten with the content of $oldName</span></code></div>
  </div>
 </div>
  <div class="note" id="102274">  <div class="votes">
    <div id="Vu102274">
    <a href="/manual/vote-note.php?id=102274&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102274">
    <a href="/manual/vote-note.php?id=102274&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102274" title="63% like this...">
    12
    </div>
  </div>
  <a href="#102274" class="name">
  <strong class="user"><em>Martin Pelletier</em></strong></a><a class="genanchor" href="#102274"> &para;</a><div class="date" title="2011-02-05 10:01"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102274">
<div class="phpcode"><code><span class="html">rename() is working on Linux/UNIX but not working on Windows on a directory containing a file formerly opened within the same script. The problem persists even after properly closing the file and flushing the buffer.<br /><br /><span class="default">&lt;?php<br />$fp </span><span class="keyword">= </span><span class="default">fopen </span><span class="keyword">(</span><span class="string">"./dir/ex.txt" </span><span class="keyword">, </span><span class="string">"r+"</span><span class="keyword">);<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">filesize</span><span class="keyword">(</span><span class="string">"../dir/ex.txt"</span><span class="keyword">));<br /></span><span class="default">ftruncate</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$text2 </span><span class="keyword">= </span><span class="string">"some value"</span><span class="keyword">;<br /></span><span class="default">fwrite </span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,  </span><span class="default">$text2 </span><span class="keyword">);<br /></span><span class="default">fflush</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br /></span><span class="default">fclose </span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />if (</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">))<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br /></span><span class="default">rename </span><span class="keyword">(</span><span class="string">"./dir"</span><span class="keyword">, </span><span class="string">".dir2"</span><span class="keyword">); </span><span class="comment">// will give a «permission denied» error<br /></span><span class="default">?&gt;<br /></span><br />Strangely it seem that the rename command is  executed BEFORE the handle closing on Windows.<br /><br />Inserting a sleep() command before the renaming cures the problem.<br /><br /><span class="default">&lt;?php<br />$fp </span><span class="keyword">= </span><span class="default">fopen </span><span class="keyword">(</span><span class="string">"./dir/ex.txt" </span><span class="keyword">, </span><span class="string">"r+"</span><span class="keyword">);<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">filesize</span><span class="keyword">(</span><span class="string">"../dir/ex.txt"</span><span class="keyword">));<br /></span><span class="default">ftruncate</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$text2 </span><span class="keyword">= </span><span class="string">"some value"</span><span class="keyword">;<br /></span><span class="default">fwrite </span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,  </span><span class="default">$text2 </span><span class="keyword">);<br /></span><span class="default">fflush</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br /></span><span class="default">fclose </span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />if (</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">))<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);    </span><span class="comment">// this does the trick<br /></span><span class="default">rename </span><span class="keyword">(</span><span class="string">"./dir"</span><span class="keyword">, </span><span class="string">".dir2"</span><span class="keyword">); </span><span class="comment">//no error <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="60341">  <div class="votes">
    <div id="Vu60341">
    <a href="/manual/vote-note.php?id=60341&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60341">
    <a href="/manual/vote-note.php?id=60341&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60341" title="62% like this...">
    11
    </div>
  </div>
  <a href="#60341" class="name">
  <strong class="user"><em>php at stock-consulting dot com</em></strong></a><a class="genanchor" href="#60341"> &para;</a><div class="date" title="2006-01-04 02:36"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60341">
<div class="phpcode"><code><span class="html">rename() fails with PHP4 and PHP5 under Windows if the destination file exists, regardless of file permission settings. I now use a function similar to that of ddoyle [at] canadalawbook [dot] ca, which first tries rename(), checks if it returned FALSE and then uses copy()/unlink() if it failed.<br /><br />However, copy() is, unlike rename(), NOT useable for "atomic updates". Another process may actually access the destination file while copy() is working. In such a case, the other process with perceive the file as empty or with incomplete content ("half written").</span></code></div>
  </div>
 </div>
  <div class="note" id="55733">  <div class="votes">
    <div id="Vu55733">
    <a href="/manual/vote-note.php?id=55733&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55733">
    <a href="/manual/vote-note.php?id=55733&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55733" title="62% like this...">
    6
    </div>
  </div>
  <a href="#55733" class="name">
  <strong class="user"><em>tomfelker at gmail dot com</em></strong></a><a class="genanchor" href="#55733"> &para;</a><div class="date" title="2005-08-11 02:51"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55733">
<div class="phpcode"><code><span class="html">Actually, I'm pretty sure that rename follows the convention of *nix rename(2) in overwriting the destination if it exists atomically (meaning that no other process will see the destination cease to exist, even for an instant).  This is useful because it allows you to build a file as a temp file, then rename it to where you want it to be, and nobody sees the file when it's half done.<br /><br />Probably rename($old, $new) with an existing new was caused by permission problems.  I bet the other problems you had were the result of not calling clearstatcache(), which can cause PHP to act like a file exists though it has since been deleted.</span></code></div>
  </div>
 </div>
  <div class="note" id="70639">  <div class="votes">
    <div id="Vu70639">
    <a href="/manual/vote-note.php?id=70639&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70639">
    <a href="/manual/vote-note.php?id=70639&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70639" title="62% like this...">
    4
    </div>
  </div>
  <a href="#70639" class="name">
  <strong class="user"><em>David Thole (root at thedarktrumpet.com)</em></strong></a><a class="genanchor" href="#70639"> &para;</a><div class="date" title="2006-10-22 12:20"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70639">
<div class="phpcode"><code><span class="html">As of PHP 5.1.4 compiled on a mac, using rename with spaces one should just use the space.   Take for example:<br /><br />rename("/tmp/somefile.tar", "/mnt/laptop storage/somefile.tar");<br /><br />If you use the backslash, like if you were cd-ing to the directory, rename will fail.  Example:<br /><br />rename("/tmp/somefile.tar", "/mnt/laptop\ storage/somefile.tar");<br /><br />While not really a bug, it did confuse me for a little bit while working on a backup script.</span></code></div>
  </div>
 </div>
  <div class="note" id="122218">  <div class="votes">
    <div id="Vu122218">
    <a href="/manual/vote-note.php?id=122218&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122218">
    <a href="/manual/vote-note.php?id=122218&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122218" title="60% like this...">
    1
    </div>
  </div>
  <a href="#122218" class="name">
  <strong class="user"><em>lord dot dracon at gmail dot com</em></strong></a><a class="genanchor" href="#122218"> &para;</a><div class="date" title="2018-01-03 11:14"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122218">
<div class="phpcode"><code><span class="html">rename() function apparently doesn't move files larger than 4 GB, even though the filesystem supports, when the operating system is 32 bits.<br /><br />Tested here with PHP 5.5.9 (x86), in Linux environment (Ubuntu 14.04.5 LTS i686), with source file (60 GB RAR file) in ext4 filesystem and destination is a external HD with NTFS filesystem. Only 4 GB was copied and RAR was corrupted: "Unexpected end of archive".<br /><br />Not tested if rename() can move files larger than 4 GB in 64-bit environment.</span></code></div>
  </div>
 </div>
  <div class="note" id="37425">  <div class="votes">
    <div id="Vu37425">
    <a href="/manual/vote-note.php?id=37425&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37425">
    <a href="/manual/vote-note.php?id=37425&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37425" title="58% like this...">
    7
    </div>
  </div>
  <a href="#37425" class="name">
  <strong class="user"><em>sophie at sitadelle dot com</em></strong></a><a class="genanchor" href="#37425"> &para;</a><div class="date" title="2003-11-14 08:22"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37425">
<div class="phpcode"><code><span class="html">Hello!<br />For unix/linux users: it is usefull to know that if you use rename() for a directory, the new one will be created with the current umask!</span></code></div>
  </div>
 </div>
  <div class="note" id="111603">  <div class="votes">
    <div id="Vu111603">
    <a href="/manual/vote-note.php?id=111603&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111603">
    <a href="/manual/vote-note.php?id=111603&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111603" title="55% like this...">
    1
    </div>
  </div>
  <a href="#111603" class="name">
  <strong class="user"><em>bcag2 at free dot fr</em></strong></a><a class="genanchor" href="#111603"> &para;</a><div class="date" title="2013-03-07 03:39"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111603">
<div class="phpcode"><code><span class="html">on windows (XP, vista, 7...) <a href="http://fr.wikipedia.org/wiki/Windows-1252" rel="nofollow" target="_blank">http://fr.wikipedia.org/wiki/Windows-1252</a>", if your file name contains accent, it doesn't work basically. So use iconv function to convert from utf-8 to cp1252 as bellow : <br /><span class="default">&lt;?php<br /> <br />$nomfichierinitial</span><span class="keyword">=</span><span class="default">iconv</span><span class="keyword">(</span><span class="string">"UTF-8"</span><span class="keyword">, </span><span class="string">"CP1252"</span><span class="keyword">, </span><span class="string">"C:\\wamp\\www\\tést.txt"</span><span class="keyword">);<br /></span><span class="default">$nomfichierfinal</span><span class="keyword">=</span><span class="string">"C:\\wamp\\www\\test.txt"</span><span class="keyword">;<br /></span><span class="default">rename</span><span class="keyword">(</span><span class="default">$nomfichierinitial</span><span class="keyword">, </span><span class="default">$nomfichierfinal</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59864">  <div class="votes">
    <div id="Vu59864">
    <a href="/manual/vote-note.php?id=59864&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59864">
    <a href="/manual/vote-note.php?id=59864&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59864" title="56% like this...">
    2
    </div>
  </div>
  <a href="#59864" class="name">
  <strong class="user"><em>php-public at macfreek dot nl</em></strong></a><a class="genanchor" href="#59864"> &para;</a><div class="date" title="2005-12-18 11:33"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59864">
<div class="phpcode"><code><span class="html">It is unclear what encoding the arguments of rename should have; For PHP 4.3, on a HFS+ filesystems, rename() did not handle UTF-8 strings, and returned an error.</span></code></div>
  </div>
 </div>
  <div class="note" id="56772">  <div class="votes">
    <div id="Vu56772">
    <a href="/manual/vote-note.php?id=56772&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56772">
    <a href="/manual/vote-note.php?id=56772&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56772" title="56% like this...">
    2
    </div>
  </div>
  <a href="#56772" class="name">
  <strong class="user"><em>tbrillon at gmail dot com</em></strong></a><a class="genanchor" href="#56772"> &para;</a><div class="date" title="2005-09-14 01:27"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56772">
<div class="phpcode"><code><span class="html">I needed to move a file to another folder regardless if that file existed in the target already so I wrote a small piece to append a unique number to each file.<br /><br />$rem = $_GET['file'];<br />$ticket = uniqid(rand(), true);<br /><br />rename("$rem", "www/home/storefile/$ticket$rem");<br /><br />the output looks like this - 6881432893ad4925a1.70147481filename.txt<br /><br />This also helps if you want different versions of the file stored.</span></code></div>
  </div>
 </div>
  <div class="note" id="56576">  <div class="votes">
    <div id="Vu56576">
    <a href="/manual/vote-note.php?id=56576&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56576">
    <a href="/manual/vote-note.php?id=56576&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56576" title="55% like this...">
    2
    </div>
  </div>
  <a href="#56576" class="name">
  <strong class="user"><em>ddoyle [at] canadalawbook [dot] ca</em></strong></a><a class="genanchor" href="#56576"> &para;</a><div class="date" title="2005-09-07 03:35"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56576">
<div class="phpcode"><code><span class="html">rename() definitely does not follow the *nix rename convention on WinXP with PHP 5.  If the $newname exists, it will return FALSE and $oldname and $newname will remain in their original state.  You can do something like this instead:<br /><br />function rename_win($oldfile,$newfile) {<br />   if (!rename($oldfile,$newfile)) {<br />      if (copy ($oldfile,$newfile)) {<br />         unlink($oldfile);<br />         return TRUE;<br />      }<br />      return FALSE;<br />   }<br />   return TRUE;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="90025">  <div class="votes">
    <div id="Vu90025">
    <a href="/manual/vote-note.php?id=90025&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90025">
    <a href="/manual/vote-note.php?id=90025&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90025" title="55% like this...">
    2
    </div>
  </div>
  <a href="#90025" class="name">
  <strong class="user"><em>andrew at iwebsolutions dot co dot uk</em></strong></a><a class="genanchor" href="#90025"> &para;</a><div class="date" title="2009-04-02 01:36"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90025">
<div class="phpcode"><code><span class="html">Note that this WILL NOT WORK if trying to rename a directory to a network share.
<br />
<br />e.g.
<br />rename('/home/user/me/dir1', '/mnt/shares/nfsmount/dir2') 
<br />
<br />will create a file called 'dir2' on the share and not a directory.
<br />
<br />This caught me out and my (quickest) solution was to use an exec and mv command:
<br />
<br /><span class="default">&lt;?php
<br />$cmd </span><span class="keyword">= </span><span class="string">'mv "/home/user/me/dir1" "/mnt/shares/nfsmount/dir2"'</span><span class="keyword">;
<br /></span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">, </span><span class="default">$return_val</span><span class="keyword">);
<br />
<br />if (</span><span class="default">$return_val </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {
<br />   echo </span><span class="string">"success"</span><span class="keyword">;
<br />} else {
<br />   echo </span><span class="string">"failed"</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="60906">  <div class="votes">
    <div id="Vu60906">
    <a href="/manual/vote-note.php?id=60906&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60906">
    <a href="/manual/vote-note.php?id=60906&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60906" title="53% like this...">
    1
    </div>
  </div>
  <a href="#60906" class="name">
  <strong class="user"><em>php at froghh dot de</em></strong></a><a class="genanchor" href="#60906"> &para;</a><div class="date" title="2006-01-19 03:00"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60906">
<div class="phpcode"><code><span class="html">Remark for "php at stock-consulting dot com"'s note:<br />This depends on the operating system.<br />On windows-systems you can't rename a file to an existing destination (ok, with tools you can - but they unlink the exisiting one before).</span></code></div>
  </div>
 </div>
  <div class="note" id="68704">  <div class="votes">
    <div id="Vu68704">
    <a href="/manual/vote-note.php?id=68704&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68704">
    <a href="/manual/vote-note.php?id=68704&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68704" title="52% like this...">
    2
    </div>
  </div>
  <a href="#68704" class="name">
  <strong class="user"><em>PHP at Drarok dot com</em></strong></a><a class="genanchor" href="#68704"> &para;</a><div class="date" title="2006-08-08 01:57"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68704">
<div class="phpcode"><code><span class="html">As described from the unlink() page:<br />You have to release any handles to the file before you can rename it (True on Windows, at least).<br />This will NOT work, you'll receive permission denied errors:<br /><span class="default">&lt;?php<br />    $fileHand </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'tempFile.txt'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />    </span><span class="default">rename</span><span class="keyword">( </span><span class="string">'tempFile.txt'</span><span class="keyword">, </span><span class="string">'tempFile2.txt' </span><span class="keyword">); </span><span class="comment">// Permission Denied!<br /></span><span class="default">?&gt;<br /></span><br />Simply close the handle to fix this:<br /><span class="default">&lt;?php<br />    $fileHand </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'tempFile.txt'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fileHand</span><span class="keyword">);<br />    </span><span class="default">rename</span><span class="keyword">( </span><span class="string">'tempFile.txt'</span><span class="keyword">, </span><span class="string">'tempFile2.txt' </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This has me scratching my head for some time, as the handle was opened at the top of a marge function, and the rename was at the bottom.</span></code></div>
  </div>
 </div>
  <div class="note" id="72163">  <div class="votes">
    <div id="Vu72163">
    <a href="/manual/vote-note.php?id=72163&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72163">
    <a href="/manual/vote-note.php?id=72163&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72163" title="52% like this...">
    1
    </div>
  </div>
  <a href="#72163" class="name">
  <strong class="user"><em>dev at islam-soft dot com</em></strong></a><a class="genanchor" href="#72163"> &para;</a><div class="date" title="2007-01-05 04:52"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72163">
<div class="phpcode"><code><span class="html">- rename extension of files <br /><br />changeext($directory, $ext1, $ext2, $verbose)<br /><br />i wrote this function to rename the extention of some files in a folder and sub-folders inside it ..<br /><br />parameter 1 :  the directory name <br />parameter 2 :  the first extention wich we want to replace<br />parameter 3 :  the new extention of files <br /><br />for a simple usage call the function : <br />changeext('dir', 'html', 'php',  'false');<br /><br />to change evry file name with extention html  into php  in the directory  dir<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">changeext</span><span class="keyword">(</span><span class="default">$directory</span><span class="keyword">, </span><span class="default">$ext1</span><span class="keyword">, </span><span class="default">$ext2</span><span class="keyword">, </span><span class="default">$verbose </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) {<br />  </span><span class="default">$num </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  if(</span><span class="default">$curdir </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$directory</span><span class="keyword">)) {<br />   while(</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$curdir</span><span class="keyword">)) {<br />     if(</span><span class="default">$file </span><span class="keyword">!= </span><span class="string">'.' </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">'..'</span><span class="keyword">) {<br /><br />       </span><span class="default">$srcfile </span><span class="keyword">= </span><span class="default">$directory </span><span class="keyword">. </span><span class="string">'/' </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">;<br />       </span><span class="default">$string  </span><span class="keyword">= </span><span class="string">"</span><span class="default">$file</span><span class="string">"</span><span class="keyword">;<br />       </span><span class="default">$str     </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$ext1</span><span class="keyword">);<br />       </span><span class="default">$str</span><span class="keyword">++;<br />       </span><span class="default">$newfile </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">$str</span><span class="keyword">);<br />       </span><span class="default">$newfile </span><span class="keyword">= </span><span class="default">$newfile</span><span class="keyword">.</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$ext2</span><span class="keyword">;<br />       </span><span class="default">$dstfile </span><span class="keyword">= </span><span class="default">$directory </span><span class="keyword">. </span><span class="string">'/' </span><span class="keyword">. </span><span class="default">$newfile</span><span class="keyword">;<br /><br />       if (</span><span class="default">eregi</span><span class="keyword">(</span><span class="string">"\.</span><span class="default">$ext1</span><span class="string">"</span><span class="keyword">,</span><span class="default">$file</span><span class="keyword">)) { </span><span class="comment"># Look at only files with a pre-defined extension<br />       </span><span class="default">$fileHand </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$srcfile</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />       </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fileHand</span><span class="keyword">);<br />       </span><span class="default">rename</span><span class="keyword">(</span><span class="default">$srcfile</span><span class="keyword">, </span><span class="default">$dstfile </span><span class="keyword">);<br />       }<br /><br />       if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$srcfile</span><span class="keyword">)) {<br />         </span><span class="default">$num </span><span class="keyword">+= </span><span class="default">changeext</span><span class="keyword">(</span><span class="default">$srcfile</span><span class="keyword">, </span><span class="default">$ext1</span><span class="keyword">, </span><span class="default">$ext2</span><span class="keyword">, </span><span class="default">$verbose</span><span class="keyword">);<br />       }<br />     }<br />   }<br />   </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$curdir</span><span class="keyword">);<br />  }<br />  return </span><span class="default">$num</span><span class="keyword">;<br />}<br /><br /></span><span class="default">changeext</span><span class="keyword">(</span><span class="string">'dir'</span><span class="keyword">, </span><span class="string">'html'</span><span class="keyword">, </span><span class="string">'php'</span><span class="keyword">,  </span><span class="string">'false'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />to remove the extention of files , just leave the parameter $ext2 blank ''</span></code></div>
  </div>
 </div>
  <div class="note" id="70905">  <div class="votes">
    <div id="Vu70905">
    <a href="/manual/vote-note.php?id=70905&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70905">
    <a href="/manual/vote-note.php?id=70905&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70905" title="52% like this...">
    1
    </div>
  </div>
  <a href="#70905" class="name">
  <strong class="user"><em>Eric (Themepark.com)</em></strong></a><a class="genanchor" href="#70905"> &para;</a><div class="date" title="2006-11-03 10:31"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70905">
<div class="phpcode"><code><span class="html">This was a fun one-- on Win XP, rename throws a "permission deined" if you try to rename across volumes.. i.e. rename("c:\windows\temp\x.txt", "g:\destination") will fail.</span></code></div>
  </div>
 </div>
  <div class="note" id="97262">  <div class="votes">
    <div id="Vu97262">
    <a href="/manual/vote-note.php?id=97262&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97262">
    <a href="/manual/vote-note.php?id=97262&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97262" title="51% like this...">
    1
    </div>
  </div>
  <a href="#97262" class="name">
  <strong class="user"><em>Morteza</em></strong></a><a class="genanchor" href="#97262"> &para;</a><div class="date" title="2010-04-10 12:04"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97262">
<div class="phpcode"><code><span class="html">This code renames all  files and folders in a specific directory to lower case: <br /><br /><span class="default">&lt;?php<br />$path </span><span class="keyword">= </span><span class="string">"my_doc"</span><span class="keyword">;<br /><br />function </span><span class="default">getDirectory</span><span class="keyword">( </span><span class="default">$path </span><span class="keyword">= </span><span class="string">'.'</span><span class="keyword">, </span><span class="default">$level </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">){<br /><br />    </span><span class="default">$ignore </span><span class="keyword">= array( </span><span class="string">'cgi-bin'</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">, </span><span class="string">'..' </span><span class="keyword">);<br /><br />    </span><span class="default">$dh </span><span class="keyword">= @</span><span class="default">opendir</span><span class="keyword">( </span><span class="default">$path </span><span class="keyword">);<br />    <br />    while( </span><span class="default">false </span><span class="keyword">!== ( </span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">( </span><span class="default">$dh </span><span class="keyword">) ) )<br />    {<br />        if( !</span><span class="default">in_array</span><span class="keyword">( </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$ignore </span><span class="keyword">) )<br />        {<br />            </span><span class="default">$spaces </span><span class="keyword">= </span><span class="default">str_repeat</span><span class="keyword">( </span><span class="string">'&amp;nbsp;'</span><span class="keyword">, ( </span><span class="default">$level </span><span class="keyword">* </span><span class="default">4 </span><span class="keyword">) );<br />            if( </span><span class="default">is_dir</span><span class="keyword">( </span><span class="string">"</span><span class="default">$path</span><span class="string">/</span><span class="default">$file</span><span class="string">" </span><span class="keyword">) )<br />            {<br />                echo </span><span class="string">"&lt;strong&gt;</span><span class="default">$spaces</span><span class="string"> </span><span class="default">$file</span><span class="string">&lt;/strong&gt;&lt;br /&gt;"</span><span class="keyword">;<br />                </span><span class="default">rename</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">.</span><span class="string">"\\"</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">, </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">.</span><span class="string">"\\"</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">));<br />                </span><span class="default">getDirectory</span><span class="keyword">( </span><span class="string">"</span><span class="default">$path</span><span class="string">/</span><span class="default">$file</span><span class="string">"</span><span class="keyword">, (</span><span class="default">$level</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">) );<br />                <br />            } <br />            else {<br />                echo </span><span class="string">"</span><span class="default">$spaces</span><span class="string"> </span><span class="default">$file</span><span class="string">&lt;br /&gt;"</span><span class="keyword">;<br />                </span><span class="default">rename</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">.</span><span class="string">"\\"</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">, </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">.</span><span class="string">"\\"</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">));<br />            }<br />        }   <br />    }<br />    </span><span class="default">closedir</span><span class="keyword">( </span><span class="default">$dh </span><span class="keyword">);<br />} <br /><br /></span><span class="default">getDirectory</span><span class="keyword">( </span><span class="default">$path </span><span class="keyword">, </span><span class="default">0 </span><span class="keyword">)<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127723">  <div class="votes">
    <div id="Vu127723">
    <a href="/manual/vote-note.php?id=127723&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127723">
    <a href="/manual/vote-note.php?id=127723&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127723" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#127723" class="name">
  <strong class="user"><em>gssj85 at gmail dot com</em></strong></a><a class="genanchor" href="#127723"> &para;</a><div class="date" title="2022-10-14 11:47"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127723">
<div class="phpcode"><code><span class="html">If you rename a file their handler metadata is still the as before.</span></code></div>
  </div>
 </div>
  <div class="note" id="120783">  <div class="votes">
    <div id="Vu120783">
    <a href="/manual/vote-note.php?id=120783&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120783">
    <a href="/manual/vote-note.php?id=120783&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120783" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120783" class="name">
  <strong class="user"><em>tomv</em></strong></a><a class="genanchor" href="#120783"> &para;</a><div class="date" title="2017-03-10 02:31"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120783">
<div class="phpcode"><code><span class="html">If $oldname and $newname are existing hard links referring to the same file, then rename() does nothing, and returns a success status.<br />(from the underlying libc rename() manual)<br />On the other hand "/bin/mv oldname newname" results in the removal of "oldname".</span></code></div>
  </div>
 </div>
  <div class="note" id="116568">  <div class="votes">
    <div id="Vu116568">
    <a href="/manual/vote-note.php?id=116568&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116568">
    <a href="/manual/vote-note.php?id=116568&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116568" title="50% like this...">
    0
    </div>
  </div>
  <a href="#116568" class="name">
  <strong class="user"><em>mike at mbfisher dot com</em></strong></a><a class="genanchor" href="#116568"> &para;</a><div class="date" title="2015-01-23 09:31"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116568">
<div class="phpcode"><code><span class="html">[Editor note: this works because SplFileObject has the __toString() method which returns the file path]
<br />
<br />Note that you can pass an SplFileInfo object as either argument:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment"># Assume a file 'foo' in the current directory
<br />
<br /></span><span class="default">rename</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">, new </span><span class="default">SplFileInfo</span><span class="keyword">(</span><span class="string">'bar'</span><span class="keyword">));
<br />
<br /></span><span class="comment"># foo is now bar!
<br />
<br /></span><span class="default">rename</span><span class="keyword">(new </span><span class="default">SplFileInfo</span><span class="keyword">(</span><span class="string">'bar'</span><span class="keyword">), </span><span class="string">'foo'</span><span class="keyword">);
<br />
<br /></span><span class="comment"># bar is now foo again
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115282">  <div class="votes">
    <div id="Vu115282">
    <a href="/manual/vote-note.php?id=115282&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115282">
    <a href="/manual/vote-note.php?id=115282&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115282" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#115282" class="name">
  <strong class="user"><em>Robert</em></strong></a><a class="genanchor" href="#115282"> &para;</a><div class="date" title="2014-06-27 08:38"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115282">
<div class="phpcode"><code><span class="html">If you use SplFileObject for the same file which<br />you want to rename you have to remove SplFileObject objec first.<br /><br /><span class="default">&lt;?php<br /><br />$filePath </span><span class="keyword">= </span><span class="string">'testFile.txt'</span><span class="keyword">;<br /></span><span class="default">$fileObj </span><span class="keyword">= new </span><span class="default">SplFileObject</span><span class="keyword">(  </span><span class="default">$filePath  </span><span class="keyword">);<br /></span><span class="default">rename</span><span class="keyword">( </span><span class="default">$filePath</span><span class="keyword">, </span><span class="string">'newName.txt'  </span><span class="keyword">);<br /><br /></span><span class="comment">// You will get - Permission denied error<br /><br /></span><span class="default">$filePath </span><span class="keyword">= </span><span class="string">'testFile.txt'</span><span class="keyword">;<br /></span><span class="default">$fileObj </span><span class="keyword">= new </span><span class="default">SplFileObject</span><span class="keyword">( </span><span class="string">'filePath.txt' </span><span class="keyword">);<br /></span><span class="default">$fileObj </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /></span><span class="default">rename</span><span class="keyword">( </span><span class="default">$filePath</span><span class="keyword">, </span><span class="string">'newName.txt'  </span><span class="keyword">);<br /><br /></span><span class="comment">// and now it is working.<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="13416">  <div class="votes">
    <div id="Vu13416">
    <a href="/manual/vote-note.php?id=13416&amp;page=function.rename&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13416">
    <a href="/manual/vote-note.php?id=13416&amp;page=function.rename&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13416" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#13416" class="name">
  <strong class="user"><em>pearcec at commnav dot com</em></strong></a><a class="genanchor" href="#13416"> &para;</a><div class="date" title="2001-06-15 01:17"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13416">
<div class="phpcode"><code><span class="html">If you rename one directory to another where the second directory exists as an empty directory it will not complain.
<br />
<br />Not what I expected.
<br />
<br />[pearcec@abe tmp]$ mkdir test1
<br />[pearcec@abe tmp]$ mkdir test2
<br />[pearcec@abe tmp]$ touch test1/test
<br />[pearcec@abe tmp]$ php
<br /><span class="default">&lt;?php
<br />rename</span><span class="keyword">(</span><span class="string">"test1"</span><span class="keyword">,</span><span class="string">"test2"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>X-Powered-By: PHP/4.0.5
<br />Content-type: text/html
<br />
<br />[pearcec@abe tmp]$ ls -al
<br />total 12
<br />drwxr-xr-x    3 pearcec  commnav      4096 Jun 15 13:17 .
<br />drwxr-xr-x   18 pearcec  commnav      4096 Jun 15 13:15 ..
<br />drwxr-xr-x    2 pearcec  commnav      4096 Jun 15 13:16 test2
<br />[pearcec@abe tmp]$ ls -la test2/
<br />total 8
<br />drwxr-xr-x    2 pearcec  commnav      4096 Jun 15 13:16 .
<br />drwxr-xr-x    3 pearcec  commnav      4096 Jun 15 13:17 ..
<br />-rw-r--r--    1 pearcec  commnav         0 Jun 15 13:16 test
<br />[pearcec@abe tmp]$</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.rename&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.rename.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
