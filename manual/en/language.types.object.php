<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Objects - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.types.object.php">
 <link rel="shorturl" href="https://www.php.net/types.object">
 <link rel="alternate" href="https://www.php.net/types.object" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.types.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.types.array.php">
 <link rel="next" href="https://www.php.net/manual/en/language.types.enumerations.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.types.object.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.types.object.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.types.object.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.types.object.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.types.object.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.types.object.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.types.object.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.types.object.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.types.object.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.types.object.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.types.object.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Objects" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Objects - Manual" />
<meta name="twitter:description" content="Objects" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Objects - Manual" />
<meta itemprop="description" content="Objects" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Objects" />

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
        <a href="language.types.enumerations.php">
          Enumerations &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.types.array.php">
          &laquo; Arrays        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.types.php'>Types</a></li>      </ul>
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
            <option value='en/language.types.object.php' selected="selected">English</option>
            <option value='de/language.types.object.php'>German</option>
            <option value='es/language.types.object.php'>Spanish</option>
            <option value='fr/language.types.object.php'>French</option>
            <option value='it/language.types.object.php'>Italian</option>
            <option value='ja/language.types.object.php'>Japanese</option>
            <option value='pt_BR/language.types.object.php'>Brazilian Portuguese</option>
            <option value='ru/language.types.object.php'>Russian</option>
            <option value='tr/language.types.object.php'>Turkish</option>
            <option value='uk/language.types.object.php'>Ukrainian</option>
            <option value='zh/language.types.object.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.types.object" class="sect1">
 <h2 class="title">Objects</h2>

 <div class="sect2" id="language.types.object.init">
  <h3 class="title">Object Initialization</h3>

  <p class="para">
   To create a new <span class="type"><a href="language.types.object.php" class="type object">object</a></span>, use the <code class="literal">new</code> statement
   to instantiate a class:
  </p>

  <div class="example" id="example-104">
   <p><strong>Example #1 Object Construction</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">foo<br /></span><span style="color: #007700">{<br />    function </span><span style="color: #0000BB">do_foo</span><span style="color: #007700">()<br />    {<br />        echo </span><span style="color: #DD0000">"Doing foo."</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$bar </span><span style="color: #007700">= new </span><span style="color: #0000BB">foo</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$bar</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">do_foo</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

  <p class="simpara">
   For a full discussion, see the
   <a href="language.oop5.php" class="link">Classes and Objects</a> chapter.
  </p>

 </div>

 <div class="sect2" id="language.types.object.casting">
  <h3 class="title">Converting to object</h3>

  <p class="para">
   If an <span class="type"><a href="language.types.object.php" class="type object">object</a></span> is converted to an <span class="type"><a href="language.types.object.php" class="type object">object</a></span>, it is not
   modified. If a value of any other type is converted to an
   <span class="type"><a href="language.types.object.php" class="type object">object</a></span>, a new instance of the <span class="classname"><a href="class.stdclass.php" class="classname">stdClass</a></span>
   built-in class is created. If the value was <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, the new instance will be
   empty. An <span class="type"><a href="language.types.array.php" class="type array">array</a></span> converts to an <span class="type"><a href="language.types.object.php" class="type object">object</a></span> with properties
   named by keys and corresponding values. Note that in this case before PHP 7.2.0 numeric keys
   have been inaccessible unless iterated.
  </p>

  <div class="example" id="example-105">
   <p><strong>Example #2 Casting to an Object</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$obj </span><span style="color: #007700">= (object) array(</span><span style="color: #DD0000">'1' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'foo'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;{</span><span style="color: #DD0000">'1'</span><span style="color: #007700">})); </span><span style="color: #FF8000">// outputs 'bool(true)'<br /><br />// Deprecated as of PHP 8.1<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">key</span><span style="color: #007700">(</span><span style="color: #0000BB">$obj</span><span style="color: #007700">)); </span><span style="color: #FF8000">// outputs 'string(1) "1"'<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

  <p class="para">
   For any other value, a member variable named <code class="literal">scalar</code> will contain
   the value.
  </p>

  <div class="example" id="example-106">
   <p><strong>Example #3 <code class="literal">(object)</code> cast</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$obj </span><span style="color: #007700">= (object) </span><span style="color: #DD0000">'ciao'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scalar</span><span style="color: #007700">;  </span><span style="color: #FF8000">// outputs 'ciao'<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/types/object.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.types.object%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.types.object&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.types.object.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107071">  <div class="votes">
    <div id="Vu107071">
    <a href="/manual/vote-note.php?id=107071&amp;page=language.types.object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107071">
    <a href="/manual/vote-note.php?id=107071&amp;page=language.types.object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107071" title="74% like this...">
    694
    </div>
  </div>
  <a href="#107071" class="name">
  <strong class="user"><em>helpful at stranger dot com</em></strong></a><a class="genanchor" href="#107071"> &para;</a><div class="date" title="2012-01-04 01:15"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107071">
<div class="phpcode"><code><span class="html">By far the easiest and correct way to instantiate an empty generic php object that you can then modify for whatever purpose you choose:
<br />
<br /><span class="default">&lt;?php $genericObject </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">(); </span><span class="default">?&gt;
<br /></span>
<br />I had the most difficult time finding this, hopefully it will help someone else!</span></code></div>
  </div>
 </div>
  <div class="note" id="118679">  <div class="votes">
    <div id="Vu118679">
    <a href="/manual/vote-note.php?id=118679&amp;page=language.types.object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118679">
    <a href="/manual/vote-note.php?id=118679&amp;page=language.types.object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118679" title="67% like this...">
    245
    </div>
  </div>
  <a href="#118679" class="name">
  <strong class="user"><em>Anthony</em></strong></a><a class="genanchor" href="#118679"> &para;</a><div class="date" title="2016-01-18 10:36"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118679">
<div class="phpcode"><code><span class="html">In PHP 7 there are a few ways to create an empty object:<br /><br /><span class="default">&lt;?php<br />$obj1 </span><span class="keyword">= new </span><span class="default">\stdClass</span><span class="keyword">; </span><span class="comment">// Instantiate stdClass object<br /></span><span class="default">$obj2 </span><span class="keyword">= new class{}; </span><span class="comment">// Instantiate anonymous class<br /></span><span class="default">$obj3 </span><span class="keyword">= (object)[]; </span><span class="comment">// Cast empty array to object<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$obj1</span><span class="keyword">); </span><span class="comment">// object(stdClass)#1 (0) {}<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$obj2</span><span class="keyword">); </span><span class="comment">// object(class@anonymous)#2 (0) {}<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$obj3</span><span class="keyword">); </span><span class="comment">// object(stdClass)#3 (0) {}<br /></span><span class="default">?&gt;<br /></span><br />$obj1 and $obj3 are the same type, but $obj1 !== $obj3. Also, all three will json_encode() to a simple JS object {}:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">json_encode</span><span class="keyword">([<br />    new </span><span class="default">\stdClass</span><span class="keyword">,<br />    new class{},<br />    (object)[],<br />]);<br /></span><span class="default">?&gt;<br /></span><br />Outputs: [{},{},{}]</span></code></div>
  </div>
 </div>
  <div class="note" id="117149">  <div class="votes">
    <div id="Vu117149">
    <a href="/manual/vote-note.php?id=117149&amp;page=language.types.object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117149">
    <a href="/manual/vote-note.php?id=117149&amp;page=language.types.object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117149" title="55% like this...">
    42
    </div>
  </div>
  <a href="#117149" class="name">
  <strong class="user"><em>twitter/matt2000</em></strong></a><a class="genanchor" href="#117149"> &para;</a><div class="date" title="2015-04-21 09:28"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117149">
<div class="phpcode"><code><span class="html">As of PHP 5.4, we can create stdClass objects with some properties and values using the more beautiful form:<br /><br /><span class="default">&lt;?php<br />  $object </span><span class="keyword">= (object) [<br />    </span><span class="string">'propertyOne' </span><span class="keyword">=&gt; </span><span class="string">'foo'</span><span class="keyword">,<br />    </span><span class="string">'propertyTwo' </span><span class="keyword">=&gt; </span><span class="default">42</span><span class="keyword">,<br />  ];<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114442">  <div class="votes">
    <div id="Vu114442">
    <a href="/manual/vote-note.php?id=114442&amp;page=language.types.object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114442">
    <a href="/manual/vote-note.php?id=114442&amp;page=language.types.object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114442" title="55% like this...">
    46
    </div>
  </div>
  <a href="#114442" class="name">
  <strong class="user"><em>Ashley Dambra</em></strong></a><a class="genanchor" href="#114442"> &para;</a><div class="date" title="2014-02-21 06:38"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114442">
<div class="phpcode"><code><span class="html">Here a new updated version of 'stdObject' class. It's very useful when extends to controller on MVC design pattern, user can create it's own class.<br /><br />Hope it help you.<br /><br /> <span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">stdObject </span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">(array </span><span class="default">$arguments </span><span class="keyword">= array()) {<br />        if (!empty(</span><span class="default">$arguments</span><span class="keyword">)) {<br />            foreach (</span><span class="default">$arguments </span><span class="keyword">as </span><span class="default">$property </span><span class="keyword">=&gt; </span><span class="default">$argument</span><span class="keyword">) {<br />                </span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$property</span><span class="keyword">} = </span><span class="default">$argument</span><span class="keyword">;<br />            }<br />        }<br />    }<br /><br />    public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$method</span><span class="keyword">, </span><span class="default">$arguments</span><span class="keyword">) {<br />        </span><span class="default">$arguments </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(array(</span><span class="string">"stdObject" </span><span class="keyword">=&gt; </span><span class="default">$this</span><span class="keyword">), </span><span class="default">$arguments</span><span class="keyword">); </span><span class="comment">// Note: method argument 0 will always referred to the main class ($this).<br />        </span><span class="keyword">if (isset(</span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$method</span><span class="keyword">}) &amp;&amp; </span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$method</span><span class="keyword">})) {<br />            return </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$method</span><span class="keyword">}, </span><span class="default">$arguments</span><span class="keyword">);<br />        } else {<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Fatal error: Call to undefined method stdObject::</span><span class="keyword">{</span><span class="default">$method</span><span class="keyword">}</span><span class="string">()"</span><span class="keyword">);<br />        }<br />    }<br />}<br /><br /></span><span class="comment">// Usage.<br /><br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">stdObject</span><span class="keyword">();<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">= </span><span class="string">"Nick"</span><span class="keyword">;<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">surname </span><span class="keyword">= </span><span class="string">"Doe"</span><span class="keyword">;<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">age </span><span class="keyword">= </span><span class="default">20</span><span class="keyword">;<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">adresse </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">getInfo </span><span class="keyword">= function(</span><span class="default">$stdObject</span><span class="keyword">) { </span><span class="comment">// $stdObject referred to this object (stdObject).<br />    </span><span class="keyword">echo </span><span class="default">$stdObject</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">. </span><span class="string">" " </span><span class="keyword">. </span><span class="default">$stdObject</span><span class="keyword">-&gt;</span><span class="default">surname </span><span class="keyword">. </span><span class="string">" have " </span><span class="keyword">. </span><span class="default">$stdObject</span><span class="keyword">-&gt;</span><span class="default">age </span><span class="keyword">. </span><span class="string">" yrs old. And live in " </span><span class="keyword">. </span><span class="default">$stdObject</span><span class="keyword">-&gt;</span><span class="default">adresse</span><span class="keyword">;<br />};<br /><br /></span><span class="default">$func </span><span class="keyword">= </span><span class="string">"setAge"</span><span class="keyword">;<br /></span><span class="default">$obj</span><span class="keyword">-&gt;{</span><span class="default">$func</span><span class="keyword">} = function(</span><span class="default">$stdObject</span><span class="keyword">, </span><span class="default">$age</span><span class="keyword">) { </span><span class="comment">// $age is the first parameter passed when calling this method.<br />    </span><span class="default">$stdObject</span><span class="keyword">-&gt;</span><span class="default">age </span><span class="keyword">= </span><span class="default">$age</span><span class="keyword">;<br />};<br /><br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">setAge</span><span class="keyword">(</span><span class="default">24</span><span class="keyword">); </span><span class="comment">// Parameter value 24 is passing to the $age argument in method 'setAge()'.<br /><br />// Create dynamic method. Here i'm generating getter and setter dynimically<br />// Beware: Method name are case sensitive.<br /></span><span class="keyword">foreach (</span><span class="default">$obj </span><span class="keyword">as </span><span class="default">$func_name </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />    if (!</span><span class="default">$value </span><span class="keyword">instanceOf </span><span class="default">Closure</span><span class="keyword">) {<br /><br />        </span><span class="default">$obj</span><span class="keyword">-&gt;{</span><span class="string">"set" </span><span class="keyword">. </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$func_name</span><span class="keyword">)} = function(</span><span class="default">$stdObject</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) use (</span><span class="default">$func_name</span><span class="keyword">) {  </span><span class="comment">// Note: you can also use keyword 'use' to bind parent variables.<br />            </span><span class="default">$stdObject</span><span class="keyword">-&gt;{</span><span class="default">$func_name</span><span class="keyword">} = </span><span class="default">$value</span><span class="keyword">;<br />        };<br /><br />        </span><span class="default">$obj</span><span class="keyword">-&gt;{</span><span class="string">"get" </span><span class="keyword">. </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$func_name</span><span class="keyword">)} = function(</span><span class="default">$stdObject</span><span class="keyword">) use (</span><span class="default">$func_name</span><span class="keyword">) {  </span><span class="comment">// Note: you can also use keyword 'use' to bind parent variables.<br />            </span><span class="keyword">return </span><span class="default">$stdObject</span><span class="keyword">-&gt;{</span><span class="default">$func_name</span><span class="keyword">};<br />        };<br /><br />    }<br />}<br /><br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">setName</span><span class="keyword">(</span><span class="string">"John"</span><span class="keyword">);<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">setAdresse</span><span class="keyword">(</span><span class="string">"Boston"</span><span class="keyword">);<br /><br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">getInfo</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118979">  <div class="votes">
    <div id="Vu118979">
    <a href="/manual/vote-note.php?id=118979&amp;page=language.types.object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118979">
    <a href="/manual/vote-note.php?id=118979&amp;page=language.types.object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118979" title="54% like this...">
    20
    </div>
  </div>
  <a href="#118979" class="name">
  <strong class="user"><em>developer dot amankr at gmail dot com  (Aman  Kuma)</em></strong></a><a class="genanchor" href="#118979"> &para;</a><div class="date" title="2016-03-11 10:27"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118979">
<div class="phpcode"><code><span class="html">&lt;!--Example shows how to convert array to stdClass Object and how to access its value for display --&gt;<br /><span class="default">&lt;?php <br />$num </span><span class="keyword">= array(</span><span class="string">"Garha"</span><span class="keyword">,</span><span class="string">"sitamarhi"</span><span class="keyword">,</span><span class="string">"canada"</span><span class="keyword">,</span><span class="string">"patna"</span><span class="keyword">); </span><span class="comment">//create an array<br /></span><span class="default">$obj </span><span class="keyword">= (object)</span><span class="default">$num</span><span class="keyword">; </span><span class="comment">//change array to stdClass object <br /><br /></span><span class="keyword">echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">); </span><span class="comment">//stdClass Object created by casting of array <br /><br /></span><span class="default">$newobj </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">();</span><span class="comment">//create a new <br /></span><span class="default">$newobj</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">= </span><span class="string">"India"</span><span class="keyword">;<br /></span><span class="default">$newobj</span><span class="keyword">-&gt;</span><span class="default">work </span><span class="keyword">= </span><span class="string">"Development"</span><span class="keyword">;<br /></span><span class="default">$newobj</span><span class="keyword">-&gt;</span><span class="default">address</span><span class="keyword">=</span><span class="string">"patna"</span><span class="keyword">;<br /><br /></span><span class="default">$new </span><span class="keyword">= (array)</span><span class="default">$newobj</span><span class="keyword">;</span><span class="comment">//convert stdClass to array<br /></span><span class="keyword">echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">); </span><span class="comment">//print new object<br /><br />##How deals with Associative Array<br /><br /></span><span class="default">$test </span><span class="keyword">= [</span><span class="default">Details</span><span class="keyword">=&gt;[</span><span class="string">'name'</span><span class="keyword">,</span><span class="string">'roll number'</span><span class="keyword">,</span><span class="string">'college'</span><span class="keyword">,</span><span class="string">'mobile'</span><span class="keyword">],</span><span class="default">values</span><span class="keyword">=&gt;[</span><span class="string">'Naman Kumar'</span><span class="keyword">,</span><span class="string">'100790310868'</span><span class="keyword">,</span><span class="string">'Pune college'</span><span class="keyword">,</span><span class="string">'9988707202'</span><span class="keyword">]];<br /></span><span class="default">$val </span><span class="keyword">= </span><span class="default">json_decode</span><span class="keyword">(</span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">),</span><span class="default">false</span><span class="keyword">);</span><span class="comment">//convert array into stdClass object<br /><br /></span><span class="keyword">echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">);<br /><br />echo ((</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) == </span><span class="default">true </span><span class="keyword">?  </span><span class="default">1 </span><span class="keyword">: </span><span class="default">0 </span><span class="keyword">) == </span><span class="default">1 </span><span class="keyword">? </span><span class="string">"array" </span><span class="keyword">: </span><span class="string">"not an array" </span><span class="keyword">).</span><span class="string">"&lt;/br&gt;"</span><span class="keyword">; </span><span class="comment">// check whether it is array or not<br /></span><span class="keyword">echo ((</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) == </span><span class="default">true </span><span class="keyword">?  </span><span class="default">1 </span><span class="keyword">: </span><span class="default">0 </span><span class="keyword">) == </span><span class="default">1 </span><span class="keyword">? </span><span class="string">"object" </span><span class="keyword">: </span><span class="string">"not an object" </span><span class="keyword">);</span><span class="comment">//check whether it is object or not <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107755">  <div class="votes">
    <div id="Vu107755">
    <a href="/manual/vote-note.php?id=107755&amp;page=language.types.object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107755">
    <a href="/manual/vote-note.php?id=107755&amp;page=language.types.object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107755" title="51% like this...">
    4
    </div>
  </div>
  <a href="#107755" class="name">
  <strong class="user"><em>qeremy [atta] gmail [dotta] com</em></strong></a><a class="genanchor" href="#107755"> &para;</a><div class="date" title="2012-03-02 12:41"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107755">
<div class="phpcode"><code><span class="html">Do you remember some JavaScript implementations?<br /><br />// var timestamp = (new Date).getTime();<br /><br />Now it's possible with PHP 5.4.*;<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo<br /></span><span class="keyword">{<br />    public </span><span class="default">$a </span><span class="keyword">= </span><span class="string">"I'm a!"</span><span class="keyword">;<br />    public </span><span class="default">$b </span><span class="keyword">= </span><span class="string">"I'm b!"</span><span class="keyword">;<br />    public </span><span class="default">$c</span><span class="keyword">;<br />    <br />    public function </span><span class="default">getB</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">b</span><span class="keyword">;<br />    }<br />    <br />    public function </span><span class="default">setC</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">c </span><span class="keyword">= </span><span class="default">$c</span><span class="keyword">;<br />        return </span><span class="default">$this</span><span class="keyword">;<br />    }<br />    <br />    public function </span><span class="default">getC</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">c</span><span class="keyword">;<br />    }<br />}<br /><br />print (new </span><span class="default">Foo</span><span class="keyword">)-&gt;</span><span class="default">a</span><span class="keyword">;      </span><span class="comment">// I'm a!<br /></span><span class="keyword">print (new </span><span class="default">Foo</span><span class="keyword">)-&gt;</span><span class="default">getB</span><span class="keyword">(); </span><span class="comment">// I'm b!<br /></span><span class="default">?&gt;<br /></span><br />or<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// $_GET["c"] = "I'm c!";<br /></span><span class="keyword">print (new </span><span class="default">Foo</span><span class="keyword">)<br />       -&gt;</span><span class="default">setC</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">"c"</span><span class="keyword">])<br />       -&gt;</span><span class="default">getC</span><span class="keyword">(); </span><span class="comment">// I'm c!<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95211">  <div class="votes">
    <div id="Vu95211">
    <a href="/manual/vote-note.php?id=95211&amp;page=language.types.object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95211">
    <a href="/manual/vote-note.php?id=95211&amp;page=language.types.object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95211" title="51% like this...">
    7
    </div>
  </div>
  <a href="#95211" class="name">
  <strong class="user"><em>mailto dot aurelian at gmail dot com</em></strong></a><a class="genanchor" href="#95211"> &para;</a><div class="date" title="2009-12-18 09:56"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95211">
<div class="phpcode"><code><span class="html">You can create [recursive] objects with something like:<br /><span class="default">&lt;?php<br />  $literalObjectDeclared </span><span class="keyword">= (object) array(<br />     </span><span class="string">'foo' </span><span class="keyword">=&gt; (object) array(<br />          </span><span class="string">'bar' </span><span class="keyword">=&gt; </span><span class="string">'baz'</span><span class="keyword">,<br />          </span><span class="string">'pax' </span><span class="keyword">=&gt; </span><span class="string">'vax'<br />      </span><span class="keyword">),<br />      </span><span class="string">'moo' </span><span class="keyword">=&gt; </span><span class="string">'ui'<br />   </span><span class="keyword">);<br />print </span><span class="default">$literalObjectDeclared</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">; </span><span class="comment">// outputs "baz"!<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85237">  <div class="votes">
    <div id="Vu85237">
    <a href="/manual/vote-note.php?id=85237&amp;page=language.types.object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85237">
    <a href="/manual/vote-note.php?id=85237&amp;page=language.types.object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85237" title="50% like this...">
    1
    </div>
  </div>
  <a href="#85237" class="name">
  <strong class="user"><em>Mithras</em></strong></a><a class="genanchor" href="#85237"> &para;</a><div class="date" title="2008-08-21 06:54"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85237">
<div class="phpcode"><code><span class="html">In response to harmor: if an array contains another array as a value, you can recursively convert all arrays with:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">arrayToObject</span><span class="keyword">( </span><span class="default">$array </span><span class="keyword">){<br />  foreach( </span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value </span><span class="keyword">){<br />    if( </span><span class="default">is_array</span><span class="keyword">( </span><span class="default">$value </span><span class="keyword">) ) </span><span class="default">$array</span><span class="keyword">[ </span><span class="default">$key </span><span class="keyword">] = </span><span class="default">arrayToObject</span><span class="keyword">( </span><span class="default">$value </span><span class="keyword">);<br />  }<br />  return (object) </span><span class="default">$array</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.types.object&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.types.object.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.types.php">Types</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.types.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="language.types.type-system.php" title="Type System">Type System</a>
                        </li>
                                                <li class="">
                            <a href="language.types.null.php" title="NULL">NULL</a>
                        </li>
                                                <li class="">
                            <a href="language.types.boolean.php" title="Booleans">Booleans</a>
                        </li>
                                                <li class="">
                            <a href="language.types.integer.php" title="Integers">Integers</a>
                        </li>
                                                <li class="">
                            <a href="language.types.float.php" title="Floating point numbers">Floating point numbers</a>
                        </li>
                                                <li class="">
                            <a href="language.types.string.php" title="Strings">Strings</a>
                        </li>
                                                <li class="">
                            <a href="language.types.numeric-strings.php" title="Numeric strings">Numeric strings</a>
                        </li>
                                                <li class="">
                            <a href="language.types.array.php" title="Arrays">Arrays</a>
                        </li>
                                                <li class="current">
                            <a href="language.types.object.php" title="Objects">Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.types.enumerations.php" title="Enumerations">Enumerations</a>
                        </li>
                                                <li class="">
                            <a href="language.types.resource.php" title="Resources">Resources</a>
                        </li>
                                                <li class="">
                            <a href="language.types.callable.php" title="Callbacks / Callables">Callbacks / Callables</a>
                        </li>
                                                <li class="">
                            <a href="language.types.mixed.php" title="Mixed">Mixed</a>
                        </li>
                                                <li class="">
                            <a href="language.types.void.php" title="Void">Void</a>
                        </li>
                                                <li class="">
                            <a href="language.types.never.php" title="Never">Never</a>
                        </li>
                                                <li class="">
                            <a href="language.types.relative-class-types.php" title="Relative class types">Relative class types</a>
                        </li>
                                                <li class="">
                            <a href="language.types.singleton.php" title="Singleton types">Singleton types</a>
                        </li>
                                                <li class="">
                            <a href="language.types.iterable.php" title="Iterables">Iterables</a>
                        </li>
                                                <li class="">
                            <a href="language.types.declarations.php" title="Type declarations">Type declarations</a>
                        </li>
                                                <li class="">
                            <a href="language.types.type-juggling.php" title="Type Juggling">Type Juggling</a>
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
