<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: tempnam - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.tempnam.php">
 <link rel="shorturl" href="https://www.php.net/tempnam">
 <link rel="alternate" href="https://www.php.net/tempnam" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.symlink.php">
 <link rel="next" href="https://www.php.net/manual/en/function.tmpfile.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.tempnam.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.tempnam.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.tempnam.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.tempnam.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.tempnam.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.tempnam.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.tempnam.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.tempnam.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.tempnam.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.tempnam.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.tempnam.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create file with unique file name" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: tempnam - Manual" />
<meta name="twitter:description" content="Create file with unique file name" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: tempnam - Manual" />
<meta itemprop="description" content="Create file with unique file name" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create file with unique file name" />

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
        <a href="function.tmpfile.php">
          tmpfile &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.symlink.php">
          &laquo; symlink        </a>
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
            <option value='en/function.tempnam.php' selected="selected">English</option>
            <option value='de/function.tempnam.php'>German</option>
            <option value='es/function.tempnam.php'>Spanish</option>
            <option value='fr/function.tempnam.php'>French</option>
            <option value='it/function.tempnam.php'>Italian</option>
            <option value='ja/function.tempnam.php'>Japanese</option>
            <option value='pt_BR/function.tempnam.php'>Brazilian Portuguese</option>
            <option value='ru/function.tempnam.php'>Russian</option>
            <option value='tr/function.tempnam.php'>Turkish</option>
            <option value='uk/function.tempnam.php'>Ukrainian</option>
            <option value='zh/function.tempnam.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.tempnam" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">tempnam</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">tempnam</span> &mdash; <span class="dc-title">Create file with unique file name</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.tempnam-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>tempnam</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$directory</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$prefix</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Creates a file with a unique filename, with access permission set to 0600, in the specified directory.
   If the directory does not exist or is not writable, <span class="function"><strong>tempnam()</strong></span> may
   generate a file in the system&#039;s temporary directory, and return
   the full path to that file, including its name.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.tempnam-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">directory</code></dt>
     <dd>
      <p class="para">
       The directory where the temporary filename will be created.
      </p>
     </dd>
    
    
     <dt><code class="parameter">prefix</code></dt>
     <dd>
      <p class="para">
       The prefix of the generated temporary filename.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Only the first 63 characters of the prefix are used, the rest are ignored.
        Windows uses only the first three characters of the prefix.
       </span>
      </p></blockquote>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.tempnam-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the new temporary filename (with path), or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on
   failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.tempnam-changelog">
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
      <td>7.1.0</td>
      <td>
       <span class="function"><strong>tempnam()</strong></span> now emits a notice when falling back to the
       temp directory of the system.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.tempnam-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2426">
    <p><strong>Example #1 <span class="function"><strong>tempnam()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$tmpfname </span><span style="color: #007700">= </span><span style="color: #0000BB">tempnam</span><span style="color: #007700">(</span><span style="color: #DD0000">"/tmp"</span><span style="color: #007700">, </span><span style="color: #DD0000">"FOO"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$handle </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$tmpfname</span><span style="color: #007700">, </span><span style="color: #DD0000">"w"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">, </span><span style="color: #DD0000">"writing to tempfile"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// do something here<br /><br /></span><span style="color: #0000BB">unlink</span><span style="color: #007700">(</span><span style="color: #0000BB">$tmpfname</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.tempnam-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    If PHP cannot create a file in the specified <code class="parameter">directory</code>
    parameter, it falls back on the system default. On NTFS this also happens
    if the specified <code class="parameter">directory</code> contains more than 65534 files.
   </span>
  </p></blockquote>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.tempnam-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.tmpfile.php" class="function" rel="rdfs-seeAlso">tmpfile()</a> - Creates a temporary file</span></li>
    <li><span class="function"><a href="function.sys-get-temp-dir.php" class="function" rel="rdfs-seeAlso">sys_get_temp_dir()</a> - Returns directory path used for temporary files</span></li>
    <li><span class="function"><a href="function.unlink.php" class="function" rel="rdfs-seeAlso">unlink()</a> - Deletes a file</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/tempnam.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.tempnam%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.tempnam&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.tempnam.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">22 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="93256">  <div class="votes">
    <div id="Vu93256">
    <a href="/manual/vote-note.php?id=93256&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93256">
    <a href="/manual/vote-note.php?id=93256&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93256" title="84% like this...">
    81
    </div>
  </div>
  <a href="#93256" class="name">
  <strong class="user"><em>koyama</em></strong></a><a class="genanchor" href="#93256"> &para;</a><div class="date" title="2009-08-30 05:39"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93256">
<div class="phpcode"><code><span class="html">Watch out using a blank $dir as a "trick" to create temporary files in the system temporary directory.
<br />
<br /><span class="default">&lt;?php
<br />$tmpfname </span><span class="keyword">= </span><span class="default">tempnam</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="string">'FOO'</span><span class="keyword">); </span><span class="comment">// not good
<br /></span><span class="default">?&gt;
<br /></span>
<br />If an open_basedir restriction is in effect, the trick will not work. You will get a warning message like
<br />
<br />Warning: tempnam() [function.tempnam]: open_basedir restriction in effect.
<br />File() is not within the allowed path(s): (/var/www/vhosts/example.com/httpdocs:/tmp)
<br />
<br />What works is this:
<br />
<br /><span class="default">&lt;?php
<br />$tmpfname </span><span class="keyword">= </span><span class="default">tempnam</span><span class="keyword">(</span><span class="default">sys_get_temp_dir</span><span class="keyword">(), </span><span class="string">'FOO'</span><span class="keyword">); </span><span class="comment">// good
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="50658">  <div class="votes">
    <div id="Vu50658">
    <a href="/manual/vote-note.php?id=50658&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50658">
    <a href="/manual/vote-note.php?id=50658&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50658" title="86% like this...">
    17
    </div>
  </div>
  <a href="#50658" class="name">
  <strong class="user"><em>php at REMOVEMEkennel17 dot co dot uk</em></strong></a><a class="genanchor" href="#50658"> &para;</a><div class="date" title="2005-03-05 10:10"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50658">
<div class="phpcode"><code><span class="html">Note that tempnam returns the full path to the temporary file, not just the filename.</span></code></div>
  </div>
 </div>
  <div class="note" id="49266">  <div class="votes">
    <div id="Vu49266">
    <a href="/manual/vote-note.php?id=49266&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49266">
    <a href="/manual/vote-note.php?id=49266&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49266" title="80% like this...">
    26
    </div>
  </div>
  <a href="#49266" class="name">
  <strong class="user"><em>Sebastian Kun</em></strong></a><a class="genanchor" href="#49266"> &para;</a><div class="date" title="2005-01-21 01:03"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49266">
<div class="phpcode"><code><span class="html">If you go to the linux man page for the C function tempnam(3), you will see at the end "Never use this function. Use mkstemp(3) instead." But php's tempnam() function doesn't actually use tmpnam(3), so there's no problem (under Linux, it will use mkstemp(3) if it's available).</span></code></div>
  </div>
 </div>
  <div class="note" id="120451">  <div class="votes">
    <div id="Vu120451">
    <a href="/manual/vote-note.php?id=120451&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120451">
    <a href="/manual/vote-note.php?id=120451&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120451" title="75% like this...">
    15
    </div>
  </div>
  <a href="#120451" class="name">
  <strong class="user"><em>stanislav dot eckert at vizson dot de</em></strong></a><a class="genanchor" href="#120451"> &para;</a><div class="date" title="2017-01-11 01:55"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120451">
<div class="phpcode"><code><span class="html">Please note that this function might throw a notice in PHP 7.1.0 and above. This was a bugfix: <a href="https://bugs.php.net/bug.php?id=69489" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=69489</a><br /><br />You can place an address operator (@) to sillence the notice:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if (</span><span class="default">$tmp </span><span class="keyword">= @</span><span class="default">tempnam</span><span class="keyword">() !== </span><span class="default">false</span><span class="keyword">) {<br />  </span><span class="comment">// ...<br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;<br /></span><br />Or you could try to set the "upload_tmp_dir" setting in your php.ini to the temporary folder path of your system. Not sure, if the last one prevents the notices.</span></code></div>
  </div>
 </div>
  <div class="note" id="72304">  <div class="votes">
    <div id="Vu72304">
    <a href="/manual/vote-note.php?id=72304&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72304">
    <a href="/manual/vote-note.php?id=72304&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72304" title="78% like this...">
    8
    </div>
  </div>
  <a href="#72304" class="name">
  <strong class="user"><em>Jason Pell</em></strong></a><a class="genanchor" href="#72304"> &para;</a><div class="date" title="2007-01-12 04:47"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72304">
<div class="phpcode"><code><span class="html">I want to guarantee that the file will be created in the specified directory or else the function should return FALSE, I have a simple function that works, but I am unsure if its a potential security issue.<br /><br />function dir_tempnam($dir, $prefix)<br />{<br />    $real_dir_path = realpath($dir);<br />    if (substr($real_dir_path, -1) != '/')<br />        $real_dir_path .= '/';<br />    <br />    $tempfile = tempnam($real_dir_path, $prefix);<br />    $name = basename($tempfile);<br />    <br />    if(is_file($real_dir_path.$name))<br />        return $name;<br />    else<br />    {<br />        @unlink($name);<br />        return FALSE;<br />    }<br />}<br /><br />This function returns just the name of the temporary file in the specified directory, or FALSE.<br /><br />Obviously it could return the entire $tempfile, but in my case, I actually want the basename value seperate.</span></code></div>
  </div>
 </div>
  <div class="note" id="97086">  <div class="votes">
    <div id="Vu97086">
    <a href="/manual/vote-note.php?id=97086&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97086">
    <a href="/manual/vote-note.php?id=97086&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97086" title="73% like this...">
    14
    </div>
  </div>
  <a href="#97086" class="name">
  <strong class="user"><em>Artur Graniszewski</em></strong></a><a class="genanchor" href="#97086"> &para;</a><div class="date" title="2010-03-31 10:57"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97086">
<div class="phpcode"><code><span class="html">tempnam() function does not support custom stream wrappers registered by stream_register_wrapper(). <br /><br />For example if you'll try to use tempnam() on Windows platform, PHP will try to generate unique filename in %TMP% folder (usually: C:\WINDOWS\Temp) without any warning or notice.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// &lt;&lt; ...custom stream wrapper goes somewhere here...&gt;&gt;<br /><br /></span><span class="keyword">echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br /></span><span class="default">error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'display_errors'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">clearstatcache</span><span class="keyword">();<br /></span><span class="default">stream_register_wrapper</span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">, </span><span class="string">'MemoryStream'</span><span class="keyword">);<br /><br /></span><span class="default">mkdir</span><span class="keyword">(</span><span class="string">'test://aaa'</span><span class="keyword">);<br /></span><span class="default">mkdir</span><span class="keyword">(</span><span class="string">'test://aaa/cc'</span><span class="keyword">);<br /></span><span class="default">mkdir</span><span class="keyword">(</span><span class="string">'test://aaa/dd'</span><span class="keyword">); <br />echo </span><span class="string">'PHP '</span><span class="keyword">.</span><span class="default">PHP_VERSION</span><span class="keyword">;<br />echo </span><span class="string">'&lt;br /&gt;node exists: '</span><span class="keyword">.</span><span class="default">file_exists</span><span class="keyword">(</span><span class="string">'test://aaa/cc'</span><span class="keyword">);<br />echo </span><span class="string">'&lt;br /&gt;node is writable: '</span><span class="keyword">.</span><span class="default">is_writable</span><span class="keyword">(</span><span class="string">'test://aaa/cc'</span><span class="keyword">);<br />echo </span><span class="string">'&lt;br /&gt;node is dir: '</span><span class="keyword">.</span><span class="default">is_dir</span><span class="keyword">(</span><span class="string">'test://aaa/cc'</span><span class="keyword">);<br />echo </span><span class="string">'&lt;br /&gt;tempnam in dir: '</span><span class="keyword">.</span><span class="default">tempnam</span><span class="keyword">(</span><span class="string">'test://aaa/cc'</span><span class="keyword">, </span><span class="string">'tmp'</span><span class="keyword">);<br />echo </span><span class="string">"&lt;br /&gt;&lt;/pre&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />ouputs:<br />--------------------<br />PHP 5.2.13<br />node exists: 1<br />node is writable: 1<br />node is dir: 1<br />tempnam in dir: C:\Windows\Temp\tmp1D03.tmp<br /><br />If you want to create temporary file, you have to create your own function (which will probably use opendir() and fopen($filename, "x") functions)</span></code></div>
  </div>
 </div>
  <div class="note" id="43802">  <div class="votes">
    <div id="Vu43802">
    <a href="/manual/vote-note.php?id=43802&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43802">
    <a href="/manual/vote-note.php?id=43802&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43802" title="75% like this...">
    6
    </div>
  </div>
  <a href="#43802" class="name">
  <strong class="user"><em>anakin dot skyw at gmx dot de</em></strong></a><a class="genanchor" href="#43802"> &para;</a><div class="date" title="2004-07-04 08:20"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43802">
<div class="phpcode"><code><span class="html">&gt;Under UNIX (where you can rename onto an extant file and so I used link), you will have to remove both the link and the link's target.<br /><br />Couldn't you do<br /><span class="default">&lt;?php<br />       </span><span class="keyword">if (</span><span class="default">$newFileCreated</span><span class="keyword">) {<br />           </span><span class="default">unlink </span><span class="keyword">(</span><span class="default">$sysFileName</span><span class="keyword">);<br />           return </span><span class="default">$newFileName</span><span class="keyword">;<br />       }<br /></span><span class="default">?&gt;<br /></span>and get the same semantics as the windows version?</span></code></div>
  </div>
 </div>
  <div class="note" id="61436">  <div class="votes">
    <div id="Vu61436">
    <a href="/manual/vote-note.php?id=61436&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61436">
    <a href="/manual/vote-note.php?id=61436&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61436" title="71% like this...">
    9
    </div>
  </div>
  <a href="#61436" class="name">
  <strong class="user"><em>Ron Korving</em></strong></a><a class="genanchor" href="#61436"> &para;</a><div class="date" title="2006-02-03 12:32"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61436">
<div class="phpcode"><code><span class="html">This function creates a temporary directory. The previous example given could bug if between the unlink() and mkdir() some process creates the same directory or file. This implementation is faster too.<br /><br /><span class="default">&lt;?php<br />  </span><span class="keyword">function </span><span class="default">tempdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="default">$prefix</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">=</span><span class="default">0700</span><span class="keyword">)<br />  {<br />    if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">) != </span><span class="string">'/'</span><span class="keyword">) </span><span class="default">$dir </span><span class="keyword">.= </span><span class="string">'/'</span><span class="keyword">;<br /><br />    do<br />    {<br />      </span><span class="default">$path </span><span class="keyword">= </span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$prefix</span><span class="keyword">.</span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">9999999</span><span class="keyword">);<br />    } while (!</span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">));<br /><br />    return </span><span class="default">$path</span><span class="keyword">;<br />  }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113340">  <div class="votes">
    <div id="Vu113340">
    <a href="/manual/vote-note.php?id=113340&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113340">
    <a href="/manual/vote-note.php?id=113340&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113340" title="69% like this...">
    9
    </div>
  </div>
  <a href="#113340" class="name">
  <strong class="user"><em>divinity76+yaoiporn at gmail dot com</em></strong></a><a class="genanchor" href="#113340"> &para;</a><div class="date" title="2013-09-29 02:00"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113340">
<div class="phpcode"><code><span class="html">if you don't want to take care of deleting the file yourself, and you don't need a custom prefix, you can use<br />$file_location=stream_get_meta_data(tmpfile())['uri'];<br />file will be created automatically, and deleted automatically on script close (thanks to tmpfile()) i found this useful for CURLOPT_COOKIEFILE (which wants a file location, not a handle)</span></code></div>
  </div>
 </div>
  <div class="note" id="115108">  <div class="votes">
    <div id="Vu115108">
    <a href="/manual/vote-note.php?id=115108&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115108">
    <a href="/manual/vote-note.php?id=115108&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115108" title="68% like this...">
    6
    </div>
  </div>
  <a href="#115108" class="name">
  <strong class="user"><em>wapmorgan</em></strong></a><a class="genanchor" href="#115108"> &para;</a><div class="date" title="2014-05-26 05:54"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115108">
<div class="phpcode"><code><span class="html">Notice that tempnam will return NULL (not false) if the second parameter &lt;prefix&gt; isn't transferred:<br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">tempnam</span><span class="keyword">(</span><span class="default">sys_get_temp_dir</span><span class="keyword">())); </span><span class="comment">// NULL<br /></span><span class="default">?&gt;<br /></span>also the warning will be generated:<br />Warning:  tempnam() expects exactly 2 parameters, 1 given in php shell code ...</span></code></div>
  </div>
 </div>
  <div class="note" id="69220">  <div class="votes">
    <div id="Vu69220">
    <a href="/manual/vote-note.php?id=69220&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69220">
    <a href="/manual/vote-note.php?id=69220&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69220" title="70% like this...">
    4
    </div>
  </div>
  <a href="#69220" class="name">
  <strong class="user"><em>tux ARROBA cenobioracing PUNTO com</em></strong></a><a class="genanchor" href="#69220"> &para;</a><div class="date" title="2006-08-27 05:19"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69220">
<div class="phpcode"><code><span class="html">Beware that on Windows NT and other windows, if you have, for example, a variable $work_dir with a path to some dir on your document root(or any other dir). Note the following:<br /><span class="default">&lt;?php<br />$work_dir </span><span class="keyword">= </span><span class="string">'C:/some/path/to/document_root/dir'</span><span class="keyword">;<br /></span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$working_dir</span><span class="keyword">); </span><span class="comment">// Returns true<br /></span><span class="default">is_writable</span><span class="keyword">(</span><span class="default">$working_dir</span><span class="keyword">); </span><span class="comment">// Returns true<br /></span><span class="default">$tempfile </span><span class="keyword">= </span><span class="default">tempnam</span><span class="keyword">(</span><span class="default">$working_dir</span><span class="keyword">,</span><span class="string">'img'</span><span class="keyword">);<br /></span><span class="comment">//$temfile now contains a system wide temp directory file, like 'C:/WINNT.SBS/img444.tmp' instead of the directory we pass it<br />//Thats because we need to give I_USR (IIS user) user write permission to $working_dir  although according to the aforementioned functions seemed it already had it...<br />//If you want to use just the system wide temp directory return by default by tempnam you will also need to give it write permission to I_USR user to be able to write to that file...<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="42052">  <div class="votes">
    <div id="Vu42052">
    <a href="/manual/vote-note.php?id=42052&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42052">
    <a href="/manual/vote-note.php?id=42052&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42052" title="68% like this...">
    7
    </div>
  </div>
  <a href="#42052" class="name">
  <strong class="user"><em>bishop</em></strong></a><a class="genanchor" href="#42052"> &para;</a><div class="date" title="2004-04-30 08:03"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42052">
<div class="phpcode"><code><span class="html">Creating a temporary file with a specific extension is a common requirement on dynamic websites. Largely this need arises from Microsoft browsers that identify a downloaded file's mimetype based on the file's extension.<br /><br />No single PHP function creates a temporary filename with a specific extension, and, as has been shown, there are race conditions involved unless you use the PHP atomic primitives.<br /><br />I use only primitives below and exploit OS dependent behaviour to securely create a file with a specific postfix, prefix, and directory.  Enjoy.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">secure_tmpname</span><span class="keyword">(</span><span class="default">$postfix </span><span class="keyword">= </span><span class="string">'.tmp'</span><span class="keyword">, </span><span class="default">$prefix </span><span class="keyword">= </span><span class="string">'tmp'</span><span class="keyword">, </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />    </span><span class="comment">// validate arguments<br />    </span><span class="keyword">if (! (isset(</span><span class="default">$postfix</span><span class="keyword">) &amp;&amp; </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$postfix</span><span class="keyword">))) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    if (! (isset(</span><span class="default">$prefix</span><span class="keyword">) &amp;&amp; </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$prefix</span><span class="keyword">))) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    if (! isset(</span><span class="default">$dir</span><span class="keyword">)) {<br />        </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">getcwd</span><span class="keyword">();<br />    }<br /><br />    </span><span class="comment">// find a temporary name<br />    </span><span class="default">$tries </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    do {<br />        </span><span class="comment">// get a known, unique temporary file name<br />        </span><span class="default">$sysFileName </span><span class="keyword">= </span><span class="default">tempnam</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="default">$prefix</span><span class="keyword">);<br />        if (</span><span class="default">$sysFileName </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br /><br />        </span><span class="comment">// tack on the extension<br />        </span><span class="default">$newFileName </span><span class="keyword">= </span><span class="default">$sysFileName </span><span class="keyword">. </span><span class="default">$postfix</span><span class="keyword">;<br />        if (</span><span class="default">$sysFileName </span><span class="keyword">== </span><span class="default">$newFileName</span><span class="keyword">) {<br />            return </span><span class="default">$sysFileName</span><span class="keyword">;<br />        }<br /><br />        </span><span class="comment">// move or point the created temporary file to the new filename<br />        // NOTE: these fail if the new file name exist<br />        </span><span class="default">$newFileCreated </span><span class="keyword">= (</span><span class="default">isWindows</span><span class="keyword">() ? @</span><span class="default">rename</span><span class="keyword">(</span><span class="default">$sysFileName</span><span class="keyword">, </span><span class="default">$newFileName</span><span class="keyword">) : @</span><span class="default">link</span><span class="keyword">(</span><span class="default">$sysFileName</span><span class="keyword">, </span><span class="default">$newFileName</span><span class="keyword">));<br />        if (</span><span class="default">$newFileCreated</span><span class="keyword">) {<br />            return </span><span class="default">$newFileName</span><span class="keyword">;<br />        }<br /><br />        </span><span class="default">unlink </span><span class="keyword">(</span><span class="default">$sysFileName</span><span class="keyword">);<br />        </span><span class="default">$tries</span><span class="keyword">++;<br />    } while (</span><span class="default">$tries </span><span class="keyword">&lt;= </span><span class="default">5</span><span class="keyword">);<br /><br />    return </span><span class="default">false</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />The isWindows function is mostly left as an exercise for the reader. A starting point is below:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">isWindows</span><span class="keyword">() {<br />    return (</span><span class="default">DIRECTORY_SEPARATOR </span><span class="keyword">== </span><span class="string">'\\' </span><span class="keyword">? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Like tempnam(), this function requires you to cleanup your own files later. Under UNIX (where you can rename onto an extant file and so I used link), you will have to remove both the link and the link's target. Cleanup is left entirely to the reader.</span></code></div>
  </div>
 </div>
  <div class="note" id="98232">  <div class="votes">
    <div id="Vu98232">
    <a href="/manual/vote-note.php?id=98232&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98232">
    <a href="/manual/vote-note.php?id=98232&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98232" title="63% like this...">
    5
    </div>
  </div>
  <a href="#98232" class="name">
  <strong class="user"><em>tomas at slax dot org</em></strong></a><a class="genanchor" href="#98232"> &para;</a><div class="date" title="2010-06-03 02:31"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98232">
<div class="phpcode"><code><span class="html">Beware: functions are not atomic.  If many processes call the same function at the same time, you may end up with unwanted behavior.
<br />
<br />If you need your own variant of tempnam, use something like this:
<br />
<br /><span class="default">&lt;?php
<br />   </span><span class="keyword">function </span><span class="default">tempnam_sfx</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">$suffix</span><span class="keyword">)
<br />   {
<br />      do
<br />      {
<br />         </span><span class="default">$file </span><span class="keyword">= </span><span class="default">$path</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">mt_rand</span><span class="keyword">().</span><span class="default">$suffix</span><span class="keyword">;
<br />         </span><span class="default">$fp </span><span class="keyword">= @</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'x'</span><span class="keyword">);
<br />      }
<br />      while(!</span><span class="default">$fp</span><span class="keyword">);
<br />
<br />      </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />      return </span><span class="default">$file</span><span class="keyword">;
<br />   }
<br />
<br />   </span><span class="comment">// call it like this:
<br />   </span><span class="default">$file </span><span class="keyword">= </span><span class="default">tempnam_sfx</span><span class="keyword">(</span><span class="string">"/tmp"</span><span class="keyword">, </span><span class="string">".jpg"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />You may replace mt_rand() by some other random name generator, if needed.</span></code></div>
  </div>
 </div>
  <div class="note" id="24801">  <div class="votes">
    <div id="Vu24801">
    <a href="/manual/vote-note.php?id=24801&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24801">
    <a href="/manual/vote-note.php?id=24801&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24801" title="64% like this...">
    4
    </div>
  </div>
  <a href="#24801" class="name">
  <strong class="user"><em>lreilly at lanl dot gov</em></strong></a><a class="genanchor" href="#24801"> &para;</a><div class="date" title="2002-08-28 05:54"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24801">
<div class="phpcode"><code><span class="html">Be careful with you forward and back slashes. Innocent looking code like this...<br /><br />$uploaddir = "C:/Program Files/Apache Group/Apache2/htdocs/sasdap/uploads/";<br />$tempFile = tempnam ($uploaddir, "TMPANAL");<br />$fp = fopen($tmpfname, "w");<br />fwrite($fp, $iqdata);<br />//fclose($fp);<br /><br />... may show something odd when echoing $tempFile";<br /><br />i.e. /Program Files/Apache Group/Apache2/htdocs/sasdap/uploads/\TMP3D.tmp<br />                                                       <br />Must... remember... to... use... backslashes...<br /><br /> - Lee P. Reilly</span></code></div>
  </div>
 </div>
  <div class="note" id="107493">  <div class="votes">
    <div id="Vu107493">
    <a href="/manual/vote-note.php?id=107493&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107493">
    <a href="/manual/vote-note.php?id=107493&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107493" title="62% like this...">
    2
    </div>
  </div>
  <a href="#107493" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#107493"> &para;</a><div class="date" title="2012-02-13 07:44"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107493">
<div class="phpcode"><code><span class="html">tempnam will not create file in unauthorized area.<br />Meaning you need access permissions to the temp dir ($dir) in order to create a file there.</span></code></div>
  </div>
 </div>
  <div class="note" id="77547">  <div class="votes">
    <div id="Vu77547">
    <a href="/manual/vote-note.php?id=77547&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77547">
    <a href="/manual/vote-note.php?id=77547&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77547" title="61% like this...">
    3
    </div>
  </div>
  <a href="#77547" class="name">
  <strong class="user"><em>dmhouse at gmail dot com</em></strong></a><a class="genanchor" href="#77547"> &para;</a><div class="date" title="2007-09-03 03:51"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77547">
<div class="phpcode"><code><span class="html">Guillaume Paramelle's comments below are worth underlining: tempnam() will not accept a relative path for its first directory. If you pass it one, it will (on Windows XP at least) create the temporary file in the system temp directory.<br /><br />The easiest way to convert a relative path to an absolute path is to prepend getcwd():<br /><br /><span class="default">&lt;?php<br />$file </span><span class="keyword">= </span><span class="default">tempnam</span><span class="keyword">(</span><span class="string">'files/temp'</span><span class="keyword">, </span><span class="string">'tmp'</span><span class="keyword">); </span><span class="comment">// Wrong!<br /></span><span class="default">$file </span><span class="keyword">= </span><span class="default">tempnam</span><span class="keyword">(</span><span class="default">getcwd</span><span class="keyword">() . </span><span class="string">'files/tmp'</span><span class="keyword">, </span><span class="string">'tmp'</span><span class="keyword">) </span><span class="comment">// Right.<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122754">  <div class="votes">
    <div id="Vu122754">
    <a href="/manual/vote-note.php?id=122754&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122754">
    <a href="/manual/vote-note.php?id=122754&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122754" title="60% like this...">
    1
    </div>
  </div>
  <a href="#122754" class="name">
  <strong class="user"><em>david at frankieandshadow dot com</em></strong></a><a class="genanchor" href="#122754"> &para;</a><div class="date" title="2018-05-22 03:29"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122754">
<div class="phpcode"><code><span class="html">Debian 9 Stretch adds private temporary directories, so if you use this function when running as mod_php in Apache expecting that the file can be made available to a third party (e.g. in a shell command or a MariaDB load from temporary file command), it will no longer work: the file will not be visible to other processes, (though the same PHP will be able to read it back in).<br /><br />Either you need to use the first parameter to put the temporary file somewhere specific (outside the HTML document tree) with permissions such that you can share it with the other party, or change the settings for private tmp, for example:<br /><br />cp /lib/systemd/system/apache2.service /etc/systemd/system/<br /># edit /etc/systemd/system/ to change PrivateTmp=true to false<br />systemctl daemon-reload<br />service apache2 restart<br /><br />Choosing a different location is better on a shared server - private tmp files were added for a reason.<br /><br />This was something that puzzled me for ages when doing a recent OS upgrade.</span></code></div>
  </div>
 </div>
  <div class="note" id="37762">  <div class="votes">
    <div id="Vu37762">
    <a href="/manual/vote-note.php?id=37762&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37762">
    <a href="/manual/vote-note.php?id=37762&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37762" title="58% like this...">
    2
    </div>
  </div>
  <a href="#37762" class="name">
  <strong class="user"><em>phpdoc at rickbradley dot com</em></strong></a><a class="genanchor" href="#37762"> &para;</a><div class="date" title="2003-11-25 03:54"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37762">
<div class="phpcode"><code><span class="html">The "newtempnam" recipe provided below (posted by "tempnam" on " 23-Jul-2003 08:56") has at least one race condition.  The while loop checks to make sure that the file in question doesn't exist, and then goes and creates the file.  In between the existence test and the fopen() call there is an opportunity for an attacker to create the file in question.<br /><br />This is a classic race-condition, and while it seems difficult to exploit there are a number of well-known attacks against this kind of sloppy file creation.<br /><br />The atomic primitives necessary to implement secure file creation are not available at the language level in PHP.  This further underscores the need for PHP-language developers to rely on the language's security primitives (including tempnam() and tempfile()) instead of rolling their own.</span></code></div>
  </div>
 </div>
  <div class="note" id="97179">  <div class="votes">
    <div id="Vu97179">
    <a href="/manual/vote-note.php?id=97179&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97179">
    <a href="/manual/vote-note.php?id=97179&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97179" title="55% like this...">
    2
    </div>
  </div>
  <a href="#97179" class="name">
  <strong class="user"><em>anthon at piwik dot org</em></strong></a><a class="genanchor" href="#97179"> &para;</a><div class="date" title="2010-04-06 04:20"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97179">
<div class="phpcode"><code><span class="html">The file created by tempnam() will have file permissions that reflect the current umask applied to the default (e.g., 0600 or -rw-------).  This is the case whether the umask is set before starting the web server process, or set by an earlier call to PHP's umask() function.<br /><br />For example, if the current umask is 0022, the temporary file is created with permissions 0600 (read/write by owner).<br /><br />Also, if the current umask is 0222, the temporary file is created with permissions 0400 (read-only by owner).  (This is problematic if your code then tries to open the temporary file for writing.)<br /><br />It's important to remember that the umask revokes permissions.  In neither of the above examples are the group, other, or execute permissions set.<br /><br />See:  umask(), chmod().</span></code></div>
  </div>
 </div>
  <div class="note" id="88544">  <div class="votes">
    <div id="Vu88544">
    <a href="/manual/vote-note.php?id=88544&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88544">
    <a href="/manual/vote-note.php?id=88544&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88544" title="54% like this...">
    2
    </div>
  </div>
  <a href="#88544" class="name">
  <strong class="user"><em>hm2k at php dot net</em></strong></a><a class="genanchor" href="#88544"> &para;</a><div class="date" title="2009-01-28 09:15"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88544">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">tempdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">,</span><span class="default">$prefix</span><span class="keyword">=</span><span class="string">'php'</span><span class="keyword">) {<br />    </span><span class="default">$tempfile</span><span class="keyword">=</span><span class="default">tempnam</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">);<br />    if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$tempfile</span><span class="keyword">)) { </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$tempfile</span><span class="keyword">); }<br />    </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$tempfile</span><span class="keyword">);<br />    if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$tempfile</span><span class="keyword">)) { return </span><span class="default">$tempfile</span><span class="keyword">; }<br />}<br /><br /></span><span class="comment">/*example*/<br /><br /></span><span class="keyword">echo </span><span class="default">tempdir</span><span class="keyword">();<br /></span><span class="comment">// returns: /tmp/8e9MLi<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56894">  <div class="votes">
    <div id="Vu56894">
    <a href="/manual/vote-note.php?id=56894&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56894">
    <a href="/manual/vote-note.php?id=56894&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56894" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#56894" class="name">
  <strong class="user"><em>KOmaSHOOTER at gmx dot de</em></strong></a><a class="genanchor" href="#56894"> &para;</a><div class="date" title="2005-09-18 01:51"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56894">
<div class="phpcode"><code><span class="html">This Example makes a File called "user.txt"<br />in the dir www.XXXXX.XX/restricted/<br /><span class="default">&lt;?php<br />$tmpfname </span><span class="keyword">= </span><span class="default">tempnam</span><span class="keyword">(</span><span class="default">$_ENV</span><span class="keyword">[</span><span class="string">"DOCUMENT_ROOT"</span><span class="keyword">].</span><span class="string">"/restricted"</span><span class="keyword">, </span><span class="string">"FOO"</span><span class="keyword">);<br /></span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$tmpfname</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">);<br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="string">"writing to tempfile"</span><span class="keyword">);<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br /><br /></span><span class="comment">// do here something<br />//echo($_ENV["DOCUMENT_ROOT"]);<br /></span><span class="default">copy</span><span class="keyword">(</span><span class="default">$tmpfname</span><span class="keyword">,</span><span class="string">'user.txt'</span><span class="keyword">);<br /> </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49223">  <div class="votes">
    <div id="Vu49223">
    <a href="/manual/vote-note.php?id=49223&amp;page=function.tempnam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49223">
    <a href="/manual/vote-note.php?id=49223&amp;page=function.tempnam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49223" title="38% like this...">
    -3
    </div>
  </div>
  <a href="#49223" class="name">
  <strong class="user"><em>Nick Smith</em></strong></a><a class="genanchor" href="#49223"> &para;</a><div class="date" title="2005-01-20 11:35"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49223">
<div class="phpcode"><code><span class="html">It is worth noting that if the 'dir' that you supply doesn't exist, then it is silently ignored and the system /tmp directory used. At least under Linux, PHP v4.1.2.<br /><br />I had a script that appeared to work fine with safe mode switched off, but I didn't realise that my 'dir' parameter had a typo (so the files were going in /tmp), and once safe mode was switched on I started getting errors because the rest of the script couldn't read files from the system /tmp folder.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.tempnam&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.tempnam.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
