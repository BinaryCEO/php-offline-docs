<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: umask - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.umask.php">
 <link rel="shorturl" href="https://www.php.net/umask">
 <link rel="alternate" href="https://www.php.net/umask" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.touch.php">
 <link rel="next" href="https://www.php.net/manual/en/function.unlink.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.umask.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.umask.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.umask.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.umask.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.umask.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.umask.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.umask.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.umask.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.umask.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.umask.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.umask.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Changes the current umask" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: umask - Manual" />
<meta name="twitter:description" content="Changes the current umask" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: umask - Manual" />
<meta itemprop="description" content="Changes the current umask" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Changes the current umask" />

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
        <a href="function.unlink.php">
          unlink &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.touch.php">
          &laquo; touch        </a>
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
            <option value='en/function.umask.php' selected="selected">English</option>
            <option value='de/function.umask.php'>German</option>
            <option value='es/function.umask.php'>Spanish</option>
            <option value='fr/function.umask.php'>French</option>
            <option value='it/function.umask.php'>Italian</option>
            <option value='ja/function.umask.php'>Japanese</option>
            <option value='pt_BR/function.umask.php'>Brazilian Portuguese</option>
            <option value='ru/function.umask.php'>Russian</option>
            <option value='tr/function.umask.php'>Turkish</option>
            <option value='uk/function.umask.php'>Ukrainian</option>
            <option value='zh/function.umask.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.umask" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">umask</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">umask</span> &mdash; <span class="dc-title">Changes the current umask</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.umask-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>umask</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$mask</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>umask()</strong></span> sets PHP&#039;s umask to
   <code class="parameter">mask</code> &amp; 0777 and returns the old
   umask. When PHP is being used as a server module, the umask
   is restored when each request is finished.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.umask-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">mask</code></dt>
     <dd>
      <p class="para">
       The new umask.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.umask-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   If <code class="parameter">mask</code> is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, <span class="function"><strong>umask()</strong></span> 
   simply returns the current umask otherwise the old umask is returned.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.umask-changelog">
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
       <code class="parameter">mask</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.umask-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2430">
    <p><strong>Example #1 <span class="function"><strong>umask()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$old </span><span style="color: #007700">= </span><span style="color: #0000BB">umask</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">chmod</span><span style="color: #007700">(</span><span style="color: #DD0000">"/path/some_dir/some_file.txt"</span><span style="color: #007700">, </span><span style="color: #0000BB">0755</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">umask</span><span style="color: #007700">(</span><span style="color: #0000BB">$old</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Checking<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$old </span><span style="color: #007700">!= </span><span style="color: #0000BB">umask</span><span style="color: #007700">()) {<br />    die(</span><span style="color: #DD0000">'An error occurred while changing back the umask'</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.umask-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Avoid using this function in multithreaded webservers. It is better to
    change the file permissions with <span class="function"><a href="function.chmod.php" class="function">chmod()</a></span> after
    creating the file. Using <span class="function"><strong>umask()</strong></span> can lead to
    unexpected behavior of concurrently running scripts and the webserver
    itself because they all use the same umask.
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/umask.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.umask%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.umask&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.umask.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="91569">  <div class="votes">
    <div id="Vu91569">
    <a href="/manual/vote-note.php?id=91569&amp;page=function.umask&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91569">
    <a href="/manual/vote-note.php?id=91569&amp;page=function.umask&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91569" title="91% like this...">
    101
    </div>
  </div>
  <a href="#91569" class="name">
  <strong class="user"><em>librodot at ciberpiula dot net</em></strong></a><a class="genanchor" href="#91569"> &para;</a><div class="date" title="2009-06-17 04:54"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91569">
<div class="phpcode"><code><span class="html">I think that the best way to understand umask is to say that umask is used to revoke permissions, not to set permissions.<br /><br />umask sets which permissions must be removed from the system default when you create a file or a directory.<br /><br />For example, a mask 0022 means that you don't want group and others modify the file. <br /><br />default 0666 rw-.rw-.rw- <br />umask   0022 ---.-w-.-w-<br />Final   0644 rw-.r--.r--<br /><br />That means that any file from now on will have 0644 permissions.<br /><br />It is important to understand that umask revokes, deletes permissions from system default, so it can´t grant permissions the system default hasn't. In the example above, with the 666 system default, there is no way you can use umask to create a file with execute permission. If you want to grant more permissions, use chmod.<br /><br />Be aware that system default permissions are not related to PHP (they depends upon server configuration). PHP has a default umask that is applied after system default base permissions. And there are different system default base permissions for files and directories.<br /><br />Usually, system default permissions for files are 666 and for directories 0777. And usually, default PHP umask is 0022</span></code></div>
  </div>
 </div>
  <div class="note" id="75459">  <div class="votes">
    <div id="Vu75459">
    <a href="/manual/vote-note.php?id=75459&amp;page=function.umask&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75459">
    <a href="/manual/vote-note.php?id=75459&amp;page=function.umask&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75459" title="81% like this...">
    50
    </div>
  </div>
  <a href="#75459" class="name">
  <strong class="user"><em>sean at awesomeplay dot com</em></strong></a><a class="genanchor" href="#75459"> &para;</a><div class="date" title="2007-05-30 09:48"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75459">
<div class="phpcode"><code><span class="html">"It is better to change the file permissions with chmod() after creating the file."<br /><br />The usual lacking of security knowledge within the PHP team rears its head once again.  You *always* want to have the file created with the proper permission.  Let me illustrate why:<br /><br />(a) you create new file with read permissions<br />(b) an attacking script opens the file<br />(c) you chmod the file to remove read permissions<br />(d) you write sensitive data to the file<br /><br />Now, you might think that the changes of an attacking script getting to open the file before you chmod them are low.  And you're right.  But low changes are never low enough - you want zero chance.<br /><br />When creating a file that needs increased permissions, you always need to create the file with the proper permissions, and also create it with O_EXCL set.  If you don't do an exclusive create, you end up with this scenario:<br /><br />(a) attacker creates the file, makes it writable to everyone<br />(b) you open the file with restricted permissions, but since it already exists, the file is merely opened and the permissions left alone<br />(c) you write sensitive data into the insecure file<br /><br />Detecting the latter scenario is possible, but it requires a bit of work.  You have to check that the file's owner and group match the script's (that is, posix_geteuid(), not myuid()) and check the permissions - if any of those are incorrect, then the file is insecure - you can attempt to unlink() it and try again while logging a warning, of course.<br /><br />The only time when it is reasonable or safe to chmod() a file after creating it is when you want to grant extra permissions instead of removing them.  For example, it is completely safe to set the umask to 0077 and then chmoding the files you create afterward.<br /><br />Doing truly secure programming in PHP is difficult as is, and advice like this in the documentation just makes things worse.  Remember, kids, anything that applies to security in the C or UNIX worlds is 100% applicable to PHP.  The best thing you can possibly do for yourself as a PHP programmer is to learn and understand secure C and UNIX programming techniques.</span></code></div>
  </div>
 </div>
  <div class="note" id="62057">  <div class="votes">
    <div id="Vu62057">
    <a href="/manual/vote-note.php?id=62057&amp;page=function.umask&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62057">
    <a href="/manual/vote-note.php?id=62057&amp;page=function.umask&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62057" title="82% like this...">
    11
    </div>
  </div>
  <a href="#62057" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#62057"> &para;</a><div class="date" title="2006-02-18 08:31"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62057">
<div class="phpcode"><code><span class="html">Using (cmask - umask) is a wrong way to calculate the new mask:<br /><br />0022 - 0700 = 0656 WRONG<br />0700 &amp; ~0022 = 0700 CORRECT<br /><br />Correct php code:<br /><span class="default">&lt;?php<br />$rmask </span><span class="keyword">= (</span><span class="default">$cmask </span><span class="keyword">&amp; ~</span><span class="default">$umask</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105150">  <div class="votes">
    <div id="Vu105150">
    <a href="/manual/vote-note.php?id=105150&amp;page=function.umask&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105150">
    <a href="/manual/vote-note.php?id=105150&amp;page=function.umask&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105150" title="79% like this...">
    14
    </div>
  </div>
  <a href="#105150" class="name">
  <strong class="user"><em>neon at neonjs dot com</em></strong></a><a class="genanchor" href="#105150"> &para;</a><div class="date" title="2011-07-30 07:19"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105150">
<div class="phpcode"><code><span class="html">In case you don't understand why you need to "Avoid using this function in multithreaded webservers":<br /><br />It's because this function changes the umask at the process level, rather than only for PHP or for the current script.  If there are multiple simultaneous threads running in the process in which your PHP script is running, the change will apply to all of those threads at the same time hence why this is not safe for multithreaded use.<br /><br />I understand that if you are using the PHP module and Apache's prefork MPM, which is not multi-threaded, then you at least won't get race-condition problems such as this.  However, it is still worth noting that the umask setting, if not re-set, will persist for the life of that process even if the process is re-used to serve future PHP or non-PHP requests.</span></code></div>
  </div>
 </div>
  <div class="note" id="117942">  <div class="votes">
    <div id="Vu117942">
    <a href="/manual/vote-note.php?id=117942&amp;page=function.umask&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117942">
    <a href="/manual/vote-note.php?id=117942&amp;page=function.umask&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117942" title="75% like this...">
    6
    </div>
  </div>
  <a href="#117942" class="name">
  <strong class="user"><em>Richard Snell</em></strong></a><a class="genanchor" href="#117942"> &para;</a><div class="date" title="2015-09-04 02:52"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117942">
<div class="phpcode"><code><span class="html">It is important to note that the mask parameter will accept values other than octal and that this can cause unexpected results.<br /><br />Setting umask(22) could be expected to reduce a file with default 0666 permission to 0644 by applying a mask of 0022 but as the parameter is being supplied as a decimal it will be converted to octal silently and actually apply a mask of 0026 resulting in a final file permission of 0642.<br /><br />Similarly the value returned by umask is in decimal format. If you correctly apply a mask using umask(0022) and then query the new setting with umask() it will return a value of 18 (0022 octal is 18 decimal).<br /><br />In short, when applying permissions it is best to pad the supplied value with zeros to create an octal value (22 becomes 0022) and if you want to analyze the returned value remember to convert it to octal for ease of interpretation.</span></code></div>
  </div>
 </div>
  <div class="note" id="100146">  <div class="votes">
    <div id="Vu100146">
    <a href="/manual/vote-note.php?id=100146&amp;page=function.umask&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100146">
    <a href="/manual/vote-note.php?id=100146&amp;page=function.umask&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100146" title="72% like this...">
    5
    </div>
  </div>
  <a href="#100146" class="name">
  <strong class="user"><em>webmaster at iacomputing dot co dot uk</em></strong></a><a class="genanchor" href="#100146"> &para;</a><div class="date" title="2010-09-28 04:24"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100146">
<div class="phpcode"><code><span class="html">You can use umask to solve the PHP session bug that appears in several PHP versions.<br /><br /><span class="default">&lt;?php<br />umask</span><span class="keyword">(</span><span class="default">0022</span><span class="keyword">);<br /></span><span class="default">session_start</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />This will prevent sessions being created with inadequate permissions.</span></code></div>
  </div>
 </div>
  <div class="note" id="119493">  <div class="votes">
    <div id="Vu119493">
    <a href="/manual/vote-note.php?id=119493&amp;page=function.umask&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119493">
    <a href="/manual/vote-note.php?id=119493&amp;page=function.umask&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119493" title="70% like this...">
    4
    </div>
  </div>
  <a href="#119493" class="name">
  <strong class="user"><em>malcolm.murphy</em></strong></a><a class="genanchor" href="#119493"> &para;</a><div class="date" title="2016-06-21 11:09"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119493">
<div class="phpcode"><code><span class="html">Clarification Of "mask &amp; 0777":<br /><br />The manual's comment "umask() sets PHP's umask to mask &amp; 0777 [...]" is merely implying that the method only affects file permissions, but not special modes such as the setuid, setgid or sticky bits. Curiously, PHP does not actually perform the bitwise operation itself, but instead assumes it will be done by a system call of the same name. On some systems such as OS X, umask effectively sets the umask as mask &amp; 07777, but the extraneous bits are not applicable to subsequent PHP calls like mkdir(). Linux's umask does use 0777. Its manual entry has a comment similar to the PHP one, but with a parenthetical statement that helps explain what it means:<br /><br />"umask() sets the calling process's file mode creation mask (umask) to mask &amp; 0777 (i.e., only the file permission bits of mask are used) [...]"<br /><br />The fact that permissions can be determined by inverting a mask using the operation $mask &amp; ~0777 is irrelevant, despite its similar appearance to $mask &amp; 0777. The latter operation instead truncates $mask to the first nine low-order bits (i.e., the three rightmost octal digits [and note that the leading zero for octal notation is not itself a digit]). It does not change the remaining bits.<br /><br />For example, all of the following calls have the same effect: umask(0022), umask(07022), umask(261650) (decimal value of 0777022), and umask(0b111000010010) (binary notation for 07022).</span></code></div>
  </div>
 </div>
  <div class="note" id="81573">  <div class="votes">
    <div id="Vu81573">
    <a href="/manual/vote-note.php?id=81573&amp;page=function.umask&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81573">
    <a href="/manual/vote-note.php?id=81573&amp;page=function.umask&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81573" title="71% like this...">
    3
    </div>
  </div>
  <a href="#81573" class="name">
  <strong class="user"><em>jphansen at uga dot edu</em></strong></a><a class="genanchor" href="#81573"> &para;</a><div class="date" title="2008-03-04 06:45"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81573">
<div class="phpcode"><code><span class="html">On most UNIX environments the recommended default umask for files, defined in /home/user/.profile or /etc/profile, is 022 (chmod: 644). On trusted systems it is 002. Exercise caution when applying more liberal settings.</span></code></div>
  </div>
 </div>
  <div class="note" id="100198">  <div class="votes">
    <div id="Vu100198">
    <a href="/manual/vote-note.php?id=100198&amp;page=function.umask&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100198">
    <a href="/manual/vote-note.php?id=100198&amp;page=function.umask&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100198" title="66% like this...">
    7
    </div>
  </div>
  <a href="#100198" class="name">
  <strong class="user"><em>bishop</em></strong></a><a class="genanchor" href="#100198"> &para;</a><div class="date" title="2010-09-30 06:01"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100198">
<div class="phpcode"><code><span class="html">"It is better to change the file permissions with chmod() after creating the file."<br /><br />If you take that advice seriously, consider setting your umask so that files are created private to your user, then use chmod to open them up.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// files will create as -rw-------<br /></span><span class="default">umask</span><span class="keyword">(</span><span class="default">0077</span><span class="keyword">);<br /><br /></span><span class="comment">// create a file, eg fopen()<br /><br />// give access: -rw-r--r--<br /></span><span class="default">chmod</span><span class="keyword">(</span><span class="string">'/path/to/file'</span><span class="keyword">, </span><span class="default">0644</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Whenever reasonable, default to shut and open as needed (like above) instead of default to open and shut as needed.  The above still has a race condition, but the race condition will deny appropriate access instead of granting inappropriate access.</span></code></div>
  </div>
 </div>
  <div class="note" id="120810">  <div class="votes">
    <div id="Vu120810">
    <a href="/manual/vote-note.php?id=120810&amp;page=function.umask&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120810">
    <a href="/manual/vote-note.php?id=120810&amp;page=function.umask&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120810" title="64% like this...">
    4
    </div>
  </div>
  <a href="#120810" class="name">
  <strong class="user"><em>ahmad dot mayahi at gmail dot com</em></strong></a><a class="genanchor" href="#120810"> &para;</a><div class="date" title="2017-03-14 10:27"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120810">
<div class="phpcode"><code><span class="html">Simply umask means the default permissions for new files/directories:<br /><br /><span class="default">&lt;?php<br />umask</span><span class="keyword">(</span><span class="default">022</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This sets the default permissions for user, groups, and others respectively:<br /><br />• 0 - read, write and execute<br />• 1 - read and write<br />• 2 - read and execute<br />• 3 - read only<br />• 4 - write and execute<br />• 5 - write only<br />• 6 - execute only<br />• 7 - no permissions</span></code></div>
  </div>
 </div>
  <div class="note" id="50580">  <div class="votes">
    <div id="Vu50580">
    <a href="/manual/vote-note.php?id=50580&amp;page=function.umask&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50580">
    <a href="/manual/vote-note.php?id=50580&amp;page=function.umask&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50580" title="66% like this...">
    2
    </div>
  </div>
  <a href="#50580" class="name">
  <strong class="user"><em>andi&lt;at&gt;splitbrain.org</em></strong></a><a class="genanchor" href="#50580"> &para;</a><div class="date" title="2005-03-03 02:03"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50580">
<div class="phpcode"><code><span class="html">To play around with umasks and permissions use this little fragment:<br /><br />&lt;?<br />$umask = 0012;<br />$perm  = 0777;<br />printf("umask: %04o perm: %04o result: %04o\n",<br />       $umask,$perm,$perm &amp; (0777 - $umask));<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="77881">  <div class="votes">
    <div id="Vu77881">
    <a href="/manual/vote-note.php?id=77881&amp;page=function.umask&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77881">
    <a href="/manual/vote-note.php?id=77881&amp;page=function.umask&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77881" title="60% like this...">
    2
    </div>
  </div>
  <a href="#77881" class="name">
  <strong class="user"><em>maulwuff at gmx dot de</em></strong></a><a class="genanchor" href="#77881"> &para;</a><div class="date" title="2007-09-18 03:44"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77881">
<div class="phpcode"><code><span class="html">umask takes away the given values from the standard mask 777.<br />A graphical view shows this better:<br /><br />standard:<br />rwxrwxrwx = 777<br />will get with umask 002:<br />rwxrwxr-x  = 775<br />or will get with umask 077:<br />rwx------ = 700<br /><br />and so on.</span></code></div>
  </div>
 </div>
  <div class="note" id="25339">  <div class="votes">
    <div id="Vu25339">
    <a href="/manual/vote-note.php?id=25339&amp;page=function.umask&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25339">
    <a href="/manual/vote-note.php?id=25339&amp;page=function.umask&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25339" title="55% like this...">
    2
    </div>
  </div>
  <a href="#25339" class="name">
  <strong class="user"><em>sam at totallydigital dot co dot nz</em></strong></a><a class="genanchor" href="#25339"> &para;</a><div class="date" title="2002-09-19 09:04"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25339">
<div class="phpcode"><code><span class="html">The first comment perhaps didn't quite make clear what's on with your umask and the permissions.<br /><br />The permission passed to a command is first bitwise ANDed with the _INVERSE_ of the current umask, then applied to the file.<br /><br />For example, umask = 0011 and permission = 0775<br />The inverse of 0011 = 0766<br /><br />0775 AND 0766 <br />= 111.111.101 AND 111.110.110<br />= 111.110.100<br />= 0764</span></code></div>
  </div>
 </div>
  <div class="note" id="66172">  <div class="votes">
    <div id="Vu66172">
    <a href="/manual/vote-note.php?id=66172&amp;page=function.umask&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66172">
    <a href="/manual/vote-note.php?id=66172&amp;page=function.umask&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66172" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#66172" class="name">
  <strong class="user"><em>ShaD@TW</em></strong></a><a class="genanchor" href="#66172"> &para;</a><div class="date" title="2006-05-16 09:32"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66172">
<div class="phpcode"><code><span class="html">Notice that directory(s) and file(s) sometimes have different results.<br /><br /><span class="default">&lt;?php<br />umask</span><span class="keyword">(</span><span class="default">0670</span><span class="keyword">);                    </span><span class="comment">//- set umask<br /></span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'file'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);   </span><span class="comment">//- 0006<br /></span><span class="default">mkdir</span><span class="keyword">(</span><span class="string">"/path/dir"</span><span class="keyword">);             </span><span class="comment">//- 0107<br /></span><span class="default">?&gt;<br /></span><br />calculate the result:<br /><span class="default">&lt;?php<br />$umask </span><span class="keyword">= </span><span class="default">0670</span><span class="keyword">;<br /></span><span class="default">umask</span><span class="keyword">(</span><span class="default">$umask</span><span class="keyword">);<br /></span><span class="comment">//- if you are creating a new directory, $permission = 0777;<br />//- if you are creating a new file, $permission = 0666.<br /></span><span class="default">printf</span><span class="keyword">( </span><span class="string">"result: %04o"</span><span class="keyword">, </span><span class="default">$permission </span><span class="keyword">&amp; ( </span><span class="default">0777 </span><span class="keyword">- </span><span class="default">$umask</span><span class="keyword">) );<br /></span><span class="default">?&gt;<br /></span><br />BTW, as the manual said, the form of umask() is "int umask ( [int mask] )", so if you want to print/echo any umask, don't forget to convert it from DEC (because it returns a "int") to OCT.<br /><br /><span class="default">&lt;?php<br />$umask </span><span class="keyword">= </span><span class="default">umask</span><span class="keyword">();          </span><span class="comment">//- returns the current umask, which is a "int"<br /></span><span class="default">$umask </span><span class="keyword">= </span><span class="default">decoct</span><span class="keyword">(</span><span class="default">$umask</span><span class="keyword">);   </span><span class="comment">//- Now, $umask is a "string"<br /></span><span class="keyword">echo </span><span class="default">$umask</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Don't forget that the argument(parameter) is a "int", too.<br /><br /><span class="default">&lt;?php<br />umask</span><span class="keyword">(</span><span class="default">777</span><span class="keyword">);    </span><span class="comment">//- WRONG! Even though you maybe use "umask 777" in some OS.<br /></span><span class="default">umask</span><span class="keyword">(</span><span class="default">0777</span><span class="keyword">);   </span><span class="comment">//- OK<br /></span><span class="default">?&gt;<br /></span><br />If there was any mistake, please correct my statement.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.umask&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.umask.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.touch.php" title="touch">touch</a>
                        </li>
                                                <li class="current">
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
