<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: is_link - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.is-link.php">
 <link rel="shorturl" href="https://www.php.net/is-link">
 <link rel="alternate" href="https://www.php.net/is-link" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.is-file.php">
 <link rel="next" href="https://www.php.net/manual/en/function.is-readable.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.is-link.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.is-link.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.is-link.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.is-link.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.is-link.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.is-link.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.is-link.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.is-link.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.is-link.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.is-link.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.is-link.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Tells whether the filename is a symbolic link" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: is_link - Manual" />
<meta name="twitter:description" content="Tells whether the filename is a symbolic link" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: is_link - Manual" />
<meta itemprop="description" content="Tells whether the filename is a symbolic link" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Tells whether the filename is a symbolic link" />

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
        <a href="function.is-readable.php">
          is_readable &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.is-file.php">
          &laquo; is_file        </a>
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
            <option value='en/function.is-link.php' selected="selected">English</option>
            <option value='de/function.is-link.php'>German</option>
            <option value='es/function.is-link.php'>Spanish</option>
            <option value='fr/function.is-link.php'>French</option>
            <option value='it/function.is-link.php'>Italian</option>
            <option value='ja/function.is-link.php'>Japanese</option>
            <option value='pt_BR/function.is-link.php'>Brazilian Portuguese</option>
            <option value='ru/function.is-link.php'>Russian</option>
            <option value='tr/function.is-link.php'>Turkish</option>
            <option value='uk/function.is-link.php'>Ukrainian</option>
            <option value='zh/function.is-link.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.is-link" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">is_link</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">is_link</span> &mdash; <span class="dc-title">Tells whether the filename is a symbolic link</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.is-link-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>is_link</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Tells whether the given file is a symbolic link.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.is-link-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       Path to the file.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.is-link-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the filename exists and is a symbolic link, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
   otherwise.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.is-link-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
Upon failure, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
</p>
 </div>

 
 <div class="refsect1 examples" id="refsect1-function.is-link-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2390">
    <p><strong>Example #1 Create and confirm if a file is a symbolic link</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$link </span><span style="color: #007700">= </span><span style="color: #DD0000">'uploads'</span><span style="color: #007700">;<br /><br />if (</span><span style="color: #0000BB">is_link</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #0000BB">readlink</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">);<br />} else {<br />    </span><span style="color: #0000BB">symlink</span><span style="color: #007700">(</span><span style="color: #DD0000">'uploads.php'</span><span style="color: #007700">, </span><span style="color: #0000BB">$link</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.is-link-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">The results of this
function are cached. See <span class="function"><a href="function.clearstatcache.php" class="function">clearstatcache()</a></span> for
more details.</span></p></blockquote>
  <div class="tip"><strong class="tip">Tip</strong><p class="simpara">As of PHP 5.0.0, this function
can also be used with <em>some</em> URL wrappers.  Refer to
<a href="wrappers.php" class="xref">Supported Protocols and Wrappers</a> to determine which wrappers support
<span class="function"><a href="function.stat.php" class="function">stat()</a></span> family of functionality.</p></div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.is-link-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.is-dir.php" class="function" rel="rdfs-seeAlso">is_dir()</a> - Tells whether the filename is a directory</span></li>
    <li><span class="function"><a href="function.is-file.php" class="function" rel="rdfs-seeAlso">is_file()</a> - Tells whether the filename is a regular file</span></li>
    <li><span class="function"><a href="function.readlink.php" class="function" rel="rdfs-seeAlso">readlink()</a> - Returns the target of a symbolic link</span></li>
    <li><span class="function"><a href="function.symlink.php" class="function" rel="rdfs-seeAlso">symlink()</a> - Creates a symbolic link</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/is-link.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.is-link%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.is-link&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.is-link.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="83312">  <div class="votes">
    <div id="Vu83312">
    <a href="/manual/vote-note.php?id=83312&amp;page=function.is-link&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83312">
    <a href="/manual/vote-note.php?id=83312&amp;page=function.is-link&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83312" title="73% like this...">
    9
    </div>
  </div>
  <a href="#83312" class="name">
  <strong class="user"><em>mbirth at webwriters dot de</em></strong></a><a class="genanchor" href="#83312"> &para;</a><div class="date" title="2008-05-20 08:24"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83312">
<div class="phpcode"><code><span class="html">To find out whether a file is hardlinked to another filename, check the number of links of the stat() output. If it is &gt;1 there is another filename for that file.<br /><br />To find out whether two filenames are pointing to the same file, check the inode number of those 2 filenames. If it is equal, the 2 filenames are hardlinked together.</span></code></div>
  </div>
 </div>
  <div class="note" id="91249">  <div class="votes">
    <div id="Vu91249">
    <a href="/manual/vote-note.php?id=91249&amp;page=function.is-link&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91249">
    <a href="/manual/vote-note.php?id=91249&amp;page=function.is-link&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91249" title="67% like this...">
    10
    </div>
  </div>
  <a href="#91249" class="name">
  <strong class="user"><em>PaulE</em></strong></a><a class="genanchor" href="#91249"> &para;</a><div class="date" title="2009-06-02 02:03"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91249">
<div class="phpcode"><code><span class="html">A workaround for Windows LNK files:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">_is_link</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)
<br />{
<br />    if(</span><span class="default">is_link</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">))
<br />        return </span><span class="default">true</span><span class="keyword">;
<br />
<br />    </span><span class="default">$ext </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">strrchr</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">), </span><span class="default">1</span><span class="keyword">);
<br />    if(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$ext</span><span class="keyword">) == </span><span class="string">'lnk'</span><span class="keyword">)
<br />    {
<br />        return (</span><span class="default">_readlink</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">) ? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false</span><span class="keyword">);
<br />    }
<br />
<br />    return </span><span class="default">false</span><span class="keyword">;
<br />}
<br />
<br />function </span><span class="default">_readlink</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)
<br />{
<br />    if(</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">))
<br />    {
<br />        if(</span><span class="default">is_link</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">))
<br />        {
<br />            return </span><span class="default">readlink</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />        }
<br />
<br />        </span><span class="comment">// Get file content
<br />        </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">"rb"</span><span class="keyword">);
<br />        </span><span class="default">$buffer </span><span class="keyword">= array();
<br />
<br />        while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">))
<br />        {
<br />            </span><span class="default">$buffer</span><span class="keyword">[] = </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />        }
<br />
<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br />
<br />        </span><span class="comment">// Test magic value and GUID
<br />        </span><span class="keyword">if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">) &lt; </span><span class="default">20</span><span class="keyword">)
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />        if(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] != </span><span class="string">'L'</span><span class="keyword">)
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />        if((</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]) != </span><span class="default">0x01</span><span class="keyword">) ||
<br />           (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">]) != </span><span class="default">0x14</span><span class="keyword">) ||
<br />           (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">]) != </span><span class="default">0x02</span><span class="keyword">) ||
<br />           (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]) != </span><span class="default">0x00</span><span class="keyword">) ||
<br />           (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">8</span><span class="keyword">]) != </span><span class="default">0x00</span><span class="keyword">) ||
<br />           (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">9</span><span class="keyword">]) != </span><span class="default">0x00</span><span class="keyword">) ||
<br />           (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">10</span><span class="keyword">]) != </span><span class="default">0x00</span><span class="keyword">) ||
<br />           (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">11</span><span class="keyword">]) != </span><span class="default">0x00</span><span class="keyword">) ||
<br />           (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">12</span><span class="keyword">]) != </span><span class="default">0xC0</span><span class="keyword">) ||
<br />           (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">13</span><span class="keyword">]) != </span><span class="default">0x00</span><span class="keyword">) ||
<br />           (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">14</span><span class="keyword">]) != </span><span class="default">0x00</span><span class="keyword">) ||
<br />           (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">15</span><span class="keyword">]) != </span><span class="default">0x00</span><span class="keyword">) ||
<br />           (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">16</span><span class="keyword">]) != </span><span class="default">0x00</span><span class="keyword">) ||
<br />           (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">17</span><span class="keyword">]) != </span><span class="default">0x00</span><span class="keyword">) ||
<br />           (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">18</span><span class="keyword">]) != </span><span class="default">0x00</span><span class="keyword">) ||
<br />           (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">19</span><span class="keyword">]) != </span><span class="default">0x46</span><span class="keyword">))
<br />        {
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />        }
<br />
<br />        </span><span class="default">$i </span><span class="keyword">= </span><span class="default">20</span><span class="keyword">;
<br />        if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">) &lt; (</span><span class="default">$i </span><span class="keyword">+ </span><span class="default">4</span><span class="keyword">))
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />
<br />        </span><span class="default">$flags </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);
<br />        </span><span class="default">$flags </span><span class="keyword">= </span><span class="default">$flags </span><span class="keyword">| (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">]) &lt;&lt; </span><span class="default">8</span><span class="keyword">);
<br />        </span><span class="default">$flags </span><span class="keyword">= </span><span class="default">$flags </span><span class="keyword">| (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">]) &lt;&lt; </span><span class="default">16</span><span class="keyword">);
<br />        </span><span class="default">$flags </span><span class="keyword">= </span><span class="default">$flags </span><span class="keyword">| (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">]) &lt;&lt; </span><span class="default">24</span><span class="keyword">);
<br />
<br />        </span><span class="default">$hasShellItemIdList </span><span class="keyword">= (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">0x00000001</span><span class="keyword">) ? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false</span><span class="keyword">;
<br />        </span><span class="default">$pointsToFileOrDir </span><span class="keyword">= (</span><span class="default">$flags </span><span class="keyword">&amp; </span><span class="default">0x00000002</span><span class="keyword">) ? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false</span><span class="keyword">;
<br />
<br />        if(!</span><span class="default">$pointsToFileOrDir</span><span class="keyword">)
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />
<br />        if(</span><span class="default">$hasShellItemIdList</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$i </span><span class="keyword">= </span><span class="default">76</span><span class="keyword">;
<br />            if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">) &lt; (</span><span class="default">$i </span><span class="keyword">+ </span><span class="default">2</span><span class="keyword">))
<br />                return </span><span class="default">false</span><span class="keyword">;
<br />
<br />            </span><span class="default">$a </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);
<br />            </span><span class="default">$a </span><span class="keyword">= </span><span class="default">$a </span><span class="keyword">| (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">]) &lt;&lt; </span><span class="default">8</span><span class="keyword">);
<br />            
<br />        }
<br />
<br />        </span><span class="default">$i </span><span class="keyword">= </span><span class="default">78 </span><span class="keyword">+ </span><span class="default">4 </span><span class="keyword">+ </span><span class="default">$a</span><span class="keyword">;
<br />        if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">) &lt; (</span><span class="default">$i </span><span class="keyword">+ </span><span class="default">4</span><span class="keyword">))
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />
<br />        </span><span class="default">$b </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);
<br />        </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$b </span><span class="keyword">| (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">]) &lt;&lt; </span><span class="default">8</span><span class="keyword">);
<br />        </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$b </span><span class="keyword">| (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">]) &lt;&lt; </span><span class="default">16</span><span class="keyword">);
<br />        </span><span class="default">$b </span><span class="keyword">= </span><span class="default">$b </span><span class="keyword">| (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">]) &lt;&lt; </span><span class="default">24</span><span class="keyword">);
<br />
<br />        </span><span class="default">$i </span><span class="keyword">= </span><span class="default">78 </span><span class="keyword">+ </span><span class="default">$a </span><span class="keyword">+ </span><span class="default">$b</span><span class="keyword">;
<br />        if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">) &lt; (</span><span class="default">$i </span><span class="keyword">+ </span><span class="default">4</span><span class="keyword">))
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />
<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);
<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">$c </span><span class="keyword">| (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">]) &lt;&lt; </span><span class="default">8</span><span class="keyword">);
<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">$c </span><span class="keyword">| (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">]) &lt;&lt; </span><span class="default">16</span><span class="keyword">);
<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">$c </span><span class="keyword">| (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[++</span><span class="default">$i</span><span class="keyword">]) &lt;&lt; </span><span class="default">24</span><span class="keyword">);
<br />
<br />        </span><span class="default">$i </span><span class="keyword">= </span><span class="default">78 </span><span class="keyword">+ </span><span class="default">$a </span><span class="keyword">+ </span><span class="default">$b </span><span class="keyword">+ </span><span class="default">$c</span><span class="keyword">;
<br />        if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">) &lt; (</span><span class="default">$i </span><span class="keyword">+</span><span class="default">1</span><span class="keyword">))
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />
<br />        </span><span class="default">$linkedTarget </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />        for(;</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">); ++</span><span class="default">$i</span><span class="keyword">)
<br />        {
<br />            if(!</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]))
<br />                break;
<br />
<br />            </span><span class="default">$linkedTarget </span><span class="keyword">.= </span><span class="default">$buffer</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />        }
<br />
<br />        if(empty(</span><span class="default">$linkedTarget</span><span class="keyword">))
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />
<br />        
<br />        return </span><span class="default">$linkedTarget</span><span class="keyword">;
<br />    }
<br />
<br />    return </span><span class="default">false</span><span class="keyword">;
<br />}
<br />
<br />if(</span><span class="default">_is_link</span><span class="keyword">(</span><span class="string">'test.lnk'</span><span class="keyword">))
<br />{
<br />    echo </span><span class="default">_readlink</span><span class="keyword">(</span><span class="string">'test.lnk'</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121664">  <div class="votes">
    <div id="Vu121664">
    <a href="/manual/vote-note.php?id=121664&amp;page=function.is-link&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121664">
    <a href="/manual/vote-note.php?id=121664&amp;page=function.is-link&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121664" title="66% like this...">
    1
    </div>
  </div>
  <a href="#121664" class="name">
  <strong class="user"><em>msaladna at apisnetworks dot com</em></strong></a><a class="genanchor" href="#121664"> &para;</a><div class="date" title="2017-09-21 03:55"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121664">
<div class="phpcode"><code><span class="html">Careful when using is_link() in thread-safe builds with the self-referential directory entry ".". On ZTS builds is_link("/home/symlink/.") will return true whereas it returns false on non-ZTS builds.</span></code></div>
  </div>
 </div>
  <div class="note" id="113263">  <div class="votes">
    <div id="Vu113263">
    <a href="/manual/vote-note.php?id=113263&amp;page=function.is-link&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113263">
    <a href="/manual/vote-note.php?id=113263&amp;page=function.is-link&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113263" title="58% like this...">
    2
    </div>
  </div>
  <a href="#113263" class="name">
  <strong class="user"><em>gggeek</em></strong></a><a class="genanchor" href="#113263"> &para;</a><div class="date" title="2013-09-18 08:53"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113263">
<div class="phpcode"><code><span class="html">On windows, take care that is_link returns false for Junctions.<br />Ways of telling apart a directory from a junction include doing both a stat() and and lstat() call and checking if there is any difference in the results</span></code></div>
  </div>
 </div>
  <div class="note" id="72038">  <div class="votes">
    <div id="Vu72038">
    <a href="/manual/vote-note.php?id=72038&amp;page=function.is-link&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72038">
    <a href="/manual/vote-note.php?id=72038&amp;page=function.is-link&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72038" title="57% like this...">
    1
    </div>
  </div>
  <a href="#72038" class="name">
  <strong class="user"><em>neverpanic-&gt;gmail[com]</em></strong></a><a class="genanchor" href="#72038"> &para;</a><div class="date" title="2006-12-30 02:50"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72038">
<div class="phpcode"><code><span class="html">For me (Debian Sarge VPS) is_link returns true even for directories if you don't add a trailing slash to the filename.<br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">$dir</span><span class="keyword">{</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">} == </span><span class="string">'/'</span><span class="keyword">) </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">is_link</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>This works for me. It can't detect a symlink somewhere in a complete path, though (i.e. is_link(/www/somedir/file.php) will return false, just as is_link(/www/) would)</span></code></div>
  </div>
 </div>
  <div class="note" id="86439">  <div class="votes">
    <div id="Vu86439">
    <a href="/manual/vote-note.php?id=86439&amp;page=function.is-link&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86439">
    <a href="/manual/vote-note.php?id=86439&amp;page=function.is-link&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86439" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#86439" class="name">
  <strong class="user"><em>foobarfarter</em></strong></a><a class="genanchor" href="#86439"> &para;</a><div class="date" title="2008-10-18 03:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86439">
<div class="phpcode"><code><span class="html">@radon8472 at hotmail dot com<br />The windows .lnk-things are real files, the explorer only treats them like links. Try to open one with Win+R-&gt;"notepad X:\Path\Visiblefilename.lnk You will see much 0-Bytes, but the linked path is displayed right on the screen. It should be possible to do the same by php.</span></code></div>
  </div>
 </div>
  <div class="note" id="21972">  <div class="votes">
    <div id="Vu21972">
    <a href="/manual/vote-note.php?id=21972&amp;page=function.is-link&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd21972">
    <a href="/manual/vote-note.php?id=21972&amp;page=function.is-link&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V21972" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#21972" class="name">
  <strong class="user"><em>andudi at gmx dot ch</em></strong></a><a class="genanchor" href="#21972"> &para;</a><div class="date" title="2002-06-02 10:44"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom21972">
<div class="phpcode"><code><span class="html">On my SuSE 7.2 is_link does not work on directories, but to find out, if a dir is a link, I use now this:<br /><br />$linkdir = $path.$linkdirname;<br />if (realpath($linkdir) != realpath($path)."/".$linkdirname):<br />//$linkdir is a symbolic linked dir!<br />...<br /><br />and this works fine :-)<br /><br />Andreas Dick</span></code></div>
  </div>
 </div>
  <div class="note" id="65706">  <div class="votes">
    <div id="Vu65706">
    <a href="/manual/vote-note.php?id=65706&amp;page=function.is-link&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65706">
    <a href="/manual/vote-note.php?id=65706&amp;page=function.is-link&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65706" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#65706" class="name">
  <strong class="user"><em>brendy at gmail dot com</em></strong></a><a class="genanchor" href="#65706"> &para;</a><div class="date" title="2006-05-05 07:22"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65706">
<div class="phpcode"><code><span class="html">On Mac OSX, to see if a file is a FInder alias:<br /><br /><span class="default">&lt;?PHP<br /></span><span class="keyword">if( </span><span class="default">getFinderAlias</span><span class="keyword">( </span><span class="default">$someFile </span><span class="keyword">, </span><span class="default">$target </span><span class="keyword">) ) {<br /> echo </span><span class="default">$target</span><span class="keyword">;<br />}<br />else {<br /> echo </span><span class="string">"File is not an alias"</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">getFinderAlias</span><span class="keyword">( </span><span class="default">$filename </span><span class="keyword">, &amp;</span><span class="default">$target </span><span class="keyword">) {<br /></span><span class="default">$getAliasTarget </span><span class="keyword">= &lt;&lt;&lt; HEREDOC<br /></span><span class="string">    -- BEGIN APPLESCRIPT --<br />    set checkFileStr to "</span><span class="keyword">{</span><span class="default">$filename</span><span class="keyword">}</span><span class="string">"<br />    set checkFile to checkFileStr as POSIX file<br />    try<br />        tell application "Finder"<br />            if original item of file checkFile exists then<br />                set targetFile to (original item of file checkFile) as alias<br />                set posTargetFile to POSIX path of targetFile as text<br />                get posTargetFile<br />            end if<br />        end tell<br />    end try<br />    -- END APPLESCRIPT --<br /></span><span class="keyword">HEREDOC;<br /></span><span class="default">$runText </span><span class="keyword">= </span><span class="string">"osascript &lt;&lt; EOS\n</span><span class="keyword">{</span><span class="default">$getAliasTarget</span><span class="keyword">}</span><span class="string">\nEOS\n"</span><span class="keyword">;<br /></span><span class="default">$target </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">( </span><span class="default">shell_exec</span><span class="keyword">( </span><span class="default">$runText </span><span class="keyword">) );<br />return ( </span><span class="default">$target </span><span class="keyword">== </span><span class="string">"" </span><span class="keyword">? </span><span class="default">false </span><span class="keyword">: </span><span class="default">true </span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.is-link&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.is-link.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
