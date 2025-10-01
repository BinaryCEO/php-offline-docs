<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Basics - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.namespaces.basics.php">
 <link rel="shorturl" href="https://www.php.net/namespaces.basics">
 <link rel="alternate" href="https://www.php.net/namespaces.basics" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.namespaces.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.namespaces.definitionmultiple.php">
 <link rel="next" href="https://www.php.net/manual/en/language.namespaces.dynamic.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.namespaces.basics.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.namespaces.basics.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.namespaces.basics.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.namespaces.basics.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.namespaces.basics.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.namespaces.basics.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.namespaces.basics.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.namespaces.basics.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.namespaces.basics.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.namespaces.basics.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.namespaces.basics.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Using namespaces: Basics" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Basics - Manual" />
<meta name="twitter:description" content="Using namespaces: Basics" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Basics - Manual" />
<meta itemprop="description" content="Using namespaces: Basics" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Using namespaces: Basics" />

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
        <a href="language.namespaces.dynamic.php">
          Namespaces and dynamic language features &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.namespaces.definitionmultiple.php">
          &laquo; Defining multiple namespaces in the same file        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.namespaces.php'>Namespaces</a></li>      </ul>
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
            <option value='en/language.namespaces.basics.php' selected="selected">English</option>
            <option value='de/language.namespaces.basics.php'>German</option>
            <option value='es/language.namespaces.basics.php'>Spanish</option>
            <option value='fr/language.namespaces.basics.php'>French</option>
            <option value='it/language.namespaces.basics.php'>Italian</option>
            <option value='ja/language.namespaces.basics.php'>Japanese</option>
            <option value='pt_BR/language.namespaces.basics.php'>Brazilian Portuguese</option>
            <option value='ru/language.namespaces.basics.php'>Russian</option>
            <option value='tr/language.namespaces.basics.php'>Turkish</option>
            <option value='uk/language.namespaces.basics.php'>Ukrainian</option>
            <option value='zh/language.namespaces.basics.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.namespaces.basics" class="sect1">
  <h2 class="title">Using namespaces: Basics</h2>
  
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>
  <p class="para">
   Before discussing the use of namespaces, it is important to understand how PHP
   knows which namespaced element your code is requesting. A simple analogy can be made
   between PHP namespaces and a filesystem. There are three ways to access a file in a
   file system:
   <ol type="1">
    <li class="listitem">
     <span class="simpara">
      Relative file name like <code class="literal">foo.txt</code>. This resolves to
      <code class="literal">currentdirectory/foo.txt</code> where <code class="literal">currentdirectory</code> is the
      directory currently occupied. So if the current directory is
      <code class="literal">/home/foo</code>, the name resolves to <code class="literal">/home/foo/foo.txt</code>.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Relative path name like <code class="literal">subdirectory/foo.txt</code>. This resolves
      to <code class="literal">currentdirectory/subdirectory/foo.txt</code>.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Absolute path name like <code class="literal">/main/foo.txt</code>. This resolves
      to <code class="literal">/main/foo.txt</code>.
     </span>
    </li>
   </ol>
   The same principle can be applied to namespaced elements in PHP. For
   example, a class name can be referred to in three ways:
   <ol type="1">
    <li class="listitem">
     <span class="simpara">
      Unqualified name, or an unprefixed class name like
      <code class="literal">$a = new foo();</code> or
      <code class="literal">foo::staticmethod();</code>. If the current namespace is
      <code class="literal">currentnamespace</code>, this resolves to
      <code class="literal">currentnamespace\foo</code>. If
      the code is global, non-namespaced code, this resolves to <code class="literal">foo</code>.
     </span>
     <span class="simpara">
      One caveat: unqualified names for functions and constants will
      resolve to global functions and constants if the namespaced function or constant
      is not defined. See <a href="language.namespaces.fallback.php" class="link">Using namespaces:
      fallback to global function/constant</a> for details.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Qualified name, or a prefixed class name like
      <code class="literal">$a = new subnamespace\foo();</code> or
      <code class="literal">subnamespace\foo::staticmethod();</code>. If the current namespace is
      <code class="literal">currentnamespace</code>, this resolves to
      <code class="literal">currentnamespace\subnamespace\foo</code>. If
      the code is global, non-namespaced code, this resolves to <code class="literal">subnamespace\foo</code>.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Fully qualified name, or a prefixed name with global prefix operator like
      <code class="literal">$a = new \currentnamespace\foo();</code> or
      <code class="literal">\currentnamespace\foo::staticmethod();</code>. This always resolves
      to the literal name specified in the code, <code class="literal">currentnamespace\foo</code>.
     </span>
    </li>
   </ol>
  </p>
  <p class="para">
   Here is an example of the three kinds of syntax in actual code:
   <div class="informalexample">
    <p class="simpara">file1.php</p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">Foo\Bar\subnamespace</span><span style="color: #007700">;<br /><br />const </span><span style="color: #0000BB">FOO </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />function </span><span style="color: #0000BB">foo</span><span style="color: #007700">() {}<br />class </span><span style="color: #0000BB">foo<br /></span><span style="color: #007700">{<br />    static function </span><span style="color: #0000BB">staticmethod</span><span style="color: #007700">() {}<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <p class="simpara">file2.php</p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">Foo\Bar</span><span style="color: #007700">;<br />include </span><span style="color: #DD0000">'file1.php'</span><span style="color: #007700">;<br /><br />const </span><span style="color: #0000BB">FOO </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />function </span><span style="color: #0000BB">foo</span><span style="color: #007700">() {}<br />class </span><span style="color: #0000BB">foo<br /></span><span style="color: #007700">{<br />    static function </span><span style="color: #0000BB">staticmethod</span><span style="color: #007700">() {}<br />}<br /><br /></span><span style="color: #FF8000">/* Unqualified name */<br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">(); </span><span style="color: #FF8000">// resolves to function Foo\Bar\foo<br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">::</span><span style="color: #0000BB">staticmethod</span><span style="color: #007700">(); </span><span style="color: #FF8000">// resolves to class Foo\Bar\foo, method staticmethod<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">FOO</span><span style="color: #007700">; </span><span style="color: #FF8000">// resolves to constant Foo\Bar\FOO<br /><br />/* Qualified name */<br /></span><span style="color: #0000BB">subnamespace\foo</span><span style="color: #007700">(); </span><span style="color: #FF8000">// resolves to function Foo\Bar\subnamespace\foo<br /></span><span style="color: #0000BB">subnamespace\foo</span><span style="color: #007700">::</span><span style="color: #0000BB">staticmethod</span><span style="color: #007700">(); </span><span style="color: #FF8000">// resolves to class Foo\Bar\subnamespace\foo,<br />                                  // method staticmethod<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">subnamespace\FOO</span><span style="color: #007700">; </span><span style="color: #FF8000">// resolves to constant Foo\Bar\subnamespace\FOO<br /><br />/* Fully qualified name */<br /></span><span style="color: #0000BB">\Foo\Bar\foo</span><span style="color: #007700">(); </span><span style="color: #FF8000">// resolves to function Foo\Bar\foo<br /></span><span style="color: #0000BB">\Foo\Bar\foo</span><span style="color: #007700">::</span><span style="color: #0000BB">staticmethod</span><span style="color: #007700">(); </span><span style="color: #FF8000">// resolves to class Foo\Bar\foo, method staticmethod<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">\Foo\Bar\FOO</span><span style="color: #007700">; </span><span style="color: #FF8000">// resolves to constant Foo\Bar\FOO<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   Note that to access any global
   class, function or constant, a fully qualified name can be used, such as
   <span class="function"><a href="function.strlen.php" class="function">\strlen()</a></span> or <span class="classname"><a href="class.exception.php" class="classname">\Exception</a></span> or
   \<strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong>.
   <div class="example" id="example-380">
    <p><strong>Example #1 Accessing global classes, functions and constants from within a namespace</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace </span><span style="color: #0000BB">Foo</span><span style="color: #007700">;<br /><br />function </span><span style="color: #0000BB">strlen</span><span style="color: #007700">() {}<br />const </span><span style="color: #0000BB">INI_ALL </span><span style="color: #007700">= </span><span style="color: #0000BB">3</span><span style="color: #007700">;<br />class </span><span style="color: #0000BB">Exception </span><span style="color: #007700">{}<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">\strlen</span><span style="color: #007700">(</span><span style="color: #DD0000">'hi'</span><span style="color: #007700">); </span><span style="color: #FF8000">// calls global function strlen<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">\INI_ALL</span><span style="color: #007700">; </span><span style="color: #FF8000">// accesses global constant INI_ALL<br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= new </span><span style="color: #0000BB">\Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'error'</span><span style="color: #007700">); </span><span style="color: #FF8000">// instantiates global class Exception<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/namespaces.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.namespaces.basics%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.namespaces.basics&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.namespaces.basics.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="82088">  <div class="votes">
    <div id="Vu82088">
    <a href="/manual/vote-note.php?id=82088&amp;page=language.namespaces.basics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82088">
    <a href="/manual/vote-note.php?id=82088&amp;page=language.namespaces.basics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82088" title="77% like this...">
    214
    </div>
  </div>
  <a href="#82088" class="name">
  <strong class="user"><em>richard at richard-sumilang dot com</em></strong></a><a class="genanchor" href="#82088"> &para;</a><div class="date" title="2008-03-27 01:36"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82088">
<div class="phpcode"><code><span class="html">Syntax for extending classes in namespaces is still the same.
<br />
<br />Lets call this Object.php:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">namespace </span><span class="default">com\rsumilang\common</span><span class="keyword">;
<br />
<br />class </span><span class="default">Object</span><span class="keyword">{
<br />   </span><span class="comment">// ... code ...
<br /></span><span class="keyword">}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />And now lets create a class called String that extends object in String.php:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">class </span><span class="default">String </span><span class="keyword">extends </span><span class="default">com\rsumilang\common\Object</span><span class="keyword">{
<br />   </span><span class="comment">// ... code ...
<br /></span><span class="keyword">}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />Now if you class String was defined in the same namespace as Object then you don't have to specify a full namespace path:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">namespace </span><span class="default">com\rsumilang\common</span><span class="keyword">;
<br />
<br />class </span><span class="default">String </span><span class="keyword">extends </span><span class="default">Object
<br /></span><span class="keyword">{
<br />   </span><span class="comment">// ... code ...
<br /></span><span class="keyword">}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />Lastly, you can also alias a namespace name to use a shorter name for the class you are extending incase your class is in seperate namespace:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">namespace </span><span class="default">com\rsumilang\util</span><span class="keyword">;
<br />use </span><span class="default">com\rsumlang\common </span><span class="keyword">as </span><span class="default">Common</span><span class="keyword">;
<br />
<br />class </span><span class="default">String </span><span class="keyword">extends </span><span class="default">Common\Object
<br /></span><span class="keyword">{
<br />   </span><span class="comment">// ... code ...
<br /></span><span class="keyword">}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />- Richard Sumilang</span></code></div>
  </div>
 </div>
  <div class="note" id="116002">  <div class="votes">
    <div id="Vu116002">
    <a href="/manual/vote-note.php?id=116002&amp;page=language.namespaces.basics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116002">
    <a href="/manual/vote-note.php?id=116002&amp;page=language.namespaces.basics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116002" title="77% like this...">
    118
    </div>
  </div>
  <a href="#116002" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#116002"> &para;</a><div class="date" title="2014-10-27 01:08"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116002">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="keyword">namespace </span><span class="default">Foo</span><span class="keyword">;<br /><br />try {<br />    </span><span class="comment">// Something awful here<br />    // That will throw a new exception from SPL<br /></span><span class="keyword">} <br />catch (</span><span class="default">Exception </span><span class="keyword">as </span><span class="default">$ex</span><span class="keyword">) {<br />    </span><span class="comment">// We will never get here<br />    // This is because we are catchin Foo\Exception<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />Instead use fully qualified name for the exception to catch it<br /><br /><span class="default">&lt;?php <br /><br /></span><span class="keyword">namespace </span><span class="default">Foo</span><span class="keyword">;<br /><br />try {<br />    </span><span class="comment">// something awful here<br />    // That will throw a new exception from SPL<br /></span><span class="keyword">} <br />catch (</span><span class="default">\Exception </span><span class="keyword">as </span><span class="default">$ex</span><span class="keyword">) {<br />    </span><span class="comment">// Now we can get here at last<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106777">  <div class="votes">
    <div id="Vu106777">
    <a href="/manual/vote-note.php?id=106777&amp;page=language.namespaces.basics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106777">
    <a href="/manual/vote-note.php?id=106777&amp;page=language.namespaces.basics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106777" title="73% like this...">
    51
    </div>
  </div>
  <a href="#106777" class="name">
  <strong class="user"><em>Lukas Z</em></strong></a><a class="genanchor" href="#106777"> &para;</a><div class="date" title="2011-12-05 03:25"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106777">
<div class="phpcode"><code><span class="html">Well variables inside namespaces do not override others since variables are never affected by namespace but always global:<br />"Although any valid PHP code can be contained within a namespace, only four types of code are affected by namespaces: classes, interfaces, functions and constants. "<br /><br />Source: "Defining Namespaces"<br /><a href="http://www.php.net/manual/en/language.namespaces.definition.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/language.namespaces.definition.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="107684">  <div class="votes">
    <div id="Vu107684">
    <a href="/manual/vote-note.php?id=107684&amp;page=language.namespaces.basics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107684">
    <a href="/manual/vote-note.php?id=107684&amp;page=language.namespaces.basics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107684" title="63% like this...">
    43
    </div>
  </div>
  <a href="#107684" class="name">
  <strong class="user"><em>tom at tomwardrop dot com</em></strong></a><a class="genanchor" href="#107684"> &para;</a><div class="date" title="2012-02-26 10:06"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107684">
<div class="phpcode"><code><span class="html">It seems the file system analogy only goes so far. One thing that's missing that would be very useful is relative navigation up the namespace chain, e.g.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">MyProject </span><span class="keyword">{<br />   class </span><span class="default">Person </span><span class="keyword">{}<br />}<br /><br />namespace </span><span class="default">MyProject\People </span><span class="keyword">{<br />    class </span><span class="default">Adult </span><span class="keyword">extends ..</span><span class="default">\Person </span><span class="keyword">{}<br />}<br /></span><span class="default">?&gt;<br /></span><br />That would be really nice, especially if you had really deep namespaces. It would save you having to type out the full namespace just to reference a resource one level up.</span></code></div>
  </div>
 </div>
  <div class="note" id="104411">  <div class="votes">
    <div id="Vu104411">
    <a href="/manual/vote-note.php?id=104411&amp;page=language.namespaces.basics&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104411">
    <a href="/manual/vote-note.php?id=104411&amp;page=language.namespaces.basics&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104411" title="60% like this...">
    20
    </div>
  </div>
  <a href="#104411" class="name">
  <strong class="user"><em>philip dot preisser at arcor dot de</em></strong></a><a class="genanchor" href="#104411"> &para;</a><div class="date" title="2011-06-14 02:34"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104411">
<div class="phpcode"><code><span class="html">Working with variables can overwrite equal variables in other namespaces<br /><br /><span class="default">&lt;?php </span><span class="comment">// php5 - package-version : 5.3.5-1ubuntu7.2<br /><br />    </span><span class="keyword">namespace<br />    </span><span class="default">main<br />    </span><span class="keyword">{}<br /><br />    namespace<br />    </span><span class="default">main\sub1<br />    </span><span class="keyword">{<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    }<br /><br />    namespace<br />    </span><span class="default">main\sub2<br />    </span><span class="keyword">{<br />        echo </span><span class="default">$data</span><span class="keyword">;</span><span class="comment">// 1<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />    }<br /><br />    namespace<br />    </span><span class="default">main\sub1<br />    </span><span class="keyword">{<br />        echo </span><span class="default">$data</span><span class="keyword">;</span><span class="comment">// 2<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    }<br /><br />    namespace<br />    {<br />        echo </span><span class="default">$data</span><span class="keyword">;</span><span class="comment">// 1<br />    </span><span class="keyword">}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.namespaces.basics&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.namespaces.basics.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.namespaces.php">Namespaces</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.namespaces.rationale.php" title="Overview">Overview</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.definition.php" title="Namespaces">Namespaces</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.nested.php" title="Sub-&#8203;namespaces">Sub-&#8203;namespaces</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.definitionmultiple.php" title="Defining multiple namespaces in the same file">Defining multiple namespaces in the same file</a>
                        </li>
                                                <li class="current">
                            <a href="language.namespaces.basics.php" title="Basics">Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.dynamic.php" title="Namespaces and dynamic language features">Namespaces and dynamic language features</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.nsconstants.php" title="namespace keyword and _&#8203;_&#8203;NAMESPACE_&#8203;_&#8203;">namespace keyword and _&#8203;_&#8203;NAMESPACE_&#8203;_&#8203;</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.importing.php" title="Aliasing and Importing">Aliasing and Importing</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.global.php" title="Global space">Global space</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.fallback.php" title="Fallback to global space">Fallback to global space</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.rules.php" title="Name resolution rules">Name resolution rules</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.faq.php" title="FAQ">FAQ</a>
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
