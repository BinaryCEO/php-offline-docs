<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: getcwd - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.getcwd.php">
 <link rel="shorturl" href="https://www.php.net/getcwd">
 <link rel="alternate" href="https://www.php.net/getcwd" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.dir.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.dir.php">
 <link rel="next" href="https://www.php.net/manual/en/function.opendir.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.getcwd.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.getcwd.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.getcwd.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.getcwd.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.getcwd.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.getcwd.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.getcwd.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.getcwd.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.getcwd.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.getcwd.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.getcwd.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets the current working directory" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: getcwd - Manual" />
<meta name="twitter:description" content="Gets the current working directory" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: getcwd - Manual" />
<meta itemprop="description" content="Gets the current working directory" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets the current working directory" />

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
        <a href="function.opendir.php">
          opendir &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.dir.php">
          &laquo; dir        </a>
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
            <option value='en/function.getcwd.php' selected="selected">English</option>
            <option value='de/function.getcwd.php'>German</option>
            <option value='es/function.getcwd.php'>Spanish</option>
            <option value='fr/function.getcwd.php'>French</option>
            <option value='it/function.getcwd.php'>Italian</option>
            <option value='ja/function.getcwd.php'>Japanese</option>
            <option value='pt_BR/function.getcwd.php'>Brazilian Portuguese</option>
            <option value='ru/function.getcwd.php'>Russian</option>
            <option value='tr/function.getcwd.php'>Turkish</option>
            <option value='uk/function.getcwd.php'>Ukrainian</option>
            <option value='zh/function.getcwd.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.getcwd" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">getcwd</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">getcwd</span> &mdash; <span class="dc-title">Gets the current working directory</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.getcwd-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>getcwd</strong></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Gets the current working directory.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.getcwd-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.getcwd-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the current working directory on success, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on
   failure.
  </p> 
  <p class="para">
   On some Unix variants, <span class="function"><strong>getcwd()</strong></span> will return
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if any one of the parent directories does not have the
   readable or search mode set, even if the current directory
   does. See <span class="function"><a href="function.chmod.php" class="function">chmod()</a></span> for more information on
   modes and permissions.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.getcwd-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2323">
    <p><strong>Example #1 <span class="function"><strong>getcwd()</strong></span> example</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// current directory<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">getcwd</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">chdir</span><span style="color: #007700">(</span><span style="color: #DD0000">'cvs'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// current directory<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">getcwd</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output
something similar to:</p></div>
     <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">/home/didou
/home/didou/cvs</pre>
</div>
     </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.getcwd-notes">
  <h3 class="title">Notes</h3>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
    If the PHP interpreter has been built with ZTS (Zend Thread Safety) enabled,
    the current working directory returned by <span class="function"><strong>getcwd()</strong></span>
    may be different from that returned by operating system interfaces.
    External libraries (invoked through <a href="book.ffi.php" class="link">FFI</a>)
    which depend on the current working directory will be affected.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.getcwd-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.chdir.php" class="function" rel="rdfs-seeAlso">chdir()</a> - Change directory</span></li>
    <li><span class="function"><a href="function.chmod.php" class="function" rel="rdfs-seeAlso">chmod()</a> - Changes file mode</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dir/functions/getcwd.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.getcwd%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.getcwd&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.getcwd.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">18 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="38162">  <div class="votes">
    <div id="Vu38162">
    <a href="/manual/vote-note.php?id=38162&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38162">
    <a href="/manual/vote-note.php?id=38162&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38162" title="71% like this...">
    44
    </div>
  </div>
  <a href="#38162" class="name">
  <strong class="user"><em>dave at corecomm dot us</em></strong></a><a class="genanchor" href="#38162"> &para;</a><div class="date" title="2003-12-10 10:14"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38162">
<div class="phpcode"><code><span class="html">getcwd() returns the path of the "main" script referenced in the URL.<br /><br />dirname(__FILE__) will return the path of the script currently executing.<br /><br />I had written a script that required several class definition scripts from the same directory. It retrieved them based on filename matches and used getcwd to figure out where they were.<br /><br />Didn't work so well when I needed to call that first script from a new file in a different directory.</span></code></div>
  </div>
 </div>
  <div class="note" id="52524">  <div class="votes">
    <div id="Vu52524">
    <a href="/manual/vote-note.php?id=52524&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52524">
    <a href="/manual/vote-note.php?id=52524&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52524" title="75% like this...">
    6
    </div>
  </div>
  <a href="#52524" class="name">
  <strong class="user"><em>marcus at synchromedia dot co dot uk</em></strong></a><a class="genanchor" href="#52524"> &para;</a><div class="date" title="2005-05-04 08:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52524">
<div class="phpcode"><code><span class="html">"On some Unix variants, getcwd() will return FALSE if any one of the parent directories does not have the readable or search mode set, even if the current directory does."<br /><br />Just so you know, MacOS X is one of these variants (at least 10.4 is for me). You can make it work by applying 'chmod a+rx' to all folders from your site folder upwards.</span></code></div>
  </div>
 </div>
  <div class="note" id="69472">  <div class="votes">
    <div id="Vu69472">
    <a href="/manual/vote-note.php?id=69472&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69472">
    <a href="/manual/vote-note.php?id=69472&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69472" title="69% like this...">
    10
    </div>
  </div>
  <a href="#69472" class="name">
  <strong class="user"><em>hodgman at ali dot com dot au</em></strong></a><a class="genanchor" href="#69472"> &para;</a><div class="date" title="2006-09-06 07:58"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69472">
<div class="phpcode"><code><span class="html">I use this code to replicate the pushd and popd DOS commands in PHP:<br /><br /><span class="default">&lt;?php<br />$g_DirStack </span><span class="keyword">= array();<br />function </span><span class="default">pushd</span><span class="keyword">( </span><span class="default">$dir </span><span class="keyword">)<br />{<br />    global </span><span class="default">$g_DirStack</span><span class="keyword">;<br />    </span><span class="default">array_push</span><span class="keyword">( </span><span class="default">$g_DirStack</span><span class="keyword">, </span><span class="default">getcwd</span><span class="keyword">() );<br />    </span><span class="default">chdir</span><span class="keyword">( </span><span class="default">$dir </span><span class="keyword">);<br />}<br />function </span><span class="default">popd</span><span class="keyword">( )<br />{<br />    global </span><span class="default">$g_DirStack</span><span class="keyword">;<br />    </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">array_pop</span><span class="keyword">( </span><span class="default">$g_DirStack </span><span class="keyword">);<br />    </span><span class="default">assert</span><span class="keyword">( </span><span class="default">$dir </span><span class="keyword">!== </span><span class="default">null </span><span class="keyword">);<br />    </span><span class="default">chdir</span><span class="keyword">( </span><span class="default">$dir </span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />This allows you to change the current directory with pushd, then use popd to "undo" the directory change when you're done.</span></code></div>
  </div>
 </div>
  <div class="note" id="120843">  <div class="votes">
    <div id="Vu120843">
    <a href="/manual/vote-note.php?id=120843&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120843">
    <a href="/manual/vote-note.php?id=120843&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120843" title="75% like this...">
    2
    </div>
  </div>
  <a href="#120843" class="name">
  <strong class="user"><em>CXJ</em></strong></a><a class="genanchor" href="#120843"> &para;</a><div class="date" title="2017-03-20 11:56"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120843">
<div class="phpcode"><code><span class="html">getcwd() appears to call the equivalent of PHP's realpath() on the path.  It never returns symlinks, but always the actual directory names in the path to the current working directory.</span></code></div>
  </div>
 </div>
  <div class="note" id="126721">  <div class="votes">
    <div id="Vu126721">
    <a href="/manual/vote-note.php?id=126721&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126721">
    <a href="/manual/vote-note.php?id=126721&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126721" title="71% like this...">
    3
    </div>
  </div>
  <a href="#126721" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#126721"> &para;</a><div class="date" title="2021-12-28 06:36"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126721">
<div class="phpcode"><code><span class="html">given a link<br />/some/link-&gt;/some/location/path<br /><br />with linux bash,<br />if  within the linked drawer  /some/link<br />cd ..              goes upper link                   /some/ <br />cd -P ..         goes upper destination       /some/location/<br /><br />with php<br />fopen ("../file")  goes upper destination        /some/location/file<br /><br />some others commented about ways obtaining the path below.<br /><br />I found some luck with using    $_SERVER['DOCUMENT_ROOT'] instead<br />to recraft an absolute path.</span></code></div>
  </div>
 </div>
  <div class="note" id="87087">  <div class="votes">
    <div id="Vu87087">
    <a href="/manual/vote-note.php?id=87087&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87087">
    <a href="/manual/vote-note.php?id=87087&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87087" title="65% like this...">
    10
    </div>
  </div>
  <a href="#87087" class="name">
  <strong class="user"><em>ash at ashmckenzie dot org</em></strong></a><a class="genanchor" href="#87087"> &para;</a><div class="date" title="2008-11-18 05:37"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87087">
<div class="phpcode"><code><span class="html">It appears there is a change in functionality in PHP5 from PHP4 when using the CLI tool.  Here is the example: -<br /><br />cd /tmp<br /><br />cat &gt; foo.php &lt;&lt; END<br /><span class="default">&lt;?php<br />    </span><span class="keyword">print </span><span class="default">getcwd</span><span class="keyword">() . </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>END<br /><br />cd /<br /><br />php -q /tmp/foo.php<br /><br />PHP4 returns /tmp<br />PHP5 returns /<br /><br />Something to be aware of.</span></code></div>
  </div>
 </div>
  <div class="note" id="81517">  <div class="votes">
    <div id="Vu81517">
    <a href="/manual/vote-note.php?id=81517&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81517">
    <a href="/manual/vote-note.php?id=81517&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81517" title="65% like this...">
    10
    </div>
  </div>
  <a href="#81517" class="name">
  <strong class="user"><em>znupi69NOSPAMHERE at gmail dot com</em></strong></a><a class="genanchor" href="#81517"> &para;</a><div class="date" title="2008-03-02 07:01"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81517">
<div class="phpcode"><code><span class="html">When running PHP on the command line, if you want to include another file which is in the same directory as the main script, doing just<br /><span class="default">&lt;?php<br /></span><span class="keyword">include </span><span class="string">'./otherfile.php'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>might not work, if you run your script like this:<br />/$ /path/to/script.php<br />because the current working dir will be set to '/', and the file '/otherfile.php' does not exist, because it is in '/path/to/otherfile.php'.<br />So, to get the directory in which the script resides, you can use this function:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">get_file_dir</span><span class="keyword">() {<br />    global </span><span class="default">$argv</span><span class="keyword">;<br />    </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">getcwd</span><span class="keyword">() . </span><span class="string">'/' </span><span class="keyword">. </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />    </span><span class="default">$curDir </span><span class="keyword">= </span><span class="default">getcwd</span><span class="keyword">();<br />    </span><span class="default">chdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br />    </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">getcwd</span><span class="keyword">();<br />    </span><span class="default">chdir</span><span class="keyword">(</span><span class="default">$curDir</span><span class="keyword">);<br />    return </span><span class="default">$dir</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>So you can use it like this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">include </span><span class="default">get_file_dir</span><span class="keyword">() . </span><span class="string">'/otherfile.php'</span><span class="keyword">;<br /></span><span class="comment">// or even..<br /></span><span class="default">chdir</span><span class="keyword">(</span><span class="default">get_file_dir</span><span class="keyword">());<br />include </span><span class="string">'./otherfile.php'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>Spent some time thinking this one out, maybe it helps someone :)</span></code></div>
  </div>
 </div>
  <div class="note" id="70911">  <div class="votes">
    <div id="Vu70911">
    <a href="/manual/vote-note.php?id=70911&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70911">
    <a href="/manual/vote-note.php?id=70911&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70911" title="68% like this...">
    6
    </div>
  </div>
  <a href="#70911" class="name">
  <strong class="user"><em>mark dot phpnetspam at mhudson dot net</em></strong></a><a class="genanchor" href="#70911"> &para;</a><div class="date" title="2006-11-03 01:42"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70911">
<div class="phpcode"><code><span class="html">This function is often used in conjuction with basename(), i.e.<br /><a href="http://www.php.net/manual/en/function.basename.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.basename.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="118950">  <div class="votes">
    <div id="Vu118950">
    <a href="/manual/vote-note.php?id=118950&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118950">
    <a href="/manual/vote-note.php?id=118950&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118950" title="66% like this...">
    5
    </div>
  </div>
  <a href="#118950" class="name">
  <strong class="user"><em>Craig</em></strong></a><a class="genanchor" href="#118950"> &para;</a><div class="date" title="2016-03-05 11:44"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118950">
<div class="phpcode"><code><span class="html">Be aware when calling getcwd() in directories consisting of symlinks.<br /><br />getcwd()  is the equivalent of shell command "pwd -P" which resolves symlinks.<br /><br />The shell command "pwd" is the equivalent of "pwd -L" which uses PWD from the environment without resolving symlinks. This is also the equivalent of calling getenv('PWD').</span></code></div>
  </div>
 </div>
  <div class="note" id="79875">  <div class="votes">
    <div id="Vu79875">
    <a href="/manual/vote-note.php?id=79875&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79875">
    <a href="/manual/vote-note.php?id=79875&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79875" title="65% like this...">
    7
    </div>
  </div>
  <a href="#79875" class="name">
  <strong class="user"><em>leonbrussels at gmail dot com</em></strong></a><a class="genanchor" href="#79875"> &para;</a><div class="date" title="2007-12-17 08:10"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79875">
<div class="phpcode"><code><span class="html">This is a function to convert a path which looks something like this:<br /><br />/home/www/somefolder/../someotherfolder/../<br /><br />To a proper directory path:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">simplify_path</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">) {<br /><br /></span><span class="comment">//saves our current working directory to a variable<br /></span><span class="default">$oldcwd </span><span class="keyword">= </span><span class="default">getcwd</span><span class="keyword">();<br /></span><span class="comment">//changes the directory to the one to convert<br />//$path is the directory to convert (clean up), handed over to the //function as a string<br /><br /></span><span class="default">chdir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br />return </span><span class="default">gstr_replace</span><span class="keyword">(</span><span class="string">'\\'</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">, </span><span class="default">getcwd</span><span class="keyword">());<br /><br /></span><span class="comment">//change the cwd back to the old value to not interfere with the script<br /></span><span class="default">chdir</span><span class="keyword">(</span><span class="default">$oldcwd</span><span class="keyword">);<br /><br />}<br /><br /></span><span class="default">This </span><span class="keyword">function </span><span class="default">is really useful </span><span class="keyword">if </span><span class="default">you want to compare two filepaths which are not necesarily in a </span><span class="string">"cleaned up" </span><span class="default">state</span><span class="keyword">. </span><span class="default">It works in </span><span class="keyword">*</span><span class="default">NIX </span><span class="keyword">and </span><span class="default">WINDOWS alike<br /><br />?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="72631">  <div class="votes">
    <div id="Vu72631">
    <a href="/manual/vote-note.php?id=72631&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72631">
    <a href="/manual/vote-note.php?id=72631&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72631" title="65% like this...">
    6
    </div>
  </div>
  <a href="#72631" class="name">
  <strong class="user"><em>troy dot cregger at gmail dot com</em></strong></a><a class="genanchor" href="#72631"> &para;</a><div class="date" title="2007-01-26 12:10"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72631">
<div class="phpcode"><code><span class="html">Take care if you use getcwd() in file that you'll need to include (using include, require, or *_once) in a script located outside of the same directory tree. <br /><br />example: <br /><span class="default">&lt;?php<br /></span><span class="comment">//in /var/www/main_document_root/include/MySQL.inc.php<br /></span><span class="keyword">if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">getcwd</span><span class="keyword">(),</span><span class="string">'main_'</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">) {<br />  </span><span class="comment">//code to set up main DB connection<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="comment">//in home/cron_user/maintenance_scripts/some_maintenance_script.php<br /></span><span class="keyword">require_once (</span><span class="string">'/var/www/main_document_root/include/MySQL.inc.php'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />In the above example, the database connection will not be made because the call to getcwd() returns the path relative to the calling script ( /home/cron_user/maintenance_scripts ) NOT relative to the file where the getcwd() function is called.</span></code></div>
  </div>
 </div>
  <div class="note" id="59459">  <div class="votes">
    <div id="Vu59459">
    <a href="/manual/vote-note.php?id=59459&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59459">
    <a href="/manual/vote-note.php?id=59459&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59459" title="65% like this...">
    6
    </div>
  </div>
  <a href="#59459" class="name">
  <strong class="user"><em>memandeemail at gmail dot com</em></strong></a><a class="genanchor" href="#59459"> &para;</a><div class="date" title="2005-12-07 03:48"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59459">
<div class="phpcode"><code><span class="html">Some server's has security options to block the getcwd()<br /><br />Alternate option:<br /><br />str_replace($_SERVER['SCRIPT_NAME'],'', $_SERVER['SCRIPT_FILENAME']);</span></code></div>
  </div>
 </div>
  <div class="note" id="88356">  <div class="votes">
    <div id="Vu88356">
    <a href="/manual/vote-note.php?id=88356&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88356">
    <a href="/manual/vote-note.php?id=88356&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88356" title="60% like this...">
    7
    </div>
  </div>
  <a href="#88356" class="name">
  <strong class="user"><em>bvidinli at gmail dot com</em></strong></a><a class="genanchor" href="#88356"> &para;</a><div class="date" title="2009-01-21 01:13"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88356">
<div class="phpcode"><code><span class="html">if you link your php to /bin/linkedphp  and your php is at for ex /home/actual.php<br /><br />when you run linkedphp in somewhere in your filesystem,<br />getcwd returns /bin instead of working dir,<br /><br />solution: use dirname(__FILENAME__) instead</span></code></div>
  </div>
 </div>
  <div class="note" id="81549">  <div class="votes">
    <div id="Vu81549">
    <a href="/manual/vote-note.php?id=81549&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81549">
    <a href="/manual/vote-note.php?id=81549&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81549" title="62% like this...">
    4
    </div>
  </div>
  <a href="#81549" class="name">
  <strong class="user"><em>znupi69NOSPAMHERE at gmail dot com</em></strong></a><a class="genanchor" href="#81549"> &para;</a><div class="date" title="2008-03-03 10:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81549">
<div class="phpcode"><code><span class="html">In response to myself: that function will not work for cases like:<br />/usr/bin$: /home/johndoe/Work/script.php<br />So here's a better and simpler way (I think this one works for all cases)<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">get_file_dir</span><span class="keyword">() {<br />    global </span><span class="default">$argv</span><span class="keyword">;<br />    return </span><span class="default">realpath</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />}<br /></span><span class="default">?&gt;<br /></span>Knock yourself out :)</span></code></div>
  </div>
 </div>
  <div class="note" id="98888">  <div class="votes">
    <div id="Vu98888">
    <a href="/manual/vote-note.php?id=98888&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98888">
    <a href="/manual/vote-note.php?id=98888&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98888" title="60% like this...">
    6
    </div>
  </div>
  <a href="#98888" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#98888"> &para;</a><div class="date" title="2010-07-14 04:04"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98888">
<div class="phpcode"><code><span class="html">As you could read in<br /><a href="http://www.php.net/manual/en/features.commandline.differences.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/features.commandline.differences.php</a><br />the CLI SAPI does - contrary to other SAPIs - NOT automatically change the current working directory to the one the started script resides in.<br /><br />A very simple workaround to regain the behaviour you're used to from your "ordinary" webpage scripting is to include something like that at the beginning of your script:<br /><br /><span class="default">&lt;?php<br />  chdir</span><span class="keyword">( </span><span class="default">dirname </span><span class="keyword">( </span><span class="default">__FILE__ </span><span class="keyword">) );<br /></span><span class="default">?&gt;<br /></span><br />But because this is about reading or "finding" pathes, you might appreciate it if I share some more sophisticated tricks I frequently use in CLI scripts ...<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Note: all pathes stored in subsequent Variables end up with a DIRECTORY_SEPARATOR<br /><br />// how to store the working directory "from where" the script was called:<br /></span><span class="default">$initial_cwd </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">( </span><span class="string">'~(\w)$~' </span><span class="keyword">, </span><span class="string">'$1' </span><span class="keyword">. </span><span class="default">DIRECTORY_SEPARATOR </span><span class="keyword">, </span><span class="default">realpath</span><span class="keyword">( </span><span class="default">getcwd</span><span class="keyword">() ) );<br /><br /></span><span class="comment">// how to switch symlink-free to the folder the current file resides in:<br /></span><span class="default">chdir</span><span class="keyword">( </span><span class="default">dirname </span><span class="keyword">( </span><span class="default">realpath </span><span class="keyword">( </span><span class="default">__FILE__ </span><span class="keyword">) ) );<br /><br /></span><span class="comment">// how to store the former folder in a variable:<br /></span><span class="default">$my_folder </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">( </span><span class="default">realpath</span><span class="keyword">( </span><span class="default">__FILE__ </span><span class="keyword">) ) . </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">;<br /><br /></span><span class="comment">// how to get a path one folder up if $my_folder ends with \class\ or /class/ :<br /></span><span class="default">$my_parent_folder </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">( </span><span class="string">'~[/\\\\]class[/\\\\]$~' </span><span class="keyword">, </span><span class="default">DIRECTORY_SEPARATOR </span><span class="keyword">, </span><span class="default">$my_folder </span><span class="keyword">);<br /><br /></span><span class="comment">// how to get a path one folder up in any case :<br /></span><span class="default">$my_parent_folder </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">( </span><span class="string">'~[/\\\\][^/\\\\]*[/\\\\]$~' </span><span class="keyword">, </span><span class="default">DIRECTORY_SEPARATOR </span><span class="keyword">, </span><span class="default">$my_folder </span><span class="keyword">);<br /><br /></span><span class="comment">// how to make an array of OS-style-pathes from an array of unix-style-pathes<br />// (handy if you use config-files or so):<br /></span><span class="keyword">foreach( </span><span class="default">$unix_style_pathes </span><span class="keyword">as </span><span class="default">$unix_style_path </span><span class="keyword">)<br />    </span><span class="default">$os_independent_path</span><span class="keyword">[] = </span><span class="default">str_replace</span><span class="keyword">( </span><span class="string">'/' </span><span class="keyword">, </span><span class="default">DIRECTORY_SEPARATOR </span><span class="keyword">, </span><span class="default">$unix_style_path </span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="43451">  <div class="votes">
    <div id="Vu43451">
    <a href="/manual/vote-note.php?id=43451&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43451">
    <a href="/manual/vote-note.php?id=43451&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43451" title="60% like this...">
    3
    </div>
  </div>
  <a href="#43451" class="name">
  <strong class="user"><em>manux at manux dot org</em></strong></a><a class="genanchor" href="#43451"> &para;</a><div class="date" title="2004-06-21 09:44"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43451">
<div class="phpcode"><code><span class="html">watch out:<br />working directory, and thus:<br />getcwd () <br />is "/" while being into a register'ed shutdown function!!!</span></code></div>
  </div>
 </div>
  <div class="note" id="78153">  <div class="votes">
    <div id="Vu78153">
    <a href="/manual/vote-note.php?id=78153&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78153">
    <a href="/manual/vote-note.php?id=78153&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78153" title="52% like this...">
    1
    </div>
  </div>
  <a href="#78153" class="name">
  <strong class="user"><em>ab5602 at wayne dot edu</em></strong></a><a class="genanchor" href="#78153"> &para;</a><div class="date" title="2007-09-30 10:33"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78153">
<div class="phpcode"><code><span class="html">If getcwd() returns nothing for you under Solaris with an NFS mounted subdirectory, you are running into an OS bug that is supposedly fixed in recent versions of Solaris 10.  This same OS bug effects the include() and require() functions as well.</span></code></div>
  </div>
 </div>
  <div class="note" id="49423">  <div class="votes">
    <div id="Vu49423">
    <a href="/manual/vote-note.php?id=49423&amp;page=function.getcwd&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49423">
    <a href="/manual/vote-note.php?id=49423&amp;page=function.getcwd&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49423" title="52% like this...">
    1
    </div>
  </div>
  <a href="#49423" class="name">
  <strong class="user"><em>vermicin at antispam dot gmail dot com</em></strong></a><a class="genanchor" href="#49423"> &para;</a><div class="date" title="2005-01-27 03:48"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49423">
<div class="phpcode"><code><span class="html">If your PHP cli binary is built as a cgi binary (check with php_sapi_name), the cwd functions differently than you might expect. <br /><br />say you have a script /usr/local/bin/purge<br />you are in /home/username <br /><br />php CLI: getcwd() gives you /home/username<br />php CGI: getcwd() gives you /usr/local/bin<br /><br />This can trip you up if you're writing command line scripts with php. You can override the CGI behavior by adding -C to the php call: <br /><br />#!/usr/local/bin/php -Cq<br /><br />and then getcwd() behaves as it does in the CLI-compiled version.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.getcwd&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.getcwd.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
