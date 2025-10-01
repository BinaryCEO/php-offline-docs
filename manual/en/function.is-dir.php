<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: is_dir - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.is-dir.php">
 <link rel="shorturl" href="https://www.php.net/is-dir">
 <link rel="alternate" href="https://www.php.net/is-dir" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.glob.php">
 <link rel="next" href="https://www.php.net/manual/en/function.is-executable.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.is-dir.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.is-dir.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.is-dir.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.is-dir.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.is-dir.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.is-dir.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.is-dir.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.is-dir.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.is-dir.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.is-dir.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.is-dir.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Tells whether the filename is a directory" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: is_dir - Manual" />
<meta name="twitter:description" content="Tells whether the filename is a directory" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: is_dir - Manual" />
<meta itemprop="description" content="Tells whether the filename is a directory" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Tells whether the filename is a directory" />

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
        <a href="function.is-executable.php">
          is_executable &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.glob.php">
          &laquo; glob        </a>
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
            <option value='en/function.is-dir.php' selected="selected">English</option>
            <option value='de/function.is-dir.php'>German</option>
            <option value='es/function.is-dir.php'>Spanish</option>
            <option value='fr/function.is-dir.php'>French</option>
            <option value='it/function.is-dir.php'>Italian</option>
            <option value='ja/function.is-dir.php'>Japanese</option>
            <option value='pt_BR/function.is-dir.php'>Brazilian Portuguese</option>
            <option value='ru/function.is-dir.php'>Russian</option>
            <option value='tr/function.is-dir.php'>Turkish</option>
            <option value='uk/function.is-dir.php'>Ukrainian</option>
            <option value='zh/function.is-dir.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.is-dir" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">is_dir</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">is_dir</span> &mdash; <span class="dc-title">Tells whether the filename is a directory</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.is-dir-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>is_dir</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Tells whether the given filename is a directory.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.is-dir-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       Path to the file. If <code class="parameter">filename</code> is a relative
       filename, it will be checked relative to the current working
       directory. If <code class="parameter">filename</code> is a symbolic or hard link 
       then the link will be resolved and checked. If you have enabled
       <a href="ini.core.php#ini.open-basedir" class="link">open_basedir</a> further
       restrictions may apply.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.is-dir-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the filename exists and is a directory, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
   otherwise.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.is-dir-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
Upon failure, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
</p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.is-dir-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2387">
    <p><strong>Example #1 <span class="function"><strong>is_dir()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #DD0000">'a_file.txt'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #DD0000">'bogus_dir/abc'</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #DD0000">'..'</span><span style="color: #007700">)); </span><span style="color: #FF8000">//one dir up<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">bool(false)
bool(false)
bool(true)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.is-dir-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">The results of this
function are cached. See <span class="function"><a href="function.clearstatcache.php" class="function">clearstatcache()</a></span> for
more details.</span></p></blockquote>
  <div class="tip"><strong class="tip">Tip</strong><p class="simpara">As of PHP 5.0.0, this function
can also be used with <em>some</em> URL wrappers.  Refer to
<a href="wrappers.php" class="xref">Supported Protocols and Wrappers</a> to determine which wrappers support
<span class="function"><a href="function.stat.php" class="function">stat()</a></span> family of functionality.</p></div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.is-dir-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.chdir.php" class="function" rel="rdfs-seeAlso">chdir()</a> - Change directory</span></li>
    <li><span class="function"><a href="function.dir.php" class="function" rel="rdfs-seeAlso">dir()</a> - Return an instance of the Directory class</span></li>
    <li><span class="function"><a href="function.opendir.php" class="function" rel="rdfs-seeAlso">opendir()</a> - Open directory handle</span></li>
    <li><span class="function"><a href="function.is-file.php" class="function" rel="rdfs-seeAlso">is_file()</a> - Tells whether the filename is a regular file</span></li>
    <li><span class="function"><a href="function.is-link.php" class="function" rel="rdfs-seeAlso">is_link()</a> - Tells whether the filename is a symbolic link</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/is-dir.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.is-dir%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.is-dir&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.is-dir.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">20 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118314">  <div class="votes">
    <div id="Vu118314">
    <a href="/manual/vote-note.php?id=118314&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118314">
    <a href="/manual/vote-note.php?id=118314&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118314" title="64% like this...">
    14
    </div>
  </div>
  <a href="#118314" class="name">
  <strong class="user"><em>thomas at thomasnoest dot nl</em></strong></a><a class="genanchor" href="#118314"> &para;</a><div class="date" title="2015-11-15 11:39"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118314">
<div class="phpcode"><code><span class="html">Note that on Linux is_dir returns FALSE if a parent directory does not have +x (executable) set for the php process.</span></code></div>
  </div>
 </div>
  <div class="note" id="98338">  <div class="votes">
    <div id="Vu98338">
    <a href="/manual/vote-note.php?id=98338&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98338">
    <a href="/manual/vote-note.php?id=98338&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98338" title="61% like this...">
    15
    </div>
  </div>
  <a href="#98338" class="name">
  <strong class="user"><em>digitalaudiorock at gmail dot com</em></strong></a><a class="genanchor" href="#98338"> &para;</a><div class="date" title="2010-06-09 12:48"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98338">
<div class="phpcode"><code><span class="html">Just a note for anyone who encounters is_dir() returning false on CIFS mount points or directories within those mount points on 2.6.31 and newer kernels: Apparently in new kernels they've started using the CIFS serverino option by default.  With Windows shares this causes huge inode numbers and which apparently can cause is_dir() to return false.  Adding the noserverino option to the CIFS mount will prevent this.  This may only occur on 32 systems but I don't have a 64 bit install to test against.</span></code></div>
  </div>
 </div>
  <div class="note" id="42770">  <div class="votes">
    <div id="Vu42770">
    <a href="/manual/vote-note.php?id=42770&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42770">
    <a href="/manual/vote-note.php?id=42770&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42770" title="66% like this...">
    12
    </div>
  </div>
  <a href="#42770" class="name">
  <strong class="user"><em>sly at noiretblanc dot org</em></strong></a><a class="genanchor" href="#42770"> &para;</a><div class="date" title="2004-05-28 10:10"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42770">
<div class="phpcode"><code><span class="html">This is the "is_dir" function I use to solve the problems :<br /><br />function Another_is_dir ($file)<br />{<br />    if ((fileperms("$file") &amp; 0x4000) == 0x4000)<br />        return TRUE;<br />    else<br />        return FALSE;<br />}<br /><br />or, more simple :<br /><br />function Another_is_dir ($file)<br />{ <br />return ((fileperms("$file") &amp; 0x4000) == 0x4000);<br />}<br /><br />I can't remember where it comes from, but it works fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="118016">  <div class="votes">
    <div id="Vu118016">
    <a href="/manual/vote-note.php?id=118016&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118016">
    <a href="/manual/vote-note.php?id=118016&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118016" title="64% like this...">
    9
    </div>
  </div>
  <a href="#118016" class="name">
  <strong class="user"><em>jonlulf at gmail dot com</em></strong></a><a class="genanchor" href="#118016"> &para;</a><div class="date" title="2015-09-18 02:26"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom118016">
<div class="phpcode"><code><span class="html">My solution to the problem that you must include the full path to make "is_dir" work properly as a complete example:<br /><br />    &lt;? // findfiles.php  -  what is in directory "videoarchive"<br />    $dir    = 'images/videoarchive/'; // path from top<br />    $files = scandir($dir);<br />    $files_n = count($files);<br /><br />    <br />    $i=0;<br />    while($i&lt;=$files_n){<br />        // "is_dir" only works from top directory, so append the $dir before the file<br />        if (is_dir($dir.'/'.$files[$i])){   <br />            $MyFileType[$i] = "D" ; // D for Directory<br />        } else{<br />            $MyFileType[$i] = "F" ; // F for File<br />        }<br />        // print itemNo, itemType(D/F) and itemname<br />        echo '&lt;br&gt;'.$i.'. '. $MyFileType[$i].'. ' .$files[$i] ;<br />        $i++;<br />    }<br />    ?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="111910">  <div class="votes">
    <div id="Vu111910">
    <a href="/manual/vote-note.php?id=111910&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111910">
    <a href="/manual/vote-note.php?id=111910&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111910" title="57% like this...">
    2
    </div>
  </div>
  <a href="#111910" class="name">
  <strong class="user"><em>niceuser at live dot com</em></strong></a><a class="genanchor" href="#111910"> &para;</a><div class="date" title="2013-04-10 07:20"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111910">
<div class="phpcode"><code><span class="html">PITFALL in sub dir processing<br /><br />After struggeling with a sub-dir processing (some subdirs were skipped) AND reading the posts, I realized that virutally no-one clearly told what were wrong.<br /><br />The common traverse dir code was:<br />-----------------------------------------<br /><br />opendir("myphotos"); // Top dir to process from (example)<br /> <br />while (false !== ($fname = readdir($h_dir))) { // process current dir (read a directory entry)<br /><br />   if ($fname{0} == '.') continue; // skip dirs . and .. by first char test<br /><br />   if (is_dir($fname)) call_own_subdir_process;  // process this subdir by calling a routine<br /><br />   }<br /><br />PROBLEM IS :<br /><br />The "is_dir()" must have the FULL PATH or it will skip some dirs. So the above code need to INSERT THE PATH before the filename. This would give this change in above...<br /><br />   if (is_dir("myphotos\" . $fname)) call_own_subdir_process;  // skip subdirs<br /><br />The pitfall really was, that without full path some subdirs were found...hope this clears all up</span></code></div>
  </div>
 </div>
  <div class="note" id="90457">  <div class="votes">
    <div id="Vu90457">
    <a href="/manual/vote-note.php?id=90457&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90457">
    <a href="/manual/vote-note.php?id=90457&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90457" title="56% like this...">
    2
    </div>
  </div>
  <a href="#90457" class="name">
  <strong class="user"><em>vstoykov at consultant dot bg</em></strong></a><a class="genanchor" href="#90457"> &para;</a><div class="date" title="2009-04-23 03:43"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90457">
<div class="phpcode"><code><span class="html">When trying (no 'pear') to enumerate mounted drives on a win32  platform (Win XP SP3, Apache/2.2.11, PHP/5.2.9), I used:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">echo_win_drives</span><span class="keyword">() {<br /><br />  for(</span><span class="default">$c</span><span class="keyword">=</span><span class="string">'A'</span><span class="keyword">; </span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="string">'Z'</span><span class="keyword">; </span><span class="default">$c</span><span class="keyword">++) <br />    if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$c </span><span class="keyword">. </span><span class="string">':'</span><span class="keyword">))<br />      echo </span><span class="default">$c </span><span class="keyword">. </span><span class="string">': '</span><span class="keyword">; <br />}<br /></span><span class="default">?&gt;<br /></span><br />which yielded:<br />A: C: D: E: F: G: H: I:</span></code></div>
  </div>
 </div>
  <div class="note" id="70712">  <div class="votes">
    <div id="Vu70712">
    <a href="/manual/vote-note.php?id=70712&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70712">
    <a href="/manual/vote-note.php?id=70712&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70712" title="55% like this...">
    1
    </div>
  </div>
  <a href="#70712" class="name">
  <strong class="user"><em>Eric</em></strong></a><a class="genanchor" href="#70712"> &para;</a><div class="date" title="2006-10-24 01:53"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70712">
<div class="phpcode"><code><span class="html">Ah ha!  Maybe this is a bug, or limitation to be more precise, of php. See <a href="http://bugs.php.net/bug.php?id=27792" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=27792</a><br /><br />A workaround is posted on the page (above) and seems to work for me:<br /><br />function is_dir_LFS($path){<br />  return (('d'==substr(exec("ls -dl '$path'"),0,1))?(true):(false));<br />}<br /><br />PS: I'm using PHP 4.3.10-16, posts report this problem up to 5.0</span></code></div>
  </div>
 </div>
  <div class="note" id="73478">  <div class="votes">
    <div id="Vu73478">
    <a href="/manual/vote-note.php?id=73478&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73478">
    <a href="/manual/vote-note.php?id=73478&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73478" title="53% like this...">
    1
    </div>
  </div>
  <a href="#73478" class="name">
  <strong class="user"><em>gecko4 at gmail dot com</em></strong></a><a class="genanchor" href="#73478"> &para;</a><div class="date" title="2007-02-24 09:03"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73478">
<div class="phpcode"><code><span class="html">Here is another way to test if a directory is empty, which I think is much simpler than those posted below:<br /><br /><span class="default">&lt;?php<br />$dir </span><span class="keyword">= </span><span class="string">'directory'</span><span class="keyword">;<br />echo (</span><span class="default">count</span><span class="keyword">(</span><span class="default">glob</span><span class="keyword">(</span><span class="string">"</span><span class="default">$dir</span><span class="string">/*"</span><span class="keyword">)) === </span><span class="default">0</span><span class="keyword">) ? </span><span class="string">'Empty' </span><span class="keyword">: </span><span class="string">'Not empty'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76513">  <div class="votes">
    <div id="Vu76513">
    <a href="/manual/vote-note.php?id=76513&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76513">
    <a href="/manual/vote-note.php?id=76513&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76513" title="52% like this...">
    1
    </div>
  </div>
  <a href="#76513" class="name">
  <strong class="user"><em>danr at cvisual dot com dot com</em></strong></a><a class="genanchor" href="#76513"> &para;</a><div class="date" title="2007-07-18 02:54"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76513">
<div class="phpcode"><code><span class="html">Running PHP 5.2.0 on Apache Windows, I had a problem (likely the same one as described by others) where is_dir returned a False for directories with certain permissions even though they were accessible.<br /><br />Strangely, I was able to overcome the problem with a more complete path. For example, this only displays "Works" on subdirectories with particular permissions (in this directory about 1 out of 3):<br /><br />$d = opendir("./albums/mydir");<br />while(false !== ($f = readdir($d))) {<br />    echo "&lt;hr /&gt;";<br />        if(is_dir($f)) {<br />            echo "&lt;b&gt;Works:" . $f . "&lt;/b&gt;";<br />        }<br />}<br /><br />However, this works properly for all directories:<br /><br />$d = opendir("./albums/mydir");<br />while(false !== ($f = readdir($d))) {<br />    echo "&lt;hr /&gt;";<br />        $dName = "./albums/mydir/" . $f;<br />        if(is_dir($dName)) {<br />            echo "&lt;b&gt;Works:" . $dName . "&lt;/b&gt;";<br />        }<br />}<br /><br />I don't understand the hit-and-miss of the first code, but maybe the second code can help others having this problem.</span></code></div>
  </div>
 </div>
  <div class="note" id="79889">  <div class="votes">
    <div id="Vu79889">
    <a href="/manual/vote-note.php?id=79889&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79889">
    <a href="/manual/vote-note.php?id=79889&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79889" title="52% like this...">
    1
    </div>
  </div>
  <a href="#79889" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#79889"> &para;</a><div class="date" title="2007-12-17 11:51"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79889">
<div class="phpcode"><code><span class="html">One note regarding checking for empty directories :<br />&gt;&gt;echo (count(glob("$dir/*")) === 0) ? 'Empty' : 'Not empty';<br />This does not work correctly on Linux.<br />The '.' and '..' will always be returned even if no files are present in the directory.</span></code></div>
  </div>
 </div>
  <div class="note" id="49788">  <div class="votes">
    <div id="Vu49788">
    <a href="/manual/vote-note.php?id=49788&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49788">
    <a href="/manual/vote-note.php?id=49788&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49788" title="52% like this...">
    1
    </div>
  </div>
  <a href="#49788" class="name">
  <strong class="user"><em>puremango dot co dot uk at gmail dot com</em></strong></a><a class="genanchor" href="#49788"> &para;</a><div class="date" title="2005-02-08 11:55"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49788">
<div class="phpcode"><code><span class="html">this function bypasses open_basedir restrictions.<br />&lt;?<br />function my_is_dir($dir)<br />{<br />    // bypasses open_basedir restrictions of is_dir and fileperms<br />    $tmp_cmd = `ls -dl $dir`;<br />    $dir_flag = $tmp_cmd[0];<br />    if($dir_flag!="d")<br />    {<br />        // not d; use next char (first char might be 's' and is still directory)<br />        $dir_flag = $tmp_cmd[1];<br />    }<br />    return ($dir_flag=="d");<br />}<br />?&gt;<br /><br />example:<br />&lt;?<br />....<br />echo is_dir("/somewhere/i/dont/have/access/to");<br />?&gt;<br />output:<br />Warning: open_basedir restriction in effect<br /><br />&lt;?<br />....<br />echo my_is_dir("/somewhere/i/dont/have/access/to");<br />?&gt;<br />output:<br />true (or false, depending whether it is or not...)<br /><br />---<br />visit puremango.co.uk for other such wonders</span></code></div>
  </div>
 </div>
  <div class="note" id="128454">  <div class="votes">
    <div id="Vu128454">
    <a href="/manual/vote-note.php?id=128454&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128454">
    <a href="/manual/vote-note.php?id=128454&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128454" title="no votes...">
    0
    </div>
  </div>
  <a href="#128454" class="name">
  <strong class="user"><em>musicmaster</em></strong></a><a class="genanchor" href="#128454"> &para;</a><div class="date" title="2023-05-07 07:01"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128454">
<div class="phpcode"><code><span class="html">is_dir() doesn't work with a directory that has the name "0" (a single zero). Neither does realpath().<br /><br />This is my experience with PHP 7.4.</span></code></div>
  </div>
 </div>
  <div class="note" id="123573">  <div class="votes">
    <div id="Vu123573">
    <a href="/manual/vote-note.php?id=123573&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123573">
    <a href="/manual/vote-note.php?id=123573&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123573" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123573" class="name">
  <strong class="user"><em>jerome dot pros at gmail dot com</em></strong></a><a class="genanchor" href="#123573"> &para;</a><div class="date" title="2019-01-31 08:40"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123573">
<div class="phpcode"><code><span class="html">Note that is_dir() also works with <a href="ftp://." rel="nofollow" target="_blank">ftp://.</a><br /><br />For example :<br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="string">'<a href="ftp://user:pass@host/www/path/to/your/folder" rel="nofollow" target="_blank">ftp://user:pass@host/www/path/to/your/folder</a>'</span><span class="keyword">)) {<br />    </span><span class="comment">// Your code.<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />But note that if the connexion fails due to invalide credentials, this will consider that the folder doesn't exist and will return FALSE.</span></code></div>
  </div>
 </div>
  <div class="note" id="118994">  <div class="votes">
    <div id="Vu118994">
    <a href="/manual/vote-note.php?id=118994&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118994">
    <a href="/manual/vote-note.php?id=118994&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118994" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#118994" class="name">
  <strong class="user"><em>Bjrn K.</em></strong></a><a class="genanchor" href="#118994"> &para;</a><div class="date" title="2016-03-14 03:17"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118994">
<div class="phpcode"><code><span class="html">Note that this functions follows symbolic links. It will return true if the file is actually a symlink that points to a directory.<br /><br />An example:<br />&lt;php<br />symlink(".", "testlink");<br />var_dump(is_dir("testlink"));<br />unlink("testlink");<br />?&gt;<br /><br />Prints out:<br />bool(true)<br /><br />(Windows Note: Under recent versions of Windows you can set symlinks as long as you're administrator, but you cannot remove directory symlinks with "unlink()", you will have to use "rmdir testlink" from the shell to get rid of it.)</span></code></div>
  </div>
 </div>
  <div class="note" id="119541">  <div class="votes">
    <div id="Vu119541">
    <a href="/manual/vote-note.php?id=119541&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119541">
    <a href="/manual/vote-note.php?id=119541&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119541" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#119541" class="name">
  <strong class="user"><em>citizenmarco at gmail dot com</em></strong></a><a class="genanchor" href="#119541"> &para;</a><div class="date" title="2016-07-03 05:25"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119541">
<div class="phpcode"><code><span class="html">Note that there quite a few articles on the net that imply that commands like is_dir, opendir, readdir cannot read paths with spaces.<br /><br />On a linux box, THAT is not an issue. <br /><br />Sample test code;<br /><br /> $dir = "Images/Soma ALbum Name with spaces";<br />     <br /><br />echo $dir."&lt;br/&gt;";<br /><br />// Open a directory, and read its contents<br />if (is_dir($dir)){<br />  echo $dir."&lt;br/&gt;"; // will not appear if above fails<br />    if ($dh = opendir($dir)){<br />      echo $dir."&lt;br/&gt;"; // will not appear if above fails<br />      while (($file = readdir($dh)) !== false){<br />        echo "filename:" . $file . "&lt;br&gt;";<br />        echo $dir."&lt;br/&gt;"; // will not appear if above fails<br />      }<br />      closedir($dh);<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="111654">  <div class="votes">
    <div id="Vu111654">
    <a href="/manual/vote-note.php?id=111654&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111654">
    <a href="/manual/vote-note.php?id=111654&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111654" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#111654" class="name">
  <strong class="user"><em>Victor</em></strong></a><a class="genanchor" href="#111654"> &para;</a><div class="date" title="2013-03-13 03:37"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111654">
<div class="phpcode"><code><span class="html">If you are using Mac, or others systems that store information about the directory layout and etc, the function:<br /><br />   function empty_dir($dir) {<br />        if (($files = @scandir($dir)) &amp;&amp; count($files) &lt;= 3)<br />            return true;<br />        else<br />            return false;<br />    }<br /><br />Must have the count($files) comparing with the number of hidden files!<br /><br />For example, I'm using Mac and the empty directory shows me three files: ".", ".." and ".DS_Store", so if I am planning to put the website online on my Mac, I've to count in the ".DS_Store" file!</span></code></div>
  </div>
 </div>
  <div class="note" id="85428">  <div class="votes">
    <div id="Vu85428">
    <a href="/manual/vote-note.php?id=85428&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85428">
    <a href="/manual/vote-note.php?id=85428&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85428" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#85428" class="name">
  <strong class="user"><em>jasoneisen at gee mail</em></strong></a><a class="genanchor" href="#85428"> &para;</a><div class="date" title="2008-08-29 08:53"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85428">
<div class="phpcode"><code><span class="html">An even better (PHP 5 only) alternative to "Davy Defaud's function": <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">is_empty_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)<br />{<br />    if ((</span><span class="default">$files </span><span class="keyword">= @</span><span class="default">scandir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) &amp;&amp; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$files</span><span class="keyword">) &lt;= </span><span class="default">2</span><span class="keyword">) {<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br />    return </span><span class="default">false</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />NOTE: you should obviously be checking beforehand if $dir is actually a directory, and that it is readable, as only relying on this you would assume that in both cases you have a non-empty readable directory.</span></code></div>
  </div>
 </div>
  <div class="note" id="49611">  <div class="votes">
    <div id="Vu49611">
    <a href="/manual/vote-note.php?id=49611&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49611">
    <a href="/manual/vote-note.php?id=49611&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49611" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#49611" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#49611"> &para;</a><div class="date" title="2005-02-02 04:12"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49611">
<div class="phpcode"><code><span class="html">Unfortunately, the function posted by p dot marzec at bold-sg dot pl does not work.<br />The corrected version is:<br /><br />// returns true if folder is empty or not existing<br />// false if folde is full<br /><br />function is_empty_folder($dir) {<br />if (is_dir($dir)) {<br />   $dl=opendir($dir);<br />   if ($dl) {<br />       while($name = readdir($dl)) {<br />   if (!is_dir("$dir/$name")) { //&lt;--- corrected here<br />       return false;<br />       break;<br />       }<br />   }<br />       closedir($dl);<br />       }<br />   return true;<br />   } else return true;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="85961">  <div class="votes">
    <div id="Vu85961">
    <a href="/manual/vote-note.php?id=85961&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85961">
    <a href="/manual/vote-note.php?id=85961&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85961" title="41% like this...">
    -5
    </div>
  </div>
  <a href="#85961" class="name">
  <strong class="user"><em>Btx</em></strong></a><a class="genanchor" href="#85961"> &para;</a><div class="date" title="2008-09-26 03:03"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85961">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="keyword">public static function </span><span class="default">isEmptyDir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">){
<br />     return ((</span><span class="default">$files </span><span class="keyword">= @</span><span class="default">scandir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) &amp;&amp; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$files</span><span class="keyword">) &lt;= </span><span class="default">2</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />better ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="49570">  <div class="votes">
    <div id="Vu49570">
    <a href="/manual/vote-note.php?id=49570&amp;page=function.is-dir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49570">
    <a href="/manual/vote-note.php?id=49570&amp;page=function.is-dir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49570" title="40% like this...">
    -5
    </div>
  </div>
  <a href="#49570" class="name">
  <strong class="user"><em>tibard at gmail dot com</em></strong></a><a class="genanchor" href="#49570"> &para;</a><div class="date" title="2005-02-01 12:32"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49570">
<div class="phpcode"><code><span class="html">use this function to get all files inside a directory (including subdirectories)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">scan_Dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">) {<br />    </span><span class="default">$arrfiles </span><span class="keyword">= array();<br />    if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {<br />        if (</span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {<br />            </span><span class="default">chdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br />            while (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">))) { <br />                if (</span><span class="default">$file </span><span class="keyword">!= </span><span class="string">"." </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">".."</span><span class="keyword">) { <br />                    if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)) { <br />                        </span><span class="default">$arr </span><span class="keyword">= </span><span class="default">scan_Dir</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />                        foreach (</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">) {<br />                            </span><span class="default">$arrfiles</span><span class="keyword">[] = </span><span class="default">$dir</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">;<br />                        }<br />                    } else {<br />                        </span><span class="default">$arrfiles</span><span class="keyword">[] = </span><span class="default">$dir</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">;<br />                    }<br />                }<br />            }<br />            </span><span class="default">chdir</span><span class="keyword">(</span><span class="string">"../"</span><span class="keyword">);<br />        }<br />        </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$arrfiles</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.is-dir&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.is-dir.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
