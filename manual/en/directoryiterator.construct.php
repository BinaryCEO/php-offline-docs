<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DirectoryIterator::__construct - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/directoryiterator.construct.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/directoryiterator.construct.php">
 <link rel="alternate" href="https://www.php.net/manual/en/directoryiterator.construct.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.directoryiterator.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.directoryiterator.php">
 <link rel="next" href="https://www.php.net/manual/en/directoryiterator.current.php">

 <link rel="alternate" href="https://www.php.net/manual/en/directoryiterator.construct.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/directoryiterator.construct.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/directoryiterator.construct.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/directoryiterator.construct.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/directoryiterator.construct.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/directoryiterator.construct.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/directoryiterator.construct.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/directoryiterator.construct.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/directoryiterator.construct.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/directoryiterator.construct.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/directoryiterator.construct.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Constructs a new directory iterator from a path" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DirectoryIterator::__construct - Manual" />
<meta name="twitter:description" content="Constructs a new directory iterator from a path" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DirectoryIterator::__construct - Manual" />
<meta itemprop="description" content="Constructs a new directory iterator from a path" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Constructs a new directory iterator from a path" />

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
        <a href="directoryiterator.current.php">
          DirectoryIterator::current &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.directoryiterator.php">
          &laquo; DirectoryIterator        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.spl.php'>SPL</a></li>      <li><a href='spl.iterators.php'>Iterators</a></li>      <li><a href='class.directoryiterator.php'>DirectoryIterator</a></li>      </ul>
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
            <option value='en/directoryiterator.construct.php' selected="selected">English</option>
            <option value='de/directoryiterator.construct.php'>German</option>
            <option value='es/directoryiterator.construct.php'>Spanish</option>
            <option value='fr/directoryiterator.construct.php'>French</option>
            <option value='it/directoryiterator.construct.php'>Italian</option>
            <option value='ja/directoryiterator.construct.php'>Japanese</option>
            <option value='pt_BR/directoryiterator.construct.php'>Brazilian Portuguese</option>
            <option value='ru/directoryiterator.construct.php'>Russian</option>
            <option value='tr/directoryiterator.construct.php'>Turkish</option>
            <option value='uk/directoryiterator.construct.php'>Ukrainian</option>
            <option value='zh/directoryiterator.construct.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="directoryiterator.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DirectoryIterator::__construct</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DirectoryIterator::__construct</span> &mdash; <span class="dc-title">Constructs a new directory iterator from a path</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-directoryiterator.construct-description">
  <h3 class="title">Description</h3>
  <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DirectoryIterator::__construct</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$directory</code></span>)</div>


  <p class="para rdfs-comment">
   Constructs a new directory iterator from a path.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-directoryiterator.construct-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">directory</code></dt>
     <dd>
      <p class="para">
       The path of the directory to traverse.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-directoryiterator.construct-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Throws an <span class="classname"><a href="class.unexpectedvalueexception.php" class="classname">UnexpectedValueException</a></span>
   if the <code class="parameter">directory</code> does not exist.
  </p>
  <p class="para">
   Throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span>
   if the <code class="parameter">directory</code> is an empty string.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-directoryiterator.construct-changelog">
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
        Now throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> if
        <code class="parameter">directory</code> is an empty string;
        previously it threw a <span class="classname"><a href="class.runtimeexception.php" class="classname">RuntimeException</a></span>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 
 <div class="refsect1 examples" id="refsect1-directoryiterator.construct-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3914">
    <p><strong>Example #1 A <span class="methodname"><strong>DirectoryIterator::__construct()</strong></span> example</strong></p>
     <div class="example-contents"><p>
      This example will list the contents of the directory containing the script.
     </p></div>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$dir </span><span style="color: #007700">= new </span><span style="color: #0000BB">DirectoryIterator</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">));<br />foreach (</span><span style="color: #0000BB">$dir </span><span style="color: #007700">as </span><span style="color: #0000BB">$fileinfo</span><span style="color: #007700">) {<br />    if (!</span><span style="color: #0000BB">$fileinfo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isDot</span><span style="color: #007700">()) {<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileinfo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFilename</span><span style="color: #007700">());<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-directoryiterator.construct-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="classname"><a href="class.splfileinfo.php" class="classname">SplFileInfo</a></span></li>
    <li><span class="classname"><a href="class.iterator.php" class="classname">Iterator</a></span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/directoryiterator/construct.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdirectoryiterator.construct%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=directoryiterator.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/directoryiterator.construct.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="95214">  <div class="votes">
    <div id="Vu95214">
    <a href="/manual/vote-note.php?id=95214&amp;page=directoryiterator.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95214">
    <a href="/manual/vote-note.php?id=95214&amp;page=directoryiterator.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95214" title="71% like this...">
    14
    </div>
  </div>
  <a href="#95214" class="name">
  <strong class="user"><em>a dot lyskawa at nisza dot org</em></strong></a><a class="genanchor" href="#95214"> &para;</a><div class="date" title="2009-12-18 12:55"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95214">
<div class="phpcode"><code><span class="html">Here's all-in-one DirectoryIterator:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Real Recursive Directory Iterator<br /> */<br /></span><span class="keyword">class </span><span class="default">RRDI </span><span class="keyword">extends </span><span class="default">RecursiveIteratorIterator </span><span class="keyword">{<br />  </span><span class="comment">/**<br />   * Creates Real Recursive Directory Iterator<br />   * @param string $path<br />   * @param int $flags<br />   * @return DirectoryIterator<br />   */<br />  </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">$flags </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(new </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">));<br />  }<br />}<br /><br /></span><span class="comment">/**<br /> * Real RecursiveDirectoryIterator Filtered Class<br /> * Returns only those items which filenames match given regex<br /> */<br /></span><span class="keyword">class </span><span class="default">AdvancedDirectoryIterator </span><span class="keyword">extends </span><span class="default">FilterIterator </span><span class="keyword">{<br />  </span><span class="comment">/**<br />   * Regex storage<br />   * @var string<br />   */<br />  </span><span class="keyword">private </span><span class="default">$regex</span><span class="keyword">;<br />  </span><span class="comment">/**<br />   * Creates new AdvancedDirectoryIterator<br />   * @param string $path, prefix with '-R ' for recursive, postfix with /[wildcards] for matching<br />   * @param int $flags<br />   * @return DirectoryIterator<br />   */<br />  </span><span class="keyword">public function  </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">$flags </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {<br />    if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="string">'-R '</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">) { </span><span class="default">$recursive </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">; </span><span class="default">$path </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">); }<br />    if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'~/?([^/]*\*[^/]*)$~'</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">)) { </span><span class="comment">// matched wildcards in filename<br />      </span><span class="default">$path </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) - </span><span class="default">1</span><span class="keyword">); </span><span class="comment">// strip wildcards part from path<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">regex </span><span class="keyword">= </span><span class="string">'~^' </span><span class="keyword">. </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'*'</span><span class="keyword">, </span><span class="string">'.*'</span><span class="keyword">, </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">, </span><span class="string">'\.'</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])) . </span><span class="string">'$~'</span><span class="keyword">; </span><span class="comment">// convert wildcards to regex <br />      </span><span class="keyword">if (!</span><span class="default">$path</span><span class="keyword">) </span><span class="default">$path </span><span class="keyword">= </span><span class="string">'.'</span><span class="keyword">; </span><span class="comment">// if no path given, we assume CWD<br />    </span><span class="keyword">}<br />    </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$recursive </span><span class="keyword">? new </span><span class="default">RRDI</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">) : new </span><span class="default">DirectoryIterator</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">));<br />  }<br />  </span><span class="comment">/**<br />   * Checks for regex in current filename, or matches all if no regex specified<br />   * @return bool<br />   */<br />  </span><span class="keyword">public function </span><span class="default">accept</span><span class="keyword">() { </span><span class="comment">// FilterIterator method<br />    </span><span class="keyword">return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">regex </span><span class="keyword">=== </span><span class="default">null </span><span class="keyword">? </span><span class="default">true </span><span class="keyword">: </span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">regex</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getInnerIterator</span><span class="keyword">()-&gt;</span><span class="default">getFilename</span><span class="keyword">());<br />  }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Some examples:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/* @var $i DirectoryIterator */<br /><br /></span><span class="keyword">foreach (new </span><span class="default">AdvancedDirectoryIterator</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">) as </span><span class="default">$i</span><span class="keyword">) echo </span><span class="default">$i</span><span class="keyword">-&gt;</span><span class="default">getPathname</span><span class="keyword">() . </span><span class="string">'&lt;br/&gt;'</span><span class="keyword">;<br /></span><span class="comment">// will output all files and directories in CWD<br /><br /></span><span class="keyword">foreach (new </span><span class="default">AdvancedDirectoryIterator</span><span class="keyword">(</span><span class="string">'-R *.php'</span><span class="keyword">) as </span><span class="default">$i</span><span class="keyword">) echo </span><span class="default">$i</span><span class="keyword">-&gt;</span><span class="default">getPathname</span><span class="keyword">() . </span><span class="string">'&lt;br/&gt;'</span><span class="keyword">;<br /></span><span class="comment">// will output all php files in CWD and all subdirectories<br /><br /></span><span class="keyword">foreach (new </span><span class="default">AdvancedDirectoryIterator</span><span class="keyword">(</span><span class="string">'-R js/jquery-*.js'</span><span class="keyword">) as </span><span class="default">$i</span><span class="keyword">) echo </span><span class="default">$i</span><span class="keyword">-&gt;</span><span class="default">getPathname</span><span class="keyword">() . </span><span class="string">'&lt;br/&gt;'</span><span class="keyword">;<br /></span><span class="comment">// will output all jQuery versions in directory js, or throw an exception if directory js doesn't exist<br /><br /></span><span class="default">?&gt;<br /></span><br />Pretty cool, huh? :)</span></code></div>
  </div>
 </div>
  <div class="note" id="87425">  <div class="votes">
    <div id="Vu87425">
    <a href="/manual/vote-note.php?id=87425&amp;page=directoryiterator.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87425">
    <a href="/manual/vote-note.php?id=87425&amp;page=directoryiterator.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87425" title="75% like this...">
    10
    </div>
  </div>
  <a href="#87425" class="name">
  <strong class="user"><em>kendsnyder at gmail dot com</em></strong></a><a class="genanchor" href="#87425"> &para;</a><div class="date" title="2008-12-04 11:54"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87425">
<div class="phpcode"><code><span class="html">Don't store DirectoryIterator objects for later; you will get an error saying "too many open files" when you store more than the operating system limit (usually 256 or 1024).
<br />
<br />For example, this will yield an error if the directory has too many files:
<br />
<br /><span class="default">&lt;?php
<br />$files </span><span class="keyword">= array();
<br />foreach (new </span><span class="default">DirectoryIterator</span><span class="keyword">(</span><span class="string">'myDir'</span><span class="keyword">) as </span><span class="default">$file</span><span class="keyword">) {
<br />  </span><span class="default">$files</span><span class="keyword">[] = </span><span class="default">$file</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Presumably, this approach is memory intensive as well.</span></code></div>
  </div>
 </div>
  <div class="note" id="75900">  <div class="votes">
    <div id="Vu75900">
    <a href="/manual/vote-note.php?id=75900&amp;page=directoryiterator.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75900">
    <a href="/manual/vote-note.php?id=75900&amp;page=directoryiterator.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75900" title="75% like this...">
    2
    </div>
  </div>
  <a href="#75900" class="name">
  <strong class="user"><em>goran at extensionsforjoomla dot com</em></strong></a><a class="genanchor" href="#75900"> &para;</a><div class="date" title="2007-06-20 04:44"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75900">
<div class="phpcode"><code><span class="html">I needed to match in directory tree file name(s) by regular expression. Code is based on Marcus Börger class DirectoryTreeIterator <a href="http://cvs.php.net/viewvc.cgi/php-src/ext/spl/examples/" rel="nofollow" target="_blank">http://cvs.php.net/viewvc.cgi/php-src/ext/spl/examples/</a> and on examples given in his lecture Introduction to object oriented PHP at PHP Quebec conference 2007 <a href="http://talks.somabo.de/" rel="nofollow" target="_blank">http://talks.somabo.de/</a><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">KeyFilter </span><span class="keyword">extends </span><span class="default">FilterIterator<br /></span><span class="keyword">{<br />  private </span><span class="default">$_rx</span><span class="keyword">;<br />  <br />  function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">Iterator $it</span><span class="keyword">, </span><span class="default">$regex</span><span class="keyword">)<br />  {<br />    </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$it</span><span class="keyword">);<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_rx</span><span class="keyword">= </span><span class="default">$regex</span><span class="keyword">;<br />  }<br /><br />  function </span><span class="default">accept</span><span class="keyword">()<br />  {<br />    return </span><span class="default">ereg</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_rx</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getInnerIterator</span><span class="keyword">()-&gt;</span><span class="default">key</span><span class="keyword">());<br />  }<br /><br />  protected function </span><span class="default">__clone</span><span class="keyword">() {<br />    return </span><span class="default">false</span><span class="keyword">;<br />  }<br />}<br /><br />class </span><span class="default">DirMach </span><span class="keyword">extends </span><span class="default">KeyFilter<br /></span><span class="keyword">{<br />  function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">, </span><span class="default">$regex</span><span class="keyword">)<br />  {<br />    </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(<br />    new </span><span class="default">DirectoryTreeIterator</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">), </span><span class="default">$regex</span><span class="keyword">);<br />  }<br /><br />  function </span><span class="default">current</span><span class="keyword">()<br />  {<br />    return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">key</span><span class="keyword">();<br />  }<br /><br />  function </span><span class="default">key</span><span class="keyword">()<br />  {<br />    return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">key</span><span class="keyword">();<br />  }<br />}<br /><br />class </span><span class="default">DirectoryTreeIterator </span><span class="keyword">extends </span><span class="default">RecursiveIteratorIterator<br /></span><span class="keyword">{<br />    </span><span class="comment">/** Construct from a path.<br />     * @param $path directory to iterate<br />     */<br />    </span><span class="keyword">function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)<br />    {<br />     try {<br />      </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(<br />            new </span><span class="default">RecursiveCachingIterator</span><span class="keyword">(<br />                new </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">::</span><span class="default">KEY_AS_FILENAME<br />                </span><span class="keyword">), <br />                </span><span class="default">CachingIterator</span><span class="keyword">::</span><span class="default">CALL_TOSTRING</span><span class="keyword">|</span><span class="default">CachingIterator</span><span class="keyword">::</span><span class="default">CATCH_GET_CHILD<br />            </span><span class="keyword">), <br />            </span><span class="default">parent</span><span class="keyword">::</span><span class="default">SELF_FIRST<br />        </span><span class="keyword">);<br />     } catch(</span><span class="default">Exception $e</span><span class="keyword">) {<br />       echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">();<br />       exit;<br />     }<br />    }<br /><br />    </span><span class="comment">/** @return the current element prefixed with ASCII graphics<br />     */    <br />    </span><span class="keyword">function </span><span class="default">current</span><span class="keyword">()<br />    {<br />      if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">hasChildren</span><span class="keyword">())<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">();  <br />      return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">();<br />    }<br /><br />    </span><span class="comment">/** Aggregates the inner iterator<br />     */    <br />    </span><span class="keyword">function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">)<br />    {<br />      return </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getSubIterator</span><span class="keyword">(), </span><span class="default">$func</span><span class="keyword">), </span><span class="default">$params</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">$PathToSearch </span><span class="keyword">= </span><span class="string">'path_to_search'</span><span class="keyword">;<br /></span><span class="default">$regex </span><span class="keyword">= </span><span class="string">'regular_expression'</span><span class="keyword">;<br /></span><span class="default">$FileList </span><span class="keyword">= new </span><span class="default">DirMach</span><span class="keyword">(</span><span class="default">$PathToSearch</span><span class="keyword">, </span><span class="default">$regex</span><span class="keyword">);<br />foreach (</span><span class="default">$FileList </span><span class="keyword">as </span><span class="default">$file</span><span class="keyword">) {<br />  </span><span class="default">$match</span><span class="keyword">[] = </span><span class="default">$file</span><span class="keyword">;<br />}<br />echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">);<br />echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124816">  <div class="votes">
    <div id="Vu124816">
    <a href="/manual/vote-note.php?id=124816&amp;page=directoryiterator.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124816">
    <a href="/manual/vote-note.php?id=124816&amp;page=directoryiterator.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124816" title="100% like this...">
    1
    </div>
  </div>
  <a href="#124816" class="name">
  <strong class="user"><em>ahmad dot mayahi at gmail dot com</em></strong></a><a class="genanchor" href="#124816"> &para;</a><div class="date" title="2020-03-12 06:57"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124816">
<div class="phpcode"><code><span class="html">Many developers get confused between DirectoryIterator and FilesystemIterator, there are a few small differences that I'm goning to list them here:<br /><br />DirectoryIterator:<br />* Includes the "." and ".." within the path.<br />* Numberd keys.<br />* Path is not included in in value.<br />* No configuration available.<br />* You do need to use "clone" when storing the elements into an array.<br /><br />Example:<br /><span class="default">&lt;?php<br />$files </span><span class="keyword">= [];<br />foreach (</span><span class="default">$dir </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$item</span><span class="keyword">) {<br />    echo </span><span class="default">$key</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">; </span><span class="comment">// The key is a number<br />    </span><span class="default">$files</span><span class="keyword">[] = </span><span class="default">$item</span><span class="keyword">;<br />}<br /><br />echo </span><span class="default">$files</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">getFilename</span><span class="keyword">(); </span><span class="comment">// nothing happens here, you do need to use clone $item inside the foreach<br /><br /></span><span class="default">?&gt;<br /></span><br />FilesystemIterator:<br />* Dot files skipped.<br />* Pathname is used as a key as well as a value.<br />* Configurable.<br />* Uses SplFileInfo to store the files.<br /><br />"FilesystemIterator" it's an enhanced version of DirectoryIterator, and I prefer to use it instead of the DirectoryIterator.</span></code></div>
  </div>
 </div>
  <div class="note" id="125892">  <div class="votes">
    <div id="Vu125892">
    <a href="/manual/vote-note.php?id=125892&amp;page=directoryiterator.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125892">
    <a href="/manual/vote-note.php?id=125892&amp;page=directoryiterator.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125892" title="no votes...">
    0
    </div>
  </div>
  <a href="#125892" class="name">
  <strong class="user"><em>h.man</em></strong></a><a class="genanchor" href="#125892"> &para;</a><div class="date" title="2021-03-08 05:30"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125892">
<div class="phpcode"><code><span class="html">RecursiveDirectoryIterator seems to close file handles that are currently open. After using it "PHP Warning:  fwrite(): supplied resource is not a valid stream resource in..." is given...</span></code></div>
  </div>
 </div>
  <div class="note" id="123789">  <div class="votes">
    <div id="Vu123789">
    <a href="/manual/vote-note.php?id=123789&amp;page=directoryiterator.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123789">
    <a href="/manual/vote-note.php?id=123789&amp;page=directoryiterator.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123789" title="no votes...">
    0
    </div>
  </div>
  <a href="#123789" class="name">
  <strong class="user"><em>cmanley at example dot com</em></strong></a><a class="genanchor" href="#123789"> &para;</a><div class="date" title="2019-04-22 07:10"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123789">
<div class="phpcode"><code><span class="html">Beware that DirectoryIterator returns a reference to itself with each iteration instead of a unique new SplFileInfo object as one may first assume.<br />This is important to know if you want to push the results of an iteration into an array for later processing.<br />If you do that, then all entries in the array will be the same DirectoryIterator object with the same internal state (most likely invalid - see the valid() method), which is probably not what you want.<br />So if you do want to store the iteration results in an array, then you must convert them to either plain strings  or new SplFileInfo objects first.<br /><br />$todo = [];<br />foreach (new DirectoryIterator('/some/dir') as $entry) {<br />    if (!$entry-&gt;isFile()) {<br />        continue;<br />    }<br />    #$todo []= $entry; # Don't do this!<br />    $todo []= new SplFileInfo($entry-&gt;getFilename());    # Do this!<br />    #$todo []= $entry-&gt;getFilename();    # or do this if you're only interested in the file name.<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="77049">  <div class="votes">
    <div id="Vu77049">
    <a href="/manual/vote-note.php?id=77049&amp;page=directoryiterator.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77049">
    <a href="/manual/vote-note.php?id=77049&amp;page=directoryiterator.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77049" title="50% like this...">
    0
    </div>
  </div>
  <a href="#77049" class="name">
  <strong class="user"><em>pcdinh at phpvietnam dot net</em></strong></a><a class="genanchor" href="#77049"> &para;</a><div class="date" title="2007-08-12 07:55"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77049">
<div class="phpcode"><code><span class="html">I need to traverse recursively through a directory tree and get all sub-directory paths and has written a snippet to do that.<br /><br /><span class="default">&lt;?php<br />$path </span><span class="keyword">= </span><span class="string">"D:\webroot\phpvietnamcms"</span><span class="keyword">;<br />foreach (new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(<br />           new </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">::</span><span class="default">KEY_AS_PATHNAME</span><span class="keyword">), </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">::</span><span class="default">CHILD_FIRST</span><span class="keyword">) as </span><span class="default">$file </span><span class="keyword">=&gt; </span><span class="default">$info</span><span class="keyword">) {<br />    if (</span><span class="default">$info</span><span class="keyword">-&gt;</span><span class="default">isDir</span><span class="keyword">()) <br />    {<br />        echo </span><span class="default">$file</span><span class="keyword">.</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />    } <br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="71721">  <div class="votes">
    <div id="Vu71721">
    <a href="/manual/vote-note.php?id=71721&amp;page=directoryiterator.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71721">
    <a href="/manual/vote-note.php?id=71721&amp;page=directoryiterator.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71721" title="50% like this...">
    0
    </div>
  </div>
  <a href="#71721" class="name">
  <strong class="user"><em>springub at northclick dot de</em></strong></a><a class="genanchor" href="#71721"> &para;</a><div class="date" title="2006-12-13 04:26"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71721">
<div class="phpcode"><code><span class="html">udvig dot ericson at gmail dot com<br />29-Jul-2006 07:48<br /><br />In response to the comment below from udvig. The Example ist wrong, here is the right one:<br /><br /><span class="default">&lt;?php<br />$dir </span><span class="keyword">= new </span><span class="default">DirectoryIterator</span><span class="keyword">(</span><span class="string">"/tmp"</span><span class="keyword">);<br />foreach (</span><span class="default">$dir </span><span class="keyword">as </span><span class="default">$file</span><span class="keyword">) {<br />   if (</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">isDot</span><span class="keyword">()) {<br />       continue;<br />   }<br />   echo </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">getFilename</span><span class="keyword">() . </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="61102">  <div class="votes">
    <div id="Vu61102">
    <a href="/manual/vote-note.php?id=61102&amp;page=directoryiterator.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61102">
    <a href="/manual/vote-note.php?id=61102&amp;page=directoryiterator.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61102" title="50% like this...">
    0
    </div>
  </div>
  <a href="#61102" class="name">
  <strong class="user"><em>fernandobassani at gmail dot com</em></strong></a><a class="genanchor" href="#61102"> &para;</a><div class="date" title="2006-01-25 10:36"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61102">
<div class="phpcode"><code><span class="html">We can now replace the old fashioned way of listing the content from a directory!<br /><br />the old way:<br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="string">'/home/fernando/temp'</span><span class="keyword">)) {<br />    while (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">))) {<br />        if (</span><span class="default">$file </span><span class="keyword">!= </span><span class="string">"." </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">".."</span><span class="keyword">) {<br />            print </span><span class="string">"</span><span class="default">$file</span><span class="string"> &lt;br /&gt;"</span><span class="keyword">;<br />        }<br />    }<br />    </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span> <br /><br />the new way:<br /><span class="default">&lt;?php<br />$dir </span><span class="keyword">= new </span><span class="default">DirectoryIterator</span><span class="keyword">(</span><span class="string">'/home/fernando/temp'</span><span class="keyword">);<br />while(</span><span class="default">$dir</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">()) {<br />    if(!</span><span class="default">$dir</span><span class="keyword">-&gt;</span><span class="default">isDot</span><span class="keyword">()) {<br />        print </span><span class="default">$dir</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">().</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />    }<br />    </span><span class="default">$dir</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=directoryiterator.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/directoryiterator.construct.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.directoryiterator.php">DirectoryIterator</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="directoryiterator.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="directoryiterator.current.php" title="current">current</a>
                        </li>
                                                <li class="">
                            <a href="directoryiterator.getbasename.php" title="getBasename">getBasename</a>
                        </li>
                                                <li class="">
                            <a href="directoryiterator.getextension.php" title="getExtension">getExtension</a>
                        </li>
                                                <li class="">
                            <a href="directoryiterator.getfilename.php" title="getFilename">getFilename</a>
                        </li>
                                                <li class="">
                            <a href="directoryiterator.isdot.php" title="isDot">isDot</a>
                        </li>
                                                <li class="">
                            <a href="directoryiterator.key.php" title="key">key</a>
                        </li>
                                                <li class="">
                            <a href="directoryiterator.next.php" title="next">next</a>
                        </li>
                                                <li class="">
                            <a href="directoryiterator.rewind.php" title="rewind">rewind</a>
                        </li>
                                                <li class="">
                            <a href="directoryiterator.seek.php" title="seek">seek</a>
                        </li>
                                                <li class="">
                            <a href="directoryiterator.tostring.php" title="_&#8203;_&#8203;toString">_&#8203;_&#8203;toString</a>
                        </li>
                                                <li class="">
                            <a href="directoryiterator.valid.php" title="valid">valid</a>
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
