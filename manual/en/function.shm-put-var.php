<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: shm_put_var - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.shm-put-var.php">
 <link rel="shorturl" href="https://www.php.net/shm-put-var">
 <link rel="alternate" href="https://www.php.net/shm-put-var" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.shm-has-var.php">
 <link rel="next" href="https://www.php.net/manual/en/function.shm-remove.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.shm-put-var.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.shm-put-var.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.shm-put-var.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.shm-put-var.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.shm-put-var.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.shm-put-var.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.shm-put-var.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.shm-put-var.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.shm-put-var.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.shm-put-var.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.shm-put-var.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Inserts or updates a variable in shared memory" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: shm_put_var - Manual" />
<meta name="twitter:description" content="Inserts or updates a variable in shared memory" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: shm_put_var - Manual" />
<meta itemprop="description" content="Inserts or updates a variable in shared memory" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Inserts or updates a variable in shared memory" />

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
        <a href="function.shm-remove.php">
          shm_remove &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.shm-has-var.php">
          &laquo; shm_has_var        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.sem.php'>Semaphore</a></li>      <li><a href='ref.sem.php'>Semaphore Functions</a></li>      </ul>
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
            <option value='en/function.shm-put-var.php' selected="selected">English</option>
            <option value='de/function.shm-put-var.php'>German</option>
            <option value='es/function.shm-put-var.php'>Spanish</option>
            <option value='fr/function.shm-put-var.php'>French</option>
            <option value='it/function.shm-put-var.php'>Italian</option>
            <option value='ja/function.shm-put-var.php'>Japanese</option>
            <option value='pt_BR/function.shm-put-var.php'>Brazilian Portuguese</option>
            <option value='ru/function.shm-put-var.php'>Russian</option>
            <option value='tr/function.shm-put-var.php'>Turkish</option>
            <option value='uk/function.shm-put-var.php'>Ukrainian</option>
            <option value='zh/function.shm-put-var.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.shm-put-var" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">shm_put_var</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">shm_put_var</span> &mdash; <span class="dc-title">Inserts or updates a variable in shared memory</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.shm-put-var-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>shm_put_var</strong></span>(<span class="methodparam"><span class="type"><a href="class.sysvsharedmemory.php" class="type SysvSharedMemory">SysvSharedMemory</a></span> <code class="parameter">$shm</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$key</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>shm_put_var()</strong></span> inserts or updates the
   <code class="parameter">value</code> with the given
   <code class="parameter">key</code>.
  </p>
  <p class="para">
   Warnings (<strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> level) will be issued if
   <code class="parameter">shm</code> is not a valid SysV shared memory
   index or if there was not enough shared memory remaining to complete your
   request.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.shm-put-var-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">shm</code></dt>
     <dd>
      <p class="para">
       A shared memory segment obtained from <span class="function"><a href="function.shm-attach.php" class="function">shm_attach()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">key</code></dt>
     <dd>
      <p class="para">
       The variable key.
      </p>
     </dd>
    
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The variable. All <a href="language.types.php" class="link">variable types</a>
       that <span class="function"><a href="function.serialize.php" class="function">serialize()</a></span> supports may be used: generally
       this means all types except for resources and some internal objects
       that cannot be serialized.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.shm-put-var-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.shm-put-var-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
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
        <code class="parameter">shm</code> expects a <span class="classname"><a href="class.sysvsharedmemory.php" class="classname">SysvSharedMemory</a></span>
        instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.shm-put-var-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.shm-get-var.php" class="function" rel="rdfs-seeAlso">shm_get_var()</a> - Returns a variable from shared memory</span></li>
    <li><span class="function"><a href="function.shm-has-var.php" class="function" rel="rdfs-seeAlso">shm_has_var()</a> - Check whether a specific entry exists</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sem/functions/shm-put-var.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.shm-put-var%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.shm-put-var&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.shm-put-var.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="88657">  <div class="votes">
    <div id="Vu88657">
    <a href="/manual/vote-note.php?id=88657&amp;page=function.shm-put-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88657">
    <a href="/manual/vote-note.php?id=88657&amp;page=function.shm-put-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88657" title="80% like this...">
    3
    </div>
  </div>
  <a href="#88657" class="name">
  <strong class="user"><em>Hendrik Klindworth</em></strong></a><a class="genanchor" href="#88657"> &para;</a><div class="date" title="2009-02-02 08:28"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88657">
<div class="phpcode"><code><span class="html">shm_put_var has no protection against race conditions. If two scripts insert the same key at the same time php might segfault.</span></code></div>
  </div>
 </div>
  <div class="note" id="82792">  <div class="votes">
    <div id="Vu82792">
    <a href="/manual/vote-note.php?id=82792&amp;page=function.shm-put-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82792">
    <a href="/manual/vote-note.php?id=82792&amp;page=function.shm-put-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82792" title="71% like this...">
    3
    </div>
  </div>
  <a href="#82792" class="name">
  <strong class="user"><em>jasonrlester at yahoo dot com</em></strong></a><a class="genanchor" href="#82792"> &para;</a><div class="date" title="2008-04-25 12:51"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82792">
<div class="phpcode"><code><span class="html">sadly troy is right<br /><br />the following script will return:<br /><br />resource(5) of type (stream)<br />int(0)<br /><br /><span class="default">&lt;?php<br /><br />define</span><span class="keyword">(</span><span class="string">"FOPEN_RESOURCE"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">"FOPEN_FILEPATH"</span><span class="keyword">, </span><span class="string">"/path/to/file"</span><span class="keyword">);<br /><br /></span><span class="default">$fopen_resource </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">FOPEN_FILEPATH</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$fopen_resource</span><span class="keyword">);<br /><br /></span><span class="default">$shm_id </span><span class="keyword">= </span><span class="default">shm_attach</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />if (</span><span class="default">$shm_id </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">)<br />{<br />    echo </span><span class="string">"Fail to attach shared memory.\n"</span><span class="keyword">;<br />}<br /><br />if (!</span><span class="default">shm_put_var</span><span class="keyword">(</span><span class="default">$shm_id</span><span class="keyword">, </span><span class="default">FOPEN_RESOURCE</span><span class="keyword">, </span><span class="default">$fopen_resource</span><span class="keyword">))<br />{<br />    echo </span><span class="string">"Failed to put var 1 in shared memory </span><span class="default">$shm_id</span><span class="string">.\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$sm_fopen_resource </span><span class="keyword">= </span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$shm_id</span><span class="keyword">, </span><span class="default">FOPEN_RESOURCE</span><span class="keyword">);<br />if (</span><span class="default">$sm_fopen_resource </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">)<br />{<br />    echo </span><span class="string">"Failed to retreive fopen_resource from Shared memory\r\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$sm_fopen_resource</span><span class="keyword">);<br /><br />if(</span><span class="default">$shm_id</span><span class="keyword">) </span><span class="default">shm_remove</span><span class="keyword">(</span><span class="default">$shm_id</span><span class="keyword">);<br />if(</span><span class="default">$fopen_resource</span><span class="keyword">) </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fopen_resource</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81619">  <div class="votes">
    <div id="Vu81619">
    <a href="/manual/vote-note.php?id=81619&amp;page=function.shm-put-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81619">
    <a href="/manual/vote-note.php?id=81619&amp;page=function.shm-put-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81619" title="66% like this...">
    1
    </div>
  </div>
  <a href="#81619" class="name">
  <strong class="user"><em>troy</em></strong></a><a class="genanchor" href="#81619"> &para;</a><div class="date" title="2008-03-06 07:02"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81619">
<div class="phpcode"><code><span class="html">This isn't entirely accurate. Not all variable types are supported, you can't put a resource variable into shared memory.<br /><br />When you try to take it out, it will be a zero.</span></code></div>
  </div>
 </div>
  <div class="note" id="94023">  <div class="votes">
    <div id="Vu94023">
    <a href="/manual/vote-note.php?id=94023&amp;page=function.shm-put-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94023">
    <a href="/manual/vote-note.php?id=94023&amp;page=function.shm-put-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94023" title="50% like this...">
    0
    </div>
  </div>
  <a href="#94023" class="name">
  <strong class="user"><em>ygbr at me dot com</em></strong></a><a class="genanchor" href="#94023"> &para;</a><div class="date" title="2009-10-12 02:25"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94023">
<div class="phpcode"><code><span class="html">Will it ever support resource identifiers like pfsockopen() pointers?<br /><br />The main problem is that when we run PHP as a Apache Module we never know in which process the next request will bind to, making impossible to have true persistent socket connections unless we can store the pointer to it or directly open the socket inode with fopen() like functions and retrieve the same resource pointer again.<br /><br />I thought I could use shm, but it seems that shm doesn't allow o store resource pointers... sad... :(</span></code></div>
  </div>
 </div>
  <div class="note" id="110926">  <div class="votes">
    <div id="Vu110926">
    <a href="/manual/vote-note.php?id=110926&amp;page=function.shm-put-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110926">
    <a href="/manual/vote-note.php?id=110926&amp;page=function.shm-put-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110926" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#110926" class="name">
  <strong class="user"><em>cong818 at gmail dot com</em></strong></a><a class="genanchor" href="#110926"> &para;</a><div class="date" title="2012-12-24 11:59"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110926">
<div class="phpcode"><code><span class="html">seems to me shm_put_var() doesn't work well with an integer key 0. I changed to 1 and it works like a charm.</span></code></div>
  </div>
 </div>
  <div class="note" id="97170">  <div class="votes">
    <div id="Vu97170">
    <a href="/manual/vote-note.php?id=97170&amp;page=function.shm-put-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97170">
    <a href="/manual/vote-note.php?id=97170&amp;page=function.shm-put-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97170" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#97170" class="name">
  <strong class="user"><em>orwellophile at spamtrak dot org</em></strong></a><a class="genanchor" href="#97170"> &para;</a><div class="date" title="2010-04-06 04:17"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97170">
<div class="phpcode"><code><span class="html">Quote: "Will it ever support resource identifiers like pfsockopen() pointers ...  we run PHP as a Apache Module ... no way to have true persistent sockets"<br /><br />Sorry, but that doesn't make sense to me... the socket is still persistent, if you wish to resume it, simply call pfsockopen() with the same host and port - and you will get the same socket.  There is no need to pass the actual resource variable.<br /><br />If there is something amazingly special and unique about each socket, you can do the following - and this should apply to any persistent resource:<br /><br />To differentiate between or obtain a specific resource - simply serialize/store an index of each resource's unique ID, along with the particulars that make that resource unique.<br /><br />You can get a unique resource identifier as an integer value like so:<br /><br /><span class="default">&lt;?php<br />   $rid </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"Resource id #"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br />   </span><span class="comment">// $rid = 2<br /></span><span class="default">?&gt;<br /></span><br />As pfsockopen() uses the hostname and port as a unique key to resume a persistent connection, you can add a DNS wildcard, or a number of manual entries in /etc/hosts (or windows equiv.) as follows:<br /><br />resource-0.host.com  192.168.100.1<br />resource-1.host.com  192.168.100.1<br />resource-2.host.com  192.168.100.1<br />resource-3.host.com  192.168.100.1<br /><br />Then, after consulting your serialized list of resources, you can connect to a specific resource by using it's resource id.<br /><br />eg:  $pf = pfsockopen("resource-$rid.host.com", $port, $timeout);<br /><br />The new resource will be identical to the original in every way.<br /><br />For file based stream resources you could do something similar with symlinks, or use the next method...<br /><br />For URL based or other resources with "paths" (I don't know if there *are* persistent functions that involve such things) you could differentiate between them with using extraneous information in the path.  eg:<br /><br />  <a href="http://host.com/resource-4/../script.php" rel="nofollow" target="_blank">http://host.com/resource-4/../script.php</a><br />  <a href="http://resource4@host.com/script.php" rel="nofollow" target="_blank">http://resource4@host.com/script.php</a><br />  /tmp/././././file.txt<br /><br />In the first example, the extraneous "resource-4" would be ignored by the webserver.<br /><br />In the second, the superfluous username would be ignored by the webserver.  (Something similar for mysql_pconnect could be done with multiple usernames).<br /><br />And in the the third example, four sequential occurrences of the "do nothing" string "./" would indicate resource #4. <br /><br />If this isn't enough, then you can use the fact that PHP shared memory resources are themselves interoperable with those created by their .c counterparts.   That allows you to write a thin .c application to handle the dirty work.<br /><br />Or you could attempt to reconnect to your own webserver, using persistent streams and the methods outlined above, to achieve the end result.   I can't think of an example of where something so extreme would be necessary, but I'm sure it's not outside the realm of possibility.<br /><br />I personally use an 117 MB binary database, which is stored in shared memory, both from the command line (using a complied .c application), and from the web (via PHP, and ftok()/shmop_open()/shmop_read()).</span></code></div>
  </div>
 </div>
  <div class="note" id="110903">  <div class="votes">
    <div id="Vu110903">
    <a href="/manual/vote-note.php?id=110903&amp;page=function.shm-put-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110903">
    <a href="/manual/vote-note.php?id=110903&amp;page=function.shm-put-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110903" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#110903" class="name">
  <strong class="user"><em>Jason Lester</em></strong></a><a class="genanchor" href="#110903"> &para;</a><div class="date" title="2012-12-21 09:28"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110903">
<div class="phpcode"><code><span class="html">Yes, it is possible to maintain a real level of resource persistence using shared memory. All vars in PHP are stored in common hashtables as zvals, including resource identifiers. There are hashtables available that outlive the request as long as the entire PHP process isn't shut down. All you need is to store the identifiers in such a hashtable and a way to keep track of them and you can receive the original resource.<br /><br />I don't know why PHP doesn't provide a way of setting/getting persistent resources, but it is likely do to the many types of SAPI's available for it and the fact that not all of them *can* facilitate this, including CGI which still if far from obsolete. <br /><br />Another problem is that having such access in userspace is bound to create issues where multiple php processes are trying to access the same resource. Looking at it from this angel you can see that there's really no safe way to safely use such getter/setters without a better synchronism scheme in PHP.</span></code></div>
  </div>
 </div>
  <div class="note" id="46149">  <div class="votes">
    <div id="Vu46149">
    <a href="/manual/vote-note.php?id=46149&amp;page=function.shm-put-var&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46149">
    <a href="/manual/vote-note.php?id=46149&amp;page=function.shm-put-var&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46149" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#46149" class="name">
  <strong class="user"><em>tomlove at gmail dot com</em></strong></a><a class="genanchor" href="#46149"> &para;</a><div class="date" title="2004-09-30 04:53"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46149">
<div class="phpcode"><code><span class="html">Use as few variable_keys as you can. With large arrays of data, rather make the array multi-dimensional and store under one variable_key than use variable_key as your index. The benefit is especially noticeable when repeated fetching from the end of the array is necessary and updates are less frequent.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.shm-put-var&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.shm-put-var.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.sem.php">Semaphore Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ftok.php" title="ftok">ftok</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-get-queue.php" title="msg_&#8203;get_&#8203;queue">msg_&#8203;get_&#8203;queue</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-queue-exists.php" title="msg_&#8203;queue_&#8203;exists">msg_&#8203;queue_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-receive.php" title="msg_&#8203;receive">msg_&#8203;receive</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-remove-queue.php" title="msg_&#8203;remove_&#8203;queue">msg_&#8203;remove_&#8203;queue</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-send.php" title="msg_&#8203;send">msg_&#8203;send</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-set-queue.php" title="msg_&#8203;set_&#8203;queue">msg_&#8203;set_&#8203;queue</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-stat-queue.php" title="msg_&#8203;stat_&#8203;queue">msg_&#8203;stat_&#8203;queue</a>
                        </li>
                                                <li class="">
                            <a href="function.sem-acquire.php" title="sem_&#8203;acquire">sem_&#8203;acquire</a>
                        </li>
                                                <li class="">
                            <a href="function.sem-get.php" title="sem_&#8203;get">sem_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.sem-release.php" title="sem_&#8203;release">sem_&#8203;release</a>
                        </li>
                                                <li class="">
                            <a href="function.sem-remove.php" title="sem_&#8203;remove">sem_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-attach.php" title="shm_&#8203;attach">shm_&#8203;attach</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-detach.php" title="shm_&#8203;detach">shm_&#8203;detach</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-get-var.php" title="shm_&#8203;get_&#8203;var">shm_&#8203;get_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-has-var.php" title="shm_&#8203;has_&#8203;var">shm_&#8203;has_&#8203;var</a>
                        </li>
                                                <li class="current">
                            <a href="function.shm-put-var.php" title="shm_&#8203;put_&#8203;var">shm_&#8203;put_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-remove.php" title="shm_&#8203;remove">shm_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-remove-var.php" title="shm_&#8203;remove_&#8203;var">shm_&#8203;remove_&#8203;var</a>
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
