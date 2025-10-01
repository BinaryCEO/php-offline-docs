<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: copy - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.copy.php">
 <link rel="shorturl" href="https://www.php.net/copy">
 <link rel="alternate" href="https://www.php.net/copy" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.clearstatcache.php">
 <link rel="next" href="https://www.php.net/manual/en/function.delete.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.copy.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.copy.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.copy.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.copy.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.copy.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.copy.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.copy.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.copy.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.copy.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.copy.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.copy.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Copies file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: copy - Manual" />
<meta name="twitter:description" content="Copies file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: copy - Manual" />
<meta itemprop="description" content="Copies file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Copies file" />

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
        <a href="function.delete.php">
          delete &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.clearstatcache.php">
          &laquo; clearstatcache        </a>
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
            <option value='en/function.copy.php' selected="selected">English</option>
            <option value='de/function.copy.php'>German</option>
            <option value='es/function.copy.php'>Spanish</option>
            <option value='fr/function.copy.php'>French</option>
            <option value='it/function.copy.php'>Italian</option>
            <option value='ja/function.copy.php'>Japanese</option>
            <option value='pt_BR/function.copy.php'>Brazilian Portuguese</option>
            <option value='ru/function.copy.php'>Russian</option>
            <option value='tr/function.copy.php'>Turkish</option>
            <option value='uk/function.copy.php'>Ukrainian</option>
            <option value='zh/function.copy.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.copy" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">copy</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">copy</span> &mdash; <span class="dc-title">Copies file</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.copy-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>copy</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$from</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$to</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></span> <code class="parameter">$context</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Makes a copy of the file <code class="parameter">from</code> to
   <code class="parameter">to</code>.
  </p>
  <p class="para">
   If you wish to move a file, use the <span class="function"><a href="function.rename.php" class="function">rename()</a></span> function.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.copy-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">from</code></dt>
     <dd>
      <p class="para">
       Path to the source file.
      </p>
     </dd>
    
    
     <dt><code class="parameter">to</code></dt>
     <dd>
      <p class="para">
       The destination path. If <code class="parameter">to</code> is a URL, the
       copy operation may fail if the wrapper does not support overwriting of
       existing files.
      </p>
      <div class="warning"><strong class="warning">Warning</strong>
       <p class="para">
        If the destination file already exists, it will be overwritten.
       </p>
      </div>
     </dd>
    
    
     <dt><code class="parameter">context</code></dt>
     <dd>
      <p class="para">
       A valid context resource created with 
       <span class="function"><a href="function.stream-context-create.php" class="function">stream_context_create()</a></span>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.copy-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.copy-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2337">
    <p><strong>Example #1 <span class="function"><strong>copy()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$file </span><span style="color: #007700">= </span><span style="color: #DD0000">'example.txt'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$newfile </span><span style="color: #007700">= </span><span style="color: #DD0000">'example.txt.bak'</span><span style="color: #007700">;<br /><br />if (!</span><span style="color: #0000BB">copy</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">, </span><span style="color: #0000BB">$newfile</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"failed to copy </span><span style="color: #0000BB">$file</span><span style="color: #DD0000">...\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.copy-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.move-uploaded-file.php" class="function" rel="rdfs-seeAlso">move_uploaded_file()</a> - Moves an uploaded file to a new location</span></li>
    <li><span class="function"><a href="function.rename.php" class="function" rel="rdfs-seeAlso">rename()</a> - Renames a file or directory</span></li>
    <li>The section of the manual about <a href="features.file-upload.php" class="link">handling file uploads</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/copy.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.copy%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.copy&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.copy.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="45357">  <div class="votes">
    <div id="Vu45357">
    <a href="/manual/vote-note.php?id=45357&amp;page=function.copy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45357">
    <a href="/manual/vote-note.php?id=45357&amp;page=function.copy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45357" title="71% like this...">
    244
    </div>
  </div>
  <a href="#45357" class="name">
  <strong class="user"><em>simonr_at_orangutan_dot_co_dot_uk</em></strong></a><a class="genanchor" href="#45357"> &para;</a><div class="date" title="2004-09-03 01:54"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45357">
<div class="phpcode"><code><span class="html">Having spent hours tacking down a copy() error: Permission denied , (and duly worrying about chmod on winXP) , its worth pointing out that the 'destination' needs to contain the actual file name ! --- NOT just the path to the folder you wish to copy into.......<br />DOH !<br />hope this saves somebody hours of fruitless debugging</span></code></div>
  </div>
 </div>
  <div class="note" id="62807">  <div class="votes">
    <div id="Vu62807">
    <a href="/manual/vote-note.php?id=62807&amp;page=function.copy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62807">
    <a href="/manual/vote-note.php?id=62807&amp;page=function.copy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62807" title="73% like this...">
    134
    </div>
  </div>
  <a href="#62807" class="name">
  <strong class="user"><em>cooper at asu dot ntu-kpi dot kiev dot ua</em></strong></a><a class="genanchor" href="#62807"> &para;</a><div class="date" title="2006-03-09 04:32"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62807">
<div class="phpcode"><code><span class="html">It take me a long time to find out what the problem is when i've got an error on copy(). It DOESN'T create any directories. It only copies to existing path. So create directories before. Hope i'll help,</span></code></div>
  </div>
 </div>
  <div class="note" id="83955">  <div class="votes">
    <div id="Vu83955">
    <a href="/manual/vote-note.php?id=83955&amp;page=function.copy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83955">
    <a href="/manual/vote-note.php?id=83955&amp;page=function.copy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83955" title="64% like this...">
    65
    </div>
  </div>
  <a href="#83955" class="name">
  <strong class="user"><em>steve a h</em></strong></a><a class="genanchor" href="#83955"> &para;</a><div class="date" title="2008-06-20 02:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83955">
<div class="phpcode"><code><span class="html">Don't forget; you can use copy on remote files, rather than doing messy fopen stuff.  e.g.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if(!@</span><span class="default">copy</span><span class="keyword">(</span><span class="string">'<a href="http://someserver.com/somefile.zip" rel="nofollow" target="_blank">http://someserver.com/somefile.zip</a>'</span><span class="keyword">,</span><span class="string">'./somefile.zip'</span><span class="keyword">))<br />{<br />    </span><span class="default">$errors</span><span class="keyword">= </span><span class="default">error_get_last</span><span class="keyword">();<br />    echo </span><span class="string">"COPY ERROR: "</span><span class="keyword">.</span><span class="default">$errors</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">];<br />    echo </span><span class="string">"&lt;br /&gt;\n"</span><span class="keyword">.</span><span class="default">$errors</span><span class="keyword">[</span><span class="string">'message'</span><span class="keyword">];<br />} else {<br />    echo </span><span class="string">"File copied from remote!"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104020">  <div class="votes">
    <div id="Vu104020">
    <a href="/manual/vote-note.php?id=104020&amp;page=function.copy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104020">
    <a href="/manual/vote-note.php?id=104020&amp;page=function.copy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104020" title="65% like this...">
    28
    </div>
  </div>
  <a href="#104020" class="name">
  <strong class="user"><em>promaty at gmail dot com</em></strong></a><a class="genanchor" href="#104020"> &para;</a><div class="date" title="2011-05-17 11:13"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104020">
<div class="phpcode"><code><span class="html">Here is a simple script that I use for removing and copying non-empty directories. Very useful when you are not sure what is the type of a file.<br /><br />I am using these for managing folders and zip archives for my website plugins.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// removes files and non-empty directories<br /></span><span class="keyword">function </span><span class="default">rrmdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">) {<br />  if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {<br />    </span><span class="default">$files </span><span class="keyword">= </span><span class="default">scandir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br />    foreach (</span><span class="default">$files </span><span class="keyword">as </span><span class="default">$file</span><span class="keyword">)<br />    if (</span><span class="default">$file </span><span class="keyword">!= </span><span class="string">"." </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">".."</span><span class="keyword">) </span><span class="default">rrmdir</span><span class="keyword">(</span><span class="string">"</span><span class="default">$dir</span><span class="string">/</span><span class="default">$file</span><span class="string">"</span><span class="keyword">);<br />    </span><span class="default">rmdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br />  }<br />  else if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br />} <br /><br /></span><span class="comment">// copies files and non-empty directories<br /></span><span class="keyword">function </span><span class="default">rcopy</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">$dst</span><span class="keyword">) {<br />  if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">)) </span><span class="default">rrmdir</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">);<br />  if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">)) {<br />    </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">);<br />    </span><span class="default">$files </span><span class="keyword">= </span><span class="default">scandir</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);<br />    foreach (</span><span class="default">$files </span><span class="keyword">as </span><span class="default">$file</span><span class="keyword">)<br />    if (</span><span class="default">$file </span><span class="keyword">!= </span><span class="string">"." </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">".."</span><span class="keyword">) </span><span class="default">rcopy</span><span class="keyword">(</span><span class="string">"</span><span class="default">$src</span><span class="string">/</span><span class="default">$file</span><span class="string">"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$dst</span><span class="string">/</span><span class="default">$file</span><span class="string">"</span><span class="keyword">); <br />  }<br />  else if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">)) </span><span class="default">copy</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">$dst</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Cheers!</span></code></div>
  </div>
 </div>
  <div class="note" id="111833">  <div class="votes">
    <div id="Vu111833">
    <a href="/manual/vote-note.php?id=111833&amp;page=function.copy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111833">
    <a href="/manual/vote-note.php?id=111833&amp;page=function.copy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111833" title="62% like this...">
    28
    </div>
  </div>
  <a href="#111833" class="name">
  <strong class="user"><em>absorbentshoulderman at gmail dot com</em></strong></a><a class="genanchor" href="#111833"> &para;</a><div class="date" title="2013-04-03 12:51"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111833">
<div class="phpcode"><code><span class="html">A nice simple trick if you need to make sure the folder exists first:<br /><br /><span class="default">&lt;?php<br /><br />$srcfile</span><span class="keyword">=</span><span class="string">'C:\File\Whatever\Path\Joe.txt'</span><span class="keyword">;<br /></span><span class="default">$dstfile</span><span class="keyword">=</span><span class="string">'G:\Shared\Reports\Joe.txt'</span><span class="keyword">;<br /></span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$dstfile</span><span class="keyword">), </span><span class="default">0777</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">copy</span><span class="keyword">(</span><span class="default">$srcfile</span><span class="keyword">, </span><span class="default">$dstfile</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />That simple.</span></code></div>
  </div>
 </div>
  <div class="note" id="126467">  <div class="votes">
    <div id="Vu126467">
    <a href="/manual/vote-note.php?id=126467&amp;page=function.copy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126467">
    <a href="/manual/vote-note.php?id=126467&amp;page=function.copy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126467" title="61% like this...">
    4
    </div>
  </div>
  <a href="#126467" class="name">
  <strong class="user"><em>someone at terrasim dot com</em></strong></a><a class="genanchor" href="#126467"> &para;</a><div class="date" title="2021-09-30 06:44"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126467">
<div class="phpcode"><code><span class="html">On Windows, php-7.4.19-Win32-vc15-x64 - copy() corrupted a 6GB zip file. Our only recourse was to write:<br /><br />function file_win_copy( $src, $dst ) {<br /> shell_exec( 'COPY "'.$src.'" "'.$dst.'"');<br /> return file_exists($dest);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="83920">  <div class="votes">
    <div id="Vu83920">
    <a href="/manual/vote-note.php?id=83920&amp;page=function.copy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83920">
    <a href="/manual/vote-note.php?id=83920&amp;page=function.copy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83920" title="60% like this...">
    9
    </div>
  </div>
  <a href="#83920" class="name">
  <strong class="user"><em>tom at r dot je</em></strong></a><a class="genanchor" href="#83920"> &para;</a><div class="date" title="2008-06-18 08:30"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83920">
<div class="phpcode"><code><span class="html">It's worth noting that copy() sets the destination file's last modified time/date.</span></code></div>
  </div>
 </div>
  <div class="note" id="91010">  <div class="votes">
    <div id="Vu91010">
    <a href="/manual/vote-note.php?id=91010&amp;page=function.copy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91010">
    <a href="/manual/vote-note.php?id=91010&amp;page=function.copy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91010" title="57% like this...">
    20
    </div>
  </div>
  <a href="#91010" class="name">
  <strong class="user"><em>gimmicklessgpt at gmail dot com</em></strong></a><a class="genanchor" href="#91010"> &para;</a><div class="date" title="2009-05-20 04:04"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91010">
<div class="phpcode"><code><span class="html">Here's a simple recursive function to copy entire directories
<br />
<br />Note to do your own check to make sure the directory exists that you first call it on.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">recurse_copy</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">,</span><span class="default">$dst</span><span class="keyword">) {
<br />    </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">);
<br />    @</span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$dst</span><span class="keyword">);
<br />    while(</span><span class="default">false </span><span class="keyword">!== ( </span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) ) {
<br />        if (( </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">'.' </span><span class="keyword">) &amp;&amp; ( </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">'..' </span><span class="keyword">)) {
<br />            if ( </span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$src </span><span class="keyword">. </span><span class="string">'/' </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">) ) {
<br />                </span><span class="default">recurse_copy</span><span class="keyword">(</span><span class="default">$src </span><span class="keyword">. </span><span class="string">'/' </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">,</span><span class="default">$dst </span><span class="keyword">. </span><span class="string">'/' </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">);
<br />            }
<br />            else { 
<br />                </span><span class="default">copy</span><span class="keyword">(</span><span class="default">$src </span><span class="keyword">. </span><span class="string">'/' </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">,</span><span class="default">$dst </span><span class="keyword">. </span><span class="string">'/' </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">);
<br />            }
<br />        }
<br />    }
<br />    </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117550">  <div class="votes">
    <div id="Vu117550">
    <a href="/manual/vote-note.php?id=117550&amp;page=function.copy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117550">
    <a href="/manual/vote-note.php?id=117550&amp;page=function.copy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117550" title="57% like this...">
    4
    </div>
  </div>
  <a href="#117550" class="name">
  <strong class="user"><em>hugo_2000 at gmx dot at</em></strong></a><a class="genanchor" href="#117550"> &para;</a><div class="date" title="2015-06-26 02:43"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117550">
<div class="phpcode"><code><span class="html">If you try to copy a file to itself - e.g. if the target directory is just a symlink to the source directory - copy will return false. just like on the command line.</span></code></div>
  </div>
 </div>
  <div class="note" id="93245">  <div class="votes">
    <div id="Vu93245">
    <a href="/manual/vote-note.php?id=93245&amp;page=function.copy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93245">
    <a href="/manual/vote-note.php?id=93245&amp;page=function.copy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93245" title="56% like this...">
    6
    </div>
  </div>
  <a href="#93245" class="name">
  <strong class="user"><em>eng-ayman at aymax dot net</em></strong></a><a class="genanchor" href="#93245"> &para;</a><div class="date" title="2009-08-30 05:48"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93245">
<div class="phpcode"><code><span class="html">some hosts disable copy() function and say its for security 
<br />
<br />and for some copy is important so this is and simple function that do same as copy function effect 
<br />
<br />how smart php can help us l like php 
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">function </span><span class="default">copyemz</span><span class="keyword">(</span><span class="default">$file1</span><span class="keyword">,</span><span class="default">$file2</span><span class="keyword">){
<br />          </span><span class="default">$contentx </span><span class="keyword">=@</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$file1</span><span class="keyword">);
<br />                   </span><span class="default">$openedfile </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file2</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">);
<br />                   </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$openedfile</span><span class="keyword">, </span><span class="default">$contentx</span><span class="keyword">);
<br />                   </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$openedfile</span><span class="keyword">);
<br />                    if (</span><span class="default">$contentx </span><span class="keyword">=== </span><span class="default">FALSE</span><span class="keyword">) {
<br />                    </span><span class="default">$status</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;
<br />                    }else </span><span class="default">$status</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;
<br />                    
<br />                    return </span><span class="default">$status</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118551">  <div class="votes">
    <div id="Vu118551">
    <a href="/manual/vote-note.php?id=118551&amp;page=function.copy&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118551">
    <a href="/manual/vote-note.php?id=118551&amp;page=function.copy&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118551" title="54% like this...">
    2
    </div>
  </div>
  <a href="#118551" class="name">
  <strong class="user"><em>Vinicio Coletti</em></strong></a><a class="genanchor" href="#118551"> &para;</a><div class="date" title="2015-12-26 11:03"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118551">
<div class="phpcode"><code><span class="html">Copying large files under Windows 8.1, from one NTFS filesystem to another NTFS filesystem, results in only the first 4 GiB copied and the rest of the file is ignored.<br /><br />So, if you think to have files larger than 4 GiB, instead of doing:<br />   copy($source,$destination);<br />it is much better to do something like:<br />   exec("xcopy $source $destination");<br /><br />I will check to see if this issue is valid also under Linux.<br />It depends on PHP not being compiled in 64 bit mode?</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.copy&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.copy.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
